<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_8511d4a3346c8d08c7de06314631fe91266822f14e72aee02e49bb0fb2e8a66e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51198066f1ece2c90c7419c60ee3e295a62ce044e6912af253456d03ba4f52de = $this->env->getExtension("native_profiler");
        $__internal_51198066f1ece2c90c7419c60ee3e295a62ce044e6912af253456d03ba4f52de->enter($__internal_51198066f1ece2c90c7419c60ee3e295a62ce044e6912af253456d03ba4f52de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51198066f1ece2c90c7419c60ee3e295a62ce044e6912af253456d03ba4f52de->leave($__internal_51198066f1ece2c90c7419c60ee3e295a62ce044e6912af253456d03ba4f52de_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_72cca22c863b6283a5aa9958731bd75a8767fe57babe3ae0c29995973992470f = $this->env->getExtension("native_profiler");
        $__internal_72cca22c863b6283a5aa9958731bd75a8767fe57babe3ae0c29995973992470f->enter($__internal_72cca22c863b6283a5aa9958731bd75a8767fe57babe3ae0c29995973992470f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_72cca22c863b6283a5aa9958731bd75a8767fe57babe3ae0c29995973992470f->leave($__internal_72cca22c863b6283a5aa9958731bd75a8767fe57babe3ae0c29995973992470f_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_9563078ba9e5b3484b5c6d075e813b6298c37cb969297a5c62ff85ba3376eb0b = $this->env->getExtension("native_profiler");
        $__internal_9563078ba9e5b3484b5c6d075e813b6298c37cb969297a5c62ff85ba3376eb0b->enter($__internal_9563078ba9e5b3484b5c6d075e813b6298c37cb969297a5c62ff85ba3376eb0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_9563078ba9e5b3484b5c6d075e813b6298c37cb969297a5c62ff85ba3376eb0b->leave($__internal_9563078ba9e5b3484b5c6d075e813b6298c37cb969297a5c62ff85ba3376eb0b_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Modifier une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez une annonce déjà existante, merci de ne pas changer*/
/*     l'esprit générale de l'annonce déjà publiée.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('oc_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
