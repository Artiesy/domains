<?php

/* default/template/common/header.twig */
class __TwigTemplate_2b30bde463fee5c7e6867a75f86091c5f1a71d1ea5d35392fac58b314f702441 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 13
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 14
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 17
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 27
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 30
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 34
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 37
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
";
        // line 40
        if (((isset($context["module_cookiepolicy_status"]) ? $context["module_cookiepolicy_status"] : null) == "1")) {
            // line 41
            echo "<style>
#cookiepolicy {
 opacity: ";
            // line 43
            echo (isset($context["module_cookiepolicy_opacity"]) ? $context["module_cookiepolicy_opacity"] : null);
            echo ";
 background: ";
            // line 44
            echo (isset($context["module_cookiepolicy_background_colour"]) ? $context["module_cookiepolicy_background_colour"] : null);
            echo ";
}

#cookiepolicy-btn {
 color: ";
            // line 48
            echo (isset($context["module_cookiepolicy_accept_text_colour"]) ? $context["module_cookiepolicy_accept_text_colour"] : null);
            echo " !important;
 border: 1px solid ";
            // line 49
            echo (isset($context["module_cookiepolicy_accept_button_border"]) ? $context["module_cookiepolicy_accept_button_border"] : null);
            echo ";
 ";
            // line 50
            if ((isset($context["module_cookiepolicy_transparent_button"]) ? $context["module_cookiepolicy_transparent_button"] : null)) {
                // line 51
                echo " background: transparent;
 ";
            } else {
                // line 53
                echo " background: ";
                echo (isset($context["module_cookiepolicy_accept_button_colour"]) ? $context["module_cookiepolicy_accept_button_colour"] : null);
                echo ";
 ";
            }
            // line 55
            echo " ";
            if ((isset($context["module_cookiepolicy_rounded_corners"]) ? $context["module_cookiepolicy_rounded_corners"] : null)) {
                // line 56
                echo " -webkit-border-radius: 4px 4px 4px 4px;
 border-radius: 4px 4px 4px 4px;
 ";
            }
            // line 59
            echo "}

#cookiepolicy-btn:hover {
 background: ";
            // line 62
            echo (isset($context["module_cookiepolicy_accept_button_hover"]) ? $context["module_cookiepolicy_accept_button_hover"] : null);
            echo ";
 color: ";
            // line 63
            echo (isset($context["module_cookiepolicy_accept_text_hover"]) ? $context["module_cookiepolicy_accept_text_hover"] : null);
            echo " !important;
 border: 1px solid ";
            // line 64
            echo (isset($context["module_cookiepolicy_accept_button_border_hover"]) ? $context["module_cookiepolicy_accept_button_border_hover"] : null);
            echo ";
}

.cookiepolicy-text {
 color: ";
            // line 68
            echo (isset($context["module_cookiepolicy_text_colour"]) ? $context["module_cookiepolicy_text_colour"] : null);
            echo ";
}
.cookiepolicy-text a {
 color: ";
            // line 71
            echo (isset($context["module_cookiepolicy_link_colour"]) ? $context["module_cookiepolicy_link_colour"] : null);
            echo ";
 text-decoration: underline;
}

.cookiepolicy-text a:hover {
 color: ";
            // line 76
            echo (isset($context["module_cookiepolicy_link_hover"]) ? $context["module_cookiepolicy_link_hover"] : null);
            echo ";
 text-decoration: none;
}
</style>
";
        }
        // line 81
        echo "\t\t\t
</head>
<body>
<nav id=\"top\">
  <div class=\"container\">";
        // line 85
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "
    ";
        // line 86
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
    <div id=\"top-links\" class=\"nav pull-right\">
      <ul class=\"list-inline\">
        <li><a href=\"";
        // line 89
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\"><i class=\"fa fa-phone\"></i></a> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</span></li>
        <li class=\"dropdown\"><a href=\"";
        // line 90
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</span> <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu dropdown-menu-right\">
            ";
        // line 92
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 93
            echo "            <li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 94
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 95
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 96
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 97
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
            ";
        } else {
            // line 99
            echo "            <li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 100
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
            ";
        }
        // line 102
        echo "          </ul>
        </li>
        <li><a href=\"";
        // line 104
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</span></a></li>
        <li><a href=\"";
        // line 105
        echo (isset($context["shopping_cart"]) ? $context["shopping_cart"] : null);
        echo "\" title=\"";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "</span></a></li>
        <li><a href=\"";
        // line 106
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" title=\"";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</span></a></li>
      </ul>
    </div>
  </div>
</nav>
<header>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4\">
        <div id=\"logo\">";
        // line 115
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            echo "<a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 116
            echo "          <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
          ";
        }
        // line 117
        echo "</div>
      </div>
      <div class=\"col-sm-5\">";
        // line 119
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</div>
      <div class=\"col-sm-3\">";
        // line 120
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</div>
    </div>
  </div>
