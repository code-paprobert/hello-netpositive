<?php

/* HWIOAuthBundle:Connect:login.html.twig */
class __TwigTemplate_c746db33e0fa60e3a3071da3d9216c1f2325afce6d6a0860fc970b66f5012439 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FacebookBundle/Resources/views/layout.html.twig", "HWIOAuthBundle:Connect:login.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FacebookBundle/Resources/views/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d29a03817ab1e195bbec687ced8ac199781602fba4fb0eacf926edeaf983a1e = $this->env->getExtension("native_profiler");
        $__internal_2d29a03817ab1e195bbec687ced8ac199781602fba4fb0eacf926edeaf983a1e->enter($__internal_2d29a03817ab1e195bbec687ced8ac199781602fba4fb0eacf926edeaf983a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d29a03817ab1e195bbec687ced8ac199781602fba4fb0eacf926edeaf983a1e->leave($__internal_2d29a03817ab1e195bbec687ced8ac199781602fba4fb0eacf926edeaf983a1e_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_17aaaed8202bba06228e6ae08ee0ccd292d8da2bec8416ea5d23abc19d898a47 = $this->env->getExtension("native_profiler");
        $__internal_17aaaed8202bba06228e6ae08ee0ccd292d8da2bec8416ea5d23abc19d898a47->enter($__internal_17aaaed8202bba06228e6ae08ee0ccd292d8da2bec8416ea5d23abc19d898a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "        <span>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</span>
    ";
        }
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('hwi_oauth')->getResourceOwners());
        foreach ($context['_seq'] as $context["_key"] => $context["owner"]) {
            // line 8
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('hwi_oauth')->getLoginUrl($context["owner"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["owner"], array(), "HWIOAuthBundle"), "html", null, true);
            echo "</a> <br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['owner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_17aaaed8202bba06228e6ae08ee0ccd292d8da2bec8416ea5d23abc19d898a47->leave($__internal_17aaaed8202bba06228e6ae08ee0ccd292d8da2bec8416ea5d23abc19d898a47_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@FacebookBundle/Resources/views/layout.html.twig" %}*/
/* */
/* {% block hwi_oauth_content %}*/
/*     {% if error %}*/
/*         <span>{{ error }}</span>*/
/*     {% endif %}*/
/*     {% for owner in hwi_oauth_resource_owners() %}*/
/*     <a href="{{ hwi_oauth_login_url(owner) }}">{{ owner | trans({}, 'HWIOAuthBundle') }}</a> <br />*/
/*     {% endfor %}*/
/* {% endblock hwi_oauth_content %}*/
/* */
