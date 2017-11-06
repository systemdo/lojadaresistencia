<?php
class ModelExtensionShippingCorreios extends Model {
	
	private $peso_min = 0.3;// em kg
	private $comp_min = 16;	// em cm
	private $larg_min = 11; // em cm
	private $altu_min = 2; 	// em cm
	
	private $url = '';
	
	private $quote_data = array();
	
	private $cep_destino;
	private $cep_origem;
	
	private $max_peso;
	private $max_cubagem;
	private $min_cubagem;
	private $max_lado;
	
	private $codigo;
	
	private $contrato_codigo = '';
	private $contrato_senha = '';

	private $mensagem_erro = array();
	
	private $total_compra;	
	
	// função responsável pelo retorno à loja dos valores finais dos valores dos fretes
	public function getQuote($address) {
		
		$this->load->language('extension/shipping/correios');
		
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$this->config->get('shipping_correios_geo_zone_id') . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");
		
		if (!$this->config->get('shipping_correios_geo_zone_id')) {
			$status = true;
		} elseif ($query->num_rows) {
			$status = true;
		} else {
			$status = false;
		}		
		
		$method_data = array();

		$produtos = $this->removeProdutosSemFrete($this->cart->getProducts());
		
		$correios_servicos = $this->config->get('shipping_correios_servicos');

		if ($status && !empty($correios_servicos) && !empty($produtos)) {
			
			$this->cep_destino = preg_replace ("/[^0-9]/", '', $address['postcode']);
			$this->total_compra = $this->cart->getSubTotal();
			
			foreach($correios_servicos as $servico_info){
				
				$this->cep_origem = preg_replace ("/[^0-9]/", '', $servico_info['postcode']);
				$this->contrato_codigo = $servico_info['contrato_codigo'];
				$this->contrato_senha = $servico_info['contrato_senha'];				
				$this->max_peso = $servico_info['max_peso'];
				$this->max_cubagem = pow(($servico_info['max_soma_lados'] / 3), 3);
				$this->min_cubagem = pow(($servico_info['min_soma_lados'] / 3), 3);
				$this->max_lado = $servico_info['max_lado'];
				$this->codigo = $servico_info['codigo'];
				
				$caixas = $this->organizarEmCaixas($produtos);
				
				// descomente a linha abaixo para visualizar em arquivos as caixas
				// file_put_contents('filename' . $servico_info['codigo'] . '.txt', print_r($caixas, true));
				
				foreach ($caixas as $caixa) {
					$this->setQuoteData($caixa, $servico_info);
				}
			}
			
			// ajustes finais
			if ($this->quote_data) {
				$method_data = array(
					'code'       => 'correios',
					'title'      => $this->language->get('text_title'),
					'quote'      => $this->quote_data,
					'sort_order' => $this->config->get('shipping_correios_sort_order'),
					'error'      => false
				);
			}
			else if(!empty($this->mensagem_erro)){
				$method_data = array(
					'code'       => 'correios',
					'title'      => $this->language->get('text_title'),
					'quote'      => $this->quote_data,
					'sort_order' => $this->config->get('shipping_correios_sort_order'),
					'error'      => implode('<br />', $this->mensagem_erro)
				);				
			}			
		}
		return $method_data;
	}
	
