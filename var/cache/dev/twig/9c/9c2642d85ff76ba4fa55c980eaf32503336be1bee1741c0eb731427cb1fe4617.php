<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_35665789190d629e979542eca7ea76b13af78e12f72f974ba8373d52ea964669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca290e72e23271e1d4f138882b6c94ee0fa35c3261aa612b87eb31f60a63d236 = $this->env->getExtension("native_profiler");
        $__internal_ca290e72e23271e1d4f138882b6c94ee0fa35c3261aa612b87eb31f60a63d236->enter($__internal_ca290e72e23271e1d4f138882b6c94ee0fa35c3261aa612b87eb31f60a63d236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca290e72e23271e1d4f138882b6c94ee0fa35c3261aa612b87eb31f60a63d236->leave($__internal_ca290e72e23271e1d4f138882b6c94ee0fa35c3261aa612b87eb31f60a63d236_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3d8182fe3565c5051ec8f5a9dfcf258b200bc537cd7aec1d85a050db743fe66f = $this->env->getExtension("native_profiler");
        $__internal_3d8182fe3565c5051ec8f5a9dfcf258b200bc537cd7aec1d85a050db743fe66f->enter($__internal_3d8182fe3565c5051ec8f5a9dfcf258b200bc537cd7aec1d85a050db743fe66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3d8182fe3565c5051ec8f5a9dfcf258b200bc537cd7aec1d85a050db743fe66f->leave($__internal_3d8182fe3565c5051ec8f5a9dfcf258b200bc537cd7aec1d85a050db743fe66f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9903d329c95a49df5bfcea8cf848bf4b3c52f2f0dc0f94964bcfde4477bb9519 = $this->env->getExtension("native_profiler");
        $__internal_9903d329c95a49df5bfcea8cf848bf4b3c52f2f0dc0f94964bcfde4477bb9519->enter($__internal_9903d329c95a49df5bfcea8cf848bf4b3c52f2f0dc0f94964bcfde4477bb9519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9903d329c95a49df5bfcea8cf848bf4b3c52f2f0dc0f94964bcfde4477bb9519->leave($__internal_9903d329c95a49df5bfcea8cf848bf4b3c52f2f0dc0f94964bcfde4477bb9519_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9dcb96e9b2fd2a153a8e160da482ac8192fa667ce6e8ee9875fda41527779bf6 = $this->env->getExtension("native_profiler");
        $__internal_9dcb96e9b2fd2a153a8e160da482ac8192fa667ce6e8ee9875fda41527779bf6->enter($__internal_9dcb96e9b2fd2a153a8e160da482ac8192fa667ce6e8ee9875fda41527779bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9dcb96e9b2fd2a153a8e160da482ac8192fa667ce6e8ee9875fda41527779bf6->leave($__internal_9dcb96e9b2fd2a153a8e160da482ac8192fa667ce6e8ee9875fda41527779bf6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
