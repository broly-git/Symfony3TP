<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cb1191379d0f95512cc356a0ebfea8090e2b26ebe6dcf103f2773ee59f8baa6d extends Twig_Template
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
        $__internal_cf117cb41a366a53b07b59bac955edee3e019b5cc33a938ac9eafe568b1f9eaf = $this->env->getExtension("native_profiler");
        $__internal_cf117cb41a366a53b07b59bac955edee3e019b5cc33a938ac9eafe568b1f9eaf->enter($__internal_cf117cb41a366a53b07b59bac955edee3e019b5cc33a938ac9eafe568b1f9eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_cf117cb41a366a53b07b59bac955edee3e019b5cc33a938ac9eafe568b1f9eaf->leave($__internal_cf117cb41a366a53b07b59bac955edee3e019b5cc33a938ac9eafe568b1f9eaf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
