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

/* @Storefront/storefront/page/product-detail/buy-widget.html.twig */
class __TwigTemplate_5a2d51aac94e70ee2354b449d508ad92963e24df85ab529b124786d00629dee7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_buy_inner' => [$this, 'block_page_product_detail_buy_inner'],
            'page_product_detail_rich_snippets' => [$this, 'block_page_product_detail_rich_snippets'],
            'page_product_detail_rich_snippets_brand' => [$this, 'block_page_product_detail_rich_snippets_brand'],
            'page_product_detail_rich_snippets_gtin13' => [$this, 'block_page_product_detail_rich_snippets_gtin13'],
            'page_product_detail_rich_snippets_mpn' => [$this, 'block_page_product_detail_rich_snippets_mpn'],
            'page_product_detail_rich_snippets_weight' => [$this, 'block_page_product_detail_rich_snippets_weight'],
            'page_product_detail_rich_snippets_height' => [$this, 'block_page_product_detail_rich_snippets_height'],
            'page_product_detail_rich_snippets_width' => [$this, 'block_page_product_detail_rich_snippets_width'],
            'page_product_detail_rich_snippets_depth' => [$this, 'block_page_product_detail_rich_snippets_depth'],
            'page_product_detail_rich_snippets_release_date' => [$this, 'block_page_product_detail_rich_snippets_release_date'],
            'page_product_detail_not_available' => [$this, 'block_page_product_detail_not_available'],
            'page_product_detail_buy_container' => [$this, 'block_page_product_detail_buy_container'],
            'page_product_detail_data' => [$this, 'block_page_product_detail_data'],
            'page_product_detail_data_rich_snippet_url' => [$this, 'block_page_product_detail_data_rich_snippet_url'],
            'page_product_detail_data_rich_snippet_price_range' => [$this, 'block_page_product_detail_data_rich_snippet_price_range'],
            'page_product_detail_data_rich_snippet_price_currency' => [$this, 'block_page_product_detail_data_rich_snippet_price_currency'],
            'page_product_detail_price' => [$this, 'block_page_product_detail_price'],
            'page_product_detail_tax' => [$this, 'block_page_product_detail_tax'],
            'page_product_detail_tax_link' => [$this, 'block_page_product_detail_tax_link'],
            'page_product_detail_reviews' => [$this, 'block_page_product_detail_reviews'],
            'page_product_detail_delivery_informations' => [$this, 'block_page_product_detail_delivery_informations'],
            'page_product_detail_configurator_include' => [$this, 'block_page_product_detail_configurator_include'],
            'page_product_detail_buy_form' => [$this, 'block_page_product_detail_buy_form'],
            'page_product_detail_wishlist' => [$this, 'block_page_product_detail_wishlist'],
            'page_product_detail_ordernumber_container' => [$this, 'block_page_product_detail_ordernumber_container'],
            'page_product_detail_ordernumber_label' => [$this, 'block_page_product_detail_ordernumber_label'],
            'page_product_detail_ordernumber' => [$this, 'block_page_product_detail_ordernumber'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_product_detail_buy_inner', $context, $blocks);
    }

    public function block_page_product_detail_buy_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"js-magnifier-zoom-image-container\">
        ";
        // line 3
        $this->displayBlock('page_product_detail_rich_snippets', $context, $blocks);
        // line 59
        echo "
        ";
        // line 60
        if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_16992")) {
            // line 61
            echo "            ";
            // line 62
            echo "            ";
            $this->displayBlock('page_product_detail_not_available', $context, $blocks);
            // line 64
            echo "        ";
        }
        // line 65
        echo "
        ";
        // line 66
        $this->displayBlock('page_product_detail_buy_container', $context, $blocks);
        // line 180
        echo "
        ";
        // line 181
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.wishlistEnabled")) {
            // line 182
            echo "            ";
            $this->displayBlock('page_product_detail_wishlist', $context, $blocks);
            // line 189
            echo "        ";
        }
        // line 190
        echo "
        ";
        // line 191
        $this->displayBlock('page_product_detail_ordernumber_container', $context, $blocks);
        // line 211
        echo "    </div>
