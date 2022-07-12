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

/* 15345df0a7b8b724a5d8dbe56755435f */
class __TwigTemplate_9dfb921fd27936a1e0b432b966149d95002be2699835d59086fd1633b034df44 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["currencyIsoCode"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 1, $this->source); })()), "currency", [], "any", false, false, false, 1), "isoCode", [], "any", false, false, false, 1);
        // line 2
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 2, $this->source); })()), "orderCustomer", [], "any", false, false, false, 2), "salutation", [], "any", false, false, false, 2)) {
            echo sw_escape_filter($this->env, (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 2, $this->source); })()), "orderCustomer", [], "any", false, false, false, 2), "salutation", [], "any", false, false, false, 2), "translated", [], "any", false, false, false, 2), "letterName", [], "any", false, false, false, 2) . " "), "html", null, true);
        }
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 2, $this->source); })()), "orderCustomer", [], "any", false, false, false, 2), "firstName", [], "any", false, false, false, 2), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 2, $this->source); })()), "orderCustomer", [], "any", false, false, false, 2), "lastName", [], "any", false, false, false, 2), "html", null, true);
        echo ",

We have received your order from ";
        // line 4
        echo sw_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 4, $this->source); })()), "orderDateTime", [], "any", false, false, false, 4), "medium", "short", "", null, "gregorian", "en-GB"), "html", null, true);
        echo ".

Order number: ";
        // line 6
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 6, $this->source); })()), "orderNumber", [], "any", false, false, false, 6), "html", null, true);
        echo "

As soon as your payment has been made, you will receive a separate notification and your order will be processed.

You may check the current status of your order with this link: ";
        // line 10
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\RawUrlFunctionExtension']->rawUrl("frontend.account.order.single.page", ["deepLinkCode" => sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 10, $this->source); })()), "deepLinkCode", [], "any", false, false, false, 10)], sw_get_attribute($this->env, $this->source, twig_first($this->env, sw_get_attribute($this->env, $this->source, (isset($context["salesChannel"]) || array_key_exists("salesChannel", $context) ? $context["salesChannel"] : (function () { throw new RuntimeError('Variable "salesChannel" does not exist.', 10, $this->source); })()), "domains", [], "any", false, false, false, 10)), "url", [], "any", false, false, false, 10)), "html", null, true);
        echo "
You may use this link to edit your order, change the payment method or make additional payments.

Information on your order:

Pos.   Prod. No.\t\t\tProduct image(Alt text)\t\t\tDescription\t\t\tQuantities\t\t\tPrice\t\t\tTotal

