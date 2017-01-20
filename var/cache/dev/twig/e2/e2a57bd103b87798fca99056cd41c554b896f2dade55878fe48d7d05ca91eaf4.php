<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_b5199c97b17958c87e5849af707219510a9234343a67724600fd2b1a411e0642 extends Twig_Template
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
        $__internal_7209e88ba0a61cc39efea38ceab41ec37b77d558fb0294a2b5dc7269e1e4f521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7209e88ba0a61cc39efea38ceab41ec37b77d558fb0294a2b5dc7269e1e4f521->enter($__internal_7209e88ba0a61cc39efea38ceab41ec37b77d558fb0294a2b5dc7269e1e4f521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_f7b05ebe3d274d8fbde13123ec97f66dfd05bd9071bf4bd94da193f55e1c2196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b05ebe3d274d8fbde13123ec97f66dfd05bd9071bf4bd94da193f55e1c2196->enter($__internal_f7b05ebe3d274d8fbde13123ec97f66dfd05bd9071bf4bd94da193f55e1c2196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_7209e88ba0a61cc39efea38ceab41ec37b77d558fb0294a2b5dc7269e1e4f521->leave($__internal_7209e88ba0a61cc39efea38ceab41ec37b77d558fb0294a2b5dc7269e1e4f521_prof);

        
        $__internal_f7b05ebe3d274d8fbde13123ec97f66dfd05bd9071bf4bd94da193f55e1c2196->leave($__internal_f7b05ebe3d274d8fbde13123ec97f66dfd05bd9071bf4bd94da193f55e1c2196_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
