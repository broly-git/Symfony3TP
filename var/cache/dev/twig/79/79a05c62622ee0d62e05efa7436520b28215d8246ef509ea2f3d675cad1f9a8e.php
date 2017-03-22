<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_70e4b4f9414cc8a8eafceb4d37754b010f352ea299d7586450e617edf1419207 extends Twig_Template
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
        $__internal_8cee1cbe8a23e8d1bc75059c90a73ada86bb7d474e44ec45c770b4d153172461 = $this->env->getExtension("native_profiler");
        $__internal_8cee1cbe8a23e8d1bc75059c90a73ada86bb7d474e44ec45c770b4d153172461->enter($__internal_8cee1cbe8a23e8d1bc75059c90a73ada86bb7d474e44ec45c770b4d153172461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_8cee1cbe8a23e8d1bc75059c90a73ada86bb7d474e44ec45c770b4d153172461->leave($__internal_8cee1cbe8a23e8d1bc75059c90a73ada86bb7d474e44ec45c770b4d153172461_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
