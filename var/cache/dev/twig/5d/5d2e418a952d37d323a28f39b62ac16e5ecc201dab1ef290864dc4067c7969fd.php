<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9116525a8d4c495c0062922c876a25e4328d724484e9ce41a07ec780ea256e4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89e4e7fdf264d9e1e0333e416cc02ef8a52f1c961925eb512025a35284535229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e4e7fdf264d9e1e0333e416cc02ef8a52f1c961925eb512025a35284535229->enter($__internal_89e4e7fdf264d9e1e0333e416cc02ef8a52f1c961925eb512025a35284535229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89e4e7fdf264d9e1e0333e416cc02ef8a52f1c961925eb512025a35284535229->leave($__internal_89e4e7fdf264d9e1e0333e416cc02ef8a52f1c961925eb512025a35284535229_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_58f51434da36fd479e099a3b3ff7288ec4daa5552e221c5450c17fc24403c909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f51434da36fd479e099a3b3ff7288ec4daa5552e221c5450c17fc24403c909->enter($__internal_58f51434da36fd479e099a3b3ff7288ec4daa5552e221c5450c17fc24403c909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_58f51434da36fd479e099a3b3ff7288ec4daa5552e221c5450c17fc24403c909->leave($__internal_58f51434da36fd479e099a3b3ff7288ec4daa5552e221c5450c17fc24403c909_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_476022894df072f30549ee0eb355ec058e4aea1e1ca30984ed5d3cff1a49b1ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476022894df072f30549ee0eb355ec058e4aea1e1ca30984ed5d3cff1a49b1ff->enter($__internal_476022894df072f30549ee0eb355ec058e4aea1e1ca30984ed5d3cff1a49b1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_476022894df072f30549ee0eb355ec058e4aea1e1ca30984ed5d3cff1a49b1ff->leave($__internal_476022894df072f30549ee0eb355ec058e4aea1e1ca30984ed5d3cff1a49b1ff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_06ecb4c3dd82dafdeb245e9d9e6931849d71c6903e99c02272b6d8c009da5c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ecb4c3dd82dafdeb245e9d9e6931849d71c6903e99c02272b6d8c009da5c8e->enter($__internal_06ecb4c3dd82dafdeb245e9d9e6931849d71c6903e99c02272b6d8c009da5c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_06ecb4c3dd82dafdeb245e9d9e6931849d71c6903e99c02272b6d8c009da5c8e->leave($__internal_06ecb4c3dd82dafdeb245e9d9e6931849d71c6903e99c02272b6d8c009da5c8e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\ProjetSymfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
