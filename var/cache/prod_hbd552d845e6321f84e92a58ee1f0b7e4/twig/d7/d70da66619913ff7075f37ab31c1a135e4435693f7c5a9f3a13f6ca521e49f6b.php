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

/* @Storefront/storefront/page/product-detail/headline.html.twig */
class __TwigTemplate_c234bdf2890757c88880f7beadfcbbb82d52f3545a3977f90efa37c73d504fb4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_headline_inner' => [$this, 'block_page_product_detail_headline_inner'],
            'page_product_detail_name_container' => [$this, 'block_page_product_detail_name_container'],
            'page_product_detail_name' => [$this, 'block_page_product_detail_name'],
            'page_product_detail_manufacturer' => [$this, 'block_page_product_detail_manufacturer'],
            'page_product_detail_manufacturer_inner' => [$this, 'block_page_product_detail_manufacturer_inner'],
            'page_product_detail_manufacturer_link' => [$this, 'block_page_product_detail_manufacturer_link'],
            'page_product_detail_manufacturer_logo' => [$this, 'block_page_product_detail_manufacturer_logo'],
            'page_product_detail_manufacturer_text' => [$this, 'block_page_product_detail_manufacturer_text'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_product_detail_headline_inner', $context, $blocks);
    }

    public function block_page_product_detail_headline_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $this->displayBlock('page_product_detail_name_container', $context, $blocks);
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('page_product_detail_manufacturer', $context, $blocks);
    }

    // line 2
    public function block_page_product_detail_name_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <div class=\"col product-detail-name-container\">
            ";
        // line 4
        $this->displayBlock('page_product_detail_name', $context, $blocks);
        // line 10
        echo "        </div>
    ";
    }

    // line 4
    public function block_page_product_detail_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                <h1 class=\"product-detail-name\"
                    itemprop=\"name\">
                    ";
        // line 7
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 7), "translated", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "
                </h1>
            ";
    }

    // line 13
    public function block_page_product_detail_manufacturer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "        ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 14), "manufacturer", [], "any", false, false, false, 14)) {
            // line 15
            echo "            <div class=\"col-md-auto product-detail-manufacturer\">
                ";
            // line 16
            $this->displayBlock('page_product_detail_manufacturer_inner', $context, $blocks);
            // line 37
            echo "            </div>
        ";
        }
        // line 39
        echo "    ";
    }

    // line 16
    public function block_page_product_detail_manufacturer_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                    ";
        $this->displayBlock('page_product_detail_manufacturer_link', $context, $blocks);
        // line 36
        echo "                ";
    }

    // line 17
    public function block_page_product_detail_manufacturer_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "                        <a href=\"";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 18), "manufacturer", [], "any", false, false, false, 18), "link", [], "any", false, false, false, 18), "html", null, true);
        echo "\"
                           class=\"product-detail-manufacturer-link\"
                           rel=\"noreferrer noopener\"
                           target=\"_blank\"
                           title=\"";
        // line 22
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 22), "manufacturer", [], "any", false, false, false, 22), "translated", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
        echo "\">
                            ";
        // line 23
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 23), "manufacturer", [], "any", false, false, false, 23), "media", [], "any", false, false, false, 23)) {
            // line 24
            echo "                                ";
            $this->displayBlock('page_product_detail_manufacturer_logo', $context, $blocks);
            // line 29
            echo "                            ";
        } else {
            // line 30
            echo "                                ";
            $this->displayBlock('page_product_detail_manufacturer_text', $context, $blocks);
            // line 33
            echo "                            ";
        }
        // line 34
        echo "                        </a>
                    ";
    }

    // line 24
    public function block_page_product_detail_manufacturer_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                                    <img src=\"";
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 25), "manufacturer", [], "any", false, false, false, 25), "media", [], "any", false, false, false, 25)), "html", null, true);
        echo "\"
                                         class=\"product-detail-manufacturer-logo\"
                                         alt=\"";
        // line 27
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 27), "manufacturer", [], "any", false, false, false, 27), "translated", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "\"/>
                                ";
    }

    // line 30
    public function block_page_product_detail_manufacturer_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                                    ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 31), "manufacturer", [], "any", false, false, false, 31), "translated", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
        echo "
                                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/headline.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  177 => 31,  173 => 30,  167 => 27,  161 => 25,  157 => 24,  152 => 34,  149 => 33,  146 => 30,  143 => 29,  140 => 24,  138 => 23,  134 => 22,  126 => 18,  122 => 17,  118 => 36,  115 => 17,  111 => 16,  107 => 39,  103 => 37,  101 => 16,  98 => 15,  95 => 14,  91 => 13,  84 => 7,  80 => 5,  76 => 4,  71 => 10,  69 => 4,  66 => 3,  62 => 2,  58 => 13,  55 => 12,  52 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/headline.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/headline.html.twig");
    }
}
