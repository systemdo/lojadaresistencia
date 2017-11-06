<?php

/* common/filemanager.twig */
class __TwigTemplate_945534683fee691253f2b929915edac88f30c88701aef74b8a5fd57a264e99ff extends Twig_Template
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
        echo "<div id=\"filemanager\" class=\"modal-dialog modal-lg\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\">";
        // line 5
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h4>
    </div>
    <div class=\"modal-body\">
      <div class=\"row\">
        <div class=\"col-sm-5\"><a href=\"";
        // line 9
        echo (isset($context["parent"]) ? $context["parent"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_parent"]) ? $context["button_parent"] : null);
        echo "\" id=\"button-parent\" class=\"btn btn-default\"><i class=\"fa fa-level-up\"></i></a> <a href=\"";
        echo (isset($context["refresh"]) ? $context["refresh"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_refresh"]) ? $context["button_refresh"] : null);
        echo "\" id=\"button-refresh\" class=\"btn btn-default\"><i class=\"fa fa-refresh\"></i></a>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 10
        echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
        echo "\" id=\"button-upload\" class=\"btn btn-primary\"><i class=\"fa fa-upload\"></i></button>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 11
        echo (isset($context["button_folder"]) ? $context["button_folder"] : null);
        echo "\" id=\"button-folder\" class=\"btn btn-default\"><i class=\"fa fa-folder\"></i></button>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 12
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" id=\"button-delete\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></button>
        </div>
        <div class=\"col-sm-7\">
          <div class=\"input-group\">
            <input type=\"text\" name=\"search\" value=\"";
        // line 16
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_search"]) ? $context["entry_search"] : null);
        echo "\" class=\"form-control\">
            <div class=\"input-group-btn\">
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 18
        echo (isset($context["button_search"]) ? $context["button_search"] : null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\"><i class=\"fa fa-search\"></i></button>
            </div>
          </div>
        </div>
      </div>
      <hr/>
      ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["images"]) ? $context["images"] : null), 4));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 25
            echo "        <div class=\"row\">
          ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["image"]);
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 27
                echo "            <div class=\"col-sm-3 col-xs-6 text-center\">
              ";
                // line 28
                if (($this->getAttribute($context["image"], "type", array()) == "directory")) {
                    // line 29
                    echo "                <div class=\"text-center\"><a href=\"";
                    echo $this->getAttribute($context["image"], "href", array());
                    echo "\" class=\"directory\" style=\"vertical-align: middle;\"><i class=\"fa fa-folder fa-5x\"></i></a></div>
                <label><input type=\"checkbox\" name=\"path[]\" value=\"";
                    // line 30
                    echo $this->getAttribute($context["image"], "path", array());
                    echo "\"/>
                  ";
                    // line 31
                    echo $this->getAttribute($context["image"], "name", array());
                    echo "</label>
              ";
                }
                // line 33
                echo "              ";
                if (($this->getAttribute($context["image"], "type", array()) == "image")) {
                    // line 34
                    echo "                <a href=\"";
                    echo $this->getAttribute($context["image"], "href", array());
                    echo "\" class=\"thumbnail\"><img src=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["image"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["image"], "name", array());
                    echo "\"/></a>
                <label><input type=\"checkbox\" name=\"path[]\" value=\"";
                    // line 35
                    echo $this->getAttribute($context["image"], "path", array());
                    echo "\"/>
                  ";
                    // line 36
                    echo $this->getAttribute($context["image"], "name", array());
                    echo "</label>
              ";
                }
                // line 38
                echo "            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        </div>
        <br/>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </div>
    <div class=\"modal-footer\">";
        // line 44
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
  </div>
</div>
<script type=\"text/javascript\"><!--
";
        // line 48
        if ((isset($context["target"]) ? $context["target"] : null)) {
            // line 49
            echo "\$('a.thumbnail').on('click', function(e) {
\te.preventDefault();

  ";
            // line 52
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 53
                echo "\t\$('#";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "').find('img').attr('src', \$(this).find('img').attr('src'));
  ";
            }
            // line 55
            echo "
