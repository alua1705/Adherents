<?php

/* /home/ubuntu/workspace/themes/googgah-solid/pages/categories.htm */
class __TwigTemplate_e084de2677cdf8a25cac999aa037f9ab888dbbaef72ac7b8212b3354087a83a9 extends Twig_Template
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
\t \t\t
\t \t\t";
        // line 13
        $context["posts"] = $this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "posts", array());
        // line 14
        echo "
<ul class=\"post-list\">
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 17
            echo "        <p><img class=\"img-responsive\" src=\" ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
            echo "\" ></p>
        \t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\"><h3 class=\"ctitle\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h3></a>
        
           
            <p class=\"info\">
                Posted
                ";
            // line 23
            if ($this->getAttribute($this->getAttribute($context["post"], "categories", array()), "count", array())) {
                echo " in ";
            }
            // line 24
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "categories", array()));
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
                // line 25
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 26
                echo "                ";
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
            // line 27
            echo "                <p><csmall>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "</csmall> | <csmall2>By: Admin - 3 Comments</csmall2></p>

            
            </p>
            <p><a href='";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "'>[Read More]</a></p>
            <!--  <p class=\"excerpt\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "summary", array()), "html", null, true);
            echo "</p>  -->
\t\t \t\t<div class=\"hline\"></div>

\t\t \t\t<div class=\"spacing\"></div>
            

          
        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, (isset($context["noPostsMessage"]) ? $context["noPostsMessage"] : null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</ul>

";
        // line 45
        if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array()) > 1)) {
            // line 46
            echo "    <ul class=\"pagination\">
        ";
            // line 47
            if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) > 1)) {
                // line 48
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 50
            echo "
        ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 52
                echo "            <li class=\"";
                echo ((($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 53
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "
        ";
            // line 57
            if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array()) > $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()))) {
                // line 58
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 60
            echo "    </ul>
";
        }
        // line 62
        echo "\t \t\t    
\t\t \t\t

\t\t \t

\t\t \t

\t\t\t</div>


\t \t\t<div class=\"col-lg-4\">
\t\t \t\t<h4>Поиск</h4>
\t\t \t\t<form action=\"";
        // line 74
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("search");
        echo "\" method=\"get\">
                <p><input name=\"q\" class=\"form-control\" type=\"text\" placeholder=\"Что вы ищете?\" autocomplete=\"off\"></p>
                <button class=\"btn btn-info\" type=\"submit\">Search</button>
            </form>
\t\t \t";
        // line 78
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("searchResults"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 79
        echo "\t\t \t

\t\t \t\t<div class=\"spacing\"></div>

\t\t \t\t<h4>Категории</h4>
\t\t \t\t<div class=\"hline\"></div>
\t\t \t\t";
        // line 85
        if ($this->getAttribute((isset($context["blogCategories"]) ? $context["blogCategories"] : null), "categories", array())) {
            // line 86
            echo "    
        ";
            // line 87
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['categories'] = $this->getAttribute(            // line 88
(isset($context["blogCategories"]) ? $context["blogCategories"] : null), "categories", array())            ;
            $context['__cms_partial_params']['currentCategorySlug'] = $this->getAttribute(            // line 89
(isset($context["blogCategories"]) ? $context["blogCategories"] : null), "currentCategorySlug", array())            ;
            echo $this->env->getExtension('CMS')->partialFunction((            // line 87
(isset($context["blogCategories"]) ? $context["blogCategories"] : null) . "::items")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 90
            echo "</a>
  
";
        }
        // line 93
        echo "
\t\t\t \t\t

\t\t \t\t<div class=\"spacing\"></div>

\t\t \t\t<h4>Последние опубликованные записи</h4>
\t\t \t\t<div class=\"hline\"></div>
\t\t\t\t\t<ul class=\"popular-posts\">
\t\t\t\t\t";
        // line 101
        $context["posts"] = $this->getAttribute((isset($context["blogPosts2"]) ? $context["blogPosts2"] : null), "posts", array());
        // line 102
        echo "\t\t               \t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 103
            echo "\t\t                <li>
\t\t                    <a href=\"#\" ><img class='img-responsive' src=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 1, array(), "array"), "path", array()), "html", null, true);
            echo "\" alt=\"Popular Post\"></a>
\t\t                   
\t\t                   
\t\t                    <p><a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["post"], "summary", array()), 0, 100), "html", null, true);
            echo "</a></p>
