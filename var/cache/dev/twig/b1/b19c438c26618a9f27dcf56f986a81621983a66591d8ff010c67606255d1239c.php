<?php

/* @OCPlatform/Advert/delete.html.twig */
class __TwigTemplate_3fbfb4d8f197d1bbb171a5f49057548c3c5d49cbff70602b129ec705b726104c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/delete.html.twig", 3);
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
        $__internal_61eb454c9a37fb6f1118898e464a02de4df4884d38d7afe4f4b56de6587a2932 = $this->env->getExtension("native_profiler");
        $__internal_61eb454c9a37fb6f1118898e464a02de4df4884d38d7afe4f4b56de6587a2932->enter($__internal_61eb454c9a37fb6f1118898e464a02de4df4884d38d7afe4f4b56de6587a2932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61eb454c9a37fb6f1118898e464a02de4df4884d38d7afe4f4b56de6587a2932->leave($__internal_61eb454c9a37fb6f1118898e464a02de4df4884d38d7afe4f4b56de6587a2932_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_73d503a03fd5dbd8b5681c8ae97731520123219bc110746a5e8c195df35e3ab8 = $this->env->getExtension("native_profiler");
        $__internal_73d503a03fd5dbd8b5681c8ae97731520123219bc110746a5e8c195df35e3ab8->enter($__internal_73d503a03fd5dbd8b5681c8ae97731520123219bc110746a5e8c195df35e3ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_73d503a03fd5dbd8b5681c8ae97731520123219bc110746a5e8c195df35e3ab8->leave($__internal_73d503a03fd5dbd8b5681c8ae97731520123219bc110746a5e8c195df35e3ab8_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_9bd4ea4d391d8566fb22d2b17862a2801c0cb573c74eb91e2cb71812c392d7b1 = $this->env->getExtension("native_profiler");
        $__internal_9bd4ea4d391d8566fb22d2b17862a2801c0cb573c74eb91e2cb71812c392d7b1->enter($__internal_9bd4ea4d391d8566fb22d2b17862a2801c0cb573c74eb91e2cb71812c392d7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_9bd4ea4d391d8566fb22d2b17862a2801c0cb573c74eb91e2cb71812c392d7b1->leave($__internal_9bd4ea4d391d8566fb22d2b17862a2801c0cb573c74eb91e2cb71812c392d7b1_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/delete.html.twig";
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
