<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_58b86cf91c6fc7d1e9af931fab150a57011b7e6956d77dd103f7e95355f174d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'liste' => array($this, 'block_liste'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0454286e7e4a93f15d76e58da273cf7bae2f90e5d4062794cac5120596c3579e = $this->env->getExtension("native_profiler");
        $__internal_0454286e7e4a93f15d76e58da273cf7bae2f90e5d4062794cac5120596c3579e->enter($__internal_0454286e7e4a93f15d76e58da273cf7bae2f90e5d4062794cac5120596c3579e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0454286e7e4a93f15d76e58da273cf7bae2f90e5d4062794cac5120596c3579e->leave($__internal_0454286e7e4a93f15d76e58da273cf7bae2f90e5d4062794cac5120596c3579e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3f5ac6c15fe04f5fb6038d5ced45bc67606f5e2682ea6561c91f5b376d5b56a = $this->env->getExtension("native_profiler");
        $__internal_c3f5ac6c15fe04f5fb6038d5ced45bc67606f5e2682ea6561c91f5b376d5b56a->enter($__internal_c3f5ac6c15fe04f5fb6038d5ced45bc67606f5e2682ea6561c91f5b376d5b56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c3f5ac6c15fe04f5fb6038d5ced45bc67606f5e2682ea6561c91f5b376d5b56a->leave($__internal_c3f5ac6c15fe04f5fb6038d5ced45bc67606f5e2682ea6561c91f5b376d5b56a_prof);

    }

    // line 9
    public function block_liste($context, array $blocks = array())
    {
        $__internal_3aef5dfde69db3a9176a8e37a9d11edcdfc702fee7d2b67f682dcd6a09765103 = $this->env->getExtension("native_profiler");
        $__internal_3aef5dfde69db3a9176a8e37a9d11edcdfc702fee7d2b67f682dcd6a09765103->enter($__internal_3aef5dfde69db3a9176a8e37a9d11edcdfc702fee7d2b67f682dcd6a09765103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liste"));

        // line 10
        echo "  Liste des annonces - ";
        $this->displayParentBlock("liste", $context, $blocks);
        echo "
";
        
        $__internal_3aef5dfde69db3a9176a8e37a9d11edcdfc702fee7d2b67f682dcd6a09765103->leave($__internal_3aef5dfde69db3a9176a8e37a9d11edcdfc702fee7d2b67f682dcd6a09765103_prof);

    }

    // line 13
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_328a9ecf7d0319bd4ea69df2d40e699f80c4b15a8f0a57194b981739df47a32a = $this->env->getExtension("native_profiler");
        $__internal_328a9ecf7d0319bd4ea69df2d40e699f80c4b15a8f0a57194b981739df47a32a->enter($__internal_328a9ecf7d0319bd4ea69df2d40e699f80c4b15a8f0a57194b981739df47a32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 14
        echo "
  <h2>Liste des annonces</h2>

  <ul>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 19
            echo "      <li>
        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "  </ul>

  <ul class=\"pagination\">
    ";
        // line 33
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 34
            echo "      <li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_home", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "  </ul>

";
        
        $__internal_328a9ecf7d0319bd4ea69df2d40e699f80c4b15a8f0a57194b981739df47a32a->leave($__internal_328a9ecf7d0319bd4ea69df2d40e699f80c4b15a8f0a57194b981739df47a32a_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 38,  133 => 35,  126 => 34,  121 => 33,  116 => 29,  109 => 27,  101 => 24,  97 => 23,  92 => 21,  88 => 20,  85 => 19,  80 => 18,  74 => 14,  68 => 13,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block liste %}*/
/*   Liste des annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Liste des annonces</h2>*/
/* */
/*   <ul>*/
/*     {% for advert in listAdverts %}*/
/*       <li>*/
/*         <a href="{{ path('oc_platform_view', {'id': advert.id}) }}">*/
/*           {{ advert.title }}*/
/*         </a>*/
/*         par {{ advert.author }},*/
/*         le {{ advert.date|date('d/m/Y') }}*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) d'annonces</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/*   <ul class="pagination">*/
/*     {# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}*/
/*     {% for p in range(1, nbPages) %}*/
/*       <li{% if p == page %} class="active"{% endif %}>*/
/*         <a href="{{ path('oc_platform_home', {'page': p}) }}">{{ p }}</a>*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/* {% endblock %}*/
/* */
