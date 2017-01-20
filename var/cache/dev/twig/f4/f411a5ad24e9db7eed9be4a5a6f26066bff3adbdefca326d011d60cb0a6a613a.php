<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0798e37c38d513bea7b709472f00287adf735e9290f5e482edd74f4ecf2ed013 extends Twig_Template
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
        $__internal_ec1b9f500471cb45f273a09155f0fe388f368af8e113be3932e57b4d08203277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1b9f500471cb45f273a09155f0fe388f368af8e113be3932e57b4d08203277->enter($__internal_ec1b9f500471cb45f273a09155f0fe388f368af8e113be3932e57b4d08203277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_63993739040fff71f540cb30c090c70e148c97087114c1af379d54c544beab27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63993739040fff71f540cb30c090c70e148c97087114c1af379d54c544beab27->enter($__internal_63993739040fff71f540cb30c090c70e148c97087114c1af379d54c544beab27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_ec1b9f500471cb45f273a09155f0fe388f368af8e113be3932e57b4d08203277->leave($__internal_ec1b9f500471cb45f273a09155f0fe388f368af8e113be3932e57b4d08203277_prof);

        
        $__internal_63993739040fff71f540cb30c090c70e148c97087114c1af379d54c544beab27->leave($__internal_63993739040fff71f540cb30c090c70e148c97087114c1af379d54c544beab27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
