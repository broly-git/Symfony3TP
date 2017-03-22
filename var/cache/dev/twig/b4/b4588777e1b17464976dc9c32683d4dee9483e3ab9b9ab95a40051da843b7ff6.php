<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1ebd41c7bbc30f492abce5171fed4df1785d0569ffd93b8e486c6093f46b2ddc extends Twig_Template
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
        $__internal_47e7c4765619399bbaf0ce865a239e37af1098ef7dd2ff31a3b5b0573d8022cc = $this->env->getExtension("native_profiler");
        $__internal_47e7c4765619399bbaf0ce865a239e37af1098ef7dd2ff31a3b5b0573d8022cc->enter($__internal_47e7c4765619399bbaf0ce865a239e37af1098ef7dd2ff31a3b5b0573d8022cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_47e7c4765619399bbaf0ce865a239e37af1098ef7dd2ff31a3b5b0573d8022cc->leave($__internal_47e7c4765619399bbaf0ce865a239e37af1098ef7dd2ff31a3b5b0573d8022cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
