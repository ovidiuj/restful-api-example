<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_bbc52713541d035994e8865cb299655a6527c2d9a87235596b02f0d9ec8ee303 extends Twig_Template
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
        $__internal_eb478eb382f3fc23fcfc177e6d469671ac50adbfafb6a3e536d4e639fb6ece3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb478eb382f3fc23fcfc177e6d469671ac50adbfafb6a3e536d4e639fb6ece3f->enter($__internal_eb478eb382f3fc23fcfc177e6d469671ac50adbfafb6a3e536d4e639fb6ece3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_bf3a94ed9ada94beae007386eb6a0c5f95c65bd666670fe2d4d5ca6926cc512b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf3a94ed9ada94beae007386eb6a0c5f95c65bd666670fe2d4d5ca6926cc512b->enter($__internal_bf3a94ed9ada94beae007386eb6a0c5f95c65bd666670fe2d4d5ca6926cc512b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_eb478eb382f3fc23fcfc177e6d469671ac50adbfafb6a3e536d4e639fb6ece3f->leave($__internal_eb478eb382f3fc23fcfc177e6d469671ac50adbfafb6a3e536d4e639fb6ece3f_prof);

        
        $__internal_bf3a94ed9ada94beae007386eb6a0c5f95c65bd666670fe2d4d5ca6926cc512b->leave($__internal_bf3a94ed9ada94beae007386eb6a0c5f95c65bd666670fe2d4d5ca6926cc512b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
