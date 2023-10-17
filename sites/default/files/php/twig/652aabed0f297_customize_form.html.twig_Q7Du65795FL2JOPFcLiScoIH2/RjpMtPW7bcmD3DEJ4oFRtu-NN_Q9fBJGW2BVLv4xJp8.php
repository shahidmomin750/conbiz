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

/* themes/custom/conbiz/customize/customize_form.html.twig */
class __TwigTemplate_8e27576b7fd4aae75a74bfd64d943d59 extends Template
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
        echo "<div id=\"gavias_customize_form\" class=\"gavias_customize_form\">
  
\t<div class=\"form-group action\">
\t\t<input type=\"button\" id=\"gavias_customize_save\" class=\"btn form-submit\" value=\"Save\" />
\t\t<input type=\"button\" id=\"gavias_customize_preview\" class=\"btn form-submit\" value=\"Preview\" />
\t\t<input type=\"button\" id=\"gavias_customize_reset\" class=\"btn form-submit\" value=\"Reset\" />
\t\t<input type=\"hidden\" id=\"gva_theme_name\" name=\"theme_name\" value=\"conbiz\" />
\t</div>   

\t<div class=\"clearfix\"></div>
\t<div id=\"customize-gavias-preivew\">
\t\t<div id=\"customize-accordion\">   
\t\t  
\t\t\t<!-- Typo -->
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t  <a class=\"card-link\" data-toggle=\"collapse\" href=\"#customize-typo\">
\t\t\t\t\t Colors & Fonts
\t\t\t\t  </a>
\t\t\t\t</div>
\t\t\t\t<div id=\"customize-typo\" class=\"collapse show\" data-parent=\"#customize-accordion\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Color Theme</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"theme_color\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Color Theme Second</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"theme_color_second\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Font Primary</label>
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t <select name=\"font_family_primary\" class=\"form-select form-control customize-option\">
\t\t\t\t\t\t\t\t\t\t";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["fonts"] ?? null), 51, $this->source));
        echo "
\t\t\t\t\t\t\t\t\t </select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"fw\">Font Second (Heading h1, h2, h3...)</label>
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t <select name=\"font_family_second\" class=\"form-select form-control customize-option\">
\t\t\t\t\t\t\t\t\t\t";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["fonts"] ?? null), 62, $this->source));
        echo "
\t\t\t\t\t\t\t\t\t </select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Body Font Weight</label>
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t <select name=\"font_body_weight\" class=\"form-control customize-option\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">-- Default --</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"300\">300</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"400\">400</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"500\">500</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"600\">600</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"700\">700</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"800\">800</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"900\">900</option>
\t\t\t\t\t\t\t\t\t </select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Body Font Size</label>
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t <select name=\"font_body_size\" class=\"form-control customize-option\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">-- Default --</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"12px\">12px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"13px\">13px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"14px\">14px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"15px\">15px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"16px\">16px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"17px\">17px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"18px\">18px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"19px\">19px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"20px\">20px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"21px\">21px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"22px\">22px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"23px\">23px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"24px\">24px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"25px\">25px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"26px\">26px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"27px\">27px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"28px\">28px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"29px\">29px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"30px\">30px</option>
\t\t\t\t\t\t\t\t\t </select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> 
\t\t\t</div> 

\t\t\t<!-- General -->
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t  <a class=\"card-link\" data-toggle=\"collapse\" href=\"#customize-general\">
\t\t\t\t\t General
\t\t\t\t  </a>
\t\t\t\t</div>
\t\t\t\t<div id=\"customize-general\" class=\"collapse\" data-parent=\"#customize-accordion\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Text color</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"body_color\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Link color</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"body_link_color\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Link hover color</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"body_link_color_hover\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> 
\t\t\t</div> 

