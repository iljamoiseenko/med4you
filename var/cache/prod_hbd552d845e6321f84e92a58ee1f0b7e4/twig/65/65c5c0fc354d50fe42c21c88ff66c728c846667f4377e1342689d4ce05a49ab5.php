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

/* @Storefront/storefront/page/account/index.html.twig */
class __TwigTemplate_ebcdd4901dfe1d69c9a2939f7ba945c2030903e71a0f235f6171773b0f1e5ad5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_account_main_content' => [$this, 'block_page_account_main_content'],
            'page_account_overview' => [$this, 'block_page_account_overview'],
            'page_account_overview_shipping_warning' => [$this, 'block_page_account_overview_shipping_warning'],
            'page_account_overview_request_group_info' => [$this, 'block_page_account_overview_request_group_info'],
            'page_account_overview_welcome' => [$this, 'block_page_account_overview_welcome'],
            'page_account_overview_welcome_intro' => [$this, 'block_page_account_overview_welcome_intro'],
            'page_account_overview_main' => [$this, 'block_page_account_overview_main'],
            'page_account_overview_profile' => [$this, 'block_page_account_overview_profile'],
            'page_account_overview_profile_card' => [$this, 'block_page_account_overview_profile_card'],
            'page_account_overview_profile_title' => [$this, 'block_page_account_overview_profile_title'],
            'page_account_overview_profile_content' => [$this, 'block_page_account_overview_profile_content'],
            'page_account_overview_profile_company' => [$this, 'block_page_account_overview_profile_company'],
            'page_account_overview_profile_email' => [$this, 'block_page_account_overview_profile_email'],
            'page_account_overview_profile_actions' => [$this, 'block_page_account_overview_profile_actions'],
            'page_account_overview_payment' => [$this, 'block_page_account_overview_payment'],
            'page_account_overview_payment_card' => [$this, 'block_page_account_overview_payment_card'],
            'page_account_overview_payment_title' => [$this, 'block_page_account_overview_payment_title'],
            'page_account_overview_payment_content' => [$this, 'block_page_account_overview_payment_content'],
            'page_account_overview_payment_actions' => [$this, 'block_page_account_overview_payment_actions'],
            'page_account_overview_newsletter' => [$this, 'block_page_account_overview_newsletter'],
            'page_account_overview_newsletter_title' => [$this, 'block_page_account_overview_newsletter_title'],
            'page_account_overview_newsletter_content' => [$this, 'block_page_account_overview_newsletter_content'],
            'page_account_overview_addresses_include' => [$this, 'block_page_account_overview_addresses_include'],
            'page_account_overview_newest_order' => [$this, 'block_page_account_overview_newest_order'],
            'page_account_overview_newest_order_title' => [$this, 'block_page_account_overview_newest_order_title'],
            'page_account_overview_newest_order_content' => [$this, 'block_page_account_overview_newest_order_content'],
            'page_account_overview_newest_order_table' => [$this, 'block_page_account_overview_newest_order_table'],
            'page_account_overview_newest_order_table_body' => [$this, 'block_page_account_overview_newest_order_table_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/account/_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/page/account/_page.html.twig", "@Storefront/storefront/page/account/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_account_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayBlock('page_account_overview', $context, $blocks);
    }

    public function block_page_account_overview($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        <div class=\"account-overview\">
            ";
        // line 6
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_15707")) {
            // line 7
            echo "                ";
            $this->displayBlock('page_account_overview_shipping_warning', $context, $blocks);
            // line 17
            echo "
                ";
            // line 18
            $this->displayBlock('page_account_overview_request_group_info', $context, $blocks);
            // line 28
            echo "            ";
        }
        // line 29
        echo "
            ";
        // line 30
        $this->displayBlock('page_account_overview_welcome', $context, $blocks);
        // line 49
        echo "
            ";
        // line 50
        $this->displayBlock('page_account_overview_main', $context, $blocks);
        // line 134
        echo "
            ";
        // line 135
        $this->displayBlock('page_account_overview_newsletter', $context, $blocks);
        // line 158
        echo "
            ";
        // line 159
        $this->displayBlock('page_account_overview_addresses_include', $context, $blocks);
        // line 162
        echo "
            ";
        // line 163
        $this->displayBlock('page_account_overview_newest_order', $context, $blocks);
        // line 195
        echo "        </div>
    ";
    }

    // line 7
    public function block_page_account_overview_shipping_warning($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "                    ";
        $context["ableToShipToShippingCountry"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 8), "defaultShippingAddress", [], "any", false, false, false, 8), "country", [], "any", false, false, false, 8), "shippingAvailable", [], "any", false, false, false, 8);
        // line 9
        echo "
                    ";
        // line 10
        if ( !($context["ableToShipToShippingCountry"] ?? null)) {
            // line 11
            echo "                        ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/index.html.twig", 11)->display(twig_array_merge($context, ["type" => "warning", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewNotAbleToShip"))]));
            // line 15
            echo "                    ";
        }
        // line 16
        echo "                ";
    }

    // line 18
    public function block_page_account_overview_request_group_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                    ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "customer", [], "any", false, false, false, 19), "requestedGroup", [], "any", false, false, false, 19)) {
            // line 20
            echo "                        ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/index.html.twig", 20)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewCustomerGroupRequest", ["%group%" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 23