";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 17, $this->source); })()), "lineItems", [], "any", false, false, false, 17));
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
        foreach ($context['_seq'] as $context["_key"] => $context["lineItem"]) {
            // line 18
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 18), "html", null, true);
            echo "      ";
            if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["lineItem"], "payload", [], "any", false, true, false, 18), "productNumber", [], "any", true, true, false, 18)) {
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["lineItem"], "payload", [], "any", false, false, false, 18), "productNumber", [], "any", false, false, false, 18)), "wordwrap", [0 => 80], "method", false, false, false, 18), "html", null, true);
            }
            echo "        ";
            if ((sw_get_attribute($this->env, $this->source, ($context["nestedItem"] ?? null), "cover", [], "any", true, true, false, 18) &&  !(null === sw_get_attribute($this->env, $this->source, (isset($context["nestedItem"]) || array_key_exists("nestedItem", $context) ? $context["nestedItem"] : (function () { throw new RuntimeError('Variable "nestedItem" does not exist.', 18, $this->source); })()), "cover", [], "any", false, false, false, 18)))) {
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["lineItem"], "cover", [], "any", false, false, false, 18), "alt", [], "any", false, false, false, 18), "html", null, true);
            }
            echo "        ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(sw_get_attribute($this->env, $this->source, $context["lineItem"], "label", [], "any", false, false, false, 18)), "wordwrap", [0 => 80], "method", false, false, false, 18), "html", null, true);
            if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["lineItem"], "payload", [], "any", false, true, false, 18), "options", [], "any", true, true, false, 18) && (0 <= twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["lineItem"], "payload", [], "any", false, false, false, 18), "options", [], "any", false, false, false, 18)), 1)))) {
                echo ", ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["lineItem"], "payload", [], "any", false, false, false, 18), "options", [], "any", false, false, false, 18));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["option"], "group", [], "any", false, false, false, 18), "html", null, true);
                    echo ": ";
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["option"], "option", [], "any", false, false, false, 18), "html", null, true);
                    if ((0 !== twig_compare(twig_last($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["lineItem"], "payload", [], "any", false, false, false, 18), "options", [], "any", false, false, false, 18)), $context["option"]))) {
                        echo " | ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["lineItem"], "payload", [], "any", false, true, false, 18), "features", [], "any", true, true, false, 18) && (0 <= twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["lineItem"], "payload", [], "any", false, false, false, 18), "features", [], "any", false, false, false, 18)), 1)))) {
                $context["referencePriceFeatures"] = twig_array_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["lineItem"], "payload", [], "any", false, false, false, 18), "features", [], "any", false, false, false, 18), function ($__feature__) use ($context, $macros) { $context["feature"] = $__feature__; return (0 === twig_compare(sw_get_attribute($this->env, $this->source, (isset($context["feature"]) || array_key_exists("feature", $context) ? $context["feature"] : (function () { throw new RuntimeError('Variable "feature" does not exist.', 18, $this->source); })()), "type", [], "any", false, false, false, 18), "referencePrice")); });
                if ((0 <= twig_compare(twig_length_filter($this->env, (isset($context["referencePriceFeatures"]) || array_key_exists("referencePriceFeatures", $context) ? $context["referencePriceFeatures"] : (function () { throw new RuntimeError('Variable "referencePriceFeatures" does not exist.', 18, $this->source); })())), 1))) {
                    $context["referencePriceFeature"] = twig_first($this->env, (isset($context["referencePriceFeatures"]) || array_key_exists("referencePriceFeatures", $context) ? $context["referencePriceFeatures"] : (function () { throw new RuntimeError('Variable "referencePriceFeatures" does not exist.', 18, $this->source); })()));
                    echo ", ";
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["referencePriceFeature"]) || array_key_exists("referencePriceFeature", $context) ? $context["referencePriceFeature"] : (function () { throw new RuntimeError('Variable "referencePriceFeature" does not exist.', 18, $this->source); })()), "value", [], "any", false, false, false, 18), "purchaseUnit", [], "any", false, false, false, 18), "html", null, true);
                    echo " ";
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["referencePriceFeature"]) || array_key_exists("referencePriceFeature", $context) ? $context["referencePriceFeature"] : (function () { throw new RuntimeError('Variable "referencePriceFeature" does not exist.', 18, $this->source); })()), "value", [], "any", false, false, false, 18), "unitName", [], "any", false, false, false, 18), "html", null, true);
                    echo "(";
                    echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["referencePriceFeature"]) || array_key_exists("referencePriceFeature", $context) ? $context["referencePriceFeature"] : (function () { throw new RuntimeError('Variable "referencePriceFeature" does not exist.', 18, $this->source); })()), "value", [], "any", false, false, false, 18), "price", [], "any", false, false, false, 18), (isset($context["currencyIsoCode"]) || array_key_exists("currencyIsoCode", $context) ? $context["currencyIsoCode"] : (function () { throw new RuntimeError('Variable "currencyIsoCode" does not exist.', 18, $this->source); })())), "html", null, true);
                    echo "* / ";
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["referencePriceFeature"]) || array_key_exists("referencePriceFeature", $context) ? $context["referencePriceFeature"] : (function () { throw new RuntimeError('Variable "referencePriceFeature" does not exist.', 18, $this->source); })()), "value", [], "any", false, false, false, 18), "referenceUnit", [], "any", false, false, false, 18), "html", null, true);
                    echo " ";
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["referencePriceFeature"]) || array_key_exists("referencePriceFeature", $context) ? $context["referencePriceFeature"] : (function () { throw new RuntimeError('Variable "referencePriceFeature" does not exist.', 18, $this->source); })()), "value", [], "any", false, false, false, 18), "unitName", [], "any", false, false, false, 18), "html", null, true);
                    echo ")";
                }
            }
            // line 19
            echo "    ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["lineItem"], "quantity", [], "any", false, false, false, 19), "html", null, true);
            echo "\t\t\t";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, $context["lineItem"], "unitPrice", [], "any", false, false, false, 19), (isset($context["currencyIsoCode"]) || array_key_exists("currencyIsoCode", $context) ? $context["currencyIsoCode"] : (function () { throw new RuntimeError('Variable "currencyIsoCode" does not exist.', 19, $this->source); })())), "html", null, true);
            echo "\t\t\t";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, $context["lineItem"], "totalPrice", [], "any", false, false, false, 19), (isset($context["currencyIsoCode"]) || array_key_exists("currencyIsoCode", $context) ? $context["currencyIsoCode"] : (function () { throw new RuntimeError('Variable "currencyIsoCode" does not exist.', 19, $this->source); })())), "html", null, true);
            echo "
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lineItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
";
        // line 22
        $context["delivery"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 22, $this->source); })()), "deliveries", [], "any", false, false, false, 22), "first", [], "any", false, false, false, 22);
        // line 23
        echo "
