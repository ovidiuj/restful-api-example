<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_48a9fb388dc0766d884c9606f4b4cc46b7a959692cb4fc2a88e9557df80e099b extends Twig_Template
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
        $__internal_a9bfb0f8f3c3aa58d42c032fd4d9f97f6bae198f459a50ee0925a73a1eaa8170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9bfb0f8f3c3aa58d42c032fd4d9f97f6bae198f459a50ee0925a73a1eaa8170->enter($__internal_a9bfb0f8f3c3aa58d42c032fd4d9f97f6bae198f459a50ee0925a73a1eaa8170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_7c0210db192e0c2cbf69be83ad9be10f0d2f77ad1c02bac5f5183301a5299a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0210db192e0c2cbf69be83ad9be10f0d2f77ad1c02bac5f5183301a5299a28->enter($__internal_7c0210db192e0c2cbf69be83ad9be10f0d2f77ad1c02bac5f5183301a5299a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a9bfb0f8f3c3aa58d42c032fd4d9f97f6bae198f459a50ee0925a73a1eaa8170->leave($__internal_a9bfb0f8f3c3aa58d42c032fd4d9f97f6bae198f459a50ee0925a73a1eaa8170_prof);

        
        $__internal_7c0210db192e0c2cbf69be83ad9be10f0d2f77ad1c02bac5f5183301a5299a28->leave($__internal_7c0210db192e0c2cbf69be83ad9be10f0d2f77ad1c02bac5f5183301a5299a28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