($context["page"] ?? null), "customer", [], "any", false, false, false, 23), "requestedGroup", [], "any", false, false, false, 23), "translated", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23)])]));
            // line 26
            echo "                    ";
        }
        // line 27
        echo "                ";
    }

    // line 30
    public function block_page_account_overview_welcome($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                <div class=\"account-welcome\">
                    <h1>";
        // line 32
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewTitle"));
        echo "</h1>
                    ";
        // line 33
        $this->displayBlock('page_account_overview_welcome_intro', $context, $blocks);
        // line 36
        echo "
                    ";
        // line 37
        if (( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_15707") && sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "customer", [], "any", false, false, false, 37), "requestedGroup", [], "any", false, false, false, 37))) {
            // line 38
            echo "
                        ";
            // line 40
            echo "                        ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/index.html.twig", 40)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewCustomerGroupRequest", ["%group%" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 43
($context["page"] ?? null), "customer", [], "any", false, false, false, 43), "requestedGroup", [], "any", false, false, false, 43), "translated", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43)])]));
            // line 46
            echo "                    ";
        }
        // line 47
        echo "                </div>
            ";
    }

    // line 33
    public function block_page_account_overview_welcome_intro($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                        <p>";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewInfo"));
        echo "</p>
                    ";
    }

    // line 50
    public function block_page_account_overview_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "                <div class=\"row\">
                    ";
        // line 52
        $this->displayBlock('page_account_overview_profile', $context, $blocks);
        // line 101
        echo "
                    ";
        // line 102
        $this->displayBlock('page_account_overview_payment', $context, $blocks);
        // line 132
        echo "                </div>
            ";
    }

    // line 52
    public function block_page_account_overview_profile($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "                        <div class=\"col-lg-6 card-col account-overview-card account-overview-profile\">
                            ";
        // line 54
        $this->displayBlock('page_account_overview_profile_card', $context, $blocks);
        // line 99
        echo "                        </div>
                    ";
    }

    // line 54
    public function block_page_account_overview_profile_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        ";
        // line 57
        $this->displayBlock('page_account_overview_profile_title', $context, $blocks);
        // line 62
        echo "
                                        ";
        // line 63
        $this->displayBlock('page_account_overview_profile_content', $context, $blocks);
        // line 74
        echo "
                                        ";
        // line 75
        $this->displayBlock('page_account_overview_profile_company', $context, $blocks);
        // line 80
        echo "
                                        ";
        // line 81
        $this->displayBlock('page_account_overview_profile_email', $context, $blocks);
        // line 86
        echo "
                                        ";
        // line 87
        $this->displayBlock('page_account_overview_profile_actions', $context, $blocks);
        // line 96
        echo "                                    </div>
                                </div>
                            ";
    }

    // line 57
    public function block_page_account_overview_profile_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "                                            <h2 class=\"card-title\">
                                                ";
        // line 59
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewProfileHeader"));
        echo "
                                            </h2>
                                        ";
    }

    // line 63
    public function block_page_account_overview_profile_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "                                            <p>
                                                ";
        // line 65
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 65), "salutation", [], "any", false, false, false, 65) && (0 !== twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 65), "salutation", [], "any", false, false, false, 65), "salutationKey", [], "any", false, false, false, 65), "not_specified")))) {
            // line 66
            echo "                                                    ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 66), "salutation", [], "any", false, false, false, 66), "translated", [], "any", false, false, false, 66), "displayName", [], "any", false, false, false, 66), "html", null, true);
            echo "
                                                ";
        }
        // line 68
        echo "                                                ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 68), "title", [], "any", false, false, false, 68)) {
            // line 69
            echo "                                                    ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 69), "title", [], "any", false, false, false, 69), "html", null, true);
            echo "<br/>
                                                ";
        }
        // line 71
        echo "                                                ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 71), "firstName", [], "any", false, false, false, 71), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 71), "lastName", [], "any", false, false, false, 71), "html", null, true);
        echo "
                                            </p>
                                        ";
    }

    // line 75
    public function block_page_account_overview_profile_company($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "                                            ";
        $this->loadTemplate("@Storefront/storefront/component/account/customer-overview-personal-company.html.twig", "@Storefront/storefront/page/account/index.html.twig", 76)->display(twig_array_merge($context, ["customer" => sw_get_attribute($this->env, $this->source,         // line 77
($context["context"] ?? null), "customer", [], "any", false, false, false, 77)]));
        // line 79
        echo "                                        ";
    }

    // line 81
    public function block_page_account_overview_profile_email($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "                                            <p>
                                                ";
        // line 83
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 83), "email", [], "any", false, false, false, 83), "html", null, true);
        echo "
                                            </p>
                                        ";
    }

    // line 87
    public function block_page_account_overview_profile_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "                                            <div class=\"card-actions\">
                                                <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.profile.page");
        echo "\"
                                                   title=\"";
        // line 90
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeProfile")), "html", null, true);
        echo "\"
                                                   class=\"btn btn-light\">
                                                    ";
        // line 92
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeProfile"));
        echo "
                                                </a>
                                            </div>
                                        ";
    }

    // line 102
    public function block_page_account_overview_payment($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "                        <div class=\"col-lg-6 card-col account-overview-card account-overview-payment\">
                            ";
        // line 104
        $this->displayBlock('page_account_overview_payment_card', $context, $blocks);
        // line 130
        echo "                        </div>
                    ";
    }

    // line 104
    public function block_page_account_overview_payment_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        echo "                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        ";
        // line 107
        $this->displayBlock('page_account_overview_payment_title', $context, $blocks);
        // line 112
        echo "
                                        ";
        // line 113
        $this->displayBlock('page_account_overview_payment_content', $context, $blocks);
        // line 117
        echo "
                                        ";
        // line 118
        $this->displayBlock('page_account_overview_payment_actions', $context, $blocks);
        // line 127
        echo "                                    </div>
                                </div>
                            ";
    }

    // line 107
    public function block_page_account_overview_payment_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 108
        echo "                                            <h2 class=\"card-title\">
                                                ";
        // line 109
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewPaymentHeader"));
        echo "
                                            </h2>
                                        ";
    }

    // line 113
    public function block_page_account_overview_payment_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "                                            <strong>";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 114), "defaultPaymentMethod", [], "any", false, false, false, 114), "translated", [], "any", false, false, false, 114), "name", [], "any", false, false, false, 114), "html", null, true);
        echo "</strong>
                                            <p>";
        // line 115
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 115), "defaultPaymentMethod", [], "any", false, false, false, 115), "description", [], "any", false, false, false, 115), "html", null, true);
        echo "</p>
                                        ";
    }

    // line 118
    public function block_page_account_overview_payment_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        echo "                                            <div class=\"card-actions\">
                                                <a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.payment.page");
        echo "\"
                                                   title=\"";
        // line 121
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangePayment")), "html", null, true);
        echo "\"
                                                   class=\"btn btn-light\">
                                                    ";
        // line 123
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangePayment"));
        echo "
                                                </a>
                                            </div>
                                        ";
    }

    // line 135
    public function block_page_account_overview_newsletter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 136
        echo "                <div class=\"account-overview-card account-overview-newsletter\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            ";
        // line 139
        $this->displayBlock('page_account_overview_newsletter_title', $context, $blocks);
        // line 144
        echo "
                            ";
        // line 145
        $this->displayBlock('page_account_overview_newsletter_content', $context, $blocks);
        // line 154
        echo "                        </div>
                    </div>
                </div>
            ";
    }

    // line 139
    public function block_page_account_overview_newsletter_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 140
        echo "                                <h2 class=\"card-title\">
                                    ";
        // line 141
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.newsletterTitle"));
        echo "
                                </h2>
                            ";
    }

    // line 145
    public function block_page_account_overview_newsletter_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        echo "                                <div class=\"js-newsletter-wrapper\">
                                    ";
        // line 147
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_14001")) {
            // line 148
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/page/account/newsletter.html.twig", "@Storefront/storefront/page/account/index.html.twig", 148)->display(twig_array_merge($context, ["newsletterAccountPagelet" => sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "getNewsletterAccountPagelet", [], "method", false, false, false, 148)]));
            // line 149
            echo "                                    ";
        } else {
            // line 150
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/page/account/newsletter.html.twig", "@Storefront/storefront/page/account/index.html.twig", 150)->display(twig_array_merge($context, ["customer" => sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 150)]));
            // line 151
            echo "                                    ";
        }
        // line 152
        echo "                                </div>
                            ";
    }

    // line 159
    public function block_page_account_overview_addresses_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 160
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/page/account/address.html.twig", "@Storefront/storefront/page/account/index.html.twig", 160)->display($context);
        // line 161
        echo "            ";
    }

    // line 163
    public function block_page_account_overview_newest_order($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 164
        echo "                ";
        if (sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "newestOrder", [], "any", false, false, false, 164)) {
            // line 165
            echo "                    <div class=\"account-overview-card account-overview-newest-order\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                ";
            // line 168
            $this->displayBlock('page_account_overview_newest_order_title', $context, $blocks);
            // line 173
            echo "
                                ";
            // line 174
            $this->displayBlock('page_account_overview_newest_order_content', $context, $blocks);
            // line 190
            echo "                            </div>
                        </div>
                    </div>
                ";
        }
        // line 194
        echo "            ";
    }

    // line 168
    public function block_page_account_overview_newest_order_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 169
        echo "                                    <h2 class=\"card-title\">
                                        ";
        // line 170
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewNewestOrderHeader"));
        echo "
                                    </h2>
                                ";
    }

    // line 174
    public function block_page_account_overview_newest_order_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 175
        echo "                                    ";
        $this->displayBlock('page_account_overview_newest_order_table', $context, $blocks);
        // line 189
        echo "                                ";
    }

    // line 175
    public function block_page_account_overview_newest_order_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 176
        echo "                                        ";
        // line 177
        echo "                                        <div class=\"";
        if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            echo "table ";
        }
        echo "order-table\">

                                            ";
        // line 179
        $this->displayBlock('page_account_overview_newest_order_table_body', $context, $blocks);
        // line 187
        echo "                                        </div>
                                    ";
    }

    // line 179
    public function block_page_account_overview_newest_order_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 180
        echo "                                                <div class=\"order-table-body\"
                                                     data-order-detail-loader=\"true\">
                                                    ";
        // line 182
        $this->loadTemplate("@Storefront/storefront/page/account/order-history/order-item.html.twig", "@Storefront/storefront/page/account/index.html.twig", 182)->display(twig_array_merge($context, ["order" => sw_get_attribute($this->env, $this->source,         // line 183
($context["page"] ?? null), "newestOrder", [], "any", false, false, false, 183)]));
        // line 185
        echo "                                                </div>
                                            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  635 => 185,  633 => 183,  632 => 182,  628 => 180,  624 => 179,  619 => 187,  617 => 179,  609 => 177,  607 => 176,  603 => 175,  599 => 189,  596 => 175,  592 => 174,  585 => 170,  582 => 169,  578 => 168,  574 => 194,  568 => 190,  566 => 174,  563 => 173,  561 => 168,  556 => 165,  553 => 164,  549 => 163,  545 => 161,  542 => 160,  538 => 159,  533 => 152,  530 => 151,  527 => 150,  524 => 149,  521 => 148,  519 => 147,  516 => 146,  512 => 145,  505 => 141,  502 => 140,  498 => 139,  491 => 154,  489 => 145,  486 => 144,  484 => 139,  479 => 136,  475 => 135,  467 => 123,  462 => 121,  458 => 120,  455 => 119,  451 => 118,  445 => 115,  440 => 114,  436 => 113,  429 => 109,  426 => 108,  422 => 107,  416 => 127,  414 => 118,  411 => 117,  409 => 113,  406 => 112,  404 => 107,  400 => 105,  396 => 104,  391 => 130,  389 => 104,  386 => 103,  382 => 102,  374 => 92,  369 => 90,  365 => 89,  362 => 88,  358 => 87,  351 => 83,  348 => 82,  344 => 81,  340 => 79,  338 => 77,  336 => 76,  332 => 75,  322 => 71,  316 => 69,  313 => 68,  307 => 66,  305 => 65,  302 => 64,  298 => 63,  291 => 59,  288 => 58,  284 => 57,  278 => 96,  276 => 87,  273 => 86,  271 => 81,  268 => 80,  266 => 75,  263 => 74,  261 => 63,  258 => 62,  256 => 57,  252 => 55,  248 => 54,  243 => 99,  241 => 54,  238 => 53,  234 => 52,  229 => 132,  227 => 102,  224 => 101,  222 => 52,  219 => 51,  215 => 50,  208 => 34,  204 => 33,  199 => 47,  196 => 46,  194 => 43,  192 => 40,  189 => 38,  187 => 37,  184 => 36,  182 => 33,  178 => 32,  175 => 31,  171 => 30,  167 => 27,  164 => 26,  162 => 23,  160 => 20,  157 => 19,  153 => 18,  149 => 16,  146 => 15,  143 => 11,  141 => 10,  138 => 9,  135 => 8,  131 => 7,  126 => 195,  124 => 163,  121 => 162,  119 => 159,  116 => 158,  114 => 135,  111 => 134,  109 => 50,  106 => 49,  104 => 30,  101 => 29,  98 => 28,  96 => 18,  93 => 17,  90 => 7,  88 => 6,  85 => 5,  77 => 4,  73 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/account/index.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/account/index.html.twig");
    }
}
