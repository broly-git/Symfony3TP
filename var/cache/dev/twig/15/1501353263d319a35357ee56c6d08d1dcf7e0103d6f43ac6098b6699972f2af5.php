<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_55f4e2eb7b0ddaf07eb15e40c5430fa9461d50dcc54282add7c23a57a0213869 extends Twig_Template
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
        $__internal_09e3d6dbb0cfe1cc8b7a221db9cc4f51cf5ad9ef823d041869cfa2657b9a2bea = $this->env->getExtension("native_profiler");
        $__internal_09e3d6dbb0cfe1cc8b7a221db9cc4f51cf5ad9ef823d041869cfa2657b9a2bea->enter($__internal_09e3d6dbb0cfe1cc8b7a221db9cc4f51cf5ad9ef823d041869cfa2657b9a2bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09e3d6dbb0cfe1cc8b7a221db9cc4f51cf5ad9ef823d041869cfa2657b9a2bea->leave($__internal_09e3d6dbb0cfe1cc8b7a221db9cc4f51cf5ad9ef823d041869cfa2657b9a2bea_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c41a0d3da862e7bd41937f8361e10f2e79231653fb33ba46a378a698073b1240 = $this->env->getExtension("native_profiler");
        $__internal_c41a0d3da862e7bd41937f8361e10f2e79231653fb33ba46a378a698073b1240->enter($__internal_c41a0d3da862e7bd41937f8361e10f2e79231653fb33ba46a378a698073b1240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c41a0d3da862e7bd41937f8361e10f2e79231653fb33ba46a378a698073b1240->leave($__internal_c41a0d3da862e7bd41937f8361e10f2e79231653fb33ba46a378a698073b1240_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_3e5b7317d9eea52ae5bbb3a1fa329f0b28e0cfe09f2e207e7355bdc2ef150af9 = $this->env->getExtension("native_profiler");
        $__internal_3e5b7317d9eea52ae5bbb3a1fa329f0b28e0cfe09f2e207e7355bdc2ef150af9->enter($__internal_3e5b7317d9eea52ae5bbb3a1fa329f0b28e0cfe09f2e207e7355bdc2ef150af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_3e5b7317d9eea52ae5bbb3a1fa329f0b28e0cfe09f2e207e7355bdc2ef150af9->leave($__internal_3e5b7317d9eea52ae5bbb3a1fa329f0b28e0cfe09f2e207e7355bdc2ef150af9_prof);

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
