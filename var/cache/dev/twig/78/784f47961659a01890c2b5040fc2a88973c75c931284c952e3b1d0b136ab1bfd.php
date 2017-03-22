<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_629171eb9420f53e3beb203eba1e12b5adf5be11fb195c4634aa6ec04e22831b extends Twig_Template
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
        $__internal_a26eb8b7e6670843ab80ca8d639f4b73ad9f85239284575c40171152b7f20e8f = $this->env->getExtension("native_profiler");
        $__internal_a26eb8b7e6670843ab80ca8d639f4b73ad9f85239284575c40171152b7f20e8f->enter($__internal_a26eb8b7e6670843ab80ca8d639f4b73ad9f85239284575c40171152b7f20e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a26eb8b7e6670843ab80ca8d639f4b73ad9f85239284575c40171152b7f20e8f->leave($__internal_a26eb8b7e6670843ab80ca8d639f4b73ad9f85239284575c40171152b7f20e8f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4b0872816ecd2e9364e76826631a55bef57d3e22a367ce77ee5e400448c63bf = $this->env->getExtension("native_profiler");
        $__internal_b4b0872816ecd2e9364e76826631a55bef57d3e22a367ce77ee5e400448c63bf->enter($__internal_b4b0872816ecd2e9364e76826631a55bef57d3e22a367ce77ee5e400448c63bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b4b0872816ecd2e9364e76826631a55bef57d3e22a367ce77ee5e400448c63bf->leave($__internal_b4b0872816ecd2e9364e76826631a55bef57d3e22a367ce77ee5e400448c63bf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3fbac7738637945247158df81e9612743fc55397872f6e5c13a8477bc6b2be6 = $this->env->getExtension("native_profiler");
        $__internal_f3fbac7738637945247158df81e9612743fc55397872f6e5c13a8477bc6b2be6->enter($__internal_f3fbac7738637945247158df81e9612743fc55397872f6e5c13a8477bc6b2be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f3fbac7738637945247158df81e9612743fc55397872f6e5c13a8477bc6b2be6->leave($__internal_f3fbac7738637945247158df81e9612743fc55397872f6e5c13a8477bc6b2be6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c4b161fb8974ee80fd9712b932a0c78674918b0e7c4a61513abf2d2c4e5fcee = $this->env->getExtension("native_profiler");
        $__internal_8c4b161fb8974ee80fd9712b932a0c78674918b0e7c4a61513abf2d2c4e5fcee->enter($__internal_8c4b161fb8974ee80fd9712b932a0c78674918b0e7c4a61513abf2d2c4e5fcee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8c4b161fb8974ee80fd9712b932a0c78674918b0e7c4a61513abf2d2c4e5fcee->leave($__internal_8c4b161fb8974ee80fd9712b932a0c78674918b0e7c4a61513abf2d2c4e5fcee_prof);

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
