<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_6841bc8ecf646c7d9a588cdf7fce27f7fe81640f23c917c66e2c97c0a6c72b5e extends Twig_Template
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
        $__internal_97694cca2f07435748c3197a7f1bc0fa63b976d6433f78e66005a71847b5b418 = $this->env->getExtension("native_profiler");
        $__internal_97694cca2f07435748c3197a7f1bc0fa63b976d6433f78e66005a71847b5b418->enter($__internal_97694cca2f07435748c3197a7f1bc0fa63b976d6433f78e66005a71847b5b418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_97694cca2f07435748c3197a7f1bc0fa63b976d6433f78e66005a71847b5b418->leave($__internal_97694cca2f07435748c3197a7f1bc0fa63b976d6433f78e66005a71847b5b418_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
