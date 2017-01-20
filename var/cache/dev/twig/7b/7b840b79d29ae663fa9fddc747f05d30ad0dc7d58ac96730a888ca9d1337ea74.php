<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_aa15f58eb5b23ff33096a330603351099836f7a58ca0137ee1746301f0e7d28e extends Twig_Template
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
        $__internal_196087c88b1c2f87ffcbbfcf33dcb1d70854e5321deb3d08234a45d60c5ebc9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_196087c88b1c2f87ffcbbfcf33dcb1d70854e5321deb3d08234a45d60c5ebc9b->enter($__internal_196087c88b1c2f87ffcbbfcf33dcb1d70854e5321deb3d08234a45d60c5ebc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_df56d62315803581588bc04d9ffd98c8642f89f8f6fe94426f7b184d018ca7e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df56d62315803581588bc04d9ffd98c8642f89f8f6fe94426f7b184d018ca7e6->enter($__internal_df56d62315803581588bc04d9ffd98c8642f89f8f6fe94426f7b184d018ca7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_196087c88b1c2f87ffcbbfcf33dcb1d70854e5321deb3d08234a45d60c5ebc9b->leave($__internal_196087c88b1c2f87ffcbbfcf33dcb1d70854e5321deb3d08234a45d60c5ebc9b_prof);

        
        $__internal_df56d62315803581588bc04d9ffd98c8642f89f8f6fe94426f7b184d018ca7e6->leave($__internal_df56d62315803581588bc04d9ffd98c8642f89f8f6fe94426f7b184d018ca7e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
