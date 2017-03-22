<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_035c668f8177bca56bdce8f9fa8566cc00bad817d56453e4c5c16ba81670a1dc extends Twig_Template
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
        $__internal_ac615f76a5d8b98e0e38c759bac489c1a8b168f9638ecf268e77526d0d56dd94 = $this->env->getExtension("native_profiler");
        $__internal_ac615f76a5d8b98e0e38c759bac489c1a8b168f9638ecf268e77526d0d56dd94->enter($__internal_ac615f76a5d8b98e0e38c759bac489c1a8b168f9638ecf268e77526d0d56dd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ac615f76a5d8b98e0e38c759bac489c1a8b168f9638ecf268e77526d0d56dd94->leave($__internal_ac615f76a5d8b98e0e38c759bac489c1a8b168f9638ecf268e77526d0d56dd94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
