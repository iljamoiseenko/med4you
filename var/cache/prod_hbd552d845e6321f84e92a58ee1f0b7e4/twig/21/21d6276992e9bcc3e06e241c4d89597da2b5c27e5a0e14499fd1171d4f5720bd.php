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

/* @Storefront/storefront/block/cms-block-product-listing.html.twig */
class __TwigTemplate_3b98eb8e97ae6d89fa9d5d3a4eb48b36cd669cc343bdce9a8f52d89746b6718b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'block_product_listing' => [$this, 'block_block_product_listing'],
            'block_product_listing_inner' => [$this, 'block_block_product_listing_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('block_product_listing', $context, $blocks);
    }

    public function block_block_product_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["element"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "slots", [], "any", false, false, false, 2), "getSlot", [0 => "content"], "method", false, false, false, 2);
        // line 3
        echo "    ";
        $context["columns"] = 1;
        // line 4
        echo "
    <div class=\"col-12\" data-cms-element-id=\"";
        // line 5
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
        ";
        // line 6
        $this->displayBlock('block_product_listing_inner', $context, $blocks);
        // line 10
        echo "    </div>
";
    }

    // line 6
    public function block_block_product_listing_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            ";
        $context["template"] = (("@Storefront/storefront/element/cms-element-" . sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 7)) . ".html.twig");
        // line 8
        echo "            ";
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find(($context["template"] ?? null));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/block/cms-block-product-listing.html.twig", 8);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        // line 9
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/block/cms-block-product-listing.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 9,  73 => 8,  70 => 7,  66 => 6,  61 => 10,  59 => 6,  55 => 5,  52 => 4,  49 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/block/cms-block-product-listing.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/block/cms-block-product-listing.html.twig");
    }
}
