<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_be0e22cce309c60a7cca2e17cd49b727aa33659e7d2454716c5295dbcc34d6f1 extends Twig_Template
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
        $__internal_d0f729479c25f83a505c864ada004802409c235d933d7a7828de5d5012c937e9 = $this->env->getExtension("native_profiler");
        $__internal_d0f729479c25f83a505c864ada004802409c235d933d7a7828de5d5012c937e9->enter($__internal_d0f729479c25f83a505c864ada004802409c235d933d7a7828de5d5012c937e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d0f729479c25f83a505c864ada004802409c235d933d7a7828de5d5012c937e9->leave($__internal_d0f729479c25f83a505c864ada004802409c235d933d7a7828de5d5012c937e9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
