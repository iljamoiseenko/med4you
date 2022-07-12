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

/* @Storefront/storefront/page/account/address.html.twig */
class __TwigTemplate_875e5cd80373ba6b92d8648aed7648cc7ba419fa405b138da041f9e005963064 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_account_overview_addresses' => [$this, 'block_page_account_overview_addresses'],
            'page_account_overview_addresses_inner' => [$this, 'block_page_account_overview_addresses_inner'],
            'page_account_overview_billing_address' => [$this, 'block_page_account_overview_billing_address'],
            'page_account_overview_billing_address_card' => [$this, 'block_page_account_overview_billing_address_card'],
            'page_account_overview_billing_address_title' => [$this, 'block_page_account_overview_billing_address_title'],
            'page_account_overview_billing_address_content' => [$this, 'block_page_account_overview_billing_address_content'],
            'page_account_overview_billing_address_actions' => [$this, 'block_page_account_overview_billing_address_actions'],
            'page_account_overview_billing_address_actions_link' => [$this, 'block_page_account_overview_billing_address_actions_link'],
            'page_account_overview_shipping_address' => [$this, 'block_page_account_overview_shipping_address'],
            'page_account_overview_shipping_address_card' => [$this, 'block_page_account_overview_shipping_address_card'],
            'page_account_overview_shipping_address_title' => [$this, 'block_page_account_overview_shipping_address_title'],
            'page_account_overview_shipping_address_content' => [$this, 'block_page_account_overview_shipping_address_content'],
            'page_account_overview_shipping_address_actions' => [$this, 'block_page_account_overview_shipping_address_actions'],
            'page_account_overview_shipping_address_actions_link' => [$this, 'block_page_account_overview_shipping_address_actions_link'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_account_overview_addresses', $context, $blocks);
    }

    public function block_page_account_overview_addresses($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"row js-account-overview-addresses\">
        ";
        // line 3
        $this->displayBlock('page_account_overview_addresses_inner', $context, $blocks);
        // line 86
        echo "    </div>
";
    }

    // line 3
    public function block_page_account_overview_addresses_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            ";
        $this->displayBlock('page_account_overview_billing_address', $context, $blocks);
        // line 42
        echo "
            ";
        // line 43
        $this->displayBlock('page_account_overview_shipping_address', $context, $blocks);
        // line 85
        echo "        ";
    }

    // line 4
    public function block_page_account_overview_billing_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                <div class=\"col-lg-6 card-col account-overview-card overview-billing-address\">
                    ";
        // line 6
        $this->displayBlock('page_account_overview_billing_address_card', $context, $blocks);
        // line 40
        echo "                </div>
            ";
    }

    // line 6
    public function block_page_account_overview_billing_address_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "                        <div class=\"card\">
                            <div class=\"card-body\">
                                ";
        // line 9
        $this->displayBlock('page_account_overview_billing_address_title', $context, $blocks);
        // line 14
        echo "
                                ";
        // line 15
        $this->displayBlock('page_account_overview_billing_address_content', $context, $blocks);
        // line 18
        echo "
                                ";
        // line 19
        $this->displayBlock('page_account_overview_billing_address_actions', $context, $blocks);
        // line 37
        echo "                            </div>
                        </div>
                    ";
    }

    // line 9
    public function block_page_account_overview_billing_address_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                                    <h2 class=\"card-title\">
                                        ";
        // line 11
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewBillingHeader"));
        echo "
                                    </h2>
                                ";
    }

    // line 15
    public function block_page_account_overview_billing_address_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/component/address/address.html.twig", "@Storefront/storefront/page/account/address.html.twig", 16)->display(twig_array_merge($context, ["address" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 16), "defaultBillingAddress", [], "any", false, false, false, 16)]));
        // line 17
        echo "                                ";
    }

    // line 19
    public function block_page_account_overview_billing_address_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                                    <div class=\"card-actions\">
                                        ";
        // line 21
        $context["addressEditorOptions"] = ["changeBilling" => true, "csrfToken" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.addressbook", ["mode" => "token"])];
        // line 25
        echo "
                                        ";
        // line 26
        $this->displayBlock('page_account_overview_billing_address_actions_link', $context, $blocks);
        // line 35
        echo "                                    </div>
                                ";
    }

    // line 26
    public function block_page_account_overview_billing_address_actions_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "                                            <a href=\"";
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.edit.page", ["addressId" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 27), "defaultBillingAddress", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\"
                                               title=\"";
        // line 28
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeBilling")), "html", null, true);
        echo "\"
                                               class=\"btn btn-light\"
                                               data-address-editor=\"true\"
                                               data-address-editor-options='";
        // line 31
        echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["addressEditorOptions"] ?? null)]), "html", null, true);
        echo "'>
                                                ";
        // line 32
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeBilling"));
        echo "
                                            </a>
                                        ";
    }

    // line 43
    public function block_page_account_overview_shipping_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "                <div class=\"col-lg-6 card-col account-overview-card overview-shipping-address\">
                    ";
        // line 45
        $this->displayBlock('page_account_overview_shipping_address_card', $context, $blocks);
        // line 83
        echo "                </div>
            ";
    }

    // line 45
    public function block_page_account_overview_shipping_address_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "                        <div class=\"card\">
                            <div class=\"card-body\">
                                ";
        // line 48
        $this->displayBlock('page_account_overview_shipping_address_title', $context, $blocks);
        // line 53
        echo "
                                ";
        // line 54
        $this->displayBlock('page_account_overview_shipping_address_content', $context, $blocks);
        // line 61
        echo "
                                ";
        // line 62
        $this->displayBlock('page_account_overview_shipping_address_actions', $context, $blocks);
        // line 80
        echo "                            </div>
                        </div>
                    ";
    }

    // line 48
    public function block_page_account_overview_shipping_address_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "                                    <h2 class=\"card-title\">
                                        ";
        // line 50
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewShippingHeader"));
        echo "
                                    </h2>
                                ";
    }

    // line 54
    public function block_page_account_overview_shipping_address_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                                    ";
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 55), "defaultBillingAddress", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55) === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 55), "defaultShippingAddress", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55))) {
            // line 56
            echo "                                        <p>";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewAddressEqual"));
            echo "</p>
                                    ";
        } else {
            // line 58
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/component/address/address.html.twig", "@Storefront/storefront/page/account/address.html.twig", 58)->display(twig_array_merge($context, ["address" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 58), "defaultShippingAddress", [], "any", false, false, false, 58)]));
            // line 59
            echo "                                    ";
        }
        // line 60
        echo "                                ";
    }

    // line 62
    public function block_page_account_overview_shipping_address_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "                                    <div class=\"card-actions\">
                                        ";
        // line 64
        $context["addressEditorOptions"] = ["changeShipping" => true, "csrfToken" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.addressbook", ["mode" => "token"])];
        // line 68
        echo "
                                        ";
        // line 69
        $this->displayBlock('page_account_overview_shipping_address_actions_link', $context, $blocks);
        // line 78
        echo "                                    </div>
                                ";
    }

    // line 69
    public function block_page_account_overview_shipping_address_actions_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "                                            <a href=\"";
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.edit.page", ["addressId" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 70), "defaultShippingAddress", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70)]), "html", null, true);
        echo "\"
                                               title=\"";
        // line 71
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeShipping")), "html", null, true);
        echo "\"
                                               class=\"btn btn-light\"
                                               data-address-editor=\"true\"
                                               data-address-editor-options='";
        // line 74
        echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["addressEditorOptions"] ?? null)]), "html", null, true);
        echo "'>
                                                ";
        // line 75
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeShipping"));
        echo "
                                            </a>
                                        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/address.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  309 => 75,  305 => 74,  299 => 71,  294 => 70,  290 => 69,  285 => 78,  283 => 69,  280 => 68,  278 => 64,  275 => 63,  271 => 62,  267 => 60,  264 => 59,  261 => 58,  255 => 56,  252 => 55,  248 => 54,  241 => 50,  238 => 49,  234 => 48,  228 => 80,  226 => 62,  223 => 61,  221 => 54,  218 => 53,  216 => 48,  212 => 46,  208 => 45,  203 => 83,  201 => 45,  198 => 44,  194 => 43,  187 => 32,  183 => 31,  177 => 28,  172 => 27,  168 => 26,  163 => 35,  161 => 26,  158 => 25,  156 => 21,  153 => 20,  149 => 19,  145 => 17,  142 => 16,  138 => 15,  131 => 11,  128 => 10,  124 => 9,  118 => 37,  116 => 19,  113 => 18,  111 => 15,  108 => 14,  106 => 9,  102 => 7,  98 => 6,  93 => 40,  91 => 6,  88 => 5,  84 => 4,  80 => 85,  78 => 43,  75 => 42,  72 => 4,  68 => 3,  63 => 86,  61 => 3,  58 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/account/address.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/account/address.html.twig");
    }
}
