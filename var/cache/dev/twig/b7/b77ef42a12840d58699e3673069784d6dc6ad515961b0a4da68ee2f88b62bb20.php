<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_93e6d97fe1779f5e1ad3aeb45ba946d842a23dff8c07c99deb961e708599fd1c extends Twig_Template
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
        $__internal_dae2d0ce6e597feffdd1175edbaac47db6bd05bc0d27d343b3946bdbc272665f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae2d0ce6e597feffdd1175edbaac47db6bd05bc0d27d343b3946bdbc272665f->enter($__internal_dae2d0ce6e597feffdd1175edbaac47db6bd05bc0d27d343b3946bdbc272665f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_b7838e89df595555974e2d23e6e081e24c32190b1de593808a62575d9ccdb63a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7838e89df595555974e2d23e6e081e24c32190b1de593808a62575d9ccdb63a->enter($__internal_b7838e89df595555974e2d23e6e081e24c32190b1de593808a62575d9ccdb63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_dae2d0ce6e597feffdd1175edbaac47db6bd05bc0d27d343b3946bdbc272665f->leave($__internal_dae2d0ce6e597feffdd1175edbaac47db6bd05bc0d27d343b3946bdbc272665f_prof);

        
        $__internal_b7838e89df595555974e2d23e6e081e24c32190b1de593808a62575d9ccdb63a->leave($__internal_b7838e89df595555974e2d23e6e081e24c32190b1de593808a62575d9ccdb63a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