</header>
";
        // line 124
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 124,  372 => 120,  368 => 119,  364 => 117,  356 => 116,  344 => 115,  328 => 106,  320 => 105,  312 => 104,  308 => 102,  301 => 100,  294 => 99,  287 => 97,  281 => 96,  275 => 95,  269 => 94,  262 => 93,  260 => 92,  251 => 90,  245 => 89,  239 => 86,  235 => 85,  229 => 81,  221 => 76,  213 => 71,  207 => 68,  200 => 64,  196 => 63,  192 => 62,  187 => 59,  182 => 56,  179 => 55,  173 => 53,  169 => 51,  167 => 50,  163 => 49,  159 => 48,  152 => 44,  148 => 43,  144 => 41,  142 => 40,  139 => 39,  131 => 37,  127 => 36,  116 => 34,  112 => 33,  109 => 32,  100 => 30,  96 => 29,  83 => 27,  79 => 26,  71 => 20,  65 => 18,  63 => 17,  57 => 15,  55 => 14,  51 => 13,  47 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />*/
/* <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />*/
/* <link href="catalog/view/theme/default/stylesheet/stylesheet.css" rel="stylesheet">*/
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <script src="catalog/view/javascript/common.js" type="text/javascript"></script>*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* */
/* {% if module_cookiepolicy_status == "1" %}*/
/* <style>*/
/* #cookiepolicy {*/
/*  opacity: {{ module_cookiepolicy_opacity }};*/
/*  background: {{ module_cookiepolicy_background_colour }};*/
/* }*/
/* */
/* #cookiepolicy-btn {*/
/*  color: {{ module_cookiepolicy_accept_text_colour }} !important;*/
/*  border: 1px solid {{ module_cookiepolicy_accept_button_border }};*/
/*  {% if module_cookiepolicy_transparent_button %}*/
/*  background: transparent;*/
/*  {% else %}*/
/*  background: {{ module_cookiepolicy_accept_button_colour }};*/
/*  {% endif %}*/
/*  {% if module_cookiepolicy_rounded_corners %}*/
/*  -webkit-border-radius: 4px 4px 4px 4px;*/
/*  border-radius: 4px 4px 4px 4px;*/
/*  {% endif %}*/
/* }*/
/* */
/* #cookiepolicy-btn:hover {*/
/*  background: {{ module_cookiepolicy_accept_button_hover }};*/
/*  color: {{ module_cookiepolicy_accept_text_hover }} !important;*/
/*  border: 1px solid {{ module_cookiepolicy_accept_button_border_hover }};*/
/* }*/
/* */
/* .cookiepolicy-text {*/
/*  color: {{ module_cookiepolicy_text_colour }};*/
/* }*/
/* .cookiepolicy-text a {*/
/*  color: {{ module_cookiepolicy_link_colour }};*/
/*  text-decoration: underline;*/
/* }*/
/* */
/* .cookiepolicy-text a:hover {*/
/*  color: {{ module_cookiepolicy_link_hover }};*/
/*  text-decoration: none;*/
/* }*/
/* </style>*/
/* {% endif %}*/
/* 			*/
/* </head>*/
/* <body>*/
/* <nav id="top">*/
/*   <div class="container">{{ currency }}*/
/*     {{ language }}*/
/*     <div id="top-links" class="nav pull-right">*/
/*       <ul class="list-inline">*/
/*         <li><a href="{{ contact }}"><i class="fa fa-phone"></i></a> <span class="hidden-xs hidden-sm hidden-md">{{ telephone }}</span></li>*/
/*         <li class="dropdown"><a href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_account }}</span> <span class="caret"></span></a>*/
/*           <ul class="dropdown-menu dropdown-menu-right">*/
/*             {% if logged %}*/
/*             <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*             <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*             <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*             <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*             <li><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/*             {% else %}*/
/*             <li><a href="{{ register }}">{{ text_register }}</a></li>*/
/*             <li><a href="{{ login }}">{{ text_login }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*         </li>*/
/*         <li><a href="{{ wishlist }}" id="wishlist-total" title="{{ text_wishlist }}"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_wishlist }}</span></a></li>*/
/*         <li><a href="{{ shopping_cart }}" title="{{ text_shopping_cart }}"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_shopping_cart }}</span></a></li>*/
/*         <li><a href="{{ checkout }}" title="{{ text_checkout }}"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_checkout }}</span></a></li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* </nav>*/
/* <header>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-sm-4">*/
/*         <div id="logo">{% if logo %}<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>{% else %}*/
/*           <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*           {% endif %}</div>*/
/*       </div>*/
/*       <div class="col-sm-5">{{ search }}</div>*/
/*       <div class="col-sm-3">{{ cart }}</div>*/
/*     </div>*/
/*   </div>*/
/* </header>*/
/* {{ menu }}*/
/* */
