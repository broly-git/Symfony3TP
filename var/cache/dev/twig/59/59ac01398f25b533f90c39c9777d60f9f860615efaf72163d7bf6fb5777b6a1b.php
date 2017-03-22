<?php

/* @OCUser/Security/login.html.twig */
class __TwigTemplate_6d13c38ead52c8b77698d74371354fee0ffba2c4da2800ac9de5497f9f90fda2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "@OCUser/Security/login.html.twig", 2);
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
        $__internal_79bcc5861cad9df816c6ae3c542d13af36d80167e6b6e496fe1c1e0414cb3368 = $this->env->getExtension("native_profiler");
        $__internal_79bcc5861cad9df816c6ae3c542d13af36d80167e6b6e496fe1c1e0414cb3368->enter($__internal_79bcc5861cad9df816c6ae3c542d13af36d80167e6b6e496fe1c1e0414cb3368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79bcc5861cad9df816c6ae3c542d13af36d80167e6b6e496fe1c1e0414cb3368->leave($__internal_79bcc5861cad9df816c6ae3c542d13af36d80167e6b6e496fe1c1e0414cb3368_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc3824668f319e5732aef218243461474e1ace4ec089bdc52362e267fbd902cd = $this->env->getExtension("native_profiler");
        $__internal_fc3824668f319e5732aef218243461474e1ace4ec089bdc52362e267fbd902cd->enter($__internal_fc3824668f319e5732aef218243461474e1ace4ec089bdc52362e267fbd902cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
\t";
        // line 7
        echo "\t";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

\t\t<label for=\"password\">Mot de passe :</label>
\t\t<input type=\"password\"  id=\"password\" name=\"_password\" />
\t\t<br />
\t\t<input type=\"submit\" value=\"Connexion\">
\t</form>
";
        
        $__internal_fc3824668f319e5732aef218243461474e1ace4ec089bdc52362e267fbd902cd->leave($__internal_fc3824668f319e5732aef218243461474e1ace4ec089bdc52362e267fbd902cd_prof);

    }

    public function getTemplateName()
    {
        return "@OCUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  55 => 12,  52 => 10,  46 => 8,  43 => 7,  40 => 5,  34 => 4,  11 => 2,);
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