\t\t\t<!-- Topbar -->
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t  <a class=\"card-link\" data-toggle=\"collapse\" href=\"#customize-topbar\">
\t\t\t\t\t Topbar
\t\t\t\t  </a>
\t\t\t\t</div>
\t\t\t\t <div id=\"customize-topbar\" class=\"collapse\" data-parent=\"#customize-accordion\">
\t\t\t\t\t <div class=\"card-body\">
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Background</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"topbar_bg\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Topbar Color</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"topbar_color\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Topbar Color Link</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"topbar_color_link\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Topbar Color Hover</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"topbar_color_link_hover\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> 
\t\t\t</div>

\t\t\t<!-- Main menu -->
\t\t\t <div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t  <a role=\"button\" data-toggle=\"collapse\" href=\"#customize-mainmenu\">
\t\t\t\t\t Main Menu
\t\t\t\t  </a>
\t\t\t\t</div>
\t\t\t\t<div id=\"customize-mainmenu\" class=\"collapse\" data-parent=\"#customize-accordion\">
\t\t\t\t\t <div class=\"card-body\">
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Menu | Color Link</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"menu_link_color\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Menu | Color Hover</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"menu_link_color_hover\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Sub Menu | Background</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"submenu_bg_color\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Sub Menu | Color</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"submenu_color\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Sub Menu | Color Link</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"submenu_link_color\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Sub Menu | Color Hover</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"submenu_link_color_hover\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> 
\t\t\t</div>

\t\t\t<!-- Footer -->
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t  <a class=\"card-link\" data-toggle=\"collapse\"  href=\"#customize-footer\">
\t\t\t\t\t\t Footer
\t\t\t\t\t  </a>
\t\t\t\t</div>
\t\t\t\t<div id=\"customize-footer\" class=\"collapse\" data-parent=\"#customize-accordion\">
\t\t\t\t\t <div class=\"card-body\">
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Background</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"footer_bg\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Text color</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"footer_color\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Color Link</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"footer_link_color\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Color Hover</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"footer_link_color_hover\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div> 
\t\t\t</div>

\t\t</div>    
\t</div>   
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/conbiz/customize/customize_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 62,  91 => 51,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"gavias_customize_form\" class=\"gavias_customize_form\">
  
\t<div class=\"form-group action\">
\t\t<input type=\"button\" id=\"gavias_customize_save\" class=\"btn form-submit\" value=\"Save\" />
\t\t<input type=\"button\" id=\"gavias_customize_preview\" class=\"btn form-submit\" value=\"Preview\" />
\t\t<input type=\"button\" id=\"gavias_customize_reset\" class=\"btn form-submit\" value=\"Reset\" />
\t\t<input type=\"hidden\" id=\"gva_theme_name\" name=\"theme_name\" value=\"conbiz\" />
\t</div>   

\t<div class=\"clearfix\"></div>
\t<div id=\"customize-gavias-preivew\">
\t\t<div id=\"customize-accordion\">   
\t\t  
\t\t\t<!-- Typo -->
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t  <a class=\"card-link\" data-toggle=\"collapse\" href=\"#customize-typo\">
\t\t\t\t\t Colors & Fonts
\t\t\t\t  </a>
\t\t\t\t</div>
\t\t\t\t<div id=\"customize-typo\" class=\"collapse show\" data-parent=\"#customize-accordion\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Color Theme</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"theme_color\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Color Theme Second</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"theme_color_second\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Font Primary</label>
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t <select name=\"font_family_primary\" class=\"form-select form-control customize-option\">
\t\t\t\t\t\t\t\t\t\t{{fonts|raw}}
\t\t\t\t\t\t\t\t\t </select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"fw\">Font Second (Heading h1, h2, h3...)</label>
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t <select name=\"font_family_second\" class=\"form-select form-control customize-option\">
\t\t\t\t\t\t\t\t\t\t{{fonts|raw}}
\t\t\t\t\t\t\t\t\t </select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Body Font Weight</label>
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t <select name=\"font_body_weight\" class=\"form-control customize-option\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">-- Default --</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"300\">300</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"400\">400</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"500\">500</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"600\">600</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"700\">700</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"800\">800</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"900\">900</option>
\t\t\t\t\t\t\t\t\t </select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Body Font Size</label>
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t <select name=\"font_body_size\" class=\"form-control customize-option\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">-- Default --</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"12px\">12px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"13px\">13px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"14px\">14px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"15px\">15px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"16px\">16px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"17px\">17px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"18px\">18px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"19px\">19px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"20px\">20px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"21px\">21px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"22px\">22px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"23px\">23px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"24px\">24px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"25px\">25px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"26px\">26px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"27px\">27px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"28px\">28px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"29px\">29px</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"30px\">30px</option>
\t\t\t\t\t\t\t\t\t </select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> 
\t\t\t</div> 

