<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_be05f052c3052bd31aed728fd2a9b4d27b83ae31acec8499b8d253d32842f6e9 extends Twig_Template
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
        $__internal_1a97c30801ab5833102f48ae2ff21740f9eaebb617464997fed63744c8a29861 = $this->env->getExtension("native_profiler");
        $__internal_1a97c30801ab5833102f48ae2ff21740f9eaebb617464997fed63744c8a29861->enter($__internal_1a97c30801ab5833102f48ae2ff21740f9eaebb617464997fed63744c8a29861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_1a97c30801ab5833102f48ae2ff21740f9eaebb617464997fed63744c8a29861->leave($__internal_1a97c30801ab5833102f48ae2ff21740f9eaebb617464997fed63744c8a29861_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
