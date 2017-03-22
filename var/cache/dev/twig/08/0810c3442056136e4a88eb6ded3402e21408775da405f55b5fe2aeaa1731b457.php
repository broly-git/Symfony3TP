<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_94669c09bcf384f18f54d785b2746152dc92be09dc35f2f04c066c2674e45fc0 extends Twig_Template
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
        $__internal_471e35b70e45a2d0ed926c0e21269326c4fd2c87b0041a7566e369542fc30762 = $this->env->getExtension("native_profiler");
        $__internal_471e35b70e45a2d0ed926c0e21269326c4fd2c87b0041a7566e369542fc30762->enter($__internal_471e35b70e45a2d0ed926c0e21269326c4fd2c87b0041a7566e369542fc30762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_471e35b70e45a2d0ed926c0e21269326c4fd2c87b0041a7566e369542fc30762->leave($__internal_471e35b70e45a2d0ed926c0e21269326c4fd2c87b0041a7566e369542fc30762_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
