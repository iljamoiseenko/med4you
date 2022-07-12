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

/* @Storefront/storefront/page/checkout/confirm/confirm-product-header.html.twig */
class __TwigTemplate_cebc5c5540189a4834cdea873e31249721c4c2cbefa2c22c24fc3ef7bd938637 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_checkout_cart_header_quantity' => [$this, 'block_page_checkout_cart_header_quantity'],
            'page_checkout_cart_header_unit_price' => [$this, 'block_page_checkout_cart_header_unit_price'],
            'page_checkout_cart_header_tax_price' => [$this, 'block_page_checkout_cart_header_tax_price'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/checkout/cart/cart-product-header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/page/checkout/cart/cart-product-header.html.twig", "@Storefront/storefront/page/checkout/confirm/confirm-product-header.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_checkout_cart_header_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $context["layout"] = (((0 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 6), "taxCalculationType", [], "any", false, false, false, 6), "horizontal"))) ? ("col-2") : ("col-4"));
        // line 7
        echo "
    <div class=\"";
        // line 8
        echo sw_escape_filter($this->env, ($context["layout"] ?? null), "html", null, true);
        echo " cart-header-quantity\">
        ";
        // line 9
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderQuantity"));
        echo "
    </div>
";
    }

    // line 13
    public function block_page_checkout_cart_header_unit_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        // line 15
        echo "    ";
        $this->displayBlock('page_checkout_cart_header_tax_price', $context, $blocks);
    }

    public function block_page_checkout_cart_header_tax_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "        ";
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 16), "taxCalculationType", [], "any", false, false, false, 16), "horizontal"))) {
            // line 17
            echo "            <div class=\"col-2 cart-header-tax-price\">
                ";
            // line 18
            if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "taxState", [], "any", false, false, false, 18), "gross"))) {
                // line 19
                echo "                    ";
                echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderTaxIncludeVat"));
                echo "
                ";
            } else {
                // line 21
                echo "                    ";
                echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderTaxExcludeVat"));
                echo "
                ";
            }
            // line 23
            echo "            </div>
        ";
        }
        // line 25
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/confirm/confirm-product-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 25,  103 => 23,  97 => 21,  91 => 19,  89 => 18,  86 => 17,  83 => 16,  75 => 15,  73 => 14,  69 => 13,  62 => 9,  58 => 8,  55 => 7,  52 => 6,  48 => 5,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/checkout/confirm/confirm-product-header.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/checkout/confirm/confirm-product-header.html.twig");
    }
}
