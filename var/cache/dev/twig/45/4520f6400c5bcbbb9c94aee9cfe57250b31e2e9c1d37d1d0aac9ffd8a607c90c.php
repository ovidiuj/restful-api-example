<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_c68e8f3556d491c6a7920c412510dd2829b44d6b0957808f7a1412d0e2a0a883 extends Twig_Template
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
        $__internal_7baa7985564ee0aa3a68a79b4a6be0ceaaac6f45f31a5d72ea546e1885ed7c0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7baa7985564ee0aa3a68a79b4a6be0ceaaac6f45f31a5d72ea546e1885ed7c0a->enter($__internal_7baa7985564ee0aa3a68a79b4a6be0ceaaac6f45f31a5d72ea546e1885ed7c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_1eab5993600a2f51c1c40f8f5e7d41362eb27618bb4a6f7b63fbfe316dad7133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eab5993600a2f51c1c40f8f5e7d41362eb27618bb4a6f7b63fbfe316dad7133->enter($__internal_1eab5993600a2f51c1c40f8f5e7d41362eb27618bb4a6f7b63fbfe316dad7133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7baa7985564ee0aa3a68a79b4a6be0ceaaac6f45f31a5d72ea546e1885ed7c0a->leave($__internal_7baa7985564ee0aa3a68a79b4a6be0ceaaac6f45f31a5d72ea546e1885ed7c0a_prof);

        
        $__internal_1eab5993600a2f51c1c40f8f5e7d41362eb27618bb4a6f7b63fbfe316dad7133->leave($__internal_1eab5993600a2f51c1c40f8f5e7d41362eb27618bb4a6f7b63fbfe316dad7133_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
