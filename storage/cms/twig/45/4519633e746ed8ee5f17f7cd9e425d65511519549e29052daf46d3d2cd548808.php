<?php

/* /home/ubuntu/workspace/themes/googgah-solid/partials/blue.htm */
class __TwigTemplate_f40597480666a473cac96c7ae88d7392cb5d8cbc9ba77fc2b84d64fff114fb35 extends Twig_Template
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
        echo "<div id=\"blue\">
        <div class=\"container\">
            <div class=\"row\">
                <h3>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo ".</h3>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/googgah-solid/partials/blue.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"blue\">
        <div class=\"container\">
            <div class=\"row\">
                <h3>{{ this.page.title }}.</h3>
            </div>
        </div>
    </div>", "/home/ubuntu/workspace/themes/googgah-solid/partials/blue.htm", "");
    }
}
