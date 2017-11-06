<?php

/* design/layout_form.twig */
class __TwigTemplate_8f23d26c71483522ec5a261f922a58dc369b6db8d5b7f39a5f6737fdd8729c0d extends Twig_Template
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
        <button type=\"submit\" form=\"form-layout\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
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
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-layout\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 29
        echo (isset($context["text_route"]) ? $context["text_route"] : null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 31
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"";
        // line 33
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
                ";
        // line 34
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 35
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
                ";
        }
        // line 37
        echo "              </div>
            </div>
            <table id=\"route\" class=\"table table-striped table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left\">";
        // line 42
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                  <td class=\"text-left\">";
        // line 43
        echo (isset($context["entry_route"]) ? $context["entry_route"] : null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 48
        $context["route_row"] = 0;
        // line 49
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_routes"]) ? $context["layout_routes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_route"]) {
            // line 50
            echo "                  <tr id=\"route-row";
            echo (isset($context["route_row"]) ? $context["route_row"] : null);
            echo "\">
                    <td class=\"text-left\"><select name=\"layout_route[";
            // line 51
            echo (isset($context["route_row"]) ? $context["route_row"] : null);
            echo "][store_id]\" class=\"form-control\">
                        <option value=\"0\">";
            // line 52
            echo (isset($context["text_default"]) ? $context["text_default"] : null);
            echo "</option>
                        ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 54
                echo "                          ";
                if (($this->getAttribute($context["store"], "store_id", array()) == $this->getAttribute($context["layout_route"], "store_id", array()))) {
                    // line 55
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["store"], "store_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["store"], "name", array());
                    echo "</option>
                          ";
                } else {
                    // line 57
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["store"], "store_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["store"], "name", array());
                    echo "</option>
                          ";
                }
                // line 59
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                      </select></td>
                    <td class=\"text-left\"><input type=\"text\" name=\"layout_route[";
            // line 61
            echo (isset($context["route_row"]) ? $context["route_row"] : null);
            echo "][route]\" value=\"";
            echo $this->getAttribute($context["layout_route"], "route", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_route"]) ? $context["entry_route"] : null);
            echo "\" class=\"form-control\"/></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#route-row";
            // line 62
            echo (isset($context["route_row"]) ? $context["route_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 64
            $context["route_row"] = ((isset($context["route_row"]) ? $context["route_row"] : null) + 1);
            // line 65
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"addRoute();\" data-toggle=\"tooltip\" title=\"";
        // line 70
        echo (isset($context["button_route_add"]) ? $context["button_route_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <fieldset>
            <legend>";
        // line 76
        echo (isset($context["text_module"]) ? $context["text_module"] : null);
        echo "</legend>
            ";
        // line 77
        $context["module_row"] = 0;
        // line 78
        echo "            <div class=\"row\">
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-left\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 83
        echo (isset($context["text_column_left"]) ? $context["text_column_left"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 88
            echo "                      ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "column_left")) {
                // line 89
                echo "                        <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                          <td class=\"text-left\">
                            <div class=\"input-group\">
                              <select name=\"layout_module[";
                // line 92
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                                ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 94
                    echo "                                  <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                                    ";
                    // line 95
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 96
                        echo "                                      ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 97
                            echo "                                        <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                                      ";
                        } else {
                            // line 99
                            echo "                                        <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                                      ";
                        }
                        // line 101
                        echo "                                    ";
                    } else {
                        // line 102
                        echo "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 103
                            echo "                                        ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 104
                                echo "                                          <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                                        ";
                            } else {
                                // line 106
                                echo "                                          <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                                        ";
                            }
                            // line 108
                            echo "                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 109
                        echo "                                    ";
                    }
                    // line 110
                    echo "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                echo "                              </select> <input type=\"hidden\" name=\"layout_module[";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\"/> <input type=\"hidden\" name=\"layout_module[";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\"/>
                              <div class=\"input-group-btn\"><a href=\"";
                // line 113
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                                <button type=\"button\" onclick=\"\$('#module-row";
                // line 114
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 119
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 120
                echo "                      ";
            }
            // line 121
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\">
                        <div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 130
            echo "                              <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                                ";
            // line 131
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 132
                echo "                                  <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                                ";
            } else {
                // line 134
                echo "                                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 135
                    echo "                                    <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 137
                echo "                                ";
            }
            // line 138
            echo "                              </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('column-left');\" data-toggle=\"tooltip\" title=\"";
        // line 142
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-6 col-md-4 col-sm-12\">
                <table id=\"module-content-top\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 154
        echo (isset($context["text_content_top"]) ? $context["text_content_top"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 159
            echo "                      ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "content_top")) {
                // line 160
                echo "                        <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                          <td class=\"text-left\">
                            <div class=\"input-group\">
                              <select name=\"layout_module[";
                // line 163
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                                ";
                // line 164
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 165
                    echo "                                  <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                                    ";
                    // line 166
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 167
                        echo "                                      ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 168
                            echo "                                        <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                                      ";
                        } else {
                            // line 170
                            echo "                                        <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                                      ";
                        }
                        // line 172
                        echo "                                    ";
                    } else {
                        // line 173
                        echo "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 174
                            echo "                                        ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 175
                                echo "                                          <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                                        ";
                            } else {
                                // line 177
                                echo "                                          <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                                        ";
                            }
                            // line 179
                            echo "                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 180
                        echo "                                    ";
                    }
                    // line 181
                    echo "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 183
                echo "                              </select> <input type=\"hidden\" name=\"layout_module[";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\"/> <input type=\"hidden\" name=\"layout_module[";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\"/>
                              <div class=\"input-group-btn\"><a href=\"";
                // line 184
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                                <button type=\"button\" onclick=\"\$('#module-row";
                // line 185
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 190
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 191
                echo "                      ";
            }
            // line 192
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\">
                        <div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 201
            echo "                              <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                                ";
            // line 202
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 203
                echo "                                  <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                                ";
            } else {
                // line 205
                echo "                                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 206
                    echo "                                    <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 208
                echo "                                ";
            }
            // line 209
            echo "                              </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('content-top');\" data-toggle=\"tooltip\" title=\"";
        // line 213
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-content-bottom\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 223
        echo (isset($context["text_content_bottom"]) ? $context["text_content_bottom"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 228
            echo "                      ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "content_bottom")) {
                // line 229
                echo "                        <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                          <td class=\"text-left\">
                            <div class=\"input-group\">
                              <select name=\"layout_module[";
                // line 232
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                                ";
                // line 233
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 234
                    echo "                                  <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                                    ";
                    // line 235
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 236
                        echo "                                      ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 237
                            echo "                                        <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                                      ";
                        } else {
                            // line 239
                            echo "                                        <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                                      ";
                        }
                        // line 241
                        echo "                                    ";
                    } else {
                        // line 242
                        echo "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 243
                            echo "                                        ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 244
                                echo "                                          <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                                        ";
                            } else {
                                // line 246
                                echo "                                          <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                                        ";
                            }
                            // line 248
                            echo "                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 249
                        echo "                                    ";
                    }
                    // line 250
                    echo "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 252
                echo "                              </select> <input type=\"hidden\" name=\"layout_module[";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\"/> <input type=\"hidden\" name=\"layout_module[";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\"/>
                              <div class=\"input-group-btn\"><a href=\"";
                // line 253
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                                <button type=\"button\" onclick=\"\$('#module-row";
                // line 254
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 259
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 260
                echo "                      ";
            }
            // line 261
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\">
                        <div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 270
            echo "                              <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                                ";
            // line 271
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 272
                echo "                                  <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                                ";
            } else {
                // line 274
                echo "                                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 275
                    echo "                                    <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 277
                echo "                                ";
            }
            // line 278
            echo "                              </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 280
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('content-bottom');\" data-toggle=\"tooltip\" title=\"";
        // line 282
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-right\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 294
        echo (isset($context["text_column_right"]) ? $context["text_column_right"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 298
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 299
            echo "                      ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "column_right")) {
                // line 300
                echo "                        <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                          <td class=\"text-left\">
                            <div class=\"input-group\">
                              <select name=\"layout_module[";
                // line 303
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                                ";
                // line 304
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 305
                    echo "                                  <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                                    ";
                    // line 306
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 307
                        echo "                                      ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 308
                            echo "                                        <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                                      ";
                        } else {
                            // line 310
                            echo "                                        <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                                      ";
                        }
                        // line 312
                        echo "                                    ";
                    } else {
                        // line 313
                        echo "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 314
                            echo "                                        ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 315
                                echo "                                          <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                                        ";
                            } else {
                                // line 317
                                echo "                                          <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                                        ";
                            }
                            // line 319
                            echo "                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 320
                        echo "                                    ";
                    }
                    // line 321
                    echo "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 323
                echo "                              </select> <input type=\"hidden\" name=\"layout_module[";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\"/> <input type=\"hidden\" name=\"layout_module[";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\"/>
                              <div class=\"input-group-btn\"><a href=\"";
                // line 324
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                                <button type=\"button\" onclick=\"\$('#module-row";
                // line 325
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 330
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 331
                echo "                      ";
            }
            // line 332
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 333
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\">
                        <div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 340
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 341
            echo "                              <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                                ";
            // line 342
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 343
                echo "                                  <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                                ";
            } else {
                // line 345
                echo "                                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 346
                    echo "                                    <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 348
                echo "                                ";
            }
            // line 349
            echo "                              </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 351
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('column-right');\" data-toggle=\"tooltip\" title=\"";
        // line 353
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
var route_row = ";
        // line 369
        echo (isset($context["route_row"]) ? $context["route_row"] : null);
        echo ";

