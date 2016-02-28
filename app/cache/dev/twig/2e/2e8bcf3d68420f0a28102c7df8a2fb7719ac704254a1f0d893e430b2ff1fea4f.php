<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_69806a476bcef98e89834a336dfefae70d79bc48523d09fc4772c36926048de3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@UserBundle/Resources/views/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_32e3516c4eb2df81508b031f6594f5f39ca6b48077ae76429c20e627300ce341 = $this->env->getExtension("native_profiler");
        $__internal_32e3516c4eb2df81508b031f6594f5f39ca6b48077ae76429c20e627300ce341->enter($__internal_32e3516c4eb2df81508b031f6594f5f39ca6b48077ae76429c20e627300ce341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32e3516c4eb2df81508b031f6594f5f39ca6b48077ae76429c20e627300ce341->leave($__internal_32e3516c4eb2df81508b031f6594f5f39ca6b48077ae76429c20e627300ce341_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_041cff9ff7f8f34494ffc4d3b70c3aea5cfc1966988c940b1da39fdc2c01fe3f = $this->env->getExtension("native_profiler");
        $__internal_041cff9ff7f8f34494ffc4d3b70c3aea5cfc1966988c940b1da39fdc2c01fe3f->enter($__internal_041cff9ff7f8f34494ffc4d3b70c3aea5cfc1966988c940b1da39fdc2c01fe3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NETPOSITIVE | Registration confirmed";
        
        $__internal_041cff9ff7f8f34494ffc4d3b70c3aea5cfc1966988c940b1da39fdc2c01fe3f->leave($__internal_041cff9ff7f8f34494ffc4d3b70c3aea5cfc1966988c940b1da39fdc2c01fe3f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff86d4e9743e1f1c94a80c21af0d199b95681157a30f924ed550af89dada68e9 = $this->env->getExtension("native_profiler");
        $__internal_ff86d4e9743e1f1c94a80c21af0d199b95681157a30f924ed550af89dada68e9->enter($__internal_ff86d4e9743e1f1c94a80c21af0d199b95681157a30f924ed550af89dada68e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"/\">NET<b>POSITIVE</b></a>
        </div><!-- /.login-logo -->
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Successfull registration</p>

            ";
        // line 14
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()))) {
            // line 15
            echo "                ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 16
            echo "                ";
            if ( !twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")))) {
                // line 17
                echo "                    <p class=\"login-box-msg\"><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\" class=\"text-center\">You can sign in now</a></p>
                ";
            } else {
                // line 19
                echo "                    <p class=\"login-box-msg\"><a href=\"";
                echo $this->env->getExtension('routing')->getPath("homepage");
                echo "\" class=\"text-center\">You can sign in now</a></p>
                ";
            }
            // line 21
            echo "

            ";
        }
        // line 24
        echo "        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

";
        
        $__internal_ff86d4e9743e1f1c94a80c21af0d199b95681157a30f924ed550af89dada68e9->leave($__internal_ff86d4e9743e1f1c94a80c21af0d199b95681157a30f924ed550af89dada68e9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  83 => 21,  77 => 19,  71 => 17,  68 => 16,  65 => 15,  63 => 14,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "@UserBundle/Resources/views/layout.html.twig" %}*/
/* */
/* {% block title %}NETPOSITIVE | Registration confirmed{% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/*     <div class="login-box">*/
/*         <div class="login-logo">*/
/*             <a href="/">NET<b>POSITIVE</b></a>*/
/*         </div><!-- /.login-logo -->*/
/*         <div class="login-box-body">*/
/*             <p class="login-box-msg">Successfull registration</p>*/
/* */
/*             {% if app.session is not empty %}*/
/*                 {% set targetUrl = app.session.get('_security.' ~ app.security.token.providerKey ~ '.target_path') %}*/
/*                 {% if targetUrl is not empty %}*/
/*                     <p class="login-box-msg"><a href="{{ targetUrl }}" class="text-center">You can sign in now</a></p>*/
/*                 {% else %}*/
/*                     <p class="login-box-msg"><a href="{{ path("homepage") }}" class="text-center">You can sign in now</a></p>*/
/*                 {% endif %}*/
/* */
/* */
/*             {% endif %}*/
/*         </div><!-- /.login-box-body -->*/
/*     </div><!-- /.login-box -->*/
/* */
/* {% endblock %}*/
/* */
/* */
