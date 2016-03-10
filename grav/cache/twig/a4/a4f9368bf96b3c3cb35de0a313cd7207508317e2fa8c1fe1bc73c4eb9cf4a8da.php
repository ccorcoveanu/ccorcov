<?php

/* partials/base.html.twig */
class __TwigTemplate_2702ef384defbcc3525124a61d73d3891665967ce6ac96c23f4fa8c1ebf35cfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fixed_top' => array($this, 'block_fixed_top'),
            'header' => array($this, 'block_header'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'homepage' => array($this, 'block_homepage'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
<head>

    ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 26
        echo "</head>
<body id=\"top\" class=\"";
        // line 27
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
<div class=\"overlay\" id=\"body--overlay\"></div>
<div class=\"modal__container\">
    <div class=\"modal__outer\">
        <div class=\"modal__inner\">

        </div>
    </div>
</div>
<div id=\"sb-site\">

    ";
        // line 38
        $this->displayBlock('fixed_top', $context, $blocks);
        // line 75
        echo "
    ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 116
        echo "

</div>


";
        // line 121
        $this->displayBlock('footer', $context, $blocks);
        // line 134
        echo "
";
        // line 135
        $this->displayBlock('javascripts', $context, $blocks);
        // line 139
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
</body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "
        <title>";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>

        <meta http-equiv=\"content-language\" content=\"en\">
        ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">

        <link rel=\"preconnect\" href=\"//192.168.7.7\"/>

        <link rel=\"canonical\" href=\"";
        // line 17
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />
        ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://compiled/css/font-awesome.min.css", 1 => 101), "method");
        // line 20
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://compiled/css/all.min.css", 1 => 102), "method");
        // line 21
        echo "
        ";
    }

    // line 38
    public function block_fixed_top($context, array $blocks = array())
    {
        // line 39
        echo "        <div id=\"fixed_top__container\">
            ";
        // line 40
        $this->displayBlock('header', $context, $blocks);
        // line 57
        echo "
            ";
        // line 58
        $this->displayBlock('navbar', $context, $blocks);
        // line 73
        echo "        </div>
    ";
    }

    // line 40
    public function block_header($context, array $blocks = array())
    {
        // line 41
        echo "                <header id=\"header\" class=\"clearfix\">
                    <div class=\"content__container clearfix\">
                        <div id=\"logo__container\">
                            <div id=\"logo__circle\">
                                <div id=\"logo__letter\"></div>
                            </div>
                        </div>
                        <div class=\"tagline\">Write better code with each project. This is the true developer's goal!</div>
                        <div id=\"js-hamburger\" class=\"hamburger\">
                            <div class=\"hamburger--one\"></div>
                            <div class=\"hamburger--two\"></div>
                            <div class=\"hamburger--three\"></div>
                        </div>
                    </div>
                </header>
            ";
    }

    // line 58
    public function block_navbar($context, array $blocks = array())
    {
        // line 59
        echo "                <nav id=\"navigation\" class=\"navbar\">
                    <ul id=\"menu--list\" class=\"menu content__container clearfix\">
                        <li class=\"items-3 about-me\">
                            <i class=\"fa fa-user-secret\"></i><br/>About me
                        </li>
                        <li class=\"items-3 projects\">
                            <i class=\"fa fa-code\"></i><br/>Projects
                        </li>
                        <li class=\"items-3 blog\">
                            <i class=\"fa fa-rss\"></i><br/>Blog
                        </li>
                    </ul>
                </nav>
            ";
    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        // line 77
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " content__container\">

            ";
        // line 79
        $this->displayBlock('homepage', $context, $blocks);
        // line 112
        echo "
            ";
        // line 113
        $this->displayBlock('content', $context, $blocks);
        // line 114
        echo "        </section>
    ";
    }

    // line 79
    public function block_homepage($context, array $blocks = array())
    {
        // line 80
        echo "
                <div class=\"home__content\">
                    <div class=\"images__container\">
                            <span class=\"unflip__container\">
                                <span class=\"flipper__container\">
                                    <span class=\"front\">
                                        <img id=\"about-me__image\" class=\"user-pic\" data-src=\"";
        // line 86
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://img/me1.jpg");
        echo "\" alt=\"\"/>
                                    </span>
                                    <span class=\"back\">
                                        <img id=\"about-me__image\" class=\"user-pic\" data-src=\"";
        // line 89
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://img/zce1.jpg");
        echo "\" alt=\"\"/>
                                    </span>
                                </span>
                            </span>
                    </div>

                    <pre class=\"presentation__text language-js\"
                    ><span class=\"token comment\"
                        >// Hello there. Check out below where you are and who I am: </span
                        ><br/>console<span class=\"token punctuation\">.</span><span class=\"token function\">log</span><span class=\"token punctuation\">(</span><br
                        />    document<span class=\"token punctuation\">.</span><span class=\"token function\">getElementById</span><span class=\"token punctuation\">(</span><span class=\"token string\">'Cristi_Corcoveanu'</span><span class=\"token punctuation\">)</span
                        ><br/><span class=\"token punctuation\">);</span></pre>


                    <div class=\"detailed__info\">
                        <p>As you probably noticed, this blog is focused on web developing. The main reason why I started doing this is to keep track of my own work and studies. I will try to add a post
                        each time I will run into a problem and find a simple and elegant solution to that problem. Hopefully this will help you also, or at least provide interesting reads.</p>
                        <p>Stick arround if you're interested in <a href=\"javascript:;\">PHP frameworks</a>, <a href=\"javascript:;\">Node.js</a> server applications, <a href=\"javascript:;\">Angular</a> or anything web related.</p>
                        <p>Also if you are looking for help and you think I can help you or your team, don't hesitate to contact me. Just click on my <a id=\"face-trigger\" href=\"javascript:;\">face</a> :)</p>
                    </div>
                </div>

            ";
    }

    // line 113
    public function block_content($context, array $blocks = array())
    {
    }

    // line 121
    public function block_footer($context, array $blocks = array())
    {
        // line 122
        echo "    <footer id=\"footer\">
        <img class=\"footer__image\" data-src=\"";
        // line 123
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://img/code1.jpg");
        echo "\" alt=\"\" />
        <div id=\"footer__overlayed\">

        </div>

        <div class=\"footer__content\">
            <i class=\"fa fa-facebook pulse2\"></i>
            <i class=\"fa fa-github pulse2\"></i>
        </div>
    </footer>
";
    }

    // line 135
    public function block_javascripts($context, array $blocks = array())
    {
        // line 136
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 102), "method");
        // line 137
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://compiled/js/app.min.js", 1 => 101), "method");
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 137,  295 => 136,  292 => 135,  277 => 123,  274 => 122,  271 => 121,  266 => 113,  239 => 89,  233 => 86,  225 => 80,  222 => 79,  217 => 114,  215 => 113,  212 => 112,  210 => 79,  204 => 77,  201 => 76,  184 => 59,  181 => 58,  162 => 41,  159 => 40,  154 => 73,  152 => 58,  149 => 57,  147 => 40,  144 => 39,  141 => 38,  136 => 21,  133 => 20,  130 => 19,  127 => 18,  119 => 23,  117 => 18,  113 => 17,  106 => 12,  104 => 11,  94 => 8,  91 => 7,  88 => 6,  80 => 139,  78 => 135,  75 => 134,  73 => 121,  66 => 116,  64 => 76,  61 => 75,  59 => 38,  45 => 27,  42 => 26,  40 => 6,  34 => 3,  31 => 2,  29 => 1,);
    }
}
/* {% set theme_config = attribute(config.themes, config.system.pages.theme) %}*/
/* <!DOCTYPE html>*/
/* <html lang="{{ grav.language.getActive ?: theme_config.default_lang }}">*/
/* <head>*/
/* */
/*     {% block head %}*/
/* */
/*         <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>*/
/* */
/*         <meta http-equiv="content-language" content="en">*/
/*         {% include 'partials/metadata.html.twig' %}*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*         <meta http-equiv="content-type" content="text/html; charset=utf-8">*/
/* */
/*         <link rel="preconnect" href="//192.168.7.7"/>*/
/* */
/*         <link rel="canonical" href="{{ page.url(true, true) }}" />*/
/*         {% block stylesheets %}*/
/*             {% do assets.addCss('theme://compiled/css/font-awesome.min.css',101) %}*/
/*             {% do assets.addCss('theme://compiled/css/all.min.css', 102) %}*/
/* */
/*         {% endblock %}*/
/*         {{ assets.css() }}*/
/* */
/*     {% endblock head%}*/
/* </head>*/
/* <body id="top" class="{{ page.header.body_classes }}">*/
/* <div class="overlay" id="body--overlay"></div>*/
/* <div class="modal__container">*/
/*     <div class="modal__outer">*/
/*         <div class="modal__inner">*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div id="sb-site">*/
/* */
/*     {% block fixed_top %}*/
/*         <div id="fixed_top__container">*/
/*             {% block header %}*/
/*                 <header id="header" class="clearfix">*/
/*                     <div class="content__container clearfix">*/
/*                         <div id="logo__container">*/
/*                             <div id="logo__circle">*/
/*                                 <div id="logo__letter"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tagline">Write better code with each project. This is the true developer's goal!</div>*/
/*                         <div id="js-hamburger" class="hamburger">*/
/*                             <div class="hamburger--one"></div>*/
/*                             <div class="hamburger--two"></div>*/
/*                             <div class="hamburger--three"></div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </header>*/
/*             {% endblock %}*/
/* */
/*             {% block navbar %}*/
/*                 <nav id="navigation" class="navbar">*/
/*                     <ul id="menu--list" class="menu content__container clearfix">*/
/*                         <li class="items-3 about-me">*/
/*                             <i class="fa fa-user-secret"></i><br/>About me*/
/*                         </li>*/
/*                         <li class="items-3 projects">*/
/*                             <i class="fa fa-code"></i><br/>Projects*/
/*                         </li>*/
/*                         <li class="items-3 blog">*/
/*                             <i class="fa fa-rss"></i><br/>Blog*/
/*                         </li>*/
/*                     </ul>*/
/*                 </nav>*/
/*             {% endblock %}*/
/*         </div>*/
/*     {% endblock %}*/
/* */
/*     {% block body %}*/
/*         <section id="body" class="{{ class }} content__container">*/
/* */
/*             {% block homepage %}*/
/* */
/*                 <div class="home__content">*/
/*                     <div class="images__container">*/
/*                             <span class="unflip__container">*/
/*                                 <span class="flipper__container">*/
/*                                     <span class="front">*/
/*                                         <img id="about-me__image" class="user-pic" data-src="{{ url('theme://img/me1.jpg') }}" alt=""/>*/
/*                                     </span>*/
/*                                     <span class="back">*/
/*                                         <img id="about-me__image" class="user-pic" data-src="{{ url('theme://img/zce1.jpg') }}" alt=""/>*/
/*                                     </span>*/
/*                                 </span>*/
/*                             </span>*/
/*                     </div>*/
/* */
/*                     <pre class="presentation__text language-js"*/
/*                     ><span class="token comment"*/
/*                         >// Hello there. Check out below where you are and who I am: </span*/
/*                         ><br/>console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span><br*/
/*                         />    document<span class="token punctuation">.</span><span class="token function">getElementById</span><span class="token punctuation">(</span><span class="token string">'Cristi_Corcoveanu'</span><span class="token punctuation">)</span*/
/*                         ><br/><span class="token punctuation">);</span></pre>*/
/* */
/* */
/*                     <div class="detailed__info">*/
/*                         <p>As you probably noticed, this blog is focused on web developing. The main reason why I started doing this is to keep track of my own work and studies. I will try to add a post*/
/*                         each time I will run into a problem and find a simple and elegant solution to that problem. Hopefully this will help you also, or at least provide interesting reads.</p>*/
/*                         <p>Stick arround if you're interested in <a href="javascript:;">PHP frameworks</a>, <a href="javascript:;">Node.js</a> server applications, <a href="javascript:;">Angular</a> or anything web related.</p>*/
/*                         <p>Also if you are looking for help and you think I can help you or your team, don't hesitate to contact me. Just click on my <a id="face-trigger" href="javascript:;">face</a> :)</p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             {% endblock %}*/
/* */
/*             {% block content %}{% endblock %}*/
/*         </section>*/
/*     {% endblock %}*/
/* */
/* */
/* </div>*/
/* */
/* */
/* {% block footer %}*/
/*     <footer id="footer">*/
/*         <img class="footer__image" data-src="{{ url('theme://img/code1.jpg') }}" alt="" />*/
/*         <div id="footer__overlayed">*/
/* */
/*         </div>*/
/* */
/*         <div class="footer__content">*/
/*             <i class="fa fa-facebook pulse2"></i>*/
/*             <i class="fa fa-github pulse2"></i>*/
/*         </div>*/
/*     </footer>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {% do assets.addJs('jquery',102) %}*/
/*     {% do assets.addJs('theme://compiled/js/app.min.js',101) %}*/
/* {% endblock %}*/
/* {{ assets.js() }}*/
/* </body>*/
/* </html>*/
/* */
