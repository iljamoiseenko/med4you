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

/* @Storefront/storefront/page/checkout/checkout-item.html.twig */
class __TwigTemplate_be3b3152332e024d6e0ff9d9d231314e1bac29c1c54ee786c5479416f1167231 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_item' => [$this, 'block_page_checkout_item'],
            'page_checkout_item_container' => [$this, 'block_page_checkout_item_container'],
            'page_checkout_item_info' => [$this, 'block_page_checkout_item_info'],
            'page_checkout_item_info_inner' => [$this, 'block_page_checkout_item_info_inner'],
            'page_checkout_item_info_image' => [$this, 'block_page_checkout_item_info_image'],
            'page_checkout_item_info_image_container' => [$this, 'block_page_checkout_item_info_image_container'],
            'page_checkout_item_info_image_link' => [$this, 'block_page_checkout_item_info_image_link'],
            'page_checkout_item_info_image_element' => [$this, 'block_page_checkout_item_info_image_element'],
            'page_checkout_item_info_details' => [$this, 'block_page_checkout_item_info_details'],
            'page_checkout_item_info_details_inner' => [$this, 'block_page_checkout_item_info_details_inner'],
            'page_checkout_item_info_label' => [$this, 'block_page_checkout_item_info_label'],
            'page_checkout_item_info_variant_characteristics' => [$this, 'block_page_checkout_item_info_variant_characteristics'],
            'page_checkout_item_info_features' => [$this, 'block_page_checkout_item_info_features'],
            'page_checkout_item_info_ordernumber' => [$this, 'block_page_checkout_item_info_ordernumber'],
            'page_checkout_item_delivery_date' => [$this, 'block_page_checkout_item_delivery_date'],
            'page_checkout_item_wishlist' => [$this, 'block_page_checkout_item_wishlist'],
            'page_checkout_item_quantity' => [$this, 'block_page_checkout_item_quantity'],
            'page_checkout_item_quantity_label' => [$this, 'block_page_checkout_item_quantity_label'],
            'page_checkout_item_quantity_select' => [$this, 'block_page_checkout_item_quantity_select'],
            'page_checkout_item_quantity_form' => [$this, 'block_page_checkout_item_quantity_form'],
            'page_checkout_item_quantity_form_csrf' => [$this, 'block_page_checkout_item_quantity_form_csrf'],
            'page_checkout_item_quantity_redirect' => [$this, 'block_page_checkout_item_quantity_redirect'],
            'page_product_detail_buy_quantity' => [$this, 'block_page_product_detail_buy_quantity'],
            'page_product_detail_buy_quantity_input' => [$this, 'block_page_product_detail_buy_quantity_input'],
            'page_product_detail_buy_quantity_select' => [$this, 'block_page_product_detail_buy_quantity_select'],
            'page_checkout_item_quantity_number' => [$this, 'block_page_checkout_item_quantity_number'],
            'page_checkout_item_unit_price' => [$this, 'block_page_checkout_item_unit_price'],
            'page_checkout_item_unit_price_wrapper' => [$this, 'block_page_checkout_item_unit_price_wrapper'],
            'page_checkout_item_unit_price_label' => [$this, 'block_page_checkout_item_unit_price_label'],
            'page_checkout_item_unit_price_inner' => [$this, 'block_page_checkout_item_unit_price_inner'],
            'page_checkout_item_unit_price_tax_symbol' => [$this, 'block_page_checkout_item_unit_price_tax_symbol'],
            'page_checkout_item_total_price' => [$this, 'block_page_checkout_item_total_price'],
            'page_checkout_item_total_price_wrapper' => [$this, 'block_page_checkout_item_total_price_wrapper'],
            'page_checkout_item_total_price_label' => [$this, 'block_page_checkout_item_total_price_label'],
            'page_checkout_item_total_price_inner' => [$this, 'block_page_checkout_item_total_price_inner'],
            'page_checkout_item_total_price_tax_symbol' => [$this, 'block_page_checkout_item_total_price_tax_symbol'],
            'page_checkout_item_remove' => [$this, 'block_page_checkout_item_remove'],
            'page_checkout_item_remove_form' => [$this, 'block_page_checkout_item_remove_form'],
            'page_checkout_item_remove_form_csrf' => [$this, 'block_page_checkout_item_remove_form_csrf'],
            'page_checkout_item_remove_redirect' => [$this, 'block_page_checkout_item_remove_redirect'],
            'page_checkout_item_remove_submit' => [$this, 'block_page_checkout_item_remove_submit'],
            'page_checkout_item_children_template' => [$this, 'block_page_checkout_item_children_template'],
            'page_checkout_item_children' => [$this, 'block_page_checkout_item_children'],
            'page_checkout_item_child' => [$this, 'block_page_checkout_item_child'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('page_checkout_item', $context, $blocks);
        // line 367
        echo "
";
    }

    // line 3
    public function block_page_checkout_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        // line 6
        echo "    ";
        // line 7
        echo "
    ";
        // line 8
        $context["PRODUCT_LINE_ITEM_TYPE"] = twig_constant("Shopware\\Core\\Checkout\\Cart\\LineItem\\LineItem::PRODUCT_LINE_ITEM_TYPE");
        // line 9
        echo "    ";
        $context["DISCOUNT_LINE_ITEM_TYPE"] = twig_constant("Shopware\\Core\\Checkout\\Cart\\LineItem\\LineItem::DISCOUNT_LINE_ITEM");
        // line 10
        echo "
    ";
        // line 11
        $context["isDiscount"] = (( !sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "good", [], "any", false, false, false, 11) && (0 >= twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "price", [], "any", false, false, false, 11), "totalPrice", [], "any", false, false, false, 11), 0))) || (0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 11), ($context["DISCOUNT_LINE_ITEM_TYPE"] ?? null))));
        // line 12
        echo "    ";
        $context["isNested"] = (1 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "children", [], "any", false, false, false, 12), "count", [], "any", false, false, false, 12), 0));
        // line 13
        echo "
    ";
        // line 15
        echo "    ";
        $context["childTemplate"] = "@Storefront/storefront/page/checkout/checkout-item.html.twig";
        // line 16
        echo "    ";
        $context["childrenTemplate"] = "@Storefront/storefront/page/checkout/checkout-item-children.html.twig";
        // line 17
        echo "    ";
        $context["deliveryPosition"] = null;
        // line 18
        echo "
    ";
        // line 19
        if ((1 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 19), "deliveries", [], "any", false, false, false, 19), "count", [], "any", false, false, false, 19), 0))) {
            // line 20
            echo "        ";
            $context["delivery"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 20), "deliveries", [], "any", false, false, false, 20), "first", [], "any", false, false, false, 20);
            // line 21
            echo "
        ";
            // line 22
            $context["deliveryPosition"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["delivery"] ?? null), "positions", [], "any", false, false, false, 22), "get", [0 => sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "id", [], "any", false, false, false, 22)], "method", false, false, false, 22);
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    ";
        // line 26
        echo "    ";
        $context["cartItemClasses"] = "";
        // line 27
        echo "
    ";
        // line 28
        $context["label"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "label", [], "any", false, false, false, 28)));
        // line 29
        echo "    ";
        $context["label"] = (((($context["label"] ?? null) !== "")) ? (($context["label"] ?? null)) : (sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "label", [], "any", false, false, false, 29)));
        // line 30
        echo "
    ";
        // line 31
        $this->displayBlock('page_checkout_item_container', $context, $blocks);
        // line 363
        echo "
    ";
        // line 365
        echo "    ";
        $this->displayBlock('page_checkout_item_child', $context, $blocks);
    }

    // line 31
    public function block_page_checkout_item_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "        <div class=\"cart-item cart-item-";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 32), "html", null, true);
        if (($context["isDiscount"] ?? null)) {
            echo " is-discount";
        }
        echo sw_escape_filter($this->env, ($context["cartItemClasses"] ?? null), "html", null, true);
        echo "\">
            <div class=\"row cart-item-row\">

                ";
        // line 35
        $this->displayBlock('page_checkout_item_info', $context, $blocks);
        // line 189
        echo "
                ";
        // line 190
        $this->displayBlock('page_checkout_item_quantity', $context, $blocks);
        // line 274
        echo "
                ";
        // line 275
        $this->displayBlock('page_checkout_item_unit_price', $context, $blocks);
        // line 294
        echo "
                ";
        // line 295
        $this->displayBlock('page_checkout_item_total_price', $context, $blocks);
        // line 315
        echo "
                ";
        // line 316
        $this->displayBlock('page_checkout_item_remove', $context, $blocks);
        // line 350
        echo "
                ";
        // line 351
        $this->displayBlock('page_checkout_item_children_template', $context, $blocks);
        // line 359
        echo "
            </div>
        </div>
    ";
    }

    // line 35
    public function block_page_checkout_item_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "                    <div class=\"col-10 col-md-5 cart-item-info\">

                        ";
        // line 38
        $this->displayBlock('page_checkout_item_info_inner', $context, $blocks);
        // line 186
        echo "
                    </div>
                ";
    }

    // line 38
    public function block_page_checkout_item_info_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "                            <div class=\"row cart-item-row\">

                                ";
        // line 41
        $this->displayBlock('page_checkout_item_info_image', $context, $blocks);
        // line 99
        echo "
                                ";
        // line 100
        $this->displayBlock('page_checkout_item_info_details', $context, $blocks);
        // line 183
        echo "
                            </div>
                        ";
    }

    // line 41
    public function block_page_checkout_item_info_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "                                    <div class=\"col-auto cart-item-info-img\">

                                        ";
        // line 44
        $this->displayBlock('page_checkout_item_info_image_container', $context, $blocks);
        // line 96
        echo "
                                    </div>
                                ";
    }

    // line 44
    public function block_page_checkout_item_info_image_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "                                            <div class=\"cart-item-img-container\">

                                                ";
        // line 47
        $this->displayBlock('page_checkout_item_info_image_link', $context, $blocks);
        // line 93
        echo "
                                            </div>
                                        ";
    }

    // line 47
    public function block_page_checkout_item_info_image_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "                                                    ";
        if (($context["isDiscount"] ?? null)) {
            // line 49
            echo "                                                        <div class=\"cart-item-img cart-item-discount-icon\">
                                                            ";
            // line 50
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-item.html.twig", 50);
            })())->display(twig_array_merge($context, ["color" => "success", "name" => "marketing"]));
            // line 53
            echo "                                                        </div>
                                                    ";
        } elseif (        // line 54
($context["isNested"] ?? null)) {
            // line 55
            echo "                                                        <div class=\"cart-item-nested-icon\">
                                                            ";
            // line 56
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-item.html.twig", 56);
            })())->display(twig_array_merge($context, ["color" => "light", "name" => "bag-product"]));
            // line 59
            echo "                                                        </div>
                                                    ";
        } else {
            // line 61
            echo "                                                        <a href=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "referencedId", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\"
                                                           class=\"cart-item-img-link\"
                                                           title=\"";
            // line 63
            echo sw_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "\"
                                                           ";
            // line 64
            if ((($context["controllerAction"] ?? null) === "confirmPage")) {
                // line 65
                echo "                                                               ";
                echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
                echo "=\"modal\"
                                                               data-modal-class=\"quickview-modal\"
                                                               data-url=\"";
                // line 67
                echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("widgets.quickview.minimal", ["productId" => sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "referencedId", [], "any", false, false, false, 67)]), "html", null, true);
                echo "\"
                                                           ";
            }
            // line 69
            echo "                                                        >
                                                            ";
            // line 70
            $this->displayBlock('page_checkout_item_info_image_element', $context, $blocks);
            // line 89
            echo "
                                                        </a>
                                                    ";
        }
        // line 92
        echo "                                                ";
    }

    // line 70
    public function block_page_checkout_item_info_image_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "                                                                ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 71), "url", [], "any", false, false, false, 71)) {
            // line 72
            echo "                                                                    ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-item.html.twig", 72);
            })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,             // line 73
