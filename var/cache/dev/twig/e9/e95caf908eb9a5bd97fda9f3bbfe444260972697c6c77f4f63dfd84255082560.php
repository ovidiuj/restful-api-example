<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_72111f2bb34a4692c3c0a7e55cc41e467ad2b8c3530294bfd71f5611508f0b06 extends Twig_Template
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
        $__internal_b86ce0fcceca2c85ba372f072c182e752a55bc6dc6c5cf3cbde1518a9766361f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b86ce0fcceca2c85ba372f072c182e752a55bc6dc6c5cf3cbde1518a9766361f->enter($__internal_b86ce0fcceca2c85ba372f072c182e752a55bc6dc6c5cf3cbde1518a9766361f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_fcf3987079b899f3c80ee2921a95886f7081cdcf4b74ace8b00209cd79aee4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf3987079b899f3c80ee2921a95886f7081cdcf4b74ace8b00209cd79aee4a0->enter($__internal_fcf3987079b899f3c80ee2921a95886f7081cdcf4b74ace8b00209cd79aee4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b86ce0fcceca2c85ba372f072c182e752a55bc6dc6c5cf3cbde1518a9766361f->leave($__internal_b86ce0fcceca2c85ba372f072c182e752a55bc6dc6c5cf3cbde1518a9766361f_prof);

        
        $__internal_fcf3987079b899f3c80ee2921a95886f7081cdcf4b74ace8b00209cd79aee4a0->leave($__internal_fcf3987079b899f3c80ee2921a95886f7081cdcf4b74ace8b00209cd79aee4a0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
