<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_7beac7d31780cb9333f3c34bf4f70d1009b4d3940a094783de49923ab018d8f3 extends Twig_Template
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
        $__internal_88ff4a8f2dfddc2b6ae0d6f7ef4f3e8851a38dd251f3a8a2a06d51c1923f1e17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88ff4a8f2dfddc2b6ae0d6f7ef4f3e8851a38dd251f3a8a2a06d51c1923f1e17->enter($__internal_88ff4a8f2dfddc2b6ae0d6f7ef4f3e8851a38dd251f3a8a2a06d51c1923f1e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_8166b62447955dd7aa82138a6124acb4c49c8a1ff1da8e409e296438af3fd4dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8166b62447955dd7aa82138a6124acb4c49c8a1ff1da8e409e296438af3fd4dc->enter($__internal_8166b62447955dd7aa82138a6124acb4c49c8a1ff1da8e409e296438af3fd4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_88ff4a8f2dfddc2b6ae0d6f7ef4f3e8851a38dd251f3a8a2a06d51c1923f1e17->leave($__internal_88ff4a8f2dfddc2b6ae0d6f7ef4f3e8851a38dd251f3a8a2a06d51c1923f1e17_prof);

        
        $__internal_8166b62447955dd7aa82138a6124acb4c49c8a1ff1da8e409e296438af3fd4dc->leave($__internal_8166b62447955dd7aa82138a6124acb4c49c8a1ff1da8e409e296438af3fd4dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