($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 73), "sizes" => ["default" => "100px"], "attributes" => ["class" => "img-fluid cart-item-img", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 79
($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 79), "translated", [], "any", false, false, false, 79), "alt", [], "any", false, false, false, 79)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 79), "translated", [], "any", false, false, false, 79), "alt", [], "any", false, false, false, 79)) : ("")), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 80
($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 80), "translated", [], "any", false, false, false, 80), "title", [], "any", false, false, false, 80)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 80), "translated", [], "any", false, false, false, 80), "title", [], "any", false, false, false, 80)) : (""))], "name" => "cart-item-img-thumbnails"]));
            // line 83
            echo "                                                                ";
        } else {
            // line 84
            echo "                                                                    ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-item.html.twig", 84);
            })())->display(twig_array_merge($context, ["size" => "fluid", "name" => "placeholder"]));
            // line 87
            echo "                                                                ";
        }
        // line 88
        echo "                                                            ";
    }

    // line 100
    public function block_page_checkout_item_info_details($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "                                    <div class=\"col-12 col-sm-7 col-md-8 cart-item-details\">

                                        ";
        // line 103
        $this->displayBlock('page_checkout_item_info_details_inner', $context, $blocks);
        // line 180
        echo "
                                    </div>
                                ";
    }

    // line 103
    public function block_page_checkout_item_info_details_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "                                            <div class=\"cart-item-details-container\">

                                                ";
        // line 106
        $this->displayBlock('page_checkout_item_info_label', $context, $blocks);
        // line 125
        echo "
                                                ";
        // line 126
        $this->displayBlock('page_checkout_item_info_variant_characteristics', $context, $blocks);
        // line 140
        echo "
                                                ";
        // line 141
        $this->displayBlock('page_checkout_item_info_features', $context, $blocks);
        // line 148
        echo "
                                                ";
        // line 149
        $this->displayBlock('page_checkout_item_info_ordernumber', $context, $blocks);
        // line 156
        echo "
                                                ";
        // line 157
        $this->displayBlock('page_checkout_item_delivery_date', $context, $blocks);
        // line 167
        echo "
                                                ";
        // line 168
        $this->displayBlock('page_checkout_item_wishlist', $context, $blocks);
        // line 177
        echo "
                                            </div>
                                        ";
    }

    // line 106
    public function block_page_checkout_item_info_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "                                                    ";
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 107), ($context["PRODUCT_LINE_ITEM_TYPE"] ?? null)))) {
            // line 108
            echo "                                                        <a href=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "referencedId", [], "any", false, false, false, 108)]), "html", null, true);
            echo "\"
                                                           class=\"cart-item-label\"
                                                           title=\"";
            // line 110
            echo sw_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "\"
                                                           ";
            // line 111
            if ((($context["controllerAction"] ?? null) === "confirmPage")) {
                // line 112
                echo "                                                               ";
                echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
                echo "=\"modal\"
                                                               data-modal-class=\"quickview-modal\"
                                                               data-url=\"";
                // line 114
                echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("widgets.quickview.minimal", ["productId" => sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "referencedId", [], "any", false, false, false, 114)]), "html", null, true);
                echo "\"
                                                           ";
            }
            // line 116
            echo "                                                        >
                                                            ";
            // line 117
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["label"] ?? null)), "truncate", [0 => 60, 1 => "...", 2 => false], "method", false, false, false, 117), "html", null, true);
            echo "
                                                        </a>
                                                    ";
        } else {
            // line 120
            echo "                                                        <div class=\"cart-item-label\">
                                                            ";
            // line 121
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["label"] ?? null)), "truncate", [0 => 60, 1 => "...", 2 => false], "method", false, false, false, 121), "html", null, true);
            echo "
                                                        </div>
                                                    ";
        }
        // line 124
        echo "                                                ";
    }

    // line 126
    public function block_page_checkout_item_info_variant_characteristics($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        echo "                                                    <div class=\"cart-item-details-characteristics\">

                                                        ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 129), "options", [], "any", false, false, false, 129));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 130
            echo "                                                            ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["option"], "group", [], "any", false, false, false, 130), "html", null, true);
            echo ":
                                                            <span class=\"cart-item-details-characteristics-option\">";
            // line 131
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["option"], "option", [], "any", false, false, false, 131), "html", null, true);
            echo "</span>

                                                            ";
            // line 133
            if ((0 !== twig_compare(twig_last($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 133), "options", [], "any", false, false, false, 133)), $context["option"]))) {
                // line 134
                echo "                                                                ";
                echo " | ";
                echo "
                                                            ";
            }
            // line 136
            echo "                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "
                                                    </div>
                                                ";
    }

    // line 141
    public function block_page_checkout_item_info_features($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 142
        echo "                                                    ";
        if (((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 142), ($context["PRODUCT_LINE_ITEM_TYPE"] ?? null))) &&  !(null === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 142), "features", [], "any", false, false, false, 142)))) {
            // line 143
            echo "                                                        ";
            $this->loadTemplate("@Storefront/storefront/component/product/feature/list.html.twig", "@Storefront/storefront/page/checkout/checkout-item.html.twig", 143)->display(twig_array_merge($context, ["features" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 144
($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 144), "features", [], "any", false, false, false, 144)]));
            // line 146
            echo "                                                    ";
        }
        // line 147
        echo "                                                ";
    }

    // line 149
    public function block_page_checkout_item_info_ordernumber($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 150
        echo "                                                    ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 150), "productNumber", [], "any", false, false, false, 150)) {
            // line 151
            echo "                                                        <div class=\"cart-item-ordernumber\">
                                                            ";
            // line 152
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartItemInfoId"));
            echo " ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 152), "productNumber", [], "any", false, false, false, 152), "html", null, true);
            echo "
                                                        </div>
                                                    ";
        }
        // line 155
        echo "                                                ";
    }

    // line 157
    public function block_page_checkout_item_delivery_date($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 158
        echo "                                                    ";
        if (((($context["deliveryPosition"] ?? null) && sw_get_attribute($this->env, $this->source, ($context["deliveryPosition"] ?? null), "deliveryDate", [], "any", false, false, false, 158)) && $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.showDeliveryTime"))) {
            // line 159
            echo "                                                        <div class=\"cart-item-delivery-date\">
                                                            ";
            // line 160
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.lineItemDeliveryDate", ["%earliest%" => $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 161
($context["deliveryPosition"] ?? null), "deliveryDate", [], "any", false, false, false, 161), "earliest", [], "any", false, false, false, 161), "short", "", null, "gregorian", sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 161), "locale", [], "any", false, false, false, 161)), "%latest%" => $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 162
($context["deliveryPosition"] ?? null), "deliveryDate", [], "any", false, false, false, 162), "latest", [], "any", false, false, false, 162), "short", "", null, "gregorian", sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 162), "locale", [], "any", false, false, false, 162))]));
            // line 163
            echo "
                                                        </div>
                                                    ";
        }
        // line 166
        echo "                                                ";
    }

    // line 168
    public function block_page_checkout_item_wishlist($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 169
        echo "                                                    ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.wishlistEnabled") && (0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 169), ($context["PRODUCT_LINE_ITEM_TYPE"] ?? null))))) {
            // line 170
            echo "                                                        ";
            $this->loadTemplate("@Storefront/storefront/component/product/card/wishlist.html.twig", "@Storefront/storefront/page/checkout/checkout-item.html.twig", 170)->display(twig_array_merge($context, ["showText" => true, "size" => "sm", "productId" => sw_get_attribute($this->env, $this->source,             // line 173
($context["lineItem"] ?? null), "referencedId", [], "any", false, false, false, 173)]));
            // line 175
            echo "                                                    ";
        }
        // line 176
        echo "                                                ";
    }

    // line 190
    public function block_page_checkout_item_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 191
        echo "                    <div class=\"col-12 col-sm-4 col-md-2 cart-item-quantity\">
                        <div class=\"row cart-item-quantity-row\">

                            ";
        // line 194
        $this->displayBlock('page_checkout_item_quantity_label', $context, $blocks);
        // line 199
        echo "
                            ";
        // line 200
        $this->displayBlock('page_checkout_item_quantity_select', $context, $blocks);
        // line 270
        echo "
                        </div>
                    </div>
                ";
    }

    // line 194
    public function block_page_checkout_item_quantity_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 195
        echo "                                <div class=\"col-8 col-sm-12 cart-item-quantity-label\">
                                    ";
        // line 196
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderQuantity"));
        echo "
                                </div>
                            ";
    }

    // line 200
    public function block_page_checkout_item_quantity_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 201
        echo "                                <div class=\"col-4 col-sm-12\">

                                    ";
        // line 203
        $this->displayBlock('page_checkout_item_quantity_form', $context, $blocks);
        // line 267
        echo "
                                </div>
                            ";
    }

    // line 203
    public function block_page_checkout_item_quantity_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 204
        echo "                                        ";
        // line 205
        echo "                                        ";
        if (((sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantityInformation", [], "any", false, false, false, 205) && sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "stackable", [], "any", false, false, false, 205)) &&  !($context["isChild"] ?? null))) {
            // line 206
            echo "                                            <form action=\"";
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.line-item.change-quantity", ["id" => sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "id", [], "any", false, false, false, 206)]), "html", null, true);
            echo "\"
                                                  class=\"cart-item-quantity-container\"
                                                  method=\"post\"
                                                  data-form-auto-submit=\"true\">

                                                ";
            // line 211
            $this->displayBlock('page_checkout_item_quantity_form_csrf', $context, $blocks);
            // line 214
            echo "
                                                ";
            // line 215
            $this->displayBlock('page_checkout_item_quantity_redirect', $context, $blocks);
            // line 220
            echo "
                                                ";
            // line 222
            echo "                                                ";
            $context["quantityInformation"] = sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantityInformation", [], "any", false, false, false, 222);
            // line 223
            echo "                                                ";
            if (sw_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "maxPurchase", [], "any", false, false, false, 223)) {
                // line 224
                echo "                                                    ";
                $context["maxQuantity"] = sw_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "maxPurchase", [], "any", false, false, false, 224);
                // line 225
                echo "                                                ";
            } else {
                // line 226
                echo "                                                    ";
                $context["maxQuantity"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.maxQuantity");
                // line 227
                echo "                                                ";
            }
            // line 228
            echo "
                                                ";
            // line 229
            $context["selectQuantityThreshold"] = 100;
            // line 230
            echo "                                                ";
            $this->displayBlock('page_product_detail_buy_quantity', $context, $blocks);
            // line 257
            echo "
                                            </form>
                                        ";
        } elseif ((0 !== twig_compare(sw_get_attribute($this->env, $this->source,         // line 259
($context["lineItem"] ?? null), "type", [], "any", false, false, false, 259), "promotion"))) {
            // line 260
            echo "                                            ";
            $this->displayBlock('page_checkout_item_quantity_number', $context, $blocks);
            // line 265
            echo "                                        ";
        }
        // line 266
        echo "                                    ";
    }

    // line 211
    public function block_page_checkout_item_quantity_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 212
        echo "                                                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.line-item.change-quantity");
        echo "
                                                ";
    }

    // line 215
    public function block_page_checkout_item_quantity_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 216
        echo "                                                    <input type=\"hidden\"
                                                           name=\"redirectTo\"
                                                           value=\"frontend.checkout.cart.page\">
                                                ";
    }

    // line 230
    public function block_page_product_detail_buy_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 231
        echo "                                                    ";
        if ((1 === twig_compare((sw_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "maxPurchase", [], "any", false, false, false, 231) / sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantityInformation", [], "any", false, false, false, 231), "purchaseSteps", [], "any", false, false, false, 231)), ($context["selectQuantityThreshold"] ?? null)))) {
            // line 232
            echo "                                                        ";
            $this->displayBlock('page_product_detail_buy_quantity_input', $context, $blocks);
            // line 243
            echo "                                                    ";
        } else {
            // line 244
            echo "                                                        ";
            $this->displayBlock('page_product_detail_buy_quantity_select', $context, $blocks);
            // line 255
            echo "                                                    ";
        }
        // line 256
        echo "                                                ";
    }

    // line 232
    public function block_page_product_detail_buy_quantity_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 233
        echo "                                                            <input
                                                                type=\"number\"
                                                                name=\"quantity\"
                                                                class=\"form-control js-offcanvas-cart-change-quantity\"
                                                                min=\"";
        // line 237
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "minPurchase", [], "any", false, false, false, 237), "html", null, true);
        echo "\"
                                                                max=\"";
        // line 238
        echo sw_escape_filter($this->env, ($context["maxQuantity"] ?? null), "html", null, true);
        echo "\"
                                                                step=\"";
        // line 239
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "purchaseSteps", [], "any", false, false, false, 239), "html", null, true);
        echo "\"
                                                                value=\"";
        // line 240
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantity", [], "any", false, false, false, 240), "html", null, true);
        echo "\"
                                                            />
                                                        ";
    }

    // line 244
    public function block_page_product_detail_buy_quantity_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 245
        echo "                                                            <select name=\"quantity\"
                                                                    class=\"";
        // line 246
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        echo " quantity-select\">
                                                                ";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantityInformation", [], "any", false, false, false, 247), "minPurchase", [], "any", false, false, false, 247), ($context["maxQuantity"] ?? null), sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantityInformation", [], "any", false, false, false, 247), "purchaseSteps", [], "any", false, false, false, 247)));
        foreach ($context['_seq'] as $context["_key"] => $context["quantity"]) {
            // line 248
            echo "                                                                    <option value=\"";
            echo sw_escape_filter($this->env, $context["quantity"], "html", null, true);
            echo "\"
                                                                        ";
            // line 249
            if ((0 === twig_compare($context["quantity"], sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantity", [], "any", false, false, false, 249)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                                                        ";
            // line 250
            echo sw_escape_filter($this->env, $context["quantity"], "html", null, true);
            echo "
                                                                    </option>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quantity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "                                                            </select>
                                                        ";
    }

    // line 260
    public function block_page_checkout_item_quantity_number($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 261
        echo "                                                <div class=\"d-flex justify-content-end cart-item-quantity\">
                                                    ";
        // line 262
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantity", [], "any", false, false, false, 262), "html", null, true);
        echo "
                                                </div>
                                            ";
    }

    // line 275
    public function block_page_checkout_item_unit_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 276
        echo "                    <div class=\"col-12 col-sm-4 col-md-2 cart-item-unit-price\">

                        ";
        // line 278
        $this->displayBlock('page_checkout_item_unit_price_wrapper', $context, $blocks);
        // line 291
        echo "
                    </div>
                ";
    }

    // line 278
    public function block_page_checkout_item_unit_price_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 279
        echo "                            ";
        if ( !($context["isDiscount"] ?? null)) {
            // line 280
            echo "                                ";
            $this->displayBlock('page_checkout_item_unit_price_label', $context, $blocks);
            // line 285
            echo "
                                ";
            // line 286
            $this->displayBlock('page_checkout_item_unit_price_inner', $context, $blocks);
            // line 289
            echo "                            ";
        }
        // line 290
        echo "                        ";
    }

    // line 280
    public function block_page_checkout_item_unit_price_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 281
        echo "                                    <div class=\"cart-item-unit-price-label\">
                                        ";
        // line 282
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderUnitPrice"));
        echo "
                                    </div>
                                ";
    }

    // line 286
    public function block_page_checkout_item_unit_price_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 287
        echo "                                    ";
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "price", [], "any", false, false, false, 287), "unitPrice", [], "any", false, false, false, 287)), "html", null, true);
        $this->displayBlock('page_checkout_item_unit_price_tax_symbol', $context, $blocks);
        // line 288
        echo "                                ";
    }

    // line 287
    public function block_page_checkout_item_unit_price_tax_symbol($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
    }

    // line 295
    public function block_page_checkout_item_total_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 296
        echo "                    <div class=\"col-12 col-sm-4 col-md-2 cart-item-total-price\">

                        ";
        // line 298
        $this->displayBlock('page_checkout_item_total_price_wrapper', $context, $blocks);
        // line 312
        echo "
                    </div>
                ";
    }

    // line 298
    public function block_page_checkout_item_total_price_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 299
        echo "                            ";
        $this->displayBlock('page_checkout_item_total_price_label', $context, $blocks);
        // line 304
        echo "
                            ";
        // line 305
        $this->displayBlock('page_checkout_item_total_price_inner', $context, $blocks);
        // line 311
        echo "                        ";
    }

    // line 299
    public function block_page_checkout_item_total_price_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 300
        echo "                                <div class=\"cart-item-total-price-label\">
                                    ";
        // line 301
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderTotalPrice"));
        echo "
                                </div>
                            ";
    }

    // line 305
    public function block_page_checkout_item_total_price_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 306
        echo "                                ";
        // line 307
        echo "                                ";
        if ((0 !== twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 307), "discountScope", [], "any", false, false, false, 307), "delivery"))) {
            // line 308
            echo "                                    ";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "price", [], "any", false, false, false, 308), "totalPrice", [], "any", false, false, false, 308)), "html", null, true);
            $this->displayBlock('page_checkout_item_total_price_tax_symbol', $context, $blocks);
            // line 309
            echo "                                ";
        }
        // line 310
        echo "                            ";
    }

    // line 308
    public function block_page_checkout_item_total_price_tax_symbol($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
    }

    // line 316
    public function block_page_checkout_item_remove($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 317
        echo "                    <div class=\"col-2 col-md-1 cart-item-remove\">

                        ";
        // line 319
        $this->displayBlock('page_checkout_item_remove_form', $context, $blocks);
        // line 347
        echo "
                    </div>
                ";
    }

    // line 319
    public function block_page_checkout_item_remove_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 320
        echo "                            ";
        if (sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "removable", [], "any", false, false, false, 320)) {
            // line 321
            echo "                                <form action=\"";
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.line-item.delete", ["id" => sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "id", [], "any", false, false, false, 321)]), "html", null, true);
            echo "\"
                                      method=\"post\"
                                      data-form-csrf-handler=\"true\">

                                    ";
            // line 325
            $this->displayBlock('page_checkout_item_remove_form_csrf', $context, $blocks);
            // line 328
            echo "
                                    ";
            // line 329
            $this->displayBlock('page_checkout_item_remove_redirect', $context, $blocks);
            // line 334
            echo "
                                    ";
            // line 335
            $this->displayBlock('page_checkout_item_remove_submit', $context, $blocks);
            // line 343
            echo "
                                </form>
                            ";
        }
        // line 346
        echo "                        ";
    }

    // line 325
    public function block_page_checkout_item_remove_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 326
        echo "                                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.line-item.delete");
        echo "
                                    ";
    }

    // line 329
    public function block_page_checkout_item_remove_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 330
        echo "                                        <input type=\"hidden\"
                                               name=\"redirectTo\"
                                               value=\"frontend.checkout.cart.page\">
                                    ";
    }

    // line 335
    public function block_page_checkout_item_remove_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 336
        echo "                                        <button type=\"submit\"
                                                title=\"";
        // line 337
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.removeLineItem")), "html", null, true);
        echo "\"
                                                data-product-id=\"";
        // line 338
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "id", [], "any", false, false, false, 338), "html", null, true);
        echo "\"
                                                class=\"btn btn-light btn-sm cart-item-remove-button\">
                                            ";
        // line 340
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-item.html.twig", 340);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "x"]));
        // line 341
        echo "                                        </button>
                                    ";
    }

    // line 351
    public function block_page_checkout_item_children_template($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 352
        echo "                    ";
        if (($context["isNested"] ?? null)) {
            // line 353
            echo "                        ";
            // line 354
            echo "                        ";
            $this->displayBlock('page_checkout_item_children', $context, $blocks);
            // line 357
            echo "                    ";
        }
        // line 358
        echo "                ";
    }

    // line 354
    public function block_page_checkout_item_children($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 355
        echo "                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find(($context["childrenTemplate"] ?? null));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-item.html.twig", 355);
        })())->display($context);
        // line 356
        echo "                        ";
    }

    // line 365
    public function block_page_checkout_item_child($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/checkout-item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1169 => 365,  1165 => 356,  1156 => 355,  1152 => 354,  1148 => 358,  1145 => 357,  1142 => 354,  1140 => 353,  1137 => 352,  1133 => 351,  1128 => 341,  1120 => 340,  1115 => 338,  1111 => 337,  1108 => 336,  1104 => 335,  1097 => 330,  1093 => 329,  1086 => 326,  1082 => 325,  1078 => 346,  1073 => 343,  1071 => 335,  1068 => 334,  1066 => 329,  1063 => 328,  1061 => 325,  1053 => 321,  1050 => 320,  1046 => 319,  1040 => 347,  1038 => 319,  1034 => 317,  1030 => 316,  1023 => 308,  1019 => 310,  1016 => 309,  1012 => 308,  1009 => 307,  1007 => 306,  1003 => 305,  996 => 301,  993 => 300,  989 => 299,  985 => 311,  983 => 305,  980 => 304,  977 => 299,  973 => 298,  967 => 312,  965 => 298,  961 => 296,  957 => 295,  950 => 287,  946 => 288,  942 => 287,  938 => 286,  931 => 282,  928 => 281,  924 => 280,  920 => 290,  917 => 289,  915 => 286,  912 => 285,  909 => 280,  906 => 279,  902 => 278,  896 => 291,  894 => 278,  890 => 276,  886 => 275,  879 => 262,  876 => 261,  872 => 260,  867 => 253,  858 => 250,  852 => 249,  847 => 248,  843 => 247,  839 => 246,  836 => 245,  832 => 244,  825 => 240,  821 => 239,  817 => 238,  813 => 237,  807 => 233,  803 => 232,  799 => 256,  796 => 255,  793 => 244,  790 => 243,  787 => 232,  784 => 231,  780 => 230,  773 => 216,  769 => 215,  762 => 212,  758 => 211,  754 => 266,  751 => 265,  748 => 260,  746 => 259,  742 => 257,  739 => 230,  737 => 229,  734 => 228,  731 => 227,  728 => 226,  725 => 225,  722 => 224,  719 => 223,  716 => 222,  713 => 220,  711 => 215,  708 => 214,  706 => 211,  697 => 206,  694 => 205,  692 => 204,  688 => 203,  682 => 267,  680 => 203,  676 => 201,  672 => 200,  665 => 196,  662 => 195,  658 => 194,  651 => 270,  649 => 200,  646 => 199,  644 => 194,  639 => 191,  635 => 190,  631 => 176,  628 => 175,  626 => 173,  624 => 170,  621 => 169,  617 => 168,  613 => 166,  608 => 163,  606 => 162,  605 => 161,  604 => 160,  601 => 159,  598 => 158,  594 => 157,  590 => 155,  582 => 152,  579 => 151,  576 => 150,  572 => 149,  568 => 147,  565 => 146,  563 => 144,  561 => 143,  558 => 142,  554 => 141,  548 => 137,  542 => 136,  536 => 134,  534 => 133,  529 => 131,  524 => 130,  520 => 129,  516 => 127,  512 => 126,  508 => 124,  502 => 121,  499 => 120,  493 => 117,  490 => 116,  485 => 114,  479 => 112,  477 => 111,  473 => 110,  467 => 108,  464 => 107,  460 => 106,  454 => 177,  452 => 168,  449 => 167,  447 => 157,  444 => 156,  442 => 149,  439 => 148,  437 => 141,  434 => 140,  432 => 126,  429 => 125,  427 => 106,  423 => 104,  419 => 103,  413 => 180,  411 => 103,  407 => 101,  403 => 100,  399 => 88,  396 => 87,  387 => 84,  384 => 83,  382 => 80,  381 => 79,  380 => 73,  372 => 72,  369 => 71,  365 => 70,  361 => 92,  356 => 89,  354 => 70,  351 => 69,  346 => 67,  340 => 65,  338 => 64,  334 => 63,  328 => 61,  324 => 59,  316 => 56,  313 => 55,  311 => 54,  308 => 53,  300 => 50,  297 => 49,  294 => 48,  290 => 47,  284 => 93,  282 => 47,  278 => 45,  274 => 44,  268 => 96,  266 => 44,  262 => 42,  258 => 41,  252 => 183,  250 => 100,  247 => 99,  245 => 41,  241 => 39,  237 => 38,  231 => 186,  229 => 38,  225 => 36,  221 => 35,  214 => 359,  212 => 351,  209 => 350,  207 => 316,  204 => 315,  202 => 295,  199 => 294,  197 => 275,  194 => 274,  192 => 190,  189 => 189,  187 => 35,  176 => 32,  172 => 31,  167 => 365,  164 => 363,  162 => 31,  159 => 30,  156 => 29,  154 => 28,  151 => 27,  148 => 26,  145 => 24,  142 => 23,  140 => 22,  137 => 21,  134 => 20,  132 => 19,  129 => 18,  126 => 17,  123 => 16,  120 => 15,  117 => 13,  114 => 12,  112 => 11,  109 => 10,  106 => 9,  104 => 8,  101 => 7,  99 => 6,  97 => 5,  95 => 4,  91 => 3,  86 => 367,  84 => 3,  81 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/checkout/checkout-item.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/checkout/checkout-item.html.twig");
    }
}
