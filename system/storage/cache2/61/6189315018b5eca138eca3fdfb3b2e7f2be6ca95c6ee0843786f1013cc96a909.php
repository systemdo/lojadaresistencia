<?php

/* tool/backup_history.twig */
class __TwigTemplate_4c7cad5ef152bfaec3ff06461596539716baadbfb7b76e2ad8154e595364ec4c extends Twig_Template
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
        echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <td>";
        // line 5
        echo (isset($context["column_filename"]) ? $context["column_filename"] : null);
        echo "</td>
        <td>";
        // line 6
        echo (isset($context["column_size"]) ? $context["column_size"] : null);
        echo "</td>
        <td>";
        // line 7
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</td>
        <td class=\"text-right\">";
        // line 8
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 12
        if ((isset($context["histories"]) ? $context["histories"] : null)) {
            // line 13
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["histories"]) ? $context["histories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 14
                echo "          <tr>
            <td>";
                // line 15
                echo $this->getAttribute($context["history"], "filename", array());
                echo "</td>
            <td>";
                // line 16
                echo $this->getAttribute($context["history"], "size", array());
                echo "</td>
            <td>";
                // line 17
                echo $this->getAttribute($context["history"], "date_added", array());
                echo "</td>
            <td class=\"text-right\">
              <button type=\"button\" value=\"";
                // line 19
                echo $this->getAttribute($context["history"], "filename", array());
                echo "\" data-loading=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_restore"]) ? $context["button_restore"] : null);
                echo "\" class=\"btn btn-warning\"><i class=\"fa fa-refresh\"></i></button>
              <button type=\"button\" onclick=\"location = '";
                // line 20
                echo $this->getAttribute($context["history"], "download", array());
                echo "';\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_download"]) ? $context["button_download"] : null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-download\"></i></button>
              <button type=\"button\" value=\"";
                // line 21
                echo $this->getAttribute($context["history"], "filename", array());
                echo "\" onclick=\"\" data-loading=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></button>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "      ";
        } else {
            // line 26
            echo "        <tr>
          <td colspan=\"4\" class=\"text-center\">";
            // line 27
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
        </tr>
      ";
        }
        // line 30
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 34
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 35
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "tool/backup_history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 35,  113 => 34,  107 => 30,  101 => 27,  98 => 26,  95 => 25,  81 => 21,  75 => 20,  67 => 19,  62 => 17,  58 => 16,  54 => 15,  51 => 14,  46 => 13,  44 => 12,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="table-responsive">*/
/*   <table class="table table-bordered">*/
/*     <thead>*/
/*       <tr>*/
/*         <td>{{ column_filename }}</td>*/
/*         <td>{{ column_size }}</td>*/
/*         <td>{{ column_date_added }}</td>*/
/*         <td class="text-right">{{ column_action }}</td>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% if histories %}*/
/*         {% for history in histories %}*/
/*           <tr>*/
/*             <td>{{ history.filename }}</td>*/
/*             <td>{{ history.size }}</td>*/
/*             <td>{{ history.date_added }}</td>*/
/*             <td class="text-right">*/
/*               <button type="button" value="{{ history.filename }}" data-loading="{{ text_loading }}" data-toggle="tooltip" title="{{ button_restore }}" class="btn btn-warning"><i class="fa fa-refresh"></i></button>*/
/*               <button type="button" onclick="location = '{{ history.download }}';" data-toggle="tooltip" title="{{ button_download }}" class="btn btn-info"><i class="fa fa-download"></i></button>*/
/*               <button type="button" value="{{ history.filename }}" onclick="" data-loading="{{ text_loading }}" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>*/
/*             </td>*/
/*           </tr>*/
/*         {% endfor %}*/
/*       {% else %}*/
/*         <tr>*/
/*           <td colspan="4" class="text-center">{{ text_no_results }}</td>*/
/*         </tr>*/
/*       {% endif %}*/
/*     </tbody>*/
/*   </table>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*   <div class="col-sm-6 text-right">{{ results }}</div>*/
/* </div>*/
/* */
