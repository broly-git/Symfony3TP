<?php

/* @OCUser/layout.html.twig */
class __TwigTemplate_3395ff579649fdd53e197832fb82e4e25be0300a2c25437f035273718713c25f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "@OCUser/layout.html.twig", 4);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fc9a193c4a494f2c04f593b9eda9580d7ce5f38bc49a26445b3e51239ab57ea = $this->env->getExtension("native_profiler");
        $__internal_0fc9a193c4a494f2c04f593b9eda9580d7ce5f38bc49a26445b3e51239ab57ea->enter($__internal_0fc9a193c4a494f2c04f593b9eda9580d7ce5f38bc49a26445b3e51239ab57ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fc9a193c4a494f2c04f593b9eda9580d7ce5f38bc49a26445b3e51239ab57ea->leave($__internal_0fc9a193c4a494f2c04f593b9eda9580d7ce5f38bc49a26445b3e51239ab57ea_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_76464c1575bb34997888b96013752ac8f1d1214acc643747186fb2ab5488245f = $this->env->getExtension("native_profiler");
        $__internal_76464c1575bb34997888b96013752ac8f1d1214acc643747186fb2ab5488245f->enter($__internal_76464c1575bb34997888b96013752ac8f1d1214acc643747186fb2ab5488245f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  ";
        // line 10
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "      <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
        ";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
  ";
        // line 19
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 30
        echo "
";
        
        $__internal_76464c1575bb34997888b96013752ac8f1d1214acc643747186fb2ab5488245f->leave($__internal_76464c1575bb34997888b96013752ac8f1d1214acc643747186fb2ab5488245f_prof);

    }

    // line 19
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e07f3bc0f9ccabb7b357e2cf9f83fc365a7580bff3a5f1adf76ac2232e5db0e6 = $this->env->getExtension("native_profiler");
        $__internal_e07f3bc0f9ccabb7b357e2cf9f83fc365a7580bff3a5f1adf76ac2232e5db0e6->enter($__internal_e07f3bc0f9ccabb7b357e2cf9f83fc365a7580bff3a5f1adf76ac2232e5db0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 20
        echo "
    ";
        // line 21
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 22
            echo "      Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
      -
      <a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
    ";
        } else {
            // line 26
            echo "      <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
    ";
        }
        // line 28
        echo "
  ";
        
        $__internal_e07f3bc0f9ccabb7b357e2cf9f83fc365a7580bff3a5f1adf76ac2232e5db0e6->leave($__internal_e07f3bc0f9ccabb7b357e2cf9f83fc365a7580bff3a5f1adf76ac2232e5db0e6_prof);

    }

    public function getTemplateName()
    {
        return "@OCUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 28,  110 => 26,  105 => 24,  99 => 22,  97 => 21,  94 => 20,  88 => 19,  80 => 30,  77 => 19,  74 => 17,  68 => 16,  59 => 13,  54 => 12,  49 => 11,  44 => 10,  41 => 8,  35 => 7,  11 => 4,);
    }
}
/* {# src/OC/UserBundle/Resources/views/layout.html.twig #}*/
/* */
/* {# On étend notre layout #}*/
/* {% extends "OCCoreBundle::layout.html.twig" %}*/
/* */
/* {# Dans notre layout, il faut définir le block body #}*/
/* {% block body %}*/
/* */
/*   {# On affiche les messages flash que définissent les contrôleurs du bundle #}*/
/*   {% for key, messages in app.session.flashbag.all() %}*/
/*     {% for message in messages %}*/
/*       <div class="alert alert-{{ key }}">*/
/*         {{ message|trans({}, 'FOSUserBundle') }}*/
/*       </div>*/
/*     {% endfor %}*/
/*   {% endfor %}*/
/* */
/*   {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}*/
/*   {% block fos_user_content %}*/
/* */
/*     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*       Connecté en tant que {{ app.user.username }}*/
/*       -*/
/*       <a href="{{ path('fos_user_security_logout') }}">Déconnexion</a>*/
/*     {% else %}*/
/*       <a href="{{ path('fos_user_security_login') }}">Connexion</a>*/
/*     {% endif %}*/
/* */
/*   {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
