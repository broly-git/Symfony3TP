<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_3bd2931160862575a1800fd8a1cb5237f931c00dffab040aaef142a1c64b7094 extends Twig_Template
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
        $__internal_d06284105ebba5f0362742b17d10f2c834bd56e43bcf301349a49ffa1a490f07 = $this->env->getExtension("native_profiler");
        $__internal_d06284105ebba5f0362742b17d10f2c834bd56e43bcf301349a49ffa1a490f07->enter($__internal_d06284105ebba5f0362742b17d10f2c834bd56e43bcf301349a49ffa1a490f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d06284105ebba5f0362742b17d10f2c834bd56e43bcf301349a49ffa1a490f07->leave($__internal_d06284105ebba5f0362742b17d10f2c834bd56e43bcf301349a49ffa1a490f07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
