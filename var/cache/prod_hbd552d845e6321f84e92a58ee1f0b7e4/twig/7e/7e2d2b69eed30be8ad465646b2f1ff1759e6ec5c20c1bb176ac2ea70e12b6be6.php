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

/* @Storefront/storefront/page/checkout/checkout-aside-item.html.twig */
class __TwigTemplate_e7a49882a0f2d79a2930d044d43c753a075795d1ef0b8e50d4cd497e95aa9dab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_aside_item' => [$this, 'block_page_checkout_aside_item'],
            'page_checkout_aside_item_container' => [$this, 'block_page_checkout_aside_item_container'],
            'page_checkout_aside_item_image' => [$this, 'block_page_checkout_aside_item_image'],
            'page_checkout_aside_item_image_inner' => [$this, 'block_page_checkout_aside_item_image_inner'],
            'page_checkout_aside_item_data' => [$this, 'block_page_checkout_aside_item_data'],
            'page_checkout_aside_item_title' => [$this, 'block_page_checkout_aside_item_title'],
            'page_checkout_aside_item_variant_characteristics' => [$this, 'block_page_checkout_aside_item_variant_characteristics'],
            'page_checkout_aside_item_info_features' => [$this, 'block_page_checkout_aside_item_info_features'],
            'page_checkout_aside_item_quantity' => [$this, 'block_page_checkout_aside_item_quantity'],
            'page_checkout_aside_item_price' => [$this, 'block_page_checkout_aside_item_price'],
            'page_checkout_aside_item_children_template' => [$this, 'block_page_checkout_aside_item_children_template'],
            'page_checkout_aside_item_children' => [$this, 'block_page_checkout_aside_item_children'],
            'page_checkout_aside_item_child' => [$this, 'block_page_checkout_aside_item_child'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('page_checkout_aside_item', $context, $blocks);
    }

    public function block_page_checkout_aside_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $context["isDiscount"] = ( !sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "good", [], "any", false, false, false, 4) && (0 >= twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "price", [], "any", false, false, false, 4), "totalPrice", [], "any", false, false, false, 4), 0)));
        // line 5
        echo "    ";
        $context["isNested"] = (1 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "children", [], "any", false, false, false, 5), "count", [], "any", false, false, false, 5), 0));
        // line 6
        echo "    ";
        $context["childrenTemplate"] = "@Storefront/storefront/page/checkout/checkout-aside-item-children.html.twig";
        // line 7
        echo "
    ";
        // line 8
        $context["PRODUCT_LINE_ITEM_TYPE"] = twig_constant("Shopware\\Core\\Checkout\\Cart\\LineItem\\LineItem::PRODUCT_LINE_ITEM_TYPE");
        // line 9
        echo "
    ";
        // line 11
        echo "    ";
        $context["cartItemClasses"] = "";
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('page_checkout_aside_item_container', $context, $blocks);
        // line 120
        echo "
        ";
        // line 122
        echo "        ";
        $this->displayBlock('page_checkout_aside_item_child', $context, $blocks);
    }

    // line 13
    public function block_page_checkout_aside_item_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "        <div class=\"row checkout-aside-item cart-item cart-item-";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 14), "html", null, true);
        if (($context["isDiscount"] ?? null)) {
            echo " is-discount";
        }
        echo sw_escape_filter($this->env, ($context["cartItemClasses"] ?? null), "html", null, true);
        echo "\">

            ";
        // line 16
        $this->displayBlock('page_checkout_aside_item_image', $context, $blocks);
        // line 55
        echo "
            ";
        // line 56
        $this->displayBlock('page_checkout_aside_item_data', $context, $blocks);
        // line 108
        echo "
            ";
        // line 109
        $this->displayBlock('page_checkout_aside_item_children_template', $context, $blocks);
        // line 117
        echo "
        </div>
    ";
    }

    // line 16
    public function block_page_checkout_aside_item_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                <div class=\"col-4 checkout-aside-item-image\">

                    ";
        // line 19
        $this->displayBlock('page_checkout_aside_item_image_inner', $context, $blocks);
        // line 52
        echo "
                </div>
            ";
    }

    // line 19
    public function block_page_checkout_aside_item_image_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                        ";
        if (($context["isDiscount"] ?? null)) {
            // line 21
            echo "                            <div class=\"cart-item-discount-icon cart-item-img\">
                                ";
            // line 22
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig", 22);
            })())->display(twig_array_merge($context, ["color" => "success", "name" => "marketing"]));
            // line 25
            echo "                            </div>
                        ";
        } elseif (        // line 26
($context["isNested"] ?? null)) {
            // line 27
            echo "                            <div class=\"cart-item-nested-icon\">
                                ";
            // line 28
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig", 28);
            })())->display(twig_array_merge($context, ["color" => "light", "name" => "bag-product"]));
            // line 31
            echo "                            </div>
                        ";
        } else {
            // line 33
            echo "                            ";
            if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 33), "url", [], "any", false, false, false, 33)) {
                // line 34
                echo "                                ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                    $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig", 34);
                })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,                 // line 35
