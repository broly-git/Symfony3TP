<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_4fa4841b1d9cf308a25466802752e6095fc58c66c76697cc5c2fa68a544ebfae extends Twig_Template
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
        $__internal_142569b2ef98ed192b9adbb53974566217dfe8bb66a2094c652871ff1393afea = $this->env->getExtension("native_profiler");
        $__internal_142569b2ef98ed192b9adbb53974566217dfe8bb66a2094c652871ff1393afea->enter($__internal_142569b2ef98ed192b9adbb53974566217dfe8bb66a2094c652871ff1393afea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_142569b2ef98ed192b9adbb53974566217dfe8bb66a2094c652871ff1393afea->leave($__internal_142569b2ef98ed192b9adbb53974566217dfe8bb66a2094c652871ff1393afea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
