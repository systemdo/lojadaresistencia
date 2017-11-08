<?php

/* common/login.twig */
class __TwigTemplate_5c61ac843bd80a29378985a7a89a6ab36aac7c5ff9fdcd45c78ee4d13baffdbd extends Twig_Template
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
        echo "
<div id=\"content\">
  <div class=\"container-fluid\">
    <br/>
    <br/>
    <div class=\"row\">
      <div class=\"col-sm-offset-4 col-sm-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h1 class=\"panel-title\"><i class=\"fa fa-lock\"></i> ";
        // line 10
        echo (isset($context["text_login"]) ? $context["text_login"] : null);
        echo "</h1>
          </div>
          <div class=\"panel-body\">
            ";
        // line 13
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 14
            echo "              <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
              </div>
            ";
        }
        // line 18
        echo "            ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 19
            echo "              <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
              </div>
            ";
        }
        // line 23
        echo "            <form action=\"";
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label for=\"input-username\">";
        // line 25
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "</label>
                <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span> <input type=\"text\" name=\"username\" value=\"";
        // line 26
        echo (isset($context["username"]) ? $context["username"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "\" id=\"input-username\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"input-password\">";
        // line 30
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
                <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-lock\"></i></span> <input type=\"password\" name=\"password\" value=\"";
        // line 31
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                </div>
                ";
        // line 33
        if ((isset($context["forgotten"]) ? $context["forgotten"] : null)) {
            // line 34
            echo "                  <span class=\"help-block\"><a href=\"";
            echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
            echo "\">";
            echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
            echo "</a></span>
                ";
        }
        // line 36
        echo "              </div>
              <div class=\"text-right\">
                <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-key\"></i> ";
        // line 38
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo "</button>
              </div>
              ";
        // line 40
        if ((isset($context["redirect"]) ? $context["redirect"] : null)) {
            // line 41
            echo "                <input type=\"hidden\" name=\"redirect\" value=\"";
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\"/>
              ";
        }
        // line 43
        echo "            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 50
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "common/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 50,  115 => 43,  109 => 41,  107 => 40,  102 => 38,  98 => 36,  90 => 34,  88 => 33,  81 => 31,  77 => 30,  68 => 26,  64 => 25,  58 => 23,  50 => 19,  47 => 18,  39 => 14,  37 => 13,  31 => 10,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="content">*/
/*   <div class="container-fluid">*/
/*     <br/>*/
/*     <br/>*/
/*     <div class="row">*/
/*       <div class="col-sm-offset-4 col-sm-4">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h1 class="panel-title"><i class="fa fa-lock"></i> {{ text_login }}</h1>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             {% if success %}*/
/*               <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*               </div>*/
/*             {% endif %}*/
/*             {% if error_warning %}*/
/*               <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*               </div>*/
/*             {% endif %}*/
/*             <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*               <div class="form-group">*/
/*                 <label for="input-username">{{ entry_username }}</label>*/
/*                 <div class="input-group"><span class="input-group-addon"><i class="fa fa-user"></i></span> <input type="text" name="username" value="{{ username }}" placeholder="{{ entry_username }}" id="input-username" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label for="input-password">{{ entry_password }}</label>*/
/*                 <div class="input-group"><span class="input-group-addon"><i class="fa fa-lock"></i></span> <input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-password" class="form-control"/>*/
/*                 </div>*/
/*                 {% if forgotten %}*/
/*                   <span class="help-block"><a href="{{ forgotten }}">{{ text_forgotten }}</a></span>*/
/*                 {% endif %}*/
/*               </div>*/
/*               <div class="text-right">*/
/*                 <button type="submit" class="btn btn-primary"><i class="fa fa-key"></i> {{ button_login }}</button>*/
/*               </div>*/
/*               {% if redirect %}*/
/*                 <input type="hidden" name="redirect" value="{{ redirect }}"/>*/
/*               {% endif %}*/
/*             </form>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
