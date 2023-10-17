<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @conbiz/page/main.html.twig */
class __TwigTemplate_851264048308d263f9286eb79b3a3957 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"content-main-inner\">
\t<div class=\"row\">
\t\t
\t\t";
        // line 4
        $context["cl_main"] = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-xs-1 ";
        // line 5
        echo "\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 5) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 5))) {
            echo "\t
\t\t\t";
            // line 6
            $context["cl_main"] = "col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-xs-1 ";
            // line 7
            echo "\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 7) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 7))) {
            echo "\t
\t\t\t";
            // line 8
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 8)) {
                // line 9
                echo "\t\t\t \t";
                $context["cl_main"] = "col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-xs-1 sb-r ";
                // line 10
                echo "\t\t\t";
            }
            echo " \t\t
\t\t\t";
            // line 11
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 11)) {
                // line 12
                echo "\t\t\t\t";
                $context["cl_main"] = "col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-xs-1 sb-l ";
                // line 13
                echo "\t\t\t";
            }
            echo "\t\t\t\t
      ";
        }
        // line 14
        echo " 

\t\t<div id=\"page-main-content\" class=\"main-content ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cl_main"] ?? null), 16, $this->source), "html", null, true);
        echo "\">

\t\t\t<div class=\"main-content-inner\">
\t\t\t\t
\t\t\t\t";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 20)) {
            // line 21
            echo "\t\t\t\t\t<div class=\"content-main\">
\t\t\t\t\t\t";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 25
        echo "
\t\t\t</div>

\t\t</div>

\t\t<!-- Sidebar Left -->
\t\t";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 31)) {
            // line 32
            echo "\t\t\t";
            $context["cl_left"] = "col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-xs-2";
            // line 33
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 33)) {
                // line 34
                echo "\t\t\t \t";
                $context["cl_left"] = "col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-xs-2";
                // line 35
                echo "\t\t\t";
            }
            echo " \t\t
\t\t\t
\t\t\t<div class=\"";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cl_left"] ?? null), 37, $this->source), "html", null, true);
            echo " sidebar sidebar-left\">
\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 43
        echo "\t\t<!-- End Sidebar Left -->

\t\t<!-- Sidebar Right -->
\t\t";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 46)) {
            // line 47
            echo "\t\t\t";
            $context["cl_right"] = "col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 order-xl-3 order-lg-3 order-md-3 order-sm-3 order-xs-3";
            // line 48
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 48)) {
                // line 49
                echo "\t\t\t\t";
                $context["cl_right"] = "col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 order-xl-3 order-lg-3 order-md-3 order-sm-3 order-xs-3";
                // line 50
                echo "\t\t\t";
            }
            echo "\t 

\t\t\t<div class=\"";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cl_right"] ?? null), 52, $this->source), "html", null, true);
            echo " sidebar sidebar-right theiaStickySidebar\">
\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 58
        echo "\t\t<!-- End Sidebar Right -->
\t\t
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@conbiz/page/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 58,  165 => 54,  160 => 52,  154 => 50,  151 => 49,  148 => 48,  145 => 47,  143 => 46,  138 => 43,  131 => 39,  126 => 37,  120 => 35,  117 => 34,  114 => 33,  111 => 32,  109 => 31,  101 => 25,  95 => 22,  92 => 21,  90 => 20,  83 => 16,  79 => 14,  73 => 13,  70 => 12,  68 => 11,  63 => 10,  60 => 9,  58 => 8,  53 => 7,  51 => 6,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"content-main-inner\">
\t<div class=\"row\">
\t\t
\t\t{% set cl_main = 'col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-xs-1 ' %}
\t\t{% if page.sidebar_right and page.sidebar_left %}\t
\t\t\t{% set cl_main = 'col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-xs-1 ' %}
\t\t{% elseif page.sidebar_right or page.sidebar_left %}\t
\t\t\t{% if page.sidebar_right %}
\t\t\t \t{% set cl_main = 'col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-xs-1 sb-r ' %}
\t\t\t{% endif %} \t\t
\t\t\t{% if page.sidebar_left %}
\t\t\t\t{% set cl_main = 'col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-xs-1 sb-l ' %}
\t\t\t{% endif %}\t\t\t\t
      {% endif %} 

\t\t<div id=\"page-main-content\" class=\"main-content {{ cl_main }}\">

\t\t\t<div class=\"main-content-inner\">
\t\t\t\t
\t\t\t\t{% if page.content %}
\t\t\t\t\t<div class=\"content-main\">
\t\t\t\t\t\t{{ page.content }}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t</div>

\t\t</div>

\t\t<!-- Sidebar Left -->
\t\t{% if page.sidebar_left %}
\t\t\t{% set cl_left = 'col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-xs-2' %}
\t\t\t{%\tif page.sidebar_right %}
\t\t\t \t{% set cl_left = 'col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-xs-2' %}
\t\t\t{% endif %} \t\t
\t\t\t
\t\t\t<div class=\"{{ cl_left }} sidebar sidebar-left\">
\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t{{ page.sidebar_left }}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t<!-- End Sidebar Left -->

\t\t<!-- Sidebar Right -->
\t\t{% if page.sidebar_right %}
\t\t\t{% set cl_right = 'col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 order-xl-3 order-lg-3 order-md-3 order-sm-3 order-xs-3'  %}
\t\t\t{% if page.sidebar_left %}
\t\t\t\t{% set cl_right = 'col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 order-xl-3 order-lg-3 order-md-3 order-sm-3 order-xs-3' %}
\t\t\t{% endif %}\t 

\t\t\t<div class=\"{{ cl_right }} sidebar sidebar-right theiaStickySidebar\">
\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t{{ page.sidebar_right }}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t<!-- End Sidebar Right -->
\t\t
\t</div>
</div>
", "@conbiz/page/main.html.twig", "C:\\xampp\\htdocs\\conbiz_demo\\themes\\custom\\conbiz\\templates\\page\\main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "if" => 5);
        static $filters = array("escape" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
