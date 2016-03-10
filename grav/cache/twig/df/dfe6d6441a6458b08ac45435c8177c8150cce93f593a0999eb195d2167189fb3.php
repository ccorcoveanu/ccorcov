<?php

/* pages.html.twig */
class __TwigTemplate_7b06aa8a76e60a02b2eb6cc61efb23cce45f85fa8eecb6bc7a7721652048caa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "pages.html.twig", 1);
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
        // line 7
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) {
            // line 8
            $context["context"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "page", array(0 => true), "method");
        }
        // line 11
        if ($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "param", array(0 => "new"), "method")) {
            // line 12
            $context["mode"] = "new";
        } elseif (        // line 13
(isset($context["context"]) ? $context["context"] : null)) {
            // line 14
            $context["mode"] = "edit";
            // line 15
            if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "exists", array())) {
                // line 16
                $context["page_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "routes", array()), "default", array())) : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "rawRoute", array()))));
                // line 17
                $context["exists"] = true;
                // line 18
                $context["title"] = (((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "exists", array())) ? ($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EDIT")) : ($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CREATE"))) . " ") . (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "title", array())) ? ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "title", array())) : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "title", array()))));
            } else {
                // line 20
                $context["title"] = $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE");
            }
        } else {
            // line 23
            $context["mode"] = "list";
        }
        // line 26
        $context["modular"] = (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "modular", array())) ? ("modular_") : (""));
        // line 28
        $context["warn"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "warnings", array()), "delete_page", array());
        // line 30
        $context["admin_lang"] = (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "admin_lang", array())) ? ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "admin_lang", array())) : ("en"));
        // line 32
        $context["page_lang"] = $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "language", array());
        // line 53
        $context["preview_html"] = ((($this->env->getExtension('GravTwigExtension')->rtrimFilter((isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null), "/") . (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "home", array())) ? ("") : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "route", array()))))) ? (($this->env->getExtension('GravTwigExtension')->rtrimFilter((isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null), "/") . (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "home", array())) ? ("") : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "route", array()))))) : ("/"));
        // line 54
        $context["preview_link"] = (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "routable", array())) ? ((("<a class=\"button\" target=\"_blank\" href=\"" . (isset($context["preview_html"]) ? $context["preview_html"] : null)) . "\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>")) : (""));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 36
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/codemirror/codemirror.css")), "method");
            // line 37
            echo "    ";
        }
        // line 38
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/pages-all.js")), "method");
        // line 43
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/speakingurl.min.js")), "method");
        // line 44
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/slugify.min.js")), "method");
        // line 45
        echo "    ";
        if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 46
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/codemirror-compressed.js")), "method");
            // line 47
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/mdeditor.js")), "method");
            // line 48
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/dropzone.min.js")), "method");
            // line 49
            echo "    ";
        }
        // line 50
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 118
    public function block_titlebar($context, array $blocks = array())
    {
        // line 119
        echo "    <div class=\"button-bar\">
        ";
        // line 120
        if (((isset($context["mode"]) ? $context["mode"] : null) == "list")) {
            // line 121
            echo "            <a class=\"button\" href=\"";
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
            echo "</a>
            <a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\"><i class=\"fa fa-plus\"></i> ";
            // line 122
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE");
            echo "</a>
            ";
            // line 123
            if ( !twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modularTypes", array()))) {
                // line 124
                echo "            <a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\"><i class=\"fa fa-plus\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULAR");
                echo "</a>
            ";
            }
            // line 126
            echo "
            ";
            // line 127
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "multilang", array())) {
                // line 128
                echo "                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\">
                        <i class=\"fa fa-flag-o\"></i>
                        ";
                // line 131
                $context["langName"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "siteLanguages", array()), (isset($context["admin_lang"]) ? $context["admin_lang"] : null), array(), "array");
                // line 132
                echo "                        ";
                echo (twig_upper_filter($this->env, twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 0, 1)) . twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 1, null));
                echo "
                    </button>
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu language-switcher\">
                        ";
                // line 138
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "languages_enabled", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                    // line 139
                    echo "                            ";
                    $context["langName"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "siteLanguages", array()), $context["langCode"], array(), "array");
                    // line 140
                    echo "                            ";
                    if (($context["langCode"] != (isset($context["admin_lang"]) ? $context["admin_lang"] : null))) {
                        // line 141
                        echo "                                <li><a href=\"";
                        echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => (((((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "slug", array())) . "/pages/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "switchlanguage/lang") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . $context["langCode"]), 1 => "admin-form", 2 => "admin-nonce"), "method");
                        echo "\">";
                        echo (twig_upper_filter($this->env, twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 0, 1)) . twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 1, null));
                        echo "</a></li>
                            ";
                    }
                    // line 143
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                echo "                    </ul>

                </div>
            ";
            }
            // line 148
            echo "
        ";
        } elseif ((        // line 149
(isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 150
            echo "
            ";
            // line 151
            echo (isset($context["preview_link"]) ? $context["preview_link"] : null);
            echo "
            <a class=\"button\" href=\"";
            // line 152
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/pages\"><i class=\"fa fa-reply\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
            echo "</a>
            ";
            // line 153
            if ((isset($context["exists"]) ? $context["exists"] : null)) {
                // line 154
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["page_url"]) ? $context["page_url"] : null) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "copy"), 1 => "admin-form", 2 => "admin-nonce"), "method");
                echo "\" class=\"page-copy\" ><i class=\"fa fa-copy\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COPY");
                echo "</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\"><i class=\"fa fa-arrows\"></i> ";
                // line 155
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MOVE");
                echo "</a>
                ";
                // line 156
                if ((isset($context["warn"]) ? $context["warn"] : null)) {
                    // line 157
                    echo "                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["page_url"]) ? $context["page_url"] : null) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method");
                    echo "\"><i class=\"fa fa-close\"></i> ";
                    echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DELETE");
                    echo "</a>
                ";
                } else {
                    // line 159
                    echo "                    <a class=\"button\" href=\"";
                    echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "route", array(0 => true), "method") . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method");
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                ";
                }
                // line 161
                echo "            ";
            }
            // line 162
            echo "
            <div class=\"button-group\">
                <button class=\"button\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\"><i class=\"fa fa-check\"></i> ";
            // line 164
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE");
            echo "</button>
                ";
            // line 165
            if (((isset($context["exists"]) ? $context["exists"] : null) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "multilang", array()))) {
                // line 166
                echo "                    ";
                if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "untranslatedLanguages", array())) {
                    // line 167
                    echo "                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu lang-switcher\">
                            ";
                    // line 171
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "untranslatedLanguages", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 172
                        echo "                                ";
                        $context["langName"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "siteLanguages", array()), $context["langCode"], array(), "array");
                        // line 173
                        echo "                                ";
                        if (($context["langCode"] != (isset($context["page_lang"]) ? $context["page_lang"] : null))) {
                            // line 174
                            echo "                                    <li><button class=\"button task\" name=\"task\" value=\"saveas\" lang=\"";
                            echo $context["langCode"];
                            echo "\" form=\"blueprints\" type=\"submit\">";
                            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_AS");
                            echo " ";
                            echo (twig_upper_filter($this->env, twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 0, 1)) . twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 1, null));
                            echo "</button>
                                ";
                        }
                        // line 176
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 177
                    echo "                        </ul>
                    ";
                }
                // line 179
                echo "                ";
            }
            // line 180
            echo "            </div>


        ";
        }
        // line 184
        echo "    </div>
    ";
        // line 185
        if (((isset($context["mode"]) ? $context["mode"] : null) == "new")) {
            // line 186
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE");
            echo "</h1>
    ";
        } elseif ((        // line 187
(isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 188
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            ";
            // line 189
            echo (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "exists", array())) ? (($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EDIT") . ((" <i>" . $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "menu", array())) . "</i>"))) : (($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CREATE") . ((" <i>" . $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "menu", array())) . "</i>"))));
            echo "
        </h1>
    ";
        } else {
            // line 192
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MANAGE_PAGES");
            echo "</h1>
    ";
        }
    }

    // line 196
    public function block_content($context, array $blocks = array())
    {
        // line 197
        echo "
    ";
        // line 198
        $context["default_site_lang"] = twig_first($this->env, twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "system", array()), "languages", array())));
        // line 199
        echo "    <div class=\"admin-block clear\">
    ";
        // line 200
        $this->loadTemplate("partials/messages.html.twig", "pages.html.twig", 200)->display($context);
        // line 201
        echo "    ";
        if (((isset($context["mode"]) ? $context["mode"] : null) == "new")) {
            // line 202
            echo "        ";
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 202)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "pages/page"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 203
            echo "    ";
        } elseif (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 204
            echo "        <div class=\"admin-form-wrapper\" data-media-url=\"";
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/media/";
            echo trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/");
            echo ".json\" data-media-local=\"";
            echo (isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null);
            echo "/";
            echo trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/");
            echo "\" data-media-types=\"";
            echo (isset($context["media_types"]) ? $context["media_types"] : null);
            echo "\">
            <div id=\"admin-topbar\">

                ";
            // line 207
            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "multilang", array()) && (isset($context["page_lang"]) ? $context["page_lang"] : null))) {
                // line 208
                echo "                    <div id=\"admin-lang-toggle\" class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\">
                            ";
                // line 210
                if ((isset($context["exists"]) ? $context["exists"] : null)) {
                    // line 211
                    echo "                                ";
                    echo (isset($context["page_lang"]) ? $context["page_lang"] : null);
                    echo "
                            ";
                } else {
                    // line 213
                    echo "                                ";
                    echo (isset($context["admin_lang"]) ? $context["admin_lang"] : null);
                    echo "
                            ";
                }
                // line 215
                echo "                        </button>
                        ";
                // line 216
                if (((isset($context["exists"]) ? $context["exists"] : null) && (twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "translatedLanguages", array())) > 1))) {
                    // line 217
                    echo "                            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-caret-down\"></i>
                            </button>
                            <ul class=\"dropdown-menu language-switcher\">
                                ";
                    // line 221
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "translatedLanguages", array()));
                    foreach ($context['_seq'] as $context["language"] => $context["route"]) {
                        // line 222
                        echo "                                    ";
                        if (($context["language"] != (isset($context["page_lang"]) ? $context["page_lang"] : null))) {
                            // line 223
                            echo "                                    <li><button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"";
                            echo $context["language"];
                            echo "\" redirect=\"";
                            echo trim($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "rawRoute", array()), "/");
                            echo "\" form=\"blueprints\">";
                            echo $context["language"];
                            echo "</button>
                                    ";
                        }
                        // line 225
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['language'], $context['route'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 226
                    echo "                            </ul>
                        ";
                }
                // line 228
                echo "                    </div>
                ";
            }
            // line 230
            echo "
                ";
            // line 231
            if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "blueprints", array()), "fields", array())) {
                // line 232
                echo "                ";
                $context["normalText"] = $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NORMAL");
                // line 233
                echo "                ";
                $context["expertText"] = $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPERT");
                // line 234
                echo "                ";
                $context["maxLen"] = max(array(0 => twig_length_filter($this->env, (isset($context["normalText"]) ? $context["normalText"] : null)), 1 => twig_length_filter($this->env, (isset($context["expertText"]) ? $context["expertText"] : null))));
                // line 235
                echo "                ";
                $context["normalText"] = $this->getAttribute($this, "spanToggle", array(0 => (isset($context["normalText"]) ? $context["normalText"] : null), 1 => (isset($context["maxLen"]) ? $context["maxLen"] : null)), "method");
                // line 236
                echo "                ";
                $context["expertText"] = $this->getAttribute($this, "spanToggle", array(0 => (isset($context["expertText"]) ? $context["expertText"] : null), 1 => (isset($context["maxLen"]) ? $context["maxLen"] : null)), "method");
                // line 237
                echo "                <form id=\"admin-mode-toggle\">
                    <div class=\"switch-toggle switch-grav\">
                        <input type=\"radio\" value=\"normal\" data-leave-url=\"";
                // line 239
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/pages/";
                echo trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/");
                echo "/mode";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo "normal\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "0")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"normal\">";
                // line 240
                echo trim((isset($context["normalText"]) ? $context["normalText"] : null));
                echo "</label>
                        <input type=\"radio\" value=\"expert\" data-leave-url=\"";
                // line 241
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/pages/";
                echo trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/");
                echo "/mode";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo "expert\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "1")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"expert\">";
                // line 242
                echo trim((isset($context["expertText"]) ? $context["expertText"] : null));
                echo "</label>
                        <a></a>
                    </div>
                </form>
                ";
            }
            // line 247
            echo "
            </div>

            ";
            // line 250
            if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "blueprints", array()), "fields", array()) && ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "0"))) {
                // line 251
                echo "                ";
                $this->loadTemplate("partials/blueprints.html.twig", "pages.html.twig", 251)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "blueprints", array()), "data" => (isset($context["context"]) ? $context["context"] : null))));
                // line 252
                echo "            ";
            } else {
                // line 253
                echo "                ";
                $this->loadTemplate("partials/blueprints-raw.html.twig", "pages.html.twig", 253)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => (("pages/" . (isset($context["modular"]) ? $context["modular"] : null)) . "raw")), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
                // line 254
                echo "            ";
            }
            // line 255
            echo "        </div>
    ";
        } else {
            // line 257
            echo "        <form id=\"page-filtering\">
            <div class=\"page-filters\">
                <input type=\"text\" data-template-types=\"";
            // line 259
            echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "types", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modularTypes", array()))), "html_attr");
            echo "\" placeholder=\"";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FILTERS");
            echo "\" class=\"page-filter\" name=\"page-filter\" />
            </div>
            <div class=\"page-search\">
                <input type=\"text\" placeholder=\"";
            // line 262
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SEARCH_PAGES");
            echo "\" name=\"page-search\" />
            </div>
            <div class=\"page-shortcuts\">
                <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i class=\"fa fa-fw fa-plus-circle\"></i> ";
            // line 265
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPAND_ALL");
            echo "</span>
                <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i class=\"fa fa-fw fa-minus-circle\"></i> ";
            // line 266
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COLLAPSE_ALL");
            echo "</span>
            </div>
        </form>
        <ul class=\"pages-list depth-0\">
            ";
            // line 270
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null), 1 => 0, 2 => $context), "method");
            echo "
        </ul>
    ";
        }
        // line 273
        echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"generic\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>";
        // line 277
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ERROR");
        echo "</h1>
            <div class=\"error-content\"></div>
            <div class=\"button-bar\">
                <a class=\"button remodal-confirm\" href=\"#\">";
        // line 280
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLOSE");
        echo "</a>
            </div>
        </form>
    </div>

    ";
        // line 285
        if (((isset($context["mode"]) ? $context["mode"] : null) == "list")) {
            // line 286
            echo "    <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 287
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 287)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "pages/new"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 288
            echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 291
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 291)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "pages/modular_new"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 292
            echo "    </div>
    ";
        }
        // line 294
        echo "
    ";
        // line 295
        if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 296
            echo "    <div class=\"remodal\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">

        ";
            // line 298
            $this->loadTemplate("partials/page-move.html.twig", "pages.html.twig", 298)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "pages/move"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 299
            echo "    </div>
    ";
        }
        // line 301
        echo "
    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>";
        // line 304
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE");
        echo "</h1>
            <p class=\"bigger\">
              ";
        // line 306
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC");
        echo "
            </p>
            <br>
            <div class=\"button-bar\">
            <a class=\"button secondary remodal-cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 310
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL");
        echo "</a>
            <a class=\"button\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 311
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE");
        echo "</a>
            </div>
        </form>
    </div>


    <div class=\"remodal\" data-remodal-id=\"changes\">
        <form>
            <h1>";
        // line 319
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_TITLE");
        echo "</h1>
            <p class=\"bigger\">
                ";
        // line 321
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_DESC");
        echo "
            </p>
            <br>
            <div class=\"button-bar\">
            <a class=\"button secondary\" data-leave-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 325
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL");
        echo "</a>
            <a class=\"button\" data-leave-action=\"continue\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 326
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE");
        echo "</a>
            </div>
        </form>
    </div>

    <div class=\"remodal\" data-remodal-id=\"delete-media\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>";
        // line 333
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE");
        echo "</h1>
            <p class=\"bigger\">
                ";
        // line 335
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_DESC");
        echo "
            </p>
            <br>
            <div class=\"button-bar\">
            <a class=\"button secondary remodal-cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 339
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL");
        echo "</a>
            <a class=\"button remodal-confirm\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 340
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE");
        echo "</a>
            </div>
        </form>
    </div>
