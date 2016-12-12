<?php

/* /home/ubuntu/workspace/themes/googgah-solid/pages/contact.htm */
class __TwigTemplate_2b69e145c944faf39459bd60e5e157633564082596729453d75c299cf922de15 extends Twig_Template
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
\t<!-- *****************************************************************************************************************
\t CONTACT WRAP
\t ***************************************************************************************************************** -->

\t <div id=\"contactwrap\"></div>

\t<!-- *****************************************************************************************************************
\t CONTACT FORMS
\t ***************************************************************************************************************** -->

\t <div class=\"container mtb\">
\t \t<div class=\"row\">
\t \t\t<div class=\"col-lg-8\">
\t \t\t\t<h4>Just Get In Touch!</h4>
\t \t\t\t<div class=\"hline\"></div>
\t\t \t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
\t\t \t\t\t<form role=\"form\">
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t    <label for=\"InputName1\">Your Name</label>
\t\t\t\t\t    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\">
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t    <label for=\"InputEmail1\">Email address</label>
\t\t\t\t\t    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\">
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t    <label for=\"InputSubject1\">Subject</label>
\t\t\t\t\t    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\">
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t  \t<label for=\"message1\">Message</label>
\t\t\t\t\t  \t<textarea class=\"form-control\" id=\"message1\" rows=\"3\"></textarea>
\t\t\t\t\t  </div>
\t\t\t\t\t  <button type=\"submit\" class=\"btn btn-theme\">Submit</button>
\t\t\t\t\t</form>
\t\t\t</div>

\t \t\t<div class=\"col-lg-4\">
\t\t \t\t<h4>Our Address</h4>
\t\t \t\t<div class=\"hline\"></div>
\t\t \t\t\t<p>
\t\t \t\t\t\tSome Ave, 987,<br/>
\t\t \t\t\t\t23890, New York,<br/>
\t\t \t\t\t\tUnited States.<br/>
\t\t \t\t\t</p>
\t\t \t\t\t<p>
\t\t \t\t\t\tEmail: hello@solidtheme.com<br/>
\t\t \t\t\t\tTel: +34 8493-4893
\t\t \t\t\t</p>
\t\t \t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
\t \t\t</div>
\t \t</div>
\t </div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/googgah-solid/pages/contact.htm";
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

\t<!-- *****************************************************************************************************************
\t CONTACT WRAP
\t ***************************************************************************************************************** -->

\t <div id=\"contactwrap\"></div>

\t<!-- *****************************************************************************************************************
\t CONTACT FORMS
\t ***************************************************************************************************************** -->

\t <div class=\"container mtb\">
\t \t<div class=\"row\">
\t \t\t<div class=\"col-lg-8\">
\t \t\t\t<h4>Just Get In Touch!</h4>
\t \t\t\t<div class=\"hline\"></div>
\t\t \t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
\t\t \t\t\t<form role=\"form\">
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t    <label for=\"InputName1\">Your Name</label>
\t\t\t\t\t    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\">
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t    <label for=\"InputEmail1\">Email address</label>
\t\t\t\t\t    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\">
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t    <label for=\"InputSubject1\">Subject</label>
\t\t\t\t\t    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\">
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t  \t<label for=\"message1\">Message</label>
\t\t\t\t\t  \t<textarea class=\"form-control\" id=\"message1\" rows=\"3\"></textarea>
\t\t\t\t\t  </div>
\t\t\t\t\t  <button type=\"submit\" class=\"btn btn-theme\">Submit</button>
\t\t\t\t\t</form>
\t\t\t</div>

\t \t\t<div class=\"col-lg-4\">
\t\t \t\t<h4>Our Address</h4>
\t\t \t\t<div class=\"hline\"></div>
\t\t \t\t\t<p>
\t\t \t\t\t\tSome Ave, 987,<br/>
\t\t \t\t\t\t23890, New York,<br/>
\t\t \t\t\t\tUnited States.<br/>
\t\t \t\t\t</p>
\t\t \t\t\t<p>
\t\t \t\t\t\tEmail: hello@solidtheme.com<br/>
\t\t \t\t\t\tTel: +34 8493-4893
\t\t \t\t\t</p>
\t\t \t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
\t \t\t</div>
\t \t</div>
\t </div>", "/home/ubuntu/workspace/themes/googgah-solid/pages/contact.htm", "");
    }
}
