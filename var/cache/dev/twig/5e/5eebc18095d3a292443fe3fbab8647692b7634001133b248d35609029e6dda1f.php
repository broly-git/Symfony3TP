<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4eef66494227571ef967be3feb27f286c72585b2b275322e02460f738bfd760a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_dae523975c6ad5e57664a19b3e506d7de776bdddee34d021d33e54839faf1b9f = $this->env->getExtension("native_profiler");
        $__internal_dae523975c6ad5e57664a19b3e506d7de776bdddee34d021d33e54839faf1b9f->enter($__internal_dae523975c6ad5e57664a19b3e506d7de776bdddee34d021d33e54839faf1b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dae523975c6ad5e57664a19b3e506d7de776bdddee34d021d33e54839faf1b9f->leave($__internal_dae523975c6ad5e57664a19b3e506d7de776bdddee34d021d33e54839faf1b9f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6dbea90702055e333ca0555a01604eafb9d7f58bc2163d1d2fcef7398a9fe412 = $this->env->getExtension("native_profiler");
        $__internal_6dbea90702055e333ca0555a01604eafb9d7f58bc2163d1d2fcef7398a9fe412->enter($__internal_6dbea90702055e333ca0555a01604eafb9d7f58bc2163d1d2fcef7398a9fe412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6dbea90702055e333ca0555a01604eafb9d7f58bc2163d1d2fcef7398a9fe412->leave($__internal_6dbea90702055e333ca0555a01604eafb9d7f58bc2163d1d2fcef7398a9fe412_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e920f432f8afd8f2629eccd3319ace8fb0656d6e0481992b6f5a48d3a597fbe7 = $this->env->getExtension("native_profiler");
        $__internal_e920f432f8afd8f2629eccd3319ace8fb0656d6e0481992b6f5a48d3a597fbe7->enter($__internal_e920f432f8afd8f2629eccd3319ace8fb0656d6e0481992b6f5a48d3a597fbe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e920f432f8afd8f2629eccd3319ace8fb0656d6e0481992b6f5a48d3a597fbe7->leave($__internal_e920f432f8afd8f2629eccd3319ace8fb0656d6e0481992b6f5a48d3a597fbe7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_63720879c5ae4759cedfeb5cf4abdb26573f77d35e112ab163c7cac203b2a2d8 = $this->env->getExtension("native_profiler");
        $__internal_63720879c5ae4759cedfeb5cf4abdb26573f77d35e112ab163c7cac203b2a2d8->enter($__internal_63720879c5ae4759cedfeb5cf4abdb26573f77d35e112ab163c7cac203b2a2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_63720879c5ae4759cedfeb5cf4abdb26573f77d35e112ab163c7cac203b2a2d8->leave($__internal_63720879c5ae4759cedfeb5cf4abdb26573f77d35e112ab163c7cac203b2a2d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
