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

/* @Storefront/storefront/component/listing/filter/filter-range.html.twig */
class __TwigTemplate_d4ca65cadf12e9011c66d7db2334a7b7a70b477b4ab620c65728353ce76afb10 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_filter_range' => [$this, 'block_component_filter_range'],
            'component_filter_range_toggle' => [$this, 'block_component_filter_range_toggle'],
            'component_filter_range_display_name' => [$this, 'block_component_filter_range_display_name'],
            'component_filter_range_toggle_icon' => [$this, 'block_component_filter_range_toggle_icon'],
            'component_filter_range_dropdown' => [$this, 'block_component_filter_range_dropdown'],
            'component_filter_range_container' => [$this, 'block_component_filter_range_container'],
            'component_filter_range_min' => [$this, 'block_component_filter_range_min'],
            'component_filter_range_min_label' => [$this, 'block_component_filter_range_min_label'],
            'component_filter_range_min_input' => [$this, 'block_component_filter_range_min_input'],
            'component_filter_range_min_unit' => [$this, 'block_component_filter_range_min_unit'],
            'component_filter_range_min_currency_symbol' => [$this, 'block_component_filter_range_min_currency_symbol'],
            'component_filter_range_divider' => [$this, 'block_component_filter_range_divider'],
            'component_filter_range_max' => [$this, 'block_component_filter_range_max'],
            'component_filter_range_max_label' => [$this, 'block_component_filter_range_max_label'],
            'component_filter_range_max_input' => [$this, 'block_component_filter_range_max_input'],
            'component_filter_range_max_unit' => [$this, 'block_component_filter_range_max_unit'],
            'component_filter_range_max_currency_symbol' => [$this, 'block_component_filter_range_max_currency_symbol'],
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
        if ( !array_key_exists("filterRangeActiveMinLabel", $context)) {
            // line 4
            echo "    ";
            $context["filterRangeActiveMinLabel"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeActiveMinLabel", ["%displayName%" => ($context["displayName"] ?? null)]));
        }
        // line 6
        echo "
";
        // line 7
        if ( !array_key_exists("filterRangeActiveMaxLabel", $context)) {
            // line 8
            echo "    ";
            $context["filterRangeActiveMaxLabel"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeActiveMaxLabel", ["%displayName%" => ($context["displayName"] ?? null)]));
        }
        // line 10
        echo "
";
        // line 11
        if ( !array_key_exists("filterRangeErrorMessage", $context)) {
            // line 12
            echo "    ";
            $context["filterRangeErrorMessage"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeErrorMessage"));
        }
        // line 14
        echo "
";
        // line 15
        if ( !array_key_exists("filterRangeLowerBoundErrorMessage", $context)) {
            // line 16
            echo "    ";
            $context["filterRangeLowerBoundErrorMessage"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeLowerBoundErrorMessage", ["%lowerBound%" => ($context["lowerBound"] ?? null)]));
        }
        // line 18
        echo "
";
        // line 19
        if ( !array_key_exists("minKey", $context)) {
            // line 20
            echo "    ";
            $context["minKey"] = "min-price";
        }
        // line 22
        echo "
";
        // line 23
        if ( !array_key_exists("maxKey", $context)) {
            // line 24
            echo "    ";
            $context["minKey"] = "max-price";
        }
        // line 26
        echo "
";
        // line 27
        if ( !array_key_exists("unit", $context)) {
            // line 28
            echo "    ";
            $context["unit"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 28), "activeCurrency", [], "any", false, false, false, 28), "symbol", [], "any", false, false, false, 28);
        }
        // line 30
        echo "
";
        // line 32
        if (array_key_exists("currencySymbol", $context)) {
            // line 33
            echo "    ";
            $context["unit"] = ($context["currencySymbol"] ?? null);
        }
        // line 35
        echo "
";
        // line 36
        if ( !array_key_exists("minInputValue", $context)) {
            // line 37
            echo "    ";
            $context["minInputValue"] = 0;
        }
        // line 39
        echo "
";
        // line 40
        if ( !array_key_exists("maxInputValue", $context)) {
            // line 41
            echo "    ";
            // line 42
            echo "    ";
            $context["maxInputValue"] = sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "max", [], "any", false, false, false, 42);
        }
        // line 44
        echo "
";
        // line 45
        $context["filterRangeOptions"] = ["name" =>         // line 46
($context["name"] ?? null), "minKey" =>         // line 47
($context["minKey"] ?? null), "maxKey" =>         // line 48
($context["maxKey"] ?? null), "lowerBound" =>         // line 49
($context["lowerBound"] ?? null), "unit" =>         // line 50
($context["unit"] ?? null), "currencySymbol" =>         // line 51
($context["currencySymbol"] ?? null), "snippets" => ["filterRangeActiveMinLabel" =>         // line 53
($context["filterRangeActiveMinLabel"] ?? null), "filterRangeActiveMaxLabel" =>         // line 54
($context["filterRangeActiveMaxLabel"] ?? null), "filterRangeErrorMessage" =>         // line 55
($context["filterRangeErrorMessage"] ?? null), "filterRangeLowerBoundErrorMessage" =>         // line 56
($context["filterRangeLowerBoundErrorMessage"] ?? null)]];
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('component_filter_range', $context, $blocks);
    }

    public function block_component_filter_range($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "    ";
        // line 62
        echo "    <div class=\"filter-range filter-panel-item";
        if ( !($context["sidebar"] ?? null)) {
            echo " dropdown";
        }
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            echo " d-grid";
        }
        echo "\"
         data-filter-range=\"true\"
         data-filter-range-options='";
        // line 64
        echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["filterRangeOptions"] ?? null)]), "html", null, true);
        echo "'>

        ";
        // line 66
        $this->displayBlock('component_filter_range_toggle', $context, $blocks);
        // line 89
        echo "
        ";
        // line 90
        $this->displayBlock('component_filter_range_dropdown', $context, $blocks);
        // line 160
        echo "    </div>
