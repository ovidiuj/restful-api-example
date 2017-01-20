<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_95d7afa5dccedf33d5c5855dd7cff6cece12ad2c9179c95e5f380d3d7bc24e66 extends Twig_Template
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
        $__internal_69d74619b94f29a2cbcf26023dfcb628d7a796a539aab98cd97d57a5301213d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d74619b94f29a2cbcf26023dfcb628d7a796a539aab98cd97d57a5301213d2->enter($__internal_69d74619b94f29a2cbcf26023dfcb628d7a796a539aab98cd97d57a5301213d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_f7f1a2613ca64617bc619dc3a2648c7633878b0f2ab63e3a68b94172a5594836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f1a2613ca64617bc619dc3a2648c7633878b0f2ab63e3a68b94172a5594836->enter($__internal_f7f1a2613ca64617bc619dc3a2648c7633878b0f2ab63e3a68b94172a5594836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_69d74619b94f29a2cbcf26023dfcb628d7a796a539aab98cd97d57a5301213d2->leave($__internal_69d74619b94f29a2cbcf26023dfcb628d7a796a539aab98cd97d57a5301213d2_prof);

        
        $__internal_f7f1a2613ca64617bc619dc3a2648c7633878b0f2ab63e3a68b94172a5594836->leave($__internal_f7f1a2613ca64617bc619dc3a2648c7633878b0f2ab63e3a68b94172a5594836_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
