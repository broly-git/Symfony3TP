<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a74b1e6443764240ebf71e4cc8a43eb66ee3ac8d797088c74b542f10f741008e extends Twig_Template
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
        $__internal_fd6d247ac93218d7bc81e765d981a7c8f0c4d166bc95b90b65a8d0be8a0539df = $this->env->getExtension("native_profiler");
        $__internal_fd6d247ac93218d7bc81e765d981a7c8f0c4d166bc95b90b65a8d0be8a0539df->enter($__internal_fd6d247ac93218d7bc81e765d981a7c8f0c4d166bc95b90b65a8d0be8a0539df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fd6d247ac93218d7bc81e765d981a7c8f0c4d166bc95b90b65a8d0be8a0539df->leave($__internal_fd6d247ac93218d7bc81e765d981a7c8f0c4d166bc95b90b65a8d0be8a0539df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
