<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_b4b20421be20b831850f7c8608a17e4271a8abec50508364c1465dd6c0aac397 extends Twig_Template
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
        $__internal_0842372518ca5737692704dcd4e921a8192df64d99cb3425d9ac15c58839c9d4 = $this->env->getExtension("native_profiler");
        $__internal_0842372518ca5737692704dcd4e921a8192df64d99cb3425d9ac15c58839c9d4->enter($__internal_0842372518ca5737692704dcd4e921a8192df64d99cb3425d9ac15c58839c9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_0842372518ca5737692704dcd4e921a8192df64d99cb3425d9ac15c58839c9d4->leave($__internal_0842372518ca5737692704dcd4e921a8192df64d99cb3425d9ac15c58839c9d4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
