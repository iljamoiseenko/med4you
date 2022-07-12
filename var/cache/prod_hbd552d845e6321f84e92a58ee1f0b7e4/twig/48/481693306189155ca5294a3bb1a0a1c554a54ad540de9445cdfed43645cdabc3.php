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

/* @Storefront/storefront/component/address/address-personal.html.twig */
class __TwigTemplate_8c970ad09dac8af97f05479311903ae078f67de0c5b99a4f0147d51cf1f4ac14 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_address_personal_fields' => [$this, 'block_component_address_personal_fields'],
            'component_address_personal_account_type' => [$this, 'block_component_address_personal_account_type'],
            'component_address_personal_account_type_label' => [$this, 'block_component_address_personal_account_type_label'],
            'component_address_personal_account_type_select' => [$this, 'block_component_address_personal_account_type_select'],
            'component_address_personal_account_type_error' => [$this, 'block_component_address_personal_account_type_error'],
            'component_address_personal_fields_salutation_title' => [$this, 'block_component_address_personal_fields_salutation_title'],
            'component_address_personal_fields_salutation' => [$this, 'block_component_address_personal_fields_salutation'],
            'component_address_personal_fields_salutation_label' => [$this, 'block_component_address_personal_fields_salutation_label'],
            'component_address_form_salutation_select' => [$this, 'block_component_address_form_salutation_select'],
            'component_address_form_salutation_select_error' => [$this, 'block_component_address_form_salutation_select_error'],
            'component_address_personal_fields_title' => [$this, 'block_component_address_personal_fields_title'],
            'component_address_personal_fields_title_label' => [$this, 'block_component_address_personal_fields_title_label'],
            'component_address_personal_fields_title_input' => [$this, 'block_component_address_personal_fields_title_input'],
            'component_address_personal_fields_name' => [$this, 'block_component_address_personal_fields_name'],
            'component_address_personal_fields_first_name' => [$this, 'block_component_address_personal_fields_first_name'],
            'component_address_personal_fields_first_name_label' => [$this, 'block_component_address_personal_fields_first_name_label'],
            'component_address_personal_fields_first_name_input' => [$this, 'block_component_address_personal_fields_first_name_input'],
            'component_address_personal_fields_first_name_input_error' => [$this, 'block_component_address_personal_fields_first_name_input_error'],
            'component_address_personal_fields_last_name' => [$this, 'block_component_address_personal_fields_last_name'],
            'component_address_personal_fields_last_name_label' => [$this, 'block_component_address_personal_fields_last_name_label'],
            'component_address_personal_fields_last_name_input' => [$this, 'block_component_address_personal_fields_last_name_input'],
            'component_address_personal_fields_last_name_input_error' => [$this, 'block_component_address_personal_fields_last_name_input_error'],
            'component_address_personal_company' => [$this, 'block_component_address_personal_company'],
            'component_address_personal_company_fields' => [$this, 'block_component_address_personal_company_fields'],
            'component_address_personal_company_name' => [$this, 'block_component_address_personal_company_name'],
            'component_address_personal_company_name_label' => [$this, 'block_component_address_personal_company_name_label'],
            'component_address_personal_company_name_input' => [$this, 'block_component_address_personal_company_name_input'],
            'component_address_personal_company_name_input_error' => [$this, 'block_component_address_personal_company_name_input_error'],
            'component_address_personal_vat_id' => [$this, 'block_component_address_personal_vat_id'],
            'component_address_personal_vat_id_fields' => [$this, 'block_component_address_personal_vat_id_fields'],
            'component_address_personal_fields_birthday' => [$this, 'block_component_address_personal_fields_birthday'],
            'component_address_personal_fields_birthday_label' => [$this, 'block_component_address_personal_fields_birthday_label'],
            'component_address_personal_fields_birthday_selects' => [$this, 'block_component_address_personal_fields_birthday_selects'],
            'component_address_personal_fields_birthday_select_day' => [$this, 'block_component_address_personal_fields_birthday_select_day'],
            'component_address_personal_fields_birthday_select_day_error' => [$this, 'block_component_address_personal_fields_birthday_select_day_error'],
            'component_address_personal_fields_birthday_select_month' => [$this, 'block_component_address_personal_fields_birthday_select_month'],
            'component_address_personal_fields_birthday_select_month_error' => [$this, 'block_component_address_personal_fields_birthday_select_month_error'],
            'component_address_personal_fields_birthday_select_year' => [$this, 'block_component_address_personal_fields_birthday_select_year'],
            'component_address_personal_fields_birthday_select_year_error' => [$this, 'block_component_address_personal_fields_birthday_select_year_error'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $this->displayBlock('component_address_personal_fields', $context, $blocks);
    }

    public function block_component_address_personal_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    ";
        $this->displayBlock('component_address_personal_account_type', $context, $blocks);
        // line 75
        echo "
    ";
        // line 76
        $this->displayBlock('component_address_personal_fields_salutation_title', $context, $blocks);
        // line 144
        echo "
    ";
        // line 145
        $this->displayBlock('component_address_personal_fields_name', $context, $blocks);
        // line 220
        echo "
    ";
        // line 221
        $this->displayBlock('component_address_personal_company', $context, $blocks);
        // line 264
        echo "
    ";
        // line 265
        $this->displayBlock('component_address_personal_vat_id', $context, $blocks);
        // line 283
        echo "
    ";
        // line 284
        $this->displayBlock('component_address_personal_fields_birthday', $context, $blocks);
    }

    // line 3
    public function block_component_address_personal_account_type($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "        ";
        if ((($context["onlyCompanyRegistration"] ?? null) || ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showAccountTypeSelection") &&  !($context["hideCustomerTypeSelect"] ?? null)))) {
            // line 5
            echo "            <div class=\"";
            echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
            echo "\">
                <div class=\"form-group col-md-3 col-sm-6 contact-type\">
                    ";
            // line 7
            $this->displayBlock('component_address_personal_account_type_label', $context, $blocks);
            // line 13
            echo "
                    ";
            // line 14
            $this->displayBlock('component_address_personal_account_type_select', $context, $blocks);
            // line 66
            echo "
                    ";
            // line 67
            $this->displayBlock('component_address_personal_account_type_error', $context, $blocks);
            // line 69
            echo "                </div>
            </div>
        ";
        } elseif ( !        // line 71
($context["hideCustomerTypeSelect"] ?? null)) {
            // line 72
            echo "            <input type=\"hidden\" name=\"accountType\">
        ";
        }
        // line 74
        echo "    ";
    }

    // line 7
    public function block_component_address_personal_account_type_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 9
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "accountType\">
                            ";
        // line 10
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTypeLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
    }

    // line 14
    public function block_component_address_personal_account_type_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                            ";
        if ((($context["onlyCompanyRegistration"] ?? null) || $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showAccountTypeSelection"))) {
            // line 16
            echo "                                <select name=\"";
            if (($context["prefix"] ?? null)) {
                echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
                echo "[accountType]";
            } else {
                echo "accountType";
            }
            echo "\"
                                    id=\"";
            // line 17
            echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
            echo "accountType\"
                                    ";
            // line 18
            if (($context["onlyCompanyRegistration"] ?? null)) {
                echo "disabled";
            }
            // line 19
            echo "                                    required=\"required\"
                                    class=\"";
            // line 20
            echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
            echo " contact-select\"
                                    data-form-field-toggle=\"true\"
                                    data-form-field-toggle-target=\".js-field-toggle-contact-type-company";
            // line 22
            if (($context["customToggleTarget"] ?? null)) {
                echo "-";
                echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            }
            echo "\"
                                    data-form-field-toggle-value=\"";
            // line 23
            echo sw_escape_filter($this->env, twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_BUSINESS"), "html", null, true);
            echo "\"
                                    data-form-field-toggle-scope=\"";
            // line 24
            if ((0 === twig_compare(($context["scope"] ?? null), "parent"))) {
                echo "parent";
            } else {
                echo "all";
            }
            echo "\"
                                    ";
            // line 25
            if ((0 === twig_compare(($context["scope"] ?? null), "parent"))) {
                echo "data-form-field-toggle-parent-selector=";
                echo sw_escape_filter($this->env, ($context["parentSelector"] ?? null), "html", null, true);
            }
            // line 26
            echo "                                >
                            ";
        }
        // line 28
        echo "
                            ";
        // line 29
        $context["isCompany"] = false;
        // line 30
        echo "
                            ";
        // line 31
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "address", [], "any", false, false, false, 31), "company", [], "any", false, false, false, 31) ||  !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "company", [], "any", false, false, false, 31)))) {
            // line 32
            echo "                                ";
            $context["isCompany"] = true;
            // line 33
            echo "                            ";
        }
        // line 34
        echo "
                            ";
        // line 35
        if ((($context["onlyCompanyRegistration"] ?? null) || (($context["accountType"] ?? null) && (0 === twig_compare(($context["accountType"] ?? null), twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_BUSINESS")))))) {
            // line 36
            echo "                                ";
            $context["isCompany"] = true;
            // line 37
            echo "                            ";
        }
        // line 38
        echo "
                            ";
        // line 39
        $context["isLoginPage"] = false;
        // line 40
        echo "                            ";
        if ((0 === twig_compare(($context["activeRoute"] ?? null), "frontend.account.login.page"))) {
            // line 41
            echo "                                ";
            $context["isLoginPage"] = true;
            // line 42
            echo "                            ";
        }
        // line 43
        echo "
                            ";
        // line 44
        if (($context["isLoginPage"] ?? null)) {
            // line 45
            echo "                                <option disabled=\"disabled\"
                                        selected=\"selected\"
                                        value=\"\">
                                    ";
            // line 48
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTypeLabel"));
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
            echo "
                                </option>
                            ";
        }
        // line 51
        echo "
                            ";
        // line 52
        if ( !($context["onlyCompanyRegistration"] ?? null)) {
            // line 53
            echo "                                <option value=\"";
            echo sw_escape_filter($this->env, twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_PRIVATE"), "html", null, true);
            echo "\"
                                    ";
            // line 54
            if (((0 === twig_compare(($context["isCompany"] ?? null), false)) && (0 === twig_compare(($context["isLoginPage"] ?? null), false)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                    ";
            // line 55
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTypePrivate"));
            echo "
                                </option>
                            ";
        }
        // line 58
        echo "
                            <option value=\"";
        // line 59
        echo sw_escape_filter($this->env, twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_BUSINESS"), "html", null, true);
        echo "\"
                                ";
        // line 60
        if (((0 === twig_compare(($context["isCompany"] ?? null), true)) && (0 === twig_compare(($context["isLoginPage"] ?? null), false)))) {
            echo " selected=\"selected\"";
        }
        echo ">
                                ";
        // line 61
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTypeBusiness"));
        echo "
                            </option>
                        </select>
                        ";
        // line 64
        if (($context["onlyCompanyRegistration"] ?? null)) {
            echo "<input type=\"hidden\" name=\"accountType\" value=\"";
            echo sw_escape_filter($this->env, twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_BUSINESS"), "html", null, true);
            echo "\">";
        }
        // line 65
        echo "                    ";
    }

    // line 67
    public function block_component_address_personal_account_type_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "                    ";
    }

    // line 76
    public function block_component_address_personal_fields_salutation_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "        <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 78
        $this->displayBlock('component_address_personal_fields_salutation', $context, $blocks);
        // line 119
        echo "
            ";
        // line 120
        $this->displayBlock('component_address_personal_fields_title', $context, $blocks);
        // line 142
        echo "        </div>
    ";
    }

    // line 78
    public function block_component_address_personal_fields_salutation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "                <div class=\"form-group col-md-3 col-sm-6\">
                    ";
        // line 80
        $this->displayBlock('component_address_personal_fields_salutation_label', $context, $blocks);
        // line 86
        echo "
                    ";
        // line 87
        $this->displayBlock('component_address_form_salutation_select', $context, $blocks);
        // line 109
        echo "
                    ";
        // line 110
        $this->displayBlock('component_address_form_salutation_select_error', $context, $blocks);
        // line 117
        echo "                </div>
            ";
    }

    // line 80
    public function block_component_address_personal_fields_salutation_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 82
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalSalutation\">
                            ";
        // line 83
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalSalutationLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
    }

    // line 87
    public function block_component_address_form_salutation_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "                        <select id=\"";
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalSalutation\"
                                class=\"";
        // line 89
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/salutationId"], "method", false, false, false, 89))) {
            echo " is-invalid";
        }
        echo "\"
                                name=\"";
        // line 90
        if (($context["prefix"] ?? null)) {
            echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[salutationId]";
        } else {
            echo "salutationId";
        }
        echo "\"
                                required=\"required\">
                            ";
        // line 92
        if ( !sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "salutationId"], "method", false, false, false, 92)) {
            // line 93
            echo "                                <option disabled=\"disabled\"
                                        selected=\"selected\"
                                        value=\"\">
                                    ";
            // line 96
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalSalutationPlaceholder"));
            echo "
                                </option>
                            ";
        }
        // line 99
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "salutations", [], "any", false, false, false, 99));
        foreach ($context['_seq'] as $context["_key"] => $context["salutation"]) {
            // line 100
            echo "                                <option ";
            if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, $context["salutation"], "id", [], "any", false, false, false, 100), sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "salutationId"], "method", false, false, false, 100)))) {
                // line 101
                echo "                                    selected=\"selected\"
                                ";
            }
            // line 103
            echo "                                        value=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["salutation"], "id", [], "any", false, false, false, 103), "html", null, true);
            echo "\">
                                    ";
            // line 104
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["salutation"], "translated", [], "any", false, false, false, 104), "displayName", [], "any", false, false, false, 104), "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salutation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                        </select>
                    ";
    }

    // line 110
    public function block_component_address_form_salutation_select_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "                        ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/salutationId"], "method", false, false, false, 111))) {
            // line 112
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 112)->display(twig_array_merge($context, ["violationPath" => "/salutationId"]));
            // line 115
            echo "                        ";
        }
        // line 116
        echo "                    ";
    }

    // line 120
    public function block_component_address_personal_fields_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "                ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showTitleField")) {
            // line 122
            echo "                    <div class=\"form-group col-md-3 col-sm-6\">
                        ";
            // line 123
            $this->displayBlock('component_address_personal_fields_title_label', $context, $blocks);
            // line 129
            echo "
                        ";
            // line 130
            $this->displayBlock('component_address_personal_fields_title_input', $context, $blocks);
            // line 139
            echo "                    </div>
                ";
        }
        // line 141
        echo "            ";
    }

    // line 123
    public function block_component_address_personal_fields_title_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        echo "                            <label class=\"form-label\"
                                   for=\"";
        // line 125
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalTitle\">
                                ";
        // line 126
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTitleLabel"));
        echo "
                            </label>
                        ";
    }

    // line 130
    public function block_component_address_personal_fields_title_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "                            <input type=\"text\"
                                   class=\"form-control\"
                                   autocomplete=\"section-personal title\"
                                   id=\"";
        // line 134
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalTitle\"
                                   placeholder=\"";
        // line 135
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTitlePlaceholder")), "html", null, true);
        echo "\"
                                   name=\"";
        // line 136
        if (($context["prefix"] ?? null)) {
            echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[title]";
        } else {
            echo "title";
        }
        echo "\"
                                   value=\"";
        // line 137
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "title"], "method", false, false, false, 137), "html", null, true);
        echo "\">
                        ";
    }

    // line 145
    public function block_component_address_personal_fields_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        echo "        <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 147
        $this->displayBlock('component_address_personal_fields_first_name', $context, $blocks);
        // line 182
        echo "
            ";
        // line 183
        $this->displayBlock('component_address_personal_fields_last_name', $context, $blocks);
        // line 218
        echo "        </div>
    ";
    }

    // line 147
    public function block_component_address_personal_fields_first_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "                <div class=\"form-group col-sm-6\">
                    ";
        // line 149
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/firstName"], "method", false, false, false, 149))) {
            // line 150
            echo "                        ";
            $context["violationPath"] = "/firstName";
            // line 151
            echo "                    ";
        } else {
            // line 152
            echo "                        ";
            $context["requiredMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("error.VIOLATION::IS_BLANK_ERROR", ["%field%" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalFirstNameLabel"))]);
            // line 153
            echo "                    ";
        }
        // line 154
        echo "
                    ";
        // line 155
        $this->displayBlock('component_address_personal_fields_first_name_label', $context, $blocks);
        // line 161
        echo "
                    ";
        // line 162
        $this->displayBlock('component_address_personal_fields_first_name_input', $context, $blocks);
        // line 174
        echo "
                    ";
        // line 175
        $this->displayBlock('component_address_personal_fields_first_name_input_error', $context, $blocks);
        // line 180
        echo "                </div>
            ";
    }

    // line 155
    public function block_component_address_personal_fields_first_name_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 156
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 157
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalFirstName\">
                            ";
        // line 158
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalFirstNameLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
    }

    // line 162
    public function block_component_address_personal_fields_first_name_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 163
        echo "                        <input type=\"text\"
                               class=\"form-control";
        // line 164
        if ( !twig_test_empty(($context["violationPath"] ?? null))) {
            echo " is-invalid";
        }
        echo "\"
                               autocomplete=\"section-personal given-name\"
                               id=\"";
        // line 166
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalFirstName\"
                               placeholder=\"";
        // line 167
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalFirstNamePlaceholder")), "html", null, true);
        echo "\"
                               name=\"";
        // line 168
        if (($context["prefix"] ?? null)) {
            echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[firstName]";
        } else {
            echo "firstName";
        }
        echo "\"
                               value=\"";
        // line 169
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "firstName"], "method", false, false, false, 169), "html", null, true);
        echo "\"
                               data-form-validation-required
                               ";
        // line 171
        if (array_key_exists("requiredMessage", $context)) {
            echo "data-form-validation-required-message=\"";
            echo sw_escape_filter($this->env, ($context["requiredMessage"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 172
        echo "                               required=\"required\">
                    ";
    }

    // line 175
    public function block_component_address_personal_fields_first_name_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 176
        echo "                        ";
        if (($context["violationPath"] ?? null)) {
            // line 177
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 177)->display($context);
            // line 178
            echo "                        ";
        }
        // line 179
        echo "                    ";
    }

    // line 183
    public function block_component_address_personal_fields_last_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 184
        echo "                <div class=\"form-group col-sm-6\">
                    ";
        // line 185
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/lastName"], "method", false, false, false, 185))) {
            // line 186
            echo "                        ";
            $context["violationPath"] = "/lastName";
            // line 187
            echo "                    ";
        } else {
            // line 188
            echo "                        ";
            $context["requiredMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("error.VIOLATION::IS_BLANK_ERROR", ["%field%" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalLastNameLabel"))]);
            // line 189
            echo "                    ";
        }
        // line 190
        echo "
                    ";
        // line 191
        $this->displayBlock('component_address_personal_fields_last_name_label', $context, $blocks);
        // line 197
        echo "
                    ";
        // line 198
        $this->displayBlock('component_address_personal_fields_last_name_input', $context, $blocks);
        // line 210
        echo "
                    ";
        // line 211
        $this->displayBlock('component_address_personal_fields_last_name_input_error', $context, $blocks);
        // line 216
        echo "                </div>
            ";
    }

    // line 191
    public function block_component_address_personal_fields_last_name_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 192
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 193
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalLastName\">
                            ";
        // line 194
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalLastNameLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
    }

    // line 198
    public function block_component_address_personal_fields_last_name_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 199
        echo "                        <input type=\"text\"
                               class=\"form-control";
        // line 200
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                               autocomplete=\"section-personal family-name\"
                               id=\"";
        // line 202
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalLastName\"
                               placeholder=\"";
        // line 203
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalLastNamePlaceholder")), "html", null, true);
        echo "\"
                               name=\"";
        // line 204
        if (($context["prefix"] ?? null)) {
            echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[lastName]";
        } else {
            echo "lastName";
        }
        echo "\"
                               value=\"";
        // line 205
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "lastName"], "method", false, false, false, 205), "html", null, true);
        echo "\"
                               data-form-validation-required
                               ";
        // line 207
        if (array_key_exists("requiredMessage", $context)) {
            echo "data-form-validation-required-message=\"";
            echo sw_escape_filter($this->env, ($context["requiredMessage"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 208
        echo "                               required=\"required\">
                    ";
    }

    // line 211
    public function block_component_address_personal_fields_last_name_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 212
        echo "                        ";
        if (($context["violationPath"] ?? null)) {
            // line 213
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 213)->display($context);
            // line 214
            echo "                        ";
        }
        // line 215
        echo "                    ";
    }

    // line 221
    public function block_component_address_personal_company($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 222
        echo "        ";
        if (((($context["onlyCompanyRegistration"] ?? null) || $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showAccountTypeSelection")) && (0 === twig_compare(($context["activeRoute"] ?? null), "frontend.account.profile.page")))) {
            // line 223
            echo "            <div class=\"js-field-toggle-contact-type-company";
            if (($context["customToggleTarget"] ?? null)) {
                echo "-";
                echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            }
            echo "\">
                ";
            // line 224
            $this->displayBlock('component_address_personal_company_fields', $context, $blocks);
            // line 261
            echo "            </div>
        ";
        }
        // line 263
        echo "    ";
    }

    // line 224
    public function block_component_address_personal_company_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 225
        echo "                    <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                        ";
        // line 226
        $this->displayBlock('component_address_personal_company_name', $context, $blocks);
        // line 259
        echo "                    </div>
                ";
    }

    // line 226
    public function block_component_address_personal_company_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 227
        echo "                            <div class=\"form-group col-12\">
                                ";
        // line 228
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/company"], "method", false, false, false, 228))) {
            // line 229
            echo "                                    ";
            $context["violationPath"] = "/company";
            // line 230
            echo "                                ";
        } else {
            // line 231
            echo "                                    ";
            $context["requiredMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("error.VIOLATION::IS_BLANK_ERROR", ["%field%" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNameLabel"))]);
            // line 232
            echo "                                ";
        }
        // line 233
        echo "
                                ";
        // line 234
        $this->displayBlock('component_address_personal_company_name_label', $context, $blocks);
        // line 239
        echo "
                                ";
        // line 240
        $this->displayBlock('component_address_personal_company_name_input', $context, $blocks);
        // line 251
        echo "
                                ";
        // line 252
        $this->displayBlock('component_address_personal_company_name_input_error', $context, $blocks);
        // line 257
        echo "                            </div>
                        ";
    }

    // line 234
    public function block_component_address_personal_company_name_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 235
        echo "                                    <label class=\"form-label\" for=\"";
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "company\">
                                        ";
        // line 236
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNameLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                    </label>
                                ";
    }

    // line 240
    public function block_component_address_personal_company_name_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 241
        echo "                                    <input type=\"text\"
                                           class=\"form-control";
        // line 242
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                           id=\"";
        // line 243
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "company\"
                                           placeholder=\"";
        // line 244
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNamePlaceholder")), "html", null, true);
        echo "\"
                                           name=\"company\"
                                           value=\"";
        // line 246
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "company"], "method", false, false, false, 246), "html", null, true);
        echo "\"
                                           data-form-validation-required
                                           ";
        // line 248
        if (array_key_exists("requiredMessage", $context)) {
            echo "data-form-validation-required-message=\"";
            echo sw_escape_filter($this->env, ($context["requiredMessage"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 249
        echo "                                           required=\"required\">
                                ";
    }

    // line 252
    public function block_component_address_personal_company_name_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 253
        echo "                                    ";
        if (($context["violationPath"] ?? null)) {
            // line 254
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 254)->display($context);
            // line 255
            echo "                                    ";
        }
        // line 256
        echo "                                ";
    }

    // line 265
    public function block_component_address_personal_vat_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 266
        echo "        ";
        if (($context["showVatIdField"] ?? null)) {
            // line 267
            echo "            ";
            if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showAccountTypeSelection") || ($context["onlyCompanyRegistration"] ?? null))) {
                // line 268
                echo "                <div class=\"js-field-toggle-contact-type-company";
                if (($context["customToggleTarget"] ?? null)) {
                    echo "-";
                    echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
                }
                echo " js-field-toggle-contact-type-vat-id\">
                    ";
                // line 269
                $this->displayBlock('component_address_personal_vat_id_fields', $context, $blocks);
                // line 279
                echo "                </div>
            ";
            }
            // line 281
            echo "        ";
        }
        // line 282
        echo "    ";
    }

    // line 269
    public function block_component_address_personal_vat_id_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 270
        echo "                        <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                            <div class=\"form-group col-12\">
                                ";
        // line 272
        $this->loadTemplate("@Storefront/storefront/component/address/address-personal-vat-id.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 272)->display(twig_array_merge($context, ["vatIds" => sw_get_attribute($this->env, $this->source,         // line 273
($context["data"] ?? null), "get", [0 => "vatIds"], "method", false, false, false, 273), "editMode" => true]));
        // line 276
        echo "                            </div>
                        </div>
                    ";
    }

    // line 284
    public function block_component_address_personal_fields_birthday($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 285
        echo "        ";
        if (($context["showBirthdayField"] ?? null)) {
            // line 286
            echo "            ";
            $this->displayBlock('component_address_personal_fields_birthday_label', $context, $blocks);
            // line 291
            echo "
            ";
            // line 292
            $this->displayBlock('component_address_personal_fields_birthday_selects', $context, $blocks);
            // line 386
            echo "        ";
        }
        // line 387
        echo "    ";
    }

    // line 286
    public function block_component_address_personal_fields_birthday_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 287
        echo "                <label for=\"";
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalBirthday\">
                    ";
        // line 288
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdayLabel"));
        echo (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.birthdayFieldRequired")) ? ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"))) : (""));
        echo "
                </label>
            ";
    }

    // line 292
    public function block_component_address_personal_fields_birthday_selects($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 293
        echo "                <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 294
        $this->displayBlock('component_address_personal_fields_birthday_select_day', $context, $blocks);
        // line 323
        echo "
                    ";
        // line 324
        $this->displayBlock('component_address_personal_fields_birthday_select_month', $context, $blocks);
        // line 352
        echo "
                    ";
        // line 353
        $this->displayBlock('component_address_personal_fields_birthday_select_year', $context, $blocks);
        // line 384
        echo "                </div>
            ";
    }

    // line 294
    public function block_component_address_personal_fields_birthday_select_day($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 295
        echo "                        <div class=\"form-group col-md-2 col-4\">
                            <select id=\"";
        // line 296
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalBirthday\"
                                    name=\"";
        // line 297
        if (($context["prefix"] ?? null)) {
            echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[birthdayDay]";
        } else {
            echo "birthdayDay";
        }
        echo "\"
                                    class=\"";
        // line 298
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayDay"], "method", false, false, false, 298))) {
            echo " is-invalid";
        }
        echo "\"
                                    ";
        // line 299
        echo (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.birthdayFieldRequired")) ? ("required=\"required\"") : (""));
        echo ">
                                ";
        // line 300
        if ( !sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayDay"], "method", false, false, false, 300)) {
            // line 301
            echo "                                    <option selected=\"selected\"
                                            value=\"\">
                                        ";
            // line 303
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdaySelectDay"));
            echo "
                                    </option>
                                ";
        }
        // line 306
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 307
            echo "                                    <option value=\"";
            echo sw_escape_filter($this->env, $context["day"], "html", null, true);
            echo "\"
                                            ";
            // line 308
            if ((0 === twig_compare($context["day"], sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayDay"], "method", false, false, false, 308)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                        ";
            // line 309
            echo sw_escape_filter($this->env, $context["day"], "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 312
        echo "                            </select>

                            ";
        // line 314
        $this->displayBlock('component_address_personal_fields_birthday_select_day_error', $context, $blocks);
        // line 321
        echo "                        </div>
                    ";
    }

    // line 314
    public function block_component_address_personal_fields_birthday_select_day_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 315
        echo "                                ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayDay"], "method", false, false, false, 315))) {
            // line 316
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 316)->display(twig_array_merge($context, ["violationPath" => "/birthdayDay"]));
            // line 319
            echo "                                ";
        }
        // line 320
        echo "                            ";
    }

    // line 324
    public function block_component_address_personal_fields_birthday_select_month($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 325
        echo "                        <div class=\"form-group col-md-2 col-4\">
                            <select name=\"";
        // line 326
        if (($context["prefix"] ?? null)) {
            echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[birthdayMonth]";
        } else {
            echo "birthdayMonth";
        }
        echo "\"
                                    class=\"";
        // line 327
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayMonth"], "method", false, false, false, 327))) {
            echo " is-invalid";
        }
        echo "\"
                                    ";
        // line 328
        echo (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.birthdayFieldRequired")) ? ("required=\"required\"") : (""));
        echo ">
                                ";
        // line 329
        if ( !sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayMonth"], "method", false, false, false, 329)) {
            // line 330
            echo "                                    <option selected=\"selected\"
                                            value=\"\">
                                        ";
            // line 332
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdaySelectMonth"));
            echo "
                                    </option>
                                ";
        }
        // line 335
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 336
            echo "                                    <option value=\"";
            echo sw_escape_filter($this->env, $context["month"], "html", null, true);
            echo "\"
                                            ";
            // line 337
            if ((0 === twig_compare($context["month"], sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayMonth"], "method", false, false, false, 337)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                        ";
            // line 338
            echo sw_escape_filter($this->env, $context["month"], "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 341
        echo "                            </select>

                            ";
        // line 343
        $this->displayBlock('component_address_personal_fields_birthday_select_month_error', $context, $blocks);
        // line 350
        echo "                        </div>
                    ";
    }

    // line 343
    public function block_component_address_personal_fields_birthday_select_month_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 344
        echo "                                ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayMonth"], "method", false, false, false, 344))) {
            // line 345
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 345)->display(twig_array_merge($context, ["violationPath" => "/birthdayMonth"]));
            // line 348
            echo "                                ";
        }
        // line 349
        echo "                            ";
    }

    // line 353
    public function block_component_address_personal_fields_birthday_select_year($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 354
        echo "                        <div class=\"form-group col-md-2 col-4\">
                            ";
        // line 355
        $context["currentYear"] = twig_date_format_filter($this->env, "now", "Y");
        // line 356
        echo "                            ";
        $context["startYear"] = (($context["currentYear"] ?? null) - 120);
        // line 357
        echo "
                            <select name=\"";
        // line 358
        if (($context["prefix"] ?? null)) {
            echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[birthdayYear]";
        } else {
            echo "birthdayYear";
        }
        echo "\"
                                    class=\"";
        // line 359
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayYear"], "method", false, false, false, 359))) {
            echo " is-invalid";
        }
        echo "\"
                                    ";
        // line 360
        echo (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.birthdayFieldRequired")) ? ("required=\"required\"") : (""));
        echo ">
                                ";
        // line 361
        if ( !sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayYear"], "method", false, false, false, 361)) {
            // line 362
            echo "                                    <option selected=\"selected\"
                                            value=\"\">
                                        ";
            // line 364
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdaySelectYear"));
            echo "
                                    </option>
                                ";
        }
        // line 367
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["currentYear"] ?? null), ($context["startYear"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 368
            echo "                                    <option value=\"";
            echo sw_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\"
                                            ";
            // line 369
            if ((0 === twig_compare($context["year"], sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayYear"], "method", false, false, false, 369)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                        ";
            // line 370
            echo sw_escape_filter($this->env, $context["year"], "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 373
        echo "                            </select>

                            ";
        // line 375
        $this->displayBlock('component_address_personal_fields_birthday_select_year_error', $context, $blocks);
        // line 382
        echo "                        </div>
                    ";
    }

    // line 375
    public function block_component_address_personal_fields_birthday_select_year_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 376
        echo "                                ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayYear"], "method", false, false, false, 376))) {
            // line 377
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 377)->display(twig_array_merge($context, ["violationPath" => "/birthdayYear"]));
            // line 380
            echo "                                ";
        }
        // line 381
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/address/address-personal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1397 => 381,  1394 => 380,  1391 => 377,  1388 => 376,  1384 => 375,  1379 => 382,  1377 => 375,  1373 => 373,  1364 => 370,  1358 => 369,  1353 => 368,  1348 => 367,  1342 => 364,  1338 => 362,  1336 => 361,  1332 => 360,  1325 => 359,  1316 => 358,  1313 => 357,  1310 => 356,  1308 => 355,  1305 => 354,  1301 => 353,  1297 => 349,  1294 => 348,  1291 => 345,  1288 => 344,  1284 => 343,  1279 => 350,  1277 => 343,  1273 => 341,  1264 => 338,  1258 => 337,  1253 => 336,  1248 => 335,  1242 => 332,  1238 => 330,  1236 => 329,  1232 => 328,  1225 => 327,  1216 => 326,  1213 => 325,  1209 => 324,  1205 => 320,  1202 => 319,  1199 => 316,  1196 => 315,  1192 => 314,  1187 => 321,  1185 => 314,  1181 => 312,  1172 => 309,  1166 => 308,  1161 => 307,  1156 => 306,  1150 => 303,  1146 => 301,  1144 => 300,  1140 => 299,  1133 => 298,  1124 => 297,  1120 => 296,  1117 => 295,  1113 => 294,  1108 => 384,  1106 => 353,  1103 => 352,  1101 => 324,  1098 => 323,  1096 => 294,  1091 => 293,  1087 => 292,  1079 => 288,  1074 => 287,  1070 => 286,  1066 => 387,  1063 => 386,  1061 => 292,  1058 => 291,  1055 => 286,  1052 => 285,  1048 => 284,  1042 => 276,  1040 => 273,  1039 => 272,  1033 => 270,  1029 => 269,  1025 => 282,  1022 => 281,  1018 => 279,  1016 => 269,  1008 => 268,  1005 => 267,  1002 => 266,  998 => 265,  994 => 256,  991 => 255,  988 => 254,  985 => 253,  981 => 252,  976 => 249,  970 => 248,  965 => 246,  960 => 244,  956 => 243,  950 => 242,  947 => 241,  943 => 240,  935 => 236,  930 => 235,  926 => 234,  921 => 257,  919 => 252,  916 => 251,  914 => 240,  911 => 239,  909 => 234,  906 => 233,  903 => 232,  900 => 231,  897 => 230,  894 => 229,  892 => 228,  889 => 227,  885 => 226,  880 => 259,  878 => 226,  873 => 225,  869 => 224,  865 => 263,  861 => 261,  859 => 224,  851 => 223,  848 => 222,  844 => 221,  840 => 215,  837 => 214,  834 => 213,  831 => 212,  827 => 211,  822 => 208,  816 => 207,  811 => 205,  802 => 204,  798 => 203,  794 => 202,  787 => 200,  784 => 199,  780 => 198,  772 => 194,  768 => 193,  765 => 192,  761 => 191,  756 => 216,  754 => 211,  751 => 210,  749 => 198,  746 => 197,  744 => 191,  741 => 190,  738 => 189,  735 => 188,  732 => 187,  729 => 186,  727 => 185,  724 => 184,  720 => 183,  716 => 179,  713 => 178,  710 => 177,  707 => 176,  703 => 175,  698 => 172,  692 => 171,  687 => 169,  678 => 168,  674 => 167,  670 => 166,  663 => 164,  660 => 163,  656 => 162,  648 => 158,  644 => 157,  641 => 156,  637 => 155,  632 => 180,  630 => 175,  627 => 174,  625 => 162,  622 => 161,  620 => 155,  617 => 154,  614 => 153,  611 => 152,  608 => 151,  605 => 150,  603 => 149,  600 => 148,  596 => 147,  591 => 218,  589 => 183,  586 => 182,  584 => 147,  579 => 146,  575 => 145,  569 => 137,  560 => 136,  556 => 135,  552 => 134,  547 => 131,  543 => 130,  536 => 126,  532 => 125,  529 => 124,  525 => 123,  521 => 141,  517 => 139,  515 => 130,  512 => 129,  510 => 123,  507 => 122,  504 => 121,  500 => 120,  496 => 116,  493 => 115,  490 => 112,  487 => 111,  483 => 110,  478 => 107,  469 => 104,  464 => 103,  460 => 101,  457 => 100,  452 => 99,  446 => 96,  441 => 93,  439 => 92,  429 => 90,  422 => 89,  417 => 88,  413 => 87,  405 => 83,  401 => 82,  398 => 81,  394 => 80,  389 => 117,  387 => 110,  384 => 109,  382 => 87,  379 => 86,  377 => 80,  374 => 79,  370 => 78,  365 => 142,  363 => 120,  360 => 119,  358 => 78,  353 => 77,  349 => 76,  345 => 68,  341 => 67,  337 => 65,  331 => 64,  325 => 61,  319 => 60,  315 => 59,  312 => 58,  306 => 55,  300 => 54,  295 => 53,  293 => 52,  290 => 51,  283 => 48,  278 => 45,  276 => 44,  273 => 43,  270 => 42,  267 => 41,  264 => 40,  262 => 39,  259 => 38,  256 => 37,  253 => 36,  251 => 35,  248 => 34,  245 => 33,  242 => 32,  240 => 31,  237 => 30,  235 => 29,  232 => 28,  228 => 26,  223 => 25,  215 => 24,  211 => 23,  204 => 22,  199 => 20,  196 => 19,  192 => 18,  188 => 17,  178 => 16,  175 => 15,  171 => 14,  163 => 10,  159 => 9,  156 => 8,  152 => 7,  148 => 74,  144 => 72,  142 => 71,  138 => 69,  136 => 67,  133 => 66,  131 => 14,  128 => 13,  126 => 7,  120 => 5,  117 => 4,  113 => 3,  109 => 284,  106 => 283,  104 => 265,  101 => 264,  99 => 221,  96 => 220,  94 => 145,  91 => 144,  89 => 76,  86 => 75,  83 => 3,  76 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/address/address-personal.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/address/address-personal.html.twig");
    }
}
