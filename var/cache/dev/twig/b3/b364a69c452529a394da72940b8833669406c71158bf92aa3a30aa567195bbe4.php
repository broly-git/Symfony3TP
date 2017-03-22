<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_487e9e2073eff66f18214685cf4fcb06365e404d339166c73b4330158e0026a4 extends Twig_Template
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
        $__internal_266e6dda515e0728479d542e02e240e5ec5907cd0e459b293066f0f51a9f86b0 = $this->env->getExtension("native_profiler");
        $__internal_266e6dda515e0728479d542e02e240e5ec5907cd0e459b293066f0f51a9f86b0->enter($__internal_266e6dda515e0728479d542e02e240e5ec5907cd0e459b293066f0f51a9f86b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_266e6dda515e0728479d542e02e240e5ec5907cd0e459b293066f0f51a9f86b0->leave($__internal_266e6dda515e0728479d542e02e240e5ec5907cd0e459b293066f0f51a9f86b0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
