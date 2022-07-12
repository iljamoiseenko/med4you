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

/* @Storefront/storefront/page/wishlist/wishlist-pagelet.html.twig */
class __TwigTemplate_86c897e50268071c019aa9d067d49d37344671a22d0e4ed774ad9b97966ac080 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'block_wishlist_listing' => [$this, 'block_block_wishlist_listing'],
            'block_wishlist_listing_header' => [$this, 'block_block_wishlist_listing_header'],
            'block_wishlist_listing_header_text' => [$this, 'block_block_wishlist_listing_header_text'],
            'block_wishlist_listing_inner' => [$this, 'block_block_wishlist_listing_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('block_wishlist_listing', $context, $blocks);
    }

    public function block_block_wishlist_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"col-12\">
        ";
        // line 3
        if ((1 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 3), 0))) {
            // line 4
            echo "            ";
            $this->displayBlock('block_wishlist_listing_header', $context, $blocks);
            // line 11
            echo "        ";
        }
        // line 12
        echo "
        ";
        // line 13
        $this->displayBlock('block_wishlist_listing_inner', $context, $blocks);
        // line 16
        echo "    </div>
";
    }

    // line 4
    public function block_block_wishlist_listing_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                <h1 class=\"wishlist-headline\">
                    ";
        // line 6
        $this->displayBlock('block_wishlist_listing_header_text', $context, $blocks);
        // line 9
        echo "                </h1>
            ";
    }

    // line 6
    public function block_block_wishlist_listing_header_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "                        ";
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wishlist.headline"), "html", null, true);
        echo "
                    ";
    }

    // line 13
    public function block_block_wishlist_listing_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            ";
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("@Storefront/storefront/element/cms-element-wishlist-listing.html.twig", "@Storefront/storefront/page/wishlist/wishlist-pagelet.html.twig", 14);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        // line 15
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/wishlist/wishlist-pagelet.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  109 => 15,  98 => 14,  94 => 13,  87 => 7,  83 => 6,  78 => 9,  76 => 6,  73 => 5,  69 => 4,  64 => 16,  62 => 13,  59 => 12,  56 => 11,  53 => 4,  51 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/wishlist/wishlist-pagelet.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/wishlist/wishlist-pagelet.html.twig");
    }
}
