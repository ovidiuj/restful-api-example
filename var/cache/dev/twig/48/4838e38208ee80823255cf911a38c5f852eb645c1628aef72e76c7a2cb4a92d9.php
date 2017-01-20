<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8a72aa64d0b831e00b010149ab4ce976eb1e3850427d11304701fa2c6628539c extends Twig_Template
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
        $__internal_928ea85cc7597db8fba8ba669c7f67a5501b9172f1fcf412c153bf39154c45bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_928ea85cc7597db8fba8ba669c7f67a5501b9172f1fcf412c153bf39154c45bf->enter($__internal_928ea85cc7597db8fba8ba669c7f67a5501b9172f1fcf412c153bf39154c45bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_2f9127127676c5272f7fd3bad4494874b6cae589be526d363e526e13c9558367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f9127127676c5272f7fd3bad4494874b6cae589be526d363e526e13c9558367->enter($__internal_2f9127127676c5272f7fd3bad4494874b6cae589be526d363e526e13c9558367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_928ea85cc7597db8fba8ba669c7f67a5501b9172f1fcf412c153bf39154c45bf->leave($__internal_928ea85cc7597db8fba8ba669c7f67a5501b9172f1fcf412c153bf39154c45bf_prof);

        
        $__internal_2f9127127676c5272f7fd3bad4494874b6cae589be526d363e526e13c9558367->leave($__internal_2f9127127676c5272f7fd3bad4494874b6cae589be526d363e526e13c9558367_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
