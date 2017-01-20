<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9180ece55a1d6e178d05e18ba2cbbc42d59183df6c1aa11037f0ec8ef46ede2c extends Twig_Template
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
        $__internal_4486681b8935a10079cce078ae9ff67ba84d5b8a2c18867b6fdf8215d766b947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4486681b8935a10079cce078ae9ff67ba84d5b8a2c18867b6fdf8215d766b947->enter($__internal_4486681b8935a10079cce078ae9ff67ba84d5b8a2c18867b6fdf8215d766b947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_61c9cc03dbafeaa3c4a6b96c51bf7f5eff5068fde3592bda2c55d81e63c12990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c9cc03dbafeaa3c4a6b96c51bf7f5eff5068fde3592bda2c55d81e63c12990->enter($__internal_61c9cc03dbafeaa3c4a6b96c51bf7f5eff5068fde3592bda2c55d81e63c12990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4486681b8935a10079cce078ae9ff67ba84d5b8a2c18867b6fdf8215d766b947->leave($__internal_4486681b8935a10079cce078ae9ff67ba84d5b8a2c18867b6fdf8215d766b947_prof);

        
        $__internal_61c9cc03dbafeaa3c4a6b96c51bf7f5eff5068fde3592bda2c55d81e63c12990->leave($__internal_61c9cc03dbafeaa3c4a6b96c51bf7f5eff5068fde3592bda2c55d81e63c12990_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
