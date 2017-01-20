<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1a4e254d99350e31e2f1320a6b3258f61bc6876a0452cf5602c2a2eef09494fc extends Twig_Template
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
        $__internal_8abd4e687143c87dc568fe43087cd7405a24a49365d464ecba0ab09c34baa84b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8abd4e687143c87dc568fe43087cd7405a24a49365d464ecba0ab09c34baa84b->enter($__internal_8abd4e687143c87dc568fe43087cd7405a24a49365d464ecba0ab09c34baa84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_7f4a0afae1b32e7efa441d1595ff9f5c262c1ac33ce4ce4ab27a3c0656834c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f4a0afae1b32e7efa441d1595ff9f5c262c1ac33ce4ce4ab27a3c0656834c02->enter($__internal_7f4a0afae1b32e7efa441d1595ff9f5c262c1ac33ce4ce4ab27a3c0656834c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8abd4e687143c87dc568fe43087cd7405a24a49365d464ecba0ab09c34baa84b->leave($__internal_8abd4e687143c87dc568fe43087cd7405a24a49365d464ecba0ab09c34baa84b_prof);

        
        $__internal_7f4a0afae1b32e7efa441d1595ff9f5c262c1ac33ce4ce4ab27a3c0656834c02->leave($__internal_7f4a0afae1b32e7efa441d1595ff9f5c262c1ac33ce4ce4ab27a3c0656834c02_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
