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

/* @Storefront/storefront/component/product/listing.html.twig */
class __TwigTemplate_51ae18b5ba0b3cbc8bcb1617e6ecb836dd3173ba4b880855206759be1b312793 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'product_listing' => [$this, 'block_product_listing'],
            'element_product_listing_wrapper_content' => [$this, 'block_element_product_listing_wrapper_content'],
            'element_product_listing_pagination_nav_actions' => [$this, 'block_element_product_listing_pagination_nav_actions'],
            'element_product_listing_pagination_nav_top' => [$this, 'block_element_product_listing_pagination_nav_top'],
            'element_product_listing_sorting' => [$this, 'block_element_product_listing_sorting'],
            'element_product_listing_row' => [$this, 'block_element_product_listing_row'],
            'element_product_listing_col' => [$this, 'block_element_product_listing_col'],
            'element_product_listing_box' => [$this, 'block_element_product_listing_box'],
            'element_product_listing_col_empty' => [$this, 'block_element_product_listing_col_empty'],
            'element_product_listing_col_empty_alert' => [$this, 'block_element_product_listing_col_empty_alert'],
            'element_product_listing_pagination_nav_bottom' => [$this, 'block_element_product_listing_pagination_nav_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["currentPage"] = twig_round(((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 1), "offset", [], "any", false, false, false, 1) + 1) / sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 1), "limit", [], "any", false, false, false, 1)), 0, "ceil");
        // line 2
        $context["paginationConfig"] = call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [["page" => ($context["currentPage"] ?? null)]]);
        // line 3
        echo "
";
        // line 4
        if ( !array_key_exists("disableEmptyFilter", $context)) {
            // line 5
            echo "    ";
            $context["disableEmptyFilter"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.listing.disableEmptyFilterOptions");
        }
        // line 7
        echo "
";
        // line 8
        $context["listingPagination"] = ["sidebar" =>         // line 9
($context["sidebar"] ?? null), "params" =>         // line 10
($context["params"] ?? null), "dataUrl" =>         // line 11
($context["dataUrl"] ?? null), "filterUrl" =>         // line 12
($context["filterUrl"] ?? null), "disableEmptyFilter" =>         // line 13
($context["disableEmptyFilter"] ?? null), "snippets" => ["resetAllButtonText" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterPanelResetAll"))]];
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('product_listing', $context, $blocks);
    }

    public function block_product_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <div class=\"cms-element-product-listing-wrapper\"
         data-listing-pagination=\"true\"
         data-listing-pagination-options='";
        // line 22
        echo sw_escape_filter($this->env, ($context["paginationConfig"] ?? null), "html", null, true);
        echo "'
         data-listing=\"true\"
         data-listing-options='";
        // line 24
        echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["listingPagination"] ?? null)]), "html", null, true);
        echo "'>

        ";
        // line 26
        $this->displayBlock('element_product_listing_wrapper_content', $context, $blocks);
        // line 93
        echo "    </div>
