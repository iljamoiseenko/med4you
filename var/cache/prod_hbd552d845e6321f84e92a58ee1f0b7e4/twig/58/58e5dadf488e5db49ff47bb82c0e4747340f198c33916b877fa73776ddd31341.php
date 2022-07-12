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

/* @Storefront/storefront/component/delivery-information.html.twig */
class __TwigTemplate_cf97b13e8a0397fc3ea9bd7b6c88f002399edd951a48e133b291f23355011902 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_delivery_information' => [$this, 'block_component_delivery_information'],
            'component_delivery_information_shipping_free' => [$this, 'block_component_delivery_information_shipping_free'],
            'component_delivery_information_not_available' => [$this, 'block_component_delivery_information_not_available'],
            'component_delivery_information_pre_order' => [$this, 'block_component_delivery_information_pre_order'],
            'component_delivery_information_available' => [$this, 'block_component_delivery_information_available'],
            'component_delivery_information_soldout' => [$this, 'block_component_delivery_information_soldout'],
            'component_delivery_information_restock' => [$this, 'block_component_delivery_information_restock'],
            'component_delivery_information_default' => [$this, 'block_component_delivery_information_default'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_delivery_information', $context, $blocks);
    }

    public function block_component_delivery_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        // line 3
        echo "    ";
        if ((array_key_exists("page", $context) && sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", true, true, false, 3))) {
            // line 4
            echo "        ";
            $context["product"] = sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 4);
            // line 5
            echo "    ";
        }
        // line 6
        echo "
    <div class=\"product-delivery-information\">
        ";
        // line 8
        if (sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "shippingFree", [], "any", false, false, false, 8)) {
            // line 9
            echo "            ";
            $this->displayBlock('component_delivery_information_shipping_free', $context, $blocks);
            // line 15
            echo "        ";
        }
        // line 16
        echo "
        ";
        // line 17
        if ( !sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "active", [], "any", false, false, false, 17)) {
            // line 18
            echo "            ";
            $this->displayBlock('component_delivery_information_not_available', $context, $blocks);
            // line 26
            echo "        ";
        } elseif ((sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "releaseDate", [], "any", false, false, false, 26) && (1 === twig_compare(twig_date_format_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "releaseDate", [], "any", false, false, false, 26), "U"), twig_date_format_filter($this->env, "now", "U"))))) {
            // line 27
            echo "            ";
            $this->displayBlock('component_delivery_information_pre_order', $context, $blocks);
            // line 35
            echo "        ";
        } elseif (((0 <= twig_compare(sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "availableStock", [], "any", false, false, false, 35), sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 35))) && sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "deliveryTime", [], "any", false, false, false, 35))) {
            // line 36
            echo "            ";
            $this->displayBlock('component_delivery_information_available', $context, $blocks);
            // line 46
            echo "        ";
        } elseif ((sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isCloseout", [], "any", false, false, false, 46) && (-1 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "availableStock", [], "any", false, false, false, 46), sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 46))))) {
            // line 47
            echo "            ";
            $this->displayBlock('component_delivery_information_soldout', $context, $blocks);
            // line 54
            echo "        ";
        } elseif ((((-1 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "availableStock", [], "any", false, false, false, 54), sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 54))) && sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "deliveryTime", [], "any", false, false, false, 54)) && sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "restockTime", [], "any", false, false, false, 54))) {
            // line 55
            echo "            ";
            $this->displayBlock('component_delivery_information_restock', $context, $blocks);
            // line 66
            echo "        ";
        } else {
            // line 67
            echo "            ";
            $this->displayBlock('component_delivery_information_default', $context, $blocks);
            // line 68
            echo "        ";
        }
        // line 69
        echo "    </div>
