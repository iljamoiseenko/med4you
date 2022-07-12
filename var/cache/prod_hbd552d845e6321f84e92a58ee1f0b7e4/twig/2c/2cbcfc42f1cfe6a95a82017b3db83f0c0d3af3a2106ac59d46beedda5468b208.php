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

/* @Storefront/storefront/page/account/profile/personal.html.twig */
class __TwigTemplate_3c99db781c5b3a1c7a088df24f1ee322e2790d8564f79f7c3431001f93aca2c6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'component_address_personal_customer_type' => [$this, 'block_component_address_personal_customer_type'],
            'component_address_personal_fields_birthday_selects' => [$this, 'block_component_address_personal_fields_birthday_selects'],
            'page_account_profile_personal_fields_birthday_selects' => [$this, 'block_page_account_profile_personal_fields_birthday_selects'],
            'page_account_profile_personal_fields_birthday_select_day' => [$this, 'block_page_account_profile_personal_fields_birthday_select_day'],
            'page_account_profile_personal_fields_birthday_select_day_error' => [$this, 'block_page_account_profile_personal_fields_birthday_select_day_error'],
            'page_account_profile_personal_fields_birthday_select_month' => [$this, 'block_page_account_profile_personal_fields_birthday_select_month'],
            'page_account_profile_personal_fields_birthday_select_month_error' => [$this, 'block_page_account_profile_personal_fields_birthday_select_month_error'],
            'page_account_profile_personal_fields_birthday_select_year' => [$this, 'block_page_account_profile_personal_fields_birthday_select_year'],
            'page_account_profile_personal_fields_birthday_select_year_error' => [$this, 'block_page_account_profile_personal_fields_birthday_select_year_error'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/component/address/address-personal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/component/address/address-personal.html.twig", "@Storefront/storefront/page/account/profile/personal.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_component_address_personal_customer_type($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_component_address_personal_fields_birthday_selects($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->displayBlock('page_account_profile_personal_fields_birthday_selects', $context, $blocks);
    }

    public function block_page_account_profile_personal_fields_birthday_selects($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 8
        $context["birthday"] = false;
        // line 9
        echo "            ";
        $context["birthmonth"] = false;
        // line 10
        echo "            ";
        $context["birthyear"] = false;
        // line 11
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "birthday", [], "any", false, false, false, 11)) {
            // line 12
            echo "                ";
            $context["birthday"] = twig_date_format_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "birthday", [], "any", false, false, false, 12), "d");
            // line 13
            echo "                ";
            $context["birthmonth"] = twig_date_format_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "birthday", [], "any", false, false, false, 13), "m");
            // line 14
            echo "                ";
            $context["birthyear"] = twig_date_format_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "birthday", [], "any", false, false, false, 14), "Y");
            // line 15
            echo "            ";
        }
        // line 16
        echo "
            ";
        // line 17
        $this->displayBlock('page_account_profile_personal_fields_birthday_select_day', $context, $blocks);
        // line 46
        echo "
            ";
        // line 47
        $this->displayBlock('page_account_profile_personal_fields_birthday_select_month', $context, $blocks);
        // line 75
        echo "
            ";
        // line 76
        $this->displayBlock('page_account_profile_personal_fields_birthday_select_year', $context, $blocks);
        // line 107
        echo "        </div>
    ";
    }

    // line 17
    public function block_page_account_profile_personal_fields_birthday_select_day($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "                <div class=\"form-group col-4 col-md-2\">
                    <select id=\"personalBirthday\"
                            name=\"birthdayDay\"
                            class=\"";
        // line 21
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayDay"], "method", false, false, false, 21))) {
            echo " is-invalid";
        }
        echo "\"
                            required=\"required\">
                        ";
        // line 23
        if ( !($context["birthday"] ?? null)) {
            // line 24
            echo "                            <option selected=\"selected\"
                                    value=\"\">
                                ";
            // line 26
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdaySelectDay"));
            echo "
                            </option>
                        ";
        }
        // line 29
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 30
            echo "                            <option value=\"";
            echo sw_escape_filter($this->env, $context["day"], "html", null, true);
            echo "\"
                                ";
            // line 31
            if ((0 === twig_compare($context["day"], ($context["birthday"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                ";
            // line 32
            echo sw_escape_filter($this->env, $context["day"], "html", null, true);
            echo "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                    </select>

                    ";
        // line 37
        $this->displayBlock('page_account_profile_personal_fields_birthday_select_day_error', $context, $blocks);
        // line 44
        echo "                </div>
            ";
    }

    // line 37
    public function block_page_account_profile_personal_fields_birthday_select_day_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "                        ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayDay"], "method", false, false, false, 38))) {
            // line 39
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/personal.html.twig", 39)->display(twig_array_merge($context, ["violationPath" => "/birthdayDay"]));
            // line 42
            echo "                        ";
        }
        // line 43
        echo "                    ";
    }

    // line 47
    public function block_page_account_profile_personal_fields_birthday_select_month($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "                <div class=\"form-group col-4 col-md-2\">
                    <select name=\"birthdayMonth\"
                            class=\"";
        // line 50
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayMonth"], "method", false, false, false, 50))) {
            echo " is-invalid";
        }
        echo "\"
                            required=\"required\">
                        ";
        // line 52
        if ( !($context["birthmonth"] ?? null)) {
            // line 53
            echo "                            <option selected=\"selected\"
                                    value=\"\">
                                ";
            // line 55
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdaySelectMonth"));
            echo "
                            </option>
                        ";
        }
        // line 58
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 59
            echo "                            <option value=\"";
            echo sw_escape_filter($this->env, $context["month"], "html", null, true);
            echo "\"
                                ";
            // line 60
            if ((0 === twig_compare($context["month"], ($context["birthmonth"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                ";
            // line 61
            echo sw_escape_filter($this->env, $context["month"], "html", null, true);
            echo "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                    </select>

                    ";
        // line 66
        $this->displayBlock('page_account_profile_personal_fields_birthday_select_month_error', $context, $blocks);
        // line 73
        echo "                </div>
            ";
    }

    // line 66
    public function block_page_account_profile_personal_fields_birthday_select_month_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "                        ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayMonth"], "method", false, false, false, 67))) {
            // line 68
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/personal.html.twig", 68)->display(twig_array_merge($context, ["violationPath" => "/birthdayMonth"]));
            // line 71
            echo "                        ";
        }
        // line 72
        echo "                    ";
    }

    // line 76
    public function block_page_account_profile_personal_fields_birthday_select_year($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "                <div class=\"form-group col-4 col-md-2\">
                    ";
        // line 78
        $context["currentYear"] = twig_date_format_filter($this->env, "now", "Y");
        // line 79
        echo "                    ";
        $context["startYear"] = (($context["currentYear"] ?? null) - 120);
        // line 80
        echo "
                    <select name=\"birthdayYear\"
                            class=\"";
        // line 82
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayYear"], "method", false, false, false, 82))) {
            echo " is-invalid";
        }
        echo "\"
                            required=\"required\">
                        ";
        // line 84
        if ( !($context["birthyear"] ?? null)) {
            // line 85
            echo "                            <option selected=\"selected\"
                                    value=\"\">
                                ";
            // line 87
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdaySelectYear"));
            echo "
                            </option>
                        ";
        }
        // line 90
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["currentYear"] ?? null), ($context["startYear"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 91
            echo "                            <option value=\"";
            echo sw_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\"
                                ";
            // line 92
            if ((0 === twig_compare($context["year"], ($context["birthyear"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                ";
            // line 93
            echo sw_escape_filter($this->env, $context["year"], "html", null, true);
            echo "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                    </select>

                    ";
        // line 98
        $this->displayBlock('page_account_profile_personal_fields_birthday_select_year_error', $context, $blocks);
        // line 105
        echo "                </div>
            ";
    }

    // line 98
    public function block_page_account_profile_personal_fields_birthday_select_year_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "                        ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayYear"], "method", false, false, false, 99))) {
            // line 100
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/personal.html.twig", 100)->display(twig_array_merge($context, ["violationPath" => "/birthdayYear"]));
            // line 103
            echo "                        ";
        }
        // line 104
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/profile/personal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 104,  365 => 103,  362 => 100,  359 => 99,  355 => 98,  350 => 105,  348 => 98,  344 => 96,  335 => 93,  329 => 92,  324 => 91,  319 => 90,  313 => 87,  309 => 85,  307 => 84,  299 => 82,  295 => 80,  292 => 79,  290 => 78,  287 => 77,  283 => 76,  279 => 72,  276 => 71,  273 => 68,  270 => 67,  266 => 66,  261 => 73,  259 => 66,  255 => 64,  246 => 61,  240 => 60,  235 => 59,  230 => 58,  224 => 55,  220 => 53,  218 => 52,  210 => 50,  206 => 48,  202 => 47,  198 => 43,  195 => 42,  192 => 39,  189 => 38,  185 => 37,  180 => 44,  178 => 37,  174 => 35,  165 => 32,  159 => 31,  154 => 30,  149 => 29,  143 => 26,  139 => 24,  137 => 23,  129 => 21,  124 => 18,  120 => 17,  115 => 107,  113 => 76,  110 => 75,  108 => 47,  105 => 46,  103 => 17,  100 => 16,  97 => 15,  94 => 14,  91 => 13,  88 => 12,  85 => 11,  82 => 10,  79 => 9,  77 => 8,  72 => 7,  64 => 6,  60 => 5,  54 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/account/profile/personal.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/account/profile/personal.html.twig");
    }
}