";
    }

    // line 3
    public function block_page_product_detail_rich_snippets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            ";
        $this->displayBlock('page_product_detail_rich_snippets_brand', $context, $blocks);
        // line 11
        echo "
            ";
        // line 12
        $this->displayBlock('page_product_detail_rich_snippets_gtin13', $context, $blocks);
        // line 18
        echo "
            ";
        // line 19
        $this->displayBlock('page_product_detail_rich_snippets_mpn', $context, $blocks);
        // line 25
        echo "
            ";
        // line 26
        $this->displayBlock('page_product_detail_rich_snippets_weight', $context, $blocks);
        // line 32
        echo "
            ";
        // line 33
        $this->displayBlock('page_product_detail_rich_snippets_height', $context, $blocks);
        // line 39
        echo "
            ";
        // line 40
        $this->displayBlock('page_product_detail_rich_snippets_width', $context, $blocks);
        // line 46
        echo "
            ";
        // line 47
        $this->displayBlock('page_product_detail_rich_snippets_depth', $context, $blocks);
        // line 53
        echo "
            ";
        // line 54
        $this->displayBlock('page_product_detail_rich_snippets_release_date', $context, $blocks);
        // line 58
        echo "        ";
    }

    // line 4
    public function block_page_product_detail_rich_snippets_brand($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 5), "manufacturer", [], "any", false, false, false, 5)) {
            // line 6
            echo "                    <div itemprop=\"brand\" itemtype=\"https://schema.org/Brand\" itemscope>
                        <meta itemprop=\"name\" content=\"";
            // line 7
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 7), "manufacturer", [], "any", false, false, false, 7), "translated", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
            echo "\" />
                    </div>
                ";
        }
        // line 10
        echo "            ";
    }

    // line 12
    public function block_page_product_detail_rich_snippets_gtin13($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "                ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 13), "ean", [], "any", false, false, false, 13)) {
            // line 14
            echo "                    <meta itemprop=\"gtin13\"
                          content=\"";
            // line 15
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 15), "ean", [], "any", false, false, false, 15), "html", null, true);
            echo "\"/>
                ";
        }
        // line 17
        echo "            ";
    }

    // line 19
    public function block_page_product_detail_rich_snippets_mpn($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 20), "manufacturerNumber", [], "any", false, false, false, 20)) {
            // line 21
            echo "                    <meta itemprop=\"mpn\"
                          content=\"";
            // line 22
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 22), "manufacturerNumber", [], "any", false, false, false, 22), "html", null, true);
            echo "\"/>
                ";
        }
        // line 24
        echo "            ";
    }

    // line 26
    public function block_page_product_detail_rich_snippets_weight($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "                ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 27), "weight", [], "any", false, false, false, 27)) {
            // line 28
            echo "                    <meta itemprop=\"weight\"
                          content=\"";
            // line 29
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 29), "weight", [], "any", false, false, false, 29), "html", null, true);
            echo " kg\"/>
                ";
        }
        // line 31
        echo "            ";
    }

    // line 33
    public function block_page_product_detail_rich_snippets_height($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 34), "height", [], "any", false, false, false, 34)) {
            // line 35
            echo "                    <meta itemprop=\"height\"
                          content=\"";
            // line 36
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 36), "height", [], "any", false, false, false, 36), "html", null, true);
            echo " mm\"/>
                ";
        }
        // line 38
        echo "            ";
    }

    // line 40
    public function block_page_product_detail_rich_snippets_width($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 41), "width", [], "any", false, false, false, 41)) {
            // line 42
            echo "                    <meta itemprop=\"width\"
                          content=\"";
            // line 43
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 43), "width", [], "any", false, false, false, 43), "html", null, true);
            echo " mm\"/>
                ";
        }
        // line 45
        echo "            ";
    }

    // line 47
    public function block_page_product_detail_rich_snippets_depth($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "                ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 48), "length", [], "any", false, false, false, 48)) {
            // line 49
            echo "                    <meta itemprop=\"depth\"
                          content=\"";
            // line 50
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 50), "length", [], "any", false, false, false, 50), "html", null, true);
            echo " mm\"/>
                ";
        }
        // line 52
        echo "            ";
    }

    // line 54
    public function block_page_product_detail_rich_snippets_release_date($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                <meta itemprop=\"releaseDate\"
                      content=\"";
        // line 56
        echo sw_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 56), "releaseDate", [], "any", false, false, false, 56), "medium", "Y-MM-dd", null, "gregorian", sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 56), "locale", [], "any", false, false, false, 56)), "html", null, true);
        echo "\"/>
            ";
    }

    // line 62
    public function block_page_product_detail_not_available($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "            ";
    }

    // line 66
    public function block_page_product_detail_buy_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "            <div itemprop=\"offers\"
                 itemscope
                 itemtype=\"";
        // line 69
        if ((1 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 69), "calculatedPrices", [], "any", false, false, false, 69)), 1))) {
            echo "http://schema.org/AggregateOffer";
        } else {
            echo "http://schema.org/Offer";
        }
        echo "\">
                ";
        // line 70
        $this->displayBlock('page_product_detail_data', $context, $blocks);
        // line 162
        echo "
                ";
        // line 163
        $this->displayBlock('page_product_detail_configurator_include', $context, $blocks);
        // line 170
        echo "
                ";
        // line 171
        $this->displayBlock('page_product_detail_buy_form', $context, $blocks);
        // line 178
        echo "            </div>
        ";
    }

    // line 70
    public function block_page_product_detail_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "                    ";
        $this->displayBlock('page_product_detail_data_rich_snippet_url', $context, $blocks);
        // line 75
        echo "
                    ";
        // line 76
        $this->displayBlock('page_product_detail_data_rich_snippet_price_range', $context, $blocks);
        // line 95
        echo "
                    ";
        // line 96
        $this->displayBlock('page_product_detail_data_rich_snippet_price_currency', $context, $blocks);
        // line 100
        echo "
                    ";
        // line 101
        $this->displayBlock('page_product_detail_price', $context, $blocks);
        // line 106
        echo "
                    ";
        // line 107
        $this->displayBlock('page_product_detail_tax', $context, $blocks);
        // line 128
        echo "
                    ";
        // line 129
        $context["remoteClickOptions"] = ["selector" => "#review-tab", "scrollToElement" => true];
        // line 133
        echo "
                    ";
        // line 134
        $this->displayBlock('page_product_detail_reviews', $context, $blocks);
        // line 155
        echo "
                    ";
        // line 156
        $this->displayBlock('page_product_detail_delivery_informations', $context, $blocks);
        // line 161
        echo "                ";
    }

    // line 71
    public function block_page_product_detail_data_rich_snippet_url($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "                        <meta itemprop=\"url\"
                              content=\"";
        // line 73
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73)]), "html", null, true);
        echo "\"/>
                    ";
    }

    // line 76
    public function block_page_product_detail_data_rich_snippet_price_range($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "                        ";
        if ((1 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 77), "calculatedPrices", [], "any", false, false, false, 77)), 1))) {
            // line 78
            echo "                            ";
            $context["lowestPrice"] = false;
            // line 79
            echo "                            ";
            $context["highestPrice"] = false;
            // line 80
            echo "
                            ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 81), "calculatedPrices", [], "any", false, false, false, 81));
            foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
                // line 82
                echo "                                ";
                if (( !($context["lowestPrice"] ?? null) || (-1 === twig_compare(sw_get_attribute($this->env, $this->source, $context["price"], "unitPrice", [], "any", false, false, false, 82), ($context["lowestPrice"] ?? null))))) {
                    // line 83
                    echo "                                    ";
                    $context["lowestPrice"] = sw_get_attribute($this->env, $this->source, $context["price"], "unitPrice", [], "any", false, false, false, 83);
                    // line 84
                    echo "                                ";
                }
                // line 85
                echo "                                ";
                if (( !($context["highestPrice"] ?? null) || (1 === twig_compare(sw_get_attribute($this->env, $this->source, $context["price"], "unitPrice", [], "any", false, false, false, 85), ($context["highestPrice"] ?? null))))) {
                    // line 86
                    echo "                                    ";
                    $context["highestPrice"] = sw_get_attribute($this->env, $this->source, $context["price"], "unitPrice", [], "any", false, false, false, 86);
                    // line 87
                    echo "                                ";
                }
                // line 88
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "
                            <meta itemprop=\"lowPrice\" content=\"";
            // line 90
            echo sw_escape_filter($this->env, ($context["lowestPrice"] ?? null), "html", null, true);
            echo "\"/>
                            <meta itemprop=\"highPrice\" content=\"";
            // line 91
            echo sw_escape_filter($this->env, ($context["highestPrice"] ?? null), "html", null, true);
            echo "\"/>
                            <meta itemprop=\"offerCount\" content=\"";
            // line 92
            echo sw_escape_filter($this->env, twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 92), "calculatedPrices", [], "any", false, false, false, 92)), "html", null, true);
            echo "\"/>
                        ";
        }
        // line 94
        echo "                    ";
    }

    // line 96
    public function block_page_product_detail_data_rich_snippet_price_currency($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "                        <meta itemprop=\"priceCurrency\"
                              content=\"";
        // line 98
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "currency", [], "any", false, false, false, 98), "translated", [], "any", false, false, false, 98), "shortName", [], "any", false, false, false, 98), "html", null, true);
        echo "\"/>
                    ";
    }

    // line 101
    public function block_page_product_detail_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        echo "                        <div class=\"product-detail-price-container\">
                            ";
        // line 103
        $this->loadTemplate("@Storefront/storefront/page/product-detail/buy-widget-price.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 103)->display($context);
        // line 104
        echo "                        </div>
                    ";
    }

    // line 107
    public function block_page_product_detail_tax($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 108
        echo "                        <div class=\"product-detail-tax-container\">
                            ";
        // line 109
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "taxState", [], "any", false, false, false, 109), "gross"))) {
            // line 110
            echo "                                ";
            $context["taxText"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.grossTaxInformation"));
            // line 111
            echo "                            ";
        } else {
            // line 112
            echo "                                ";
            $context["taxText"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.netTaxInformation"));
            // line 113
            echo "                            ";
        }
        // line 114
        echo "
                            <p class=\"product-detail-tax\">
                                ";
        // line 116
        $this->displayBlock('page_product_detail_tax_link', $context, $blocks);
        // line 125
        echo "                            </p>
                        </div>
                    ";
    }

    // line 116
    public function block_page_product_detail_tax_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 117
        echo "                                    <a class=\"product-detail-tax-link\"
                                       href=\"";
        // line 118
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shippingPaymentInfoPage")]), "html", null, true);
        echo "\"
                                       title=\"";
        // line 119
        echo sw_escape_filter($this->env, ($context["taxText"] ?? null), "html", null, true);
        echo "\"
                                       ";
        // line 120
        echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
        echo "=\"modal\"
                                       data-url=\"";
        // line 121
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shippingPaymentInfoPage")]), "html", null, true);
        echo "\">
                                        ";
        // line 122
        echo sw_escape_filter($this->env, ($context["taxText"] ?? null), "html", null, true);
        echo "
                                    </a>
                                ";
    }

    // line 134
    public function block_page_product_detail_reviews($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 135
        echo "                        ";
        if ((((1 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 135), "ratingAverage", [], "any", false, false, false, 135), 0)) && (1 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "reviews", [], "any", false, false, false, 135), "totalReviews", [], "any", false, false, false, 135), 0))) && $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.listing.showReview"))) {
            // line 136
            echo "                            <div class=\"product-detail-reviews\">

                                ";
            // line 138
            $this->loadTemplate("@Storefront/storefront/component/review/rating.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 138)->display(twig_array_merge($context, ["points" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 139
($context["page"] ?? null), "product", [], "any", false, false, false, 139), "ratingAverage", [], "any", false, false, false, 139), "style" => "text-primary"]));
            // line 142
            echo "                                <a ";
            echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
            echo "=\"tab\"
                                   class=\"product-detail-reviews-link\"
                                   data-offcanvas-tabs=\"true\"
                                   data-remote-click=\"true\"
                                   data-remote-click-options='";
            // line 146
            echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["remoteClickOptions"] ?? null)]), "html", null, true);
            echo "'
                                   href=\"#review-tab-pane\"
                                   aria-controls=\"review-tab-pane\">
                                    ";
            // line 149
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "reviews", [], "any", false, false, false, 149), "totalReviews", [], "any", false, false, false, 149), "html", null, true);
            echo "
                                    ";
            // line 150
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewLinkText", ["%count%" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "reviews", [], "any", false, false, false, 150), "totalReviews", [], "any", false, false, false, 150)]));
            echo "
                                </a>
                            </div>
                        ";
        }
        // line 154
        echo "                    ";
    }

    // line 156
    public function block_page_product_detail_delivery_informations($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 157
        echo "                        <div class=\"product-detail-delivery-information\">
                            ";
        // line 158
        $this->loadTemplate("@Storefront/storefront/component/delivery-information.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 158)->display($context);
        // line 159
        echo "                        </div>
                    ";
    }

    // line 163
    public function block_page_product_detail_configurator_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 164
        echo "                    ";
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 164), "parentId", [], "any", false, false, false, 164) && (1 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "configuratorSettings", [], "any", false, false, false, 164)), 0)))) {
            // line 165
            echo "                        <div class=\"product-detail-configurator-container\">
                            ";
            // line 166
            $this->loadTemplate("@Storefront/storefront/page/product-detail/configurator.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 166)->display($context);
            // line 167
            echo "                        </div>
                    ";
        }
        // line 169
        echo "                ";
    }

    // line 171
    public function block_page_product_detail_buy_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 172
        echo "                    ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 172), "active", [], "any", false, false, false, 172)) {
            // line 173
            echo "                        <div class=\"product-detail-form-container\">
                            ";
            // line 174
            $this->loadTemplate("@Storefront/storefront/page/product-detail/buy-widget-form.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 174)->display($context);
            // line 175
            echo "                        </div>
                    ";
        }
        // line 177
        echo "                ";
    }

    // line 182
    public function block_page_product_detail_wishlist($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 183
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/wishlist.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 183)->display(twig_array_merge($context, ["showText" => true, "size" => "md", "productId" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 186
($context["page"] ?? null), "product", [], "any", false, false, false, 186), "id", [], "any", false, false, false, 186)]));
        // line 188
        echo "            ";
    }

    // line 191
    public function block_page_product_detail_ordernumber_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 192
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 192), "productNumber", [], "any", false, false, false, 192)) {
            // line 193
            echo "                <div class=\"product-detail-ordernumber-container\">
                    ";
            // line 194
            $this->displayBlock('page_product_detail_ordernumber_label', $context, $blocks);
            // line 199
            echo "
                    ";
            // line 200
            $this->displayBlock('page_product_detail_ordernumber', $context, $blocks);
            // line 208
            echo "                </div>
            ";
        }
        // line 210
        echo "        ";
    }

    // line 194
    public function block_page_product_detail_ordernumber_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 195
        echo "                        <span class=\"product-detail-ordernumber-label\">
                            ";
        // line 196
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.productNumberLabel"));
        echo "
                        </span>
                    ";
    }

    // line 200
    public function block_page_product_detail_ordernumber($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 201
        echo "                        <meta itemprop=\"productID\"
                              content=\"";
        // line 202
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 202), "id", [], "any", false, false, false, 202), "html", null, true);
        echo "\"/>
                        <span class=\"product-detail-ordernumber\"
                              itemprop=\"sku\">
                            ";
        // line 205
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 205), "productNumber", [], "any", false, false, false, 205), "html", null, true);
        echo "
                        </span>
                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/buy-widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  723 => 205,  717 => 202,  714 => 201,  710 => 200,  703 => 196,  700 => 195,  696 => 194,  692 => 210,  688 => 208,  686 => 200,  683 => 199,  681 => 194,  678 => 193,  675 => 192,  671 => 191,  667 => 188,  665 => 186,  663 => 183,  659 => 182,  655 => 177,  651 => 175,  649 => 174,  646 => 173,  643 => 172,  639 => 171,  635 => 169,  631 => 167,  629 => 166,  626 => 165,  623 => 164,  619 => 163,  614 => 159,  612 => 158,  609 => 157,  605 => 156,  601 => 154,  594 => 150,  590 => 149,  584 => 146,  576 => 142,  574 => 139,  573 => 138,  569 => 136,  566 => 135,  562 => 134,  555 => 122,  551 => 121,  547 => 120,  543 => 119,  539 => 118,  536 => 117,  532 => 116,  526 => 125,  524 => 116,  520 => 114,  517 => 113,  514 => 112,  511 => 111,  508 => 110,  506 => 109,  503 => 108,  499 => 107,  494 => 104,  492 => 103,  489 => 102,  485 => 101,  479 => 98,  476 => 97,  472 => 96,  468 => 94,  463 => 92,  459 => 91,  455 => 90,  452 => 89,  446 => 88,  443 => 87,  440 => 86,  437 => 85,  434 => 84,  431 => 83,  428 => 82,  424 => 81,  421 => 80,  418 => 79,  415 => 78,  412 => 77,  408 => 76,  402 => 73,  399 => 72,  395 => 71,  391 => 161,  389 => 156,  386 => 155,  384 => 134,  381 => 133,  379 => 129,  376 => 128,  374 => 107,  371 => 106,  369 => 101,  366 => 100,  364 => 96,  361 => 95,  359 => 76,  356 => 75,  353 => 71,  349 => 70,  344 => 178,  342 => 171,  339 => 170,  337 => 163,  334 => 162,  332 => 70,  324 => 69,  320 => 67,  316 => 66,  312 => 63,  308 => 62,  302 => 56,  299 => 55,  295 => 54,  291 => 52,  286 => 50,  283 => 49,  280 => 48,  276 => 47,  272 => 45,  267 => 43,  264 => 42,  261 => 41,  257 => 40,  253 => 38,  248 => 36,  245 => 35,  242 => 34,  238 => 33,  234 => 31,  229 => 29,  226 => 28,  223 => 27,  219 => 26,  215 => 24,  210 => 22,  207 => 21,  204 => 20,  200 => 19,  196 => 17,  191 => 15,  188 => 14,  185 => 13,  181 => 12,  177 => 10,  171 => 7,  168 => 6,  165 => 5,  161 => 4,  157 => 58,  155 => 54,  152 => 53,  150 => 47,  147 => 46,  145 => 40,  142 => 39,  140 => 33,  137 => 32,  135 => 26,  132 => 25,  130 => 19,  127 => 18,  125 => 12,  122 => 11,  119 => 4,  115 => 3,  110 => 211,  108 => 191,  105 => 190,  102 => 189,  99 => 182,  97 => 181,  94 => 180,  92 => 66,  89 => 65,  86 => 64,  83 => 62,  81 => 61,  79 => 60,  76 => 59,  74 => 3,  71 => 2,  64 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/buy-widget.html.twig");
    }
}
