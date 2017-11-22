<?php
/*error_reporting(E_ALL);
ini_set('display_errors', '1');
*/

if (version_compare(VERSION,'2.3','>=')) { //newer than 2.2.x

    $modulesPath = 'extension/module';
    $englishPath = 'en-gb';
} else {
    $modulesPath = 'module';
    $englishPath = 'english';
}

$GLOBALS['magiczoomplus_module_loaded'] = 'true'; // to fix boxes and pages conflict, I thunk we could find a better way in future

if (defined('HTTP_ADMIN')) {
    define ('MTOOLBOX_ADMIN_FOLDER_magiczoomplus',str_replace('catalog',preg_replace('/.*?([^\/]*)\/$/is','$1',HTTP_ADMIN),DIR_APPLICATION) . 'controller/'.$modulesPath.'/magiczoomplus-opencart-module/');
} else {
    define ('MTOOLBOX_ADMIN_FOLDER_magiczoomplus',DIR_APPLICATION . 'controller/'.$modulesPath.'/magiczoomplus-opencart-module/');
}

function magiczoomplus_LoadScroll($tool) {
    static $scroll = null;
    if($scroll === null) {
        $scroll = false;
        if($tool->params->checkValue('magicscroll', 'yes', 'product')) {
            require_once (MTOOLBOX_ADMIN_FOLDER_magiczoomplus.'magicscroll.module.core.class.php');
            $scroll = new MagicScrollModuleCoreClass(false);
            //NOTE: load params in a separate profile, in order not to overwrite the options of MagicScroll module
            $scroll->params->appendParams($tool->params->getParams('product'), 'product-magicscroll-options');
            $scroll->params->setValue('orientation', ($tool->params->checkValue('template', array('left', 'right'), 'product') ? 'vertical' : 'horizontal'), 'product-magicscroll-options');
        }
    }
    return $scroll;
}