";
        // line 24
        $context["displayRounded"] = ((0 !== twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 24, $this->source); })()), "totalRounding", [], "any", false, false, false, 24), "interval", [], "any", false, false, false, 24), 0.01)) || (0 !== twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 24, $this->source); })()), "totalRounding", [], "any", false, false, false, 24), "decimals", [], "any", false, false, false, 24), sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 24, $this->source); })()), "itemRounding", [], "any", false, false, false, 24), "decimals", [], "any", false, false, false, 24))));
        // line 25
        $context["decimals"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 25, $this->source); })()), "totalRounding", [], "any", false, false, false, 25), "decimals", [], "any", false, false, false, 25);
        // line 26
        $context["total"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 26, $this->source); })()), "price", [], "any", false, false, false, 26), "totalPrice", [], "any", false, false, false, 26);
        // line 27
        if ((isset($context["displayRounded"]) || array_key_exists("displayRounded", $context) ? $context["displayRounded"] : (function () { throw new RuntimeError('Variable "displayRounded" does not exist.', 27, $this->source); })())) {
            // line 28
            echo "    ";
            $context["total"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 28, $this->source); })()), "price", [], "any", false, false, false, 28), "rawTotal", [], "any", false, false, false, 28);
            // line 29
            echo "    ";
            $context["decimals"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 29, $this->source); })()), "itemRounding", [], "any", false, false, false, 29), "decimals", [], "any", false, false, false, 29);
        }
        // line 31
        echo "
";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 32, $this->source); })()), "deliveries", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["shippingCost"]) {
            // line 33
            echo "    Shipping costs: ";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["shippingCost"], "shippingCosts", [], "any", false, false, false, 33), "totalPrice", [], "any", false, false, false, 33), (isset($context["currencyIsoCode"]) || array_key_exists("currencyIsoCode", $context) ? $context["currencyIsoCode"] : (function () { throw new RuntimeError('Variable "currencyIsoCode" does not exist.', 33, $this->source); })())), "html", null, true);
            echo "<br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shippingCost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "Net total: ";
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 35, $this->source); })()), "amountNet", [], "any", false, false, false, 35), (isset($context["currencyIsoCode"]) || array_key_exists("currencyIsoCode", $context) ? $context["currencyIsoCode"] : (function () { throw new RuntimeError('Variable "currencyIsoCode" does not exist.', 35, $this->source); })())), "html", null, true);
        echo "
