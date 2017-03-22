<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_4260cdfb38ec1054500d909933e930e13d9cfda2da9d3d8ace5dd443d7788b2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66603f4d2bd966c6a8f367846e227dc13600e039416db9b44b0069be79d9f046 = $this->env->getExtension("native_profiler");
        $__internal_66603f4d2bd966c6a8f367846e227dc13600e039416db9b44b0069be79d9f046->enter($__internal_66603f4d2bd966c6a8f367846e227dc13600e039416db9b44b0069be79d9f046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66603f4d2bd966c6a8f367846e227dc13600e039416db9b44b0069be79d9f046->leave($__internal_66603f4d2bd966c6a8f367846e227dc13600e039416db9b44b0069be79d9f046_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fca675b516650648a22ef662271393baa9850f4aa5fba4adabbf3618a8de89b9 = $this->env->getExtension("native_profiler");
        $__internal_fca675b516650648a22ef662271393baa9850f4aa5fba4adabbf3618a8de89b9->enter($__internal_fca675b516650648a22ef662271393baa9850f4aa5fba4adabbf3618a8de89b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fca675b516650648a22ef662271393baa9850f4aa5fba4adabbf3618a8de89b9->leave($__internal_fca675b516650648a22ef662271393baa9850f4aa5fba4adabbf3618a8de89b9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_afa3d9f33eef2f9693b1b8975983311516b940389227c776173ee782146c5ee4 = $this->env->getExtension("native_profiler");
        $__internal_afa3d9f33eef2f9693b1b8975983311516b940389227c776173ee782146c5ee4->enter($__internal_afa3d9f33eef2f9693b1b8975983311516b940389227c776173ee782146c5ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_afa3d9f33eef2f9693b1b8975983311516b940389227c776173ee782146c5ee4->leave($__internal_afa3d9f33eef2f9693b1b8975983311516b940389227c776173ee782146c5ee4_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_22ca29524909aedbd00b24a101f4a0254713effdd982178b557282fa686937eb = $this->env->getExtension("native_profiler");
        $__internal_22ca29524909aedbd00b24a101f4a0254713effdd982178b557282fa686937eb->enter($__internal_22ca29524909aedbd00b24a101f4a0254713effdd982178b557282fa686937eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_22ca29524909aedbd00b24a101f4a0254713effdd982178b557282fa686937eb->leave($__internal_22ca29524909aedbd00b24a101f4a0254713effdd982178b557282fa686937eb_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "OCCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h1>Annonces</h1>*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block ocplatform_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
