<?php

/* extension/payment/pp_express_preferred.twig */
class __TwigTemplate_3144c104dcd97aae48c1ffe159b7988d0e8af99afb5ae88c6a8dfce412b79aab extends Twig_Template
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
        echo "<div class=\"col-lg-6 col-md-12 col-sm-12\">
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\"><img class=\"pull-right\" width=\"135\" src=\"https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_200x51.png\" alt=\"PayPal Logo\"></h3>
      ";
        // line 5
        if (((isset($context["payment_pp_express_status"]) ? $context["payment_pp_express_status"] : null) == "enabled")) {
            // line 6
            echo "        <div class=\"pull-right\"><span class=\"label label-success\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</span></div>
      ";
        }
        // line 8
        echo "      ";
        if (((isset($context["payment_pp_express_status"]) ? $context["payment_pp_express_status"] : null) == "disabled")) {
            // line 9
            echo "        <div class=\"pull-right\"><span class=\"label label-danger\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</span></div>
      ";
        }
        // line 11
        echo "    </div>
    <div class=\"panel-body\">
      <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12\">
          <p>";
        // line 15
        echo (isset($context["text_preferred_main"]) ? $context["text_preferred_main"] : null);
        echo " <a href=\"https://www.paypal.com/uk/webapps/mpp/express-checkout\" target=\"_blank\">";
        echo (isset($context["text_learn_more"]) ? $context["text_learn_more"] : null);
        echo "</a></p>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-9\">
          <ul>
            <li>";
        // line 21
        echo (isset($context["text_preferred_li_1"]) ? $context["text_preferred_li_1"] : null);
        echo "</li>
            <li>";
        // line 22
        echo (isset($context["text_preferred_li_2"]) ? $context["text_preferred_li_2"] : null);
        echo "</li>
            <li>";
        // line 23
        echo (isset($context["text_preferred_li_3"]) ? $context["text_preferred_li_3"] : null);
        echo "</li>
            <li>";
        // line 24
        echo (isset($context["text_preferred_li_4"]) ? $context["text_preferred_li_4"] : null);
        echo "</li>
          </ul>
        </div>
        <div class=\"col-lg-3 col-md-3 col-sm-3\">
          <p><img class=\"pull-right\" src=\"view/image/payment/paypal-express-gold-pill.png\" alt=\"PayPal Express\" width=\"130\" style=\"margin-bottom:10px;\" /></p>

          ";
        // line 30
        if ( !twig_test_empty((isset($context["connect_link"]) ? $context["connect_link"] : null))) {
            // line 31
            echo "              <p><a href=\"";
            echo (isset($context["connect_link"]) ? $context["connect_link"] : null);
            echo "\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-primary pull-right\" target=\"_blank\" data-original-title=\"";
            echo (isset($context["text_connect_paypal"]) ? $context["text_connect_paypal"] : null);
            echo "\">";
            echo (isset($context["text_connect_paypal"]) ? $context["text_connect_paypal"] : null);
            echo "</a></p>
          ";
        }
        // line 33
        echo "          ";
        if ( !twig_test_empty((isset($context["module_link"]) ? $context["module_link"] : null))) {
            // line 34
            echo "              <p><a href=\"";
            echo (isset($context["module_link"]) ? $context["module_link"] : null);
            echo "\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-primary pull-right\" data-original-title=\"";
            echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
            echo "\"><i class=\"fa fa-pencil\"></i></a></p>
          ";
        }
        // line 36
        echo "        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/payment/pp_express_preferred.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 36,  95 => 34,  92 => 33,  82 => 31,  80 => 30,  71 => 24,  67 => 23,  63 => 22,  59 => 21,  48 => 15,  42 => 11,  36 => 9,  33 => 8,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="col-lg-6 col-md-12 col-sm-12">*/
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*       <h3 class="panel-title"><img class="pull-right" width="135" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_200x51.png" alt="PayPal Logo"></h3>*/
/*       {% if payment_pp_express_status == "enabled" %}*/
/*         <div class="pull-right"><span class="label label-success">{{ text_enabled }}</span></div>*/
/*       {% endif %}*/
/*       {% if payment_pp_express_status == "disabled" %}*/
/*         <div class="pull-right"><span class="label label-danger">{{ text_disabled }}</span></div>*/
/*       {% endif %}*/
/*     </div>*/
/*     <div class="panel-body">*/
/*       <div class="row">*/
/*         <div class="col-lg-12 col-md-12 col-sm-12">*/
/*           <p>{{ text_preferred_main }} <a href="https://www.paypal.com/uk/webapps/mpp/express-checkout" target="_blank">{{ text_learn_more }}</a></p>*/
/*         </div>*/
/*       </div>*/
/*       <div class="row">*/
/*         <div class="col-lg-9 col-md-9 col-sm-9">*/
/*           <ul>*/
/*             <li>{{ text_preferred_li_1 }}</li>*/
/*             <li>{{ text_preferred_li_2 }}</li>*/
/*             <li>{{ text_preferred_li_3 }}</li>*/
/*             <li>{{ text_preferred_li_4 }}</li>*/
/*           </ul>*/
/*         </div>*/
/*         <div class="col-lg-3 col-md-3 col-sm-3">*/
/*           <p><img class="pull-right" src="view/image/payment/paypal-express-gold-pill.png" alt="PayPal Express" width="130" style="margin-bottom:10px;" /></p>*/
/* */
/*           {% if connect_link is not empty %}*/
/*               <p><a href="{{ connect_link }}" data-toggle="tooltip" title="" class="btn btn-primary pull-right" target="_blank" data-original-title="{{ text_connect_paypal }}">{{ text_connect_paypal }}</a></p>*/
/*           {% endif %}*/
/*           {% if module_link is not empty %}*/
/*               <p><a href="{{ module_link }}" data-toggle="tooltip" title="" class="btn btn-primary pull-right" data-original-title="{{ text_edit }}"><i class="fa fa-pencil"></i></a></p>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