";
    }

    // line 66
    public function block_component_filter_range_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "            ";
        // line 68
        echo "            <button class=\"filter-panel-item-toggle btn";
        if ((($context["sidebar"] ?? null) &&  !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0"))) {
            echo " btn-block";
        }
        echo "\"
                    aria-expanded=\"false\"
                    ";
        // line 70
        if (($context["sidebar"] ?? null)) {
            // line 71
            echo "                    ";
            echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
            echo "=\"collapse\"
                    ";
            // line 72
            echo sw_escape_filter($this->env, ($context["dataBsTargetAttr"] ?? null), "html", null, true);
            echo "=\"#";
            echo sw_escape_filter($this->env, ($context["filterItemId"] ?? null), "html", null, true);
            echo "\"
                    ";
        } else {
            // line 74
            echo "                    ";
            echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
            echo "=\"dropdown\"
                    data-boundary=\"viewport\"
                    ";
            // line 76
            echo sw_escape_filter($this->env, ($context["dataBsOffsetAttr"] ?? null), "html", null, true);
            echo "=\"0,8\"
                    aria-haspopup=\"true\"
                    ";
        }
        // line 78
        echo ">

                ";
        // line 80
        $this->displayBlock('component_filter_range_display_name', $context, $blocks);
        // line 83
        echo "
                ";
        // line 84
        $this->displayBlock('component_filter_range_toggle_icon', $context, $blocks);
        // line 87
        echo "            </button>
        ";
    }

    // line 80
    public function block_component_filter_range_display_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "                    ";
        echo sw_escape_filter($this->env, ($context["displayName"] ?? null), "html", null, true);
        echo "
                ";
    }

    // line 84
    public function block_component_filter_range_toggle_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "                    ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter/filter-range.html.twig", 85);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "xs", "class" => "filter-panel-item-toggle", "name" => "arrow-medium-down"]));
        // line 86
        echo "                ";
    }

    // line 90
    public function block_component_filter_range_dropdown($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "            <div class=\"filter-range-dropdown filter-panel-item-dropdown";
        if (($context["sidebar"] ?? null)) {
            echo " collapse";
        } else {
            echo " dropdown-menu";
        }
        echo "\"
                 id=\"";
        // line 92
        echo sw_escape_filter($this->env, ($context["filterItemId"] ?? null), "html", null, true);
        echo "\">

                ";
        // line 94
        $this->displayBlock('component_filter_range_container', $context, $blocks);
        // line 158
        echo "            </div>
        ";
    }

    // line 94
    public function block_component_filter_range_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 95
        echo "                    <div class=\"filter-range-container\">

                        ";
        // line 97
        $this->displayBlock('component_filter_range_min', $context, $blocks);
        // line 123
        echo "
                        ";
        // line 124
        $this->displayBlock('component_filter_range_divider', $context, $blocks);
        // line 129
        echo "
                        ";
        // line 130
        $this->displayBlock('component_filter_range_max', $context, $blocks);
        // line 156
        echo "                    </div>
                ";
    }

    // line 97
    public function block_component_filter_range_min($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "                            <label class=\"filter-range-min\">

                                ";
        // line 100
        $this->displayBlock('component_filter_range_min_label', $context, $blocks);
        // line 103
        echo "
                                ";
        // line 104
        $this->displayBlock('component_filter_range_min_input', $context, $blocks);
        // line 111
        echo "
                                ";
        // line 112
        $this->displayBlock('component_filter_range_min_unit', $context, $blocks);
        // line 121
        echo "                            </label>
                        ";
    }

    // line 100
    public function block_component_filter_range_min_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "                                    ";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeMinLabel"));
        echo "
                                ";
    }

    // line 104
    public function block_component_filter_range_min_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        echo "                                    <input class=\"form-control min-input\"
                                           type=\"number\"
                                           name=\"";
        // line 107
        echo sw_escape_filter($this->env, ($context["minKey"] ?? null), "html", null, true);
        echo "\"
                                           min=\"";
        // line 108
        echo sw_escape_filter($this->env, ($context["minInputValue"] ?? null), "html", null, true);
        echo "\"
                                           max=\"";
        // line 109
        echo sw_escape_filter($this->env, ($context["maxInputValue"] ?? null), "html", null, true);
        echo "\">
                                ";
    }

    // line 112
    public function block_component_filter_range_min_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "                                    ";
        // line 114
        echo "                                    ";
        $this->displayBlock('component_filter_range_min_currency_symbol', $context, $blocks);
        // line 120
        echo "                                ";
    }

    // line 114
    public function block_component_filter_range_min_currency_symbol($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        echo "                                        ";
        // line 116
        echo "                                        <span class=\"filter-range-unit filter-range-currency-symbol\">
                                            ";
        // line 117
        echo sw_escape_filter($this->env, ($context["unit"] ?? null), "html", null, true);
        echo "
                                        </span>
                                    ";
    }

    // line 124
    public function block_component_filter_range_divider($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 125
        echo "                            <div class=\"filter-range-divider\">
                                &ndash;
                            </div>
                        ";
    }

    // line 130
    public function block_component_filter_range_max($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "                            <label class=\"filter-range-max\">

                                ";
        // line 133
        $this->displayBlock('component_filter_range_max_label', $context, $blocks);
        // line 136
        echo "
                                ";
        // line 137
        $this->displayBlock('component_filter_range_max_input', $context, $blocks);
        // line 144
        echo "
                                ";
        // line 145
        $this->displayBlock('component_filter_range_max_unit', $context, $blocks);
        // line 154
        echo "                            </label>
                        ";
    }

    // line 133
    public function block_component_filter_range_max_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "                                    ";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeMaxLabel"));
        echo "
                                ";
    }

    // line 137
    public function block_component_filter_range_max_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "                                    <input class=\"form-control max-input\"
                                           type=\"number\"
                                           name=\"";
        // line 140
        echo sw_escape_filter($this->env, ($context["maxKey"] ?? null), "html", null, true);
        echo "\"
                                           min=\"";
        // line 141
        echo sw_escape_filter($this->env, ($context["minInputValue"] ?? null), "html", null, true);
        echo "\"
                                           max=\"";
        // line 142
        echo sw_escape_filter($this->env, ($context["maxInputValue"] ?? null), "html", null, true);
        echo "\">
                                ";
    }

    // line 145
    public function block_component_filter_range_max_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        echo "                                    ";
        // line 147
        echo "                                    ";
        $this->displayBlock('component_filter_range_max_currency_symbol', $context, $blocks);
        // line 153
        echo "                                ";
    }

    // line 147
    public function block_component_filter_range_max_currency_symbol($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "                                        ";
        // line 149
        echo "                                        <span class=\"filter-range-unit filter-range-currency-symbol\">
                                            ";
        // line 150
        echo sw_escape_filter($this->env, ($context["unit"] ?? null), "html", null, true);
        echo "
                                        </span>
                                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter/filter-range.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 150,  512 => 149,  510 => 148,  506 => 147,  502 => 153,  499 => 147,  497 => 146,  493 => 145,  487 => 142,  483 => 141,  479 => 140,  475 => 138,  471 => 137,  464 => 134,  460 => 133,  455 => 154,  453 => 145,  450 => 144,  448 => 137,  445 => 136,  443 => 133,  439 => 131,  435 => 130,  428 => 125,  424 => 124,  417 => 117,  414 => 116,  412 => 115,  408 => 114,  404 => 120,  401 => 114,  399 => 113,  395 => 112,  389 => 109,  385 => 108,  381 => 107,  377 => 105,  373 => 104,  366 => 101,  362 => 100,  357 => 121,  355 => 112,  352 => 111,  350 => 104,  347 => 103,  345 => 100,  341 => 98,  337 => 97,  332 => 156,  330 => 130,  327 => 129,  325 => 124,  322 => 123,  320 => 97,  316 => 95,  312 => 94,  307 => 158,  305 => 94,  300 => 92,  291 => 91,  287 => 90,  283 => 86,  274 => 85,  270 => 84,  263 => 81,  259 => 80,  254 => 87,  252 => 84,  249 => 83,  247 => 80,  243 => 78,  237 => 76,  231 => 74,  224 => 72,  219 => 71,  217 => 70,  209 => 68,  207 => 67,  203 => 66,  198 => 160,  196 => 90,  193 => 89,  191 => 66,  186 => 64,  175 => 62,  173 => 61,  166 => 60,  163 => 59,  161 => 56,  160 => 55,  159 => 54,  158 => 53,  157 => 51,  156 => 50,  155 => 49,  154 => 48,  153 => 47,  152 => 46,  151 => 45,  148 => 44,  144 => 42,  142 => 41,  140 => 40,  137 => 39,  133 => 37,  131 => 36,  128 => 35,  124 => 33,  122 => 32,  119 => 30,  115 => 28,  113 => 27,  110 => 26,  106 => 24,  104 => 23,  101 => 22,  97 => 20,  95 => 19,  92 => 18,  88 => 16,  86 => 15,  83 => 14,  79 => 12,  77 => 11,  74 => 10,  70 => 8,  68 => 7,  65 => 6,  61 => 4,  59 => 3,  56 => 2,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/listing/filter/filter-range.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter/filter-range.html.twig");
    }
}
