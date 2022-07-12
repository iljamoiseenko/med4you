<?php

use Twig\Environment;
use function Shopware\Core\Framework\Adapter\Twig\sw_get_attribute;
use function Shopware\Core\Framework\Adapter\Twig\sw_escape_filter;
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

/* @Storefront/storefront/component/listing/filter/filter-multi-select.html.twig */
class __TwigTemplate_89df0996694814b5ed7089765dcb3726f79a92ec55250f0f5cb5461ec966b37d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_filter_multi_select' => [$this, 'block_component_filter_multi_select'],
            'component_filter_multi_select_toggle' => [$this, 'block_component_filter_multi_select_toggle'],
            'component_filter_multi_select_display_name' => [$this, 'block_component_filter_multi_select_display_name'],
            'component_filter_multi_select_count' => [$this, 'block_component_filter_multi_select_count'],
            'component_filter_multi_select_toggle_icon' => [$this, 'block_component_filter_multi_select_toggle_icon'],
            'component_filter_multi_select_dropdown' => [$this, 'block_component_filter_multi_select_dropdown'],
            'component_filter_multi_select_list' => [$this, 'block_component_filter_multi_select_list'],
            'component_filter_multi_select_list_item' => [$this, 'block_component_filter_multi_select_list_item'],
            'component_filter_multi_select_list_item_inner' => [$this, 'block_component_filter_multi_select_list_item_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["filterItemId"] = ((("filter-" . ($context["name"] ?? null)) . "-") . twig_random($this->env));
        // line 2
        echo "
";
        // line 3
        if ( !array_key_exists("pluginSelector", $context)) {
            // line 4
            echo "    ";
            $context["pluginSelector"] = "filter-multi-select";
        }
        // line 6
        echo "
";
        // line 7
        if ( !array_key_exists("dataPluginSelectorOptions", $context)) {
            // line 8
            echo "    ";
            $context["dataPluginSelectorOptions"] = ["name" =>             // line 9
($context["name"] ?? null), "snippets" => ["disabledFilterText" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.disabledFilterTooltip"))]];
        }
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('component_filter_multi_select', $context, $blocks);
    }

    public function block_component_filter_multi_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    ";
        // line 18
        echo "    <div class=\"filter-multi-select filter-multi-select-";
        echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " filter-panel-item";
        if ( !($context["sidebar"] ?? null)) {
            echo " dropdown";
        }
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            echo " d-grid";
        }
        echo "\"
         data-";
        // line 19
        echo sw_escape_filter($this->env, ($context["pluginSelector"] ?? null), "html", null, true);
        echo "=\"true\"
         data-";
        // line 20
        echo sw_escape_filter($this->env, ($context["pluginSelector"] ?? null), "html", null, true);
        echo "-options='";
        echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["dataPluginSelectorOptions"] ?? null)]), "html", null, true);
        echo "'>

        ";
        // line 22
        $this->displayBlock('component_filter_multi_select_toggle', $context, $blocks);
        // line 51
        echo "
        ";
        // line 52
        $this->displayBlock('component_filter_multi_select_dropdown', $context, $blocks);
        // line 70
        echo "    </div>
";
    }

    // line 22
    public function block_component_filter_multi_select_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "            ";
        // line 24
        echo "            <button class=\"filter-panel-item-toggle btn";
        if ((($context["sidebar"] ?? null) &&  !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0"))) {
            echo " btn-block";
        }
        echo "\"
                    aria-expanded=\"false\"
                    ";
        // line 26
        if (($context["sidebar"] ?? null)) {
            // line 27
            echo "                    ";
            echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
            echo "=\"collapse\"
                    ";
            // line 28
            echo sw_escape_filter($this->env, ($context["dataBsTargetAttr"] ?? null), "html", null, true);
            echo "=\"#";
            echo sw_escape_filter($this->env, ($context["filterItemId"] ?? null), "html", null, true);
            echo "\"
                    ";
        } else {
            // line 30
            echo "                    ";
            echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
            echo "=\"dropdown\"
                    data-boundary=\"viewport\"
                    ";
            // line 32
            echo sw_escape_filter($this->env, ($context["dataBsOffsetAttr"] ?? null), "html", null, true);
            echo "=\"0,8\"
                    aria-haspopup=\"true\"
                    ";
        }
        // line 34
        echo ">

                ";
        // line 36
        $this->displayBlock('component_filter_multi_select_display_name', $context, $blocks);
        // line 39
        echo "
                ";
        // line 40
        $this->displayBlock('component_filter_multi_select_count', $context, $blocks);
        // line 43
        echo "
                ";
        // line 44
        $this->displayBlock('component_filter_multi_select_toggle_icon', $context, $blocks);
        // line 49
        echo "            </button>
        ";
    }

    // line 36
    public function block_component_filter_multi_select_display_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "                    ";
        echo sw_escape_filter($this->env, ($context["displayName"] ?? null), "html", null, true);
        echo "
                ";
    }

    // line 40
    public function block_component_filter_multi_select_count($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                    <span class=\"filter-multi-select-count\"></span>
                ";
    }

    // line 44
    public function block_component_filter_multi_select_toggle_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "                    ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig", 45);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "xs", "class" => "filter-panel-item-toggle", "name" => "arrow-medium-down"]));
        // line 48
        echo "                ";
    }

    // line 52
    public function block_component_filter_multi_select_dropdown($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "            <div class=\"filter-multi-select-dropdown filter-panel-item-dropdown";
        if (($context["sidebar"] ?? null)) {
            echo " collapse";
        } else {
            echo " dropdown-menu";
        }
        echo "\"
                 id=\"";
        // line 54
        echo sw_escape_filter($this->env, ($context["filterItemId"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 55
        $this->displayBlock('component_filter_multi_select_list', $context, $blocks);
        // line 68
        echo "            </div>
        ";
    }

    // line 55
    public function block_component_filter_multi_select_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "                    <ul class=\"filter-multi-select-list\">
                        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 58
            echo "                            ";
            $this->displayBlock('component_filter_multi_select_list_item', $context, $blocks);
            // line 65
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                    </ul>
                ";
    }

    // line 58
    public function block_component_filter_multi_select_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "                                <li class=\"filter-multi-select-list-item\">
                                    ";
        // line 60
        $this->displayBlock('component_filter_multi_select_list_item_inner', $context, $blocks);
        // line 63
        echo "                                </li>
                            ";
    }

    // line 60
    public function block_component_filter_multi_select_list_item_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "                                        ";
        $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-multi-select-list-item.html.twig", "@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig", 61)->display($context);
        // line 62
        echo "                                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 62,  300 => 61,  296 => 60,  291 => 63,  289 => 60,  286 => 59,  282 => 58,  277 => 66,  263 => 65,  260 => 58,  243 => 57,  240 => 56,  236 => 55,  231 => 68,  229 => 55,  225 => 54,  216 => 53,  212 => 52,  208 => 48,  199 => 45,  195 => 44,  190 => 41,  186 => 40,  179 => 37,  175 => 36,  170 => 49,  168 => 44,  165 => 43,  163 => 40,  160 => 39,  158 => 36,  154 => 34,  148 => 32,  142 => 30,  135 => 28,  130 => 27,  128 => 26,  120 => 24,  118 => 23,  114 => 22,  109 => 70,  107 => 52,  104 => 51,  102 => 22,  95 => 20,  91 => 19,  79 => 18,  77 => 17,  70 => 16,  67 => 15,  64 => 9,  62 => 8,  60 => 7,  57 => 6,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter/filter-multi-select.html.twig");
    }
}
