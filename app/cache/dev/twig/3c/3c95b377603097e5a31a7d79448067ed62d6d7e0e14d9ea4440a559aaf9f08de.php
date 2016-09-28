<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_64220faf6605a1e32954ec1f02522d4b7a5f6e039d2a268b9605ff9c28dbf478 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93822f3f7f975770380fd37b03d062ae26fb5ec61f8c7f0073e11e48427b1dbc = $this->env->getExtension("native_profiler");
        $__internal_93822f3f7f975770380fd37b03d062ae26fb5ec61f8c7f0073e11e48427b1dbc->enter($__internal_93822f3f7f975770380fd37b03d062ae26fb5ec61f8c7f0073e11e48427b1dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93822f3f7f975770380fd37b03d062ae26fb5ec61f8c7f0073e11e48427b1dbc->leave($__internal_93822f3f7f975770380fd37b03d062ae26fb5ec61f8c7f0073e11e48427b1dbc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_970de87ee0a9d45b864efd9b6fe84b38fd0e6d8b715ae1f4424dbbb2787f8bbe = $this->env->getExtension("native_profiler");
        $__internal_970de87ee0a9d45b864efd9b6fe84b38fd0e6d8b715ae1f4424dbbb2787f8bbe->enter($__internal_970de87ee0a9d45b864efd9b6fe84b38fd0e6d8b715ae1f4424dbbb2787f8bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_970de87ee0a9d45b864efd9b6fe84b38fd0e6d8b715ae1f4424dbbb2787f8bbe->leave($__internal_970de87ee0a9d45b864efd9b6fe84b38fd0e6d8b715ae1f4424dbbb2787f8bbe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9b540a038105cceb2badc4a6ac48734c01c3049ee8133ae68ba5f102b8dd592 = $this->env->getExtension("native_profiler");
        $__internal_f9b540a038105cceb2badc4a6ac48734c01c3049ee8133ae68ba5f102b8dd592->enter($__internal_f9b540a038105cceb2badc4a6ac48734c01c3049ee8133ae68ba5f102b8dd592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f9b540a038105cceb2badc4a6ac48734c01c3049ee8133ae68ba5f102b8dd592->leave($__internal_f9b540a038105cceb2badc4a6ac48734c01c3049ee8133ae68ba5f102b8dd592_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0abc4d446a5fc026b0fddb097918c5ae6fcaeb883a6361c2199287dab452a097 = $this->env->getExtension("native_profiler");
        $__internal_0abc4d446a5fc026b0fddb097918c5ae6fcaeb883a6361c2199287dab452a097->enter($__internal_0abc4d446a5fc026b0fddb097918c5ae6fcaeb883a6361c2199287dab452a097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0abc4d446a5fc026b0fddb097918c5ae6fcaeb883a6361c2199287dab452a097->leave($__internal_0abc4d446a5fc026b0fddb097918c5ae6fcaeb883a6361c2199287dab452a097_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
