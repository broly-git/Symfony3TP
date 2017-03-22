<?php

/* @OCCore/layout.html.twig */
class __TwigTemplate_221cdbf6a0d64b7519e8a5222d7492e2f930d50a370def70c7abd1cb2432e5da extends Twig_Template
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
        $__internal_75a7e52e7e53f95654c483e3a794ec9b87d1c48437a282cdceb22067ab632215 = $this->env->getExtension("native_profiler");
        $__internal_75a7e52e7e53f95654c483e3a794ec9b87d1c48437a282cdceb22067ab632215->enter($__internal_75a7e52e7e53f95654c483e3a794ec9b87d1c48437a282cdceb22067ab632215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCCore/layout.html.twig"));

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
        
        $__internal_75a7e52e7e53f95654c483e3a794ec9b87d1c48437a282cdceb22067ab632215->leave($__internal_75a7e52e7e53f95654c483e3a794ec9b87d1c48437a282cdceb22067ab632215_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca072b4c3ff2d26380796b037c91c1a72372a71f5abd791c6d968b1da52c56a7 = $this->env->getExtension("native_profiler");
        $__internal_ca072b4c3ff2d26380796b037c91c1a72372a71f5abd791c6d968b1da52c56a7->enter($__internal_ca072b4c3ff2d26380796b037c91c1a72372a71f5abd791c6d968b1da52c56a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_ca072b4c3ff2d26380796b037c91c1a72372a71f5abd791c6d968b1da52c56a7->leave($__internal_ca072b4c3ff2d26380796b037c91c1a72372a71f5abd791c6d968b1da52c56a7_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4c40806163381451df4ea0a6199c3e2eff969b9c45ffa3252bd91a1ea6b05829 = $this->env->getExtension("native_profiler");
        $__internal_4c40806163381451df4ea0a6199c3e2eff969b9c45ffa3252bd91a1ea6b05829->enter($__internal_4c40806163381451df4ea0a6199c3e2eff969b9c45ffa3252bd91a1ea6b05829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "      ";
        // line 13
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_4c40806163381451df4ea0a6199c3e2eff969b9c45ffa3252bd91a1ea6b05829->leave($__internal_4c40806163381451df4ea0a6199c3e2eff969b9c45ffa3252bd91a1ea6b05829_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fb5f3f61bf4bcb4995c53e8e678bef8f4320c13951eee08253b4856a7ac73e3 = $this->env->getExtension("native_profiler");
        $__internal_8fb5f3f61bf4bcb4995c53e8e678bef8f4320c13951eee08253b4856a7ac73e3->enter($__internal_8fb5f3f61bf4bcb4995c53e8e678bef8f4320c13951eee08253b4856a7ac73e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        ";
        
        $__internal_8fb5f3f61bf4bcb4995c53e8e678bef8f4320c13951eee08253b4856a7ac73e3->leave($__internal_8fb5f3f61bf4bcb4995c53e8e678bef8f4320c13951eee08253b4856a7ac73e3_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b09c58e1fdbe3638bd33072eb2258b58adeb569b52aeedf95c05ed25ed12ad75 = $this->env->getExtension("native_profiler");
        $__internal_b09c58e1fdbe3638bd33072eb2258b58adeb569b52aeedf95c05ed25ed12ad75->enter($__internal_b09c58e1fdbe3638bd33072eb2258b58adeb569b52aeedf95c05ed25ed12ad75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "    ";
        // line 55
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_b09c58e1fdbe3638bd33072eb2258b58adeb569b52aeedf95c05ed25ed12ad75->leave($__internal_b09c58e1fdbe3638bd33072eb2258b58adeb569b52aeedf95c05ed25ed12ad75_prof);

    }

    public function getTemplateName()
    {
        return "@OCCore/layout.html.twig";
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
