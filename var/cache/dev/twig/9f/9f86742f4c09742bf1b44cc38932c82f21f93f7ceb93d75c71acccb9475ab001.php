<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_d09f5d001bdfae6a908da2fca527dcc57f94534cbb2a2fd4d8c1f862b601f725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_739756ed63e618d412b164ca89ac70a2dd71d4d587166602e9afd55e57015481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_739756ed63e618d412b164ca89ac70a2dd71d4d587166602e9afd55e57015481->enter($__internal_739756ed63e618d412b164ca89ac70a2dd71d4d587166602e9afd55e57015481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_937bda95e619253f69fe764ea4497f281959b75bf6bc9e5f5f677e8c890f352d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_937bda95e619253f69fe764ea4497f281959b75bf6bc9e5f5f677e8c890f352d->enter($__internal_937bda95e619253f69fe764ea4497f281959b75bf6bc9e5f5f677e8c890f352d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_739756ed63e618d412b164ca89ac70a2dd71d4d587166602e9afd55e57015481->leave($__internal_739756ed63e618d412b164ca89ac70a2dd71d4d587166602e9afd55e57015481_prof);

        
        $__internal_937bda95e619253f69fe764ea4497f281959b75bf6bc9e5f5f677e8c890f352d->leave($__internal_937bda95e619253f69fe764ea4497f281959b75bf6bc9e5f5f677e8c890f352d_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d29797cd443c1a4b9c8deb3d59c7889a7a4cf98b7aaa413a1663e9fc86795bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d29797cd443c1a4b9c8deb3d59c7889a7a4cf98b7aaa413a1663e9fc86795bb2->enter($__internal_d29797cd443c1a4b9c8deb3d59c7889a7a4cf98b7aaa413a1663e9fc86795bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_19ed93789df598ea4ffdb03b3e3066db5793c4753575437faabf6a0583638a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ed93789df598ea4ffdb03b3e3066db5793c4753575437faabf6a0583638a00->enter($__internal_19ed93789df598ea4ffdb03b3e3066db5793c4753575437faabf6a0583638a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_19ed93789df598ea4ffdb03b3e3066db5793c4753575437faabf6a0583638a00->leave($__internal_19ed93789df598ea4ffdb03b3e3066db5793c4753575437faabf6a0583638a00_prof);

        
        $__internal_d29797cd443c1a4b9c8deb3d59c7889a7a4cf98b7aaa413a1663e9fc86795bb2->leave($__internal_d29797cd443c1a4b9c8deb3d59c7889a7a4cf98b7aaa413a1663e9fc86795bb2_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ad15fbb7583174e71a3d77b607958f4f057952a342249bf9b15303772194d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad15fbb7583174e71a3d77b607958f4f057952a342249bf9b15303772194d32->enter($__internal_5ad15fbb7583174e71a3d77b607958f4f057952a342249bf9b15303772194d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_85948bd175443f8583ecdc2ee1ff92d3867377dbe2e1257d5d9459d5624d9b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85948bd175443f8583ecdc2ee1ff92d3867377dbe2e1257d5d9459d5624d9b0e->enter($__internal_85948bd175443f8583ecdc2ee1ff92d3867377dbe2e1257d5d9459d5624d9b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_85948bd175443f8583ecdc2ee1ff92d3867377dbe2e1257d5d9459d5624d9b0e->leave($__internal_85948bd175443f8583ecdc2ee1ff92d3867377dbe2e1257d5d9459d5624d9b0e_prof);

        
        $__internal_5ad15fbb7583174e71a3d77b607958f4f057952a342249bf9b15303772194d32->leave($__internal_5ad15fbb7583174e71a3d77b607958f4f057952a342249bf9b15303772194d32_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
