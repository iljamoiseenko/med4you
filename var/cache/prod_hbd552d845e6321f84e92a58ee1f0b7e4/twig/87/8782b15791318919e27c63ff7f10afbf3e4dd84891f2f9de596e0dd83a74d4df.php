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

/* @Storefront/storefront/component/wishlist/listing.html.twig */
class __TwigTemplate_148e8ec57a378b388221ba715cab1bd00b9dffde8ac59f0379df01825a4173d6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'element_product_listing_col_empty' => [$this, 'block_element_product_listing_col_empty'],
            'element_product_listing_col_empty_wishlist' => [$this, 'block_element_product_listing_col_empty_wishlist'],
            'element_product_listing_sorting' => [$this, 'block_element_product_listing_sorting'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/component/product/listing.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/component/product/listing.html.twig", "@Storefront/storefront/component/wishlist/listing.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_element_product_listing_col_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"cms-listing-col wishlist-listing-col col-12\">
        ";
        // line 5
        $this->displayBlock('element_product_listing_col_empty_wishlist', $context, $blocks);
        // line 13
        echo "    </div>
";
    }

    // line 5
    public function block_element_product_listing_col_empty_wishlist($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            <img src=\"";
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/storefront/assets/illustration/wishlist_empty.svg", "asset"), "html", null, true);
        echo "\"
                 alt=\"";
        // line 7
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wishlist.wishlistEmptyDescription")), "html", null, true);
        echo "\"
                 class=\"wishlist-listing-empty\"/>

            <h1 class=\"text-center wishlist-listing-header\">";
        // line 10
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wishlist.wishlistEmptyHeader"), "html", null, true);
        echo "</h1>
            <p class=\"text-center wishlist-listing-description\">";
        // line 11
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wishlist.wishlistEmptyDescription"), "html", null, true);
        echo "</p>
        ";
    }

    // line 16
    public function block_element_product_listing_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/wishlist/listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 16,  81 => 11,  77 => 10,  71 => 7,  66 => 6,  62 => 5,  57 => 13,  55 => 5,  52 => 4,  48 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/wishlist/listing.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/wishlist/listing.html.twig");
    }
}