	// obtém os dados dos fretes para os produtos da caixa
	private function setQuoteData($caixa, $servico_info){

		// obtém o valor total da caixa
		$total_caixa = $this->getTotalCaixa($caixa['produtos']);
		
		if ($total_caixa < (float)$servico_info['min_declarado']) {
			$total_caixa =  $servico_info['min_declarado'];
		}
		
		if ($total_caixa > (float)$servico_info['max_declarado']) {
			$total_caixa = $servico_info['max_declarado'];
		} 
		
		// fazendo a chamada ao site dos Correios e obtendo os dados
		$servicos = $this->getServicos($total_caixa, $caixa['peso'], $caixa['cubagem']);
	
		foreach ($servicos as $servico) {

			$valor_frete_sem_adicionais = $servico['Valor'] - $servico['ValorAvisoRecebimento'] - $servico['ValorMaoPropria'] - $servico['ValorValorDeclarado'];

			// o site dos Correios retornou os dados sem erros.
			if($valor_frete_sem_adicionais > 0) {
				
				// serviço a cobrar não soma o frete ao pedido. Também verifica se atingiu o valor para frete grátis
				$frete_gratis = (!empty($servico_info['total']) && $this->total_compra >= $servico_info['total']) ? true : false;
				
				if((int)$servico_info['a_cobrar'] || $frete_gratis) {
					$cost = 0;
				} else {
					// subtrai do valor do frete as opções desabilitadas nas configurações do módulo
					$cost = (!$servico_info['declarar_valor']) ? ($servico['Valor'] - $servico['ValorValorDeclarado']) : $servico['Valor'];
					$cost = (!$servico_info['aviso_recebimento']) ? ($cost - $servico['ValorAvisoRecebimento']) : $cost;
					$cost = (!$servico_info['mao_propria']) ? ($cost - $servico['ValorMaoPropria']) : $cost;

					$adicional = (is_numeric($servico_info['adicional'])) ? $servico_info['adicional'] : 0;
					$cost = $cost + ($cost * ($adicional / 100));
				}
				
				// o valor do frete para a caixa atual é somado ao valor total já calculado para outras caixas 
				if (isset($this->quote_data[$servico['Codigo']])) {
					$cost += $this->quote_data[$servico['Codigo']]['cost'];
				}

				// obtendo o prazo adicional a ser somado com o dos Correios
				$prazo_adicional = (is_numeric($servico_info['prazo_adicional'])) ? $servico_info['prazo_adicional'] : 0 ;						

				$title = $servico_info['nome'] . ' - ' . sprintf($this->language->get('text_prazo_estimado'), ($servico['PrazoEntrega'] + $prazo_adicional));
				
				if (version_compare(VERSION, '2.2') < 0) {
					$text = $this->currency->format($this->tax->calculate($cost, $this->config->get('shipping_correios_tax_class_id'), $this->config->get('config_tax')));
				} else {
					$text = $this->currency->format($this->tax->calculate($cost, $this->config->get('shipping_correios_tax_class_id'), $this->config->get('config_tax')), $this->session->data['currency']);
				}
				
				if($frete_gratis) {
					$text = $this->language->get('text_free');
				}
	
				$this->quote_data[$servico['Codigo']] = array(
					'code'         => 'correios.' . $servico['Codigo'],
					'title'        => $title,
					'cost'         => $cost,
					'tax_class_id' => $this->config->get('shipping_correios_tax_class_id'),
					'text'         => $text
				);
			}
			// grava no log de erros do OpenCart a mensagem de erro retornado pelos Correios
			else{
				$this->mensagem_erro[] = $servico_info['nome'] . ': ' . $servico['MsgErro'];
				$this->log->write($servico_info['nome'] . ': ' . $servico['MsgErro']);
			}
		}
	}
	
	// prepara a url de chamada ao site dos Correios
	private function setUrl($peso, $valor, $medida_lados){
		
		$url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";
		//$url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.asmx/CalcPrecoPrazo?"; // url alternativa disponibilizada pelos Correios.
		$url .=	"nCdEmpresa=" . $this->contrato_codigo;
		$url .=	"&sDsSenha=" . $this->contrato_senha;
		$url .=	"&sCepOrigem=%s";
		$url .=	"&sCepDestino=%s";
		$url .=	"&nVlPeso=%s";
		$url .=	"&nCdFormato=1";
		$url .=	"&nVlComprimento=%s";
		$url .=	"&nVlLargura=%s";
		$url .=	"&nVlAltura=%s";
		$url .=	"&sCdMaoPropria=s";
		$url .=	"&nVlValorDeclarado=%s";
		$url .=	"&sCdAvisoRecebimento=s";
		$url .=	"&nCdServico=" . $this->codigo;
		$url .=	"&nVlDiametro=0";
		$url .=	"&StrRetorno=xml";
		
		$comp = ($medida_lados < $this->comp_min) ? $this->comp_min : $medida_lados;
		$larg = ($medida_lados < $this->larg_min) ? $this->larg_min : $medida_lados;
		$altu = ($medida_lados < $this->altu_min) ? $this->altu_min : $medida_lados;
		
		$this->url = sprintf($url, $this->cep_origem, $this->cep_destino, $peso, $comp, $larg, $altu, $valor);
	}
	
	// conecta ao sites dos Correios e obtém o arquivo XML com os dados do frete
	private function getXML($url){
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);			
		
		$result = curl_exec($ch);
		
		if(!$result){
			$this->log->write(curl_error($ch));
			$this->log->write($this->language->get('error_conexao'));
			$result = curl_exec($ch);
			
			if($result){
				$this->log->write($this->language->get('text_sucesso'));
			}
			else{
				$this->log->write(curl_error($ch));
				$this->log->write($this->language->get('error_reconexao'));
				$this->mensagem_erro[] = $this->language->get('error_reconexao');
			}
		}
		
		curl_close($ch);
		
		$result = str_replace('&amp;lt;sup&amp;gt;&amp;amp;reg;&amp;lt;/sup&amp;gt;', '', $result);
		$result = str_replace('&amp;lt;sup&amp;gt;&amp;amp;trade;&amp;lt;/sup&amp;gt;', '', $result);
		$result = str_replace('**', '', $result);
		$result = str_replace("\r\n", '', $result);
		$result = str_replace('\"', '"', $result);		
		
