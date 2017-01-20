<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_0bf77a47730e02fcf23c94ec7e89c784ea00fe6ec14f2c3a6da988c62afea9a4 extends Twig_Template
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
        $__internal_503d745c606ea56322154c59f8c07436c31ca5a80431346a6524af1ceef5ef0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_503d745c606ea56322154c59f8c07436c31ca5a80431346a6524af1ceef5ef0f->enter($__internal_503d745c606ea56322154c59f8c07436c31ca5a80431346a6524af1ceef5ef0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_b79a4117ac76a29cf069265a0f3375be7c52572b3dd25dc641a35db839d68340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79a4117ac76a29cf069265a0f3375be7c52572b3dd25dc641a35db839d68340->enter($__internal_b79a4117ac76a29cf069265a0f3375be7c52572b3dd25dc641a35db839d68340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_503d745c606ea56322154c59f8c07436c31ca5a80431346a6524af1ceef5ef0f->leave($__internal_503d745c606ea56322154c59f8c07436c31ca5a80431346a6524af1ceef5ef0f_prof);

        
        $__internal_b79a4117ac76a29cf069265a0f3375be7c52572b3dd25dc641a35db839d68340->leave($__internal_b79a4117ac76a29cf069265a0f3375be7c52572b3dd25dc641a35db839d68340_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
