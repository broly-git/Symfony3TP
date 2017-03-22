<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f98a3b328568f0a2fd9791c59f410c5717f8c1bf0e933bb4046c8a5c06dc6b18 extends Twig_Template
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
        $__internal_51fe9cd01a71b7f75996a49022df5c6cacb8a58dfdfabe789350c244b2770e15 = $this->env->getExtension("native_profiler");
        $__internal_51fe9cd01a71b7f75996a49022df5c6cacb8a58dfdfabe789350c244b2770e15->enter($__internal_51fe9cd01a71b7f75996a49022df5c6cacb8a58dfdfabe789350c244b2770e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_51fe9cd01a71b7f75996a49022df5c6cacb8a58dfdfabe789350c244b2770e15->leave($__internal_51fe9cd01a71b7f75996a49022df5c6cacb8a58dfdfabe789350c244b2770e15_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
