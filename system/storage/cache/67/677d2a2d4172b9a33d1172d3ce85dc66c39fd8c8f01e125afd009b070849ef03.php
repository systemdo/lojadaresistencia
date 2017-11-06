<?php

/* extension/extension/payment.twig */
class __TwigTemplate_91f8751158becd06bccd746975e68740ae1dbee3ffaa013b7523a956651eea39 extends Twig_Template
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
        echo (isset($context["text_recommended"]) ? $context["text_recommended"] : null);
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
        echo "  <div class=\"container-fluid\">
    ";
        // line 14
        if (( !twig_test_empty((isset($context["promoted_solution_1"]) ? $context["promoted_solution_1"] : null)) &&  !twig_test_empty((isset($context["promoted_solution_2"]) ? $context["promoted_solution_2"] : null)))) {
            // line 15
            echo "      <div class=\"row\">
        ";
            // line 16
            echo (isset($context["promoted_solution_1"]) ? $context["promoted_solution_1"] : null);
            echo "
        ";
            // line 17
            echo (isset($context["promoted_solution_2"]) ? $context["promoted_solution_2"] : null);
            echo "
      </div>
    ";
        }
        // line 20
        echo "  </div>
  <legend>";
        // line 21
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</legend>
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-left\">";
        // line 26
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
          <td></td>
          <td class=\"text-left\">";
        // line 28
        echo (isset($context["column_status"]) ? $context["column_status"] : null);
        echo "</td>
          <td class=\"text-right\">";
        // line 29
        echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
        echo "</td>
          <td class=\"text-right\">";
        // line 30
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 34
        if ((isset($context["extensions"]) ? $context["extensions"] : null)) {
            // line 35
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 36
                echo "            <tr>
              <td class=\"text-left\">";
                // line 37
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</td>
              <td class=\"text-center\">";
                // line 38
                echo $this->getAttribute($context["extension"], "link", array());
                echo "</td>
              <td class=\"text-left\">";
                // line 39
                echo $this->getAttribute($context["extension"], "status", array());
                echo "</td>
              <td class=\"text-right\">";
                // line 40
                echo $this->getAttribute($context["extension"], "sort_order", array());
                echo "</td>
              <td class=\"text-right\">";
                // line 41
                if ($this->getAttribute($context["extension"], "installed", array())) {
                    // line 42
                    echo "                  <a href=\"";
                    echo $this->getAttribute($context["extension"], "edit", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                ";
                } else {
                    // line 44
                    echo "                  <button type=\"button\" class=\"btn btn-primary\" disabled=\"disabled\"><i class=\"fa fa-pencil\"></i></button>
                ";
                }
                // line 46
                echo "                ";
                if ( !$this->getAttribute($context["extension"], "installed", array())) {
                    // line 47
                    echo "                  <a href=\"";
                    echo $this->getAttribute($context["extension"], "install", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_install"]) ? $context["button_install"] : null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a>
                ";
                } else {
                    // line 49
                    echo "                  <a href=\"";
                    echo $this->getAttribute($context["extension"], "uninstall", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_uninstall"]) ? $context["button_uninstall"] : null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
                ";
                }
                // line 50
                echo "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "        ";
        } else {
            // line 54
            echo "          <tr>
            <td class=\"text-center\" colspan=\"5\">";
            // line 55
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
          </tr>
        ";
        }
        // line 58
        echo "      </tbody>
    </table>
  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "extension/extension/payment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 58,  169 => 55,  166 => 54,  163 => 53,  155 => 50,  147 => 49,  139 => 47,  136 => 46,  132 => 44,  124 => 42,  122 => 41,  118 => 40,  114 => 39,  110 => 38,  106 => 37,  103 => 36,  98 => 35,  96 => 34,  89 => 30,  85 => 29,  81 => 28,  76 => 26,  68 => 21,  65 => 20,  59 => 17,  55 => 16,  52 => 15,  50 => 14,  47 => 13,  39 => 9,  36 => 8,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <fieldset>*/
/*   <legend>{{ text_recommended }}</legend>*/
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
/*   <div class="container-fluid">*/
/*     {% if promoted_solution_1 is not empty and promoted_solution_2 is not empty %}*/
/*       <div class="row">*/
/*         {{ promoted_solution_1 }}*/
/*         {{ promoted_solution_2 }}*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/*   <legend>{{ heading_title }}</legend>*/
/*   <div class="table-responsive">*/
/*     <table class="table table-bordered table-hover">*/
/*       <thead>*/
/*         <tr>*/
/*           <td class="text-left">{{ column_name }}</td>*/
/*           <td></td>*/
/*           <td class="text-left">{{ column_status }}</td>*/
/*           <td class="text-right">{{ column_sort_order }}</td>*/
/*           <td class="text-right">{{ column_action }}</td>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         {% if extensions %}*/
/*           {% for extension in extensions %}*/
/*             <tr>*/
/*               <td class="text-left">{{ extension.name }}</td>*/
/*               <td class="text-center">{{ extension.link }}</td>*/
/*               <td class="text-left">{{ extension.status }}</td>*/
/*               <td class="text-right">{{ extension.sort_order }}</td>*/
/*               <td class="text-right">{% if extension.installed %}*/
/*                   <a href="{{ extension.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                 {% else %}*/
/*                   <button type="button" class="btn btn-primary" disabled="disabled"><i class="fa fa-pencil"></i></button>*/
/*                 {% endif %}*/
/*                 {% if not extension.installed %}*/
/*                   <a href="{{ extension.install }}" data-toggle="tooltip" title="{{ button_install }}" class="btn btn-success"><i class="fa fa-plus-circle"></i></a>*/
/*                 {% else %}*/
/*                   <a href="{{ extension.uninstall }}" data-toggle="tooltip" title="{{ button_uninstall }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>*/
/*                 {% endif %}</td>*/
/*             </tr>*/
/*           {% endfor %}*/
/*         {% else %}*/
/*           <tr>*/
/*             <td class="text-center" colspan="5">{{ text_no_results }}</td>*/
/*           </tr>*/
/*         {% endif %}*/
/*       </tbody>*/
/*     </table>*/
/*   </div>*/
/* </fieldset>*/
/* */
