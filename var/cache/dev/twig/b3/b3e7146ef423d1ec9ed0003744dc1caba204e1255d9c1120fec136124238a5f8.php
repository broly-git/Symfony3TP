<?php

/* @OCPlatform/Advert/menu.html.twig */
class __TwigTemplate_eb78a003985ea71332c916ee2ab00a11192a6f2502eb998beae0e25292e8f1d0 extends Twig_Template
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
        $__internal_4c2d5a8ef08f6f83a83f295b3d089609cd4aabd9655d6b8284f2221e3c3c3c8c = $this->env->getExtension("native_profiler");
        $__internal_4c2d5a8ef08f6f83a83f295b3d089609cd4aabd9655d6b8284f2221e3c3c3c8c->enter($__internal_4c2d5a8ef08f6f83a83f295b3d089609cd4aabd9655d6b8284f2221e3c3c3c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/menu.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 7
            echo "    <li>
      <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>
";
        
        $__internal_4c2d5a8ef08f6f83a83f295b3d089609cd4aabd9655d6b8284f2221e3c3c3c8c->leave($__internal_4c2d5a8ef08f6f83a83f295b3d089609cd4aabd9655d6b8284f2221e3c3c3c8c_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  40 => 9,  36 => 8,  33 => 7,  29 => 6,  25 => 4,  22 => 2,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/menu.html.twig #}*/
/* */
/* {# Ce template n'hérite de personne, tout comme le template inclus avec {{ include() }}. #}*/
/* */
/* <ul class="nav nav-pills nav-stacked">*/
/*   {% for advert in listAdverts %}*/
/*     <li>*/
/*       <a href="{{ path('oc_platform_view', {'id': advert.id}) }}">*/
/*         {{ advert.title }}*/
/*       </a>*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/
/* */
