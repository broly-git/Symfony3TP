<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_41da92c13ff8ab856d2b4e6c2b96f61a74f613408b1d8b85ef1424457f08335b extends Twig_Template
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
        $__internal_0204dd4ffe9caa9776cf201103f7e9950a0d743f819849a2b7831cb589be4446 = $this->env->getExtension("native_profiler");
        $__internal_0204dd4ffe9caa9776cf201103f7e9950a0d743f819849a2b7831cb589be4446->enter($__internal_0204dd4ffe9caa9776cf201103f7e9950a0d743f819849a2b7831cb589be4446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0204dd4ffe9caa9776cf201103f7e9950a0d743f819849a2b7831cb589be4446->leave($__internal_0204dd4ffe9caa9776cf201103f7e9950a0d743f819849a2b7831cb589be4446_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4276d1aeaa4d0acedde2e8e17591bd42a5885fe1f7ed172ec8c4f1314e80a20f = $this->env->getExtension("native_profiler");
        $__internal_4276d1aeaa4d0acedde2e8e17591bd42a5885fe1f7ed172ec8c4f1314e80a20f->enter($__internal_4276d1aeaa4d0acedde2e8e17591bd42a5885fe1f7ed172ec8c4f1314e80a20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4276d1aeaa4d0acedde2e8e17591bd42a5885fe1f7ed172ec8c4f1314e80a20f->leave($__internal_4276d1aeaa4d0acedde2e8e17591bd42a5885fe1f7ed172ec8c4f1314e80a20f_prof);

    }

    // line 9
    public function block_liste($context, array $blocks = array())
    {
        $__internal_8ea0f982a4931f1152efd37ae95b70e4097dfb8249669500d63318b60d9829ff = $this->env->getExtension("native_profiler");
        $__internal_8ea0f982a4931f1152efd37ae95b70e4097dfb8249669500d63318b60d9829ff->enter($__internal_8ea0f982a4931f1152efd37ae95b70e4097dfb8249669500d63318b60d9829ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liste"));

        // line 10
        echo "  Liste des annonces - ";
        $this->displayParentBlock("liste", $context, $blocks);
        echo "
";
        
        $__internal_8ea0f982a4931f1152efd37ae95b70e4097dfb8249669500d63318b60d9829ff->leave($__internal_8ea0f982a4931f1152efd37ae95b70e4097dfb8249669500d63318b60d9829ff_prof);

    }

    // line 13
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_9749bea8c1bfe3bef9ec17f368c71695b46b6cce6fa81ed343062a7f7bd2ee56 = $this->env->getExtension("native_profiler");
        $__internal_9749bea8c1bfe3bef9ec17f368c71695b46b6cce6fa81ed343062a7f7bd2ee56->enter($__internal_9749bea8c1bfe3bef9ec17f368c71695b46b6cce6fa81ed343062a7f7bd2ee56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_9749bea8c1bfe3bef9ec17f368c71695b46b6cce6fa81ed343062a7f7bd2ee56->leave($__internal_9749bea8c1bfe3bef9ec17f368c71695b46b6cce6fa81ed343062a7f7bd2ee56_prof);

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
