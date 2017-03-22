<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_61e66ca61861868322844f44f3a323a30ed6a4d0f90c1c386ce420938e381814 extends Twig_Template
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
        $__internal_152f507a4a7d6b363fcfa685e558de1eebe8d05b51b8dbce8f8ceff585e4b414 = $this->env->getExtension("native_profiler");
        $__internal_152f507a4a7d6b363fcfa685e558de1eebe8d05b51b8dbce8f8ceff585e4b414->enter($__internal_152f507a4a7d6b363fcfa685e558de1eebe8d05b51b8dbce8f8ceff585e4b414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_152f507a4a7d6b363fcfa685e558de1eebe8d05b51b8dbce8f8ceff585e4b414->leave($__internal_152f507a4a7d6b363fcfa685e558de1eebe8d05b51b8dbce8f8ceff585e4b414_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
