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

/* @Storefront/storefront/component/account/register.html.twig */
class __TwigTemplate_3cd6d14ba480c53138101aea75711152d5a7b7b2a6599b2cead56e79ddb43e64 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_account_register' => [$this, 'block_component_account_register'],
            'component_account_register_header' => [$this, 'block_component_account_register_header'],
            'component_account_register_form' => [$this, 'block_component_account_register_form'],
            'component_account_register_form_csrf' => [$this, 'block_component_account_register_form_csrf'],
            'component_account_register_redirect' => [$this, 'block_component_account_register_redirect'],
            'component_account_register_create_account' => [$this, 'block_component_account_register_create_account'],
            'component_account_register_form_action' => [$this, 'block_component_account_register_form_action'],
            'component_account_register_personal' => [$this, 'block_component_account_register_personal'],
            'component_account_register_personal_fields' => [$this, 'block_component_account_register_personal_fields'],
            'component_account_register_personal_address_fields' => [$this, 'block_component_account_register_personal_address_fields'],
            'component_account_register_company_fields' => [$this, 'block_component_account_register_company_fields'],
            'component_account_register_personal_mail' => [$this, 'block_component_account_register_personal_mail'],
            'component_account_register_personal_mail_label' => [$this, 'block_component_account_register_personal_mail_label'],
            'component_account_register_personal_mail_input' => [$this, 'block_component_account_register_personal_mail_input'],
            'component_account_register_personal_mail_input_error' => [$this, 'block_component_account_register_personal_mail_input_error'],
            'component_account_register_personal_mail_confirmation' => [$this, 'block_component_account_register_personal_mail_confirmation'],
            'component_account_register_personal_mail_confirmation_label' => [$this, 'block_component_account_register_personal_mail_confirmation_label'],
            'component_account_register_personal_mail_confirmation_input' => [$this, 'block_component_account_register_personal_mail_confirmation_input'],
            'component_account_register_personal_mail_confirmation_input_error' => [$this, 'block_component_account_register_personal_mail_confirmation_input_error'],
            'component_account_register_personal_password' => [$this, 'block_component_account_register_personal_password'],
            'component_account_register_personal_password_label' => [$this, 'block_component_account_register_personal_password_label'],
            'component_account_register_personal_password_input' => [$this, 'block_component_account_register_personal_password_input'],
            'component_account_register_personal_password_description' => [$this, 'block_component_account_register_personal_password_description'],
            'component_account_register_personal_password_input_error' => [$this, 'block_component_account_register_personal_password_input_error'],
            'component_account_register_personal_password_confirmation' => [$this, 'block_component_account_register_personal_password_confirmation'],
            'component_account_register_personal_password_confirmation_label' => [$this, 'block_component_account_register_personal_password_confirmation_label'],
            'component_account_register_personal_password_confirmation_input' => [$this, 'block_component_account_register_personal_password_confirmation_input'],
            'component_account_register_personal_password_confirmation_input_error' => [$this, 'block_component_account_register_personal_password_confirmation_input_error'],
            'component_account_register_personal_account_fields' => [$this, 'block_component_account_register_personal_account_fields'],
            'component_account_register_address' => [$this, 'block_component_account_register_address'],
            'component_account_register_address_fields' => [$this, 'block_component_account_register_address_fields'],
            'component_account_register_address_billing' => [$this, 'block_component_account_register_address_billing'],
            'component_account_register_address_billing_header' => [$this, 'block_component_account_register_address_billing_header'],
            'component_account_register_address_billing_fields' => [$this, 'block_component_account_register_address_billing_fields'],
            'component_account_register_address_different_shipping' => [$this, 'block_component_account_register_address_different_shipping'],
            'component_account_register_address_different_shipping_control' => [$this, 'block_component_account_register_address_different_shipping_control'],
            'component_account_register_address_different_shipping_input' => [$this, 'block_component_account_register_address_different_shipping_input'],
            'component_account_register_address_different_shipping_label' => [$this, 'block_component_account_register_address_different_shipping_label'],
            'component_account_register_address_shipping' => [$this, 'block_component_account_register_address_shipping'],
            'component_account_register_address_shipping_header' => [$this, 'block_component_account_register_address_shipping_header'],
            'component_account_register_address_shipping_fields' => [$this, 'block_component_account_register_address_shipping_fields'],
            'component_account_register_address_shipping_fields_personal' => [$this, 'block_component_account_register_address_shipping_fields_personal'],
            'component_account_register_address_shipping_fields_company' => [$this, 'block_component_account_register_address_shipping_fields_company'],
            'component_account_register_address_shipping_fields_address' => [$this, 'block_component_account_register_address_shipping_fields_address'],
            'component_account_register_captcha' => [$this, 'block_component_account_register_captcha'],
            'component_account_register_privacy' => [$this, 'block_component_account_register_privacy'],
            'component_account_register_required_fields' => [$this, 'block_component_account_register_required_fields'],
            'component_account_register_submit' => [$this, 'block_component_account_register_submit'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_account_register', $context, $blocks);
    }

    public function block_component_account_register($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"card register-card\">
        <div class=\"card-body\">
            ";
        // line 4
        $this->displayBlock('component_account_register_header', $context, $blocks);
        // line 11
        echo "
            ";
        // line 12
        $this->displayBlock('component_account_register_form', $context, $blocks);
        // line 374
        echo "        </div>
    </div>
";
    }

    // line 4
    public function block_component_account_register_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                ";
        if (($context["cardTitle"] ?? null)) {
            // line 6
            echo "                    <div class=\"card-title\">
                        ";
            // line 7
            echo sw_escape_filter($this->env, ($context["cardTitle"] ?? null), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 10
        echo "            ";
    }

    // line 12
    public function block_component_account_register_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "                <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.register.save");
        echo "\"
                      class=\"register-form\"
                      method=\"post\"
                      data-form-csrf-handler=\"true\"
                      data-form-validation=\"true\">

                    ";
        // line 19
        $this->displayBlock('component_account_register_form_csrf', $context, $blocks);
        // line 22
        echo "
                    ";
        // line 23
        $this->displayBlock('component_account_register_redirect', $context, $blocks);
        // line 32
        echo "
                    ";
        // line 33
        $this->displayBlock('component_account_register_create_account', $context, $blocks);
        // line 40
        echo "
                    ";
        // line 41
        $this->displayBlock('component_account_register_form_action', $context, $blocks);
        // line 50
        echo "
                    ";
        // line 51
        $this->displayBlock('component_account_register_personal', $context, $blocks);
        // line 258
        echo "
                    ";
        // line 259
        $this->displayBlock('component_account_register_address', $context, $blocks);
        // line 349
        echo "
                    ";
        // line 350
        $this->displayBlock('component_account_register_captcha', $context, $blocks);
        // line 353
        echo "
                    ";
        // line 354
        $this->displayBlock('component_account_register_privacy', $context, $blocks);
        // line 357
        echo "
                    ";
        // line 358
        $this->displayBlock('component_account_register_required_fields', $context, $blocks);
        // line 363
        echo "
                    ";
        // line 364
        $this->displayBlock('component_account_register_submit', $context, $blocks);
        // line 372
        echo "                </form>
            ";
    }

    // line 19
    public function block_component_account_register_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.register.save");
        echo "
                    ";
    }

    // line 23
    public function block_component_account_register_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                        <input type=\"hidden\"
                               name=\"redirectTo\"
                               value=\"";
        // line 26
        echo sw_escape_filter($this->env, ($context["redirectTo"] ?? null), "html", null, true);
        echo "\">

                        <input type=\"hidden\"
                               name=\"redirectParameters\"
                               value=\"";
        // line 30
        echo sw_escape_filter($this->env, ($context["redirectParameters"] ?? null), "html", null, true);
        echo "\">
                    ";
    }

    // line 33
    public function block_component_account_register_create_account($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                    ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_16236")) {
            // line 35
            echo "                        <input type=\"hidden\"
                               name=\"createCustomerAccount\"
                               value=\"1\">
                    ";
        }
        // line 39
        echo "                    ";
    }

    // line 41
    public function block_component_account_register_form_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "                        <input type=\"hidden\"
                               name=\"errorRoute\"
                               value=\"frontend.account.register.page\"/>

                        <input type=\"hidden\"
                               name=\"errorParameters\"
                               value=\"";
        // line 48
        echo sw_escape_filter($this->env, ($context["errorParameters"] ?? null), "html", null, true);
        echo "\">
                    ";
    }

    // line 51
    public function block_component_account_register_personal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                        <div class=\"register-personal\">
                            ";
        // line 53
        $this->displayBlock('component_account_register_personal_fields', $context, $blocks);
        // line 256
        echo "                        </div>
                    ";
    }

    // line 53
    public function block_component_account_register_personal_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "                                ";
        $this->displayBlock('component_account_register_personal_address_fields', $context, $blocks);
        // line 60
        echo "
                                ";
        // line 61
        $this->displayBlock('component_account_register_company_fields', $context, $blocks);
        // line 67
        echo "
                                ";
        // line 68
        ob_start(function () { return ''; });
        // line 69
        echo "                                    ";
        $this->displayBlock('component_account_register_personal_mail', $context, $blocks);
        // line 99
        echo "                                ";
        $context["formGroupMail"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 100
        echo "
                                ";
        // line 101
        ob_start(function () { return ''; });
        // line 102
        echo "                                    ";
        $this->displayBlock('component_account_register_personal_mail_confirmation', $context, $blocks);
        // line 137
        echo "                                ";
        $context["formGroupMailConfirmation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 138
        echo "
                                ";
        // line 139
        ob_start(function () { return ''; });
        // line 140
        echo "                                    ";
        $this->displayBlock('component_account_register_personal_password', $context, $blocks);
        // line 189
        echo "                                ";
        $context["formGroupPassword"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 190
        echo "
                                ";
        // line 191
        ob_start(function () { return ''; });
        // line 192
        echo "                                    ";
        $this->displayBlock('component_account_register_personal_password_confirmation', $context, $blocks);
        // line 229
        echo "                                ";
        $context["formGroupPasswordConfirmation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 230
        echo "
                                ";
        // line 231
        $this->displayBlock('component_account_register_personal_account_fields', $context, $blocks);
        // line 255
        echo "                            ";
    }

    // line 54
    public function block_component_account_register_personal_address_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/component/address/address-personal.html.twig", "@Storefront/storefront/component/account/register.html.twig", 55)->display(twig_array_merge($context, ["showBirthdayField" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showBirthdayField"), "accountType" => sw_get_attribute($this->env, $this->source,         // line 57
($context["data"] ?? null), "get", [0 => "accountType"], "method", false, false, false, 57)]));
        // line 59
        echo "                                ";
    }

    // line 61
    public function block_component_account_register_company_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/component/address/address-personal-company.html.twig", "@Storefront/storefront/component/account/register.html.twig", 62)->display(twig_array_merge($context, ["prefix" => "billingAddress", "address" => sw_get_attribute($this->env, $this->source,         // line 64
