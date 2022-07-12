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

/* @Storefront/storefront/component/product/card/action.html.twig */
class __TwigTemplate_b0beb1dba42b4c8f0e884e083fdcfbe292bd873aa41e2d79d56efc20ba7f3490 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_box_action_inner' => [$this, 'block_component_product_box_action_inner'],
            'component_product_box_action_buy' => [$this, 'block_component_product_box_action_buy'],
            'component_product_box_action_buy_csrf' => [$this, 'block_component_product_box_action_buy_csrf'],
            'component_product_box_action_form' => [$this, 'block_component_product_box_action_form'],
            'component_product_box_action_buy_redirect_input' => [$this, 'block_component_product_box_action_buy_redirect_input'],
            'page_product_detail_buy_product_buy_info' => [$this, 'block_page_product_detail_buy_product_buy_info'],
            'page_product_detail_product_buy_meta' => [$this, 'block_page_product_detail_product_buy_meta'],
            'page_product_detail_product_buy_button' => [$this, 'block_page_product_detail_product_buy_button'],
            'component_product_box_action_detail' => [$this, 'block_component_product_box_action_detail'],
            'component_product_box_action_meta' => [$this, 'block_component_product_box_action_meta'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_product_box_action_inner', $context, $blocks);
    }

    public function block_component_product_box_action_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["id"] = sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 2);
        // line 3
        echo "    <div class=\"product-action\">
        ";
        // line 4
        $context["isAvailable"] = ( !sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isCloseout", [], "any", false, false, false, 4) || (0 <= twig_compare(sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "availableStock", [], "any", false, false, false, 4), sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 4))));
        // line 5
        echo "        ";
        $context["displayFrom"] = (1 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 5), "count", [], "any", false, false, false, 5), 1));
        // line 6
        echo "        ";
        $context["displayBuyButton"] = ((($context["isAvailable"] ?? null) &&  !($context["displayFrom"] ?? null)) && (0 >= twig_compare(sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "childCount", [], "any", false, false, false, 6), 0)));
        // line 7
        echo "
        ";
        // line 8
        if ((($context["displayBuyButton"] ?? null) && $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.listing.allowBuyInListing"))) {
            // line 9
            echo "            ";
            $this->displayBlock('component_product_box_action_buy', $context, $blocks);
            // line 80
            echo "        ";
        } else {
            // line 81
            echo "            ";
            $this->displayBlock('component_product_box_action_detail', $context, $blocks);
            // line 99
            echo "        ";
        }
        // line 100
        echo "    </div>

    ";
        // line 102
        $this->displayBlock('component_product_box_action_meta', $context, $blocks);
    }

    // line 9
    public function block_component_product_box_action_buy($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                ";
        // line 11
        echo "                <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.line-item.add");
        echo "\"
                      method=\"post\"
                      class=\"buy-widget\"
                      data-add-to-cart=\"true\">

                    ";
        // line 16
        $this->displayBlock('component_product_box_action_buy_csrf', $context, $blocks);
        // line 19
        echo "
                    ";
        // line 20
        $this->displayBlock('component_product_box_action_form', $context, $blocks);
        // line 78
        echo "                </form>
            ";
    }

    // line 16
    public function block_component_product_box_action_buy_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.line-item.add");
        echo "
                    ";
    }

    // line 20
    public function block_component_product_box_action_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "
                        ";
        // line 22
        $this->displayBlock('component_product_box_action_buy_redirect_input', $context, $blocks);
        // line 33
        echo "
                        ";
        // line 34
        $this->displayBlock('page_product_detail_buy_product_buy_info', $context, $blocks);
        // line 54
        echo "
                        ";
        // line 55
        $this->displayBlock('page_product_detail_product_buy_meta', $context, $blocks);
        // line 60
        echo "
                        ";
        // line 61
        $this->displayBlock('page_product_detail_product_buy_button', $context, $blocks);
        // line 77
        echo "                    ";
    }

    // line 22
    public function block_component_product_box_action_buy_redirect_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                            ";
        // line 24
        echo "                            <input type=\"hidden\"
                                   name=\"redirectTo\"
                                   value=\"frontend.detail.page\">

                            <input type=\"hidden\"
                                   name=\"redirectParameters\"
                                   data-redirect-parameters=\"true\"
                                   value='{\"productId\": \"";
        // line 31
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 31), "html", null, true);
        echo "\"}'>
                        ";
    }

    // line 34
    public function block_page_product_detail_buy_product_buy_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "                            <input type=\"hidden\"
                                   name=\"lineItems[";
        // line 36
        echo sw_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][id]\"
                                   value=\"";
        // line 37
        echo sw_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
                            <input type=\"hidden\"
                                   name=\"lineItems[";
        // line 39
        echo sw_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][referencedId]\"
                                   value=\"";
        // line 40
        echo sw_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
                            <input type=\"hidden\"
                                   name=\"lineItems[";
        // line 42
        echo sw_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][type]\"
                                   value=\"product\">
                            <input type=\"hidden\"
                                   name=\"lineItems[";
        // line 45
        echo sw_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][stackable]\"
                                   value=\"1\">
                            <input type=\"hidden\"
                                   name=\"lineItems[";
        // line 48
        echo sw_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][removable]\"
                                   value=\"1\">
                            <input type=\"hidden\"
                                   name=\"lineItems[";
        // line 51
        echo sw_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][quantity]\"
                                   value=\"";
        // line 52
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 52), "html", null, true);
        echo "\">
                        ";
    }

    // line 55
    public function block_page_product_detail_product_buy_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "                            <input type=\"hidden\"
                                   name=\"product-name\"
                                   value=\"";
        // line 58
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 58), "name", [], "any", false, false, false, 58), "html", null, true);
        echo "\">
                        ";
    }

    // line 61
    public function block_page_product_detail_product_buy_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "                            ";
        // line 63
        echo "                            ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 64
            echo "                                <div class=\"d-grid\">
                                    <button class=\"btn btn-buy\"
                                            title=\"";
            // line 66
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxAddProduct")), "html", null, true);
            echo "\">
                                        ";
            // line 67
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxAddProduct"));
            echo "
                                    </button>
                                </div>
                            ";
        } else {
            // line 71
            echo "                                <button class=\"btn btn-block btn-buy\"
                                        title=\"";
            // line 72
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxAddProduct")), "html", null, true);
            echo "\">
                                    ";
            // line 73
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxAddProduct"));
            echo "
                                </button>
                            ";
        }
        // line 76
        echo "                        ";
    }

    // line 81
    public function block_component_product_box_action_detail($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "                ";
        // line 83
        echo "                ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 84
            echo "                    <div class=\"d-grid\">
                        <a href=\"";
            // line 85
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["id"] ?? null)]), "html", null, true);
            echo "\"
                           class=\"btn btn-light\"
                           title=\"";
            // line 87
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxProductDetails")), "html", null, true);
            echo "\">
                            ";
            // line 88
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxProductDetails"));
            echo "
                        </a>
                    </div>
                ";
        } else {
            // line 92
            echo "                    <a href=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["id"] ?? null)]), "html", null, true);
            echo "\"
                       class=\"btn btn-block btn-light\"
                       title=\"";
            // line 94
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxProductDetails")), "html", null, true);
            echo "\">
                        ";
            // line 95
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxProductDetails"));
            echo "
                    </a>
                ";
        }
        // line 98
        echo "            ";
    }

    // line 102
    public function block_component_product_box_action_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "        <input type=\"hidden\"
               name=\"product-name\"
               value=\"";
        // line 105
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 105), "name", [], "any", false, false, false, 105), "html", null, true);
        echo "\">

        <input type=\"hidden\"
               name=\"product-id\"
               value=\"";
        // line 109
        echo sw_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/action.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  351 => 109,  344 => 105,  340 => 103,  336 => 102,  332 => 98,  326 => 95,  322 => 94,  316 => 92,  309 => 88,  305 => 87,  300 => 85,  297 => 84,  294 => 83,  292 => 82,  288 => 81,  284 => 76,  278 => 73,  274 => 72,  271 => 71,  264 => 67,  260 => 66,  256 => 64,  253 => 63,  251 => 62,  247 => 61,  241 => 58,  237 => 56,  233 => 55,  227 => 52,  223 => 51,  217 => 48,  211 => 45,  205 => 42,  200 => 40,  196 => 39,  191 => 37,  187 => 36,  184 => 35,  180 => 34,  174 => 31,  165 => 24,  163 => 23,  159 => 22,  155 => 77,  153 => 61,  150 => 60,  148 => 55,  145 => 54,  143 => 34,  140 => 33,  138 => 22,  135 => 21,  131 => 20,  124 => 17,  120 => 16,  115 => 78,  113 => 20,  110 => 19,  108 => 16,  99 => 11,  97 => 10,  93 => 9,  89 => 102,  85 => 100,  82 => 99,  79 => 81,  76 => 80,  73 => 9,  71 => 8,  68 => 7,  65 => 6,  62 => 5,  60 => 4,  57 => 3,  54 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/product/card/action.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/product/card/action.html.twig");
    }
}
