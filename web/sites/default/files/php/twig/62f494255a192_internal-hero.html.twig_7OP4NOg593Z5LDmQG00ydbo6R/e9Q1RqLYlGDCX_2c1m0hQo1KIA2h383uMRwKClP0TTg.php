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

/* modules/custom/nis_features/templates/internal-hero.html.twig */
class __TwigTemplate_8d79bc9ede8a77c39b3bb53cd897814795795bec478bc30cae5cc6d9327fa9f3 extends \Twig\Template
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
        $context["title"] = "";
        // line 2
        $context["intro_text"] = "";
        // line 3
        $context["header_image"] = "";
        // line 4
        $context["feature_image"] = "";
        // line 5
        $context["feature_image_title"] = "";
        // line 6
        $context["hero_bottom_class"] = "";
        // line 7
        echo "
";
        // line 8
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "title", [], "any", false, false, true, 8))) {
            // line 9
            echo "  ";
            $context["title"] = twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "title", [], "any", false, false, true, 9);
        }
        // line 11
        echo "
";
        // line 12
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "intro_text", [], "any", false, false, true, 12))) {
            // line 13
            echo "  ";
            $context["intro_text"] = twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "intro_text", [], "any", false, false, true, 13);
        }
        // line 15
        echo "
";
        // line 16
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "header_image", [], "any", false, false, true, 16))) {
            // line 17
            echo "  ";
            $context["header_image"] = twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "header_image", [], "any", false, false, true, 17);
        }
        // line 19
        echo "
";
        // line 20
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "feature_image", [], "any", false, false, true, 20))) {
            // line 21
            echo "  ";
            $context["feature_image"] = twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "feature_image", [], "any", false, false, true, 21);
        }
        // line 23
        echo "
";
        // line 24
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "feature_image_title", [], "any", false, false, true, 24))) {
            // line 25
            echo "  ";
            $context["feature_image_title"] = twig_get_attribute($this->env, $this->source, ($context["hero"] ?? null), "feature_image_title", [], "any", false, false, true, 25);
        }
        // line 27
        echo "
";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\devel\Twig\Extension\Debug']->kint($this->env, $context, [0 => $this->sandbox->ensureToStringAllowed(($context["hero"] ?? null), 28, $this->source)]));
        echo "


<div class=\"internal-hero-wrapper\">
  <div class=\"hero-light\"></div>

  <div class=\"hero-top-part\" style='";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["header_image"] ?? null), "background", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "'>
    <h1 class=\"internal-hero-title\">";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 35, $this->source), "html", null, true);
        echo "</h1>
  </div>

  <div class=\"hero-bottom-part\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-8 text-wrapper\">
          ";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["intro_text"] ?? null), 42, $this->source));
        echo "
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/nis_features/templates/internal-hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 42,  112 => 35,  108 => 34,  99 => 28,  96 => 27,  92 => 25,  90 => 24,  87 => 23,  83 => 21,  81 => 20,  78 => 19,  74 => 17,  72 => 16,  69 => 15,  65 => 13,  63 => 12,  60 => 11,  56 => 9,  54 => 8,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/nis_features/templates/internal-hero.html.twig", "/var/www/html/web/modules/custom/nis_features/templates/internal-hero.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 8);
        static $filters = array("escape" => 34, "raw" => 42);
        static $functions = array("kint" => 28);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'raw'],
                ['kint']
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
