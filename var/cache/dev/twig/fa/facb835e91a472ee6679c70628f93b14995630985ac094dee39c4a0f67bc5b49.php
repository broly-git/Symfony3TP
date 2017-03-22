<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cdbb8a4aba0509f6fc32b2cf3e0c92aff8d52fe4438c22eccde2f4173a16daca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73de5d75c86deee70e15e995748adbc949e7a0e9873579e45061f09d293fc5af = $this->env->getExtension("native_profiler");
        $__internal_73de5d75c86deee70e15e995748adbc949e7a0e9873579e45061f09d293fc5af->enter($__internal_73de5d75c86deee70e15e995748adbc949e7a0e9873579e45061f09d293fc5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73de5d75c86deee70e15e995748adbc949e7a0e9873579e45061f09d293fc5af->leave($__internal_73de5d75c86deee70e15e995748adbc949e7a0e9873579e45061f09d293fc5af_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_941c95ff98f5fa7ed680830e297f65d06255752794bdd5a8b34de05bb599de24 = $this->env->getExtension("native_profiler");
        $__internal_941c95ff98f5fa7ed680830e297f65d06255752794bdd5a8b34de05bb599de24->enter($__internal_941c95ff98f5fa7ed680830e297f65d06255752794bdd5a8b34de05bb599de24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_941c95ff98f5fa7ed680830e297f65d06255752794bdd5a8b34de05bb599de24->leave($__internal_941c95ff98f5fa7ed680830e297f65d06255752794bdd5a8b34de05bb599de24_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_20ba759597f2c0050a53699962ba26d61a225e8b1bff684acf9c6c60874d9f3d = $this->env->getExtension("native_profiler");
        $__internal_20ba759597f2c0050a53699962ba26d61a225e8b1bff684acf9c6c60874d9f3d->enter($__internal_20ba759597f2c0050a53699962ba26d61a225e8b1bff684acf9c6c60874d9f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_20ba759597f2c0050a53699962ba26d61a225e8b1bff684acf9c6c60874d9f3d->leave($__internal_20ba759597f2c0050a53699962ba26d61a225e8b1bff684acf9c6c60874d9f3d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4ab8268d9952cd4268483715ca84a9192eed0ed0142a204e47049dbb5552590 = $this->env->getExtension("native_profiler");
        $__internal_d4ab8268d9952cd4268483715ca84a9192eed0ed0142a204e47049dbb5552590->enter($__internal_d4ab8268d9952cd4268483715ca84a9192eed0ed0142a204e47049dbb5552590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d4ab8268d9952cd4268483715ca84a9192eed0ed0142a204e47049dbb5552590->leave($__internal_d4ab8268d9952cd4268483715ca84a9192eed0ed0142a204e47049dbb5552590_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
