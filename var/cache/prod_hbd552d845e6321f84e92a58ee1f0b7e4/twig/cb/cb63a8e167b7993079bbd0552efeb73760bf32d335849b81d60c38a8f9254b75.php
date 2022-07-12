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

/* @Storefront/storefront/page/checkout/summary/summary-shipping.html.twig */
class __TwigTemplate_03627f092ed30cda24a2fd24bbb8ecdf78a8e38a9064c89e9a146a74f54443dc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_summary_shippings' => [$this, 'block_page_checkout_summary_shippings'],
            'page_checkout_summary_shipping' => [$this, 'block_page_checkout_summary_shipping'],
            'page_checkout_summary_shipping_label' => [$this, 'block_page_checkout_summary_shipping_label'],
            'page_checkout_summary_shipping_value' => [$this, 'block_page_checkout_summary_shipping_value'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_checkout_summary_shippings', $context, $blocks);
    }

    public function block_page_checkout_summary_shippings($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "deliveries", [], "any", false, false, false, 2));
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
        foreach ($context['_seq'] as $context["_key"] => $context["delivery"]) {
            // line 3
            echo "        ";
            $this->displayBlock('page_checkout_summary_shipping', $context, $blocks);
            // line 16
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delivery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 3
    public function block_page_checkout_summary_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            ";
        $this->displayBlock('page_checkout_summary_shipping_label', $context, $blocks);
        // line 9
        echo "
            ";
        // line 10
        $this->displayBlock('page_checkout_summary_shipping_value', $context, $blocks);
        // line 15
        echo "        ";
    }

    // line 4
    public function block_page_checkout_summary_shipping_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                <dt class=\"col-7 checkout-aside-summary-label\">
                    ";
        // line 6
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.summaryShipping"));
        echo "
                </dt>
            ";
    }

    // line 10
    public function block_page_checkout_summary_shipping_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "                <dd class=\"col-5 checkout-aside-summary-value\">
                    ";
        // line 12
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["delivery"] ?? null), "shippingCosts", [], "any", false, false, false, 12), "totalPrice", [], "any", false, false, false, 12)), "html", null, true);
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "
                </dd>
            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/summary/summary-shipping.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  122 => 12,  119 => 11,  115 => 10,  108 => 6,  105 => 5,  101 => 4,  97 => 15,  95 => 10,  92 => 9,  89 => 4,  85 => 3,  69 => 16,  66 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/checkout/summary/summary-shipping.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/checkout/summary/summary-shipping.html.twig");
    }
}
