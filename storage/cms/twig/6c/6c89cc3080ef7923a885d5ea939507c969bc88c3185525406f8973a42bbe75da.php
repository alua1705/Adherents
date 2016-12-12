<?php

/* /home/ubuntu/workspace/themes/googgah-solid/pages/single-post.htm */
class __TwigTemplate_316dfb7e3014cfc5d538e2efee73c15d60e8bc53260eb78564bec55aa32a7dce extends Twig_Template
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
\t BLOG CONTENT
\t ***************************************************************************************************************** -->

\t <div class=\"container mtb\">
\t \t<div class=\"row\">


\t \t\t<div class=\"col-lg-8\">

\t\t \t\t<p><img class=\"img-responsive\" src=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/post01.jpg");
        echo "\"></p>
\t\t \t\t<a href=\"single-post\"><h3 class=\"ctitle\">Time to change your apps.</h3></a>
\t\t \t\t<p><csmall>Posted: April 25, 2014.</csmall> | <csmall2>By: Admin - 3 Comments</csmall2></p>
\t\t \t\t<p><b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
\t\t \t\t<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
\t\t \t\t<p>Contrary to popular belief, <b>Lorem Ipsum is not simply random text</b>. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at <a href=\"#\">Hampden-Sydney College</a> in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
\t\t \t\t<p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>
\t\t \t\t<h4>Why do we use it?</h4>
\t\t \t\t<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
\t\t \t\t<blockquote>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</blockquote>
\t\t \t\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
\t\t \t\t<div class=\"spacing\"></div>
\t\t \t\t<h6>SHARE:</h6>
\t\t \t\t<p class=\"share\">
\t\t \t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t \t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t \t\t\t<a href=\"#\"><i class=\"fa fa-tumblr\"></i></a>
\t\t \t\t\t<a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
\t\t \t\t</p>

\t\t\t</div>

\t \t\t<div class=\"col-lg-4\">
\t\t \t\t<h4>Search</h4>
\t\t \t\t<div class=\"hline\"></div>
\t\t \t\t\t<p>
\t\t \t\t\t\t<br/>
\t\t \t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search something\">
\t\t \t\t\t</p>

\t\t \t\t<div class=\"spacing\"></div>

\t\t \t\t<h4>Categories</h4>
\t\t \t\t<div class=\"hline\"></div>
\t\t\t \t\t<p><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Wordpress</a> <span class=\"badge badge-theme pull-right\">9</span></p>
\t\t\t \t\t<p><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Photoshop</a> <span class=\"badge badge-theme pull-right\">3</span></p>
\t\t\t \t\t<p><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Web Design</a> <span class=\"badge badge-theme pull-right\">11</span></p>
\t\t\t \t\t<p><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Development</a> <span class=\"badge badge-theme pull-right\">5</span></p>
\t\t\t \t\t<p><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Tips & Tricks</a> <span class=\"badge badge-theme pull-right\">7</span></p>
\t\t\t \t\t<p><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Code Snippets</a> <span class=\"badge badge-theme pull-right\">12</span></p>

\t\t \t\t<div class=\"spacing\"></div>

\t\t \t\t<h4>Recent Posts</h4>
\t\t \t\t<div class=\"hline\"></div>
\t\t\t\t\t<ul class=\"popular-posts\">
\t\t                <li>
\t\t                    <a href=\"#\"><img src=\"";
        // line 60
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/thumb01.jpg");
        echo "\" alt=\"Popular Post\"></a>
\t\t                    <p><a href=\"#\">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
\t\t                    <em>Posted on 02/21/14</em>
\t\t                </li>
\t\t                <li>
\t\t                    <a href=\"#\"><img src=\"";
        // line 65
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/thumb02.jpg");
        echo "\" alt=\"Popular Post\"></a>
\t\t                    <p><a href=\"#\">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
\t\t                    <em>Posted on 03/01/14</em>
\t\t                <li>
\t\t                    <a href=\"#\"><img src=\"";
        // line 69
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/thumb03.jpg");
        echo "\" alt=\"Popular Post\"></a>
\t\t                    <p><a href=\"#\">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
\t\t                    <em>Posted on 05/16/14</em>
\t\t                </li>
\t\t                <li>
\t\t                    <a href=\"#\"><img src=\"";
        // line 74
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/thumb04.jpg");
        echo "\" alt=\"Popular Post\"></a>
\t\t                    <p><a href=\"#\">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
\t\t                    <em>Posted on 05/16/14</em>
\t\t                </li>
\t\t            </ul>

\t\t \t\t<div class=\"spacing\"></div>

\t\t \t\t<h4>Popular Tags</h4>
\t\t \t\t<div class=\"hline\"></div>
\t\t \t\t\t<p>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">Design</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">Wordpress</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">Flat</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">Modern</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">Wallpaper</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">HTML5</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">Pre-processor</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">Developer</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">Windows</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">Phothosop</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">UX</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">Interface</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">UI</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">Blog</a>
\t\t \t\t\t</p>
\t \t\t</div>
\t \t</div>
\t </div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/googgah-solid/pages/single-post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 74,  101 => 69,  94 => 65,  86 => 60,  36 => 13,  23 => 2,  19 => 1,);
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
\t BLOG CONTENT
\t ***************************************************************************************************************** -->

