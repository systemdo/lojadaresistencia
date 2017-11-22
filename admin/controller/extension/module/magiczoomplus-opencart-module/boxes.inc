<?php
$module_name = strtolower(str_replace('controllermodule','',strtolower(get_class($this))));
$module_name = strtolower(str_replace('controllerextensionmodule','',strtolower($module_name)));

if (!isset($results) && isset($products)) {
	$results = $product_infos;
} else if (!isset($results) && !isset($products)){
	$results=false;
}
if (version_compare(VERSION,'1.5','>=')) {
	if (isset($module)) {
	    $id = $module_name.'_'.$this->config->get($module_name.'_'.$module.'_position');
	} else {
	    if (isset($setting['position'])) {
		$id = $module_name.'_'.$setting['position'];
	    }
	}
} else {
	$id = $this->id.'_'.$this->config->get($this->id.'_position');
}
if (version_compare(VERSION,'2','<')) {
    $this->output = MagicZoomPlus($this->output,$this,$id,$results);
} else {
    if (isset($id)) {
	$contents = MagicZoomPlus($contents,$this,$id,$results);
    }
}
?>

