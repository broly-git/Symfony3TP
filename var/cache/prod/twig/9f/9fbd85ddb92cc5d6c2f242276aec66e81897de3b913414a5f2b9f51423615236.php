<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_05f7a5fe1d346be88dfcb22bbd34c777a37105130368cbd48491924003d345ff extends Twig_Template
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
        $__internal_b3a6ce58df7b167df306ccf5a56385c6aafa722582b7dc48c8fb338f1ca6bd2a = $this->env->getExtension("native_profiler");
        $__internal_b3a6ce58df7b167df306ccf5a56385c6aafa722582b7dc48c8fb338f1ca6bd2a->enter($__internal_b3a6ce58df7b167df306ccf5a56385c6aafa722582b7dc48c8fb338f1ca6bd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3a6ce58df7b167df306ccf5a56385c6aafa722582b7dc48c8fb338f1ca6bd2a->leave($__internal_b3a6ce58df7b167df306ccf5a56385c6aafa722582b7dc48c8fb338f1ca6bd2a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ad96878eb85e060e1b7ba52ff58dee56900c7a9d2be9348a664be5127f28d2b = $this->env->getExtension("native_profiler");
        $__internal_8ad96878eb85e060e1b7ba52ff58dee56900c7a9d2be9348a664be5127f28d2b->enter($__internal_8ad96878eb85e060e1b7ba52ff58dee56900c7a9d2be9348a664be5127f28d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8ad96878eb85e060e1b7ba52ff58dee56900c7a9d2be9348a664be5127f28d2b->leave($__internal_8ad96878eb85e060e1b7ba52ff58dee56900c7a9d2be9348a664be5127f28d2b_prof);

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