($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 35), "sizes" => ["default" => "100px"], "attributes" => ["class" => "img-fluid cart-item-img", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,                 // line 41
($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 41), "translated", [], "any", false, false, false, 41), "alt", [], "any", false, false, false, 41)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 41), "translated", [], "any", false, false, false, 41), "alt", [], "any", false, false, false, 41)) : ("")), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,                 // line 42
($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 42), "translated", [], "any", false, false, false, 42), "title", [], "any", false, false, false, 42)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 42), "translated", [], "any", false, false, false, 42), "title", [], "any", false, false, false, 42)) : (""))], "name" => "cart-item-img-thumbnails"]));
                // line 45
                echo "                            ";
            } else {
                // line 46
                echo "                                ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                    $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig", 46);
                })())->display(twig_array_merge($context, ["size" => "fluid", "name" => "placeholder"]));
                // line 49
                echo "                            ";
            }
            // line 50
            echo "                        ";
        }
        // line 51
        echo "                    ";
    }

    // line 56
    public function block_page_checkout_aside_item_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "                <div class=\"col-8 checkout-aside-item-data\">

                    ";
        // line 59
        $this->displayBlock('page_checkout_aside_item_title', $context, $blocks);
        // line 66
        echo "
                    ";
        // line 67
        $this->displayBlock('page_checkout_aside_item_variant_characteristics', $context, $blocks);
        // line 81
        echo "
                    ";
        // line 82
        $this->displayBlock('page_checkout_aside_item_info_features', $context, $blocks);
        // line 89
        echo "
                    ";
        // line 90
        $this->displayBlock('page_checkout_aside_item_quantity', $context, $blocks);
        // line 99
        echo "
                    ";
        // line 100
        $this->displayBlock('page_checkout_aside_item_price', $context, $blocks);
        // line 105
        echo "
                </div>
            ";
    }

    // line 59
    public function block_page_checkout_aside_item_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "                        <div class=\"checkout-aside-item-title\">
                            ";
        // line 61
        $context["label"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "label", [], "any", false, false, false, 61)));
        // line 62
        echo "                            ";
        $context["label"] = (((($context["label"] ?? null) !== "")) ? (($context["label"] ?? null)) : (sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "label", [], "any", false, false, false, 62)));
        // line 63
        echo "                            ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["label"] ?? null)), "truncate", [0 => 60], "method", false, false, false, 63), "html", null, true);
        echo "
                        </div>
                    ";
    }

    // line 67
    public function block_page_checkout_aside_item_variant_characteristics($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "                        <div class=\"checkout-aside-item-characteristics\">

                            ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 70), "options", [], "any", false, false, false, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 71
            echo "                                ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["option"], "group", [], "any", false, false, false, 71), "html", null, true);
            echo ":
                                <span class=\"checkout-aside-item-characteristics-option\">";
            // line 72
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["option"], "option", [], "any", false, false, false, 72), "html", null, true);
            echo "</span>

                                ";
            // line 74
            if ((0 !== twig_compare(twig_last($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 74), "options", [], "any", false, false, false, 74)), $context["option"]))) {
                // line 75
                echo "                                    ";
                echo " | ";
                echo "
                                ";
            }
            // line 77
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
                        </div>
                    ";
    }

    // line 82
    public function block_page_checkout_aside_item_info_features($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "                        ";
        if (((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 83), ($context["PRODUCT_LINE_ITEM_TYPE"] ?? null))) &&  !(null === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 83), "features", [], "any", false, false, false, 83)))) {
            // line 84
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/component/product/feature/list.html.twig", "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig", 84)->display(twig_array_merge($context, ["features" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 85
($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 85), "features", [], "any", false, false, false, 85)]));
            // line 87
            echo "                        ";
        }
        // line 88
        echo "                    ";
    }

    // line 90
    public function block_page_checkout_aside_item_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "                        <div class=\"checkout-aside-item-link-quantity\">

                            ";
        // line 93
        if ((sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantity", [], "any", false, false, false, 93) && (0 !== twig_compare(sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 93), "promotion")))) {
            // line 94
            echo "                                ";
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderQuantity"), "html", null, true);
            echo ": ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantity", [], "any", false, false, false, 94), "html", null, true);
            echo "
                            ";
        }
        // line 96
        echo "
                        </div>
                    ";
    }

    // line 100
    public function block_page_checkout_aside_item_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "                        <div class=\"checkout-aside-item-link-price\">
                            ";
        // line 102
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "price", [], "any", false, false, false, 102), "totalPrice", [], "any", false, false, false, 102)), "html", null, true);
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "
                        </div>
                    ";
    }

    // line 109
    public function block_page_checkout_aside_item_children_template($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 110
        echo "                ";
        if (($context["isNested"] ?? null)) {
            // line 111
            echo "                    ";
            // line 112
            echo "                    ";
            $this->displayBlock('page_checkout_aside_item_children', $context, $blocks);
            // line 115
            echo "                ";
        }
        // line 116
        echo "            ";
    }

    // line 112
    public function block_page_checkout_aside_item_children($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find(($context["childrenTemplate"] ?? null));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig", 113);
        })())->display($context);
        // line 114
        echo "                    ";
    }

    // line 122
    public function block_page_checkout_aside_item_child($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  407 => 122,  403 => 114,  394 => 113,  390 => 112,  386 => 116,  383 => 115,  380 => 112,  378 => 111,  375 => 110,  371 => 109,  363 => 102,  360 => 101,  356 => 100,  350 => 96,  342 => 94,  340 => 93,  336 => 91,  332 => 90,  328 => 88,  325 => 87,  323 => 85,  321 => 84,  318 => 83,  314 => 82,  308 => 78,  302 => 77,  296 => 75,  294 => 74,  289 => 72,  284 => 71,  280 => 70,  276 => 68,  272 => 67,  264 => 63,  261 => 62,  259 => 61,  256 => 60,  252 => 59,  246 => 105,  244 => 100,  241 => 99,  239 => 90,  236 => 89,  234 => 82,  231 => 81,  229 => 67,  226 => 66,  224 => 59,  220 => 57,  216 => 56,  212 => 51,  209 => 50,  206 => 49,  197 => 46,  194 => 45,  192 => 42,  191 => 41,  190 => 35,  182 => 34,  179 => 33,  175 => 31,  167 => 28,  164 => 27,  162 => 26,  159 => 25,  151 => 22,  148 => 21,  145 => 20,  141 => 19,  135 => 52,  133 => 19,  129 => 17,  125 => 16,  119 => 117,  117 => 109,  114 => 108,  112 => 56,  109 => 55,  107 => 16,  97 => 14,  93 => 13,  88 => 122,  85 => 120,  83 => 13,  80 => 12,  77 => 11,  74 => 9,  72 => 8,  69 => 7,  66 => 6,  63 => 5,  60 => 4,  53 => 3,  50 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/checkout/checkout-aside-item.html.twig");
    }
}
