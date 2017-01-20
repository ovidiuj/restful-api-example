<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d9ffae65641b2646830901a5f86c06bf780d0129aa15524b0693f8abf9d9bfc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1208ba12f1a3d0e1e4083544bafb35a5630f2fce12516dfe5122c17962242ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1208ba12f1a3d0e1e4083544bafb35a5630f2fce12516dfe5122c17962242ac->enter($__internal_b1208ba12f1a3d0e1e4083544bafb35a5630f2fce12516dfe5122c17962242ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_7a66d28396045a148b74a99ed0846e75711496d414234edd55307f0dd1857f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a66d28396045a148b74a99ed0846e75711496d414234edd55307f0dd1857f65->enter($__internal_7a66d28396045a148b74a99ed0846e75711496d414234edd55307f0dd1857f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1208ba12f1a3d0e1e4083544bafb35a5630f2fce12516dfe5122c17962242ac->leave($__internal_b1208ba12f1a3d0e1e4083544bafb35a5630f2fce12516dfe5122c17962242ac_prof);

        
        $__internal_7a66d28396045a148b74a99ed0846e75711496d414234edd55307f0dd1857f65->leave($__internal_7a66d28396045a148b74a99ed0846e75711496d414234edd55307f0dd1857f65_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_26387b20eb6e6cdea43ed492e471ab9e4ded88248332f0ae5d34e7ef6a1806ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26387b20eb6e6cdea43ed492e471ab9e4ded88248332f0ae5d34e7ef6a1806ba->enter($__internal_26387b20eb6e6cdea43ed492e471ab9e4ded88248332f0ae5d34e7ef6a1806ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d3a8b1fe3dac0d61547414b7a12ccfdb54c175f54745c698dcd4dc6a79ae8373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a8b1fe3dac0d61547414b7a12ccfdb54c175f54745c698dcd4dc6a79ae8373->enter($__internal_d3a8b1fe3dac0d61547414b7a12ccfdb54c175f54745c698dcd4dc6a79ae8373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d3a8b1fe3dac0d61547414b7a12ccfdb54c175f54745c698dcd4dc6a79ae8373->leave($__internal_d3a8b1fe3dac0d61547414b7a12ccfdb54c175f54745c698dcd4dc6a79ae8373_prof);

        
        $__internal_26387b20eb6e6cdea43ed492e471ab9e4ded88248332f0ae5d34e7ef6a1806ba->leave($__internal_26387b20eb6e6cdea43ed492e471ab9e4ded88248332f0ae5d34e7ef6a1806ba_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_519ff83b9847caaca5390e89f39d7ad174a3134089187088b2a5ca6e039c3c23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_519ff83b9847caaca5390e89f39d7ad174a3134089187088b2a5ca6e039c3c23->enter($__internal_519ff83b9847caaca5390e89f39d7ad174a3134089187088b2a5ca6e039c3c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_21a1c8c4f478d3c65e38a910d8734dd62cc29be5e822bde0867de8152907002f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a1c8c4f478d3c65e38a910d8734dd62cc29be5e822bde0867de8152907002f->enter($__internal_21a1c8c4f478d3c65e38a910d8734dd62cc29be5e822bde0867de8152907002f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_21a1c8c4f478d3c65e38a910d8734dd62cc29be5e822bde0867de8152907002f->leave($__internal_21a1c8c4f478d3c65e38a910d8734dd62cc29be5e822bde0867de8152907002f_prof);

        
        $__internal_519ff83b9847caaca5390e89f39d7ad174a3134089187088b2a5ca6e039c3c23->leave($__internal_519ff83b9847caaca5390e89f39d7ad174a3134089187088b2a5ca6e039c3c23_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
