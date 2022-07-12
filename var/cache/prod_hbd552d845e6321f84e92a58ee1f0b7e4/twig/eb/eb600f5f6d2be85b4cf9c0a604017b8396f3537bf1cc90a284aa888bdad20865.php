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

/* @Storefront/storefront/component/address/address.html.twig */
class __TwigTemplate_add682e0388cb990f2c98c358b1ad98629c08cb4dd591285ecf6b45e2f6fc4cc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_address' => [$this, 'block_component_address'],
            'component_address_company' => [$this, 'block_component_address_company'],
            'component_address_company_name' => [$this, 'block_component_address_company_name'],
            'component_address_salutation' => [$this, 'block_component_address_salutation'],
            'component_address_title' => [$this, 'block_component_address_title'],
            'component_address_name' => [$this, 'block_component_address_name'],
            'component_address_street' => [$this, 'block_component_address_street'],
            'component_address_additional_address_line_1' => [$this, 'block_component_address_additional_address_line_1'],
            'component_address_additional_address_line_2' => [$this, 'block_component_address_additional_address_line_2'],
            'component_address_phone_number' => [$this, 'block_component_address_phone_number'],
            'component_address_zipcode_city' => [$this, 'block_component_address_zipcode_city'],
            'component_address_state' => [$this, 'block_component_address_state'],
            'component_address_country' => [$this, 'block_component_address_country'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_address', $context, $blocks);
    }

    public function block_component_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"address\">
        ";
        // line 3
        if ((($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_15707") && ($context["showShippingWarning"] ?? null)) &&  !sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "country", [], "any", false, false, false, 3), "shippingAvailable", [], "any", false, false, false, 3))) {
            // line 4
            echo "            ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/address/address.html.twig", 4)->display(twig_array_merge($context, ["type" => "warning", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.countryNoShippingAlert"))]));
            // line 8
            echo "        ";
        }
        // line 9
        echo "
        ";
        // line 10
        if ((sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "company", [], "any", false, false, false, 10) || sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "vatId", [], "any", false, false, false, 10))) {
            // line 11
            echo "            ";
            $this->displayBlock('component_address_company', $context, $blocks);
            // line 21
            echo "        ";
        }
        // line 22
        echo "
        <p>
            ";
        // line 24
        if ((sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "salutation", [], "any", false, false, false, 24) && (0 !== twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "salutation", [], "any", false, false, false, 24), "salutationKey", [], "any", false, false, false, 24), "not_specified")))) {
            // line 25
            echo "                ";
            $this->displayBlock('component_address_salutation', $context, $blocks);
            // line 28
            echo "            ";
        }
        // line 29
        echo "
            ";
        // line 30
        if (sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "title", [], "any", false, false, false, 30)) {
            // line 31
            echo "                ";
            $this->displayBlock('component_address_title', $context, $blocks);
            // line 34
            echo "            ";
        }
        // line 35
        echo "
            ";
        // line 36
        $this->displayBlock('component_address_name', $context, $blocks);
        // line 39
        echo "
            ";
        // line 40
        $this->displayBlock('component_address_street', $context, $blocks);
        // line 43
        echo "
            ";
        // line 44
        if (sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "additionalAddressLine1", [], "any", false, false, false, 44)) {
            // line 45
            echo "                ";
            $this->displayBlock('component_address_additional_address_line_1', $context, $blocks);
            // line 48
            echo "            ";
        }
        // line 49
        echo "
            ";
        // line 50
        if (sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "additionalAddressLine2", [], "any", false, false, false, 50)) {
            // line 51
            echo "                ";
            $this->displayBlock('component_address_additional_address_line_2', $context, $blocks);
            // line 54
            echo "            ";
        }
        // line 55
        echo "
            ";
        // line 56
        if (sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "phoneNumber", [], "any", false, false, false, 56)) {
            // line 57
            echo "                ";
            $this->displayBlock('component_address_phone_number', $context, $blocks);
            // line 60
            echo "            ";
        }
        // line 61
        echo "
            ";
        // line 62
        $this->displayBlock('component_address_zipcode_city', $context, $blocks);
        // line 69
        echo "
            ";
        // line 70
        if (sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "countryState", [], "any", false, false, false, 70)) {
            // line 71
            echo "                ";
            $this->displayBlock('component_address_state', $context, $blocks);
            // line 74
            echo "            ";
        }
        // line 75
        echo "
            ";
        // line 76
        $this->displayBlock('component_address_country', $context, $blocks);
        // line 79
        echo "        </p>
    </div>
