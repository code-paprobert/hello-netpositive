<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_6a0377496355a14829f18b41c6e4f3d3c41579c23790c326999d085844637960 extends Twig_Template
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
        $__internal_e490652f947e0164d1f8308e29283918e7b8947fda2eb4187758d96d70949b8e = $this->env->getExtension("native_profiler");
        $__internal_e490652f947e0164d1f8308e29283918e7b8947fda2eb4187758d96d70949b8e->enter($__internal_e490652f947e0164d1f8308e29283918e7b8947fda2eb4187758d96d70949b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 1
        echo "<div class=\"register-box\">
    <div class=\"register-logo\">
        <a href=\"/\">NET<b>POSITIVE</b></a>
    </div>

    <div class=\"register-box-body\">
        <p class=\"login-box-msg\">Register a new membership</p>
        <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

            <div class=\"form-group has-feedback\">
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("type" => "email", "attr" => array("placeholder" => "Email", "class" => "form-control")));
        // line 15
        echo "
                <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
            </div>

            <div class=\"form-group has-feedback\">
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "full_name", array()), 'widget', array("type" => "text", "attr" => array("placeholder" => "Full name (optional)", "class" => "form-control")));
        // line 24
        echo "
                <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "full_name", array()), 'errors');
        echo "
            </div>

            <div class=\"form-group has-feedback\">
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget', array("type" => "tel", "attr" => array("placeholder" => "Phone (optional)", "class" => "form-control")));
        // line 33
        echo "
                <span class=\"glyphicon glyphicon-phone form-control-feedback\"></span>
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'errors');
        echo "
            </div>

            <div class=\"form-group has-feedback\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("type" => "password", "attr" => array("placeholder" => "Password", "class" => "form-control")));
        // line 42
        echo "
                <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
            </div>

            <div class=\"form-group has-feedback\">
                <div class=\"form-group has-feedback\">
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("type" => "password", "attr" => array("placeholder" => "Retype password", "class" => "form-control")));
        // line 52
        echo "
                    <span class=\"glyphicon glyphicon-log-in form-control-feedback\"></span>
                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
                </div>
                <span class=\"glyphicon glyphicon-log-in form-control-feedback\"></span>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-8\">
                    <div class=\"checkbox icheck\">
                        <label>
                            <input type=\"checkbox\"> I agree to the <a href=\"#\">terms</a>
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class=\"col-xs-4\">
                    <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Register</button>
                </div><!-- /.col -->
            </div>
        </form>

        <div class=\"social-auth-links text-center\">
            <p>- OR -</p>
            <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign up using Facebook</a>
        </div>

        <a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" class=\"text-center\">I already have a membership</a>
    </div><!-- /.form-box -->
</div><!-- /.register-box -->

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
        
        $__internal_e490652f947e0164d1f8308e29283918e7b8947fda2eb4187758d96d70949b8e->leave($__internal_e490652f947e0164d1f8308e29283918e7b8947fda2eb4187758d96d70949b8e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 77,  125 => 74,  102 => 54,  98 => 52,  96 => 49,  88 => 44,  84 => 42,  82 => 39,  75 => 35,  71 => 33,  69 => 30,  62 => 26,  58 => 24,  56 => 21,  49 => 17,  45 => 15,  43 => 12,  37 => 9,  31 => 8,  22 => 1,);
    }
}
/* <div class="register-box">*/
/*     <div class="register-logo">*/
/*         <a href="/">NET<b>POSITIVE</b></a>*/
/*     </div>*/
/* */
/*     <div class="register-box-body">*/
/*         <p class="login-box-msg">Register a new membership</p>*/
/*         <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST">*/
/*             {{ form_widget(form._token) }}*/
/* */
/*             <div class="form-group has-feedback">*/
/*                 {{ form_widget(form.email, {'type': 'email','attr': {*/
/*                     'placeholder' : 'Email',*/
/*                     'class' : 'form-control'*/
/*                 }}) }}*/
/*                 <span class="glyphicon glyphicon-envelope form-control-feedback"></span>*/
/*                 {{ form_errors(form.email) }}*/
/*             </div>*/
/* */
/*             <div class="form-group has-feedback">*/
/*                 {{ form_widget(form.full_name, {'type': 'text','attr': {*/
/*                     'placeholder' : 'Full name (optional)',*/
/*                     'class' : 'form-control'*/
/*                 }}) }}*/
/*                 <span class="glyphicon glyphicon-user form-control-feedback"></span>*/
/*                 {{ form_errors(form.full_name) }}*/
/*             </div>*/
/* */
/*             <div class="form-group has-feedback">*/
/*                 {{ form_widget(form.phone, {'type': 'tel','attr': {*/
/*                     'placeholder' : 'Phone (optional)',*/
/*                     'class' : 'form-control'*/
/*                 }}) }}*/
/*                 <span class="glyphicon glyphicon-phone form-control-feedback"></span>*/
/*                 {{ form_errors(form.phone) }}*/
/*             </div>*/
/* */
/*             <div class="form-group has-feedback">*/
/*                 {{ form_widget(form.plainPassword.first, {'type': 'password','attr': {*/
/*                     'placeholder' : 'Password',*/
/*                     'class' : 'form-control'*/
/*                 }}) }}*/
/*                 <span class="glyphicon glyphicon-lock form-control-feedback"></span>*/
/*                 {{ form_errors(form.plainPassword.first) }}*/
/*             </div>*/
/* */
/*             <div class="form-group has-feedback">*/
/*                 <div class="form-group has-feedback">*/
/*                     {{ form_widget(form.plainPassword.second, {'type': 'password','attr': {*/
/*                         'placeholder' : 'Retype password',*/
/*                         'class' : 'form-control'*/
/*                     }}) }}*/
/*                     <span class="glyphicon glyphicon-log-in form-control-feedback"></span>*/
/*                     {{ form_errors(form.plainPassword.second) }}*/
/*                 </div>*/
/*                 <span class="glyphicon glyphicon-log-in form-control-feedback"></span>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-xs-8">*/
/*                     <div class="checkbox icheck">*/
/*                         <label>*/
/*                             <input type="checkbox"> I agree to the <a href="#">terms</a>*/
/*                         </label>*/
/*                     </div>*/
/*                 </div><!-- /.col -->*/
/*                 <div class="col-xs-4">*/
/*                     <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>*/
/*                 </div><!-- /.col -->*/
/*             </div>*/
/*         </form>*/
/* */
/*         <div class="social-auth-links text-center">*/
/*             <p>- OR -</p>*/
/*             <a href="{{ path('hwi_oauth_service_redirect', {"service" : "facebook"}) }}" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using Facebook</a>*/
/*         </div>*/
/* */
/*         <a href="{{ path('fos_user_security_login') }}" class="text-center">I already have a membership</a>*/
/*     </div><!-- /.form-box -->*/
/* </div><!-- /.register-box -->*/
/* */
/* <!-- jQuery 2.1.4 -->*/
/* <script src="/bundles/user/plugins/jQuery/jQuery-2.1.4.min.js"></script>*/
/* <!-- Bootstrap 3.3.5 -->*/
/* <script src="/bundles/user/bootstrap/js/bootstrap.min.js"></script>*/
/* <!-- iCheck -->*/
/* <script src="/bundles/user/plugins/iCheck/icheck.min.js"></script>*/
/* <script>*/
/*     $(function () {*/
/*         $('input').iCheck({*/
/*             checkboxClass: 'icheckbox_square-blue',*/
/*             radioClass: 'iradio_square-blue',*/
/*             increaseArea: '20%' // optional*/
/*         });*/
/*     });*/
/* </script>*/
/* */
/* */
