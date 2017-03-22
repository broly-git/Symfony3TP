<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d8e65a0bbdf23b4264cc6cad460bf0313872b2e9e0ce29392a3fb81aa0b51dda extends Twig_Template
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
        $__internal_bf0182edfe5839a76cdd2f4679673c83f613cc0f567361c2d4438bedead2bb93 = $this->env->getExtension("native_profiler");
        $__internal_bf0182edfe5839a76cdd2f4679673c83f613cc0f567361c2d4438bedead2bb93->enter($__internal_bf0182edfe5839a76cdd2f4679673c83f613cc0f567361c2d4438bedead2bb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_bf0182edfe5839a76cdd2f4679673c83f613cc0f567361c2d4438bedead2bb93->leave($__internal_bf0182edfe5839a76cdd2f4679673c83f613cc0f567361c2d4438bedead2bb93_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
