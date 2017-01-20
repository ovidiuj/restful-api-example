<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4637bdf881b03616502cff663e952e1de11fb13ee777e5412be7d6c409e8894f extends Twig_Template
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
        $__internal_b2ce0a43c54d74420467df5edb6f6ffa1399296be5e54dc60d7ba664dd93f3a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ce0a43c54d74420467df5edb6f6ffa1399296be5e54dc60d7ba664dd93f3a6->enter($__internal_b2ce0a43c54d74420467df5edb6f6ffa1399296be5e54dc60d7ba664dd93f3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_c8ba7ed83594786049aecc9ecd957150d99011bdba225a560cee938f847447d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ba7ed83594786049aecc9ecd957150d99011bdba225a560cee938f847447d5->enter($__internal_c8ba7ed83594786049aecc9ecd957150d99011bdba225a560cee938f847447d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b2ce0a43c54d74420467df5edb6f6ffa1399296be5e54dc60d7ba664dd93f3a6->leave($__internal_b2ce0a43c54d74420467df5edb6f6ffa1399296be5e54dc60d7ba664dd93f3a6_prof);

        
        $__internal_c8ba7ed83594786049aecc9ecd957150d99011bdba225a560cee938f847447d5->leave($__internal_c8ba7ed83594786049aecc9ecd957150d99011bdba225a560cee938f847447d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
