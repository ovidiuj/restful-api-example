<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_43cfa4df6fa507a07dd290b4b81fca69b70f03cab0b64e18100a287cfa1b70c6 extends Twig_Template
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
        $__internal_629d8c9d6fc7729eba6e958137fdb93c53afbdd90d86da79afeb74733bfaaf56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_629d8c9d6fc7729eba6e958137fdb93c53afbdd90d86da79afeb74733bfaaf56->enter($__internal_629d8c9d6fc7729eba6e958137fdb93c53afbdd90d86da79afeb74733bfaaf56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_f6c9692ef0730ed4b8157b1abe09154223808d9952b7299cbd55e96e8ffb1b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c9692ef0730ed4b8157b1abe09154223808d9952b7299cbd55e96e8ffb1b26->enter($__internal_f6c9692ef0730ed4b8157b1abe09154223808d9952b7299cbd55e96e8ffb1b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_629d8c9d6fc7729eba6e958137fdb93c53afbdd90d86da79afeb74733bfaaf56->leave($__internal_629d8c9d6fc7729eba6e958137fdb93c53afbdd90d86da79afeb74733bfaaf56_prof);

        
        $__internal_f6c9692ef0730ed4b8157b1abe09154223808d9952b7299cbd55e96e8ffb1b26->leave($__internal_f6c9692ef0730ed4b8157b1abe09154223808d9952b7299cbd55e96e8ffb1b26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
