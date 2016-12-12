<?php

/* /home/ubuntu/workspace/plugins/offline/sitesearch/components/searchresults/thumbnail.htm */
class __TwigTemplate_ef8df74f97cab694d706450491017e589e0b4bf2936f5e794f987a47c66f2625 extends Twig_Template
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
        echo "<div class=\"ss-result__aside\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "url", array()), "html", null, true);
        echo "\">
        <img class=\"ss-result__image\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "thumb", array()), "getThumb", array(0 => 120, 1 => (isset($context["auto"]) ? $context["auto"] : null)), "method"), "html", null, true);
        echo "\" alt=\"\"/>
    </a>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/plugins/offline/sitesearch/components/searchresults/thumbnail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ss-result__aside\">
    <a href=\"{{ result.url }}\">
        <img class=\"ss-result__image\" src=\"{{ result.thumb.getThumb(120, auto) }}\" alt=\"\"/>
    </a>
</div>", "/home/ubuntu/workspace/plugins/offline/sitesearch/components/searchresults/thumbnail.htm", "");
    }
}
