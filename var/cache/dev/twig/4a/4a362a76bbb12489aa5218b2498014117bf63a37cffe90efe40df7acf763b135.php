<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_464c6167f8ca2490d2a0afd51fb369b2b491bfb9f9e72d194875d9901ba2d706 extends Twig_Template
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
        $__internal_443bde9838b2e9954791ee146df566eb8b9546789af022381d0a00f7993c1ac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_443bde9838b2e9954791ee146df566eb8b9546789af022381d0a00f7993c1ac0->enter($__internal_443bde9838b2e9954791ee146df566eb8b9546789af022381d0a00f7993c1ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_9d08e2628756f47f57ade740b030698abbfe719c2e8d83434a6a647ecc70f275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d08e2628756f47f57ade740b030698abbfe719c2e8d83434a6a647ecc70f275->enter($__internal_9d08e2628756f47f57ade740b030698abbfe719c2e8d83434a6a647ecc70f275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_443bde9838b2e9954791ee146df566eb8b9546789af022381d0a00f7993c1ac0->leave($__internal_443bde9838b2e9954791ee146df566eb8b9546789af022381d0a00f7993c1ac0_prof);

        
        $__internal_9d08e2628756f47f57ade740b030698abbfe719c2e8d83434a6a647ecc70f275->leave($__internal_9d08e2628756f47f57ade740b030698abbfe719c2e8d83434a6a647ecc70f275_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
