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

/* @Storefront/storefront/page/checkout/cart/index.html.twig */
class __TwigTemplate_7afa66bf84efb1d048a57e9cd71408156be72aba35ed371c2a4a4c617e574240 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_head' => [$this, 'block_base_head'],
            'page_checkout_container' => [$this, 'block_page_checkout_container'],
            'page_checkout_main_content' => [$this, 'block_page_checkout_main_content'],
            'page_checkout_cart' => [$this, 'block_page_checkout_cart'],
            'page_checkout_cart_header' => [$this, 'block_page_checkout_cart_header'],
            'page_checkout_cart_product_table' => [$this, 'block_page_checkout_cart_product_table'],
            'page_checkout_cart_table_header' => [$this, 'block_page_checkout_cart_table_header'],
            'page_checkout_cart_table_items' => [$this, 'block_page_checkout_cart_table_items'],
            'page_checkout_cart_table_item' => [$this, 'block_page_checkout_cart_table_item'],
            'page_checkout_item' => [$this, 'block_page_checkout_item'],
            'page_checkout_cart_hidden_line_items_information' => [$this, 'block_page_checkout_cart_hidden_line_items_information'],
            'page_checkout_cart_add_product_and_shipping' => [$this, 'block_page_checkout_cart_add_product_and_shipping'],
            'page_checkout_cart_add_product' => [$this, 'block_page_checkout_cart_add_product'],
            'page_checkout_cart_add_product_csrf' => [$this, 'block_page_checkout_cart_add_product_csrf'],
            'page_checkout_cart_add_product_redirect' => [$this, 'block_page_checkout_cart_add_product_redirect'],
            'page_checkout_cart_add_product_input_group' => [$this, 'block_page_checkout_cart_add_product_input_group'],
            'page_checkout_cart_add_product_label' => [$this, 'block_page_checkout_cart_add_product_label'],
            'page_checkout_cart_add_product_input' => [$this, 'block_page_checkout_cart_add_product_input'],
            'page_checkout_cart_add_product_submit' => [$this, 'block_page_checkout_cart_add_product_submit'],
            'page_checkout_cart_shipping_costs' => [$this, 'block_page_checkout_cart_shipping_costs'],
            'page_checkout_cart_shipping_costs_csrf' => [$this, 'block_page_checkout_cart_shipping_costs_csrf'],
            'page_checkout_cart_shipping_costs_trigger' => [$this, 'block_page_checkout_cart_shipping_costs_trigger'],
            'page_checkout_cart_shipping_costs_trigger_icon' => [$this, 'block_page_checkout_cart_shipping_costs_trigger_icon'],
            'page_checkout_cart_shipping_costs_form_group' => [$this, 'block_page_checkout_cart_shipping_costs_form_group'],
            'page_checkout_cart_shipping_costs_form_group_country' => [$this, 'block_page_checkout_cart_shipping_costs_form_group_country'],
            'page_checkout_cart_shipping_costs_form_group_payment_method' => [$this, 'block_page_checkout_cart_shipping_costs_form_group_payment_method'],
            'page_checkout_cart_shipping_costs_form_group_shipping_method' => [$this, 'block_page_checkout_cart_shipping_costs_form_group_shipping_method'],
            'page_checkout_aside_actions' => [$this, 'block_page_checkout_aside_actions'],
            'page_checkout_cart_add_promotion' => [$this, 'block_page_checkout_cart_add_promotion'],
            'page_checkout_cart_add_promotion_csrf' => [$this, 'block_page_checkout_cart_add_promotion_csrf'],
            'page_checkout_cart_add_promotion_forward' => [$this, 'block_page_checkout_cart_add_promotion_forward'],
            'page_checkout_cart_add_promotion_input_group' => [$this, 'block_page_checkout_cart_add_promotion_input_group'],
            'page_checkout_cart_add_promotion_label' => [$this, 'block_page_checkout_cart_add_promotion_label'],
            'page_checkout_cart_add_promotion_input' => [$this, 'block_page_checkout_cart_add_promotion_input'],
            'page_checkout_cart_add_promotion_submit' => [$this, 'block_page_checkout_cart_add_promotion_submit'],
            'page_checkout_cart_action_proceed' => [$this, 'block_page_checkout_cart_action_proceed'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/checkout/_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/page/checkout/_page.html.twig", "@Storefront/storefront/page/checkout/cart/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_base_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/page/checkout/cart/meta.html.twig", "@Storefront/storefront/page/checkout/cart/index.html.twig", 4)->display($context);
    }

    // line 7
    public function block_page_checkout_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 8), "lineItems", [], "any", false, false, false, 8), "count", [], "any", false, false, false, 8) === 0)) {
            // line 9
            echo "        ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/checkout/cart/index.html.twig", 9)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartEmpty"))]));
            // line 13
            echo "
        ";
            // line 14
            $context["messages"] = sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 14);
            // line 15
            echo "
        ";
            // line 16
            if ((1 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["messages"] ?? null), "danger", [], "any", false, false, false, 16)), 0))) {
                // line 17
                echo "            <div class=\"flashbags\">
                ";
                // line 18
                $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/checkout/cart/index.html.twig", 18)->display(twig_array_merge($context, ["type" => "danger", "list" => sw_get_attribute($this->env, $this->source, ($context["messages"] ?? null), "danger", [], "any", false, false, false, 18)]));
                // line 19
                echo "            </div>
        ";
            }
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "        ";
            $this->displayParentBlock("page_checkout_container", $context, $blocks);
            echo "
    ";
        }
    }

    // line 26
    public function block_page_checkout_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        $this->displayBlock('page_checkout_cart', $context, $blocks);
    }

    public function block_page_checkout_cart($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "        ";
        $this->displayBlock('page_checkout_cart_header', $context, $blocks);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('page_checkout_cart_product_table', $context, $blocks);
        // line 63
        echo "
        ";
        // line 64
        $this->displayBlock('page_checkout_cart_hidden_line_items_information', $context, $blocks);
        // line 70
        echo "
        ";
        // line 71
        $this->displayBlock('page_checkout_cart_add_product_and_shipping', $context, $blocks);
        // line 225
        echo "    ";
    }

    // line 28
    public function block_page_checkout_cart_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "            <h1 class=\"cart-main-header\">
                ";
        // line 30
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeader"));
        echo "
            </h1>
        ";
    }

    // line 34
    public function block_page_checkout_cart_product_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "            <div class=\"card checkout-product-table\">
                <div class=\"card-body\">
                    ";
        // line 37
        $this->displayBlock('page_checkout_cart_table_header', $context, $blocks);
        // line 45
        echo "
                    ";
        // line 46
        $this->displayBlock('page_checkout_cart_table_items', $context, $blocks);
        // line 60
        echo "                </div>
            </div>
        ";
    }

    // line 37
    public function block_page_checkout_cart_table_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "                        ";
        // line 39
        echo "                        ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 40
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/component/checkout/cart-header.html.twig", "@Storefront/storefront/page/checkout/cart/index.html.twig", 40)->display($context);
            // line 41
            echo "                        ";
        } else {
            // line 42
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/page/checkout/cart/cart-product-header.html.twig", "@Storefront/storefront/page/checkout/cart/index.html.twig", 42)->display($context);
            // line 43
            echo "                        ";
        }
        // line 44
        echo "                    ";
    }

    // line 46
    public function block_page_checkout_cart_table_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 47), "lineItems", [], "any", false, false, false, 47));
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
        foreach ($context['_seq'] as $context["_key"] => $context["lineItem"]) {
            // line 48
            echo "                            ";
            $this->displayBlock('page_checkout_cart_table_item', $context, $blocks);
            // line 58
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lineItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    ";
    }

    // line 48
    public function block_page_checkout_cart_table_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "                                ";
        $this->displayBlock('page_checkout_item', $context, $blocks);
        // line 57
        echo "                            ";
    }

    // line 49
    public function block_page_checkout_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "                                    ";
        // line 51
        echo "                                    ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 52
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/component/line-item/line-item.html.twig", "@Storefront/storefront/page/checkout/cart/index.html.twig", 52)->display($context);
            // line 53
            echo "                                    ";
        } else {
            // line 54
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/page/checkout/checkout-item.html.twig", "@Storefront/storefront/page/checkout/cart/index.html.twig", 54)->display($context);
            // line 55
            echo "                                    ";
        }
        // line 56
        echo "                                ";
    }

    // line 64
    public function block_page_checkout_cart_hidden_line_items_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/checkout/hidden-line-items-information.html.twig", "@Storefront/storefront/page/checkout/cart/index.html.twig", 65)->display(twig_array_merge($context, ["cart" => sw_get_attribute($this->env, $this->source,         // line 66
