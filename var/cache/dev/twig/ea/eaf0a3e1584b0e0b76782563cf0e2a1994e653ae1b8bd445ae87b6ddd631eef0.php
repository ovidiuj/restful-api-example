<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cf98befa34d6fd83c86761236c260b9a9d3e7c2c68dd45d3cce13b4178408a30 extends Twig_Template
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
        $__internal_5cb40f1b192a0e21b1e71415dd9f76cfbb1ed294d69273d7f4acab9fe2a3a56d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb40f1b192a0e21b1e71415dd9f76cfbb1ed294d69273d7f4acab9fe2a3a56d->enter($__internal_5cb40f1b192a0e21b1e71415dd9f76cfbb1ed294d69273d7f4acab9fe2a3a56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_33e22de880cb03f82ecd938db425bc1e20c3d40876ac88609b39585d65e80ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e22de880cb03f82ecd938db425bc1e20c3d40876ac88609b39585d65e80ee3->enter($__internal_33e22de880cb03f82ecd938db425bc1e20c3d40876ac88609b39585d65e80ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_5cb40f1b192a0e21b1e71415dd9f76cfbb1ed294d69273d7f4acab9fe2a3a56d->leave($__internal_5cb40f1b192a0e21b1e71415dd9f76cfbb1ed294d69273d7f4acab9fe2a3a56d_prof);

        
        $__internal_33e22de880cb03f82ecd938db425bc1e20c3d40876ac88609b39585d65e80ee3->leave($__internal_33e22de880cb03f82ecd938db425bc1e20c3d40876ac88609b39585d65e80ee3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
