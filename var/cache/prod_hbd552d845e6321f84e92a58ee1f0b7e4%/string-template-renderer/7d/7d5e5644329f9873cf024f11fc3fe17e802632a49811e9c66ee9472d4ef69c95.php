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

/* 2865e4b12903a25c8c208f9a55b31411 */
class __TwigTemplate_e43b21d9f8f7d5f26772883d486fee19d7559dc68b42857d5da1af399aedd79d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'lineItem' => [$this, 'block_lineItem'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div style=\"font-family:arial; font-size:12px;\">

";
        // line 3
        $context["currencyIsoCode"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 3, $this->source); })()), "currency", [], "any", false, false, false, 3), "isoCode", [], "any", false, false, false, 3);
        // line 4
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 4, $this->source); })()), "orderCustomer", [], "any", false, false, false, 4), "salutation", [], "any", false, false, false, 4)) {
            echo sw_escape_filter($this->env, (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 4, $this->source); })()), "orderCustomer", [], "any", false, false, false, 4), "salutation", [], "any", false, false, false, 4), "translated", [], "any", false, false, false, 4), "letterName", [], "any", false, false, false, 4) . " "), "html", null, true);
        }
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 4, $this->source); })()), "orderCustomer", [], "any", false, false, false, 4), "firstName", [], "any", false, false, false, 4), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 4, $this->source); })()), "orderCustomer", [], "any", false, false, false, 4), "lastName", [], "any", false, false, false, 4), "html", null, true);
        echo ",<br>
<br>
We have received your order from ";
        // line 6
        echo sw_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 6, $this->source); })()), "orderDateTime", [], "any", false, false, false, 6), "medium", "short", "", null, "gregorian", "en-GB"), "html", null, true);
        echo ".<br>
<br>
Order number: ";
        // line 8
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 8, $this->source); })()), "orderNumber", [], "any", false, false, false, 8), "html", null, true);
        echo "<br>
<br>
As soon as your payment has been made, you will receive a separate notification and your order will be processed.<br>
<br>
You may check the current status of your order with this link: ";
        // line 12
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\RawUrlFunctionExtension']->rawUrl("frontend.account.order.single.page", ["deepLinkCode" => sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()), "deepLinkCode", [], "any", false, false, false, 12)], sw_get_attribute($this->env, $this->source, twig_first($this->env, sw_get_attribute($this->env, $this->source, (isset($context["salesChannel"]) || array_key_exists("salesChannel", $context) ? $context["salesChannel"] : (function () { throw new RuntimeError('Variable "salesChannel" does not exist.', 12, $this->source); })()), "domains", [], "any", false, false, false, 12)), "url", [], "any", false, false, false, 12)), "html", null, true);
        echo "<br>
You may use this link to edit your order, change the payment method or make additional payments.<br>
<br>
<strong>Information on your order:</strong><br>
<br>

<table border=\"0\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px;\">
    <tr>
        <td bgcolor=\"#F7F7F2\" style=\"border-bottom:1px solid #cccccc;\"><strong>Prod. no.</strong></td>
        <td bgcolor=\"#F7F7F2\" style=\"border-bottom:1px solid #cccccc;\"><strong>Product image</strong></td>
        <td bgcolor=\"#F7F7F2\" style=\"border-bottom:1px solid #cccccc;\"><strong>Description</strong></td>
        <td bgcolor=\"#F7F7F2\" style=\"border-bottom:1px solid #cccccc;\"><strong>Quantities</strong></td>
        <td bgcolor=\"#F7F7F2\" style=\"border-bottom:1px solid #cccccc;\"><strong>Price</strong></td>
        <td bgcolor=\"#F7F7F2\" style=\"border-bottom:1px solid #cccccc;\"><strong>Total</strong></td>
    </tr>

    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 28, $this->source); })()), "nestedLineItems", [], "any", false, false, false, 28));
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
            // line 29
            echo "        ";
            $context["nestingLevel"] = 0;
            // line 30
            echo "        ";
            $context["nestedItem"] = $context["lineItem"];
            // line 31
            echo "        ";
            $this->displayBlock('lineItem', $context, $blocks);
            // line 89
            echo "    ";
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
        // line 90
        echo "</table>

