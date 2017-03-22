<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_08541a7ac3bfebd898dda8ae1982080db77864034cf05747199963ff0fa55818 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_dd82f6a5053598c651b48299a7a3c6fe7bfc61379351d154a91e54fa96f04102 = $this->env->getExtension("native_profiler");
        $__internal_dd82f6a5053598c651b48299a7a3c6fe7bfc61379351d154a91e54fa96f04102->enter($__internal_dd82f6a5053598c651b48299a7a3c6fe7bfc61379351d154a91e54fa96f04102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd82f6a5053598c651b48299a7a3c6fe7bfc61379351d154a91e54fa96f04102->leave($__internal_dd82f6a5053598c651b48299a7a3c6fe7bfc61379351d154a91e54fa96f04102_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec7902a0a733dd478cad6443745e81bdfd3bfdcd27c755601798f4c50c433cf6 = $this->env->getExtension("native_profiler");
        $__internal_ec7902a0a733dd478cad6443745e81bdfd3bfdcd27c755601798f4c50c433cf6->enter($__internal_ec7902a0a733dd478cad6443745e81bdfd3bfdcd27c755601798f4c50c433cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ec7902a0a733dd478cad6443745e81bdfd3bfdcd27c755601798f4c50c433cf6->leave($__internal_ec7902a0a733dd478cad6443745e81bdfd3bfdcd27c755601798f4c50c433cf6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fcb370e5a92edf0163919f2eb9493cf9aa6852590228bdb7e96a1ab53f5877f = $this->env->getExtension("native_profiler");
        $__internal_2fcb370e5a92edf0163919f2eb9493cf9aa6852590228bdb7e96a1ab53f5877f->enter($__internal_2fcb370e5a92edf0163919f2eb9493cf9aa6852590228bdb7e96a1ab53f5877f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2fcb370e5a92edf0163919f2eb9493cf9aa6852590228bdb7e96a1ab53f5877f->leave($__internal_2fcb370e5a92edf0163919f2eb9493cf9aa6852590228bdb7e96a1ab53f5877f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
