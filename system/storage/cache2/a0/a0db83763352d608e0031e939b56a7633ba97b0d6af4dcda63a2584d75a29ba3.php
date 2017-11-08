<?php

/* extension/shipping/correios.twig */
class __TwigTemplate_d35a104705427aff9572dd4c88eaa704fac8d05309310ee434da62f146387a91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-shipping\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
      \t<form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-shipping\" class=\"form-horizontal\">
\t\t<div class=\"table-responsive\">
\t\t\t<h4>";
        // line 29
        echo (isset($context["entry_servicos"]) ? $context["entry_servicos"] : null);
        echo "</h4>
\t\t\t<a href=\"https://www.correios.com.br/para-voce/correios-de-a-a-z/limites-de-dimensoes-e-peso\" target=\"_blank\">Clique aqui para mais informações sobre limites de dimensões e peso no site dos Correios</a>
\t\t\t<table id=\"servicos\" class=\"table table-striped table-bordered table-hover\">
\t\t\t  <thead>
\t\t\t\t<tr>
\t\t\t\t  <td class=\"text-left required\"><label><span data-toggle=\"tooltip\" title=\"";
        // line 34
        echo (isset($context["help_codigo"]) ? $context["help_codigo"] : null);
        echo "\">";
        echo (isset($context["entry_codigo"]) ? $context["entry_codigo"] : null);
        echo "</span></label></td>
\t\t\t\t  <td class=\"text-left required\"><label><span data-toggle=\"tooltip\" title=\"";
        // line 35
        echo (isset($context["help_nome"]) ? $context["help_nome"] : null);
        echo "\">";
        echo (isset($context["entry_nome"]) ? $context["entry_nome"] : null);
        echo "</span></label></td>
\t\t\t\t  <td class=\"text-left required\"><label><span data-toggle=\"tooltip\" title=\"";
        // line 36
        echo (isset($context["help_a_cobrar"]) ? $context["help_a_cobrar"] : null);
        echo "\">";
        echo (isset($context["entry_a_cobrar"]) ? $context["entry_a_cobrar"] : null);
        echo "</span></label></td>
\t\t\t\t  <td class=\"text-left required\"><label><span data-toggle=\"tooltip\" title=\"";
        // line 37
        echo (isset($context["help_postcode"]) ? $context["help_postcode"] : null);
        echo "\">";
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</span></label></td>
\t\t\t\t  <td class=\"text-left\"><label><span data-toggle=\"tooltip\" title=\"";
        // line 38
        echo (isset($context["help_contrato_codigo"]) ? $context["help_contrato_codigo"] : null);
        echo "\">";
        echo (isset($context["entry_contrato_codigo"]) ? $context["entry_contrato_codigo"] : null);
        echo "</span></label></td>
\t\t\t\t  <td class=\"text-left\"><label><span data-toggle=\"tooltip\" title=\"";
        // line 39
        echo (isset($context["help_contrato_senha"]) ? $context["help_contrato_senha"] : null);
        echo "\">";
        echo (isset($context["entry_contrato_senha"]) ? $context["entry_contrato_senha"] : null);
        echo "</span></label></td>
\t\t\t\t  <td class=\"text-left required\"><label><span data-toggle=\"tooltip\" title=\"";
        // line 40
        echo (isset($context["help_max_declarado"]) ? $context["help_max_declarado"] : null);
        echo "\">";
        echo (isset($context["entry_max_declarado"]) ? $context["entry_max_declarado"] : null);
        echo "</span></label></td>
\t\t\t\t  <td class=\"text-left required\"><label><span data-toggle=\"tooltip\" title=\"";
        // line 41
        echo (isset($context["help_min_declarado"]) ? $context["help_min_declarado"] : null);
        echo "\">";
        echo (isset($context["entry_min_declarado"]) ? $context["entry_min_declarado"] : null);
        echo "</span></label></td>
\t\t\t\t  <td class=\"text-left required\"><label><span data-toggle=\"tooltip\" title=\"";
        // line 42
        echo (isset($context["help_max_soma_lados"]) ? $context["help_max_soma_lados"] : null);
        echo "\">";
        echo (isset($context["entry_max_soma_lados"]) ? $context["entry_max_soma_lados"] : null);
        echo "</span></label></td>
\t\t\t\t  <td class=\"text-left required\"><label><span data-toggle=\"tooltip\" title=\"";
        // line 43
        echo (isset($context["help_min_soma_lados"]) ? $context["help_min_soma_lados"] : null);
        echo "\">";
        echo (isset($context["entry_min_soma_lados"]) ? $context["entry_min_soma_lados"] : null);
        echo "</span></label></td>
\t\t\t\t  <td class=\"text-left required\"><label><span data-toggle=\"tooltip\" title=\"";
        // line 44
        echo (isset($context["help_max_lado"]) ? $context["help_max_lado"] : null);
        echo "\">";
        echo (isset($context["entry_max_lado"]) ? $context["entry_max_lado"] : null);
        echo "</span></label></td>