function addRoute() {
\thtml = '<tr id=\"route-row' + route_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"layout_route[' + route_row + '][store_id]\" class=\"form-control\">';
\thtml += '  <option value=\"0\">";
        // line 374
        echo (isset($context["text_default"]) ? $context["text_default"] : null);
        echo "</option>';
  ";
        // line 375
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 376
            echo "\thtml += '<option value=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["store"], "name", array()), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 378
        echo "\thtml += '  </select></td>';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[' + route_row + '][route]\" value=\"\" placeholder=\"";
        // line 379
        echo (isset($context["entry_route"]) ? $context["entry_route"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#route-row' + route_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 380
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#route tbody').append(html);

\troute_row++;
}

var module_row = ";
        // line 388
        echo (isset($context["module_row"]) ? $context["module_row"] : null);
        echo ";

function addModule(type) {
\thtml = '<tr id=\"module-row' + module_row + '\">';
\thtml += '  <td class=\"text-left\"><div class=\"input-group\"><select name=\"layout_module[' + module_row + '][code]\" class=\"form-control input-sm\">';
  ";
        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 394
            echo "\thtml += '    <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["extension"], "name", array()), "js");
            echo "\">';
  ";
            // line 395
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 396
                echo "\thtml += '      <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["extension"], "name", array()), "js");
                echo "</option>';
  ";
            } else {
                // line 398
                echo "  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 399
                    echo "\thtml += '      <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "name", array()), "js");
                    echo "</option>';
  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 401
                echo "  ";
            }
            // line 402
            echo "\thtml += '    </optgroup>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 404
        echo "\thtml += '  </select>';
\thtml += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][position]\" value=\"' + type.replace('-', '_') + '\" />';
\thtml += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][sort_order]\" value=\"\" />';
\thtml += '  <div class=\"input-group-btn\"><a href=\"\" target=\"_blank\" type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 407
        echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a><button type=\"button\" onclick=\"\$(\\'#module-row' + module_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button></div></div></td>';