";
    }

    // line 3
    public function getspanToggle($__input__ = null, $__length__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            echo (($this->env->getExtension('GravTwigExtension')->repeatFunc("&nbsp;&nbsp;", (((isset($context["length"]) ? $context["length"] : null) - twig_length_filter($this->env, (isset($context["input"]) ? $context["input"] : null))) / 2)) . (isset($context["input"]) ? $context["input"] : null)) . $this->env->getExtension('GravTwigExtension')->repeatFunc("&nbsp;&nbsp;", (((isset($context["length"]) ? $context["length"] : null) - twig_length_filter($this->env, (isset($context["input"]) ? $context["input"] : null))) / 2)));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 56
    public function getloop($__page__ = null, $__depth__ = null, $__twig_vars__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "depth" => $__depth__,
            "twig_vars" => $__twig_vars__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 57
            echo "    ";
            $context["separator"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "config", array(), "array"), "system", array()), "param_sep", array());
            // line 58
            echo "    ";
            $context["base_url"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "base_url_relative", array(), "array");
            // line 59
            echo "    ";
            $context["base_url_simple"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "base_url_simple", array(), "array");
            // line 60
            echo "    ";
            $context["admin_route"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "admin_route", array(), "array");
            // line 61
            echo "    ";
            $context["admin_lang"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "admin_lang", array(), "array");
            // line 62
            echo "    ";
            $context["warn"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "warn", array(), "array");
            // line 63
            echo "    ";
            $context["uri"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "uri", array(), "array");
            // line 64
            echo "
    ";
            // line 65
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "content", array()), "order", array()), "by", array())) {
                // line 66
                echo "        ";
                $context["pcol"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array(), "method"), "order", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "content", array()), "order", array()), "by", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "content", array()), "order", array()), "dir", array())), "method");
                // line 67
                echo "    ";
            } elseif ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "order_by", array())) {
                // line 68
                echo "        ";
                $context["pcol"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array(), "method"), "order", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "order_by", array()), 1 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "order_dir", array())), "method");
                // line 69
                echo "    ";
            } else {
                // line 70
                echo "        ";
                $context["pcol"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array(), "method");
                // line 71
                echo "    ";
            }
            // line 72
            echo "
    ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pcol"]) ? $context["pcol"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 74
                echo "        ";
                $context["description"] = (((((( !$this->getAttribute($context["p"], "page", array())) ? ("Folder &bull; ") : ("Page &bull; ")) . (($this->getAttribute(                // line 75
$context["p"], "modular", array())) ? ("Modular &bull; ") : (""))) . (($this->getAttribute(                // line 76
$context["p"], "routable", array())) ? ("Routable &bull; ") : ("Non-Routable &bull; "))) . (($this->getAttribute(                // line 77
$context["p"], "visible", array())) ? ("Visible &bull; ") : ("Non-Visible &bull; "))) . (($this->getAttribute(                // line 78
$context["p"], "published", array())) ? ("Published &bull; ") : ("Non-Published &bull; ")));
                // line 79
                echo "        ";
                $context["page_route"] = trim($this->getAttribute($context["p"], "rawRoute", array()), "/");
                // line 80
                echo "        ";
                if (($this->getAttribute($context["p"], "language", array()) && ($this->getAttribute($context["p"], "language", array()) != (isset($context["admin_lang"]) ? $context["admin_lang"] : null)))) {
                    // line 81
                    echo "            ";
                    $context["page_url"] = (((((((isset($context["base_url_simple"]) ? $context["base_url_simple"] : null) . "/") . $this->getAttribute($context["p"], "language", array())) . "/") . (isset($context["admin_route"]) ? $context["admin_route"] : null)) . "/pages/") . (isset($context["page_route"]) ? $context["page_route"] : null));
                    // line 82
                    echo "        ";
                } else {
                    // line 83
                    echo "            ";
                    $context["page_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/pages/") . (isset($context["page_route"]) ? $context["page_route"] : null));
                    // line 84
                    echo "        ";
                }
                // line 85
                echo "
        <li class=\"page-item\" data-nav-id=\"";
                // line 86
                echo $this->getAttribute($context["p"], "route", array());
                echo "\">
            <div class=\"row\">
                <span ";
                // line 88
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("data-toggle=\"children\"") : (""));
                echo " data-hint=\"";
                echo trim((isset($context["description"]) ? $context["description"] : null), " &bull; ");
                echo "\" class=\"hint--bottom\">
                <i class=\"page-icon fa fa-fw fa-circle-o ";
                // line 89
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("children-closed") : (""));
                echo " ";
                echo (($this->getAttribute($context["p"], "modular", array())) ? ("modular") : ((( !$this->getAttribute($context["p"], "routable", array())) ? ("not-routable") : ((( !$this->getAttribute($context["p"], "visible", array())) ? ("not-visible") : ((( !$this->getAttribute($context["p"], "page", array())) ? ("folder") : (""))))))));
                echo "\"></i>
                </span>
                <a href=\"";
                // line 91
                echo (isset($context["page_url"]) ? $context["page_url"] : null);
                echo "\" class=\"page-edit\">";
                echo $this->getAttribute($context["p"], "title", array());
                echo "</a>

                ";
                // line 93
                if ($this->getAttribute($context["p"], "language", array())) {
                    // line 94
                    echo "                    <span class=\"badge lang ";
                    if (($this->getAttribute($context["p"], "language", array()) == (isset($context["admin_lang"]) ? $context["admin_lang"] : null))) {
                        echo "info";
                    }
                    echo "\">";
                    echo (($this->getAttribute($context["p"], "language", array())) ? ($this->getAttribute($context["p"], "language", array())) : ((isset($context["default_site_lang"]) ? $context["default_site_lang"] : null)));
                    echo "</span>
                ";
                }
                // line 96
                echo "                <span class=\"page-home\">";
                echo (($this->getAttribute($context["p"], "home", array())) ? ("<i class=\"fa fa-home\"></i>") : (""));
                echo "</span>
                <span class=\"page-tools\">

                    ";
                // line 99
                if ((isset($context["warn"]) ? $context["warn"] : null)) {
                    // line 100
                    echo "                    <a href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["page_url"]) ? $context["page_url"] : null) . "/task") . (isset($context["separator"]) ? $context["separator"] : null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method");
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                } else {
                    // line 102
                    echo "                    <a href=\"";
                    echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["page_url"]) ? $context["page_url"] : null) . "/task") . (isset($context["separator"]) ? $context["separator"] : null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method");
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                }
                // line 104
                echo "                </span>
                <p class=\"page-route\">";
                // line 105
                echo (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) : ($this->getAttribute($context["p"], "route", array())));
                echo " <span class=\"spacer\"><i class=\"fa fa-long-arrow-right\"></i></span> ";
                echo $this->getAttribute($context["p"], "template", array(), "method");
                echo "</p>
            </div>
            ";
                // line 107
                if (($this->getAttribute($this->getAttribute($context["p"], "children", array(), "method"), "count", array()) > 0)) {
                    // line 108
                    echo "
            <ul class=\"depth-";
                    // line 109
                    echo ((isset($context["depth"]) ? $context["depth"] : null) + 1);
                    echo "\" style=\"display:none;\">
                ";
                    // line 110
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"], 1 => ((isset($context["depth"]) ? $context["depth"] : null) + 1), 2 => (isset($context["twig_vars"]) ? $context["twig_vars"] : null)), "method");
                    echo "
            </ul>
            ";
                }
                // line 113
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  898 => 113,  892 => 110,  888 => 109,  885 => 108,  883 => 107,  876 => 105,  873 => 104,  867 => 102,  861 => 100,  859 => 99,  852 => 96,  842 => 94,  840 => 93,  833 => 91,  826 => 89,  820 => 88,  815 => 86,  812 => 85,  809 => 84,  806 => 83,  803 => 82,  800 => 81,  797 => 80,  794 => 79,  792 => 78,  791 => 77,  790 => 76,  789 => 75,  787 => 74,  783 => 73,  780 => 72,  777 => 71,  774 => 70,  771 => 69,  768 => 68,  765 => 67,  762 => 66,  760 => 65,  757 => 64,  754 => 63,  751 => 62,  748 => 61,  745 => 60,  742 => 59,  739 => 58,  736 => 57,  722 => 56,  708 => 4,  695 => 3,  686 => 340,  682 => 339,  675 => 335,  670 => 333,  660 => 326,  656 => 325,  649 => 321,  644 => 319,  633 => 311,  629 => 310,  622 => 306,  617 => 304,  612 => 301,  608 => 299,  606 => 298,  602 => 296,  600 => 295,  597 => 294,  593 => 292,  591 => 291,  586 => 288,  584 => 287,  581 => 286,  579 => 285,  571 => 280,  565 => 277,  559 => 273,  553 => 270,  546 => 266,  542 => 265,  536 => 262,  528 => 259,  524 => 257,  520 => 255,  517 => 254,  514 => 253,  511 => 252,  508 => 251,  506 => 250,  501 => 247,  493 => 242,  481 => 241,  477 => 240,  465 => 239,  461 => 237,  458 => 236,  455 => 235,  452 => 234,  449 => 233,  446 => 232,  444 => 231,  441 => 230,  437 => 228,  433 => 226,  427 => 225,  417 => 223,  414 => 222,  410 => 221,  404 => 217,  402 => 216,  399 => 215,  393 => 213,  387 => 211,  385 => 210,  381 => 208,  379 => 207,  364 => 204,  361 => 203,  358 => 202,  355 => 201,  353 => 200,  350 => 199,  348 => 198,  345 => 197,  342 => 196,  334 => 192,  328 => 189,  325 => 188,  323 => 187,  318 => 186,  316 => 185,  313 => 184,  307 => 180,  304 => 179,  300 => 177,  294 => 176,  284 => 174,  281 => 173,  278 => 172,  274 => 171,  268 => 167,  265 => 166,  263 => 165,  259 => 164,  255 => 162,  252 => 161,  246 => 159,  238 => 157,  236 => 156,  232 => 155,  225 => 154,  223 => 153,  217 => 152,  213 => 151,  210 => 150,  208 => 149,  205 => 148,  199 => 144,  193 => 143,  185 => 141,  182 => 140,  179 => 139,  175 => 138,  165 => 132,  163 => 131,  158 => 128,  156 => 127,  153 => 126,  147 => 124,  145 => 123,  141 => 122,  134 => 121,  132 => 120,  129 => 119,  126 => 118,  119 => 50,  116 => 49,  113 => 48,  110 => 47,  107 => 46,  104 => 45,  101 => 44,  98 => 43,  95 => 42,  92 => 41,  85 => 38,  82 => 37,  79 => 36,  76 => 35,  73 => 34,  69 => 1,  67 => 54,  65 => 53,  63 => 32,  61 => 30,  59 => 28,  57 => 26,  54 => 23,  50 => 20,  47 => 18,  45 => 17,  43 => 16,  41 => 15,  39 => 14,  37 => 13,  35 => 12,  33 => 11,  30 => 8,  28 => 7,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% macro spanToggle(input, length) %}*/
/*     {{ repeat('&nbsp;&nbsp;', (length - input|length) / 2) ~ input ~ repeat('&nbsp;&nbsp;', (length - input|length) / 2) }}*/
/* {% endmacro %}*/
/* */
/* {% if admin.route %}*/
/*     {% set context = admin.page(true) %}*/
/* {% endif %}*/
/* */
/* {% if uri.param('new') %}*/
/*     {% set mode = 'new' %}*/
/* {%  elseif context %}*/
/*     {% set mode = 'edit' %}*/
/*     {% if context.exists %}*/
/*         {% set page_url = base_url ~ '/pages' ~ (context.header.routes.default ?: context.rawRoute) %}*/
/*         {% set exists = true %}*/
/*         {% set title = (context.exists ? "PLUGIN_ADMIN.EDIT"|tu : "PLUGIN_ADMIN.CREATE"|tu ) ~ " " ~ (context.header.title ?: context.title) %}*/
/*     {% else %}*/
/*         {% set title = "PLUGIN_ADMIN.ADD_PAGE"|tu %}*/
/*     {% endif %}*/
/* {% else %}*/
/*     {% set mode = 'list' %}*/
/* {% endif %}*/
/* */
/* {% set modular = context.modular ? 'modular_' : '' %}*/
/* */
/* {% set warn = config.plugins.admin.warnings.delete_page %}*/
/* */
/* {% set admin_lang = admin.session.admin_lang ?: 'en' %}*/
/* */
/* {% set page_lang = context.language %}*/
/* */
/* {% block stylesheets %}*/
/*     {% if mode == 'edit' %}*/
/*         {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {% do assets.addJs(theme_url~'/js/pages-all.js') %}*/
/*     {% do assets.addJs(theme_url~'/js/speakingurl.min.js') %}*/
/*     {% do assets.addJs(theme_url~'/js/slugify.min.js') %}*/
/*     {% if mode == 'edit' %}*/
/*         {% do assets.addJs(theme_url~'/js/codemirror-compressed.js') %}*/
/*         {% do assets.addJs(theme_url~'/js/mdeditor.js') %}*/
/*         {% do assets.addJs(theme_url~'/js/dropzone.min.js') %}*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% set preview_html = (base_url_relative_frontend|rtrim('/') ~ (context.home ? '' : context.route)) ?: '/' %}*/
/* {% set preview_link = context.routable ? '<a class="button" target="_blank" href="' ~ preview_html ~ '"> <i class="fa fa-fw fa-eye" style="font-size:18px;margin-right:0;"></i></a>' : '' %}*/
/* */
/* {% macro loop(page, depth, twig_vars) %}*/
/*     {% set separator = twig_vars['config'].system.param_sep %}*/
/*     {% set base_url = twig_vars['base_url_relative'] %}*/
/*     {% set base_url_simple = twig_vars['base_url_simple'] %}*/
/*     {% set admin_route = twig_vars['admin_route'] %}*/
/*     {% set admin_lang = twig_vars['admin_lang'] %}*/
/*     {% set warn = twig_vars['warn'] %}*/
/*     {% set uri = twig_vars['uri'] %}*/
/* */
/*     {% if page.header.content.order.by %}*/
/*         {% set pcol = page.children().order(page.header.content.order.by, page.header.content.order.dir) %}*/
/*     {% elseif page.order_by %}*/
/*         {% set pcol = page.children().order(page.order_by, page.order_dir) %}*/
/*     {% else %}*/
/*         {% set pcol = page.children() %}*/
/*     {% endif %}*/
/* */
/*     {% for p in pcol %}*/
/*         {% set description = (not p.page ? 'Folder &bull; ' : 'Page &bull; ') ~*/
/*                              (p.modular ? 'Modular &bull; ' : '') ~*/
/*                              (p.routable ? 'Routable &bull; ' : 'Non-Routable &bull; ') ~*/
/*                              (p.visible ? 'Visible &bull; ' : 'Non-Visible &bull; ') ~*/
/*                              (p.published ? 'Published &bull; ' : 'Non-Published &bull; ') %}*/
/*         {% set page_route =  p.rawRoute|trim('/') %}*/
/*         {% if p.language and p.language != admin_lang %}*/
/*             {% set page_url = base_url_simple ~ '/' ~ p.language ~ '/' ~ admin_route ~ '/pages/' ~ page_route %}*/
/*         {% else %}*/
/*             {% set page_url = base_url ~ '/pages/' ~ page_route  %}*/
/*         {% endif %}*/
/* */
/*         <li class="page-item" data-nav-id="{{ p.route }}">*/
/*             <div class="row">*/
/*                 <span {{ p.children(0).count > 0 ? 'data-toggle="children"' : ''}} data-hint="{{ description|trim(' &bull; ') }}" class="hint--bottom">*/
/*                 <i class="page-icon fa fa-fw fa-circle-o {{ p.children(0).count > 0 ? 'children-closed' : ''}} {{ p.modular ? 'modular' : (not p.routable ? 'not-routable' : (not p.visible ? 'not-visible' : (not p.page ? 'folder' :  ''))) }}"></i>*/
/*                 </span>*/
/*                 <a href="{{ page_url }}" class="page-edit">{{ p.title }}</a>*/
/* */
/*                 {% if p.language %}*/
/*                     <span class="badge lang {% if p.language == admin_lang %}info{% endif %}">{{p.language ?: default_site_lang}}</span>*/
/*                 {% endif %}*/
/*                 <span class="page-home">{{ p.home ? '<i class="fa fa-home"></i>' }}</span>*/
/*                 <span class="page-tools">*/
/* */
/*                     {% if warn %}*/
/*                     <a href="#delete" data-remodal-target="delete" data-delete-url="{{ uri.addNonce(page_url ~ '/task' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}" class="page-delete" ><i class="fa fa-close"></i></a>*/
/*                     {% else %}*/
/*                     <a href="{{ uri.addNonce(page_url ~ '/task' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}" class="page-delete" ><i class="fa fa-close"></i></a>*/
/*                     {% endif %}*/
/*                 </span>*/
/*                 <p class="page-route">{{ p.header.routes.default ?: p.route }} <span class="spacer"><i class="fa fa-long-arrow-right"></i></span> {{ p.template() }}</p>*/
/*             </div>*/
/*             {% if p.children().count > 0 %}*/
/* */
/*             <ul class="depth-{{ depth + 1 }}" style="display:none;">*/
/*                 {{ _self.loop(p, depth + 1, twig_vars) }}*/
/*             </ul>*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */
/* */
/* {% block titlebar %}*/
/*     <div class="button-bar">*/
/*         {% if mode == 'list' %}*/
/*             <a class="button" href="{{ base_url }}"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*             <a class="button" href="#modal" data-remodal-target="modal"><i class="fa fa-plus"></i> {{ "PLUGIN_ADMIN.ADD_PAGE"|tu }}</a>*/
/*             {% if admin.modularTypes is not empty %}*/
/*             <a class="button" href="#modular" data-remodal-target="modular"><i class="fa fa-plus"></i> {{ "PLUGIN_ADMIN.ADD_MODULAR"|tu }}</a>*/
/*             {% endif %}*/
/* */
/*             {% if admin.multilang %}*/
/*                 <div class="button-group">*/
/*                     <button type="button" class="button disabled">*/
/*                         <i class="fa fa-flag-o"></i>*/
/*                         {% set langName = admin.siteLanguages[admin_lang] %}*/
/*                         {{ langName[:1]|upper ~ langName[1:] }}*/
/*                     </button>*/
/*                     <button type="button" class="button dropdown-toggle" data-toggle="dropdown">*/
/*                         <i class="fa fa-caret-down"></i>*/
/*                     </button>*/
/*                     <ul class="dropdown-menu language-switcher">*/
/*                         {% for langCode in admin.languages_enabled %}*/
/*                             {% set langName = admin.siteLanguages[langCode] %}*/
/*                             {% if langCode != admin_lang %}*/
/*                                 <li><a href="{{ uri.addNonce(base_url_relative ~ theme.slug ~ '/pages/task' ~ config.system.param_sep ~ 'switchlanguage/lang' ~ config.system.param_sep ~ langCode, 'admin-form', 'admin-nonce') }}">{{ langName[:1]|upper ~ langName[1:] }}</a></li>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </ul>*/
/* */
/*                 </div>*/
/*             {% endif %}*/
/* */
/*         {% elseif mode == 'edit' %}*/
/* */
/*             {{  preview_link }}*/
/*             <a class="button" href="{{ base_url }}/pages"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*             {% if exists %}*/
/*                 <a class="button" href="{{ uri.addNonce(page_url ~ '/task' ~ config.system.param_sep ~ 'copy', 'admin-form', 'admin-nonce') }}" class="page-copy" ><i class="fa fa-copy"></i> {{ "PLUGIN_ADMIN.COPY"|tu }}</a>*/
/*                 <a class="button" href="#" data-remodal-target="move"><i class="fa fa-arrows"></i> {{ "PLUGIN_ADMIN.MOVE"|tu }}</a>*/
/*                 {% if warn %}*/
/*                     <a class="button" href="#delete" data-remodal-target="delete" data-delete-url="{{ uri.addNonce(page_url ~ '/task' ~ config.system.param_sep ~ 'delete', 'admin-form', 'admin-nonce') }}"><i class="fa fa-close"></i> {{ "PLUGIN_ADMIN.DELETE"|tu }}</a>*/
/*                 {% else %}*/
/*                     <a class="button" href="{{ uri.addNonce(uri.route(true) ~ '/task' ~ config.system.param_sep ~ 'delete', 'admin-form', 'admin-nonce') }}" class="page-delete" ><i class="fa fa-close"></i></a>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/* */
/*             <div class="button-group">*/
/*                 <button class="button" name="task" value="save" form="blueprints" type="submit"><i class="fa fa-check"></i> {{ "PLUGIN_ADMIN.SAVE"|tu }}</button>*/
/*                 {% if exists and admin.multilang %}*/
/*                     {% if context.untranslatedLanguages %}*/
/*                         <button type="button" class="button dropdown-toggle" data-toggle="dropdown">*/
/*                             <i class="fa fa-caret-down"></i>*/
/*                         </button>*/
/*                         <ul class="dropdown-menu lang-switcher">*/
/*                             {% for langCode in context.untranslatedLanguages %}*/
/*                                 {% set langName = admin.siteLanguages[langCode] %}*/
/*                                 {% if langCode != page_lang %}*/
/*                                     <li><button class="button task" name="task" value="saveas" lang="{{langCode}}" form="blueprints" type="submit">{{ "PLUGIN_ADMIN.SAVE_AS"|tu }} {{ langName[:1]|upper ~ langName[1:] }}</button>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/*             </div>*/
/* */
/* */
/*         {% endif %}*/
/*     </div>*/
/*     {% if mode == 'new' %}*/
/*         <h1><i class="fa fa-fw fa-file-text-o"></i> {{ "PLUGIN_ADMIN.ADD_PAGE"|tu }}</h1>*/
/*     {% elseif mode == 'edit' %}*/
/*         <h1><i class="fa fa-fw fa-file-text-o"></i>*/
/*             {{ context.exists ? "PLUGIN_ADMIN.EDIT"|tu ~ " <i>#{context.menu}</i>" : "PLUGIN_ADMIN.CREATE"|tu ~ " <i>#{context.menu}</i>" }}*/
/*         </h1>*/
/*     {% else %}*/
/*         <h1><i class="fa fa-fw fa-file-text-o"></i> {{ "PLUGIN_ADMIN.MANAGE_PAGES"|tu }}</h1>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     {% set default_site_lang = grav.config.system.languages|first|first %}*/
/*     <div class="admin-block clear">*/
/*     {% include 'partials/messages.html.twig' %}*/
/*     {% if mode == 'new' %}*/
/*         {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('pages/page'), data: context } %}*/
/*     {% elseif mode == 'edit' %}*/
/*         <div class="admin-form-wrapper" data-media-url="{{ base_url }}/media/{{ admin.route|trim('/') }}.json" data-media-local="{{ base_url_relative_frontend }}/{{ admin.route|trim('/') }}" data-media-types="{{ media_types }}">*/
/*             <div id="admin-topbar">*/
/* */
/*                 {% if admin.multilang and page_lang %}*/
/*                     <div id="admin-lang-toggle" class="button-group">*/
/*                         <button type="button" class="button disabled">*/
/*                             {% if exists %}*/
/*                                 {{ page_lang }}*/
/*                             {% else %}*/
/*                                 {{ admin_lang }}*/
/*                             {% endif %}*/
/*                         </button>*/
/*                         {% if exists and context.translatedLanguages|length > 1 %}*/
/*                             <button type="button" class="button dropdown-toggle" data-toggle="dropdown">*/
/*                                 <i class="fa fa-caret-down"></i>*/
/*                             </button>*/
/*                             <ul class="dropdown-menu language-switcher">*/
/*                                 {% for language, route in context.translatedLanguages %}*/
/*                                     {% if language != page_lang %}*/
/*                                     <li><button class="task" name="task" value="switchlanguage" lang="{{language}}" redirect="{{context.rawRoute|trim('/')}}" form="blueprints">{{ language }}</button>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if context.blueprints.fields %}*/
/*                 {% set normalText = "PLUGIN_ADMIN.NORMAL"|tu %}*/
/*                 {% set expertText = "PLUGIN_ADMIN.EXPERT"|tu %}*/
/*                 {% set maxLen = max([normalText|length, expertText|length]) %}*/
/*                 {% set normalText = _self.spanToggle(normalText, maxLen) %}*/
/*                 {% set expertText = _self.spanToggle(expertText, maxLen) %}*/
/*                 <form id="admin-mode-toggle">*/
/*                     <div class="switch-toggle switch-grav">*/
/*                         <input type="radio" value="normal" data-leave-url="{{ base_url }}/pages/{{ admin.route|trim('/') }}/mode{{ config.system.param_sep }}normal" id="normal" name="mode-switch" class="highlight" {% if admin.session.expert == '0' %} checked="checked"{% endif %}>*/
/*                         <label for="normal">{{ normalText|trim }}</label>*/
/*                         <input type="radio" value="expert" data-leave-url="{{ base_url }}/pages/{{ admin.route|trim('/') }}/mode{{ config.system.param_sep }}expert" id="expert" name="mode-switch" class="highlight" {% if admin.session.expert == '1' %} checked="checked"{% endif %}>*/
/*                         <label for="expert">{{ expertText|trim }}</label>*/
/*                         <a></a>*/
/*                     </div>*/
/*                 </form>*/
/*                 {% endif %}*/
/* */
/*             </div>*/
/* */
/*             {% if context.blueprints.fields and admin.session.expert == '0' %}*/
/*                 {% include 'partials/blueprints.html.twig' with { blueprints: context.blueprints, data: context } %}*/
/*             {% else %}*/
/*                 {% include 'partials/blueprints-raw.html.twig' with { blueprints: admin.blueprints('pages/'~modular~'raw'), data: context } %}*/
/*             {% endif %}*/
/*         </div>*/
/*     {% else %}*/
/*         <form id="page-filtering">*/
/*             <div class="page-filters">*/
/*                 <input type="text" data-template-types="{{ admin.types|merge(admin.modularTypes)|json_encode|e('html_attr') }}" placeholder="{{ "PLUGIN_ADMIN.ADD_FILTERS"|tu }}" class="page-filter" name="page-filter" />*/
/*             </div>*/
/*             <div class="page-search">*/
/*                 <input type="text" placeholder="{{ "PLUGIN_ADMIN.SEARCH_PAGES"|tu }}" name="page-search" />*/
/*             </div>*/
/*             <div class="page-shortcuts">*/
/*                 <span class="button button-x-small" data-page-toggleall="expand"><i class="fa fa-fw fa-plus-circle"></i> {{ "PLUGIN_ADMIN.EXPAND_ALL"|tu }}</span>*/
/*                 <span class="button button-x-small" data-page-toggleall="collapse"><i class="fa fa-fw fa-minus-circle"></i> {{ "PLUGIN_ADMIN.COLLAPSE_ALL"|tu }}</span>*/
/*             </div>*/
/*         </form>*/
/*         <ul class="pages-list depth-0">*/
/*             {{ _self.loop(pages, 0, _context) }}*/
/*         </ul>*/
/*     {% endif %}*/
/*     </div>*/
/* */
/*     <div class="remodal" data-remodal-id="generic" data-remodal-options="hashTracking: false">*/
/*         <form>*/
/*             <h1>{{ "PLUGIN_ADMIN.ERROR"|tu }}</h1>*/
/*             <div class="error-content"></div>*/
/*             <div class="button-bar">*/
/*                 <a class="button remodal-confirm" href="#">{{ "PLUGIN_ADMIN.CLOSE"|tu }}</a>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* */
/*     {% if mode == 'list' %}*/
/*     <div class="remodal" data-remodal-id="modal" data-remodal-options="hashTracking: false">*/
/*         {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('pages/new'), data: context } %}*/
/*     </div>*/
/* */
/*     <div class="remodal" data-remodal-id="modular" data-remodal-options="hashTracking: false">*/
/*         {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('pages/modular_new'), data: context } %}*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     {% if mode == 'edit' %}*/
/*     <div class="remodal" data-remodal-id="move" data-remodal-options="hashTracking: false">*/
/* */
/*         {% include 'partials/page-move.html.twig' with { blueprints: admin.blueprints('pages/move'), data: context } %}*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     <div class="remodal" data-remodal-id="delete" data-remodal-options="hashTracking: false">*/
/*         <form>*/
/*             <h1>{{ "PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE"|tu }}</h1>*/
/*             <p class="bigger">*/
/*               {{ "PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC"|tu }}*/
/*             </p>*/
/*             <br>*/
/*             <div class="button-bar">*/
/*             <a class="button secondary remodal-cancel" href="#"><i class="fa fa-fw fa-close"></i> {{ "PLUGIN_ADMIN.CANCEL"|tu }}</a>*/
/*             <a class="button" data-delete-action href="#"><i class="fa fa-fw fa-check"></i> {{ "PLUGIN_ADMIN.CONTINUE"|tu }}</a>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* */
/* */
/*     <div class="remodal" data-remodal-id="changes">*/
/*         <form>*/
/*             <h1>{{ "PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_TITLE"|tu }}</h1>*/
/*             <p class="bigger">*/
/*                 {{ "PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_DESC"|tu }}*/
/*             </p>*/
/*             <br>*/
/*             <div class="button-bar">*/
/*             <a class="button secondary" data-leave-action="cancel" href="#"><i class="fa fa-fw fa-close"></i> {{ "PLUGIN_ADMIN.CANCEL"|tu }}</a>*/
/*             <a class="button" data-leave-action="continue" href="#"><i class="fa fa-fw fa-check"></i> {{ "PLUGIN_ADMIN.CONTINUE"|tu }}</a>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* */
/*     <div class="remodal" data-remodal-id="delete-media" data-remodal-options="hashTracking: false">*/
/*         <form>*/
/*             <h1>{{ "PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE"|tu }}</h1>*/
/*             <p class="bigger">*/
/*                 {{ "PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_DESC"|tu }}*/
/*             </p>*/
/*             <br>*/
/*             <div class="button-bar">*/
/*             <a class="button secondary remodal-cancel" href="#"><i class="fa fa-fw fa-close"></i> {{ "PLUGIN_ADMIN.CANCEL"|tu }}</a>*/
/*             <a class="button remodal-confirm" href="#"><i class="fa fa-fw fa-check"></i> {{ "PLUGIN_ADMIN.CONTINUE"|tu }}</a>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
/* */
