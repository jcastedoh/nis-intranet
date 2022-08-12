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

/* themes/custom/nis/templates/layouts/node--staff_profile.html.twig */
class __TwigTemplate_98db22da9ff905a6bc9f5480c3b1ad41416b955f4adf2caa74f462f0637bb03b extends \Twig\Template
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
        echo "<div class=\"profile\">
  <div class=\"left-profile\">
    ";
        // line 3
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_profile_image", [], "any", false, false, true, 3), "entity", [], "any", false, false, true, 3), "uri", [], "any", false, false, true, 3), "value", [], "any", false, false, true, 3))) {
            // line 4
            echo "      <div class=\"picture\">
        ";
            // line 5
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalImage($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_profile_image", [], "any", false, false, true, 5), "entity", [], "any", false, false, true, 5), "uri", [], "any", false, false, true, 5), "value", [], "any", false, false, true, 5), 5, $this->source)), "html", null, true);
            echo "
      </div>
    ";
        } else {
            // line 8
            echo "      <div class=\"picture\">
        <img src=\"/modules/custom/nis_features/assets/images/profile.png\">
      </div>
    ";
        }
        // line 12
        echo "
    <div class=\"job-title\">
      <p>";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_job_title", [], "any", false, false, true, 14), "value", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "</p>
    </div>

    <h5>Contact Information</h5>
    <div class=\"emails\">
      <p><b>Email(s):</b></p>
      <ul>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_email_s_", [], "any", false, false, true, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "          <li><a href=\"mailto:";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "      </ul>
    </div>

    <div class=\"phones\">
      <p><b>Phone(s):</b></p>
      <ul>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_phone_number_s_", [], "any", false, false, true, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            echo "          <li><a href=\"tel:";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "      </ul>
    </div>

    <h5>Other information:</h5>
    <div class=\"backup\">
      <p><b>Backup(s):</b></p>
      <ul>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_name_s_of_your_backup_s_", [], "any", false, false, true, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 41
            echo "          <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 41), "path", [], "any", false, false, true, 41), "value", [], "any", false, false, true, 41), 0, [], "any", false, false, true, 41), "alias", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 41), "title", [], "any", false, false, true, 41), "value", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "      </ul>
    </div>

    <div class=\"years-it\">
      <p><b>Years of IT experience:</b></p>
      ";
        // line 48
        $context["value"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_years_of_it_experience", [], "any", false, false, true, 48), "value", [], "any", false, false, true, 48);
        // line 49
        echo "      ";
        if ((($context["value"] ?? null) == "1")) {
            // line 50
            echo "        <p>1 - 3 Years</p>
      ";
        } elseif ((        // line 51
($context["value"] ?? null) == "2")) {
            // line 52
            echo "        <p>4 - 6 Years</p>
      ";
        } elseif ((        // line 53
($context["value"] ?? null) == "3")) {
            // line 54
            echo "        <p>7 - 10 Years</p>
      ";
        } elseif ((        // line 55
($context["value"] ?? null) == "4")) {
            // line 56
            echo "        <p>11 - 14 Years</p>
      ";
        } elseif ((        // line 57
($context["value"] ?? null) == "5")) {
            // line 58
            echo "        <p>15+ Years</p>
      ";
        } else {
            // line 60
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(" ");
            echo "
      ";
        }
        // line 62
        echo "    </div>

    <div class=\"task-orders\">
      <p><b>Task Orders:</b></p>
      <ul>
        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_task_order_s_", [], "any", false, false, true, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 68
            echo "          <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 68), "path", [], "any", false, false, true, 68), "value", [], "any", false, false, true, 68), 0, [], "any", false, false, true, 68), "alias", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 68), "title", [], "any", false, false, true, 68), "value", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "      </ul>
    </div>

  </div>
  <div class=\"right-profile\">

    <h4>Duties and Responsibilities:</h4>
    <div class=\"responsibilities\">
      <p>";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_description_of_duties_resp", [], "any", false, false, true, 78), "value", [], "any", false, false, true, 78), 78, $this->source));
        echo "</p>
    </div>

    <h4>Bio:</h4>
    <div class=\"body\">
      <p>";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "body", [], "any", false, false, true, 83), "value", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
        echo "</p>
    </div>

    <h4>Education:</h4>
    <div class=\"education\">
      ";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_education", [], "any", false, false, true, 88), "value", [], "any", false, false, true, 88), 88, $this->source));
        echo "
    </div>

    <h4>Certifications:</h4>
    <div class=\"certifications\">
      ";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_certifications_training_pl", [], "any", false, false, true, 93), "value", [], "any", false, false, true, 93), 93, $this->source));
        echo "
    </div>

    <h4>Skills and Experience:</h4>
    <div class=\"skills\">
      <ul>
        ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_skills", [], "any", false, false, true, 99));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 100
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("paragraph", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "target_id", [], "any", false, false, true, 100), 100, $this->source)), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "      </ul>
    </div>

    <h4>Other Skills and Experience:</h4>
    <div class=\"other-skills\">
      ";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_please_list_any_additional", [], "any", false, false, true, 107), "value", [], "any", false, false, true, 107), 107, $this->source));
        echo "
    </div>

    <h4>Learn Other Skills and Experience:</h4>
    <div class=\"train-other-skills\">
      ";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_please_list_any_skills_tec", [], "any", false, false, true, 112), "value", [], "any", false, false, true, 112), 112, $this->source));
        echo "
    </div>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/nis/templates/layouts/node--staff_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 112,  263 => 107,  256 => 102,  247 => 100,  243 => 99,  234 => 93,  226 => 88,  218 => 83,  210 => 78,  200 => 70,  189 => 68,  185 => 67,  178 => 62,  172 => 60,  168 => 58,  166 => 57,  163 => 56,  161 => 55,  158 => 54,  156 => 53,  153 => 52,  151 => 51,  148 => 50,  145 => 49,  143 => 48,  136 => 43,  125 => 41,  121 => 40,  112 => 33,  101 => 31,  97 => 30,  89 => 24,  78 => 22,  74 => 21,  64 => 14,  60 => 12,  54 => 8,  48 => 5,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/nis/templates/layouts/node--staff_profile.html.twig", "/var/www/html/web/themes/custom/nis/templates/layouts/node--staff_profile.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "for" => 21, "set" => 48);
        static $filters = array("escape" => 5, "raw" => 78);
        static $functions = array("drupal_image" => 5, "drupal_entity" => 100);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'raw'],
                ['drupal_image', 'drupal_entity']
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
