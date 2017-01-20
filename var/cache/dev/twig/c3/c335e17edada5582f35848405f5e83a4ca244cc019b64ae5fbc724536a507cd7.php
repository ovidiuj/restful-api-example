<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9c854dee4c01cfc49af56dcdb13b73fdc20856c51455b844d0c3a16eefcc6a8e extends Twig_Template
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
        $__internal_4cd59bc2c94b5b943bab4ffaaac603df90b1314ff14f5b85f0e7a6f0c5626a84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cd59bc2c94b5b943bab4ffaaac603df90b1314ff14f5b85f0e7a6f0c5626a84->enter($__internal_4cd59bc2c94b5b943bab4ffaaac603df90b1314ff14f5b85f0e7a6f0c5626a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_52e939e9ebb18e7a40128324149edd2ba7a81483e38c6e2664dc2e8b439d5a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e939e9ebb18e7a40128324149edd2ba7a81483e38c6e2664dc2e8b439d5a2a->enter($__internal_52e939e9ebb18e7a40128324149edd2ba7a81483e38c6e2664dc2e8b439d5a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4cd59bc2c94b5b943bab4ffaaac603df90b1314ff14f5b85f0e7a6f0c5626a84->leave($__internal_4cd59bc2c94b5b943bab4ffaaac603df90b1314ff14f5b85f0e7a6f0c5626a84_prof);

        
        $__internal_52e939e9ebb18e7a40128324149edd2ba7a81483e38c6e2664dc2e8b439d5a2a->leave($__internal_52e939e9ebb18e7a40128324149edd2ba7a81483e38c6e2664dc2e8b439d5a2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
