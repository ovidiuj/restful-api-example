<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_5e574a10f155a288ffab61ed7cf443a299938de2c35bbcbc0e6b142780a815a4 extends Twig_Template
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
        $__internal_cf23204ab23c3099f630245948c1fef4e1a1064325e08c10f7e77a83701406b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf23204ab23c3099f630245948c1fef4e1a1064325e08c10f7e77a83701406b4->enter($__internal_cf23204ab23c3099f630245948c1fef4e1a1064325e08c10f7e77a83701406b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_60c71542c0f8daae33cb91341a248142e5a66ebec38f3e05847f08dcd1dbd3c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c71542c0f8daae33cb91341a248142e5a66ebec38f3e05847f08dcd1dbd3c9->enter($__internal_60c71542c0f8daae33cb91341a248142e5a66ebec38f3e05847f08dcd1dbd3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_cf23204ab23c3099f630245948c1fef4e1a1064325e08c10f7e77a83701406b4->leave($__internal_cf23204ab23c3099f630245948c1fef4e1a1064325e08c10f7e77a83701406b4_prof);

        
        $__internal_60c71542c0f8daae33cb91341a248142e5a66ebec38f3e05847f08dcd1dbd3c9->leave($__internal_60c71542c0f8daae33cb91341a248142e5a66ebec38f3e05847f08dcd1dbd3c9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
