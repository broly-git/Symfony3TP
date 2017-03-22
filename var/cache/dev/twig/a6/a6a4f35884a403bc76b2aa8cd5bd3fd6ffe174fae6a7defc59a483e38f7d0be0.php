<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_1513e47a1978d951bef871768d801365f6cf5069871f3d0fa1d38b6f30471d2c extends Twig_Template
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
        $__internal_fe1245140dfe22ec6e5068d771944df35f09757b739c7edec1a4f670239cbafc = $this->env->getExtension("native_profiler");
        $__internal_fe1245140dfe22ec6e5068d771944df35f09757b739c7edec1a4f670239cbafc->enter($__internal_fe1245140dfe22ec6e5068d771944df35f09757b739c7edec1a4f670239cbafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_fe1245140dfe22ec6e5068d771944df35f09757b739c7edec1a4f670239cbafc->leave($__internal_fe1245140dfe22ec6e5068d771944df35f09757b739c7edec1a4f670239cbafc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
