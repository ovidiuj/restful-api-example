<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_9ee74711064f84c8aafc5e578c9732d32ad9184033e0190a76f6eb7e38ed4620 extends Twig_Template
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
        $__internal_4d3d5b6e5299b4007f96b02dde2141961c5eb5c4fdf6f971ae8cff8eb3425a63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d3d5b6e5299b4007f96b02dde2141961c5eb5c4fdf6f971ae8cff8eb3425a63->enter($__internal_4d3d5b6e5299b4007f96b02dde2141961c5eb5c4fdf6f971ae8cff8eb3425a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_89b91762f0d1c10637a158b50927334a2e8ab98cb6be4ab4ce70764fa24f1718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b91762f0d1c10637a158b50927334a2e8ab98cb6be4ab4ce70764fa24f1718->enter($__internal_89b91762f0d1c10637a158b50927334a2e8ab98cb6be4ab4ce70764fa24f1718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4d3d5b6e5299b4007f96b02dde2141961c5eb5c4fdf6f971ae8cff8eb3425a63->leave($__internal_4d3d5b6e5299b4007f96b02dde2141961c5eb5c4fdf6f971ae8cff8eb3425a63_prof);

        
        $__internal_89b91762f0d1c10637a158b50927334a2e8ab98cb6be4ab4ce70764fa24f1718->leave($__internal_89b91762f0d1c10637a158b50927334a2e8ab98cb6be4ab4ce70764fa24f1718_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
