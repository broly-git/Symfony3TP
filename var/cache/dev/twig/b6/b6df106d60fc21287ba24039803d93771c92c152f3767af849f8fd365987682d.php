<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a9305fd3c1cc657b64bca6d36e18a4673dff6a4d8164f218ca53ec5ca439113d extends Twig_Template
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
        $__internal_739119aaa27f2f6e5fe61a92ee7e19b4769b902cf4816dd40cef6bf2ac44ce78 = $this->env->getExtension("native_profiler");
        $__internal_739119aaa27f2f6e5fe61a92ee7e19b4769b902cf4816dd40cef6bf2ac44ce78->enter($__internal_739119aaa27f2f6e5fe61a92ee7e19b4769b902cf4816dd40cef6bf2ac44ce78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_739119aaa27f2f6e5fe61a92ee7e19b4769b902cf4816dd40cef6bf2ac44ce78->leave($__internal_739119aaa27f2f6e5fe61a92ee7e19b4769b902cf4816dd40cef6bf2ac44ce78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
