<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_44d1e7f548326106a01446f8d538a01a4d92fa67a98909eee2f5d46823119beb extends Twig_Template
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
        $__internal_6b7d9fcc51f36ef5dbc42afafbfb2570a0bfa2866d3e9c52d8686b8385e66ffa = $this->env->getExtension("native_profiler");
        $__internal_6b7d9fcc51f36ef5dbc42afafbfb2570a0bfa2866d3e9c52d8686b8385e66ffa->enter($__internal_6b7d9fcc51f36ef5dbc42afafbfb2570a0bfa2866d3e9c52d8686b8385e66ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6b7d9fcc51f36ef5dbc42afafbfb2570a0bfa2866d3e9c52d8686b8385e66ffa->leave($__internal_6b7d9fcc51f36ef5dbc42afafbfb2570a0bfa2866d3e9c52d8686b8385e66ffa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
