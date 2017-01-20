<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_5c39970d0f62eebec53d6d8a047872f68deb9b53c68121b1736044beb2a3c477 extends Twig_Template
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
        $__internal_efc42df5f9f6f1b3ea731cf9fdb17451b8f7741346dcb702b7758d6a6c127354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc42df5f9f6f1b3ea731cf9fdb17451b8f7741346dcb702b7758d6a6c127354->enter($__internal_efc42df5f9f6f1b3ea731cf9fdb17451b8f7741346dcb702b7758d6a6c127354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_fe9ebfc03062dadfb186bf3177a71e41e2ea0b5091e5542603d1fb07bbfb857a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe9ebfc03062dadfb186bf3177a71e41e2ea0b5091e5542603d1fb07bbfb857a->enter($__internal_fe9ebfc03062dadfb186bf3177a71e41e2ea0b5091e5542603d1fb07bbfb857a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_efc42df5f9f6f1b3ea731cf9fdb17451b8f7741346dcb702b7758d6a6c127354->leave($__internal_efc42df5f9f6f1b3ea731cf9fdb17451b8f7741346dcb702b7758d6a6c127354_prof);

        
        $__internal_fe9ebfc03062dadfb186bf3177a71e41e2ea0b5091e5542603d1fb07bbfb857a->leave($__internal_fe9ebfc03062dadfb186bf3177a71e41e2ea0b5091e5542603d1fb07bbfb857a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
