<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_363c97713ae58a3b859c2836c7b044c50e7f90c627e68ec4a94c7eee0c47ca0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_287b59cd220b5e601c5ca159e22cee8692b2e5b3423c266736bc56a84306c2c6 = $this->env->getExtension("native_profiler");
        $__internal_287b59cd220b5e601c5ca159e22cee8692b2e5b3423c266736bc56a84306c2c6->enter($__internal_287b59cd220b5e601c5ca159e22cee8692b2e5b3423c266736bc56a84306c2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_287b59cd220b5e601c5ca159e22cee8692b2e5b3423c266736bc56a84306c2c6->leave($__internal_287b59cd220b5e601c5ca159e22cee8692b2e5b3423c266736bc56a84306c2c6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ea36ffddf26083aae73b21c046b2a631812ec115c474654cf476c3879eba756 = $this->env->getExtension("native_profiler");
        $__internal_2ea36ffddf26083aae73b21c046b2a631812ec115c474654cf476c3879eba756->enter($__internal_2ea36ffddf26083aae73b21c046b2a631812ec115c474654cf476c3879eba756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2ea36ffddf26083aae73b21c046b2a631812ec115c474654cf476c3879eba756->leave($__internal_2ea36ffddf26083aae73b21c046b2a631812ec115c474654cf476c3879eba756_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c32f5446a61e878ab8097fd572316859067d8df8d6aefc4ac1638a4e46d0c1e = $this->env->getExtension("native_profiler");
        $__internal_9c32f5446a61e878ab8097fd572316859067d8df8d6aefc4ac1638a4e46d0c1e->enter($__internal_9c32f5446a61e878ab8097fd572316859067d8df8d6aefc4ac1638a4e46d0c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9c32f5446a61e878ab8097fd572316859067d8df8d6aefc4ac1638a4e46d0c1e->leave($__internal_9c32f5446a61e878ab8097fd572316859067d8df8d6aefc4ac1638a4e46d0c1e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c5011d68e94f7f449325f36aeea1072d8ed0d36688093fcd71ec1e82ef69cf4 = $this->env->getExtension("native_profiler");
        $__internal_2c5011d68e94f7f449325f36aeea1072d8ed0d36688093fcd71ec1e82ef69cf4->enter($__internal_2c5011d68e94f7f449325f36aeea1072d8ed0d36688093fcd71ec1e82ef69cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2c5011d68e94f7f449325f36aeea1072d8ed0d36688093fcd71ec1e82ef69cf4->leave($__internal_2c5011d68e94f7f449325f36aeea1072d8ed0d36688093fcd71ec1e82ef69cf4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
