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

/* @Storefront/storefront/page/checkout/finish/finish-details.html.twig */
class __TwigTemplate_1fdb261622deff85762ff74d634eb5154c11b62dcb9dfe413d2df0ec220ac365 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_finish_details_inner' => [$this, 'block_page_checkout_finish_details_inner'],
            'page_checkout_finish_data' => [$this, 'block_page_checkout_finish_data'],
            'page_checkout_finish_header' => [$this, 'block_page_checkout_finish_header'],
            'page_checkout_finish_ordernumber' => [$this, 'block_page_checkout_finish_ordernumber'],
            'page_checkout_finish_hidden_information_line_items' => [$this, 'block_page_checkout_finish_hidden_information_line_items'],
            'page_checkout_finish_subtitle' => [$this, 'block_page_checkout_finish_subtitle'],
            'page_checkout_finish_content' => [$this, 'block_page_checkout_finish_content'],
            'page_checkout_finish_teaser' => [$this, 'block_page_checkout_finish_teaser'],
            'page_checkout_finish_action' => [$this, 'block_page_checkout_finish_action'],
            'page_checkout_finish_action_back' => [$this, 'block_page_checkout_finish_action_back'],
            'page_checkout_finish_order' => [$this, 'block_page_checkout_finish_order'],
            'page_checkout_finish_order_address' => [$this, 'block_page_checkout_finish_order_address'],
            'page_checkout_finish_order_details' => [$this, 'block_page_checkout_finish_order_details'],
            'page_checkout_finish_order_title' => [$this, 'block_page_checkout_finish_order_title'],
            'page_checkout_finish_order_payment_method' => [$this, 'block_page_checkout_finish_order_payment_method'],
            'page_checkout_finish_order_dispatch_method' => [$this, 'block_page_checkout_finish_order_dispatch_method'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_checkout_finish_details_inner', $context, $blocks);
    }

    public function block_page_checkout_finish_details_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $this->displayBlock('page_checkout_finish_data', $context, $blocks);
        // line 57
        echo "
    ";
        // line 58
        $this->displayBlock('page_checkout_finish_order', $context, $blocks);
    }

    // line 2
    public function block_page_checkout_finish_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <div class=\"card checkout-card\">
            <div class=\"card-body\">
                ";
        // line 5
        $this->displayBlock('page_checkout_finish_header', $context, $blocks);
        // line 16
        echo "
                ";
        // line 17
        $this->displayBlock('page_checkout_finish_ordernumber', $context, $blocks);
        // line 22
        echo "
                ";
        // line 23
        $this->displayBlock('page_checkout_finish_hidden_information_line_items', $context, $blocks);
        // line 29
        echo "
                ";
        // line 30
        $this->displayBlock('page_checkout_finish_subtitle', $context, $blocks);
        // line 37
        echo "
                ";
        // line 38
        $this->displayBlock('page_checkout_finish_content', $context, $blocks);
        // line 54
        echo "            </div>
        </div>
    ";
    }

    // line 5
    public function block_page_checkout_finish_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "                    <h1 class=\"finish-header\">
                        ";
        // line 7
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "changedPayment", [], "any", false, false, false, 7), true))) {
            // line 8
            echo "                            ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.finishUpdateHeader"));
            echo "
                        ";
        } else {
            // line 10
            echo "                            ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.finishHeader", ["%shop%" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shopName")]));
            // line 12
            echo "
                        ";
        }
        // line 14
        echo "                    </h1>
                ";
    }

    // line 17
    public function block_page_checkout_finish_ordernumber($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "                    <p class=\"finish-ordernumber\" data-order-number=\"";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "order", [], "any", false, false, false, 18), "orderNumber", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
                        ";
        // line 19
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.finishInfoOrdernumber"));
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "order", [], "any", false, false, false, 19), "orderNumber", [], "any", false, false, false, 19), "html", null, true);
        echo "
                    </p>
                ";
    }

    // line 23
    public function block_page_checkout_finish_hidden_information_line_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                    ";
        $this->loadTemplate("@Storefront/storefront/component/checkout/hidden-line-items-information.html.twig", "@Storefront/storefront/page/checkout/finish/finish-details.html.twig", 24)->display(twig_array_merge($context, ["cart" => sw_get_attribute($this->env, $this->source,         // line 25
($context["page"] ?? null), "order", [], "any", false, false, false, 25), "lineItems" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 26
($context["page"] ?? null), "order", [], "any", false, false, false, 26), "lineItems", [], "any", false, false, false, 26)]));
        // line 28
        echo "                ";
    }

    // line 30
    public function block_page_checkout_finish_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                    ";
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "changedPayment", [], "any", false, false, false, 31), true))) {
            // line 32
            echo "                        <p class=\"finish-order-subtitle\">
                            ";
            // line 33
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.finishPaymentHeader", ["%paymentName%" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "order", [], "any", false, false, false, 33), "transactions", [], "any", false, false, false, 33), "last", [], "any", false, false, false, 33), "paymentMethod", [], "any", false, false, false, 33), "translated", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33)]));
            echo "
                        </p>
                    ";
        }
        // line 36
        echo "                ";
    }

    // line 38
    public function block_page_checkout_finish_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "                    <div class=\"finish-content\">
                        ";
        // line 40
        $this->displayBlock('page_checkout_finish_teaser', $context, $blocks);
        // line 45
        echo "
                        ";
        // line 47
        echo "                        ";
        $this->displayBlock('page_checkout_finish_action', $context, $blocks);
        // line 52
        echo "                    </div>
                ";
    }

    // line 40
    public function block_page_checkout_finish_teaser($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                            ";
        if ((0 !== twig_compare(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "changedPayment", [], "any", false, false, false, 41), true))) {
            // line 42
            echo "                                <p class=\"finish-teaser\">";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.finishInfoConfirmationMail"));
            echo "</p>
                            ";
        }
        // line 44
        echo "                        ";
    }

    // line 47
    public function block_page_checkout_finish_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "
                            ";
        // line 50
        echo "                            ";
        $this->displayBlock('page_checkout_finish_action_back', $context, $blocks);
        // line 51
        echo "                        ";
    }

    // line 50
    public function block_page_checkout_finish_action_back($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 58
    public function block_page_checkout_finish_order($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "        <div class=\"row finish-info\">
            ";
        // line 60
        $this->displayBlock('page_checkout_finish_order_address', $context, $blocks);
        // line 65
        echo "
            ";
        // line 66
        $this->displayBlock('page_checkout_finish_order_details', $context, $blocks);
        // line 93
        echo "        </div>
    ";
    }

    // line 60
    public function block_page_checkout_finish_order_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "                <div class=\"col-md-8 finish-address\">
                    ";
        // line 62
        $this->loadTemplate("@Storefront/storefront/page/checkout/finish/finish-address.html.twig", "@Storefront/storefront/page/checkout/finish/finish-details.html.twig", 62)->display($context);
        // line 63
        echo "                </div>
            ";
    }

    // line 66
    public function block_page_checkout_finish_order_details($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "                <div class=\"col-md-4 finish-order-details\">
                    <div class=\"card checkout-card\">
                        <div class=\"card-body\">
                            ";
        // line 70
        $this->displayBlock('page_checkout_finish_order_title', $context, $blocks);
        // line 75
        echo "
                            ";
        // line 76
        $this->displayBlock('page_checkout_finish_order_payment_method', $context, $blocks);
        // line 82
        echo "
                            ";
        // line 83
        $this->displayBlock('page_checkout_finish_order_dispatch_method', $context, $blocks);
        // line 89
        echo "                        </div>
                    </div>
                </div>
            ";
    }

    // line 70
    public function block_page_checkout_finish_order_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "                                <div class=\"card-title\">
                                    ";
        // line 72
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.finishInfoHeader"));
        echo "
                                </div>
                            ";
    }

    // line 76
    public function block_page_checkout_finish_order_payment_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "                                <p>
                                    <strong>";
        // line 78
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.finishInfoPayment"));
        echo "</strong>
                                    ";
        // line 79
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "order", [], "any", false, false, false, 79), "transactions", [], "any", false, false, false, 79), "last", [], "any", false, false, false, 79), "paymentMethod", [], "any", false, false, false, 79), "translated", [], "any", false, false, false, 79), "name", [], "any", false, false, false, 79), "html", null, true);
        echo "
                                </p>
                            ";
    }

    // line 83
    public function block_page_checkout_finish_order_dispatch_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "                                <p>
                                    <strong>";
        // line 85
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.finishInfoShipping"));
        echo "</strong>
                                    ";
        // line 86
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "order", [], "any", false, false, false, 86), "deliveries", [], "any", false, false, false, 86), "first", [], "any", false, false, false, 86), "shippingMethod", [], "any", false, false, false, 86), "translated", [], "any", false, false, false, 86), "name", [], "any", false, false, false, 86), "html", null, true);
        echo "
                                </p>
                            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/finish/finish-details.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  344 => 86,  340 => 85,  337 => 84,  333 => 83,  326 => 79,  322 => 78,  319 => 77,  315 => 76,  308 => 72,  305 => 71,  301 => 70,  294 => 89,  292 => 83,  289 => 82,  287 => 76,  284 => 75,  282 => 70,  277 => 67,  273 => 66,  268 => 63,  266 => 62,  263 => 61,  259 => 60,  254 => 93,  252 => 66,  249 => 65,  247 => 60,  244 => 59,  240 => 58,  234 => 50,  230 => 51,  227 => 50,  224 => 48,  220 => 47,  216 => 44,  210 => 42,  207 => 41,  203 => 40,  198 => 52,  195 => 47,  192 => 45,  190 => 40,  187 => 39,  183 => 38,  179 => 36,  173 => 33,  170 => 32,  167 => 31,  163 => 30,  159 => 28,  157 => 26,  156 => 25,  154 => 24,  150 => 23,  142 => 19,  137 => 18,  133 => 17,  128 => 14,  124 => 12,  121 => 10,  115 => 8,  113 => 7,  110 => 6,  106 => 5,  100 => 54,  98 => 38,  95 => 37,  93 => 30,  90 => 29,  88 => 23,  85 => 22,  83 => 17,  80 => 16,  78 => 5,  74 => 3,  70 => 2,  66 => 58,  63 => 57,  60 => 2,  53 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/checkout/finish/finish-details.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/checkout/finish/finish-details.html.twig");
    }
}
