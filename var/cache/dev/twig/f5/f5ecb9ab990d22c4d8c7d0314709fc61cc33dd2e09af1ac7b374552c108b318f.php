<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_11fbc2198b9cff59e44d0de36bc9cd6575455705f2ca6dcc7421f23ea21bc1d0 extends Twig_Template
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
        $__internal_01f3565164a96346eb1d847c47e26acfd6e135f7c8d544ad4d7f13d23883d709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f3565164a96346eb1d847c47e26acfd6e135f7c8d544ad4d7f13d23883d709->enter($__internal_01f3565164a96346eb1d847c47e26acfd6e135f7c8d544ad4d7f13d23883d709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_59d920c67474bd6cfc4ed8ce9f8b900c61fdd540815008db0f232b7634ef948f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d920c67474bd6cfc4ed8ce9f8b900c61fdd540815008db0f232b7634ef948f->enter($__internal_59d920c67474bd6cfc4ed8ce9f8b900c61fdd540815008db0f232b7634ef948f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_01f3565164a96346eb1d847c47e26acfd6e135f7c8d544ad4d7f13d23883d709->leave($__internal_01f3565164a96346eb1d847c47e26acfd6e135f7c8d544ad4d7f13d23883d709_prof);

        
        $__internal_59d920c67474bd6cfc4ed8ce9f8b900c61fdd540815008db0f232b7634ef948f->leave($__internal_59d920c67474bd6cfc4ed8ce9f8b900c61fdd540815008db0f232b7634ef948f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
