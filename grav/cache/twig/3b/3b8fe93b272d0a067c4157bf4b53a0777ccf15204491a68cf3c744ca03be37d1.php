<?php

/* partials/javascript-config.html.twig */
class __TwigTemplate_7d2ad922d43f7d053dd330ecdfb7897fea22c56294b418eb8281953dbcc0082b extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    window.GravAdmin = window.GravAdmin || {};
    window.GravAdmin.config = {
        base_url_relative: '";
        // line 4
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "',
        param_sep: '";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
        echo "',
        enable_auto_updates_check: '";
        // line 6
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "enable_auto_updates_check", array());
        echo "',
        admin_timeout: '";
        // line 7
        echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "session", array()), "timeout", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "session", array()), "timeout", array())) : (1800));
        echo "',
        admin_nonce: '";
        // line 8
        echo $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getNonce", array());
        echo "'
    };
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/javascript-config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     window.GravAdmin = window.GravAdmin || {};*/
/*     window.GravAdmin.config = {*/
/*         base_url_relative: '{{ base_url_relative }}',*/
/*         param_sep: '{{ config.system.param_sep }}',*/
/*         enable_auto_updates_check: '{{ config.plugins.admin.enable_auto_updates_check }}',*/
/*         admin_timeout: '{{ config.plugins.admin.session.timeout ?: 1800 }}',*/
/*         admin_nonce: '{{ admin.getNonce }}'*/
/*     };*/
/* </script>*/
/* */
