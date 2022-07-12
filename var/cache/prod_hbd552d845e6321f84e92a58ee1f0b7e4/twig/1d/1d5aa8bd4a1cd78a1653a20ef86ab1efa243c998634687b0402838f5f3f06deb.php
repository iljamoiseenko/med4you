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

/* @Storefront/storefront/component/address/address-personal-company.html.twig */
class __TwigTemplate_de613ae085b65659eb1991240a8f29b2513c190d20de8dac24499c133f4ca28a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_account_register_company_fields' => [$this, 'block_component_account_register_company_fields'],
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_account_register_company_fields', $context, $blocks);
    }

    public function block_component_account_register_company_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["accountTypeRequired"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showAccountTypeSelection");
        // line 3
        echo "
    ";
        // line 4
        if ((((($context["accountTypeRequired"] ?? null) || (0 === twig_compare(($context["prefix"] ?? null), "address"))) || (0 === twig_compare(($context["prefix"] ?? null), "shippingAddress"))) || ($context["hasSelectedBusiness"] ?? null))) {
            // line 5
            echo "        <div class=\"";
            if (($context["hasSelectedBusiness"] ?? null)) {
                echo "address-contact-type-company";
            } elseif ((0 === twig_compare(($context["prefix"] ?? null), "address"))) {
                echo "js-field-toggle-contact-type-company d-block";
            } else {
                echo "js-field-toggle-contact-type-company";
                if (($context["customToggleTarget"] ?? null)) {
                    echo "-";
                    echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
                }
                echo " d-none";
            }
            echo "\">
            ";
            // line 6
            $this->displayBlock('component_address_form_company_fields', $context, $blocks);
            // line 89
            echo "        </div>
    ";
        }
    }

    // line 6
    public function block_component_address_form_company_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "                <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 8
        $this->displayBlock('component_address_form_company_name', $context, $blocks);
        // line 44
        echo "                </div>
                <div class=\"";
        // line 45
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 46
        $this->displayBlock('component_address_form_company_department', $context, $blocks);
        // line 77
        echo "
                    ";
        // line 78
        $this->displayBlock('component_address_form_company_vatId', $context, $blocks);
        // line 87
        echo "                </div>
            ";
    }

    // line 8
    public function block_component_address_form_company_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                        <div class=\"form-group col-12\">
                            ";
        // line 10
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/company"], "method", false, false, false, 10))) {
            // line 11
            echo "                                ";
            $context["violationPath"] = "/company";
            // line 12
            echo "                            ";
        } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/company")], "method", false, false, false, 12))) {
            // line 13
            echo "                                ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/company");
            // line 14
            echo "                            ";
        } else {
            // line 15
            echo "                                ";
            $context["requiredMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("error.VIOLATION::IS_BLANK_ERROR", ["%field%" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNameLabel"))]);
            // line 16
            echo "                            ";
        }
        // line 17
        echo "
                            ";
        // line 18
        $this->displayBlock('component_address_form_company_name_label', $context, $blocks);
        // line 24
        echo "
                            ";
        // line 25
        $this->displayBlock('component_address_form_company_name_input', $context, $blocks);
        // line 36
        echo "
                            ";
        // line 37
        $this->displayBlock('component_address_form_company_name_input_error', $context, $blocks);
        // line 42
        echo "                        </div>
                    ";
    }

    // line 18
    public function block_component_address_form_company_name_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                                <label class=\"form-label\"
                                       for=\"";
        // line 20
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "company\">
                                    ";
        // line 21
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNameLabel"));
        if (($context["accountTypeRequired"] ?? null)) {
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        }
        // line 22
        echo "                                </label>
                            ";
    }

    // line 25
    public function block_component_address_form_company_name_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                                <input type=\"text\"
                                       class=\"form-control";
        // line 27
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                       id=\"";
        // line 28
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "company\"
                                       placeholder=\"";
        // line 29
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNamePlaceholder")), "html", null, true);
        echo "\"
                                       name=\"";
        // line 30
        echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[company]\"
                                       value=\"";
        // line 31
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "get", [0 => "company"], "method", false, false, false, 31), "html", null, true);
        echo "\"
                                       data-form-validation-required
                                       ";
        // line 33
        if ((array_key_exists("requiredMessage", $context) && ($context["accountTypeRequired"] ?? null))) {
            echo "data-form-validation-required-message=\"";
            echo sw_escape_filter($this->env, ($context["requiredMessage"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 34
        echo "                                       ";
        if (($context["accountTypeRequired"] ?? null)) {
            echo "required=\"required\"";
        }
        echo ">
                            ";
    }

    // line 37
    public function block_component_address_form_company_name_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "                                ";
        if (($context["violationPath"] ?? null)) {
            // line 39
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal-company.html.twig", 39)->display($context);
            // line 40
            echo "                                ";
        }
        // line 41
        echo "                            ";
    }

    // line 46
    public function block_component_address_form_company_department($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "                        <div class=\"form-group col-md-6\">
                            ";
        // line 48
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/department"], "method", false, false, false, 48))) {
            // line 49
            echo "                                ";
            $context["violationPath"] = "/department";
            // line 50
            echo "                            ";
        } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/department")], "method", false, false, false, 50))) {
            // line 51
            echo "                                ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/department");
            // line 52
            echo "                            ";
        }
        // line 53
        echo "
                            ";
        // line 54
        $this->displayBlock('component_address_form_company_department_label', $context, $blocks);
        // line 60
        echo "
                            ";
        // line 61
        $this->displayBlock('component_address_form_company_department_input', $context, $blocks);
        // line 69
        echo "
                            ";
        // line 70
        $this->displayBlock('component_address_form_company_department_input_error', $context, $blocks);
        // line 75
        echo "                        </div>
                    ";
    }

    // line 54
    public function block_component_address_form_company_department_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                                <label class=\"form-label\"
                                       for=\"";
        // line 56
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "department\">
                                    ";
        // line 57
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyDepartmentLabel"));
        echo "
                                </label>
                            ";
    }

    // line 61
    public function block_component_address_form_company_department_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "                                <input type=\"text\"
                                       class=\"form-control";
        // line 63
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                       id=\"";
        // line 64
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "department\"
                                       placeholder=\"";
        // line 65
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyDepartmentPlaceholder")), "html", null, true);
        echo "\"
                                       name=\"";
        // line 66
        echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[department]\"
                                       value=\"";
        // line 67
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "get", [0 => "department"], "method", false, false, false, 67), "html", null, true);
        echo "\">
                            ";
    }

    // line 70
    public function block_component_address_form_company_department_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "                                ";
        if (($context["violationPath"] ?? null)) {
            // line 72
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal-company.html.twig", 72)->display($context);
            // line 73
            echo "                                ";
        }
        // line 74
        echo "                            ";
    }

    // line 78
    public function block_component_address_form_company_vatId($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "                        ";
        if ((0 !== twig_compare(($context["prefix"] ?? null), "shippingAddress"))) {
            // line 80
            echo "                            <div class=\"form-group col-md-6\">
                                ";
            // line 81
            $this->loadTemplate("@Storefront/storefront/component/address/address-personal-vat-id.html.twig", "@Storefront/storefront/component/address/address-personal-company.html.twig", 81)->display(twig_array_merge($context, ["vatIds" => sw_get_attribute($this->env, $this->source,             // line 82
($context["data"] ?? null), "get", [0 => "vatIds"], "method", false, false, false, 82)]));
            // line 84
            echo "                            </div>
                        ";
        }
        // line 86
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/address/address-personal-company.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  371 => 86,  367 => 84,  365 => 82,  364 => 81,  361 => 80,  358 => 79,  354 => 78,  350 => 74,  347 => 73,  344 => 72,  341 => 71,  337 => 70,  331 => 67,  327 => 66,  323 => 65,  319 => 64,  313 => 63,  310 => 62,  306 => 61,  299 => 57,  295 => 56,  292 => 55,  288 => 54,  283 => 75,  281 => 70,  278 => 69,  276 => 61,  273 => 60,  271 => 54,  268 => 53,  265 => 52,  262 => 51,  259 => 50,  256 => 49,  254 => 48,  251 => 47,  247 => 46,  243 => 41,  240 => 40,  237 => 39,  234 => 38,  230 => 37,  221 => 34,  215 => 33,  210 => 31,  206 => 30,  202 => 29,  198 => 28,  192 => 27,  189 => 26,  185 => 25,  180 => 22,  175 => 21,  171 => 20,  168 => 19,  164 => 18,  159 => 42,  157 => 37,  154 => 36,  152 => 25,  149 => 24,  147 => 18,  144 => 17,  141 => 16,  138 => 15,  135 => 14,  132 => 13,  129 => 12,  126 => 11,  124 => 10,  121 => 9,  117 => 8,  112 => 87,  110 => 78,  107 => 77,  105 => 46,  101 => 45,  98 => 44,  96 => 8,  91 => 7,  87 => 6,  81 => 89,  79 => 6,  63 => 5,  61 => 4,  58 => 3,  55 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/address/address-personal-company.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/address/address-personal-company.html.twig");
    }
}
