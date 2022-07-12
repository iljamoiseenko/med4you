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

/* @Storefront/storefront/component/checkout/offcanvas-cart.html.twig */
class __TwigTemplate_d0013ee39da1991b5de989a91e1b3495d72552fd6160d90017d7f26767ae974d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'utilities_offcanvas_meta' => [$this, 'block_utilities_offcanvas_meta'],
            'utilities_offcanvas_close_text' => [$this, 'block_utilities_offcanvas_close_text'],
            'utilities_offcanvas_close_icon' => [$this, 'block_utilities_offcanvas_close_icon'],
            'utilities_offcanvas_content' => [$this, 'block_utilities_offcanvas_content'],
            'component_offcanvas_cart' => [$this, 'block_component_offcanvas_cart'],
            'component_offcanvas_cart_header' => [$this, 'block_component_offcanvas_cart_header'],
            'component_offcanvas_cart_header_item_counter' => [$this, 'block_component_offcanvas_cart_header_item_counter'],
            'component_offcanvas_cart_flashbags' => [$this, 'block_component_offcanvas_cart_flashbags'],
            'component_offcanvas_cart_items' => [$this, 'block_component_offcanvas_cart_items'],
            'component_offcanvas_cart_item' => [$this, 'block_component_offcanvas_cart_item'],
            'component_offcanvas_cart_empty' => [$this, 'block_component_offcanvas_cart_empty'],
            'component_offcanvas_summary' => [$this, 'block_component_offcanvas_summary'],
            'component_offcanvas_cart_actions' => [$this, 'block_component_offcanvas_cart_actions'],
            'component_offcanvas_cart_actions_promotion' => [$this, 'block_component_offcanvas_cart_actions_promotion'],
            'component_offcanvas_cart_actions_promotion_form' => [$this, 'block_component_offcanvas_cart_actions_promotion_form'],
            'component_offcanvas_cart_actions_promotion_form_csrf' => [$this, 'block_component_offcanvas_cart_actions_promotion_form_csrf'],
            'component_offcanvas_cart_actions_promotion_redirect' => [$this, 'block_component_offcanvas_cart_actions_promotion_redirect'],
            'component_offcanvas_cart_actions_promotion_input_group' => [$this, 'block_component_offcanvas_cart_actions_promotion_input_group'],
            'component_offcanvas_cart_actions_promotion_label' => [$this, 'block_component_offcanvas_cart_actions_promotion_label'],
            'component_offcanvas_cart_actions_promotion_input' => [$this, 'block_component_offcanvas_cart_actions_promotion_input'],
            'component_offcanvas_cart_actions_promotion_submit' => [$this, 'block_component_offcanvas_cart_actions_promotion_submit'],
            'component_offcanvas_cart_actions_checkout' => [$this, 'block_component_offcanvas_cart_actions_checkout'],
            'component_offcanvas_cart_actions_cart' => [$this, 'block_component_offcanvas_cart_actions_cart'],
            'component_offcanvas_cart_hidden_line_items_information' => [$this, 'block_component_offcanvas_cart_hidden_line_items_information'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/utilities/offcanvas.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/utilities/offcanvas.html.twig", "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_utilities_offcanvas_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $context["isAjaxOffcanvas"] = true;
        // line 5
        echo "
    ";
        // line 6
        $this->displayParentBlock("utilities_offcanvas_meta", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_utilities_offcanvas_close_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.continueShopping"));
        echo "
";
    }

    // line 13
    public function block_utilities_offcanvas_close_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 14);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "arrow-head-left"]));
    }

    // line 17
    public function block_utilities_offcanvas_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    ";
        $this->displayBlock('component_offcanvas_cart', $context, $blocks);
    }

    public function block_component_offcanvas_cart($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "        ";
        $context["isCartNotEmpty"] = (1 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 19), "lineItems", [], "any", false, false, false, 19)), 0));
        // line 20
        echo "
        <div class=\"offcanvas-cart\">
            ";
        // line 22
        $this->displayBlock('component_offcanvas_cart_header', $context, $blocks);
        // line 41
        echo "
            ";
        // line 42
        $this->displayBlock('component_offcanvas_cart_flashbags', $context, $blocks);
        // line 52
        echo "
            ";
        // line 53
        if (($context["isCartNotEmpty"] ?? null)) {
            // line 54
            echo "                ";
            $this->displayBlock('component_offcanvas_cart_items', $context, $blocks);
            // line 71
            echo "            ";
        } else {
            // line 72
            echo "                ";
            $this->displayBlock('component_offcanvas_cart_empty', $context, $blocks);
            // line 78
            echo "            ";
        }
        // line 79
        echo "
            ";
        // line 80
        if (($context["isCartNotEmpty"] ?? null)) {
            // line 81
            echo "                ";
            $this->displayBlock('component_offcanvas_summary', $context, $blocks);
            // line 84
            echo "            ";
        }
        // line 85
        echo "
            ";
        // line 86
        $this->displayBlock('component_offcanvas_cart_actions', $context, $blocks);
        // line 190
        echo "        </div>

        ";
        // line 192
        $this->displayBlock('component_offcanvas_cart_hidden_line_items_information', $context, $blocks);
        // line 198
        echo "    ";
    }

    // line 22
    public function block_component_offcanvas_cart_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                <div class=\"row align-items-center h4 offcanvas-cart-header\">
                    <div class=\"col\">
                        ";
        // line 25
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeader"));
        echo "
                    </div>

                    ";
        // line 28
        $context["checkoutItemCounter"] = twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 28), "lineItems", [], "any", false, false, false, 28));
        // line 29
        echo "
                    ";
        // line 30
        $this->displayBlock('component_offcanvas_cart_header_item_counter', $context, $blocks);
        // line 39
        echo "                </div>
            ";
    }

    // line 30
    public function block_component_offcanvas_cart_header_item_counter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                        ";
        if (($context["isCartNotEmpty"] ?? null)) {
            // line 32
            echo "                            <div class=\"col-auto\">
                                <small class=\"offcanvas-cart-header-count\">
                                    ";
            // line 34
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.itemCounter", ["%count%" => ($context["checkoutItemCounter"] ?? null)]));
            echo "
                                </small>
                            </div>
                        ";
        }
        // line 38
        echo "                    ";
    }

    // line 42
    public function block_component_offcanvas_cart_flashbags($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "                <div class=\"flashbags\">
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 44));
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
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 45
            echo "                        ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 45)->display(twig_array_merge($context, ["type" =>             // line 46
