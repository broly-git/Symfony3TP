<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_64613b5f0cbc714d9c69342c0138586c22515cb610b46843579b20af4eec9a85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b590c56cc1f11594776418526cb86b084893e3c8c16207d52f7dcb746d0f7b7 = $this->env->getExtension("native_profiler");
        $__internal_7b590c56cc1f11594776418526cb86b084893e3c8c16207d52f7dcb746d0f7b7->enter($__internal_7b590c56cc1f11594776418526cb86b084893e3c8c16207d52f7dcb746d0f7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b590c56cc1f11594776418526cb86b084893e3c8c16207d52f7dcb746d0f7b7->leave($__internal_7b590c56cc1f11594776418526cb86b084893e3c8c16207d52f7dcb746d0f7b7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f955c8795002aea84880ee88dd10694a25193bde13284de9d1ddff203e99578 = $this->env->getExtension("native_profiler");
        $__internal_5f955c8795002aea84880ee88dd10694a25193bde13284de9d1ddff203e99578->enter($__internal_5f955c8795002aea84880ee88dd10694a25193bde13284de9d1ddff203e99578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5f955c8795002aea84880ee88dd10694a25193bde13284de9d1ddff203e99578->leave($__internal_5f955c8795002aea84880ee88dd10694a25193bde13284de9d1ddff203e99578_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_63c1249d83847e64a925ea65cea0f2f603c42ede7d6958f2ed7f7ce4d5308a0d = $this->env->getExtension("native_profiler");
        $__internal_63c1249d83847e64a925ea65cea0f2f603c42ede7d6958f2ed7f7ce4d5308a0d->enter($__internal_63c1249d83847e64a925ea65cea0f2f603c42ede7d6958f2ed7f7ce4d5308a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_63c1249d83847e64a925ea65cea0f2f603c42ede7d6958f2ed7f7ce4d5308a0d->leave($__internal_63c1249d83847e64a925ea65cea0f2f603c42ede7d6958f2ed7f7ce4d5308a0d_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_5c613a329005b625c031f599f3f21966433741216fde3c61409b73bed318e9b6 = $this->env->getExtension("native_profiler");
        $__internal_5c613a329005b625c031f599f3f21966433741216fde3c61409b73bed318e9b6->enter($__internal_5c613a329005b625c031f599f3f21966433741216fde3c61409b73bed318e9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_5c613a329005b625c031f599f3f21966433741216fde3c61409b73bed318e9b6->leave($__internal_5c613a329005b625c031f599f3f21966433741216fde3c61409b73bed318e9b6_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "OCCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h1>Annonces</h1>*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block ocplatform_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