";
        // line 92
        $context["delivery"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 92, $this->source); })()), "deliveries", [], "any", false, false, false, 92), "first", [], "any", false, false, false, 92);
        // line 93
        echo "
";
        // line 94
        $context["displayRounded"] = ((0 !== twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 94, $this->source); })()), "totalRounding", [], "any", false, false, false, 94), "interval", [], "any", false, false, false, 94), 0.01)) || (0 !== twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 94, $this->source); })()), "totalRounding", [], "any", false, false, false, 94), "decimals", [], "any", false, false, false, 94), sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 94, $this->source); })()), "itemRounding", [], "any", false, false, false, 94), "decimals", [], "any", false, false, false, 94))));
        // line 95
        $context["decimals"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 95, $this->source); })()), "totalRounding", [], "any", false, false, false, 95), "decimals", [], "any", false, false, false, 95);
        // line 96
        $context["total"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 96, $this->source); })()), "price", [], "any", false, false, false, 96), "totalPrice", [], "any", false, false, false, 96);
        // line 97
        if ((isset($context["displayRounded"]) || array_key_exists("displayRounded", $context) ? $context["displayRounded"] : (function () { throw new RuntimeError('Variable "displayRounded" does not exist.', 97, $this->source); })())) {
            // line 98
            echo "    ";
            $context["total"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 98, $this->source); })()), "price", [], "any", false, false, false, 98), "rawTotal", [], "any", false, false, false, 98);
            // line 99
            echo "    ";
            $context["decimals"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 99, $this->source); })()), "itemRounding", [], "any", false, false, false, 99), "decimals", [], "any", false, false, false, 99);
        }
        // line 101
        echo "<p>
    <br>
    <br>
    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 104, $this->source); })()), "deliveries", [], "any", false, false, false, 104));
        foreach ($context['_seq'] as $context["_key"] => $context["shippingCost"]) {
            // line 105
            echo "        Shipping costs: ";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["shippingCost"], "shippingCosts", [], "any", false, false, false, 105), "totalPrice", [], "any", false, false, false, 105), (isset($context["currencyIsoCode"]) || array_key_exists("currencyIsoCode", $context) ? $context["currencyIsoCode"] : (function () { throw new RuntimeError('Variable "currencyIsoCode" does not exist.', 105, $this->source); })())), "html", null, true);
            echo "<br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shippingCost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "
    Net total: ";
        // line 108
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 108, $this->source); })()), "amountNet", [], "any", false, false, false, 108), (isset($context["currencyIsoCode"]) || array_key_exists("currencyIsoCode", $context) ? $context["currencyIsoCode"] : (function () { throw new RuntimeError('Variable "currencyIsoCode" does not exist.', 108, $this->source); })())), "html", null, true);
        echo "<br>
    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 109, $this->source); })()), "price", [], "any", false, false, false, 109), "calculatedTaxes", [], "any", false, false, false, 109));
        foreach ($context['_seq'] as $context["_key"] => $context["calculatedTax"]) {
            // line 110
            echo "        ";
            if ((sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 110, $this->source); })()), "taxStatus", [], "any", false, false, false, 110) === "net")) {
                echo "plus";
            } else {
                echo "including";
            }
            echo " ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["calculatedTax"], "taxRate", [], "any", false, false, false, 110), "html", null, true);
            echo "% VAT. ";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, $context["calculatedTax"], "tax", [], "any", false, false, false, 110), (isset($context["currencyIsoCode"]) || array_key_exists("currencyIsoCode", $context) ? $context["currencyIsoCode"] : (function () { throw new RuntimeError('Variable "currencyIsoCode" does not exist.', 110, $this->source); })())), "html", null, true);
            echo "<br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calculatedTax'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "    ";
        if ( !(isset($context["displayRounded"]) || array_key_exists("displayRounded", $context) ? $context["displayRounded"] : (function () { throw new RuntimeError('Variable "displayRounded" does not exist.', 112, $this->source); })())) {
            echo "<strong>";
        }
        echo "Total gross: ";
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 112, $this->source); })()), (isset($context["currencyIsoCode"]) || array_key_exists("currencyIsoCode", $context) ? $context["currencyIsoCode"] : (function () { throw new RuntimeError('Variable "currencyIsoCode" does not exist.', 112, $this->source); })()), null, (isset($context["decimals"]) || array_key_exists("decimals", $context) ? $context["decimals"] : (function () { throw new RuntimeError('Variable "decimals" does not exist.', 112, $this->source); })())), "html", null, true);
        if ( !(isset($context["displayRounded"]) || array_key_exists("displayRounded", $context) ? $context["displayRounded"] : (function () { throw new RuntimeError('Variable "displayRounded" does not exist.', 112, $this->source); })())) {
            echo "</strong>";
        }
        echo "<br>
    ";
        // line 113
        if ((isset($context["displayRounded"]) || array_key_exists("displayRounded", $context) ? $context["displayRounded"] : (function () { throw new RuntimeError('Variable "displayRounded" does not exist.', 113, $this->source); })())) {
            // line 114
            echo "        <strong>Rounded total gross: ";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 114, $this->source); })()), "price", [], "any", false, false, false, 114), "totalPrice", [], "any", false, false, false, 114), (isset($context["currencyIsoCode"]) || array_key_exists("currencyIsoCode", $context) ? $context["currencyIsoCode"] : (function () { throw new RuntimeError('Variable "currencyIsoCode" does not exist.', 114, $this->source); })()), null, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 114, $this->source); })()), "totalRounding", [], "any", false, false, false, 114), "decimals", [], "any", false, false, false, 114)), "html", null, true);
            echo "</strong><br>
    ";
        }
        // line 116
        echo "    <br>

    <strong>Selected shipping type:</strong> ";
        // line 118
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 118, $this->source); })()), "shippingMethod", [], "any", false, false, false, 118), "translated", [], "any", false, false, false, 118), "name", [], "any", false, false, false, 118), "html", null, true);
        echo "<br>
    ";
        // line 119
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 119, $this->source); })()), "shippingMethod", [], "any", false, false, false, 119), "translated", [], "any", false, false, false, 119), "description", [], "any", false, false, false, 119), "html", null, true);
        echo "<br>
    <br>

    ";
        // line 122
        $context["billingAddress"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 122, $this->source); })()), "addresses", [], "any", false, false, false, 122), "get", [0 => sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 122, $this->source); })()), "billingAddressId", [], "any", false, false, false, 122)], "method", false, false, false, 122);
        // line 123
        echo "    <strong>Billing address:</strong><br>
    ";
        // line 124
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, (isset($context["billingAddress"]) || array_key_exists("billingAddress", $context) ? $context["billingAddress"] : (function () { throw new RuntimeError('Variable "billingAddress" does not exist.', 124, $this->source); })()), "company", [], "any", false, false, false, 124), "html", null, true);
        echo "<br>
    ";
        // line 125
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, (isset($context["billingAddress"]) || array_key_exists("billingAddress", $context) ? $context["billingAddress"] : (function () { throw new RuntimeError('Variable "billingAddress" does not exist.', 125, $this->source); })()), "firstName", [], "any", false, false, false, 125), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, (isset($context["billingAddress"]) || array_key_exists("billingAddress", $context) ? $context["billingAddress"] : (function () { throw new RuntimeError('Variable "billingAddress" does not exist.', 125, $this->source); })()), "lastName", [], "any", false, false, false, 125), "html", null, true);
        echo "<br>
    ";
        // line 126
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, (isset($context["billingAddress"]) || array_key_exists("billingAddress", $context) ? $context["billingAddress"] : (function () { throw new RuntimeError('Variable "billingAddress" does not exist.', 126, $this->source); })()), "street", [], "any", false, false, false, 126), "html", null, true);
        echo " <br>
    ";
        // line 127
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, (isset($context["billingAddress"]) || array_key_exists("billingAddress", $context) ? $context["billingAddress"] : (function () { throw new RuntimeError('Variable "billingAddress" does not exist.', 127, $this->source); })()), "zipcode", [], "any", false, false, false, 127), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, (isset($context["billingAddress"]) || array_key_exists("billingAddress", $context) ? $context["billingAddress"] : (function () { throw new RuntimeError('Variable "billingAddress" does not exist.', 127, $this->source); })()), "city", [], "any", false, false, false, 127), "html", null, true);
        echo "<br>
    ";
        // line 128
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["billingAddress"]) || array_key_exists("billingAddress", $context) ? $context["billingAddress"] : (function () { throw new RuntimeError('Variable "billingAddress" does not exist.', 128, $this->source); })()), "country", [], "any", false, false, false, 128), "translated", [], "any", false, false, false, 128), "name", [], "any", false, false, false, 128), "html", null, true);
        echo "<br>
    <br>

    <strong>Shipping address:</strong><br>
    ";
        // line 132
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 132, $this->source); })()), "shippingOrderAddress", [], "any", false, false, false, 132), "company", [], "any", false, false, false, 132), "html", null, true);
        echo "<br>
    ";
        // line 133
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 133, $this->source); })()), "shippingOrderAddress", [], "any", false, false, false, 133), "firstName", [], "any", false, false, false, 133), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 133, $this->source); })()), "shippingOrderAddress", [], "any", false, false, false, 133), "lastName", [], "any", false, false, false, 133), "html", null, true);
        echo "<br>
    ";
        // line 134
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 134, $this->source); })()), "shippingOrderAddress", [], "any", false, false, false, 134), "street", [], "any", false, false, false, 134), "html", null, true);
        echo " <br>
    ";
        // line 135
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 135, $this->source); })()), "shippingOrderAddress", [], "any", false, false, false, 135), "zipcode", [], "any", false, false, false, 135), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 135, $this->source); })()), "shippingOrderAddress", [], "any", false, false, false, 135), "city", [], "any", false, false, false, 135), "html", null, true);
        echo "<br>
    ";
        // line 136
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 136, $this->source); })()), "shippingOrderAddress", [], "any", false, false, false, 136), "country", [], "any", false, false, false, 136), "translated", [], "any", false, false, false, 136), "name", [], "any", false, false, false, 136), "html", null, true);
        echo "<br>
    <br>
    ";
        // line 138
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 138, $this->source); })()), "orderCustomer", [], "any", false, false, false, 138), "vatIds", [], "any", false, false, false, 138)) {
            // line 139
            echo "        Your VAT-ID: ";
            echo sw_escape_filter($this->env, twig_first($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 139, $this->source); })()), "orderCustomer", [], "any", false, false, false, 139), "vatIds", [], "any", false, false, false, 139)), "html", null, true);
            echo "
        In case of a successful order and if you are based in one of the EU countries, you will receive your goods exempt from turnover tax.<br>
    ";
        }
        // line 142
        echo "    <br/>
    You can check the current status of your order on our website under \"My account\" - \"My orders\" anytime: ";
        // line 143
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\RawUrlFunctionExtension']->rawUrl("frontend.account.order.single.page", ["deepLinkCode" => sw_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 143, $this->source); })()), "deepLinkCode", [], "any", false, false, false, 143)], sw_get_attribute($this->env, $this->source, twig_first($this->env, sw_get_attribute($this->env, $this->source, (isset($context["salesChannel"]) || array_key_exists("salesChannel", $context) ? $context["salesChannel"] : (function () { throw new RuntimeError('Variable "salesChannel" does not exist.', 143, $this->source); })()), "domains", [], "any", false, false, false, 143)), "url", [], "any", false, false, false, 143)), "html", null, true);
        echo "
    </br>
    If you have any questions, do not hesitate to contact us.

