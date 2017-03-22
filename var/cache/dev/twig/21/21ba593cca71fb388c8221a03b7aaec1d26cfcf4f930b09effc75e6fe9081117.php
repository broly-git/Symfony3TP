<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5cc4608adc70e3cedd19fbeddcae1935ed0d96bb9e7cbc7b5198528bb632935a extends Twig_Template
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
        $__internal_522dba26f537b30ee3f6d3844a482907005697e4a02ef26dad44f66568345dc6 = $this->env->getExtension("native_profiler");
        $__internal_522dba26f537b30ee3f6d3844a482907005697e4a02ef26dad44f66568345dc6->enter($__internal_522dba26f537b30ee3f6d3844a482907005697e4a02ef26dad44f66568345dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_522dba26f537b30ee3f6d3844a482907005697e4a02ef26dad44f66568345dc6->leave($__internal_522dba26f537b30ee3f6d3844a482907005697e4a02ef26dad44f66568345dc6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
