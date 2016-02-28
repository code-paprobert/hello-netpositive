<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_27945a12e876d0dc03ad436b23c2469cc375eb52d842e7149c92a19261d54f45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@UserBundle/Resources/views/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_class' => array($this, 'block_body_class'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@UserBundle/Resources/views/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44119ae96438bc119675fde5687c28fb48201998ca448bf001754a1ad15cb45b = $this->env->getExtension("native_profiler");
        $__internal_44119ae96438bc119675fde5687c28fb48201998ca448bf001754a1ad15cb45b->enter($__internal_44119ae96438bc119675fde5687c28fb48201998ca448bf001754a1ad15cb45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44119ae96438bc119675fde5687c28fb48201998ca448bf001754a1ad15cb45b->leave($__internal_44119ae96438bc119675fde5687c28fb48201998ca448bf001754a1ad15cb45b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_137bfc0d70f0cc2c20b5423c39701db0b5005aee60329977dd72df94f9d7d449 = $this->env->getExtension("native_profiler");
        $__internal_137bfc0d70f0cc2c20b5423c39701db0b5005aee60329977dd72df94f9d7d449->enter($__internal_137bfc0d70f0cc2c20b5423c39701db0b5005aee60329977dd72df94f9d7d449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NETPOSITIVE | Profile";
        
        $__internal_137bfc0d70f0cc2c20b5423c39701db0b5005aee60329977dd72df94f9d7d449->leave($__internal_137bfc0d70f0cc2c20b5423c39701db0b5005aee60329977dd72df94f9d7d449_prof);

    }

    // line 5
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_a94354009a26d1ace0228390d5c3c6668d371b0c5878ae63da1cdd975025eb48 = $this->env->getExtension("native_profiler");
        $__internal_a94354009a26d1ace0228390d5c3c6668d371b0c5878ae63da1cdd975025eb48->enter($__internal_a94354009a26d1ace0228390d5c3c6668d371b0c5878ae63da1cdd975025eb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "login-page";
        
        $__internal_a94354009a26d1ace0228390d5c3c6668d371b0c5878ae63da1cdd975025eb48->leave($__internal_a94354009a26d1ace0228390d5c3c6668d371b0c5878ae63da1cdd975025eb48_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1ae25a967393fefa3984bafb82efac440271790dddef689c7bb21dfe70696b4 = $this->env->getExtension("native_profiler");
        $__internal_c1ae25a967393fefa3984bafb82efac440271790dddef689c7bb21dfe70696b4->enter($__internal_c1ae25a967393fefa3984bafb82efac440271790dddef689c7bb21dfe70696b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 8)->display($context);
        
        $__internal_c1ae25a967393fefa3984bafb82efac440271790dddef689c7bb21dfe70696b4->leave($__internal_c1ae25a967393fefa3984bafb82efac440271790dddef689c7bb21dfe70696b4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "@UserBundle/Resources/views/layout.html.twig" %}*/
/* */
/* {% block title %}NETPOSITIVE | Profile{% endblock %}*/
/* */
/* {% block body_class %}login-page{% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
/* */
/* */
