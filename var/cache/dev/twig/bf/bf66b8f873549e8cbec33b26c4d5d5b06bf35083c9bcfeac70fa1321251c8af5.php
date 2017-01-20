<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_1babc699651978b36e072d15ab6d3e370ff62d9367e6aff85e4701d8da4a7608 extends Twig_Template
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
        $__internal_279fad7c8c2d774ed7101cd044ee64cacb993d45cbd4af1907f6fbb2541e57c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_279fad7c8c2d774ed7101cd044ee64cacb993d45cbd4af1907f6fbb2541e57c8->enter($__internal_279fad7c8c2d774ed7101cd044ee64cacb993d45cbd4af1907f6fbb2541e57c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_145dc6bceba6dd805b77d749fa59b3b0e53d77b71e15c28593e188e576f74717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145dc6bceba6dd805b77d749fa59b3b0e53d77b71e15c28593e188e576f74717->enter($__internal_145dc6bceba6dd805b77d749fa59b3b0e53d77b71e15c28593e188e576f74717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_279fad7c8c2d774ed7101cd044ee64cacb993d45cbd4af1907f6fbb2541e57c8->leave($__internal_279fad7c8c2d774ed7101cd044ee64cacb993d45cbd4af1907f6fbb2541e57c8_prof);

        
        $__internal_145dc6bceba6dd805b77d749fa59b3b0e53d77b71e15c28593e188e576f74717->leave($__internal_145dc6bceba6dd805b77d749fa59b3b0e53d77b71e15c28593e188e576f74717_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
