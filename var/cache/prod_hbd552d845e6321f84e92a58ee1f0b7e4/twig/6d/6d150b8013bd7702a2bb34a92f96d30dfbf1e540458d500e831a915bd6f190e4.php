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

/* @Storefront/storefront/page/checkout/confirm/index.html.twig */
class __TwigTemplate_2be2cc714cd0cb9ddf14714b3cec51b451e1f8fb2907b90c3c52770090ce7cd2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_header' => [$this, 'block_base_header'],
            'base_navigation' => [$this, 'block_base_navigation'],
            'page_checkout_main_content' => [$this, 'block_page_checkout_main_content'],
            'page_checkout_confirm' => [$this, 'block_page_checkout_confirm'],
            'page_checkout_confirm_header' => [$this, 'block_page_checkout_confirm_header'],
            'page_checkout_confirm_alerts' => [$this, 'block_page_checkout_confirm_alerts'],
            'page_checkout_confirm_violations' => [$this, 'block_page_checkout_confirm_violations'],
            'page_checkout_confirm_tos' => [$this, 'block_page_checkout_confirm_tos'],
            'page_checkout_confirm_tos_header' => [$this, 'block_page_checkout_confirm_tos_header'],
            'page_checkout_confirm_revocation_notice' => [$this, 'block_page_checkout_confirm_revocation_notice'],
            'page_checkout_confirm_revocation_notice_link' => [$this, 'block_page_checkout_confirm_revocation_notice_link'],
            'page_checkout_confirm_tos_control' => [$this, 'block_page_checkout_confirm_tos_control'],
            'page_checkout_confirm_tos_control_checkbox' => [$this, 'block_page_checkout_confirm_tos_control_checkbox'],
            'page_checkout_confirm_tos_control_label' => [$this, 'block_page_checkout_confirm_tos_control_label'],
            'page_checkout_confirm_address' => [$this, 'block_page_checkout_confirm_address'],
            'page_checkout_confirm_payment_shipping' => [$this, 'block_page_checkout_confirm_payment_shipping'],
            'page_checkout_confirm_payment' => [$this, 'block_page_checkout_confirm_payment'],
            'page_checkout_confirm_shipping' => [$this, 'block_page_checkout_confirm_shipping'],
            'page_checkout_confirm_product_table' => [$this, 'block_page_checkout_confirm_product_table'],
            'page_checkout_confirm_table_container' => [$this, 'block_page_checkout_confirm_table_container'],
            'page_checkout_confirm_table_header' => [$this, 'block_page_checkout_confirm_table_header'],
            'page_checkout_confirm_table_items' => [$this, 'block_page_checkout_confirm_table_items'],
            'page_checkout_confirm_table_item' => [$this, 'block_page_checkout_confirm_table_item'],
            'page_checkout_confirm_hidden_line_items_information' => [$this, 'block_page_checkout_confirm_hidden_line_items_information'],
            'page_checkout_additional' => [$this, 'block_page_checkout_additional'],
            'page_checkout_finish_customer_comment' => [$this, 'block_page_checkout_finish_customer_comment'],
            'page_checkout_confirm_customer_comment_header' => [$this, 'block_page_checkout_confirm_customer_comment_header'],
            'page_checkout_confirm_customer_comment_control' => [$this, 'block_page_checkout_confirm_customer_comment_control'],
            'page_checkout_confirm_customer_comment_control_textfield_label' => [$this, 'block_page_checkout_confirm_customer_comment_control_textfield_label'],
            'page_checkout_confirm_customer_comment_control_textfield' => [$this, 'block_page_checkout_confirm_customer_comment_control_textfield'],
            'page_checkout_aside_actions' => [$this, 'block_page_checkout_aside_actions'],
            'page_checkout_aside_actions_csrf' => [$this, 'block_page_checkout_aside_actions_csrf'],
            'page_checkout_confirm_form_submit' => [$this, 'block_page_checkout_confirm_form_submit'],
            'base_footer' => [$this, 'block_base_footer'],
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
        // line 188
        $context["formAddHistoryOptions"] = ["entries" => [0 => ["state" => [], "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.ordersTitle"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.order.page")]]];
        // line 2
        $this->parent = $this->loadTemplate("@Storefront/storefront/page/checkout/_page.html.twig", "@Storefront/storefront/page/checkout/confirm/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_base_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/layout/header/header-minimal.html.twig", "@Storefront/storefront/page/checkout/confirm/index.html.twig", 4)->display($context);
    }

    // line 7
    public function block_base_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_page_checkout_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->displayBlock('page_checkout_confirm', $context, $blocks);
    }

    public function block_page_checkout_confirm($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "        ";
        $this->displayBlock('page_checkout_confirm_header', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('page_checkout_confirm_alerts', $context, $blocks);
        // line 30
        echo "
        ";
        // line 31
        $this->displayBlock('page_checkout_confirm_tos', $context, $blocks);
        // line 81
        echo "
        ";
        // line 82
        $this->displayBlock('page_checkout_confirm_address', $context, $blocks);
        // line 87
        echo "
        ";
        // line 88
        $this->displayBlock('page_checkout_confirm_payment_shipping', $context, $blocks);
        // line 105
        echo "
        ";
        // line 106
        $this->displayBlock('page_checkout_confirm_product_table', $context, $blocks);
        // line 142
        echo "
        ";
        // line 143
        $this->displayBlock('page_checkout_confirm_hidden_line_items_information', $context, $blocks);
        // line 149
        echo "    ";
    }

    // line 11
    public function block_page_checkout_confirm_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "            <h1 class=\"confirm-main-header\">
                ";
        // line 13
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmHeader"));
        echo "
            </h1>
        ";
    }

    // line 17
    public function block_page_checkout_confirm_alerts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "            ";
        $this->displayBlock('page_checkout_confirm_violations', $context, $blocks);
        // line 29
        echo "        ";
    }

    // line 18
    public function block_page_checkout_confirm_violations($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [], "method", false, false, false, 19));
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
        foreach ($context['_seq'] as $context["_key"] => $context["violation"]) {
            // line 20
            echo "                    ";
            $context["snippetName"] = ("error." . sw_get_attribute($this->env, $this->source, $context["violation"], "code", [], "any", false, false, false, 20));
            // line 21
            echo "                    ";
            $context["fieldName"] = twig_trim_filter(sw_get_attribute($this->env, $this->source, $context["violation"], "propertyPath", [], "any", false, false, false, 21), "/", "left");
            // line 22
            echo "
                    ";
            // line 23
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/checkout/confirm/index.html.twig", 23)->display(twig_array_merge($context, ["type" => "danger", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(            // line 25
($context["snippetName"] ?? null), ["%field%" => ($context["fieldName"] ?? null)]))]));
            // line 27
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['violation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            ";
    }

    // line 31
    public function block_page_checkout_confirm_tos($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "            <div class=\"confirm-tos\">
                <div class=\"card checkout-card\">
                    <div class=\"card-body\">
                        ";
        // line 35
        $this->displayBlock('page_checkout_confirm_tos_header', $context, $blocks);
        // line 40
        echo "
                        ";
        // line 41
        $this->displayBlock('page_checkout_confirm_revocation_notice', $context, $blocks);
        // line 55
        echo "
                        ";
        // line 56
        $this->displayBlock('page_checkout_confirm_tos_control', $context, $blocks);
        // line 77
        echo "                    </div>
                </div>
            </div>
        ";
    }

    // line 35
    public function block_page_checkout_confirm_tos_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "                            <div class=\"card-title\">
                                ";
        // line 37
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmTermsHeader"));
        echo "
                            </div>
                        ";
    }

    // line 41
    public function block_page_checkout_confirm_revocation_notice($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "                            ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "confirm.revocationNotice")) {
            // line 43
            echo "                                <p class=\"revocation-notice\">
                                    ";
            // line 44
            $this->displayBlock('page_checkout_confirm_revocation_notice_link', $context, $blocks);
            // line 52
            echo "                                </p>
                            ";
        }
        // line 54
        echo "                        ";
    }

    // line 44
    public function block_page_checkout_confirm_revocation_notice_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "                                        <a href=\"";
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.revocationPage")]), "html", null, true);
        echo "\"
                                           ";
        // line 46
        echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
        echo "=\"modal\"
                                           title=\"";
        // line 47
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmRevocationNotice")), "html", null, true);
        echo "\"
                                           data-url=\"";
        // line 48
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.revocationPage")]), "html", null, true);
        echo "\">
                                            ";
        // line 49
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmRevocationNotice"));
        echo "
                                        </a>
                                    ";
    }

    // line 56
    public function block_page_checkout_confirm_tos_control($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "                            <div class=\"";
        echo sw_escape_filter($this->env, ($context["formCheckboxWrapperClass"] ?? null), "html", null, true);
        echo "\">
                                ";
        // line 58
        $this->displayBlock('page_checkout_confirm_tos_control_checkbox', $context, $blocks);
        // line 66
        echo "
                                ";
        // line 67
        $this->displayBlock('page_checkout_confirm_tos_control_label', $context, $blocks);
        // line 75
        echo "                            </div>
                        ";
    }

    // line 58
    public function block_page_checkout_confirm_tos_control_checkbox($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "                                    <input type=\"checkbox\"
                                           class=\"checkout-confirm-tos-checkbox ";
        // line 60
        echo sw_escape_filter($this->env, ($context["formCheckInputClass"] ?? null), "html", null, true);
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/tos"], "method", false, false, false, 60))) {
            echo " is-invalid";
        }
        echo "\"
                                           required=\"required\"
                                           id=\"tos\"
                                           form=\"confirmOrderForm\"
                                           name=\"tos\"/>
                                ";
    }

    // line 67
    public function block_page_checkout_confirm_tos_control_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "                                    <label for=\"tos\"
                                           class=\"checkout-confirm-tos-label custom-control-label\">
                                        ";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmTerms", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.tosPage")])]);
        // line 72
        echo "
                                    </label>
                                ";
    }

    // line 82
    public function block_page_checkout_confirm_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "            <div class=\"confirm-address\">
                ";
        // line 84
        $this->loadTemplate("@Storefront/storefront/page/checkout/confirm/confirm-address.html.twig", "@Storefront/storefront/page/checkout/confirm/index.html.twig", 84)->display($context);
        // line 85
        echo "            </div>
        ";
    }

    // line 88
    public function block_page_checkout_confirm_payment_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "            <div class=\"confirm-payment-shipping\">
                <div class=\"row\">
                    ";
        // line 91
        $this->displayBlock('page_checkout_confirm_payment', $context, $blocks);
        // line 96
        echo "
                    ";
        // line 97
        $this->displayBlock('page_checkout_confirm_shipping', $context, $blocks);
        // line 102
        echo "                </div>
            </div>
        ";
    }

    // line 91
    public function block_page_checkout_confirm_payment($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "                        <div class=\"col-sm-6 confirm-payment\">
                            ";
        // line 93
        $this->loadTemplate("@Storefront/storefront/page/checkout/confirm/confirm-payment.html.twig", "@Storefront/storefront/page/checkout/confirm/index.html.twig", 93)->display($context);
        // line 94
        echo "                        </div>
                    ";
    }

    // line 97
    public function block_page_checkout_confirm_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "                        <div class=\"col-sm-6 confirm-shipping\">
                            ";
        // line 99
        $this->loadTemplate("@Storefront/storefront/page/checkout/confirm/confirm-shipping.html.twig", "@Storefront/storefront/page/checkout/confirm/index.html.twig", 99)->display($context);
        // line 100
        echo "                        </div>
                    ";
    }

    // line 106
    public function block_page_checkout_confirm_product_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "            <div class=\"confirm-product\">
                ";
        // line 108
        $this->displayBlock('page_checkout_confirm_table_container', $context, $blocks);
        // line 140
        echo "            </div>
        ";
    }

    // line 108
    public function block_page_checkout_confirm_table_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "                    <div class=\"card\">
                        <div class=\"card-body\">
                            ";
        // line 111
        $this->displayBlock('page_checkout_confirm_table_header', $context, $blocks);
        // line 121
        echo "
                            ";
        // line 122
        $this->displayBlock('page_checkout_confirm_table_items', $context, $blocks);
        // line 137
        echo "                        </div>
                    </div>
                ";
    }

    // line 111
    public function block_page_checkout_confirm_table_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 112
        echo "                                ";
        // line 113
        echo "                                ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 114
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/component/checkout/cart-header.html.twig", "@Storefront/storefront/page/checkout/confirm/index.html.twig", 114)->display(twig_array_merge($context, ["showTaxPrice" => true]));
            // line 117
            echo "                                ";
        } else {
            // line 118
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/page/checkout/confirm/confirm-product-header.html.twig", "@Storefront/storefront/page/checkout/confirm/index.html.twig", 118)->display($context);
            // line 119
            echo "                                ";
        }
        // line 120
        echo "                            ";
    }

    // line 122
    public function block_page_checkout_confirm_table_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 123), "lineItems", [], "any", false, false, false, 123));
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
            // line 124
            echo "                                    ";
            $this->displayBlock('page_checkout_confirm_table_item', $context, $blocks);
            // line 135
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lineItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                            ";
    }

    // line 124
    public function block_page_checkout_confirm_table_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 125
        echo "                                        ";
        // line 126
        echo "                                        ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 127
            echo "                                            ";
            $this->loadTemplate("@Storefront/storefront/component/line-item/line-item.html.twig", "@Storefront/storefront/page/checkout/confirm/index.html.twig", 127)->display(twig_array_merge($context, ["redirectTo" => "frontend.checkout.confirm.page", "showTaxPrice" => true]));
            // line 131
            echo "                                        ";
        } else {
            // line 132
            echo "                                            ";
            $this->loadTemplate("@Storefront/storefront/page/checkout/confirm/confirm-item.html.twig", "@Storefront/storefront/page/checkout/confirm/index.html.twig", 132)->display($context);
            // line 133
            echo "                                        ";
        }
        // line 134
        echo "                                    ";
    }

    // line 143
    public function block_page_checkout_confirm_hidden_line_items_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 144
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/checkout/hidden-line-items-information.html.twig", "@Storefront/storefront/page/checkout/confirm/index.html.twig", 144)->display(twig_array_merge($context, ["cart" => sw_get_attribute($this->env, $this->source,         // line 145
($context["page"] ?? null), "cart", [], "any", false, false, false, 145), "lineItems" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 146
($context["page"] ?? null), "cart", [], "any", false, false, false, 146), "lineItems", [], "any", false, false, false, 146)]));
        // line 148
        echo "        ";
    }

    // line 152
    public function block_page_checkout_additional($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        echo "    ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.showCustomerComment")) {
            // line 154
            echo "        <div class=\"checkout-additional\">
            ";
            // line 155
            $this->displayBlock('page_checkout_finish_customer_comment', $context, $blocks);
            // line 184
            echo "        </div>
    ";
        }
    }

    // line 155
    public function block_page_checkout_finish_customer_comment($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 156
        echo "                <div class=\"card checkout-card\">
                    <div class=\"card-body\">
                        ";
        // line 158
        $this->displayBlock('page_checkout_confirm_customer_comment_header', $context, $blocks);
        // line 163
        echo "
                        ";
        // line 164
        $this->displayBlock('page_checkout_confirm_customer_comment_control', $context, $blocks);
        // line 181
        echo "                    </div>
                </div>
            ";
    }

    // line 158
    public function block_page_checkout_confirm_customer_comment_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 159
        echo "                            <div class=\"card-title\">
                                ";
        // line 160
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.customerCommentHeader"));
        echo "
                            </div>
                        ";
    }

    // line 164
    public function block_page_checkout_confirm_customer_comment_control($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 165
        echo "                            <div class=\"checkout-customer-comment-control\">
                                ";
        // line 166
        $this->displayBlock('page_checkout_confirm_customer_comment_control_textfield_label', $context, $blocks);
        // line 171
        echo "
                                ";
        // line 172
        $this->displayBlock('page_checkout_confirm_customer_comment_control_textfield', $context, $blocks);
        // line 179
        echo "                            </div>
                        ";
    }

    // line 166
    public function block_page_checkout_confirm_customer_comment_control_textfield_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 167
        echo "                                    <label class=\"form-label\" for=\"";
        echo sw_escape_filter($this->env, twig_constant("Shopware\\Core\\Checkout\\Order\\SalesChannel\\OrderService::CUSTOMER_COMMENT_KEY"), "html", null, true);
        echo "\">
                                        ";
        // line 168
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.customerCommentLabel"));
        echo "
                                    </label>
                                ";
    }

    // line 172
    public function block_page_checkout_confirm_customer_comment_control_textfield($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 173
        echo "                                    <textarea class=\"form-control\"
                                              placeholder=\"";
        // line 174
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.customerCommentPlaceholder"));
        echo "\"
                                              id=\"";
        // line 175
        echo sw_escape_filter($this->env, twig_constant("Shopware\\Core\\Checkout\\Order\\SalesChannel\\OrderService::CUSTOMER_COMMENT_KEY"), "html", null, true);
        echo "\"
                                              form=\"confirmOrderForm\"
                                              name=\"";
        // line 177
        echo sw_escape_filter($this->env, twig_constant("Shopware\\Core\\Checkout\\Order\\SalesChannel\\OrderService::CUSTOMER_COMMENT_KEY"), "html", null, true);
        echo "\"></textarea>
                                ";
    }

    // line 196
    public function block_page_checkout_aside_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 197
        echo "    <div class=\"checkout-aside-action\">
        <form id=\"confirmOrderForm\"
              action=\"";
        // line 199
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.finish.order");
        echo "\"
              data-form-csrf-handler=\"true\"
              data-form-preserver=\"true\"
              data-form-submit-loader=\"true\"
              data-form-add-history=\"true\"
              data-form-add-history-options='";
        // line 204
        echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["formAddHistoryOptions"] ?? null)]), "html", null, true);
        echo "'
              method=\"post\">

            ";
        // line 207
        $this->displayBlock('page_checkout_aside_actions_csrf', $context, $blocks);
        // line 210
        echo "
            ";
        // line 211
        $this->displayBlock('page_checkout_confirm_form_submit', $context, $blocks);
        // line 237
        echo "        </form>
    </div>
