<?php

/* OCCoreBundle::layout.html.twig */
class __TwigTemplate_9e1764451beb03e28d7777c18a3c91bc79d04fe7c1d88f50add352528d8acd6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_160684db24a45598c0bd040510d395334d568e8bd3a9fd91ace262e469cf4eea = $this->env->getExtension("native_profiler");
        $__internal_160684db24a45598c0bd040510d395334d568e8bd3a9fd91ace262e469cf4eea->enter($__internal_160684db24a45598c0bd040510d395334d568e8bd3a9fd91ace262e469cf4eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "  </head>

  <body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      
      <p>
       <!-- <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a> -->
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 38
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>Application développée par Brudele NGOUBILI LIKIBI © ";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - 44000 - Nantes</p>
    </footer>
  </div>

  ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "
  </body>
</html>
";
        
        $__internal_160684db24a45598c0bd040510d395334d568e8bd3a9fd91ace262e469cf4eea->leave($__internal_160684db24a45598c0bd040510d395334d568e8bd3a9fd91ace262e469cf4eea_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e76d5733507591fb331672d5fa44cce93e9b6110a9161336dff4a5b5fbec7ec = $this->env->getExtension("native_profiler");
        $__internal_6e76d5733507591fb331672d5fa44cce93e9b6110a9161336dff4a5b5fbec7ec->enter($__internal_6e76d5733507591fb331672d5fa44cce93e9b6110a9161336dff4a5b5fbec7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_6e76d5733507591fb331672d5fa44cce93e9b6110a9161336dff4a5b5fbec7ec->leave($__internal_6e76d5733507591fb331672d5fa44cce93e9b6110a9161336dff4a5b5fbec7ec_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_01328fa545d74c7d774141df15339976adf6ce11e2ee05045702c8cfc8f42442 = $this->env->getExtension("native_profiler");
        $__internal_01328fa545d74c7d774141df15339976adf6ce11e2ee05045702c8cfc8f42442->enter($__internal_01328fa545d74c7d774141df15339976adf6ce11e2ee05045702c8cfc8f42442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "      ";
        // line 13
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_01328fa545d74c7d774141df15339976adf6ce11e2ee05045702c8cfc8f42442->leave($__internal_01328fa545d74c7d774141df15339976adf6ce11e2ee05045702c8cfc8f42442_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d501ccf0a7d5d066ceb9271575f7c3b0f92be432b08faea1e750a966eba9180 = $this->env->getExtension("native_profiler");
        $__internal_3d501ccf0a7d5d066ceb9271575f7c3b0f92be432b08faea1e750a966eba9180->enter($__internal_3d501ccf0a7d5d066ceb9271575f7c3b0f92be432b08faea1e750a966eba9180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        ";
        
        $__internal_3d501ccf0a7d5d066ceb9271575f7c3b0f92be432b08faea1e750a966eba9180->leave($__internal_3d501ccf0a7d5d066ceb9271575f7c3b0f92be432b08faea1e750a966eba9180_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a6deb4d6a53cc4a865c7c72023502e1490eba2a7406f3a2e91800154d3389ba7 = $this->env->getExtension("native_profiler");
        $__internal_a6deb4d6a53cc4a865c7c72023502e1490eba2a7406f3a2e91800154d3389ba7->enter($__internal_a6deb4d6a53cc4a865c7c72023502e1490eba2a7406f3a2e91800154d3389ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "    ";
        // line 55
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_a6deb4d6a53cc4a865c7c72023502e1490eba2a7406f3a2e91800154d3389ba7->leave($__internal_a6deb4d6a53cc4a865c7c72023502e1490eba2a7406f3a2e91800154d3389ba7_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 55,  155 => 54,  149 => 53,  142 => 42,  136 => 41,  128 => 13,  126 => 12,  120 => 11,  108 => 9,  98 => 58,  96 => 53,  89 => 49,  81 => 43,  79 => 41,  73 => 38,  66 => 34,  62 => 33,  42 => 15,  40 => 11,  35 => 9,  26 => 2,);
    }
}
/* {# src/OC/CoreBundle/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <title>{% block title %}OC Plateforme{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*       {# On charge le CSS de bootstrap depuis le site directement #}*/
/*       <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*     {% endblock %}*/
/*   </head>*/
/* */
/*   <body>*/
/*   <div class="container">*/
/*     <div id="header" class="jumbotron">*/
/*       <h1>Ma plateforme d'annonces</h1>*/
/*       */
/*       <p>*/
/*        <!-- <a class="btn btn-primary btn-lg" href="https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2">*/
/*           Participer au MOOC »*/
/*         </a> -->*/
/*       </p>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*       <div id="menu" class="col-md-3">*/
/*         <h3>Les annonces</h3>*/
/*         <ul class="nav nav-pills nav-stacked">*/
/*           <li><a href="{{ path('oc_platform_home') }}">Accueil</a></li>*/
/*           <li><a href="{{ path('oc_platform_add') }}">Ajouter une annonce</a></li>*/
/*         </ul>*/
/* */
/*         <h4>Dernières annonces</h4>*/
/*         {{ render(controller("OCPlatformBundle:Advert:menu", {'limit': 3})) }}*/
/*       </div>*/
/*       <div id="content" class="col-md-9">*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/* */
/*     <footer>*/
/*       <p>Application développée par Brudele NGOUBILI LIKIBI © {{ 'now'|date('Y') }} - 44000 - Nantes</p>*/
/*     </footer>*/
/*   </div>*/
/* */
/*   {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/* */
/*   </body>*/
/* </html>*/
/* */
