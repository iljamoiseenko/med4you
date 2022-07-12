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

/* @Storefront/storefront/element/cms-element-wishlist-listing.html.twig */
class __TwigTemplate_3e7e187d97ed7016be0a57cf01495aab5293d774a189e51a344a9df77a76fe2f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'element_wishlist_listing' => [$this, 'block_element_wishlist_listing'],
            'element_wishlist_listing_wrapper' => [$this, 'block_element_wishlist_listing_wrapper'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('element_wishlist_listing', $context, $blocks);
    }

    public function block_element_wishlist_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["listingColumns"] = "col-sm-6 col-lg-4 col-xl-3";
        // line 3
        echo "
    ";
        // line 4
        if ((($context["section"] ?? null) && (0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["section"] ?? null), "type", [], "any", false, false, false, 4), "sidebar")))) {
            // line 5
            echo "        ";
            $context["listingColumns"] = "col-sm-6 col-lg-6 col-xl-4";
            // line 6
            echo "    ";
        }
        // line 7
        echo "
    ";
        // line 8
        $context["slot"] = null;
        // line 9
        echo "
    ";
        // line 10
        $context["filterUrl"] = null;
        // line 11
        echo "    ";
        $context["dataUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("widgets.wishlist.pagelet");
        // line 12
        echo "
    ";
        // line 13
        $context["boxLayout"] = "wishlist";
        // line 14
        echo "    ";
        $context["displayMode"] = null;
        // line 15
        echo "
    ";
        // line 16
        $context["sidebar"] = (0 === twig_compare(($context["sectionType"] ?? null), "sidebar"));
        // line 17
        echo "
    ";
        // line 18
        $context["params"] = ["slots" => sw_get_attribute($this->env, $this->source, ($context["slot"] ?? null), "id", [], "any", false, false, false, 18), "no-aggregations" => 1];
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('element_wishlist_listing_wrapper', $context, $blocks);
    }

    public function block_element_wishlist_listing_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/component/wishlist/listing.html.twig", "@Storefront/storefront/element/cms-element-wishlist-listing.html.twig", 21)->display(twig_array_merge($context, ["searchResult" =>         // line 22
($context["searchResult"] ?? null), "dataUrl" =>         // line 23
($context["dataUrl"] ?? null), "filterUrl" =>         // line 24
($context["filterUrl"] ?? null), "disableEmptyFilter" => false, "params" =>         // line 26
($context["params"] ?? null), "sidebar" =>         // line 27
($context["sidebar"] ?? null), "boxLayout" =>         // line 28
($context["boxLayout"] ?? null), "displayMode" =>         // line 29
($context["displayMode"] ?? null), "listingColumns" =>         // line 30
($context["listingColumns"] ?? null)]));
        // line 32
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-wishlist-listing.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  112 => 32,  110 => 30,  109 => 29,  108 => 28,  107 => 27,  106 => 26,  105 => 24,  104 => 23,  103 => 22,  101 => 21,  94 => 20,  91 => 19,  89 => 18,  86 => 17,  84 => 16,  81 => 15,  78 => 14,  76 => 13,  73 => 12,  70 => 11,  68 => 10,  65 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  52 => 4,  49 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/element/cms-element-wishlist-listing.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-wishlist-listing.html.twig");
    }
}