";
    }

    // line 11
    public function block_component_address_company($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "                <p>
                ";
        // line 13
        if (sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "company", [], "any", false, false, false, 13)) {
            // line 14
            echo "                    ";
            $this->displayBlock('component_address_company_name', $context, $blocks);
            // line 17
            echo "                    <br/>
                ";
        }
        // line 19
        echo "                </p>
            ";
    }

    // line 14
    public function block_component_address_company_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                        ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "company", [], "any", false, false, false, 15), "html", null, true);
        if (sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "department", [], "any", false, false, false, 15)) {
            echo " - ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "department", [], "any", false, false, false, 15), "html", null, true);
        }
        // line 16
        echo "                    ";
    }

    // line 25
    public function block_component_address_salutation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                    ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "salutation", [], "any", false, false, false, 26), "translated", [], "any", false, false, false, 26), "displayName", [], "any", false, false, false, 26), "html", null, true);
        echo "
                ";
    }

    // line 31
    public function block_component_address_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "                    ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "title", [], "any", false, false, false, 32), "html", null, true);
        echo "<br/>
                ";
    }

    // line 36
    public function block_component_address_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "                ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "firstName", [], "any", false, false, false, 37), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "lastName", [], "any", false, false, false, 37), "html", null, true);
        echo "<br/>
            ";
    }

    // line 40
    public function block_component_address_street($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "street", [], "any", false, false, false, 41), "html", null, true);
        echo "<br/>
            ";
    }

    // line 45
    public function block_component_address_additional_address_line_1($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "                    ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "additionalAddressLine1", [], "any", false, false, false, 46), "html", null, true);
        echo "<br/>
                ";
    }

    // line 51
    public function block_component_address_additional_address_line_2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                    ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "additionalAddressLine2", [], "any", false, false, false, 52), "html", null, true);
        echo "<br/>
                ";
    }

    // line 57
    public function block_component_address_phone_number($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "                    ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "phoneNumber", [], "any", false, false, false, 58), "html", null, true);
        echo "<br/>
                ";
    }

    // line 62
    public function block_component_address_zipcode_city($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "                ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.address.showZipcodeInFrontOfCity")) {
            // line 64
            echo "                    ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "zipcode", [], "any", false, false, false, 64), "html", null, true);
            echo " ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "city", [], "any", false, false, false, 64), "html", null, true);
            echo "<br/>
                ";
        } else {
            // line 66
            echo "                    ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "city", [], "any", false, false, false, 66), "html", null, true);
            echo " ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "zipcode", [], "any", false, false, false, 66), "html", null, true);
            echo "<br/>
                ";
        }
        // line 68
        echo "            ";
    }

    // line 71
    public function block_component_address_state($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "                    ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "countryState", [], "any", false, false, false, 72), "translated", [], "any", false, false, false, 72), "name", [], "any", false, false, false, 72), "html", null, true);
        echo "<br/>
                ";
    }

    // line 76
    public function block_component_address_country($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "                ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "country", [], "any", false, false, false, 77), "translated", [], "any", false, false, false, 77), "name", [], "any", false, false, false, 77), "html", null, true);
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/address/address.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  329 => 77,  325 => 76,  318 => 72,  314 => 71,  310 => 68,  302 => 66,  294 => 64,  291 => 63,  287 => 62,  280 => 58,  276 => 57,  269 => 52,  265 => 51,  258 => 46,  254 => 45,  247 => 41,  243 => 40,  234 => 37,  230 => 36,  223 => 32,  219 => 31,  212 => 26,  208 => 25,  204 => 16,  197 => 15,  193 => 14,  188 => 19,  184 => 17,  181 => 14,  179 => 13,  176 => 12,  172 => 11,  166 => 79,  164 => 76,  161 => 75,  158 => 74,  155 => 71,  153 => 70,  150 => 69,  148 => 62,  145 => 61,  142 => 60,  139 => 57,  137 => 56,  134 => 55,  131 => 54,  128 => 51,  126 => 50,  123 => 49,  120 => 48,  117 => 45,  115 => 44,  112 => 43,  110 => 40,  107 => 39,  105 => 36,  102 => 35,  99 => 34,  96 => 31,  94 => 30,  91 => 29,  88 => 28,  85 => 25,  83 => 24,  79 => 22,  76 => 21,  73 => 11,  71 => 10,  68 => 9,  65 => 8,  62 => 4,  60 => 3,  57 => 2,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/address/address.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/address/address.html.twig");
    }
}
