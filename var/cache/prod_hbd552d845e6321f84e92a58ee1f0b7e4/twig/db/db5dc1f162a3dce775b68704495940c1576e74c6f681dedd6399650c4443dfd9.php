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

/* @Storefront/storefront/component/account/customer-overview-personal-company.html.twig */
class __TwigTemplate_a12de713b78e92f1b364123f144f4cfbeed90a4d3eaac8b118df77e8f0f9baf8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_customer_overview_personal' => [$this, 'block_component_customer_overview_personal'],
            'component_customer_overview_personal_company' => [$this, 'block_component_customer_overview_personal_company'],
            'component_customer_overview_personal_vat_id' => [$this, 'block_component_customer_overview_personal_vat_id'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_customer_overview_personal', $context, $blocks);
    }

    public function block_component_customer_overview_personal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["address"] = sw_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "defaultBillingAddress", [], "any", false, false, false, 2);
        // line 3
        echo "
    <p>
        ";
        // line 5
        $this->displayBlock('component_customer_overview_personal_company', $context, $blocks);
        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('component_customer_overview_personal_vat_id', $context, $blocks);
        // line 17
        echo "    </p>
";
    }

    // line 5
    public function block_component_customer_overview_personal_company($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "company", [], "any", false, false, false, 6)) {
            // line 7
            echo "                ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "company", [], "any", false, false, false, 7), "html", null, true);
            if (sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "department", [], "any", false, false, false, 7)) {
                echo " - ";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "department", [], "any", false, false, false, 7), "html", null, true);
            }
            // line 8
            echo "                <br/>
            ";
        }
        // line 10
        echo "        ";
    }

    // line 12
    public function block_component_customer_overview_personal_vat_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "            ";
        if (((sw_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "vatIds", [], "any", false, false, false, 13) && (1 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "vatIds", [], "any", false, false, false, 13)), 0))) && (0 !== twig_compare((($__internal_compile_0 = sw_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "vatIds", [], "any", false, false, false, 13)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "")))) {
            // line 14
            echo "                ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyVatLabel"));
            echo ": ";
            echo sw_escape_filter($this->env, twig_join_filter(sw_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "vatIds", [], "any", false, false, false, 14), ", "), "html", null, true);
            echo "
            ";
        }
        // line 16
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/account/customer-overview-personal-company.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  103 => 16,  95 => 14,  92 => 13,  88 => 12,  84 => 10,  80 => 8,  73 => 7,  70 => 6,  66 => 5,  61 => 17,  59 => 12,  56 => 11,  54 => 5,  50 => 3,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/account/customer-overview-personal-company.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/account/customer-overview-personal-company.html.twig");
    }
}
