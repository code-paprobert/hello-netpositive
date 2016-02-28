<?php

/* HWIOAuthBundle:Connect:connect_confirm.html.twig */
class __TwigTemplate_c9824cdcc5614516dafe43fd5dada815622db0ec3cbc2909ed8ea6ac0a45cfef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FacebookBundle/Resources/views/layout.html.twig", "HWIOAuthBundle:Connect:connect_confirm.html.twig", 1);
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
        $__internal_70a9178a1f27d1a872e261c66179cbd592880728920b920c39b4628660fd81f1 = $this->env->getExtension("native_profiler");
        $__internal_70a9178a1f27d1a872e261c66179cbd592880728920b920c39b4628660fd81f1->enter($__internal_70a9178a1f27d1a872e261c66179cbd592880728920b920c39b4628660fd81f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_confirm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70a9178a1f27d1a872e261c66179cbd592880728920b920c39b4628660fd81f1->leave($__internal_70a9178a1f27d1a872e261c66179cbd592880728920b920c39b4628660fd81f1_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_4cd9a0f3e35601ffb6e45185d8a81c8ed92ffa82af173ec0768a3d7afd5eacb0 = $this->env->getExtension("native_profiler");
        $__internal_4cd9a0f3e35601ffb6e45185d8a81c8ed92ffa82af173ec0768a3d7afd5eacb0->enter($__internal_4cd9a0f3e35601ffb6e45185d8a81c8ed92ffa82af173ec0768a3d7afd5eacb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"/bundles/user/index2.html\">NET<b>POSITIVE</b></a>
        </div><!-- /.login-logo -->
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Sign in with your Facebook account</p>

            <form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hwi_oauth_connect_service", array("service" => (isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "key" => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
                <div class=\"form-group has-feedback\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Username or Email\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "email", array()), "html", null, true);
        echo "\">
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                </div>
                <div class=\"form-group has-feedback\">
                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"_password\" >
                    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-8\">
                        <div class=\"checkbox icheck\">
                            <label>
                                <input type=\"checkbox\"> Remember Me
                            </label>
                        </div>
                    </div><!-- /.col -->
                    <div class=\"col-xs-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign In</button>
                    </div><!-- /.col -->
                </div>
            </form>

            <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" class=\"text-center\">I already have a membership</a>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"text-center\">Register a new membership</a>

        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src=\"/bundles/user/plugins/jQuery/jQuery-2.1.4.min.js\"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src=\"/bundles/user/bootstrap/js/bootstrap.min.js\"></script>
    <!-- iCheck -->
    <script src=\"/bundles/user/plugins/iCheck/icheck.min.js\"></script>
    <script>
        \$(function () {
            \$('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>

";
        
        $__internal_4cd9a0f3e35601ffb6e45185d8a81c8ed92ffa82af173ec0768a3d7afd5eacb0->leave($__internal_4cd9a0f3e35601ffb6e45185d8a81c8ed92ffa82af173ec0768a3d7afd5eacb0_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:connect_confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 36,  81 => 35,  57 => 14,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@FacebookBundle/Resources/views/layout.html.twig" %}*/
/* */
/* {% block hwi_oauth_content %}*/
/* */
/*     <div class="login-box">*/
/*         <div class="login-logo">*/
/*             <a href="/bundles/user/index2.html">NET<b>POSITIVE</b></a>*/
/*         </div><!-- /.login-logo -->*/
/*         <div class="login-box-body">*/
/*             <p class="login-box-msg">Sign in with your Facebook account</p>*/
/* */
/*             <form action="{{ path('hwi_oauth_connect_service', {'service': service, 'key': key}) }}" {{ form_enctype(form) }} method="POST">*/
/*                 <div class="form-group has-feedback">*/
/*                     <input type="text" class="form-control" placeholder="Username or Email" name="_username" value="{{ userInformation.email }}">*/
/*                     <span class="glyphicon glyphicon-envelope form-control-feedback"></span>*/
/*                 </div>*/
/*                 <div class="form-group has-feedback">*/
/*                     <input type="password" class="form-control" placeholder="Password" name="_password" >*/
/*                     <span class="glyphicon glyphicon-lock form-control-feedback"></span>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-xs-8">*/
/*                         <div class="checkbox icheck">*/
/*                             <label>*/
/*                                 <input type="checkbox"> Remember Me*/
/*                             </label>*/
/*                         </div>*/
/*                     </div><!-- /.col -->*/
/*                     <div class="col-xs-4">*/
/*                         <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>*/
/*                     </div><!-- /.col -->*/
/*                 </div>*/
/*             </form>*/
/* */
/*             <a href="{{ path('fos_user_security_login') }}" class="text-center">I already have a membership</a>*/
/*             <a href="{{ path('fos_user_registration_register') }}" class="text-center">Register a new membership</a>*/
/* */
/*         </div><!-- /.login-box-body -->*/
/*     </div><!-- /.login-box -->*/
/* */
/*     <!-- jQuery 2.1.4 -->*/
/*     <script src="/bundles/user/plugins/jQuery/jQuery-2.1.4.min.js"></script>*/
/*     <!-- Bootstrap 3.3.5 -->*/
/*     <script src="/bundles/user/bootstrap/js/bootstrap.min.js"></script>*/
/*     <!-- iCheck -->*/
/*     <script src="/bundles/user/plugins/iCheck/icheck.min.js"></script>*/
/*     <script>*/
/*         $(function () {*/
/*             $('input').iCheck({*/
/*                 checkboxClass: 'icheckbox_square-blue',*/
/*                 radioClass: 'iradio_square-blue',*/
/*                 increaseArea: '20%' // optional*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
/* {% endblock hwi_oauth_content %}*/
/* */
