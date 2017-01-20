<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_14006793ff0e0fc11971a0eb9ccd995c1b59242fb07f6c2c641d8b3cbcf95cac extends Twig_Template
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
        $__internal_9e2e8454a850a0879a2d8aa7c307e6213d254c0a28dfee97eb3de8342f5fd0a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e2e8454a850a0879a2d8aa7c307e6213d254c0a28dfee97eb3de8342f5fd0a2->enter($__internal_9e2e8454a850a0879a2d8aa7c307e6213d254c0a28dfee97eb3de8342f5fd0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_90cf0e730871f4d730cfe4863d035ddcb51b7f9f39de3357ab807a0cbaccc410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90cf0e730871f4d730cfe4863d035ddcb51b7f9f39de3357ab807a0cbaccc410->enter($__internal_90cf0e730871f4d730cfe4863d035ddcb51b7f9f39de3357ab807a0cbaccc410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_9e2e8454a850a0879a2d8aa7c307e6213d254c0a28dfee97eb3de8342f5fd0a2->leave($__internal_9e2e8454a850a0879a2d8aa7c307e6213d254c0a28dfee97eb3de8342f5fd0a2_prof);

        
        $__internal_90cf0e730871f4d730cfe4863d035ddcb51b7f9f39de3357ab807a0cbaccc410->leave($__internal_90cf0e730871f4d730cfe4863d035ddcb51b7f9f39de3357ab807a0cbaccc410_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