$context["type"], "list" =>             // line 47
$context["messages"]]));
            // line 49
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </div>
            ";
    }

    // line 54
    public function block_component_offcanvas_cart_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                    <div class=\"offcanvas-cart-items\">
                        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 56), "lineItems", [], "any", false, false, false, 56));
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
            // line 57
            echo "                            ";
            $this->displayBlock('component_offcanvas_cart_item', $context, $blocks);
            // line 68
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
        // line 69
        echo "                    </div>
                ";
    }

    // line 57
    public function block_component_offcanvas_cart_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "                                ";
        // line 59
        echo "                                ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 60
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/component/line-item/line-item.html.twig", "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 60)->display(twig_array_merge($context, ["displayMode" => "offcanvas", "redirectTo" => "frontend.cart.offcanvas"]));
            // line 64
            echo "                                ";
        } else {
            // line 65
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/component/checkout/offcanvas-item.html.twig", "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 65)->display($context);
            // line 66
            echo "                                ";
        }
        // line 67
        echo "                            ";
    }

    // line 72
    public function block_component_offcanvas_cart_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "                    ";
        $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 73)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.emptyCart"))]));
        // line 77
        echo "                ";
    }

    // line 81
    public function block_component_offcanvas_summary($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "                    ";
        $this->loadTemplate("@Storefront/storefront/component/checkout/offcanvas-cart-summary.html.twig", "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 82)->display($context);
        // line 83
        echo "                ";
    }

    // line 86
    public function block_component_offcanvas_cart_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "                <div class=\"offcanvas-cart-actions\">
                    ";
        // line 88
        $this->displayBlock('component_offcanvas_cart_actions_promotion', $context, $blocks);
        // line 150
        echo "
                    ";
        // line 151
        $this->displayBlock('component_offcanvas_cart_actions_checkout', $context, $blocks);
        // line 169
        echo "
                    ";
        // line 170
        $this->displayBlock('component_offcanvas_cart_actions_cart', $context, $blocks);
        // line 188
        echo "                </div>
            ";
    }

    // line 88
    public function block_component_offcanvas_cart_actions_promotion($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "                        ";
        if (($context["isCartNotEmpty"] ?? null)) {
            // line 90
            echo "                            <div class=\"js-offcanvas-cart-promotion\">
                                ";
            // line 91
            $this->displayBlock('component_offcanvas_cart_actions_promotion_form', $context, $blocks);
            // line 147
            echo "                            </div>
                        ";
        }
        // line 149
        echo "                    ";
    }

    // line 91
    public function block_component_offcanvas_cart_actions_promotion_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "                                    <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.promotion.add");
        echo "\"
                                          class=\"offcanvas-cart-promotion-form js-offcanvas-cart-add-promotion\"
                                          method=\"post\">

                                        ";
        // line 96
        $this->displayBlock('component_offcanvas_cart_actions_promotion_form_csrf', $context, $blocks);
        // line 99
        echo "
                                        ";
        // line 100
        $this->displayBlock('component_offcanvas_cart_actions_promotion_redirect', $context, $blocks);
        // line 105
        echo "
                                        ";
        // line 106
        $this->displayBlock('component_offcanvas_cart_actions_promotion_input_group', $context, $blocks);
        // line 145
        echo "                                    </form>
                                ";
    }

    // line 96
    public function block_component_offcanvas_cart_actions_promotion_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "                                            ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.promotion.add");
        echo "
                                        ";
    }

    // line 100
    public function block_component_offcanvas_cart_actions_promotion_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "                                            <input type=\"hidden\"
                                                   name=\"redirectTo\"
                                                   value=\"frontend.cart.offcanvas\">
                                        ";
    }

    // line 106
    public function block_component_offcanvas_cart_actions_promotion_input_group($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "                                            <div class=\"input-group\">
                                                ";
        // line 108
        $this->displayBlock('component_offcanvas_cart_actions_promotion_label', $context, $blocks);
        // line 113
        echo "
                                                ";
        // line 114
        $this->displayBlock('component_offcanvas_cart_actions_promotion_input', $context, $blocks);
        // line 124
        echo "
                                                ";
        // line 125
        $this->displayBlock('component_offcanvas_cart_actions_promotion_submit', $context, $blocks);
        // line 143
        echo "                                            </div>
                                        ";
    }

    // line 108
    public function block_component_offcanvas_cart_actions_promotion_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "                                                    <label class=\"";
        echo sw_escape_filter($this->env, ($context["visuallyHiddenClass"] ?? null), "html", null, true);
        echo "\" for=\"addPromotionOffcanvasCartInput\">
                                                        ";
        // line 110
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addPromotionLabel"));
        echo "
                                                    </label>
                                                ";
    }

    // line 114
    public function block_component_offcanvas_cart_actions_promotion_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        echo "                                                    <input type=\"text\"
                                                           name=\"code\"
                                                           class=\"form-control\"
                                                           id=\"addPromotionOffcanvasCartInput\"
                                                           placeholder=\"";
        // line 119
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addPromotionPlaceholder")), "html", null, true);
        echo "\"
                                                           aria-label=\"";
        // line 120
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addPromotionLabel")), "html", null, true);
        echo "\"
                                                           aria-describedby=\"addPromotionOffcanvasCart\"
                                                           required=\"required\">
                                                ";
    }

    // line 125
    public function block_component_offcanvas_cart_actions_promotion_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 126
        echo "                                                    ";
        // line 127
        echo "                                                    ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 128
            echo "                                                        <button class=\"btn btn-secondary\"
                                                                type=\"submit\"
                                                                id=\"addPromotionOffcanvasCart\">
                                                            ";
            // line 131
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 131);
            })())->display(twig_array_merge($context, ["name" => "checkmark"]));
            // line 132
            echo "                                                        </button>
                                                    ";
        } else {
            // line 134
            echo "                                                        <div class=\"input-group-append\">
                                                            <button class=\"btn btn-secondary\"
                                                                    type=\"submit\"
                                                                    id=\"addPromotionOffcanvasCart\">
                                                                ";
            // line 138
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 138);
            })())->display(twig_array_merge($context, ["name" => "checkmark"]));
            // line 139
            echo "                                                            </button>
                                                        </div>
                                                    ";
        }
        // line 142
        echo "                                                ";
    }

    // line 151
    public function block_component_offcanvas_cart_actions_checkout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        echo "                        ";
        // line 153
        echo "                        ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 154
            echo "                            <div class=\"d-grid\">
                                <a href=\"";
            // line 155
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.confirm.page");
            echo "\"
                                   class=\"btn begin-checkout-btn";
            // line 156
            if (($context["isCartNotEmpty"] ?? null)) {
                echo " btn-primary";
            } else {
                echo " btn-light disabled";
            }
            echo "\"
                                   title=\"";
            // line 157
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedToCheckout")), "html", null, true);
            echo "\">
                                    ";
            // line 158
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedToCheckout"));
            echo "
                                </a>
                            </div>
                        ";
        } else {
            // line 162
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.confirm.page");
            echo "\"
                               class=\"btn btn-block begin-checkout-btn";
            // line 163
            if (($context["isCartNotEmpty"] ?? null)) {
                echo " btn-primary";
            } else {
                echo " btn-light disabled";
            }
            echo "\"
                               title=\"";
            // line 164
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedToCheckout")), "html", null, true);
            echo "\">
                                ";
            // line 165
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedToCheckout"));
            echo "
                            </a>
                        ";
        }
        // line 168
        echo "                    ";
    }

    // line 170
    public function block_component_offcanvas_cart_actions_cart($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 171
        echo "                        ";
        // line 172
        echo "                        ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 173
            echo "                            <div class=\"d-grid\">
                                <a href=\"";
            // line 174
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.cart.page");
            echo "\"
                                   class=\"btn btn-link\"
                                   title=\"";
            // line 176
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedToCart")), "html", null, true);
            echo "\">
                                    ";
            // line 177
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedToCart"));
            echo "
                                </a>
                            </div>
                        ";
        } else {
            // line 181
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.cart.page");
            echo "\"
                               class=\"btn btn-block btn-link\"
                               title=\"";
            // line 183
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedToCart")), "html", null, true);
            echo "\">
                                ";
            // line 184
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedToCart"));
            echo "
                            </a>
                        ";
        }
        // line 187
        echo "                    ";
    }

    // line 192
    public function block_component_offcanvas_cart_hidden_line_items_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 193
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/checkout/hidden-line-items-information.html.twig", "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 193)->display(twig_array_merge($context, ["cart" => sw_get_attribute($this->env, $this->source,         // line 194
($context["page"] ?? null), "cart", [], "any", false, false, false, 194), "lineItems" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 195
($context["page"] ?? null), "cart", [], "any", false, false, false, 195), "lineItems", [], "any", false, false, false, 195)]));
        // line 197
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  694 => 197,  692 => 195,  691 => 194,  689 => 193,  685 => 192,  681 => 187,  675 => 184,  671 => 183,  665 => 181,  658 => 177,  654 => 176,  649 => 174,  646 => 173,  643 => 172,  641 => 171,  637 => 170,  633 => 168,  627 => 165,  623 => 164,  615 => 163,  610 => 162,  603 => 158,  599 => 157,  591 => 156,  587 => 155,  584 => 154,  581 => 153,  579 => 152,  575 => 151,  571 => 142,  566 => 139,  558 => 138,  552 => 134,  548 => 132,  540 => 131,  535 => 128,  532 => 127,  530 => 126,  526 => 125,  518 => 120,  514 => 119,  508 => 115,  504 => 114,  497 => 110,  492 => 109,  488 => 108,  483 => 143,  481 => 125,  478 => 124,  476 => 114,  473 => 113,  471 => 108,  468 => 107,  464 => 106,  457 => 101,  453 => 100,  446 => 97,  442 => 96,  437 => 145,  435 => 106,  432 => 105,  430 => 100,  427 => 99,  425 => 96,  417 => 92,  413 => 91,  409 => 149,  405 => 147,  403 => 91,  400 => 90,  397 => 89,  393 => 88,  388 => 188,  386 => 170,  383 => 169,  381 => 151,  378 => 150,  376 => 88,  373 => 87,  369 => 86,  365 => 83,  362 => 82,  358 => 81,  354 => 77,  351 => 73,  347 => 72,  343 => 67,  340 => 66,  337 => 65,  334 => 64,  331 => 60,  328 => 59,  326 => 58,  322 => 57,  317 => 69,  303 => 68,  300 => 57,  283 => 56,  280 => 55,  276 => 54,  271 => 50,  257 => 49,  255 => 47,  254 => 46,  252 => 45,  235 => 44,  232 => 43,  228 => 42,  224 => 38,  217 => 34,  213 => 32,  210 => 31,  206 => 30,  201 => 39,  199 => 30,  196 => 29,  194 => 28,  188 => 25,  184 => 23,  180 => 22,  176 => 198,  174 => 192,  170 => 190,  168 => 86,  165 => 85,  162 => 84,  159 => 81,  157 => 80,  154 => 79,  151 => 78,  148 => 72,  145 => 71,  142 => 54,  140 => 53,  137 => 52,  135 => 42,  132 => 41,  130 => 22,  126 => 20,  123 => 19,  115 => 18,  111 => 17,  100 => 14,  96 => 13,  89 => 10,  85 => 9,  79 => 6,  76 => 5,  73 => 4,  69 => 3,  58 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/checkout/offcanvas-cart.html.twig");
    }
}
