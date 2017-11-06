<?php

/* extension/extension/theme.twig */
class __TwigTemplate_d506aa19670f8cdc0dbd499b17862663f53eb55a9653c6bd73c84d7c96f38b90 extends Twig_Template
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
        echo "<fieldset>
  <legend>";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</legend>
  ";
        // line 3
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 4
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 8
        echo "  ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 9
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 13
        echo "  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-left\">";
        // line 17
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
          <td class=\"text-left\">";
        // line 18
        echo (isset($context["column_status"]) ? $context["column_status"] : null);
        echo "</td>
          <td class=\"text-right\">";
        // line 19
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 23
        if ((isset($context["extensions"]) ? $context["extensions"] : null)) {
            // line 24
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 25
                echo "            <tr>
              <td class=\"text-left\" colspan=\"2\"><b>";
                // line 26
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</b></td>
              <td class=\"text-right\">";
                // line 27
                if ( !$this->getAttribute($context["extension"], "installed", array())) {
                    // line 28
                    echo "                  <a href=\"";
                    echo $this->getAttribute($context["extension"], "install", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_install"]) ? $context["button_install"] : null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a>
                ";
                } else {
                    // line 30
                    echo "                  <a href=\"";
                    echo $this->getAttribute($context["extension"], "uninstall", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_uninstall"]) ? $context["button_uninstall"] : null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
                ";
                }
                // line 31
                echo "</td>
            </tr>
            ";
                // line 33
                if ($this->getAttribute($context["extension"], "installed", array())) {
                    // line 34
                    echo "              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "store", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                        // line 35
                        echo "                <tr>
                  <td class=\"text-left\">&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;";
                        // line 36
                        echo $this->getAttribute($context["store"], "name", array());
                        echo "</td>
                  <td class=\"text-left\">";
                        // line 37
                        echo $this->getAttribute($context["store"], "status", array());
                        echo "</td>
                  <td class=\"text-right\"><a href=\"";
                        // line 38
                        echo $this->getAttribute($context["store"], "edit", array());
                        echo "\" data-toggle=\"tooltip\" title=\"";
                        echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "            ";
                }
                // line 42
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        ";
        } else {
            // line 44
            echo "          <tr>
            <td class=\"text-center\" colspan=\"3\">";
            // line 45
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
          </tr>
        ";
        }
        // line 48
        echo "      </tbody>
    </table>
  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "extension/extension/theme.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 48,  148 => 45,  145 => 44,  142 => 43,  136 => 42,  133 => 41,  122 => 38,  118 => 37,  114 => 36,  111 => 35,  106 => 34,  104 => 33,  100 => 31,  92 => 30,  84 => 28,  82 => 27,  78 => 26,  75 => 25,  70 => 24,  68 => 23,  61 => 19,  57 => 18,  53 => 17,  47 => 13,  39 => 9,  36 => 8,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <fieldset>*/
/*   <legend>{{ heading_title }}</legend>*/
/*   {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*   {% endif %}*/
/*   <div class="table-responsive">*/
/*     <table class="table table-bordered table-hover">*/
/*       <thead>*/
/*         <tr>*/
/*           <td class="text-left">{{ column_name }}</td>*/
/*           <td class="text-left">{{ column_status }}</td>*/
/*           <td class="text-right">{{ column_action }}</td>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         {% if extensions %}*/
/*           {% for extension in extensions %}*/
/*             <tr>*/
/*               <td class="text-left" colspan="2"><b>{{ extension.name }}</b></td>*/
/*               <td class="text-right">{% if not extension.installed %}*/
/*                   <a href="{{ extension.install }}" data-toggle="tooltip" title="{{ button_install }}" class="btn btn-success"><i class="fa fa-plus-circle"></i></a>*/
/*                 {% else %}*/
/*                   <a href="{{ extension.uninstall }}" data-toggle="tooltip" title="{{ button_uninstall }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>*/
/*                 {% endif %}</td>*/
/*             </tr>*/
/*             {% if extension.installed %}*/
/*               {% for store in extension.store %}*/
/*                 <tr>*/
/*                   <td class="text-left">&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;{{ store.name }}</td>*/
/*                   <td class="text-left">{{ store.status }}</td>*/
/*                   <td class="text-right"><a href="{{ store.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                 </tr>*/
/*               {% endfor %}*/
/*             {% endif %}*/
/*           {% endfor %}*/
/*         {% else %}*/
/*           <tr>*/
/*             <td class="text-center" colspan="3">{{ text_no_results }}</td>*/
/*           </tr>*/
/*         {% endif %}*/
/*       </tbody>*/
/*     </table>*/
/*   </div>*/
/* </fieldset>*/
/* */
