<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_2dd69e3fbb5afef1f8a91fb5f581ad0b5299253f9d32ff0b902273b30aa5426d extends Twig_Template
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
        $__internal_2c169c8916e106372cbe3a008d109ca14756dce2e49dd9d643cd7d7ef82b6cda = $this->env->getExtension("native_profiler");
        $__internal_2c169c8916e106372cbe3a008d109ca14756dce2e49dd9d643cd7d7ef82b6cda->enter($__internal_2c169c8916e106372cbe3a008d109ca14756dce2e49dd9d643cd7d7ef82b6cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2c169c8916e106372cbe3a008d109ca14756dce2e49dd9d643cd7d7ef82b6cda->leave($__internal_2c169c8916e106372cbe3a008d109ca14756dce2e49dd9d643cd7d7ef82b6cda_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
