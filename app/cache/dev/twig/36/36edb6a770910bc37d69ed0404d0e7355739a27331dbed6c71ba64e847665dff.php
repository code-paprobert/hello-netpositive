<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_267d8c87c62351780d30dbbb953b576b3708fc51f3a28412436505ab670fa1fb extends Twig_Template
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
        $__internal_00ca8e7603583c3d9823dda5ccb8d5c28178022b8f819dd4e011f75b8f83105a = $this->env->getExtension("native_profiler");
        $__internal_00ca8e7603583c3d9823dda5ccb8d5c28178022b8f819dd4e011f75b8f83105a->enter($__internal_00ca8e7603583c3d9823dda5ccb8d5c28178022b8f819dd4e011f75b8f83105a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00ca8e7603583c3d9823dda5ccb8d5c28178022b8f819dd4e011f75b8f83105a->leave($__internal_00ca8e7603583c3d9823dda5ccb8d5c28178022b8f819dd4e011f75b8f83105a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ffef5974636f694c5f6eec2c49338418fc9e40e287295bb9a1bb226c878b203f = $this->env->getExtension("native_profiler");
        $__internal_ffef5974636f694c5f6eec2c49338418fc9e40e287295bb9a1bb226c878b203f->enter($__internal_ffef5974636f694c5f6eec2c49338418fc9e40e287295bb9a1bb226c878b203f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ffef5974636f694c5f6eec2c49338418fc9e40e287295bb9a1bb226c878b203f->leave($__internal_ffef5974636f694c5f6eec2c49338418fc9e40e287295bb9a1bb226c878b203f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f60bea25367b492e651a060566f02dc6be886e6ef7bad1f924016e0a4367e637 = $this->env->getExtension("native_profiler");
        $__internal_f60bea25367b492e651a060566f02dc6be886e6ef7bad1f924016e0a4367e637->enter($__internal_f60bea25367b492e651a060566f02dc6be886e6ef7bad1f924016e0a4367e637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f60bea25367b492e651a060566f02dc6be886e6ef7bad1f924016e0a4367e637->leave($__internal_f60bea25367b492e651a060566f02dc6be886e6ef7bad1f924016e0a4367e637_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4edfd154d539c7a13aef000f66d2027eff232de603c74ee6e13ed996e64cf0af = $this->env->getExtension("native_profiler");
        $__internal_4edfd154d539c7a13aef000f66d2027eff232de603c74ee6e13ed996e64cf0af->enter($__internal_4edfd154d539c7a13aef000f66d2027eff232de603c74ee6e13ed996e64cf0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4edfd154d539c7a13aef000f66d2027eff232de603c74ee6e13ed996e64cf0af->leave($__internal_4edfd154d539c7a13aef000f66d2027eff232de603c74ee6e13ed996e64cf0af_prof);

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