function magiczoomplus($content, $currentController = false , $type = false, $info = false) {

    
    $settings = $currentController->config->get('magiczoomplus_settings');
    $magiczoomplus_status = $settings['magiczoomplus_status'];
  

    if ($magiczoomplus_status != 0) {

        $tool = & magiczoomplus_load_core_class($currentController);
	
	
	if ($tool->params->profileExists($type)) { //for main profiles
	    $tool->params->setProfile($type);
	}

        $enabled_on_this_page = false;

        unset($GLOBALS['magictoolbox']['items']);

        if ($tool->type == 'standard') { //do not apply MSS-like modules to category & product pages
            if ($tool->params->checkValue('page-status','Yes') && (!$tool->params->checkValue('zoomMode', 'off') || !$tool->params->checkValue('expand', 'off')) && $tool->params->profileExists($type)) {
		$enabled_on_this_page = true;
	    }
        }

        if ($tool->type == 'circle') { //Apply 360 only to Products Page 
            if ($type && $type == 'product') {
                    $gallery = magic360_get_gallery($info['product_id']);
                    if ($gallery) {
                        $info['gallery_images'] = explode(';',$gallery['images']);
                        $tool->params->setValue('columns',$gallery['columns'],'product');
                        $enabled_on_this_page = true;
                    } else {
                        $info['gallery_images'] = array();
                    }
            }

	} else { //boxes

		if ($type && ($type == 'latest_home_category' || $type == 'latest_home' || $type == 'latest_right' || $type == 'latest_left' || $type == 'latest_content_top' || $type == 'latest_content_bottom' || $type == 'latest_column_left' || $type == 'latest_column_right')) {
			$tool->params->setProfile('latest');
		}
		if ($type && ($type == 'featured_home' || $type == 'featured_right' || $type == 'featured_left' || $type == 'featured_left' || $type == 'featured_content_top' || $type == 'featured_content_bottom' || $type == 'featured_column_left' || $type == 'featured_column_right')) {
			$tool->params->setProfile('featured');
		}
		
		if ($type && ($type == 'special_home' || $type == 'special_right' || $type == 'special_left' || $type == 'special_content_top' || $type == 'special_content_bottom' || $type == 'special_column_left' || $type == 'special_column_right')) {
			$tool->params->setProfile('special');
		}
		
		if ($type && ($type == 'bestseller_home' || $type == 'bestseller_right' || $type == 'bestseller_left' || $type == 'bestseller_content_top' || $type == 'bestseller_content_bottom' || $type == 'bestseller_column_left' || $type == 'bestseller_column_right')) {
			$tool->params->setProfile('bestseller');
		}
		
		if ($tool->params->checkValue('page-status','Yes') && (!$tool->params->checkValue('zoomMode', 'off') || !$tool->params->checkValue('expand', 'off'))) {
		    $enabled_on_this_page = true;
		}


	}

        if ($enabled_on_this_page) {

	    if ($type && $info) {
		$GLOBALS['magictoolbox']['page_type'] = $type;
		$GLOBALS['magictoolbox']['prods_info'] = $info;
	    } else {
		return $content;
	    }
            
            $oldContent = $content;
            $GLOBALS['current_profile'] = $tool->params->getProfile();
            $content = magiczoomplus_parse_contents($content,$currentController);
            //if ($oldContent != $content) $content = magiczoomplus_set_headers($content);
            $content = magiczoomplus_set_headers($content); //TODO ?
            
            if ($type == 'product') $pid = $GLOBALS['magictoolbox']['prods_info']['product_id'];
            
	    if ($type == 'product' && $tool->type == 'standard') {
                // template helper class
                $tool->params->setProfile($type);
                require_once (MTOOLBOX_ADMIN_FOLDER_magiczoomplus.'magictoolbox.templatehelper.class.php');
                MagicToolboxTemplateHelperClass::setPath(MTOOLBOX_ADMIN_FOLDER_magiczoomplus.'templates');
                MagicToolboxTemplateHelperClass::setOptions($tool->params);
                $scroll = magiczoomplus_LoadScroll($tool);
                $html = MagicToolboxTemplateHelperClass::render(array(
                    'main' => magiczoomplus_getMainTemplate($GLOBALS['magictoolbox']['prods_info'],$type),
                    'thumbs' => magiczoomplus_getSelectorsTemplate($GLOBALS['magictoolbox']['prods_info'],$type),
                    'magicscrollOptions' => $scroll ? $scroll->params->serialize(false, '', 'product-magicscroll-options') : '',
                    'pid' => $pid,
                ));

                preg_match('/(<a[^>]*?class="Magic360[^>]*>.*?<\/a>)/is',$content,$m360); //get 360 container
                $content = preg_replace('/(<a[^>]*?class="Magic360[^>]*>.*?<\/a>)/is','MAGICTOOLBOX_PLACEHOLDER',$content); //cut 360 it from code
                
                if (isset($info['videos']) && count($info['videos'])) { //add video container
                    $videoContent = '';
                    foreach($GLOBALS['magictoolbox']['containersData'] as $id => $video) {
                            $videoContent .= '<div class="magictoolboxVideoContainer" id="'.$id.'">'.$video.'</div>';
                    }
                }
                
                $content = str_replace('MAGICTOOLBOX_PLACEHOLDER', $html, $content);
                
                if (isset($videoContent)) {
                    $oldVidCont = $content;
                    $content = preg_replace('/(<div[^>]*?class=\"MagicToolboxMainContainer[^\"]*"[^>]*>)/is', '$1'.$videoContent,$content , 1); //add video container LEFT and RIGHT
                    if ($content == $oldVidCont) {
                        if (preg_match('/(<div[^>]*?class=\"MagicToolboxContainer[^\"]*selectorsTop[^\"]*"[^>]*>)/is',$content)) {
                            $content = preg_replace('/(<div[^>]*?class=\"MagicToolboxSelectorsContainer[^\"]*"[^>]*>.*?<\/div>\s+<\/div>)/is','$1'.$videoContent,$content); //add video container TOP
                        } else {
                            $content = preg_replace('/(<div[^>]*?class=\"MagicToolboxContainer[^\"]*"[^>]*>)/is', '$1'.$videoContent,$content , 1); //add video container BOTTOM
                        }
                    }
                } 
                if (isset($m360[1])) {
                    $content = preg_replace('/(<a[^>]*?id=\"Magic[^\"]*Image\d+_product\"[^>]*?class=\"(?:MagicZoom|MagicZoomPlus)\")/is','<div class="m360container">'.$m360[1].'</div> $1 style="position: absolute; left: -10000px;"',$content , 1); //hide zoom main image & add 360 container
                    //$content = preg_replace('/(^.*?<a[^>]*?)(data-zoom-id=\"Magic[^\"]*Image\d+_product\")([^\"]*href=\"[^\"]*360icon.jpg\".*?<\/a>.*)/is','$1$3',$content ); //remove 360 selector from expand
                    $content = preg_replace('/(data-(?:zoom|thumb)-id)/is',"$1-removed",$content,1); //remove 360 selector from expand
                }
                $content = preg_replace('/<div\s+class=\"gallery-text\">.*?<div class="product-tabs">/is', '<div class="product-tabs">', $content); //cut old gallery (journal2?)
                

            } else if ($type != 'product' && $tool->type == 'category' ) { //scroll & slideshow boxes
            
		$tool->params->setProfile($GLOBALS['current_profile']);
            
		$items = array();
		$position = '';
		
		$shop_dir = str_replace('system/','',DIR_SYSTEM);
		$image_dir = str_replace ($shop_dir,'',DIR_IMAGE);

		if (preg_match('/.*_content_(top|bottom).*/is',$type)) $position = 'home';
		if (preg_match('/.*_column_(left|right).*/is',$type,$matches)) {
		    $position = $matches[1];
		    $tool->params->setValue('orientation','vertical');
		}

		foreach ($GLOBALS['magictoolbox']['prods_info'] as $product) {
		
		    $src = $image_dir.$product['image'];
		    $img = magiczoomplus_getThumb($src,'original',$product['product_id']);
		    $thumb = magiczoomplus_getThumb($src,$position.'-thumb',$product['product_id']);
		    $thumb2x = magiczoomplus_getThumb($src,$position.'-thumb2x',$product['product_id']);                
		    
		    if (isset($GLOBALS['magictoolbox']['plinks'][$product['product_id']])) {
			$link = $GLOBALS['magictoolbox']['plinks'][$product['product_id']];
		    }
		    $title = $product['name'];
		    
		    $items[] = array('img' => $thumb, 'thumb' => $thumb, 'thumb2x' => $thumb2x, 'title' => $title, 'link' => $link);
		}
		$html = $tool->getMainTemplate($items);
		$content = str_replace('MAGICTOOLBOX_PLACEHOLDER', $html, $content);
		$GLOBALS['magictoolbox']['plinks'] = array();
		
             } else if ($type == 'product' && $tool->type == 'circle' ) {
                $items = array();
                $tool->params->setProfile('product');
                if (isset($GLOBALS['magictoolbox']['prods_info']['gallery_images']) && count($GLOBALS['magictoolbox']['prods_info']['gallery_images'])) {
                    foreach ($GLOBALS['magictoolbox']['prods_info']['gallery_images'] as $image) {
                        
                        $src = 'image/magic360/'.$pid.'/'.$image;
                        
                        $img = magiczoomplus_getThumb($src,'original',$pid);
                        $medium = magiczoomplus_getThumb($src,'thumb',$pid);
                        
                        $items[] = array('img' => $img, 'medium' => $medium);
                    }
                    
                    $html = $tool->getMainTemplate($items);
                    
                    $content = str_replace('MAGICTOOLBOX_PLACEHOLDER', $html, $content);
                }
            }



        $content = str_replace('$(\'.thumbnails\').magnificPopup({','$(\'.thumbnails-mt\').magnificPopup({',$content); //cut magnificPopup
        }
    }
    
    return $content;
}

