<?php

/* setting/setting.twig */
class __TwigTemplate_09db9dd8a3a02303ea0abd92702daba21938ff51b4d51cf8e42648e4775ee6c5 extends Twig_Template
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
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
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
  <div class=\"container-fluid\"> ";
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
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 34
        echo (isset($context["tab_store"]) ? $context["tab_store"] : null);
        echo "</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 35
        echo (isset($context["tab_local"]) ? $context["tab_local"] : null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 36
        echo (isset($context["tab_option"]) ? $context["tab_option"] : null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 37
        echo (isset($context["tab_image"]) ? $context["tab_image"] : null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 38
        echo (isset($context["tab_mail"]) ? $context["tab_mail"] : null);
        echo "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 39
        echo (isset($context["tab_server"]) ? $context["tab_server"] : null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 44
        echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 46
        echo (isset($context["config_meta_title"]) ? $context["config_meta_title"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
        echo "\" id=\"input-meta-title\" class=\"form-control\"/>
                  ";
        // line 47
        if ((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null)) {
            // line 48
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_meta_title"]) ? $context["error_meta_title"] : null);
            echo "</div>
                  ";
        }
        // line 49
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 52
        echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 54
        echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo (isset($context["config_meta_description"]) ? $context["config_meta_description"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 58
        echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 60
        echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo (isset($context["config_meta_keyword"]) ? $context["config_meta_keyword"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 64
        echo (isset($context["entry_theme"]) ? $context["entry_theme"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">

                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) ? $context["themes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 69
            echo "                      ";
            if (($this->getAttribute($context["theme"], "value", array()) == (isset($context["config_theme"]) ? $context["config_theme"] : null))) {
                // line 70
                echo "
                        <option value=\"";
                // line 71
                echo $this->getAttribute($context["theme"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["theme"], "text", array());
                echo "</option>

                      ";
            } else {
                // line 74
                echo "
                        <option value=\"";
                // line 75
                echo $this->getAttribute($context["theme"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["theme"], "text", array());
                echo "</option>

                      ";
            }
            // line 78
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
                  </select>
                  <br/>
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\"/></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 85
        echo (isset($context["entry_layout"]) ? $context["entry_layout"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">

                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 90
            echo "                      ";
            if (($this->getAttribute($context["layout"], "layout_id", array()) == (isset($context["config_layout_id"]) ? $context["config_layout_id"] : null))) {
                // line 91
                echo "
                        <option value=\"";
                // line 92
                echo $this->getAttribute($context["layout"], "layout_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["layout"], "name", array());
                echo "</option>

                      ";
            } else {
                // line 95
                echo "
                        <option value=\"";
                // line 96
                echo $this->getAttribute($context["layout"], "layout_id", array());
                echo "\">";
                echo $this->getAttribute($context["layout"], "name", array());
                echo "</option>

                      ";
            }
            // line 99
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 107
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 109
        echo (isset($context["config_name"]) ? $context["config_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
                  ";
        // line 110
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 111
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
                  ";
        }
        // line 112
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 115
        echo (isset($context["entry_owner"]) ? $context["entry_owner"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 117
        echo (isset($context["config_owner"]) ? $context["config_owner"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_owner"]) ? $context["entry_owner"] : null);
        echo "\" id=\"input-owner\" class=\"form-control\"/>
                  ";
        // line 118
        if ((isset($context["error_owner"]) ? $context["error_owner"] : null)) {
            // line 119
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_owner"]) ? $context["error_owner"] : null);
            echo "</div>
                  ";
        }
        // line 120
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 123
        echo (isset($context["entry_address"]) ? $context["entry_address"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 125
        echo (isset($context["entry_address"]) ? $context["entry_address"] : null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo (isset($context["config_address"]) ? $context["config_address"] : null);
        echo "</textarea>
                  ";
        // line 126
        if ((isset($context["error_address"]) ? $context["error_address"] : null)) {
            // line 127
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_address"]) ? $context["error_address"] : null);
            echo "</div>
                  ";
        }
        // line 128
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 131
        echo (isset($context["help_geocode"]) ? $context["help_geocode"] : null);
        echo "\">";
        echo (isset($context["entry_geocode"]) ? $context["entry_geocode"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 133
        echo (isset($context["config_geocode"]) ? $context["config_geocode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_geocode"]) ? $context["entry_geocode"] : null);
        echo "\" id=\"input-geocode\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 137
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 139
        echo (isset($context["config_email"]) ? $context["config_email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                  ";
        // line 140
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 141
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
                  ";
        }
        // line 142
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 145
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 147
        echo (isset($context["config_telephone"]) ? $context["config_telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                  ";
        // line 148
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 149
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>
                  ";
        }
        // line 150
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 153
        echo (isset($context["entry_fax"]) ? $context["entry_fax"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 155
        echo (isset($context["config_fax"]) ? $context["config_fax"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_fax"]) ? $context["entry_fax"] : null);
        echo "\" id=\"input-fax\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 159
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 160
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\"/></a> <input type=\"hidden\" name=\"config_image\" value=\"";
        echo (isset($context["config_image"]) ? $context["config_image"] : null);
        echo "\" id=\"input-image\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 164
        echo (isset($context["help_open"]) ? $context["help_open"] : null);
        echo "\">";
        echo (isset($context["entry_open"]) ? $context["entry_open"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 166
        echo (isset($context["entry_open"]) ? $context["entry_open"] : null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo (isset($context["config_open"]) ? $context["config_open"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 170
        echo (isset($context["help_comment"]) ? $context["help_comment"] : null);
        echo "\">";
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 172
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo (isset($context["config_comment"]) ? $context["config_comment"] : null);
        echo "</textarea>
                </div>
              </div>
              ";
        // line 175
        if ((isset($context["locations"]) ? $context["locations"] : null)) {
            // line 176
            echo "                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 177
            echo (isset($context["help_location"]) ? $context["help_location"] : null);
            echo "\">";
            echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
            echo "</span></label>
                  <div class=\"col-sm-10\"> ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) ? $context["locations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 179
                echo "                      <div class=\"checkbox\">
                        <label> ";
                // line 180
                if (twig_in_filter($this->getAttribute($context["location"], "location_id", array()), (isset($context["config_location"]) ? $context["config_location"] : null))) {
                    // line 181
                    echo "                            <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo $this->getAttribute($context["location"], "location_id", array());
                    echo "\" checked=\"checked\"/>
                            ";
                    // line 182
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "
                          ";
                } else {
                    // line 184
                    echo "                            <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo $this->getAttribute($context["location"], "location_id", array());
                    echo "\"/>
                            ";
                    // line 185
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "
                          ";
                }
                // line 186
                echo " </label>
                      </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo " </div>
                </div>
              ";
        }
        // line 190
        echo " </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 193
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">

                    ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 198
            echo "                      ";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["config_country_id"]) ? $context["config_country_id"] : null))) {
                // line 199
                echo "
                        <option value=\"";
                // line 200
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>

                      ";
            } else {
                // line 203
                echo "
                        <option value=\"";
                // line 204
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>

                      ";
            }
            // line 207
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 213
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\"> </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 219
        echo (isset($context["entry_language"]) ? $context["entry_language"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">

                    ";
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 224
            echo "                      ";
            if (($this->getAttribute($context["language"], "code", array()) == (isset($context["config_language"]) ? $context["config_language"] : null))) {
                // line 225
                echo "
                        <option value=\"";
                // line 226
                echo $this->getAttribute($context["language"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>

                      ";
            } else {
                // line 229
                echo "
                        <option value=\"";
                // line 230
                echo $this->getAttribute($context["language"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>

                      ";
            }
            // line 233
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        echo "
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 239
        echo (isset($context["entry_admin_language"]) ? $context["entry_admin_language"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">

                    ";
        // line 243
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 244
            echo "                      ";
            if (($this->getAttribute($context["language"], "code", array()) == (isset($context["config_admin_language"]) ? $context["config_admin_language"] : null))) {
                // line 245
                echo "
                        <option value=\"";
                // line 246
                echo $this->getAttribute($context["language"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>

                      ";
            } else {
                // line 249
                echo "
                        <option value=\"";
                // line 250
                echo $this->getAttribute($context["language"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>

                      ";
            }
            // line 253
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        echo "
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 259
        echo (isset($context["help_currency"]) ? $context["help_currency"] : null);
        echo "\">";
        echo (isset($context["entry_currency"]) ? $context["entry_currency"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">

                    ";
        // line 263
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 264
            echo "                      ";
            if (($this->getAttribute($context["currency"], "code", array()) == (isset($context["config_currency"]) ? $context["config_currency"] : null))) {
                // line 265
                echo "
                        <option value=\"";
                // line 266
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</option>

                      ";
            } else {
                // line 269
                echo "
                        <option value=\"";
                // line 270
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</option>

                      ";
            }
            // line 273
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 279
        echo (isset($context["help_currency_auto"]) ? $context["help_currency_auto"] : null);
        echo "\">";
        echo (isset($context["entry_currency_auto"]) ? $context["entry_currency_auto"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 281
        if ((isset($context["config_currency_auto"]) ? $context["config_currency_auto"] : null)) {
            // line 282
            echo "                      <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\"/>
                      ";
            // line 283
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        } else {
            // line 285
            echo "                      <input type=\"radio\" name=\"config_currency_auto\" value=\"1\"/>
                      ";
            // line 286
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        }
        // line 287
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["config_currency_auto"]) ? $context["config_currency_auto"] : null)) {
            // line 288
            echo "                      <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\"/>
                      ";
            // line 289
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        } else {
            // line 291
            echo "                      <input type=\"radio\" name=\"config_currency_auto\" value=\"0\"/>
                      ";
            // line 292
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        }
        // line 293
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 297
        echo (isset($context["entry_length_class"]) ? $context["entry_length_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">

                    ";
        // line 301
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["length_classes"]) ? $context["length_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 302
            echo "                      ";
            if (($this->getAttribute($context["length_class"], "length_class_id", array()) == (isset($context["config_length_class_id"]) ? $context["config_length_class_id"] : null))) {
                // line 303
                echo "
                        <option value=\"";
                // line 304
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>

                      ";
            } else {
                // line 307
                echo "
                        <option value=\"";
                // line 308
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>

                      ";
            }
            // line 311
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 312
        echo "
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 317
        echo (isset($context["entry_weight_class"]) ? $context["entry_weight_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">

                    ";
        // line 321
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weight_classes"]) ? $context["weight_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 322
            echo "                      ";
            if (($this->getAttribute($context["weight_class"], "weight_class_id", array()) == (isset($context["config_weight_class_id"]) ? $context["config_weight_class_id"] : null))) {
                // line 323
                echo "
                        <option value=\"";
                // line 324
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>

                      ";
            } else {
                // line 327
                echo "
                        <option value=\"";
                // line 328
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>

                      ";
            }
            // line 331
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 332
        echo "
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 339
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 341
        echo (isset($context["help_product_count"]) ? $context["help_product_count"] : null);
        echo "\">";
        echo (isset($context["entry_product_count"]) ? $context["entry_product_count"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 343
        if ((isset($context["config_product_count"]) ? $context["config_product_count"] : null)) {
            // line 344
            echo "                        <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 345
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 347
            echo "                        <input type=\"radio\" name=\"config_product_count\" value=\"1\"/>
                        ";
            // line 348
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 349
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["config_product_count"]) ? $context["config_product_count"] : null)) {
            // line 350
            echo "                        <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 351
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 353
            echo "                        <input type=\"radio\" name=\"config_product_count\" value=\"0\"/>
                        ";
            // line 354
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 355
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 359
        echo (isset($context["help_limit_admin"]) ? $context["help_limit_admin"] : null);
        echo "\">";
        echo (isset($context["entry_limit_admin"]) ? $context["entry_limit_admin"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 361
        echo (isset($context["config_limit_admin"]) ? $context["config_limit_admin"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_limit_admin"]) ? $context["entry_limit_admin"] : null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\"/>
                    ";
        // line 362
        if ((isset($context["error_limit_admin"]) ? $context["error_limit_admin"] : null)) {
            // line 363
            echo "                      <div class=\"text-danger\">";
            echo (isset($context["error_limit_admin"]) ? $context["error_limit_admin"] : null);
            echo "</div>
                    ";
        }
        // line 364
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 368
        echo (isset($context["text_review"]) ? $context["text_review"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 370
        echo (isset($context["help_review"]) ? $context["help_review"] : null);
        echo "\">";
        echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 372
        if ((isset($context["config_review_status"]) ? $context["config_review_status"] : null)) {
            // line 373
            echo "                        <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 374
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 376
            echo "                        <input type=\"radio\" name=\"config_review_status\" value=\"1\"/>
                        ";
            // line 377
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 378
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["config_review_status"]) ? $context["config_review_status"] : null)) {
            // line 379
            echo "                        <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 380
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 382
            echo "                        <input type=\"radio\" name=\"config_review_status\" value=\"0\"/>
                        ";
            // line 383
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 384
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 388
        echo (isset($context["help_review_guest"]) ? $context["help_review_guest"] : null);
        echo "\">";
        echo (isset($context["entry_review_guest"]) ? $context["entry_review_guest"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 390
        if ((isset($context["config_review_guest"]) ? $context["config_review_guest"] : null)) {
            // line 391
            echo "                        <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 392
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 394
            echo "                        <input type=\"radio\" name=\"config_review_guest\" value=\"1\"/>
                        ";
            // line 395
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 396
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["config_review_guest"]) ? $context["config_review_guest"] : null)) {
            // line 397
            echo "                        <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 398
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 400
            echo "                        <input type=\"radio\" name=\"config_review_guest\" value=\"0\"/>
                        ";
            // line 401
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 402
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 407
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 409
        echo (isset($context["help_voucher_min"]) ? $context["help_voucher_min"] : null);
        echo "\">";
        echo (isset($context["entry_voucher_min"]) ? $context["entry_voucher_min"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 411
        echo (isset($context["config_voucher_min"]) ? $context["config_voucher_min"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_voucher_min"]) ? $context["entry_voucher_min"] : null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\"/>
                    ";
        // line 412
        if ((isset($context["error_voucher_min"]) ? $context["error_voucher_min"] : null)) {
            // line 413
            echo "                      <div class=\"text-danger\">";
            echo (isset($context["error_voucher_min"]) ? $context["error_voucher_min"] : null);
            echo "</div>
                    ";
        }
        // line 414
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 417
        echo (isset($context["help_voucher_max"]) ? $context["help_voucher_max"] : null);
        echo "\">";
        echo (isset($context["entry_voucher_max"]) ? $context["entry_voucher_max"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 419
        echo (isset($context["config_voucher_max"]) ? $context["config_voucher_max"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_voucher_max"]) ? $context["entry_voucher_max"] : null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\"/>
                    ";
        // line 420
        if ((isset($context["error_voucher_max"]) ? $context["error_voucher_max"] : null)) {
            // line 421
            echo "                      <div class=\"text-danger\">";
            echo (isset($context["error_voucher_max"]) ? $context["error_voucher_max"] : null);
            echo "</div>
                    ";
        }
        // line 422
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 426
        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 428
        echo (isset($context["entry_tax"]) ? $context["entry_tax"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 430
        if ((isset($context["config_tax"]) ? $context["config_tax"] : null)) {
            // line 431
            echo "                        <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 432
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 434
            echo "                        <input type=\"radio\" name=\"config_tax\" value=\"1\"/>
                        ";
            // line 435
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 436
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["config_tax"]) ? $context["config_tax"] : null)) {
            // line 437
            echo "                        <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 438
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 440
            echo "                        <input type=\"radio\" name=\"config_tax\" value=\"0\"/>
                        ";
            // line 441
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 442
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 446
        echo (isset($context["help_tax_default"]) ? $context["help_tax_default"] : null);
        echo "\">";
        echo (isset($context["entry_tax_default"]) ? $context["entry_tax_default"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 449
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>

                      ";
        // line 451
        if (((isset($context["config_tax_default"]) ? $context["config_tax_default"] : null) == "shipping")) {
            // line 452
            echo "
                        <option value=\"shipping\" selected=\"selected\">";
            // line 453
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>

                      ";
        } else {
            // line 456
            echo "
                        <option value=\"shipping\">";
            // line 457
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>

                      ";
        }
        // line 460
        echo "                      ";
        if (((isset($context["config_tax_default"]) ? $context["config_tax_default"] : null) == "payment")) {
            // line 461
            echo "
                        <option value=\"payment\" selected=\"selected\">";
            // line 462
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>

                      ";
        } else {
            // line 465
            echo "
                        <option value=\"payment\">";
            // line 466
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>

                      ";
        }
        // line 469
        echo "
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 474
        echo (isset($context["help_tax_customer"]) ? $context["help_tax_customer"] : null);
        echo "\">";
        echo (isset($context["entry_tax_customer"]) ? $context["entry_tax_customer"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 477
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>

                      ";
        // line 479
        if (((isset($context["config_tax_customer"]) ? $context["config_tax_customer"] : null) == "shipping")) {
            // line 480
            echo "
                        <option value=\"shipping\" selected=\"selected\">";
            // line 481
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>

                      ";
        } else {
            // line 484
            echo "
                        <option value=\"shipping\">";
            // line 485
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>

                      ";
        }
        // line 488
        echo "                      ";
        if (((isset($context["config_tax_customer"]) ? $context["config_tax_customer"] : null) == "payment")) {
            // line 489
            echo "
                        <option value=\"payment\" selected=\"selected\">";
            // line 490
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>

                      ";
        } else {
            // line 493
            echo "
                        <option value=\"payment\">";
            // line 494
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>

                      ";
        }
        // line 497
        echo "
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 503
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 505
        echo (isset($context["help_customer_online"]) ? $context["help_customer_online"] : null);
        echo "\">";
        echo (isset($context["entry_customer_online"]) ? $context["entry_customer_online"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 507
        if ((isset($context["config_customer_online"]) ? $context["config_customer_online"] : null)) {
            // line 508
            echo "                        <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 509
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 511
            echo "                        <input type=\"radio\" name=\"config_customer_online\" value=\"1\"/>
                        ";
            // line 512
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 513
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["config_customer_online"]) ? $context["config_customer_online"] : null)) {
            // line 514
            echo "                        <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 515
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 517
            echo "                        <input type=\"radio\" name=\"config_customer_online\" value=\"0\"/>
                        ";
            // line 518
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 519
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 523
        echo (isset($context["help_customer_activity"]) ? $context["help_customer_activity"] : null);
        echo "\">";
        echo (isset($context["entry_customer_activity"]) ? $context["entry_customer_activity"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 525
        if ((isset($context["config_customer_activity"]) ? $context["config_customer_activity"] : null)) {
            // line 526
            echo "                        <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 527
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 529
            echo "                        <input type=\"radio\" name=\"config_customer_activity\" value=\"1\"/>
                        ";
            // line 530
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 531
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["config_customer_activity"]) ? $context["config_customer_activity"] : null)) {
            // line 532
            echo "                        <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 533
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 535
            echo "                        <input type=\"radio\" name=\"config_customer_activity\" value=\"0\"/>
                        ";
            // line 536
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 537
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 541
        echo (isset($context["entry_customer_search"]) ? $context["entry_customer_search"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 543
        if ((isset($context["config_customer_search"]) ? $context["config_customer_search"] : null)) {
            // line 544
            echo "                        <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 545
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 547
            echo "                        <input type=\"radio\" name=\"config_customer_search\" value=\"1\"/>
                        ";
            // line 548
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 549
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["config_customer_search"]) ? $context["config_customer_search"] : null)) {
            // line 550
            echo "                        <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 551
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 553
            echo "                        <input type=\"radio\" name=\"config_customer_search\" value=\"0\"/>
                        ";
            // line 554
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 555
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 559
        echo (isset($context["help_customer_group"]) ? $context["help_customer_group"] : null);
        echo "\">";
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">

                      ";
        // line 563
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 564
            echo "                        ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["config_customer_group_id"]) ? $context["config_customer_group_id"] : null))) {
                // line 565
                echo "
                          <option value=\"";
                // line 566
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>

                        ";
            } else {
                // line 569
                echo "
                          <option value=\"";
                // line 570
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>

                        ";
            }
            // line 573
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 574
        echo "
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 579
        echo (isset($context["help_customer_group_display"]) ? $context["help_customer_group_display"] : null);
        echo "\">";
        echo (isset($context["entry_customer_group_display"]) ? $context["entry_customer_group_display"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\"> ";
        // line 580
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 581
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 582
            if (twig_in_filter($this->getAttribute($context["customer_group"], "customer_group_id", array()), (isset($context["config_customer_group_display"]) ? $context["config_customer_group_display"] : null))) {
                // line 583
                echo "                            <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked=\"checked\"/>
                            ";
                // line 584
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "
                          ";
            } else {
                // line 586
                echo "                            <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\"/>
                            ";
                // line 587
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "
                          ";
            }
            // line 588
            echo " </label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 591
        echo "                    ";
        if ((isset($context["error_customer_group_display"]) ? $context["error_customer_group_display"] : null)) {
            // line 592
            echo "                      <div class=\"text-danger\">";
            echo (isset($context["error_customer_group_display"]) ? $context["error_customer_group_display"] : null);
            echo "</div>
                    ";
        }
        // line 593
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 596
        echo (isset($context["help_customer_price"]) ? $context["help_customer_price"] : null);
        echo "\">";
        echo (isset($context["entry_customer_price"]) ? $context["entry_customer_price"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 598
        if ((isset($context["config_customer_price"]) ? $context["config_customer_price"] : null)) {
            // line 599
            echo "                        <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 600
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 602
            echo "                        <input type=\"radio\" name=\"config_customer_price\" value=\"1\"/>
                        ";
            // line 603
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 604
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["config_customer_price"]) ? $context["config_customer_price"] : null)) {
            // line 605
            echo "                        <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 606
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 608
            echo "                        <input type=\"radio\" name=\"config_customer_price\" value=\"0\"/>
                        ";
            // line 609
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 610
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 614
        echo (isset($context["help_login_attempts"]) ? $context["help_login_attempts"] : null);
        echo "\">";
        echo (isset($context["entry_login_attempts"]) ? $context["entry_login_attempts"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 616
        echo (isset($context["config_login_attempts"]) ? $context["config_login_attempts"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_login_attempts"]) ? $context["entry_login_attempts"] : null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\"/>
                    ";
        // line 617
        if ((isset($context["error_login_attempts"]) ? $context["error_login_attempts"] : null)) {
            // line 618
            echo "                      <div class=\"text-danger\">";
            echo (isset($context["error_login_attempts"]) ? $context["error_login_attempts"] : null);
            echo "</div>
                    ";
        }
        // line 619
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 622
        echo (isset($context["help_account"]) ? $context["help_account"] : null);
        echo "\">";
        echo (isset($context["entry_account"]) ? $context["entry_account"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 625
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>

                      ";
        // line 627
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 628
            echo "                        ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_account_id"]) ? $context["config_account_id"] : null))) {
                // line 629
                echo "
                          <option value=\"";
                // line 630
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>

                        ";
            } else {
                // line 633
                echo "
                          <option value=\"";
                // line 634
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>

                        ";
            }
            // line 637
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 638
        echo "
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 644
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 646
        echo (isset($context["help_invoice_prefix"]) ? $context["help_invoice_prefix"] : null);
        echo "\">";
        echo (isset($context["entry_invoice_prefix"]) ? $context["entry_invoice_prefix"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 648
        echo (isset($context["config_invoice_prefix"]) ? $context["config_invoice_prefix"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_invoice_prefix"]) ? $context["entry_invoice_prefix"] : null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 652
        echo (isset($context["help_cart_weight"]) ? $context["help_cart_weight"] : null);
        echo "\">";
        echo (isset($context["entry_cart_weight"]) ? $context["entry_cart_weight"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 654
        if ((isset($context["config_cart_weight"]) ? $context["config_cart_weight"] : null)) {
            // line 655
            echo "                        <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 656
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 658
            echo "                        <input type=\"radio\" name=\"config_cart_weight\" value=\"1\"/>
                        ";
            // line 659
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 660
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["config_cart_weight"]) ? $context["config_cart_weight"] : null)) {
            // line 661
            echo "                        <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 662
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 664
            echo "                        <input type=\"radio\" name=\"config_cart_weight\" value=\"0\"/>
                        ";
            // line 665
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 666
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 670
        echo (isset($context["help_checkout_guest"]) ? $context["help_checkout_guest"] : null);
        echo "\">";
        echo (isset($context["entry_checkout_guest"]) ? $context["entry_checkout_guest"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 672
        if ((isset($context["config_checkout_guest"]) ? $context["config_checkout_guest"] : null)) {
            // line 673
            echo "                        <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 674
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 676
            echo "                        <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\"/>
                        ";
            // line 677
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 678
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["config_checkout_guest"]) ? $context["config_checkout_guest"] : null)) {
            // line 679
            echo "                        <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 680
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 682
            echo "                        <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\"/>
                        ";
            // line 683
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 684
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 688
        echo (isset($context["help_checkout"]) ? $context["help_checkout"] : null);
        echo "\">";
        echo (isset($context["entry_checkout"]) ? $context["entry_checkout"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 691
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>

                      ";
        // line 693
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 694
            echo "                        ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_checkout_id"]) ? $context["config_checkout_id"] : null))) {
                // line 695
                echo "
                          <option value=\"";
                // line 696
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>

                        ";
            } else {
                // line 699
                echo "
                          <option value=\"";
                // line 700
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>

                        ";
            }
            // line 703
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 704
        echo "
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 709
        echo (isset($context["help_order_status"]) ? $context["help_order_status"] : null);
        echo "\">";
        echo (isset($context["entry_order_status"]) ? $context["entry_order_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">

                      ";
        // line 713
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 714
            echo "                        ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["config_order_status_id"]) ? $context["config_order_status_id"] : null))) {
                // line 715
                echo "
                          <option value=\"";
                // line 716
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>

                        ";
            } else {
                // line 719
                echo "
                          <option value=\"";
                // line 720
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>

                        ";
            }
            // line 723
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 724
        echo "
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 729
        echo (isset($context["help_processing_status"]) ? $context["help_processing_status"] : null);
        echo "\">";
        echo (isset($context["entry_processing_status"]) ? $context["entry_processing_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 731
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 732
            echo "                        <div class=\"checkbox\">
                          <label> ";
            // line 733
            if (twig_in_filter($this->getAttribute($context["order_status"], "order_status_id", array()), (isset($context["config_processing_status"]) ? $context["config_processing_status"] : null))) {
                // line 734
                echo "                              <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" checked=\"checked\"/>
                              ";
                // line 735
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
                            ";
            } else {
                // line 737
                echo "                              <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\"/>
                              ";
                // line 738
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
                            ";
            }
            // line 739
            echo " </label>
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 741
        echo " </div>
                    ";
        // line 742
        if ((isset($context["error_processing_status"]) ? $context["error_processing_status"] : null)) {
            // line 743
            echo "                      <div class=\"text-danger\">";
            echo (isset($context["error_processing_status"]) ? $context["error_processing_status"] : null);
            echo "</div>
                    ";
        }
        // line 744
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 747
        echo (isset($context["help_complete_status"]) ? $context["help_complete_status"] : null);
        echo "\">";
        echo (isset($context["entry_complete_status"]) ? $context["entry_complete_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 749
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 750
            echo "                        <div class=\"checkbox\">
                          <label> ";
            // line 751
            if (twig_in_filter($this->getAttribute($context["order_status"], "order_status_id", array()), (isset($context["config_complete_status"]) ? $context["config_complete_status"] : null))) {
                // line 752
                echo "                              <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" checked=\"checked\"/>
                              ";
                // line 753
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
                            ";
            } else {
                // line 755
                echo "                              <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\"/>
                              ";
                // line 756
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
                            ";
            }
            // line 757
            echo " </label>
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 759
        echo " </div>
                    ";
        // line 760
        if ((isset($context["error_complete_status"]) ? $context["error_complete_status"] : null)) {
            // line 761
            echo "                      <div class=\"text-danger\">";
            echo (isset($context["error_complete_status"]) ? $context["error_complete_status"] : null);
            echo "</div>
                    ";
        }
        // line 762
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 765
        echo (isset($context["help_fraud_status"]) ? $context["help_fraud_status"] : null);
        echo "\">";
        echo (isset($context["entry_fraud_status"]) ? $context["entry_fraud_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">

                      ";
        // line 769
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 770
            echo "                        ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["config_fraud_status_id"]) ? $context["config_fraud_status_id"] : null))) {
                // line 771
                echo "
                          <option value=\"";
                // line 772
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>

                        ";
            } else {
                // line 775
                echo "
                          <option value=\"";
                // line 776
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>

                        ";
            }
            // line 779
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 780
        echo "
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 785
        echo (isset($context["help_api"]) ? $context["help_api"] : null);
        echo "\">";
        echo (isset($context["entry_api"]) ? $context["entry_api"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 788
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>

                      ";
        // line 790
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apis"]) ? $context["apis"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 791
            echo "                        ";
            if (($this->getAttribute($context["api"], "api_id", array()) == (isset($context["config_api_id"]) ? $context["config_api_id"] : null))) {
                // line 792
                echo "
                          <option value=\"";
                // line 793
                echo $this->getAttribute($context["api"], "api_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["api"], "username", array());
                echo "</option>

                        ";
            } else {
                // line 796
                echo "
                          <option value=\"";
                // line 797
                echo $this->getAttribute($context["api"], "api_id", array());
                echo "\">";
                echo $this->getAttribute($context["api"], "username", array());
                echo "</option>

                        ";
            }
            // line 800
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 801
        echo "
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 807
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 809
        echo (isset($context["help_stock_display"]) ? $context["help_stock_display"] : null);
        echo "\">";
        echo (isset($context["entry_stock_display"]) ? $context["entry_stock_display"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 811
        if ((isset($context["config_stock_display"]) ? $context["config_stock_display"] : null)) {
            // line 812
            echo "                        <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 813
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 815
            echo "                        <input type=\"radio\" name=\"config_stock_display\" value=\"1\"/>
                        ";
            // line 816
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 817
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["config_stock_display"]) ? $context["config_stock_display"] : null)) {
            // line 818
            echo "                        <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 819
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 821
            echo "                        <input type=\"radio\" name=\"config_stock_display\" value=\"0\"/>
                        ";
            // line 822
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 823
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 827
        echo (isset($context["help_stock_warning"]) ? $context["help_stock_warning"] : null);
        echo "\">";
        echo (isset($context["entry_stock_warning"]) ? $context["entry_stock_warning"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 829
        if ((isset($context["config_stock_warning"]) ? $context["config_stock_warning"] : null)) {
            // line 830
            echo "                        <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 831
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 833
            echo "                        <input type=\"radio\" name=\"config_stock_warning\" value=\"1\"/>
                        ";
            // line 834
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 835
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["config_stock_warning"]) ? $context["config_stock_warning"] : null)) {
            // line 836
            echo "                        <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 837
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 839
            echo "                        <input type=\"radio\" name=\"config_stock_warning\" value=\"0\"/>
                        ";
            // line 840
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 841
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 845
        echo (isset($context["help_stock_checkout"]) ? $context["help_stock_checkout"] : null);
        echo "\">";
        echo (isset($context["entry_stock_checkout"]) ? $context["entry_stock_checkout"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 847
        if ((isset($context["config_stock_checkout"]) ? $context["config_stock_checkout"] : null)) {
            // line 848
            echo "                        <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 849
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 851
            echo "                        <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\"/>
                        ";
            // line 852
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 853
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["config_stock_checkout"]) ? $context["config_stock_checkout"] : null)) {
            // line 854
            echo "                        <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 855
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 857
            echo "                        <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\"/>
                        ";
            // line 858
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 859
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 864
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 866
        echo (isset($context["entry_affiliate_group"]) ? $context["entry_affiliate_group"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">

                      ";
        // line 870
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 871
            echo "                        ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["config_affiliate_group_id"]) ? $context["config_affiliate_group_id"] : null))) {
                // line 872
                echo "
                          <option value=\"";
                // line 873
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>

                        ";
            } else {
                // line 876
                echo "
                          <option value=\"";
                // line 877
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>

                        ";
            }
            // line 880
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 881
        echo "
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 886
        echo (isset($context["help_affiliate_approval"]) ? $context["help_affiliate_approval"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate_approval"]) ? $context["entry_affiliate_approval"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 888
        if ((isset($context["config_affiliate_approval"]) ? $context["config_affiliate_approval"] : null)) {
            // line 889
            echo "                        <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 890
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 892
            echo "                        <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\"/>
                        ";
            // line 893
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 894
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["config_affiliate_approval"]) ? $context["config_affiliate_approval"] : null)) {
            // line 895
            echo "                        <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 896
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 898
            echo "                        <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\"/>
                        ";
            // line 899
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 900
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 904
        echo (isset($context["help_affiliate_auto"]) ? $context["help_affiliate_auto"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate_auto"]) ? $context["entry_affiliate_auto"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 906
        if ((isset($context["config_affiliate_auto"]) ? $context["config_affiliate_auto"] : null)) {
            // line 907
            echo "                        <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 908
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 910
            echo "                        <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\"/>
                        ";
            // line 911
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 912
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["config_affiliate_auto"]) ? $context["config_affiliate_auto"] : null)) {
            // line 913
            echo "                        <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 914
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 916
            echo "                        <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\"/>
                        ";
            // line 917
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 918
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 922
        echo (isset($context["help_affiliate_commission"]) ? $context["help_affiliate_commission"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate_commission"]) ? $context["entry_affiliate_commission"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 924
        echo (isset($context["config_affiliate_commission"]) ? $context["config_affiliate_commission"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_affiliate_commission"]) ? $context["entry_affiliate_commission"] : null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 928
        echo (isset($context["help_affiliate"]) ? $context["help_affiliate"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate"]) ? $context["entry_affiliate"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 931
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>

                      ";
        // line 933
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 934
            echo "                        ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_affiliate_id"]) ? $context["config_affiliate_id"] : null))) {
                // line 935
                echo "
                          <option value=\"";
                // line 936
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>

                        ";
            } else {
                // line 939
                echo "
                          <option value=\"";
                // line 940
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>

                        ";
            }
            // line 943
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 944
        echo "
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 950
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 952
        echo (isset($context["help_return"]) ? $context["help_return"] : null);
        echo "\">";
        echo (isset($context["entry_return"]) ? $context["entry_return"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 955
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>

                      ";
        // line 957
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 958
            echo "                        ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_return_id"]) ? $context["config_return_id"] : null))) {
                // line 959
                echo "
                          <option value=\"";
                // line 960
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>

                        ";
            } else {
                // line 963
                echo "
                          <option value=\"";
                // line 964
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>

                        ";
            }
            // line 967
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 968
        echo "
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 973
        echo (isset($context["help_return_status"]) ? $context["help_return_status"] : null);
        echo "\">";
        echo (isset($context["entry_return_status"]) ? $context["entry_return_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">

                      ";
        // line 977
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["return_statuses"]) ? $context["return_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 978
            echo "                        ";
            if (($this->getAttribute($context["return_status"], "return_status_id", array()) == (isset($context["config_return_status_id"]) ? $context["config_return_status_id"] : null))) {
                // line 979
                echo "
                          <option value=\"";
                // line 980
                echo $this->getAttribute($context["return_status"], "return_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["return_status"], "name", array());
                echo "</option>

                        ";
            } else {
                // line 983
                echo "
                          <option value=\"";
                // line 984
                echo $this->getAttribute($context["return_status"], "return_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["return_status"], "name", array());
                echo "</option>

                        ";
            }
            // line 987
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 988
        echo "
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 994
        echo (isset($context["text_captcha"]) ? $context["text_captcha"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 996
        echo (isset($context["help_captcha"]) ? $context["help_captcha"] : null);
        echo "\">";
        echo (isset($context["entry_captcha"]) ? $context["entry_captcha"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 999
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>

                      ";
        // line 1001
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["captchas"]) ? $context["captchas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 1002
            echo "                        ";
            if (($this->getAttribute($context["captcha"], "value", array()) == (isset($context["config_captcha"]) ? $context["config_captcha"] : null))) {
                // line 1003
                echo "
                          <option value=\"";
                // line 1004
                echo $this->getAttribute($context["captcha"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["captcha"], "text", array());
                echo "</option>

                        ";
            } else {
                // line 1007
                echo "
                          <option value=\"";
                // line 1008
                echo $this->getAttribute($context["captcha"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["captcha"], "text", array());
                echo "</option>

                        ";
            }
            // line 1011
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1012
        echo "
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1017
        echo (isset($context["entry_captcha_page"]) ? $context["entry_captcha_page"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1019
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["captcha_pages"]) ? $context["captcha_pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1020
            echo "                        <div class=\"checkbox\">
                          <label> ";
            // line 1021
            if (twig_in_filter($this->getAttribute($context["captcha_page"], "value", array()), (isset($context["config_captcha_page"]) ? $context["config_captcha_page"] : null))) {
                // line 1022
                echo "                              <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo $this->getAttribute($context["captcha_page"], "value", array());
                echo "\" checked=\"checked\"/>
                              ";
                // line 1023
                echo $this->getAttribute($context["captcha_page"], "text", array());
                echo "
                            ";
            } else {
                // line 1025
                echo "                              <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo $this->getAttribute($context["captcha_page"], "value", array());
                echo "\"/>
                              ";
                // line 1026
                echo $this->getAttribute($context["captcha_page"], "text", array());
                echo "
                            ";
            }
            // line 1027
            echo " </label>
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1029
        echo " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 1036
        echo (isset($context["entry_logo"]) ? $context["entry_logo"] : null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1037
        echo (isset($context["logo"]) ? $context["logo"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\"/></a> <input type=\"hidden\" name=\"config_logo\" value=\"";
        echo (isset($context["config_logo"]) ? $context["config_logo"] : null);
        echo "\" id=\"input-logo\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 1041
        echo (isset($context["help_icon"]) ? $context["help_icon"] : null);
        echo "\">";
        echo (isset($context["entry_icon"]) ? $context["entry_icon"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1042
        echo (isset($context["icon"]) ? $context["icon"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\"/></a> <input type=\"hidden\" name=\"config_icon\" value=\"";
        echo (isset($context["config_icon"]) ? $context["config_icon"] : null);
        echo "\" id=\"input-icon\"/>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 1048
        echo (isset($context["text_general"]) ? $context["text_general"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 1050
        echo (isset($context["help_mail_engine"]) ? $context["help_mail_engine"] : null);
        echo "\">";
        echo (isset($context["entry_mail_engine"]) ? $context["entry_mail_engine"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">

                      ";
        // line 1054
        if (((isset($context["config_mail_engine"]) ? $context["config_mail_engine"] : null) == "mail")) {
            // line 1055
            echo "
                        <option value=\"mail\" selected=\"selected\">";
            // line 1056
            echo (isset($context["text_mail"]) ? $context["text_mail"] : null);
            echo "</option>

                      ";
        } else {
            // line 1059
            echo "
                        <option value=\"mail\">";
            // line 1060
            echo (isset($context["text_mail"]) ? $context["text_mail"] : null);
            echo "</option>

                      ";
        }
        // line 1063
        echo "                      ";
        if (((isset($context["config_mail_engine"]) ? $context["config_mail_engine"] : null) == "smtp")) {
            // line 1064
            echo "
                        <option value=\"smtp\" selected=\"selected\">";
            // line 1065
            echo (isset($context["text_smtp"]) ? $context["text_smtp"] : null);
            echo "</option>

                      ";
        } else {
            // line 1068
            echo "
                        <option value=\"smtp\">";
            // line 1069
            echo (isset($context["text_smtp"]) ? $context["text_smtp"] : null);
            echo "</option>

                      ";
        }
        // line 1072
        echo "
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1077
        echo (isset($context["help_mail_parameter"]) ? $context["help_mail_parameter"] : null);
        echo "\">";
        echo (isset($context["entry_mail_parameter"]) ? $context["entry_mail_parameter"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1079
        echo (isset($context["config_mail_parameter"]) ? $context["config_mail_parameter"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_parameter"]) ? $context["entry_mail_parameter"] : null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 1083
        echo (isset($context["help_mail_smtp_hostname"]) ? $context["help_mail_smtp_hostname"] : null);
        echo "\">";
        echo (isset($context["entry_mail_smtp_hostname"]) ? $context["entry_mail_smtp_hostname"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1085
        echo (isset($context["config_mail_smtp_hostname"]) ? $context["config_mail_smtp_hostname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_hostname"]) ? $context["entry_mail_smtp_hostname"] : null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 1089
        echo (isset($context["entry_mail_smtp_username"]) ? $context["entry_mail_smtp_username"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1091
        echo (isset($context["config_mail_smtp_username"]) ? $context["config_mail_smtp_username"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_username"]) ? $context["entry_mail_smtp_username"] : null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 1095
        echo (isset($context["help_mail_smtp_password"]) ? $context["help_mail_smtp_password"] : null);
        echo "\">";
        echo (isset($context["entry_mail_smtp_password"]) ? $context["entry_mail_smtp_password"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1097
        echo (isset($context["config_mail_smtp_password"]) ? $context["config_mail_smtp_password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_password"]) ? $context["entry_mail_smtp_password"] : null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 1101
        echo (isset($context["entry_mail_smtp_port"]) ? $context["entry_mail_smtp_port"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1103
        echo (isset($context["config_mail_smtp_port"]) ? $context["config_mail_smtp_port"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_port"]) ? $context["entry_mail_smtp_port"] : null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1107
        echo (isset($context["entry_mail_smtp_timeout"]) ? $context["entry_mail_smtp_timeout"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1109
        echo (isset($context["config_mail_smtp_timeout"]) ? $context["config_mail_smtp_timeout"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_timeout"]) ? $context["entry_mail_smtp_timeout"] : null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1114
        echo (isset($context["text_mail_alert"]) ? $context["text_mail_alert"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1116
        echo (isset($context["help_mail_alert"]) ? $context["help_mail_alert"] : null);
        echo "\">";
        echo (isset($context["entry_mail_alert"]) ? $context["entry_mail_alert"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mail_alerts"]) ? $context["mail_alerts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1119
            echo "                        <div class=\"checkbox\">
                          <label> ";
            // line 1120
            if (twig_in_filter($this->getAttribute($context["mail_alert"], "value", array()), (isset($context["config_mail_alert"]) ? $context["config_mail_alert"] : null))) {
                // line 1121
                echo "                              <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo $this->getAttribute($context["mail_alert"], "value", array());
                echo "\" checked=\"checked\"/>
                              ";
                // line 1122
                echo $this->getAttribute($context["mail_alert"], "text", array());
                echo "
                            ";
            } else {
                // line 1124
                echo "                              <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo $this->getAttribute($context["mail_alert"], "value", array());
                echo "\"/>
                              ";
                // line 1125
                echo $this->getAttribute($context["mail_alert"], "text", array());
                echo "
                            ";
            }
            // line 1126
            echo " </label>
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1128
        echo " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1132
        echo (isset($context["help_mail_alert_email"]) ? $context["help_mail_alert_email"] : null);
        echo "\">";
        echo (isset($context["entry_mail_alert_email"]) ? $context["entry_mail_alert_email"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1134
        echo (isset($context["entry_mail_alert_email"]) ? $context["entry_mail_alert_email"] : null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo (isset($context["config_mail_alert_email"]) ? $context["config_mail_alert_email"] : null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1141
        echo (isset($context["text_general"]) ? $context["text_general"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1143
        echo (isset($context["help_maintenance"]) ? $context["help_maintenance"] : null);
        echo "\">";
        echo (isset($context["entry_maintenance"]) ? $context["entry_maintenance"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1145
        if ((isset($context["config_maintenance"]) ? $context["config_maintenance"] : null)) {
            // line 1146
            echo "                        <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 1147
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1149
            echo "                        <input type=\"radio\" name=\"config_maintenance\" value=\"1\"/>
                        ";
            // line 1150
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1151
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["config_maintenance"]) ? $context["config_maintenance"] : null)) {
            // line 1152
            echo "                        <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 1153
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1155
            echo "                        <input type=\"radio\" name=\"config_maintenance\" value=\"0\"/>
                        ";
            // line 1156
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1157
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1161
        echo (isset($context["help_seo_url"]) ? $context["help_seo_url"] : null);
        echo "\">";
        echo (isset($context["entry_seo_url"]) ? $context["entry_seo_url"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1163
        if ((isset($context["config_seo_url"]) ? $context["config_seo_url"] : null)) {
            // line 1164
            echo "                        <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 1165
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1167
            echo "                        <input type=\"radio\" name=\"config_seo_url\" value=\"1\"/>
                        ";
            // line 1168
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1169
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["config_seo_url"]) ? $context["config_seo_url"] : null)) {
            // line 1170
            echo "                        <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 1171
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1173
            echo "                        <input type=\"radio\" name=\"config_seo_url\" value=\"0\"/>
                        ";
            // line 1174
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1175
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1179
        echo (isset($context["help_robots"]) ? $context["help_robots"] : null);
        echo "\">";
        echo (isset($context["entry_robots"]) ? $context["entry_robots"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1181
        echo (isset($context["entry_robots"]) ? $context["entry_robots"] : null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo (isset($context["config_robots"]) ? $context["config_robots"] : null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1185
        echo (isset($context["help_compression"]) ? $context["help_compression"] : null);
        echo "\">";
        echo (isset($context["entry_compression"]) ? $context["entry_compression"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1187
        echo (isset($context["config_compression"]) ? $context["config_compression"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_compression"]) ? $context["entry_compression"] : null);
        echo "\" id=\"input-compression\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1192
        echo (isset($context["text_security"]) ? $context["text_security"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1194
        echo (isset($context["help_secure"]) ? $context["help_secure"] : null);
        echo "\">";
        echo (isset($context["entry_secure"]) ? $context["entry_secure"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1196
        if ((isset($context["config_secure"]) ? $context["config_secure"] : null)) {
            // line 1197
            echo "                        <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 1198
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1200
            echo "                        <input type=\"radio\" name=\"config_secure\" value=\"1\"/>
                        ";
            // line 1201
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1202
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["config_secure"]) ? $context["config_secure"] : null)) {
            // line 1203
            echo "                        <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 1204
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1206
            echo "                        <input type=\"radio\" name=\"config_secure\" value=\"0\"/>
                        ";
            // line 1207
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1208
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1212
        echo (isset($context["help_password"]) ? $context["help_password"] : null);
        echo "\">";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1214
        if ((isset($context["config_password"]) ? $context["config_password"] : null)) {
            // line 1215
            echo "                        <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 1216
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1218
            echo "                        <input type=\"radio\" name=\"config_password\" value=\"1\"/>
                        ";
            // line 1219
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1220
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["config_password"]) ? $context["config_password"] : null)) {
            // line 1221
            echo "                        <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 1222
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1224
            echo "                        <input type=\"radio\" name=\"config_password\" value=\"0\"/>
                        ";
            // line 1225
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1226
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1230
        echo (isset($context["help_shared"]) ? $context["help_shared"] : null);
        echo "\">";
        echo (isset($context["entry_shared"]) ? $context["entry_shared"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1232
        if ((isset($context["config_shared"]) ? $context["config_shared"] : null)) {
            // line 1233
            echo "                        <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 1234
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1236
            echo "                        <input type=\"radio\" name=\"config_shared\" value=\"1\"/>
                        ";
            // line 1237
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1238
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["config_shared"]) ? $context["config_shared"] : null)) {
            // line 1239
            echo "                        <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 1240
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1242
            echo "                        <input type=\"radio\" name=\"config_shared\" value=\"0\"/>
                        ";
            // line 1243
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1244
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1248
        echo (isset($context["help_encryption"]) ? $context["help_encryption"] : null);
        echo "\">";
        echo (isset($context["entry_encryption"]) ? $context["entry_encryption"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1250
        echo (isset($context["entry_encryption"]) ? $context["entry_encryption"] : null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo (isset($context["config_encryption"]) ? $context["config_encryption"] : null);
        echo "</textarea>
                    ";
        // line 1251
        if ((isset($context["error_encryption"]) ? $context["error_encryption"] : null)) {
            // line 1252
            echo "                      <div class=\"text-danger\">";
            echo (isset($context["error_encryption"]) ? $context["error_encryption"] : null);
            echo "</div>
                    ";
        }
        // line 1253
        echo "</div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1257
        echo (isset($context["text_upload"]) ? $context["text_upload"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1259
        echo (isset($context["help_file_max_size"]) ? $context["help_file_max_size"] : null);
        echo "\">";
        echo (isset($context["entry_file_max_size"]) ? $context["entry_file_max_size"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1261
        echo (isset($context["config_file_max_size"]) ? $context["config_file_max_size"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_file_max_size"]) ? $context["entry_file_max_size"] : null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1265
        echo (isset($context["help_file_ext_allowed"]) ? $context["help_file_ext_allowed"] : null);
        echo "\">";
        echo (isset($context["entry_file_ext_allowed"]) ? $context["entry_file_ext_allowed"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1267
        echo (isset($context["entry_file_ext_allowed"]) ? $context["entry_file_ext_allowed"] : null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo (isset($context["config_file_ext_allowed"]) ? $context["config_file_ext_allowed"] : null);
        echo "</textarea>
                    ";
        // line 1268
        if ((isset($context["error_extension"]) ? $context["error_extension"] : null)) {
            // line 1269
            echo "                      <div class=\"text-danger\">";
            echo (isset($context["error_extension"]) ? $context["error_extension"] : null);
            echo "</div>
                    ";
        }
        // line 1271
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1274
        echo (isset($context["help_file_mime_allowed"]) ? $context["help_file_mime_allowed"] : null);
        echo "\">";
        echo (isset($context["entry_file_mime_allowed"]) ? $context["entry_file_mime_allowed"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1276
        echo (isset($context["entry_file_mime_allowed"]) ? $context["entry_file_mime_allowed"] : null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo (isset($context["config_file_mime_allowed"]) ? $context["config_file_mime_allowed"] : null);
        echo "</textarea>
                    ";
        // line 1277
        if ((isset($context["error_mime"]) ? $context["error_mime"] : null)) {
            // line 1278
            echo "                      <div class=\"text-danger\">";
            echo (isset($context["error_mime"]) ? $context["error_mime"] : null);
            echo "</div>
                    ";
        }
        // line 1280
        echo "                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1284
        echo (isset($context["text_error"]) ? $context["text_error"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1286
        echo (isset($context["entry_error_display"]) ? $context["entry_error_display"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1288
        if ((isset($context["config_error_display"]) ? $context["config_error_display"] : null)) {
            // line 1289
            echo "                        <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 1290
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1292
            echo "                        <input type=\"radio\" name=\"config_error_display\" value=\"1\"/>
                        ";
            // line 1293
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1294
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["config_error_display"]) ? $context["config_error_display"] : null)) {
            // line 1295
            echo "                        <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 1296
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1298
            echo "                        <input type=\"radio\" name=\"config_error_display\" value=\"0\"/>
                        ";
            // line 1299
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1300
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1304
        echo (isset($context["entry_error_log"]) ? $context["entry_error_log"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1306
        if ((isset($context["config_error_log"]) ? $context["config_error_log"] : null)) {
            // line 1307
            echo "                        <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\"/>
                        ";
            // line 1308
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1310
            echo "                        <input type=\"radio\" name=\"config_error_log\" value=\"1\"/>
                        ";
            // line 1311
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1312
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["config_error_log"]) ? $context["config_error_log"] : null)) {
            // line 1313
            echo "                        <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\"/>
                        ";
            // line 1314
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1316
            echo "                        <input type=\"radio\" name=\"config_error_log\" value=\"0\"/>
                        ";
            // line 1317
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1318
        echo "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1322
        echo (isset($context["entry_error_filename"]) ? $context["entry_error_filename"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1324
        echo (isset($context["config_error_filename"]) ? $context["config_error_filename"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_error_filename"]) ? $context["entry_error_filename"] : null);
        echo "\" id=\"input-error-filename\" class=\"form-control\"/>
                    ";
        // line 1325
        if ((isset($context["error_log"]) ? $context["error_log"] : null)) {
            // line 1326
            echo "                      <div class=\"text-danger\">";
            echo (isset($context["error_log"]) ? $context["error_log"] : null);
            echo "</div>
                    ";
        }
        // line 1327
        echo " </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1340
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script>
<script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1362
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1371
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1377
        echo (isset($context["config_zone_id"]) ? $context["config_zone_id"] : null);
        echo "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1384
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);

\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script>
";
        // line 1399
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3633 => 1399,  3615 => 1384,  3605 => 1377,  3596 => 1371,  3584 => 1362,  3559 => 1340,  3544 => 1327,  3538 => 1326,  3536 => 1325,  3530 => 1324,  3525 => 1322,  3519 => 1318,  3514 => 1317,  3511 => 1316,  3506 => 1314,  3503 => 1313,  3500 => 1312,  3495 => 1311,  3492 => 1310,  3487 => 1308,  3484 => 1307,  3482 => 1306,  3477 => 1304,  3471 => 1300,  3466 => 1299,  3463 => 1298,  3458 => 1296,  3455 => 1295,  3452 => 1294,  3447 => 1293,  3444 => 1292,  3439 => 1290,  3436 => 1289,  3434 => 1288,  3429 => 1286,  3424 => 1284,  3418 => 1280,  3412 => 1278,  3410 => 1277,  3404 => 1276,  3397 => 1274,  3392 => 1271,  3386 => 1269,  3384 => 1268,  3378 => 1267,  3371 => 1265,  3362 => 1261,  3355 => 1259,  3350 => 1257,  3344 => 1253,  3338 => 1252,  3336 => 1251,  3330 => 1250,  3323 => 1248,  3317 => 1244,  3312 => 1243,  3309 => 1242,  3304 => 1240,  3301 => 1239,  3298 => 1238,  3293 => 1237,  3290 => 1236,  3285 => 1234,  3282 => 1233,  3280 => 1232,  3273 => 1230,  3267 => 1226,  3262 => 1225,  3259 => 1224,  3254 => 1222,  3251 => 1221,  3248 => 1220,  3243 => 1219,  3240 => 1218,  3235 => 1216,  3232 => 1215,  3230 => 1214,  3223 => 1212,  3217 => 1208,  3212 => 1207,  3209 => 1206,  3204 => 1204,  3201 => 1203,  3198 => 1202,  3193 => 1201,  3190 => 1200,  3185 => 1198,  3182 => 1197,  3180 => 1196,  3173 => 1194,  3168 => 1192,  3158 => 1187,  3151 => 1185,  3142 => 1181,  3135 => 1179,  3129 => 1175,  3124 => 1174,  3121 => 1173,  3116 => 1171,  3113 => 1170,  3110 => 1169,  3105 => 1168,  3102 => 1167,  3097 => 1165,  3094 => 1164,  3092 => 1163,  3085 => 1161,  3079 => 1157,  3074 => 1156,  3071 => 1155,  3066 => 1153,  3063 => 1152,  3060 => 1151,  3055 => 1150,  3052 => 1149,  3047 => 1147,  3044 => 1146,  3042 => 1145,  3035 => 1143,  3030 => 1141,  3018 => 1134,  3011 => 1132,  3005 => 1128,  2997 => 1126,  2992 => 1125,  2987 => 1124,  2982 => 1122,  2977 => 1121,  2975 => 1120,  2972 => 1119,  2968 => 1118,  2961 => 1116,  2956 => 1114,  2946 => 1109,  2941 => 1107,  2932 => 1103,  2927 => 1101,  2918 => 1097,  2911 => 1095,  2902 => 1091,  2897 => 1089,  2888 => 1085,  2881 => 1083,  2872 => 1079,  2865 => 1077,  2858 => 1072,  2852 => 1069,  2849 => 1068,  2843 => 1065,  2840 => 1064,  2837 => 1063,  2831 => 1060,  2828 => 1059,  2822 => 1056,  2819 => 1055,  2817 => 1054,  2808 => 1050,  2803 => 1048,  2790 => 1042,  2784 => 1041,  2773 => 1037,  2769 => 1036,  2760 => 1029,  2752 => 1027,  2747 => 1026,  2742 => 1025,  2737 => 1023,  2732 => 1022,  2730 => 1021,  2727 => 1020,  2723 => 1019,  2718 => 1017,  2711 => 1012,  2705 => 1011,  2697 => 1008,  2694 => 1007,  2686 => 1004,  2683 => 1003,  2680 => 1002,  2676 => 1001,  2671 => 999,  2663 => 996,  2658 => 994,  2650 => 988,  2644 => 987,  2636 => 984,  2633 => 983,  2625 => 980,  2622 => 979,  2619 => 978,  2615 => 977,  2606 => 973,  2599 => 968,  2593 => 967,  2585 => 964,  2582 => 963,  2574 => 960,  2571 => 959,  2568 => 958,  2564 => 957,  2559 => 955,  2551 => 952,  2546 => 950,  2538 => 944,  2532 => 943,  2524 => 940,  2521 => 939,  2513 => 936,  2510 => 935,  2507 => 934,  2503 => 933,  2498 => 931,  2490 => 928,  2481 => 924,  2474 => 922,  2468 => 918,  2463 => 917,  2460 => 916,  2455 => 914,  2452 => 913,  2449 => 912,  2444 => 911,  2441 => 910,  2436 => 908,  2433 => 907,  2431 => 906,  2424 => 904,  2418 => 900,  2413 => 899,  2410 => 898,  2405 => 896,  2402 => 895,  2399 => 894,  2394 => 893,  2391 => 892,  2386 => 890,  2383 => 889,  2381 => 888,  2374 => 886,  2367 => 881,  2361 => 880,  2353 => 877,  2350 => 876,  2342 => 873,  2339 => 872,  2336 => 871,  2332 => 870,  2325 => 866,  2320 => 864,  2313 => 859,  2308 => 858,  2305 => 857,  2300 => 855,  2297 => 854,  2294 => 853,  2289 => 852,  2286 => 851,  2281 => 849,  2278 => 848,  2276 => 847,  2269 => 845,  2263 => 841,  2258 => 840,  2255 => 839,  2250 => 837,  2247 => 836,  2244 => 835,  2239 => 834,  2236 => 833,  2231 => 831,  2228 => 830,  2226 => 829,  2219 => 827,  2213 => 823,  2208 => 822,  2205 => 821,  2200 => 819,  2197 => 818,  2194 => 817,  2189 => 816,  2186 => 815,  2181 => 813,  2178 => 812,  2176 => 811,  2169 => 809,  2164 => 807,  2156 => 801,  2150 => 800,  2142 => 797,  2139 => 796,  2131 => 793,  2128 => 792,  2125 => 791,  2121 => 790,  2116 => 788,  2108 => 785,  2101 => 780,  2095 => 779,  2087 => 776,  2084 => 775,  2076 => 772,  2073 => 771,  2070 => 770,  2066 => 769,  2057 => 765,  2052 => 762,  2046 => 761,  2044 => 760,  2041 => 759,  2033 => 757,  2028 => 756,  2023 => 755,  2018 => 753,  2013 => 752,  2011 => 751,  2008 => 750,  2004 => 749,  1997 => 747,  1992 => 744,  1986 => 743,  1984 => 742,  1981 => 741,  1973 => 739,  1968 => 738,  1963 => 737,  1958 => 735,  1953 => 734,  1951 => 733,  1948 => 732,  1944 => 731,  1937 => 729,  1930 => 724,  1924 => 723,  1916 => 720,  1913 => 719,  1905 => 716,  1902 => 715,  1899 => 714,  1895 => 713,  1886 => 709,  1879 => 704,  1873 => 703,  1865 => 700,  1862 => 699,  1854 => 696,  1851 => 695,  1848 => 694,  1844 => 693,  1839 => 691,  1831 => 688,  1825 => 684,  1820 => 683,  1817 => 682,  1812 => 680,  1809 => 679,  1806 => 678,  1801 => 677,  1798 => 676,  1793 => 674,  1790 => 673,  1788 => 672,  1781 => 670,  1775 => 666,  1770 => 665,  1767 => 664,  1762 => 662,  1759 => 661,  1756 => 660,  1751 => 659,  1748 => 658,  1743 => 656,  1740 => 655,  1738 => 654,  1731 => 652,  1722 => 648,  1715 => 646,  1710 => 644,  1702 => 638,  1696 => 637,  1688 => 634,  1685 => 633,  1677 => 630,  1674 => 629,  1671 => 628,  1667 => 627,  1662 => 625,  1654 => 622,  1649 => 619,  1643 => 618,  1641 => 617,  1635 => 616,  1628 => 614,  1622 => 610,  1617 => 609,  1614 => 608,  1609 => 606,  1606 => 605,  1603 => 604,  1598 => 603,  1595 => 602,  1590 => 600,  1587 => 599,  1585 => 598,  1578 => 596,  1573 => 593,  1567 => 592,  1564 => 591,  1556 => 588,  1551 => 587,  1546 => 586,  1541 => 584,  1536 => 583,  1534 => 582,  1531 => 581,  1527 => 580,  1521 => 579,  1514 => 574,  1508 => 573,  1500 => 570,  1497 => 569,  1489 => 566,  1486 => 565,  1483 => 564,  1479 => 563,  1470 => 559,  1464 => 555,  1459 => 554,  1456 => 553,  1451 => 551,  1448 => 550,  1445 => 549,  1440 => 548,  1437 => 547,  1432 => 545,  1429 => 544,  1427 => 543,  1422 => 541,  1416 => 537,  1411 => 536,  1408 => 535,  1403 => 533,  1400 => 532,  1397 => 531,  1392 => 530,  1389 => 529,  1384 => 527,  1381 => 526,  1379 => 525,  1372 => 523,  1366 => 519,  1361 => 518,  1358 => 517,  1353 => 515,  1350 => 514,  1347 => 513,  1342 => 512,  1339 => 511,  1334 => 509,  1331 => 508,  1329 => 507,  1322 => 505,  1317 => 503,  1309 => 497,  1303 => 494,  1300 => 493,  1294 => 490,  1291 => 489,  1288 => 488,  1282 => 485,  1279 => 484,  1273 => 481,  1270 => 480,  1268 => 479,  1263 => 477,  1255 => 474,  1248 => 469,  1242 => 466,  1239 => 465,  1233 => 462,  1230 => 461,  1227 => 460,  1221 => 457,  1218 => 456,  1212 => 453,  1209 => 452,  1207 => 451,  1202 => 449,  1194 => 446,  1188 => 442,  1183 => 441,  1180 => 440,  1175 => 438,  1172 => 437,  1169 => 436,  1164 => 435,  1161 => 434,  1156 => 432,  1153 => 431,  1151 => 430,  1146 => 428,  1141 => 426,  1135 => 422,  1129 => 421,  1127 => 420,  1121 => 419,  1114 => 417,  1109 => 414,  1103 => 413,  1101 => 412,  1095 => 411,  1088 => 409,  1083 => 407,  1076 => 402,  1071 => 401,  1068 => 400,  1063 => 398,  1060 => 397,  1057 => 396,  1052 => 395,  1049 => 394,  1044 => 392,  1041 => 391,  1039 => 390,  1032 => 388,  1026 => 384,  1021 => 383,  1018 => 382,  1013 => 380,  1010 => 379,  1007 => 378,  1002 => 377,  999 => 376,  994 => 374,  991 => 373,  989 => 372,  982 => 370,  977 => 368,  971 => 364,  965 => 363,  963 => 362,  957 => 361,  950 => 359,  944 => 355,  939 => 354,  936 => 353,  931 => 351,  928 => 350,  925 => 349,  920 => 348,  917 => 347,  912 => 345,  909 => 344,  907 => 343,  900 => 341,  895 => 339,  886 => 332,  880 => 331,  872 => 328,  869 => 327,  861 => 324,  858 => 323,  855 => 322,  851 => 321,  844 => 317,  837 => 312,  831 => 311,  823 => 308,  820 => 307,  812 => 304,  809 => 303,  806 => 302,  802 => 301,  795 => 297,  789 => 293,  784 => 292,  781 => 291,  776 => 289,  773 => 288,  770 => 287,  765 => 286,  762 => 285,  757 => 283,  754 => 282,  752 => 281,  745 => 279,  738 => 274,  732 => 273,  724 => 270,  721 => 269,  713 => 266,  710 => 265,  707 => 264,  703 => 263,  694 => 259,  687 => 254,  681 => 253,  673 => 250,  670 => 249,  662 => 246,  659 => 245,  656 => 244,  652 => 243,  645 => 239,  638 => 234,  632 => 233,  624 => 230,  621 => 229,  613 => 226,  610 => 225,  607 => 224,  603 => 223,  596 => 219,  587 => 213,  580 => 208,  574 => 207,  566 => 204,  563 => 203,  555 => 200,  552 => 199,  549 => 198,  545 => 197,  538 => 193,  533 => 190,  528 => 188,  520 => 186,  515 => 185,  510 => 184,  505 => 182,  500 => 181,  498 => 180,  495 => 179,  491 => 178,  485 => 177,  482 => 176,  480 => 175,  472 => 172,  465 => 170,  456 => 166,  449 => 164,  438 => 160,  434 => 159,  425 => 155,  420 => 153,  415 => 150,  409 => 149,  407 => 148,  401 => 147,  396 => 145,  391 => 142,  385 => 141,  383 => 140,  377 => 139,  372 => 137,  363 => 133,  356 => 131,  351 => 128,  345 => 127,  343 => 126,  337 => 125,  332 => 123,  327 => 120,  321 => 119,  319 => 118,  313 => 117,  308 => 115,  303 => 112,  297 => 111,  295 => 110,  289 => 109,  284 => 107,  275 => 100,  269 => 99,  261 => 96,  258 => 95,  250 => 92,  247 => 91,  244 => 90,  240 => 89,  233 => 85,  225 => 79,  219 => 78,  211 => 75,  208 => 74,  200 => 71,  197 => 70,  194 => 69,  190 => 68,  183 => 64,  174 => 60,  169 => 58,  160 => 54,  155 => 52,  150 => 49,  144 => 48,  142 => 47,  136 => 46,  131 => 44,  123 => 39,  119 => 38,  115 => 37,  111 => 36,  107 => 35,  103 => 34,  99 => 33,  94 => 31,  88 => 28,  84 => 26,  76 => 22,  73 => 21,  65 => 17,  63 => 16,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" id="button-save" form="form-setting" data-toggle="tooltip" title="{{ button_save }}" disabled="disabled" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*           <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid"> {% if error_warning %}*/
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
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-setting" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             <li><a href="#tab-store" data-toggle="tab">{{ tab_store }}</a></li>*/
/*             <li><a href="#tab-local" data-toggle="tab">{{ tab_local }}</a></li>*/
/*             <li><a href="#tab-option" data-toggle="tab">{{ tab_option }}</a></li>*/
/*             <li><a href="#tab-image" data-toggle="tab">{{ tab_image }}</a></li>*/
/*             <li><a href="#tab-mail" data-toggle="tab">{{ tab_mail }}</a></li>*/
/*             <li><a href="#tab-server" data-toggle="tab">{{ tab_server }}</a></li>*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-meta-title">{{ entry_meta_title }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_meta_title" value="{{ config_meta_title }}" placeholder="{{ entry_meta_title }}" id="input-meta-title" class="form-control"/>*/
/*                   {% if error_meta_title %}*/
/*                     <div class="text-danger">{{ error_meta_title }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-meta-description">{{ entry_meta_description }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_meta_description" rows="5" placeholder="{{ entry_meta_description }}" id="input-meta-description" class="form-control">{{ config_meta_description }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-meta-keyword">{{ entry_meta_keyword }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_meta_keyword" rows="5" placeholder="{{ entry_meta_keyword }}" id="input-meta-keyword" class="form-control">{{ config_meta_keyword }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-theme">{{ entry_theme }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_theme" id="input-theme" class="form-control">*/
/* */
/*                     {% for theme in themes %}*/
/*                       {% if theme.value == config_theme %}*/
/* */
/*                         <option value="{{ theme.value }}" selected="selected">{{ theme.text }}</option>*/
/* */
/*                       {% else %}*/
/* */
/*                         <option value="{{ theme.value }}">{{ theme.text }}</option>*/
/* */
/*                       {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                   </select>*/
/*                   <br/>*/
/*                   <img src="" alt="" id="theme" class="img-thumbnail"/></div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-layout">{{ entry_layout }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_layout_id" id="input-layout" class="form-control">*/
/* */
/*                     {% for layout in layouts %}*/
/*                       {% if layout.layout_id == config_layout_id %}*/
/* */
/*                         <option value="{{ layout.layout_id }}" selected="selected">{{ layout.name }}</option>*/
/* */
/*                       {% else %}*/
/* */
/*                         <option value="{{ layout.layout_id }}">{{ layout.name }}</option>*/
/* */
/*                       {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-store">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_name" value="{{ config_name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control"/>*/
/*                   {% if error_name %}*/
/*                     <div class="text-danger">{{ error_name }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-owner">{{ entry_owner }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_owner" value="{{ config_owner }}" placeholder="{{ entry_owner }}" id="input-owner" class="form-control"/>*/
/*                   {% if error_owner %}*/
/*                     <div class="text-danger">{{ error_owner }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-address">{{ entry_address }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_address" placeholder="{{ entry_address }}" rows="5" id="input-address" class="form-control">{{ config_address }}</textarea>*/
/*                   {% if error_address %}*/
/*                     <div class="text-danger">{{ error_address }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-geocode"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_geocode }}">{{ entry_geocode }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_geocode" value="{{ config_geocode }}" placeholder="{{ entry_geocode }}" id="input-geocode" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_email" value="{{ config_email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control"/>*/
/*                   {% if error_email %}*/
/*                     <div class="text-danger">{{ error_email }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_telephone" value="{{ config_telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control"/>*/
/*                   {% if error_telephone %}*/
/*                     <div class="text-danger">{{ error_telephone }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-fax">{{ entry_fax }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_fax" value="{{ config_fax }}" placeholder="{{ entry_fax }}" id="input-fax" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-image">{{ entry_image }}</label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }}" alt="" title="" data-placeholder="{{ placeholder }}"/></a> <input type="hidden" name="config_image" value="{{ config_image }}" id="input-image"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-open"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_open }}">{{ entry_open }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_open" rows="5" placeholder="{{ entry_open }}" id="input-open" class="form-control">{{ config_open }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-comment"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_comment }}">{{ entry_comment }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_comment" rows="5" placeholder="{{ entry_comment }}" id="input-comment" class="form-control">{{ config_comment }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               {% if locations %}*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_location }}">{{ entry_location }}</span></label>*/
/*                   <div class="col-sm-10"> {% for location in locations %}*/
/*                       <div class="checkbox">*/
/*                         <label> {% if location.location_id in config_location %}*/
/*                             <input type="checkbox" name="config_location[]" value="{{ location.location_id }}" checked="checked"/>*/
/*                             {{ location.name }}*/
/*                           {% else %}*/
/*                             <input type="checkbox" name="config_location[]" value="{{ location.location_id }}"/>*/
/*                             {{ location.name }}*/
/*                           {% endif %} </label>*/
/*                       </div>*/
/*                     {% endfor %} </div>*/
/*                 </div>*/
/*               {% endif %} </div>*/
/*             <div class="tab-pane" id="tab-local">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-country">{{ entry_country }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_country_id" id="input-country" class="form-control">*/
/* */
/*                     {% for country in countries %}*/
/*                       {% if country.country_id == config_country_id %}*/
/* */
/*                         <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/* */
/*                       {% else %}*/
/* */
/*                         <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/* */
/*                       {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-zone">{{ entry_zone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_zone_id" id="input-zone" class="form-control"> </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-language">{{ entry_language }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_language" id="input-language" class="form-control">*/
/* */
/*                     {% for language in languages %}*/
/*                       {% if language.code == config_language %}*/
/* */
/*                         <option value="{{ language.code }}" selected="selected">{{ language.name }}</option>*/
/* */
/*                       {% else %}*/
/* */
/*                         <option value="{{ language.code }}">{{ language.name }}</option>*/
/* */
/*                       {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-admin-language">{{ entry_admin_language }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_admin_language" id="input-admin-language" class="form-control">*/
/* */
/*                     {% for language in languages %}*/
/*                       {% if language.code == config_admin_language %}*/
/* */
/*                         <option value="{{ language.code }}" selected="selected">{{ language.name }}</option>*/
/* */
/*                       {% else %}*/
/* */
/*                         <option value="{{ language.code }}">{{ language.name }}</option>*/
/* */
/*                       {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-currency"><span data-toggle="tooltip" title="{{ help_currency }}">{{ entry_currency }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_currency" id="input-currency" class="form-control">*/
/* */
/*                     {% for currency in currencies %}*/
/*                       {% if currency.code == config_currency %}*/
/* */
/*                         <option value="{{ currency.code }}" selected="selected">{{ currency.title }}</option>*/
/* */
/*                       {% else %}*/
/* */
/*                         <option value="{{ currency.code }}">{{ currency.title }}</option>*/
/* */
/*                       {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_currency_auto }}">{{ entry_currency_auto }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <label class="radio-inline"> {% if config_currency_auto %}*/
/*                       <input type="radio" name="config_currency_auto" value="1" checked="checked"/>*/
/*                       {{ text_yes }}*/
/*                     {% else %}*/
/*                       <input type="radio" name="config_currency_auto" value="1"/>*/
/*                       {{ text_yes }}*/
/*                     {% endif %} </label> <label class="radio-inline"> {% if not config_currency_auto %}*/
/*                       <input type="radio" name="config_currency_auto" value="0" checked="checked"/>*/
/*                       {{ text_no }}*/
/*                     {% else %}*/
/*                       <input type="radio" name="config_currency_auto" value="0"/>*/
/*                       {{ text_no }}*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-length-class">{{ entry_length_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_length_class_id" id="input-length-class" class="form-control">*/
/* */
/*                     {% for length_class in length_classes %}*/
/*                       {% if length_class.length_class_id == config_length_class_id %}*/
/* */
/*                         <option value="{{ length_class.length_class_id }}" selected="selected">{{ length_class.title }}</option>*/
/* */
/*                       {% else %}*/
/* */
/*                         <option value="{{ length_class.length_class_id }}">{{ length_class.title }}</option>*/
/* */
/*                       {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-weight-class">{{ entry_weight_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_weight_class_id" id="input-weight-class" class="form-control">*/
/* */
/*                     {% for weight_class in weight_classes %}*/
/*                       {% if weight_class.weight_class_id == config_weight_class_id %}*/
/* */
/*                         <option value="{{ weight_class.weight_class_id }}" selected="selected">{{ weight_class.title }}</option>*/
/* */
/*                       {% else %}*/
/* */
/*                         <option value="{{ weight_class.weight_class_id }}">{{ weight_class.title }}</option>*/
/* */
/*                       {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-option">*/
/*               <fieldset>*/
/*                 <legend>{{ text_product }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_product_count }}">{{ entry_product_count }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_product_count %}*/
/*                         <input type="radio" name="config_product_count" value="1" checked="checked"/>*/
/*                         {{ text_yes }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_product_count" value="1"/>*/
/*                         {{ text_yes }}*/
/*                       {% endif %} </label> <label class="radio-inline"> {% if not config_product_count %}*/
/*                         <input type="radio" name="config_product_count" value="0" checked="checked"/>*/
/*                         {{ text_no }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_product_count" value="0"/>*/
/*                         {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-admin-limit"><span data-toggle="tooltip" title="{{ help_limit_admin }}">{{ entry_limit_admin }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_limit_admin" value="{{ config_limit_admin }}" placeholder="{{ entry_limit_admin }}" id="input-admin-limit" class="form-control"/>*/
/*                     {% if error_limit_admin %}*/
/*                       <div class="text-danger">{{ error_limit_admin }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_review }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_review }}">{{ entry_review }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_review_status %}*/
/*                         <input type="radio" name="config_review_status" value="1" checked="checked"/>*/
/*                         {{ text_yes }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_review_status" value="1"/>*/
/*                         {{ text_yes }}*/
/*                       {% endif %} </label> <label class="radio-inline"> {% if not config_review_status %}*/
/*                         <input type="radio" name="config_review_status" value="0" checked="checked"/>*/
/*                         {{ text_no }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_review_status" value="0"/>*/
/*                         {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_review_guest }}">{{ entry_review_guest }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_review_guest %}*/
/*                         <input type="radio" name="config_review_guest" value="1" checked="checked"/>*/
/*                         {{ text_yes }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_review_guest" value="1"/>*/
/*                         {{ text_yes }}*/
/*                       {% endif %} </label> <label class="radio-inline"> {% if not config_review_guest %}*/
/*                         <input type="radio" name="config_review_guest" value="0" checked="checked"/>*/
/*                         {{ text_no }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_review_guest" value="0"/>*/
/*                         {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_voucher }}</legend>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-voucher-min"><span data-toggle="tooltip" title="{{ help_voucher_min }}">{{ entry_voucher_min }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_voucher_min" value="{{ config_voucher_min }}" placeholder="{{ entry_voucher_min }}" id="input-voucher-min" class="form-control"/>*/
/*                     {% if error_voucher_min %}*/
/*                       <div class="text-danger">{{ error_voucher_min }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-voucher-max"><span data-toggle="tooltip" title="{{ help_voucher_max }}">{{ entry_voucher_max }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_voucher_max" value="{{ config_voucher_max }}" placeholder="{{ entry_voucher_max }}" id="input-voucher-max" class="form-control"/>*/
/*                     {% if error_voucher_max %}*/
/*                       <div class="text-danger">{{ error_voucher_max }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_tax }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_tax }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_tax %}*/
/*                         <input type="radio" name="config_tax" value="1" checked="checked"/>*/
/*                         {{ text_yes }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_tax" value="1"/>*/
/*                         {{ text_yes }}*/
/*                       {% endif %} </label> <label class="radio-inline"> {% if not config_tax %}*/
/*                         <input type="radio" name="config_tax" value="0" checked="checked"/>*/
/*                         {{ text_no }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_tax" value="0"/>*/
/*                         {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-tax-default"><span data-toggle="tooltip" title="{{ help_tax_default }}">{{ entry_tax_default }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_tax_default" id="input-tax-default" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/* */
/*                       {% if config_tax_default == 'shipping' %}*/
/* */
/*                         <option value="shipping" selected="selected">{{ text_shipping }}</option>*/
/* */
/*                       {% else %}*/
/* */
/*                         <option value="shipping">{{ text_shipping }}</option>*/
/* */
/*                       {% endif %}*/
/*                       {% if config_tax_default == 'payment' %}*/
/* */
/*                         <option value="payment" selected="selected">{{ text_payment }}</option>*/
/* */
/*                       {% else %}*/
/* */
/*                         <option value="payment">{{ text_payment }}</option>*/
/* */
/*                       {% endif %}*/
/* */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-tax-customer"><span data-toggle="tooltip" title="{{ help_tax_customer }}">{{ entry_tax_customer }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_tax_customer" id="input-tax-customer" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/* */
/*                       {% if config_tax_customer == 'shipping' %}*/
/* */
/*                         <option value="shipping" selected="selected">{{ text_shipping }}</option>*/
/* */
/*                       {% else %}*/
/* */
/*                         <option value="shipping">{{ text_shipping }}</option>*/
/* */
/*                       {% endif %}*/
/*                       {% if config_tax_customer == 'payment' %}*/
/* */
/*                         <option value="payment" selected="selected">{{ text_payment }}</option>*/
/* */
/*                       {% else %}*/
/* */
/*                         <option value="payment">{{ text_payment }}</option>*/
/* */
/*                       {% endif %}*/
/* */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_account }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_online }}">{{ entry_customer_online }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_customer_online %}*/
/*                         <input type="radio" name="config_customer_online" value="1" checked="checked"/>*/
/*                         {{ text_yes }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_customer_online" value="1"/>*/
/*                         {{ text_yes }}*/
/*                       {% endif %} </label> <label class="radio-inline"> {% if not config_customer_online %}*/
/*                         <input type="radio" name="config_customer_online" value="0" checked="checked"/>*/
/*                         {{ text_no }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_customer_online" value="0"/>*/
/*                         {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_activity }}">{{ entry_customer_activity }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_customer_activity %}*/
/*                         <input type="radio" name="config_customer_activity" value="1" checked="checked"/>*/
/*                         {{ text_yes }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_customer_activity" value="1"/>*/
/*                         {{ text_yes }}*/
/*                       {% endif %} </label> <label class="radio-inline"> {% if not config_customer_activity %}*/
/*                         <input type="radio" name="config_customer_activity" value="0" checked="checked"/>*/
/*                         {{ text_no }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_customer_activity" value="0"/>*/
/*                         {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_customer_search }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_customer_search %}*/
/*                         <input type="radio" name="config_customer_search" value="1" checked="checked"/>*/
/*                         {{ text_yes }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_customer_search" value="1"/>*/
/*                         {{ text_yes }}*/
/*                       {% endif %} </label> <label class="radio-inline"> {% if not config_customer_search %}*/
/*                         <input type="radio" name="config_customer_search" value="0" checked="checked"/>*/
/*                         {{ text_no }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_customer_search" value="0"/>*/
/*                         {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-customer-group"><span data-toggle="tooltip" title="{{ help_customer_group }}">{{ entry_customer_group }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_customer_group_id" id="input-customer-group" class="form-control">*/
/* */
/*                       {% for customer_group in customer_groups %}*/
/*                         {% if customer_group.customer_group_id == config_customer_group_id %}*/
/* */
/*                           <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/* */
/*                         {% else %}*/
/* */
/*                           <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/* */
/*                         {% endif %}*/
/*                       {% endfor %}*/
/* */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_group_display }}">{{ entry_customer_group_display }}</span></label>*/
/*                   <div class="col-sm-10"> {% for customer_group in customer_groups %}*/
/*                       <div class="checkbox">*/
/*                         <label> {% if customer_group.customer_group_id in config_customer_group_display %}*/
/*                             <input type="checkbox" name="config_customer_group_display[]" value="{{ customer_group.customer_group_id }}" checked="checked"/>*/
/*                             {{ customer_group.name }}*/
/*                           {% else %}*/
/*                             <input type="checkbox" name="config_customer_group_display[]" value="{{ customer_group.customer_group_id }}"/>*/
/*                             {{ customer_group.name }}*/
/*                           {% endif %} </label>*/
/*                       </div>*/
/*                     {% endfor %}*/
/*                     {% if error_customer_group_display %}*/
/*                       <div class="text-danger">{{ error_customer_group_display }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_price }}">{{ entry_customer_price }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_customer_price %}*/
/*                         <input type="radio" name="config_customer_price" value="1" checked="checked"/>*/
/*                         {{ text_yes }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_customer_price" value="1"/>*/
/*                         {{ text_yes }}*/
/*                       {% endif %} </label> <label class="radio-inline"> {% if not config_customer_price %}*/
/*                         <input type="radio" name="config_customer_price" value="0" checked="checked"/>*/
/*                         {{ text_no }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_customer_price" value="0"/>*/
/*                         {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-login-attempts"><span data-toggle="tooltip" title="{{ help_login_attempts }}">{{ entry_login_attempts }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_login_attempts" value="{{ config_login_attempts }}" placeholder="{{ entry_login_attempts }}" id="input-login-attempts" class="form-control"/>*/
/*                     {% if error_login_attempts %}*/
/*                       <div class="text-danger">{{ error_login_attempts }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-account"><span data-toggle="tooltip" title="{{ help_account }}">{{ entry_account }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_account_id" id="input-account" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/* */
/*                       {% for information in informations %}*/
/*                         {% if information.information_id == config_account_id %}*/
/* */
/*                           <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/* */
/*                         {% else %}*/
/* */
/*                           <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/* */
/*                         {% endif %}*/
/*                       {% endfor %}*/
/* */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_checkout }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-invoice-prefix"><span data-toggle="tooltip" title="{{ help_invoice_prefix }}">{{ entry_invoice_prefix }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_invoice_prefix" value="{{ config_invoice_prefix }}" placeholder="{{ entry_invoice_prefix }}" id="input-invoice-prefix" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_cart_weight }}">{{ entry_cart_weight }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_cart_weight %}*/
/*                         <input type="radio" name="config_cart_weight" value="1" checked="checked"/>*/
/*                         {{ text_yes }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_cart_weight" value="1"/>*/
/*                         {{ text_yes }}*/
/*                       {% endif %} </label> <label class="radio-inline"> {% if not config_cart_weight %}*/
/*                         <input type="radio" name="config_cart_weight" value="0" checked="checked"/>*/
/*                         {{ text_no }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_cart_weight" value="0"/>*/
/*                         {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_checkout_guest }}">{{ entry_checkout_guest }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_checkout_guest %}*/
/*                         <input type="radio" name="config_checkout_guest" value="1" checked="checked"/>*/
/*                         {{ text_yes }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_checkout_guest" value="1"/>*/
/*                         {{ text_yes }}*/
/*                       {% endif %} </label> <label class="radio-inline"> {% if not config_checkout_guest %}*/
/*                         <input type="radio" name="config_checkout_guest" value="0" checked="checked"/>*/
/*                         {{ text_no }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_checkout_guest" value="0"/>*/
/*                         {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-checkout"><span data-toggle="tooltip" title="{{ help_checkout }}">{{ entry_checkout }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_checkout_id" id="input-checkout" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/* */
/*                       {% for information in informations %}*/
/*                         {% if information.information_id == config_checkout_id %}*/
/* */
/*                           <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/* */
/*                         {% else %}*/
/* */
/*                           <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/* */
/*                         {% endif %}*/
/*                       {% endfor %}*/
/* */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-order-status"><span data-toggle="tooltip" title="{{ help_order_status }}">{{ entry_order_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_order_status_id" id="input-order-status" class="form-control">*/
/* */
/*                       {% for order_status in order_statuses %}*/
/*                         {% if order_status.order_status_id == config_order_status_id %}*/
/* */
/*                           <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/* */
/*                         {% else %}*/
/* */
/*                           <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/* */
/*                         {% endif %}*/
/*                       {% endfor %}*/
/* */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-process-status"><span data-toggle="tooltip" title="{{ help_processing_status }}">{{ entry_processing_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for order_status in order_statuses %}*/
/*                         <div class="checkbox">*/
/*                           <label> {% if order_status.order_status_id in config_processing_status %}*/
/*                               <input type="checkbox" name="config_processing_status[]" value="{{ order_status.order_status_id }}" checked="checked"/>*/
/*                               {{ order_status.name }}*/
/*                             {% else %}*/
/*                               <input type="checkbox" name="config_processing_status[]" value="{{ order_status.order_status_id }}"/>*/
/*                               {{ order_status.name }}*/
/*                             {% endif %} </label>*/
/*                         </div>*/
/*                       {% endfor %} </div>*/
/*                     {% if error_processing_status %}*/
/*                       <div class="text-danger">{{ error_processing_status }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-complete-status"><span data-toggle="tooltip" title="{{ help_complete_status }}">{{ entry_complete_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for order_status in order_statuses %}*/
/*                         <div class="checkbox">*/
/*                           <label> {% if order_status.order_status_id in config_complete_status %}*/
/*                               <input type="checkbox" name="config_complete_status[]" value="{{ order_status.order_status_id }}" checked="checked"/>*/
/*                               {{ order_status.name }}*/
/*                             {% else %}*/
/*                               <input type="checkbox" name="config_complete_status[]" value="{{ order_status.order_status_id }}"/>*/
/*                               {{ order_status.name }}*/
/*                             {% endif %} </label>*/
/*                         </div>*/
/*                       {% endfor %} </div>*/
/*                     {% if error_complete_status %}*/
/*                       <div class="text-danger">{{ error_complete_status }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-fraud-status"><span data-toggle="tooltip" title="{{ help_fraud_status }}">{{ entry_fraud_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_fraud_status_id" id="input-fraud-status" class="form-control">*/
/* */
/*                       {% for order_status in order_statuses %}*/
/*                         {% if order_status.order_status_id == config_fraud_status_id %}*/
/* */
/*                           <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/* */
/*                         {% else %}*/
/* */
/*                           <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/* */
/*                         {% endif %}*/
/*                       {% endfor %}*/
/* */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-api"><span data-toggle="tooltip" title="{{ help_api }}">{{ entry_api }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_api_id" id="input-api" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/* */
/*                       {% for api in apis %}*/
/*                         {% if api.api_id == config_api_id %}*/
/* */
/*                           <option value="{{ api.api_id }}" selected="selected">{{ api.username }}</option>*/
/* */
/*                         {% else %}*/
/* */
/*                           <option value="{{ api.api_id }}">{{ api.username }}</option>*/
/* */
/*                         {% endif %}*/
/*                       {% endfor %}*/
/* */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_stock }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_stock_display }}">{{ entry_stock_display }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_stock_display %}*/
/*                         <input type="radio" name="config_stock_display" value="1" checked="checked"/>*/
/*                         {{ text_yes }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_stock_display" value="1"/>*/
/*                         {{ text_yes }}*/
/*                       {% endif %} </label> <label class="radio-inline"> {% if not config_stock_display %}*/
/*                         <input type="radio" name="config_stock_display" value="0" checked="checked"/>*/
/*                         {{ text_no }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_stock_display" value="0"/>*/
/*                         {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_stock_warning }}">{{ entry_stock_warning }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_stock_warning %}*/
/*                         <input type="radio" name="config_stock_warning" value="1" checked="checked"/>*/
/*                         {{ text_yes }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_stock_warning" value="1"/>*/
/*                         {{ text_yes }}*/
/*                       {% endif %} </label> <label class="radio-inline"> {% if not config_stock_warning %}*/
/*                         <input type="radio" name="config_stock_warning" value="0" checked="checked"/>*/
/*                         {{ text_no }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_stock_warning" value="0"/>*/
/*                         {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_stock_checkout }}">{{ entry_stock_checkout }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_stock_checkout %}*/
/*                         <input type="radio" name="config_stock_checkout" value="1" checked="checked"/>*/
/*                         {{ text_yes }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_stock_checkout" value="1"/>*/
/*                         {{ text_yes }}*/
/*                       {% endif %} </label> <label class="radio-inline"> {% if not config_stock_checkout %}*/
/*                         <input type="radio" name="config_stock_checkout" value="0" checked="checked"/>*/
/*                         {{ text_no }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_stock_checkout" value="0"/>*/
/*                         {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_affiliate }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-affiliate-group">{{ entry_affiliate_group }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_affiliate_group_id" id="input-affiliate-group" class="form-control">*/
/* */
/*                       {% for customer_group in customer_groups %}*/
/*                         {% if customer_group.customer_group_id == config_affiliate_group_id %}*/
/* */
/*                           <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/* */
/*                         {% else %}*/
/* */
/*                           <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/* */
/*                         {% endif %}*/
/*                       {% endfor %}*/
/* */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_affiliate_approval }}">{{ entry_affiliate_approval }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_affiliate_approval %}*/
/*                         <input type="radio" name="config_affiliate_approval" value="1" checked="checked"/>*/
/*                         {{ text_yes }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_affiliate_approval" value="1"/>*/
/*                         {{ text_yes }}*/
/*                       {% endif %} </label> <label class="radio-inline"> {% if not config_affiliate_approval %}*/
/*                         <input type="radio" name="config_affiliate_approval" value="0" checked="checked"/>*/
/*                         {{ text_no }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_affiliate_approval" value="0"/>*/
/*                         {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_affiliate_auto }}">{{ entry_affiliate_auto }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_affiliate_auto %}*/
/*                         <input type="radio" name="config_affiliate_auto" value="1" checked="checked"/>*/
/*                         {{ text_yes }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_affiliate_auto" value="1"/>*/
/*                         {{ text_yes }}*/
/*                       {% endif %} </label> <label class="radio-inline"> {% if not config_affiliate_auto %}*/
/*                         <input type="radio" name="config_affiliate_auto" value="0" checked="checked"/>*/
/*                         {{ text_no }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_affiliate_auto" value="0"/>*/
/*                         {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-affiliate-commission"><span data-toggle="tooltip" title="{{ help_affiliate_commission }}">{{ entry_affiliate_commission }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_affiliate_commission" value="{{ config_affiliate_commission }}" placeholder="{{ entry_affiliate_commission }}" id="input-affiliate-commission" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-affiliate"><span data-toggle="tooltip" title="{{ help_affiliate }}">{{ entry_affiliate }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_affiliate_id" id="input-affiliate" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/* */
/*                       {% for information in informations %}*/
/*                         {% if information.information_id == config_affiliate_id %}*/
/* */
/*                           <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/* */
/*                         {% else %}*/
/* */
/*                           <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/* */
/*                         {% endif %}*/
/*                       {% endfor %}*/
/* */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_return }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-return"><span data-toggle="tooltip" title="{{ help_return }}">{{ entry_return }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_return_id" id="input-return" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/* */
/*                       {% for information in informations %}*/
/*                         {% if information.information_id == config_return_id %}*/
/* */
/*                           <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/* */
/*                         {% else %}*/
/* */
/*                           <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/* */
/*                         {% endif %}*/
/*                       {% endfor %}*/
/* */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-return-status"><span data-toggle="tooltip" title="{{ help_return_status }}">{{ entry_return_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_return_status_id" id="input-return-status" class="form-control">*/
/* */
/*                       {% for return_status in return_statuses %}*/
/*                         {% if return_status.return_status_id == config_return_status_id %}*/
/* */
/*                           <option value="{{ return_status.return_status_id }}" selected="selected">{{ return_status.name }}</option>*/
/* */
/*                         {% else %}*/
/* */
/*                           <option value="{{ return_status.return_status_id }}">{{ return_status.name }}</option>*/
/* */
/*                         {% endif %}*/
/*                       {% endfor %}*/
/* */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_captcha }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_captcha }}">{{ entry_captcha }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_captcha" id="input-captcha" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/* */
/*                       {% for captcha in captchas %}*/
/*                         {% if captcha.value == config_captcha %}*/
/* */
/*                           <option value="{{ captcha.value }}" selected="selected">{{ captcha.text }}</option>*/
/* */
/*                         {% else %}*/
/* */
/*                           <option value="{{ captcha.value }}">{{ captcha.text }}</option>*/
/* */
/*                         {% endif %}*/
/*                       {% endfor %}*/
/* */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_captcha_page }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for captcha_page in captcha_pages %}*/
/*                         <div class="checkbox">*/
/*                           <label> {% if captcha_page.value in config_captcha_page %}*/
/*                               <input type="checkbox" name="config_captcha_page[]" value="{{ captcha_page.value }}" checked="checked"/>*/
/*                               {{ captcha_page.text }}*/
/*                             {% else %}*/
/*                               <input type="checkbox" name="config_captcha_page[]" value="{{ captcha_page.value }}"/>*/
/*                               {{ captcha_page.text }}*/
/*                             {% endif %} </label>*/
/*                         </div>*/
/*                       {% endfor %} </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-image">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-logo">{{ entry_logo }}</label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-logo" data-toggle="image" class="img-thumbnail"><img src="{{ logo }}" alt="" title="" data-placeholder="{{ placeholder }}"/></a> <input type="hidden" name="config_logo" value="{{ config_logo }}" id="input-logo"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-icon"><span data-toggle="tooltip" title="{{ help_icon }}">{{ entry_icon }}</span></label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-icon" data-toggle="image" class="img-thumbnail"><img src="{{ icon }}" alt="" title="" data-placeholder="{{ placeholder }}"/></a> <input type="hidden" name="config_icon" value="{{ config_icon }}" id="input-icon"/>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-mail">*/
/*               <fieldset>*/
/*                 <legend>{{ text_general }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-engine"><span data-toggle="tooltip" title="{{ help_mail_engine }}">{{ entry_mail_engine }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_mail_engine" id="input-mail-engine" class="form-control">*/
/* */
/*                       {% if config_mail_engine == 'mail' %}*/
/* */
/*                         <option value="mail" selected="selected">{{ text_mail }}</option>*/
/* */
/*                       {% else %}*/
/* */
/*                         <option value="mail">{{ text_mail }}</option>*/
/* */
/*                       {% endif %}*/
/*                       {% if config_mail_engine == 'smtp' %}*/
/* */
/*                         <option value="smtp" selected="selected">{{ text_smtp }}</option>*/
/* */
/*                       {% else %}*/
/* */
/*                         <option value="smtp">{{ text_smtp }}</option>*/
/* */
/*                       {% endif %}*/
/* */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-parameter"><span data-toggle="tooltip" title="{{ help_mail_parameter }}">{{ entry_mail_parameter }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_parameter" value="{{ config_mail_parameter }}" placeholder="{{ entry_mail_parameter }}" id="input-mail-parameter" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-hostname"><span data-toggle="tooltip" title="{{ help_mail_smtp_hostname }}">{{ entry_mail_smtp_hostname }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_hostname" value="{{ config_mail_smtp_hostname }}" placeholder="{{ entry_mail_smtp_hostname }}" id="input-mail-smtp-hostname" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-username">{{ entry_mail_smtp_username }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_username" value="{{ config_mail_smtp_username }}" placeholder="{{ entry_mail_smtp_username }}" id="input-mail-smtp-username" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-password"><span data-toggle="tooltip" title="{{ help_mail_smtp_password }}">{{ entry_mail_smtp_password }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_password" value="{{ config_mail_smtp_password }}" placeholder="{{ entry_mail_smtp_password }}" id="input-mail-smtp-password" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-port">{{ entry_mail_smtp_port }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_port" value="{{ config_mail_smtp_port }}" placeholder="{{ entry_mail_smtp_port }}" id="input-mail-smtp-port" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-timeout">{{ entry_mail_smtp_timeout }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_timeout" value="{{ config_mail_smtp_timeout }}" placeholder="{{ entry_mail_smtp_timeout }}" id="input-mail-smtp-timeout" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_mail_alert }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_mail_alert }}">{{ entry_mail_alert }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for mail_alert in mail_alerts %}*/
/*                         <div class="checkbox">*/
/*                           <label> {% if mail_alert.value in config_mail_alert %}*/
/*                               <input type="checkbox" name="config_mail_alert[]" value="{{ mail_alert.value }}" checked="checked"/>*/
/*                               {{ mail_alert.text }}*/
/*                             {% else %}*/
/*                               <input type="checkbox" name="config_mail_alert[]" value="{{ mail_alert.value }}"/>*/
/*                               {{ mail_alert.text }}*/
/*                             {% endif %} </label>*/
/*                         </div>*/
/*                       {% endfor %} </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-alert-email"><span data-toggle="tooltip" title="{{ help_mail_alert_email }}">{{ entry_mail_alert_email }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_mail_alert_email" rows="5" placeholder="{{ entry_mail_alert_email }}" id="input-alert-email" class="form-control">{{ config_mail_alert_email }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-server">*/
/*               <fieldset>*/
/*                 <legend>{{ text_general }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_maintenance }}">{{ entry_maintenance }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_maintenance %}*/
/*                         <input type="radio" name="config_maintenance" value="1" checked="checked"/>*/
/*                         {{ text_yes }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_maintenance" value="1"/>*/
/*                         {{ text_yes }}*/
/*                       {% endif %} </label> <label class="radio-inline"> {% if not config_maintenance %}*/
/*                         <input type="radio" name="config_maintenance" value="0" checked="checked"/>*/
/*                         {{ text_no }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_maintenance" value="0"/>*/
/*                         {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_seo_url }}">{{ entry_seo_url }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_seo_url %}*/
/*                         <input type="radio" name="config_seo_url" value="1" checked="checked"/>*/
/*                         {{ text_yes }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_seo_url" value="1"/>*/
/*                         {{ text_yes }}*/
/*                       {% endif %} </label> <label class="radio-inline"> {% if not config_seo_url %}*/
/*                         <input type="radio" name="config_seo_url" value="0" checked="checked"/>*/
/*                         {{ text_no }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_seo_url" value="0"/>*/
/*                         {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-robots"><span data-toggle="tooltip" title="{{ help_robots }}">{{ entry_robots }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_robots" rows="5" placeholder="{{ entry_robots }}" id="input-robots" class="form-control">{{ config_robots }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-compression"><span data-toggle="tooltip" title="{{ help_compression }}">{{ entry_compression }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_compression" value="{{ config_compression }}" placeholder="{{ entry_compression }}" id="input-compression" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_security }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_secure }}">{{ entry_secure }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_secure %}*/
/*                         <input type="radio" name="config_secure" value="1" checked="checked"/>*/
/*                         {{ text_yes }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_secure" value="1"/>*/
/*                         {{ text_yes }}*/
/*                       {% endif %} </label> <label class="radio-inline"> {% if not config_secure %}*/
/*                         <input type="radio" name="config_secure" value="0" checked="checked"/>*/
/*                         {{ text_no }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_secure" value="0"/>*/
/*                         {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_password }}">{{ entry_password }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_password %}*/
/*                         <input type="radio" name="config_password" value="1" checked="checked"/>*/
/*                         {{ text_yes }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_password" value="1"/>*/
/*                         {{ text_yes }}*/
/*                       {% endif %} </label> <label class="radio-inline"> {% if not config_password %}*/
/*                         <input type="radio" name="config_password" value="0" checked="checked"/>*/
/*                         {{ text_no }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_password" value="0"/>*/
/*                         {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_shared }}">{{ entry_shared }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_shared %}*/
/*                         <input type="radio" name="config_shared" value="1" checked="checked"/>*/
/*                         {{ text_yes }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_shared" value="1"/>*/
/*                         {{ text_yes }}*/
/*                       {% endif %} </label> <label class="radio-inline"> {% if not config_shared %}*/
/*                         <input type="radio" name="config_shared" value="0" checked="checked"/>*/
/*                         {{ text_no }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_shared" value="0"/>*/
/*                         {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-encryption"><span data-toggle="tooltip" title="{{ help_encryption }}">{{ entry_encryption }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_encryption" rows="5" placeholder="{{ entry_encryption }}" id="input-encryption" class="form-control">{{ config_encryption }}</textarea>*/
/*                     {% if error_encryption %}*/
/*                       <div class="text-danger">{{ error_encryption }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_upload }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-file-max-size"><span data-toggle="tooltip" title="{{ help_file_max_size }}">{{ entry_file_max_size }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_file_max_size" value="{{ config_file_max_size }}" placeholder="{{ entry_file_max_size }}" id="input-file-max-size" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-file-ext-allowed"><span data-toggle="tooltip" title="{{ help_file_ext_allowed }}">{{ entry_file_ext_allowed }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_file_ext_allowed" rows="5" placeholder="{{ entry_file_ext_allowed }}" id="input-file-ext-allowed" class="form-control">{{ config_file_ext_allowed }}</textarea>*/
/*                     {% if error_extension %}*/
/*                       <div class="text-danger">{{ error_extension }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-file-mime-allowed"><span data-toggle="tooltip" title="{{ help_file_mime_allowed }}">{{ entry_file_mime_allowed }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_file_mime_allowed" rows="5" placeholder="{{ entry_file_mime_allowed }}" id="input-file-mime-allowed" class="form-control">{{ config_file_mime_allowed }}</textarea>*/
/*                     {% if error_mime %}*/
/*                       <div class="text-danger">{{ error_mime }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_error }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_error_display }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">{% if config_error_display %}*/
/*                         <input type="radio" name="config_error_display" value="1" checked="checked"/>*/
/*                         {{ text_yes }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_error_display" value="1"/>*/
/*                         {{ text_yes }}*/
/*                       {% endif %} </label> <label class="radio-inline"> {% if not config_error_display %}*/
/*                         <input type="radio" name="config_error_display" value="0" checked="checked"/>*/
/*                         {{ text_no }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_error_display" value="0"/>*/
/*                         {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_error_log }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">{% if config_error_log %}*/
/*                         <input type="radio" name="config_error_log" value="1" checked="checked"/>*/
/*                         {{ text_yes }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_error_log" value="1"/>*/
/*                         {{ text_yes }}*/
/*                       {% endif %} </label> <label class="radio-inline"> {% if not config_error_log %}*/
/*                         <input type="radio" name="config_error_log" value="0" checked="checked"/>*/
/*                         {{ text_no }}*/
/*                       {% else %}*/
/*                         <input type="radio" name="config_error_log" value="0"/>*/
/*                         {{ text_no }}*/
/*                       {% endif %}</label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-error-filename">{{ entry_error_filename }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_error_filename" value="{{ config_error_filename }}" placeholder="{{ entry_error_filename }}" id="input-error-filename" class="form-control"/>*/
/*                     {% if error_log %}*/
/*                       <div class="text-danger">{{ error_log }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'config_theme\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=setting/setting/theme&user_token={{ user_token }}&theme=' + this.value,*/
/* 		dataType: 'html',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'config_theme\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'config_theme\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(html) {*/
/* 			$('#theme').attr('src', html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'config_theme\']').trigger('change');*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'config_country_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=localisation/country/country&user_token={{ user_token }}&country_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'config_country_id\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'config_country_id\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 			if (json['zone'] && json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/* 					html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 					if (json['zone'][i]['zone_id'] == '{{ config_zone_id }}') {*/
/* 						html += ' selected="selected"';*/
/* 					}*/
/* */
/* 					html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 			}*/
/* */
/* 			$('select[name=\'config_zone_id\']').html(html);*/
/* */
/* 			$('#button-save').prop('disabled', false);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'config_country_id\']').trigger('change');*/
/* //--></script>*/
/* {{ footer }} */
