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

/* @Storefront/storefront/page/checkout/finish/index.html.twig */
class __TwigTemplate_737b2d0716ea6c4c8211e659cce5094bfebc4b353644ff257d1d7c004c466554 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_header' => [$this, 'block_base_header'],
            'base_navigation' => [$this, 'block_base_navigation'],
            'page_checkout_main_content' => [$this, 'block_page_checkout_main_content'],
            'base_flashbags_checkout' => [$this, 'block_base_flashbags_checkout'],
            'page_checkout_finish' => [$this, 'block_page_checkout_finish'],
            'page_checkout_finish_details' => [$this, 'block_page_checkout_finish_details'],
            'page_checkout_finish_product_table' => [$this, 'block_page_checkout_finish_product_table'],
            'page_checkout_finish_table_header' => [$this, 'block_page_checkout_finish_table_header'],
            'page_checkout_finish_items' => [$this, 'block_page_checkout_finish_items'],
            'page_checkout_finish_item' => [$this, 'block_page_checkout_finish_item'],
            'page_checkout_additional' => [$this, 'block_page_checkout_additional'],
            'page_checkout_finish_customer_comment' => [$this, 'block_page_checkout_finish_customer_comment'],
            'page_checkout_finish_customer_comment_header' => [$this, 'block_page_checkout_finish_customer_comment_header'],
            'page_checkout_finish_customer_comment_content' => [$this, 'block_page_checkout_finish_customer_comment_content'],
            'base_footer' => [$this, 'block_base_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/checkout/_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/page/checkout/_page.html.twig", "@Storefront/storefront/page/checkout/finish/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_base_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/layout/header/header-minimal.html.twig", "@Storefront/storefront/page/checkout/finish/index.html.twig", 4)->display($context);
    }

    // line 7
    public function block_base_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_page_checkout_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('base_flashbags_checkout', $context, $blocks);
        // line 18
        echo "
    ";
        // line 19
        $this->displayBlock('page_checkout_finish', $context, $blocks);
    }

    // line 11
    public function block_base_flashbags_checkout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "        <div class=\"flashbags\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 13));
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
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 14
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/checkout/finish/index.html.twig", 14)->display(twig_array_merge($context, ["type" => $context["type"], "list" => $context["messages"]]));
            // line 15
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </div>
    ";
    }

    // line 19
    public function block_page_checkout_finish($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "        ";
        $this->displayBlock('page_checkout_finish_details', $context, $blocks);
        // line 23
        echo "
        ";
        // line 24
        $this->displayBlock('page_checkout_finish_product_table', $context, $blocks);
        // line 58
        echo "    ";
    }

    // line 20
    public function block_page_checkout_finish_details($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/page/checkout/finish/finish-details.html.twig", "@Storefront/storefront/page/checkout/finish/index.html.twig", 21)->display($context);
        // line 22
        echo "        ";
    }

    // line 24
    public function block_page_checkout_finish_product_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "            <div class=\"card checkout-product-table\">
                <div class=\"card-body\">
                    ";
        // line 27
        $this->displayBlock('page_checkout_finish_table_header', $context, $blocks);
        // line 38
        echo "
                    ";
        // line 39
        $this->displayBlock('page_checkout_finish_items', $context, $blocks);
        // line 55
        echo "                </div>
            </div>
        ";
    }

    // line 27
    public function block_page_checkout_finish_table_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                        ";
        // line 29
        echo "                        ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 30
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/component/checkout/cart-header.html.twig", "@Storefront/storefront/page/checkout/finish/index.html.twig", 30)->display(twig_array_merge($context, ["showTaxPrice" => true, "showRemoveColumn" => false]));
            // line 34
            echo "                        ";
        } else {
            // line 35
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/page/checkout/confirm/confirm-product-header.html.twig", "@Storefront/storefront/page/checkout/finish/index.html.twig", 35)->display($context);
            // line 36
            echo "                        ";
        }
        // line 37
        echo "                    ";
    }

    // line 39
    public function block_page_checkout_finish_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "order", [], "any", false, false, false, 40), "nestedLineItems", [], "any", false, false, false, 40));
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
            // line 41
            echo "                            ";
            $this->displayBlock('page_checkout_finish_item', $context, $blocks);
            // line 53
            echo "                        ";
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
        // line 54
        echo "                    ";
    }

    // line 41
    public function block_page_checkout_finish_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "                                ";
        // line 43
        echo "                                ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 44
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/component/line-item/line-item.html.twig", "@Storefront/storefront/page/checkout/finish/index.html.twig", 44)->display(twig_array_merge($context, ["redirectTo" => "frontend.checkout.confirm.page", "showTaxPrice" => true, "showRemoveButton" => false]));
            // line 49
            echo "                                ";
        } else {
            // line 50
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/page/checkout/finish/finish-item.html.twig", "@Storefront/storefront/page/checkout/finish/index.html.twig", 50)->display($context);
            // line 51
            echo "                                ";
        }
        // line 52
        echo "                            ";
    }

    // line 61
    public function block_page_checkout_additional($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "    ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "order", [], "any", false, false, false, 62), "customerComment", [], "any", false, false, false, 62)) {
            // line 63
            echo "        <div class=\"checkout-additional\">
            ";
            // line 64
            $this->displayBlock('page_checkout_finish_customer_comment', $context, $blocks);
            // line 79
            echo "        </div>
    ";
        }
    }

    // line 64
    public function block_page_checkout_finish_customer_comment($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "                <div class=\"card checkout-card\">
                    <div class=\"card-body\">
                        ";
        // line 67
        $this->displayBlock('page_checkout_finish_customer_comment_header', $context, $blocks);
        // line 72
        echo "
                        ";
        // line 73
        $this->displayBlock('page_checkout_finish_customer_comment_content', $context, $blocks);
        // line 76
        echo "                    </div>
                </div>
            ";
    }

    // line 67
    public function block_page_checkout_finish_customer_comment_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "                            <div class=\"card-title\">
                                ";
        // line 69
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.customerCommentHeader"));
        echo "
                            </div>
                        ";
    }

    // line 73
    public function block_page_checkout_finish_customer_comment_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "                            <div class=\"checkout-customer-comment-control\">";
        echo twig_nl2br($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "order", [], "any", false, false, false, 74), "customerComment", [], "any", false, false, false, 74)));
        echo "</div>
                        ";
    }

    // line 83
    public function block_base_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/layout/footer/footer-minimal.html.twig", "@Storefront/storefront/page/checkout/finish/index.html.twig", 84)->display($context);
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/finish/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 84,  342 => 83,  335 => 74,  331 => 73,  324 => 69,  321 => 68,  317 => 67,  311 => 76,  309 => 73,  306 => 72,  304 => 67,  300 => 65,  296 => 64,  290 => 79,  288 => 64,  285 => 63,  282 => 62,  278 => 61,  274 => 52,  271 => 51,  268 => 50,  265 => 49,  262 => 44,  259 => 43,  257 => 42,  253 => 41,  249 => 54,  235 => 53,  232 => 41,  214 => 40,  210 => 39,  206 => 37,  203 => 36,  200 => 35,  197 => 34,  194 => 30,  191 => 29,  189 => 28,  185 => 27,  179 => 55,  177 => 39,  174 => 38,  172 => 27,  168 => 25,  164 => 24,  160 => 22,  157 => 21,  153 => 20,  149 => 58,  147 => 24,  144 => 23,  141 => 20,  137 => 19,  132 => 16,  118 => 15,  115 => 14,  98 => 13,  95 => 12,  91 => 11,  87 => 19,  84 => 18,  82 => 11,  79 => 10,  75 => 9,  69 => 7,  64 => 4,  60 => 3,  49 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/checkout/finish/index.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/checkout/finish/index.html.twig");
    }
}
