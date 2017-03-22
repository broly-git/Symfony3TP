<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ec220f0c7320bfb2a6ebcf36ef757dab95f54bd72201853f9d530e9e0891aa8e extends Twig_Template
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
        $__internal_edd7024764b3e1c0c6d538c2738048979720afbd6c96368bad7fc88f9952b67a = $this->env->getExtension("native_profiler");
        $__internal_edd7024764b3e1c0c6d538c2738048979720afbd6c96368bad7fc88f9952b67a->enter($__internal_edd7024764b3e1c0c6d538c2738048979720afbd6c96368bad7fc88f9952b67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_edd7024764b3e1c0c6d538c2738048979720afbd6c96368bad7fc88f9952b67a->leave($__internal_edd7024764b3e1c0c6d538c2738048979720afbd6c96368bad7fc88f9952b67a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
