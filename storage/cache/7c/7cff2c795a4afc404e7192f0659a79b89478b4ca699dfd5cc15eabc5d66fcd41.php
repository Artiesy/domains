<?php

/* default/template/common/footer.twig */
class __TwigTemplate_1dd76b5a86dc827c3c69354beb458a21064491bb8208599138bbac5406281dcb extends Twig_Template
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
        echo "<footer>
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 4
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 5
            echo "      <div class=\"col-sm-3\">
        <h5>";
            // line 6
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "</h5>
        <ul class=\"list-unstyled\">
         ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 9
                echo "          <li><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        </ul>
      </div>
      ";
        }
        // line 14
        echo "      <div class=\"col-sm-3\">
        <h5>";
        // line 15
        echo (isset($context["text_service"]) ? $context["text_service"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 17
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 18
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 19
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 23
        echo (isset($context["text_extra"]) ? $context["text_extra"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 25
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\">";
        echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 26
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 27
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\">";
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 28
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 32
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 34
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 35
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 36
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 37
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <p>";
        // line 42
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo "</p>
  </div>
</footer>

\t\t    ";
        // line 46
        if ((isset($context["set_agree_cooki"]) ? $context["set_agree_cooki"] : null)) {
            // line 47
            echo "\t        ";
            echo (isset($context["set_agree_cooki"]) ? $context["set_agree_cooki"] : null);
            echo " 
\t        ";
        }
        // line 49
        echo "\t    
";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 51
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->

";
        // line 58
        if (((isset($context["module_cookiepolicy_status"]) ? $context["module_cookiepolicy_status"] : null) == "1")) {
            // line 59
            echo "<script type=\"text/javascript\" >
    var text_before = \"";
            // line 60
            echo $this->getAttribute($this->getAttribute((isset($context["module_cookiepolicy_cookietext"]) ? $context["module_cookiepolicy_cookietext"] : null), "text", array()), (isset($context["langcode"]) ? $context["langcode"] : null), array(), "array");
            echo "\";
    var link_text = \"";
            // line 61
            if (((isset($context["module_cookiepolicy_infopage_on"]) ? $context["module_cookiepolicy_infopage_on"] : null) == 1)) {
                echo " ";
                echo (isset($context["module_cookiepolicy_infopage_title"]) ? $context["module_cookiepolicy_infopage_title"] : null);
                echo " ";
            } elseif (((isset($context["module_cookiepolicy_infopage_on"]) ? $context["module_cookiepolicy_infopage_on"] : null) == 0)) {
                echo " ";
                echo $this->getAttribute($this->getAttribute((isset($context["module_cookiepolicy_urltext"]) ? $context["module_cookiepolicy_urltext"] : null), "text", array()), (isset($context["langcode"]) ? $context["langcode"] : null), array(), "array");
            }
            echo "\";
    var text_after = \"";
            // line 62
            echo $this->getAttribute($this->getAttribute((isset($context["module_cookiepolicy_cookietext_after"]) ? $context["module_cookiepolicy_cookietext_after"] : null), "text", array()), (isset($context["langcode"]) ? $context["langcode"] : null), array(), "array");
            echo "\";
    var accept_text = \"";
            // line 63
            echo $this->getAttribute($this->getAttribute((isset($context["module_cookiepolicy_buttontext"]) ? $context["module_cookiepolicy_buttontext"] : null), "text", array()), (isset($context["langcode"]) ? $context["langcode"] : null), array(), "array");
            echo "\";
    var cookie_url = \"";
            // line 64
            if (((isset($context["module_cookiepolicy_infopage_on"]) ? $context["module_cookiepolicy_infopage_on"] : null) == 1)) {
                echo " ";
                echo (isset($context["module_cookiepolicy_infopage_url"]) ? $context["module_cookiepolicy_infopage_url"] : null);
                echo " ";
            } elseif (((isset($context["module_cookiepolicy_infopage_on"]) ? $context["module_cookiepolicy_infopage_on"] : null) == 0)) {
                echo " ";
                echo (isset($context["module_cookiepolicy_url"]) ? $context["module_cookiepolicy_url"] : null);
            }
            echo "\";
    var target_url = \"";
            // line 65
            echo (isset($context["cookiepolicy_blank_page"]) ? $context["cookiepolicy_blank_page"] : null);
            echo "\";
    var cookie_expires = ";
            // line 66
            echo (isset($context["module_cookiepolicy_cookie_expires"]) ? $context["module_cookiepolicy_cookie_expires"] : null);
            echo ";
    var cookie_name = \"";
            // line 67
            echo (isset($context["module_cookiepolicy_cookie_name"]) ? $context["module_cookiepolicy_cookie_name"] : null);
            echo "\";
    var text_align = \"";
            // line 68
            echo (isset($context["module_cookiepolicy_text_align"]) ? $context["module_cookiepolicy_text_align"] : null);
            echo "\";
    var cookie_position = \"";
            // line 69
            echo (isset($context["module_cookiepolicy_position"]) ? $context["module_cookiepolicy_position"] : null);
            echo "\";
    var button_icon = \"";
            // line 70
            if ((isset($context["module_cookiepolicy_accept_button_icon"]) ? $context["module_cookiepolicy_accept_button_icon"] : null)) {
                echo "<i class='";
                echo (isset($context["module_cookiepolicy_accept_button_icon"]) ? $context["module_cookiepolicy_accept_button_icon"] : null);
                echo "'></i>&nbsp;";
            }
            echo "\";
</script>
<script src=\"catalog/view/javascript/cookiepolicy/jquery.cookie.js\"></script>
<script src=\"catalog/view/javascript/cookiepolicy/jquery.cookiecuttr.js\"></script>
<link rel=\"stylesheet\" href=\"catalog/view/javascript/cookiepolicy/cookiepolicy.css\">
<script>
\$(document).ready(function () {
    \$.cookieCuttr();\t
});
</script>
";
        }
        // line 81
        echo "\t\t\t
</body></html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 81,  245 => 70,  241 => 69,  237 => 68,  233 => 67,  229 => 66,  225 => 65,  214 => 64,  210 => 63,  206 => 62,  195 => 61,  191 => 60,  188 => 59,  186 => 58,  179 => 53,  170 => 51,  166 => 50,  163 => 49,  157 => 47,  155 => 46,  148 => 42,  138 => 37,  132 => 36,  126 => 35,  120 => 34,  115 => 32,  106 => 28,  100 => 27,  94 => 26,  88 => 25,  83 => 23,  74 => 19,  68 => 18,  62 => 17,  57 => 15,  54 => 14,  49 => 11,  38 => 9,  34 => 8,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <footer>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       {% if informations %}*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_information }}</h5>*/
/*         <ul class="list-unstyled">*/
/*          {% for information in informations %}*/
/*           <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*       {% endif %}*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_service }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*           <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/*           <li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_extra }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/*           <li><a href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/*           <li><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/*           <li><a href="{{ special }}">{{ text_special }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_account }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*           <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*           <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*           <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*     <hr>*/
/*     <p>{{ powered }}</p>*/
/*   </div>*/
/* </footer>*/
/* */
/* 		    {% if set_agree_cooki %}*/
/* 	        {{ set_agree_cooki }} */
/* 	        {% endif %}*/
/* 	    */
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <!--*/
/* OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.*/
/* Please donate via PayPal to donate@opencart.com*/
/* //-->*/
/* */
/* {% if module_cookiepolicy_status == "1" %}*/
/* <script type="text/javascript" >*/
/*     var text_before = "{{ module_cookiepolicy_cookietext.text[langcode] }}";*/
/*     var link_text = "{% if module_cookiepolicy_infopage_on == 1 %} {{ module_cookiepolicy_infopage_title }} {% elseif module_cookiepolicy_infopage_on == 0 %} {{ module_cookiepolicy_urltext.text[langcode] }}{% endif %}";*/
/*     var text_after = "{{ module_cookiepolicy_cookietext_after.text[langcode] }}";*/
/*     var accept_text = "{{ module_cookiepolicy_buttontext.text[langcode] }}";*/
/*     var cookie_url = "{% if module_cookiepolicy_infopage_on == 1 %} {{ module_cookiepolicy_infopage_url }} {% elseif module_cookiepolicy_infopage_on == 0 %} {{ module_cookiepolicy_url }}{% endif %}";*/
/*     var target_url = "{{ cookiepolicy_blank_page }}";*/
/*     var cookie_expires = {{ module_cookiepolicy_cookie_expires }};*/
/*     var cookie_name = "{{ module_cookiepolicy_cookie_name }}";*/
/*     var text_align = "{{ module_cookiepolicy_text_align }}";*/
/*     var cookie_position = "{{ module_cookiepolicy_position }}";*/
/*     var button_icon = "{% if module_cookiepolicy_accept_button_icon %}<i class='{{ module_cookiepolicy_accept_button_icon }}'></i>&nbsp;{% endif %}";*/
/* </script>*/
/* <script src="catalog/view/javascript/cookiepolicy/jquery.cookie.js"></script>*/
/* <script src="catalog/view/javascript/cookiepolicy/jquery.cookiecuttr.js"></script>*/
/* <link rel="stylesheet" href="catalog/view/javascript/cookiepolicy/cookiepolicy.css">*/
/* <script>*/
/* $(document).ready(function () {*/
/*     $.cookieCuttr();	*/
/* });*/
/* </script>*/
/* {% endif %}*/
/* 			*/
/* </body></html>*/