";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 36, $this->source); })()), "price", [], "any", false, false, false, 36), "calculatedTaxes", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["calculatedTax"]) {
            // line 37
            if ((sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 37, $this->source); })()), "taxStatus", [], "any", false, false, false, 37) === "net")) {
                echo "plus";
            } else {
                echo "including";
            }
            echo " ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["calculatedTax"], "taxRate", [], "any", false, false, false, 37), "html", null, true);
            echo "% VAT. ";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, $context["calculatedTax"], "tax", [], "any", false, false, false, 37), (isset($context["currencyIsoCode"]) || array_key_exists("currencyIsoCode", $context) ? $context["currencyIsoCode"] : (function () { throw new RuntimeError('Variable "currencyIsoCode" does not exist.', 37, $this->source); })())), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calculatedTax'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "Total gross: ";
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 39, $this->source); })()), (isset($context["currencyIsoCode"]) || array_key_exists("currencyIsoCode", $context) ? $context["currencyIsoCode"] : (function () { throw new RuntimeError('Variable "currencyIsoCode" does not exist.', 39, $this->source); })()), null, (isset($context["decimals"]) || array_key_exists("decimals", $context) ? $context["decimals"] : (function () { throw new RuntimeError('Variable "decimals" does not exist.', 39, $this->source); })())), "html", null, true);
        echo "
";
        // line 40
        if ((isset($context["displayRounded"]) || array_key_exists("displayRounded", $context) ? $context["displayRounded"] : (function () { throw new RuntimeError('Variable "displayRounded" does not exist.', 40, $this->source); })())) {
            // line 41
            echo "Rounded total gross: ";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 41, $this->source); })()), "price", [], "any", false, false, false, 41), "totalPrice", [], "any", false, false, false, 41), (isset($context["currencyIsoCode"]) || array_key_exists("currencyIsoCode", $context) ? $context["currencyIsoCode"] : (function () { throw new RuntimeError('Variable "currencyIsoCode" does not exist.', 41, $this->source); })()), null, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 41, $this->source); })()), "totalRounding", [], "any", false, false, false, 41), "decimals", [], "any", false, false, false, 41)), "html", null, true);
            echo "
";
        }
        // line 43
        echo "
Selected shipping type: ";
        // line 44
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 44, $this->source); })()), "shippingMethod", [], "any", false, false, false, 44), "translated", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
        echo "
";
        // line 45
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 45, $this->source); })()), "shippingMethod", [], "any", false, false, false, 45), "translated", [], "any", false, false, false, 45), "description", [], "any", false, false, false, 45), "html", null, true);
        echo "

";
        // line 47
        $context["billingAddress"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 47, $this->source); })()), "addresses", [], "any", false, false, false, 47), "get", [0 => sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 47, $this->source); })()), "billingAddressId", [], "any", false, false, false, 47)], "method", false, false, false, 47);
        // line 48
        echo "Billing address:
";
        // line 49
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, (isset($context["billingAddress"]) || array_key_exists("billingAddress", $context) ? $context["billingAddress"] : (function () { throw new RuntimeError('Variable "billingAddress" does not exist.', 49, $this->source); })()), "company", [], "any", false, false, false, 49), "html", null, true);
        echo "
";
        // line 50
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, (isset($context["billingAddress"]) || array_key_exists("billingAddress", $context) ? $context["billingAddress"] : (function () { throw new RuntimeError('Variable "billingAddress" does not exist.', 50, $this->source); })()), "firstName", [], "any", false, false, false, 50), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, (isset($context["billingAddress"]) || array_key_exists("billingAddress", $context) ? $context["billingAddress"] : (function () { throw new RuntimeError('Variable "billingAddress" does not exist.', 50, $this->source); })()), "lastName", [], "any", false, false, false, 50), "html", null, true);
        echo "
";
        // line 51
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, (isset($context["billingAddress"]) || array_key_exists("billingAddress", $context) ? $context["billingAddress"] : (function () { throw new RuntimeError('Variable "billingAddress" does not exist.', 51, $this->source); })()), "street", [], "any", false, false, false, 51), "html", null, true);
        echo "
";
        // line 52
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, (isset($context["billingAddress"]) || array_key_exists("billingAddress", $context) ? $context["billingAddress"] : (function () { throw new RuntimeError('Variable "billingAddress" does not exist.', 52, $this->source); })()), "zipcode", [], "any", false, false, false, 52), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, (isset($context["billingAddress"]) || array_key_exists("billingAddress", $context) ? $context["billingAddress"] : (function () { throw new RuntimeError('Variable "billingAddress" does not exist.', 52, $this->source); })()), "city", [], "any", false, false, false, 52), "html", null, true);
        echo "
