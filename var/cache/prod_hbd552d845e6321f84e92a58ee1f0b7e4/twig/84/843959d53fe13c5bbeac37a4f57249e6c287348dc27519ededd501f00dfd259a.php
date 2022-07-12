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

/* @Storefront/storefront/component/address/address-form.html.twig */
class __TwigTemplate_0baa665b7e1ade61eeb8aacc503da68adb2591cf50d7c3b47554857402015d37 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_address_form' => [$this, 'block_component_address_form'],
            'component_address_form_addressId' => [$this, 'block_component_address_form_addressId'],
            'component_address_form_company' => [$this, 'block_component_address_form_company'],
            'component_address_form_company_fields' => [$this, 'block_component_address_form_company_fields'],
            'component_address_form_company_name' => [$this, 'block_component_address_form_company_name'],
            'component_address_form_company_name_label' => [$this, 'block_component_address_form_company_name_label'],
            'component_address_form_company_name_input' => [$this, 'block_component_address_form_company_name_input'],
            'component_address_form_company_name_input_error' => [$this, 'block_component_address_form_company_name_input_error'],
            'component_address_form_company_department' => [$this, 'block_component_address_form_company_department'],
            'component_address_form_company_department_label' => [$this, 'block_component_address_form_company_department_label'],
            'component_address_form_company_department_input' => [$this, 'block_component_address_form_company_department_input'],
            'component_address_form_company_department_input_error' => [$this, 'block_component_address_form_company_department_input_error'],
            'component_address_form_company_vatId' => [$this, 'block_component_address_form_company_vatId'],
            'component_address_form_company_vatId_label' => [$this, 'block_component_address_form_company_vatId_label'],
            'component_address_form_company_vatId_input' => [$this, 'block_component_address_form_company_vatId_input'],
            'component_address_form_company_vatId_input_error' => [$this, 'block_component_address_form_company_vatId_input_error'],
            'component_address_form_address_fields' => [$this, 'block_component_address_form_address_fields'],
            'component_address_form_street' => [$this, 'block_component_address_form_street'],
            'component_address_form_street_label' => [$this, 'block_component_address_form_street_label'],
            'component_address_form_street_input' => [$this, 'block_component_address_form_street_input'],
            'component_address_form_street_input_error' => [$this, 'block_component_address_form_street_input_error'],
            'component_address_form_zipcode_city' => [$this, 'block_component_address_form_zipcode_city'],
            'component_address_form_zipcode_label' => [$this, 'block_component_address_form_zipcode_label'],
            'component_address_form_zipcode_input' => [$this, 'block_component_address_form_zipcode_input'],
            'component_address_form_zipcode_error' => [$this, 'block_component_address_form_zipcode_error'],
            'component_address_form_city_label' => [$this, 'block_component_address_form_city_label'],
            'component_address_form_city_input' => [$this, 'block_component_address_form_city_input'],
            'component_address_form_city_error' => [$this, 'block_component_address_form_city_error'],
            'component_address_form_additional_field1' => [$this, 'block_component_address_form_additional_field1'],
            'component_address_form_additional_field1_label' => [$this, 'block_component_address_form_additional_field1_label'],
            'component_address_form_additional_field1_input' => [$this, 'block_component_address_form_additional_field1_input'],
            'component_address_form_additional_field1_error' => [$this, 'block_component_address_form_additional_field1_error'],
            'component_address_form_additional_field2' => [$this, 'block_component_address_form_additional_field2'],
            'component_address_form_additional_field2_label' => [$this, 'block_component_address_form_additional_field2_label'],
            'component_address_form_additional_field2_input' => [$this, 'block_component_address_form_additional_field2_input'],
            'component_address_form_additional_field2_error' => [$this, 'block_component_address_form_additional_field2_error'],
            'component_address_form_country' => [$this, 'block_component_address_form_country'],
            'component_address_form_country_label' => [$this, 'block_component_address_form_country_label'],
            'component_address_form_country_select' => [$this, 'block_component_address_form_country_select'],
            'component_address_form_country_state_label' => [$this, 'block_component_address_form_country_state_label'],
            'component_address_form_country_state_select' => [$this, 'block_component_address_form_country_state_select'],
            'component_address_form_country_error' => [$this, 'block_component_address_form_country_error'],
            'component_address_form_phone_number' => [$this, 'block_component_address_form_phone_number'],
            'component_address_form_phone_number_label' => [$this, 'block_component_address_form_phone_number_label'],
            'component_address_form_phone_number_input' => [$this, 'block_component_address_form_phone_number_input'],
            'component_address_form_phone_error' => [$this, 'block_component_address_form_phone_error'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_address_form', $context, $blocks);
    }

    public function block_component_address_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $this->displayBlock('component_address_form_addressId', $context, $blocks);
        // line 9
        echo "
    ";
        // line 11
        echo "    ";
        if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_15957")) {
            // line 12
            echo "        ";
            $context["showVatIdField"] = false;
            // line 13
            echo "    ";
        }
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('component_address_form_company', $context, $blocks);
        // line 139
        echo "
    ";
        // line 140
        $this->displayBlock('component_address_form_address_fields', $context, $blocks);
    }

    // line 2
    public function block_component_address_form_addressId($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        ";
        if (sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "id"], "method", false, false, false, 3)) {
            // line 4
            echo "            <input type=\"hidden\"
                   name=\"";
            // line 5
            echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[id]\"
                   value=\"";
            // line 6
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "id"], "method", false, false, false, 6), "html", null, true);
            echo "\">
        ";
        }
        // line 8
        echo "    ";
    }

    // line 15
    public function block_component_address_form_company($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "        ";
        if (($context["showFormCompany"] ?? null)) {
            // line 17
            echo "            ";
            if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showAccountTypeSelection")) {
                // line 18
                echo "                ";
                $context["accountTypeRequired"] = true;
                // line 19
                echo "            ";
            }
            // line 20
            echo "
            ";
            // line 21
            if (((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showAccountTypeSelection") || (0 === twig_compare(($context["prefix"] ?? null), "address"))) || (0 === twig_compare(($context["prefix"] ?? null), "shippingAddress"))) || ($context["hasSelectedBusiness"] ?? null))) {
                // line 22
                echo "                <div class=\"";
                if (((0 === twig_compare(($context["prefix"] ?? null), "shippingAddress")) || ($context["hasSelectedBusiness"] ?? null))) {
                    echo "address-contact-type-company";
                } elseif ((0 === twig_compare(($context["prefix"] ?? null), "address"))) {
                    echo "js-field-toggle-contact-type-company d-block";
                } else {
                    echo "js-field-toggle-contact-type-company d-none";
                }
                echo "\">
                    ";
                // line 23
                $this->displayBlock('component_address_form_company_fields', $context, $blocks);
                // line 135
                echo "                </div>
            ";
            }
            // line 137
            echo "        ";
        }
        // line 138
        echo "    ";
    }

    // line 23
    public function block_component_address_form_company_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                        <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                            ";
        // line 25
        $this->displayBlock('component_address_form_company_name', $context, $blocks);
        // line 57
        echo "
                            ";
        // line 58
        $this->displayBlock('component_address_form_company_department', $context, $blocks);
        // line 89
        echo "
                            ";
        // line 90
        $this->displayBlock('component_address_form_company_vatId', $context, $blocks);
        // line 133
        echo "                        </div>
                    ";
    }

    // line 25
    public function block_component_address_form_company_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                                <div class=\"form-group col-6\">
                                    ";
        // line 27
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/company"], "method", false, false, false, 27))) {
            // line 28
            echo "                                        ";
            $context["violationPath"] = "/company";
            // line 29
            echo "                                    ";
        } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/company")], "method", false, false, false, 29))) {
            // line 30
            echo "                                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/company");
            // line 31
            echo "                                    ";
        }
        // line 32
        echo "
                                    ";
        // line 33
        $this->displayBlock('component_address_form_company_name_label', $context, $blocks);
        // line 39
        echo "
                                    ";
        // line 40
        $this->displayBlock('component_address_form_company_name_input', $context, $blocks);
        // line 49
        echo "
                                    ";
        // line 50
        $this->displayBlock('component_address_form_company_name_input_error', $context, $blocks);
        // line 55
        echo "                                </div>
                            ";
    }

    // line 33
    public function block_component_address_form_company_name_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                                        <label class=\"form-label\"
                                               for=\"";
        // line 35
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "company\">
                                            ";
        // line 36
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNameLabel"));
        if (((0 !== twig_compare(($context["prefix"] ?? null), "shippingAddress")) && ($context["accountTypeRequired"] ?? null))) {
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        }
        // line 37
        echo "                                        </label>
                                    ";
    }

    // line 40
    public function block_component_address_form_company_name_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                                        <input type=\"text\"
                                               class=\"form-control";
        // line 42
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                               id=\"";
        // line 43
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "company\"
                                               placeholder=\"";
        // line 44
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNamePlaceholder")), "html", null, true);
        echo "\"
                                               name=\"";
        // line 45
        echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[company]\"
                                               value=\"";
        // line 46
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "company"], "method", false, false, false, 46), "html", null, true);
        echo "\"
                                               ";
        // line 47
        if (((0 !== twig_compare(($context["prefix"] ?? null), "shippingAddress")) && ($context["accountTypeRequired"] ?? null))) {
            echo "required=\"required\"";
        }
        echo ">
                                    ";
    }

    // line 50
    public function block_component_address_form_company_name_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "                                        ";
        if (($context["violationPath"] ?? null)) {
            // line 52
            echo "                                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 52)->display($context);
            // line 53
            echo "                                        ";
        }
        // line 54
        echo "                                    ";
    }

    // line 58
    public function block_component_address_form_company_department($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "                                <div class=\"form-group col-md-6\">
                                    ";
        // line 60
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/department"], "method", false, false, false, 60))) {
            // line 61
            echo "                                        ";
            $context["violationPath"] = "/department";
            // line 62
            echo "                                    ";
        } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/department")], "method", false, false, false, 62))) {
            // line 63
            echo "                                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/department");
            // line 64
            echo "                                    ";
        }
        // line 65
        echo "
                                    ";
        // line 66
        $this->displayBlock('component_address_form_company_department_label', $context, $blocks);
        // line 72
        echo "
                                    ";
        // line 73
        $this->displayBlock('component_address_form_company_department_input', $context, $blocks);
        // line 81
        echo "
                                    ";
        // line 82
        $this->displayBlock('component_address_form_company_department_input_error', $context, $blocks);
        // line 87
        echo "                                </div>
                            ";
    }

    // line 66
    public function block_component_address_form_company_department_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "                                        <label class=\"form-label\"
                                               for=\"";
        // line 68
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "department\">
                                            ";
        // line 69
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyDepartmentLabel"));
        echo "
                                        </label>
                                    ";
    }

    // line 73
    public function block_component_address_form_company_department_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "                                        <input type=\"text\"
                                               class=\"form-control";
        // line 75
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                               id=\"";
        // line 76
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "department\"
                                               placeholder=\"";
        // line 77
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyDepartmentPlaceholder")), "html", null, true);
        echo "\"
                                               name=\"";
        // line 78
        echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[department]\"
                                               value=\"";
        // line 79
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "department"], "method", false, false, false, 79), "html", null, true);
        echo "\">
                                    ";
    }

    // line 82
    public function block_component_address_form_company_department_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "                                        ";
        if (($context["violationPath"] ?? null)) {
            // line 84
            echo "                                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 84)->display($context);
            // line 85
            echo "                                        ";
        }
        // line 86
        echo "                                    ";
    }

    // line 90
    public function block_component_address_form_company_vatId($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "                                ";
        if (( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_15957") && ($context["showVatIdField"] ?? null))) {
            // line 92
            echo "                                    <div class=\"form-group col-md-6\">
                                        ";
            // line 93
            if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/vatId"], "method", false, false, false, 93))) {
                // line 94
                echo "                                            ";
                $context["violationPath"] = "/vatId";
                // line 95
                echo "                                        ";
            } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/vatId")], "method", false, false, false, 95))) {
                // line 96
                echo "                                            ";
                $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/vatId");
                // line 97
                echo "                                        ";
            }
            // line 98
            echo "
                                        ";
            // line 100
            echo "                                        ";
            $this->displayBlock('component_address_form_company_vatId_label', $context, $blocks);
            // line 106
            echo "
                                        ";
            // line 108
            echo "                                        ";
            $this->displayBlock('component_address_form_company_vatId_input', $context, $blocks);
            // line 116
            echo "
                                        ";
            // line 118
            echo "                                        ";
            $this->displayBlock('component_address_form_company_vatId_input_error', $context, $blocks);
            // line 123
            echo "                                    </div>

                                ";
        } elseif ((($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_15957") && (0 === twig_compare(        // line 125
($context["prefix"] ?? null), "address"))) && ($context["showVatIdField"] ?? null))) {
            // line 126
            echo "                                    <div class=\"form-group col-md-6\">
                                        ";
            // line 127
            $this->loadTemplate("@Storefront/storefront/component/address/address-personal-vat-id.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 127)->display(twig_array_merge($context, ["vatIds" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 128
($context["context"] ?? null), "customer", [], "any", false, false, false, 128), "vatIds", [], "any", false, false, false, 128)]));
            // line 130
            echo "                                    </div>
                                ";
        }
        // line 132
        echo "                            ";
    }

    // line 100
    public function block_component_address_form_company_vatId_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "                                            <label class=\"form-label\"
                                                   for=\"";
        // line 102
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "vatId\">
                                                ";
        // line 103
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyVatLabel"));
        echo "
                                            </label>
                                        ";
    }

    // line 108
    public function block_component_address_form_company_vatId_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "                                            <input type=\"text\"
                                                   class=\"form-control";
        // line 110
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                                   id=\"";
        // line 111
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "vatId\"
                                                   placeholder=\"";
        // line 112
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyVatPlaceholder")), "html", null, true);
        echo "\"
                                                   name=\"";
        // line 113
        echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[vatId]\"
                                                   value=\"";
        // line 114
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "vatId"], "method", false, false, false, 114), "html", null, true);
        echo "\">
                                        ";
    }

    // line 118
    public function block_component_address_form_company_vatId_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        echo "                                            ";
        if (($context["violationPath"] ?? null)) {
            // line 120
            echo "                                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 120)->display($context);
            // line 121
            echo "                                            ";
        }
        // line 122
        echo "                                        ";
    }

    // line 140
    public function block_component_address_form_address_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "        <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 142
        $this->displayBlock('component_address_form_street', $context, $blocks);
        // line 178
        echo "
            ";
        // line 179
        $this->displayBlock('component_address_form_zipcode_city', $context, $blocks);
        // line 269
        echo "
            ";
        // line 270
        $this->displayBlock('component_address_form_additional_field1', $context, $blocks);
        // line 304
        echo "
            ";
        // line 305
        $this->displayBlock('component_address_form_additional_field2', $context, $blocks);
        // line 338
        echo "        </div>

        <div class=\"";
        // line 340
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo " country-and-state-form-elements\" data-country-state-select=\"true\">
            ";
        // line 341
        $this->displayBlock('component_address_form_country', $context, $blocks);
        // line 427
        echo "        </div>

        <div class=\"";
        // line 429
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 430
        $this->displayBlock('component_address_form_phone_number', $context, $blocks);
        // line 464
        echo "        </div>
    ";
    }

    // line 142
    public function block_component_address_form_street($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "                <div class=\"form-group col-md-6\">
                    ";
        // line 144
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/street"], "method", false, false, false, 144))) {
            // line 145
            echo "                        ";
            $context["violationPath"] = "/street";
            // line 146
            echo "                    ";
        } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/street")], "method", false, false, false, 146))) {
            // line 147
            echo "                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/street");
            // line 148
            echo "                    ";
        } else {
            // line 149
            echo "                        ";
            $context["requiredMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("error.VIOLATION::IS_BLANK_ERROR", ["%field%" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.streetLabel"))]);
            // line 150
            echo "                    ";
        }
        // line 151
        echo "
                    ";
        // line 152
        $this->displayBlock('component_address_form_street_label', $context, $blocks);
        // line 158
        echo "
                    ";
        // line 159
        $this->displayBlock('component_address_form_street_input', $context, $blocks);
        // line 170
        echo "
                    ";
        // line 171
        $this->displayBlock('component_address_form_street_input_error', $context, $blocks);
        // line 176
        echo "                </div>
            ";
    }

    // line 152
    public function block_component_address_form_street_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 154
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AddressStreet\">
                            ";
        // line 155
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.streetLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
    }

    // line 159
    public function block_component_address_form_street_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 160
        echo "                        <input type=\"text\"
                               class=\"form-control";
        // line 161
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                               id=\"";
        // line 162
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AddressStreet\"
                               placeholder=\"";
        // line 163
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.streetPlaceholder")), "html", null, true);
        echo "\"
                               name=\"";
        // line 164
        echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[street]\"
                               value=\"";
        // line 165
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "street"], "method", false, false, false, 165), "html", null, true);
        echo "\"
                               data-form-validation-required
                               ";
        // line 167
        if (array_key_exists("requiredMessage", $context)) {
            echo "data-form-validation-required-message=\"";
            echo sw_escape_filter($this->env, ($context["requiredMessage"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 168
        echo "                               required=\"required\">
                    ";
    }

    // line 171
    public function block_component_address_form_street_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 172
        echo "                        ";
        if (($context["violationPath"] ?? null)) {
            // line 173
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 173)->display($context);
            // line 174
            echo "                        ";
        }
        // line 175
        echo "                    ";
    }

    // line 179
    public function block_component_address_form_zipcode_city($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 180
        echo "                ";
        ob_start(function () { return ''; });
        // line 181
        echo "                    ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/zipcode"], "method", false, false, false, 181))) {
            // line 182
            echo "                        ";
            $context["violationPath"] = "/zipcode";
            // line 183
            echo "                    ";
        } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/zipcode")], "method", false, false, false, 183))) {
            // line 184
            echo "                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/zipcode");
            // line 185
            echo "                    ";
        } else {
            // line 186
            echo "                        ";
            $context["requiredMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("error.VIOLATION::IS_BLANK_ERROR", ["%field%" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.zipcodeLabel"))]);
            // line 187
            echo "                    ";
        }
        // line 188
        echo "
                    ";
        // line 189
        $this->displayBlock('component_address_form_zipcode_label', $context, $blocks);
        // line 195
        echo "
                    ";
        // line 196
        $this->displayBlock('component_address_form_zipcode_input', $context, $blocks);
        // line 207
        echo "
                    ";
        // line 208
        $this->displayBlock('component_address_form_zipcode_error', $context, $blocks);
        // line 213
        echo "                ";
        $context["zipcodeField"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 214
        echo "
                ";
        // line 215
        ob_start(function () { return ''; });
        // line 216
        echo "                    ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/city"], "method", false, false, false, 216))) {
            // line 217
            echo "                        ";
            $context["violationPath"] = "/city";
            // line 218
            echo "                    ";
        } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/city")], "method", false, false, false, 218))) {
            // line 219
            echo "                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/city");
            // line 220
            echo "                    ";
        } else {
            // line 221
            echo "                        ";
            $context["requiredMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("error.VIOLATION::IS_BLANK_ERROR", ["%field%" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.cityLabel"))]);
            // line 222
            echo "                        ";
            $context["violationPath"] = null;
            // line 223
            echo "                    ";
        }
        // line 224
        echo "
                    ";
        // line 225
        $this->displayBlock('component_address_form_city_label', $context, $blocks);
        // line 231
        echo "
                    ";
        // line 232
        $this->displayBlock('component_address_form_city_input', $context, $blocks);
        // line 243
        echo "
                    ";
        // line 244
        $this->displayBlock('component_address_form_city_error', $context, $blocks);
        // line 249
        echo "                ";
        $context["cityField"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 250
        echo "
                ";
        // line 251
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.address.showZipcodeInFrontOfCity")) {
            // line 252
            echo "                    <div class=\"form-group col-md-2 col-4\">
                        ";
            // line 253
            echo sw_escape_filter($this->env, ($context["zipcodeField"] ?? null), "html", null, true);
            echo "
                    </div>

                    <div class=\"form-group col-md-4 col-8\">
                        ";
            // line 257
            echo sw_escape_filter($this->env, ($context["cityField"] ?? null), "html", null, true);
            echo "
                    </div>
                ";
        } else {
            // line 260
            echo "                    <div class=\"form-group col-md-4 col-8\">
                        ";
            // line 261
            echo sw_escape_filter($this->env, ($context["cityField"] ?? null), "html", null, true);
            echo "
                    </div>

                    <div class=\"form-group col-md-2 col-4\">
                        ";
            // line 265
            echo sw_escape_filter($this->env, ($context["zipcodeField"] ?? null), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 268
        echo "            ";
    }

    // line 189
    public function block_component_address_form_zipcode_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 191
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AddressZipcode\">
                            ";
        // line 192
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.zipcodeLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
    }

    // line 196
    public function block_component_address_form_zipcode_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 197
        echo "                        <input type=\"text\"
                               class=\"form-control";
        // line 198
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                               id=\"";
        // line 199
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AddressZipcode\"
                               placeholder=\"";
        // line 200
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.zipcodePlaceholder")), "html", null, true);
        echo "\"
                               name=\"";
        // line 201
        echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[zipcode]\"
                               value=\"";
        // line 202
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "zipcode"], "method", false, false, false, 202), "html", null, true);
        echo "\"
                               data-form-validation-required
                               ";
        // line 204
        if (array_key_exists("requiredMessage", $context)) {
            echo "data-form-validation-required-message=\"";
            echo sw_escape_filter($this->env, ($context["requiredMessage"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 205
        echo "                               required=\"required\">
                    ";
    }

    // line 208
    public function block_component_address_form_zipcode_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 209
        echo "                        ";
        if (($context["violationPath"] ?? null)) {
            // line 210
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 210)->display($context);
            // line 211
            echo "                        ";
        }
        // line 212
        echo "                    ";
    }

    // line 225
    public function block_component_address_form_city_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 226
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 227
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AddressCity\">
                            ";
        // line 228
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.cityLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
    }

    // line 232
    public function block_component_address_form_city_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 233
        echo "                        <input type=\"text\"
                               class=\"form-control";
        // line 234
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                               id=\"";
        // line 235
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AddressCity\"
                               placeholder=\"";
        // line 236
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.cityPlaceholder")), "html", null, true);
        echo "\"
                               name=\"";
        // line 237
        echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[city]\"
                               value=\"";
        // line 238
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "city"], "method", false, false, false, 238), "html", null, true);
        echo "\"
                               data-form-validation-required
                               ";
        // line 240
        if (array_key_exists("requiredMessage", $context)) {
            echo "data-form-validation-required-message=\"";
            echo sw_escape_filter($this->env, ($context["requiredMessage"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 241
        echo "                               required=\"required\">
                    ";
    }

    // line 244
    public function block_component_address_form_city_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 245
        echo "                        ";
        if (($context["violationPath"] ?? null)) {
            // line 246
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 246)->display($context);
            // line 247
            echo "                        ";
        }
        // line 248
        echo "                    ";
    }

    // line 270
    public function block_component_address_form_additional_field1($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 271
        echo "                ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showAdditionalAddressField1")) {
            // line 272
            echo "                    ";
            if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/additionalAddressLine1"], "method", false, false, false, 272))) {
                // line 273
                echo "                        ";
                $context["violationPath"] = "/additionalAddressLine1";
                // line 274
                echo "                    ";
            } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/additionalAddressLine1")], "method", false, false, false, 274))) {
                // line 275
                echo "                        ";
                $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/additionalAddressLine1");
                // line 276
                echo "                    ";
            }
            // line 277
            echo "
                    <div class=\"form-group col-md-6\">
                        ";
            // line 279
            $this->displayBlock('component_address_form_additional_field1_label', $context, $blocks);
            // line 285
            echo "
                        ";
            // line 286
            $this->displayBlock('component_address_form_additional_field1_input', $context, $blocks);
            // line 295
            echo "
                        ";
            // line 296
            $this->displayBlock('component_address_form_additional_field1_error', $context, $blocks);
            // line 301
            echo "                    </div>
                ";
        }
        // line 303
        echo "            ";
    }

    // line 279
    public function block_component_address_form_additional_field1_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 280
        echo "                            <label class=\"form-label\"
                                   for=\"";
        // line 281
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AdditionalField1\">
                                ";
        // line 282
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.additionalField1Label"));
        echo (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.additionalAddressField1Required")) ? ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"))) : (""));
        echo "
                            </label>
                        ";
    }

    // line 286
    public function block_component_address_form_additional_field1_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 287
        echo "                            <input type=\"text\"
                                   class=\"form-control ";
        // line 288
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                   id=\"";
        // line 289
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AdditionalField1\"
                                   placeholder=\"";
        // line 290
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.additionalField1Placeholder")), "html", null, true);
        echo "\"
                                   name=\"";
        // line 291
        echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[additionalAddressLine1]\"
                                   value=\"";
        // line 292
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "additionalAddressLine1"], "method", false, false, false, 292), "html", null, true);
        echo "\"
                                    ";
        // line 293
        echo (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.additionalAddressField1Required")) ? ("required=\"true\"") : (""));
        echo ">
                        ";
    }

    // line 296
    public function block_component_address_form_additional_field1_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 297
        echo "                            ";
        if (($context["violationPath"] ?? null)) {
            // line 298
            echo "                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 298)->display($context);
            // line 299
            echo "                            ";
        }
        // line 300
        echo "                        ";
    }

    // line 305
    public function block_component_address_form_additional_field2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 306
        echo "                ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showAdditionalAddressField2")) {
            // line 307
            echo "                    ";
            if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/additionalAddressLine2"], "method", false, false, false, 307))) {
                // line 308
                echo "                        ";
                $context["violationPath"] = "/additionalAddressLine2";
                // line 309
                echo "                    ";
            } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/additionalAddressLine2")], "method", false, false, false, 309))) {
                // line 310
                echo "                        ";
                $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/additionalAddressLine2");
                // line 311
                echo "                    ";
            }
            // line 312
            echo "                    <div class=\"form-group col-md-6\">
                        ";
            // line 313
            $this->displayBlock('component_address_form_additional_field2_label', $context, $blocks);
            // line 319
            echo "
                        ";
            // line 320
            $this->displayBlock('component_address_form_additional_field2_input', $context, $blocks);
            // line 329
            echo "
                        ";
            // line 330
            $this->displayBlock('component_address_form_additional_field2_error', $context, $blocks);
            // line 335
            echo "                    </div>
                ";
        }
        // line 337
        echo "            ";
    }

    // line 313
    public function block_component_address_form_additional_field2_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 314
        echo "                            <label class=\"form-label\"
                                   for=\"";
        // line 315
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AdditionalField2\">
                                ";
        // line 316
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.additionalField2Label"));
        echo (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.additionalAddressField2Required")) ? ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"))) : (""));
        echo "
                            </label>
                        ";
    }

    // line 320
    public function block_component_address_form_additional_field2_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 321
        echo "                            <input type=\"text\"
                                   class=\"form-control ";
        // line 322
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                   id=\"";
        // line 323
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AdditionalField2\"
                                   placeholder=\"";
        // line 324
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.additionalField2Placeholder")), "html", null, true);
        echo "\"
                                   name=\"";
        // line 325
        echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[additionalAddressLine2]\"
                                   value=\"";
        // line 326
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "additionalAddressLine2"], "method", false, false, false, 326), "html", null, true);
        echo "\"
                                    ";
        // line 327
        echo (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.additionalAddressField2Required")) ? ("required=\"true\"") : (""));
        echo ">
                        ";
    }

    // line 330
    public function block_component_address_form_additional_field2_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 331
        echo "                            ";
        if (($context["violationPath"] ?? null)) {
            // line 332
            echo "                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 332)->display($context);
            // line 333
            echo "                            ";
        }
        // line 334
        echo "                        ";
    }

    // line 341
    public function block_component_address_form_country($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 342
        echo "                <div class=\"form-group col-md-6\">
                    ";
        // line 343
        $context["initialCountryId"] = null;
        // line 344
        echo "
                    ";
        // line 345
        if (sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "countryId"], "method", false, false, false, 345)) {
            // line 346
            echo "                        ";
            $context["initialCountryId"] = sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "countryId"], "method", false, false, false, 346);
            // line 347
            echo "                    ";
        } elseif ((0 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "countries", [], "any", false, false, false, 347)), 1))) {
            // line 348
            echo "                        ";
            $context["initialCountryId"] = sw_get_attribute($this->env, $this->source, twig_first($this->env, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "countries", [], "any", false, false, false, 348)), "id", [], "any", false, false, false, 348);
            // line 349
            echo "                    ";
        }
        // line 350
        echo "
                    ";
        // line 351
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/countryId"], "method", false, false, false, 351))) {
            // line 352
            echo "                        ";
            $context["violationPath"] = "/countryId";
            // line 353
            echo "                    ";
        } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/countryId")], "method", false, false, false, 353))) {
            // line 354
            echo "                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/countryId");
            // line 355
            echo "                    ";
        }
        // line 356
        echo "
                    ";
        // line 357
        $this->displayBlock('component_address_form_country_label', $context, $blocks);
        // line 363
        echo "
                    ";
        // line 364
        $this->displayBlock('component_address_form_country_select', $context, $blocks);
        // line 391
        echo "                </div>

                <div class=\"form-group col-md-6  d-none\">
                    ";
        // line 394
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/countryStateId"], "method", false, false, false, 394))) {
            // line 395
            echo "                        ";
            $context["violationPath"] = "/countryStateId";
            // line 396
            echo "                    ";
        } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/countryStateId")], "method", false, false, false, 396))) {
            // line 397
            echo "                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/countryStateId");
            // line 398
            echo "                    ";
        }
        // line 399
        echo "
                    ";
        // line 400
        $this->displayBlock('component_address_form_country_state_label', $context, $blocks);
        // line 406
        echo "
                    ";
        // line 407
        $this->displayBlock('component_address_form_country_state_select', $context, $blocks);
        // line 419
        echo "
                    ";
        // line 420
        $this->displayBlock('component_address_form_country_error', $context, $blocks);
        // line 425
        echo "                </div>
            ";
    }

    // line 357
    public function block_component_address_form_country_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 358
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 359
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AddressCountry\">
                            ";
        // line 360
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.countryLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
    }

    // line 364
    public function block_component_address_form_country_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 365
        echo "                        <select class=\"country-select ";
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                id=\"";
        // line 366
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AddressCountry\"
                                name=\"";
        // line 367
        echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[countryId]\"
                                required=\"required\"
                                data-initial-country-id=\"";
        // line 369
        echo sw_escape_filter($this->env, ($context["initialCountryId"] ?? null), "html", null, true);
        echo "\">
                            ";
        // line 370
        if ( !($context["initialCountryId"] ?? null)) {
            // line 371
            echo "                                <option disabled=\"disabled\"
                                        value=\"\"
                                        selected=\"selected\">
                                    ";
            // line 374
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.countryPlaceholder"));
            echo "
                                </option>
                            ";
        }
        // line 377
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "countries", [], "any", false, false, false, 377));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 378
            echo "                                <option ";
            if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 378), ($context["initialCountryId"] ?? null)))) {
                // line 379
                echo "                                        selected=\"selected\"
                                        ";
            }
            // line 381
            echo "                                        value=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 381), "html", null, true);
            echo "\"
                                        data-vat-id-required=\"";
            // line 382
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["country"], "vatIdRequired", [], "any", false, false, false, 382), "html", null, true);
            echo "\"
                                        ";
            // line 383
            if ((($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_15707") &&  !sw_get_attribute($this->env, $this->source, $context["country"], "shippingAvailable", [], "any", false, false, false, 383)) && ($context["disableNonShippableCountries"] ?? null))) {
                // line 384
                echo "                                            disabled=\"disabled\"
                                        ";
            }
            // line 385
            echo ">
                                    ";
            // line 386
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["country"], "translated", [], "any", false, false, false, 386), "name", [], "any", false, false, false, 386), "html", null, true);
            if ((($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_15707") && ($context["showNoShippingPostfix"] ?? null)) &&  !sw_get_attribute($this->env, $this->source, $context["country"], "shippingAvailable", [], "any", false, false, false, 386))) {
                echo " ";
                echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.countryPostfixNoShipping"));
            }
            // line 387
            echo "                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 389
        echo "                        </select>
                    ";
    }

    // line 400
    public function block_component_address_form_country_state_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 401
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 402
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AddressCountry\">
                            ";
        // line 403
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.countryStateLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
    }

    // line 407
    public function block_component_address_form_country_state_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 408
        echo "                        <select class=\"country-state-select ";
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                id=\"";
        // line 409
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AddressCountryState\"
                                name=\"";
        // line 410
        echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[countryStateId]\"
                                data-initial-country-state-id=\"";
        // line 411
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "countryStateId"], "method", false, false, false, 411), "html", null, true);
        echo "\">
                            <option value=\"\"
                                    selected=\"selected\"
                                    data-placeholder-option=\"true\">
                                ";
        // line 415
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.countryStatePlaceholder"));
        echo "
                            </option>
                        </select>
                    ";
    }

    // line 420
    public function block_component_address_form_country_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 421
        echo "                        ";
        if (($context["violationPath"] ?? null)) {
            // line 422
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 422)->display($context);
            // line 423
            echo "                        ";
        }
        // line 424
        echo "                    ";
    }

    // line 430
    public function block_component_address_form_phone_number($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 431
        echo "                ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showPhoneNumberField")) {
            // line 432
            echo "                    <div class=\"form-group col-md-6\">
                        ";
            // line 433
            if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/phoneNumber"], "method", false, false, false, 433))) {
                // line 434
                echo "                            ";
                $context["violationPath"] = "/phoneNumber";
                // line 435
                echo "                        ";
            } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/phoneNumber")], "method", false, false, false, 435))) {
                // line 436
                echo "                            ";
                $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/phoneNumber");
                // line 437
                echo "                        ";
            }
            // line 438
            echo "
                        ";
            // line 439
            $this->displayBlock('component_address_form_phone_number_label', $context, $blocks);
            // line 445
            echo "
                        ";
            // line 446
            $this->displayBlock('component_address_form_phone_number_input', $context, $blocks);
            // line 455
            echo "
                        ";
            // line 456
            $this->displayBlock('component_address_form_phone_error', $context, $blocks);
            // line 461
            echo "                    </div>
                ";
        }
        // line 463
        echo "            ";
    }

    // line 439
    public function block_component_address_form_phone_number_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 440
        echo "                            <label class=\"form-label\"
                                   for=\"";
        // line 441
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AddressPhoneNumber\">
                                ";
        // line 442
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.phoneNumberLabel"));
        echo (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.phoneNumberFieldRequired")) ? ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"))) : (""));
        echo "
                            </label>
                        ";
    }

    // line 446
    public function block_component_address_form_phone_number_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 447
        echo "                            <input type=\"text\"
                                   class=\"form-control\"
                                   id=\"";
        // line 449
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AddressPhoneNumber\"
                                   placeholder=\"";
        // line 450
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.phoneNumberPlaceholder")), "html", null, true);
        echo "\"
                                   name=\"";
        // line 451
        echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[phoneNumber]\"
                                   value=\"";
        // line 452
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "phoneNumber"], "method", false, false, false, 452), "html", null, true);
        echo "\"
                                ";
        // line 453
        echo (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.phoneNumberFieldRequired")) ? ("required=\"true\"") : (""));
        echo ">
                        ";
    }

    // line 456
    public function block_component_address_form_phone_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 457
        echo "                            ";
        if (($context["violationPath"] ?? null)) {
            // line 458
            echo "                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 458)->display($context);
            // line 459
            echo "                            ";
        }
        // line 460
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/address/address-form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1635 => 460,  1632 => 459,  1629 => 458,  1626 => 457,  1622 => 456,  1616 => 453,  1612 => 452,  1608 => 451,  1604 => 450,  1600 => 449,  1596 => 447,  1592 => 446,  1584 => 442,  1580 => 441,  1577 => 440,  1573 => 439,  1569 => 463,  1565 => 461,  1563 => 456,  1560 => 455,  1558 => 446,  1555 => 445,  1553 => 439,  1550 => 438,  1547 => 437,  1544 => 436,  1541 => 435,  1538 => 434,  1536 => 433,  1533 => 432,  1530 => 431,  1526 => 430,  1522 => 424,  1519 => 423,  1516 => 422,  1513 => 421,  1509 => 420,  1501 => 415,  1494 => 411,  1490 => 410,  1486 => 409,  1478 => 408,  1474 => 407,  1466 => 403,  1462 => 402,  1459 => 401,  1455 => 400,  1450 => 389,  1443 => 387,  1437 => 386,  1434 => 385,  1430 => 384,  1428 => 383,  1424 => 382,  1419 => 381,  1415 => 379,  1412 => 378,  1407 => 377,  1401 => 374,  1396 => 371,  1394 => 370,  1390 => 369,  1385 => 367,  1381 => 366,  1373 => 365,  1369 => 364,  1361 => 360,  1357 => 359,  1354 => 358,  1350 => 357,  1345 => 425,  1343 => 420,  1340 => 419,  1338 => 407,  1335 => 406,  1333 => 400,  1330 => 399,  1327 => 398,  1324 => 397,  1321 => 396,  1318 => 395,  1316 => 394,  1311 => 391,  1309 => 364,  1306 => 363,  1304 => 357,  1301 => 356,  1298 => 355,  1295 => 354,  1292 => 353,  1289 => 352,  1287 => 351,  1284 => 350,  1281 => 349,  1278 => 348,  1275 => 347,  1272 => 346,  1270 => 345,  1267 => 344,  1265 => 343,  1262 => 342,  1258 => 341,  1254 => 334,  1251 => 333,  1248 => 332,  1245 => 331,  1241 => 330,  1235 => 327,  1231 => 326,  1227 => 325,  1223 => 324,  1219 => 323,  1213 => 322,  1210 => 321,  1206 => 320,  1198 => 316,  1194 => 315,  1191 => 314,  1187 => 313,  1183 => 337,  1179 => 335,  1177 => 330,  1174 => 329,  1172 => 320,  1169 => 319,  1167 => 313,  1164 => 312,  1161 => 311,  1158 => 310,  1155 => 309,  1152 => 308,  1149 => 307,  1146 => 306,  1142 => 305,  1138 => 300,  1135 => 299,  1132 => 298,  1129 => 297,  1125 => 296,  1119 => 293,  1115 => 292,  1111 => 291,  1107 => 290,  1103 => 289,  1097 => 288,  1094 => 287,  1090 => 286,  1082 => 282,  1078 => 281,  1075 => 280,  1071 => 279,  1067 => 303,  1063 => 301,  1061 => 296,  1058 => 295,  1056 => 286,  1053 => 285,  1051 => 279,  1047 => 277,  1044 => 276,  1041 => 275,  1038 => 274,  1035 => 273,  1032 => 272,  1029 => 271,  1025 => 270,  1021 => 248,  1018 => 247,  1015 => 246,  1012 => 245,  1008 => 244,  1003 => 241,  997 => 240,  992 => 238,  988 => 237,  984 => 236,  980 => 235,  974 => 234,  971 => 233,  967 => 232,  959 => 228,  955 => 227,  952 => 226,  948 => 225,  944 => 212,  941 => 211,  938 => 210,  935 => 209,  931 => 208,  926 => 205,  920 => 204,  915 => 202,  911 => 201,  907 => 200,  903 => 199,  897 => 198,  894 => 197,  890 => 196,  882 => 192,  878 => 191,  875 => 190,  871 => 189,  867 => 268,  861 => 265,  854 => 261,  851 => 260,  845 => 257,  838 => 253,  835 => 252,  833 => 251,  830 => 250,  827 => 249,  825 => 244,  822 => 243,  820 => 232,  817 => 231,  815 => 225,  812 => 224,  809 => 223,  806 => 222,  803 => 221,  800 => 220,  797 => 219,  794 => 218,  791 => 217,  788 => 216,  786 => 215,  783 => 214,  780 => 213,  778 => 208,  775 => 207,  773 => 196,  770 => 195,  768 => 189,  765 => 188,  762 => 187,  759 => 186,  756 => 185,  753 => 184,  750 => 183,  747 => 182,  744 => 181,  741 => 180,  737 => 179,  733 => 175,  730 => 174,  727 => 173,  724 => 172,  720 => 171,  715 => 168,  709 => 167,  704 => 165,  700 => 164,  696 => 163,  692 => 162,  686 => 161,  683 => 160,  679 => 159,  671 => 155,  667 => 154,  664 => 153,  660 => 152,  655 => 176,  653 => 171,  650 => 170,  648 => 159,  645 => 158,  643 => 152,  640 => 151,  637 => 150,  634 => 149,  631 => 148,  628 => 147,  625 => 146,  622 => 145,  620 => 144,  617 => 143,  613 => 142,  608 => 464,  606 => 430,  602 => 429,  598 => 427,  596 => 341,  592 => 340,  588 => 338,  586 => 305,  583 => 304,  581 => 270,  578 => 269,  576 => 179,  573 => 178,  571 => 142,  566 => 141,  562 => 140,  558 => 122,  555 => 121,  552 => 120,  549 => 119,  545 => 118,  539 => 114,  535 => 113,  531 => 112,  527 => 111,  521 => 110,  518 => 109,  514 => 108,  507 => 103,  503 => 102,  500 => 101,  496 => 100,  492 => 132,  488 => 130,  486 => 128,  485 => 127,  482 => 126,  480 => 125,  476 => 123,  473 => 118,  470 => 116,  467 => 108,  464 => 106,  461 => 100,  458 => 98,  455 => 97,  452 => 96,  449 => 95,  446 => 94,  444 => 93,  441 => 92,  438 => 91,  434 => 90,  430 => 86,  427 => 85,  424 => 84,  421 => 83,  417 => 82,  411 => 79,  407 => 78,  403 => 77,  399 => 76,  393 => 75,  390 => 74,  386 => 73,  379 => 69,  375 => 68,  372 => 67,  368 => 66,  363 => 87,  361 => 82,  358 => 81,  356 => 73,  353 => 72,  351 => 66,  348 => 65,  345 => 64,  342 => 63,  339 => 62,  336 => 61,  334 => 60,  331 => 59,  327 => 58,  323 => 54,  320 => 53,  317 => 52,  314 => 51,  310 => 50,  302 => 47,  298 => 46,  294 => 45,  290 => 44,  286 => 43,  280 => 42,  277 => 41,  273 => 40,  268 => 37,  263 => 36,  259 => 35,  256 => 34,  252 => 33,  247 => 55,  245 => 50,  242 => 49,  240 => 40,  237 => 39,  235 => 33,  232 => 32,  229 => 31,  226 => 30,  223 => 29,  220 => 28,  218 => 27,  215 => 26,  211 => 25,  206 => 133,  204 => 90,  201 => 89,  199 => 58,  196 => 57,  194 => 25,  189 => 24,  185 => 23,  181 => 138,  178 => 137,  174 => 135,  172 => 23,  161 => 22,  159 => 21,  156 => 20,  153 => 19,  150 => 18,  147 => 17,  144 => 16,  140 => 15,  136 => 8,  131 => 6,  127 => 5,  124 => 4,  121 => 3,  117 => 2,  113 => 140,  110 => 139,  108 => 15,  105 => 14,  102 => 13,  99 => 12,  96 => 11,  93 => 9,  90 => 2,  83 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/address/address-form.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/address/address-form.html.twig");
    }
}
