<?php

/* ScourgenWebBundle::layout.html.twig */
class __TwigTemplate_ce646d62aafc88175adeed90f961a545a765ff87ef0dc80270518f2019da8c42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'maincontent' => array($this, 'block_maincontent'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title></title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scourgenweb/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel=\"stylesheet\"  href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scourgenweb/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\"  href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scourgenweb/css/main.css"), "html", null, true);
        echo "\">

    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scourgenweb/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
";
        // line 23
        $this->displayBlock('head', $context, $blocks);
        // line 49
        $this->displayBlock('maincontent', $context, $blocks);
        // line 88
        echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scourgenweb/js/vendor/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>

<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scourgenweb/js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundle/scourgenweb/js/main.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    // line 23
    public function block_head($context, array $blocks = array())
    {
        // line 24
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Project name</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <form class=\"navbar-form navbar-right\" role=\"form\">
                <div class=\"form-group\">
                    <input type=\"text\" placeholder=\"Email\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    <input type=\"password\" placeholder=\"Password\" class=\"form-control\">
                </div>
                <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
            </form>
        </div><!--/.navbar-collapse -->
    </div>
</nav>
";
    }

    // line 49
    public function block_maincontent($context, array $blocks = array())
    {
        // line 50
        echo "<!-- Main jumbotron for a primary marketing message or call to action -->
<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more &raquo;</a></p>
    </div>
</div>

<div class=\"container\">
    <!-- Example row of columns -->
    <div class=\"row\">
        <div class=\"col-md-4\">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div>
        <div class=\"col-md-4\">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div>
        <div class=\"col-md-4\">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div>
    </div>

    <hr>
";
        // line 80
        $this->displayBlock('footer', $context, $blocks);
        // line 86
        echo "
";
    }

    // line 80
    public function block_footer($context, array $blocks = array())
    {
        // line 81
        echo "    <footer>
        <p>&copy; Company 2015</p>
    </footer>
</div> <!-- /container -->
";
    }

    public function getTemplateName()
    {
        return "ScourgenWebBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 81,  156 => 80,  151 => 86,  149 => 80,  117 => 50,  114 => 49,  86 => 24,  83 => 23,  75 => 93,  70 => 91,  65 => 89,  62 => 88,  60 => 49,  58 => 23,  52 => 20,  47 => 18,  43 => 17,  33 => 10,  22 => 1,);
    }
}
/* <!doctype html>*/
/* <html class="no-js" lang="">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*     <title></title>*/
/*     <meta name="description" content="">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <link rel="stylesheet" href="{{ asset('bundles/scourgenweb/css/bootstrap.min.css') }}">*/
/*     <style>*/
/*         body {*/
/*             padding-top: 50px;*/
/*             padding-bottom: 20px;*/
/*         }*/
/*     </style>*/
/*     <link rel="stylesheet"  href="{{ asset('bundles/scourgenweb/css/bootstrap-theme.min.css') }}">*/
/*     <link rel="stylesheet"  href="{{ asset('bundles/scourgenweb/css/main.css') }}">*/
/* */
/*     <script src="{{ asset('bundles/scourgenweb/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>*/
/* </head>*/
/* <body>*/
/* {% block head %}*/
/* <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="#">Project name</a>*/
/*         </div>*/
/*         <div id="navbar" class="navbar-collapse collapse">*/
/*             <form class="navbar-form navbar-right" role="form">*/
/*                 <div class="form-group">*/
/*                     <input type="text" placeholder="Email" class="form-control">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <input type="password" placeholder="Password" class="form-control">*/
/*                 </div>*/
/*                 <button type="submit" class="btn btn-success">Sign in</button>*/
/*             </form>*/
/*         </div><!--/.navbar-collapse -->*/
/*     </div>*/
/* </nav>*/
/* {% endblock %}*/
/* {% block maincontent %}*/
/* <!-- Main jumbotron for a primary marketing message or call to action -->*/
/* <div class="jumbotron">*/
/*     <div class="container">*/
/*         <h1>Hello, world!</h1>*/
/*         <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>*/
/*         <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="container">*/
/*     <!-- Example row of columns -->*/
/*     <div class="row">*/
/*         <div class="col-md-4">*/
/*             <h2>Heading</h2>*/
/*             <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*             <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             <h2>Heading</h2>*/
/*             <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*             <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             <h2>Heading</h2>*/
/*             <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>*/
/*             <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/* {% block footer %}*/
/*     <footer>*/
/*         <p>&copy; Company 2015</p>*/
/*     </footer>*/
/* </div> <!-- /container -->*/
/* {% endblock %}*/
/* */
/* {% endblock %}*/
/* <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>*/
/* <script>window.jQuery || document.write('<script src="{{ asset('bundles/scourgenweb/js/vendor/jquery-1.11.2.min.js') }}"><\/script>')</script>*/
/* */
/* <script src="{{ asset('bundles/scourgenweb/js/vendor/bootstrap.min.js') }}"></script>*/
/* */
/* <script src="{{ asset('bundle/scourgenweb/js/main.js') }}"></script>*/
/* </body>*/
/* </html>*/
/* */
