<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');

global $tools;
$tools = array('magic360','magicthumb','magiczoom','magiczoomplus','magicslideshow','magicscroll');

if (!isset($GLOBALS['magictoolbox_modules'])) {

    if (!isset($db)) {
        if (!defined('DB_PORT')){
            define('DB_PORT','3306'); //fix for older OpenCarts
        }
        $db = new DB(DB_DRIVER,DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_DATABASE,DB_PORT);
    }

    
    $modules = array();

    $sql = "SELECT * FROM ".DB_PREFIX."setting WHERE code IN ('" . implode("','",$tools) . "')";
    $result = $db->query($sql);

    if ($result->num_rows) { //found extensions
        foreach ($result->rows as $module) {
            $settings = json_decode($module['value'],true);
            if ($settings === NULL) { //maybe old OpenCart serialize method
                $settings = unserialize($module['value']);
            }
            $status = $settings[$module['code'].'_status'];
            $modules[$module['code']]['status'] = $status;
            $modules[$module['code']]['settings'] = $settings;
        }
    }
    
    $GLOBALS['magictoolbox_modules'] = $modules;
    
}

if (!function_exists('setModuleHeaders')) { //loads on top of every page
    function setModuleHeaders ($content, $controller = false) {

        if (isset($GLOBALS['magictoolbox_modules'])) { 
        
            global $tools;
            foreach ($tools as $tool) {
                if ($tool == 'magic360') continue;
                if (isset($GLOBALS['magictoolbox_modules'][$tool])) {
                    $module = $GLOBALS['magictoolbox_modules'][$tool];
                    
                    $headersFunction = $tool.'_set_headers';
                    
                    if ($module['status'] && file_exists(dirname(__FILE__).'/'.$tool.'-opencart-module/module.php')) { //if module enabled and exists
                        if (!function_exists($headersFunction) ) include (dirname(__FILE__).'/'.$tool.'-opencart-module/module.php');
                        $content = $headersFunction($content, false, $controller);
                    }
                }
            }
        }
    
    
        return $content;
        
    }
}

if (!function_exists('magicRender')) { //loads only on content render
    function magicRender ($content, $controller, $type, $info = false) {

        if (isset($GLOBALS['magictoolbox_modules'])) { 
            global $tools;
            foreach ($tools as $tool) {
                if (isset($GLOBALS['magictoolbox_modules'][$tool])) {
                    $module = $GLOBALS['magictoolbox_modules'][$tool];
                    
                    $renderFunction = $tool;
                    
                    if ($module['status'] && file_exists(dirname(__FILE__).'/'.$tool.'-opencart-module/module.php')) { //if module enabled and exists
                        if (!function_exists($renderFunction)) include (dirname(__FILE__).'/'.$tool.'-opencart-module/module.php');
                        $content = $renderFunction($content,$controller,$type,$info);
                    }
                }
            }
        }

        return $content;
        
    }
}


?>