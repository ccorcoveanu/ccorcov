<?php

/* plugins.html.twig */
class __TwigTemplate_904261e4e28d82dc15f3f30a24f0daeb59ec8c6269cacb773d42866930884f96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "plugins.html.twig", 1);
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
            $context["installing"] = (is_string($__internal_678512786ca3babf096af5231b30ce2abf7e484ea3ed0050b3a0280603d5ca70 = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) && is_string($__internal_ac4ce5d211e540ba38cd1d34178e90bc3fe76e7bcff5fc12f1cc47c17df878bd = "install") && ('' === $__internal_ac4ce5d211e540ba38cd1d34178e90bc3fe76e7bcff5fc12f1cc47c17df878bd || 0 === strpos($__internal_678512786ca3babf096af5231b30ce2abf7e484ea3ed0050b3a0280603d5ca70, $__internal_ac4ce5d211e540ba38cd1d34178e90bc3fe76e7bcff5fc12f1cc47c17df878bd)));
            // line 5
            $context["installed"] = true;
            // line 8
            $context["package"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "plugins", array(0 => true), "method"), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), array(), "array");
            // line 9
            if ( !(isset($context["package"]) ? $context["package"] : null)) {
                // line 10
                $context["package"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "plugins", array(0 => false), "method"), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), array(), "array");
                // line 11
                $context["installed"] = false;
            }
            // line 14
            $context["plugin"] = $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "toArray", array(), "method");
            // line 15
            $context["title"] = (($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGIN") . ": ") . twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "name", array())));
        }
        // line 18
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 20
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/codemirror/codemirror.css")), "method");
        // line 21
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/codemirror-compressed.js")), "method");
        // line 26
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/mdeditor.js")), "method");
        // line 27
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
    }

    // line 31
    public function block_titlebar($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        if (( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
            // line 33
            echo "        <div class=\"button-bar\">
        ";
            // line 34
            if ((isset($context["installing"]) ? $context["installing"] : null)) {
                // line 35
                echo "            <a class=\"button\" href=\"";
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/plugins\"><i class=\"fa fa-reply\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
                echo "</a>
        ";
            } else {
                // line 37
                echo "            <a class=\"button\" href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "\"><i class=\"fa fa-reply\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
                echo "</a>
            <a class=\"button\" href=\"";
                // line 38
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/plugins/install\"><i class=\"fa fa-plus\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD");
                echo "</a>
            ";
                // line 39
                if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.maintenance", 1 => "admin.super"))) {
                    // line 40
                    echo "                <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> ";
                    echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CHECK_FOR_UPDATES");
                    echo "</button>
            ";
                }
                // line 42
                echo "        ";
            }
            // line 43
            echo "        </div>
        <h1><i class=\"fa fa-fw fa-plug\"></i> ";
            // line 44
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGINS");
            echo "</h1>
    ";
        } else {
            // line 46
            echo "        ";
            if ((isset($context["installed"]) ? $context["installed"] : null)) {
                // line 47
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 48
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/plugins\"><i class=\"fa fa-arrow-left\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK_TO_PLUGINS");
                echo "</a>
            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
                // line 49
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE");
                echo "</button>
        </div>
        ";
            } else {
                // line 52
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 53
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/plugins/install\"><i class=\"fa fa-arrow-left\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK_TO_PLUGINS");
                echo "</a>
        </div>
        ";
            }
            // line 56
            echo "
        <h1><i class=\"fa fa-fw fa-plug\"></i> ";
            // line 57
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGIN");
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "name", array()));
            echo "</h1>

    ";
        }
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
        // line 63
        echo "
    <div class=\"gpm gpm-plugins\">

        ";
        // line 66
        $this->loadTemplate("partials/messages.html.twig", "plugins.html.twig", 66)->display($context);
        // line 67
        echo "
        ";
        // line 68
        if (( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
            // line 69
            echo "            ";
            $this->loadTemplate("partials/plugins-list.html.twig", "plugins.html.twig", 69)->display($context);
            // line 70
            echo "        ";
        } else {
            // line 71
            echo "            ";
            $this->loadTemplate("partials/plugins-details.html.twig", "plugins.html.twig", 71)->display($context);
            // line 72
            echo "        ";
        }
        // line 73
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "plugins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 73,  201 => 72,  198 => 71,  195 => 70,  192 => 69,  190 => 68,  187 => 67,  185 => 66,  180 => 63,  177 => 62,  167 => 57,  164 => 56,  156 => 53,  153 => 52,  147 => 49,  141 => 48,  138 => 47,  135 => 46,  130 => 44,  127 => 43,  124 => 42,  118 => 40,  116 => 39,  110 => 38,  103 => 37,  95 => 35,  93 => 34,  90 => 33,  87 => 32,  84 => 31,  77 => 27,  74 => 26,  71 => 25,  68 => 24,  61 => 21,  58 => 20,  55 => 19,  51 => 1,  48 => 18,  45 => 15,  43 => 14,  40 => 11,  38 => 10,  36 => 9,  34 => 8,  32 => 5,  30 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% if admin.route %}*/
/*     {% set installing = admin.route starts with 'install' %}*/
/*     {% set installed = true %}*/
/* */
/*     {# Try installed packages first, then remote #}*/
/*     {% set package = admin.plugins(true)[admin.route] %}*/
/*     {% if (not package) %}*/
/*         {% set package = admin.plugins(false)[admin.route] %}*/
/*         {% set installed = false %}*/
/*     {% endif %}*/
/* */
/*     {% set plugin = package.toArray() %}*/
/*     {% set title = "PLUGIN_ADMIN.PLUGIN"|tu ~ ": " ~ plugin.name|e %}*/
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
/*             <a class="button" href="{{ base_url_relative }}/plugins"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*         {% else %}*/
/*             <a class="button" href="{{ base_url }}"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*             <a class="button" href="{{ base_url_relative }}/plugins/install"><i class="fa fa-plus"></i> {{ "PLUGIN_ADMIN.ADD"|tu }}</a>*/
/*             {% if authorize(['admin.maintenance', 'admin.super']) %}*/
/*                 <button data-gpm-checkupdates="" class="button"><i class="fa fa-refresh"></i> {{ "PLUGIN_ADMIN.CHECK_FOR_UPDATES"|tu }}</button>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         </div>*/
/*         <h1><i class="fa fa-fw fa-plug"></i> {{ "PLUGIN_ADMIN.PLUGINS"|tu }}</h1>*/
/*     {% else %}*/
/*         {% if (installed) %}*/
/*         <div class="button-bar">*/
/*             <a class="button" href="{{ base_url_relative }}/plugins"><i class="fa fa-arrow-left"></i> {{ "PLUGIN_ADMIN.BACK_TO_PLUGINS"|tu }}</a>*/
/*             <button class="button" type="submit" name="task" value="save" form="blueprints"><i class="fa fa-check"></i> {{ "PLUGIN_ADMIN.SAVE"|tu }}</button>*/
/*         </div>*/
/*         {% else %}*/
/*         <div class="button-bar">*/
/*             <a class="button" href="{{ base_url_relative }}/plugins/install"><i class="fa fa-arrow-left"></i> {{ "PLUGIN_ADMIN.BACK_TO_PLUGINS"|tu }}</a>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         <h1><i class="fa fa-fw fa-plug"></i> {{ "PLUGIN_ADMIN.PLUGIN"|tu }}: {{ plugin.name|e }}</h1>*/
/* */
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="gpm gpm-plugins">*/
/* */
/*         {% include 'partials/messages.html.twig' %}*/
/* */
/*         {% if not admin.route or installing %}*/
/*             {%  include 'partials/plugins-list.html.twig' %}*/
/*         {% else %}*/
/*             {% include 'partials/plugins-details.html.twig' %}*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
