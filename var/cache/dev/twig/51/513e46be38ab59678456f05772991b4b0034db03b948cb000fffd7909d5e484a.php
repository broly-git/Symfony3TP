<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_25114d9643925b18aac968fa465e3537159aec1aeb133bff9bffef64057a5fca extends Twig_Template
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
        $__internal_4d2ebb4a37b74e4e74ab0022458e158870d6b2c9a18c0192550a6ce5dd185640 = $this->env->getExtension("native_profiler");
        $__internal_4d2ebb4a37b74e4e74ab0022458e158870d6b2c9a18c0192550a6ce5dd185640->enter($__internal_4d2ebb4a37b74e4e74ab0022458e158870d6b2c9a18c0192550a6ce5dd185640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4d2ebb4a37b74e4e74ab0022458e158870d6b2c9a18c0192550a6ce5dd185640->leave($__internal_4d2ebb4a37b74e4e74ab0022458e158870d6b2c9a18c0192550a6ce5dd185640_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