($context["page"] ?? null), "cart", [], "any", false, false, false, 66), "lineItems" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 67
($context["page"] ?? null), "cart", [], "any", false, false, false, 67), "lineItems", [], "any", false, false, false, 67)]));
        // line 69
        echo "        ";
    }

    // line 71
    public function block_page_checkout_cart_add_product_and_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "            <div class=\"row\">
                ";
        // line 73
        $this->displayBlock('page_checkout_cart_add_product', $context, $blocks);
        // line 132
        echo "
                ";
        // line 133
        $this->displayBlock('page_checkout_cart_shipping_costs', $context, $blocks);
        // line 223
        echo "            </div>
        ";
    }

    // line 73
    public function block_page_checkout_cart_add_product($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "                    <div class=\"col-md-4 cart-add-product-container\">
                        <form action=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.product.add-by-number");
        echo "\"
                              data-form-csrf-handler=\"true\"
                              class=\"cart-add-product\"
                              method=\"post\">

                            ";
        // line 80
        $this->displayBlock('page_checkout_cart_add_product_csrf', $context, $blocks);
        // line 83
        echo "
                            ";
        // line 84
        $this->displayBlock('page_checkout_cart_add_product_redirect', $context, $blocks);
        // line 89
        echo "
                            ";
        // line 90
        $this->displayBlock('page_checkout_cart_add_product_input_group', $context, $blocks);
        // line 129
        echo "                        </form>
                    </div>
                ";
    }

    // line 80
    public function block_page_checkout_cart_add_product_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.product.add-by-number");
        echo "
                            ";
    }

    // line 84
    public function block_page_checkout_cart_add_product_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "                                <input type=\"hidden\"
                                       name=\"redirectTo\"
                                       value=\"frontend.checkout.cart.page\">
                            ";
    }

    // line 90
    public function block_page_checkout_cart_add_product_input_group($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "                                <div class=\"input-group\">
                                    ";
        // line 92
        $this->displayBlock('page_checkout_cart_add_product_label', $context, $blocks);
        // line 97
        echo "
                                    ";
        // line 98
        $this->displayBlock('page_checkout_cart_add_product_input', $context, $blocks);
        // line 108
        echo "
                                    ";
        // line 109
        $this->displayBlock('page_checkout_cart_add_product_submit', $context, $blocks);
        // line 127
        echo "                                </div>
                            ";
    }

    // line 92
    public function block_page_checkout_cart_add_product_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "                                        <label class=\"";
        echo sw_escape_filter($this->env, ($context["visuallyHiddenClass"] ?? null), "html", null, true);
        echo "\" for=\"addProductInput\">
                                            ";
        // line 94
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addProductLabel"));
        echo "
                                        </label>
                                    ";
    }

    // line 98
    public function block_page_checkout_cart_add_product_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "                                        <input type=\"text\"
                                               name=\"number\"
                                               class=\"form-control\"
                                               id=\"addProductInput\"
                                               placeholder=\"";
        // line 103
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addProductPlaceholder")), "html", null, true);
        echo "\"
                                               aria-label=\"";
        // line 104
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addProductLabel")), "html", null, true);
        echo "\"
                                               aria-describedby=\"addProductButton\"
                                               required=\"required\">
                                    ";
    }

    // line 109
    public function block_page_checkout_cart_add_product_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 110
        echo "                                        ";
        // line 111
        echo "                                        ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 112
            echo "                                            <button class=\"btn btn-secondary\"
                                                    type=\"submit\"
                                                    id=\"addProductButton\">
                                                ";
            // line 115
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/cart/index.html.twig", 115);
            })())->display(twig_array_merge($context, ["name" => "checkmark"]));
            // line 116
            echo "                                            </button>
                                        ";
        } else {
            // line 118
            echo "                                            <div class=\"input-group-append\">
                                                <button class=\"btn btn-secondary\"
                                                        type=\"submit\"
                                                        id=\"addProductButton\">
                                                    ";
            // line 122
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/cart/index.html.twig", 122);
            })())->display(twig_array_merge($context, ["name" => "checkmark"]));
            // line 123
            echo "                                                </button>
                                            </div>
                                        ";
        }
        // line 126
        echo "                                    ";
    }

    // line 133
    public function block_page_checkout_cart_shipping_costs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "                    <div class=\"col-md-8 cart-shipping-costs-container\">
                        <form name=\"precalc\"
                              method=\"post\"
                              action=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.configure");
        echo "\"
                              data-form-auto-submit=\"true\">

                            ";
        // line 140
        $this->displayBlock('page_checkout_cart_shipping_costs_csrf', $context, $blocks);
        // line 143
        echo "
                            ";
        // line 144
        $this->displayBlock('page_checkout_cart_shipping_costs_trigger', $context, $blocks);
        // line 157
        echo "
                            ";
        // line 158
        $this->displayBlock('page_checkout_cart_shipping_costs_form_group', $context, $blocks);
        // line 220
        echo "                        </form>
                    </div>
                ";
    }

    // line 140
    public function block_page_checkout_cart_shipping_costs_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.configure");
        echo "
                            ";
    }

    // line 144
    public function block_page_checkout_cart_shipping_costs_trigger($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "                                <a class=\"btn btn-link cart-shipping-costs-btn\"
                                   ";
        // line 146
        echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
        echo "=\"collapse\"
                                   href=\"#collapseShippingCost\"
                                   role=\"button\"
                                   aria-expanded=\"false\"
                                   aria-controls=\"collapseExample\">
                                    ";
        // line 151
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.shippingCosts"));
        echo "
                                    ";
        // line 152
        $this->displayBlock('page_checkout_cart_shipping_costs_trigger_icon', $context, $blocks);
        // line 155
        echo "                                </a>
                            ";
    }

    // line 152
    public function block_page_checkout_cart_shipping_costs_trigger_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        echo "                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/cart/index.html.twig", 153);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "sm", "name" => "arrow-medium-right"]));
        // line 154
        echo "                                    ";
    }

    // line 158
    public function block_page_checkout_cart_shipping_costs_form_group($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 159
        echo "                                <div class=\"collapse\" id=\"collapseShippingCost\">
                                    ";
        // line 160
        $this->displayBlock('page_checkout_cart_shipping_costs_form_group_country', $context, $blocks);
        // line 175
        echo "
                                    ";
        // line 176
        $this->displayBlock('page_checkout_cart_shipping_costs_form_group_payment_method', $context, $blocks);
        // line 196
        echo "
                                    ";
        // line 197
        $this->displayBlock('page_checkout_cart_shipping_costs_form_group_shipping_method', $context, $blocks);
        // line 217
        echo "                                    <input type=\"hidden\" name=\"redirectTo\" value=\"frontend.checkout.cart.page\">
                                </div>
                            ";
    }

    // line 160
    public function block_page_checkout_cart_shipping_costs_form_group_country($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 161
        echo "                                        ";
        if ( !sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 161)) {
            // line 162
            echo "                                            <div class=\"form-group\">
                                                <label for=\"countryId\">";
            // line 163
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.shippingCountry"));
            echo "</label>
                                                <select class=\"";
            // line 164
            echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
            echo "\" type=\"text\" id=\"countryId\" name=\"countryId\">
                                                    ";
            // line 165
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "countries", [], "any", false, false, false, 165));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 166
                echo "                                                        <option value=\"";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 166), "html", null, true);
                echo "\"
                                                            ";
                // line 167
                echo (((0 === twig_compare(sw_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 167), sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "shippingLocation", [], "any", false, false, false, 167), "country", [], "any", false, false, false, 167), "id", [], "any", false, false, false, 167)))) ? ("selected=\"selected\"") : (""));
                echo ">
                                                            ";
                // line 168
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["country"], "translated", [], "any", false, false, false, 168), "name", [], "any", false, false, false, 168), "html", null, true);
                echo "
                                                        </option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "                                                </select>
                                            </div>
                                        ";
        }
        // line 174
        echo "                                    ";
    }

    // line 176
    public function block_page_checkout_cart_shipping_costs_form_group_payment_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 177
        echo "                                        <div class=\"form-group\">
                                            <label for=\"paymentMethodId\">";
        // line 178
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.paymentMethod"));
        echo "</label>
                                            <select class=\"";
        // line 179
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        echo "\" type=\"text\" id=\"paymentMethodId\" name=\"paymentMethodId\">
                                                ";
        // line 180
        if (!twig_in_filter(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "paymentMethod", [], "any", false, false, false, 180), "id", [], "any", false, false, false, 180), sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "paymentMethods", [], "any", false, false, false, 180), "ids", [], "any", false, false, false, 180))) {
            // line 181
            echo "                                                    <option value=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "paymentMethod", [], "any", false, false, false, 181), "id", [], "any", false, false, false, 181), "html", null, true);
            echo "\"
                                                            selected=\"selected\"
                                                            disabled=\"disabled\">
                                                        ";
            // line 184
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "paymentMethod", [], "any", false, false, false, 184), "translated", [], "any", false, false, false, 184), "name", [], "any", false, false, false, 184), "html", null, true);
            echo " ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.notAvailableSuffix"));
            echo "
                                                    </option>
                                                ";
        }
        // line 187
        echo "                                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "paymentMethods", [], "any", false, false, false, 187));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 188
            echo "                                                    <option value=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 188), "html", null, true);
            echo "\"
                                                        ";
            // line 189
            if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 189), sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "paymentMethod", [], "any", false, false, false, 189), "id", [], "any", false, false, false, 189)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                                        ";
            // line 190
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["payment"], "translated", [], "any", false, false, false, 190), "name", [], "any", false, false, false, 190), "html", null, true);
            echo "
                                                    </option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "                                            </select>
                                        </div>
                                    ";
    }

    // line 197
    public function block_page_checkout_cart_shipping_costs_form_group_shipping_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 198
        echo "                                        <div class=\"form-group\">
                                            <label for=\"shippingMethodId\">";
        // line 199
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.shippingMethod"));
        echo "</label>
                                            <select class=\"";
        // line 200
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        echo "\" type=\"text\" id=\"shippingMethodId\" name=\"shippingMethodId\">
                                                ";
        // line 201
        if (!twig_in_filter(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "shippingMethod", [], "any", false, false, false, 201), "id", [], "any", false, false, false, 201), sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "shippingMethods", [], "any", false, false, false, 201), "ids", [], "any", false, false, false, 201))) {
            // line 202
            echo "                                                    <option value=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "shippingMethod", [], "any", false, false, false, 202), "id", [], "any", false, false, false, 202), "html", null, true);
            echo "\"
                                                            selected=\"selected\"
                                                            disabled=\"disabled\">
                                                        ";
            // line 205
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "shippingMethod", [], "any", false, false, false, 205), "translated", [], "any", false, false, false, 205), "name", [], "any", false, false, false, 205), "html", null, true);
            echo " ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.notAvailableSuffix"));
            echo "
                                                    </option>
                                                ";
        }
        // line 208
        echo "                                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "shippingMethods", [], "any", false, false, false, 208));
        foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
            // line 209
            echo "                                                    <option value=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, false, 209), "html", null, true);
            echo "\"
                                                        ";
            // line 210
            if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, false, 210), sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "shippingMethod", [], "any", false, false, false, 210), "id", [], "any", false, false, false, 210)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                                        ";
            // line 211
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["shipping"], "translated", [], "any", false, false, false, 211), "name", [], "any", false, false, false, 211), "html", null, true);
            echo "
                                                    </option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "                                            </select>
                                        </div>
                                    ";
    }

    // line 228
    public function block_page_checkout_aside_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 229
        echo "    <div class=\"checkout-aside-action\">
        ";
        // line 230
        $this->displayBlock('page_checkout_cart_add_promotion', $context, $blocks);
        // line 287
        echo "    </div>

    ";
        // line 289
        $this->displayBlock('page_checkout_cart_action_proceed', $context, $blocks);
    }

    // line 230
    public function block_page_checkout_cart_add_promotion($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 231
        echo "            <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.promotion.add");
        echo "\"
                  class=\"cart-add-promotion\"
                  data-form-csrf-handler=\"true\"
                  method=\"post\">

                ";
        // line 236
        $this->displayBlock('page_checkout_cart_add_promotion_csrf', $context, $blocks);
        // line 239
        echo "
                ";
        // line 240
        $this->displayBlock('page_checkout_cart_add_promotion_forward', $context, $blocks);
        // line 245
        echo "
                ";
        // line 246
        $this->displayBlock('page_checkout_cart_add_promotion_input_group', $context, $blocks);
        // line 285
        echo "            </form>
        ";
    }

    // line 236
    public function block_page_checkout_cart_add_promotion_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 237
        echo "                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.promotion.add");
        echo "
                ";
    }

    // line 240
    public function block_page_checkout_cart_add_promotion_forward($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 241
        echo "                    <input type=\"hidden\"
                           name=\"redirectTo\"
                           value=\"frontend.checkout.cart.page\">
                ";
    }

    // line 246
    public function block_page_checkout_cart_add_promotion_input_group($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 247
        echo "                    <div class=\"input-group checkout-aside-add-code\">
                        ";
        // line 248
        $this->displayBlock('page_checkout_cart_add_promotion_label', $context, $blocks);
        // line 253
        echo "
                        ";
        // line 254
        $this->displayBlock('page_checkout_cart_add_promotion_input', $context, $blocks);
        // line 264
        echo "
                        ";
        // line 265
        $this->displayBlock('page_checkout_cart_add_promotion_submit', $context, $blocks);
        // line 283
        echo "                    </div>
                ";
    }

    // line 248
    public function block_page_checkout_cart_add_promotion_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 249
        echo "                            <label class=\"";
        echo sw_escape_filter($this->env, ($context["visuallyHiddenClass"] ?? null), "html", null, true);
        echo "\" for=\"addPromotionInput\">
                                ";
        // line 250
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addPromotionLabel"));
        echo "
                            </label>
                        ";
    }

    // line 254
    public function block_page_checkout_cart_add_promotion_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 255
        echo "                            <input type=\"text\"
                                   name=\"code\"
                                   class=\"form-control\"
                                   id=\"addPromotionInput\"
                                   placeholder=\"";
        // line 259
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addPromotionPlaceholder")), "html", null, true);
        echo "\"
                                   aria-label=\"";
        // line 260
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addPromotionLabel")), "html", null, true);
        echo "\"
                                   aria-describedby=\"addPromotion\"
                                   required=\"required\">
                        ";
    }

    // line 265
    public function block_page_checkout_cart_add_promotion_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 266
        echo "                            ";
        // line 267
        echo "                            ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 268
            echo "                                <button class=\"btn btn-secondary\"
                                        type=\"submit\"
                                        id=\"addPromotion\">
                                    ";
            // line 271
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/cart/index.html.twig", 271);
            })())->display(twig_array_merge($context, ["name" => "checkmark"]));
            // line 272
            echo "                                </button>
                            ";
        } else {
            // line 274
            echo "                                <div class=\"input-group-append\">
                                    <button class=\"btn btn-secondary\"
                                            type=\"submit\"
                                            id=\"addPromotion\">
                                        ";
            // line 278
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/cart/index.html.twig", 278);
            })())->display(twig_array_merge($context, ["name" => "checkmark"]));
            // line 279
            echo "                                    </button>
                                </div>
                            ";
        }
        // line 282
        echo "                        ";
    }

    // line 289
    public function block_page_checkout_cart_action_proceed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 290
        echo "        ";
        // line 291
        echo "        ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 292
            echo "            <div class=\"checkout-aside-action d-grid\">
                <a href=\"";
            // line 293
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.confirm.page");
            echo "\"
                   class=\"btn btn-primary btn-lg begin-checkout-btn\"
                   title=\"";
            // line 295
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedLink")), "html", null, true);
            echo "\">
                    ";
            // line 296
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedLink"));
            echo "
                </a>
            </div>
        ";
        } else {
            // line 300
            echo "            <div class=\"checkout-aside-action\">
                <a href=\"";
            // line 301
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.confirm.page");
            echo "\"
                   class=\"btn btn-primary btn-block btn-lg begin-checkout-btn\"
                   title=\"";
            // line 303
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedLink")), "html", null, true);
            echo "\">
                    ";
            // line 304
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedLink"));
            echo "
                </a>
            </div>
        ";
        }
        // line 308
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1015 => 308,  1008 => 304,  1004 => 303,  999 => 301,  996 => 300,  989 => 296,  985 => 295,  980 => 293,  977 => 292,  974 => 291,  972 => 290,  968 => 289,  964 => 282,  959 => 279,  951 => 278,  945 => 274,  941 => 272,  933 => 271,  928 => 268,  925 => 267,  923 => 266,  919 => 265,  911 => 260,  907 => 259,  901 => 255,  897 => 254,  890 => 250,  885 => 249,  881 => 248,  876 => 283,  874 => 265,  871 => 264,  869 => 254,  866 => 253,  864 => 248,  861 => 247,  857 => 246,  850 => 241,  846 => 240,  839 => 237,  835 => 236,  830 => 285,  828 => 246,  825 => 245,  823 => 240,  820 => 239,  818 => 236,  809 => 231,  805 => 230,  801 => 289,  797 => 287,  795 => 230,  792 => 229,  788 => 228,  782 => 214,  773 => 211,  767 => 210,  762 => 209,  757 => 208,  749 => 205,  742 => 202,  740 => 201,  736 => 200,  732 => 199,  729 => 198,  725 => 197,  719 => 193,  710 => 190,  704 => 189,  699 => 188,  694 => 187,  686 => 184,  679 => 181,  677 => 180,  673 => 179,  669 => 178,  666 => 177,  662 => 176,  658 => 174,  653 => 171,  644 => 168,  640 => 167,  635 => 166,  631 => 165,  627 => 164,  623 => 163,  620 => 162,  617 => 161,  613 => 160,  607 => 217,  605 => 197,  602 => 196,  600 => 176,  597 => 175,  595 => 160,  592 => 159,  588 => 158,  584 => 154,  575 => 153,  571 => 152,  566 => 155,  564 => 152,  560 => 151,  552 => 146,  549 => 145,  545 => 144,  538 => 141,  534 => 140,  528 => 220,  526 => 158,  523 => 157,  521 => 144,  518 => 143,  516 => 140,  510 => 137,  505 => 134,  501 => 133,  497 => 126,  492 => 123,  484 => 122,  478 => 118,  474 => 116,  466 => 115,  461 => 112,  458 => 111,  456 => 110,  452 => 109,  444 => 104,  440 => 103,  434 => 99,  430 => 98,  423 => 94,  418 => 93,  414 => 92,  409 => 127,  407 => 109,  404 => 108,  402 => 98,  399 => 97,  397 => 92,  394 => 91,  390 => 90,  383 => 85,  379 => 84,  372 => 81,  368 => 80,  362 => 129,  360 => 90,  357 => 89,  355 => 84,  352 => 83,  350 => 80,  342 => 75,  339 => 74,  335 => 73,  330 => 223,  328 => 133,  325 => 132,  323 => 73,  320 => 72,  316 => 71,  312 => 69,  310 => 67,  309 => 66,  307 => 65,  303 => 64,  299 => 56,  296 => 55,  293 => 54,  290 => 53,  287 => 52,  284 => 51,  282 => 50,  278 => 49,  274 => 57,  271 => 49,  267 => 48,  263 => 59,  249 => 58,  246 => 48,  228 => 47,  224 => 46,  220 => 44,  217 => 43,  214 => 42,  211 => 41,  208 => 40,  205 => 39,  203 => 38,  199 => 37,  193 => 60,  191 => 46,  188 => 45,  186 => 37,  182 => 35,  178 => 34,  171 => 30,  168 => 29,  164 => 28,  160 => 225,  158 => 71,  155 => 70,  153 => 64,  150 => 63,  148 => 34,  145 => 33,  142 => 28,  134 => 27,  130 => 26,  122 => 22,  119 => 21,  115 => 19,  113 => 18,  110 => 17,  108 => 16,  105 => 15,  103 => 14,  100 => 13,  97 => 9,  94 => 8,  90 => 7,  85 => 4,  81 => 3,  70 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/checkout/cart/index.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/checkout/cart/index.html.twig");
    }
}