\t <div class=\"container mtb\">
\t \t<div class=\"row\">


\t \t\t<div class=\"col-lg-8\">

\t\t \t\t<p><img class=\"img-responsive\" src=\"{{ 'assets/images/post01.jpg'|theme }}\"></p>
\t\t \t\t<a href=\"single-post\"><h3 class=\"ctitle\">Time to change your apps.</h3></a>
\t\t \t\t<p><csmall>Posted: April 25, 2014.</csmall> | <csmall2>By: Admin - 3 Comments</csmall2></p>
\t\t \t\t<p><b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
\t\t \t\t<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
\t\t \t\t<p>Contrary to popular belief, <b>Lorem Ipsum is not simply random text</b>. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at <a href=\"#\">Hampden-Sydney College</a> in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
\t\t \t\t<p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>
\t\t \t\t<h4>Why do we use it?</h4>
\t\t \t\t<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
\t\t \t\t<blockquote>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</blockquote>
\t\t \t\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
\t\t \t\t<div class=\"spacing\"></div>
\t\t \t\t<h6>SHARE:</h6>
\t\t \t\t<p class=\"share\">
\t\t \t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t \t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t \t\t\t<a href=\"#\"><i class=\"fa fa-tumblr\"></i></a>
\t\t \t\t\t<a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
\t\t \t\t</p>

\t\t\t</div>

\t \t\t<div class=\"col-lg-4\">
\t\t \t\t<h4>Search</h4>
\t\t \t\t<div class=\"hline\"></div>
\t\t \t\t\t<p>
\t\t \t\t\t\t<br/>
\t\t \t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search something\">
\t\t \t\t\t</p>

\t\t \t\t<div class=\"spacing\"></div>

\t\t \t\t<h4>Categories</h4>
\t\t \t\t<div class=\"hline\"></div>
\t\t\t \t\t<p><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Wordpress</a> <span class=\"badge badge-theme pull-right\">9</span></p>
\t\t\t \t\t<p><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Photoshop</a> <span class=\"badge badge-theme pull-right\">3</span></p>
\t\t\t \t\t<p><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Web Design</a> <span class=\"badge badge-theme pull-right\">11</span></p>
\t\t\t \t\t<p><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Development</a> <span class=\"badge badge-theme pull-right\">5</span></p>
\t\t\t \t\t<p><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Tips & Tricks</a> <span class=\"badge badge-theme pull-right\">7</span></p>
\t\t\t \t\t<p><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Code Snippets</a> <span class=\"badge badge-theme pull-right\">12</span></p>

\t\t \t\t<div class=\"spacing\"></div>

\t\t \t\t<h4>Recent Posts</h4>
\t\t \t\t<div class=\"hline\"></div>
\t\t\t\t\t<ul class=\"popular-posts\">
\t\t                <li>
\t\t                    <a href=\"#\"><img src=\"{{ 'assets/images/thumb01.jpg'|theme }}\" alt=\"Popular Post\"></a>
\t\t                    <p><a href=\"#\">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
\t\t                    <em>Posted on 02/21/14</em>
\t\t                </li>
\t\t                <li>
\t\t                    <a href=\"#\"><img src=\"{{ 'assets/images/thumb02.jpg'|theme }}\" alt=\"Popular Post\"></a>
\t\t                    <p><a href=\"#\">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
\t\t                    <em>Posted on 03/01/14</em>
\t\t                <li>
\t\t                    <a href=\"#\"><img src=\"{{ 'assets/images/thumb03.jpg'|theme }}\" alt=\"Popular Post\"></a>
\t\t                    <p><a href=\"#\">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
\t\t                    <em>Posted on 05/16/14</em>
\t\t                </li>
\t\t                <li>
\t\t                    <a href=\"#\"><img src=\"{{ 'assets/images/thumb04.jpg'|theme }}\" alt=\"Popular Post\"></a>
\t\t                    <p><a href=\"#\">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
\t\t                    <em>Posted on 05/16/14</em>
\t\t                </li>
\t\t            </ul>

\t\t \t\t<div class=\"spacing\"></div>

\t\t \t\t<h4>Popular Tags</h4>
\t\t \t\t<div class=\"hline\"></div>
\t\t \t\t\t<p>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">Design</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">Wordpress</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">Flat</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">Modern</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">Wallpaper</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">HTML5</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">Pre-processor</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">Developer</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">Windows</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">Phothosop</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">UX</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">Interface</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">UI</a>
\t\t            \t<a class=\"btn btn-theme\" href=\"#\" role=\"button\">Blog</a>
\t\t \t\t\t</p>
\t \t\t</div>
\t \t</div>
\t </div>", "/home/ubuntu/workspace/themes/googgah-solid/pages/single-post.htm", "");
    }
}
