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

/* @Storefront/storefront/component/product/block-price.html.twig */
class __TwigTemplate_a03796c8dd69a17f4dbbd6e73b0535b2dce3b4325d2967275077495ea61b817a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_detail_block_price' => [$this, 'block_component_product_detail_block_price'],
            'component_product_detail_block_price_content' => [$this, 'block_component_product_detail_block_price_content'],
            'component_product_detail_block_list_price_wrapper' => [$this, 'block_component_product_detail_block_list_price_wrapper'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_product_detail_block_price', $context, $blocks);
    }

    public function block_component_product_detail_block_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["isListPrice"] = (1 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "listPrice", [], "any", false, false, false, 2), "percentage", [], "any", false, false, false, 2), 0));
        // line 3
        echo "    ";
        $context["isRegulationPrice"] = (0 !== twig_compare(sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "regulationPrice", [], "any", false, false, false, 3), null));
        // line 4
        echo "
    <div>
        ";
        // line 6
        $this->displayBlock('component_product_detail_block_price_content', $context, $blocks);
        // line 32
        echo "    </div>
";
    }

    // line 6
    public function block_component_product_detail_block_price_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            ";
        if ((sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "listprice", [], "any", false, false, false, 7) && ($context["isListPrice"] ?? null))) {
            // line 8
            echo "                <div class=\"product-detail-price";
            if (($context["price"] ?? null)) {
                echo " with-advanced-list-price";
            }
            echo "\">";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "unitPrice", [], "any", false, false, false, 8)), "html", null, true);
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo "</div>
                ";
            // line 9
            $this->displayBlock('component_product_detail_block_list_price_wrapper', $context, $blocks);
            // line 23
            echo "            ";
        } else {
            // line 24
            echo "                ";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "unitPrice", [], "any", false, false, false, 24)), "html", null, true);
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo "
            ";
        }
        // line 26
        echo "            ";
        if (($context["isRegulationPrice"] ?? null)) {
            // line 27
            echo "                <span class=\"product-detail-advanced-regulation-price-wrapper";
            if (($context["isListPrice"] ?? null)) {
                echo " with-list-price";
            }
            echo "\">
                    <span class=\"regulation-price\">";
            // line 28
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.listPricePreviously", ["%price%" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "regulationPrice", [], "any", false, false, false, 28), "price", [], "any", false, false, false, 28))]), "html", null, true);
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo "</span>
                </span>
            ";
        }
        // line 31
        echo "        ";
    }

    // line 9
    public function block_component_product_detail_block_list_price_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                    ";
        $context["afterListPriceSnippetExists"] = (1 === twig_compare(twig_length_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.afterListPrice")), 0));
        // line 11
        echo "                    ";
        $context["beforeListPriceSnippetExists"] = (1 === twig_compare(twig_length_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.beforeListPrice")), 0));
        // line 12
        echo "
                    <span class=\"product-detail-advanced-list-price-wrapper";
        // line 13
        if ((($context["beforeListPriceSnippetExists"] ?? null) || ($context["afterListPriceSnippetExists"] ?? null))) {
            echo " product-detail-advanced-list-price-wrapper-no-line-through";
        }
        echo "\">
                        ";
        // line 14
        if (($context["beforeListPriceSnippetExists"] ?? null)) {
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.beforeListPrice"), "html", null, true);
        }
        // line 15
        echo "
                        <span class=\"list-price-price\">";
        // line 16
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "listprice", [], "any", false, false, false, 16), "price", [], "any", false, false, false, 16)), "html", null, true);
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "</span>

                        ";
        // line 18
        if (($context["afterListPriceSnippetExists"] ?? null)) {
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.afterListPrice"), "html", null, true);
        }
        // line 19
        echo "
                        <span class=\"list-price-percentage\">";
        // line 20
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.listPricePercentage", ["%price%" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "listPrice", [], "any", false, false, false, 20), "percentage", [], "any", false, false, false, 20)]));
        echo "</span>
                    </span>
                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/block-price.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  153 => 20,  150 => 19,  146 => 18,  140 => 16,  137 => 15,  133 => 14,  127 => 13,  124 => 12,  121 => 11,  118 => 10,  114 => 9,  110 => 31,  103 => 28,  96 => 27,  93 => 26,  86 => 24,  83 => 23,  81 => 9,  71 => 8,  68 => 7,  64 => 6,  59 => 32,  57 => 6,  53 => 4,  50 => 3,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/product/block-price.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/product/block-price.html.twig");
    }
}
