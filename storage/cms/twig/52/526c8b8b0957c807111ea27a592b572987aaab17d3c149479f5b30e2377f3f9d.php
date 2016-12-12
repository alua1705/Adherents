<?php

/* /home/ubuntu/workspace/themes/googgah-solid/pages/404.htm */
class __TwigTemplate_e84fe23e415a153b15ff8a07684c08f41a26da7c1606900043a2c2ece49783ee extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("blue"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
    <div class=\"container mtb\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div style=\"font-weight: bold; font-size: 200px; text-align: center;\">
                    404!
                </div>
            </div>

            <div class=\"col-lg-6\">
                <h4>Something is lost ...</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/googgah-solid/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'blue' %}

    <div class=\"container mtb\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div style=\"font-weight: bold; font-size: 200px; text-align: center;\">
                    404!
                </div>
            </div>

            <div class=\"col-lg-6\">
                <h4>Something is lost ...</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
    </div>", "/home/ubuntu/workspace/themes/googgah-solid/pages/404.htm", "");
    }
}
