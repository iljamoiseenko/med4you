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

/* @Storefront/storefront/page/checkout/address/register.html.twig */
class __TwigTemplate_be6ee2e78d7becdd72a24248deb04e65938a730e55df6488fbfa045917692803 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'component_account_register_personal_account_fields' => [$this, 'block_component_account_register_personal_account_fields'],
            'page_checkout_register_personal_guest' => [$this, 'block_page_checkout_register_personal_guest'],
            'page_checkout_register_personal_guest_input' => [$this, 'block_page_checkout_register_personal_guest_input'],
            'page_checkout_register_personal_guest_label' => [$this, 'block_page_checkout_register_personal_guest_label'],
            'component_account_register_form_action' => [$this, 'block_component_account_register_form_action'],
            'component_account_register_create_account' => [$this, 'block_component_account_register_create_account'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/component/account/register.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/component/account/register.html.twig", "@Storefront/storefront/page/checkout/address/register.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_component_account_register_personal_account_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayBlock('page_checkout_register_personal_guest', $context, $blocks);
        // line 42
        echo "
    ";
        // line 43
        $this->displayParentBlock("component_account_register_personal_account_fields", $context, $blocks);
        echo "
";
    }

    // line 4
    public function block_page_checkout_register_personal_guest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        <div class=\"";
        echo sw_escape_filter($this->env, ($context["formCheckboxWrapperClass"] ?? null), "html", null, true);
        echo " register-guest-control\">
            ";
        // line 6
        $this->displayBlock('page_checkout_register_personal_guest_input', $context, $blocks);
        // line 29
        echo "
            ";
        // line 30
        $this->displayBlock('page_checkout_register_personal_guest_label', $context, $blocks);
        // line 40
        echo "        </div>
    ";
    }

    // line 6
    public function block_page_checkout_register_personal_guest_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_16236")) {
            // line 8
            echo "                <input type=\"checkbox\"
                       class=\"";
            // line 9
            echo sw_escape_filter($this->env, ($context["formCheckInputClass"] ?? null), "html", null, true);
            echo "\"
                       name=\"createCustomerAccount\"
                       value=\"true\"
                       id=\"personalGuest\"
                       ";
            // line 13
            if ((0 === twig_compare($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.createCustomerAccountDefault"), 1))) {
                echo "checked=\"checked\"";
            }
            // line 14
            echo "                       data-form-field-toggle=\"true\"
                       data-form-field-toggle-target=\".js-form-field-toggle-guest-mode\"
                       data-form-field-toggle-value=\"true\">
            ";
        } else {
            // line 18
            echo "                <input type=\"checkbox\"
                       class=\"custom-control-input\"
                       name=\"guest\"
                       value=\"true\"
                       id=\"personalGuest\"
                       ";
            // line 23
            if (sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "guest"], "method", false, false, false, 23)) {
                echo "checked=\"checked\"";
            }
            // line 24
            echo "                       data-form-field-toggle=\"true\"
                       data-form-field-toggle-target=\".js-form-field-toggle-guest-mode\"
                       data-form-field-toggle-value=\"false\">
            ";
        }
        // line 28
        echo "            ";
    }

    // line 30
    public function block_page_checkout_register_personal_guest_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                <label class=\"custom-control-label\"
                       for=\"personalGuest\">
                ";
        // line 33
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_16236")) {
            // line 34
            echo "                    ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.registerCustomermodeLabel"));
            echo "
                ";
        } else {
            // line 36
            echo "                    ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.registerGuestmodeLabel"));
            echo "
                ";
        }
        // line 38
        echo "                </label>
            ";
    }

    // line 46
    public function block_component_account_register_form_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "    <input type=\"hidden\"
           name=\"errorRoute\"
           value=\"frontend.checkout.register.page\"/>
";
    }

    // line 52
    public function block_component_account_register_create_account($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/address/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 53,  174 => 52,  167 => 47,  163 => 46,  158 => 38,  152 => 36,  146 => 34,  144 => 33,  140 => 31,  136 => 30,  132 => 28,  126 => 24,  122 => 23,  115 => 18,  109 => 14,  105 => 13,  98 => 9,  95 => 8,  92 => 7,  88 => 6,  83 => 40,  81 => 30,  78 => 29,  76 => 6,  71 => 5,  67 => 4,  61 => 43,  58 => 42,  55 => 4,  51 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/checkout/address/register.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/checkout/address/register.html.twig");
    }
}
