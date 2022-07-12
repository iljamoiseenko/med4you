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

/* @Storefront/storefront/page/checkout/summary.html.twig */
class __TwigTemplate_8dda0b2517aebb37561c43310dbfb8734c580b075a301dd7b9e0c52d5fef8dd3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_summary' => [$this, 'block_page_checkout_summary'],
            'page_checkout_summary_inner' => [$this, 'block_page_checkout_summary_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_checkout_summary', $context, $blocks);
    }

    public function block_page_checkout_summary($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"checkout-aside-summary-container\">
        ";
        // line 3
        if (sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 3)) {
            // line 4
            echo "            ";
            $context["summary"] = sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 4);
            // line 5
            echo "        ";
        } elseif (sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "order", [], "any", false, false, false, 5)) {
            // line 6
            echo "            ";
            $context["summary"] = sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "order", [], "any", false, false, false, 6);
            // line 7
            echo "        ";
        }
        // line 8
        echo "
        ";
        // line 9
        $context["displayRounded"] = ((0 !== twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "totalRounding", [], "any", false, false, false, 9), "interval", [], "any", false, false, false, 9), 0.01)) || (0 !== twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "totalRounding", [], "any", false, false, false, 9), "decimals", [], "any", false, false, false, 9), sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "itemRounding", [], "any", false, false, false, 9), "decimals", [], "any", false, false, false, 9))));
        // line 10
        echo "        ";
        $context["decimals"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "totalRounding", [], "any", false, false, false, 10), "decimals", [], "any", false, false, false, 10);
        // line 11
        echo "        ";
        $context["total"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "price", [], "any", false, false, false, 11), "totalPrice", [], "any", false, false, false, 11);
        // line 12
        echo "
        ";
        // line 13
        if (($context["displayRounded"] ?? null)) {
            // line 14
            echo "            ";
            $context["decimals"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "itemRounding", [], "any", false, false, false, 14), "decimals", [], "any", false, false, false, 14);
            // line 15
            echo "            ";
            $context["total"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "price", [], "any", false, false, false, 15), "rawTotal", [], "any", false, false, false, 15);
            // line 16
            echo "        ";
        }
        // line 17
        echo "
        <dl class=\"row checkout-aside-summary-list ";
        // line 18
        echo sw_escape_filter($this->env, ($context["gridNoGuttersClass"] ?? null), "html", null, true);
        echo " ";
        if (($context["displayRounded"] ?? null)) {
            echo "display-rounded";
        }
        echo "\">
            ";
        // line 19
        $this->displayBlock('page_checkout_summary_inner', $context, $blocks);
        // line 60
        echo "        </dl>
    </div>
