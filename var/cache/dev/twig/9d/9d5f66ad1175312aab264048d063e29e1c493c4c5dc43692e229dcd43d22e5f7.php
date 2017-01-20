<?php

/* ::base.html.twig */
class __TwigTemplate_d81bae7d5325a7f23ba92e849144467ab8ed2421c201cbf1d70c17582ad76de7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a607849759de2af04df34ad9fe3028c6c5908e941cb070edd618ca175dd47bdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a607849759de2af04df34ad9fe3028c6c5908e941cb070edd618ca175dd47bdc->enter($__internal_a607849759de2af04df34ad9fe3028c6c5908e941cb070edd618ca175dd47bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_13ee73323f6dc07a22d84de1b151c739b3fa25da9ea09c13e47ee6e6fccdecd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ee73323f6dc07a22d84de1b151c739b3fa25da9ea09c13e47ee6e6fccdecd4->enter($__internal_13ee73323f6dc07a22d84de1b151c739b3fa25da9ea09c13e47ee6e6fccdecd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a607849759de2af04df34ad9fe3028c6c5908e941cb070edd618ca175dd47bdc->leave($__internal_a607849759de2af04df34ad9fe3028c6c5908e941cb070edd618ca175dd47bdc_prof);

        
        $__internal_13ee73323f6dc07a22d84de1b151c739b3fa25da9ea09c13e47ee6e6fccdecd4->leave($__internal_13ee73323f6dc07a22d84de1b151c739b3fa25da9ea09c13e47ee6e6fccdecd4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_afafa96a231b8949e61746b35f3bf0daf960bafd5ecf01243ca5b79b3946f871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afafa96a231b8949e61746b35f3bf0daf960bafd5ecf01243ca5b79b3946f871->enter($__internal_afafa96a231b8949e61746b35f3bf0daf960bafd5ecf01243ca5b79b3946f871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_676a919b5a35d4e6cb63b8c9aecb76fa99e5decbd377f67a903a7fc498becee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676a919b5a35d4e6cb63b8c9aecb76fa99e5decbd377f67a903a7fc498becee3->enter($__internal_676a919b5a35d4e6cb63b8c9aecb76fa99e5decbd377f67a903a7fc498becee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_676a919b5a35d4e6cb63b8c9aecb76fa99e5decbd377f67a903a7fc498becee3->leave($__internal_676a919b5a35d4e6cb63b8c9aecb76fa99e5decbd377f67a903a7fc498becee3_prof);

        
        $__internal_afafa96a231b8949e61746b35f3bf0daf960bafd5ecf01243ca5b79b3946f871->leave($__internal_afafa96a231b8949e61746b35f3bf0daf960bafd5ecf01243ca5b79b3946f871_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1edf59b480cf81c40cf3bc5ca9359be1c138c03c3f96a573e1db50c72ed86563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1edf59b480cf81c40cf3bc5ca9359be1c138c03c3f96a573e1db50c72ed86563->enter($__internal_1edf59b480cf81c40cf3bc5ca9359be1c138c03c3f96a573e1db50c72ed86563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_02edbde35edc23c216b72bd66274567f5ee08e2c78043b1dbd36b556a930d7ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02edbde35edc23c216b72bd66274567f5ee08e2c78043b1dbd36b556a930d7ec->enter($__internal_02edbde35edc23c216b72bd66274567f5ee08e2c78043b1dbd36b556a930d7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_02edbde35edc23c216b72bd66274567f5ee08e2c78043b1dbd36b556a930d7ec->leave($__internal_02edbde35edc23c216b72bd66274567f5ee08e2c78043b1dbd36b556a930d7ec_prof);

        
        $__internal_1edf59b480cf81c40cf3bc5ca9359be1c138c03c3f96a573e1db50c72ed86563->leave($__internal_1edf59b480cf81c40cf3bc5ca9359be1c138c03c3f96a573e1db50c72ed86563_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bea0be073226468188881942a8a16b1d1afb46137428ae86924c879c94428f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea0be073226468188881942a8a16b1d1afb46137428ae86924c879c94428f82->enter($__internal_bea0be073226468188881942a8a16b1d1afb46137428ae86924c879c94428f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b30304142719768ff6dcfd92d9b32f4f0c5c508096cdf31ae14c844980307b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b30304142719768ff6dcfd92d9b32f4f0c5c508096cdf31ae14c844980307b25->enter($__internal_b30304142719768ff6dcfd92d9b32f4f0c5c508096cdf31ae14c844980307b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b30304142719768ff6dcfd92d9b32f4f0c5c508096cdf31ae14c844980307b25->leave($__internal_b30304142719768ff6dcfd92d9b32f4f0c5c508096cdf31ae14c844980307b25_prof);

        
        $__internal_bea0be073226468188881942a8a16b1d1afb46137428ae86924c879c94428f82->leave($__internal_bea0be073226468188881942a8a16b1d1afb46137428ae86924c879c94428f82_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ffa39cdc7250c112fa35a7c2a00f3e806156d517e41c1a0ff66cb3a6746a0ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa39cdc7250c112fa35a7c2a00f3e806156d517e41c1a0ff66cb3a6746a0ad0->enter($__internal_ffa39cdc7250c112fa35a7c2a00f3e806156d517e41c1a0ff66cb3a6746a0ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c47d8af4d2140c1cfdd12baf58c68b67e01b6c2f60a4963e397a9617492095c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47d8af4d2140c1cfdd12baf58c68b67e01b6c2f60a4963e397a9617492095c0->enter($__internal_c47d8af4d2140c1cfdd12baf58c68b67e01b6c2f60a4963e397a9617492095c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c47d8af4d2140c1cfdd12baf58c68b67e01b6c2f60a4963e397a9617492095c0->leave($__internal_c47d8af4d2140c1cfdd12baf58c68b67e01b6c2f60a4963e397a9617492095c0_prof);

        
        $__internal_ffa39cdc7250c112fa35a7c2a00f3e806156d517e41c1a0ff66cb3a6746a0ad0->leave($__internal_ffa39cdc7250c112fa35a7c2a00f3e806156d517e41c1a0ff66cb3a6746a0ad0_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/rest/app/Resources/views/base.html.twig");
    }
}
