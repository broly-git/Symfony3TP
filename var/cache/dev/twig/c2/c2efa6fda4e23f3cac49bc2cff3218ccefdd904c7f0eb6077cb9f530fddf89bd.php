<?php

/* @OCPlatform/Advert/list.html.twig */
class __TwigTemplate_d6d9f8d7e8188f828cb76efe0a778b99257182f3a5608a382c2d933b56acc2d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/list.html.twig", 3);
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
        $__internal_31e3b024716d03eea466d128ec46b2278f68334429bc65605b1e7fa8f2e8e237 = $this->env->getExtension("native_profiler");
        $__internal_31e3b024716d03eea466d128ec46b2278f68334429bc65605b1e7fa8f2e8e237->enter($__internal_31e3b024716d03eea466d128ec46b2278f68334429bc65605b1e7fa8f2e8e237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31e3b024716d03eea466d128ec46b2278f68334429bc65605b1e7fa8f2e8e237->leave($__internal_31e3b024716d03eea466d128ec46b2278f68334429bc65605b1e7fa8f2e8e237_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_08a627eaa916add0061ccf17f4bf357f7667a528dc2013284ebd78e96ae018e8 = $this->env->getExtension("native_profiler");
        $__internal_08a627eaa916add0061ccf17f4bf357f7667a528dc2013284ebd78e96ae018e8->enter($__internal_08a627eaa916add0061ccf17f4bf357f7667a528dc2013284ebd78e96ae018e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_08a627eaa916add0061ccf17f4bf357f7667a528dc2013284ebd78e96ae018e8->leave($__internal_08a627eaa916add0061ccf17f4bf357f7667a528dc2013284ebd78e96ae018e8_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/list.html.twig";
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
