<?php

/* marketplace/marketplace_info.twig */
class __TwigTemplate_0e2b13354c0a513e88b5818062f2e61b987071c35eb079ee09c5c0d067a5c51f extends Twig_Template
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
      <div class=\"pull-right\">";
        // line 5
        if ( !(isset($context["error_signature"]) ? $context["error_signature"] : null)) {
            // line 6
            echo "          <button type=\"button\" id=\"button-opencart\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_opencart"]) ? $context["button_opencart"] : null);
            echo "\" class=\"btn btn-info\"><i class=\"fa fa-cog\"></i></button>
        ";
        } else {
            // line 8
            echo "          <button type=\"button\" id=\"button-opencart\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["error_signature"]) ? $context["error_signature"] : null);
            echo "\" data-placement=\"left\" class=\"btn btn-danger\"><i class=\"fa fa-exclamation-triangle\"></i></button>
        ";
        }
        // line 9
        echo " <a href=\"";
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
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
        // line 15
        echo "      </ul>
    </div>
  </div>
  <div id=\"marketplace-extension-info\" class=\"container-fluid\">";
        // line 18
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 19
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 23
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-puzzle-piece\"></i> ";
        // line 25
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"row extension-info\">
          <div class=\"col-sm-8\">";
        // line 29
        if ((isset($context["banner"]) ? $context["banner"] : null)) {
            // line 30
            echo "              <div id=\"banner\" class=\"text-center thumbnail\"><img src=\"";
            echo (isset($context["banner"]) ? $context["banner"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\"/></div>
            ";
        }
        // line 32
        echo "            <div class=\"row thumbnails\">";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 33
            echo "                <div class=\"col-xs-4 col-sm-2\"><a href=\"";
            echo $this->getAttribute($context["image"], "popup", array());
            echo "\" class=\"thumbnail\"><img src=\"";
            echo $this->getAttribute($context["image"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["image"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["image"], "name", array());
            echo "\" class=\"img-responsive\"/></a></div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo " </div>
            <ul class=\"nav nav-tabs\">
              <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 36
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
              <li><a href=\"#tab-documentation\" data-toggle=\"tab\">";
        // line 37
        echo (isset($context["tab_documentation"]) ? $context["tab_documentation"] : null);
        echo "</a></li>
              <li><a href=\"#tab-download\" data-toggle=\"tab\">";
        // line 38
        echo (isset($context["tab_download"]) ? $context["tab_download"] : null);
        echo "</a></li>
              <li><a href=\"#tab-comment\" data-toggle=\"tab\">";
        // line 39
        echo (isset($context["tab_comment"]) ? $context["tab_comment"] : null);
        echo " (";
        echo (isset($context["comment_total"]) ? $context["comment_total"] : null);
        echo ")</a></li>
            </ul>
            <div class=\"tab-content\">
              <div id=\"tab-description\" class=\"tab-pane active\">";
        // line 42
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</div>
              <div id=\"tab-documentation\" class=\"tab-pane\">";
        // line 43
        echo (isset($context["documentation"]) ? $context["documentation"] : null);
        echo "</div>
              <div id=\"tab-download\" class=\"tab-pane\">
                <fieldset>
                  <legend>";
        // line 46
        echo (isset($context["text_progress"]) ? $context["text_progress"] : null);
        echo "</legend>
                  <div id=\"progress\">
                    <div class=\"progress\">
                      <div id=\"progress-bar\" class=\"progress-bar\" style=\"width: 0%;\"></div>
                    </div>
                    <div id=\"progress-text\"></div>
                  </div>
                  <hr/>
                </fieldset>
                <fieldset>
                  <legend>";
        // line 56
        echo (isset($context["text_available"]) ? $context["text_available"] : null);
        echo "</legend>
                  <table class=\"table table-bordered\">
                    <thead>
                    <td>";
        // line 59
        echo (isset($context["text_name"]) ? $context["text_name"] : null);
        echo "</td>
                    <td>";
        // line 60
        echo (isset($context["text_date_added"]) ? $context["text_date_added"] : null);
        echo "</td>
                    <td class=\"text-right\">";
        // line 61
        echo (isset($context["text_action"]) ? $context["text_action"] : null);
        echo "</td>
                    </thead>
                    <tbody>

                    ";
        // line 65
        if ((isset($context["downloads"]) ? $context["downloads"] : null)) {
            // line 66
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["downloads"]) ? $context["downloads"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["download"]) {
                // line 67
                echo "                        <tr>
                          <td>";
                // line 68
                echo $this->getAttribute($context["download"], "name", array());
                echo "</td>
                          <td>";
                // line 69
                echo $this->getAttribute($context["download"], "date_added", array());
                echo "</td>
                          <td class=\"text-right\">";
                // line 70
                if ($this->getAttribute($context["download"], "extension_install_id", array())) {
                    // line 71
                    echo "                              <button type=\"button\" data-install=\"";
                    echo $this->getAttribute($context["download"], "extension_download_id", array());
                    echo "\" data-uninstall=\"";
                    echo $this->getAttribute($context["download"], "extension_install_id", array());
                    echo "\" data-loading=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i> ";
                    echo (isset($context["button_uninstall"]) ? $context["button_uninstall"] : null);
                    echo "</button>
                            ";
                } elseif ((twig_slice($this->env, $this->getAttribute(                // line 72
$context["download"], "filename", array()),  -10) == ".ocmod.zip")) {
                    // line 73
                    echo "                              <button type=\"button\" data-install=\"";
                    echo $this->getAttribute($context["download"], "extension_download_id", array());
                    echo "\" data-uninstall=\"\" data-loading=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-primary\"";
                    if ( !$this->getAttribute($context["download"], "status", array())) {
                        echo " disabled";
                    }
                    echo "><i class=\"fa fa-download\"></i> ";
                    echo (isset($context["button_install"]) ? $context["button_install"] : null);
                    echo "</button>
                            ";
                } else {
                    // line 75
                    echo "                              <button type=\"button\" data-install=\"";
                    echo $this->getAttribute($context["download"], "extension_download_id", array());
                    echo "\" data-uninstall=\"\" data-loading=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-primary\"";
                    if ( !$this->getAttribute($context["download"], "status", array())) {
                        echo " disabled";
                    }
                    echo "><i class=\"fa fa-download\"></i> ";
                    echo (isset($context["button_download"]) ? $context["button_download"] : null);
                    echo "</button>
                            ";
                }
                // line 76
                echo "</td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['download'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                    ";
        } else {
            // line 80
            echo "                      <tr>
                        <td colspan=\"3\" class=\"text-center\">";
            // line 81
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                      </tr>
                    ";
        }
        // line 84
        echo "                    </tbody>

                  </table>
                </fieldset>
              </div>
              <div id=\"tab-comment\" class=\"tab-pane\">
                <fieldset>
                  <legend>";
        // line 91
        echo (isset($context["text_comment_add"]) ? $context["text_comment_add"] : null);
        echo "</legend>
                  <div class=\"form-group\">
                    <textarea name=\"comment\" rows=\"5\" placeholder=\"";
        // line 93
        echo (isset($context["text_write"]) ? $context["text_write"] : null);
        echo "\" id=\"input-comment\" class=\"form-control\"></textarea>
                  </div>
                  <div class=\"text-right\">
                    <button type=\"button\" id=\"button-comment\" class=\"btn btn-primary\">";
        // line 96
        echo (isset($context["button_comment"]) ? $context["button_comment"] : null);
        echo "</button>
                  </div>
                </fieldset>
                <br/>
                <fieldset>
                  <legend>";
        // line 101
        echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
        echo "</legend>
                  <div id=\"comment\"></div>
                </fieldset>
              </div>
            </div>
          </div>
          <div class=\"col-sm-4\">
            <div id=\"buy\" class=\"well\">";
        // line 108
        if ((((isset($context["license"]) ? $context["license"] : null) == "1") &&  !(isset($context["purchased"]) ? $context["purchased"] : null))) {
            // line 109
            echo "                <button id=\"button-buy\" class=\"btn btn-success btn-lg btn-block\">";
            echo (isset($context["button_purchase"]) ? $context["button_purchase"] : null);
            echo "</button>
              ";
        }
        // line 111
        echo "              <div id=\"price\" class=\"row\">
                <div class=\"col-xs-5\"><strong>";
        // line 112
        echo (isset($context["text_price"]) ? $context["text_price"] : null);
        echo "</strong></div>
                <div class=\"col-xs-7 text-right\">";
        // line 113
        if ((isset($context["license"]) ? $context["license"] : null)) {
            // line 114
            echo "                    ";
            echo (isset($context["price"]) ? $context["price"] : null);
            echo "
                  ";
        } else {
            // line 116
            echo "                    ";
            echo (isset($context["text_free"]) ? $context["text_free"] : null);
            echo "
                  ";
        }
        // line 117
        echo "</div>
              </div>
              <hr>
              <ul class=\"list-check\">
                <li>";
        // line 121
        echo (isset($context["text_partner"]) ? $context["text_partner"] : null);
        echo "</li>
                <li>";
        // line 122
        echo (isset($context["text_support"]) ? $context["text_support"] : null);
        echo "</li>
                <li>";
        // line 123
        echo (isset($context["text_documentation"]) ? $context["text_documentation"] : null);
        echo "</li>
              </ul>
              <hr>
              <div class=\"row\">
                <div class=\"col-xs-5\"><strong>";
        // line 127
        echo (isset($context["text_rating"]) ? $context["text_rating"] : null);
        echo "</strong></div>
                <div class=\"col-xs-7 text-right\">";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 129
            echo "                    ";
            if (((isset($context["rating"]) ? $context["rating"] : null) >= $context["i"])) {
                echo "<i class=\"fa fa-star\"></i>";
            } else {
                echo "<i class=\"fa fa-star-o\"></i>";
            }
            // line 130
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " (";
        echo (isset($context["rating_total"]) ? $context["rating_total"] : null);
        echo ")
                </div>
              </div>
              <hr>
              <div class=\"row\">
                <div class=\"col-xs-5\"><strong>";
        // line 135
        echo (isset($context["text_date_modified"]) ? $context["text_date_modified"] : null);
        echo "</strong></div>
                <div class=\"col-xs-7 text-right\">";
        // line 136
        echo (isset($context["date_modified"]) ? $context["date_modified"] : null);
        echo "</div>
              </div>
              <hr>
              <div class=\"row\">
                <div class=\"col-xs-5\"><strong>";
        // line 140
        echo (isset($context["text_date_added"]) ? $context["text_date_added"] : null);
        echo "</strong></div>
                <div class=\"col-xs-7 text-right\">";
        // line 141
        echo (isset($context["date_added"]) ? $context["date_added"] : null);
        echo "</div>
              </div>
            </div>
            <div id=\"sales\" class=\"well\"><i class=\"opencart-icon-cart-mini\"></i> <strong>";
        // line 144
        echo (isset($context["sales"]) ? $context["sales"] : null);
        echo "</strong> ";
        echo (isset($context["text_sales"]) ? $context["text_sales"] : null);
        echo "</div>
            <div id=\"sales\" class=\"well\"><i class=\"opencart-icon-cart-mini\"></i> <strong>";
        // line 145
        echo (isset($context["downloaded"]) ? $context["downloaded"] : null);
        echo "</strong> ";
        echo (isset($context["text_downloaded"]) ? $context["text_downloaded"] : null);
        echo "</div>
            <div class=\"well\">
              <div class=\"media\">
                <div class=\"media-left media-middle\"><img src=\"";
        // line 148
        echo (isset($context["member_image"]) ? $context["member_image"] : null);
        echo "\" alt=\"";
        echo (isset($context["member_username"]) ? $context["member_username"] : null);
        echo "\" title=\"";
        echo (isset($context["member_username"]) ? $context["member_username"] : null);
        echo "\" class=\"media-object img-circle\"></div>
                <div class=\"media-body\"><span><a href=\"";
        // line 149
        echo (isset($context["filter_member"]) ? $context["filter_member"] : null);
        echo "\">";
        echo (isset($context["member_username"]) ? $context["member_username"] : null);
        echo "</a></span>
                  <br>
                  <small>";
        // line 151
        echo (isset($context["text_member_since"]) ? $context["text_member_since"] : null);
        echo " ";
        echo (isset($context["member_date_added"]) ? $context["member_date_added"] : null);
        echo "</small>
                </div>
              </div>
              <br/>
              <a href=\"";
        // line 155
        echo (isset($context["filter_member"]) ? $context["filter_member"] : null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo (isset($context["button_view_all"]) ? $context["button_view_all"] : null);
        echo "</a> <a href=\"https://www.opencart.com/index.php?route=support/seller&amp;extension_id=";
        echo (isset($context["extension_id"]) ? $context["extension_id"] : null);
        echo "\" target=\"_blank\" class=\"btn btn-ghost-dark btn-lg btn-block\">";
        echo (isset($context["button_get_support"]) ? $context["button_get_support"] : null);
        echo "</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-opencart').on('click', function(e) {
\t\$('#modal-opencart').remove();

\t\$.ajax({
\t\turl: 'index.php?route=marketplace/api&user_token=";
        // line 167
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('#button-opencart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-opencart').button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('body').append('<div id=\"modal-opencart\" class=\"modal\">' + html + '</div>');

\t\t\t\$('#modal-opencart').modal('show');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-buy').on('click', function(e) {
\te.preventDefault();

\t\$('#modal-purchase').remove();

\thtml = '<div id=\"modal-purchase\" class=\"modal\">';
\thtml += '  <div class=\"modal-dialog\">';
\thtml += '    <div class=\"modal-content\">';
\thtml += '      <div class=\"modal-header\">';
\thtml += '        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>';
\thtml += '        <h4 class=\"modal-title\">";
        // line 197
        echo (isset($context["text_purchase"]) ? $context["text_purchase"] : null);
        echo "</h4>';
\thtml += '      </div>';
\thtml += '      <div class=\"modal-body\">';
\thtml += '        <p>";
        // line 200
        echo (isset($context["text_pin"]) ? $context["text_pin"] : null);
        echo "</p>';
\thtml += '        <p>";
        // line 201
        echo (isset($context["text_secure"]) ? $context["text_secure"] : null);
        echo "</p>';
\thtml += '        <div class=\"form-group\">';
\thtml += '          <label for=\"input-pin\">";
        // line 203
        echo (isset($context["entry_pin"]) ? $context["entry_pin"] : null);
        echo "</label>';
\thtml += '          <input type=\"password\" name=\"pin\" value=\"\" placeholder=\"";
        // line 204
        echo (isset($context["entry_pin"]) ? $context["entry_pin"] : null);
        echo "\" id=\"input-pin\" class=\"form-control\" />';
\thtml += '        </div>';
\thtml += '        <div class=\"form-group text-right\">';
\thtml += '          <div class=\"pull-left\"><a href=\"https://www.opencart.com/index.php?route=support/contact\" class=\"btn btn-default btn-lg\" target=\"_blank\">";
        // line 207
        echo (isset($context["button_forgot_pin"]) ? $context["button_forgot_pin"] : null);
        echo "</a></div>';
\thtml += '          <button type=\"button\" id=\"button-purchase\" data-loading-text=\"";
        // line 208
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary btn-lg\">";
        echo (isset($context["button_purchase"]) ? $context["button_purchase"] : null);
        echo "</button>';
\thtml += '        </div>';
\thtml += '      </div>';
\thtml += '    </div>';
\thtml += '  </div>';
\thtml += '</div>';

\t\$('body').append(html);

\t\$('#modal-purchase').modal('show');
});

\$('body').on('click', '#modal-purchase #button-purchase', function(e) {
\te.preventDefault();

\tvar element = this;

\t\$.ajax({
\t\turl: 'index.php?route=marketplace/marketplace/purchase&user_token=";
        // line 226
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&extension_id=";
        echo (isset($context["extension_id"]) ? $context["extension_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'pin\\']'),
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
\t\t\t\t\$('#modal-purchase .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#modal-purchase').modal('hide');

\t\t\t\t\$('#tab-download .btn-primary').prop('disabled', false);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Install
\$('#tab-download').on('click', '.btn-primary', function(e) {
\te.preventDefault();

\tvar element = this;

\t// Reset everything
\t\$('#progress-bar').css('width', '0%');
\t\$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');
\t\$('#progress-text').html('');

\t\$.ajax({
\t\turl: 'index.php?route=marketplace/marketplace/download&user_token=";
        // line 269
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&extension_id=";
        echo (isset($context["extension_id"]) ? $context["extension_id"] : null);
        echo "&extension_download_id=' + \$(this).attr('data-install'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');

\t\t\t\t\$(element).button('reset');
\t\t\t}

\t\t\tif (json['text']) {
\t\t\t\t\$('#progress-bar').css('width', '20%');
\t\t\t\t\$('#progress-text').html(json['text']);
\t\t\t}

\t\t\tif (json['extension_install_id']) {
\t\t\t\t\$(element).attr('data-uninstall', json['extension_install_id']);
\t\t\t}

\t\t\tif (json['next']) {
\t\t\t\tnext(json['next'], element, 1);
\t\t\t}

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

function next(url, element, i) {
\ti = i + 1;

\t\$.ajax({
\t\turl: url,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('#progress-bar').css('width', (i * 20) + '%');

\t\t\tif (json['error']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');

\t\t\t\t\$(element).button('reset');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-success');
\t\t\t\t\$('#progress-text').html('<span class=\"text-success\">' + json['success'] + '</span>');

\t\t\t\t\$(element).replaceWith('<button type=\"button\" data-install=\"' + \$(element).attr('data-install') + '\" data-uninstall=\"' + \$(element).attr('data-uninstall') + '\" data-loading=\"";
        // line 327
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i> ";
        echo (isset($context["button_uninstall"]) ? $context["button_uninstall"] : null);
        echo "</button>');
\t\t\t}

\t\t\tif (json['text']) {
\t\t\t\t\$('#progress-text').html(json['text']);
\t\t\t}

\t\t\tif (json['next']) {
\t\t\t\tnext(json['next'], element, i);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

// Uninstall
\$('#tab-download').on('click', ' .btn-danger', function(e) {
\te.preventDefault();

\tvar element = this;

\t\$('#progress-bar').css('width', '0%');
\t\$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');
\t\$('#progress-text').html('');

\t\$.ajax({
\t\turl: 'index.php?route=marketplace/install/uninstall&user_token=";
        // line 355
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&extension_install_id=' + \$(element).attr('data-uninstall'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['error']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#progress-bar').css('width', '100%');
\t\t\t\t\$('#progress-bar').addClass('progress-bar-success');
\t\t\t\t\$('#progress-text').html('<span class=\"text-success\">' + json['success'] + '</div>');

\t\t\t\t\$(element).replaceWith('<button type=\"button\" data-install=\"' + \$(element).attr('data-install') + '\" data-uninstall=\"\" data-loading=\"";
        // line 374
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-download\"></i> ";
        echo (isset($context["button_install"]) ? $context["button_install"] : null);
        echo "</button>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#comment').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();

\t\$('#comment').load(this.href);
});

// Comment
\$('#comment').load('index.php?route=marketplace/marketplace/comment&user_token=";
        // line 390
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&extension_id=";
        echo (isset($context["extension_id"]) ? $context["extension_id"] : null);
        echo "');

// Add comment
\$('#button-comment').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=marketplace/marketplace/addcomment&user_token=";
        // line 395
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&extension_id=";
        echo (isset($context["extension_id"]) ? $context["extension_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: 'comment=' + encodeURIComponent(\$('textarea[name=\\'comment\\']').val()),
\t\tbeforeSend: function() {
\t\t\t\$('#button-comment').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-comment').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#tab-comment').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#tab-comment').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#comment').load('index.php?route=marketplace/marketplace/comment&user_token=";
        // line 415
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&extension_id=";
        echo (isset($context["extension_id"]) ? $context["extension_id"] : null);
        echo "');

\t\t\t\t\$('textarea[name=\\'comment\\']').val('');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Next replies
\$('#comment').on('click', '.btn-block', function(e) {
\te.preventDefault();

\tvar element = this;

\t\$.ajax({
\t\turl: \$(element).attr('href'),
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$(element).parent().parent().parent().append(html);

\t\t\t\$(element).parent().remove();
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Reply
\$('#comment').on('click', '.btn-link', function(e) {
\te.preventDefault();

\t\$(this).parent().parent().find('.reply-input-box').toggle();
});

// Add reply
\$('#comment').on('click', '.btn-primary', function(e) {
\te.preventDefault();

\tvar element = this;

\t\$.ajax({
\t\turl: \$(element).attr('href'),
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: 'comment=' + encodeURIComponent(\$(element).parents('.reply-input-box').find('textarea[name=\\'comment\\']').val()),
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$(element).parents('.reply-input-box').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$(element).parents('.reply-input-box').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$(element).parents('.reply-input-box').parents('.media').find('.reply-refresh').last().trigger('click');

\t\t\t\t\$(element).parents('.reply-input-box').find('textarea[name=\\'comment\\']').val('');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Refresh
\$('#comment').on('click', '.reply-refresh', function(e) {
\te.preventDefault();

\tvar element = this;

\t\$.ajax({
\t\turl: \$(element).attr('href'),
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$(element).parent().replaceWith(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype: 'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script>
";
        // line 532
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "marketplace/marketplace_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  901 => 532,  779 => 415,  754 => 395,  744 => 390,  723 => 374,  701 => 355,  668 => 327,  605 => 269,  557 => 226,  534 => 208,  530 => 207,  524 => 204,  520 => 203,  515 => 201,  511 => 200,  505 => 197,  472 => 167,  451 => 155,  442 => 151,  435 => 149,  427 => 148,  419 => 145,  413 => 144,  407 => 141,  403 => 140,  396 => 136,  392 => 135,  378 => 130,  371 => 129,  367 => 128,  363 => 127,  356 => 123,  352 => 122,  348 => 121,  342 => 117,  336 => 116,  330 => 114,  328 => 113,  324 => 112,  321 => 111,  315 => 109,  313 => 108,  303 => 101,  295 => 96,  289 => 93,  284 => 91,  275 => 84,  269 => 81,  266 => 80,  263 => 79,  255 => 76,  241 => 75,  227 => 73,  225 => 72,  214 => 71,  212 => 70,  208 => 69,  204 => 68,  201 => 67,  196 => 66,  194 => 65,  187 => 61,  183 => 60,  179 => 59,  173 => 56,  160 => 46,  154 => 43,  150 => 42,  142 => 39,  138 => 38,  134 => 37,  130 => 36,  126 => 34,  111 => 33,  106 => 32,  96 => 30,  94 => 29,  87 => 25,  83 => 23,  75 => 19,  73 => 18,  68 => 15,  57 => 13,  53 => 12,  48 => 10,  41 => 9,  35 => 8,  29 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">{% if not error_signature %}*/
/*           <button type="button" id="button-opencart" data-toggle="tooltip" title="{{ button_opencart }}" class="btn btn-info"><i class="fa fa-cog"></i></button>*/
/*         {% else %}*/
/*           <button type="button" id="button-opencart" data-toggle="tooltip" title="{{ error_signature }}" data-placement="left" class="btn btn-danger"><i class="fa fa-exclamation-triangle"></i></button>*/
/*         {% endif %} <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*           <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div id="marketplace-extension-info" class="container-fluid">{% if error_warning %}*/
/*       <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*       </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-puzzle-piece"></i> {{ name }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <div class="row extension-info">*/
/*           <div class="col-sm-8">{% if banner %}*/
/*               <div id="banner" class="text-center thumbnail"><img src="{{ banner }}" title="{{ name }}" alt="{{ name }}" class="img-responsive"/></div>*/
/*             {% endif %}*/
/*             <div class="row thumbnails">{% for image in images %}*/
/*                 <div class="col-xs-4 col-sm-2"><a href="{{ image.popup }}" class="thumbnail"><img src="{{ image.thumb }}" alt="{{ image.name }}" title="{{ image.name }}" class="img-responsive"/></a></div>*/
/*               {% endfor %} </div>*/
/*             <ul class="nav nav-tabs">*/
/*               <li class="active"><a href="#tab-description" data-toggle="tab">{{ tab_general }}</a></li>*/
/*               <li><a href="#tab-documentation" data-toggle="tab">{{ tab_documentation }}</a></li>*/
/*               <li><a href="#tab-download" data-toggle="tab">{{ tab_download }}</a></li>*/
/*               <li><a href="#tab-comment" data-toggle="tab">{{ tab_comment }} ({{ comment_total }})</a></li>*/
/*             </ul>*/
/*             <div class="tab-content">*/
/*               <div id="tab-description" class="tab-pane active">{{ description }}</div>*/
/*               <div id="tab-documentation" class="tab-pane">{{ documentation }}</div>*/
/*               <div id="tab-download" class="tab-pane">*/
/*                 <fieldset>*/
/*                   <legend>{{ text_progress }}</legend>*/
/*                   <div id="progress">*/
/*                     <div class="progress">*/
/*                       <div id="progress-bar" class="progress-bar" style="width: 0%;"></div>*/
/*                     </div>*/
/*                     <div id="progress-text"></div>*/
/*                   </div>*/
/*                   <hr/>*/
/*                 </fieldset>*/
/*                 <fieldset>*/
/*                   <legend>{{ text_available }}</legend>*/
/*                   <table class="table table-bordered">*/
/*                     <thead>*/
/*                     <td>{{ text_name }}</td>*/
/*                     <td>{{ text_date_added }}</td>*/
/*                     <td class="text-right">{{ text_action }}</td>*/
/*                     </thead>*/
/*                     <tbody>*/
/* */
/*                     {% if downloads %}*/
/*                       {% for download in downloads %}*/
/*                         <tr>*/
/*                           <td>{{ download.name }}</td>*/
/*                           <td>{{ download.date_added }}</td>*/
/*                           <td class="text-right">{% if download.extension_install_id %}*/
/*                               <button type="button" data-install="{{ download.extension_download_id }}" data-uninstall="{{ download.extension_install_id }}" data-loading="{{ text_loading }}" class="btn btn-danger"><i class="fa fa-trash-o"></i> {{ button_uninstall }}</button>*/
/*                             {% elseif download.filename|slice(-10) == '.ocmod.zip' %}*/
/*                               <button type="button" data-install="{{ download.extension_download_id }}" data-uninstall="" data-loading="{{ text_loading }}" class="btn btn-primary"{% if not download.status %} disabled{% endif %}><i class="fa fa-download"></i> {{ button_install }}</button>*/
/*                             {% else %}*/
/*                               <button type="button" data-install="{{ download.extension_download_id }}" data-uninstall="" data-loading="{{ text_loading }}" class="btn btn-primary"{% if not download.status %} disabled{% endif %}><i class="fa fa-download"></i> {{ button_download }}</button>*/
/*                             {% endif %}</td>*/
/*                         </tr>*/
/*                       {% endfor %}*/
/*                     {% else %}*/
/*                       <tr>*/
/*                         <td colspan="3" class="text-center">{{ text_no_results }}</td>*/
/*                       </tr>*/
/*                     {% endif %}*/
/*                     </tbody>*/
/* */
/*                   </table>*/
/*                 </fieldset>*/
/*               </div>*/
/*               <div id="tab-comment" class="tab-pane">*/
/*                 <fieldset>*/
/*                   <legend>{{ text_comment_add }}</legend>*/
/*                   <div class="form-group">*/
/*                     <textarea name="comment" rows="5" placeholder="{{ text_write }}" id="input-comment" class="form-control"></textarea>*/
/*                   </div>*/
/*                   <div class="text-right">*/
/*                     <button type="button" id="button-comment" class="btn btn-primary">{{ button_comment }}</button>*/
/*                   </div>*/
/*                 </fieldset>*/
/*                 <br/>*/
/*                 <fieldset>*/
/*                   <legend>{{ text_comment }}</legend>*/
/*                   <div id="comment"></div>*/
/*                 </fieldset>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           <div class="col-sm-4">*/
/*             <div id="buy" class="well">{% if license == '1' and not purchased %}*/
/*                 <button id="button-buy" class="btn btn-success btn-lg btn-block">{{ button_purchase }}</button>*/
/*               {% endif %}*/
/*               <div id="price" class="row">*/
/*                 <div class="col-xs-5"><strong>{{ text_price }}</strong></div>*/
/*                 <div class="col-xs-7 text-right">{% if license %}*/
/*                     {{ price }}*/
/*                   {% else %}*/
/*                     {{ text_free }}*/
/*                   {% endif %}</div>*/
/*               </div>*/
/*               <hr>*/
/*               <ul class="list-check">*/
/*                 <li>{{ text_partner }}</li>*/
/*                 <li>{{ text_support }}</li>*/
/*                 <li>{{ text_documentation }}</li>*/
/*               </ul>*/
/*               <hr>*/
/*               <div class="row">*/
/*                 <div class="col-xs-5"><strong>{{ text_rating }}</strong></div>*/
/*                 <div class="col-xs-7 text-right">{% for i in 1..5 %}*/
/*                     {% if rating >= i %}<i class="fa fa-star"></i>{% else %}<i class="fa fa-star-o"></i>{% endif %}*/
/*                   {% endfor %} ({{ rating_total }})*/
/*                 </div>*/
/*               </div>*/
/*               <hr>*/
/*               <div class="row">*/
/*                 <div class="col-xs-5"><strong>{{ text_date_modified }}</strong></div>*/
/*                 <div class="col-xs-7 text-right">{{ date_modified }}</div>*/
/*               </div>*/
/*               <hr>*/
/*               <div class="row">*/
/*                 <div class="col-xs-5"><strong>{{ text_date_added }}</strong></div>*/
/*                 <div class="col-xs-7 text-right">{{ date_added }}</div>*/
/*               </div>*/
/*             </div>*/
/*             <div id="sales" class="well"><i class="opencart-icon-cart-mini"></i> <strong>{{ sales }}</strong> {{ text_sales }}</div>*/
/*             <div id="sales" class="well"><i class="opencart-icon-cart-mini"></i> <strong>{{ downloaded }}</strong> {{ text_downloaded }}</div>*/
/*             <div class="well">*/
/*               <div class="media">*/
/*                 <div class="media-left media-middle"><img src="{{ member_image }}" alt="{{ member_username }}" title="{{ member_username }}" class="media-object img-circle"></div>*/
/*                 <div class="media-body"><span><a href="{{ filter_member }}">{{ member_username }}</a></span>*/
/*                   <br>*/
/*                   <small>{{ text_member_since }} {{ member_date_added }}</small>*/
/*                 </div>*/
/*               </div>*/
/*               <br/>*/
/*               <a href="{{ filter_member }}" class="btn btn-primary btn-lg btn-block">{{ button_view_all }}</a> <a href="https://www.opencart.com/index.php?route=support/seller&amp;extension_id={{ extension_id }}" target="_blank" class="btn btn-ghost-dark btn-lg btn-block">{{ button_get_support }}</a></div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-opencart').on('click', function(e) {*/
/* 	$('#modal-opencart').remove();*/
/* */
/* 	$.ajax({*/
/* 		url: 'index.php?route=marketplace/api&user_token={{ user_token }}',*/
/* 		dataType: 'html',*/
/* 		beforeSend: function() {*/
/* 			$('#button-opencart').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-opencart').button('reset');*/
/* 		},*/
/* 		success: function(html) {*/
/* 			$('body').append('<div id="modal-opencart" class="modal">' + html + '</div>');*/
/* */
/* 			$('#modal-opencart').modal('show');*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#button-buy').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#modal-purchase').remove();*/
/* */
/* 	html = '<div id="modal-purchase" class="modal">';*/
/* 	html += '  <div class="modal-dialog">';*/
/* 	html += '    <div class="modal-content">';*/
/* 	html += '      <div class="modal-header">';*/
/* 	html += '        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';*/
/* 	html += '        <h4 class="modal-title">{{ text_purchase }}</h4>';*/
/* 	html += '      </div>';*/
/* 	html += '      <div class="modal-body">';*/
/* 	html += '        <p>{{ text_pin }}</p>';*/
/* 	html += '        <p>{{ text_secure }}</p>';*/
/* 	html += '        <div class="form-group">';*/
/* 	html += '          <label for="input-pin">{{ entry_pin }}</label>';*/
/* 	html += '          <input type="password" name="pin" value="" placeholder="{{ entry_pin }}" id="input-pin" class="form-control" />';*/
/* 	html += '        </div>';*/
/* 	html += '        <div class="form-group text-right">';*/
/* 	html += '          <div class="pull-left"><a href="https://www.opencart.com/index.php?route=support/contact" class="btn btn-default btn-lg" target="_blank">{{ button_forgot_pin }}</a></div>';*/
/* 	html += '          <button type="button" id="button-purchase" data-loading-text="{{ text_loading }}" class="btn btn-primary btn-lg">{{ button_purchase }}</button>';*/
/* 	html += '        </div>';*/
/* 	html += '      </div>';*/
/* 	html += '    </div>';*/
/* 	html += '  </div>';*/
/* 	html += '</div>';*/
/* */
/* 	$('body').append(html);*/
/* */
/* 	$('#modal-purchase').modal('show');*/
/* });*/
/* */
/* $('body').on('click', '#modal-purchase #button-purchase', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	var element = this;*/
/* */
/* 	$.ajax({*/
/* 		url: 'index.php?route=marketplace/marketplace/purchase&user_token={{ user_token }}&extension_id={{ extension_id }}',*/
/* 		type: 'post',*/
/* 		data: $('input[name=\'pin\']'),*/
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
/* 				$('#modal-purchase .modal-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				$('#modal-purchase').modal('hide');*/
/* */
/* 				$('#tab-download .btn-primary').prop('disabled', false);*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Install*/
/* $('#tab-download').on('click', '.btn-primary', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	var element = this;*/
/* */
/* 	// Reset everything*/
/* 	$('#progress-bar').css('width', '0%');*/
/* 	$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');*/
/* 	$('#progress-text').html('');*/
/* */
/* 	$.ajax({*/
/* 		url: 'index.php?route=marketplace/marketplace/download&user_token={{ user_token }}&extension_id={{ extension_id }}&extension_download_id=' + $(this).attr('data-install'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$(element).button('loading');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#progress-bar').addClass('progress-bar-danger');*/
/* 				$('#progress-text').html('<div class="text-danger">' + json['error'] + '</div>');*/
/* */
/* 				$(element).button('reset');*/
/* 			}*/
/* */
/* 			if (json['text']) {*/
/* 				$('#progress-bar').css('width', '20%');*/
/* 				$('#progress-text').html(json['text']);*/
/* 			}*/
/* */
/* 			if (json['extension_install_id']) {*/
/* 				$(element).attr('data-uninstall', json['extension_install_id']);*/
/* 			}*/
/* */
/* 			if (json['next']) {*/
/* 				next(json['next'], element, 1);*/
/* 			}*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* function next(url, element, i) {*/
/* 	i = i + 1;*/
/* */
/* 	$.ajax({*/
/* 		url: url,*/
/* 		dataType: 'json',*/
/* 		success: function(json) {*/
/* 			$('#progress-bar').css('width', (i * 20) + '%');*/
/* */
/* 			if (json['error']) {*/
/* 				$('#progress-bar').addClass('progress-bar-danger');*/
/* 				$('#progress-text').html('<div class="text-danger">' + json['error'] + '</div>');*/
/* */
/* 				$(element).button('reset');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#progress-bar').addClass('progress-bar-success');*/
/* 				$('#progress-text').html('<span class="text-success">' + json['success'] + '</span>');*/
/* */
/* 				$(element).replaceWith('<button type="button" data-install="' + $(element).attr('data-install') + '" data-uninstall="' + $(element).attr('data-uninstall') + '" data-loading="{{ text_loading }}" class="btn btn-danger"><i class="fa fa-trash-o"></i> {{ button_uninstall }}</button>');*/
/* 			}*/
/* */
/* 			if (json['text']) {*/
/* 				$('#progress-text').html(json['text']);*/
/* 			}*/
/* */
/* 			if (json['next']) {*/
/* 				next(json['next'], element, i);*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* // Uninstall*/
/* $('#tab-download').on('click', ' .btn-danger', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	var element = this;*/
/* */
/* 	$('#progress-bar').css('width', '0%');*/
/* 	$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');*/
/* 	$('#progress-text').html('');*/
/* */
/* 	$.ajax({*/
/* 		url: 'index.php?route=marketplace/install/uninstall&user_token={{ user_token }}&extension_install_id=' + $(element).attr('data-uninstall'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$(element).button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$(element).button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['error']) {*/
/* 				$('#progress-bar').addClass('progress-bar-danger');*/
/* 				$('#progress-text').html('<div class="text-danger">' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#progress-bar').css('width', '100%');*/
/* 				$('#progress-bar').addClass('progress-bar-success');*/
/* 				$('#progress-text').html('<span class="text-success">' + json['success'] + '</div>');*/
/* */
/* 				$(element).replaceWith('<button type="button" data-install="' + $(element).attr('data-install') + '" data-uninstall="" data-loading="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-download"></i> {{ button_install }}</button>');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#comment').delegate('.pagination a', 'click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#comment').load(this.href);*/
/* });*/
/* */
/* // Comment*/
/* $('#comment').load('index.php?route=marketplace/marketplace/comment&user_token={{ user_token }}&extension_id={{ extension_id }}');*/
/* */
/* // Add comment*/
/* $('#button-comment').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=marketplace/marketplace/addcomment&user_token={{ user_token }}&extension_id={{ extension_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: 'comment=' + encodeURIComponent($('textarea[name=\'comment\']').val()),*/
/* 		beforeSend: function() {*/
/* 			$('#button-comment').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-comment').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#tab-comment').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#tab-comment').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				$('#comment').load('index.php?route=marketplace/marketplace/comment&user_token={{ user_token }}&extension_id={{ extension_id }}');*/
/* */
/* 				$('textarea[name=\'comment\']').val('');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Next replies*/
/* $('#comment').on('click', '.btn-block', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	var element = this;*/
/* */
/* 	$.ajax({*/
/* 		url: $(element).attr('href'),*/
/* 		dataType: 'html',*/
/* 		beforeSend: function() {*/
/* 			$(element).button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$(element).button('reset');*/
/* 		},*/
/* 		success: function(html) {*/
/* 			$(element).parent().parent().parent().append(html);*/
/* */
/* 			$(element).parent().remove();*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Reply*/
/* $('#comment').on('click', '.btn-link', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$(this).parent().parent().find('.reply-input-box').toggle();*/
/* });*/
/* */
/* // Add reply*/
/* $('#comment').on('click', '.btn-primary', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	var element = this;*/
/* */
/* 	$.ajax({*/
/* 		url: $(element).attr('href'),*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: 'comment=' + encodeURIComponent($(element).parents('.reply-input-box').find('textarea[name=\'comment\']').val()),*/
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
/* 				$(element).parents('.reply-input-box').before('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$(element).parents('.reply-input-box').before('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				$(element).parents('.reply-input-box').parents('.media').find('.reply-refresh').last().trigger('click');*/
/* */
/* 				$(element).parents('.reply-input-box').find('textarea[name=\'comment\']').val('');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Refresh*/
/* $('#comment').on('click', '.reply-refresh', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	var element = this;*/
/* */
/* 	$.ajax({*/
/* 		url: $(element).attr('href'),*/
/* 		dataType: 'html',*/
/* 		beforeSend: function() {*/
/* 			$(element).button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$(element).button('reset');*/
/* 		},*/
/* 		success: function(html) {*/
/* 			$(element).parent().replaceWith(html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $(document).ready(function() {*/
/* 	$('.thumbnails').magnificPopup({*/
/* 		type: 'image',*/
/* 		delegate: 'a',*/
/* 		gallery: {*/
/* 			enabled: true*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* {{ footer }}*/
/* */