\t\t\t<!-- General -->
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t  <a class=\"card-link\" data-toggle=\"collapse\" href=\"#customize-general\">
\t\t\t\t\t General
\t\t\t\t  </a>
\t\t\t\t</div>
\t\t\t\t<div id=\"customize-general\" class=\"collapse\" data-parent=\"#customize-accordion\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Text color</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"body_color\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Link color</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"body_link_color\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Link hover color</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"body_link_color_hover\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> 
\t\t\t</div> 

\t\t\t<!-- Topbar -->
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t  <a class=\"card-link\" data-toggle=\"collapse\" href=\"#customize-topbar\">
\t\t\t\t\t Topbar
\t\t\t\t  </a>
\t\t\t\t</div>
\t\t\t\t <div id=\"customize-topbar\" class=\"collapse\" data-parent=\"#customize-accordion\">
\t\t\t\t\t <div class=\"card-body\">
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Background</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"topbar_bg\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Topbar Color</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"topbar_color\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Topbar Color Link</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"topbar_color_link\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Topbar Color Hover</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"topbar_color_link_hover\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> 
\t\t\t</div>

\t\t\t<!-- Main menu -->
\t\t\t <div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t  <a role=\"button\" data-toggle=\"collapse\" href=\"#customize-mainmenu\">
\t\t\t\t\t Main Menu
\t\t\t\t  </a>
\t\t\t\t</div>
\t\t\t\t<div id=\"customize-mainmenu\" class=\"collapse\" data-parent=\"#customize-accordion\">
\t\t\t\t\t <div class=\"card-body\">
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Menu | Color Link</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"menu_link_color\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Menu | Color Hover</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"menu_link_color_hover\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Sub Menu | Background</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"submenu_bg_color\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Sub Menu | Color</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"submenu_color\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Sub Menu | Color Link</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"submenu_link_color\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Sub Menu | Color Hover</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"submenu_link_color_hover\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> 
\t\t\t</div>

\t\t\t<!-- Footer -->
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t  <a class=\"card-link\" data-toggle=\"collapse\"  href=\"#customize-footer\">
\t\t\t\t\t\t Footer
\t\t\t\t\t  </a>
\t\t\t\t</div>
\t\t\t\t<div id=\"customize-footer\" class=\"collapse\" data-parent=\"#customize-accordion\">
\t\t\t\t\t <div class=\"card-body\">
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Background</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"footer_bg\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Text color</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"footer_color\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Color Link</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"footer_link_color\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Color Hover</label>
\t\t\t\t\t\t\t\t<div class=\"input-group colorselector\">
\t\t\t\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"footer_link_color_hover\" class=\"form-control customize-option\" />
\t\t\t\t\t\t\t\t\t <span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t <span class=\"remove\">x</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div> 
\t\t\t</div>

\t\t</div>    
\t</div>   
</div>
", "themes/custom/conbiz/customize/customize_form.html.twig", "C:\\xampp\\htdocs\\conbiz_demo\\themes\\custom\\conbiz\\customize\\customize_form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("raw" => 51);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['raw'],
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
