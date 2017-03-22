<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_56762557e017f8d9fe2726492334330e85641e93afa7d6b0aa3ddd20d31e85e5 extends Twig_Template
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
        $__internal_702cb41f69c2270e26817160507b585e06ad85a126fc8f356dfd40a09dcd83f3 = $this->env->getExtension("native_profiler");
        $__internal_702cb41f69c2270e26817160507b585e06ad85a126fc8f356dfd40a09dcd83f3->enter($__internal_702cb41f69c2270e26817160507b585e06ad85a126fc8f356dfd40a09dcd83f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_702cb41f69c2270e26817160507b585e06ad85a126fc8f356dfd40a09dcd83f3->leave($__internal_702cb41f69c2270e26817160507b585e06ad85a126fc8f356dfd40a09dcd83f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
