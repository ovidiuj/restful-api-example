<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_c6f06d42be8bf90389e58359ef7b6d90c87b52f4126969fecd20e7ec7bc4287d extends Twig_Template
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
        $__internal_4ba1eaf5072eb0678d9f0d0adeb2ad7f4b124ec26be276878678c34cceeaf19a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba1eaf5072eb0678d9f0d0adeb2ad7f4b124ec26be276878678c34cceeaf19a->enter($__internal_4ba1eaf5072eb0678d9f0d0adeb2ad7f4b124ec26be276878678c34cceeaf19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_f7e24cb254731b058d596d7dbebfca8049bb72ad02b1d1d55a0896744c40afb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e24cb254731b058d596d7dbebfca8049bb72ad02b1d1d55a0896744c40afb7->enter($__internal_f7e24cb254731b058d596d7dbebfca8049bb72ad02b1d1d55a0896744c40afb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4ba1eaf5072eb0678d9f0d0adeb2ad7f4b124ec26be276878678c34cceeaf19a->leave($__internal_4ba1eaf5072eb0678d9f0d0adeb2ad7f4b124ec26be276878678c34cceeaf19a_prof);

        
        $__internal_f7e24cb254731b058d596d7dbebfca8049bb72ad02b1d1d55a0896744c40afb7->leave($__internal_f7e24cb254731b058d596d7dbebfca8049bb72ad02b1d1d55a0896744c40afb7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