\t\$('#";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["target"]) ? $context["target"] : null), "js");
            echo "').val(\$(this).parent().find('input').val());

\t\$('#modal-image').modal('hide');
});
";
        }
        // line 61
        echo "
\$('a.directory').on('click', function(e) {
\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href'));
});

\$('.pagination a').on('click', function(e) {
\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href'));
});

\$('#button-parent').on('click', function(e) {
\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href'));
});

\$('#button-refresh').on('click', function(e) {
\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href'));
});

\$('input[name=\\'search\\']').on('keydown', function(e) {
\tif (e.which == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('#button-search').on('click', function(e) {
\tvar url = 'index.php?route=common/filemanager&user_token=";
        // line 93
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&directory=";
        echo twig_escape_filter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "js");
        echo "';

\tvar filter_name = \$('input[name=\\'search\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

  ";
        // line 101
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            // line 102
            echo "\turl += '&thumb=' + '";
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "';
  ";
        }
        // line 104
        echo "
  ";
        // line 105
        if ((isset($context["target"]) ? $context["target"] : null)) {
            // line 106
            echo "\turl += '&target=' + '";
            echo (isset($context["target"]) ? $context["target"] : null);
            echo "';
  ";
        }
        // line 108
        echo "
\t\$('#modal-image').load(url);
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-upload').on('click', function() {
\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file[]\" value=\"\" multiple=\"multiple\" /></form>');

\t\$('#form-upload input[name=\\'file[]\\']').trigger('click');

\tif (typeof timer != 'undefined') {
\t\tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file[]\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=common/filemanager/upload&user_token=";
        // line 129
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&directory=";
        echo twig_escape_filter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "js");
        echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-upload i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
\t\t\t\t\t\$('#button-upload').prop('disabled', true);
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#button-upload i').replaceWith('<i class=\"fa fa-upload\"></i>');
\t\t\t\t\t\$('#button-upload').prop('disabled', false);
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\talert(json['error']);
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

\$('#button-folder').popover({
\thtml: true,
\tplacement: 'bottom',
\ttrigger: 'click',
\ttitle: '";
        // line 167
        echo (isset($context["entry_folder"]) ? $context["entry_folder"] : null);
        echo "',
\tcontent: function() {
\t\thtml = '<div class=\"input-group\">';
\t\thtml += '  <input type=\"text\" name=\"folder\" value=\"\" placeholder=\"";
        // line 170
        echo (isset($context["entry_folder"]) ? $context["entry_folder"] : null);
        echo "\" class=\"form-control\">';
\t\thtml += '  <div class=\"input-group-btn\"><button type=\"button\" title=\"";
        // line 171
        echo (isset($context["button_folder"]) ? $context["button_folder"] : null);
        echo "\" id=\"button-create\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></div>';
\t\thtml += '</div>';

\t\treturn html;
\t}
});

\$('#button-folder').on('shown.bs.popover', function() {
\t\$('#button-create').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=common/filemanager/folder&user_token=";
        // line 181
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&directory=";
        echo twig_escape_filter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "js");
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: 'folder=' + encodeURIComponent(\$('input[name=\\'folder\\']').val()),
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-create').prop('disabled', true);
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-create').prop('disabled', false);
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\talert(json['error']);
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\talert(json['success']);

\t\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
});

\$('#modal-image #button-delete').on('click', function(e) {
\tif (confirm('";
        // line 210
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "')) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=common/filemanager/delete&user_token=";
        // line 212
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$('input[name^=\\'path\\']:checked'),
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-delete').prop('disabled', true);
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-delete').prop('disabled', false);
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\talert(json['error']);
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\talert(json['success']);

\t\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "common/filemanager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 212,  366 => 210,  332 => 181,  319 => 171,  315 => 170,  309 => 167,  266 => 129,  243 => 108,  237 => 106,  235 => 105,  232 => 104,  226 => 102,  224 => 101,  211 => 93,  177 => 61,  169 => 56,  166 => 55,  160 => 53,  158 => 52,  153 => 49,  151 => 48,  144 => 44,  141 => 43,  133 => 40,  126 => 38,  121 => 36,  117 => 35,  106 => 34,  103 => 33,  98 => 31,  94 => 30,  89 => 29,  87 => 28,  84 => 27,  80 => 26,  77 => 25,  73 => 24,  64 => 18,  57 => 16,  50 => 12,  46 => 11,  42 => 10,  32 => 9,  25 => 5,  19 => 1,);
    }
}
/* <div id="filemanager" class="modal-dialog modal-lg">*/
/*   <div class="modal-content">*/
/*     <div class="modal-header">*/
/*       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*       <h4 class="modal-title">{{ heading_title }}</h4>*/
/*     </div>*/
/*     <div class="modal-body">*/
/*       <div class="row">*/
/*         <div class="col-sm-5"><a href="{{ parent }}" data-toggle="tooltip" title="{{ button_parent }}" id="button-parent" class="btn btn-default"><i class="fa fa-level-up"></i></a> <a href="{{ refresh }}" data-toggle="tooltip" title="{{ button_refresh }}" id="button-refresh" class="btn btn-default"><i class="fa fa-refresh"></i></a>*/
/*           <button type="button" data-toggle="tooltip" title="{{ button_upload }}" id="button-upload" class="btn btn-primary"><i class="fa fa-upload"></i></button>*/
/*           <button type="button" data-toggle="tooltip" title="{{ button_folder }}" id="button-folder" class="btn btn-default"><i class="fa fa-folder"></i></button>*/
/*           <button type="button" data-toggle="tooltip" title="{{ button_delete }}" id="button-delete" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>*/
/*         </div>*/
/*         <div class="col-sm-7">*/
/*           <div class="input-group">*/
/*             <input type="text" name="search" value="{{ filter_name }}" placeholder="{{ entry_search }}" class="form-control">*/
/*             <div class="input-group-btn">*/
/*               <button type="button" data-toggle="tooltip" title="{{ button_search }}" id="button-search" class="btn btn-primary"><i class="fa fa-search"></i></button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <hr/>*/
/*       {% for image in images|batch(4) %}*/
/*         <div class="row">*/
/*           {% for image in image %}*/
/*             <div class="col-sm-3 col-xs-6 text-center">*/
/*               {% if image.type == 'directory' %}*/
/*                 <div class="text-center"><a href="{{ image.href }}" class="directory" style="vertical-align: middle;"><i class="fa fa-folder fa-5x"></i></a></div>*/
/*                 <label><input type="checkbox" name="path[]" value="{{ image.path }}"/>*/
/*                   {{ image.name }}</label>*/
/*               {% endif %}*/
/*               {% if image.type == 'image' %}*/
/*                 <a href="{{ image.href }}" class="thumbnail"><img src="{{ image.thumb }}" alt="{{ image.name }}" title="{{ image.name }}"/></a>*/
/*                 <label><input type="checkbox" name="path[]" value="{{ image.path }}"/>*/
/*                   {{ image.name }}</label>*/
/*               {% endif %}*/
/*             </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*         <br/>*/
/*       {% endfor %}*/
/*     </div>*/
/*     <div class="modal-footer">{{ pagination }}</div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* {% if target %}*/
/* $('a.thumbnail').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/*   {% if thumb %}*/
/* 	$('#{{ thumb }}').find('img').attr('src', $(this).find('img').attr('src'));*/
/*   {% endif %}*/
/* */
/* 	$('#{{ target|escape('js') }}').val($(this).parent().find('input').val());*/
/* */
/* 	$('#modal-image').modal('hide');*/
/* });*/
/* {% endif %}*/
/* */
/* $('a.directory').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#modal-image').load($(this).attr('href'));*/
/* });*/
/* */
/* $('.pagination a').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#modal-image').load($(this).attr('href'));*/
/* });*/
/* */
/* $('#button-parent').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#modal-image').load($(this).attr('href'));*/
/* });*/
/* */
/* $('#button-refresh').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#modal-image').load($(this).attr('href'));*/
/* });*/
/* */
/* $('input[name=\'search\']').on('keydown', function(e) {*/
/* 	if (e.which == 13) {*/
/* 		$('#button-search').trigger('click');*/
/* 	}*/
/* });*/
/* */
/* $('#button-search').on('click', function(e) {*/
/* 	var url = 'index.php?route=common/filemanager&user_token={{ user_token }}&directory={{ directory|escape('js') }}';*/
/* */
/* 	var filter_name = $('input[name=\'search\']').val();*/
/* */
/* 	if (filter_name) {*/
/* 		url += '&filter_name=' + encodeURIComponent(filter_name);*/
/* 	}*/
/* */
/*   {% if thumb %}*/
/* 	url += '&thumb=' + '{{ thumb }}';*/
/*   {% endif %}*/
/* */
/*   {% if target %}*/
/* 	url += '&target=' + '{{ target }}';*/
/*   {% endif %}*/
/* */
/* 	$('#modal-image').load(url);*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#button-upload').on('click', function() {*/
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file[]" value="" multiple="multiple" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file[]\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/* 		clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file[]\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=common/filemanager/upload&user_token={{ user_token }}&directory={{ directory|escape('js') }}',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$('#button-upload i').replaceWith('<i class="fa fa-circle-o-notch fa-spin"></i>');*/
/* 					$('#button-upload').prop('disabled', true);*/
/* 				},*/
/* 				complete: function() {*/
/* 					$('#button-upload i').replaceWith('<i class="fa fa-upload"></i>');*/
/* 					$('#button-upload').prop('disabled', false);*/
/* 				},*/
/* 				success: function(json) {*/
/* 					if (json['error']) {*/
/* 						alert(json['error']);*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$('#button-refresh').trigger('click');*/
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
/* $('#button-folder').popover({*/
/* 	html: true,*/
/* 	placement: 'bottom',*/
/* 	trigger: 'click',*/
/* 	title: '{{ entry_folder }}',*/
/* 	content: function() {*/
/* 		html = '<div class="input-group">';*/
/* 		html += '  <input type="text" name="folder" value="" placeholder="{{ entry_folder }}" class="form-control">';*/
/* 		html += '  <div class="input-group-btn"><button type="button" title="{{ button_folder }}" id="button-create" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></div>';*/
/* 		html += '</div>';*/
/* */
/* 		return html;*/
/* 	}*/
/* });*/
/* */
/* $('#button-folder').on('shown.bs.popover', function() {*/
/* 	$('#button-create').on('click', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=common/filemanager/folder&user_token={{ user_token }}&directory={{ directory|escape('js') }}',*/
/* 			type: 'post',*/
/* 			dataType: 'json',*/
/* 			data: 'folder=' + encodeURIComponent($('input[name=\'folder\']').val()),*/
/* 			beforeSend: function() {*/
/* 				$('#button-create').prop('disabled', true);*/
/* 			},*/
/* 			complete: function() {*/
/* 				$('#button-create').prop('disabled', false);*/
/* 			},*/
/* 			success: function(json) {*/
/* 				if (json['error']) {*/
/* 					alert(json['error']);*/
/* 				}*/
/* */
/* 				if (json['success']) {*/
/* 					alert(json['success']);*/
/* */
/* 					$('#button-refresh').trigger('click');*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* });*/
/* */
/* $('#modal-image #button-delete').on('click', function(e) {*/
/* 	if (confirm('{{ text_confirm }}')) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=common/filemanager/delete&user_token={{ user_token }}',*/
/* 			type: 'post',*/
/* 			dataType: 'json',*/
/* 			data: $('input[name^=\'path\']:checked'),*/
/* 			beforeSend: function() {*/
/* 				$('#button-delete').prop('disabled', true);*/
/* 			},*/
/* 			complete: function() {*/
/* 				$('#button-delete').prop('disabled', false);*/
/* 			},*/
/* 			success: function(json) {*/
/* 				if (json['error']) {*/
/* 					alert(json['error']);*/
/* 				}*/
/* */
/* 				if (json['success']) {*/
/* 					alert(json['success']);*/
/* */
/* 					$('#button-refresh').trigger('click');*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	}*/
/* });*/
/* //--></script>*/
