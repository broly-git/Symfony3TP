<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_8a9ad7a7b303253f93b48d74b0c90df4930d6f7c6e277ce097c4ab5f0d90ad27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
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
        $__internal_1b0145b49cd124bec29fe17a767b1623bb814fcac17633ddc2d21a6df43b8af5 = $this->env->getExtension("native_profiler");
        $__internal_1b0145b49cd124bec29fe17a767b1623bb814fcac17633ddc2d21a6df43b8af5->enter($__internal_1b0145b49cd124bec29fe17a767b1623bb814fcac17633ddc2d21a6df43b8af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b0145b49cd124bec29fe17a767b1623bb814fcac17633ddc2d21a6df43b8af5->leave($__internal_1b0145b49cd124bec29fe17a767b1623bb814fcac17633ddc2d21a6df43b8af5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_375b7400a9324c65492892008481430f18c808c2441d87628fcee7a5ee68964c = $this->env->getExtension("native_profiler");
        $__internal_375b7400a9324c65492892008481430f18c808c2441d87628fcee7a5ee68964c->enter($__internal_375b7400a9324c65492892008481430f18c808c2441d87628fcee7a5ee68964c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_375b7400a9324c65492892008481430f18c808c2441d87628fcee7a5ee68964c->leave($__internal_375b7400a9324c65492892008481430f18c808c2441d87628fcee7a5ee68964c_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
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
