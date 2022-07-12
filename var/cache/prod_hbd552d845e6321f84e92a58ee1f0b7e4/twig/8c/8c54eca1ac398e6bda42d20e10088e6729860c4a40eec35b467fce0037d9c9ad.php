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

/* @Storefront/storefront/page/checkout/summary/summary-tax.html.twig */
class __TwigTemplate_00cdcba84e932e2d67bc910eba3bf2236176d767e662f39737321d12a74dc584 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_summary_taxes' => [$this, 'block_page_checkout_summary_taxes'],
            'page_checkout_summary_tax' => [$this, 'block_page_checkout_summary_tax'],
            'page_checkout_summary_tax_label' => [$this, 'block_page_checkout_summary_tax_label'],
            'page_checkout_summary_tax_value' => [$this, 'block_page_checkout_summary_tax_value'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_checkout_summary_taxes', $context, $blocks);
    }

    public function block_page_checkout_summary_taxes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "price", [], "any", false, false, false, 2), "calculatedTaxes", [], "any", false, false, false, 2));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["taxItem"]) {
            // line 3
            echo "        ";
            $this->displayBlock('page_checkout_summary_tax', $context, $blocks);
            // line 18
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 3
    public function block_page_checkout_summary_tax($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            ";
        $this->displayBlock('page_checkout_summary_tax_label', $context, $blocks);
        // line 11
        echo "
            ";
        // line 12
        $this->displayBlock('page_checkout_summary_tax_value', $context, $blocks);
        // line 17
        echo "        ";
    }

    // line 4
    public function block_page_checkout_summary_tax_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                <dt class=\"col-7 checkout-aside-summary-label summary-tax\">
                    ";
        // line 6
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.summaryTax", ["%rate%" => sw_get_attribute($this->env, $this->source,         // line 7
($context["taxItem"] ?? null), "taxRate", [], "any", false, false, false, 7)]));
        // line 8
        echo "
                </dt>
            ";
    }

    // line 12
    public function block_page_checkout_summary_tax_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "                <dd class=\"col-5 checkout-aside-summary-value summary-tax\">
                    ";
        // line 14
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, ($context["taxItem"] ?? null), "tax", [], "any", false, false, false, 14)), "html", null, true);
        echo "
                </dd>
            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/summary/summary-tax.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  124 => 14,  121 => 13,  117 => 12,  111 => 8,  109 => 7,  108 => 6,  105 => 5,  101 => 4,  97 => 17,  95 => 12,  92 => 11,  89 => 4,  85 => 3,  69 => 18,  66 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/checkout/summary/summary-tax.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/checkout/summary/summary-tax.html.twig");
    }
}
