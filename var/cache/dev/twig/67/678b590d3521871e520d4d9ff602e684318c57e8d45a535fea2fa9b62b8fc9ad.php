<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_459e2a73ef73358243440891e9bc6fb9a603c2cf95cb3d1635ddf550fe7c6c70 extends Twig_Template
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
        $__internal_626d284930f7955dbd8e4281f9449e3e52b83f4b388b0f57af930a5d5aa8089a = $this->env->getExtension("native_profiler");
        $__internal_626d284930f7955dbd8e4281f9449e3e52b83f4b388b0f57af930a5d5aa8089a->enter($__internal_626d284930f7955dbd8e4281f9449e3e52b83f4b388b0f57af930a5d5aa8089a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_626d284930f7955dbd8e4281f9449e3e52b83f4b388b0f57af930a5d5aa8089a->leave($__internal_626d284930f7955dbd8e4281f9449e3e52b83f4b388b0f57af930a5d5aa8089a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
