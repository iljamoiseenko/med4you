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

/* @Storefront/storefront/page/product-detail/index.html.twig */
class __TwigTemplate_0ca82ba684cb39bae37458a5e1e752fd4b25b0f8c3dc9054e3f5cd9e12dbdd95 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_head' => [$this, 'block_base_head'],
            'base_content' => [$this, 'block_base_content'],
            'page_product_detail' => [$this, 'block_page_product_detail'],
            'page_product_detail_inner' => [$this, 'block_page_product_detail_inner'],
            'page_product_detail_content' => [$this, 'block_page_product_detail_content'],
            'page_product_detail_headline' => [$this, 'block_page_product_detail_headline'],
            'page_product_detail_main' => [$this, 'block_page_product_detail_main'],
            'page_product_detail_media' => [$this, 'block_page_product_detail_media'],
            'page_product_detail_buy' => [$this, 'block_page_product_detail_buy'],
            'page_product_detail_tabs' => [$this, 'block_page_product_detail_tabs'],
            'page_product_detail_cross_selling' => [$this, 'block_page_product_detail_cross_selling'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/base.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_base_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/page/product-detail/meta.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 4)->display($context);
    }

    // line 7
    public function block_base_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $this->displayBlock('page_product_detail', $context, $blocks);
    }

    public function block_page_product_detail($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
        <div class=\"product-detail\"
             itemscope
             itemtype=\"https://schema.org/Product\">
            ";
        // line 13
        $this->displayBlock('page_product_detail_inner', $context, $blocks);
        // line 75
        echo "        </div>
    ";
    }

    // line 13
    public function block_page_product_detail_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "                ";
        $this->displayBlock('page_product_detail_content', $context, $blocks);
        // line 58
        echo "
                ";
        // line 59
        $this->displayBlock('page_product_detail_tabs', $context, $blocks);
        // line 64
        echo "
                ";
        // line 65
        $this->displayBlock('page_product_detail_cross_selling', $context, $blocks);
        // line 74
        echo "            ";
    }

    // line 14
    public function block_page_product_detail_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                    <div class=\"product-detail-content\">
                        ";
        // line 16
        $this->displayBlock('page_product_detail_headline', $context, $blocks);
        // line 21
        echo "
                        ";
        // line 22
        $context["mediaItems"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 22), "media", [], "any", false, false, false, 22), "media", [], "any", false, false, false, 22);
        // line 23
        echo "
                        ";
        // line 24
        $this->displayBlock('page_product_detail_main', $context, $blocks);
        // line 56
        echo "                    </div>
                ";
    }

    // line 16
    public function block_page_product_detail_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                            <div class=\"row align-items-center product-detail-headline\">
                                ";
        // line 18
        $this->loadTemplate("@Storefront/storefront/page/product-detail/headline.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 18)->display($context);
        // line 19
        echo "                            </div>
                        ";
    }

    // line 24
    public function block_page_product_detail_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                            <div class=\"row product-detail-main\">
                                ";
        // line 26
        $this->displayBlock('page_product_detail_media', $context, $blocks);
        // line 48
        echo "
                                ";
        // line 49
        $this->displayBlock('page_product_detail_buy', $context, $blocks);
        // line 54
        echo "                            </div>
                        ";
    }

    // line 26
    public function block_page_product_detail_media($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "                                    <div class=\"col-lg-7 product-detail-media\">
                                        ";
        // line 28
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 28), "media", [], "any", false, false, false, 28)) {
            // line 29
            echo "                                            ";
            $this->loadTemplate("@Storefront/storefront/element/cms-element-image-gallery.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 29)->display(twig_array_merge($context, ["mediaItems" =>             // line 30
($context["mediaItems"] ?? null), "zoom" => true, "zoomModal" => true, "displayMode" => "contain", "gutter" => 5, "minHeight" => "430px", "navigationArrows" => "inside", "navigationDots" => "inside", "galleryPosition" => "left", "isProduct" => true, "fallbackImageTitle" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 40
($context["page"] ?? null), "product", [], "any", false, false, false, 40), "translated", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "startIndexThumbnails" => 1, "startIndexSlider" => 1, "keepAspectRatioOnZoom" => false]));
            // line 45
            echo "                                        ";
        }
        // line 46
        echo "                                    </div>
                                ";
    }

    // line 49
    public function block_page_product_detail_buy($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "                                    <div class=\"col-lg-5 product-detail-buy\">
                                        ";
        // line 51
        $this->loadTemplate("@Storefront/storefront/page/product-detail/buy-widget.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 51)->display($context);
        // line 52
        echo "                                    </div>
                                ";
    }

    // line 59
    public function block_page_product_detail_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "                    <div class=\"product-detail-tabs\">
                        ";
        // line 61
        $this->loadTemplate("@Storefront/storefront/page/product-detail/tabs.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 61)->display($context);
        // line 62
        echo "                    </div>
                ";
    }

    // line 65
    public function block_page_product_detail_cross_selling($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "                    ";
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "crossSellings", [], "any", false, true, false, 66), "elements", [], "any", true, true, false, 66) && (1 === twig_compare(twig_length_filter($this->env, twig_array_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "crossSellings", [], "any", false, false, false, 66), "elements", [], "any", false, false, false, 66), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return (1 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["item"] ?? null), "total", [], "any", false, false, false, 66), 0)); })), 0)))) {
            // line 67
            echo "                        <div class=\"product-detail-tabs product-detail-cross-selling\">
                            ";
            // line 68
            $this->loadTemplate("@Storefront/storefront/page/product-detail/cross-selling/tabs.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 68)->display(twig_array_merge($context, ["crossSellings" => sw_get_attribute($this->env, $this->source,             // line 69
($context["page"] ?? null), "crossSellings", [], "any", false, false, false, 69)]));
            // line 71
            echo "                        </div>
                    ";
        }
        // line 73
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 73,  231 => 71,  229 => 69,  228 => 68,  225 => 67,  222 => 66,  218 => 65,  213 => 62,  211 => 61,  208 => 60,  204 => 59,  199 => 52,  197 => 51,  194 => 50,  190 => 49,  185 => 46,  182 => 45,  180 => 40,  179 => 30,  177 => 29,  175 => 28,  172 => 27,  168 => 26,  163 => 54,  161 => 49,  158 => 48,  156 => 26,  153 => 25,  149 => 24,  144 => 19,  142 => 18,  139 => 17,  135 => 16,  130 => 56,  128 => 24,  125 => 23,  123 => 22,  120 => 21,  118 => 16,  115 => 15,  111 => 14,  107 => 74,  105 => 65,  102 => 64,  100 => 59,  97 => 58,  94 => 14,  90 => 13,  85 => 75,  83 => 13,  77 => 9,  69 => 8,  65 => 7,  60 => 4,  56 => 3,  45 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/index.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/index.html.twig");
    }
}