";
    }

    // line 26
    public function block_element_product_listing_wrapper_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "            <div class=\"cms-element-product-listing\">
                ";
        // line 28
        if ((1 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 28), 0))) {
            // line 29
            echo "                    ";
            $this->displayBlock('element_product_listing_pagination_nav_actions', $context, $blocks);
            // line 50
            echo "                ";
        }
        // line 51
        echo "
                ";
        // line 52
        $this->displayBlock('element_product_listing_row', $context, $blocks);
        // line 81
        echo "
                ";
        // line 82
        if ((1 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 82), sw_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "limit", [], "any", false, false, false, 82)))) {
            // line 83
            echo "                    ";
            $this->displayBlock('element_product_listing_pagination_nav_bottom', $context, $blocks);
            // line 90
            echo "                ";
        }
        // line 91
        echo "            </div>
        ";
    }

    // line 29
    public function block_element_product_listing_pagination_nav_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "                        <div class=\"cms-element-product-listing-actions row justify-content-between\">
                            <div class=\"col-md-auto\">
                                ";
        // line 32
        $this->displayBlock('element_product_listing_pagination_nav_top', $context, $blocks);
        // line 38
        echo "                            </div>

                            <div class=\"col-md-auto\">
                                ";
        // line 41
        $this->displayBlock('element_product_listing_sorting', $context, $blocks);
        // line 47
        echo "                            </div>
                        </div>
                    ";
    }

    // line 32
    public function block_element_product_listing_pagination_nav_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/component/pagination.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 33)->display(twig_array_merge($context, ["entities" =>         // line 34
($context["searchResult"] ?? null), "criteria" => sw_get_attribute($this->env, $this->source,         // line 35
($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 35)]));
        // line 37
        echo "                                ";
    }

    // line 41
    public function block_element_product_listing_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/component/sorting.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 42)->display(twig_array_merge($context, ["current" => sw_get_attribute($this->env, $this->source,         // line 43
($context["searchResult"] ?? null), "sorting", [], "any", false, false, false, 43), "sortings" => sw_get_attribute($this->env, $this->source,         // line 44
($context["searchResult"] ?? null), "availableSortings", [], "any", false, false, false, 44)]));
        // line 46
        echo "                                ";
    }

    // line 52
    public function block_element_product_listing_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "                    <div class=\"row cms-listing-row js-listing-wrapper\">
                        ";
        // line 54
        if ((1 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 54), 0))) {
            // line 55
            echo "                            ";
            $this->displayBlock('element_product_listing_col', $context, $blocks);
            // line 67
            echo "                        ";
        } else {
            // line 68
            echo "                            ";
            $this->displayBlock('element_product_listing_col_empty', $context, $blocks);
            // line 78
            echo "                        ";
        }
        // line 79
        echo "                    </div>
                ";
    }

    // line 55
    public function block_element_product_listing_col($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["searchResult"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 57
            echo "                                    <div class=\"cms-listing-col ";
            echo sw_escape_filter($this->env, ($context["listingColumns"] ?? null), "html", null, true);
            echo "\">
                                        ";
            // line 58
            $this->displayBlock('element_product_listing_box', $context, $blocks);
            // line 64
            echo "                                    </div>
                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                            ";
    }

    // line 58
    public function block_element_product_listing_box($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "                                            ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/box.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 59)->display(twig_array_merge($context, ["layout" =>         // line 60
($context["boxLayout"] ?? null), "displayMode" =>         // line 61
($context["displayMode"] ?? null)]));
        // line 63
        echo "                                        ";
    }

    // line 68
    public function block_element_product_listing_col_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "                                <div class=\"cms-listing-col col-12\">
                                    ";
        // line 70
        $this->displayBlock('element_product_listing_col_empty_alert', $context, $blocks);
        // line 76
        echo "                                </div>
                            ";
    }

    // line 70
    public function block_element_product_listing_col_empty_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "                                        ";
        $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 71)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.emptyResultMessage"))]));
        // line 75
        echo "                                    ";
    }

    // line 83
    public function block_element_product_listing_pagination_nav_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/component/pagination.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 84)->display(twig_array_merge($context, ["entities" =>         // line 85
($context["searchResult"] ?? null), "criteria" => sw_get_attribute($this->env, $this->source,         // line 86
($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 86), "paginationLocation" => "bottom"]));
        // line 89
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 89,  306 => 86,  305 => 85,  303 => 84,  299 => 83,  295 => 75,  292 => 71,  288 => 70,  283 => 76,  281 => 70,  278 => 69,  274 => 68,  270 => 63,  268 => 61,  267 => 60,  265 => 59,  261 => 58,  257 => 66,  242 => 64,  240 => 58,  235 => 57,  217 => 56,  213 => 55,  208 => 79,  205 => 78,  202 => 68,  199 => 67,  196 => 55,  194 => 54,  191 => 53,  187 => 52,  183 => 46,  181 => 44,  180 => 43,  178 => 42,  174 => 41,  170 => 37,  168 => 35,  167 => 34,  165 => 33,  161 => 32,  155 => 47,  153 => 41,  148 => 38,  146 => 32,  142 => 30,  138 => 29,  133 => 91,  130 => 90,  127 => 83,  125 => 82,  122 => 81,  120 => 52,  117 => 51,  114 => 50,  111 => 29,  109 => 28,  106 => 27,  102 => 26,  97 => 93,  95 => 26,  90 => 24,  85 => 22,  81 => 20,  74 => 19,  71 => 18,  69 => 13,  68 => 12,  67 => 11,  66 => 10,  65 => 9,  64 => 8,  61 => 7,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/product/listing.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/product/listing.html.twig");
    }
}
