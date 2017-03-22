<?php

/* OCPlatformBundle:Advert:delete.html.twig */
class __TwigTemplate_09e8a00c27fd3a027740744d6450c6d6d7e4dbea2671512d024ab3d8f3237f1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:delete.html.twig", 3);
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
        $__internal_d64f9e282abea609c52258e17ff788782ac33426930fcef83fa524e00a44f425 = $this->env->getExtension("native_profiler");
        $__internal_d64f9e282abea609c52258e17ff788782ac33426930fcef83fa524e00a44f425->enter($__internal_d64f9e282abea609c52258e17ff788782ac33426930fcef83fa524e00a44f425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d64f9e282abea609c52258e17ff788782ac33426930fcef83fa524e00a44f425->leave($__internal_d64f9e282abea609c52258e17ff788782ac33426930fcef83fa524e00a44f425_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbd71631efa229f76fa80760355111d358dbbf6d49463f249e7ec410259d0335 = $this->env->getExtension("native_profiler");
        $__internal_dbd71631efa229f76fa80760355111d358dbbf6d49463f249e7ec410259d0335->enter($__internal_dbd71631efa229f76fa80760355111d358dbbf6d49463f249e7ec410259d0335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dbd71631efa229f76fa80760355111d358dbbf6d49463f249e7ec410259d0335->leave($__internal_dbd71631efa229f76fa80760355111d358dbbf6d49463f249e7ec410259d0335_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_386b94078d5f1696b89f7ec400ebd704d48ec1e3c736cf2668df7dc83fbb3bde = $this->env->getExtension("native_profiler");
        $__internal_386b94078d5f1696b89f7ec400ebd704d48ec1e3c736cf2668df7dc83fbb3bde->enter($__internal_386b94078d5f1696b89f7ec400ebd704d48ec1e3c736cf2668df7dc83fbb3bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Supprimer une annonce</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'annonce \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
    ";
        // line 24
        echo "    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 26
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  </form>

";
        
        $__internal_386b94078d5f1696b89f7ec400ebd704d48ec1e3c736cf2668df7dc83fbb3bde->leave($__internal_386b94078d5f1696b89f7ec400ebd704d48ec1e3c736cf2668df7dc83fbb3bde_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  81 => 24,  74 => 19,  69 => 18,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/delete.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Supprimer une annonce</h2>*/
/* */
/*   <p>*/
/*     Etes-vous certain de vouloir supprimer l'annonce "{{ advert.title }}" ?*/
/*   </p>*/
/* */
/*   {# On met l'id de l'annonce dans la route de l'action du formulaire #}*/
/*   <form action="{{ path('oc_platform_delete', {'id': advert.id}) }}" method="post">*/
/*     <a href="{{ path('oc_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/*     {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*     <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*     {# Ceci va générer le champ CSRF #}*/
/*     {{ form_rest(form) }}*/
/*   </form>*/
/* */
/* {% endblock %}*/
