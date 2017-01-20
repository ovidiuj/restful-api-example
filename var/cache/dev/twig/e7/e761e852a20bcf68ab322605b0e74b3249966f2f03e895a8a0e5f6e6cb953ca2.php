<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_2ace783b508e2369b5be6fdb8cc26a46e20f9bb55f0df8c9256f2d9027f272e5 extends Twig_Template
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
        $__internal_11bc83c53ad701d400c30eb2ed30eed8206c0f7f03751fee54ffc80dd69f014f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11bc83c53ad701d400c30eb2ed30eed8206c0f7f03751fee54ffc80dd69f014f->enter($__internal_11bc83c53ad701d400c30eb2ed30eed8206c0f7f03751fee54ffc80dd69f014f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_31ea4bca58159ec7e9eb82e52ab0fd304db94ed4c833e13799de9a86d4f9ae7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ea4bca58159ec7e9eb82e52ab0fd304db94ed4c833e13799de9a86d4f9ae7f->enter($__internal_31ea4bca58159ec7e9eb82e52ab0fd304db94ed4c833e13799de9a86d4f9ae7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_11bc83c53ad701d400c30eb2ed30eed8206c0f7f03751fee54ffc80dd69f014f->leave($__internal_11bc83c53ad701d400c30eb2ed30eed8206c0f7f03751fee54ffc80dd69f014f_prof);

        
        $__internal_31ea4bca58159ec7e9eb82e52ab0fd304db94ed4c833e13799de9a86d4f9ae7f->leave($__internal_31ea4bca58159ec7e9eb82e52ab0fd304db94ed4c833e13799de9a86d4f9ae7f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
