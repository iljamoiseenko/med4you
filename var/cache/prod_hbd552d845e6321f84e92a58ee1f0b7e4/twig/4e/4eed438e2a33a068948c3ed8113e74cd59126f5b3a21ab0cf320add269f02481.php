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

/* @Storefront/storefront/component/product/card/box-standard.html.twig */
class __TwigTemplate_40b48f8ef41a1b14907602d1d9fdb95db8d04013d92ac6fcf7ace3296adb18cd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_box' => [$this, 'block_component_product_box'],
            'component_product_box_content' => [$this, 'block_component_product_box_content'],
            'component_product_box_badges' => [$this, 'block_component_product_box_badges'],
            'component_product_box_rich_snippets' => [$this, 'block_component_product_box_rich_snippets'],
            'component_product_box_image' => [$this, 'block_component_product_box_image'],
            'component_product_box_wishlist_action' => [$this, 'block_component_product_box_wishlist_action'],
            'component_product_box_info' => [$this, 'block_component_product_box_info'],
            'component_product_box_rating' => [$this, 'block_component_product_box_rating'],
            'component_product_box_name' => [$this, 'block_component_product_box_name'],
            'component_product_box_variant_characteristics' => [$this, 'block_component_product_box_variant_characteristics'],
            'component_product_box_description' => [$this, 'block_component_product_box_description'],
            'component_product_box_price' => [$this, 'block_component_product_box_price'],
            'component_product_box_action' => [$this, 'block_component_product_box_action'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_product_box', $context, $blocks);
    }

    public function block_component_product_box($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if (($context["product"] ?? null)) {
            // line 3
            echo "        ";
            $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3);
            // line 4
            echo "        ";
            $context["id"] = sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 4);
            // line 5
            echo "        ";
            $context["cover"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cover", [], "any", false, false, false, 5), "media", [], "any", false, false, false, 5);
            // line 6
            echo "        ";
            $context["variation"] = sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation", [], "any", false, false, false, 6);
            // line 7
            echo "
        <div class=\"card product-box box-";
            // line 8
            echo sw_escape_filter($this->env, ($context["layout"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 9
            $this->displayBlock('component_product_box_content', $context, $blocks);
            // line 126
            echo "        </div>
    ";
        }
    }

    // line 9
    public function block_component_product_box_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                <div class=\"card-body\">
                    ";
        // line 11
        $this->displayBlock('component_product_box_badges', $context, $blocks);
        // line 14
        echo "
                    ";
        // line 15
        $this->displayBlock('component_product_box_rich_snippets', $context, $blocks);
        // line 19
        echo "
                    ";
        // line 20
        $this->displayBlock('component_product_box_image', $context, $blocks);
        // line 68
        echo "
                    ";
        // line 69
        $this->displayBlock('component_product_box_info', $context, $blocks);
        // line 124
        echo "                </div>
            ";
    }

    // line 11
    public function block_component_product_box_badges($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/badges.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 12)->display($context);
        // line 13
        echo "                    ";
    }

    // line 15
    public function block_component_product_box_rich_snippets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                        ";
        // line 17
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/meta.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 17)->display($context);
        // line 18
        echo "                    ";
    }

    // line 20
    public function block_component_product_box_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                        <div class=\"product-image-wrapper\">
                            ";
        // line 23
        echo "                            ";
        $context["displayMode"] = ((($context["displayMode"] ?? null)) ? (($context["displayMode"] ?? null)) : ("standard"));
        // line 24
        echo "
                            ";
        // line 26
        echo "                            ";
        if (((0 === twig_compare(($context["layout"] ?? null), "image")) && (0 === twig_compare(($context["displayMode"] ?? null), "standard")))) {
            // line 27
            echo "                                ";
            $context["displayMode"] = "cover";
            // line 28
            echo "                            ";
        }
        // line 29
        echo "
                            <a href=\"";
        // line 30
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["id"] ?? null)]), "html", null, true);
        echo "\"
                               title=\"";
        // line 31
        echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
                               class=\"product-image-link is-";
        // line 32
        echo sw_escape_filter($this->env, ($context["displayMode"] ?? null), "html", null, true);
        echo "\">
                                ";
        // line 33
        if (sw_get_attribute($this->env, $this->source, ($context["cover"] ?? null), "url", [], "any", false, false, false, 33)) {
            // line 34
            echo "                                    ";
            $context["attributes"] = ["class" => ("product-image is-" .             // line 35
($context["displayMode"] ?? null)), "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 36
($context["cover"] ?? null), "translated", [], "any", false, false, false, 36), "alt", [], "any", false, false, false, 36)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["cover"] ?? null), "translated", [], "any", false, false, false, 36), "alt", [], "any", false, false, false, 36)) : (($context["name"] ?? null))), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 37
($context["cover"] ?? null), "translated", [], "any", false, false, false, 37), "title", [], "any", false, false, false, 37)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["cover"] ?? null), "translated", [], "any", false, false, false, 37), "title", [], "any", false, false, false, 37)) : (($context["name"] ?? null)))];
            // line 39
            echo "
                                    ";
            // line 40
            if (((0 === twig_compare(($context["displayMode"] ?? null), "cover")) || (0 === twig_compare(($context["displayMode"] ?? null), "contain")))) {
                // line 41
                echo "                                        ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["data-object-fit" => ($context["displayMode"] ?? null)]);
                // line 42
                echo "                                    ";
            }
            // line 43
            echo "
                                    ";
            // line 44
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/product/card/box-standard.html.twig", 44);
            })())->display(twig_array_merge($context, ["media" =>             // line 45
($context["cover"] ?? null), "sizes" =>             // line 46
($context["sizes"] ?? null), "name" => "product-image-thumbnails"]));
            // line 48
            echo "                                ";
        } else {
            // line 49
            echo "                                    <div class=\"product-image-placeholder\">
                                        ";
            // line 50
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/product/card/box-standard.html.twig", 50);
            })())->display(twig_array_merge($context, ["size" => "fluid", "name" => "placeholder"]));
            // line 53
            echo "                                    </div>
                                ";
        }
        // line 55
        echo "                            </a>

                            ";
        // line 57
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.wishlistEnabled")) {
            // line 58
            echo "                                ";
            $this->displayBlock('component_product_box_wishlist_action', $context, $blocks);
            // line 64
            echo "                            ";
        }
        // line 65
        echo "
                        </div>
                    ";
    }

    // line 58
    public function block_component_product_box_wishlist_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/wishlist.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 59)->display(twig_array_merge($context, ["appearance" => "circle", "productId" =>         // line 61
($context["id"] ?? null)]));
        // line 63
        echo "                                ";
    }

    // line 69
    public function block_component_product_box_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "                        <div class=\"product-info\">
                            ";
        // line 71
        $this->displayBlock('component_product_box_rating', $context, $blocks);
        // line 83
        echo "
                            ";
        // line 84
        $this->displayBlock('component_product_box_name', $context, $blocks);
        // line 91
        echo "
                            ";
        // line 92
        $this->displayBlock('component_product_box_variant_characteristics', $context, $blocks);
        // line 108
        echo "
                            ";
        // line 109
        $this->displayBlock('component_product_box_description', $context, $blocks);
        // line 114
        echo "
                            ";
        // line 115
        $this->displayBlock('component_product_box_price', $context, $blocks);
        // line 118
        echo "
                            ";
        // line 119
        $this->displayBlock('component_product_box_action', $context, $blocks);
        // line 122
        echo "                        </div>
                    ";
    }

    // line 71
    public function block_component_product_box_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "                                ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.listing.showReview")) {
            // line 73
            echo "                                    <div class=\"product-rating\">
                                        ";
            // line 74
            if (sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "ratingAverage", [], "any", false, false, false, 74)) {
                // line 75
                echo "                                            ";
                $this->loadTemplate("@Storefront/storefront/component/review/rating.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 75)->display(twig_array_merge($context, ["points" => sw_get_attribute($this->env, $this->source,                 // line 76
($context["product"] ?? null), "ratingAverage", [], "any", false, false, false, 76), "style" => "text-primary"]));
                // line 79
                echo "                                        ";
            }
            // line 80
            echo "                                    </div>
                                ";
        }
        // line 82
        echo "                            ";
    }

    // line 84
    public function block_component_product_box_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "                                <a href=\"";
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["id"] ?? null)]), "html", null, true);
        echo "\"
                                   class=\"product-name\"
                                   title=\"";
        // line 87
        echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
                                    ";
        // line 88
        echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "
                                </a>
                            ";
    }

    // line 92
    public function block_component_product_box_variant_characteristics($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "                                <div class=\"product-variant-characteristics\">
                                    <div class=\"product-variant-characteristics-text\">
                                        ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation", [], "any", false, false, false, 95));
        foreach ($context['_seq'] as $context["_key"] => $context["variation"]) {
            // line 96
            echo "                                            ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["variation"], "group", [], "any", false, false, false, 96), "html", null, true);
            echo ":
                                            <span class=\"product-variant-characteristics-option\">
                                                ";
            // line 98
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["variation"], "option", [], "any", false, false, false, 98), "html", null, true);
            echo "
                                            </span>

                                            ";
            // line 101
            if ((0 !== twig_compare(twig_last($this->env, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation", [], "any", false, false, false, 101)), $context["variation"]))) {
                // line 102
                echo "                                                ";
                echo " | ";
                echo "
                                            ";
            }
            // line 104
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                                    </div>
                                </div>
                            ";
    }

    // line 109
    public function block_component_product_box_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 110
        echo "                                <div class=\"product-description\">
                                    ";
        // line 111
        echo twig_striptags(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 111), "description", [], "any", false, false, false, 111));
        echo "
                                </div>
                            ";
    }

    // line 115
    public function block_component_product_box_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "                                ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/price-unit.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 116)->display($context);
        // line 117
        echo "                            ";
    }

    // line 119
    public function block_component_product_box_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 120
        echo "                                ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/action.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 120)->display($context);
        // line 121
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/box-standard.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  420 => 121,  417 => 120,  413 => 119,  409 => 117,  406 => 116,  402 => 115,  395 => 111,  392 => 110,  388 => 109,  382 => 105,  376 => 104,  370 => 102,  368 => 101,  362 => 98,  356 => 96,  352 => 95,  348 => 93,  344 => 92,  337 => 88,  333 => 87,  327 => 85,  323 => 84,  319 => 82,  315 => 80,  312 => 79,  310 => 76,  308 => 75,  306 => 74,  303 => 73,  300 => 72,  296 => 71,  291 => 122,  289 => 119,  286 => 118,  284 => 115,  281 => 114,  279 => 109,  276 => 108,  274 => 92,  271 => 91,  269 => 84,  266 => 83,  264 => 71,  261 => 70,  257 => 69,  253 => 63,  251 => 61,  249 => 59,  245 => 58,  239 => 65,  236 => 64,  233 => 58,  231 => 57,  227 => 55,  223 => 53,  215 => 50,  212 => 49,  209 => 48,  207 => 46,  206 => 45,  199 => 44,  196 => 43,  193 => 42,  190 => 41,  188 => 40,  185 => 39,  183 => 37,  182 => 36,  181 => 35,  179 => 34,  177 => 33,  173 => 32,  169 => 31,  165 => 30,  162 => 29,  159 => 28,  156 => 27,  153 => 26,  150 => 24,  147 => 23,  144 => 21,  140 => 20,  136 => 18,  133 => 17,  131 => 16,  127 => 15,  123 => 13,  120 => 12,  116 => 11,  111 => 124,  109 => 69,  106 => 68,  104 => 20,  101 => 19,  99 => 15,  96 => 14,  94 => 11,  91 => 10,  87 => 9,  81 => 126,  79 => 9,  75 => 8,  72 => 7,  69 => 6,  66 => 5,  63 => 4,  60 => 3,  57 => 2,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/product/card/box-standard.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/product/card/box-standard.html.twig");
    }
}
