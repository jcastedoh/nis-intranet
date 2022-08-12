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

/* themes/custom/nis/templates/system/page.html.twig */
class __TwigTemplate_ee70b6f673c19466677cc4b9c37b6aa0edf8722ef64ae2db971f33f8134c0de8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'custom_search' => [$this, 'block_custom_search'],
            'pre_header' => [$this, 'block_pre_header'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'pre_footer' => [$this, 'block_pre_footer'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "custom_search", [], "any", false, false, true, 2)) {
            // line 3
            echo "  ";
            $this->displayBlock('custom_search', $context, $blocks);
        }
        // line 12
        echo "
<header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">

  ";
        // line 16
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header", [], "any", false, false, true, 16)) {
            // line 17
            echo "    ";
            $this->displayBlock('pre_header', $context, $blocks);
            // line 22
            echo "  ";
        }
        // line 23
        echo "
  ";
        // line 25
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 25)) {
            // line 26
            echo "    ";
            $this->displayBlock('header', $context, $blocks);
            // line 31
            echo "  ";
        }
        // line 32
        echo "</header>

<div id=\"main-hero\">
  ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 35)) {
            // line 36
            echo "    <div class=\"hero\">
      ";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 40
        echo "</div>

<div id=\"main-wrapper\">
  ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "</div>

<div class=\"clear\"></div>

<div class=\"pre-footer\">
  ";
        // line 66
        $this->displayBlock('pre_footer', $context, $blocks);
        // line 69
        echo "</div>

<footer class=\"footer\">
  ";
        // line 72
        $this->displayBlock('footer', $context, $blocks);
        // line 75
        echo "</footer>
";
    }

    // line 3
    public function block_custom_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"main-search-wrapper\">
      <a href=\"#\" class=\"close-search\">
        <i class=\"fa fa-times\"></i>
      </a>
      ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "custom_search", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "
    </div>
  ";
    }

    // line 17
    public function block_pre_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "      <div class=\"pre-header\">
        ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "
      </div>
    ";
    }

    // line 26
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "      <div class=\"main-header\">
        ";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "
      </div>
    ";
    }

    // line 43
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "    <div id=\"main\">
      ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 45)) {
            // line 46
            echo "        <div class=\"main-content with-sidebar\">
          <a id=\"main-content\"></a>
          ";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "
        </div>
        <div class=\"sidebar\">
          <aside class=\"section\" role=\"complementary\">
            ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "
          </aside>
        </div>
      ";
        } else {
            // line 56
            echo "        <a id=\"main-content\"></a>
        ";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 59
        echo "    </div>
  ";
    }

    // line 66
    public function block_pre_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_footer", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "
  ";
    }

    // line 72
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/nis/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 73,  220 => 72,  213 => 67,  209 => 66,  204 => 59,  199 => 57,  196 => 56,  189 => 52,  182 => 48,  178 => 46,  176 => 45,  173 => 44,  169 => 43,  162 => 28,  159 => 27,  155 => 26,  148 => 19,  145 => 18,  141 => 17,  134 => 8,  128 => 4,  124 => 3,  119 => 75,  117 => 72,  112 => 69,  110 => 66,  103 => 61,  101 => 43,  96 => 40,  90 => 37,  87 => 36,  85 => 35,  80 => 32,  77 => 31,  74 => 26,  71 => 25,  68 => 23,  65 => 22,  62 => 17,  59 => 16,  54 => 13,  51 => 12,  47 => 3,  45 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/nis/templates/system/page.html.twig", "/var/www/html/web/themes/custom/nis/templates/system/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "block" => 3);
        static $filters = array("t" => 13, "escape" => 37);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['t', 'escape'],
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
