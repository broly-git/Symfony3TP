<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_617c27c02d7f94d0525b7cf144db1a510b0d8df3702bd126820bccf82594ae45 extends Twig_Template
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
        $__internal_295e11ab6d023809417277ee0771069838b775d0596b6f1eea61f055603936a5 = $this->env->getExtension("native_profiler");
        $__internal_295e11ab6d023809417277ee0771069838b775d0596b6f1eea61f055603936a5->enter($__internal_295e11ab6d023809417277ee0771069838b775d0596b6f1eea61f055603936a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_295e11ab6d023809417277ee0771069838b775d0596b6f1eea61f055603936a5->leave($__internal_295e11ab6d023809417277ee0771069838b775d0596b6f1eea61f055603936a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
