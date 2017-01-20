<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_3bad7450074ba7743855011c96717adf4a3b177996b5c74cc2aa439f6c0a2c28 extends Twig_Template
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
        $__internal_9b34a34ccb110925bda8112be92e5f7945654bb16e4c8af1719223fc32ce51c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b34a34ccb110925bda8112be92e5f7945654bb16e4c8af1719223fc32ce51c6->enter($__internal_9b34a34ccb110925bda8112be92e5f7945654bb16e4c8af1719223fc32ce51c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_66aea66d29b9202d4d4e8f4acd0d9f22141f4932242c123038ec0596535e810a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66aea66d29b9202d4d4e8f4acd0d9f22141f4932242c123038ec0596535e810a->enter($__internal_66aea66d29b9202d4d4e8f4acd0d9f22141f4932242c123038ec0596535e810a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_9b34a34ccb110925bda8112be92e5f7945654bb16e4c8af1719223fc32ce51c6->leave($__internal_9b34a34ccb110925bda8112be92e5f7945654bb16e4c8af1719223fc32ce51c6_prof);

        
        $__internal_66aea66d29b9202d4d4e8f4acd0d9f22141f4932242c123038ec0596535e810a->leave($__internal_66aea66d29b9202d4d4e8f4acd0d9f22141f4932242c123038ec0596535e810a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
