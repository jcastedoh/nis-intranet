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

<div id=\"main-wrapper\">
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
        echo "
  ";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "</div>

<footer class=\"footer\">
  ";
        // line 62
        $this->displayBlock('footer', $context, $blocks);
        // line 65
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

    // line 41
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "    <div id=\"main\">
      ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 43)) {
            // line 44
            echo "        <div class=\"main-content\">
          <a id=\"main-content\"></a>
          ";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "
        </div>
        <div class=\"sidebar\">
          <aside class=\"section\" role=\"complementary\">
            ";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "
          </aside>
        </div>
      ";
        } else {
            // line 54
            echo "        <a id=\"main-content\"></a>
        ";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 57
        echo "    </div>
  ";
    }

    // line 62
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
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
        return array (  201 => 63,  197 => 62,  192 => 57,  187 => 55,  184 => 54,  177 => 50,  170 => 46,  166 => 44,  164 => 43,  161 => 42,  157 => 41,  150 => 28,  147 => 27,  143 => 26,  136 => 19,  133 => 18,  129 => 17,  122 => 8,  116 => 4,  112 => 3,  107 => 65,  105 => 62,  100 => 59,  98 => 41,  95 => 40,  89 => 37,  86 => 36,  84 => 35,  79 => 32,  76 => 31,  73 => 26,  70 => 25,  67 => 23,  64 => 22,  61 => 17,  58 => 16,  53 => 13,  50 => 12,  46 => 3,  44 => 2,);
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
