<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_c15899e0106bc2b93cd1f87602c0de86f008c5241a24e07d4373b2dc093155a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@UserBundle/Resources/views/layout.html.twig", "UserBundle:Security:login.html.twig", 1);
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
        $__internal_6b09a842029d85725d5579e9f07257a812c9cef26f9169700be106d8c58f924d = $this->env->getExtension("native_profiler");
        $__internal_6b09a842029d85725d5579e9f07257a812c9cef26f9169700be106d8c58f924d->enter($__internal_6b09a842029d85725d5579e9f07257a812c9cef26f9169700be106d8c58f924d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b09a842029d85725d5579e9f07257a812c9cef26f9169700be106d8c58f924d->leave($__internal_6b09a842029d85725d5579e9f07257a812c9cef26f9169700be106d8c58f924d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_79574ebc311aad317c098a98e56b4cbcc9ae634184c5fea9ba58a13002ccb67e = $this->env->getExtension("native_profiler");
        $__internal_79574ebc311aad317c098a98e56b4cbcc9ae634184c5fea9ba58a13002ccb67e->enter($__internal_79574ebc311aad317c098a98e56b4cbcc9ae634184c5fea9ba58a13002ccb67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NETPOSITIVE | Log in";
        
        $__internal_79574ebc311aad317c098a98e56b4cbcc9ae634184c5fea9ba58a13002ccb67e->leave($__internal_79574ebc311aad317c098a98e56b4cbcc9ae634184c5fea9ba58a13002ccb67e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7946e6692dc8be911db56fcb30a4e48f23b7bccf9358c3d6107aae6f119a10bb = $this->env->getExtension("native_profiler");
        $__internal_7946e6692dc8be911db56fcb30a4e48f23b7bccf9358c3d6107aae6f119a10bb->enter($__internal_7946e6692dc8be911db56fcb30a4e48f23b7bccf9358c3d6107aae6f119a10bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "
    <div class=\"login-box\">
      <div class=\"login-logo\">
        <a href=\"/\">NET<b>POSITIVE</b></a>
      </div><!-- /.login-logo -->
      <div class=\"login-box-body\">
        <p class=\"login-box-msg\">Sign in to start your session</p>
        ";
        // line 13
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 14
            echo "          <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array())), "html", null, true);
            echo "</div>
        ";
        }
        // line 16
        echo "
        <form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
          <div class=\"form-group has-feedback\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Username or Email\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
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

        <div class=\"social-auth-links text-center\">
          <p>- OR -</p>
          <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign in using Facebook</a>
        </div><!-- /.social-auth-links -->

        <a href=\"";
        // line 45
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
        
        $__internal_7946e6692dc8be911db56fcb30a4e48f23b7bccf9358c3d6107aae6f119a10bb->leave($__internal_7946e6692dc8be911db56fcb30a4e48f23b7bccf9358c3d6107aae6f119a10bb_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 45,  104 => 42,  78 => 19,  73 => 17,  70 => 16,  64 => 14,  62 => 13,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "@UserBundle/Resources/views/layout.html.twig" %}*/
/* */
/* {% block title %}NETPOSITIVE | Log in{% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/*     <div class="login-box">*/
/*       <div class="login-logo">*/
/*         <a href="/">NET<b>POSITIVE</b></a>*/
/*       </div><!-- /.login-logo -->*/
/*       <div class="login-box-body">*/
/*         <p class="login-box-msg">Sign in to start your session</p>*/
/*         {% if error %}*/
/*           <div class="error">{{ error.messageKey|trans }}</div>*/
/*         {% endif %}*/
/* */
/*         <form action="{{ path('fos_user_security_check') }}" method="post">*/
/*           <div class="form-group has-feedback">*/
/*             <input type="text" class="form-control" placeholder="Username or Email" name="_username" value="{{ last_username }}">*/
/*             <span class="glyphicon glyphicon-envelope form-control-feedback"></span>*/
/*           </div>*/
/*           <div class="form-group has-feedback">*/
/*             <input type="password" class="form-control" placeholder="Password" name="_password" >*/
/*             <span class="glyphicon glyphicon-lock form-control-feedback"></span>*/
/*           </div>*/
/*           <div class="row">*/
/*             <div class="col-xs-8">*/
/*               <div class="checkbox icheck">*/
/*                 <label>*/
/*                   <input type="checkbox"> Remember Me*/
/*                 </label>*/
/*               </div>*/
/*             </div><!-- /.col -->*/
/*             <div class="col-xs-4">*/
/*               <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>*/
/*             </div><!-- /.col -->*/
/*           </div>*/
/*         </form>*/
/* */
/*         <div class="social-auth-links text-center">*/
/*           <p>- OR -</p>*/
/*           <a href="{{ path('hwi_oauth_service_redirect', {"service" : "facebook"}) }}" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>*/
/*         </div><!-- /.social-auth-links -->*/
/* */
/*         <a href="{{ path('fos_user_registration_register') }}" class="text-center">Register a new membership</a>*/
/* */
/*       </div><!-- /.login-box-body -->*/
/*     </div><!-- /.login-box -->*/
/* */
/*     <!-- jQuery 2.1.4 -->*/
/*     <script src="/bundles/user/plugins/jQuery/jQuery-2.1.4.min.js"></script>*/
/*     <!-- Bootstrap 3.3.5 -->*/
/*     <script src="/bundles/user/bootstrap/js/bootstrap.min.js"></script>*/
/*     <!-- iCheck -->*/
/*     <script src="/bundles/user/plugins/iCheck/icheck.min.js"></script>*/
/*     <script>*/
/*       $(function () {*/
/*         $('input').iCheck({*/
/*           checkboxClass: 'icheckbox_square-blue',*/
/*           radioClass: 'iradio_square-blue',*/
/*           increaseArea: '20%' // optional*/
/*         });*/
/*       });*/
/*     </script>*/
/* {% endblock %}*/
/* */
