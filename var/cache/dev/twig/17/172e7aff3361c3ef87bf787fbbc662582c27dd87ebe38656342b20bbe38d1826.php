<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_7cb6d71c4ef19d86bc81a98068be28e301efe2a434aafa7b130391423432f1cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20a818c6d4abb49dcd9e2da61a7cac11d55da1d60ebc3da46c8df515fea839d0 = $this->env->getExtension("native_profiler");
        $__internal_20a818c6d4abb49dcd9e2da61a7cac11d55da1d60ebc3da46c8df515fea839d0->enter($__internal_20a818c6d4abb49dcd9e2da61a7cac11d55da1d60ebc3da46c8df515fea839d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_20a818c6d4abb49dcd9e2da61a7cac11d55da1d60ebc3da46c8df515fea839d0->leave($__internal_20a818c6d4abb49dcd9e2da61a7cac11d55da1d60ebc3da46c8df515fea839d0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_848163ec3fba8de948f72ce2e3fde1daf9ea9ae129e83ffe5ec601b075942913 = $this->env->getExtension("native_profiler");
        $__internal_848163ec3fba8de948f72ce2e3fde1daf9ea9ae129e83ffe5ec601b075942913->enter($__internal_848163ec3fba8de948f72ce2e3fde1daf9ea9ae129e83ffe5ec601b075942913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_848163ec3fba8de948f72ce2e3fde1daf9ea9ae129e83ffe5ec601b075942913->leave($__internal_848163ec3fba8de948f72ce2e3fde1daf9ea9ae129e83ffe5ec601b075942913_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
