<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3244141f5ee276c7ab37dbfa1c9e0aa3f67eba8e283bd59c9d17585ecc12785d extends Twig_Template
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
        $__internal_9238746ad03ed601291588cb7e57efd3f2136197361785ee8350aa5bed1a8e97 = $this->env->getExtension("native_profiler");
        $__internal_9238746ad03ed601291588cb7e57efd3f2136197361785ee8350aa5bed1a8e97->enter($__internal_9238746ad03ed601291588cb7e57efd3f2136197361785ee8350aa5bed1a8e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9238746ad03ed601291588cb7e57efd3f2136197361785ee8350aa5bed1a8e97->leave($__internal_9238746ad03ed601291588cb7e57efd3f2136197361785ee8350aa5bed1a8e97_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_08488914eb0621ea7b64bcf5d185de88ff9867255dcb7957404eb2838712e348 = $this->env->getExtension("native_profiler");
        $__internal_08488914eb0621ea7b64bcf5d185de88ff9867255dcb7957404eb2838712e348->enter($__internal_08488914eb0621ea7b64bcf5d185de88ff9867255dcb7957404eb2838712e348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_08488914eb0621ea7b64bcf5d185de88ff9867255dcb7957404eb2838712e348->leave($__internal_08488914eb0621ea7b64bcf5d185de88ff9867255dcb7957404eb2838712e348_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf817525ce3e4a6508f3135d2a7a0342bd17ebfec2e4b946ed5023fc5f6c6bd8 = $this->env->getExtension("native_profiler");
        $__internal_bf817525ce3e4a6508f3135d2a7a0342bd17ebfec2e4b946ed5023fc5f6c6bd8->enter($__internal_bf817525ce3e4a6508f3135d2a7a0342bd17ebfec2e4b946ed5023fc5f6c6bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bf817525ce3e4a6508f3135d2a7a0342bd17ebfec2e4b946ed5023fc5f6c6bd8->leave($__internal_bf817525ce3e4a6508f3135d2a7a0342bd17ebfec2e4b946ed5023fc5f6c6bd8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b685853c4635cca06591b4b58c9f8eae500f7c5c19a32d40a073968b0b5da85 = $this->env->getExtension("native_profiler");
        $__internal_8b685853c4635cca06591b4b58c9f8eae500f7c5c19a32d40a073968b0b5da85->enter($__internal_8b685853c4635cca06591b4b58c9f8eae500f7c5c19a32d40a073968b0b5da85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8b685853c4635cca06591b4b58c9f8eae500f7c5c19a32d40a073968b0b5da85->leave($__internal_8b685853c4635cca06591b4b58c9f8eae500f7c5c19a32d40a073968b0b5da85_prof);

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
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
