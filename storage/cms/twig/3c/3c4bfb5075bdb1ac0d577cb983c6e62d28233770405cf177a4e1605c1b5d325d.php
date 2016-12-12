<?php

/* /home/ubuntu/workspace/themes/googgah-solid/layouts/default.htm */
class __TwigTemplate_2c4972a5dec37ecf82ebf664859636cacb674465d6a00e0bd8806d6c5628f4ba extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\">

    <title>SOLID - Bootstrap 3 Theme</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap.css");
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/font-awesome.min.css");
        echo "\" rel=\"stylesheet\">

</head>
<body>

    <!-- Fixed navbar -->
    <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"/\"></a>
            </div>
            <div class=\"navbar-collapse collapse navbar-right\">
                <ul class=\"nav navbar-nav\">
                    <li ";
        // line 37
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
            echo "class=\"active\"";
        }
        echo ">
                        <a href=\"/\">Главная</a>
                    </li>
                    <li ";
        // line 40
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "about")) {
            echo "class=\"active\"";
        }
        echo ">
                        <a href=\"";
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\">О нас</a>
                    </li>
                    <li ";
        // line 43
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "contact")) {
            echo "class=\"active\"";
        }
        echo ">
                        <a href=\"";
        // line 44
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
        echo "\">Контакты</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </div>

    ";
        // line 52
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 53
        echo "
    <!-- FOOTER -->
    <div id=\"footerwrap\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <h4>О нас</h4>
                    <div class=\"hline-w\"></div>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                </div>
                <div class=\"col-lg-4\">
                    <h4>Social Links</h4>
                    <div class=\"hline-w\"></div>
                    <p>
                        <a href=\"#\"> <i class=\"fa fa-dribbble\"></i>
                        </a>
                        <a href=\"#\"> <i class=\"fa fa-facebook\"></i>
                        </a>
                        <a href=\"#\">
                            <i class=\"fa fa-twitter\"></i>
                        </a>
                        <a href=\"#\">
                            <i class=\"fa fa-instagram\"></i>
                        </a>
                        <a href=\"#\">
                            <i class=\"fa fa-tumblr\"></i>
                        </a>
                    </p>
                </div>
                <div class=\"col-lg-4\">
                    <h4>Our Bunker</h4>
                    <div class=\"hline-w\"></div>
                    <p>
                        Some Ave, 987,
                        <br/>
                        23890, New York,
                        <br/>
                        United States.
                        <br/>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <!-- js -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script src=\"";
        // line 103
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
    <script src=\"";
        // line 104
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/retina-1.1.0.js");
        echo "\"></script>
    <script src=\"";
        // line 105
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.hoverdir.js");
        echo "\"></script>
    <script src=\"";
        // line 106
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.hoverex.min.js");
        echo "\"></script>
    <script src=\"";
        // line 107
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.prettyPhoto.js");
        echo "\"></script>
    <script src=\"";
        // line 108
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.isotope.min.js");
        echo "\"></script>
    <script src=\"";
        // line 109
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/custom.js");
        echo "\"></script>

    ";
        // line 111
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 112
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/googgah-solid/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 112,  188 => 111,  183 => 109,  179 => 108,  175 => 107,  171 => 106,  167 => 105,  163 => 104,  159 => 103,  107 => 53,  105 => 52,  94 => 44,  88 => 43,  83 => 41,  77 => 40,  69 => 37,  47 => 18,  43 => 17,  37 => 14,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"{{ 'assets/images/october.png'|theme }}\">

    <title>SOLID - Bootstrap 3 Theme</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{ 'assets/css/bootstrap.css'|theme }}\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"{{ 'assets/css/style.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/font-awesome.min.css'|theme }}\" rel=\"stylesheet\">

</head>
<body>

    <!-- Fixed navbar -->
    <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"/\"></a>
            </div>
            <div class=\"navbar-collapse collapse navbar-right\">
                <ul class=\"nav navbar-nav\">
                    <li {% if this.page.id == 'home' %}class=\"active\"{% endif %}>
                        <a href=\"/\">Главная</a>
                    </li>
                    <li {% if this.page.id == 'about' %}class=\"active\"{% endif %}>
                        <a href=\"{{'about'|page}}\">О нас</a>
                    </li>
                    <li {% if this.page.id == 'contact' %}class=\"active\"{% endif %}>
                        <a href=\"{{'contact'|page}}\">Контакты</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </div>

    {% page %}

    <!-- FOOTER -->
    <div id=\"footerwrap\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <h4>О нас</h4>
                    <div class=\"hline-w\"></div>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                </div>
                <div class=\"col-lg-4\">
                    <h4>Social Links</h4>
                    <div class=\"hline-w\"></div>
                    <p>
                        <a href=\"#\"> <i class=\"fa fa-dribbble\"></i>
                        </a>
                        <a href=\"#\"> <i class=\"fa fa-facebook\"></i>
                        </a>
                        <a href=\"#\">
                            <i class=\"fa fa-twitter\"></i>
                        </a>
                        <a href=\"#\">
                            <i class=\"fa fa-instagram\"></i>
                        </a>
                        <a href=\"#\">
                            <i class=\"fa fa-tumblr\"></i>
                        </a>
                    </p>
                </div>
                <div class=\"col-lg-4\">
                    <h4>Our Bunker</h4>
                    <div class=\"hline-w\"></div>
                    <p>
                        Some Ave, 987,
                        <br/>
                        23890, New York,
                        <br/>
                        United States.
                        <br/>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <!-- js -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/retina-1.1.0.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery.hoverdir.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery.hoverex.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery.prettyPhoto.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery.isotope.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/custom.js'|theme }}\"></script>

    {% scripts %}

</body>
</html>", "/home/ubuntu/workspace/themes/googgah-solid/layouts/default.htm", "");
    }
}
