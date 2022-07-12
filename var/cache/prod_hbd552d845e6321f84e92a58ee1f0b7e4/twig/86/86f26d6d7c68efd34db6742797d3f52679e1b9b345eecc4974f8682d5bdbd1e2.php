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

/* @Storefront/storefront/component/product/card/price-unit.html.twig */
class __TwigTemplate_c1501eb7a40fff904e90c23792aeee7544740c7e5b473d2d8eb5caf487f025bf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_box_price_info' => [$this, 'block_component_product_box_price_info'],
            'component_product_box_price_unit' => [$this, 'block_component_product_box_price_unit'],
            'component_product_box_price_purchase_unit' => [$this, 'block_component_product_box_price_purchase_unit'],
            'component_product_box_price_reference_unit' => [$this, 'block_component_product_box_price_reference_unit'],
            'component_product_box_price' => [$this, 'block_component_product_box_price'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_product_box_price_info', $context, $blocks);
    }

    public function block_component_product_box_price_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        // line 3
        echo "    ";
        $context["purchaseUnit"] = sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "purchaseUnit", [], "any", false, false, false, 3);
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        $context["listingPrice"] = sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedListingPrice", [], "any", false, false, false, 5);
        // line 6
        echo "    ";
        // line 7
        echo "    ";
        $context["fromPrice"] = sw_get_attribute($this->env, $this->source, ($context["listingPrice"] ?? null), "from", [], "any", false, false, false, 7);
        // line 8
        echo "
    ";
        // line 9
        $context["cheapest"] = sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedCheapestPrice", [], "any", false, false, false, 9);
        // line 10
        echo "
    ";
        // line 11
        $context["real"] = sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrice", [], "any", false, false, false, 11);
        // line 12
        echo "    ";
        if ((1 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 12), "count", [], "any", false, false, false, 12), 0))) {
            // line 13
            echo "        ";
            $context["real"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 13), "last", [], "any", false, false, false, 13);
            // line 14
            echo "    ";
        }
        // line 15
        echo "
    ";
        // line 16
        $context["referencePrice"] = sw_get_attribute($this->env, $this->source, ($context["real"] ?? null), "referencePrice", [], "any", false, false, false, 16);
        // line 17
        echo "
    ";
        // line 18
        $context["displayFrom"] = (1 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 18), "count", [], "any", false, false, false, 18), 1));
        // line 19
        echo "
    <div class=\"product-price-info\">
        ";
        // line 21
        $this->displayBlock('component_product_box_price_unit', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        $this->displayBlock('component_product_box_price', $context, $blocks);
        // line 88
        echo "    </div>
";
    }

    // line 21
    public function block_component_product_box_price_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "            <p class=\"product-price-unit\">
                ";
        // line 24
        echo "                ";
        $this->displayBlock('component_product_box_price_purchase_unit', $context, $blocks);
        // line 34
        echo "
                ";
        // line 36
        echo "                ";
        $this->displayBlock('component_product_box_price_reference_unit', $context, $blocks);
        // line 43
        echo "            </p>
        ";
    }

    // line 24
    public function block_component_product_box_price_purchase_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                    ";
        if ((($context["referencePrice"] ?? null) && sw_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "unitName", [], "any", false, false, false, 25))) {
            // line 26
            echo "                        <span class=\"product-unit-label\">
                            ";
            // line 27
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxUnitLabel"));
            echo "
                        </span>
                        <span class=\"price-unit-content\">
                            ";
            // line 30
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "purchaseUnit", [], "any", false, false, false, 30), "html", null, true);
            echo " ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "unitName", [], "any", false, false, false, 30), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 33
        echo "                ";
    }

    // line 36
    public function block_component_product_box_price_reference_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "                    ";
        if ( !(null === ($context["referencePrice"] ?? null))) {
            // line 38
            echo "                        <span class=\"price-unit-reference\">
                            (";
            // line 39
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "price", [], "any", false, false, false, 39)), "html", null, true);
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo " / ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "referenceUnit", [], "any", false, false, false, 39), "html", null, true);
            echo " ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "unitName", [], "any", false, false, false, 39), "html", null, true);
            echo ")
                        </span>
                    ";
        }
        // line 42
        echo "                ";
    }

    // line 46
    public function block_component_product_box_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "            <div class=\"product-price-wrapper\">
                ";
        // line 48
        $context["price"] = ($context["real"] ?? null);
        // line 49
        echo "                ";
        $context["isListPrice"] = (1 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "listPrice", [], "any", false, false, false, 49), "percentage", [], "any", false, false, false, 49), 0));
        // line 50
        echo "                ";
        $context["isRegulationPrice"] = (0 !== twig_compare(sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "regulationPrice", [], "any", false, false, false, 50), null));
        // line 51
        echo "
                <div class=\"product-cheapest-price";
        // line 52
        if (((($context["isListPrice"] ?? null) && sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "regulationPrice", [], "any", false, false, false, 52), "price", [], "any", false, false, false, 52)) &&  !($context["displayFrom"] ?? null))) {
            echo " with-list-price";
        }
        if ((($context["isRegulationPrice"] ?? null) && ($context["displayFrom"] ?? null))) {
            echo " with-regulation-price";
        }
        echo "\">
                    ";
        // line 53
        if ((0 !== twig_compare(sw_get_attribute($this->env, $this->source, ($context["cheapest"] ?? null), "unitPrice", [], "any", false, false, false, 53), sw_get_attribute($this->env, $this->source, ($context["real"] ?? null), "unitPrice", [], "any", false, false, false, 53)))) {
            // line 54
            echo "                        <div>";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.cheapestPriceLabel"));
            echo "<span class=\"product-cheapest-price-price\"> ";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, ($context["cheapest"] ?? null), "unitPrice", [], "any", false, false, false, 54)), "html", null, true);
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo "</span></div>
                    ";
        }
        // line 56
        echo "                </div>

                ";
        // line 58
        if (($context["displayFrom"] ?? null)) {
            // line 59
            echo "                    ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.listingTextFrom"));
            echo "
                ";
        }
        // line 61
        echo "
                <span class=\"product-price";
        // line 62
        if ((($context["isListPrice"] ?? null) &&  !($context["displayFrom"] ?? null))) {
            echo " with-list-price";
        }
        echo "\">
                    ";
        // line 63
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "unitPrice", [], "any", false, false, false, 63)), "html", null, true);
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "

                    ";
        // line 65
        if ((($context["isListPrice"] ?? null) &&  !($context["displayFrom"] ?? null))) {
            // line 66
            echo "                        ";
            $context["afterListPriceSnippetExists"] = (1 === twig_compare(twig_length_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.afterListPrice")), 0));
            // line 67
            echo "                        ";
            $context["beforeListPriceSnippetExists"] = (1 === twig_compare(twig_length_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.beforeListPrice")), 0));
            // line 68
            echo "                        ";
            $context["hideStrikeTrough"] = (($context["beforeListPriceSnippetExists"] ?? null) || ($context["afterListPriceSnippetExists"] ?? null));
            // line 69
            echo "
                        <span class=\"list-price";
            // line 70
            if (($context["hideStrikeTrough"] ?? null)) {
                echo " list-price-no-line-through";
            }
            echo "\">
                            ";
            // line 71
            if (($context["beforeListPriceSnippetExists"] ?? null)) {
                echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize(twig_trim_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.beforeListPrice")));
            }
            // line 72
            echo "
                            <span class=\"list-price-price\">";
            // line 73
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "listPrice", [], "any", false, false, false, 73), "price", [], "any", false, false, false, 73)), "html", null, true);
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo "</span>

                            ";
            // line 75
            if (($context["afterListPriceSnippetExists"] ?? null)) {
                echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize(twig_trim_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.afterListPrice")));
            }
            // line 76
            echo "
                            <span class=\"list-price-percentage\">";
            // line 77
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.listPricePercentage", ["%price%" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "listPrice", [], "any", false, false, false, 77), "percentage", [], "any", false, false, false, 77)]));
            echo "</span>
                        </span>
                    ";
        }
        // line 80
        echo "                </span>
                ";
        // line 81
        if (($context["isRegulationPrice"] ?? null)) {
            // line 82
            echo "                    <span class=\"product-price with-regulation-price\">
                        ";
            // line 83
            if (($context["isListPrice"] ?? null)) {
                echo "<br/>";
            }
            echo "<span class=\"regulation-price\">";
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.listPricePreviously", ["%price%" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "regulationPrice", [], "any", false, false, false, 83), "price", [], "any", false, false, false, 83))]), "html", null, true);
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo "</span>
                    </span>
                ";
        }
        // line 86
        echo "            </div>
        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/price-unit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  313 => 86,  302 => 83,  299 => 82,  297 => 81,  294 => 80,  288 => 77,  285 => 76,  281 => 75,  275 => 73,  272 => 72,  268 => 71,  262 => 70,  259 => 69,  256 => 68,  253 => 67,  250 => 66,  248 => 65,  242 => 63,  236 => 62,  233 => 61,  227 => 59,  225 => 58,  221 => 56,  212 => 54,  210 => 53,  201 => 52,  198 => 51,  195 => 50,  192 => 49,  190 => 48,  187 => 47,  183 => 46,  179 => 42,  168 => 39,  165 => 38,  162 => 37,  158 => 36,  154 => 33,  146 => 30,  140 => 27,  137 => 26,  134 => 25,  130 => 24,  125 => 43,  122 => 36,  119 => 34,  116 => 24,  113 => 22,  109 => 21,  104 => 88,  102 => 46,  99 => 45,  97 => 21,  93 => 19,  91 => 18,  88 => 17,  86 => 16,  83 => 15,  80 => 14,  77 => 13,  74 => 12,  72 => 11,  69 => 10,  67 => 9,  64 => 8,  61 => 7,  59 => 6,  56 => 5,  54 => 4,  51 => 3,  49 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/product/card/price-unit.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/product/card/price-unit.html.twig");
    }
}
