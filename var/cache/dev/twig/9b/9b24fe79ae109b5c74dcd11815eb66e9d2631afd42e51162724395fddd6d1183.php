<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_bdb469eb12a34aacb35f1c12c70d738cc261dec232bf90ceb3e36f8c42913268 extends Twig_Template
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
        $__internal_c23cf3443ec7b6f352a16705193971cba0b6085029f6750587443f202709a2b7 = $this->env->getExtension("native_profiler");
        $__internal_c23cf3443ec7b6f352a16705193971cba0b6085029f6750587443f202709a2b7->enter($__internal_c23cf3443ec7b6f352a16705193971cba0b6085029f6750587443f202709a2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c23cf3443ec7b6f352a16705193971cba0b6085029f6750587443f202709a2b7->leave($__internal_c23cf3443ec7b6f352a16705193971cba0b6085029f6750587443f202709a2b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
