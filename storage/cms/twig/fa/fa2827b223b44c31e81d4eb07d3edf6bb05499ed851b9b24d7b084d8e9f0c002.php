<?php

/* /home/ubuntu/workspace/plugins/offline/sitesearch/components/searchresults/searchresult.htm */
class __TwigTemplate_7a47535986e07a090a95a664fd5480257eabddd0b3e700231522002a974e35f6 extends Twig_Template
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
        echo "<div class=\"ss-result\">
    ";
        // line 2
        if ($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "thumb", array())) {
            // line 3
            echo "        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['result'] = (isset($context["result"]) ? $context["result"] : null)            ;
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::thumbnail")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "    ";
        }
        // line 5
        echo "    <div class=\"ss-result__content\">
        ";
        // line 6
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['result'] = (isset($context["result"]) ? $context["result"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::content")        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "    </div>
    <hr/>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/plugins/offline/sitesearch/components/searchresults/searchresult.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  36 => 6,  33 => 5,  30 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ss-result\">
    {% if result.thumb %}
        {% partial __SELF__ ~ '::thumbnail' result = result %}
    {% endif %}
    <div class=\"ss-result__content\">
        {% partial __SELF__ ~ '::content' result = result %}
    </div>
    <hr/>
</div>", "/home/ubuntu/workspace/plugins/offline/sitesearch/components/searchresults/searchresult.htm", "");
    }
}
