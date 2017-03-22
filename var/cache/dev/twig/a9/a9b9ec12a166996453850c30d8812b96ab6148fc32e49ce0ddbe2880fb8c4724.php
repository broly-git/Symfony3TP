<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_82f1d6b015d86527c47ab9dd3a90179f59a4c8aa4da738840aac123802437e1e extends Twig_Template
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
        $__internal_bbf17c05e4e7d0cbd8c0ae2e2f6c4aeab4b5a2bab0445e509658851a0de91993 = $this->env->getExtension("native_profiler");
        $__internal_bbf17c05e4e7d0cbd8c0ae2e2f6c4aeab4b5a2bab0445e509658851a0de91993->enter($__internal_bbf17c05e4e7d0cbd8c0ae2e2f6c4aeab4b5a2bab0445e509658851a0de91993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bbf17c05e4e7d0cbd8c0ae2e2f6c4aeab4b5a2bab0445e509658851a0de91993->leave($__internal_bbf17c05e4e7d0cbd8c0ae2e2f6c4aeab4b5a2bab0445e509658851a0de91993_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
