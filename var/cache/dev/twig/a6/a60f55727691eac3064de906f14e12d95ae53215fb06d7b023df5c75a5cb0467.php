<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_141bc24820609039e191c86e62daa82e0ca306b9d47a0d12b328cc3dab097d5f extends Twig_Template
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
        $__internal_3923c2b291b54d39dfe8b817db3c40173b27d7140c67e7f4e51bc9fe63e1d097 = $this->env->getExtension("native_profiler");
        $__internal_3923c2b291b54d39dfe8b817db3c40173b27d7140c67e7f4e51bc9fe63e1d097->enter($__internal_3923c2b291b54d39dfe8b817db3c40173b27d7140c67e7f4e51bc9fe63e1d097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3923c2b291b54d39dfe8b817db3c40173b27d7140c67e7f4e51bc9fe63e1d097->leave($__internal_3923c2b291b54d39dfe8b817db3c40173b27d7140c67e7f4e51bc9fe63e1d097_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
