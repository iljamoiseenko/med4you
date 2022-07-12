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

/* @Storefront/storefront/page/checkout/finish/finish-address.html.twig */
class __TwigTemplate_64c4fbbfed200e6c45d8dbfd7e8d6505c3f8f3f23d58243906b40e291bd9d1a0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_finish_address_inner' => [$this, 'block_page_checkout_finish_address_inner'],
            'page_checkout_finish_address_billing' => [$this, 'block_page_checkout_finish_address_billing'],
            'page_checkout_finish_address_billing_title' => [$this, 'block_page_checkout_finish_address_billing_title'],
            'page_checkout_finish_address_billing_data' => [$this, 'block_page_checkout_finish_address_billing_data'],
            'page_checkout_finish_address_shipping' => [$this, 'block_page_checkout_finish_address_shipping'],
            'page_checkout_finish_address_shipping_title' => [$this, 'block_page_checkout_finish_address_shipping_title'],
            'page_checkout_finish_address_shipping_data' => [$this, 'block_page_checkout_finish_address_shipping_data'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_checkout_finish_address_inner', $context, $blocks);
    }

    public function block_page_checkout_finish_address_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["order"] = sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "order", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context["deliveries"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["order"] ?? null), "deliveries", [], "any", false, false, false, 3), "elements", [], "any", false, false, false, 3);
        // line 4
        echo "    ";
        $context["billingAddress"] = sw_get_attribute($this->env, $this->source, ($context["order"] ?? null), "billingAddress", [], "any", false, false, false, 4);
        // line 5
        echo "
    ";
        // line 6
        if (((1 === twig_compare(twig_length_filter($this->env, ($context["deliveries"] ?? null)), 0)) && (0 !== twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["order"] ?? null), "billingAddress", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6), sw_get_attribute($this->env, $this->source, twig_first($this->env, ($context["deliveries"] ?? null)), "shippingOrderAddressId", [], "any", false, false, false, 6))))) {
            // line 7
            echo "        ";
            $context["shippingAddress"] = sw_get_attribute($this->env, $this->source, twig_first($this->env, ($context["deliveries"] ?? null)), "shippingOrderAddress", [], "any", false, false, false, 7);
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        ";
            $context["shippingAddress"] = ($context["billingAddress"] ?? null);
            // line 10
            echo "    ";
        }
        // line 11
        echo "    <div class=\"row\">
        ";
        // line 12
        $this->displayBlock('page_checkout_finish_address_billing', $context, $blocks);
        // line 31
        echo "
        ";
        // line 32
        $this->displayBlock('page_checkout_finish_address_shipping', $context, $blocks);
        // line 51
        echo "    </div>
";
    }

    // line 12
    public function block_page_checkout_finish_address_billing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "            <div class=\"col-sm-6\">
                <div class=\"card checkout-card\">
                    <div class=\"card-body\">
                        ";
        // line 16
        $this->displayBlock('page_checkout_finish_address_billing_title', $context, $blocks);
        // line 21
        echo "
                        ";
        // line 22
        $this->displayBlock('page_checkout_finish_address_billing_data', $context, $blocks);
        // line 27
        echo "                    </div>
                </div>
            </div>
        ";
    }

    // line 16
    public function block_page_checkout_finish_address_billing_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                            <div class=\"card-title\">
                                ";
        // line 18
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.billingAddressHeader"));
        echo "
                            </div>
                        ";
    }

    // line 22
    public function block_page_checkout_finish_address_billing_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                            <div class=\"finish-address-billing\">
                                ";
        // line 24
        $this->loadTemplate("@Storefront/storefront/component/address/address.html.twig", "@Storefront/storefront/page/checkout/finish/finish-address.html.twig", 24)->display(twig_array_merge($context, ["address" => ($context["billingAddress"] ?? null)]));
        // line 25
        echo "                            </div>
                        ";
    }

    // line 32
    public function block_page_checkout_finish_address_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "            <div class=\"col-sm-6\">
                <div class=\"card checkout-card\">
                    <div class=\"card-body\">
                        ";
        // line 36
        $this->displayBlock('page_checkout_finish_address_shipping_title', $context, $blocks);
        // line 41
        echo "
                        ";
        // line 42
        $this->displayBlock('page_checkout_finish_address_shipping_data', $context, $blocks);
        // line 47
        echo "                    </div>
                </div>
            </div>
        ";
    }

    // line 36
    public function block_page_checkout_finish_address_shipping_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "                            <div class=\"card-title\">
                                ";
        // line 38
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.shippingAddressHeader"));
        echo "
                            </div>
                        ";
    }

    // line 42
    public function block_page_checkout_finish_address_shipping_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "                            <div class=\"finish-address-shipping\">
                                ";
        // line 44
        $this->loadTemplate("@Storefront/storefront/component/address/address.html.twig", "@Storefront/storefront/page/checkout/finish/finish-address.html.twig", 44)->display(twig_array_merge($context, ["address" => ($context["shippingAddress"] ?? null)]));
        // line 45
        echo "                            </div>
                        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/finish/finish-address.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  189 => 45,  187 => 44,  184 => 43,  180 => 42,  173 => 38,  170 => 37,  166 => 36,  159 => 47,  157 => 42,  154 => 41,  152 => 36,  147 => 33,  143 => 32,  138 => 25,  136 => 24,  133 => 23,  129 => 22,  122 => 18,  119 => 17,  115 => 16,  108 => 27,  106 => 22,  103 => 21,  101 => 16,  96 => 13,  92 => 12,  87 => 51,  85 => 32,  82 => 31,  80 => 12,  77 => 11,  74 => 10,  71 => 9,  68 => 8,  65 => 7,  63 => 6,  60 => 5,  57 => 4,  54 => 3,  51 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/checkout/finish/finish-address.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/checkout/finish/finish-address.html.twig");
    }
}
