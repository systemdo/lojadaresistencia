<?php

/* extension/payment/pp_braintree_preferred.twig */
class __TwigTemplate_33742e2f970a8bbd00a517cd1821e5180166e15bc5d4f2c3ff607a29a2843ad6 extends Twig_Template
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
      <h3 class=\"panel-title\"><img class=\"pull-right\" width=\"192\" src=\"https://s3-us-west-1.amazonaws.com/bt-partner-assets/paypal-braintree.png\" alt=\"PayPal powered by Braintree\"></h3>
      ";
        // line 5
        if (((isset($context["payment_pp_braintree_status"]) ? $context["payment_pp_braintree_status"] : null) == "enabled")) {
            // line 6
            echo "        <div class=\"pull-right\"><span class=\"label label-success\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</span></div>
      ";
        }
        // line 8
        echo "      ";
        if (((isset($context["payment_pp_braintree_status"]) ? $context["payment_pp_braintree_status"] : null) == "disabled")) {
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
        echo " <a href=\"https://www.braintreepayments.com/partners/learn-more\" target=\"_blank\">";
        echo (isset($context["text_learn_more"]) ? $context["text_learn_more"] : null);
        echo "</a></p>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-lg-8 col-md-8 col-sm-8\">
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
        <div class=\"col-lg-4 col-md-4 col-sm-4\">
          <img class=\"pull-right img-responsive\" src=\"https://s3-us-west-1.amazonaws.com/bt-partner-assets/payment-methods.png\" alt=\"Accept Visa, Mastercard, Discover, American Express, and PayPal payments\" />
          ";
        // line 29
        if ( !twig_test_empty((isset($context["connect_link"]) ? $context["connect_link"] : null))) {
            // line 30
            echo "            <br /><br /><a href=\"";
            echo (isset($context["connect_link"]) ? $context["connect_link"] : null);
            echo "\" target=\"_blank\" class=\"pull-right\" style=\"margin-top:10px;\"><img src=\"https://s3-us-west-1.amazonaws.com/bt-partner-assets/connect-braintree.png\" alt=\"Connect with Braintree\" class=\"img-responsive\"></a>
          ";
        }
        // line 32
        echo "          ";
        if ( !twig_test_empty((isset($context["module_link"]) ? $context["module_link"] : null))) {
            // line 33
            echo "            <br /><br /><a href=\"";
            echo (isset($context["module_link"]) ? $context["module_link"] : null);
            echo "\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-primary pull-right\" data-original-title=\"";
            echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
            echo "\"><i class=\"fa fa-pencil\"></i></a>
          ";
        }
        // line 35
        echo "        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/payment/pp_braintree_preferred.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 35,  90 => 33,  87 => 32,  81 => 30,  79 => 29,  71 => 24,  67 => 23,  63 => 22,  59 => 21,  48 => 15,  42 => 11,  36 => 9,  33 => 8,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="col-lg-6 col-md-12 col-sm-12">*/
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*       <h3 class="panel-title"><img class="pull-right" width="192" src="https://s3-us-west-1.amazonaws.com/bt-partner-assets/paypal-braintree.png" alt="PayPal powered by Braintree"></h3>*/
/*       {% if payment_pp_braintree_status == "enabled" %}*/
/*         <div class="pull-right"><span class="label label-success">{{ text_enabled }}</span></div>*/
/*       {% endif %}*/
/*       {% if payment_pp_braintree_status == "disabled" %}*/
/*         <div class="pull-right"><span class="label label-danger">{{ text_disabled }}</span></div>*/
/*       {% endif %}*/
/*     </div>*/
/*     <div class="panel-body">*/
/*       <div class="row">*/
/*         <div class="col-lg-12 col-md-12 col-sm-12">*/
/*           <p>{{ text_preferred_main }} <a href="https://www.braintreepayments.com/partners/learn-more" target="_blank">{{ text_learn_more }}</a></p>*/
/*         </div>*/
/*       </div>*/
/*       <div class="row">*/
/*         <div class="col-lg-8 col-md-8 col-sm-8">*/
/*           <ul>*/
/*             <li>{{ text_preferred_li_1 }}</li>*/
/*             <li>{{ text_preferred_li_2 }}</li>*/
/*             <li>{{ text_preferred_li_3 }}</li>*/
/*             <li>{{ text_preferred_li_4 }}</li>*/
/*           </ul>*/
/*         </div>*/
/*         <div class="col-lg-4 col-md-4 col-sm-4">*/
/*           <img class="pull-right img-responsive" src="https://s3-us-west-1.amazonaws.com/bt-partner-assets/payment-methods.png" alt="Accept Visa, Mastercard, Discover, American Express, and PayPal payments" />*/
/*           {% if connect_link is not empty %}*/
/*             <br /><br /><a href="{{ connect_link }}" target="_blank" class="pull-right" style="margin-top:10px;"><img src="https://s3-us-west-1.amazonaws.com/bt-partner-assets/connect-braintree.png" alt="Connect with Braintree" class="img-responsive"></a>*/
/*           {% endif %}*/
/*           {% if module_link is not empty %}*/
/*             <br /><br /><a href="{{ module_link }}" data-toggle="tooltip" title="" class="btn btn-primary pull-right" data-original-title="{{ text_edit }}"><i class="fa fa-pencil"></i></a>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
