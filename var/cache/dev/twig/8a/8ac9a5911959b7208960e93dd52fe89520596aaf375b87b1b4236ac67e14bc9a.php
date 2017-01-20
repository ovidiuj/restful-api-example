<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_12f738d54aff3bf3f6a56dc81f2505fdcba5d762d3d028c6a50f1a44ad74da5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_cc9bbc4d033e2175c1b3b8538c8b2dda67f0e4b28f547307c86d6dcfb2d2d387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc9bbc4d033e2175c1b3b8538c8b2dda67f0e4b28f547307c86d6dcfb2d2d387->enter($__internal_cc9bbc4d033e2175c1b3b8538c8b2dda67f0e4b28f547307c86d6dcfb2d2d387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_19ca70d15bc7baf8eed750a67df2f7e2f12f3288241714ecc76b2b15d352c1fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ca70d15bc7baf8eed750a67df2f7e2f12f3288241714ecc76b2b15d352c1fb->enter($__internal_19ca70d15bc7baf8eed750a67df2f7e2f12f3288241714ecc76b2b15d352c1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc9bbc4d033e2175c1b3b8538c8b2dda67f0e4b28f547307c86d6dcfb2d2d387->leave($__internal_cc9bbc4d033e2175c1b3b8538c8b2dda67f0e4b28f547307c86d6dcfb2d2d387_prof);

        
        $__internal_19ca70d15bc7baf8eed750a67df2f7e2f12f3288241714ecc76b2b15d352c1fb->leave($__internal_19ca70d15bc7baf8eed750a67df2f7e2f12f3288241714ecc76b2b15d352c1fb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7fd82363c703bfea5f61e3fe0833533eae7d51ab79783551dcc59953726f3dfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd82363c703bfea5f61e3fe0833533eae7d51ab79783551dcc59953726f3dfc->enter($__internal_7fd82363c703bfea5f61e3fe0833533eae7d51ab79783551dcc59953726f3dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_797eeb1f790149d187fbbcb68b17e6481b4f79b798adc93a9e4f014ca58acc33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_797eeb1f790149d187fbbcb68b17e6481b4f79b798adc93a9e4f014ca58acc33->enter($__internal_797eeb1f790149d187fbbcb68b17e6481b4f79b798adc93a9e4f014ca58acc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_797eeb1f790149d187fbbcb68b17e6481b4f79b798adc93a9e4f014ca58acc33->leave($__internal_797eeb1f790149d187fbbcb68b17e6481b4f79b798adc93a9e4f014ca58acc33_prof);

        
        $__internal_7fd82363c703bfea5f61e3fe0833533eae7d51ab79783551dcc59953726f3dfc->leave($__internal_7fd82363c703bfea5f61e3fe0833533eae7d51ab79783551dcc59953726f3dfc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aaea5136e668ea0c80807da73a1ac0e90a89a8a33a03d003114c87547393a539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaea5136e668ea0c80807da73a1ac0e90a89a8a33a03d003114c87547393a539->enter($__internal_aaea5136e668ea0c80807da73a1ac0e90a89a8a33a03d003114c87547393a539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_359e7aebc132987edd4abea12a0b35c13028ba495920f4e518cd7e973c37610d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359e7aebc132987edd4abea12a0b35c13028ba495920f4e518cd7e973c37610d->enter($__internal_359e7aebc132987edd4abea12a0b35c13028ba495920f4e518cd7e973c37610d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_359e7aebc132987edd4abea12a0b35c13028ba495920f4e518cd7e973c37610d->leave($__internal_359e7aebc132987edd4abea12a0b35c13028ba495920f4e518cd7e973c37610d_prof);

        
        $__internal_aaea5136e668ea0c80807da73a1ac0e90a89a8a33a03d003114c87547393a539->leave($__internal_aaea5136e668ea0c80807da73a1ac0e90a89a8a33a03d003114c87547393a539_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_41b0a7191f538433c0007101f1428b33ada7ba6ff0c9bff356d9aad1fb54feaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41b0a7191f538433c0007101f1428b33ada7ba6ff0c9bff356d9aad1fb54feaa->enter($__internal_41b0a7191f538433c0007101f1428b33ada7ba6ff0c9bff356d9aad1fb54feaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cd53ba8eda875883d0eb19408926945217135652eab0d5f08d609e8b320c6bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd53ba8eda875883d0eb19408926945217135652eab0d5f08d609e8b320c6bc3->enter($__internal_cd53ba8eda875883d0eb19408926945217135652eab0d5f08d609e8b320c6bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_cd53ba8eda875883d0eb19408926945217135652eab0d5f08d609e8b320c6bc3->leave($__internal_cd53ba8eda875883d0eb19408926945217135652eab0d5f08d609e8b320c6bc3_prof);

        
        $__internal_41b0a7191f538433c0007101f1428b33ada7ba6ff0c9bff356d9aad1fb54feaa->leave($__internal_41b0a7191f538433c0007101f1428b33ada7ba6ff0c9bff356d9aad1fb54feaa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
