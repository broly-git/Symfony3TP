<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_6ba354c90e2d6a9af20fba4f285dd9e0ed6344774ba2b146a7436d80e1fa400d extends Twig_Template
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
        $__internal_30dfdd0240aaf3cc5b4bd993cc544c00a4d8cff53234b39cf19cc2d7d6c62895 = $this->env->getExtension("native_profiler");
        $__internal_30dfdd0240aaf3cc5b4bd993cc544c00a4d8cff53234b39cf19cc2d7d6c62895->enter($__internal_30dfdd0240aaf3cc5b4bd993cc544c00a4d8cff53234b39cf19cc2d7d6c62895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_30dfdd0240aaf3cc5b4bd993cc544c00a4d8cff53234b39cf19cc2d7d6c62895->leave($__internal_30dfdd0240aaf3cc5b4bd993cc544c00a4d8cff53234b39cf19cc2d7d6c62895_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
