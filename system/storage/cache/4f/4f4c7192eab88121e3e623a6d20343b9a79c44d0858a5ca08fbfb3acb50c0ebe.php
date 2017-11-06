<?php

/* marketplace/api.twig */
class __TwigTemplate_8f959b67e39b1ce7c8820770e63c0f945ce8102d666e8e7fb0be346642d216dc extends Twig_Template
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
        echo "<div class=\"modal-dialog\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\"><i class=\"fa fa-cog\"></i> ";
        // line 5
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h4>
    </div>
    <div class=\"modal-body\">
      <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 8
        echo (isset($context["text_signup"]) ? $context["text_signup"] : null);
        echo "</div>
      <div class=\"form-group\">
        <label for=\"input-username\">";
        // line 10
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "</label> <input type=\"text\" name=\"opencart_username\" value=\"\" placeholder=\"";
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "\" id=\"input-username\" class=\"form-control\"/>
      </div>
      <div class=\"form-group\">
        <label for=\"input-secret\">";
        // line 13
        echo (isset($context["entry_secret"]) ? $context["entry_secret"] : null);
        echo "</label> <textarea name=\"opencart_secret\" placeholder=\"";
        echo (isset($context["entry_secret"]) ? $context["entry_secret"] : null);
        echo "\" rows=\"8\" id=\"input-secret\" class=\"form-control\"></textarea>
      </div>
      <div class=\"form-group text-right\">
        <button type=\"button\" id=\"button-save\" data-loading-text=\"";
        // line 16
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "</button>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-save').on('click', function(e) {
\t\$.ajax({
\t\turl: 'index.php?route=marketplace/api/save&user_token=";
        // line 24
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$('#modal-opencart :input'),
\t\tbeforeSend: function() {
\t\t\t\$('#button-save').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-save').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#modal-opencart .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tif (json['error']['username']) {
\t\t\t\t\t\$('input[name=\"username\"]').after('<div class=\"text-danger\">' + json['error']['username'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['error']['secret']) {
\t\t\t\t\t\$('textarea[name=\"secret\"]').after('<div class=\"text-danger\">' + json['error']['secret'] + '</div>');
\t\t\t\t}
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#modal-opencart .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\twindow.location.reload();
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script> ";
    }

    public function getTemplateName()
    {
        return "marketplace/api.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 24,  52 => 16,  44 => 13,  36 => 10,  31 => 8,  25 => 5,  19 => 1,);
    }
}
/* <div class="modal-dialog">*/
/*   <div class="modal-content">*/
/*     <div class="modal-header">*/
/*       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*       <h4 class="modal-title"><i class="fa fa-cog"></i> {{ heading_title }}</h4>*/
/*     </div>*/
/*     <div class="modal-body">*/
/*       <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_signup }}</div>*/
/*       <div class="form-group">*/
/*         <label for="input-username">{{ entry_username }}</label> <input type="text" name="opencart_username" value="" placeholder="{{ entry_username }}" id="input-username" class="form-control"/>*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <label for="input-secret">{{ entry_secret }}</label> <textarea name="opencart_secret" placeholder="{{ entry_secret }}" rows="8" id="input-secret" class="form-control"></textarea>*/
/*       </div>*/
/*       <div class="form-group text-right">*/
/*         <button type="button" id="button-save" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_save }}</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-save').on('click', function(e) {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=marketplace/api/save&user_token={{ user_token }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: $('#modal-opencart :input'),*/
/* 		beforeSend: function() {*/
/* 			$('#button-save').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-save').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['warning']) {*/
/* 					$('#modal-opencart .modal-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				if (json['error']['username']) {*/
/* 					$('input[name="username"]').after('<div class="text-danger">' + json['error']['username'] + '</div>');*/
/* 				}*/
/* */
/* 				if (json['error']['secret']) {*/
/* 					$('textarea[name="secret"]').after('<div class="text-danger">' + json['error']['secret'] + '</div>');*/
/* 				}*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#modal-opencart .modal-body').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				window.location.reload();*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script> */
