<?php

/* @OCPlatform/layout.html.twig */
class __TwigTemplate_f5aa597a599820820a6a86b0ccdd9a32fe5e28e1cad6ef9f64ee03054c90f1fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "@OCPlatform/layout.html.twig", 3);
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
        $__internal_430f9fd9281904c82ecfd5ce8d6644e04ac4eea1b3609c04a1a47ed599e2ed41 = $this->env->getExtension("native_profiler");
        $__internal_430f9fd9281904c82ecfd5ce8d6644e04ac4eea1b3609c04a1a47ed599e2ed41->enter($__internal_430f9fd9281904c82ecfd5ce8d6644e04ac4eea1b3609c04a1a47ed599e2ed41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_430f9fd9281904c82ecfd5ce8d6644e04ac4eea1b3609c04a1a47ed599e2ed41->leave($__internal_430f9fd9281904c82ecfd5ce8d6644e04ac4eea1b3609c04a1a47ed599e2ed41_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_01e35f8f01d0eed5849017d9ea04c0a07b19fd873275317fc9e0d8877c5a2175 = $this->env->getExtension("native_profiler");
        $__internal_01e35f8f01d0eed5849017d9ea04c0a07b19fd873275317fc9e0d8877c5a2175->enter($__internal_01e35f8f01d0eed5849017d9ea04c0a07b19fd873275317fc9e0d8877c5a2175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_01e35f8f01d0eed5849017d9ea04c0a07b19fd873275317fc9e0d8877c5a2175->leave($__internal_01e35f8f01d0eed5849017d9ea04c0a07b19fd873275317fc9e0d8877c5a2175_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff5370c78170762794d7317cea597881a3a831fe21e93ea3bfc72713a5248f84 = $this->env->getExtension("native_profiler");
        $__internal_ff5370c78170762794d7317cea597881a3a831fe21e93ea3bfc72713a5248f84->enter($__internal_ff5370c78170762794d7317cea597881a3a831fe21e93ea3bfc72713a5248f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ff5370c78170762794d7317cea597881a3a831fe21e93ea3bfc72713a5248f84->leave($__internal_ff5370c78170762794d7317cea597881a3a831fe21e93ea3bfc72713a5248f84_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_98bf2df05e437366a8c670395dcbcbff179a7e37692b20b3ed17131593c2fc45 = $this->env->getExtension("native_profiler");
        $__internal_98bf2df05e437366a8c670395dcbcbff179a7e37692b20b3ed17131593c2fc45->enter($__internal_98bf2df05e437366a8c670395dcbcbff179a7e37692b20b3ed17131593c2fc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_98bf2df05e437366a8c670395dcbcbff179a7e37692b20b3ed17131593c2fc45->leave($__internal_98bf2df05e437366a8c670395dcbcbff179a7e37692b20b3ed17131593c2fc45_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/layout.html.twig";
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
