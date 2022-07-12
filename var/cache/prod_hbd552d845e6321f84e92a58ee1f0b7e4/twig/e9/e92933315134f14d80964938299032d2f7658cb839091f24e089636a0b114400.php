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

/* @Storefront/storefront/page/checkout/cart/cart-product-header.html.twig */
class __TwigTemplate_c7549485dca295b67e55acd52717fc28e84b58b1c1f39861b0b0a3c87e9b831c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_cart_header_container' => [$this, 'block_page_checkout_cart_header_container'],
            'page_checkout_cart_header_product_info' => [$this, 'block_page_checkout_cart_header_product_info'],
            'page_checkout_cart_header_quantity' => [$this, 'block_page_checkout_cart_header_quantity'],
            'page_checkout_cart_header_unit_price' => [$this, 'block_page_checkout_cart_header_unit_price'],
            'page_checkout_cart_header_total_price' => [$this, 'block_page_checkout_cart_header_total_price'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('page_checkout_cart_header_container', $context, $blocks);
    }

    public function block_page_checkout_cart_header_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"card-title cart-table-header\">
        <div class=\"row cart-header-row\">
            ";
        // line 6
        $this->displayBlock('page_checkout_cart_header_product_info', $context, $blocks);
        // line 11
        echo "
            ";
        // line 12
        $this->displayBlock('page_checkout_cart_header_quantity', $context, $blocks);
        // line 17
        echo "
            ";
        // line 18
        $this->displayBlock('page_checkout_cart_header_unit_price', $context, $blocks);
        // line 23
        echo "
            ";
        // line 24
        $this->displayBlock('page_checkout_cart_header_total_price', $context, $blocks);
        // line 29
        echo "        </div>
    </div>
";
    }

    // line 6
    public function block_page_checkout_cart_header_product_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "                <div class=\"col-5 cart-header-info\">
                    ";
        // line 8
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderInfo"));
        echo "
                </div>
            ";
    }

    // line 12
    public function block_page_checkout_cart_header_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "                <div class=\"col-2 cart-header-quantity\">
                    ";
        // line 14
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderQuantity"));
        echo "
                </div>
            ";
    }

    // line 18
    public function block_page_checkout_cart_header_unit_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                <div class=\"col-2 cart-header-unit-price\">
                    ";
        // line 20
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderUnitPrice"));
        echo "
                </div>
            ";
    }

    // line 24
    public function block_page_checkout_cart_header_total_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                <div class=\"col-2 cart-header-total-price\">
                    ";
        // line 26
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderTotalPrice"));
        echo "
                </div>
            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/cart/cart-product-header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  128 => 26,  125 => 25,  121 => 24,  114 => 20,  111 => 19,  107 => 18,  100 => 14,  97 => 13,  93 => 12,  86 => 8,  83 => 7,  79 => 6,  73 => 29,  71 => 24,  68 => 23,  66 => 18,  63 => 17,  61 => 12,  58 => 11,  56 => 6,  52 => 4,  45 => 3,  42 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/checkout/cart/cart-product-header.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/checkout/cart/cart-product-header.html.twig");
    }
}
