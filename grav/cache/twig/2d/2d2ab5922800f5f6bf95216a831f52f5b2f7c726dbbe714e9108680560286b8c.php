<?php

/* themes.html.twig */
class __TwigTemplate_df5c488a2bc612cc8ed189e42a3a736bf51b9becd4aa5026892dc4368622f071 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "themes.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) {
            // line 4
            $context["installing"] = (is_string($__internal_860191089158846736649b0d89af788881181fd3ffe4e50ba1a1491e57ca9211 = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) && is_string($__internal_656f3fe669c1c2a9d2cac31f9b30419c5b31e4de1dd464aeaba58f0d07150e4b = "install") && ('' === $__internal_656f3fe669c1c2a9d2cac31f9b30419c5b31e4de1dd464aeaba58f0d07150e4b || 0 === strpos($__internal_860191089158846736649b0d89af788881181fd3ffe4e50ba1a1491e57ca9211, $__internal_656f3fe669c1c2a9d2cac31f9b30419c5b31e4de1dd464aeaba58f0d07150e4b)));
            // line 5
            $context["installed"] = true;
            // line 8
            $context["package"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "themes", array(0 => true), "method"), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), array(), "array");
            // line 9
            if ( !(isset($context["package"]) ? $context["package"] : null)) {
                // line 10
                $context["package"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "themes", array(0 => false), "method"), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), array(), "array");
                // line 11
                $context["installed"] = false;
            }
            // line 14
            $context["theme"] = $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "toArray", array(), "method");
            // line 15
            $context["title"] = (($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEME") . ": ") . twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name", array())));
        }
        // line 19
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 21
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/codemirror/codemirror.css")), "method");
        // line 22
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/codemirror-compressed.js")), "method");
        // line 27
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/mdeditor.js")), "method");
        // line 28
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
    }

    // line 32
    public function block_titlebar($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        if (( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
            // line 34
            echo "        <div class=\"button-bar\">
        ";
            // line 35
            if ((isset($context["installing"]) ? $context["installing"] : null)) {
                // line 36
                echo "            <a class=\"button\" href=\"";
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/themes\"><i class=\"fa fa-reply\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
                echo "</a>
        ";
            } else {
                // line 38
                echo "            <a class=\"button\" href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/\"><i class=\"fa fa-reply\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
                echo "</a>
            <a class=\"button\" href=\"";
                // line 39
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/themes/install\"><i class=\"fa fa-plus\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD");
                echo "</a>
            ";
                // line 40
                if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.maintenance", 1 => "admin.super"))) {
                    // line 41
                    echo "                <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> ";
                    echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CHECK_FOR_UPDATES");
                    echo "</button>
            ";
                }
                // line 43
                echo "        ";
            }
            // line 44
            echo "        </div>
        <h1><i class=\"fa fa-fw fa-tint\"></i> ";
            // line 45
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEMES");
            echo "</h1>
    ";
        } else {
            // line 47
            echo "        ";
            if ((isset($context["installed"]) ? $context["installed"] : null)) {
                // line 48
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 49
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/themes\"><i class=\"fa fa-arrow-left\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK_TO_THEMES");
                echo "</a>
            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
                // line 50
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE");
                echo "</button>
        </div>
        ";
            } else {
                // line 53
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 54
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/themes/install\"><i class=\"fa fa-arrow-left\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK_TO_THEMES");
                echo "</a>
        </div>
        ";
            }
            // line 57
            echo "        <h1><i class=\"fa fa-fw fa-tint\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEME");
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name", array()));
            echo "</h1>
    ";
        }
    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
        // line 62
        echo "
    <div class=\"gpm gpm-themes\">

        ";
        // line 65
        $this->loadTemplate("partials/messages.html.twig", "themes.html.twig", 65)->display($context);
        // line 66
        echo "
        ";
        // line 67
        if (( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
            // line 68
            echo "            ";
            $this->loadTemplate("partials/themes-list.html.twig", "themes.html.twig", 68)->display($context);
            // line 69
            echo "        ";
        } else {
            // line 70
            echo "            ";
            $this->loadTemplate("partials/themes-details.html.twig", "themes.html.twig", 70)->display($context);
            // line 71
            echo "        ";
        }
        // line 72
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "themes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 72,  198 => 71,  195 => 70,  192 => 69,  189 => 68,  187 => 67,  184 => 66,  182 => 65,  177 => 62,  174 => 61,  164 => 57,  156 => 54,  153 => 53,  147 => 50,  141 => 49,  138 => 48,  135 => 47,  130 => 45,  127 => 44,  124 => 43,  118 => 41,  116 => 40,  110 => 39,  103 => 38,  95 => 36,  93 => 35,  90 => 34,  87 => 33,  84 => 32,  77 => 28,  74 => 27,  71 => 26,  68 => 25,  61 => 22,  58 => 21,  55 => 20,  51 => 1,  48 => 19,  45 => 15,  43 => 14,  40 => 11,  38 => 10,  36 => 9,  34 => 8,  32 => 5,  30 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% if admin.route %}*/
/*     {% set installing = admin.route starts with 'install' %}*/
/*     {% set installed = true %}*/
/* */
/*     {# Try installed packages first, then remote #}*/
/*     {% set package = admin.themes(true)[admin.route] %}*/
/*     {% if (not package) %}*/
/*         {% set package = admin.themes(false)[admin.route] %}*/
/*         {% set installed = false %}*/
/*     {% endif %}*/
/* */
/*     {% set theme = package.toArray() %}*/
/*     {% set title = "PLUGIN_ADMIN.THEME"|tu ~ ": " ~ theme.name|e %}*/
/* */
/* {% endif %}*/
/* */
/* {% if admin.route or installing %}*/
/*     {% block stylesheets %}*/
/*         {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* */
/*     {% block javascripts %}*/
/*         {% do assets.addJs(theme_url~'/js/codemirror-compressed.js') %}*/
/*         {% do assets.addJs(theme_url~'/js/mdeditor.js') %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endif %}*/
/* */
/* {% block titlebar %}*/
/*     {% if not admin.route or installing %}*/
/*         <div class="button-bar">*/
/*         {% if (installing) %}*/
/*             <a class="button" href="{{ base_url_relative }}/themes"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*         {% else %}*/
/*             <a class="button" href="{{ base_url }}/"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*             <a class="button" href="{{ base_url_relative }}/themes/install"><i class="fa fa-plus"></i> {{ "PLUGIN_ADMIN.ADD"|tu }}</a>*/
/*             {% if authorize(['admin.maintenance', 'admin.super']) %}*/
/*                 <button data-gpm-checkupdates="" class="button"><i class="fa fa-refresh"></i> {{ "PLUGIN_ADMIN.CHECK_FOR_UPDATES"|tu }}</button>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         </div>*/
/*         <h1><i class="fa fa-fw fa-tint"></i> {{ "PLUGIN_ADMIN.THEMES"|tu }}</h1>*/
/*     {% else %}*/
/*         {% if (installed) %}*/
/*         <div class="button-bar">*/
/*             <a class="button" href="{{ base_url_relative }}/themes"><i class="fa fa-arrow-left"></i> {{ "PLUGIN_ADMIN.BACK_TO_THEMES"|tu }}</a>*/
/*             <button class="button" type="submit" name="task" value="save" form="blueprints"><i class="fa fa-check"></i> {{ "PLUGIN_ADMIN.SAVE"|tu }}</button>*/
/*         </div>*/
/*         {% else %}*/
/*         <div class="button-bar">*/
/*             <a class="button" href="{{ base_url_relative }}/themes/install"><i class="fa fa-arrow-left"></i> {{ "PLUGIN_ADMIN.BACK_TO_THEMES"|tu }}</a>*/
/*         </div>*/
/*         {% endif %}*/
/*         <h1><i class="fa fa-fw fa-tint"></i> {{ "PLUGIN_ADMIN.THEME"|tu }}: {{ theme.name|e }}</h1>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="gpm gpm-themes">*/
/* */
/*         {% include 'partials/messages.html.twig' %}*/
/* */
/*         {% if not admin.route or installing %}*/
/*             {%  include 'partials/themes-list.html.twig' %}*/
/*         {% else %}*/
/*             {% include 'partials/themes-details.html.twig' %}*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
