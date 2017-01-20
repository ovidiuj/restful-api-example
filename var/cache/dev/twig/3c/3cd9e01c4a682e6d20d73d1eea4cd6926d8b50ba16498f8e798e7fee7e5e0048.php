<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8de50a120377bc892b431820874d9e31d415a9b1d910030f2099d2b175a09d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8de50a120377bc892b431820874d9e31d415a9b1d910030f2099d2b175a09d61->enter($__internal_8de50a120377bc892b431820874d9e31d415a9b1d910030f2099d2b175a09d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_153ae80bc801c108a1dc7559870e511a006803efe985ced2e6d81044d78cee47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_153ae80bc801c108a1dc7559870e511a006803efe985ced2e6d81044d78cee47->enter($__internal_153ae80bc801c108a1dc7559870e511a006803efe985ced2e6d81044d78cee47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8de50a120377bc892b431820874d9e31d415a9b1d910030f2099d2b175a09d61->leave($__internal_8de50a120377bc892b431820874d9e31d415a9b1d910030f2099d2b175a09d61_prof);

        
        $__internal_153ae80bc801c108a1dc7559870e511a006803efe985ced2e6d81044d78cee47->leave($__internal_153ae80bc801c108a1dc7559870e511a006803efe985ced2e6d81044d78cee47_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d024affa9bab4e24e09104b6b7a3e69e020c5773d4a7b4759b3d87bb5e3cba89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d024affa9bab4e24e09104b6b7a3e69e020c5773d4a7b4759b3d87bb5e3cba89->enter($__internal_d024affa9bab4e24e09104b6b7a3e69e020c5773d4a7b4759b3d87bb5e3cba89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_12f621412e564e29a102073c7126f97151f6ae4eb289485bd899272053e69dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12f621412e564e29a102073c7126f97151f6ae4eb289485bd899272053e69dc3->enter($__internal_12f621412e564e29a102073c7126f97151f6ae4eb289485bd899272053e69dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_12f621412e564e29a102073c7126f97151f6ae4eb289485bd899272053e69dc3->leave($__internal_12f621412e564e29a102073c7126f97151f6ae4eb289485bd899272053e69dc3_prof);

        
        $__internal_d024affa9bab4e24e09104b6b7a3e69e020c5773d4a7b4759b3d87bb5e3cba89->leave($__internal_d024affa9bab4e24e09104b6b7a3e69e020c5773d4a7b4759b3d87bb5e3cba89_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2d569b388019e94488937b2d5dde92f5880885721ddd7ef5b5f2ad1289e57413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d569b388019e94488937b2d5dde92f5880885721ddd7ef5b5f2ad1289e57413->enter($__internal_2d569b388019e94488937b2d5dde92f5880885721ddd7ef5b5f2ad1289e57413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_831da9c0196ea9f4fc3a138cf05c985b898d67b511878991bb714b325bead5ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_831da9c0196ea9f4fc3a138cf05c985b898d67b511878991bb714b325bead5ee->enter($__internal_831da9c0196ea9f4fc3a138cf05c985b898d67b511878991bb714b325bead5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_831da9c0196ea9f4fc3a138cf05c985b898d67b511878991bb714b325bead5ee->leave($__internal_831da9c0196ea9f4fc3a138cf05c985b898d67b511878991bb714b325bead5ee_prof);

        
        $__internal_2d569b388019e94488937b2d5dde92f5880885721ddd7ef5b5f2ad1289e57413->leave($__internal_2d569b388019e94488937b2d5dde92f5880885721ddd7ef5b5f2ad1289e57413_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_657dcfdefdb64969c456298c60b58dac02aae6decceb411822edab89a5b8e065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657dcfdefdb64969c456298c60b58dac02aae6decceb411822edab89a5b8e065->enter($__internal_657dcfdefdb64969c456298c60b58dac02aae6decceb411822edab89a5b8e065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bc560dc380561cba3bd8da08f79989c63cdd7dc96521b12563fac4fab18bb311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc560dc380561cba3bd8da08f79989c63cdd7dc96521b12563fac4fab18bb311->enter($__internal_bc560dc380561cba3bd8da08f79989c63cdd7dc96521b12563fac4fab18bb311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bc560dc380561cba3bd8da08f79989c63cdd7dc96521b12563fac4fab18bb311->leave($__internal_bc560dc380561cba3bd8da08f79989c63cdd7dc96521b12563fac4fab18bb311_prof);

        
        $__internal_657dcfdefdb64969c456298c60b58dac02aae6decceb411822edab89a5b8e065->leave($__internal_657dcfdefdb64969c456298c60b58dac02aae6decceb411822edab89a5b8e065_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
