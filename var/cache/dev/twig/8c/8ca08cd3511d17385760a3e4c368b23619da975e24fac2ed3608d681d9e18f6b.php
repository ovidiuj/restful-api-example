<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_5dd881581bc15836809338988f2ffb1d30def9304e678fa262239ebe510c712a extends Twig_Template
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
        $__internal_e55061f8273bf009b604be99fd08ad53f658c7113adcb2bcd74593870b8f7ffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e55061f8273bf009b604be99fd08ad53f658c7113adcb2bcd74593870b8f7ffc->enter($__internal_e55061f8273bf009b604be99fd08ad53f658c7113adcb2bcd74593870b8f7ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_75267998bed80fe936790907d642453cbd6c9e4a18cfc8f771ab81706c0e8d5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75267998bed80fe936790907d642453cbd6c9e4a18cfc8f771ab81706c0e8d5c->enter($__internal_75267998bed80fe936790907d642453cbd6c9e4a18cfc8f771ab81706c0e8d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_e55061f8273bf009b604be99fd08ad53f658c7113adcb2bcd74593870b8f7ffc->leave($__internal_e55061f8273bf009b604be99fd08ad53f658c7113adcb2bcd74593870b8f7ffc_prof);

        
        $__internal_75267998bed80fe936790907d642453cbd6c9e4a18cfc8f771ab81706c0e8d5c->leave($__internal_75267998bed80fe936790907d642453cbd6c9e4a18cfc8f771ab81706c0e8d5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
