<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f5a4e4e47a61dbc596b8a5cf6c4251cf9809cbaa7fe0192c935bf3aa4bd7f2e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_624ad68a6e69b007ede70b2ee2542fc73e94eb2cd29bfddedfbd12f1ba3dd1ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_624ad68a6e69b007ede70b2ee2542fc73e94eb2cd29bfddedfbd12f1ba3dd1ce->enter($__internal_624ad68a6e69b007ede70b2ee2542fc73e94eb2cd29bfddedfbd12f1ba3dd1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_a6b086593721d5614b1d4bfee4a27deb4581a746ca903b8d7658fbdfbd192003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b086593721d5614b1d4bfee4a27deb4581a746ca903b8d7658fbdfbd192003->enter($__internal_a6b086593721d5614b1d4bfee4a27deb4581a746ca903b8d7658fbdfbd192003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_624ad68a6e69b007ede70b2ee2542fc73e94eb2cd29bfddedfbd12f1ba3dd1ce->leave($__internal_624ad68a6e69b007ede70b2ee2542fc73e94eb2cd29bfddedfbd12f1ba3dd1ce_prof);

        
        $__internal_a6b086593721d5614b1d4bfee4a27deb4581a746ca903b8d7658fbdfbd192003->leave($__internal_a6b086593721d5614b1d4bfee4a27deb4581a746ca903b8d7658fbdfbd192003_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b31ff84d609178628b01e29d7d1a6298913fff0de0420411899ea2f1ee29007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b31ff84d609178628b01e29d7d1a6298913fff0de0420411899ea2f1ee29007->enter($__internal_2b31ff84d609178628b01e29d7d1a6298913fff0de0420411899ea2f1ee29007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_96b0baf336353777bb5814040452ce14a5fbea3fca422e68ae4fc61c5baf67c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b0baf336353777bb5814040452ce14a5fbea3fca422e68ae4fc61c5baf67c9->enter($__internal_96b0baf336353777bb5814040452ce14a5fbea3fca422e68ae4fc61c5baf67c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_96b0baf336353777bb5814040452ce14a5fbea3fca422e68ae4fc61c5baf67c9->leave($__internal_96b0baf336353777bb5814040452ce14a5fbea3fca422e68ae4fc61c5baf67c9_prof);

        
        $__internal_2b31ff84d609178628b01e29d7d1a6298913fff0de0420411899ea2f1ee29007->leave($__internal_2b31ff84d609178628b01e29d7d1a6298913fff0de0420411899ea2f1ee29007_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f633c0a5325082549143ce66bcf95c8a4d1e5608aabcd6198106b1e365a75c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f633c0a5325082549143ce66bcf95c8a4d1e5608aabcd6198106b1e365a75c1->enter($__internal_2f633c0a5325082549143ce66bcf95c8a4d1e5608aabcd6198106b1e365a75c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c2a0ba6b9ca5123b5e0e787a24f1f54c0d541451853016d758ae7e6e2d327f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2a0ba6b9ca5123b5e0e787a24f1f54c0d541451853016d758ae7e6e2d327f7->enter($__internal_1c2a0ba6b9ca5123b5e0e787a24f1f54c0d541451853016d758ae7e6e2d327f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1c2a0ba6b9ca5123b5e0e787a24f1f54c0d541451853016d758ae7e6e2d327f7->leave($__internal_1c2a0ba6b9ca5123b5e0e787a24f1f54c0d541451853016d758ae7e6e2d327f7_prof);

        
        $__internal_2f633c0a5325082549143ce66bcf95c8a4d1e5608aabcd6198106b1e365a75c1->leave($__internal_2f633c0a5325082549143ce66bcf95c8a4d1e5608aabcd6198106b1e365a75c1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b5585af6c10d4bb06aa979ce7ca59bab5d1945af00ec4da7e4e2f324c4e53f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b5585af6c10d4bb06aa979ce7ca59bab5d1945af00ec4da7e4e2f324c4e53f2->enter($__internal_0b5585af6c10d4bb06aa979ce7ca59bab5d1945af00ec4da7e4e2f324c4e53f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_959ab067a4813fe6f22ed0af6aed4b7170a0b8fe72ac1ac805d6137aa1089bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_959ab067a4813fe6f22ed0af6aed4b7170a0b8fe72ac1ac805d6137aa1089bfa->enter($__internal_959ab067a4813fe6f22ed0af6aed4b7170a0b8fe72ac1ac805d6137aa1089bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_959ab067a4813fe6f22ed0af6aed4b7170a0b8fe72ac1ac805d6137aa1089bfa->leave($__internal_959ab067a4813fe6f22ed0af6aed4b7170a0b8fe72ac1ac805d6137aa1089bfa_prof);

        
        $__internal_0b5585af6c10d4bb06aa979ce7ca59bab5d1945af00ec4da7e4e2f324c4e53f2->leave($__internal_0b5585af6c10d4bb06aa979ce7ca59bab5d1945af00ec4da7e4e2f324c4e53f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
