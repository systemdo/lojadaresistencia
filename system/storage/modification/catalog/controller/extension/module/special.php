<?php

    global $aFolder;
    global $modulesPath;
    
    
    if (!defined('HTTP_ADMIN')) {
        $root_dir = DIR_APPLICATION.'../';
        $folder_contents = scandir($root_dir);
                if (!(in_array('admin', $folder_contents) && file_exists($root_dir.'admin/config.php'))) {
                        foreach ($folder_contents as $value) {
                                if (is_dir($root_dir.$value) && $value != '.' && $value != '..'){
                                        if (file_exists($root_dir.$value.'/config.php')) {
                                                $admin_folder_name = $value;
                                                continue;
                                        }
                                }
                        }
                }
        if (isset($admin_folder_name)) {
                define('HTTP_ADMIN',$admin_folder_name);
        } else {
                define('HTTP_ADMIN','admin');
        }  
    }
    
    $aFolder = preg_replace('/.*\/([^\/].*)\//is','$1',HTTP_ADMIN);
    
    if (version_compare(VERSION,'2.3','>=')) { //newer than 2.2.x
        $modulesPath = 'extension/module';
    } else {
        $modulesPath = 'module';
    }
    
    
    
    include (preg_match("/components\/com_(ayelshop|aceshop|mijoshop)\/opencart\//ims",__FILE__,$matches)?'components/com_'.$matches[1].'/opencart/':'').$aFolder.'/controller/'.$modulesPath.'/magictoolbox-module.inc';
    
class ControllerExtensionModuleSpecial extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/special');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$data['products'] = array();

		$filter_data = array(
			'sort'  => 'pd.name',
			'order' => 'ASC',
			'start' => 0,
			'limit' => $setting['limit']
		);

		$results = $this->model_catalog_product->getProductSpecials($filter_data);

		if ($results) {
			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']).'" id="special_'.$result['product_id'].'"';
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$special = false;
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = $result['rating'];
				} else {
					$rating = false;
				}

				$data['products'][] = array(
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'],
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'rating'      => $rating,
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
				);
			}

			$contents = $this->load->view('extension/module/special', $data);
                            global $aFolder;
                            global $modulesPath;
                            
                            if (isset($GLOBALS['magictoolbox_modules'])) { 
                                        global $tools;

                                        foreach ($tools as $tool) {
                                            if (isset($GLOBALS['magictoolbox_modules'][$tool])) {
                                                $boxModule = $GLOBALS['magictoolbox_modules'][$tool];
                                                if ($boxModule['status']) { //if module enabled
                                                    if (!function_exists($tool)) include (preg_match("/components\/com_(ayelshop|aceshop|mijoshop)\/opencart\//ims",__FILE__,$matches)?'components/com_'.$matches[1].'/opencart/':'').$aFolder.'/controller/'.$modulesPath.'/'.$tool.'-opencart-module/module.php';
                                                    $boxPath = (preg_match("/components\/com_(ayelshop|aceshop|mijoshop)\/opencart\//ims",__FILE__,$matches)?'components/com_'.$matches[1].'/opencart/':'').$aFolder.'/controller/'.$modulesPath.'/'.$tool.'-opencart-module/boxes.inc'; 
                                                    if (file_exists($boxPath)) {
                                                        include ($boxPath);
                                                    }
                                                }
                                            }
                                        }
                                    }
                            return $contents;
		}
	}
}