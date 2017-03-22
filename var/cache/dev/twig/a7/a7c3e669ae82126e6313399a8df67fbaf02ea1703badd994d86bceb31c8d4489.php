<?php

/* OCPlatformBundle:Advert:list.html.twig */
class __TwigTemplate_4bf644076dea740c3090306f02cb979095e0fd121747b94644a25dfaaf5f52fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:list.html.twig", 3);
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
        $__internal_d078c0e7bf1fbea9518ea2c91d1d6bd6dd181518eaf573690cb5fc15ee88ff64 = $this->env->getExtension("native_profiler");
        $__internal_d078c0e7bf1fbea9518ea2c91d1d6bd6dd181518eaf573690cb5fc15ee88ff64->enter($__internal_d078c0e7bf1fbea9518ea2c91d1d6bd6dd181518eaf573690cb5fc15ee88ff64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d078c0e7bf1fbea9518ea2c91d1d6bd6dd181518eaf573690cb5fc15ee88ff64->leave($__internal_d078c0e7bf1fbea9518ea2c91d1d6bd6dd181518eaf573690cb5fc15ee88ff64_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_98cd0d120ac92435c1abbda1a955e44fc93952cdce42145066d387248b0bfb7d = $this->env->getExtension("native_profiler");
        $__internal_98cd0d120ac92435c1abbda1a955e44fc93952cdce42145066d387248b0bfb7d->enter($__internal_98cd0d120ac92435c1abbda1a955e44fc93952cdce42145066d387248b0bfb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Lister les annonces</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:index.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_98cd0d120ac92435c1abbda1a955e44fc93952cdce42145066d387248b0bfb7d->leave($__internal_98cd0d120ac92435c1abbda1a955e44fc93952cdce42145066d387248b0bfb7d_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:list.html.twig";
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
/*   <h2>Lister les annonces</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:index.html.twig") }}*/
/* */
/*   <p>*/
/*     Attention : cette annonce sera ajoutée directement*/
/*     sur la page d'accueil après validation du formulaire.*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