</p>
<br>
</div>
";
    }

    // line 31
    public function block_lineItem($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "        <tr>
            <td>";
        // line 33
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["nestedItem"] ?? null), "payload", [], "any", false, true, false, 33), "productNumber", [], "any", true, true, false, 33)) {
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["nestedItem"]) || array_key_exists("nestedItem", $context) ? $context["nestedItem"] : (function () { throw new RuntimeError('Variable "nestedItem" does not exist.', 33, $this->source); })()), "payload", [], "any", false, false, false, 33), "productNumber", [], "any", false, false, false, 33)), "wordwrap", [0 => 80], "method", false, false, false, 33), "html", null, true);
        }
        echo "</td>
            <td>";
        // line 34
        if ((sw_get_attribute($this->env, $this->source, ($context["nestedItem"] ?? null), "cover", [], "any", true, true, false, 34) &&  !(null === sw_get_attribute($this->env, $this->source, (isset($context["nestedItem"]) || array_key_exists("nestedItem", $context) ? $context["nestedItem"] : (function () { throw new RuntimeError('Variable "nestedItem" does not exist.', 34, $this->source); })()), "cover", [], "any", false, false, false, 34)))) {
            echo "<img src=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["nestedItem"]) || array_key_exists("nestedItem", $context) ? $context["nestedItem"] : (function () { throw new RuntimeError('Variable "nestedItem" does not exist.', 34, $this->source); })()), "cover", [], "any", false, false, false, 34), "url", [], "any", false, false, false, 34), "html", null, true);
            echo "\" width=\"75\" height=\"auto\"/>";
        }
        echo "</td>
            <td>
                ";
        // line 36
        if ((1 === twig_compare((isset($context["nestingLevel"]) || array_key_exists("nestingLevel", $context) ? $context["nestingLevel"] : (function () { throw new RuntimeError('Variable "nestingLevel" does not exist.', 36, $this->source); })()), 0))) {
            // line 37
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nestingLevel"]) || array_key_exists("nestingLevel", $context) ? $context["nestingLevel"] : (function () { throw new RuntimeError('Variable "nestingLevel" does not exist.', 37, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 38
                echo "                        <span style=\"position: relative;\">
                            <span style=\"display: inline-block;
                                position: absolute;
                                width: 6px;
                                height: 20px;
                                top: 0;
                                border-left:  2px solid rgba(0, 0, 0, 0.15);
                                margin-left: ";
                // line 45
                echo sw_escape_filter($this->env, ($context["i"] * 10), "html", null, true);
                echo "px;\"></span>
                        </span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                ";
        }
        // line 49
        echo "
                <div";
        // line 50
        if ((1 === twig_compare((isset($context["nestingLevel"]) || array_key_exists("nestingLevel", $context) ? $context["nestingLevel"] : (function () { throw new RuntimeError('Variable "nestingLevel" does not exist.', 50, $this->source); })()), 0))) {
            echo " style=\"padding-left: ";
            echo sw_escape_filter($this->env, (((isset($context["nestingLevel"]) || array_key_exists("nestingLevel", $context) ? $context["nestingLevel"] : (function () { throw new RuntimeError('Variable "nestingLevel" does not exist.', 50, $this->source); })()) + 1) * 10), "html", null, true);
            echo "px\"";
        }
        echo ">
                    ";
        // line 51
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(sw_get_attribute($this->env, $this->source, (isset($context["nestedItem"]) || array_key_exists("nestedItem", $context) ? $context["nestedItem"] : (function () { throw new RuntimeError('Variable "nestedItem" does not exist.', 51, $this->source); })()), "label", [], "any", false, false, false, 51)), "wordwrap", [0 => 80], "method", false, false, false, 51), "html", null, true);
        echo "
                </div>

                ";
        // line 54
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["nestedItem"] ?? null), "payload", [], "any", false, true, false, 54), "options", [], "any", true, true, false, 54) && (0 <= twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["nestedItem"]) || array_key_exists("nestedItem", $context) ? $context["nestedItem"] : (function () { throw new RuntimeError('Variable "nestedItem" does not exist.', 54, $this->source); })()), "payload", [], "any", false, false, false, 54), "options", [], "any", false, false, false, 54)), 1)))) {
            // line 55
            echo "                    <div>
                        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["nestedItem"]) || array_key_exists("nestedItem", $context) ? $context["nestedItem"] : (function () { throw new RuntimeError('Variable "nestedItem" does not exist.', 56, $this->source); })()), "payload", [], "any", false, false, false, 56), "options", [], "any", false, false, false, 56));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 57
                echo "                            ";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["option"], "group", [], "any", false, false, false, 57), "html", null, true);
                echo ": ";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["option"], "option", [], "any", false, false, false, 57), "html", null, true);
                echo "
                            ";
                // line 58
                if ((0 !== twig_compare(twig_last($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["nestedItem"]) || array_key_exists("nestedItem", $context) ? $context["nestedItem"] : (function () { throw new RuntimeError('Variable "nestedItem" does not exist.', 58, $this->source); })()), "payload", [], "any", false, false, false, 58), "options", [], "any", false, false, false, 58)), $context["option"]))) {
                    // line 59
                    echo "                                ";
                    echo " | ";
                    echo "
                            ";
                }
                // line 61
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                    </div>
                ";
        }
        // line 64
        echo "
                ";
        // line 65
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["nestedItem"] ?? null), "payload", [], "any", false, true, false, 65), "features", [], "any", true, true, false, 65) && (0 <= twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["nestedItem"]) || array_key_exists("nestedItem", $context) ? $context["nestedItem"] : (function () { throw new RuntimeError('Variable "nestedItem" does not exist.', 65, $this->source); })()), "payload", [], "any", false, false, false, 65), "features", [], "any", false, false, false, 65)), 1)))) {
            // line 66
            echo "                    ";
            $context["referencePriceFeatures"] = twig_array_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["nestedItem"]) || array_key_exists("nestedItem", $context) ? $context["nestedItem"] : (function () { throw new RuntimeError('Variable "nestedItem" does not exist.', 66, $this->source); })()), "payload", [], "any", false, false, false, 66), "features", [], "any", false, false, false, 66), function ($__feature__) use ($context, $macros) { $context["feature"] = $__feature__; return (0 === twig_compare(sw_get_attribute($this->env, $this->source, (isset($context["feature"]) || array_key_exists("feature", $context) ? $context["feature"] : (function () { throw new RuntimeError('Variable "feature" does not exist.', 66, $this->source); })()), "type", [], "any", false, false, false, 66), "referencePrice")); });
            // line 67
            echo "                    ";
            if ((0 <= twig_compare(twig_length_filter($this->env, (isset($context["referencePriceFeatures"]) || array_key_exists("referencePriceFeatures", $context) ? $context["referencePriceFeatures"] : (function () { throw new RuntimeError('Variable "referencePriceFeatures" does not exist.', 67, $this->source); })())), 1))) {
                // line 68
                echo "                        ";
                $context["referencePriceFeature"] = twig_first($this->env, (isset($context["referencePriceFeatures"]) || array_key_exists("referencePriceFeatures", $context) ? $context["referencePriceFeatures"] : (function () { throw new RuntimeError('Variable "referencePriceFeatures" does not exist.', 68, $this->source); })()));
                // line 69
                echo "                        <div>
                            ";
                // line 70
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["referencePriceFeature"]) || array_key_exists("referencePriceFeature", $context) ? $context["referencePriceFeature"] : (function () { throw new RuntimeError('Variable "referencePriceFeature" does not exist.', 70, $this->source); })()), "value", [], "any", false, false, false, 70), "purchaseUnit", [], "any", false, false, false, 70), "html", null, true);
                echo " ";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["referencePriceFeature"]) || array_key_exists("referencePriceFeature", $context) ? $context["referencePriceFeature"] : (function () { throw new RuntimeError('Variable "referencePriceFeature" does not exist.', 70, $this->source); })()), "value", [], "any", false, false, false, 70), "unitName", [], "any", false, false, false, 70), "html", null, true);
                echo "
                            (";
                // line 71
                echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["referencePriceFeature"]) || array_key_exists("referencePriceFeature", $context) ? $context["referencePriceFeature"] : (function () { throw new RuntimeError('Variable "referencePriceFeature" does not exist.', 71, $this->source); })()), "value", [], "any", false, false, false, 71), "price", [], "any", false, false, false, 71), (isset($context["currencyIsoCode"]) || array_key_exists("currencyIsoCode", $context) ? $context["currencyIsoCode"] : (function () { throw new RuntimeError('Variable "currencyIsoCode" does not exist.', 71, $this->source); })())), "html", null, true);
                echo "* / ";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["referencePriceFeature"]) || array_key_exists("referencePriceFeature", $context) ? $context["referencePriceFeature"] : (function () { throw new RuntimeError('Variable "referencePriceFeature" does not exist.', 71, $this->source); })()), "value", [], "any", false, false, false, 71), "referenceUnit", [], "any", false, false, false, 71), "html", null, true);
                echo " ";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["referencePriceFeature"]) || array_key_exists("referencePriceFeature", $context) ? $context["referencePriceFeature"] : (function () { throw new RuntimeError('Variable "referencePriceFeature" does not exist.', 71, $this->source); })()), "value", [], "any", false, false, false, 71), "unitName", [], "any", false, false, false, 71), "html", null, true);
                echo ")
                        </div>
                    ";
            }
            // line 74
            echo "                ";
        }
        // line 75
        echo "            </td>
            <td style=\"text-align: center\">";
        // line 76
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, (isset($context["nestedItem"]) || array_key_exists("nestedItem", $context) ? $context["nestedItem"] : (function () { throw new RuntimeError('Variable "nestedItem" does not exist.', 76, $this->source); })()), "quantity", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
            <td>";
        // line 77
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, (isset($context["nestedItem"]) || array_key_exists("nestedItem", $context) ? $context["nestedItem"] : (function () { throw new RuntimeError('Variable "nestedItem" does not exist.', 77, $this->source); })()), "unitPrice", [], "any", false, false, false, 77), (isset($context["currencyIsoCode"]) || array_key_exists("currencyIsoCode", $context) ? $context["currencyIsoCode"] : (function () { throw new RuntimeError('Variable "currencyIsoCode" does not exist.', 77, $this->source); })())), "html", null, true);
        echo "</td>
            <td>";
        // line 78
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, (isset($context["nestedItem"]) || array_key_exists("nestedItem", $context) ? $context["nestedItem"] : (function () { throw new RuntimeError('Variable "nestedItem" does not exist.', 78, $this->source); })()), "totalPrice", [], "any", false, false, false, 78), (isset($context["currencyIsoCode"]) || array_key_exists("currencyIsoCode", $context) ? $context["currencyIsoCode"] : (function () { throw new RuntimeError('Variable "currencyIsoCode" does not exist.', 78, $this->source); })())), "html", null, true);
        echo "</td>
        </tr>

            ";
        // line 81
        if ((1 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["nestedItem"]) || array_key_exists("nestedItem", $context) ? $context["nestedItem"] : (function () { throw new RuntimeError('Variable "nestedItem" does not exist.', 81, $this->source); })()), "children", [], "any", false, false, false, 81), "count", [], "any", false, false, false, 81), 0))) {
            // line 82
            echo "                ";
            $context["nestingLevel"] = ((isset($context["nestingLevel"]) || array_key_exists("nestingLevel", $context) ? $context["nestingLevel"] : (function () { throw new RuntimeError('Variable "nestingLevel" does not exist.', 82, $this->source); })()) + 1);
            // line 83
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, (isset($context["nestedItem"]) || array_key_exists("nestedItem", $context) ? $context["nestedItem"] : (function () { throw new RuntimeError('Variable "nestedItem" does not exist.', 83, $this->source); })()), "children", [], "any", false, false, false, 83));
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
                // line 84
                echo "                    ";
                $context["nestedItem"] = $context["lineItem"];
                // line 85
                echo "                    ";
                $this->displayBlock("lineItem", $context, $blocks);
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
            // line 87
            echo "            ";
        }
        // line 88
        echo "        ";
    }

    public function getTemplateName()
    {
        return "2865e4b12903a25c8c208f9a55b31411";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  510 => 88,  507 => 87,  490 => 85,  487 => 84,  469 => 83,  466 => 82,  464 => 81,  458 => 78,  454 => 77,  450 => 76,  447 => 75,  444 => 74,  434 => 71,  428 => 70,  425 => 69,  422 => 68,  419 => 67,  416 => 66,  414 => 65,  411 => 64,  407 => 62,  401 => 61,  395 => 59,  393 => 58,  386 => 57,  382 => 56,  379 => 55,  377 => 54,  371 => 51,  363 => 50,  360 => 49,  357 => 48,  348 => 45,  339 => 38,  334 => 37,  332 => 36,  323 => 34,  317 => 33,  314 => 32,  310 => 31,  298 => 143,  295 => 142,  288 => 139,  286 => 138,  281 => 136,  275 => 135,  271 => 134,  265 => 133,  261 => 132,  254 => 128,  248 => 127,  244 => 126,  238 => 125,  234 => 124,  231 => 123,  229 => 122,  223 => 119,  219 => 118,  215 => 116,  209 => 114,  207 => 113,  195 => 112,  178 => 110,  174 => 109,  170 => 108,  167 => 107,  158 => 105,  154 => 104,  149 => 101,  145 => 99,  142 => 98,  140 => 97,  138 => 96,  136 => 95,  134 => 94,  131 => 93,  129 => 92,  125 => 90,  111 => 89,  108 => 31,  105 => 30,  102 => 29,  85 => 28,  66 => 12,  59 => 8,  54 => 6,  44 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "2865e4b12903a25c8c208f9a55b31411", "");
    }
}
