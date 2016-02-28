<?php

/* @UserBundle/Resources/views/layout.html.twig */
class __TwigTemplate_9db8f8de0b8d7ca411ac002a57fa9adf6933e15a332379304676c7ca46e3ae29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@UserBundle/Resources/views/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81e2560d78872697f7eb63dcafb83bf749f6038d7256f2fa4432f988cb992f53 = $this->env->getExtension("native_profiler");
        $__internal_81e2560d78872697f7eb63dcafb83bf749f6038d7256f2fa4432f988cb992f53->enter($__internal_81e2560d78872697f7eb63dcafb83bf749f6038d7256f2fa4432f988cb992f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@UserBundle/Resources/views/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81e2560d78872697f7eb63dcafb83bf749f6038d7256f2fa4432f988cb992f53->leave($__internal_81e2560d78872697f7eb63dcafb83bf749f6038d7256f2fa4432f988cb992f53_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf494b8b5e6d1336cce5e474666a99ec0c7c806a7e60ad8673557232e7ac174f = $this->env->getExtension("native_profiler");
        $__internal_bf494b8b5e6d1336cce5e474666a99ec0c7c806a7e60ad8673557232e7ac174f->enter($__internal_bf494b8b5e6d1336cce5e474666a99ec0c7c806a7e60ad8673557232e7ac174f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    ";
        // line 6
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 7
        echo "
";
        
        $__internal_bf494b8b5e6d1336cce5e474666a99ec0c7c806a7e60ad8673557232e7ac174f->leave($__internal_bf494b8b5e6d1336cce5e474666a99ec0c7c806a7e60ad8673557232e7ac174f_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85d9b27ffd2f3bd3c1107c0a2e6fd03480a60b24dde87b490a8b187174e72458 = $this->env->getExtension("native_profiler");
        $__internal_85d9b27ffd2f3bd3c1107c0a2e6fd03480a60b24dde87b490a8b187174e72458->enter($__internal_85d9b27ffd2f3bd3c1107c0a2e6fd03480a60b24dde87b490a8b187174e72458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_85d9b27ffd2f3bd3c1107c0a2e6fd03480a60b24dde87b490a8b187174e72458->leave($__internal_85d9b27ffd2f3bd3c1107c0a2e6fd03480a60b24dde87b490a8b187174e72458_prof);

    }

    public function getTemplateName()
    {
        return "@UserBundle/Resources/views/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  46 => 7,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/* */
/*     {% block fos_user_content %}{% endblock %}*/
/* */
/* {% endblock %}*/
