<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b2b6a2c74d653daa85e16d33a05ec8587dc2226e78ac9511c7ffb758f5d06ef5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_9e88ccd890ac0c1926328e3d213719f16dcbea292b74c556785e9ce7a5023e1a = $this->env->getExtension("native_profiler");
        $__internal_9e88ccd890ac0c1926328e3d213719f16dcbea292b74c556785e9ce7a5023e1a->enter($__internal_9e88ccd890ac0c1926328e3d213719f16dcbea292b74c556785e9ce7a5023e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e88ccd890ac0c1926328e3d213719f16dcbea292b74c556785e9ce7a5023e1a->leave($__internal_9e88ccd890ac0c1926328e3d213719f16dcbea292b74c556785e9ce7a5023e1a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_026f19158629bb1feb86fb64c1c45052f09b356dacfaff4a3a5ae6ba5d37b241 = $this->env->getExtension("native_profiler");
        $__internal_026f19158629bb1feb86fb64c1c45052f09b356dacfaff4a3a5ae6ba5d37b241->enter($__internal_026f19158629bb1feb86fb64c1c45052f09b356dacfaff4a3a5ae6ba5d37b241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_026f19158629bb1feb86fb64c1c45052f09b356dacfaff4a3a5ae6ba5d37b241->leave($__internal_026f19158629bb1feb86fb64c1c45052f09b356dacfaff4a3a5ae6ba5d37b241_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_de4c5cba64164f5b9b288bc8bf4f0df5065c751feb6602d04c091c7f2aeca336 = $this->env->getExtension("native_profiler");
        $__internal_de4c5cba64164f5b9b288bc8bf4f0df5065c751feb6602d04c091c7f2aeca336->enter($__internal_de4c5cba64164f5b9b288bc8bf4f0df5065c751feb6602d04c091c7f2aeca336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_de4c5cba64164f5b9b288bc8bf4f0df5065c751feb6602d04c091c7f2aeca336->leave($__internal_de4c5cba64164f5b9b288bc8bf4f0df5065c751feb6602d04c091c7f2aeca336_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
