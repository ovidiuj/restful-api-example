<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f5a196df2e5708557a5e7834275555f40ae4fddc3fe4fd62de61dfe3d4224757 extends Twig_Template
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
        $__internal_ddb62a94ac8331e901031018fd7e7ca9165b5cd73ff6ca5134f7519d38485449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddb62a94ac8331e901031018fd7e7ca9165b5cd73ff6ca5134f7519d38485449->enter($__internal_ddb62a94ac8331e901031018fd7e7ca9165b5cd73ff6ca5134f7519d38485449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_9b5ca3923aa8e89609d118e07a41b4fe4cbc10dbf5b5a09ed1d11c993e6bd5de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5ca3923aa8e89609d118e07a41b4fe4cbc10dbf5b5a09ed1d11c993e6bd5de->enter($__internal_9b5ca3923aa8e89609d118e07a41b4fe4cbc10dbf5b5a09ed1d11c993e6bd5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ddb62a94ac8331e901031018fd7e7ca9165b5cd73ff6ca5134f7519d38485449->leave($__internal_ddb62a94ac8331e901031018fd7e7ca9165b5cd73ff6ca5134f7519d38485449_prof);

        
        $__internal_9b5ca3923aa8e89609d118e07a41b4fe4cbc10dbf5b5a09ed1d11c993e6bd5de->leave($__internal_9b5ca3923aa8e89609d118e07a41b4fe4cbc10dbf5b5a09ed1d11c993e6bd5de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
