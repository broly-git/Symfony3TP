<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_4bf8cd006e7856bbf605b9feca47ac1d5b81b35843527d65d7fe850ed9442d09 extends Twig_Template
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
        $__internal_fcb2cfa6f87d38bac46aaf3e24f602a3131f7556f9d47f2b9bc365e6fcc5984d = $this->env->getExtension("native_profiler");
        $__internal_fcb2cfa6f87d38bac46aaf3e24f602a3131f7556f9d47f2b9bc365e6fcc5984d->enter($__internal_fcb2cfa6f87d38bac46aaf3e24f602a3131f7556f9d47f2b9bc365e6fcc5984d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_fcb2cfa6f87d38bac46aaf3e24f602a3131f7556f9d47f2b9bc365e6fcc5984d->leave($__internal_fcb2cfa6f87d38bac46aaf3e24f602a3131f7556f9d47f2b9bc365e6fcc5984d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
