<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3a23e5b3d4ec9ef94a09aaffb6956f1bd7905c26dc56ad3ee1165e6825344ab7 extends Twig_Template
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
        $__internal_85a06dfb0ebfec860f61124a3ba5ae28f4ea786a37f4444bd553b742caef8d49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85a06dfb0ebfec860f61124a3ba5ae28f4ea786a37f4444bd553b742caef8d49->enter($__internal_85a06dfb0ebfec860f61124a3ba5ae28f4ea786a37f4444bd553b742caef8d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_0b458a5df429f5360d2d9756477577391e5a03358ddb824b1c8d1f3349f3a787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b458a5df429f5360d2d9756477577391e5a03358ddb824b1c8d1f3349f3a787->enter($__internal_0b458a5df429f5360d2d9756477577391e5a03358ddb824b1c8d1f3349f3a787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_85a06dfb0ebfec860f61124a3ba5ae28f4ea786a37f4444bd553b742caef8d49->leave($__internal_85a06dfb0ebfec860f61124a3ba5ae28f4ea786a37f4444bd553b742caef8d49_prof);

        
        $__internal_0b458a5df429f5360d2d9756477577391e5a03358ddb824b1c8d1f3349f3a787->leave($__internal_0b458a5df429f5360d2d9756477577391e5a03358ddb824b1c8d1f3349f3a787_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
