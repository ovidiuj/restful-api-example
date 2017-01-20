<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2860e5c2f8c997d9d0dcb582a6c488d9a51615957c5bde6e68a1c68889f2393e extends Twig_Template
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
        $__internal_1d25b2b563df48710825af29a294b1aa6de83b389e0e65550ad1f0bb5829d262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d25b2b563df48710825af29a294b1aa6de83b389e0e65550ad1f0bb5829d262->enter($__internal_1d25b2b563df48710825af29a294b1aa6de83b389e0e65550ad1f0bb5829d262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_b16003fac3d8c5766476261d2fce529247dbac9c84b77133e9c960ee5c07caf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16003fac3d8c5766476261d2fce529247dbac9c84b77133e9c960ee5c07caf6->enter($__internal_b16003fac3d8c5766476261d2fce529247dbac9c84b77133e9c960ee5c07caf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1d25b2b563df48710825af29a294b1aa6de83b389e0e65550ad1f0bb5829d262->leave($__internal_1d25b2b563df48710825af29a294b1aa6de83b389e0e65550ad1f0bb5829d262_prof);

        
        $__internal_b16003fac3d8c5766476261d2fce529247dbac9c84b77133e9c960ee5c07caf6->leave($__internal_b16003fac3d8c5766476261d2fce529247dbac9c84b77133e9c960ee5c07caf6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
