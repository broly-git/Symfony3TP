<?php

/* @OCPlatform/Advert/edit.html.twig */
class __TwigTemplate_08abd02ac2e0379569772690b83f1982e6d5fd0983c5c3c9c91691cae1fe7125 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/edit.html.twig", 3);
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
        $__internal_1f968084ebe3d0dcc3f2a67a02372e69783f3437bf58072fcba6d5afb8931a26 = $this->env->getExtension("native_profiler");
        $__internal_1f968084ebe3d0dcc3f2a67a02372e69783f3437bf58072fcba6d5afb8931a26->enter($__internal_1f968084ebe3d0dcc3f2a67a02372e69783f3437bf58072fcba6d5afb8931a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f968084ebe3d0dcc3f2a67a02372e69783f3437bf58072fcba6d5afb8931a26->leave($__internal_1f968084ebe3d0dcc3f2a67a02372e69783f3437bf58072fcba6d5afb8931a26_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c4ab87ef3d3d515572c5a0e7a856199f39fccf1c2ef868717ec9618b63109d9 = $this->env->getExtension("native_profiler");
        $__internal_4c4ab87ef3d3d515572c5a0e7a856199f39fccf1c2ef868717ec9618b63109d9->enter($__internal_4c4ab87ef3d3d515572c5a0e7a856199f39fccf1c2ef868717ec9618b63109d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4c4ab87ef3d3d515572c5a0e7a856199f39fccf1c2ef868717ec9618b63109d9->leave($__internal_4c4ab87ef3d3d515572c5a0e7a856199f39fccf1c2ef868717ec9618b63109d9_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_528a4769539f81e77959e7dc3097e418aae99f76fec75d560c16e5f8d0e52549 = $this->env->getExtension("native_profiler");
        $__internal_528a4769539f81e77959e7dc3097e418aae99f76fec75d560c16e5f8d0e52549->enter($__internal_528a4769539f81e77959e7dc3097e418aae99f76fec75d560c16e5f8d0e52549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_528a4769539f81e77959e7dc3097e418aae99f76fec75d560c16e5f8d0e52549->leave($__internal_528a4769539f81e77959e7dc3097e418aae99f76fec75d560c16e5f8d0e52549_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/edit.html.twig";
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
