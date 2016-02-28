<?php

/* ::base.html.twig */
class __TwigTemplate_3bb569c482ed1450cf5e8e0e5cd6609011f90f00460d1318ed0d6ab71e3f7a51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_993150cdbadb9a2ad7fe7132d3eba3c7d5015f088484642d1e3deaaa0db69670 = $this->env->getExtension("native_profiler");
        $__internal_993150cdbadb9a2ad7fe7132d3eba3c7d5015f088484642d1e3deaaa0db69670->enter($__internal_993150cdbadb9a2ad7fe7132d3eba3c7d5015f088484642d1e3deaaa0db69670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/user/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/user/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/user/plugins/iCheck/square/blue.css"), "html", null, true);
        echo "\">

    ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body class=\"hold-transition login-page\">

";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "
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
</body>
</html>

";
        
        $__internal_993150cdbadb9a2ad7fe7132d3eba3c7d5015f088484642d1e3deaaa0db69670->leave($__internal_993150cdbadb9a2ad7fe7132d3eba3c7d5015f088484642d1e3deaaa0db69670_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_75b37856d1be9295368f42dfe8d7c263e0e13c9c9c36c68e2d35e72b8d6791eb = $this->env->getExtension("native_profiler");
        $__internal_75b37856d1be9295368f42dfe8d7c263e0e13c9c9c36c68e2d35e72b8d6791eb->enter($__internal_75b37856d1be9295368f42dfe8d7c263e0e13c9c9c36c68e2d35e72b8d6791eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NETPOSITIVE";
        
        $__internal_75b37856d1be9295368f42dfe8d7c263e0e13c9c9c36c68e2d35e72b8d6791eb->leave($__internal_75b37856d1be9295368f42dfe8d7c263e0e13c9c9c36c68e2d35e72b8d6791eb_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e775f2f24103924bb14bfe4d1e9715edd2969e90993542ec50b7bc82d4b983d9 = $this->env->getExtension("native_profiler");
        $__internal_e775f2f24103924bb14bfe4d1e9715edd2969e90993542ec50b7bc82d4b983d9->enter($__internal_e775f2f24103924bb14bfe4d1e9715edd2969e90993542ec50b7bc82d4b983d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e775f2f24103924bb14bfe4d1e9715edd2969e90993542ec50b7bc82d4b983d9->leave($__internal_e775f2f24103924bb14bfe4d1e9715edd2969e90993542ec50b7bc82d4b983d9_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_7030917fcc6d768ca6b1d8d4a1240623d40b3596bcecd67f9869cb1cb9fc1156 = $this->env->getExtension("native_profiler");
        $__internal_7030917fcc6d768ca6b1d8d4a1240623d40b3596bcecd67f9869cb1cb9fc1156->enter($__internal_7030917fcc6d768ca6b1d8d4a1240623d40b3596bcecd67f9869cb1cb9fc1156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7030917fcc6d768ca6b1d8d4a1240623d40b3596bcecd67f9869cb1cb9fc1156->leave($__internal_7030917fcc6d768ca6b1d8d4a1240623d40b3596bcecd67f9869cb1cb9fc1156_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 31,  112 => 20,  100 => 6,  74 => 32,  72 => 31,  60 => 21,  58 => 20,  53 => 18,  48 => 16,  39 => 10,  32 => 6,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <title>{% block title %}NETPOSITIVE{% endblock %}</title>*/
/*     <!-- Tell the browser to be responsive to screen width -->*/
/*     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/* */
/*     <link rel="stylesheet" href="{{ asset('bundles/user/bootstrap/css/bootstrap.min.css') }}">*/
/*     <!-- Font Awesome -->*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*     <!-- Ionicons -->*/
/*     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">*/
/*     <!-- Theme style -->*/
/*     <link rel="stylesheet" href="{{ asset('bundles/user/dist/css/AdminLTE.min.css') }}">*/
/*     <!-- iCheck -->*/
/*     <link rel="stylesheet" href="{{ asset('bundles/user/plugins/iCheck/square/blue.css') }}">*/
/* */
/*     {% block stylesheets %}{% endblock %}*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body class="hold-transition login-page">*/
/* */
/* {% block body %}{% endblock %}*/
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
/* </body>*/
/* </html>*/
/* */
/* */
