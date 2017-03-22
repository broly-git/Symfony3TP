<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_d0d56313b0a314d375532b11017110a5a64f2119e3486c0e4fff121564105ae5 extends Twig_Template
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
        $__internal_4663ff742920967d1e16546e7d15523693656674a846f010a2ee185738af33db = $this->env->getExtension("native_profiler");
        $__internal_4663ff742920967d1e16546e7d15523693656674a846f010a2ee185738af33db->enter($__internal_4663ff742920967d1e16546e7d15523693656674a846f010a2ee185738af33db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4663ff742920967d1e16546e7d15523693656674a846f010a2ee185738af33db->leave($__internal_4663ff742920967d1e16546e7d15523693656674a846f010a2ee185738af33db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
