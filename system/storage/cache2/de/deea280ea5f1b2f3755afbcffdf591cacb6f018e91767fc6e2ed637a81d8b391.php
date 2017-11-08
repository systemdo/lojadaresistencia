<?php

/* marketplace/marketplace_comment.twig */
class __TwigTemplate_0c4a668b94891ebb62e5ab1d158bd819fedf893e6626da8c52d34c62dde28ae1 extends Twig_Template
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
        if ((isset($context["comments"]) ? $context["comments"] : null)) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 3
                echo "<div id=\"comment";
                echo $this->getAttribute($context["comment"], "extension_comment_id", array());
                echo "\" class=\"media\">
  <div class=\"media-left\"><img src=\"";
                // line 4
                echo $this->getAttribute($context["comment"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["comment"], "member", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["comment"], "member", array());
                echo "\" class=\"media-object\" /></div>
  <div class=\"media-body\">
    <p class=\"media-heading\">";
                // line 6
                echo $this->getAttribute($context["comment"], "member", array());
                echo " <span>";
                echo $this->getAttribute($context["comment"], "date_added", array());
                echo "</span></p>
    <p>";
                // line 7
                echo $this->getAttribute($context["comment"], "comment", array());
                echo "</p>
    <div class=\"reply\">
      <div> ";
                // line 9
                if ($this->getAttribute($context["comment"], "reply", array())) {
                    // line 10
                    echo "        
        ";
                    // line 11
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["comment"], "reply", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                        // line 12
                        echo "        <div class=\"media\">
          <div class=\"media-left\"><img src=\"";
                        // line 13
                        echo $this->getAttribute($context["reply"], "image", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["reply"], "member", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["reply"], "member", array());
                        echo "\" class=\"media-object\" /></div>
          <div class=\"media-body\">
            <p class=\"media-heading\">";
                        // line 15
                        echo $this->getAttribute($context["reply"], "member", array());
                        echo " <span>";
                        echo $this->getAttribute($context["reply"], "date_added", array());
                        echo "</span></p>
            <p>";
                        // line 16
                        echo $this->getAttribute($context["reply"], "comment", array());
                        echo "</p>
          </div>
        </div>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    echo "        
        ";
                    // line 21
                    if ($this->getAttribute($context["comment"], "next", array())) {
                        // line 22
                        echo "        <div class=\"text-center\"><a href=\"";
                        echo $this->getAttribute($context["comment"], "next", array());
                        echo "\" class=\"btn btn-block\">see more replies...</a></div>
        ";
                    }
                    // line 24
                    echo "        
        ";
                }
                // line 25
                echo " <a href=\"";
                echo $this->getAttribute($context["comment"], "refresh", array());
                echo "\" class=\"reply-refresh hide\">refresh</a> </div>
    </div>
    <p class=\"text-right\">
      <button type=\"button\" class=\"btn btn-link btn-xs\">";
                // line 28
                echo (isset($context["button_reply"]) ? $context["button_reply"] : null);
                echo "</button>
    </p>
    <div class=\"reply-input-box\" style=\"display: none;\">
      <div class=\"media\">
        <div class=\"media-body\">
          <div class=\"form-group\">
            <label for=\"input-comment";
                // line 34
                echo $this->getAttribute($context["comment"], "extension_comment_id", array());
                echo "\">Leave your comment</label>
            <textarea name=\"comment\" placeholder=\"Write your comment here...\" id=\"input-comment";
                // line 35
                echo $this->getAttribute($context["comment"], "extension_comment_id", array());
                echo "\" class=\"form-control\"></textarea>
          </div>
          <div class=\"text-right\"><a href=\"";
                // line 37
                echo $this->getAttribute($context["comment"], "add", array());
                echo "\" class=\"btn btn-primary btn-sm\">Comment</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo " <br />
<div class=\"text-center\">";
            // line 45
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
";
        }
        // line 46
        echo " ";
    }

    public function getTemplateName()
    {
        return "marketplace/marketplace_comment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 46,  144 => 45,  141 => 44,  127 => 37,  122 => 35,  118 => 34,  109 => 28,  102 => 25,  98 => 24,  92 => 22,  90 => 21,  87 => 20,  77 => 16,  71 => 15,  62 => 13,  59 => 12,  55 => 11,  52 => 10,  50 => 9,  45 => 7,  39 => 6,  30 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if comments %}*/
/* {% for comment in comments %}*/
/* <div id="comment{{ comment.extension_comment_id }}" class="media">*/
/*   <div class="media-left"><img src="{{ comment.image }}" alt="{{ comment.member }}" title="{{ comment.member }}" class="media-object" /></div>*/
/*   <div class="media-body">*/
/*     <p class="media-heading">{{ comment.member }} <span>{{ comment.date_added }}</span></p>*/
/*     <p>{{ comment.comment }}</p>*/
/*     <div class="reply">*/
/*       <div> {% if comment.reply %}*/
/*         */
/*         {% for reply in comment.reply %}*/
/*         <div class="media">*/
/*           <div class="media-left"><img src="{{ reply.image }}" alt="{{ reply.member }}" title="{{ reply.member }}" class="media-object" /></div>*/
/*           <div class="media-body">*/
/*             <p class="media-heading">{{ reply.member }} <span>{{ reply.date_added }}</span></p>*/
/*             <p>{{ reply.comment }}</p>*/
/*           </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*         */
/*         {% if comment.next %}*/
/*         <div class="text-center"><a href="{{ comment.next }}" class="btn btn-block">see more replies...</a></div>*/
/*         {% endif %}*/
/*         */
/*         {% endif %} <a href="{{ comment.refresh }}" class="reply-refresh hide">refresh</a> </div>*/
/*     </div>*/
/*     <p class="text-right">*/
/*       <button type="button" class="btn btn-link btn-xs">{{ button_reply }}</button>*/
/*     </p>*/
/*     <div class="reply-input-box" style="display: none;">*/
/*       <div class="media">*/
/*         <div class="media-body">*/
/*           <div class="form-group">*/
/*             <label for="input-comment{{ comment.extension_comment_id }}">Leave your comment</label>*/
/*             <textarea name="comment" placeholder="Write your comment here..." id="input-comment{{ comment.extension_comment_id }}" class="form-control"></textarea>*/
/*           </div>*/
/*           <div class="text-right"><a href="{{ comment.add }}" class="btn btn-primary btn-sm">Comment</a></div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* </div>*/
/* {% endfor %} <br />*/
/* <div class="text-center">{{ pagination }}</div>*/
/* {% endif %} */
