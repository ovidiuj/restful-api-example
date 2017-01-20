<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_fe527007acf5d27a058d7cc714e187ad085376dff826d0e7e109bf7efeaf0710 extends Twig_Template
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
        $__internal_ea0d987333873f289bb8f467ed2177deca245433af6e3cc75376628fb1ac96a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea0d987333873f289bb8f467ed2177deca245433af6e3cc75376628fb1ac96a5->enter($__internal_ea0d987333873f289bb8f467ed2177deca245433af6e3cc75376628fb1ac96a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_b5eff4f07b978c1dc3fe8b7f1ccb03d29b544a3fb8359be4ab03b16f94e0282e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5eff4f07b978c1dc3fe8b7f1ccb03d29b544a3fb8359be4ab03b16f94e0282e->enter($__internal_b5eff4f07b978c1dc3fe8b7f1ccb03d29b544a3fb8359be4ab03b16f94e0282e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ea0d987333873f289bb8f467ed2177deca245433af6e3cc75376628fb1ac96a5->leave($__internal_ea0d987333873f289bb8f467ed2177deca245433af6e3cc75376628fb1ac96a5_prof);

        
        $__internal_b5eff4f07b978c1dc3fe8b7f1ccb03d29b544a3fb8359be4ab03b16f94e0282e->leave($__internal_b5eff4f07b978c1dc3fe8b7f1ccb03d29b544a3fb8359be4ab03b16f94e0282e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
