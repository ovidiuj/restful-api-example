<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9553fa96834c0ab4dcb8de3e70f72131636b26386dd26bde3b020531765d74b9 extends Twig_Template
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
        $__internal_e4ed542d554ef759848a9f8d9d58d032ebe99f8b9a82b25610469940d9f9ef15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4ed542d554ef759848a9f8d9d58d032ebe99f8b9a82b25610469940d9f9ef15->enter($__internal_e4ed542d554ef759848a9f8d9d58d032ebe99f8b9a82b25610469940d9f9ef15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_0a81e8e87a784e0ca28431cd1facc7f3dc07116c7579d128bdc3be7ae02edc5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a81e8e87a784e0ca28431cd1facc7f3dc07116c7579d128bdc3be7ae02edc5a->enter($__internal_0a81e8e87a784e0ca28431cd1facc7f3dc07116c7579d128bdc3be7ae02edc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_e4ed542d554ef759848a9f8d9d58d032ebe99f8b9a82b25610469940d9f9ef15->leave($__internal_e4ed542d554ef759848a9f8d9d58d032ebe99f8b9a82b25610469940d9f9ef15_prof);

        
        $__internal_0a81e8e87a784e0ca28431cd1facc7f3dc07116c7579d128bdc3be7ae02edc5a->leave($__internal_0a81e8e87a784e0ca28431cd1facc7f3dc07116c7579d128bdc3be7ae02edc5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
