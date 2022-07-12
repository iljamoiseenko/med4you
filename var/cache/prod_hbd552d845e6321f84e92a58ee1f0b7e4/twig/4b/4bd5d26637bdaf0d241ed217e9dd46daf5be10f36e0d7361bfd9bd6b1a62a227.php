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

/* @Storefront/storefront/page/product-detail/meta.html.twig */
class __TwigTemplate_48f3ee2ca171cc1a5d6710a7fc6700558e117e9edf4b9de0ef513c3a2f909d94 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_head_meta_tags_opengraph' => [$this, 'block_layout_head_meta_tags_opengraph'],
            'layout_head_title_inner' => [$this, 'block_layout_head_title_inner'],
            'layout_head_canonical' => [$this, 'block_layout_head_canonical'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/layout/meta.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/layout/meta.html.twig", "@Storefront/storefront/page/product-detail/meta.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_layout_head_meta_tags_opengraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <meta property=\"og:type\"
          content=\"product\"/>
    <meta property=\"og:site_name\"
          content=\"";
        // line 7
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shopName"), "html", null, true);
        echo "\"/>
    <meta property=\"og:url\"
          content=\"";
        // line 9
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\"/>
    <meta property=\"og:title\"
          content=\"";
        // line 11
        echo sw_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
        echo "\"/>

    <meta property=\"og:description\"
          content=\"";
        // line 14
        echo sw_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
        echo "\"/>
    <meta property=\"og:image\"
          content=\"";
        // line 16
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 16), "cover", [], "any", false, false, false, 16), "media", [], "any", false, false, false, 16), "url", [], "any", false, false, false, 16), "html", null, true);
        echo "\"/>

    ";
        // line 18
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 18), "manufacturer", [], "any", false, false, false, 18)) {
            // line 19
            echo "        <meta property=\"product:brand\"
              content=\"";
            // line 20
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 20), "manufacturer", [], "any", false, false, false, 20), "translated", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
            echo "\"/>
    ";
        }
        // line 22
        echo "
    ";
        // line 23
        $context["metaPrice"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 23), "calculatedPrice", [], "any", false, false, false, 23);
        // line 24
        echo "    ";
        if ((1 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 24), "calculatedPrices", [], "any", false, false, false, 24), "count", [], "any", false, false, false, 24), 0))) {
            // line 25
            echo "        ";
            $context["metaPrice"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 25), "calculatedPrices", [], "any", false, false, false, 25), "last", [], "any", false, false, false, 25);
            // line 26
            echo "    ";
        }
        // line 27
        echo "    <meta property=\"product:price:amount\"
          content=\"";
        // line 28
        echo sw_escape_filter($this->env, twig_round(sw_get_attribute($this->env, $this->source, ($context["metaPrice"] ?? null), "unitPrice", [], "any", false, false, false, 28), sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "currency", [], "any", false, false, false, 28), "itemRounding", [], "any", false, false, false, 28), "decimals", [], "any", false, false, false, 28)), "html", null, true);
        echo "\"/>
    <meta property=\"product:price:currency\"
          content=\"";
        // line 30
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "currency", [], "any", false, false, false, 30), "isoCode", [], "any", false, false, false, 30), "html", null, true);
        echo "\"/>
    <meta property=\"product:product_link\"
          content=\"";
        // line 32
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\"/>

    <meta name=\"twitter:card\"
          content=\"product\"/>
    <meta name=\"twitter:site\"
          content=\"";
        // line 37
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shopName"), "html", null, true);
        echo "\"/>
    <meta name=\"twitter:title\"
          content=\"";
        // line 39
        echo sw_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
        echo "\"/>
    <meta name=\"twitter:description\"
          content=\"";
        // line 41
        echo sw_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
        echo "\"/>
    <meta name=\"twitter:image\"
          content=\"";
        // line 43
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 43), "cover", [], "any", false, false, false, 43), "media", [], "any", false, false, false, 43), "url", [], "any", false, false, false, 43), "html", null, true);
        echo "\"/>
";
    }

    // line 46
    public function block_layout_head_title_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "    ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 47), "metaTitle", [], "any", false, false, false, 47)) {
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 47), "metaTitle", [], "any", false, false, false, 47), "html", null, true);
        } else {
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 47), "translated", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
            if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 47), "variation", [], "any", false, false, false, 47)) {
                echo " - ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 47), "variation", [], "any", false, false, false, 47));
                foreach ($context['_seq'] as $context["_key"] => $context["variation"]) {
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["variation"], "group", [], "any", false, false, false, 47), "html", null, true);
                    echo ": ";
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["variation"], "option", [], "any", false, false, false, 47), "html", null, true);
                    if ((0 !== twig_compare(twig_last($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 47), "variation", [], "any", false, false, false, 47)), $context["variation"]))) {
                        echo " | ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
    }

    // line 50
    public function block_layout_head_canonical($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "    ";
        $context["canonicalUrl"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51);
        // line 52
        echo "
    ";
        // line 53
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 53), "canonicalProductId", [], "any", false, false, false, 53)) {
            // line 54
            echo "        ";
            $context["canonicalUrl"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 54), "canonicalProductId", [], "any", false, false, false, 54);
            // line 55
            echo "    ";
        }
        // line 56
        echo "
    <link rel=\"canonical\" href=\"";
        // line 57
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["canonicalUrl"] ?? null)]), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/meta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 57,  196 => 56,  193 => 55,  190 => 54,  188 => 53,  185 => 52,  182 => 51,  178 => 50,  153 => 47,  149 => 46,  143 => 43,  138 => 41,  133 => 39,  128 => 37,  120 => 32,  115 => 30,  110 => 28,  107 => 27,  104 => 26,  101 => 25,  98 => 24,  96 => 23,  93 => 22,  88 => 20,  85 => 19,  83 => 18,  78 => 16,  73 => 14,  67 => 11,  62 => 9,  57 => 7,  52 => 4,  48 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/meta.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/meta.html.twig");
    }
}
