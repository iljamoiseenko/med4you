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

/* @Storefront/storefront/component/product/card/meta.html.twig */
class __TwigTemplate_bdb219563289677d316ac4ab7ad77020c9fb44b32afe931b0b749bd875f8ca75 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_box_rich_snippets_inner' => [$this, 'block_component_product_box_rich_snippets_inner'],
            'component_product_box_rich_snippets_brand' => [$this, 'block_component_product_box_rich_snippets_brand'],
            'component_product_box_rich_snippets_gtin13' => [$this, 'block_component_product_box_rich_snippets_gtin13'],
            'component_product_box_rich_snippets_mpn' => [$this, 'block_component_product_box_rich_snippets_mpn'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_product_box_rich_snippets_inner', $context, $blocks);
    }

    public function block_component_product_box_rich_snippets_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        // line 3
        echo "
    ";
        // line 4
        $this->displayBlock('component_product_box_rich_snippets_brand', $context, $blocks);
        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('component_product_box_rich_snippets_gtin13', $context, $blocks);
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('component_product_box_rich_snippets_mpn', $context, $blocks);
    }

    // line 4
    public function block_component_product_box_rich_snippets_brand($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        <div itemprop=\"brand\" itemtype=\"https://schema.org/Brand\" itemscope>
            <meta itemprop=\"name\" content=\"";
        // line 6
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "manufacturer", [], "any", false, false, false, 6), "translated", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "\" />
        </div>
    ";
    }

    // line 10
    public function block_component_product_box_rich_snippets_gtin13($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "        ";
        $context["ean"] = sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "ean", [], "any", false, false, false, 11);
        // line 12
        echo "        ";
        if (($context["ean"] ?? null)) {
            // line 13
            echo "            <meta itemprop=\"gtin13\"
                  content=\"";
            // line 14
            echo sw_escape_filter($this->env, ($context["ean"] ?? null), "html", null, true);
            echo "\"/>
        ";
        }
        // line 16
        echo "    ";
    }

    // line 18
    public function block_component_product_box_rich_snippets_mpn($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "        ";
        if (sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "manufacturerNumber", [], "any", false, false, false, 19)) {
            // line 20
            echo "            <meta itemprop=\"mpn\"
                  content=\"";
            // line 21
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "manufacturerNumber", [], "any", false, false, false, 21), "html", null, true);
            echo "\"/>
        ";
        }
        // line 23
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/meta.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  118 => 23,  113 => 21,  110 => 20,  107 => 19,  103 => 18,  99 => 16,  94 => 14,  91 => 13,  88 => 12,  85 => 11,  81 => 10,  74 => 6,  71 => 5,  67 => 4,  63 => 18,  60 => 17,  58 => 10,  55 => 9,  53 => 4,  50 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/product/card/meta.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/product/card/meta.html.twig");
    }
}
