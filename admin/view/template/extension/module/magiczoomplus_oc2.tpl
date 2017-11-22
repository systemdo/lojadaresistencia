<?php

if (isset($_GET['magic'])) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}

$old_header = $header;
$header = str_replace('</head>',$style.$script.'</head>',$header);
if ($old_header == $header) {
    $header = str_replace('<div id="container">',$style.$script.'<div id="container">',$header);
}

echo $header; ?>

<?php echo $column_left; ?>

<div id="content">
<form action="<?php echo $action; ?>" method="post" id="form-magiczoomplus" name="form-magiczoomplus" class="form-horizontal">
    <div class="page-header">
	<div class="container-fluid">
	    <div class="pull-right">
		<button type="submit" form="form-magiczoomplus" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
		<a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a>
	    </div>
	    <h1><?php echo $heading_title; ?></h1>
	    <ul class="breadcrumb">
	      <?php foreach ($breadcrumbs as $breadcrumb) { ?>
	      <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
	      <?php } ?>
	    </ul>
	</div>
    </div>

<div class="container-fluid">

<?php 

if ($refresh_modifications) { 
   echo  '<iframe style="display:none;" src="'.HTTPS_SERVER.'index.php?route=extension/modification/refresh&'.$token_url.'" width="0" height="0"></iframe>';
}

if ($error_warning) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    
<?php 
if (preg_match("/components\/com_(ayelshop|aceshop|mijoshop)\/opencart\//ims",DIR_APPLICATION)) {
    print $style;
}
?>
<div class="content">

  <?php if ($trial) echo $trial_bage;  ?>
  
  <ul class="nav nav-tabs">
	<li class="active" >
	    <a href="#tab-general" data-toggle="tab">General</a>
	</li>
	
	<?php foreach ($blocks as $block_id => $block_name) { 
	if ($block_id == 'default') continue;
	?>
	<li>
	    <a href="#tab-<?php echo $block_id; ?>" data-toggle="tab"><?php echo $block_name; ?></a>
	</li>
	<?php } ?>
	
    </ul>
    
    <div class="tab-content">
    
	<div class="tab-pane  active" id="tab-general">
  
	    <div class="panel panel-default">
		<div class="panel-heading">
		    <h3 class="panel-title"><i class="fa fa-pencil"></i>Module status</h3>
		</div>
	    
		<div class="panel-body <?php echo $toolAbr; ?>params">
		
		    <div class="form-group">
			<label class="col-sm-2 control-label" for="magiczoomplussettingStatus">Enable/Disable module</label>
			<div class="col-sm-10">
			  <select name="magiczoomplus_status" class="form-control">
				<option value="1" <?php echo (($magiczoomplus_status) ? 'selected' : ''); ?> ><?php echo $text_enabled; ?></option>
				<option value="0" <?php echo ((!$magiczoomplus_status) ? 'selected' : ''); ?> ><?php echo $text_disabled; ?></option>
			  </select>
			  <input type="hidden" name="magiczoomplus_status_was" value="<?php echo $magiczoomplus_status; ?>">
			</div>
		    </div>
		    
		</div>
	    </div>
	    
	    <?php echo $groupsHTML['general']; ?>
	    
	    <div class="panel panel-default">
		    <div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-pencil"></i>Other</h3>
		    </div>
		    
		    <div class="panel-body <?php echo $toolAbr; ?>params">
				<div class="form-group">
				<label class="col-sm-2 control-label" for="magiczoomplussettingChache-path">Path to cache folder</label>
				<div class="col-sm-10">
						<input class="form-control" type="text" size="60" value="<?php echo $path_to_cache; ?>" disabled="disabled" />
						<p class="help-block">Relative for site base path</p>
				</div>
				</div>
				<div class="form-group">
				<label class="col-sm-2 control-label" for="magiczoomplussettingTotal-items">Total items</label>
				<div class="col-sm-10">
						<input class="form-control" type="text" size="60" value="<?php echo $total_items; ?>" disabled="disabled" />
				</div>
				</div>
				<div class="form-group">
				<label class="col-sm-2 control-label" for="magiczoomplussettingUnuser-items">Unused items</label>
				<div class="col-sm-10">
						<input class="form-control" type="text" size="60" value="<?php echo $unused_items; ?>" disabled="disabled" />
				</div>
				</div>
				<div class="form-group">
				<label class="col-sm-2 control-label" for="magiczoomplussettingEmpte-chache">Empty cache</label>
				<div class="col-sm-10">
						<select class="form-control" name="what-clear">
						<option value="unused_items" selected="selected">Delete unused items</option>
						<option value="all_items">Delete all items</option>
						</select>&nbsp;
						<input type="hidden" id="clear_cache" name="clear_cache" value="0" />
					</div>
				</div>
				<div class="form-group">
				<div class="col-sm-2"></div>
					<div class=" col-sm-10">
						<a class="btn btn-primary" onclick="$('#clear_cache').val(1);$(this).closest('form').submit();" class="button"><span><?php echo $button_clear; ?></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<?php 
        foreach ($blocks as $block_id => $block_name) { 
            if ($block_id == 'default') continue;
            echo $groupsHTML[$block_id];
        }?>
	  
	</div>

      </div>
    </form>
  </div>
</div>
</div>
<?php echo $footer; ?>

 