";
    }

    // line 9
    public function block_component_delivery_information_shipping_free($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                <p class=\"delivery-information delivery-shipping-free\">
                    <span class=\"delivery-status-indicator bg-info\"></span>
                    ";
        // line 12
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.deliveryShippingFree"));
        echo "
                </p>
            ";
    }

    // line 18
    public function block_component_delivery_information_not_available($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                <link itemprop=\"availability\"
                      href=\"http://schema.org/LimitedAvailability\"/>
                <p class=\"delivery-information delivery-not-available\">
                    <span class=\"delivery-status-indicator bg-danger\"></span>
                    ";
        // line 23
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.deliveryNotAvailable"));
        echo "
                </p>
            ";
    }

    // line 27
    public function block_component_delivery_information_pre_order($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                <link itemprop=\"availability\"
                      href=\"http://schema.org/PreOrder\"/>
                <p class=\"delivery-information delivery-preorder\">
                    <span class=\"delivery-status-indicator bg-warning\"></span>
                    ";
        // line 32
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.deliveryShipping"));
        echo " ";
        echo sw_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "releaseDate", [], "any", false, false, false, 32), "long", "", null, "gregorian", sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 32), "locale", [], "any", false, false, false, 32)), "html", null, true);
        echo "
                </p>
            ";
    }

    // line 36
    public function block_component_delivery_information_available($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "                <link itemprop=\"availability\" href=\"http://schema.org/InStock\"/>
                <p class=\"delivery-information delivery-available\">
                    <span class=\"delivery-status-indicator bg-success\"></span>

                    ";
        // line 41
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.deliveryTimeAvailable", ["%name%" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 42
($context["product"] ?? null), "deliveryTime", [], "any", false, false, false, 42), "translation", [0 => "name"], "method", false, false, false, 42)]));
        // line 43
        echo "
                </p>
            ";
    }

    // line 47
    public function block_component_delivery_information_soldout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "                <link itemprop=\"availability\" href=\"http://schema.org/LimitedAvailability\"/>
                <p class=\"delivery-information delivery-soldout\">
                    <span class=\"delivery-status-indicator bg-danger\"></span>
                    ";
        // line 51
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.soldOut"));
        echo "
                </p>
            ";
    }

    // line 55
    public function block_component_delivery_information_restock($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "                <link itemprop=\"availability\" href=\"http://schema.org/LimitedAvailability\"/>
                <p class=\"delivery-information delivery-restock\">
                    <span class=\"delivery-status-indicator bg-warning\"></span>
                    ";
        // line 59
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.deliveryTimeRestock", ["%count%" => sw_get_attribute($this->env, $this->source,         // line 60
($context["product"] ?? null), "restockTime", [], "any", false, false, false, 60), "%restockTime%" => sw_get_attribute($this->env, $this->source,         // line 61
($context["product"] ?? null), "restockTime", [], "any", false, false, false, 61), "%name%" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 62
($context["product"] ?? null), "deliveryTime", [], "any", false, false, false, 62), "translation", [0 => "name"], "method", false, false, false, 62)]));
        // line 63
        echo "
                </p>
            ";
    }

    // line 67
    public function block_component_delivery_information_default($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/delivery-information.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  227 => 67,  221 => 63,  219 => 62,  218 => 61,  217 => 60,  216 => 59,  211 => 56,  207 => 55,  200 => 51,  195 => 48,  191 => 47,  185 => 43,  183 => 42,  182 => 41,  176 => 37,  172 => 36,  163 => 32,  157 => 28,  153 => 27,  146 => 23,  140 => 19,  136 => 18,  129 => 12,  125 => 10,  121 => 9,  116 => 69,  113 => 68,  110 => 67,  107 => 66,  104 => 55,  101 => 54,  98 => 47,  95 => 46,  92 => 36,  89 => 35,  86 => 27,  83 => 26,  80 => 18,  78 => 17,  75 => 16,  72 => 15,  69 => 9,  67 => 8,  63 => 6,  60 => 5,  57 => 4,  54 => 3,  52 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/delivery-information.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/delivery-information.html.twig");
    }
}
