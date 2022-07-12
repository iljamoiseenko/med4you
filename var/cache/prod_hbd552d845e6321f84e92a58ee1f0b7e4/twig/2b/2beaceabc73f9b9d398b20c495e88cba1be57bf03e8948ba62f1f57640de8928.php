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

/* @Storefront/storefront/page/product-detail/buy-widget-form.html.twig */
class __TwigTemplate_cab73b7cff7439a04708fdc1453e7f21d940a8a44b0239dd24a9013461241dcb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_buy_form_inner' => [$this, 'block_page_product_detail_buy_form_inner'],
            'page_product_detail_buy_form_action' => [$this, 'block_page_product_detail_buy_form_action'],
            'page_product_detail_buy_form_inner_csrf' => [$this, 'block_page_product_detail_buy_form_inner_csrf'],
            'page_product_detail_buy_container' => [$this, 'block_page_product_detail_buy_container'],
            'page_product_detail_buy_quantity_container' => [$this, 'block_page_product_detail_buy_quantity_container'],
            'page_product_detail_buy_quantity' => [$this, 'block_page_product_detail_buy_quantity'],
            'page_product_detail_buy_quantity_input_group' => [$this, 'block_page_product_detail_buy_quantity_input_group'],
            'page_product_detail_buy_quantity_input' => [$this, 'block_page_product_detail_buy_quantity_input'],
            'page_product_detail_buy_quantity_input_unit' => [$this, 'block_page_product_detail_buy_quantity_input_unit'],
            'page_product_detail_buy_quantity_select' => [$this, 'block_page_product_detail_buy_quantity_select'],
            'page_product_detail_buy_redirect_input' => [$this, 'block_page_product_detail_buy_redirect_input'],
            'page_product_detail_buy_product_buy_info' => [$this, 'block_page_product_detail_buy_product_buy_info'],
            'page_product_detail_product_buy_meta' => [$this, 'block_page_product_detail_product_buy_meta'],
            'page_product_detail_buy_button_container' => [$this, 'block_page_product_detail_buy_button_container'],
            'page_product_detail_buy_button' => [$this, 'block_page_product_detail_buy_button'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_product_detail_buy_form_inner', $context, $blocks);
    }

    public function block_page_product_detail_buy_form_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        // line 3
        echo "
    ";
        // line 5
        echo "    ";
        $context["product"] = sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 5);
        // line 6
        echo "
    <form
        id=\"productDetailPageBuyProductForm\"
        action=\"";
        // line 9
        $this->displayBlock('page_product_detail_buy_form_action', $context, $blocks);
        echo "\"
        method=\"post\"
        class=\"buy-widget\"
        data-add-to-cart=\"true\">

        ";
        // line 14
        $this->displayBlock('page_product_detail_buy_form_inner_csrf', $context, $blocks);
        // line 17
        echo "
        ";
        // line 18
        $context["buyable"] = ((sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "available", [], "any", false, false, false, 18) && (0 >= twig_compare(sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "childCount", [], "any", false, false, false, 18), 0))) && (1 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedMaxPurchase", [], "any", false, false, false, 18), 0)));
        // line 19
        echo "        ";
        $this->displayBlock('page_product_detail_buy_container', $context, $blocks);
        // line 148
        echo "    </form>
";
    }

    // line 9
    public function block_page_product_detail_buy_form_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.line-item.add");
    }

    // line 14
    public function block_page_product_detail_buy_form_inner_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "            ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.line-item.add");
        echo "
        ";
    }

    // line 19
    public function block_page_product_detail_buy_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "            ";
        if (($context["buyable"] ?? null)) {
            // line 21
            echo "                <div class=\"";
            echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
            echo " buy-widget-container\">
                    ";
            // line 22
            $this->displayBlock('page_product_detail_buy_quantity_container', $context, $blocks);
            // line 83
            echo "
                    ";
            // line 84
            $this->displayBlock('page_product_detail_buy_redirect_input', $context, $blocks);
            // line 95
            echo "
                    ";
            // line 96
            $this->displayBlock('page_product_detail_buy_product_buy_info', $context, $blocks);
            // line 113
            echo "
                    ";
            // line 114
            $this->displayBlock('page_product_detail_product_buy_meta', $context, $blocks);
            // line 122
            echo "
                    ";
            // line 123
            $this->displayBlock('page_product_detail_buy_button_container', $context, $blocks);
            // line 145
            echo "                </div>
            ";
        }
        // line 147
        echo "        ";
    }

    // line 22
    public function block_page_product_detail_buy_quantity_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                        <div class=\"col-4\">
                            ";
        // line 24
        $context["selectQuantityThreshold"] = 100;
        // line 25
        echo "                            ";
        $this->displayBlock('page_product_detail_buy_quantity', $context, $blocks);
        // line 81
        echo "                        </div>
                    ";
    }

    // line 25
    public function block_page_product_detail_buy_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                                ";
        if ((1 === twig_compare(((sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedMaxPurchase", [], "any", false, false, false, 26) - sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 26)) / sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "purchaseSteps", [], "any", false, false, false, 26)), ($context["selectQuantityThreshold"] ?? null)))) {
            // line 27
            echo "                                    ";
            $this->displayBlock('page_product_detail_buy_quantity_input_group', $context, $blocks);
            // line 59
            echo "                                ";
        } else {
            // line 60
            echo "                                    ";
            $this->displayBlock('page_product_detail_buy_quantity_select', $context, $blocks);
            // line 79
            echo "                                ";
        }
        // line 80
        echo "                            ";
    }

    // line 27
    public function block_page_product_detail_buy_quantity_input_group($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                                        <div class=\"input-group\">
                                            ";
        // line 29
        $this->displayBlock('page_product_detail_buy_quantity_input', $context, $blocks);
        // line 40
        echo "                                            ";
        $this->displayBlock('page_product_detail_buy_quantity_input_unit', $context, $blocks);
        // line 57
        echo "                                        </div>
                                    ";
    }

    // line 29
    public function block_page_product_detail_buy_quantity_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "                                                <input
                                                    type=\"number\"
                                                    name=\"lineItems[";
        // line 32
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 32), "html", null, true);
        echo "][quantity]\"
                                                    class=\"form-control product-detail-quantity-input\"
                                                    min=\"";
        // line 34
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 34), "html", null, true);
        echo "\"
                                                    max=\"";
        // line 35
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedMaxPurchase", [], "any", false, false, false, 35), "html", null, true);
        echo "\"
                                                    step=\"";
        // line 36
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "purchaseSteps", [], "any", false, false, false, 36), "html", null, true);
        echo "\"
                                                    value=\"";
        // line 37
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 37), "html", null, true);
        echo "\"
                                                />
                                            ";
    }

    // line 40
    public function block_page_product_detail_buy_quantity_input_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                                                ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 41), "packUnit", [], "any", false, false, false, 41)) {
            // line 42
            echo "                                                    ";
            if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
                // line 43
                echo "                                                        <div class=\"input-group-append\">
                                                    ";
            }
            // line 45
            echo "                                                        <span class=\"input-group-text\">
                                                            ";
            // line 46
            if (((1 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 46), 1)) && sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 46), "packUnitPlural", [], "any", false, false, false, 46))) {
                // line 47
                echo "                                                                ";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 47), "packUnitPlural", [], "any", false, false, false, 47), "html", null, true);
                echo "
                                                            ";
            } elseif (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 48
($context["product"] ?? null), "translated", [], "any", false, false, false, 48), "packUnit", [], "any", false, false, false, 48)) {
                // line 49
                echo "                                                                ";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 49), "packUnit", [], "any", false, false, false, 49), "html", null, true);
                echo "
                                                            ";
            }
            // line 51
            echo "                                                        </span>
                                                    ";
            // line 52
            if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
                // line 53
                echo "                                                        </div>
                                                    ";
            }
            // line 55
            echo "                                                ";
        }
        // line 56
        echo "                                            ";
    }

    // line 60
    public function block_page_product_detail_buy_quantity_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "                                        <select name=\"lineItems[";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 61), "html", null, true);
        echo "][quantity]\"
                                                class=\"";
        // line 62
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        echo " product-detail-quantity-select\">
                                            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 63), sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedMaxPurchase", [], "any", false, false, false, 63), sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "purchaseSteps", [], "any", false, false, false, 63)));
        foreach ($context['_seq'] as $context["_key"] => $context["quantity"]) {
            // line 64
            echo "                                                <option value=\"";
            echo sw_escape_filter($this->env, $context["quantity"], "html", null, true);
            echo "\">
                                                    ";
            // line 65
            echo sw_escape_filter($this->env, $context["quantity"], "html", null, true);
            echo "
                                                    ";
            // line 66
            if ((0 === twig_compare($context["quantity"], 1))) {
                // line 67
                echo "                                                        ";
                if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 67), "packUnit", [], "any", false, false, false, 67)) {
                    echo " ";
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 67), "packUnit", [], "any", false, false, false, 67), "html", null, true);
                }
                // line 68
                echo "                                                    ";
            } else {
                // line 69
                echo "                                                        ";
                if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 69), "packUnitPlural", [], "any", false, false, false, 69)) {
                    // line 70
                    echo "                                                            ";
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 70), "packUnitPlural", [], "any", false, false, false, 70), "html", null, true);
                    echo "
                                                        ";
                } elseif (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,                 // line 71
($context["product"] ?? null), "translated", [], "any", false, false, false, 71), "packUnit", [], "any", false, false, false, 71)) {
                    // line 72
                    echo "                                                            ";
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 72), "packUnit", [], "any", false, false, false, 72), "html", null, true);
                    echo "
                                                        ";
                }
                // line 74
                echo "                                                    ";
            }
            // line 75
            echo "                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quantity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                                        </select>
                                    ";
    }

    // line 84
    public function block_page_product_detail_buy_redirect_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "                        ";
        // line 86
        echo "                        <input type=\"hidden\"
                               name=\"redirectTo\"
                               value=\"frontend.detail.page\">

                        <input type=\"hidden\"
                               name=\"redirectParameters\"
                               data-redirect-parameters=\"true\"
                               value='{\"productId\": \"";
        // line 93
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 93), "html", null, true);
        echo "\"}'>
                    ";
    }

    // line 96
    public function block_page_product_detail_buy_product_buy_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "                        <input type=\"hidden\"
                               name=\"lineItems[";
        // line 98
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 98), "html", null, true);
        echo "][id]\"
                               value=\"";
        // line 99
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 99), "html", null, true);
        echo "\">
                        <input type=\"hidden\"
                               name=\"lineItems[";
        // line 101
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 101), "html", null, true);
        echo "][type]\"
                               value=\"product\">
                        <input type=\"hidden\"
                               name=\"lineItems[";
        // line 104
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 104), "html", null, true);
        echo "][referencedId]\"
                               value=\"";
        // line 105
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 105), "html", null, true);
        echo "\">
                        <input type=\"hidden\"
                               name=\"lineItems[";
        // line 107
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 107), "html", null, true);
        echo "][stackable]\"
                               value=\"1\">
                        <input type=\"hidden\"
                               name=\"lineItems[";
        // line 110
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 110), "html", null, true);
        echo "][removable]\"
                               value=\"1\">
                    ";
    }

    // line 114
    public function block_page_product_detail_product_buy_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        echo "                        <input type=\"hidden\"
                               name=\"product-name\"
                               value=\"";
        // line 117
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 117), "name", [], "any", false, false, false, 117), "html", null, true);
        echo "\">
                        <input type=\"hidden\"
                               name=\"brand-name\"
                               value=\"";
        // line 120
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "manufacturer", [], "any", false, false, false, 120), "getName", [], "method", false, false, false, 120), "html", null, true);
        echo "\">
                    ";
    }

    // line 123
    public function block_page_product_detail_buy_button_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        echo "                        <div class=\"col-8\">
                            ";
        // line 125
        $this->displayBlock('page_product_detail_buy_button', $context, $blocks);
        // line 143
        echo "                        </div>
                    ";
    }

    // line 125
    public function block_page_product_detail_buy_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 126
        echo "                                ";
        // line 127
        echo "                                ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 128
            echo "                                    <div class=\"d-grid\">
                                        <button class=\"btn btn-primary btn-buy\"
                                                title=\"";
            // line 130
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.addProduct")), "html", null, true);
            echo "\"
                                                aria-label=\"";
            // line 131
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.addProduct")), "html", null, true);
            echo "\">
                                            ";
            // line 132
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.addProduct"));
            echo "
                                        </button>
                                    </div>
                                ";
        } else {
            // line 136
            echo "                                    <button class=\"btn btn-primary btn-block btn-buy\"
                                            title=\"";
            // line 137
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.addProduct")), "html", null, true);
            echo "\"
                                            aria-label=\"";
            // line 138
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.addProduct")), "html", null, true);
            echo "\">
                                        ";
            // line 139
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.addProduct"));
            echo "
                                    </button>
                                ";
        }
        // line 142
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/buy-widget-form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  504 => 142,  498 => 139,  494 => 138,  490 => 137,  487 => 136,  480 => 132,  476 => 131,  472 => 130,  468 => 128,  465 => 127,  463 => 126,  459 => 125,  454 => 143,  452 => 125,  449 => 124,  445 => 123,  439 => 120,  433 => 117,  429 => 115,  425 => 114,  418 => 110,  412 => 107,  407 => 105,  403 => 104,  397 => 101,  392 => 99,  388 => 98,  385 => 97,  381 => 96,  375 => 93,  366 => 86,  364 => 85,  360 => 84,  355 => 77,  348 => 75,  345 => 74,  339 => 72,  337 => 71,  332 => 70,  329 => 69,  326 => 68,  320 => 67,  318 => 66,  314 => 65,  309 => 64,  305 => 63,  301 => 62,  296 => 61,  292 => 60,  288 => 56,  285 => 55,  281 => 53,  279 => 52,  276 => 51,  270 => 49,  268 => 48,  263 => 47,  261 => 46,  258 => 45,  254 => 43,  251 => 42,  248 => 41,  244 => 40,  237 => 37,  233 => 36,  229 => 35,  225 => 34,  220 => 32,  216 => 30,  212 => 29,  207 => 57,  204 => 40,  202 => 29,  199 => 28,  195 => 27,  191 => 80,  188 => 79,  185 => 60,  182 => 59,  179 => 27,  176 => 26,  172 => 25,  167 => 81,  164 => 25,  162 => 24,  159 => 23,  155 => 22,  151 => 147,  147 => 145,  145 => 123,  142 => 122,  140 => 114,  137 => 113,  135 => 96,  132 => 95,  130 => 84,  127 => 83,  125 => 22,  120 => 21,  117 => 20,  113 => 19,  106 => 15,  102 => 14,  95 => 9,  90 => 148,  87 => 19,  85 => 18,  82 => 17,  80 => 14,  72 => 9,  67 => 6,  64 => 5,  61 => 3,  59 => 2,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/buy-widget-form.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/buy-widget-form.html.twig");
    }
}
