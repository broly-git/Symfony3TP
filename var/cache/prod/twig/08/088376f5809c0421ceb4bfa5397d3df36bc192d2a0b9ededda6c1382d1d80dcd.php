<?php

/* OCUserBundle:Security:login.html.twig */
class __TwigTemplate_8167d4bffdd2407200ae6a8d30e11c2c3a6b19baa4d465a6d1f82f06cb39d1a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCUserBundle:Security:login.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
\t";
        // line 7
        echo "\t";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 8
            echo "\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 10
        echo "
\t";
        // line 12
        echo "\t<form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
\t\t<label for=\"username\">Login :</label>
\t\t<input type=\"text\"  id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" />

\t\t<label for=\"password\">Mot de passe :</label>
\t\t<input type=\"password\"  id=\"password\" name=\"_password\" />
\t\t<br />
\t\t<input type=\"submit\" value=\"Connexion\">
\t</form>
";
    }

    public function getTemplateName()
    {
        return "OCUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  46 => 12,  43 => 10,  37 => 8,  34 => 7,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "OCCoreBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* 	{# s'il ya une erreur, on l'affiche dans un joli cadre #}*/
/* 	{% if error %}*/
/* 		<div class="alert alert-danger">{{ error.message }}</div>*/
/* 	{% endif %}*/
/* */
/* 	{# Le formulaire, avec URL de soumission vers la route #}*/
/* 	<form action="{{ path('login_check') }}" method="post">*/
/* 		<label for="username">Login :</label>*/
/* 		<input type="text"  id="username" name="_username" value="{{ last_username }}" />*/
/* */
/* 		<label for="password">Mot de passe :</label>*/
/* 		<input type="password"  id="password" name="_password" />*/
/* 		<br />*/
/* 		<input type="submit" value="Connexion">*/
/* 	</form>*/
/* {% endblock %}*/
/* */
