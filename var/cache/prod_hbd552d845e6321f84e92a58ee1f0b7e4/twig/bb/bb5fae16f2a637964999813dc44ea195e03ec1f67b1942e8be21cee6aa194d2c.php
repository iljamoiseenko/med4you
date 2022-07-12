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

/* @Storefront/storefront/component/product/card/badges.html.twig */
class __TwigTemplate_cbaaed251c8596f8d605095fd12dde133c27e263b6367e6723151f841d313b1b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_badges' => [$this, 'block_component_product_badges'],
            'component_product_badges_discount' => [$this, 'block_component_product_badges_discount'],
            'component_product_badges_topseller' => [$this, 'block_component_product_badges_topseller'],
            'component_product_badges_new' => [$this, 'block_component_product_badges_new'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_product_badges', $context, $blocks);
    }

    public function block_component_product_badges($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"product-badges\">
        ";
        // line 3
        $this->displayBlock('component_product_badges_discount', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $this->displayBlock('component_product_badges_topseller', $context, $blocks);
        // line 26
        echo "
        ";
        // line 27
        $this->displayBlock('component_product_badges_new', $context, $blocks);
        // line 34
        echo "    </div>
";
    }

    // line 3
    public function block_component_product_badges_discount($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            ";
        $context["price"] = sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrice", [], "any", false, false, false, 4);
        // line 5
        echo "            ";
        if ((1 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 5), "count", [], "any", false, false, false, 5), 0))) {
            // line 6
            echo "                ";
            $context["price"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 6), "last", [], "any", false, false, false, 6);
            // line 7
            echo "            ";
        }
        // line 8
        echo "
            ";
        // line 9
        $context["listPrice"] = (1 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "listPrice", [], "any", false, false, false, 9), "percentage", [], "any", false, false, false, 9), 0));
        // line 10
        echo "            ";
        $context["hasRange"] = (1 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 10), "count", [], "any", false, false, false, 10), 1));
        // line 11
        echo "
            ";
        // line 12
        if ((($context["listPrice"] ?? null) &&  !($context["hasRange"] ?? null))) {
            // line 13
            echo "                <div class=\"badge badge-danger badge-discount\">
                    <span>&#37;</span>
                </div>
            ";
        }
        // line 17
        echo "        ";
    }

    // line 19
    public function block_component_product_badges_topseller($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "markAsTopseller", [], "any", false, false, false, 20)) {
            // line 21
            echo "                <div>
                    <span class=\"badge badge-warning badge-topseller\">";
            // line 22
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxLabelTopseller"));
            echo "</span>
                </div>
            ";
        }
        // line 25
        echo "        ";
    }

    // line 27
    public function block_component_product_badges_new($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isNew", [], "any", false, false, false, 28)) {
            // line 29
            echo "                <div>
                    <span class=\"badge badge-success badge-new\">";
            // line 30
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxLabelNew"));
            echo "</span>
                </div>
            ";
        }
        // line 33
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/badges.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  143 => 33,  137 => 30,  134 => 29,  131 => 28,  127 => 27,  123 => 25,  117 => 22,  114 => 21,  111 => 20,  107 => 19,  103 => 17,  97 => 13,  95 => 12,  92 => 11,  89 => 10,  87 => 9,  84 => 8,  81 => 7,  78 => 6,  75 => 5,  72 => 4,  68 => 3,  63 => 34,  61 => 27,  58 => 26,  56 => 19,  53 => 18,  51 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/product/card/badges.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/product/card/badges.html.twig");
    }
}
