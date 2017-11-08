<?php

/* tool/backup.twig */
class __TwigTemplate_c15de0b3b194cbaff9334b39a1d00ce1acee7bd934e13c55fd6e93d42e62f954 extends Twig_Template
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
        <button type=\"button\" id=\"button-upload\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-upload\"></i></button>
      </div>
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
            echo "          <li><a href=\"";
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
  <div class=\"container-fluid\">";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 21
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 22
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-exchange\"></i> ";
        // line 28
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 33
        echo (isset($context["text_progress"]) ? $context["text_progress"] : null);
        echo "</legend>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 35
        echo (isset($context["entry_progress"]) ? $context["entry_progress"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div id=\"progress-backup\" class=\"progress\">
                  <div id=\"progress-bar\" class=\"progress-bar\"></div>
                </div>
                <div id=\"progress-text\"></div>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 45
        echo (isset($context["text_option"]) ? $context["text_option"] : null);
        echo "</legend>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 47
        echo (isset($context["entry_export"]) ? $context["entry_export"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                  ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tables"]) ? $context["tables"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
            // line 51
            echo "                    <div class=\"checkbox\">
                      <label><input type=\"checkbox\" name=\"backup[]\" value=\"";
            // line 52
            echo $context["table"];
            echo "\" checked=\"checked\"/> ";
            echo $context["table"];
            echo "</label>
                    </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </div>
                <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\" class=\"btn btn-link\">";
        // line 56
        echo (isset($context["text_select_all"]) ? $context["text_select_all"] : null);
        echo "</button> / <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\" class=\"btn btn-link\">";
        echo (isset($context["text_unselect_all"]) ? $context["text_unselect_all"] : null);
        echo "</button>
              </div>
            </div>
            <div class=\"form-group\">
              <div class=\"col-sm-offset-2 col-sm-10\">
                <button type=\"button\" id=\"button-backup\" data-loading-text=\"";
        // line 61
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-upload\"></i> ";
        echo (isset($context["button_backup"]) ? $context["button_backup"] : null);
        echo "</button>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 66
        echo (isset($context["text_history"]) ? $context["text_history"] : null);
        echo "</legend>
            <div class=\"alert alert-info\"><i class=\"fa fa fa-exclamation-circle\"></i> ";
        // line 67
        echo (isset($context["text_import"]) ? $context["text_import"] : null);
        echo "</div>
            <div id=\"history\"></div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#history').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();

\t\$('#history').load(this.href);
});

\$('#history').load('index.php?route=tool/backup/history&user_token=";
        // line 82
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-backup').on('click', function() {
\t\$('#progress-bar').css('width', '0%');
\t\$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');

\tbackup('index.php?route=tool/backup/backup&user_token=";
        // line 89
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&table=' + \$('input[name^=\\'backup\\']:checked').first().val());
});

function backup(url) {
\t\$('#progress-bar').css('width', '0%');
\t\$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');

\t\$.ajax({
\t\turl: url,
\t\ttype: 'post',
\t\tdata: \$('input[name^=\\'backup\\']:checked'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-backup').button('loading');
\t\t\t\$('#button-upload, #history .btn').prop('disabled', true);
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['progress']) {
\t\t\t\t\$('#progress-bar').css('width', json['progress'] + '%');
\t\t\t}

\t\t\tif (json['error']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');

\t\t\t\t\$('#history').load('index.php?route=tool/backup/history&user_token=";
        // line 116
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');

\t\t\t\t\$('#button-backup').button('reset');
\t\t\t\t\$('#button-upload, #history .btn').prop('disabled', false);
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#progress-bar').css('width', '100%').addClass('progress-bar-success');
\t\t\t\t\$('#progress-text').html('<div class=\"text-success\">' + json['success'] + '</div>');

\t\t\t\t\$('#history').load('index.php?route=tool/backup/history&user_token=";
        // line 126
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');

\t\t\t\t\$('#button-backup').button('reset');
\t\t\t\t\$('#button-upload, #history .btn').prop('disabled', false);
\t\t\t}

\t\t\tif (json['text']) {
\t\t\t\t\$('#progress-text').html(json['text']);
\t\t\t}

\t\t\tif (json['next']) {
\t\t\t\tbackup(json['next']);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

\t\t\t\$('#button-backup').button('reset');
\t\t\t\$('#button-upload, #history .btn').prop('disabled', false);
\t\t}
\t});
};

// Restore
\$('#history').on('click', '.btn-warning', function() {
\t\$('#progress-bar').css('width', '0%');
\t\$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');

\trestore('index.php?route=tool/backup/restore&user_token=";
        // line 154
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filename=' + encodeURIComponent(\$(this).val(), this));
});

function restore(url, element) {
\t\$.ajax({
\t\turl: url,
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t\t\$('#button-upload, #button-backup, #history .btn').not(element).prop('disabled', true);
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['progress']) {
\t\t\t\t\$('#progress-bar').css('width', json['progress'] + '%');
\t\t\t}

\t\t\tif (json['error']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');

\t\t\t\t\$('#history').load('index.php?route=tool/backup/history&user_token=";
        // line 177
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');

\t\t\t\t\$(element).button('reset');
\t\t\t\t\$('#button-upload, #button-backup, #history .btn').not(element).prop('disabled', false);
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#progress-bar').css('width', '100%').addClass('progress-bar-success');
\t\t\t\t\$('#progress-text').html('<div class=\"text-success\">' + json['success'] + '</div>');

\t\t\t\t\$('#history').load('index.php?route=tool/backup/history&user_token=";
        // line 187
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');

\t\t\t\t\$(element).button('reset');
\t\t\t\t\$('#button-upload, #button-backup, #history .btn').not(element).prop('disabled', false);
\t\t\t}

\t\t\tif (json['text']) {
\t\t\t\t\$('#progress-text').html(json['text']);
\t\t\t}

\t\t\tif (json['next']) {
\t\t\t\trestore(json['next'], element);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

\t\t\t\$(element).button('reset');
\t\t\t\$('#button-upload, #button-backup, #history .btn').not(element).prop('disabled', false);
\t\t}
\t});
}

\$('#button-upload').on('click', function() {
\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"upload\" /></form>');

\t\$('#form-upload input[name=\\'upload\\']').trigger('click');

\tif (typeof timer != 'undefined') {
\t\tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'upload\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/backup/upload&user_token=";
        // line 226
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-upload').button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#button-upload').button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\t\t\$('#history').load('index.php?route=tool/backup/history&user_token=";
        // line 249
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

// Delete
\$('#history').on('click', '.btn-danger', function() {
\tvar element = this;

\t\$.ajax({
\t\turl: 'index.php?route=tool/backup/delete&user_token=";
        // line 265
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filename=' + encodeURIComponent(\$(element).val()),
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#history').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#history').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#history').load('index.php?route=tool/backup/history&user_token=";
        // line 284
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
";
        // line 293
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "tool/backup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 293,  415 => 284,  393 => 265,  374 => 249,  348 => 226,  306 => 187,  293 => 177,  267 => 154,  236 => 126,  223 => 116,  193 => 89,  183 => 82,  165 => 67,  161 => 66,  151 => 61,  141 => 56,  138 => 55,  127 => 52,  124 => 51,  120 => 50,  114 => 47,  109 => 45,  96 => 35,  91 => 33,  83 => 28,  79 => 26,  71 => 22,  68 => 21,  60 => 17,  58 => 16,  53 => 13,  42 => 11,  38 => 10,  33 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" id="button-upload" data-toggle="tooltip" title="{{ button_upload }}" class="btn btn-primary"><i class="fa fa-upload"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*           <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">{% if error_warning %}*/
/*       <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*       <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*       </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-exchange"></i> {{ heading_title }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form class="form-horizontal">*/
/*           <fieldset>*/
/*             <legend>{{ text_progress }}</legend>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label">{{ entry_progress }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div id="progress-backup" class="progress">*/
/*                   <div id="progress-bar" class="progress-bar"></div>*/
/*                 </div>*/
/*                 <div id="progress-text"></div>*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*           <fieldset>*/
/*             <legend>{{ text_option }}</legend>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label">{{ entry_export }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                   {% for table in tables %}*/
/*                     <div class="checkbox">*/
/*                       <label><input type="checkbox" name="backup[]" value="{{ table }}" checked="checked"/> {{ table }}</label>*/
/*                     </div>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*                 <button type="button" onclick="$(this).parent().find(':checkbox').prop('checked', true);" class="btn btn-link">{{ text_select_all }}</button> / <button type="button" onclick="$(this).parent().find(':checkbox').prop('checked', false);" class="btn btn-link">{{ text_unselect_all }}</button>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <div class="col-sm-offset-2 col-sm-10">*/
/*                 <button type="button" id="button-backup" data-loading-text="{{ text_loading }}" class="btn btn-success"><i class="fa fa-upload"></i> {{ button_backup }}</button>*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*           <fieldset>*/
/*             <legend>{{ text_history }}</legend>*/
/*             <div class="alert alert-info"><i class="fa fa fa-exclamation-circle"></i> {{ text_import }}</div>*/
/*             <div id="history"></div>*/
/*           </fieldset>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#history').delegate('.pagination a', 'click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#history').load(this.href);*/
/* });*/
/* */
/* $('#history').load('index.php?route=tool/backup/history&user_token={{ user_token }}');*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#button-backup').on('click', function() {*/
/* 	$('#progress-bar').css('width', '0%');*/
/* 	$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');*/
/* */
/* 	backup('index.php?route=tool/backup/backup&user_token={{ user_token }}&table=' + $('input[name^=\'backup\']:checked').first().val());*/
/* });*/
/* */
/* function backup(url) {*/
/* 	$('#progress-bar').css('width', '0%');*/
/* 	$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');*/
/* */
/* 	$.ajax({*/
/* 		url: url,*/
/* 		type: 'post',*/
/* 		data: $('input[name^=\'backup\']:checked'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-backup').button('loading');*/
/* 			$('#button-upload, #history .btn').prop('disabled', true);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['progress']) {*/
/* 				$('#progress-bar').css('width', json['progress'] + '%');*/
/* 			}*/
/* */
/* 			if (json['error']) {*/
/* 				$('#progress-bar').addClass('progress-bar-danger');*/
/* 				$('#progress-text').html('<div class="text-danger">' + json['error'] + '</div>');*/
/* */
/* 				$('#history').load('index.php?route=tool/backup/history&user_token={{ user_token }}');*/
/* */
/* 				$('#button-backup').button('reset');*/
/* 				$('#button-upload, #history .btn').prop('disabled', false);*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#progress-bar').css('width', '100%').addClass('progress-bar-success');*/
/* 				$('#progress-text').html('<div class="text-success">' + json['success'] + '</div>');*/
/* */
/* 				$('#history').load('index.php?route=tool/backup/history&user_token={{ user_token }}');*/
/* */
/* 				$('#button-backup').button('reset');*/
/* 				$('#button-upload, #history .btn').prop('disabled', false);*/
/* 			}*/
/* */
/* 			if (json['text']) {*/
/* 				$('#progress-text').html(json['text']);*/
/* 			}*/
/* */
/* 			if (json['next']) {*/
/* 				backup(json['next']);*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* */
/* 			$('#button-backup').button('reset');*/
/* 			$('#button-upload, #history .btn').prop('disabled', false);*/
/* 		}*/
/* 	});*/
/* };*/
/* */
/* // Restore*/
/* $('#history').on('click', '.btn-warning', function() {*/
/* 	$('#progress-bar').css('width', '0%');*/
/* 	$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');*/
/* */
/* 	restore('index.php?route=tool/backup/restore&user_token={{ user_token }}&filename=' + encodeURIComponent($(this).val(), this));*/
/* });*/
/* */
/* function restore(url, element) {*/
/* 	$.ajax({*/
/* 		url: url,*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$(element).button('loading');*/
/* 			$('#button-upload, #button-backup, #history .btn').not(element).prop('disabled', true);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['progress']) {*/
/* 				$('#progress-bar').css('width', json['progress'] + '%');*/
/* 			}*/
/* */
/* 			if (json['error']) {*/
/* 				$('#progress-bar').addClass('progress-bar-danger');*/
/* 				$('#progress-text').html('<div class="text-danger">' + json['error'] + '</div>');*/
/* */
/* 				$('#history').load('index.php?route=tool/backup/history&user_token={{ user_token }}');*/
/* */
/* 				$(element).button('reset');*/
/* 				$('#button-upload, #button-backup, #history .btn').not(element).prop('disabled', false);*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#progress-bar').css('width', '100%').addClass('progress-bar-success');*/
/* 				$('#progress-text').html('<div class="text-success">' + json['success'] + '</div>');*/
/* */
/* 				$('#history').load('index.php?route=tool/backup/history&user_token={{ user_token }}');*/
/* */
/* 				$(element).button('reset');*/
/* 				$('#button-upload, #button-backup, #history .btn').not(element).prop('disabled', false);*/
/* 			}*/
/* */
/* 			if (json['text']) {*/
/* 				$('#progress-text').html(json['text']);*/
/* 			}*/
/* */
/* 			if (json['next']) {*/
/* 				restore(json['next'], element);*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* */
/* 			$(element).button('reset');*/
/* 			$('#button-upload, #button-backup, #history .btn').not(element).prop('disabled', false);*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* $('#button-upload').on('click', function() {*/
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="upload" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'upload\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/* 		clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'upload\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/backup/upload&user_token={{ user_token }}',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$('#button-upload').button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$('#button-upload').button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$('.alert-dismissible').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 						$('#history').load('index.php?route=tool/backup/history&user_token={{ user_token }}');*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* */
/* // Delete*/
/* $('#history').on('click', '.btn-danger', function() {*/
/* 	var element = this;*/
/* */
/* 	$.ajax({*/
/* 		url: 'index.php?route=tool/backup/delete&user_token={{ user_token }}&filename=' + encodeURIComponent($(element).val()),*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$(element).button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$(element).button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#history').before('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#history').before('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				$('#history').load('index.php?route=tool/backup/history&user_token={{ user_token }}');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* {{ footer }}*/
/* */