\t\t\t\t  <td class=\"text-left required\"><label><span data-toggle=\"tooltip\" title=\"";
        // line 45
        echo (isset($context["help_max_peso"]) ? $context["help_max_peso"] : null);
        echo "\">";
        echo (isset($context["entry_max_peso"]) ? $context["entry_max_peso"] : null);
        echo "</span></label></td>
\t\t\t\t  <td class=\"text-left\"><label><span data-toggle=\"tooltip\" title=\"";
        // line 46
        echo (isset($context["help_mao_propria"]) ? $context["help_mao_propria"] : null);
        echo "\">";
        echo (isset($context["entry_mao_propria"]) ? $context["entry_mao_propria"] : null);
        echo "</span></label></td>
\t\t\t\t  <td class=\"text-left\"><label><span data-toggle=\"tooltip\" title=\"";
        // line 47
        echo (isset($context["help_aviso_recebimento"]) ? $context["help_aviso_recebimento"] : null);
        echo "\">";
        echo (isset($context["entry_aviso_recebimento"]) ? $context["entry_aviso_recebimento"] : null);
        echo "</span></label></td>
\t\t\t\t  <td class=\"text-left\"><label><span data-toggle=\"tooltip\" title=\"";
        // line 48
        echo (isset($context["help_declarar_valor"]) ? $context["help_declarar_valor"] : null);
        echo "\">";
        echo (isset($context["entry_declarar_valor"]) ? $context["entry_declarar_valor"] : null);
        echo "</span></label></td>
\t\t\t\t  <td class=\"text-left\"><label><span data-toggle=\"tooltip\" title=\"";
        // line 49
        echo (isset($context["help_total"]) ? $context["help_total"] : null);
        echo "\">";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "</span></label></td>
\t\t\t\t  <td class=\"text-left\"><label><span data-toggle=\"tooltip\" title=\"";
        // line 50
        echo (isset($context["help_prazo_adicional"]) ? $context["help_prazo_adicional"] : null);
        echo "\">";
        echo (isset($context["entry_prazo_adicional"]) ? $context["entry_prazo_adicional"] : null);
        echo "</span></label></td>
\t\t\t\t  <td class=\"text-left\"><label><span data-toggle=\"tooltip\" title=\"";
        // line 51
        echo (isset($context["help_adicional"]) ? $context["help_adicional"] : null);
        echo "\">";
        echo (isset($context["entry_adicional"]) ? $context["entry_adicional"] : null);
        echo "</span></label></td>\t\t\t\t\t  