\thtml += '</tr>';

\t\$('#module-' + type + ' tbody').append(html);

\t\$('#module-' + type + ' tbody select[name=\\'layout_module[' + module_row + '][code]\\']').val(\$('#module-' + type + ' tfoot select').val());

\t\$('#module-' + type + ' select[name*=\\'code\\']').trigger('change');

\t\$('#module-' + type + ' tbody input[name*=\\'sort_order\\']').each(function(i, element) {
\t\t\$(element).val(i);
\t});

\tmodule_row++;
}

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').delegate('select[name*=\\'code\\']', 'change', function() {
\tvar part = this.value.split('.');

\tif (!part[1]) {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 427
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');
\t} else {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 429
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&module_id=' + part[1]);
\t}
});

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').trigger('change');
//--></script>
";
        // line 435
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "design/layout_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1215 => 435,  1206 => 429,  1201 => 427,  1176 => 407,  1171 => 404,  1164 => 402,  1161 => 401,  1150 => 399,  1145 => 398,  1137 => 396,  1135 => 395,  1130 => 394,  1126 => 393,  1118 => 388,  1107 => 380,  1103 => 379,  1100 => 378,  1089 => 376,  1085 => 375,  1081 => 374,  1073 => 369,  1054 => 353,  1050 => 351,  1043 => 349,  1040 => 348,  1029 => 346,  1024 => 345,  1016 => 343,  1014 => 342,  1009 => 341,  1005 => 340,  996 => 333,  990 => 332,  987 => 331,  985 => 330,  975 => 325,  969 => 324,  958 => 323,  951 => 321,  948 => 320,  942 => 319,  934 => 317,  926 => 315,  923 => 314,  918 => 313,  915 => 312,  907 => 310,  899 => 308,  896 => 307,  894 => 306,  889 => 305,  885 => 304,  881 => 303,  874 => 300,  871 => 299,  867 => 298,  860 => 294,  845 => 282,  841 => 280,  834 => 278,  831 => 277,  820 => 275,  815 => 274,  807 => 272,  805 => 271,  800 => 270,  796 => 269,  787 => 262,  781 => 261,  778 => 260,  776 => 259,  766 => 254,  760 => 253,  749 => 252,  742 => 250,  739 => 249,  733 => 248,  725 => 246,  717 => 244,  714 => 243,  709 => 242,  706 => 241,  698 => 239,  690 => 237,  687 => 236,  685 => 235,  680 => 234,  676 => 233,  672 => 232,  665 => 229,  662 => 228,  658 => 227,  651 => 223,  638 => 213,  634 => 211,  627 => 209,  624 => 208,  613 => 206,  608 => 205,  600 => 203,  598 => 202,  593 => 201,  589 => 200,  580 => 193,  574 => 192,  571 => 191,  569 => 190,  559 => 185,  553 => 184,  542 => 183,  535 => 181,  532 => 180,  526 => 179,  518 => 177,  510 => 175,  507 => 174,  502 => 173,  499 => 172,  491 => 170,  483 => 168,  480 => 167,  478 => 166,  473 => 165,  469 => 164,  465 => 163,  458 => 160,  455 => 159,  451 => 158,  444 => 154,  429 => 142,  425 => 140,  418 => 138,  415 => 137,  404 => 135,  399 => 134,  391 => 132,  389 => 131,  384 => 130,  380 => 129,  371 => 122,  365 => 121,  362 => 120,  360 => 119,  350 => 114,  344 => 113,  333 => 112,  326 => 110,  323 => 109,  317 => 108,  309 => 106,  301 => 104,  298 => 103,  293 => 102,  290 => 101,  282 => 99,  274 => 97,  271 => 96,  269 => 95,  264 => 94,  260 => 93,  256 => 92,  249 => 89,  246 => 88,  242 => 87,  235 => 83,  228 => 78,  226 => 77,  222 => 76,  213 => 70,  207 => 66,  201 => 65,  199 => 64,  192 => 62,  184 => 61,  181 => 60,  175 => 59,  167 => 57,  159 => 55,  156 => 54,  152 => 53,  148 => 52,  144 => 51,  139 => 50,  134 => 49,  132 => 48,  124 => 43,  120 => 42,  113 => 37,  107 => 35,  105 => 34,  99 => 33,  94 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-layout" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*           <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*       <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*       </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-layout" class="form-horizontal">*/
/*           <fieldset>*/
/*             <legend>{{ text_route }}</legend>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="name" value="{{ name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control"/>*/
/*                 {% if error_name %}*/
/*                   <div class="text-danger">{{ error_name }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <table id="route" class="table table-striped table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td class="text-left">{{ entry_store }}</td>*/
/*                   <td class="text-left">{{ entry_route }}</td>*/
/*                   <td></td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% set route_row = 0 %}*/
/*                 {% for layout_route in layout_routes %}*/
/*                   <tr id="route-row{{ route_row }}">*/
/*                     <td class="text-left"><select name="layout_route[{{ route_row }}][store_id]" class="form-control">*/
/*                         <option value="0">{{ text_default }}</option>*/
/*                         {% for store in stores %}*/
/*                           {% if store.store_id == layout_route.store_id %}*/
/*                             <option value="{{ store.store_id }}" selected="selected">{{ store.name }}</option>*/
/*                           {% else %}*/
/*                             <option value="{{ store.store_id }}">{{ store.name }}</option>*/
/*                           {% endif %}*/
/*                         {% endfor %}*/
/*                       </select></td>*/
/*                     <td class="text-left"><input type="text" name="layout_route[{{ route_row }}][route]" value="{{ layout_route.route }}" placeholder="{{ entry_route }}" class="form-control"/></td>*/
/*                     <td class="text-left"><button type="button" onclick="$('#route-row{{ route_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                   </tr>*/
/*                   {% set route_row = route_row + 1 %}*/
/*                 {% endfor %}*/
/*               </tbody>*/
/*               <tfoot>*/
/*                 <tr>*/
/*                   <td colspan="2"></td>*/
/*                   <td class="text-left"><button type="button" onclick="addRoute();" data-toggle="tooltip" title="{{ button_route_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                 </tr>*/
/*               </tfoot>*/
/*             </table>*/
/*           </fieldset>*/
/*           <fieldset>*/
/*             <legend>{{ text_module }}</legend>*/
/*             {% set module_row = 0 %}*/
/*             <div class="row">*/
/*               <div class="col-lg-3 col-md-4 col-sm-12">*/
/*                 <table id="module-column-left" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_column_left }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                       {% if layout_module.position == 'column_left' %}*/
/*                         <tr id="module-row{{ module_row }}">*/
/*                           <td class="text-left">*/
/*                             <div class="input-group">*/
/*                               <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                                 {% for extension in extensions %}*/
/*                                   <optgroup label="{{ extension.name }}">*/
/*                                     {% if not extension.module %}*/
/*                                       {% if extension.code == layout_module.code %}*/
/*                                         <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                                       {% else %}*/
/*                                         <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                                       {% endif %}*/
/*                                     {% else %}*/
/*                                       {% for module in extension.module %}*/
/*                                         {% if module.code == layout_module.code %}*/
/*                                           <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                                         {% else %}*/
/*                                           <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                                         {% endif %}*/
/*                                       {% endfor %}*/
/*                                     {% endif %}*/
/*                                   </optgroup>*/
/*                                 {% endfor %}*/
/*                               </select> <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}"/> <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}"/>*/
/*                               <div class="input-group-btn"><a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                                 <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                               </div>*/
/*                             </div>*/
/*                           </td>*/
/*                         </tr>*/
/*                         {% set module_row = module_row + 1 %}*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left">*/
/*                         <div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             <option value=""></option>*/
/*                             {% for extension in extensions %}*/
/*                               <optgroup label="{{ extension.name }}">*/
/*                                 {% if not extension.module %}*/
/*                                   <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                                 {% else %}*/
/*                                   {% for module in extension.module %}*/
/*                                     <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                                   {% endfor %}*/
/*                                 {% endif %}*/
/*                               </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('column-left');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div>*/
/*                       </td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*               <div class="col-lg-6 col-md-4 col-sm-12">*/
/*                 <table id="module-content-top" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_content_top }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                       {% if layout_module.position == 'content_top' %}*/
/*                         <tr id="module-row{{ module_row }}">*/
/*                           <td class="text-left">*/
/*                             <div class="input-group">*/
/*                               <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                                 {% for extension in extensions %}*/
/*                                   <optgroup label="{{ extension.name }}">*/
/*                                     {% if not extension.module %}*/
/*                                       {% if extension.code == layout_module.code %}*/
/*                                         <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                                       {% else %}*/
/*                                         <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                                       {% endif %}*/
/*                                     {% else %}*/
/*                                       {% for module in extension.module %}*/
/*                                         {% if module.code == layout_module.code %}*/
/*                                           <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                                         {% else %}*/
/*                                           <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                                         {% endif %}*/
/*                                       {% endfor %}*/
/*                                     {% endif %}*/
/*                                   </optgroup>*/
/*                                 {% endfor %}*/
/*                               </select> <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}"/> <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}"/>*/
/*                               <div class="input-group-btn"><a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                                 <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                               </div>*/
/*                             </div>*/
/*                           </td>*/
/*                         </tr>*/
/*                         {% set module_row = module_row + 1 %}*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left">*/
/*                         <div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             <option value=""></option>*/
/*                             {% for extension in extensions %}*/
/*                               <optgroup label="{{ extension.name }}">*/
/*                                 {% if not extension.module %}*/
/*                                   <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                                 {% else %}*/
/*                                   {% for module in extension.module %}*/
/*                                     <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                                   {% endfor %}*/
/*                                 {% endif %}*/
/*                               </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('content-top');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div>*/
/*                       </td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*                 <table id="module-content-bottom" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_content_bottom }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                       {% if layout_module.position == 'content_bottom' %}*/
/*                         <tr id="module-row{{ module_row }}">*/
/*                           <td class="text-left">*/
/*                             <div class="input-group">*/
/*                               <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                                 {% for extension in extensions %}*/
/*                                   <optgroup label="{{ extension.name }}">*/
/*                                     {% if not extension.module %}*/
/*                                       {% if extension.code == layout_module.code %}*/
/*                                         <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                                       {% else %}*/
/*                                         <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                                       {% endif %}*/
/*                                     {% else %}*/
/*                                       {% for module in extension.module %}*/
/*                                         {% if module.code == layout_module.code %}*/
/*                                           <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                                         {% else %}*/
/*                                           <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                                         {% endif %}*/
/*                                       {% endfor %}*/
/*                                     {% endif %}*/
/*                                   </optgroup>*/
/*                                 {% endfor %}*/
/*                               </select> <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}"/> <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}"/>*/
/*                               <div class="input-group-btn"><a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                                 <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                               </div>*/
/*                             </div>*/
/*                           </td>*/
/*                         </tr>*/
/*                         {% set module_row = module_row + 1 %}*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left">*/
/*                         <div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             <option value=""></option>*/
/*                             {% for extension in extensions %}*/
/*                               <optgroup label="{{ extension.name }}">*/
/*                                 {% if not extension.module %}*/
/*                                   <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                                 {% else %}*/
/*                                   {% for module in extension.module %}*/
/*                                     <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                                   {% endfor %}*/
/*                                 {% endif %}*/
/*                               </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('content-bottom');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div>*/
/*                       </td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*               <div class="col-lg-3 col-md-4 col-sm-12">*/
/*                 <table id="module-column-right" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_column_right }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                       {% if layout_module.position == 'column_right' %}*/
/*                         <tr id="module-row{{ module_row }}">*/
/*                           <td class="text-left">*/
/*                             <div class="input-group">*/
/*                               <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                                 {% for extension in extensions %}*/
/*                                   <optgroup label="{{ extension.name }}">*/
/*                                     {% if not extension.module %}*/
/*                                       {% if extension.code == layout_module.code %}*/
/*                                         <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                                       {% else %}*/
/*                                         <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                                       {% endif %}*/
/*                                     {% else %}*/
/*                                       {% for module in extension.module %}*/
/*                                         {% if module.code == layout_module.code %}*/
/*                                           <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                                         {% else %}*/
/*                                           <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                                         {% endif %}*/
/*                                       {% endfor %}*/
/*                                     {% endif %}*/
/*                                   </optgroup>*/
/*                                 {% endfor %}*/
/*                               </select> <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}"/> <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}"/>*/
/*                               <div class="input-group-btn"><a href="{{ layout_module.edit }}" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                                 <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                               </div>*/
/*                             </div>*/
/*                           </td>*/
/*                         </tr>*/
/*                         {% set module_row = module_row + 1 %}*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left">*/
/*                         <div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             <option value=""></option>*/
/*                             {% for extension in extensions %}*/
/*                               <optgroup label="{{ extension.name }}">*/
/*                                 {% if not extension.module %}*/
/*                                   <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                                 {% else %}*/
/*                                   {% for module in extension.module %}*/
/*                                     <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                                   {% endfor %}*/
/*                                 {% endif %}*/
/*                               </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('column-right');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div>*/
/*                       </td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* var route_row = {{ route_row }};*/
/* */
/* function addRoute() {*/
/* 	html = '<tr id="route-row' + route_row + '">';*/
/* 	html += '  <td class="text-left"><select name="layout_route[' + route_row + '][store_id]" class="form-control">';*/
/* 	html += '  <option value="0">{{ text_default }}</option>';*/
/*   {% for store in stores %}*/
/* 	html += '<option value="{{ store.store_id }}">{{ store.name|escape('js') }}</option>';*/
/*   {% endfor %}*/
/* 	html += '  </select></td>';*/
/* 	html += '  <td class="text-left"><input type="text" name="layout_route[' + route_row + '][route]" value="" placeholder="{{ entry_route }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-left"><button type="button" onclick="$(\'#route-row' + route_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* */
/* 	$('#route tbody').append(html);*/
/* */
/* 	route_row++;*/
/* }*/
/* */
/* var module_row = {{ module_row }};*/
/* */
/* function addModule(type) {*/
/* 	html = '<tr id="module-row' + module_row + '">';*/
/* 	html += '  <td class="text-left"><div class="input-group"><select name="layout_module[' + module_row + '][code]" class="form-control input-sm">';*/
/*   {% for extension in extensions %}*/
/* 	html += '    <optgroup label="{{ extension.name|escape('js') }}">';*/
/*   {% if not extension.module %}*/
/* 	html += '      <option value="{{ extension.code }}">{{ extension.name|escape('js') }}</option>';*/
/*   {% else %}*/
/*   {% for module in extension.module %}*/
/* 	html += '      <option value="{{ module.code }}">{{ module.name|escape('js') }}</option>';*/
/*   {% endfor %}*/
/*   {% endif %}*/
/* 	html += '    </optgroup>';*/
/*   {% endfor %}*/
/* 	html += '  </select>';*/
/* 	html += '  <input type="hidden" name="layout_module[' + module_row + '][position]" value="' + type.replace('-', '_') + '" />';*/
/* 	html += '  <input type="hidden" name="layout_module[' + module_row + '][sort_order]" value="" />';*/
/* 	html += '  <div class="input-group-btn"><a href="" target="_blank" type="button" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a><button type="button" onclick="$(\'#module-row' + module_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button></div></div></td>';*/
/* 	html += '</tr>';*/
/* */
/* 	$('#module-' + type + ' tbody').append(html);*/
/* */
/* 	$('#module-' + type + ' tbody select[name=\'layout_module[' + module_row + '][code]\']').val($('#module-' + type + ' tfoot select').val());*/
/* */
/* 	$('#module-' + type + ' select[name*=\'code\']').trigger('change');*/
/* */
/* 	$('#module-' + type + ' tbody input[name*=\'sort_order\']').each(function(i, element) {*/
/* 		$(element).val(i);*/
/* 	});*/
/* */
/* 	module_row++;*/
/* }*/
/* */
/* $('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').delegate('select[name*=\'code\']', 'change', function() {*/
/* 	var part = this.value.split('.');*/
/* */
/* 	if (!part[1]) {*/
/* 		$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token={{ user_token }}');*/
/* 	} else {*/
/* 		$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token={{ user_token }}&module_id=' + part[1]);*/
/* 	}*/
/* });*/
/* */
/* $('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').trigger('change');*/
/* //--></script>*/
/* {{ footer }}*/
