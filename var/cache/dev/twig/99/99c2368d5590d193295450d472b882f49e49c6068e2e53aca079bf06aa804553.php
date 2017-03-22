<?php

/* @OCPlatform/Advert/add.html.twig */
class __TwigTemplate_30d245f8f9b5118532d0b1603cee9d08b45aeb63b93aa46052143fd0d5b26702 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43380f2a022829b62c1702c9f75e8e6340b276a195ef835af8dd846f37b85983 = $this->env->getExtension("native_profiler");
        $__internal_43380f2a022829b62c1702c9f75e8e6340b276a195ef835af8dd846f37b85983->enter($__internal_43380f2a022829b62c1702c9f75e8e6340b276a195ef835af8dd846f37b85983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43380f2a022829b62c1702c9f75e8e6340b276a195ef835af8dd846f37b85983->leave($__internal_43380f2a022829b62c1702c9f75e8e6340b276a195ef835af8dd846f37b85983_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_18c6e22d43290fa8c3948b990c20343f42abf1c68132fc07c39a9be861ba09b2 = $this->env->getExtension("native_profiler");
        $__internal_18c6e22d43290fa8c3948b990c20343f42abf1c68132fc07c39a9be861ba09b2->enter($__internal_18c6e22d43290fa8c3948b990c20343f42abf1c68132fc07c39a9be861ba09b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_18c6e22d43290fa8c3948b990c20343f42abf1c68132fc07c39a9be861ba09b2->leave($__internal_18c6e22d43290fa8c3948b990c20343f42abf1c68132fc07c39a9be861ba09b2_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Ajouter une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Attention : cette annonce sera ajoutée directement*/
/*     sur la page d'accueil après validation du formulaire.*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
