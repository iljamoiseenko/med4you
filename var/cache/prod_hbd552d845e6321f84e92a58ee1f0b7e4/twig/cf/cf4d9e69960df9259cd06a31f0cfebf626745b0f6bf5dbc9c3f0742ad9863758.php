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

/* @Storefront/storefront/layout/header/actions/language-widget.html.twig */
class __TwigTemplate_6190f0e31da90a30a79fee1f99dd8899eee3448d600feaa530c2930025d9ad19 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_actions_language_widget' => [$this, 'block_layout_header_actions_language_widget'],
            'layout_header_actions_language_widget_form' => [$this, 'block_layout_header_actions_language_widget_form'],
            'layout_header_actions_language_widget_form_csrf' => [$this, 'block_layout_header_actions_language_widget_form_csrf'],
            'layout_header_actions_language_widget_content' => [$this, 'block_layout_header_actions_language_widget_content'],
            'layout_header_actions_languages_widget_form_items' => [$this, 'block_layout_header_actions_languages_widget_form_items'],
            'layout_header_actions_languages_widget_form_items_flag' => [$this, 'block_layout_header_actions_languages_widget_form_items_flag'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_header_actions_language_widget', $context, $blocks);
    }

    public function block_layout_header_actions_language_widget($context, array $blocks = [])
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
        if ((1 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 6), "languages", [], "any", false, false, false, 6), "count", [], "any", false, false, false, 6), 1))) {
            // line 7
            echo "        <div class=\"top-bar-nav-item top-bar-language\">
            ";
            // line 8
            $this->displayBlock('layout_header_actions_language_widget_form', $context, $blocks);
            // line 71
            echo "        </div>
    ";
        }
    }

    // line 8
    public function block_layout_header_actions_language_widget_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                <form method=\"post\"
                      action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.switch-language");
        echo "\"
                      class=\"language-form\"
                      data-form-auto-submit=\"true\">

                    ";
        // line 14
        $this->displayBlock('layout_header_actions_language_widget_form_csrf', $context, $blocks);
        // line 17
        echo "
                    ";
        // line 18
        $this->displayBlock('layout_header_actions_language_widget_content', $context, $blocks);
        // line 69
        echo "                </form>
            ";
    }

    // line 14
    public function block_layout_header_actions_language_widget_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.switch-language");
        echo "
                    ";
    }

    // line 18
    public function block_layout_header_actions_language_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                        ";
        $context["isoCode"] = twig_split_filter($this->env, twig_lower_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 19), "activeLanguage", [], "any", false, false, false, 19), "translationCode", [], "any", false, false, false, 19), "code", [], "any", false, false, false, 19)), "-");
        // line 20
        echo "                        ";
        $context["country"] = (($__internal_compile_0 = ($context["isoCode"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null);
        // line 21
        echo "                        ";
        $context["language"] = (($__internal_compile_1 = ($context["isoCode"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null);
        // line 22
        echo "
                        <div class=\"languages-menu dropdown\">
                            <button class=\"btn dropdown-toggle top-bar-nav-btn\"
                                    type=\"button\"
                                    id=\"languagesDropdown-";
        // line 26
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\"
                                    ";
        // line 27
        echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
        echo "=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\">
                                <div class=\"top-bar-list-icon language-flag country-";
        // line 30
        echo sw_escape_filter($this->env, ($context["country"] ?? null), "html", null, true);
        echo " language-";
        echo sw_escape_filter($this->env, ($context["language"] ?? null), "html", null, true);
        echo "\"></div>
                                <span class=\"top-bar-nav-text\">";
        // line 31
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 31), "activeLanguage", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
        echo "</span>
                            </button>
                            ";
        // line 33
        $this->displayBlock('layout_header_actions_languages_widget_form_items', $context, $blocks);
        // line 61
        echo "                        </div>

                        <input name=\"redirectTo\" type=\"hidden\" value=\"";
        // line 63
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 63), "get", [0 => "_route"], "method", false, false, false, 63), "html", null, true);
        echo "\"/>

                        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 65), "attributes", [], "any", false, false, false, 65), "get", [0 => "_route_params"], "method", false, false, false, 65));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 66
            echo "                            <input name=\"redirectParameters[";
            echo sw_escape_filter($this->env, $context["key"], "html", null, true);
            echo "]\" type=\"hidden\" value=\"";
            echo sw_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                    ";
    }

    // line 33
    public function block_layout_header_actions_languages_widget_form_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                                <div class=\"top-bar-list dropdown-menu dropdown-menu-right\"
                                    aria-labelledby=\"languagesDropdown-";
        // line 35
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\">
                                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 36), "languages", [], "any", false, false, false, 36));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 37
            echo "                                            <div class=\"top-bar-list-item dropdown-item";
            if ((sw_get_attribute($this->env, $this->source, $context["language"], "id", [], "any", false, false, false, 37) === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 37), "activeLanguage", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37))) {
                echo " item-checked";
            }
            echo "\"
                                                 title=\"";
            // line 38
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["language"], "translated", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
            echo "\">

                                                ";
            // line 40
            $this->displayBlock('layout_header_actions_languages_widget_form_items_flag', $context, $blocks);
            // line 57
            echo "                                            </div>
                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                                </div>
                            ";
    }

    // line 40
    public function block_layout_header_actions_languages_widget_form_items_flag($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                                                    ";
        $context["isoCode"] = twig_split_filter($this->env, twig_lower_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["language"] ?? null), "translationCode", [], "any", false, false, false, 41), "code", [], "any", false, false, false, 41)), "-");
        // line 42
        echo "                                                    ";
        $context["flagCountry"] = (($__internal_compile_2 = ($context["isoCode"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null);
        // line 43
        echo "                                                    ";
        $context["flagLanguage"] = (($__internal_compile_3 = ($context["isoCode"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[1] ?? null) : null);
        // line 44
        echo "
                                                    <label class=\"top-bar-list-label\"
                                                           for=\"";
        // line 46
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "-";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 46), "html", null, true);
        echo "\">
                                                        <input id=\"";
        // line 47
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "-";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 47), "html", null, true);
        echo "\"
                                                               class=\"top-bar-list-radio\"
                                                               value=\"";
        // line 49
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 49), "html", null, true);
        echo "\"
                                                               name=\"languageId\"
                                                               type=\"radio\"
                                                            ";
        // line 52
        if ((sw_get_attribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 52) === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 52), "activeLanguage", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52))) {
            echo " checked";
        }
        echo ">
                                                        <div class=\"top-bar-list-icon language-flag country-";
        // line 53
        echo sw_escape_filter($this->env, ($context["flagCountry"] ?? null), "html", null, true);
        echo " language-";
        echo sw_escape_filter($this->env, ($context["flagLanguage"] ?? null), "html", null, true);
        echo "\"></div>
                                                        ";
        // line 54
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["language"] ?? null), "name", [], "any", false, false, false, 54), "html", null, true);
        echo "
                                                    </label>
                                                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/actions/language-widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  292 => 54,  286 => 53,  280 => 52,  274 => 49,  267 => 47,  261 => 46,  257 => 44,  254 => 43,  251 => 42,  248 => 41,  244 => 40,  239 => 59,  224 => 57,  222 => 40,  217 => 38,  210 => 37,  193 => 36,  189 => 35,  186 => 34,  182 => 33,  178 => 68,  167 => 66,  163 => 65,  158 => 63,  154 => 61,  152 => 33,  147 => 31,  141 => 30,  135 => 27,  131 => 26,  125 => 22,  122 => 21,  119 => 20,  116 => 19,  112 => 18,  105 => 15,  101 => 14,  96 => 69,  94 => 18,  91 => 17,  89 => 14,  82 => 10,  79 => 9,  75 => 8,  69 => 71,  67 => 8,  64 => 7,  62 => 6,  59 => 5,  56 => 4,  53 => 3,  50 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/header/actions/language-widget.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/layout/header/actions/language-widget.html.twig");
    }
}
