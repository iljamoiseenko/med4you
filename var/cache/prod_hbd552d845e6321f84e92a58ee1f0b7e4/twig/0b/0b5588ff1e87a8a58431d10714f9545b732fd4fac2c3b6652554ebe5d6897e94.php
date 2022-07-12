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

/* @Storefront/storefront/page/checkout/confirm/confirm-address.html.twig */
class __TwigTemplate_71c8c492c9c73d60c75492fdbf4aae10b2b20fd72d76c5317fce8e680a4fd23b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_confirm_address_inner' => [$this, 'block_page_checkout_confirm_address_inner'],
            'page_checkout_confirm_address' => [$this, 'block_page_checkout_confirm_address'],
            'page_checkout_confirm_address_billing' => [$this, 'block_page_checkout_confirm_address_billing'],
            'page_checkout_confirm_address_billing_title' => [$this, 'block_page_checkout_confirm_address_billing_title'],
            'page_checkout_confirm_address_billing_data' => [$this, 'block_page_checkout_confirm_address_billing_data'],
            'page_checkout_confirm_address_billing_actions' => [$this, 'block_page_checkout_confirm_address_billing_actions'],
            'page_checkout_confirm_address_billing_actions_link' => [$this, 'block_page_checkout_confirm_address_billing_actions_link'],
            'page_checkout_confirm_address_shipping' => [$this, 'block_page_checkout_confirm_address_shipping'],
            'page_checkout_confirm_address_shipping_title' => [$this, 'block_page_checkout_confirm_address_shipping_title'],
            'page_checkout_confirm_address_shipping_data' => [$this, 'block_page_checkout_confirm_address_shipping_data'],
            'page_checkout_confirm_address_shipping_data_equal' => [$this, 'block_page_checkout_confirm_address_shipping_data_equal'],
            'page_checkout_confirm_address_shipping_actions' => [$this, 'block_page_checkout_confirm_address_shipping_actions'],
            'page_checkout_confirm_address_shipping_actions_link' => [$this, 'block_page_checkout_confirm_address_shipping_actions_link'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_checkout_confirm_address_inner', $context, $blocks);
    }

    public function block_page_checkout_confirm_address_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if (sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "order", [], "any", false, false, false, 2)) {
            // line 3
            echo "        ";
            $context["order"] = sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "order", [], "any", false, false, false, 3);
            // line 4
            echo "        ";
            $context["deliveries"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["order"] ?? null), "deliveries", [], "any", false, false, false, 4), "elements", [], "any", false, false, false, 4);
            // line 5
            echo "        ";
            $context["billingAddress"] = sw_get_attribute($this->env, $this->source, ($context["order"] ?? null), "billingAddress", [], "any", false, false, false, 5);
            // line 6
            echo "
        ";
            // line 7
            if (((1 === twig_compare(twig_length_filter($this->env, ($context["deliveries"] ?? null)), 0)) && (0 !== twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["order"] ?? null), "billingAddress", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7), sw_get_attribute($this->env, $this->source, twig_first($this->env, ($context["deliveries"] ?? null)), "shippingOrderAddressId", [], "any", false, false, false, 7))))) {
                // line 8
                echo "            ";
                $context["shippingAddress"] = sw_get_attribute($this->env, $this->source, twig_first($this->env, ($context["deliveries"] ?? null)), "shippingOrderAddress", [], "any", false, false, false, 8);
                // line 9
                echo "        ";
            } else {
                // line 10
                echo "            ";
                $context["shippingAddress"] = ($context["billingAddress"] ?? null);
                // line 11
                echo "        ";
            }
            // line 12
            echo "    ";
        } else {
            // line 13
            echo "        ";
            $context["billingAddress"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 13), "activeBillingAddress", [], "any", false, false, false, 13);
            // line 14
            echo "        ";
            $context["shippingAddress"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 14), "activeShippingAddress", [], "any", false, false, false, 14);
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('page_checkout_confirm_address', $context, $blocks);
    }

    public function block_page_checkout_confirm_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "        <div class=\"row js-confirm-overview-addresses\">
            ";
        // line 19
        $this->displayBlock('page_checkout_confirm_address_billing', $context, $blocks);
        // line 60
        echo "
            ";
        // line 61
        $this->displayBlock('page_checkout_confirm_address_shipping', $context, $blocks);
        // line 110
        echo "        </div>
    ";
    }

    // line 19
    public function block_page_checkout_confirm_address_billing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                <div class=\"col-sm-6 card-col confirm-billing-address\">
                    <div class=\"card checkout-card\">
                        <div class=\"card-body\">
                            ";
        // line 23
        $this->displayBlock('page_checkout_confirm_address_billing_title', $context, $blocks);
        // line 28
        echo "
                            ";
        // line 29
        $this->displayBlock('page_checkout_confirm_address_billing_data', $context, $blocks);
        // line 36
        echo "
                            ";
        // line 37
        $this->displayBlock('page_checkout_confirm_address_billing_actions', $context, $blocks);
        // line 56
        echo "                        </div>
                    </div>
                </div>
            ";
    }

    // line 23
    public function block_page_checkout_confirm_address_billing_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                                <div class=\"card-title\">
                                    ";
        // line 25
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.billingAddressHeader"));
        echo "
                                </div>
                            ";
    }

    // line 29
    public function block_page_checkout_confirm_address_billing_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "                                <div class=\"confirm-address-billing\">
                                    ";
        // line 31
        $this->loadTemplate("@Storefront/storefront/component/address/address.html.twig", "@Storefront/storefront/page/checkout/confirm/confirm-address.html.twig", 31)->display(twig_array_merge($context, ["address" =>         // line 32
($context["billingAddress"] ?? null)]));
        // line 34
        echo "                                </div>
                            ";
    }

    // line 37
    public function block_page_checkout_confirm_address_billing_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "                                <div class=\"card-actions\">
                                    ";
        // line 39
        $context["addressEditorOptions"] = ["changeBilling" => true, "addressId" => sw_get_attribute($this->env, $this->source,         // line 41
($context["billingAddress"] ?? null), "id", [], "any", false, false, false, 41), "csrfToken" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.addressbook", ["mode" => "token"])];
        // line 44
        echo "
                                    ";
        // line 45
        $this->displayBlock('page_checkout_confirm_address_billing_actions_link', $context, $blocks);
        // line 54
        echo "                                </div>
                            ";
    }

    // line 45
    public function block_page_checkout_confirm_address_billing_actions_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "                                        <a href=\"";
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.edit.page", ["addressId" => sw_get_attribute($this->env, $this->source, ($context["billingAddress"] ?? null), "id", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\"
                                           title=\"";
        // line 47
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeBilling")), "html", null, true);
        echo "\"
                                           class=\"btn btn-light\"
                                           data-address-editor=\"true\"
                                           data-address-editor-options='";
        // line 50
        echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["addressEditorOptions"] ?? null)]), "html", null, true);
        echo "'>
                                            ";
        // line 51
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeBilling"));
        echo "
                                        </a>
                                    ";
    }

    // line 61
    public function block_page_checkout_confirm_address_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "                <div class=\"col-sm-6 card-col confirm-shipping-address\">
                    <div class=\"card checkout-card\">
                        <div class=\"card-body\">
                            ";
        // line 65
        $this->displayBlock('page_checkout_confirm_address_shipping_title', $context, $blocks);
        // line 70
        echo "
                            ";
        // line 71
        $this->displayBlock('page_checkout_confirm_address_shipping_data', $context, $blocks);
        // line 86
        echo "
                            ";
        // line 87
        $this->displayBlock('page_checkout_confirm_address_shipping_actions', $context, $blocks);
        // line 106
        echo "                        </div>
                    </div>
                </div>
            ";
    }

    // line 65
    public function block_page_checkout_confirm_address_shipping_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "                                <div class=\"card-title\">
                                    ";
        // line 67
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.shippingAddressHeader"));
        echo "
                                </div>
                            ";
    }

    // line 71
    public function block_page_checkout_confirm_address_shipping_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "                                <div class=\"confirm-address-shipping\">
                                    ";
        // line 73
        if ((sw_get_attribute($this->env, $this->source, ($context["billingAddress"] ?? null), "id", [], "any", false, false, false, 73) === sw_get_attribute($this->env, $this->source, ($context["shippingAddress"] ?? null), "id", [], "any", false, false, false, 73))) {
            // line 74
            echo "                                        ";
            $this->displayBlock('page_checkout_confirm_address_shipping_data_equal', $context, $blocks);
            // line 79
            echo "                                    ";
        } else {
            // line 80
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/component/address/address.html.twig", "@Storefront/storefront/page/checkout/confirm/confirm-address.html.twig", 80)->display(twig_array_merge($context, ["address" =>             // line 81
($context["shippingAddress"] ?? null)]));
            // line 83
            echo "                                    ";
        }
        // line 84
        echo "                                </div>
                            ";
    }

    // line 74
    public function block_page_checkout_confirm_address_shipping_data_equal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "                                            <p>
                                                ";
        // line 76
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addressEqualText"));
        echo "
                                            </p>
                                        ";
    }

    // line 87
    public function block_page_checkout_confirm_address_shipping_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "                                <div class=\"card-actions\">
                                    ";
        // line 89
        $context["addressEditorOptions"] = ["changeShipping" => true, "addressId" => sw_get_attribute($this->env, $this->source,         // line 91
($context["shippingAddress"] ?? null), "id", [], "any", false, false, false, 91), "csrfToken" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.addressbook", ["mode" => "token"])];
        // line 94
        echo "
                                    ";
        // line 95
        $this->displayBlock('page_checkout_confirm_address_shipping_actions_link', $context, $blocks);
        // line 104
        echo "                                </div>
                            ";
    }

    // line 95
    public function block_page_checkout_confirm_address_shipping_actions_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "                                        <a href=\"";
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.edit.page", ["addressId" => sw_get_attribute($this->env, $this->source, ($context["shippingAddress"] ?? null), "id", [], "any", false, false, false, 96)]), "html", null, true);
        echo "\"
                                           title=\"";
        // line 97
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeShipping")), "html", null, true);
        echo "\"
                                           class=\"btn btn-light\"
                                           data-address-editor=\"true\"
                                           data-address-editor-options='";
        // line 100
        echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["addressEditorOptions"] ?? null)]), "html", null, true);
        echo "'>
                                            ";
        // line 101
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeShipping"));
        echo "
                                        </a>
                                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/confirm/confirm-address.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  348 => 101,  344 => 100,  338 => 97,  333 => 96,  329 => 95,  324 => 104,  322 => 95,  319 => 94,  317 => 91,  316 => 89,  313 => 88,  309 => 87,  302 => 76,  299 => 75,  295 => 74,  290 => 84,  287 => 83,  285 => 81,  283 => 80,  280 => 79,  277 => 74,  275 => 73,  272 => 72,  268 => 71,  261 => 67,  258 => 66,  254 => 65,  247 => 106,  245 => 87,  242 => 86,  240 => 71,  237 => 70,  235 => 65,  230 => 62,  226 => 61,  219 => 51,  215 => 50,  209 => 47,  204 => 46,  200 => 45,  195 => 54,  193 => 45,  190 => 44,  188 => 41,  187 => 39,  184 => 38,  180 => 37,  175 => 34,  173 => 32,  172 => 31,  169 => 30,  165 => 29,  158 => 25,  155 => 24,  151 => 23,  144 => 56,  142 => 37,  139 => 36,  137 => 29,  134 => 28,  132 => 23,  127 => 20,  123 => 19,  118 => 110,  116 => 61,  113 => 60,  111 => 19,  108 => 18,  101 => 17,  98 => 16,  95 => 15,  92 => 14,  89 => 13,  86 => 12,  83 => 11,  80 => 10,  77 => 9,  74 => 8,  72 => 7,  69 => 6,  66 => 5,  63 => 4,  60 => 3,  57 => 2,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/checkout/confirm/confirm-address.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/checkout/confirm/confirm-address.html.twig");
    }
}
