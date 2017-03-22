<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f9b76052cc0547952d1115d28605fc2c5230bcf58fc0c1d0f1f32c960316f650 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3856c52530cc5df30f3ee456c3f10282a94f2edb37fe17b4c57ce4f85e23138 = $this->env->getExtension("native_profiler");
        $__internal_a3856c52530cc5df30f3ee456c3f10282a94f2edb37fe17b4c57ce4f85e23138->enter($__internal_a3856c52530cc5df30f3ee456c3f10282a94f2edb37fe17b4c57ce4f85e23138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a3856c52530cc5df30f3ee456c3f10282a94f2edb37fe17b4c57ce4f85e23138->leave($__internal_a3856c52530cc5df30f3ee456c3f10282a94f2edb37fe17b4c57ce4f85e23138_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