";
    }

    // line 19
    public function block_page_checkout_summary_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "
                ";
        // line 21
        $this->loadTemplate("@Storefront/storefront/page/checkout/summary/summary-position.html.twig", "@Storefront/storefront/page/checkout/summary.html.twig", 21)->display(twig_array_merge($context, ["summary" => ($context["summary"] ?? null)]));
        // line 22
        echo "
                ";
        // line 23
        $this->loadTemplate("@Storefront/storefront/page/checkout/summary/summary-shipping.html.twig", "@Storefront/storefront/page/checkout/summary.html.twig", 23)->display(twig_array_merge($context, ["summary" => ($context["summary"] ?? null)]));
        // line 24
        echo "
                ";
        // line 25
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "price", [], "any", false, false, false, 25), "taxStatus", [], "any", false, false, false, 25), "gross"))) {
            // line 26
            echo "                    ";
            $this->loadTemplate("@Storefront/storefront/page/checkout/summary/summary-total.html.twig", "@Storefront/storefront/page/checkout/summary.html.twig", 26)->display(twig_array_merge($context, ["total" =>             // line 27
($context["total"] ?? null), "decimals" =>             // line 28
($context["decimals"] ?? null)]));
            // line 30
            echo "
                    ";
            // line 31
            if (($context["displayRounded"] ?? null)) {
                // line 32
                echo "                        ";
                $this->loadTemplate("@Storefront/storefront/page/checkout/summary/summary-total-rounded.html.twig", "@Storefront/storefront/page/checkout/summary.html.twig", 32)->display(twig_array_merge($context, ["summary" =>                 // line 33
($context["summary"] ?? null), "decimals" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,                 // line 34
($context["context"] ?? null), "totalRounding", [], "any", false, false, false, 34), "decimals", [], "any", false, false, false, 34)]));
                // line 36
                echo "                    ";
            }
            // line 37
            echo "
                    ";
            // line 38
            $this->loadTemplate("@Storefront/storefront/page/checkout/summary/summary-net.html.twig", "@Storefront/storefront/page/checkout/summary.html.twig", 38)->display(twig_array_merge($context, ["summary" => ($context["summary"] ?? null)]));
            // line 39
            echo "
                    ";
            // line 40
            $this->loadTemplate("@Storefront/storefront/page/checkout/summary/summary-tax.html.twig", "@Storefront/storefront/page/checkout/summary.html.twig", 40)->display(twig_array_merge($context, ["summary" => ($context["summary"] ?? null)]));
            // line 41
            echo "                ";
        } else {
            // line 42
            echo "
                    ";
            // line 43
            $this->loadTemplate("@Storefront/storefront/page/checkout/summary/summary-net.html.twig", "@Storefront/storefront/page/checkout/summary.html.twig", 43)->display(twig_array_merge($context, ["summary" => ($context["summary"] ?? null)]));
            // line 44
            echo "
                    ";
            // line 45
            $this->loadTemplate("@Storefront/storefront/page/checkout/summary/summary-tax.html.twig", "@Storefront/storefront/page/checkout/summary.html.twig", 45)->display(twig_array_merge($context, ["summary" => ($context["summary"] ?? null)]));
            // line 46
            echo "
                    ";
            // line 47
            $this->loadTemplate("@Storefront/storefront/page/checkout/summary/summary-total.html.twig", "@Storefront/storefront/page/checkout/summary.html.twig", 47)->display(twig_array_merge($context, ["total" =>             // line 48
($context["total"] ?? null), "decimals" =>             // line 49
($context["decimals"] ?? null)]));
            // line 51
            echo "
                    ";
            // line 52
            if (($context["displayRounded"] ?? null)) {
                // line 53
                echo "                        ";
                $this->loadTemplate("@Storefront/storefront/page/checkout/summary/summary-total-rounded.html.twig", "@Storefront/storefront/page/checkout/summary.html.twig", 53)->display(twig_array_merge($context, ["summary" =>                 // line 54
($context["summary"] ?? null), "decimals" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,                 // line 55
($context["context"] ?? null), "totalRounding", [], "any", false, false, false, 55), "decimals", [], "any", false, false, false, 55)]));
                // line 57
                echo "                    ";
            }
            // line 58
            echo "                ";
        }
        // line 59
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/summary.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  190 => 59,  187 => 58,  184 => 57,  182 => 55,  181 => 54,  179 => 53,  177 => 52,  174 => 51,  172 => 49,  171 => 48,  170 => 47,  167 => 46,  165 => 45,  162 => 44,  160 => 43,  157 => 42,  154 => 41,  152 => 40,  149 => 39,  147 => 38,  144 => 37,  141 => 36,  139 => 34,  138 => 33,  136 => 32,  134 => 31,  131 => 30,  129 => 28,  128 => 27,  126 => 26,  124 => 25,  121 => 24,  119 => 23,  116 => 22,  114 => 21,  111 => 20,  107 => 19,  101 => 60,  99 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  77 => 13,  74 => 12,  71 => 11,  68 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  49 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/checkout/summary.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/checkout/summary.html.twig");
    }
}
