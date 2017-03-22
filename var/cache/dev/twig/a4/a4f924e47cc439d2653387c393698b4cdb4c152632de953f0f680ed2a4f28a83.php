<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_809a6d32363a1035b4102b31bdedea99f26d439208af6e40991d2564ed945b49 extends Twig_Template
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
        $__internal_dd4212b7fd582477328e17e53084fb61e76f0d3dc5d57d9694df441abe05aef3 = $this->env->getExtension("native_profiler");
        $__internal_dd4212b7fd582477328e17e53084fb61e76f0d3dc5d57d9694df441abe05aef3->enter($__internal_dd4212b7fd582477328e17e53084fb61e76f0d3dc5d57d9694df441abe05aef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_dd4212b7fd582477328e17e53084fb61e76f0d3dc5d57d9694df441abe05aef3->leave($__internal_dd4212b7fd582477328e17e53084fb61e76f0d3dc5d57d9694df441abe05aef3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
