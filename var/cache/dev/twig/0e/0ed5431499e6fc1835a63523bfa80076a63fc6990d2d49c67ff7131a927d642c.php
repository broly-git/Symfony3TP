<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_5b3d9506aa595460aff130b54fbf700305ccb00f7eea88f32dee26cd2b2b63eb extends Twig_Template
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
        $__internal_f78a19ffe942c03543a59cbe957f8de29139cba14d1e2cb59964c31d3c53cd83 = $this->env->getExtension("native_profiler");
        $__internal_f78a19ffe942c03543a59cbe957f8de29139cba14d1e2cb59964c31d3c53cd83->enter($__internal_f78a19ffe942c03543a59cbe957f8de29139cba14d1e2cb59964c31d3c53cd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_f78a19ffe942c03543a59cbe957f8de29139cba14d1e2cb59964c31d3c53cd83->leave($__internal_f78a19ffe942c03543a59cbe957f8de29139cba14d1e2cb59964c31d3c53cd83_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
