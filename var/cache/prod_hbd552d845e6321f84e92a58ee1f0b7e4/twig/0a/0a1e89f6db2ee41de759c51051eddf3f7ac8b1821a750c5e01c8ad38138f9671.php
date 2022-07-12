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

/* @Storefront/storefront/component/listing/filter-panel.html.twig */
class __TwigTemplate_ff0bfd47c3e6904d945ce1264635e63136ae054e79902c378bd94791867fd344 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_filter_panel' => [$this, 'block_component_filter_panel'],
            'component_filter_panel_header' => [$this, 'block_component_filter_panel_header'],
            'component_filter_panel_element' => [$this, 'block_component_filter_panel_element'],
            'component_filter_panel_items_container' => [$this, 'block_component_filter_panel_items_container'],
            'component_filter_panel_items' => [$this, 'block_component_filter_panel_items'],
            'component_filter_panel_item_manufacturer' => [$this, 'block_component_filter_panel_item_manufacturer'],
            'component_filter_panel_item_properties' => [$this, 'block_component_filter_panel_item_properties'],
            'component_filter_panel_item_price' => [$this, 'block_component_filter_panel_item_price'],
            'component_filter_panel_item_rating_select' => [$this, 'block_component_filter_panel_item_rating_select'],
            'component_filter_panel_item_shipping_free' => [$this, 'block_component_filter_panel_item_shipping_free'],
            'component_filter_panel_active_container' => [$this, 'block_component_filter_panel_active_container'],
            'component_filter_panel_active_container_inner' => [$this, 'block_component_filter_panel_active_container_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_filter_panel', $context, $blocks);
    }

    public function block_component_filter_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
        // line 2
        echo "    ";
        $this->displayBlock('component_filter_panel_header', $context, $blocks);
        // line 11
        echo "
    ";
        // line 13
        echo "    ";
        $this->displayBlock('component_filter_panel_element', $context, $blocks);
    }

    // line 2
    public function block_component_filter_panel_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <div class=\"filter-panel-offcanvas-header\">
            <div class=\"filter-panel-offcanvas-only filter-panel-offcanvas-title\">";
        // line 4
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterTitleText"), "html", null, true);
        echo "</div>

            <div class=\"filter-panel-offcanvas-only filter-panel-offcanvas-close js-offcanvas-close\">
                ";
        // line 7
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter-panel.html.twig", 7);
        })())->display(twig_array_merge($context, ["size" => "md", "name" => "x"]));
        // line 8
        echo "            </div>
        </div>
    ";
    }

    // line 13
    public function block_component_filter_panel_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "        <div class=\"filter-panel";
        if (($context["sidebar"] ?? null)) {
            echo " is--sidebar";
        }
        echo "\">
            ";
        // line 15
        $this->displayBlock('component_filter_panel_items_container', $context, $blocks);
        // line 98
        echo "
            ";
        // line 99
        $this->displayBlock('component_filter_panel_active_container', $context, $blocks);
        // line 104
        echo "        </div>
     ";
    }

    // line 15
    public function block_component_filter_panel_items_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                <div class=\"filter-panel-items-container\">
                    ";
        // line 17
        $this->displayBlock('component_filter_panel_items', $context, $blocks);
        // line 96
        echo "                </div>
            ";
    }

    // line 17
    public function block_component_filter_panel_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
                        ";
        // line 19
        $this->displayBlock('component_filter_panel_item_manufacturer', $context, $blocks);
        // line 33
        echo "
                        ";
        // line 34
        $this->displayBlock('component_filter_panel_item_properties', $context, $blocks);
        // line 52
        echo "
                        ";
        // line 53
        $this->displayBlock('component_filter_panel_item_price', $context, $blocks);
        // line 71
        echo "
                        ";
        // line 72
        $this->displayBlock('component_filter_panel_item_rating_select', $context, $blocks);
        // line 84
        echo "
                        ";
        // line 85
        $this->displayBlock('component_filter_panel_item_shipping_free', $context, $blocks);
        // line 95
        echo "                    ";
    }

    // line 19
    public function block_component_filter_panel_item_manufacturer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                            ";
        // line 21
        echo "                            ";
        $context["manufacturers"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 21), "get", [0 => "manufacturer"], "method", false, false, false, 21);
        // line 22
        echo "                            ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["manufacturers"] ?? null), "entities", [], "any", false, false, false, 22))) {
            // line 23
            echo "                                ";
            $context["manufacturersSorted"] = twig_sort_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["manufacturers"] ?? null), "entities", [], "any", false, false, false, 23), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_lower_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["a"] ?? null), "translated", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23)) <=> twig_lower_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["b"] ?? null), "translated", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23))); });
            // line 24
            echo "
                                ";
            // line 25
            $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 25)->display(twig_array_merge($context, ["elements" =>             // line 26
($context["manufacturersSorted"] ?? null), "sidebar" =>             // line 27
($context["sidebar"] ?? null), "name" => "manufacturer", "displayName" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterManufacturerDisplayName"))]));
            // line 31
            echo "                            ";
        }
        // line 32
        echo "                        ";
    }

    // line 34
    public function block_component_filter_panel_item_properties($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "                            ";
        // line 36
        echo "                            ";
        $context["properties"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 36), "get", [0 => "properties"], "method", false, false, false, 36);
        // line 37
        echo "
                            ";
        // line 38
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "entities", [], "any", false, false, false, 38))) {
            // line 39
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "entities", [], "any", false, false, false, 39));
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
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                // line 40
                echo "                                    ";
                $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 40)->display(twig_array_merge($context, ["elements" => sw_get_attribute($this->env, $this->source,                 // line 41
$context["property"], "options", [], "any", false, false, false, 41), "sidebar" =>                 // line 42
($context["sidebar"] ?? null), "name" => "properties", "displayName" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,                 // line 44
$context["property"], "translated", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "displayType" => sw_get_attribute($this->env, $this->source,                 // line 45
$context["property"], "displayType", [], "any", false, false, false, 45), "pluginSelector" => "filter-property-select", "propertyName" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,                 // line 47
$context["property"], "translated", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47)]));
                // line 49
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                            ";
        }
        // line 51
        echo "                        ";
    }

    // line 53
    public function block_component_filter_panel_item_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "                            ";
        $context["price"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 54), "get", [0 => "price"], "method", false, false, false, 54);
        // line 55
        echo "
                            ";
        // line 56
        if (((sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "min", [], "any", false, false, false, 56) !== null) && (sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "max", [], "any", false, false, false, 56) !== null))) {
            // line 57
            echo "                                ";
            // line 58
            echo "                                ";
            $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-range.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 58)->display(twig_array_merge($context, ["price" =>             // line 59
($context["price"] ?? null), "sidebar" =>             // line 60
($context["sidebar"] ?? null), "name" => "price", "minKey" => "min-price", "maxKey" => "max-price", "lowerBound" => 0, "displayName" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterPriceDisplayName")), "minInputValue" => 0, "maxInputValue" => sw_get_attribute($this->env, $this->source,             // line 67
($context["price"] ?? null), "max", [], "any", false, false, false, 67)]));
            // line 69
            echo "                            ";
        }
        // line 70
        echo "                        ";
    }

    // line 72
    public function block_component_filter_panel_item_rating_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "                            ";
        $context["rating"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 73), "get", [0 => "rating"], "method", false, false, false, 73);
        // line 74
        echo "
                            ";
        // line 75
        if ((1 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["rating"] ?? null), "max", [], "any", false, false, false, 75), 0))) {
            // line 76
            echo "                                ";
            $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-rating-select.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 76)->display(twig_array_merge($context, ["sidebar" =>             // line 77
($context["sidebar"] ?? null), "name" => "rating", "pluginSelector" => "filter-rating-select", "displayName" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRatingDisplayName"))]));
            // line 82
            echo "                            ";
        }
        // line 83
        echo "                        ";
    }

    // line 85
    public function block_component_filter_panel_item_shipping_free($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "                            ";
        $context["shippingFree"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 86), "get", [0 => "shipping-free"], "method", false, false, false, 86);
        // line 87
        echo "
                            ";
        // line 88
        if ((1 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["shippingFree"] ?? null), "max", [], "any", false, false, false, 88), 0))) {
            // line 89
            echo "                                ";
            $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-boolean.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 89)->display(twig_array_merge($context, ["name" => "shipping-free", "displayName" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterFreeShippingDisplayName"))]));
            // line 93
            echo "                            ";
        }
        // line 94
        echo "                        ";
    }

    // line 99
    public function block_component_filter_panel_active_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "                <div class=\"filter-panel-active-container\">
                    ";
        // line 101
        $this->displayBlock('component_filter_panel_active_container_inner', $context, $blocks);
        // line 102
        echo "                </div>
            ";
    }

    // line 101
    public function block_component_filter_panel_active_container_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter-panel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  341 => 101,  336 => 102,  334 => 101,  331 => 100,  327 => 99,  323 => 94,  320 => 93,  317 => 89,  315 => 88,  312 => 87,  309 => 86,  305 => 85,  301 => 83,  298 => 82,  296 => 77,  294 => 76,  292 => 75,  289 => 74,  286 => 73,  282 => 72,  278 => 70,  275 => 69,  273 => 67,  272 => 60,  271 => 59,  269 => 58,  267 => 57,  265 => 56,  262 => 55,  259 => 54,  255 => 53,  251 => 51,  248 => 50,  234 => 49,  232 => 47,  231 => 45,  230 => 44,  229 => 42,  228 => 41,  226 => 40,  208 => 39,  206 => 38,  203 => 37,  200 => 36,  198 => 35,  194 => 34,  190 => 32,  187 => 31,  185 => 27,  184 => 26,  183 => 25,  180 => 24,  177 => 23,  174 => 22,  171 => 21,  169 => 20,  165 => 19,  161 => 95,  159 => 85,  156 => 84,  154 => 72,  151 => 71,  149 => 53,  146 => 52,  144 => 34,  141 => 33,  139 => 19,  136 => 18,  132 => 17,  127 => 96,  125 => 17,  122 => 16,  118 => 15,  113 => 104,  111 => 99,  108 => 98,  106 => 15,  99 => 14,  95 => 13,  89 => 8,  81 => 7,  75 => 4,  72 => 3,  68 => 2,  63 => 13,  60 => 11,  57 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/listing/filter-panel.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter-panel.html.twig");
    }
}
