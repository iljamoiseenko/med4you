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

/* @Storefront/storefront/layout/header/actions/currency-widget.html.twig */
class __TwigTemplate_3e15a1f86846867565b255c363179cbb33017bad70d191b3c589b92beabc32e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_actions_currency_widget' => [$this, 'block_layout_header_actions_currency_widget'],
            'layout_header_actions_currency_widget_form' => [$this, 'block_layout_header_actions_currency_widget_form'],
            'layout_header_actions_currency_widget_form_csrf' => [$this, 'block_layout_header_actions_currency_widget_form_csrf'],
            'layout_header_actions_currency_widget_content' => [$this, 'block_layout_header_actions_currency_widget_content'],
            'layout_header_actions_currency_widget_dropdown_toggle' => [$this, 'block_layout_header_actions_currency_widget_dropdown_toggle'],
            'layout_header_actions_currency_widget_dropdown_toggle_name' => [$this, 'block_layout_header_actions_currency_widget_dropdown_toggle_name'],
            'layout_header_actions_currency_widget_form_items' => [$this, 'block_layout_header_actions_currency_widget_form_items'],
            'layout_header_actions_currency_widget_form_items_element' => [$this, 'block_layout_header_actions_currency_widget_form_items_element'],
            'layout_header_actions_currency_widget_form_items_element_label' => [$this, 'block_layout_header_actions_currency_widget_form_items_element_label'],
            'layout_header_actions_currency_widget_form_items_element_input' => [$this, 'block_layout_header_actions_currency_widget_form_items_element_input'],
            'layout_header_actions_currency_widget_form_redirect' => [$this, 'block_layout_header_actions_currency_widget_form_redirect'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_header_actions_currency_widget', $context, $blocks);
    }

    public function block_layout_header_actions_currency_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if (twig_test_empty(($context["position"] ?? null))) {
            // line 3
            echo "        ";
            $context["position"] = "top-bar";
            // line 4
            echo "    ";
        }
        // line 5
        echo "
    ";
        // line 6
        if ((1 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 6), "currencies", [], "any", false, false, false, 6), "count", [], "any", false, false, false, 6), 1))) {
            // line 7
            echo "        <div class=\"top-bar-nav-item top-bar-currency\">
            ";
            // line 8
            $this->displayBlock('layout_header_actions_currency_widget_form', $context, $blocks);
            // line 76
            echo "        </div>
    ";
        }
    }

    // line 8
    public function block_layout_header_actions_currency_widget_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                <form method=\"post\"
                      action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.configure");
        echo "\"
                      class=\"currency-form\"
                      data-form-auto-submit=\"true\">

                    ";
        // line 14
        $this->displayBlock('layout_header_actions_currency_widget_form_csrf', $context, $blocks);
        // line 17
        echo "
                    ";
        // line 18
        $this->displayBlock('layout_header_actions_currency_widget_content', $context, $blocks);
        // line 74
        echo "                </form>
            ";
    }

    // line 14
    public function block_layout_header_actions_currency_widget_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.configure");
        echo "
                    ";
    }

    // line 18
    public function block_layout_header_actions_currency_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                        <div class=\"currencies-menu dropdown\">
                            ";
        // line 20
        $this->displayBlock('layout_header_actions_currency_widget_dropdown_toggle', $context, $blocks);
        // line 33
        echo "
                            ";
        // line 34
        $this->displayBlock('layout_header_actions_currency_widget_form_items', $context, $blocks);
        // line 60
        echo "
                            ";
        // line 61
        $this->displayBlock('layout_header_actions_currency_widget_form_redirect', $context, $blocks);
        // line 72
        echo "                        </div>
                    ";
    }

    // line 20
    public function block_layout_header_actions_currency_widget_dropdown_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                                <button class=\"btn dropdown-toggle top-bar-nav-btn\"
                                        type=\"button\"
                                        id=\"currenciesDropdown-";
        // line 23
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\"
                                        ";
        // line 24
        echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
        echo "=\"dropdown\"
                                        aria-haspopup=\"true\"
                                        aria-expanded=\"false\">
                                    ";
        // line 27
        $this->displayBlock('layout_header_actions_currency_widget_dropdown_toggle_name', $context, $blocks);
        // line 31
        echo "                                </button>
                            ";
    }

    // line 27
    public function block_layout_header_actions_currency_widget_dropdown_toggle_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                                        ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 28), "activeCurrency", [], "any", false, false, false, 28), "symbol", [], "any", false, false, false, 28), "html", null, true);
        echo "
                                        <span class=\"top-bar-nav-text\">";
        // line 29
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 29), "activeCurrency", [], "any", false, false, false, 29), "translated", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
        echo "</span>
                                    ";
    }

    // line 34
    public function block_layout_header_actions_currency_widget_form_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "                                <div class=\"top-bar-list dropdown-menu dropdown-menu-right\"
                                    aria-labelledby=\"currenciesDropdown-";
        // line 36
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\">
                                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 37), "currencies", [], "any", false, false, false, 37));
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
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 38
            echo "                                        ";
            $this->displayBlock('layout_header_actions_currency_widget_form_items_element', $context, $blocks);
            // line 57
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                                </div>
                            ";
    }

    // line 38
    public function block_layout_header_actions_currency_widget_form_items_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "                                            <div class=\"top-bar-list-item dropdown-item";
        if ((sw_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 39) === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 39), "activeCurrency", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39))) {
            echo " item-checked";
        }
        echo "\"
                                                 title=\"";
        // line 40
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "translated", [], "any", false, false, false, 40), "shortName", [], "any", false, false, false, 40), "html", null, true);
        echo "\">
                                                ";
        // line 41
        $this->displayBlock('layout_header_actions_currency_widget_form_items_element_label', $context, $blocks);
        // line 55
        echo "                                            </div>
                                        ";
    }

    // line 41
    public function block_layout_header_actions_currency_widget_form_items_element_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "                                                    <label class=\"top-bar-list-label\"
                                                           for=\"";
        // line 43
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "-";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 43), "html", null, true);
        echo "\">
                                                        ";
        // line 44
        $this->displayBlock('layout_header_actions_currency_widget_form_items_element_input', $context, $blocks);
        // line 53
        echo "                                                    </label>
                                                ";
    }

    // line 44
    public function block_layout_header_actions_currency_widget_form_items_element_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "                                                            <input class=\"top-bar-list-radio\"
                                                                   id=\"";
        // line 46
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "-";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 46), "html", null, true);
        echo "\"
                                                                   value=\"";
        // line 47
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 47), "html", null, true);
        echo "\"
                                                                   name=\"currencyId\"
                                                                   type=\"radio\"
                                                                ";
        // line 50
        if ((sw_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 50) === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 50), "activeCurrency", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50))) {
            echo " checked";
        }
        echo ">
                                                            ";
        // line 51
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "symbol", [], "any", false, false, false, 51), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "translated", [], "any", false, false, false, 51), "shortName", [], "any", false, false, false, 51), "html", null, true);
        echo "
                                                        ";
    }

    // line 61
    public function block_layout_header_actions_currency_widget_form_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "                                <input name=\"redirectTo\"
                                       type=\"hidden\"
                                       value=\"";
        // line 64
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 64), "get", [0 => "_route"], "method", false, false, false, 64), "html", null, true);
        echo "\"/>

                                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 66), "attributes", [], "any", false, false, false, 66), "get", [0 => "_route_params"], "method", false, false, false, 66));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 67
            echo "                                    <input name=\"redirectParameters[";
            echo sw_escape_filter($this->env, $context["key"], "html", null, true);
            echo "]\"
                                           type=\"hidden\"
                                           value=\"";
            // line 69
            echo sw_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/actions/currency-widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  337 => 71,  329 => 69,  323 => 67,  319 => 66,  314 => 64,  310 => 62,  306 => 61,  298 => 51,  292 => 50,  286 => 47,  280 => 46,  277 => 45,  273 => 44,  268 => 53,  266 => 44,  260 => 43,  257 => 42,  253 => 41,  248 => 55,  246 => 41,  242 => 40,  235 => 39,  231 => 38,  226 => 58,  212 => 57,  209 => 38,  192 => 37,  188 => 36,  185 => 35,  181 => 34,  175 => 29,  170 => 28,  166 => 27,  161 => 31,  159 => 27,  153 => 24,  149 => 23,  145 => 21,  141 => 20,  136 => 72,  134 => 61,  131 => 60,  129 => 34,  126 => 33,  124 => 20,  121 => 19,  117 => 18,  110 => 15,  106 => 14,  101 => 74,  99 => 18,  96 => 17,  94 => 14,  87 => 10,  84 => 9,  80 => 8,  74 => 76,  72 => 8,  69 => 7,  67 => 6,  64 => 5,  61 => 4,  58 => 3,  55 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/header/actions/currency-widget.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/layout/header/actions/currency-widget.html.twig");
    }
}
