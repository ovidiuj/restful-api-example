<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3778406ef85a6637d2a2a0be9d378272396e22464ec59695638d364213c2a4f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c0cd55ddeef839cb1a4e8ffe8fb9d611bc23fbc182c2d54db87b6bfdae5df7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c0cd55ddeef839cb1a4e8ffe8fb9d611bc23fbc182c2d54db87b6bfdae5df7f->enter($__internal_2c0cd55ddeef839cb1a4e8ffe8fb9d611bc23fbc182c2d54db87b6bfdae5df7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_da85d0dfe951ce05a9a13200724cd328a1a0a9670cdda8cfdc162f827b7417be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da85d0dfe951ce05a9a13200724cd328a1a0a9670cdda8cfdc162f827b7417be->enter($__internal_da85d0dfe951ce05a9a13200724cd328a1a0a9670cdda8cfdc162f827b7417be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2c0cd55ddeef839cb1a4e8ffe8fb9d611bc23fbc182c2d54db87b6bfdae5df7f->leave($__internal_2c0cd55ddeef839cb1a4e8ffe8fb9d611bc23fbc182c2d54db87b6bfdae5df7f_prof);

        
        $__internal_da85d0dfe951ce05a9a13200724cd328a1a0a9670cdda8cfdc162f827b7417be->leave($__internal_da85d0dfe951ce05a9a13200724cd328a1a0a9670cdda8cfdc162f827b7417be_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f59f5f337d57a6cdc20128bc5039443e45a1601d713dfc329d8540f6d06f170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f59f5f337d57a6cdc20128bc5039443e45a1601d713dfc329d8540f6d06f170->enter($__internal_2f59f5f337d57a6cdc20128bc5039443e45a1601d713dfc329d8540f6d06f170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7c0c4c66712834143d695c03cc02167d839c2bd9e46262980aa2c4be00228958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0c4c66712834143d695c03cc02167d839c2bd9e46262980aa2c4be00228958->enter($__internal_7c0c4c66712834143d695c03cc02167d839c2bd9e46262980aa2c4be00228958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7c0c4c66712834143d695c03cc02167d839c2bd9e46262980aa2c4be00228958->leave($__internal_7c0c4c66712834143d695c03cc02167d839c2bd9e46262980aa2c4be00228958_prof);

        
        $__internal_2f59f5f337d57a6cdc20128bc5039443e45a1601d713dfc329d8540f6d06f170->leave($__internal_2f59f5f337d57a6cdc20128bc5039443e45a1601d713dfc329d8540f6d06f170_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
