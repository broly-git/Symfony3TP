<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_594abdf4cdabcc904ac1f30fe75f572dda2b10ff697b59e900b78e851bb74ce9 extends Twig_Template
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
        $__internal_e91d6fceba24c17bfb2235bdfbd3a8dbcdec9b39a823d13ae147ff68f2c795c3 = $this->env->getExtension("native_profiler");
        $__internal_e91d6fceba24c17bfb2235bdfbd3a8dbcdec9b39a823d13ae147ff68f2c795c3->enter($__internal_e91d6fceba24c17bfb2235bdfbd3a8dbcdec9b39a823d13ae147ff68f2c795c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_e91d6fceba24c17bfb2235bdfbd3a8dbcdec9b39a823d13ae147ff68f2c795c3->leave($__internal_e91d6fceba24c17bfb2235bdfbd3a8dbcdec9b39a823d13ae147ff68f2c795c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
