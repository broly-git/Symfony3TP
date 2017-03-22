<?php

/* OCUserBundle:Security:login.html.twig */
class __TwigTemplate_8d39d1c4fecff67bf553adff0b982e9414cc900ef31ce9eefb2f0581916733e7 extends Twig_Template
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
        $__internal_a2239f69996466398fd91095bf5d49702a0b7760b64242f4f4e81dfe560b5adf = $this->env->getExtension("native_profiler");
        $__internal_a2239f69996466398fd91095bf5d49702a0b7760b64242f4f4e81dfe560b5adf->enter($__internal_a2239f69996466398fd91095bf5d49702a0b7760b64242f4f4e81dfe560b5adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2239f69996466398fd91095bf5d49702a0b7760b64242f4f4e81dfe560b5adf->leave($__internal_a2239f69996466398fd91095bf5d49702a0b7760b64242f4f4e81dfe560b5adf_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_625a4fbcd67ed7d34449b74bff3703668dcd8bd81a73974853887f5feabc519d = $this->env->getExtension("native_profiler");
        $__internal_625a4fbcd67ed7d34449b74bff3703668dcd8bd81a73974853887f5feabc519d->enter($__internal_625a4fbcd67ed7d34449b74bff3703668dcd8bd81a73974853887f5feabc519d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_625a4fbcd67ed7d34449b74bff3703668dcd8bd81a73974853887f5feabc519d->leave($__internal_625a4fbcd67ed7d34449b74bff3703668dcd8bd81a73974853887f5feabc519d_prof);

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