function magiczoomplus_set_headers ($content, $headers = false, $controller = false) {

    

    /*if(defined('HTTP_ADMIN')) {
            $aFolder = preg_replace('/.*\/([^\/].*)\//is','$1',HTTP_ADMIN);
    } else {
            $aFolder = 'admin';
    }*/

    if (isset($GLOBALS["magictoolbox"]["magiczoomplus"])) {
        $plugin = $GLOBALS["magictoolbox"]["magiczoomplus"];
    } else {
        $plugin = magiczoomplus_load_core_class($controller);  
    } 
    
    if (empty($GLOBALS['magictoolbox']['page_type']) && $plugin->params->getValue('headers-on-every-page','general') != 'Yes') { 
        return $content;
    }
	

    if (!$headers) {
	//$plugin->params->resetProfile(); ??

        $prefix = '';
        if (preg_match("/components\/com_(ayelshop|aceshop|mijoshop)\/opencart\//ims",DIR_APPLICATION,$matches) || strpos($content,'</head>')) {
            $prefix = '';
            if ($matches) $prefix = 'components/com_'.$matches[1].'/opencart/';
            $headers = $plugin->getHeadersTemplate($prefix.'catalog/view/javascript',$prefix.'catalog/view/css');
        }

        

    }
    $scroll = magiczoomplus_LoadScroll($plugin);
    if($scroll && $GLOBALS['magictoolbox']['page_type'] == 'product') {
        static $scrollHeaders = '';
        if(!defined('MagicScrollModuleHeaders') && !defined('MAGICSCROLL_MODULE_HEADERS')) {
            $scroll->params->resetProfile();
            $scrollHeaders = $GLOBALS['magictoolbox']['scrollHeaders'] = $scroll->getHeadersTemplate($prefix.'catalog/view/javascript', $prefix.'catalog/view/css', false);
        }
        if(!empty($scrollHeaders)) {
            $headers .= $scrollHeaders;
        }
    }

    $headers .= '<script type="text/javascript"> 
               function mtOnDomReady(fnc) {
                    if (typeof(jQuery) == "undefined") {
                        setTimeout(function() {
                            mtOnDomReady(fnc);
                        }, 250);
                        return;
                    }
                    jQuery(document).ready(fnc);
                }

                mtOnDomReady(function() {
                    jQuery(".hoverimage").on("click touchstart",
                        function() {
                            var newsrc = jQuery(this).attr("rel");
                            var arr = newsrc.split("!");
                            if (typeof MagicZoom != "undefined") {
                                MagicZoom.update(jQuery(".MagicZoom").attr("id"),arr[1],arr[0]);
                            } else if (typeof MagicThumb != "undefined") {
                                MagicThumb.update(jQuery(".MagicThumb").attr("id"),arr[1],arr[0]);
                            }
                        }
                    );
                });
                </script>';
    if (!$plugin->params->checkValue('use-effect-on-category-page', 'No') || !$plugin->params->checkValue('use-effect-on-manufacturers-page', 'No') || !$plugin->params->checkValue('use-effect-on-search-page', 'No')) {//fix for category && manufacturers view switch
        $headers .= '<script type="text/javascript">
		    var magicAddEvent = "je1";
		    if(typeof(magicJS.Doc.je1) == "undefined") magicAddEvent = "jAddEvent";
		    
                    $mjs(document)[magicAddEvent](\'domready\', function() {
                      if (typeof display !== \'undefined\') {
                        var olddisplay = display;
                        window.display = function (view) {
			  if ("MagicZoomPlus" != "MagicZoomPlus") {
			      MagicZoomPlus.stop();
			      olddisplay(view);
			      MagicZoomPlus.start();
			  } else {
			      MagicZoom.stop();
			      olddisplay(view);
			      MagicZoom.start();
			  }
                        }
                      }
                    });
                   </script>';
    }
        if (preg_match('/optionimage\.js/is',$content)) {
        $headers .= '<script type="text/javascript">
        
			var magicAddEvent = "je1";
			if(typeof(magicJS.Doc.je1) == "undefined") magicAddEvent = "jAddEvent";
			
                        $mjs(document)[magicAddEvent](\'domready\', function() {
                                zoomId = $(\'.MagicToolboxSelectorsContainer\').attr(\'id\').match(/[0-9]+/)[0];
                                $(\'.options .option select\').change(
                                    function() {
                                        var newsrc = $(this).find(\'option:selected\').attr(\'rel\');
                                        var id = $(this).find(\'option:selected\').attr(\'value\');
                                        var optId = $(this).attr(\'name\').match(/[0-9]+/)+"";
                                        
                                        if(newsrc.indexOf(\'no_image\') > 0) {
                                            // do nothing!
                                        } else {
					    MagicZoom.update(\'MagicZoomPlusImage\'+ zoomId, MagicZoomPlusOptiMages[optId][id][\'original\'], MagicZoomPlusOptiMages[optId][id][\'thumb\']);
                                        }
                                        
                                    }
                                );
                        });
                      </script>';
    }

        //if (!empty($GLOBALS['magictoolbox']['page_type']) && $GLOBALS['magictoolbox']['page_type'] == 'product') {
            $mouseEvent = $plugin->params->getValue('selectorTrigger', 'product');
            if($mouseEvent == 'hover') $mouseEvent = 'mouseover';
            if (empty($mouseEvent)) $mouseEvent = 'click';
            
            $headers .= "
            <script type=\"text/javascript\">
                var magictoolboxEvent = '".$mouseEvent."';
                var switchDelay = 350;
                if(magictoolboxEvent == 'mouseover') switchDelay = switchDelay + 60;
            </script>
            <script type=\"text/javascript\" src=\"".$prefix."catalog/view/javascript/magiczoomplus_product.js\"></script>
            ";
        //}
    

    if ($headers && $content && !isset($GLOBALS['magiczoomplus_headers_set'])) {

        if (preg_match("/components\/com_(ayelshop|aceshop|mijoshop)\/opencart\//ims",DIR_APPLICATION)) {
            $content = $headers.$content;
            $GLOBALS['magiczoomplus_headers_set'] = true;
        } else {
            $content = preg_replace('/\<\/head\>/is',"\n".$headers."\n</head>",$content,1,$matched);
        }

        if ($matched > 0) $GLOBALS['magiczoomplus_headers_set'] = true;
    } else if (isset($GLOBALS['magictoolbox']['scrollHeaders']) && !isset($GLOBALS['magictoolbox']['scrollHeadersSet']) && $GLOBALS['magictoolbox']['page_type'] == 'product') { //if scroll headers still not printed
        $content = preg_replace('/\<\/head\>/is',"\n".$GLOBALS['magictoolbox']['scrollHeaders']."\n</head>",$content,1,$matched);
        if ($matched > 0) $GLOBALS['magictoolbox']['scrollHeadersSet'] = true;
    }
    return $content;
}

function &magiczoomplus_load_core_class($currentController = false) {
    if(!isset($GLOBALS["magictoolbox"])) $GLOBALS["magictoolbox"] = array();
    if(!isset($GLOBALS["magictoolbox"]["magiczoomplus"])) {
        /* load core class */
        require_once (MTOOLBOX_ADMIN_FOLDER_magiczoomplus.'magiczoomplus.module.core.class.php');
        $tool = new MagicZoomPlusModuleCoreClass();
        /* add category for core params */
        $params = $tool->params->getParams();
        foreach($params as $k => $v) {
            $v['category'] = array(
                "name" => 'General options',
                "id" => 'general-options'
            );
            $params[$k] = $v;
        }
        $tool->params->appendParams($params);

        $GLOBALS["magictoolbox"]["magiczoomplus"] = & $tool;
    }
    if($currentController) {


        $GLOBALS['magictoolbox']['currentController'] = $currentController; //SEO url fix
        
	$settings = $currentController->config->get('magiczoomplus_settings');
	
	foreach($settings as $param_name => $param_value) {
	    if (preg_match('/([^_]*?)_([^_]*)/is',$param_name,$matches)) {
		if (!preg_match('/watermark/is',$param_name)) {
		    $GLOBALS["magictoolbox"]["magiczoomplus"]->params->setValue($matches[2],$param_value,$matches[1]);
		} else if (preg_match('/default_watermark/is',$param_name)) {
		    $GLOBALS["magictoolbox"]["magiczoomplus"]->params->setValue($matches[2],$param_value,$matches[1]);
		    $GLOBALS["magictoolbox"]["magiczoomplus"]->params->setValue(str_replace('default_','',$param_name),$param_value,'default');
		}
	    }
	} 


    }
    return $GLOBALS["magictoolbox"]["magiczoomplus"];
}

function magiczoomplus_parse_contents($content,$currentController) {

    $plugin = $GLOBALS['magictoolbox']['magiczoomplus'];
    $type = $GLOBALS['magictoolbox']['page_type'];

    
     /*OptionsImages fix START*/
    if ($type == 'product') { //use only on product page
      $options = $currentController->model_catalog_product->getProductOptions($GLOBALS['magictoolbox']['prods_info']['product_id']);

      $jsOptions = array();
      foreach ($options as $opt) {
	  $opt_id = $opt['product_option_id'];
	  
	  if (!isset($opt['option_value']) || empty($opt['option_value'])) continue;
	  
	  $opt = $opt['option_value'];
	  
	  if (is_array($opt) && count($opt)) {
	      foreach ($opt as $option) {
		  $option_value = '';
		  if (!empty($option['option_image'])) {
		      $option_value = $option['option_image'];
		  } else if (!empty($option['image'])) {
		      $option_value = $option['image'];
		  }   
		  if (!empty($option_value)) {
		      $jsOptions[$opt_id][$option['product_option_value_id']]['original'] = magiczoomplus_getThumb('image/'.$option_value,'original');
		      $jsOptions[$opt_id][$option['product_option_value_id']]['thumb'] = magiczoomplus_getThumb('image/'.$option_value,'thumb');
		  }
	      }
	  }
      }
      $oldContent = $content;
    }
    /*OptionsImages fix END*/
        

    //some bugs fix
    $content = str_replace("<!--code start-->",'',$content);
    $content = str_replace("<!--code end-->",'',$content);
    if (empty($GLOBALS['magictoolbox']['prods_info']['image']) && isset($GLOBALS['magictoolbox']['prods_info']['images'][0]['image'])) {
        $GLOBALS['magictoolbox']['prods_info']['image'] = $GLOBALS['magictoolbox']['prods_info']['images'][0]['image'];
    }

    if ($type == 'product') {
    
        $enabled = true;
        $keepSelectors = false;
        $plugin->params->setProfile('product');

        if ($plugin->type == 'circle') {
            
            $all_img = $GLOBALS['magictoolbox']['prods_info']['images'];
            if (isset($GLOBALS['magictoolbox']['prods_info']['image']) && !empty($GLOBALS['magictoolbox']['prods_info']['image'])) {
                $all_img[]['image'] = $GLOBALS['magictoolbox']['prods_info']['image'];
            }
            $enabled = $plugin->isEnabled($all_img,$GLOBALS['magictoolbox']['prods_info']['product_id']);
        }

        if ($enabled) {
	    $content = preg_replace('/<a[^>]*?id=\"mainimage\"[^<]*?<img[^<]*?<\/a>/is','MAGICTOOLBOX_PLACEHOLDER',$content,1); //replace main image and stop
	    $content = preg_replace('/<a[^>]*?id=\"mainimage\"[^<]*?<img[^<]*?<\/a>/is','',$content); //cut the possible first selector with id="mainimage"
            $content = preg_replace('/<a[^>]*?id=\"selector\"[^<]*?<img[^<]*?<\/a>/is','',$content);
            $content = preg_replace('/<a[^>]*?id=\"selector\"[^<]*?<img[^<]*?<\/a>/is','',$content);
            
            if (preg_match('/(<a[^>]*?class="Magic360)/is',$content)) {
                array_unshift($GLOBALS['magictoolbox']['prods_info']['images'],array('image' => '../catalog/view/css/360icon.jpg'));//add 360 icon to selectors
            }
            
        }

    } else {
		      
        $products = $GLOBALS['magictoolbox']['prods_info'];
        
        $productsKeys = array_keys($products);
        if (!isset($products[$productsKeys[0]]['product_id'])) return $content; //check if products are present on page
        
        if ($plugin->type != 'category') {
	    $content = magiczoomplus_category_like_replace($products,$type,$content);
	} else {
	    $content = magiczoomplus_cut_boxes($products,$type,$content); //cut all product images
	}

    } 

    if (isset($jsOptions) && count($jsOptions)  && $content != $oldContent) $content = str_replace('</head>','<script type="text/javascript"> MagicZoomPlusOptiMages = '.json_encode($jsOptions).'; </script></head>',$content);

    return $content;
}

function magiczoomplus_getProductParams ($id, $params = false) {
    if (!$params) $params = $GLOBALS['magictoolbox']['prods_info'];
    foreach ($params as $key=>$product_array) {
        if ($product_array['product_id'] == $id) {
            return $product_array;
        }
    }
}

function magiczoomplus_getThumb($src, $size = null, $pid = null) {
    if($size === null) $size = 'thumb';
    require_once (MTOOLBOX_ADMIN_FOLDER_magiczoomplus.'magictoolbox.imagehelper.class.php');
    
    if (defined('HTTP_IMAGE')) {
        $url = str_replace('image/','',HTTP_IMAGE);
    } else {
        $url = HTTP_SERVER;
    }
    $shop_dir = str_replace('system/','',DIR_SYSTEM);
    $image_dir = str_replace ($shop_dir,'',DIR_IMAGE);

    if (!isset($GLOBAL['imagehelper'])) {
        $GLOBAL['imagehelper'] = new MagicToolboxImageHelperClass($shop_dir, '/'.$image_dir.'magictoolbox_cache', $GLOBALS["magictoolbox"]["magiczoomplus"]->params, null, $url);
    }
    return preg_replace('/https?\:\/\//is','//',$GLOBAL['imagehelper']->create('/' . $src, $size, $pid));
}

function magiczoomplus_getMainTemplate($info,$type) {

    $plugin = $GLOBALS["magictoolbox"]["magiczoomplus"];
    
    $shop_dir = str_replace('system/','',DIR_SYSTEM);
    $image_dir = str_replace ($shop_dir,'',DIR_IMAGE);
    
    $title = $info['name'];
    $title = htmlspecialchars(htmlspecialchars_decode($title, ENT_QUOTES));
    $description = $info['description'];
    $description = htmlspecialchars(htmlspecialchars_decode($description, ENT_QUOTES));
    $id = $info['product_id'].'_'.$type;
    
    if ($type == 'product') {
        $js_id = '<script type="text/javascript"> 
                    idimg = "MagicZoomPlusImage'.$id.'"; 
                    productId = '.(int)$info['product_id'].'; 
                </script>';
    } else {
        $js_id = '';
    }

    
    $src = $image_dir.$info['image'];
    $img = magiczoomplus_getThumb($src,'original',$id);
    $thumb = magiczoomplus_getThumb($src,null,$id);
    $thumb2x = magiczoomplus_getThumb($src,'thumb2x',$id);                
    
    $link = '';
    if (isset($info['link'])) $link = $info['link'];
    
    $img_org = $img = $plugin->getMainTemplate(compact('img','thumb', 'thumb2x','id','title','description','link'));
    $img = str_replace('rel="','rel="group: '.$type.'; ',$img);
    if ($img_org == $img) $img = str_replace('<a','<a rel="group: '.$type.'" ',$img);
    $result = $js_id.$img;
    
    return $result; 
}

function magiczoomplus_getSelectorsTemplate($info,$type) {

    $plugin = $GLOBALS["magictoolbox"]["magiczoomplus"];

    $shop_dir = str_replace('system/','',DIR_SYSTEM);
    $image_dir = str_replace ($shop_dir,'',DIR_IMAGE);
    
    $title = $info['name'];
    $title = htmlspecialchars(htmlspecialchars_decode($title, ENT_QUOTES));
    $id = $info['product_id'].'_'.$type;
    
    $result = array();
    $spinPresent = false;
    $videoPresent = false;
    
    if (isset($info['videos']) && is_array($info['videos']) && count($info['videos'])) {
        $videoPresent = true;
    }

    
    $images = $info['images'];
    if (isset($info['image']) && !empty($info['image'])) { //add main image to selectors
        if (isset($images[0]) && strpos($images[0]['image'],'360icon.jpg')) {
            $m360selector = array_shift($images);
            array_unshift($images,array('image' => $info['image']));
            array_unshift($images,$m360selector);
            $spinPresent = true;
        } else {
            array_unshift($images,array('image' => $info['image']));
        }
    }
    
    if (is_array($images) && count($images) > 1) {
	foreach ($images as $image) {
	
            if ($spinPresent && !$plugin->params->checkValue('watermark', '')) { //skip the first image (spin selector)
                    $watermark_original = $plugin->params->getValue('watermark'); 
                    $plugin->params->setValue('watermark',''); 
                    $spinPresent = false;
            }
	
	    $src = $image_dir.$image['image'];
	    $img = magiczoomplus_getThumb($src,'original',$id);
	    $medium = magiczoomplus_getThumb($src,null,$id);
	    $medium2x = magiczoomplus_getThumb($src,'thumb2x',$id);
	    $thumb = magiczoomplus_getThumb($src,'selector',$id);
	    $thumb2x = magiczoomplus_getThumb($src,'selector2x',$id);                
	    
	    $result[] = $plugin->getSelectorTemplate(compact('title','img','medium', 'medium2x','thumb', 'thumb2x','id'));;
	    
	    if (isset($watermark_original)) { //restore watermark after spin render
                $plugin->params->setValue('watermark',$watermark_original); 
                unset($watermark_original);
           }
	}
     }
     
     
      if ($videoPresent) {
    
        $scrollEnabled = $plugin->params->checkValue('magicscroll', 'Yes');
        $sMaxWidth = (int)$plugin->params->getValue('selector-max-width');
        $sMaxHeight = (int)$plugin->params->getValue('selector-max-height');
        
        $GLOBALS["magictoolbox"]['containersData'] = '';
        $videoIndex = 1;
        
        foreach ($info['videos'] as $video) {
        
             if($video['type'] == 'youtube') {
                $dataVideoType = 'youtube';
                $GLOBALS["magictoolbox"]['containersData']['video-'.$videoIndex] = '<iframe src="https://www.youtube.com/embed/'.$video['code'].'?enablejsapi=1"';
            } else {
                $dataVideoType = 'vimeo';
                $GLOBALS["magictoolbox"]['containersData']['video-'.$videoIndex] = '<iframe src="https://player.vimeo.com/video/'.$video['code'].'?byline=0&portrait=0"';
            }
            
            $GLOBALS["magictoolbox"]['containersData']['video-'.$videoIndex] .=
                //' width="'.$maxWidth.'" height="'.$maxHeight.'"'.
                ' frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen data-video-type="'.$dataVideoType.'"></iframe>';
        
        
            $result[] = '<a data-magic-slide-id="video-'.$videoIndex.'" data-video-type="'.$video['type'].'" class="video-selector" href="#" onclick="return false">'.
                '<span><b></b></span>'.
                '<img src="'.$video['thumb'].'" alt="video"'.($scrollEnabled ? '' : ' style="max-width: '.$sMaxWidth.'px; max-height: '.$sMaxHeight.'px;"').'/>'.
                '</a>';
                
            $videoIndex++;
        }
    }

     
    return $result;
}

function magiczoomplus_set_params_from_config ($config = false) {
    if ($config) {
        $plugin = $GLOBALS["magictoolbox"]["magiczoomplus"];

        foreach ($plugin->params->getNames() as $name) {
            if ($config->get($name)) {
                $plugin->params->setValue($name,$config->get($name));
            }
        }
        foreach ($plugin->params->getParams() as $param) {
            if (!isset($param['value'])) {
                $plugin->params->setValue($param['id'],$plugin->params->getValue($param['id']));
            }
        }

        $plugin->general->appendParams($plugin->params->getParams());
    }
}

function magiczoomplus_use_effect_on(&$tool) {
    return !$tool->params->checkValue('use-effect-on-product-page','No') ||
           !$tool->params->checkValue('use-effect-on-category-page','No') ||
           !$tool->params->checkValue('use-effect-on-latest-box','No') ||
           !$tool->params->checkValue('use-effect-on-featured-box','No') ||
           !$tool->params->checkValue('use-effect-on-special-box','No') ||
           !$tool->params->checkValue('use-effect-on-bestsellers-box','No');
}


function magiczoomplus_category_like_replace ($products, $type, $content) {
    
    $plugin = $GLOBALS["magictoolbox"]["magiczoomplus"];
    if ($type != $plugin->params->getProfile()) $type = $plugin->params->getProfile(); //fix for boxes
    
    foreach ($products as $pid => $product) {
	if ($pid != $product['product_id']) $pid = $product['product_id']; //fix for boxes
	$id = $type.'_'.$pid;
	
	preg_match('/<a[^>]*?href=\"([^\"]*)\"[^<]*?<img[^>]*?id=\"'.$id.'\"[^<]*?<\/a>/is',$content,$matches);
	if (isset($matches[1])) {
            $product['link'] = $matches[1];
        }
        
        $content = preg_replace('/<a[^<]*?<img[^>]*?id=\"'.$id.'\"[^<]*?<\/a>/is',magiczoomplus_getMainTemplate($product,$type),$content);
    }
        
    return $content;
}

function magiczoomplus_cut_boxes ($products,$type,$content) {

    $placeholder = 'MAGICTOOLBOX_PLACEHOLDER';

    $plugin = $GLOBALS["magictoolbox"]["magiczoomplus"];
    if ($type != $plugin->params->getProfile()) $type = $plugin->params->getProfile(); //fix for boxes
    
    //get Product links
    foreach ($products as $pid => $product) {
        if ($pid != $product['product_id']) $pid = $product['product_id']; //fix for boxes
        $id = $type.'_'.$product['product_id'];
        preg_match('/<a[^>]*?href=\"([^\"]*)\"[^<]*?<img[^>]*?id=\"'.$id.'\"[^<]*?<\/a>/is',$content,$matches);
        $link = $matches[1];
        $GLOBALS['magictoolbox']['plinks'][$pid] = $link;
    }
    
    $content = preg_replace('/(^.*?<div[^>]*>)(.*)(<\/div>.*)/is','$1'.$placeholder.'$3',$content); //cut all content inside first div
           
    return $content;
}



?>
