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

/* @Storefront/storefront/page/checkout/summary/summary-net.html.twig */
class __TwigTemplate_2606f9b6bb60459c9b8462f2878d98bf495228b1a4b3c0f032cbda5585e05349 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_summary_net' => [$this, 'block_page_checkout_summary_net'],
            'page_checkout_summary_net_label' => [$this, 'block_page_checkout_summary_net_label'],
            'page_checkout_summary_net_value' => [$this, 'block_page_checkout_summary_net_value'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_checkout_summary_net', $context, $blocks);
    }

    public function block_page_checkout_summary_net($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $this->displayBlock('page_checkout_summary_net_label', $context, $blocks);
        // line 7
        echo "
    ";
        // line 8
        $this->displayBlock('page_checkout_summary_net_value', $context, $blocks);
    }

    // line 2
    public function block_page_checkout_summary_net_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <dt class=\"col-7 checkout-aside-summary-label summary-net\">
            ";
        // line 4
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.summaryNetPrice"));
        echo "
        </dt>
    ";
    }

    // line 8
    public function block_page_checkout_summary_net_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "        <dd class=\"col-5 checkout-aside-summary-value summary-net\">
            ";
        // line 10
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "price", [], "any", false, false, false, 10), "netPrice", [], "any", false, false, false, 10)), "html", null, true);
        echo "
        </dd>
    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/summary/summary-net.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 10,  75 => 9,  71 => 8,  64 => 4,  61 => 3,  57 => 2,  53 => 8,  50 => 7,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/checkout/summary/summary-net.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/checkout/summary/summary-net.html.twig");
    }
}
