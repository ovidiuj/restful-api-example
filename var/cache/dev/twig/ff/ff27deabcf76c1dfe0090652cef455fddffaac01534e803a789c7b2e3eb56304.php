<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c7cb01721a01044236d7c4aee55b1d09763d538a1adc24252dbbc4e85b4d2f73 extends Twig_Template
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
        $__internal_ce028b2e6165a9ace133f8dffdf73fe135fdc1120f2f4047c6c26b9a643cf624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce028b2e6165a9ace133f8dffdf73fe135fdc1120f2f4047c6c26b9a643cf624->enter($__internal_ce028b2e6165a9ace133f8dffdf73fe135fdc1120f2f4047c6c26b9a643cf624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_8327b183269ce1d5dca877fa07b751dce721290a44be796a65aec5930b2f9156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8327b183269ce1d5dca877fa07b751dce721290a44be796a65aec5930b2f9156->enter($__internal_8327b183269ce1d5dca877fa07b751dce721290a44be796a65aec5930b2f9156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ce028b2e6165a9ace133f8dffdf73fe135fdc1120f2f4047c6c26b9a643cf624->leave($__internal_ce028b2e6165a9ace133f8dffdf73fe135fdc1120f2f4047c6c26b9a643cf624_prof);

        
        $__internal_8327b183269ce1d5dca877fa07b751dce721290a44be796a65aec5930b2f9156->leave($__internal_8327b183269ce1d5dca877fa07b751dce721290a44be796a65aec5930b2f9156_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
