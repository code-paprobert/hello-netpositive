<?php

/* @FacebookBundle/Resources/views/layout.html.twig */
class __TwigTemplate_09acf018fa57767f17d28004a52005c4728eef062602e7d3e64ffa2fae51a55e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FacebookBundle/Resources/views/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c754174f0788550f04717e3a30c9f0ff9e11b1ebc57fc5e27cc9c580ef8f3ff1 = $this->env->getExtension("native_profiler");
        $__internal_c754174f0788550f04717e3a30c9f0ff9e11b1ebc57fc5e27cc9c580ef8f3ff1->enter($__internal_c754174f0788550f04717e3a30c9f0ff9e11b1ebc57fc5e27cc9c580ef8f3ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FacebookBundle/Resources/views/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c754174f0788550f04717e3a30c9f0ff9e11b1ebc57fc5e27cc9c580ef8f3ff1->leave($__internal_c754174f0788550f04717e3a30c9f0ff9e11b1ebc57fc5e27cc9c580ef8f3ff1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_064f2b0271d322d094dae801102229b51debd75c1a55fe3389da36380a09c16e = $this->env->getExtension("native_profiler");
        $__internal_064f2b0271d322d094dae801102229b51debd75c1a55fe3389da36380a09c16e->enter($__internal_064f2b0271d322d094dae801102229b51debd75c1a55fe3389da36380a09c16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('hwi_oauth_content', $context, $blocks);
        // line 7
        echo "
";
        
        $__internal_064f2b0271d322d094dae801102229b51debd75c1a55fe3389da36380a09c16e->leave($__internal_064f2b0271d322d094dae801102229b51debd75c1a55fe3389da36380a09c16e_prof);

    }

    // line 5
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_2da4f1b2e3b6d1bf20a4acff4b134632493c12c93fe7f9e4f055f36bf02569b4 = $this->env->getExtension("native_profiler");
        $__internal_2da4f1b2e3b6d1bf20a4acff4b134632493c12c93fe7f9e4f055f36bf02569b4->enter($__internal_2da4f1b2e3b6d1bf20a4acff4b134632493c12c93fe7f9e4f055f36bf02569b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 6
        echo "    ";
        
        $__internal_2da4f1b2e3b6d1bf20a4acff4b134632493c12c93fe7f9e4f055f36bf02569b4->leave($__internal_2da4f1b2e3b6d1bf20a4acff4b134632493c12c93fe7f9e4f055f36bf02569b4_prof);

    }

    public function getTemplateName()
    {
        return "@FacebookBundle/Resources/views/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  54 => 5,  46 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     {% block hwi_oauth_content %}*/
/*     {% endblock hwi_oauth_content %}*/
/* */
/* {% endblock %}*/
/* */
