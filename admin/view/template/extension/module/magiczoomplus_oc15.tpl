<?php
if (isset($_GET['magic'])) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}

global $toolAbr, $corePath;
$toolAbr = '';
$abr = explode(" ", strtolower("Magic Zoom Plus"));
foreach ($abr as $word) $toolAbr .= $word{0};

$corePath = HTTP_SERVER.'view/image/magiczoomplus-opencart-module';
?>

<?php
$style = '<style type="text/css">
    .'.$toolAbr.'params { margin:20px 0; width:100%; border:1px solid #dfdfdf; }
    .'.$toolAbr.'params table { width:100%; }
    .'.$toolAbr.'params .params th {  vertical-align:middle; border-bottom:1px solid #dfdfdf; padding:15px 5px; font-weight:bold; background:#fff; text-align:left; padding:0 20px; }
    .'.$toolAbr.'params .params td { vertical-align:middle; border-bottom:1px solid #dfdfdf; padding:10px 5px; background:#fff; width:100%; }
    .'.$toolAbr.'params .params tr.back th, .'.$toolAbr.'params .params tr.back td { background:#f9f9f9; }
    .'.$toolAbr.'params .params tr.last th, .'.$toolAbr.'params .params tr.last td { border:none; }
    .afterText {font-size:11px;font-style:normal;font-weight:normal;}
    .settingsTitle {font-size: 1.5em;font-weight: normal;margin: 1.7em 0 1em 0;}
    input[type="checkbox"],input[type="radio"] {margin:5px;vertical-align:middle !important;}
    td img {vertical-align:middle !important; margin-right:10px;}
    td span {vertical-align:middle !important; margin-right:10px;}
    .mzparams label { display:inline !important; }
    .fixed .buttons {
        margin-right: 25px !important;
        right: 0% !important;
    }
    .fixed{
          border-radius: 0 0 0 0 !important;
          left: 0;
          position: fixed;
          top: 0;
          width: 100%;
      
    }
</style>';
$script = '<script type="text/javascript">
$(document).ready(function() {
    $(\'#tabs a\').tabs();
    var headingTop = $(\'.heading\').position().top;
    console.log(headingTop);
    $(window).scroll(function() {
        if(headingTop >= $(window).scrollTop()) {
            if($(\'.heading\').hasClass(\'fixed\')) {
                $(\'.heading\').removeClass(\'fixed\');
            }
        } else { 
            if(!$(\'.heading\').hasClass(\'fixed\')) {
                $(\'.heading\').addClass(\'fixed\');
            }
        }
    });
});
</script>';
$old_header = $header;
$header = str_replace('</head>',$style.$script.'</head>',$header);
if ($old_header == $header) {
    $header = str_replace('<div id="container">',$style.$script.'<div id="container">',$header);
}

echo $header; ?>
<div id="content">
<div class="breadcrumb">
  <?php foreach ($breadcrumbs as $breadcrumb) { ?>
  <?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
  <?php } ?>
</div>
<?php if ($error_warning) { ?>
<div class="warning"><?php echo $error_warning; ?></div>
<?php } ?>
<?php 
if (preg_match("/components\/com_(ayelshop|aceshop|mijoshop)\/opencart\//ims",DIR_APPLICATION)) {
    print $style;
}
?>
<div class="box">
  <div class="heading">
    <h1><?php echo $heading_title; ?></h1>
    <div class="buttons"><a onclick="$('#form').submit();" class="button"><span><?php echo $button_save; ?></span></a><a onclick="location = '<?php echo $cancel; ?>';" class="button"><span><?php echo $button_cancel; ?></span></a></div>
  </div>

  <div class="content">
  
  <div id="tabs" class="htabs">
    <?php 
    $first = false;
    foreach ($blocks as $bid => $btitle) { ?>
    <a href="#tab-<?php echo $bid ?>" <?php if (!$first)  echo 'class="selected"';  ?> style="display: inline;"><?php echo $btitle; ?></a>
    <?php $first = true; } ?>
  </div>
  
  <form action="<?php echo $action; ?>" method="post" id="form">
  
	<div id="tab-default" style="display: block">
	
	<?php trial_bage(); ?>
	
	<h3 class="settingsTitle">Module status</h3>
        <div class="<?php echo $toolAbr; ?>params">
        <table class="params" cellspacing="0">
            <tr class="last">
                <th width="30%">
                    <label for="magiczoomplussettingStatus">Enable/Disable module</label>
                </th>
                <td width="70%">
                    <select name="magiczoomplus_status">
                    <?php if ($this->config->get('magiczoomplus_status')) { ?>
                    <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                    <option value="0"><?php echo $text_disabled; ?></option>
                    <?php } else { ?>
                    <option value="1"><?php echo $text_enabled; ?></option>
                    <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                    <?php } ?>
                    </select>
                </td>
            </tr>
        </table>
        </div>
        
        <?php echo groupsHTML($parameters, 'default', array('default' => array('Watermark' => $map['default']['Watermark']))); ?>
        
        <h3 class="settingsTitle">Other</h3>
        <div class="<?php echo $toolAbr; ?>params">
        <table class="params" cellspacing="0">
            <tr>
                <th width="30%">
                    <label for="magiczoomplussettingChache-path">Path to cache folder<br/>Relative for site base path</label>
                </th>
                <td width="70%">
                    <input type="text" size="60" value="<?php echo $path_to_cache; ?>" disabled="disabled" />
                </td>
            </tr>
            <tr class="back">
                <th width="30%">
                    <label for="magiczoomplussettingTotal-items">Total items</label>
                </th>
                <td width="70%">
                    <input type="text" size="60" value="<?php echo $total_items; ?>" disabled="disabled" />
                </td>
            </tr>
        <tr>
            <th width="30%">
                <label for="magiczoomplussettingUnuser-items">Unused items</label>
            </th>
            <td width="70%">
                <input type="text" size="60" value="<?php echo $unused_items; ?>" disabled="disabled" />
            </td>
        </tr>
        <tr class="last back">
            <th width="30%"><label for="magiczoomplussettingEmpte-chache">Empty cache</label></th>
            <td width="70%">
                <select name="what-clear">
                <option value="unused_items" selected="selected">Delete unused items</option>
                <option value="all_items">Delete all items</option>
                </select>&nbsp;
                <input type="hidden" id="clear_cache" name="clear_cache" value="0" />
                <a onclick="$('#clear_cache').val(1);$('#form').submit();" class="button"><span><?php echo $button_clear; ?></span></a>
            </td>
        </tr>
      </table>
      </div>
        
	</div>
	
  <?php 
  foreach ($blocks as $bid => $btitle) { 
      if ($bid == 'default') continue;
  ?>
    <div id="tab-<?php echo $bid ?>" style="display: none;">
	<?php echo groupsHTML($parameters, $bid, $map); ?>
    </div>
  <?php } ?>

     </div>
  </form>

  </div>
</div>
<?php echo $footer; ?>

<?php

function groupsHTML ($parameters, $profile = 'default', $map) {

    if (!isset($parameters[$profile])) return false;
	    
    $parameters = $parameters[$profile];
    
    
    $imgArray = array('zoom &amp; expand','yes','zoom','expand','expanded','original','swap images only','no','left','top left', 'top-left', 'top','top right', 'top-right', 'right', 'bottom right', 'bottom-right', 'bottom', 'bottom left', 'bottom-left'); //array for the images ordering

    global $toolAbr, $magiczoomplus_status , $corePath;
    $html = ''; $result = '';
    
    
    $groups = array();
        foreach ($parameters as $name => $s) {

			if (!isset($map[$profile][$s['group']]) || !in_array($s['id'], $map[$profile][$s['group']])) continue;

			if ($profile == 'product') {
			    if ($s['id'] == 'page-status' && !isset($s['value'])) {
				$s['default'] = 'Yes';
			    }
			}

			if ($s['id'] == 'direction') continue;
			
			
			if ($s['id'] == 'thumb-max-width' && !isset($s['value']) && in_array($profile,array('featured','bestseller','latest','special'))) {
			    $s['default'] = '100';
			}
			
			if ($s['id'] == 'thumb-max-height' && !isset($s['value']) && in_array($profile,array('featured','bestseller','latest','special'))) {
			    $s['default'] = '100';
			}

                        
                        if (!isset($s['group'])) {
                            $s['group'] = 'Miscellaneous';
                        }
                        if (!isset($groups[$s['group']])) {
                                $groups[$s['group']] = array();
                        }

                        if (strpos($s["label"],'(')) {
                            $before = substr($s["label"],0,strpos($s["label"],'('));
                            $after = ' '.str_replace(')','',substr($s["label"],strpos($s["label"],'(')+1));
                        } else {
                            $before = $s["label"];
                            $after = '';
                        }
                        if (strpos($after,'%')) $after = ' %';
                        if (strpos($after,'in pixels')) $after = ' pixels';
                        if (strpos($after,'milliseconds')) $after = ' milliseconds';
                        if (isset($s["description"]) && trim($s["description"]) != '') $after .= '</br>'.$s["description"];


                            $html  .= '<tr>';
                            $html  .= '<th width="30%">';
                            $html  .= '<label for="magiczoomplussettings'. ucwords(strtolower($name)).'">'.$before.'</label>';

                            if(($s['type'] != 'array') && isset($s['values'])) $html .= '<br/> <span class="afterText">' . implode(', ',$s['values']).'</span>';

                            $html .= '</th>';
                            $html .= '<td width="70%">';

                            switch($s["type"]) {
                                case "array":
                                        $rButtons = array();
                                        foreach($s["values"] as $p) {
                                            if (!isset($s["value"])) $s["value"] = $s["default"];
                                            $rButtons[strtolower($p)] = '<label><input type="radio" value="'.$p.'"'. ($s["value"]==$p?"checked=\"checked\"":"").' name="'.$profile.'_'.$s['id'].'" id="magiczoomplussettings'. ucwords(strtolower($name)).$p.'">';
                                            $pName = ucwords($p);
                                            if(strtolower($p) == "yes")
                                                $rButtons[strtolower($p)] .= '<img src="'.$corePath.'/admin_graphics/yes.gif" alt="'.$pName.'" title="'.$pName.'" /></label>';
                                            elseif(strtolower($p) == "no")
                                                $rButtons[strtolower($p)] .= '<img src="'.$corePath.'/admin_graphics/no.gif" alt="'.$pName.'" title="'.$pName.'" /></label>';
                                            elseif(strtolower($p) == "left")
                                                $rButtons[strtolower($p)] .= '<img src="'.$corePath.'/admin_graphics/left.gif" alt="'.$pName.'" title="'.$pName.'" /></label>';
                                            elseif(strtolower($p) == "right")
                                                $rButtons[strtolower($p)] .= '<img src="'.$corePath.'/admin_graphics/right.gif" alt="'.$pName.'" title="'.$pName.'" /></label>';
                                            elseif(strtolower($p) == "top")
                                                $rButtons[strtolower($p)] .= '<img src="'.$corePath.'/admin_graphics/top.gif" alt="'.$pName.'" title="'.$pName.'" /></label>';
                                            elseif(strtolower($p) == "bottom")
                                                $rButtons[strtolower($p)] .= '<img src="'.$corePath.'/admin_graphics/bottom.gif" alt="'.$pName.'" title="'.$pName.'" /></label>';
                                            elseif(str_replace('-',' ',strtolower($p)) == "bottom left")
                                                $rButtons[strtolower($p)] .= '<img src="'.$corePath.'/admin_graphics/bottom-left.gif" alt="'.$pName.'" title="'.$pName.'" /></label>';
                                            elseif(str_replace('-',' ',strtolower($p)) == "bottom right")
                                                $rButtons[strtolower($p)] .= '<img src="'.$corePath.'/admin_graphics/bottom-right.gif" alt="'.$pName.'" title="'.$pName.'" /></label>';
                                            elseif(str_replace('-',' ',strtolower($p)) == "top left")
                                                $rButtons[strtolower($p)] .= '<img src="'.$corePath.'/admin_graphics/top-left.gif" alt="'.$pName.'" title="'.$pName.'" /></label>';
                                            elseif(str_replace('-',' ',strtolower($p)) == "top right")
                                                $rButtons[strtolower($p)] .= '<img src="'.$corePath.'/admin_graphics/top-right.gif" alt="'.$pName.'" title="'.$pName.'" /></label>';
                                            else $rButtons[strtolower($p)] .= '<span>'.ucwords($p).'</span></label>';
                                        }
                                        foreach ($imgArray as $img){
                                            if (isset($rButtons[$img])) {
                                                $html .= $rButtons[$img];
                                                unset($rButtons[$img]);
                                            }
                                        }
                                        $html .= implode('',$rButtons);
                                    break;
                                case "num":
                                case "text":
                                default:
                                    if (strtolower($name) == 'message') { $width = 'style="width:95%;"';} else {$width = '';}
                                    if (!isset($s["value"])) $s["value"] = $s["default"];
                                    $html .= '<input '.$width.' type="text" name="'.$profile.'_'.$s['id'].'" id="magiczoomplussettings'. ucwords(strtolower($name)).'" value="'.$s["value"].'" />';
                                    break;
                            }

                            $html .= '<span class="afterText">'.$after.'</span>';
                            $html .= '</td>';
                            $html .= '</tr>';
                            $groups[$s['group']][] = $html;
                            $html = '';

        }


        foreach ($groups as $name => $group) {
                        $i = 0;
                        $group[count($group)-1] = str_replace('<tr','<tr class="last"',$group[count($group)-1]); //set "last" class

                        $result .= '<h3 class="settingsTitle">'.$name.'</h3>
                                    <div class="'.$toolAbr.'params">
                                    <table class="params" cellspacing="0">';

                        foreach ($group as $g) {
                            if (++$i%2==0) { //set stripes
                                if (strpos($g,'class="last"')) {
                                    $g = str_replace('class="last"','class="back last"',$g);
                                } else {
                                    $g = str_replace('<tr','<tr class="back"',$g);
                                }
                            }
                            $result .= $g;
                        }
                        $result .= '</table> </div>';
                    }
    return $result;

}
?>


<?php
function trial_bage() {
if (!preg_match('/DEMO/is',@file_get_contents(DIR_CATALOG.'view/javascript/magiczoomplus.js'))) return;
echo '
  <div style="border: 1px solid #C7C16C;background: #feffd0;text-align: center;">
  <h1 style="color: black;font-size: 1.5em;text-transform: none;">Trial version</h1>
  To remove the red "<span style="color:red;">Please upgrade..</span>" text, please <a target="_blank" href="http://magictoolbox.com/buy/magiczoomplus/"><b>buy</b></a> and upload your licensed magiczoomplus.js file to this folder:
  <div style="padding:10px 0;">'.preg_replace('/^.*?([^\/]*\/?$)/is','$1',DIR_CATALOG).'view/javascript/magiczoomplus.js</div></div>';
}

 ?>
 

