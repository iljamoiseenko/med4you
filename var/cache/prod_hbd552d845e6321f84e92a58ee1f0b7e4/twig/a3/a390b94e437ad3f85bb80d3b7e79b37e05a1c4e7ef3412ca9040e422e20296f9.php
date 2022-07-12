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

/* @Storefront/storefront/page/product-detail/buy-widget-price.html.twig */
class __TwigTemplate_002c5d556ecdce1d5c48ee7a0d386f45d257e7be4c81b03706a4a9e11a6b7ae0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_price_inner' => [$this, 'block_page_product_detail_price_inner'],
            'page_product_detail_price_block' => [$this, 'block_page_product_detail_price_block'],
            'page_product_detail_price_block_table' => [$this, 'block_page_product_detail_price_block_table'],
            'page_product_detail_price_block_table_head' => [$this, 'block_page_product_detail_price_block_table_head'],
            'page_product_detail_price_block_table_head_inner' => [$this, 'block_page_product_detail_price_block_table_head_inner'],
            'page_product_detail_price_block_table_body' => [$this, 'block_page_product_detail_price_block_table_body'],
            'page_product_detail_price_block_table_body_inner' => [$this, 'block_page_product_detail_price_block_table_body_inner'],
            'page_product_detail_price_block_table_body_row' => [$this, 'block_page_product_detail_price_block_table_body_row'],
            'page_product_detail_price_block_table_body_cell_quantity' => [$this, 'block_page_product_detail_price_block_table_body_cell_quantity'],
            'page_product_detail_price_block_table_body_cell_price' => [$this, 'block_page_product_detail_price_block_table_body_cell_price'],
            'page_product_detail_price_block_table_body_cell_reference_price' => [$this, 'block_page_product_detail_price_block_table_body_cell_reference_price'],
            'page_product_detail_price_content' => [$this, 'block_page_product_detail_price_content'],
            'page_product_detail_was_price' => [$this, 'block_page_product_detail_was_price'],
            'page_product_detail_was_price_badge' => [$this, 'block_page_product_detail_was_price_badge'],
            'page_product_detail_was_price_wrapper' => [$this, 'block_page_product_detail_was_price_wrapper'],
            'page_product_detail_price_unit' => [$this, 'block_page_product_detail_price_unit'],
            'page_product_detail_price_unit_label' => [$this, 'block_page_product_detail_price_unit_label'],
            'page_product_detail_price_unit_content' => [$this, 'block_page_product_detail_price_unit_content'],
            'page_product_detail_price_unit_reference_content' => [$this, 'block_page_product_detail_price_unit_reference_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_product_detail_price_inner', $context, $blocks);
    }

    public function block_page_product_detail_price_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if ((1 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 2), "calculatedPrices", [], "any", false, false, false, 2)), 1))) {
            // line 3
            echo "        ";
            $this->displayBlock('page_product_detail_price_block', $context, $blocks);
            // line 77
            echo "    ";
        } else {
            // line 78
            echo "        ";
            $context["price"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 78), "calculatedPrice", [], "any", false, false, false, 78);
            // line 79
            echo "
        ";
            // line 80
            if ((0 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 80), "calculatedPrices", [], "any", false, false, false, 80)), 1))) {
                // line 81
                echo "            ";
                $context["price"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 81), "calculatedPrices", [], "any", false, false, false, 81), "first", [], "any", false, false, false, 81);
                // line 82
                echo "        ";
            }
            // line 83
            echo "
        <meta itemprop=\"price\"
              content=\"";
            // line 85
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "unitPrice", [], "any", false, false, false, 85), "html", null, true);
            echo "\">

        ";
            // line 87
            $this->displayBlock('page_product_detail_price_content', $context, $blocks);
            // line 127
            echo "
        ";
            // line 128
            if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 128), "purchaseUnit", [], "any", false, false, false, 128)) {
                // line 129
                echo "            ";
                $this->displayBlock('page_product_detail_price_unit', $context, $blocks);
                // line 152
                echo "        ";
            }
            // line 153
            echo "    ";
        }
    }

    // line 3
    public function block_page_product_detail_price_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            <div class=\"product-block-prices\">
                ";
        // line 5
        $this->displayBlock('page_product_detail_price_block_table', $context, $blocks);
        // line 75
        echo "            </div>
        ";
    }

    // line 5
    public function block_page_product_detail_price_block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "                    <table class=\"table product-block-prices-grid\">
                        ";
        // line 7
        $this->displayBlock('page_product_detail_price_block_table_head', $context, $blocks);
        // line 26
        echo "
                        ";
        // line 27
        $this->displayBlock('page_product_detail_price_block_table_body', $context, $blocks);
        // line 73
        echo "                    </table>
                ";
    }

    // line 7
    public function block_page_product_detail_price_block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "                            <thead class=\"product-block-prices-head\">
                                ";
        // line 9
        $this->displayBlock('page_product_detail_price_block_table_head_inner', $context, $blocks);
        // line 24
        echo "                            </thead>
                        ";
    }

    // line 9
    public function block_page_product_detail_price_block_table_head_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                                    <tr class=\"product-block-prices-row\">
                                        <th scope=\"col\" class=\"product-block-prices-cell\">
                                            ";
        // line 12
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.dataColumnQuantity"));
        echo "
                                        </th>
                                        <th scope=\"col\" class=\"product-block-prices-cell\">
                                            ";
        // line 15
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.dataColumnPrice"));
        echo "
                                        </th>
                                        ";
        // line 17
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 17), "calculatedPrice", [], "any", false, false, false, 17), "referencePrice", [], "any", false, false, false, 17)) {
            // line 18
            echo "                                            <th scope=\"col\" class=\"product-block-prices-cell\">
                                                ";
            // line 19
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.dataColumnReferencePrice"));
            echo "
                                            </th>
                                        ";
        }
        // line 22
        echo "                                    </tr>
                                ";
    }

    // line 27
    public function block_page_product_detail_price_block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                            <tbody class=\"product-block-prices-body\">
                                ";
        // line 29
        $this->displayBlock('page_product_detail_price_block_table_body_inner', $context, $blocks);
        // line 71
        echo "                            </tbody>
                        ";
    }

    // line 29
    public function block_page_product_detail_price_block_table_body_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 30), "calculatedPrices", [], "any", false, false, false, 30));
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
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 31
            echo "                                        ";
            $this->displayBlock('page_product_detail_price_block_table_body_row', $context, $blocks);
            // line 69
            echo "                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                                ";
    }

    // line 31
    public function block_page_product_detail_price_block_table_body_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "                                            <tr class=\"product-block-prices-row\"
                                                itemprop=\"offers\" itemscope
                                                itemtype=\"https://schema.org/Offer\">

                                                ";
        // line 36
        $this->displayBlock('page_product_detail_price_block_table_body_cell_quantity', $context, $blocks);
        // line 51
        echo "
                                                ";
        // line 52
        $this->displayBlock('page_product_detail_price_block_table_body_cell_price', $context, $blocks);
        // line 59
        echo "
                                                ";
        // line 60
        $this->displayBlock('page_product_detail_price_block_table_body_cell_reference_price', $context, $blocks);
        // line 67
        echo "                                            </tr>
                                        ";
    }

    // line 36
    public function block_page_product_detail_price_block_table_body_cell_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "                                                    <th scope=\"row\" class=\"product-block-prices-cell product-block-prices-cell-thin\">
                                                        <meta itemprop=\"priceCurrency\" content=\"";
        // line 38
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 38), "activeCurrency", [], "any", false, false, false, 38), "translated", [], "any", false, false, false, 38), "shortName", [], "any", false, false, false, 38), "html", null, true);
        echo "\" />
                                                        <meta itemprop=\"price\" content=\"";
        // line 39
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "unitPrice", [], "any", false, false, false, 39), "html", null, true);
        echo "\" />

                                                        ";
        // line 41
        if (sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "last", [], "any", false, false, false, 41)) {
            // line 42
            echo "                                                            ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.priceDataInfoFrom"));
            echo "
                                                            <span class=\"product-block-prices-quantity\">";
            // line 43
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "quantity", [], "any", false, false, false, 43), "html", null, true);
            echo "</span>

                                                        ";
        } else {
            // line 46
            echo "                                                            ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.priceDataInfoUntil"));
            echo "
                                                            <span class=\"product-block-prices-quantity\">";
            // line 47
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "quantity", [], "any", false, false, false, 47), "html", null, true);
            echo "</span>
                                                        ";
        }
        // line 49
        echo "                                                    </th>
                                                ";
    }

    // line 52
    public function block_page_product_detail_price_block_table_body_cell_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "                                                    <td class=\"product-block-prices-cell\">
                                                        ";
        // line 54
        $this->loadTemplate("@Storefront/storefront/component/product/block-price.html.twig", "@Storefront/storefront/page/product-detail/buy-widget-price.html.twig", 54)->display(twig_to_array(["price" =>         // line 55
($context["price"] ?? null)]));
        // line 57
        echo "                                                    </td>
                                                ";
    }

    // line 60
    public function block_page_product_detail_price_block_table_body_cell_reference_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "                                                    ";
        if ( !(null === sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 61))) {
            // line 62
            echo "                                                        <td class=\"product-block-prices-cell product-block-prices-cell-thin\">
                                                            ";
            // line 63
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 63), "price", [], "any", false, false, false, 63)), "html", null, true);
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo " / ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 63), "referenceUnit", [], "any", false, false, false, 63), "html", null, true);
            echo " ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 63), "unitName", [], "any", false, false, false, 63), "html", null, true);
            echo "
                                                        </td>
                                                    ";
        }
        // line 66
        echo "                                                ";
    }

    // line 87
    public function block_page_product_detail_price_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "            ";
        $context["listPrice"] = sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "listPrice", [], "any", false, false, false, 88);
        // line 89
        echo "            ";
        $context["isListPrice"] = (1 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "percentage", [], "any", false, false, false, 89), 0));
        // line 90
        echo "            ";
        $context["isRegulationPrice"] = (0 !== twig_compare(sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "regulationPrice", [], "any", false, false, false, 90), null));
        // line 91
        echo "
            <p class=\"product-detail-price";
        // line 92
        if (($context["isListPrice"] ?? null)) {
            echo " with-list-price";
        }
        if (($context["isRegulationPrice"] ?? null)) {
            echo " with-regulation-price";
        }
        echo "\">
                ";
        // line 93
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "unitPrice", [], "any", false, false, false, 93)), "html", null, true);
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "
            </p>

            ";
        // line 96
        if (($context["isListPrice"] ?? null)) {
            // line 97
            echo "                ";
            $this->displayBlock('page_product_detail_was_price', $context, $blocks);
            // line 120
            echo "            ";
        }
        // line 121
        echo "            ";
        if (($context["isRegulationPrice"] ?? null)) {
            // line 122
            echo "                <span class=\"product-detail-list-price-wrapper\">
                    <span class=\"regulation-price\">";
            // line 123
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.listPricePreviously", ["%price%" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "regulationPrice", [], "any", false, false, false, 123), "price", [], "any", false, false, false, 123))]), "html", null, true);
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo "</span>
                </span>
            ";
        }
        // line 126
        echo "        ";
    }

    // line 97
    public function block_page_product_detail_was_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "
                    ";
        // line 99
        $this->displayBlock('page_product_detail_was_price_badge', $context, $blocks);
        // line 102
        echo "
                    ";
        // line 103
        $context["afterListPriceSnippetExists"] = (1 === twig_compare(twig_length_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.afterListPrice")), 0));
        // line 104
        echo "                    ";
        $context["beforeListPriceSnippetExists"] = (1 === twig_compare(twig_length_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.beforeListPrice")), 0));
        // line 105
        echo "
                    ";
        // line 106
        $this->displayBlock('page_product_detail_was_price_wrapper', $context, $blocks);
        // line 119
        echo "                ";
    }

    // line 99
    public function block_page_product_detail_was_price_badge($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "                        <span class=\"list-price-badge\">&#37;</span>
                    ";
    }

    // line 106
    public function block_page_product_detail_was_price_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "                        <span class=\"product-detail-list-price-wrapper\">
                            ";
        // line 108
        if (($context["beforeListPriceSnippetExists"] ?? null)) {
            echo sw_escape_filter($this->env, twig_trim_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.beforeListPrice")), "html", null, true);
        }
        // line 109
        echo "
                            <span";
        // line 110
        if ( !(($context["afterListPriceSnippetExists"] ?? null) || ($context["beforeListPriceSnippetExists"] ?? null))) {
            echo " class=\"list-price-price\"";
        }
        echo ">";
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "price", [], "any", false, false, false, 110)), "html", null, true);
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "</span>

                            ";
        // line 112
        if (($context["afterListPriceSnippetExists"] ?? null)) {
            // line 113
            echo "                                ";
            echo sw_escape_filter($this->env, twig_trim_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.afterListPrice")), "html", null, true);
            echo "
                            ";
        }
        // line 115
        echo "
                            <span class=\"list-price-percentage\">";
        // line 116
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.listPricePercentage", ["%price%" => sw_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "percentage", [], "any", false, false, false, 116)]));
        echo "</span>
                        </span>
                    ";
    }

    // line 129
    public function block_page_product_detail_price_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        echo "                <div class=\"product-detail-price-unit\">
                    ";
        // line 131
        $this->displayBlock('page_product_detail_price_unit_label', $context, $blocks);
        // line 136
        echo "
                    ";
        // line 137
        $this->displayBlock('page_product_detail_price_unit_content', $context, $blocks);
        // line 142
        echo "
                    ";
        // line 143
        if ( !(null === sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 143))) {
            // line 144
            echo "                        ";
            $this->displayBlock('page_product_detail_price_unit_reference_content', $context, $blocks);
            // line 149
            echo "                    ";
        }
        // line 150
        echo "                </div>
            ";
    }

    // line 131
    public function block_page_product_detail_price_unit_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 132
        echo "                        <span class=\"price-unit-label\">
                            ";
        // line 133
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.priceUnitName"));
        echo "
                        </span>
                    ";
    }

    // line 137
    public function block_page_product_detail_price_unit_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "                        <span class=\"price-unit-content\">
                            ";
        // line 139
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 139), "purchaseUnit", [], "any", false, false, false, 139), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 139), "unit", [], "any", false, false, false, 139), "name", [], "any", false, false, false, 139), "html", null, true);
        echo "
                        </span>
                    ";
    }

    // line 144
    public function block_page_product_detail_price_unit_reference_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "                            <span class=\"price-unit-reference-content\">
                                (";
        // line 146
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 146), "price", [], "any", false, false, false, 146)), "html", null, true);
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo " / ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 146), "referenceUnit", [], "any", false, false, false, 146), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 146), "unitName", [], "any", false, false, false, 146), "html", null, true);
        echo ")
                            </span>
                        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/buy-widget-price.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  564 => 146,  561 => 145,  557 => 144,  548 => 139,  545 => 138,  541 => 137,  534 => 133,  531 => 132,  527 => 131,  522 => 150,  519 => 149,  516 => 144,  514 => 143,  511 => 142,  509 => 137,  506 => 136,  504 => 131,  501 => 130,  497 => 129,  490 => 116,  487 => 115,  481 => 113,  479 => 112,  469 => 110,  466 => 109,  462 => 108,  459 => 107,  455 => 106,  450 => 100,  446 => 99,  442 => 119,  440 => 106,  437 => 105,  434 => 104,  432 => 103,  429 => 102,  427 => 99,  424 => 98,  420 => 97,  416 => 126,  409 => 123,  406 => 122,  403 => 121,  400 => 120,  397 => 97,  395 => 96,  388 => 93,  379 => 92,  376 => 91,  373 => 90,  370 => 89,  367 => 88,  363 => 87,  359 => 66,  348 => 63,  345 => 62,  342 => 61,  338 => 60,  333 => 57,  331 => 55,  330 => 54,  327 => 53,  323 => 52,  318 => 49,  313 => 47,  308 => 46,  302 => 43,  297 => 42,  295 => 41,  290 => 39,  286 => 38,  283 => 37,  279 => 36,  274 => 67,  272 => 60,  269 => 59,  267 => 52,  264 => 51,  262 => 36,  256 => 32,  252 => 31,  248 => 70,  234 => 69,  231 => 31,  213 => 30,  209 => 29,  204 => 71,  202 => 29,  199 => 28,  195 => 27,  190 => 22,  184 => 19,  181 => 18,  179 => 17,  174 => 15,  168 => 12,  164 => 10,  160 => 9,  155 => 24,  153 => 9,  150 => 8,  146 => 7,  141 => 73,  139 => 27,  136 => 26,  134 => 7,  131 => 6,  127 => 5,  122 => 75,  120 => 5,  117 => 4,  113 => 3,  108 => 153,  105 => 152,  102 => 129,  100 => 128,  97 => 127,  95 => 87,  90 => 85,  86 => 83,  83 => 82,  80 => 81,  78 => 80,  75 => 79,  72 => 78,  69 => 77,  66 => 3,  63 => 2,  56 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/buy-widget-price.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/buy-widget-price.html.twig");
    }
}