";
    }

    // line 207
    public function block_page_checkout_aside_actions_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 208
        echo "                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.finish.order");
        echo "
            ";
    }

    // line 211
    public function block_page_checkout_confirm_form_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 212
        echo "                ";
        // line 213
        echo "                ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 214
            echo "                    <div class=\"d-grid\">
                        <button id=\"confirmFormSubmit\"
                                class=\"btn btn-primary btn-lg\"
                                form=\"confirmOrderForm\"
                            ";
            // line 218
            if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 218), "errors", [], "any", false, false, false, 218), "blockOrder", [], "any", false, false, false, 218)) {
                // line 219
                echo "                                disabled
                            ";
            }
            // line 221
            echo "                                type=\"submit\">
                            ";
            // line 222
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmSubmit"));
            echo "
                        </button>
                    </div>
                ";
        } else {
            // line 226
            echo "                    <button id=\"confirmFormSubmit\"
                            class=\"btn btn-primary btn-block btn-lg\"
                            form=\"confirmOrderForm\"
                        ";
            // line 229
            if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 229), "errors", [], "any", false, false, false, 229), "blockOrder", [], "any", false, false, false, 229)) {
                // line 230
                echo "                            disabled
                        ";
            }
            // line 232
            echo "                            type=\"submit\">
                        ";
            // line 233
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmSubmit"));
            echo "
                    </button>
                ";
        }
        // line 236
        echo "            ";
    }

    // line 241
    public function block_base_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 242
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/layout/footer/footer-minimal.html.twig", "@Storefront/storefront/page/checkout/confirm/index.html.twig", 242)->display($context);
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/confirm/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  789 => 242,  785 => 241,  781 => 236,  775 => 233,  772 => 232,  768 => 230,  766 => 229,  761 => 226,  754 => 222,  751 => 221,  747 => 219,  745 => 218,  739 => 214,  736 => 213,  734 => 212,  730 => 211,  723 => 208,  719 => 207,  713 => 237,  711 => 211,  708 => 210,  706 => 207,  700 => 204,  692 => 199,  688 => 197,  684 => 196,  678 => 177,  673 => 175,  669 => 174,  666 => 173,  662 => 172,  655 => 168,  650 => 167,  646 => 166,  641 => 179,  639 => 172,  636 => 171,  634 => 166,  631 => 165,  627 => 164,  620 => 160,  617 => 159,  613 => 158,  607 => 181,  605 => 164,  602 => 163,  600 => 158,  596 => 156,  592 => 155,  586 => 184,  584 => 155,  581 => 154,  578 => 153,  574 => 152,  570 => 148,  568 => 146,  567 => 145,  565 => 144,  561 => 143,  557 => 134,  554 => 133,  551 => 132,  548 => 131,  545 => 127,  542 => 126,  540 => 125,  536 => 124,  532 => 136,  518 => 135,  515 => 124,  497 => 123,  493 => 122,  489 => 120,  486 => 119,  483 => 118,  480 => 117,  477 => 114,  474 => 113,  472 => 112,  468 => 111,  462 => 137,  460 => 122,  457 => 121,  455 => 111,  451 => 109,  447 => 108,  442 => 140,  440 => 108,  437 => 107,  433 => 106,  428 => 100,  426 => 99,  423 => 98,  419 => 97,  414 => 94,  412 => 93,  409 => 92,  405 => 91,  399 => 102,  397 => 97,  394 => 96,  392 => 91,  388 => 89,  384 => 88,  379 => 85,  377 => 84,  374 => 83,  370 => 82,  364 => 72,  362 => 70,  358 => 68,  354 => 67,  341 => 60,  338 => 59,  334 => 58,  329 => 75,  327 => 67,  324 => 66,  322 => 58,  317 => 57,  313 => 56,  306 => 49,  302 => 48,  298 => 47,  294 => 46,  289 => 45,  285 => 44,  281 => 54,  277 => 52,  275 => 44,  272 => 43,  269 => 42,  265 => 41,  258 => 37,  255 => 36,  251 => 35,  244 => 77,  242 => 56,  239 => 55,  237 => 41,  234 => 40,  232 => 35,  227 => 32,  223 => 31,  219 => 28,  205 => 27,  203 => 25,  202 => 23,  199 => 22,  196 => 21,  193 => 20,  175 => 19,  171 => 18,  167 => 29,  164 => 18,  160 => 17,  153 => 13,  150 => 12,  146 => 11,  142 => 149,  140 => 143,  137 => 142,  135 => 106,  132 => 105,  130 => 88,  127 => 87,  125 => 82,  122 => 81,  120 => 31,  117 => 30,  115 => 17,  112 => 16,  109 => 11,  101 => 10,  97 => 9,  91 => 7,  86 => 4,  82 => 3,  77 => 2,  75 => 188,  68 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/checkout/confirm/index.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/checkout/confirm/index.html.twig");
    }
}
