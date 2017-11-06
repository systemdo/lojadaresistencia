<?php

/* common/column_left.twig */
class __TwigTemplate_9ceb098d2d8babc6edc919c009cba95f21cd10d49fb15d678ad2ab9024980a30 extends Twig_Template
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
        echo "<nav id=\"column-left\">
  <div id=\"navigation\"><span class=\"fa fa-bars\"></span> ";
        // line 2
        echo (isset($context["text_navigation"]) ? $context["text_navigation"] : null);
        echo "</div>
  <ul id=\"menu\">
    ";
        // line 4
        $context["i"] = 0;
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 6
            echo "      <li id=\"";
            echo $this->getAttribute($context["menu"], "id", array());
            echo "\">";
            if ($this->getAttribute($context["menu"], "href", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["menu"], "href", array());
                echo "\"><i class=\"fa ";
                echo $this->getAttribute($context["menu"], "icon", array());
                echo " fw\"></i> ";
                echo $this->getAttribute($context["menu"], "name", array());
                echo "</a>";
            } else {
                echo "<a href=\"#collapse";
                echo (isset($context["i"]) ? $context["i"] : null);
                echo "\" data-toggle=\"collapse\" class=\"parent collapsed\"><i class=\"fa ";
                echo $this->getAttribute($context["menu"], "icon", array());
                echo " fw\"></i> ";
                echo $this->getAttribute($context["menu"], "name", array());
                echo "</a>";
            }
            // line 7
            echo "        ";
            if ($this->getAttribute($context["menu"], "children", array())) {
                // line 8
                echo "          <ul id=\"collapse";
                echo (isset($context["i"]) ? $context["i"] : null);
                echo "\" class=\"collapse\">
            ";
                // line 9
                $context["j"] = 0;
                // line 10
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["children_1"]) {
                    // line 11
                    echo "              <li>";
                    if ($this->getAttribute($context["children_1"], "href", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["children_1"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["children_1"], "name", array());
                        echo "</a>";
                    } else {
                        echo "<a href=\"#collapse";
                        echo (isset($context["i"]) ? $context["i"] : null);
                        echo "-";
                        echo (isset($context["j"]) ? $context["j"] : null);
                        echo "\" data-toggle=\"collapse\" class=\"parent collapsed\">";
                        echo $this->getAttribute($context["children_1"], "name", array());
                        echo "</a>";
                    }
                    // line 12
                    echo "                ";
                    if ($this->getAttribute($context["children_1"], "children", array())) {
                        // line 13
                        echo "                  <ul id=\"collapse";
                        echo (isset($context["i"]) ? $context["i"] : null);
                        echo "-";
                        echo (isset($context["j"]) ? $context["j"] : null);
                        echo "\" class=\"collapse\">
                    ";
                        // line 14
                        $context["k"] = 0;
                        // line 15
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["children_1"], "children", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["children_2"]) {
                            // line 16
                            echo "                      <li> ";
                            if ($this->getAttribute($context["children_2"], "href", array())) {
                                echo "<a href=\"";
                                echo $this->getAttribute($context["children_2"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["children_2"], "name", array());
                                echo "</a>";
                            } else {
                                echo "<a href=\"#collapse-";
                                echo (isset($context["i"]) ? $context["i"] : null);
                                echo "-";
                                echo (isset($context["j"]) ? $context["j"] : null);
                                echo "-";
                                echo (isset($context["k"]) ? $context["k"] : null);
                                echo "\" data-toggle=\"collapse\" class=\"parent collapsed\">";
                                echo $this->getAttribute($context["children_2"], "name", array());
                                echo "</a>";
                            }
                            // line 17
                            echo "                        ";
                            if ($this->getAttribute($context["children_2"], "children", array())) {
                                // line 18
                                echo "                          <ul id=\"collapse-";
                                echo (isset($context["i"]) ? $context["i"] : null);
                                echo "-";
                                echo (isset($context["j"]) ? $context["j"] : null);
                                echo "-";
                                echo (isset($context["k"]) ? $context["k"] : null);
                                echo "\" class=\"collapse\">
                            ";
                                // line 19
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["children_2"], "children", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["children_3"]) {
                                    // line 20
                                    echo "                              <li><a href=\"";
                                    echo $this->getAttribute($context["children_3"], "href", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["children_3"], "name", array());
                                    echo "</a></li>
                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_3'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 22
                                echo "                          </ul>
                        ";
                            }
                            // line 23
                            echo " </li>
                      ";
                            // line 24
                            $context["k"] = ((isset($context["k"]) ? $context["k"] : null) + 1);
                            // line 25
                            echo "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 26
                        echo "                  </ul>
                ";
                    }
                    // line 27
                    echo " </li>
              ";
                    // line 28
                    $context["j"] = ((isset($context["j"]) ? $context["j"] : null) + 1);
                    // line 29
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "          </ul>
        ";
            }
            // line 32
            echo "      </li>
      ";
            // line 33
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 34
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  </ul>
  <div id=\"stats\">
    <ul>
      <li>
        <div>";
        // line 39
        echo (isset($context["text_complete_status"]) ? $context["text_complete_status"] : null);
        echo " <span class=\"pull-right\">";
        echo (isset($context["complete_status"]) ? $context["complete_status"] : null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"";
        // line 41
        echo (isset($context["complete_status"]) ? $context["complete_status"] : null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo (isset($context["complete_status"]) ? $context["complete_status"] : null);
        echo "%\"><span class=\"sr-only\">";
        echo (isset($context["complete_status"]) ? $context["complete_status"] : null);
        echo "%</span></div>
        </div>
      </li>
      <li>
        <div>";
        // line 45
        echo (isset($context["text_processing_status"]) ? $context["text_processing_status"] : null);
        echo " <span class=\"pull-right\">";
        echo (isset($context["processing_status"]) ? $context["processing_status"] : null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"";
        // line 47
        echo (isset($context["processing_status"]) ? $context["processing_status"] : null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo (isset($context["processing_status"]) ? $context["processing_status"] : null);
        echo "%\"><span class=\"sr-only\">";
        echo (isset($context["processing_status"]) ? $context["processing_status"] : null);
        echo "%</span></div>
        </div>
      </li>
      <li>
        <div>";
        // line 51
        echo (isset($context["text_other_status"]) ? $context["text_other_status"] : null);
        echo " <span class=\"pull-right\">";
        echo (isset($context["other_status"]) ? $context["other_status"] : null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"";
        // line 53
        echo (isset($context["other_status"]) ? $context["other_status"] : null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo (isset($context["other_status"]) ? $context["other_status"] : null);
        echo "%\"><span class=\"sr-only\">";
        echo (isset($context["other_status"]) ? $context["other_status"] : null);
        echo "%</span></div>
        </div>
      </li>
    </ul>
  </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "common/column_left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 53,  237 => 51,  226 => 47,  219 => 45,  208 => 41,  201 => 39,  195 => 35,  189 => 34,  187 => 33,  184 => 32,  180 => 30,  174 => 29,  172 => 28,  169 => 27,  165 => 26,  159 => 25,  157 => 24,  154 => 23,  150 => 22,  139 => 20,  135 => 19,  126 => 18,  123 => 17,  104 => 16,  99 => 15,  97 => 14,  90 => 13,  87 => 12,  70 => 11,  65 => 10,  63 => 9,  58 => 8,  55 => 7,  34 => 6,  29 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <nav id="column-left">*/
/*   <div id="navigation"><span class="fa fa-bars"></span> {{ text_navigation }}</div>*/
/*   <ul id="menu">*/
/*     {% set i = 0 %}*/
/*     {% for menu in menus %}*/
/*       <li id="{{ menu.id }}">{% if menu.href %}<a href="{{ menu.href }}"><i class="fa {{ menu.icon }} fw"></i> {{ menu.name }}</a>{% else %}<a href="#collapse{{ i }}" data-toggle="collapse" class="parent collapsed"><i class="fa {{ menu.icon }} fw"></i> {{ menu.name }}</a>{% endif %}*/
/*         {% if menu.children %}*/
/*           <ul id="collapse{{ i }}" class="collapse">*/
/*             {% set j = 0 %}*/
/*             {% for children_1 in menu.children %}*/
/*               <li>{% if children_1.href %}<a href="{{ children_1.href }}">{{ children_1.name }}</a>{% else %}<a href="#collapse{{ i }}-{{ j }}" data-toggle="collapse" class="parent collapsed">{{ children_1.name }}</a>{% endif %}*/
/*                 {% if children_1.children %}*/
/*                   <ul id="collapse{{ i }}-{{ j }}" class="collapse">*/
/*                     {% set k = 0 %}*/
/*                     {% for children_2 in children_1.children %}*/
/*                       <li> {% if children_2.href %}<a href="{{ children_2.href }}">{{ children_2.name }}</a>{% else %}<a href="#collapse-{{ i }}-{{ j }}-{{ k }}" data-toggle="collapse" class="parent collapsed">{{ children_2.name }}</a>{% endif %}*/
/*                         {% if children_2.children %}*/
/*                           <ul id="collapse-{{ i }}-{{ j }}-{{ k }}" class="collapse">*/
/*                             {% for children_3 in children_2.children %}*/
/*                               <li><a href="{{ children_3.href }}">{{ children_3.name }}</a></li>*/
/*                             {% endfor %}*/
/*                           </ul>*/
/*                         {% endif %} </li>*/
/*                       {% set k = k + 1 %}*/
/*                     {% endfor %}*/
/*                   </ul>*/
/*                 {% endif %} </li>*/
/*               {% set j = j + 1 %}*/
/*             {% endfor %}*/
/*           </ul>*/
/*         {% endif %}*/
/*       </li>*/
/*       {% set i = i + 1 %}*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div id="stats">*/
/*     <ul>*/
/*       <li>*/
/*         <div>{{ text_complete_status }} <span class="pull-right">{{ complete_status }}%</span></div>*/
/*         <div class="progress">*/
/*           <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ complete_status }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ complete_status }}%"><span class="sr-only">{{ complete_status }}%</span></div>*/
/*         </div>*/
/*       </li>*/
/*       <li>*/
/*         <div>{{ text_processing_status }} <span class="pull-right">{{ processing_status }}%</span></div>*/
/*         <div class="progress">*/
/*           <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="{{ processing_status }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ processing_status }}%"><span class="sr-only">{{ processing_status }}%</span></div>*/
/*         </div>*/
/*       </li>*/
/*       <li>*/
/*         <div>{{ text_other_status }} <span class="pull-right">{{ other_status }}%</span></div>*/
/*         <div class="progress">*/
/*           <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{ other_status }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ other_status }}%"><span class="sr-only">{{ other_status }}%</span></div>*/
/*         </div>*/
/*       </li>*/
/*     </ul>*/
/*   </div>*/
/* </nav>*/
/* */
