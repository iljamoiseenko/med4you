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

/* @Storefront/storefront/component/checkout/hidden-line-items-information.html.twig */
class __TwigTemplate_1892e573481a4a48b906e04271e7604b354922a3f4bb25aaac9984341ab7055a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_hidden_line_items_information' => [$this, 'block_component_hidden_line_items_information'],
            'component_hidden_line_item_information' => [$this, 'block_component_hidden_line_item_information'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_hidden_line_items_information', $context, $blocks);
    }

    public function block_component_hidden_line_items_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"d-none hidden-line-items-information\"
         data-currency=\"";
        // line 3
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "currency", [], "any", false, false, false, 3), "translated", [], "any", false, false, false, 3), "shortName", [], "any", false, false, false, 3), "html", null, true);
        echo "\"
         data-shipping=\"";
        // line 4
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "deliveries", [], "any", false, false, false, 4), "shippingCosts", [], "any", false, false, false, 4), "sum", [], "method", false, false, false, 4), "totalPrice", [], "any", false, false, false, 4), "html", null, true);
        echo "\"
         data-value=\"";
        // line 5
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "price", [], "any", false, false, false, 5), "totalPrice", [], "any", false, false, false, 5), "html", null, true);
        echo "\"
         data-tax=\"";
        // line 6
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "price", [], "any", false, false, false, 6), "calculatedTaxes", [], "any", false, false, false, 6), "amount", [], "any", false, false, false, 6), "html", null, true);
        echo "\"
    >
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lineItems"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["lineItem"]) {
            // line 9
            echo "            ";
            if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["lineItem"], "priceDefinition", [], "any", false, false, false, 9), "price", [], "any", false, false, false, 9) && (true === \is_float(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["lineItem"], "priceDefinition", [], "any", false, false, false, 9), "price", [], "any", false, false, false, 9))))) {
                // line 10
                echo "              ";
                $context["gaPrice"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["lineItem"], "priceDefinition", [], "any", false, false, false, 10), "price", [], "any", false, false, false, 10);
                // line 11
                echo "            ";
            } else {
                // line 12
                echo "              ";
                $context["gaPrice"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["lineItem"], "price", [], "any", false, false, false, 12), "totalPrice", [], "any", false, false, false, 12);
                // line 13
                echo "            ";
            }
            // line 14
            echo "            ";
            $this->displayBlock('component_hidden_line_item_information', $context, $blocks);
            // line 22
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lineItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </div>
";
    }

    // line 14
    public function block_component_hidden_line_item_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                <span class=\"hidden-line-item\"
                      data-id=\"";
        // line 16
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "\"
                      data-name=\"";
        // line 17
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "label", [], "any", false, false, false, 17), "html", null, true);
        echo "\"
                      data-quantity=\"";
        // line 18
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantity", [], "any", false, false, false, 18), "html", null, true);
        echo "\"
                      data-price=\"";
        // line 19
        echo sw_escape_filter($this->env, ($context["gaPrice"] ?? null), "html", null, true);
        echo "\">
                </span>
            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/checkout/hidden-line-items-information.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  139 => 19,  135 => 18,  131 => 17,  127 => 16,  124 => 15,  120 => 14,  115 => 23,  101 => 22,  98 => 14,  95 => 13,  92 => 12,  89 => 11,  86 => 10,  83 => 9,  66 => 8,  61 => 6,  57 => 5,  53 => 4,  49 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/checkout/hidden-line-items-information.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/checkout/hidden-line-items-information.html.twig");
    }
}
