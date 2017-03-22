<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_e837005d5adbb235541a02554113cab30a4075d2314a36d8731d1b71992e9b18 extends Twig_Template
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
        $__internal_f30e7aa39e26ccd845237933de26f62cbb6a950cb00888eb986489c532c80da6 = $this->env->getExtension("native_profiler");
        $__internal_f30e7aa39e26ccd845237933de26f62cbb6a950cb00888eb986489c532c80da6->enter($__internal_f30e7aa39e26ccd845237933de26f62cbb6a950cb00888eb986489c532c80da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f30e7aa39e26ccd845237933de26f62cbb6a950cb00888eb986489c532c80da6->leave($__internal_f30e7aa39e26ccd845237933de26f62cbb6a950cb00888eb986489c532c80da6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
