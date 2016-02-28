<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_c96caf96d4cbdfa31afd36c2d9e4b7a1a3e33a9b1adce9918316e860aa8832df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@UserBundle/Resources/views/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@UserBundle/Resources/views/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbe3c33d8b12f7afb45502f5a635a9a4c86f02be8bd5990e7542b175fa3433c2 = $this->env->getExtension("native_profiler");
        $__internal_cbe3c33d8b12f7afb45502f5a635a9a4c86f02be8bd5990e7542b175fa3433c2->enter($__internal_cbe3c33d8b12f7afb45502f5a635a9a4c86f02be8bd5990e7542b175fa3433c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbe3c33d8b12f7afb45502f5a635a9a4c86f02be8bd5990e7542b175fa3433c2->leave($__internal_cbe3c33d8b12f7afb45502f5a635a9a4c86f02be8bd5990e7542b175fa3433c2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_20723ac33623b1ce695a01d5a4ff6751ad3326038a7ed12e5887a1ba66e6323a = $this->env->getExtension("native_profiler");
        $__internal_20723ac33623b1ce695a01d5a4ff6751ad3326038a7ed12e5887a1ba66e6323a->enter($__internal_20723ac33623b1ce695a01d5a4ff6751ad3326038a7ed12e5887a1ba66e6323a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NETPOSITIVE | Registration";
        
        $__internal_20723ac33623b1ce695a01d5a4ff6751ad3326038a7ed12e5887a1ba66e6323a->leave($__internal_20723ac33623b1ce695a01d5a4ff6751ad3326038a7ed12e5887a1ba66e6323a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05d48d122fe78f465b5458863a2711dd08da933600266ae668a0f6195b52340f = $this->env->getExtension("native_profiler");
        $__internal_05d48d122fe78f465b5458863a2711dd08da933600266ae668a0f6195b52340f->enter($__internal_05d48d122fe78f465b5458863a2711dd08da933600266ae668a0f6195b52340f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 6)->display($context);
        
        $__internal_05d48d122fe78f465b5458863a2711dd08da933600266ae668a0f6195b52340f->leave($__internal_05d48d122fe78f465b5458863a2711dd08da933600266ae668a0f6195b52340f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "@UserBundle/Resources/views/layout.html.twig" %}*/
/* */
/* {% block title %}NETPOSITIVE | Registration{% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