\t\t\t\t  <td></td>
\t\t\t\t</tr>
\t\t\t  </thead>
\t\t\t  <tbody>
\t\t\t\t";
        // line 56
        $context["servico_row"] = 0;
        // line 57
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shipping_correios_servicos"]) ? $context["shipping_correios_servicos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["servico_info"]) {
            // line 58
            echo "\t\t\t\t<tr id=\"servico-row";
            echo (isset($context["servico_row"]) ? $context["servico_row"] : null);
            echo "\">
\t\t\t\t  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[";
            // line 59
            echo (isset($context["servico_row"]) ? $context["servico_row"] : null);
            echo "][codigo]\" value=\"";
            echo $this->getAttribute($context["servico_info"], "codigo", array());
            echo "\" class=\"form-control\" style=\"width:80px\" /></td>
\t\t\t\t  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[";
            // line 60
            echo (isset($context["servico_row"]) ? $context["servico_row"] : null);
            echo "][nome]\" value=\"";
            echo $this->getAttribute($context["servico_info"], "nome", array());
            echo "\" class=\"form-control\" /></td>
\t\t\t\t  
\t\t\t\t  <td class=\"text-left\">
\t\t\t\t  <select name=\"shipping_correios_servicos[";
            // line 63
            echo (isset($context["servico_row"]) ? $context["servico_row"] : null);
            echo "][a_cobrar]\" class=\"form-control\" style=\"width:50px; padding:8px 0;\">
\t\t\t\t\t";
            // line 64
            if ($this->getAttribute($context["servico_info"], "a_cobrar", array())) {
                // line 65
                echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
\t\t\t\t\t<option value=\"0\">";
                // line 66
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 68
                echo "\t\t\t\t\t<option value=\"1\">";
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 69
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>
\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t  </select>\t\t\t\t\t  
\t\t\t\t  </td>
\t\t\t\t  
\t\t\t\t  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[";
            // line 74
            echo (isset($context["servico_row"]) ? $context["servico_row"] : null);
            echo "][postcode]\" value=\"";
            echo $this->getAttribute($context["servico_info"], "postcode", array());
            echo "\" class=\"form-control\" style=\"width:90px\" /></td>
\t\t\t\t  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[";
            // line 75
            echo (isset($context["servico_row"]) ? $context["servico_row"] : null);
            echo "][contrato_codigo]\" value=\"";
            echo $this->getAttribute($context["servico_info"], "contrato_codigo", array());
            echo "\" class=\"form-control\" /></td>
\t\t\t\t  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[";
            // line 76
            echo (isset($context["servico_row"]) ? $context["servico_row"] : null);
            echo "][contrato_senha]\" value=\"";
            echo $this->getAttribute($context["servico_info"], "contrato_senha", array());
            echo "\" class=\"form-control\" /></td>
\t\t\t\t  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[";
            // line 77
            echo (isset($context["servico_row"]) ? $context["servico_row"] : null);
            echo "][max_declarado]\" value=\"";
            echo $this->getAttribute($context["servico_info"], "max_declarado", array());
            echo "\" class=\"form-control\" style=\"width:80px\" /></td>
\t\t\t\t  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[";
            // line 78
            echo (isset($context["servico_row"]) ? $context["servico_row"] : null);
            echo "][min_declarado]\" value=\"";
            echo $this->getAttribute($context["servico_info"], "min_declarado", array());
            echo "\" class=\"form-control\" style=\"width:80px\" /></td>
\t\t\t\t  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[";
            // line 79
            echo (isset($context["servico_row"]) ? $context["servico_row"] : null);
            echo "][max_soma_lados]\" value=\"";
            echo $this->getAttribute($context["servico_info"], "max_soma_lados", array());
            echo "\" class=\"form-control\" style=\"width:50px\" /></td>
\t\t\t\t  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[";
            // line 80
            echo (isset($context["servico_row"]) ? $context["servico_row"] : null);
            echo "][min_soma_lados]\" value=\"";
            echo $this->getAttribute($context["servico_info"], "min_soma_lados", array());
            echo "\" class=\"form-control\" style=\"width:50px\" /></td>
\t\t\t\t  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[";
            // line 81
            echo (isset($context["servico_row"]) ? $context["servico_row"] : null);
            echo "][max_lado]\" value=\"";
            echo $this->getAttribute($context["servico_info"], "max_lado", array());
            echo "\" class=\"form-control\" style=\"width:50px\" /></td>
\t\t\t\t  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[";
            // line 82
            echo (isset($context["servico_row"]) ? $context["servico_row"] : null);
            echo "][max_peso]\" value=\"";
            echo $this->getAttribute($context["servico_info"], "max_peso", array());
            echo "\" class=\"form-control\" style=\"width:50px\" /></td>
\t\t\t\t  
\t\t\t\t  <td class=\"text-left\">
\t\t\t\t  <select name=\"shipping_correios_servicos[";
            // line 85
            echo (isset($context["servico_row"]) ? $context["servico_row"] : null);
            echo "][mao_propria]\" class=\"form-control\" style=\"width:50px; padding:8px 0;\">
\t\t\t\t\t";
            // line 86
            if ($this->getAttribute($context["servico_info"], "mao_propria", array())) {
                // line 87
                echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
\t\t\t\t\t<option value=\"0\">";
                // line 88
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 90
                echo "\t\t\t\t\t<option value=\"1\">";
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 91
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>
\t\t\t\t\t";
            }
            // line 93
            echo "\t\t\t\t  </select>\t\t\t\t\t  
\t\t\t\t  </td>
\t\t\t\t  <td class=\"text-left\">
\t\t\t\t  <select name=\"shipping_correios_servicos[";
            // line 96
            echo (isset($context["servico_row"]) ? $context["servico_row"] : null);
            echo "][aviso_recebimento]\" class=\"form-control\" style=\"width:50px; padding:8px 0;\">
\t\t\t\t\t";
            // line 97
            if ($this->getAttribute($context["servico_info"], "aviso_recebimento", array())) {
                // line 98
                echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
\t\t\t\t\t<option value=\"0\">";
                // line 99
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 101
                echo "\t\t\t\t\t<option value=\"1\">";
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 102
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>
\t\t\t\t\t";
            }
            // line 104
            echo "\t\t\t\t  </select>\t\t\t\t\t  
\t\t\t\t  </td>
\t\t\t\t  <td class=\"text-left\">
\t\t\t\t  <select name=\"shipping_correios_servicos[";
            // line 107
            echo (isset($context["servico_row"]) ? $context["servico_row"] : null);
            echo "][declarar_valor]\" class=\"form-control\" style=\"width:50px; padding:8px 0;\">
\t\t\t\t\t";
            // line 108
            if ($this->getAttribute($context["servico_info"], "declarar_valor", array())) {
                // line 109
                echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
\t\t\t\t\t<option value=\"0\">";
                // line 110
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 112
                echo "\t\t\t\t\t<option value=\"1\">";
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 113
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>
\t\t\t\t\t";
            }
            // line 115
            echo "\t\t\t\t  </select>\t\t\t\t\t  
\t\t\t\t  </td>\t\t\t\t\t  
\t\t\t\t  
\t\t\t\t  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[";
            // line 118
            echo (isset($context["servico_row"]) ? $context["servico_row"] : null);
            echo "][total]\" value=\"";
            echo $this->getAttribute($context["servico_info"], "total", array());
            echo "\" class=\"form-control\" style=\"width:80px\" /></td>
\t\t\t\t  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[";
            // line 119
            echo (isset($context["servico_row"]) ? $context["servico_row"] : null);
            echo "][prazo_adicional]\" value=\"";
            echo $this->getAttribute($context["servico_info"], "prazo_adicional", array());
            echo "\" class=\"form-control\" style=\"width:50px\"  /></td>
\t\t\t\t  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[";
            // line 120
            echo (isset($context["servico_row"]) ? $context["servico_row"] : null);
            echo "][adicional]\" value=\"";
            echo $this->getAttribute($context["servico_info"], "adicional", array());
            echo "\" class=\"form-control\" style=\"width:50px\" /></td>
\t\t\t\t  <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#servico-row";
            // line 121
            echo (isset($context["servico_row"]) ? $context["servico_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
\t\t\t\t</tr>
\t\t\t\t";
            // line 123
            $context["servico_row"] = ((isset($context["servico_row"]) ? $context["servico_row"] : null) + 1);
            // line 124
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['servico_info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "\t\t\t  </tbody>
\t\t\t  <tfoot>
\t\t\t\t<tr>
\t\t\t\t  <td colspan=\"19\" class=\"text-right\"><button type=\"button\" onclick=\"addServico();\" data-toggle=\"tooltip\" title=\"";
        // line 128
        echo (isset($context["button_add_servico"]) ? $context["button_add_servico"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t</tr>
\t\t\t  </tfoot>
\t\t\t</table>
\t\t  </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 134
        echo (isset($context["entry_tax_class"]) ? $context["entry_tax_class"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_correios_tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                <option value=\"0\">";
        // line 137
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tax_classes"]) ? $context["tax_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 139
            echo "                ";
            if (($this->getAttribute($context["tax_class"], "tax_class_id", array()) == (isset($context["shipping_correios_tax_class_id"]) ? $context["shipping_correios_tax_class_id"] : null))) {
                // line 140
                echo "                <option value=\"";
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>
                ";
            } else {
                // line 142
                echo "                <option value=\"";
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>
                ";
            }
            // line 144
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 149
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_correios_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                <option value=\"0\">";
        // line 152
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 154
            echo "                ";
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array()) == (isset($context["shipping_correios_geo_zone_id"]) ? $context["shipping_correios_geo_zone_id"] : null))) {
                // line 155
                echo "                <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                ";
            } else {
                // line 157
                echo "                <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                ";
            }
            // line 159
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 164
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_correios_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 167
        if ((isset($context["shipping_correios_status"]) ? $context["shipping_correios_status"] : null)) {
            // line 168
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 169
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 171
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 172
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 174
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 178
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_correios_sort_order\" value=\"";
        // line 180
        echo (isset($context["shipping_correios_sort_order"]) ? $context["shipping_correios_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
            </div>
          </div>          
 \t\t</form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
var servico_row = ";
        // line 189
        echo (isset($context["servico_row"]) ? $context["servico_row"] : null);
        echo ";

function addServico() {
\thtml  = '<tr id=\"servico-row' + servico_row + '\">';
\t  html += '  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[' + servico_row  + '][codigo]\" value=\"\" class=\"form-control\" style=\"width:80px\" /></td>';
\t  html += '  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[' + servico_row  + '][nome]\" value=\"\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\">';
\t  html += '  <select name=\"shipping_correios_servicos[' + servico_row  + '][a_cobrar]\" class=\"form-control\" style=\"width:50px; padding:8px 0;\">';
\t\thtml += '  <option value=\"0\">";
        // line 197
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>';\t  
\t\thtml += '  <option value=\"1\">";
        // line 198
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>';
\t  html += '  </select>';\t\t\t\t\t  
\t  html += '  </td>';\t  
\t  html += '  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[' + servico_row  + '][postcode]\" value=\"\" class=\"form-control\" style=\"width:90px\" /></td>';
\t  html += '  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[' + servico_row  + '][contrato_codigo]\" value=\"\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[' + servico_row  + '][contrato_senha]\" value=\"\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[' + servico_row  + '][max_declarado]\" value=\"3000\" class=\"form-control\" style=\"width:80px\" /></td>';
\t  html += '  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[' + servico_row  + '][min_declarado]\" value=\"18\" class=\"form-control\" style=\"width:80px\" /></td>';
\t  html += '  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[' + servico_row  + '][max_soma_lados]\" value=\"200\" class=\"form-control\" style=\"width:50px\" /></td>';
\t  html += '  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[' + servico_row  + '][min_soma_lados]\" value=\"29\" class=\"form-control\" style=\"width:50px\" /></td>';
\t  html += '  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[' + servico_row  + '][max_lado]\" value=\"105\" class=\"form-control\" style=\"width:50px\" /></td>';
\t  html += '  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[' + servico_row  + '][max_peso]\" value=\"30\" class=\"form-control\" style=\"width:50px\" /></td>';
\t  
\t  html += '  <td class=\"text-left\">';
\t  html += '  <select name=\"shipping_correios_servicos[' + servico_row  + '][mao_propria]\" class=\"form-control\" style=\"width:50px; padding:8px 0;\">';
\t\thtml += '  <option value=\"0\">";
        // line 213
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>';\t  
\t\thtml += '  <option value=\"1\">";
        // line 214
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>';
\t  html += '  </select>';\t\t\t\t\t  
\t  html += '  </td>';
\t  html += '  <td class=\"text-left\">';
\t  html += '  <select name=\"shipping_correios_servicos[' + servico_row  + '][aviso_recebimento]\" class=\"form-control\" style=\"width:50px; padding:8px 0;\">';
\t\thtml += '  <option value=\"0\">";
        // line 219
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>';\t  
\t\thtml += '  <option value=\"1\">";
        // line 220
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>';
\t  html += '  </select>';\t\t\t\t\t  
\t  html += '  </td>';
\t  html += '  <td class=\"text-left\">';
\t  html += '  <select name=\"shipping_correios_servicos[' + servico_row  + '][declarar_valor]\" class=\"form-control\" style=\"width:50px; padding:8px 0;\">';
\t\thtml += '  <option value=\"0\">";
        // line 225
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>';
\t\thtml += '  <option value=\"1\">";
        // line 226
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>';\t\t
\t  html += '  </select>';\t\t\t\t\t  
\t  html += '  </td>';\t\t\t\t\t  
\t  
\t  html += '  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[' + servico_row  + '][total]\" value=\"\" class=\"form-control\" style=\"width:80px\"/></td>';
\t  html += '  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[' + servico_row  + '][prazo_adicional]\" value=\"\" class=\"form-control\" style=\"width:50px\" /></td>';
\t  html += '  <td class=\"text-left\"><input type=\"text\" name=\"shipping_correios_servicos[' + servico_row  + '][adicional]\" value=\"\" class=\"form-control\" style=\"width:50px\" /></td>';

\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#servico-row' + servico_row  + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 234
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#servicos tbody').append(html);
\t
\tservico_row++;
}
//--></script> \t\t\t
";
        // line 242
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/shipping/correios.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  688 => 242,  677 => 234,  666 => 226,  662 => 225,  654 => 220,  650 => 219,  642 => 214,  638 => 213,  620 => 198,  616 => 197,  605 => 189,  591 => 180,  586 => 178,  580 => 174,  575 => 172,  570 => 171,  565 => 169,  560 => 168,  558 => 167,  552 => 164,  546 => 160,  540 => 159,  532 => 157,  524 => 155,  521 => 154,  517 => 153,  513 => 152,  507 => 149,  501 => 145,  495 => 144,  487 => 142,  479 => 140,  476 => 139,  472 => 138,  468 => 137,  462 => 134,  453 => 128,  448 => 125,  442 => 124,  440 => 123,  433 => 121,  427 => 120,  421 => 119,  415 => 118,  410 => 115,  405 => 113,  400 => 112,  395 => 110,  390 => 109,  388 => 108,  384 => 107,  379 => 104,  374 => 102,  369 => 101,  364 => 99,  359 => 98,  357 => 97,  353 => 96,  348 => 93,  343 => 91,  338 => 90,  333 => 88,  328 => 87,  326 => 86,  322 => 85,  314 => 82,  308 => 81,  302 => 80,  296 => 79,  290 => 78,  284 => 77,  278 => 76,  272 => 75,  266 => 74,  261 => 71,  256 => 69,  251 => 68,  246 => 66,  241 => 65,  239 => 64,  235 => 63,  227 => 60,  221 => 59,  216 => 58,  211 => 57,  209 => 56,  199 => 51,  193 => 50,  187 => 49,  181 => 48,  175 => 47,  169 => 46,  163 => 45,  157 => 44,  151 => 43,  145 => 42,  139 => 41,  133 => 40,  127 => 39,  121 => 38,  115 => 37,  109 => 36,  103 => 35,  97 => 34,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-shipping" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*       	<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-shipping" class="form-horizontal">*/
/* 		<div class="table-responsive">*/
/* 			<h4>{{ entry_servicos }}</h4>*/
/* 			<a href="https://www.correios.com.br/para-voce/correios-de-a-a-z/limites-de-dimensoes-e-peso" target="_blank">Clique aqui para mais informações sobre limites de dimensões e peso no site dos Correios</a>*/
/* 			<table id="servicos" class="table table-striped table-bordered table-hover">*/
/* 			  <thead>*/
/* 				<tr>*/
/* 				  <td class="text-left required"><label><span data-toggle="tooltip" title="{{ help_codigo }}">{{ entry_codigo }}</span></label></td>*/
/* 				  <td class="text-left required"><label><span data-toggle="tooltip" title="{{ help_nome }}">{{ entry_nome }}</span></label></td>*/
/* 				  <td class="text-left required"><label><span data-toggle="tooltip" title="{{ help_a_cobrar }}">{{ entry_a_cobrar }}</span></label></td>*/
/* 				  <td class="text-left required"><label><span data-toggle="tooltip" title="{{ help_postcode }}">{{ entry_postcode }}</span></label></td>*/
/* 				  <td class="text-left"><label><span data-toggle="tooltip" title="{{ help_contrato_codigo }}">{{ entry_contrato_codigo }}</span></label></td>*/
/* 				  <td class="text-left"><label><span data-toggle="tooltip" title="{{ help_contrato_senha }}">{{ entry_contrato_senha }}</span></label></td>*/
/* 				  <td class="text-left required"><label><span data-toggle="tooltip" title="{{ help_max_declarado }}">{{ entry_max_declarado }}</span></label></td>*/
/* 				  <td class="text-left required"><label><span data-toggle="tooltip" title="{{ help_min_declarado }}">{{ entry_min_declarado }}</span></label></td>*/
/* 				  <td class="text-left required"><label><span data-toggle="tooltip" title="{{ help_max_soma_lados }}">{{ entry_max_soma_lados }}</span></label></td>*/
/* 				  <td class="text-left required"><label><span data-toggle="tooltip" title="{{ help_min_soma_lados }}">{{ entry_min_soma_lados }}</span></label></td>*/
/* 				  <td class="text-left required"><label><span data-toggle="tooltip" title="{{ help_max_lado }}">{{ entry_max_lado }}</span></label></td>*/
/* 				  <td class="text-left required"><label><span data-toggle="tooltip" title="{{ help_max_peso }}">{{ entry_max_peso }}</span></label></td>*/
/* 				  <td class="text-left"><label><span data-toggle="tooltip" title="{{ help_mao_propria }}">{{ entry_mao_propria }}</span></label></td>*/
/* 				  <td class="text-left"><label><span data-toggle="tooltip" title="{{ help_aviso_recebimento }}">{{ entry_aviso_recebimento }}</span></label></td>*/
/* 				  <td class="text-left"><label><span data-toggle="tooltip" title="{{ help_declarar_valor }}">{{ entry_declarar_valor }}</span></label></td>*/
/* 				  <td class="text-left"><label><span data-toggle="tooltip" title="{{ help_total }}">{{ entry_total }}</span></label></td>*/
/* 				  <td class="text-left"><label><span data-toggle="tooltip" title="{{ help_prazo_adicional }}">{{ entry_prazo_adicional }}</span></label></td>*/
/* 				  <td class="text-left"><label><span data-toggle="tooltip" title="{{ help_adicional }}">{{ entry_adicional }}</span></label></td>					  */
/* 				  <td></td>*/
/* 				</tr>*/
/* 			  </thead>*/
/* 			  <tbody>*/
/* 				{% set servico_row = 0 %}*/
/* 				{% for servico_info in shipping_correios_servicos %}*/
/* 				<tr id="servico-row{{ servico_row }}">*/
/* 				  <td class="text-left"><input type="text" name="shipping_correios_servicos[{{ servico_row }}][codigo]" value="{{ servico_info.codigo }}" class="form-control" style="width:80px" /></td>*/
/* 				  <td class="text-left"><input type="text" name="shipping_correios_servicos[{{ servico_row }}][nome]" value="{{ servico_info.nome }}" class="form-control" /></td>*/
/* 				  */
/* 				  <td class="text-left">*/
/* 				  <select name="shipping_correios_servicos[{{ servico_row }}][a_cobrar]" class="form-control" style="width:50px; padding:8px 0;">*/
/* 					{% if servico_info.a_cobrar %}*/
/* 					<option value="1" selected="selected">{{ text_yes }}</option>*/
/* 					<option value="0">{{ text_no }}</option>*/
/* 					{% else %}*/
/* 					<option value="1">{{ text_yes }}</option>*/
/* 					<option value="0" selected="selected">{{ text_no }}</option>*/
/* 					{% endif %}*/
/* 				  </select>					  */
/* 				  </td>*/
/* 				  */
/* 				  <td class="text-left"><input type="text" name="shipping_correios_servicos[{{ servico_row }}][postcode]" value="{{ servico_info.postcode }}" class="form-control" style="width:90px" /></td>*/
/* 				  <td class="text-left"><input type="text" name="shipping_correios_servicos[{{ servico_row }}][contrato_codigo]" value="{{ servico_info.contrato_codigo }}" class="form-control" /></td>*/
/* 				  <td class="text-left"><input type="text" name="shipping_correios_servicos[{{ servico_row }}][contrato_senha]" value="{{ servico_info.contrato_senha }}" class="form-control" /></td>*/
/* 				  <td class="text-left"><input type="text" name="shipping_correios_servicos[{{ servico_row }}][max_declarado]" value="{{ servico_info.max_declarado }}" class="form-control" style="width:80px" /></td>*/
/* 				  <td class="text-left"><input type="text" name="shipping_correios_servicos[{{ servico_row }}][min_declarado]" value="{{ servico_info.min_declarado }}" class="form-control" style="width:80px" /></td>*/
/* 				  <td class="text-left"><input type="text" name="shipping_correios_servicos[{{ servico_row }}][max_soma_lados]" value="{{ servico_info.max_soma_lados }}" class="form-control" style="width:50px" /></td>*/
/* 				  <td class="text-left"><input type="text" name="shipping_correios_servicos[{{ servico_row }}][min_soma_lados]" value="{{ servico_info.min_soma_lados }}" class="form-control" style="width:50px" /></td>*/
/* 				  <td class="text-left"><input type="text" name="shipping_correios_servicos[{{ servico_row }}][max_lado]" value="{{ servico_info.max_lado }}" class="form-control" style="width:50px" /></td>*/
/* 				  <td class="text-left"><input type="text" name="shipping_correios_servicos[{{ servico_row }}][max_peso]" value="{{ servico_info.max_peso }}" class="form-control" style="width:50px" /></td>*/
/* 				  */
/* 				  <td class="text-left">*/
/* 				  <select name="shipping_correios_servicos[{{ servico_row }}][mao_propria]" class="form-control" style="width:50px; padding:8px 0;">*/
/* 					{% if servico_info.mao_propria %}*/
/* 					<option value="1" selected="selected">{{ text_yes }}</option>*/
/* 					<option value="0">{{ text_no }}</option>*/
/* 					{% else %}*/
/* 					<option value="1">{{ text_yes }}</option>*/
/* 					<option value="0" selected="selected">{{ text_no }}</option>*/
/* 					{% endif %}*/
/* 				  </select>					  */
/* 				  </td>*/
/* 				  <td class="text-left">*/
/* 				  <select name="shipping_correios_servicos[{{ servico_row }}][aviso_recebimento]" class="form-control" style="width:50px; padding:8px 0;">*/
/* 					{% if servico_info.aviso_recebimento %}*/
/* 					<option value="1" selected="selected">{{ text_yes }}</option>*/
/* 					<option value="0">{{ text_no }}</option>*/
/* 					{% else %}*/
/* 					<option value="1">{{ text_yes }}</option>*/
/* 					<option value="0" selected="selected">{{ text_no }}</option>*/
/* 					{% endif %}*/
/* 				  </select>					  */
/* 				  </td>*/
/* 				  <td class="text-left">*/
/* 				  <select name="shipping_correios_servicos[{{ servico_row }}][declarar_valor]" class="form-control" style="width:50px; padding:8px 0;">*/
/* 					{% if servico_info.declarar_valor %}*/
/* 					<option value="1" selected="selected">{{ text_yes }}</option>*/
/* 					<option value="0">{{ text_no }}</option>*/
/* 					{% else %}*/
/* 					<option value="1">{{ text_yes }}</option>*/
/* 					<option value="0" selected="selected">{{ text_no }}</option>*/
/* 					{% endif %}*/
/* 				  </select>					  */
/* 				  </td>					  */
/* 				  */
/* 				  <td class="text-left"><input type="text" name="shipping_correios_servicos[{{ servico_row }}][total]" value="{{ servico_info.total }}" class="form-control" style="width:80px" /></td>*/
/* 				  <td class="text-left"><input type="text" name="shipping_correios_servicos[{{ servico_row }}][prazo_adicional]" value="{{ servico_info.prazo_adicional }}" class="form-control" style="width:50px"  /></td>*/
/* 				  <td class="text-left"><input type="text" name="shipping_correios_servicos[{{ servico_row }}][adicional]" value="{{ servico_info.adicional }}" class="form-control" style="width:50px" /></td>*/
/* 				  <td class="text-left"><button type="button" onclick="$('#servico-row{{ servico_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/* 				</tr>*/
/* 				{% set servico_row = servico_row + 1 %}*/
/* 				{% endfor %}*/
/* 			  </tbody>*/
/* 			  <tfoot>*/
/* 				<tr>*/
/* 				  <td colspan="19" class="text-right"><button type="button" onclick="addServico();" data-toggle="tooltip" title="{{ button_add_servico }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/* 				</tr>*/
/* 			  </tfoot>*/
/* 			</table>*/
/* 		  </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-tax-class">{{ entry_tax_class }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_correios_tax_class_id" id="input-tax-class" class="form-control">*/
/*                 <option value="0">{{ text_none }}</option>*/
/*                 {% for tax_class in tax_classes %}*/
/*                 {% if tax_class.tax_class_id == shipping_correios_tax_class_id %}*/
/*                 <option value="{{ tax_class.tax_class_id }}" selected="selected">{{ tax_class.title }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ tax_class.tax_class_id }}">{{ tax_class.title }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-geo-zone">{{ entry_geo_zone }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_correios_geo_zone_id" id="input-geo-zone" class="form-control">*/
/*                 <option value="0">{{ text_all_zones }}</option>*/
/*                 {% for geo_zone in geo_zones %}*/
/*                 {% if geo_zone.geo_zone_id == shipping_correios_geo_zone_id %}*/
/*                 <option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_correios_status" id="input-status" class="form-control">*/
/*                 {% if shipping_correios_status %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_correios_sort_order" value="{{ shipping_correios_sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*             </div>*/
/*           </div>          */
/*  		</form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* var servico_row = {{ servico_row }};*/
/* */
/* function addServico() {*/
/* 	html  = '<tr id="servico-row' + servico_row + '">';*/
/* 	  html += '  <td class="text-left"><input type="text" name="shipping_correios_servicos[' + servico_row  + '][codigo]" value="" class="form-control" style="width:80px" /></td>';*/
/* 	  html += '  <td class="text-left"><input type="text" name="shipping_correios_servicos[' + servico_row  + '][nome]" value="" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-left">';*/
/* 	  html += '  <select name="shipping_correios_servicos[' + servico_row  + '][a_cobrar]" class="form-control" style="width:50px; padding:8px 0;">';*/
/* 		html += '  <option value="0">{{ text_no }}</option>';	  */
/* 		html += '  <option value="1">{{ text_yes }}</option>';*/
/* 	  html += '  </select>';					  */
/* 	  html += '  </td>';	  */
/* 	  html += '  <td class="text-left"><input type="text" name="shipping_correios_servicos[' + servico_row  + '][postcode]" value="" class="form-control" style="width:90px" /></td>';*/
/* 	  html += '  <td class="text-left"><input type="text" name="shipping_correios_servicos[' + servico_row  + '][contrato_codigo]" value="" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-left"><input type="text" name="shipping_correios_servicos[' + servico_row  + '][contrato_senha]" value="" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-left"><input type="text" name="shipping_correios_servicos[' + servico_row  + '][max_declarado]" value="3000" class="form-control" style="width:80px" /></td>';*/
/* 	  html += '  <td class="text-left"><input type="text" name="shipping_correios_servicos[' + servico_row  + '][min_declarado]" value="18" class="form-control" style="width:80px" /></td>';*/
/* 	  html += '  <td class="text-left"><input type="text" name="shipping_correios_servicos[' + servico_row  + '][max_soma_lados]" value="200" class="form-control" style="width:50px" /></td>';*/
/* 	  html += '  <td class="text-left"><input type="text" name="shipping_correios_servicos[' + servico_row  + '][min_soma_lados]" value="29" class="form-control" style="width:50px" /></td>';*/
/* 	  html += '  <td class="text-left"><input type="text" name="shipping_correios_servicos[' + servico_row  + '][max_lado]" value="105" class="form-control" style="width:50px" /></td>';*/
/* 	  html += '  <td class="text-left"><input type="text" name="shipping_correios_servicos[' + servico_row  + '][max_peso]" value="30" class="form-control" style="width:50px" /></td>';*/
/* 	  */
/* 	  html += '  <td class="text-left">';*/
/* 	  html += '  <select name="shipping_correios_servicos[' + servico_row  + '][mao_propria]" class="form-control" style="width:50px; padding:8px 0;">';*/
/* 		html += '  <option value="0">{{ text_no }}</option>';	  */
/* 		html += '  <option value="1">{{ text_yes }}</option>';*/
/* 	  html += '  </select>';					  */
/* 	  html += '  </td>';*/
/* 	  html += '  <td class="text-left">';*/
/* 	  html += '  <select name="shipping_correios_servicos[' + servico_row  + '][aviso_recebimento]" class="form-control" style="width:50px; padding:8px 0;">';*/
/* 		html += '  <option value="0">{{ text_no }}</option>';	  */
/* 		html += '  <option value="1">{{ text_yes }}</option>';*/
/* 	  html += '  </select>';					  */
/* 	  html += '  </td>';*/
/* 	  html += '  <td class="text-left">';*/
/* 	  html += '  <select name="shipping_correios_servicos[' + servico_row  + '][declarar_valor]" class="form-control" style="width:50px; padding:8px 0;">';*/
/* 		html += '  <option value="0">{{ text_no }}</option>';*/
/* 		html += '  <option value="1">{{ text_yes }}</option>';		*/
/* 	  html += '  </select>';					  */
/* 	  html += '  </td>';					  */
/* 	  */
/* 	  html += '  <td class="text-left"><input type="text" name="shipping_correios_servicos[' + servico_row  + '][total]" value="" class="form-control" style="width:80px"/></td>';*/
/* 	  html += '  <td class="text-left"><input type="text" name="shipping_correios_servicos[' + servico_row  + '][prazo_adicional]" value="" class="form-control" style="width:50px" /></td>';*/
/* 	  html += '  <td class="text-left"><input type="text" name="shipping_correios_servicos[' + servico_row  + '][adicional]" value="" class="form-control" style="width:50px" /></td>';*/
/* */
/* 	html += '  <td class="text-left"><button type="button" onclick="$(\'#servico-row' + servico_row  + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* 	*/
/* 	$('#servicos tbody').append(html);*/
/* 	*/
/* 	servico_row++;*/
/* }*/
/* //--></script> 			*/
/* {{ footer }}*/
/* */