\t\t                    <em>";
            // line 108
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "</em>
\t\t                </li>
\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "\t\t            </ul>

\t\t \t\t</div>
\t \t</div>
\t </div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/googgah-solid/pages/categories.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 111,  281 => 108,  275 => 107,  269 => 104,  266 => 103,  261 => 102,  259 => 101,  249 => 93,  244 => 90,  241 => 87,  239 => 89,  237 => 88,  235 => 87,  232 => 86,  230 => 85,  222 => 79,  218 => 78,  211 => 74,  197 => 62,  193 => 60,  187 => 58,  185 => 57,  182 => 56,  171 => 53,  166 => 52,  162 => 51,  159 => 50,  153 => 48,  151 => 47,  148 => 46,  146 => 45,  142 => 43,  133 => 41,  119 => 32,  115 => 31,  107 => 27,  93 => 26,  84 => 25,  66 => 24,  62 => 23,  52 => 18,  47 => 17,  42 => 16,  38 => 14,  36 => 13,  23 => 2,  19 => 1,);
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
\t \t\t
\t \t\t{% set posts = blogPosts.posts %}

<ul class=\"post-list\">
    {% for post in posts %}
        <p><img class=\"img-responsive\" src=\" {{post.featured_images[0].path}}\" ></p>
        \t<a href=\"{{ post.url }}\"><h3 class=\"ctitle\">{{ post.title }}</h3></a>
        
           
            <p class=\"info\">
                Posted
                {% if post.categories.count %} in {% endif %}
                {% for category in post.categories %}
                    <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
                {% endfor %}
                <p><csmall>{{ post.published_at|date('M d, Y') }}</csmall> | <csmall2>By: Admin - 3 Comments</csmall2></p>

            
            </p>
            <p><a href='{{ post.url }}'>[Read More]</a></p>
            <!--  <p class=\"excerpt\">{{ post.summary }}</p>  -->
\t\t \t\t<div class=\"hline\"></div>

\t\t \t\t<div class=\"spacing\"></div>
            

          
        </li>
    {% else %}
        <li class=\"no-data\">{{ noPostsMessage }}</li>
    {% endfor %}
</ul>

{% if posts.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if posts.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..posts.lastPage %}
            <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if posts.lastPage > posts.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}
\t \t\t    
\t\t \t\t

\t\t \t

\t\t \t

\t\t\t</div>


\t \t\t<div class=\"col-lg-4\">
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

\t\t\t \t\t

\t\t \t\t<div class=\"spacing\"></div>

\t\t \t\t<h4>Последние опубликованные записи</h4>
\t\t \t\t<div class=\"hline\"></div>
\t\t\t\t\t<ul class=\"popular-posts\">
\t\t\t\t\t{% set posts = blogPosts2.posts %}
\t\t               \t{% for post in posts %}
\t\t                <li>
\t\t                    <a href=\"#\" ><img class='img-responsive' src=\"{{post.featured_images[1].path}}\" alt=\"Popular Post\"></a>
\t\t                   
\t\t                   
\t\t                    <p><a href=\"{{ post.slug }}\">{{ post.summary|slice(0,100) }}</a></p>
\t\t                    <em>{{ post.published_at|date('M d, Y') }}</em>
\t\t                </li>
\t\t                {%endfor%}
\t\t            </ul>

\t\t \t\t</div>
\t \t</div>
\t </div>", "/home/ubuntu/workspace/themes/googgah-solid/pages/categories.htm", "");
    }
}
