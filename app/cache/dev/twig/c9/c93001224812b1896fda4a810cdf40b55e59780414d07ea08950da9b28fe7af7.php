<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9464c232c67d9c28a314f1d03d56f911ce5d55c2c6b869d0666c3c735cd9e139 extends Twig_Template
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
        $__internal_828a05d252745142b3c137b697d5e8fcf88b8132cddee88cdc70dfdddb8274b0 = $this->env->getExtension("native_profiler");
        $__internal_828a05d252745142b3c137b697d5e8fcf88b8132cddee88cdc70dfdddb8274b0->enter($__internal_828a05d252745142b3c137b697d5e8fcf88b8132cddee88cdc70dfdddb8274b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_828a05d252745142b3c137b697d5e8fcf88b8132cddee88cdc70dfdddb8274b0->leave($__internal_828a05d252745142b3c137b697d5e8fcf88b8132cddee88cdc70dfdddb8274b0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2c8552977f76dab8a9dee49be1d00f7fa50d471dcb46c82d95e3727f473aa064 = $this->env->getExtension("native_profiler");
        $__internal_2c8552977f76dab8a9dee49be1d00f7fa50d471dcb46c82d95e3727f473aa064->enter($__internal_2c8552977f76dab8a9dee49be1d00f7fa50d471dcb46c82d95e3727f473aa064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2c8552977f76dab8a9dee49be1d00f7fa50d471dcb46c82d95e3727f473aa064->leave($__internal_2c8552977f76dab8a9dee49be1d00f7fa50d471dcb46c82d95e3727f473aa064_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c3f1e03bae3e23b67b54e4135f1935d77e2ee6b6dd91cec376a4ae423248db86 = $this->env->getExtension("native_profiler");
        $__internal_c3f1e03bae3e23b67b54e4135f1935d77e2ee6b6dd91cec376a4ae423248db86->enter($__internal_c3f1e03bae3e23b67b54e4135f1935d77e2ee6b6dd91cec376a4ae423248db86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c3f1e03bae3e23b67b54e4135f1935d77e2ee6b6dd91cec376a4ae423248db86->leave($__internal_c3f1e03bae3e23b67b54e4135f1935d77e2ee6b6dd91cec376a4ae423248db86_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d02b3e11c02960a087d7f32878a0addb3270acbc368bce7c36ebce381a33b23f = $this->env->getExtension("native_profiler");
        $__internal_d02b3e11c02960a087d7f32878a0addb3270acbc368bce7c36ebce381a33b23f->enter($__internal_d02b3e11c02960a087d7f32878a0addb3270acbc368bce7c36ebce381a33b23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d02b3e11c02960a087d7f32878a0addb3270acbc368bce7c36ebce381a33b23f->leave($__internal_d02b3e11c02960a087d7f32878a0addb3270acbc368bce7c36ebce381a33b23f_prof);

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
