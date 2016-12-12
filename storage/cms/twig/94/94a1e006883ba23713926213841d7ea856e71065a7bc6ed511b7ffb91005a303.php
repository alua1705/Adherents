<?php

/* /home/ubuntu/workspace/themes/googgah-solid/partials/clients.htm */
class __TwigTemplate_17eee1fb13221a101cc0b866960ad041bab48c2af00aa45de7e232232fb5fe67 extends Twig_Template
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
        echo "<div id=\"cwrap\">
        <div class=\"container\">
            <div class=\"row centered\">
                <h3>OUR CLIENTS</h3>
                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <img src=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/clients/client01.png");
        echo "\" class=\"img-responsive\"></div>
                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <img src=\"";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/clients/client02.png");
        echo "\" class=\"img-responsive\"></div>
                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <img src=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/clients/client03.png");
        echo "\" class=\"img-responsive\"></div>
                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <img src=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/clients/client04.png");
        echo "\" class=\"img-responsive\"></div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/googgah-solid/partials/clients.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  36 => 10,  31 => 8,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"cwrap\">
        <div class=\"container\">
            <div class=\"row centered\">
                <h3>OUR CLIENTS</h3>
                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <img src=\"{{ 'assets/images/clients/client01.png'|theme }}\" class=\"img-responsive\"></div>
                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <img src=\"{{ 'assets/images/clients/client02.png'|theme }}\" class=\"img-responsive\"></div>
                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <img src=\"{{ 'assets/images/clients/client03.png'|theme }}\" class=\"img-responsive\"></div>
                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <img src=\"{{ 'assets/images/clients/client04.png'|theme }}\" class=\"img-responsive\"></div>
            </div>
        </div>
    </div>", "/home/ubuntu/workspace/themes/googgah-solid/partials/clients.htm", "");
    }
}
