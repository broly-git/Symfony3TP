<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_31ea1952e7fe7351973c6db31bfa33c2e16d75677f3ddf54c5b5caa5ea1a399e extends Twig_Template
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
        $__internal_b186eae835eebf0b9f8be0cf1a122cc8326ff9627baa4f451ca2be26d618b5c9 = $this->env->getExtension("native_profiler");
        $__internal_b186eae835eebf0b9f8be0cf1a122cc8326ff9627baa4f451ca2be26d618b5c9->enter($__internal_b186eae835eebf0b9f8be0cf1a122cc8326ff9627baa4f451ca2be26d618b5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_b186eae835eebf0b9f8be0cf1a122cc8326ff9627baa4f451ca2be26d618b5c9->leave($__internal_b186eae835eebf0b9f8be0cf1a122cc8326ff9627baa4f451ca2be26d618b5c9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
