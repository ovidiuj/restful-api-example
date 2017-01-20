<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d7dbf3db3bb7bed2a3f4feef7501c2394c961991fa14539e0d0c8dba0b6de77c extends Twig_Template
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
        $__internal_f400f2715201f29309b7f2dfc9ac77104501a5abe60c9d852cd28f2b6c39adb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f400f2715201f29309b7f2dfc9ac77104501a5abe60c9d852cd28f2b6c39adb9->enter($__internal_f400f2715201f29309b7f2dfc9ac77104501a5abe60c9d852cd28f2b6c39adb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_618472de2f987c6c57f27c8c1814a6fb66f235172449051db42722fef1eb332f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618472de2f987c6c57f27c8c1814a6fb66f235172449051db42722fef1eb332f->enter($__internal_618472de2f987c6c57f27c8c1814a6fb66f235172449051db42722fef1eb332f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f400f2715201f29309b7f2dfc9ac77104501a5abe60c9d852cd28f2b6c39adb9->leave($__internal_f400f2715201f29309b7f2dfc9ac77104501a5abe60c9d852cd28f2b6c39adb9_prof);

        
        $__internal_618472de2f987c6c57f27c8c1814a6fb66f235172449051db42722fef1eb332f->leave($__internal_618472de2f987c6c57f27c8c1814a6fb66f235172449051db42722fef1eb332f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
