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

/* @Storefront/storefront/component/checkout/offcanvas-item.html.twig */
class __TwigTemplate_b1b33b78ed7e363f9fdf1730f990e8229ef59c1142263105bb63a5c68d5516b0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_offcanvas_cart_item_inner' => [$this, 'block_component_offcanvas_cart_item_inner'],
            'component_offcanvas_cart_item_container' => [$this, 'block_component_offcanvas_cart_item_container'],
            'component_offcanvas_product_image' => [$this, 'block_component_offcanvas_product_image'],
            'component_offcanvas_product_image_inner' => [$this, 'block_component_offcanvas_product_image_inner'],
            'component_offcanvas_product_details' => [$this, 'block_component_offcanvas_product_details'],
            'component_offcanvas_product_details_inner' => [$this, 'block_component_offcanvas_product_details_inner'],
            'component_offcanvas_product_label' => [$this, 'block_component_offcanvas_product_label'],
            'cart_item_variant_characteristics' => [$this, 'block_cart_item_variant_characteristics'],
            'component_offcanvas_product_details_features' => [$this, 'block_component_offcanvas_product_details_features'],
            'component_offcanvas_product_quantity_price' => [$this, 'block_component_offcanvas_product_quantity_price'],
            'component_offcanvas_product_quantity' => [$this, 'block_component_offcanvas_product_quantity'],
            'component_offcanvas_product_quantity_form' => [$this, 'block_component_offcanvas_product_quantity_form'],
            'component_offcanvas_product_quantity_form_csrf' => [$this, 'block_component_offcanvas_product_quantity_form_csrf'],
            'component_offcanvas_product_quantity_form_redirect' => [$this, 'block_component_offcanvas_product_quantity_form_redirect'],
            'component_offcanvas_product_buy_quantity' => [$this, 'block_component_offcanvas_product_buy_quantity'],
            'component_offcanvas_product_buy_quantity_input' => [$this, 'block_component_offcanvas_product_buy_quantity_input'],
            'component_offcanvas_product_buy_quantity_select' => [$this, 'block_component_offcanvas_product_buy_quantity_select'],
            'component_offcanvas_product_total_price' => [$this, 'block_component_offcanvas_product_total_price'],
            'component_offcanvas_product_remove' => [$this, 'block_component_offcanvas_product_remove'],
            'component_offcanvas_product_remove_form' => [$this, 'block_component_offcanvas_product_remove_form'],
            'component_offcanvas_product_remove_form_csrf' => [$this, 'block_component_offcanvas_product_remove_form_csrf'],
            'component_offcanvas_product_remove_redirect' => [$this, 'block_component_offcanvas_product_remove_redirect'],
            'component_offcanvas_product_remove_submit' => [$this, 'block_component_offcanvas_product_remove_submit'],
            'component_offcanvas_children' => [$this, 'block_component_offcanvas_children'],
            'component_offcanvas_cart_item_children' => [$this, 'block_component_offcanvas_cart_item_children'],
            'component_offcanvas_cart_item_child' => [$this, 'block_component_offcanvas_cart_item_child'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('component_offcanvas_cart_item_inner', $context, $blocks);
    }

    public function block_component_offcanvas_cart_item_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $context["PRODUCT_LINE_ITEM_TYPE"] = twig_constant("Shopware\\Core\\Checkout\\Cart\\LineItem\\LineItem::PRODUCT_LINE_ITEM_TYPE");
        // line 5
        echo "    ";
        $context["DISCOUNT_LINE_ITEM_TYPE"] = twig_constant("Shopware\\Core\\Checkout\\Cart\\LineItem\\LineItem::DISCOUNT_LINE_ITEM");
        // line 6
        echo "
    ";
        // line 7
        $context["price"] = sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "price", [], "any", false, false, false, 7);
        // line 8
        echo "    ";
        $context["isDiscount"] = (( !sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "good", [], "any", false, false, false, 8) && (0 >= twig_compare(sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "totalPrice", [], "any", false, false, false, 8), 0))) || (0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 8), ($context["DISCOUNT_LINE_ITEM_TYPE"] ?? null))));
        // line 9
        echo "    ";
        $context["isNested"] = (1 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "children", [], "any", false, false, false, 9), "count", [], "any", false, false, false, 9), 0));
        // line 10
        echo "    ";
        $context["label"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "label", [], "any", false, false, false, 10)));
        // line 11
        echo "    ";
        $context["label"] = (((($context["label"] ?? null) !== "")) ? (($context["label"] ?? null)) : (sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "label", [], "any", false, false, false, 11)));
        // line 12
        echo "
    ";
        // line 13
        $context["referencedId"] = sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "referencedId", [], "any", false, false, false, 13);
        // line 14
        echo "    ";
        $context["type"] = sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 14);
        // line 15
        echo "    ";
        $context["quantity"] = sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantity", [], "any", false, false, false, 15);
        // line 16
        echo "    ";
        $context["id"] = sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "id", [], "any", false, false, false, 16);
        // line 17
        echo "    ";
        $context["childrenTemplate"] = "@Storefront/storefront/component/checkout/offcanvas-item-children.html.twig";
        // line 18
        echo "
    ";
        // line 20
        echo "    ";
        $context["cartItemClasses"] = "";
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('component_offcanvas_cart_item_container', $context, $blocks);
        // line 235
        echo "
    ";
        // line 237
        echo "    ";
        $this->displayBlock('component_offcanvas_cart_item_child', $context, $blocks);
    }

    // line 22
    public function block_component_offcanvas_cart_item_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "        <div class=\"cart-item cart-item-";
        echo sw_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        if (($context["isDiscount"] ?? null)) {
            echo " is-discount";
        }
        echo sw_escape_filter($this->env, ($context["cartItemClasses"] ?? null), "html", null, true);
        echo " js-cart-item\">
            <div class=\"row cart-item-row\">
                ";
        // line 25
        $this->displayBlock('component_offcanvas_product_image', $context, $blocks);
        // line 68
        echo "
                ";
        // line 69
        $this->displayBlock('component_offcanvas_product_details', $context, $blocks);
        // line 190
        echo "
                ";
        // line 191
        $this->displayBlock('component_offcanvas_product_remove', $context, $blocks);
        // line 222
        echo "
                ";
        // line 223
        $this->displayBlock('component_offcanvas_children', $context, $blocks);
        // line 231
        echo "
            </div>
        </div>
    ";
    }

    // line 25
    public function block_component_offcanvas_product_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                    <div class=\"col-auto\">
                        ";
        // line 27
        $this->displayBlock('component_offcanvas_product_image_inner', $context, $blocks);
        // line 66
        echo "                    </div>
                ";
    }

    // line 27
    public function block_component_offcanvas_product_image_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                            <div class=\"cart-item-img\">
                                ";
        // line 29
        if (($context["isDiscount"] ?? null)) {
            // line 30
            echo "                                    <div class=\"cart-item-discount-icon\">
                                        ";
            // line 31
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 31);
            })())->display(twig_array_merge($context, ["color" => "success", "name" => "marketing"]));
            // line 34
            echo "                                    </div>
                                ";
        } elseif (        // line 35
($context["isNested"] ?? null)) {
            // line 36
            echo "                                    <div class=\"cart-item-nested-icon\">
                                        ";
            // line 37
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 37);
            })())->display(twig_array_merge($context, ["color" => "light", "name" => "bag-product"]));
            // line 40
            echo "                                    </div>
                                ";
        } else {
            // line 42
            echo "                                    <a href=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["referencedId"] ?? null)]), "html", null, true);
            echo "\"
                                       class=\"cart-item-img-link\"
                                       title=\"";
            // line 44
            echo sw_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "\">
                                        ";
            // line 45
            if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 45), "url", [], "any", false, false, false, 45)) {
                // line 46
                echo "                                            ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                    $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 46);
                })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,                 // line 47
