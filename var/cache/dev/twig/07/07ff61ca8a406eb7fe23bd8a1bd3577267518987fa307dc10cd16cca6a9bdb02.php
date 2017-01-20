<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5b92c25c5c9b2f32d8bbc27cab807545e111bb03e7b13183f129d14b34485e3a extends Twig_Template
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
        $__internal_084585f1f42cd8af9b6d361b62f44e030bf4cbae95534546fe5a51e8d5b932f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084585f1f42cd8af9b6d361b62f44e030bf4cbae95534546fe5a51e8d5b932f6->enter($__internal_084585f1f42cd8af9b6d361b62f44e030bf4cbae95534546fe5a51e8d5b932f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_4cbc88a5c4b8059e2b2ef725853841c6eb8400c59d20665719a4a406f7896e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cbc88a5c4b8059e2b2ef725853841c6eb8400c59d20665719a4a406f7896e78->enter($__internal_4cbc88a5c4b8059e2b2ef725853841c6eb8400c59d20665719a4a406f7896e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_084585f1f42cd8af9b6d361b62f44e030bf4cbae95534546fe5a51e8d5b932f6->leave($__internal_084585f1f42cd8af9b6d361b62f44e030bf4cbae95534546fe5a51e8d5b932f6_prof);

        
        $__internal_4cbc88a5c4b8059e2b2ef725853841c6eb8400c59d20665719a4a406f7896e78->leave($__internal_4cbc88a5c4b8059e2b2ef725853841c6eb8400c59d20665719a4a406f7896e78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
