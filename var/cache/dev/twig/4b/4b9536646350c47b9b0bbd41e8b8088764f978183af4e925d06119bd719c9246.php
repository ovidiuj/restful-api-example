<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_309d080f5974df84644bd4e4095d9e0c79c337c730538a651b6f3c6c15f236eb extends Twig_Template
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
        $__internal_4f22d8e78154483b25f81734363b9e5e69f7cdc86c9632e28f2f3c2636cbd417 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f22d8e78154483b25f81734363b9e5e69f7cdc86c9632e28f2f3c2636cbd417->enter($__internal_4f22d8e78154483b25f81734363b9e5e69f7cdc86c9632e28f2f3c2636cbd417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_1a6b7563ad304fc5bc63176bd39aa679c4c4e98a3db4dfd2962ea654f4e976d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6b7563ad304fc5bc63176bd39aa679c4c4e98a3db4dfd2962ea654f4e976d6->enter($__internal_1a6b7563ad304fc5bc63176bd39aa679c4c4e98a3db4dfd2962ea654f4e976d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4f22d8e78154483b25f81734363b9e5e69f7cdc86c9632e28f2f3c2636cbd417->leave($__internal_4f22d8e78154483b25f81734363b9e5e69f7cdc86c9632e28f2f3c2636cbd417_prof);

        
        $__internal_1a6b7563ad304fc5bc63176bd39aa679c4c4e98a3db4dfd2962ea654f4e976d6->leave($__internal_1a6b7563ad304fc5bc63176bd39aa679c4c4e98a3db4dfd2962ea654f4e976d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
