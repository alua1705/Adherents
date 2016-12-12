<?php

/* /home/ubuntu/workspace/themes/googgah-solid/pages/posts.htm */
class __TwigTemplate_d3ca7bb918f97e9cb76adc1f1854345b1ea93d15f9e9f8977a362eeba3c6ad2b extends Twig_Template
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
\t \t\t
\t \t
\t
           
            ";
        // line 15
        $context["post"] = $this->getAttribute((isset($context["blogPost2"]) ? $context["blogPost2"] : null), "post", array());
        // line 16
        echo "
<div class=\"content\">";
        // line 17
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content_html", array());
        echo "</div>

";
        // line 19
        if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), "count", array())) {
            // line 20
            echo "    <div class=\"featured-images text-center\">
         <img style=\"max-width: 100%\"  src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
            echo "\" alt=\"\">
         
        
    </div>
";
        }
        // line 26
        echo "
<p class=\"info\">
    Posted
    ";
        // line 29
        if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "categories", array()), "count", array())) {
            echo " in
        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 31
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 32
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    ";
        }
        // line 34
        echo "    on ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "published_at", array()), "M d, Y"), "html", null, true);
        echo "
</p>


\t\t\t </div>
\t\t\t \t\t<div class=\"col-lg-4\">
\t\t \t\t<h4>Поиск</h4>
\t\t \t\t<form action=\"";
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("search");
        echo "\" method=\"get\">
                <p><input name=\"q\" class=\"form-control\" type=\"text\" placeholder=\"Что вы ищете?\" autocomplete=\"off\"></p>
                <button class=\"btn btn-info\" type=\"submit\">Search</button>
            </form>
\t\t \t";
        // line 45
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("searchResults"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 46
        echo "\t\t \t

\t\t \t\t<div class=\"spacing\"></div>

\t\t \t\t<h4>Категории</h4>
\t\t \t\t<div class=\"hline\"></div>
\t\t \t\t";
        // line 52
        if ($this->getAttribute((isset($context["blogCategories"]) ? $context["blogCategories"] : null), "categories", array())) {
            // line 53
            echo "    
        ";
            // line 54
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['categories'] = $this->getAttribute(            // line 55
(isset($context["blogCategories"]) ? $context["blogCategories"] : null), "categories", array())            ;
            $context['__cms_partial_params']['currentCategorySlug'] = $this->getAttribute(            // line 56
(isset($context["blogCategories"]) ? $context["blogCategories"] : null), "currentCategorySlug", array())            ;
            echo $this->env->getExtension('CMS')->partialFunction((            // line 54
(isset($context["blogCategories"]) ? $context["blogCategories"] : null) . "::items")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 57
            echo "</a>
  
";
        }
        // line 60
        echo "
\t\t \t\t<div class=\"spacing\"></div>

\t\t \t\t<h4>Последние опубликованные записи</h4>
\t\t \t\t<div class=\"hline\"></div>
\t\t\t\t\t<ul class=\"popular-posts\">
\t\t\t\t\t";
        // line 66
        $context["posts"] = $this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "posts", array());
        // line 67
        echo "\t\t              \t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 68
            echo "\t\t                <li>
\t\t                    <a href=\"img-responsive\"><img src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 1, array(), "array"), "path", array()), "html", null, true);
            echo "\" alt=\"Popular Post\"></a>
\t\t                    <p><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["post"], "summary", array()), 0, 100), "html", null, true);
            echo "</a></p>
\t\t                    <em>";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "</em>
\t\t                </li>
\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "\t\t            </ul>

\t\t \t\t
\t \t\t</div>
\t \t</div>
\t </div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/googgah-solid/pages/posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 74,  190 => 71,  184 => 70,  180 => 69,  177 => 68,  172 => 67,  170 => 66,  162 => 60,  157 => 57,  154 => 54,  152 => 56,  150 => 55,  148 => 54,  145 => 53,  143 => 52,  135 => 46,  131 => 45,  124 => 41,  113 => 34,  110 => 33,  96 => 32,  87 => 31,  70 => 30,  66 => 29,  61 => 26,  53 => 21,  50 => 20,  48 => 19,  43 => 17,  40 => 16,  38 => 15,  23 => 2,  19 => 1,);
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
\t \t\t
\t \t
\t
           
            {% set post = blogPost2.post %}

<div class=\"content\">{{ post.content_html|raw }}</div>

{% if post.featured_images.count %}
    <div class=\"featured-images text-center\">
         <img style=\"max-width: 100%\"  src=\"{{post.featured_images[0].path}}\" alt=\"\">
         
        
    </div>
{% endif %}

<p class=\"info\">
    Posted
    {% if post.categories.count %} in
        {% for category in post.categories %}
            <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
        {% endfor %}
    {% endif %}
    on {{ post.published_at|date('M d, Y') }}
</p>


\t\t\t </div>
\t\t\t \t\t<div class=\"col-lg-4\">
\t\t \t\t<h4>Поиск</h4>
\t\t \t\t<form action=\"{{ 'search' | page }}\" method=\"get\">
                <p><input name=\"q\" class=\"form-control\" type=\"text\" placeholder=\"Что вы ищете?\" autocomplete=\"off\"></p>
                <button class=\"btn btn-info\" type=\"submit\">Search</button>
            </form>
\t\t \t{% component 'searchResults' %}
\t\t \t

\t\t \t\t<div class=\"spacing\"></div>

\t\t \t\t<h4>Категории</h4>
\t\t \t\t<div class=\"hline\"></div>
\t\t \t\t{% if blogCategories.categories %}
    
        {% partial blogCategories ~ \"::items\"
            categories = blogCategories.categories
            currentCategorySlug = blogCategories.currentCategorySlug
        %}</a>
  
{% endif %}

\t\t \t\t<div class=\"spacing\"></div>

\t\t \t\t<h4>Последние опубликованные записи</h4>
\t\t \t\t<div class=\"hline\"></div>
\t\t\t\t\t<ul class=\"popular-posts\">
\t\t\t\t\t{% set posts = blogPosts.posts %}
\t\t              \t{% for post in posts %}
\t\t                <li>
\t\t                    <a href=\"img-responsive\"><img src=\"{{post.featured_images[1].path}}\" alt=\"Popular Post\"></a>
\t\t                    <p><a href=\"{{ post.slug }}\">{{ post.summary|slice(0,100) }}</a></p>
\t\t                    <em>{{ post.published_at|date('M d, Y') }}</em>
\t\t                </li>
\t\t                {%endfor%}
\t\t            </ul>

\t\t \t\t
\t \t\t</div>
\t \t</div>
\t </div>", "/home/ubuntu/workspace/themes/googgah-solid/pages/posts.htm", "");
    }
}
