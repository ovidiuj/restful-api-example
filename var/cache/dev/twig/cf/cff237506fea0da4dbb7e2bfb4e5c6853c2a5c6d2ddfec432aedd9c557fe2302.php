<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ec0baa71115482ab6e4854145f4780a8cbbd41afabbc80ad2a6bb33c9d72a774 extends Twig_Template
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
        $__internal_ef7acdd64f199f5cde1065e3b63e50bb45b5d85e5d47244b41ea0be045a16e5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef7acdd64f199f5cde1065e3b63e50bb45b5d85e5d47244b41ea0be045a16e5b->enter($__internal_ef7acdd64f199f5cde1065e3b63e50bb45b5d85e5d47244b41ea0be045a16e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_79651c3a5aa1d43793f88e19c3af6889ca0eb6261bd48423bb5254762f97b007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79651c3a5aa1d43793f88e19c3af6889ca0eb6261bd48423bb5254762f97b007->enter($__internal_79651c3a5aa1d43793f88e19c3af6889ca0eb6261bd48423bb5254762f97b007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ef7acdd64f199f5cde1065e3b63e50bb45b5d85e5d47244b41ea0be045a16e5b->leave($__internal_ef7acdd64f199f5cde1065e3b63e50bb45b5d85e5d47244b41ea0be045a16e5b_prof);

        
        $__internal_79651c3a5aa1d43793f88e19c3af6889ca0eb6261bd48423bb5254762f97b007->leave($__internal_79651c3a5aa1d43793f88e19c3af6889ca0eb6261bd48423bb5254762f97b007_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
