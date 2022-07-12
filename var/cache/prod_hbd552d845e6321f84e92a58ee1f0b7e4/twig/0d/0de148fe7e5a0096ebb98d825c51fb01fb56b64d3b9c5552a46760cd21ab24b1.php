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

/* @Storefront/storefront/page/checkout/confirm/confirm-item.html.twig */
class __TwigTemplate_e450747ddd7931e8d9b0102a13516d6c6f183e1febae4b68e8439bd377935d4f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_checkout_item_unit_price' => [$this, 'block_page_checkout_item_unit_price'],
            'page_checkout_item_tax_price' => [$this, 'block_page_checkout_item_tax_price'],
            'page_checkout_item_tax_price_label' => [$this, 'block_page_checkout_item_tax_price_label'],
            'page_checkout_item_tax_price_inner' => [$this, 'block_page_checkout_item_tax_price_inner'],
            'page_checkout_item_total_price_tax_symbol' => [$this, 'block_page_checkout_item_total_price_tax_symbol'],
            'page_checkout_item_quantity_redirect' => [$this, 'block_page_checkout_item_quantity_redirect'],
            'page_checkout_item_remove_redirect' => [$this, 'block_page_checkout_item_remove_redirect'],
            'page_checkout_item_children' => [$this, 'block_page_checkout_item_children'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/checkout/checkout-item.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/page/checkout/checkout-item.html.twig", "@Storefront/storefront/page/checkout/confirm/confirm-item.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_checkout_item_unit_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        // line 7
        echo "    ";
        $this->displayBlock('page_checkout_item_tax_price', $context, $blocks);
    }

    public function block_page_checkout_item_tax_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        ";
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 8), "taxCalculationType", [], "any", false, false, false, 8), "horizontal"))) {
            // line 9
            echo "            <div class=\"col-12 col-sm-4 col-md-2 cart-item-tax-price\">
                ";
            // line 10
            $this->displayBlock('page_checkout_item_tax_price_label', $context, $blocks);
            // line 19
            echo "
                ";
            // line 20
            $this->displayBlock('page_checkout_item_tax_price_inner', $context, $blocks);
            // line 26
            echo "            </div>
        ";
        }
        // line 28
        echo "    ";
    }

    // line 10
    public function block_page_checkout_item_tax_price_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "                    <div class=\"cart-item-tax-price-label\">
                        ";
        // line 12
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "taxState", [], "any", false, false, false, 12), "gross"))) {
            // line 13
            echo "                            ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderTaxIncludeVat"));
            echo "
                        ";
        } else {
            // line 15
            echo "                            ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderTaxExcludeVat"));
            echo "
                        ";
        }
        // line 17
        echo "                    </div>
                ";
    }

    // line 20
    public function block_page_checkout_item_tax_price_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "price", [], "any", false, false, false, 21), "calculatedTaxes", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["calculatedTax"]) {
            // line 22
            echo "                        ";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, $context["calculatedTax"], "tax", [], "any", false, false, false, 22)), "html", null, true);
            echo "
                        <br>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calculatedTax'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                ";
    }

    // line 31
    public function block_page_checkout_item_total_price_tax_symbol($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 33
    public function block_page_checkout_item_quantity_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "    <input type=\"hidden\"
           name=\"redirectTo\"
           value=\"frontend.checkout.confirm.page\">
";
    }

    // line 39
    public function block_page_checkout_item_remove_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "    <input type=\"hidden\"
           name=\"redirectTo\"
           value=\"frontend.checkout.confirm.page\">
";
    }

    // line 45
    public function block_page_checkout_item_children($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "    ";
        $context["childTemplate"] = "@Storefront/storefront/page/checkout/confirm/confirm-item.html.twig";
        // line 47
        echo "    ";
        $this->displayParentBlock("page_checkout_item_children", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/confirm/confirm-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 47,  169 => 46,  165 => 45,  158 => 40,  154 => 39,  147 => 34,  143 => 33,  137 => 31,  133 => 25,  123 => 22,  118 => 21,  114 => 20,  109 => 17,  103 => 15,  97 => 13,  95 => 12,  92 => 11,  88 => 10,  84 => 28,  80 => 26,  78 => 20,  75 => 19,  73 => 10,  70 => 9,  67 => 8,  59 => 7,  57 => 6,  53 => 5,  42 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/checkout/confirm/confirm-item.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/checkout/confirm/confirm-item.html.twig");
    }
}