($context["data"] ?? null), "get", [0 => "billingAddress"], "method", false, false, false, 64)]));
        // line 66
        echo "                                ";
    }

    // line 69
    public function block_component_account_register_personal_mail($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "                                        ";
        $this->displayBlock('component_account_register_personal_mail_label', $context, $blocks);
        // line 76
        echo "
                                        ";
        // line 77
        $this->displayBlock('component_account_register_personal_mail_input', $context, $blocks);
        // line 90
        echo "
                                        ";
        // line 91
        $this->displayBlock('component_account_register_personal_mail_input_error', $context, $blocks);
        // line 98
        echo "                                    ";
    }

    // line 70
    public function block_component_account_register_personal_mail_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "                                            <label class=\"form-label\"
                                                   for=\"personalMail\">
                                                ";
        // line 73
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                            </label>
                                        ";
    }

    // line 77
    public function block_component_account_register_personal_mail_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "                                            <input type=\"email\"
                                                   class=\"form-control";
        // line 79
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/email"], "method", false, false, false, 79))) {
            echo " is-invalid";
        }
        echo "\"
                                                   autocomplete=\"section-personal email\"
                                                   id=\"personalMail\"
                                                   placeholder=\"";
        // line 82
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailPlaceholder")), "html", null, true);
        echo "\"
                                                   name=\"email\"
                                                   value=\"";
        // line 84
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "email"], "method", false, false, false, 84), "html", null, true);
        echo "\"
                                                   ";
        // line 85
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.requireEmailConfirmation")) {
            // line 86
            echo "                                                   data-form-validation-equal=\"personalMail\"
                                                   ";
        }
        // line 88
        echo "                                                   required=\"required\">
                                        ";
    }

    // line 91
    public function block_component_account_register_personal_mail_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "                                            ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/email"], "method", false, false, false, 92))) {
            // line 93
            echo "                                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/account/register.html.twig", 93)->display(twig_array_merge($context, ["violationPath" => "/email"]));
            // line 96
            echo "                                            ";
        }
        // line 97
        echo "                                        ";
    }

    // line 102
    public function block_component_account_register_personal_mail_confirmation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "                                        ";
        $this->displayBlock('component_account_register_personal_mail_confirmation_label', $context, $blocks);
        // line 109
        echo "
                                        ";
        // line 110
        $this->displayBlock('component_account_register_personal_mail_confirmation_input', $context, $blocks);
        // line 122
        echo "
                                        ";
        // line 123
        $this->displayBlock('component_account_register_personal_mail_confirmation_input_error', $context, $blocks);
        // line 136
        echo "                                    ";
    }

    // line 103
    public function block_component_account_register_personal_mail_confirmation_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "                                            <label class=\"form-label\"
                                                   for=\"personalMailConfirmation\">
                                                ";
        // line 106
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailConfirmationLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                            </label>
                                        ";
    }

    // line 110
    public function block_component_account_register_personal_mail_confirmation_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "                                            <input type=\"email\"
                                                   class=\"form-control";
        // line 112
        if (( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/email"], "method", false, false, false, 112)) ||  !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/emailConfirmation"], "method", false, false, false, 112)))) {
            echo " is-invalid";
        }
        echo "\"
                                                   autocomplete=\"section-personal email\"
                                                   id=\"personalMailConfirmation\"
                                                   placeholder=\"";
        // line 115
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailConfirmationPlaceholder")), "html", null, true);
        echo "\"
                                                   name=\"emailConfirmation\"
                                                   value=\"";
        // line 117
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "emailConfirmation"], "method", false, false, false, 117), "html", null, true);
        echo "\"
                                                   data-form-validation-equal=\"personalMail\"
                                                   data-form-validation-equal-message=\"";
        // line 119
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailConfirmationInvalidMessage")), "html", null, true);
        echo "\"
                                                   required=\"required\">
                                        ";
    }

    // line 123
    public function block_component_account_register_personal_mail_confirmation_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        echo "                                            ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/email"], "method", false, false, false, 124))) {
            // line 125
            echo "                                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/account/register.html.twig", 125)->display(twig_array_merge($context, ["violationPath" => "/email"]));
            // line 128
            echo "                                            ";
        }
        // line 129
        echo "
                                            ";
        // line 130
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/emailConfirmation"], "method", false, false, false, 130))) {
            // line 131
            echo "                                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/account/register.html.twig", 131)->display(twig_array_merge($context, ["violationPath" => "/emailConfirmation"]));
            // line 134
            echo "                                            ";
        }
        // line 135
        echo "                                        ";
    }

    // line 140
    public function block_component_account_register_personal_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "                                        <span class=\"js-form-field-toggle-guest-mode\">
                                            ";
        // line 142
        $this->displayBlock('component_account_register_personal_password_label', $context, $blocks);
        // line 148
        echo "
                                            ";
        // line 149
        $this->displayBlock('component_account_register_personal_password_input', $context, $blocks);
        // line 168
        echo "
                                            ";
        // line 169
        $this->displayBlock('component_account_register_personal_password_description', $context, $blocks);
        // line 179
        echo "
                                            ";
        // line 180
        $this->displayBlock('component_account_register_personal_password_input_error', $context, $blocks);
        // line 187
        echo "                                        </span>
                                    ";
    }

    // line 142
    public function block_component_account_register_personal_password_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "                                                <label class=\"form-label\"
                                                       for=\"personalPassword\">
                                                    ";
        // line 145
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                                </label>
                                            ";
    }

    // line 149
    public function block_component_account_register_personal_password_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 150
        echo "                                                <input type=\"password\"
                                                       class=\"form-control";
        // line 151
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/password"], "method", false, false, false, 151))) {
            echo " is-invalid";
        }
        echo "\"
                                                       autocomplete=\"new-password\"
                                                       id=\"personalPassword\"
                                                       placeholder=\"";
        // line 154
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordPlaceholder")), "html", null, true);
        echo "\"
                                                       name=\"password\"
                                                       minlength=\"";
        // line 156
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.passwordMinLength"), "html", null, true);
        echo "\"
                                                       ";
        // line 157
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.requirePasswordConfirmation")) {
            // line 158
            echo "                                                       data-form-validation-equal=\"newPassword\"
                                                       ";
        }
        // line 160
        echo "                                                       ";
        if ((0 !== twig_compare($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.passwordMinLength"), 0))) {
            // line 161
            echo "                                                       data-form-validation-length=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.passwordMinLength"), "html", null, true);
            echo "\"
                                                       data-form-validation-length-message=\" ";
            // line 162
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordDescription", ["%minLength%" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.passwordMinLength")]));
            // line 164
            echo "\"
                                                       ";
        }
        // line 166
        echo "                                                       required=\"required\">
                                            ";
    }

    // line 169
    public function block_component_account_register_personal_password_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 170
        echo "                                                ";
        if ((0 !== twig_compare($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.passwordMinLength"), 0))) {
            // line 171
            echo "                                                    <small class=\"form-text js-validation-message\"
                                                           data-form-validation-length-text=\"true\">
                                                        ";
            // line 173
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordDescription", ["%minLength%" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.passwordMinLength")]));
            // line 175
            echo "
                                                    </small>
                                                ";
        }
        // line 178
        echo "                                            ";
    }

    // line 180
    public function block_component_account_register_personal_password_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 181
        echo "                                                ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/password"], "method", false, false, false, 181))) {
            // line 182
            echo "                                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/account/register.html.twig", 182)->display(twig_array_merge($context, ["violationPath" => "/password"]));
            // line 185
            echo "                                                ";
        }
        // line 186
        echo "                                            ";
    }

    // line 192
    public function block_component_account_register_personal_password_confirmation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 193
        echo "                                        <span class=\"js-form-field-toggle-guest-mode\">
                                            ";
        // line 194
        $this->displayBlock('component_account_register_personal_password_confirmation_label', $context, $blocks);
        // line 200
        echo "
                                            ";
        // line 201
        $this->displayBlock('component_account_register_personal_password_confirmation_input', $context, $blocks);
        // line 213
        echo "
                                            ";
        // line 214
        $this->displayBlock('component_account_register_personal_password_confirmation_input_error', $context, $blocks);
        // line 227
        echo "                                        </span>
                                    ";
    }

    // line 194
    public function block_component_account_register_personal_password_confirmation_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 195
        echo "                                                <label class=\"form-label\"
                                                       for=\"personalPasswordConfirmation\">
                                                    ";
        // line 197
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordConfirmationLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                                </label>
                                            ";
    }

    // line 201
    public function block_component_account_register_personal_password_confirmation_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 202
        echo "                                                <input type=\"password\"
                                                       class=\"form-control";
        // line 203
        if (( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/password"], "method", false, false, false, 203)) ||  !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/passwordConfirmation"], "method", false, false, false, 203)))) {
            echo " is-invalid";
        }
        echo "\"
                                                       autocomplete=\"new-password\"
                                                       id=\"personalPasswordConfirmation\"
                                                       placeholder=\"";
        // line 206
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordConfirmationPlaceholder")), "html", null, true);
        echo "\"
                                                       name=\"passwordConfirmation\"
                                                       minlength=\"";
        // line 208
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.passwordMinLength"), "html", null, true);
        echo "\"
                                                       data-form-validation-equal=\"newPassword\"
                                                       data-form-validation-equal-message=\"";
        // line 210
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordConfirmationInvalidMessage")), "html", null, true);
        echo "\"
                                                       required=\"required\">
                                            ";
    }

    // line 214
    public function block_component_account_register_personal_password_confirmation_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 215
        echo "                                                ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/password"], "method", false, false, false, 215))) {
            // line 216
            echo "                                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/account/register.html.twig", 216)->display(twig_array_merge($context, ["violationPath" => "/password"]));
            // line 219
            echo "                                                ";
        }
        // line 220
        echo "
                                                ";
        // line 221
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/passwordConfirmation"], "method", false, false, false, 221))) {
            // line 222
            echo "                                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/account/register.html.twig", 222)->display(twig_array_merge($context, ["violationPath" => "/passwordConfirmation"]));
            // line 225
            echo "                                                ";
        }
        // line 226
        echo "                                            ";
    }

    // line 231
    public function block_component_account_register_personal_account_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 232
        echo "                                    <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                                        <div class=\"form-group col-sm-6\">
                                            ";
        // line 234
        echo sw_escape_filter($this->env, ($context["formGroupMail"] ?? null), "html", null, true);
        echo "
                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            ";
        // line 237
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.requireEmailConfirmation")) {
            // line 238
            echo "                                                ";
            echo sw_escape_filter($this->env, ($context["formGroupMailConfirmation"] ?? null), "html", null, true);
            echo "
                                            ";
        } elseif ( !$this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.requirePasswordConfirmation")) {
            // line 240
            echo "                                                ";
            echo sw_escape_filter($this->env, ($context["formGroupPassword"] ?? null), "html", null, true);
            echo "
                                            ";
        }
        // line 242
        echo "                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            ";
        // line 244
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.requireEmailConfirmation") || $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.requirePasswordConfirmation"))) {
            // line 245
            echo "                                                ";
            echo sw_escape_filter($this->env, ($context["formGroupPassword"] ?? null), "html", null, true);
            echo "
                                            ";
        }
        // line 247
        echo "                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            ";
        // line 249
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.requirePasswordConfirmation")) {
            // line 250
            echo "                                                ";
            echo sw_escape_filter($this->env, ($context["formGroupPasswordConfirmation"] ?? null), "html", null, true);
            echo "
                                            ";
        }
        // line 252
        echo "                                        </div>
                                    </div>
                                ";
    }

    // line 259
    public function block_component_account_register_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 260
        echo "                        <div class=\"register-address\">
                            ";
        // line 261
        $this->displayBlock('component_account_register_address_fields', $context, $blocks);
        // line 347
        echo "                        </div>
                    ";
    }

    // line 261
    public function block_component_account_register_address_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 262
        echo "                                ";
        $this->displayBlock('component_account_register_address_billing', $context, $blocks);
        // line 279
        echo "
                                ";
        // line 280
        $this->displayBlock('component_account_register_address_different_shipping', $context, $blocks);
        // line 346
        echo "                            ";
    }

    // line 262
    public function block_component_account_register_address_billing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 263
        echo "                                    <div class=\"register-billing\">
                                        ";
        // line 264
        $this->displayBlock('component_account_register_address_billing_header', $context, $blocks);
        // line 269
        echo "
                                        ";
        // line 270
        $this->displayBlock('component_account_register_address_billing_fields', $context, $blocks);
        // line 277
        echo "                                    </div>
                                ";
    }

    // line 264
    public function block_component_account_register_address_billing_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 265
        echo "                                            <div class=\"card-title\">
                                                ";
        // line 266
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.registerAddressBillingHeader"));
        echo "
                                            </div>
                                        ";
    }

    // line 270
    public function block_component_account_register_address_billing_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 271
        echo "                                            ";
        $this->loadTemplate("@Storefront/storefront/component/address/address-form.html.twig", "@Storefront/storefront/component/account/register.html.twig", 271)->display(twig_array_merge($context, ["prefix" => "billingAddress", "data" => sw_get_attribute($this->env, $this->source,         // line 273
($context["data"] ?? null), "get", [0 => "billingAddress"], "method", false, false, false, 273), "showNoShippingPostfix" => true]));
        // line 276
        echo "                                        ";
    }

    // line 280
    public function block_component_account_register_address_different_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 281
        echo "                                    <div>
                                        ";
        // line 282
        $this->displayBlock('component_account_register_address_different_shipping_control', $context, $blocks);
        // line 305
        echo "
                                        ";
        // line 306
        $this->displayBlock('component_account_register_address_shipping', $context, $blocks);
        // line 344
        echo "                                    </div>
                                ";
    }

    // line 282
    public function block_component_account_register_address_different_shipping_control($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 283
        echo "                                            <div class=\"";
        echo sw_escape_filter($this->env, ($context["formCheckboxWrapperClass"] ?? null), "html", null, true);
        echo " register-different-shipping\">
                                                ";
        // line 284
        $this->displayBlock('component_account_register_address_different_shipping_input', $context, $blocks);
        // line 296
        echo "
                                                ";
        // line 297
        $this->displayBlock('component_account_register_address_different_shipping_label', $context, $blocks);
        // line 303
        echo "                                            </div>
                                        ";
    }

    // line 284
    public function block_component_account_register_address_different_shipping_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 285
        echo "                                                    <input type=\"checkbox\"
                                                           class=\"";
        // line 286
        echo sw_escape_filter($this->env, ($context["formCheckInputClass"] ?? null), "html", null, true);
        echo " js-different-shipping-checkbox\"
                                                           name=\"differentShippingAddress\"
                                                           value=\"1\"
                                                           id=\"differentShippingAddress\"
                                                           ";
        // line 290
        if (sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "differentShippingAddress"], "method", false, false, false, 290)) {
            echo "checked=\"checked\"";
        }
        // line 291
        echo "                                                           data-form-field-toggle=\"true\"
                                                           data-form-field-toggle-target=\".js-form-field-toggle-shipping-address\"
                                                           data-form-field-toggle-value=\"true\"
                                                           data-form-field-toggle-trigger-nested=\"true\">
                                                ";
    }

    // line 297
    public function block_component_account_register_address_different_shipping_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 298
        echo "                                                    <label class=\"custom-control-label no-validation\"
                                                           for=\"differentShippingAddress\">
                                                        ";
        // line 300
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.registerDifferentShipping"));
        echo "
                                                    </label>
                                                ";
    }

    // line 306
    public function block_component_account_register_address_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 307
        echo "                                            <div class=\"register-shipping js-form-field-toggle-shipping-address d-none\">
                                                ";
        // line 308
        $this->displayBlock('component_account_register_address_shipping_header', $context, $blocks);
        // line 313
        echo "
                                                ";
        // line 314
        $this->displayBlock('component_account_register_address_shipping_fields', $context, $blocks);
        // line 342
        echo "                                            </div>
                                        ";
    }

    // line 308
    public function block_component_account_register_address_shipping_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 309
        echo "                                                    <div class=\"card-title\">
                                                        ";
        // line 310
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.registerAddressShippingHeader"));
        echo "
                                                    </div>
                                                ";
    }

    // line 314
    public function block_component_account_register_address_shipping_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 315
        echo "                                                    ";
        $this->displayBlock('component_account_register_address_shipping_fields_personal', $context, $blocks);
        // line 324
        echo "
                                                    ";
        // line 325
        $this->displayBlock('component_account_register_address_shipping_fields_company', $context, $blocks);
        // line 332
        echo "
                                                    ";
        // line 333
        $this->displayBlock('component_account_register_address_shipping_fields_address', $context, $blocks);
        // line 341
        echo "                                                ";
    }

    // line 315
    public function block_component_account_register_address_shipping_fields_personal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 316
        echo "                                                        ";
        $this->loadTemplate("@Storefront/storefront/component/address/address-personal.html.twig", "@Storefront/storefront/component/account/register.html.twig", 316)->display(twig_array_merge($context, ["prefix" => "shippingAddress", "data" => sw_get_attribute($this->env, $this->source,         // line 318
($context["data"] ?? null), "get", [0 => "shippingAddress"], "method", false, false, false, 318), "hideCustomerTypeSelect" => false, "customToggleTarget" => true, "accountType" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 321
($context["data"] ?? null), "get", [0 => "shippingAddress"], "method", false, false, false, 321), "get", [0 => "accountType"], "method", false, false, false, 321)]));
        // line 323
        echo "                                                    ";
    }

    // line 325
    public function block_component_account_register_address_shipping_fields_company($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 326
        echo "                                                        ";
        $this->loadTemplate("@Storefront/storefront/component/address/address-personal-company.html.twig", "@Storefront/storefront/component/account/register.html.twig", 326)->display(twig_array_merge($context, ["prefix" => "shippingAddress", "customToggleTarget" => true, "address" => sw_get_attribute($this->env, $this->source,         // line 329
($context["data"] ?? null), "get", [0 => "shippingAddress"], "method", false, false, false, 329)]));
        // line 331
        echo "                                                    ";
    }

    // line 333
    public function block_component_account_register_address_shipping_fields_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 334
        echo "                                                        ";
        $this->loadTemplate("@Storefront/storefront/component/address/address-form.html.twig", "@Storefront/storefront/component/account/register.html.twig", 334)->display(twig_array_merge($context, ["prefix" => "shippingAddress", "data" => sw_get_attribute($this->env, $this->source,         // line 336
($context["data"] ?? null), "get", [0 => "shippingAddress"], "method", false, false, false, 336), "showNoShippingPostfix" => true, "disableNonShippableCountries" => true]));
        // line 340
        echo "                                                    ";
    }

    // line 350
    public function block_component_account_register_captcha($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 351
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/component/captcha/base.html.twig", "@Storefront/storefront/component/account/register.html.twig", 351)->display(twig_array_merge($context, ["preCheck" => true]));
        // line 352
        echo "                    ";
    }

    // line 354
    public function block_component_account_register_privacy($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 355
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/component/privacy-notice.html.twig", "@Storefront/storefront/component/account/register.html.twig", 355)->display($context);
        // line 356
        echo "                    ";
    }

    // line 358
    public function block_component_account_register_required_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 359
        echo "                        <p class=\"register-required-info\">
                            ";
        // line 360
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.requiredFields"));
        echo "
                        </p>
                    ";
    }

    // line 364
    public function block_component_account_register_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 365
        echo "                        <div class=\"register-submit\">
                            <button type=\"submit\"
                                    class=\"btn btn-primary btn-lg\">
                                ";
        // line 368
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.registerSubmit"));
        echo "
                            </button>
                        </div>
                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/account/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1136 => 368,  1131 => 365,  1127 => 364,  1120 => 360,  1117 => 359,  1113 => 358,  1109 => 356,  1106 => 355,  1102 => 354,  1098 => 352,  1095 => 351,  1091 => 350,  1087 => 340,  1085 => 336,  1083 => 334,  1079 => 333,  1075 => 331,  1073 => 329,  1071 => 326,  1067 => 325,  1063 => 323,  1061 => 321,  1060 => 318,  1058 => 316,  1054 => 315,  1050 => 341,  1048 => 333,  1045 => 332,  1043 => 325,  1040 => 324,  1037 => 315,  1033 => 314,  1026 => 310,  1023 => 309,  1019 => 308,  1014 => 342,  1012 => 314,  1009 => 313,  1007 => 308,  1004 => 307,  1000 => 306,  993 => 300,  989 => 298,  985 => 297,  977 => 291,  973 => 290,  966 => 286,  963 => 285,  959 => 284,  954 => 303,  952 => 297,  949 => 296,  947 => 284,  942 => 283,  938 => 282,  933 => 344,  931 => 306,  928 => 305,  926 => 282,  923 => 281,  919 => 280,  915 => 276,  913 => 273,  911 => 271,  907 => 270,  900 => 266,  897 => 265,  893 => 264,  888 => 277,  886 => 270,  883 => 269,  881 => 264,  878 => 263,  874 => 262,  870 => 346,  868 => 280,  865 => 279,  862 => 262,  858 => 261,  853 => 347,  851 => 261,  848 => 260,  844 => 259,  838 => 252,  832 => 250,  830 => 249,  826 => 247,  820 => 245,  818 => 244,  814 => 242,  808 => 240,  802 => 238,  800 => 237,  794 => 234,  788 => 232,  784 => 231,  780 => 226,  777 => 225,  774 => 222,  772 => 221,  769 => 220,  766 => 219,  763 => 216,  760 => 215,  756 => 214,  749 => 210,  744 => 208,  739 => 206,  731 => 203,  728 => 202,  724 => 201,  716 => 197,  712 => 195,  708 => 194,  703 => 227,  701 => 214,  698 => 213,  696 => 201,  693 => 200,  691 => 194,  688 => 193,  684 => 192,  680 => 186,  677 => 185,  674 => 182,  671 => 181,  667 => 180,  663 => 178,  658 => 175,  656 => 173,  652 => 171,  649 => 170,  645 => 169,  640 => 166,  636 => 164,  634 => 162,  629 => 161,  626 => 160,  622 => 158,  620 => 157,  616 => 156,  611 => 154,  603 => 151,  600 => 150,  596 => 149,  588 => 145,  584 => 143,  580 => 142,  575 => 187,  573 => 180,  570 => 179,  568 => 169,  565 => 168,  563 => 149,  560 => 148,  558 => 142,  555 => 141,  551 => 140,  547 => 135,  544 => 134,  541 => 131,  539 => 130,  536 => 129,  533 => 128,  530 => 125,  527 => 124,  523 => 123,  516 => 119,  511 => 117,  506 => 115,  498 => 112,  495 => 111,  491 => 110,  483 => 106,  479 => 104,  475 => 103,  471 => 136,  469 => 123,  466 => 122,  464 => 110,  461 => 109,  458 => 103,  454 => 102,  450 => 97,  447 => 96,  444 => 93,  441 => 92,  437 => 91,  432 => 88,  428 => 86,  426 => 85,  422 => 84,  417 => 82,  409 => 79,  406 => 78,  402 => 77,  394 => 73,  390 => 71,  386 => 70,  382 => 98,  380 => 91,  377 => 90,  375 => 77,  372 => 76,  369 => 70,  365 => 69,  361 => 66,  359 => 64,  357 => 62,  353 => 61,  349 => 59,  347 => 57,  345 => 55,  341 => 54,  337 => 255,  335 => 231,  332 => 230,  329 => 229,  326 => 192,  324 => 191,  321 => 190,  318 => 189,  315 => 140,  313 => 139,  310 => 138,  307 => 137,  304 => 102,  302 => 101,  299 => 100,  296 => 99,  293 => 69,  291 => 68,  288 => 67,  286 => 61,  283 => 60,  280 => 54,  276 => 53,  271 => 256,  269 => 53,  266 => 52,  262 => 51,  256 => 48,  248 => 42,  244 => 41,  240 => 39,  234 => 35,  231 => 34,  227 => 33,  221 => 30,  214 => 26,  210 => 24,  206 => 23,  199 => 20,  195 => 19,  190 => 372,  188 => 364,  185 => 363,  183 => 358,  180 => 357,  178 => 354,  175 => 353,  173 => 350,  170 => 349,  168 => 259,  165 => 258,  163 => 51,  160 => 50,  158 => 41,  155 => 40,  153 => 33,  150 => 32,  148 => 23,  145 => 22,  143 => 19,  133 => 13,  129 => 12,  125 => 10,  119 => 7,  116 => 6,  113 => 5,  109 => 4,  103 => 374,  101 => 12,  98 => 11,  96 => 4,  92 => 2,  85 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/account/register.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/account/register.html.twig");
    }
}
