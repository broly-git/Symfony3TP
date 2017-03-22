<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_56966f698c7afd728d6947f58cae686c8e3122695577289ff600e6cfa0fc5797 extends Twig_Template
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
        $__internal_2ed6d6539258c6f75ea5977195bf7a3cce4088e08269000ad3a76a1610e4a46d = $this->env->getExtension("native_profiler");
        $__internal_2ed6d6539258c6f75ea5977195bf7a3cce4088e08269000ad3a76a1610e4a46d->enter($__internal_2ed6d6539258c6f75ea5977195bf7a3cce4088e08269000ad3a76a1610e4a46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2ed6d6539258c6f75ea5977195bf7a3cce4088e08269000ad3a76a1610e4a46d->leave($__internal_2ed6d6539258c6f75ea5977195bf7a3cce4088e08269000ad3a76a1610e4a46d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
