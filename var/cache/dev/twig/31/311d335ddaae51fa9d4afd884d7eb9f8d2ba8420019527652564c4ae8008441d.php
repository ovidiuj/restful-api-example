<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_67b6c4b75c73ea256d9274ba7abce871d65d9a6f616988fe80da1cc8701da5cf extends Twig_Template
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
        $__internal_1dc0fbd2042af182c06994d3f5f73e8bf8d4d957469e367fc35a11ac8925ed3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dc0fbd2042af182c06994d3f5f73e8bf8d4d957469e367fc35a11ac8925ed3c->enter($__internal_1dc0fbd2042af182c06994d3f5f73e8bf8d4d957469e367fc35a11ac8925ed3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_51245850d17245e5b3fdcde4d21ec832ee48c2c9870495b0e0c357d7a2e835b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51245850d17245e5b3fdcde4d21ec832ee48c2c9870495b0e0c357d7a2e835b6->enter($__internal_51245850d17245e5b3fdcde4d21ec832ee48c2c9870495b0e0c357d7a2e835b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1dc0fbd2042af182c06994d3f5f73e8bf8d4d957469e367fc35a11ac8925ed3c->leave($__internal_1dc0fbd2042af182c06994d3f5f73e8bf8d4d957469e367fc35a11ac8925ed3c_prof);

        
        $__internal_51245850d17245e5b3fdcde4d21ec832ee48c2c9870495b0e0c357d7a2e835b6->leave($__internal_51245850d17245e5b3fdcde4d21ec832ee48c2c9870495b0e0c357d7a2e835b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
