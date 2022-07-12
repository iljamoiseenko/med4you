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

/* @Storefront/storefront/component/checkout/offcanvas-cart-summary.html.twig */
class __TwigTemplate_f7ee42e2b85b33cf70518727eaebb51f7d70335423d5df5262fb699b2d4fcae3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_offcanvas_summary_content' => [$this, 'block_component_offcanvas_summary_content'],
            'component_offcanvas_summary_total' => [$this, 'block_component_offcanvas_summary_total'],
            'component_offcanvas_summary_total_label' => [$this, 'block_component_offcanvas_summary_total_label'],
            'component_offcanvas_summary_total_value' => [$this, 'block_component_offcanvas_summary_total_value'],
            'component_offcanvas_summary_content_info' => [$this, 'block_component_offcanvas_summary_content_info'],
            'component_offcanvas_summary_content_shipping' => [$this, 'block_component_offcanvas_summary_content_shipping'],
            'page_checkout_confirm_shipping_form_csrf' => [$this, 'block_page_checkout_confirm_shipping_form_csrf'],
            'component_offcanvas_summary_content_shipping_select' => [$this, 'block_component_offcanvas_summary_content_shipping_select'],
            'component_offcanvas_summary_tax_info' => [$this, 'block_component_offcanvas_summary_tax_info'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_offcanvas_summary_content', $context, $blocks);
    }

    public function block_component_offcanvas_summary_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"offcanvas-summary\">
        <dl class=\"row offcanvas-summary-list\">
            ";
        // line 4
        $this->displayBlock('component_offcanvas_summary_total', $context, $blocks);
        // line 17
        echo "        </dl>

        ";
        // line 19
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, true, false, 19), "deliveries", [], "any", true, true, false, 19)) {
            // line 20
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 20), "deliveries", [], "any", false, false, false, 20), "elements", [], "any", false, false, false, 20));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["activeShipping"]) {
                // line 21
                echo "                ";
                $this->displayBlock('component_offcanvas_summary_content_info', $context, $blocks);
                // line 37
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activeShipping'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "
            ";
            // line 39
            $context["activeShipping"] = twig_first($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 39), "deliveries", [], "any", false, false, false, 39), "elements", [], "any", false, false, false, 39));
            // line 40
            echo "
            ";
            // line 41
            $this->displayBlock('component_offcanvas_summary_content_shipping', $context, $blocks);
            // line 74
            echo "        ";
        }
        // line 75
        echo "    </div>

    ";
        // line 77
        $this->displayBlock('component_offcanvas_summary_tax_info', $context, $blocks);
    }

    // line 4
    public function block_component_offcanvas_summary_total($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                ";
        $this->displayBlock('component_offcanvas_summary_total_label', $context, $blocks);
        // line 10
        echo "
                ";
        // line 11
        $this->displayBlock('component_offcanvas_summary_total_value', $context, $blocks);
        // line 16
        echo "            ";
    }

    // line 5
    public function block_component_offcanvas_summary_total_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "                    <dt class=\"col-7 summary-label summary-total\">
                        ";
        // line 7
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.subtotalAmount"));
        echo "
                    </dt>
                ";
    }

    // line 11
    public function block_component_offcanvas_summary_total_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "                    <dd class=\"col-5 summary-value summary-total\">
                        <strong>";
        // line 13
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 13), "price", [], "any", false, false, false, 13), "positionPrice", [], "any", false, false, false, 13)), "html", null, true);
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "</strong>
                    </dd>
                ";
    }

    // line 21
    public function block_component_offcanvas_summary_content_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "                    <div class=\"row offcanvas-shipping-info\">
                        <span class=\"col-7 shipping-label shipping-cost\">
                                <strong>";
        // line 24
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.summaryShipping"));
        echo "</strong>
                                    ";
        // line 25
        if (sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "first", [], "any", false, false, false, 25)) {
            // line 26
            echo "                                        <small ";
            if (twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "shippingMethods", [], "any", false, false, false, 26))) {
                echo "class=\"js-toggle-shipping-selection\"";
            }
            echo ">
                                        (";
            // line 27
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["activeShipping"] ?? null), "shippingMethod", [], "any", false, false, false, 27), "translated", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
            echo ")
                                    </small>
                                ";
        }
        // line 30
        echo "                        </span>

                        <span class=\"col-5 pb-2 shipping-value shipping-cost\">
                            <strong>+ ";
        // line 33
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["activeShipping"] ?? null), "shippingCosts", [], "any", false, false, false, 33), "totalPrice", [], "any", false, false, false, 33)), "html", null, true);
        echo "</strong>
                        </span>
                    </div>
                ";
    }

    // line 41
    public function block_component_offcanvas_summary_content_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "                ";
        if (twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "shippingMethods", [], "any", false, false, false, 42))) {
            // line 43
            echo "                    <div class=\"offcanvas-shipping-preference mb-2 mt-2 offcanvas-shipping-preference--hidden\">
                        <form
                            action=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.configure");
            echo "\"
                            name=\"confirmShippingForm\"
                            data-form-csrf-handler=\"true\"
                            method=\"post\">
                            ";
            // line 49
            $this->displayBlock('page_checkout_confirm_shipping_form_csrf', $context, $blocks);
            // line 52
            echo "
                            <input type=\"hidden\" name=\"forwardTo\" value=\"frontend.cart.offcanvas\">

                            ";
            // line 55
            $this->displayBlock('component_offcanvas_summary_content_shipping_select', $context, $blocks);
            // line 70
            echo "                        </form>
                    </div>
                ";
        }
        // line 73
        echo "            ";
    }

    // line 49
    public function block_page_checkout_confirm_shipping_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.configure");
        echo "
                            ";
    }

    // line 55
    public function block_component_offcanvas_summary_content_shipping_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "
                                <select class=\"";
        // line 57
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        echo " mt-2 col-12\" name=\"shippingMethodId\">
                                    <option disabled>";
        // line 58
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmChangeShipping"));
        echo "</option>

                                    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "shippingMethods", [], "any", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["shippingMethod"]) {
            // line 61
            echo "                                        <option
                                            value=\"";
            // line 62
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["shippingMethod"], "id", [], "any", false, false, false, 62), "html", null, true);
            echo "\"
                                            ";
            // line 63
            if ((sw_get_attribute($this->env, $this->source, $context["shippingMethod"], "id", [], "any", false, false, false, 63) === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["activeShipping"] ?? null), "shippingMethod", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63))) {
                echo "selected=\"selected\"";
            }
            echo " >
                                            ";
            // line 64
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["shippingMethod"], "translated", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64), "html", null, true);
            echo "
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shippingMethod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                                </select>

                            ";
    }

    // line 77
    public function block_component_offcanvas_summary_tax_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "        <p class=\"offcanvas-cart-tax\">
            <small>
                ";
        // line 80
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "
                ";
        // line 81
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 81), "price", [], "any", false, false, false, 81), "taxStatus", [], "any", false, false, false, 81), "gross"))) {
            // line 82
            echo "                    ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.grossTaxInformation"));
            echo "
                ";
        } else {
            // line 84
            echo "                    ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.netTaxInformation"));
            echo "
                ";
        }
        // line 86
        echo "            </small>
        </p>
    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/checkout/offcanvas-cart-summary.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  327 => 86,  321 => 84,  315 => 82,  313 => 81,  309 => 80,  305 => 78,  301 => 77,  295 => 67,  286 => 64,  280 => 63,  276 => 62,  273 => 61,  269 => 60,  264 => 58,  260 => 57,  257 => 56,  253 => 55,  246 => 50,  242 => 49,  238 => 73,  233 => 70,  231 => 55,  226 => 52,  224 => 49,  217 => 45,  213 => 43,  210 => 42,  206 => 41,  198 => 33,  193 => 30,  187 => 27,  180 => 26,  178 => 25,  174 => 24,  170 => 22,  166 => 21,  158 => 13,  155 => 12,  151 => 11,  144 => 7,  141 => 6,  137 => 5,  133 => 16,  131 => 11,  128 => 10,  125 => 5,  121 => 4,  117 => 77,  113 => 75,  110 => 74,  108 => 41,  105 => 40,  103 => 39,  100 => 38,  86 => 37,  83 => 21,  65 => 20,  63 => 19,  59 => 17,  57 => 4,  53 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/checkout/offcanvas-cart-summary.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/checkout/offcanvas-cart-summary.html.twig");
    }
}