($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 47), "sizes" => ["default" => "100px"], "attributes" => ["class" => "img-fluid cart-item-img-source", "alt" =>                 // line 53
($context["label"] ?? null), "title" =>                 // line 54
($context["label"] ?? null)], "name" => "cart-item-img-thumbnails"]));
                // line 57
                echo "                                        ";
            } else {
                // line 58
                echo "                                            ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                    $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 58);
                })())->display(twig_array_merge($context, ["size" => "fluid", "name" => "placeholder"]));
                // line 61
                echo "                                        ";
            }
            // line 62
            echo "                                    </a>
                                ";
        }
        // line 64
        echo "                            </div>
                        ";
    }

    // line 69
    public function block_component_offcanvas_product_details($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "                    <div class=\"col-7 cart-item-details\">
                        ";
        // line 71
        $this->displayBlock('component_offcanvas_product_details_inner', $context, $blocks);
        // line 188
        echo "                    </div>
                ";
    }

    // line 71
    public function block_component_offcanvas_product_details_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "                            <div class=\"cart-item-details-container\">
                                ";
        // line 73
        $this->displayBlock('component_offcanvas_product_label', $context, $blocks);
        // line 88
        echo "
                                ";
        // line 89
        $this->displayBlock('cart_item_variant_characteristics', $context, $blocks);
        // line 101
        echo "
                                ";
        // line 102
        $this->displayBlock('component_offcanvas_product_details_features', $context, $blocks);
        // line 109
        echo "
                                ";
        // line 110
        $this->displayBlock('component_offcanvas_product_quantity_price', $context, $blocks);
        // line 186
        echo "                            </div>
                        ";
    }

    // line 73
    public function block_component_offcanvas_product_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "                                    <div class=\"cart-item-details\">
                                        ";
        // line 75
        if ((0 === twig_compare(($context["type"] ?? null), ($context["PRODUCT_LINE_ITEM_TYPE"] ?? null)))) {
            // line 76
            echo "                                            <a href=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["referencedId"] ?? null)]), "html", null, true);
            echo "\"
                                               class=\"cart-item-label\"
                                               title=\"";
            // line 78
            echo sw_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "\">
                                                ";
            // line 79
            echo sw_escape_filter($this->env, ($context["quantity"] ?? null), "html", null, true);
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.quantityTimes"));
            echo " ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["label"] ?? null)), "truncate", [0 => 60, 1 => "...", 2 => false], "method", false, false, false, 79), "html", null, true);
            echo "
                                            </a>
                                        ";
        } else {
            // line 82
            echo "                                            <div class=\"cart-item-label\">
                                                ";
            // line 83
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["label"] ?? null)), "truncate", [0 => 60, 1 => "...", 2 => false], "method", false, false, false, 83), "html", null, true);
            echo "
                                            </div>
                                        ";
        }
        // line 86
        echo "                                    </div>
                                ";
    }

    // line 89
    public function block_cart_item_variant_characteristics($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "                                    <div class=\"cart-item-characteristics\">
                                        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 91), "options", [], "any", false, false, false, 91));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 92
            echo "                                            ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["option"], "group", [], "any", false, false, false, 92), "html", null, true);
            echo ":
                                            <span class=\"cart-item-characteristics-option\">";
            // line 93
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["option"], "option", [], "any", false, false, false, 93), "html", null, true);
            echo "</span>

                                            ";
            // line 95
            if ((0 !== twig_compare(twig_last($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 95), "options", [], "any", false, false, false, 95)), $context["option"]))) {
                // line 96
                echo "                                                ";
                echo " | ";
                echo "
                                            ";
            }
            // line 98
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                                    </div>
                                ";
    }

    // line 102
    public function block_component_offcanvas_product_details_features($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "                                    ";
        if (((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 103), ($context["PRODUCT_LINE_ITEM_TYPE"] ?? null))) &&  !(null === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 103), "features", [], "any", false, false, false, 103)))) {
            // line 104
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/component/product/feature/list.html.twig", "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 104)->display(twig_array_merge($context, ["features" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 105
($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 105), "features", [], "any", false, false, false, 105)]));
            // line 107
            echo "                                    ";
        }
        // line 108
        echo "                                ";
    }

    // line 110
    public function block_component_offcanvas_product_quantity_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "                                    <div class=\"cart-quantity-price\">
                                        ";
        // line 112
        $this->displayBlock('component_offcanvas_product_quantity', $context, $blocks);
        // line 169
        echo "
                                        ";
        // line 170
        $this->displayBlock('component_offcanvas_product_total_price', $context, $blocks);
        // line 184
        echo "                                    </div>
                                ";
    }

    // line 112
    public function block_component_offcanvas_product_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "                                            <div class=\"cart-item-quantity\">
                                                ";
        // line 114
        $this->displayBlock('component_offcanvas_product_quantity_form', $context, $blocks);
        // line 167
        echo "                                            </div>
                                        ";
    }

    // line 114
    public function block_component_offcanvas_product_quantity_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        echo "                                                    ";
        if ((sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantityInformation", [], "any", false, false, false, 115) && sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "stackable", [], "any", false, false, false, 115))) {
            // line 116
            echo "                                                        <form action=\"";
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.line-item.change-quantity", ["id" => ($context["id"] ?? null)]), "html", null, true);
            echo "\"
                                                              class=\"cart-item-quantity-container\"
                                                              method=\"post\">

                                                            ";
            // line 120
            $this->displayBlock('component_offcanvas_product_quantity_form_csrf', $context, $blocks);
            // line 123
            echo "
                                                            ";
            // line 124
            $this->displayBlock('component_offcanvas_product_quantity_form_redirect', $context, $blocks);
            // line 129
            echo "
                                                            ";
            // line 130
            $context["quantityInformation"] = sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantityInformation", [], "any", false, false, false, 130);
            // line 131
            echo "                                                            ";
            if (sw_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "maxPurchase", [], "any", false, false, false, 131)) {
                // line 132
                echo "                                                                ";
                $context["maxQuantity"] = sw_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "maxPurchase", [], "any", false, false, false, 132);
                // line 133
                echo "                                                            ";
            } else {
                // line 134
                echo "                                                                ";
                $context["maxQuantity"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.maxQuantity");
                // line 135
                echo "                                                            ";
            }
            // line 136
            echo "
                                                            ";
            // line 137
            $context["selectQuantityThreshold"] = 100;
            // line 138
            echo "                                                            ";
            $this->displayBlock('component_offcanvas_product_buy_quantity', $context, $blocks);
            // line 164
            echo "                                                        </form>
                                                    ";
        }
        // line 166
        echo "                                                ";
    }

    // line 120
    public function block_component_offcanvas_product_quantity_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "                                                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.line-item.change-quantity");
        echo "
                                                            ";
    }

    // line 124
    public function block_component_offcanvas_product_quantity_form_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 125
        echo "                                                                <input type=\"hidden\"
                                                                       name=\"redirectTo\"
                                                                       value=\"frontend.cart.offcanvas\"/>
                                                            ";
    }

    // line 138
    public function block_component_offcanvas_product_buy_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 139
        echo "                                                                ";
        if ((1 === twig_compare(((($context["maxQuantity"] ?? null) - sw_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "minPurchase", [], "any", false, false, false, 139)) / sw_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "purchaseSteps", [], "any", false, false, false, 139)), ($context["selectQuantityThreshold"] ?? null)))) {
            // line 140
            echo "                                                                    ";
            $this->displayBlock('component_offcanvas_product_buy_quantity_input', $context, $blocks);
            // line 151
            echo "                                                                ";
        } else {
            // line 152
            echo "                                                                    ";
            $this->displayBlock('component_offcanvas_product_buy_quantity_select', $context, $blocks);
            // line 162
            echo "                                                                ";
        }
        // line 163
        echo "                                                            ";
    }

    // line 140
    public function block_component_offcanvas_product_buy_quantity_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "                                                                        <input
                                                                            type=\"number\"
                                                                            name=\"quantity\"
                                                                            class=\"form-control js-offcanvas-cart-change-quantity\"
                                                                            min=\"";
        // line 145
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "minPurchase", [], "any", false, false, false, 145), "html", null, true);
        echo "\"
                                                                            max=\"";
        // line 146
        echo sw_escape_filter($this->env, ($context["maxQuantity"] ?? null), "html", null, true);
        echo "\"
                                                                            step=\"";
        // line 147
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "purchaseSteps", [], "any", false, false, false, 147), "html", null, true);
        echo "\"
                                                                            value=\"";
        // line 148
        echo sw_escape_filter($this->env, ($context["quantity"] ?? null), "html", null, true);
        echo "\"
                                                                        />
                                                                    ";
    }

    // line 152
    public function block_component_offcanvas_product_buy_quantity_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        echo "                                                                        <select name=\"quantity\" class=\"";
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        echo " quantity-select-";
        echo sw_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo " js-offcanvas-cart-change-quantity\">
                                                                            ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(sw_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "minPurchase", [], "any", false, false, false, 154), ($context["maxQuantity"] ?? null), sw_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "purchaseSteps", [], "any", false, false, false, 154)));
        foreach ($context['_seq'] as $context["_key"] => $context["quantityItem"]) {
            // line 155
            echo "                                                                                <option value=\"";
            echo sw_escape_filter($this->env, $context["quantityItem"], "html", null, true);
            echo "\"
                                                                                    ";
            // line 156
            if ((0 === twig_compare($context["quantityItem"], ($context["quantity"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                                                                    ";
            // line 157
            echo sw_escape_filter($this->env, $context["quantityItem"], "html", null, true);
            echo "
                                                                                </option>
                                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quantityItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "                                                                        </select>
                                                                    ";
    }

    // line 170
    public function block_component_offcanvas_product_total_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 171
        echo "                                            <div class=\"cart-item-price\">
                                                ";
        // line 173
        echo "                                                ";
        if ((0 !== twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 173), "discountScope", [], "any", false, false, false, 173), "delivery"))) {
            // line 174
            echo "                                                    ";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "totalPrice", [], "any", false, false, false, 174)), "html", null, true);
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo "
                                                ";
        }
        // line 176
        echo "                                                ";
        $context["referencePrice"] = sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 176);
        // line 177
        echo "                                                ";
        if ( !(null === ($context["referencePrice"] ?? null))) {
            // line 178
            echo "                                                    <small class=\"cart-item-reference-price\">
                                                        (";
            // line 179
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "price", [], "any", false, false, false, 179)), "html", null, true);
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo " / ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "referenceUnit", [], "any", false, false, false, 179), "html", null, true);
            echo "&nbsp;";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "unitName", [], "any", false, false, false, 179), "html", null, true);
            echo ")
                                                    </small>
                                                ";
        }
        // line 182
        echo "                                            </div>
                                        ";
    }

    // line 191
    public function block_component_offcanvas_product_remove($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 192
        echo "                    <div class=\"cart-item-remove\">
                        ";
        // line 193
        $this->displayBlock('component_offcanvas_product_remove_form', $context, $blocks);
        // line 220
        echo "                    </div>
                ";
    }

    // line 193
    public function block_component_offcanvas_product_remove_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 194
        echo "                            ";
        if (sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "removable", [], "any", false, false, false, 194)) {
            // line 195
            echo "                                <form action=\"";
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.line-item.delete", ["id" => ($context["id"] ?? null)]), "html", null, true);
            echo "\"
                                      class=\"cart-item-remove js-offcanvas-cart-remove-product\"
                                      method=\"post\">

                                    ";
            // line 199
            $this->displayBlock('component_offcanvas_product_remove_form_csrf', $context, $blocks);
            // line 202
            echo "
                                    ";
            // line 203
            $this->displayBlock('component_offcanvas_product_remove_redirect', $context, $blocks);
            // line 208
            echo "
                                    ";
            // line 209
            $this->displayBlock('component_offcanvas_product_remove_submit', $context, $blocks);
            // line 217
            echo "                                </form>
                            ";
        }
        // line 219
        echo "                        ";
    }

    // line 199
    public function block_component_offcanvas_product_remove_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 200
        echo "                                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.line-item.delete");
        echo "
                                    ";
    }

    // line 203
    public function block_component_offcanvas_product_remove_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 204
        echo "                                        <input type=\"hidden\"
                                               name=\"redirectTo\"
                                               value=\"frontend.cart.offcanvas\"/>
                                    ";
    }

    // line 209
    public function block_component_offcanvas_product_remove_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 210
        echo "                                        <button type=\"submit\"
                                                title=\"";
        // line 211
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.removeLineItem")), "html", null, true);
        echo "\"
                                                data-product-id=\"";
        // line 212
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "id", [], "any", false, false, false, 212), "html", null, true);
        echo "\"
                                                class=\"btn btn-light cart-item-remove-button\">
                                            ";
        // line 214
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 214);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "x"]));
        // line 215
        echo "                                        </button>
                                    ";
    }

    // line 223
    public function block_component_offcanvas_children($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 224
        echo "                    ";
        if (($context["isNested"] ?? null)) {
            // line 225
            echo "                        ";
            // line 226
            echo "                        ";
            $this->displayBlock('component_offcanvas_cart_item_children', $context, $blocks);
            // line 229
            echo "                    ";
        }
        // line 230
        echo "                ";
    }

    // line 226
    public function block_component_offcanvas_cart_item_children($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 227
        echo "                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find(($context["childrenTemplate"] ?? null));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 227);
        })())->display($context);
        // line 228
        echo "                        ";
    }

    // line 237
    public function block_component_offcanvas_cart_item_child($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/checkout/offcanvas-item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  798 => 237,  794 => 228,  785 => 227,  781 => 226,  777 => 230,  774 => 229,  771 => 226,  769 => 225,  766 => 224,  762 => 223,  757 => 215,  749 => 214,  744 => 212,  740 => 211,  737 => 210,  733 => 209,  726 => 204,  722 => 203,  715 => 200,  711 => 199,  707 => 219,  703 => 217,  701 => 209,  698 => 208,  696 => 203,  693 => 202,  691 => 199,  683 => 195,  680 => 194,  676 => 193,  671 => 220,  669 => 193,  666 => 192,  662 => 191,  657 => 182,  646 => 179,  643 => 178,  640 => 177,  637 => 176,  630 => 174,  627 => 173,  624 => 171,  620 => 170,  615 => 160,  606 => 157,  600 => 156,  595 => 155,  591 => 154,  584 => 153,  580 => 152,  573 => 148,  569 => 147,  565 => 146,  561 => 145,  555 => 141,  551 => 140,  547 => 163,  544 => 162,  541 => 152,  538 => 151,  535 => 140,  532 => 139,  528 => 138,  521 => 125,  517 => 124,  510 => 121,  506 => 120,  502 => 166,  498 => 164,  495 => 138,  493 => 137,  490 => 136,  487 => 135,  484 => 134,  481 => 133,  478 => 132,  475 => 131,  473 => 130,  470 => 129,  468 => 124,  465 => 123,  463 => 120,  455 => 116,  452 => 115,  448 => 114,  443 => 167,  441 => 114,  438 => 113,  434 => 112,  429 => 184,  427 => 170,  424 => 169,  422 => 112,  419 => 111,  415 => 110,  411 => 108,  408 => 107,  406 => 105,  404 => 104,  401 => 103,  397 => 102,  392 => 99,  386 => 98,  380 => 96,  378 => 95,  373 => 93,  368 => 92,  364 => 91,  361 => 90,  357 => 89,  352 => 86,  346 => 83,  343 => 82,  334 => 79,  330 => 78,  324 => 76,  322 => 75,  319 => 74,  315 => 73,  310 => 186,  308 => 110,  305 => 109,  303 => 102,  300 => 101,  298 => 89,  295 => 88,  293 => 73,  290 => 72,  286 => 71,  281 => 188,  279 => 71,  276 => 70,  272 => 69,  267 => 64,  263 => 62,  260 => 61,  251 => 58,  248 => 57,  246 => 54,  245 => 53,  244 => 47,  236 => 46,  234 => 45,  230 => 44,  224 => 42,  220 => 40,  212 => 37,  209 => 36,  207 => 35,  204 => 34,  196 => 31,  193 => 30,  191 => 29,  188 => 28,  184 => 27,  179 => 66,  177 => 27,  174 => 26,  170 => 25,  163 => 231,  161 => 223,  158 => 222,  156 => 191,  153 => 190,  151 => 69,  148 => 68,  146 => 25,  136 => 23,  132 => 22,  127 => 237,  124 => 235,  122 => 22,  119 => 21,  116 => 20,  113 => 18,  110 => 17,  107 => 16,  104 => 15,  101 => 14,  99 => 13,  96 => 12,  93 => 11,  90 => 10,  87 => 9,  84 => 8,  82 => 7,  79 => 6,  76 => 5,  73 => 4,  66 => 3,  63 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/checkout/offcanvas-item.html.twig");
    }
}
