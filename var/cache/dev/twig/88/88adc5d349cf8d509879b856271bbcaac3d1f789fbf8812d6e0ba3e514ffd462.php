<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_ffa43fd6f737f424b009f12f376b44f5e784037c0aea21a1d3fd06a6d697551d extends Twig_Template
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
        $__internal_39afe6bf9d6de69d9dea4ae8e530944310eeb3b1d26f03a59bd4da3b950cb412 = $this->env->getExtension("native_profiler");
        $__internal_39afe6bf9d6de69d9dea4ae8e530944310eeb3b1d26f03a59bd4da3b950cb412->enter($__internal_39afe6bf9d6de69d9dea4ae8e530944310eeb3b1d26f03a59bd4da3b950cb412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_39afe6bf9d6de69d9dea4ae8e530944310eeb3b1d26f03a59bd4da3b950cb412->leave($__internal_39afe6bf9d6de69d9dea4ae8e530944310eeb3b1d26f03a59bd4da3b950cb412_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
