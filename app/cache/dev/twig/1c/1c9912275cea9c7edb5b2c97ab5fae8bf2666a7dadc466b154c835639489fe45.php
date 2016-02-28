<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_ac77a1c151902ec7b78e75cc882cc21c10c9d604425be750b2ab6ea33db964df extends Twig_Template
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
        $__internal_42d94403f07ff6a4e29f7a9ecc72cf08f159dfc720be138f089e070e8afc7f98 = $this->env->getExtension("native_profiler");
        $__internal_42d94403f07ff6a4e29f7a9ecc72cf08f159dfc720be138f089e070e8afc7f98->enter($__internal_42d94403f07ff6a4e29f7a9ecc72cf08f159dfc720be138f089e070e8afc7f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "
<div class=\"login-box\">
    <div class=\"login-logo\">
        <a href=\"/\">NET<b>POSITIVE</b></a>
    </div><!-- /.login-logo -->
    <div class=\"login-box-body\">
        <p class=\"login-box-msg\">Now you are signed in ";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "fullName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "fullName", array()), $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()))) : ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()))), "html", null, true);
        echo "</p>
        <p class=\"login-box-msg\">
            <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"text-center\">Sign out</a>
        </p>
    </div>
</div>
";
        
        $__internal_42d94403f07ff6a4e29f7a9ecc72cf08f159dfc720be138f089e070e8afc7f98->leave($__internal_42d94403f07ff6a4e29f7a9ecc72cf08f159dfc720be138f089e070e8afc7f98_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  30 => 7,  22 => 1,);
    }
}
/* */
/* <div class="login-box">*/
/*     <div class="login-logo">*/
/*         <a href="/">NET<b>POSITIVE</b></a>*/
/*     </div><!-- /.login-logo -->*/
/*     <div class="login-box-body">*/
/*         <p class="login-box-msg">Now you are signed in {{ user.fullName|default(user.email) }}</p>*/
/*         <p class="login-box-msg">*/
/*             <a href="{{ path('fos_user_security_logout') }}" class="text-center">Sign out</a>*/
/*         </p>*/
/*     </div>*/
/* </div>*/
/* */
