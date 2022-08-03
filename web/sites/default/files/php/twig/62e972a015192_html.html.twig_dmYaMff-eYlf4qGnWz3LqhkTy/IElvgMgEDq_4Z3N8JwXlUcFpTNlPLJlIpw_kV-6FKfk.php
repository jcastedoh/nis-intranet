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

/* themes/custom/nis/templates/system/html.html.twig */
class __TwigTemplate_3f5d7d1a519c5093d300d37eb3f527ef15f39315ac2778d0242295f0aa150f8b extends \Twig\Template
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
        // line 48
        $context["body_classes"] = [0 => ((        // line 49
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 50
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 50, $this->source))))), 2 => ((        // line 51
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 51, $this->source)))) : ("")), 3 => ((        // line 52
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), 4 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 53
($context["theme"] ?? null), "settings", [], "any", false, false, true, 53), "navbar_position", [], "any", false, false, true, 53)) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 53), "navbar_position", [], "any", false, false, true, 53), 53, $this->source))) : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 54
($context["theme"] ?? null), "has_glyphicons", [], "any", false, false, true, 54)) ? ("has-glyphicons") : (""))];
        // line 57
        echo "<!DOCTYPE html>
<html ";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 58, $this->source), "html", null, true);
        echo ">
  <head>

    <!-- Preload Fonts -->
    <link rel=\"prefetch\" href=\"/modules/contrib/we_megamenu/assets/fonts/fontawesome/fontawesome-webfont.woff2?v=4.7.0\" as=\"font\" type=\"font/woff2\" crossorigin>
    <link rel=\"prefetch\" href=\"/modules/contrib/we_megamenu/assets/includes/bootstrap/fonts/glyphicons-halflings-regular.woff2\" as=\"font\" type=\"font/woff2\" crossorigin>
    <link rel=\"prefetch\" href=\"/modules/contrib/we_megamenu/assets/fonts/fontquicksand/quicksand-v6-latin-700.woff2\" as=\"font\" type=\"font/woff2\" crossorigin>
    <link rel=\"stylesheet\" href=\"https://use.typekit.net/pzv5qjy.css\">
    <!-- Preload CSS -->
    <link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/css/line-awesome.min.css\">

    <!-- Preload JS -->

    <!-- Main Meta -->
    <title>";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 72, $this->source), " | "));
        echo "</title>
    <head-placeholder token=\"";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 73, $this->source));
        echo "\">

    <!-- Main CSS -->
    <css-placeholder token=\"";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 76, $this->source));
        echo "\">

    <!-- Apple Icons -->
    <link rel=\"shortcut icon\" href=\"/themes/custom/nis/assets/icons/favicon.ico\">
    <link rel=\"shortcut icon\" href=\"/themes/custom/nis/assets/icons/favicon.ico\" type=\"image/vnd.microsoft.icon\">
    <link rel=\"apple-touch-icon\" type=\"image/png\" sizes=\"57x57\" href=\"/themes/custom/nis/assets/icons/apple-icon-57x57.png\">
    <link rel=\"apple-touch-icon\" type=\"image/png\" sizes=\"60x60\" href=\"/themes/custom/nis/assets/icons/apple-icon-60x60.png\">
    <link rel=\"apple-touch-icon\" type=\"image/png\" sizes=\"72x72\" href=\"/themes/custom/nis/assets/icons/apple-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" type=\"image/png\" sizes=\"76x76\" href=\"/themes/custom/nis/assets/icons/apple-icon-76x76.png\">
    <link rel=\"apple-touch-icon\" type=\"image/png\" sizes=\"114x114\" href=\"/themes/custom/nis/assets/icons/apple-icon-114x114.png\">
    <link rel=\"apple-touch-icon\" type=\"image/png\" sizes=\"120x120\" href=\"/themes/custom/nis/assets/icons/apple-icon-120x120.png\">
    <link rel=\"apple-touch-icon\" type=\"image/png\" sizes=\"144x144\" href=\"/themes/custom/nis/assets/icons/apple-icon-144x144.png\">
    <link rel=\"apple-touch-icon\" type=\"image/png\" sizes=\"152x152\" href=\"/themes/custom/nis/assets/icons/apple-icon-152x152.png\">
    <link rel=\"apple-touch-icon\" type=\"image/png\" sizes=\"180x180\" href=\"/themes/custom/nis/assets/icons/apple-icon-180x180.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"36x36\" href=\"/themes/custom/nis/assets/icons/android-icon-36x36.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"48x48\" href=\"/themes/custom/nis/assets/icons/android-icon-48x48.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"72x72\" href=\"/themes/custom/nis/assets/icons/android-icon-72x72.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"/themes/custom/nis/assets/icons/android-icon-96x96.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"144x144\" href=\"/themes/custom/nis/assets/icons/android-icon-144x144.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"/themes/custom/nis/assets/icons/android-icon-192x192.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/themes/custom/nis/assets/icons/favicon-16x16.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/themes/custom/nis/assets/icons/favicon-32x32.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"/themes/custom/nis/assets/icons/favicon-96x96.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/themes/custom/nis/assets/icons/ms-icon-70x70.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/themes/custom/nis/assets/icons/ms-icon-144x144.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"/themes/custom/nis/assets/icons/ms-icon-150x150.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"/themes/custom/nis/assets/icons/ms-icon-310x310.png\">
    <link rel=\"manifest\" href=\"/themes/custom/nis/assets/icons/manifest.json\">
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
    <meta name=\"msapplication-TileImage\" content=\"/themes/custom/nis/assets/icons/ms-icon-144x144.png\">
    <meta name=\"theme-color\" content=\"#ffffff\">

    <!-- WebManifest -->
    <link rel=\"manifest\" href=\"/manifest.webmanifest\" crossorigin=\"use-credentials\">
  </head>
  <body";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 111), 111, $this->source), "html", null, true);
        echo ">
  <script>0</script>
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 114
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 116
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 116, $this->source), "html", null, true);
        echo "
    ";
        // line 117
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 117, $this->source), "html", null, true);
        echo "
    ";
        // line 118
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 118, $this->source), "html", null, true);
        echo "
    <js-placeholder token=\"";
        // line 119
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 119, $this->source));
        echo "\">
    <js-bottom-placeholder token=\"";
        // line 120
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 120, $this->source));
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/nis/templates/system/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 120,  138 => 119,  134 => 118,  130 => 117,  126 => 116,  121 => 114,  115 => 111,  77 => 76,  71 => 73,  67 => 72,  50 => 58,  47 => 57,  45 => 54,  44 => 53,  43 => 52,  42 => 51,  41 => 50,  40 => 49,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/nis/templates/system/html.html.twig", "/var/www/html/web/themes/custom/nis/templates/system/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 48);
        static $filters = array("clean_class" => 50, "escape" => 58, "safe_join" => 72, "raw" => 73, "t" => 114);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'safe_join', 'raw', 't'],
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
