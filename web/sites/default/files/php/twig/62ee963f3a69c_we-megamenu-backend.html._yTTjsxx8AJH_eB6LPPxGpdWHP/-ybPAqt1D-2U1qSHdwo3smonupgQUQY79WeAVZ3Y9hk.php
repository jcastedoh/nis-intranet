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

/* modules/contrib/we_megamenu/templates/we-megamenu-backend.html.twig */
class __TwigTemplate_1a2dfe0fcf1496fcc029bb9b29e529eca1070b133e140c7ad83c23900f28dce1 extends \Twig\Template
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
        echo "
<div class=\"we-mega-menu\">
  <button class=\"ico-toolbar ico-toolbar-horizontal\" type=\"button\" value=\"horizontal\" title=\"Horizontal orientation\">Horizontal orientation</button>
  <div class=\"we-mega-menu we-mega-menu-toolbar\">
    <div class=\"we-mega-menu-bar we-mega-menu-config\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <h2>WeMegaMenu Toolbar</h2>
          <p>This toolbar includes all settings of Drupal 8 Mega Menu, just select menu then configure. There are many many level of configuration: submenu setting, column setting and menu item setting.</p>
        </div>
        <div class=\"col-md-12\">
          <div class=\"form-group\">
            <label>Style</label>
            <select class=\"form-control we-mega-menu-cbx-style\">
              <option value=\"Default\">Default</option>
              <option value=\"Blue\">Blue</option>
              <option value=\"Red\">Red</option>
              <option value=\"Yellow\">Yellow</option>
              <option value=\"Green\">Green</option>
              <option value=\"White\">White</option>
            </select>
          </div>

          <div class=\"form-group\">
            <label>Animation</label>
            <select class=\"form-control we-mega-menu-cbx-animation\">
              <option value=\"None\" selected=\"selected\">None</option>
              <option value=\"Fading\">Fading</option>
              <option value=\"Slide\">Slide</option>
              <option value=\"Zoom\">Zoom</option>
              <option value=\"Elastic\">Elastic</option>
            </select>
          </div>

          <div class=\"form-group we-mega-menu-action\" style=\"display: none;\">
            <label>Action</label>
            <select class=\"form-control we-mega-menu-cbx-action\">
              <option value=\"hover\" selected=\"selected\">Hover</option>
              <option value=\"clicked\">Clicked</option>
            </select>
          </div>

          <!-- <div class=\"form-group we-mega-menu-delay\">
            <label>Delay (ms)</label>
            <input type=\"text\" class=\"form-control we-mega-menu-txt-delay\" placeholder=\"Delay\">
          </div>

          <div class=\"form-group we-mega-menu-duration\">
            <label>Duration (ms)</label>
            <input type=\"text\" class=\"form-control we-mega-menu-txt-duration\" placeholder=\"Duration\">
          </div> -->
          <div class=\"clearfix\">
            <div class=\"form-group form-fix-width\">
              <label>Auto arrow</label>
              <label class=\"switch\">
                <input type=\"checkbox\" class=\"we-mega-menu we-mega-menu-chx-auto-arrow\" name=\"submenu\">
                <div class=\"slider\"></div>
              </label>
            </div>

            
            <div class=\"form-group form-fix-width\">
              <label>Show submenu</label>
              <label class=\"switch\">
                <input type=\"checkbox\" class=\"we-mega-menu we-mega-menu-chx-alway-show-submenu\" name=\"submenu\">
                <div class=\"slider\"></div>
              </label>
            </div>

            <div class=\"form-group form-fix-width\">
              <!-- Rectangular switch -->
              <label>Mobile collapse</label>
              <label class=\"switch\">
                <input type=\"checkbox\" class=\"we-mega-menu we-mega-menu-chx-mobile-collapse\" name=\"mobile-collapse\">
                <div class=\"slider\"></div>
              </label>
            </div>
          </div>
          
        </div>
        
      </div>  
    </div>

    <div class=\"we-mega-menu-bar we-mega-menu-item-config\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <h2>Menu Item Configuration</h2>
          <p>This allows you to configure each link you added in the Drupal core menu. You can: add block, have it styled by adding extra class, set icon (Bootstrap icons) and add description.</p>
        </div>
        <div class=\"col-md-12\">
          <div class=\"clearfix\">
            <div class=\"form-group form-fix-width submenu-wrapper\">
              <!-- Rectangular switch -->
              <label>Submenu</label>
              <label class=\"switch\">
                <input type=\"checkbox\" class=\"we-mega-menu we-mega-menu-btn-submenu\" name=\"we-mega-menu-btn-submenu\">
                <div class=\"slider\"></div>
              </label>
            </div>

            <div class=\"form-group form-fix-width group-menu-wrapper\">
              <!-- Rounded switch -->
              <label>Group</label>
              <label class=\"switch\">
                <input type=\"checkbox\" class=\"we-mega-menu-chx-group\">
                <div class=\"slider\"></div>
              </label>
            </div>

            <div class=\"form-group form-fix-width\">
              <label>Break column</label>
              <div class=\"align-inner align-break-column\">
                <button type=\"button\" class=\"btn btn-default we-mega-menu-btn-break-col\" value=\"left\">&lt;</button>
                <button type=\"button\" class=\"btn btn-default we-mega-menu-btn-break-col\" value=\"right\">&gt;</button>
              </div>
            </div>
          </div>

          <div class=\"form-group\">
            <label>Extra class</label>
            <input type=\"text\" class=\"form-control we-mega-menu-txt-extra-class\" placeholder=\"Extra class\">
          </div>

          <div class=\"form-group\">
            <label>Icon <a class=\"btn-get-icon\" target=\"_blank\" href=\"http://fontawesome.io/icons\">Get icon</a></label>
            <input type=\"text\" class=\"form-control we-mega-menu-txt-icon\" placeholder=\"Icon\">
          </div>

          <div class=\"form-group\">
            <label>Item caption</label>
            <input type=\"text\" class=\"form-control we-mega-menu-txt-caption\" placeholder=\"Item caption\">
          </div>

          <div class=\"form-group\">
            <label>Target</label>
            <select class=\"form-control we-mega-menu-cbx-target\">
              <option value=\"_self\" selected=\"selected\">_self</option>
              <option value=\"_blank\">_blank</option>
              <option value=\"_parent\">_parent</option>
              <option value=\"_top\">_top</option>
            </select>
          </div>
        </div>
        
      </div>  
    </div>



    <div class=\"we-mega-menu-bar we-mega-menu-submenu-config\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <h2>Submenu Configuration</h2>
          <p>Contains all the level 2+ items. Allows you to: add and remove row, set the submenu’s position, have it styled, edit its width...</p>
        </div>


        <div class=\"col-md-12\">
          <div class=\"clearfix\">
            <div class=\"form-group form-fix-width\">
              <label>Add row</label>
              <button type=\"button\" class=\"btn btn-default we-mega-menu-btn-add-row\">+</button>
            </div>

            <div class=\"form-group form-fix-width\">
              <!-- Rectangular switch -->
              <label>Hide when collapse</label>
              <label class=\"switch\">
                <input type=\"checkbox\" class=\"we-mega-menu hide-sub-when-collapse\" name=\"hide-sub-when-collapse\">
                <div class=\"slider\"></div>
              </label>
            </div>
          </div>

          <div class=\"form-group btn-group\">
            <label>Submenu width (px)</label>
            <input type=\"text\" class=\"form-control we-mega-menu-txt-sub-menu-width\" placeholder=\"Submenu width (px)\">
          </div>

          <div class=\"form-group btn-group we-mega-menu-align-btn-group\">
            <label>Alignment</label>
            <div class=\"align-inner\">
              <button type=\"button\" class=\"btn btn-default we-mega-menu-btn-align-left\" aria-label=\"Left Align\" data-value=\"left\">
                <span class=\"glyphicon glyphicon-align-left\" aria-hidden=\"true\"></span>
              </button>

              <button type=\"button\" class=\"btn btn-default we-mega-menu-btn-align-center\" aria-label=\"Center Align\" data-value=\"center\">
                <span class=\"glyphicon glyphicon-align-center\" aria-hidden=\"true\"></span>
              </button>

              <button type=\"button\" class=\"btn btn-default we-mega-menu-btn-align-right\" aria-label=\"Right Align\" data-value=\"right\">
                <span class=\"glyphicon glyphicon-align-right\" aria-hidden=\"true\"></span>
              </button>

              <button type=\"button\" class=\"btn btn-default we-mega-menu-btn-align-justify\" aria-label=\"Justify\" data-value=\"justify\">
                <span class=\"glyphicon glyphicon-align-justify\" aria-hidden=\"true\"></span>
              </button>
            </div>
          </div>

          <div class=\"form-group\">
            <label>Extra class</label>
            <input type=\"text\" class=\"form-control we-mega-menu-txt-extra-class\" placeholder=\"Extra class\">
          </div>
        </div>
        
      </div>  
    </div>







    <div class=\"we-mega-menu-bar we-mega-menu-column-config\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <h2>Column Configuration</h2>
          <p>Allows you to: add and remove column, set grid, add block to column and style the column with extra class</p>
        </div>

        <div class=\"col-md-12\">
          <div class=\"clearfix\">
            <div class=\"form-group form-fix-width\">
              <label>Add/remove Column</label>
              <div class=\"group-actions-btn\">
                <button type=\"button\" class=\"btn btn-default we-mega-menu-btn-remove-col we-mega-menu-btn-add-row\">-</button>
                <button type=\"button\" class=\"btn btn-default we-mega-menu-btn-add-col we-mega-menu-btn-add-row\">+</button>
              </div>
            </div>

            <div class=\"form-group form-fix-width\">
              <!-- Rectangular switch -->
              <label>Hide when collapse</label>
              <label class=\"switch\">
                <input type=\"checkbox\" class=\"we-mega-menu we-mega-menu-btn-hide-when-collapse\" name=\"we-mega-menu-btn-hide-when-collapse\">
                <div class=\"slider\"></div>
              </label>
            </div>
            <div class=\"form-group form-fix-width\">
              <!-- Rectangular switch -->
              <label>Show block title</label>
              <label class=\"switch\">
                <input type=\"checkbox\" class=\"we-mega-menu btn-show-block-title\" name=\"btn-show-block-title\" checked=\"\">
                <div class=\"slider\"></div>
              </label>
            </div>
          </div>

          <div class=\"form-group\">
            <label>Grid (1-12)</label>
            <select class=\"form-control we-mega-menu cbx-we-mega-menu-col-width\">
              ";
        // line 255
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 256
            echo "                <option value=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 256, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 256, $this->source), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        echo "            </select>
          </div>

          <div class=\"form-group\">
            <label>Blocks</label>
            <select class=\"form-control cbx-select-block\">
              <option value=\"\">Select Blocks</option>
              ";
        // line 265
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blocks"] ?? null));
        foreach ($context['_seq'] as $context["bid"] => $context["block_name"]) {
            // line 266
            echo "                <option value=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["bid"], 266, $this->source), "html", null, true);
            echo "\"> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["block_name"], 266, $this->source), "html", null, true);
            echo " </option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['bid'], $context['block_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        echo "            </select>
          </div>

          

          <div class=\"form-group\">
            <label>Extra class</label>
            <input type=\"text\" class=\"form-control we-mega-menu-txt-extra-class\" placeholder=\"Extra class\">
          </div>
        </div>
        
      </div>  
    </div>









    <div class=\"we-mega-menu-bar we-mega-menu-actions\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <button class=\"btn btn-success btn-save\" type=\"submit\">Save</button>
          <button class=\"btn btn-danger btn-reset\" type=\"submit\">Reset</button>
          <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#resetToDefault\">
            Reset To Default
          </button>
        </div>
      </div>
    </div>

    <!-- Modal reset to default -->
    <div class=\"modal fade\" id=\"resetToDefault\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            <h4 class=\"modal-title\" id=\"myModalLabel\">Warning</h4>
          </div>
          <div class=\"modal-body\">
            Are you sure reset menu to default ?
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-danger btn-reset-to-default\">Reset To Default</button>
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<nav ";
        // line 324
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 324, $this->source), "html", null, true);
        echo ">
  <div class=\"container-fluid\">
    ";
        // line 326
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 326, $this->source), "html", null, true);
        echo "
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/we_megamenu/templates/we-megamenu-backend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 326,  392 => 324,  334 => 268,  323 => 266,  319 => 265,  310 => 258,  299 => 256,  295 => 255,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/we_megamenu/templates/we-megamenu-backend.html.twig", "/var/www/html/web/modules/contrib/we_megamenu/templates/we-megamenu-backend.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 255);
        static $filters = array("escape" => 256);
        static $functions = array("range" => 255);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                ['range']
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
