<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_bd00c67f9a012ef3ba474c68a8b8c5f27193fe17e495b4010898ffde755d9e35 extends Twig_Template
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
        $__internal_404ed7e67e278297f6b32d8e168dddb5c283b8a0d853f1f6a18ab310137afe81 = $this->env->getExtension("native_profiler");
        $__internal_404ed7e67e278297f6b32d8e168dddb5c283b8a0d853f1f6a18ab310137afe81->enter($__internal_404ed7e67e278297f6b32d8e168dddb5c283b8a0d853f1f6a18ab310137afe81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_404ed7e67e278297f6b32d8e168dddb5c283b8a0d853f1f6a18ab310137afe81->leave($__internal_404ed7e67e278297f6b32d8e168dddb5c283b8a0d853f1f6a18ab310137afe81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
