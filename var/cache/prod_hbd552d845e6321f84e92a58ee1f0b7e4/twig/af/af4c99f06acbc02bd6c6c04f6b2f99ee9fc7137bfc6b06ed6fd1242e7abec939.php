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

/* @Storefront/storefront/page/checkout/_page.html.twig */
class __TwigTemplate_f06944ef6ed2cb11ecf3ac4040de7014b49067ef7ebf92c789b9cebee9e5a890 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_flashbags' => [$this, 'block_base_flashbags'],
            'base_content' => [$this, 'block_base_content'],
            'page_checkout' => [$this, 'block_page_checkout'],
            'page_checkout_container' => [$this, 'block_page_checkout_container'],
            'page_checkout_main' => [$this, 'block_page_checkout_main'],
            'base_flashbags_checkout' => [$this, 'block_base_flashbags_checkout'],
            'page_checkout_main_content' => [$this, 'block_page_checkout_main_content'],
            'page_checkout_additional' => [$this, 'block_page_checkout_additional'],
            'page_checkout_aside' => [$this, 'block_page_checkout_aside'],
            'page_checkout_aside_container' => [$this, 'block_page_checkout_aside_container'],
            'page_checkout_aside_summary' => [$this, 'block_page_checkout_aside_summary'],
            'page_checkout_summary_header' => [$this, 'block_page_checkout_summary_header'],
            'page_checkout_summary_list' => [$this, 'block_page_checkout_summary_list'],
            'page_checkout_summary_list_container' => [$this, 'block_page_checkout_summary_list_container'],
            'page_checkout_aside_actions' => [$this, 'block_page_checkout_aside_actions'],
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
        $this->parent = $this->loadTemplate("@Storefront/storefront/base.html.twig", "@Storefront/storefront/page/checkout/_page.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_base_flashbags($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_base_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->displayBlock('page_checkout', $context, $blocks);
    }

    public function block_page_checkout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        <div class=\"checkout\">
            ";
        // line 8
        $this->displayBlock('page_checkout_container', $context, $blocks);
        // line 55
        echo "        </div>
    ";
    }

    // line 8
    public function block_page_checkout_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                <div class=\"checkout-container\">
                    ";
        // line 10
        $this->displayBlock('page_checkout_main', $context, $blocks);
        // line 23
        echo "
                    ";
        // line 24
        $this->displayBlock('page_checkout_additional', $context, $blocks);
        // line 25
        echo "
                    ";
        // line 26
        $this->displayBlock('page_checkout_aside', $context, $blocks);
        // line 53
        echo "                </div>
            ";
    }

    // line 10
    public function block_page_checkout_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "                        <div class=\"checkout-main\">
                            ";
        // line 12
        $this->displayBlock('base_flashbags_checkout', $context, $blocks);
        // line 19
        echo "
                            ";
        // line 20
        $this->displayBlock('page_checkout_main_content', $context, $blocks);
        // line 21
        echo "                        </div>
                    ";
    }

    // line 12
    public function block_base_flashbags_checkout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "                                <div class=\"flashbags\">
                                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 14));
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
            // line 15
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/checkout/_page.html.twig", 15)->display(twig_array_merge($context, ["type" => $context["type"], "list" => $context["messages"]]));
            // line 16
            echo "                                    ";
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
        // line 17
        echo "                                </div>
                            ";
    }

    // line 20
    public function block_page_checkout_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 24
    public function block_page_checkout_additional($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 26
    public function block_page_checkout_aside($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "                        <div class=\"checkout-aside ";
        if (twig_trim_filter(        $this->renderBlock("page_checkout_additional", $context, $blocks))) {
            echo "checkout-aside-no-offset";
        }
        echo "\">
                            ";
        // line 28
        $this->displayBlock('page_checkout_aside_container', $context, $blocks);
        // line 51
        echo "                        </div>
                    ";
    }

    // line 28
    public function block_page_checkout_aside_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "                                <div class=\"checkout-aside-container\">
                                    ";
        // line 30
        $this->displayBlock('page_checkout_aside_summary', $context, $blocks);
        // line 47
        echo "
                                    ";
        // line 48
        $this->displayBlock('page_checkout_aside_actions', $context, $blocks);
        // line 49
        echo "                                </div>
                            ";
    }

    // line 30
    public function block_page_checkout_aside_summary($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                                        <div class=\"checkout-aside-summary\">
                                            ";
        // line 32
        $this->displayBlock('page_checkout_summary_header', $context, $blocks);
        // line 37
        echo "
                                            ";
        // line 38
        $this->displayBlock('page_checkout_summary_list', $context, $blocks);
        // line 45
        echo "                                        </div>
                                    ";
    }

    // line 32
    public function block_page_checkout_summary_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "                                                <h2 class=\"checkout-aside-summary-header\">
                                                    ";
        // line 34
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.summaryHeader"));
        echo "
                                                </h2>
                                            ";
    }

    // line 38
    public function block_page_checkout_summary_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "                                                <div class=\"checkout-aside-summary-list-container\">
                                                    ";
        // line 40
        $this->displayBlock('page_checkout_summary_list_container', $context, $blocks);
        // line 43
        echo "                                                </div>
                                            ";
    }

    // line 40
    public function block_page_checkout_summary_list_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                                                        ";
        $this->loadTemplate("@Storefront/storefront/page/checkout/summary.html.twig", "@Storefront/storefront/page/checkout/_page.html.twig", 41)->display($context);
        // line 42
        echo "                                                    ";
    }

    // line 48
    public function block_page_checkout_aside_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 48,  280 => 42,  277 => 41,  273 => 40,  268 => 43,  266 => 40,  263 => 39,  259 => 38,  252 => 34,  249 => 33,  245 => 32,  240 => 45,  238 => 38,  235 => 37,  233 => 32,  230 => 31,  226 => 30,  221 => 49,  219 => 48,  216 => 47,  214 => 30,  211 => 29,  207 => 28,  202 => 51,  200 => 28,  193 => 27,  189 => 26,  183 => 24,  177 => 20,  172 => 17,  158 => 16,  155 => 15,  138 => 14,  135 => 13,  131 => 12,  126 => 21,  124 => 20,  121 => 19,  119 => 12,  116 => 11,  112 => 10,  107 => 53,  105 => 26,  102 => 25,  100 => 24,  97 => 23,  95 => 10,  92 => 9,  88 => 8,  83 => 55,  81 => 8,  78 => 7,  70 => 6,  66 => 5,  60 => 3,  49 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/checkout/_page.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/checkout/_page.html.twig");
    }
}