		return $result;
	}
	
	// faz a chamada e lê os dados no arquivo XML retornado pelos Correios 
	public function getServicos($total_caixa, $peso, $cubagem){

		$dados = array();
		
		// troca o separador decimal de ponto para vírgula nos dados a serem enviados para os Correios
		$peso = ($peso >= $this->peso_min) ? $peso : $this->peso_min;
		$peso = str_replace('.', ',', $peso);
		
		// total é arredondado pois algumas vezes o WebService dos Correios não aceita centavos
		$valor = round($total_caixa);
		
		// medida dos lados da caixa é a raiz cúbica da cubagem
		$medida_lados = ($cubagem >= $this->min_cubagem) ? $this->raizCubica($cubagem) : $this->raizCubica($this->min_cubagem);
		$medida_lados = str_replace('.', ',', $medida_lados);
		
		// ajusta a url de chamada
		$this->setUrl($peso, $valor, $medida_lados);
		
		// habilite pra ver no log de erros a url com todos os parâmetros enviados para os Correios.
		// $this->log->write($this->url);		

		// faz a chamada e retorna o xml com os dados
		$xml = $this->getXML($this->url);

		// lendo o xml
		if ($xml) {
			$dom = new DOMDocument('1.0', 'ISO-8859-1');
			$dom->loadXml($xml);
			
			$servicos = $dom->getElementsByTagName('cServico');
			
			if ($servicos) {
				foreach ($servicos as $servico) {
					$codigo = $servico->getElementsByTagName('Codigo')->item(0)->nodeValue;
					
					$dados[$codigo] = array(
						"Codigo" => $codigo,
						"Valor" => str_replace(',', '.', $servico->getElementsByTagName('Valor')->item(0)->nodeValue),
						"PrazoEntrega" => ($servico->getElementsByTagName('PrazoEntrega')->item(0)->nodeValue),
						"Erro" => $servico->getElementsByTagName('Erro')->item(0)->nodeValue,
						"MsgErro" => $servico->getElementsByTagName('MsgErro')->item(0)->nodeValue,
						"ValorMaoPropria" => (isset($servico->getElementsByTagName('ValorMaoPropria')->item(0)->nodeValue)) ? str_replace(',', '.', $servico->getElementsByTagName('ValorMaoPropria')->item(0)->nodeValue) : 0,
						"ValorAvisoRecebimento" => (isset($servico->getElementsByTagName('ValorAvisoRecebimento')->item(0)->nodeValue)) ? str_replace(',', '.', $servico->getElementsByTagName('ValorAvisoRecebimento')->item(0)->nodeValue) : 0,
						"ValorValorDeclarado" => (isset($servico->getElementsByTagName('ValorValorDeclarado')->item(0)->nodeValue)) ? str_replace(',', '.', $servico->getElementsByTagName('ValorValorDeclarado')->item(0)->nodeValue) : 0
					);
				}
			}
		}
		return $dados;
	}

	// retorna a dimensão em centímetros
	private function getDimensaoEmCm($unidade_id, $dimensao){
		
		if(is_numeric($dimensao)){
			$length_class_product_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "length_class mc LEFT JOIN " . DB_PREFIX . "length_class_description mcd ON (mc.length_class_id = mcd.length_class_id) WHERE mcd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND mc.length_class_id =  '" . (int)$unidade_id . "'");
			
			if(isset($length_class_product_query->row['unit'])){
				if($length_class_product_query->row['unit'] == 'mm'){
					return $dimensao / 10;
				}		
			}
		}
		return $dimensao;
	}
	
	// retorna o peso em quilogramas
	private function getPesoEmKg($unidade_id, $peso){
		
		if(is_numeric($peso)) {
			$weight_class_product_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "weight_class wc LEFT JOIN " . DB_PREFIX . "weight_class_description wcd ON (wc.weight_class_id = wcd.weight_class_id) WHERE wcd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND wc.weight_class_id =  '" . (int)$unidade_id . "'");
			
			if(isset($weight_class_product_query->row['unit'])){
				if($weight_class_product_query->row['unit'] == 'g'){
					return ($peso / 1000);
				}		
			}
		}
		return $peso;
	}	
	
	// pré-validação das dimensões e peso do produto 
  	private function validar($produto){
		
		if (empty($produto['height'])) { $produto['height'] = $this->altu_min; }
		if (empty($produto['width'])) { $produto['width'] = $this->larg_min; }
		if (empty($produto['length'])) { $produto['length'] = $this->comp_min; }	
		if (empty($produto['weight'])) { $produto['weight'] = $this->peso_min; }		
		
		$cubagem = (float)$produto['height'] * (float)$produto['width'] * (float)$produto['length'];
		
		if($produto['weight'] > $this->max_peso || $cubagem > $this->max_cubagem || $produto['height'] > $this->max_lado || $produto['width'] > $this->max_lado || $produto['length'] > $this->max_lado){
			$this->log->write(sprintf($this->language->get('error_limites'), $produto['name']));
			
			return false;
		}
 	
  		return true;
  	}
  	
    // 'empacota' os produtos do carrinho em caixas conforme peso, cubagem e dimensões limites dos Correios
  	private function organizarEmCaixas($produtos) {
  	
  		$caixas = array();
  	
  		foreach ($produtos as $prod) {
  	
  			$prod_copy = $prod;
  	
  			// muda-se a quantidade do produto para incrementá-la em cada caixa
  			$prod_copy['quantity'] = 1;
  			
  			// todas as dimensões da caixa serão em cm e kg
  			$prod_copy['width']	= $this->getDimensaoEmCm($prod_copy['length_class_id'], $prod_copy['width']);
  			$prod_copy['height']= $this->getDimensaoEmCm($prod_copy['length_class_id'], $prod_copy['height']);
  			$prod_copy['length']= $this->getDimensaoEmCm($prod_copy['length_class_id'], $prod_copy['length']);
  			
  			// O peso do produto não é unitário como a dimensão. É multiplicado pela quantidade. Se quisermos o peso unitário, teremos que dividir pela quantidade.
  			$prod_copy['weight']= $this->getPesoEmKg($prod_copy['weight_class_id'], $prod_copy['weight'])/$prod['quantity'];
  			
  			$prod_copy['length_class_id'] = $this->config->get('config_length_class_id');
  			$prod_copy['weight_class_id'] = $this->config->get('config_weight_class_id');
  	
  			$cx_num = 0;
  	
  			for ($i = 1; $i <= $prod['quantity']; $i++) {
  	
  				// valida as dimensões do produto com as dos Correios
  				if ($this->validar($prod_copy)){
  					 
   					// cria-se a caixa caso ela não exista.
					isset($caixas[$cx_num]['peso']) ? true : $caixas[$cx_num]['peso'] = 0;
					isset($caixas[$cx_num]['cubagem']) ? true : $caixas[$cx_num]['cubagem'] = 0;					
  	
  					$peso = $caixas[$cx_num]['peso'] + $prod_copy['weight'];
					$cubagem = $caixas[$cx_num]['cubagem'] + ($prod_copy['width'] * $prod_copy['height'] * $prod_copy['length']);
					
 					$peso_dentro_limite = ($peso <= $this->max_peso);
					$cubagem_dentro_limite = ($cubagem <= $this->max_cubagem);
					
  					// o produto dentro do peso e dimensões estabelecidos pelos Correios
  					if ($peso_dentro_limite && $cubagem_dentro_limite) {
  						
						if (version_compare(VERSION, '2.1') < 0) {
							// já existe o mesmo produto na caixa, assim incrementa-se a sua quantidade
							if (isset($caixas[$cx_num]['produtos'][$prod_copy['key']])) {
								$caixas[$cx_num]['produtos'][$prod_copy['key']]['quantity']++;
							}
							// adiciona o novo produto
							else {
								$caixas[$cx_num]['produtos'][$prod_copy['key']] = $prod_copy;
							}
						} else {
							if (isset($caixas[$cx_num]['produtos'][$prod_copy['cart_id']])) {
								$caixas[$cx_num]['produtos'][$prod_copy['cart_id']]['quantity']++;
							}
							else {
								$caixas[$cx_num]['produtos'][$prod_copy['cart_id']] = $prod_copy;
							}							
						}						
						
						$caixas[$cx_num]['peso'] = $peso;
						$caixas[$cx_num]['cubagem'] = $cubagem;
  					}
  					// tenta adicionar o produto que não coube em uma nova caixa
  					else{
  						$cx_num++;
  						$i--;
  					}
  				}
  				// produto não tem as dimensões/peso válidos então abandona sem calcular o frete. 
  				else {
  					$caixas = array();
  					break 2;  // sai dos dois foreach
  				}
  			}
  		}
  		return $caixas;
  	}
  	// retorna o valor total dos produtos na caixa
  	private function getTotalCaixa($products) {
  		$total = 0;
  	
  		foreach ($products as $product) {
			if (version_compare(VERSION, '2.2') < 0) {
				$total += $this->currency->format($this->tax->calculate($product['total'], $product['tax_class_id'], $this->config->get('config_tax')), '', '', false);
			} else {
				$total += $this->currency->format($this->tax->calculate($product['total'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency'], '', false);
			}
  		}
  		return $total;
  	}

	private function raizCubica($n) {
		return pow($n, 1/3);
	}


  	private function removeProdutosSemFrete($products) {

		foreach ($products as $key => $product) {
  			
			if (!$product['shipping']) {
  				unset($products[$key]);
  			}	
  		}
  		return $products;
  	}	
}
?>