";
        // line 53
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["billingAddress"]) || array_key_exists("billingAddress", $context) ? $context["billingAddress"] : (function () { throw new RuntimeError('Variable "billingAddress" does not exist.', 53, $this->source); })()), "country", [], "any", false, false, false, 53), "translated", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53), "html", null, true);
        echo "

Shipping address:
";
        // line 56
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 56, $this->source); })()), "shippingOrderAddress", [], "any", false, false, false, 56), "company", [], "any", false, false, false, 56), "html", null, true);
        echo "
";
        // line 57
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 57, $this->source); })()), "shippingOrderAddress", [], "any", false, false, false, 57), "firstName", [], "any", false, false, false, 57), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 57, $this->source); })()), "shippingOrderAddress", [], "any", false, false, false, 57), "lastName", [], "any", false, false, false, 57), "html", null, true);
        echo "
";
        // line 58
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 58, $this->source); })()), "shippingOrderAddress", [], "any", false, false, false, 58), "street", [], "any", false, false, false, 58), "html", null, true);
        echo "
";
        // line 59
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 59, $this->source); })()), "shippingOrderAddress", [], "any", false, false, false, 59), "zipcode", [], "any", false, false, false, 59), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 59, $this->source); })()), "shippingOrderAddress", [], "any", false, false, false, 59), "city", [], "any", false, false, false, 59), "html", null, true);
        echo "
";
        // line 60
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 60, $this->source); })()), "shippingOrderAddress", [], "any", false, false, false, 60), "country", [], "any", false, false, false, 60), "translated", [], "any", false, false, false, 60), "name", [], "any", false, false, false, 60), "html", null, true);
        echo "

";
        // line 62
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 62, $this->source); })()), "orderCustomer", [], "any", false, false, false, 62), "vatIds", [], "any", false, false, false, 62)) {
            // line 63
            echo "Your VAT-ID: ";
            echo sw_escape_filter($this->env, twig_first($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 63, $this->source); })()), "orderCustomer", [], "any", false, false, false, 63), "vatIds", [], "any", false, false, false, 63)), "html", null, true);
            echo "
In case of a successful order and if you are based in one of the EU countries, you will receive your goods exempt from turnover tax.
";
        }
        // line 66
        echo "
You can check the current status of your order on our website under \"My account\" - \"My orders\" anytime: ";
        // line 67
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\RawUrlFunctionExtension']->rawUrl("frontend.account.order.single.page", ["deepLinkCode" => sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 67, $this->source); })()), "deepLinkCode", [], "any", false, false, false, 67)], sw_get_attribute($this->env, $this->source, twig_first($this->env, sw_get_attribute($this->env, $this->source, (isset($context["salesChannel"]) || array_key_exists("salesChannel", $context) ? $context["salesChannel"] : (function () { throw new RuntimeError('Variable "salesChannel" does not exist.', 67, $this->source); })()), "domains", [], "any", false, false, false, 67)), "url", [], "any", false, false, false, 67)), "html", null, true);
        echo "
If you have any questions, do not hesitate to contact us.

However, in case you have purchased without a registration or a customer account, you do not have this option.
";
    }

    public function getTemplateName()
    {
        return "15345df0a7b8b724a5d8dbe56755435f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 67,  308 => 66,  301 => 63,  299 => 62,  294 => 60,  288 => 59,  284 => 58,  278 => 57,  274 => 56,  268 => 53,  262 => 52,  258 => 51,  252 => 50,  248 => 49,  245 => 48,  243 => 47,  238 => 45,  234 => 44,  231 => 43,  225 => 41,  223 => 40,  218 => 39,  202 => 37,  198 => 36,  193 => 35,  184 => 33,  180 => 32,  177 => 31,  173 => 29,  170 => 28,  168 => 27,  166 => 26,  164 => 25,  162 => 24,  159 => 23,  157 => 22,  154 => 21,  133 => 19,  88 => 18,  71 => 17,  61 => 10,  54 => 6,  49 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "15345df0a7b8b724a5d8dbe56755435f", "");
    }
}
