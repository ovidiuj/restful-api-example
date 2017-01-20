<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_fea3a793720e7e3ca582497db3bcbbd044a3fdefbfd6759e0bc06bfffe26ad1b extends Twig_Template
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
        $__internal_45e06cd5a146efd7b9eafe1ced2b11de249e4af4ca291b780981f8952787988a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e06cd5a146efd7b9eafe1ced2b11de249e4af4ca291b780981f8952787988a->enter($__internal_45e06cd5a146efd7b9eafe1ced2b11de249e4af4ca291b780981f8952787988a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_215db4c35e21e4f8a7c34489e912129c96c06b6df25ac3db01766fed431a450a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_215db4c35e21e4f8a7c34489e912129c96c06b6df25ac3db01766fed431a450a->enter($__internal_215db4c35e21e4f8a7c34489e912129c96c06b6df25ac3db01766fed431a450a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_45e06cd5a146efd7b9eafe1ced2b11de249e4af4ca291b780981f8952787988a->leave($__internal_45e06cd5a146efd7b9eafe1ced2b11de249e4af4ca291b780981f8952787988a_prof);

        
        $__internal_215db4c35e21e4f8a7c34489e912129c96c06b6df25ac3db01766fed431a450a->leave($__internal_215db4c35e21e4f8a7c34489e912129c96c06b6df25ac3db01766fed431a450a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
