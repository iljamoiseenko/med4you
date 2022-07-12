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

/* @Storefront/storefront/layout/header/search.html.twig */
class __TwigTemplate_79c33782c2581e24d27bb9d7d0d219d21e2b33cfa408183593397fcea7ee7e7d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_search' => [$this, 'block_layout_header_search'],
            'layout_header_search_input_group' => [$this, 'block_layout_header_search_input_group'],
            'layout_header_search_input' => [$this, 'block_layout_header_search_input'],
            'layout_header_search_button' => [$this, 'block_layout_header_search_button'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["searchWidgetOptions"] = ["searchWidgetMinChars" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 2
($context["page"] ?? null), "header", [], "any", false, false, false, 2), "activeLanguage", [], "any", false, false, false, 2), "productSearchConfig", [], "any", false, false, false, 2), "minSearchLength", [], "any", false, false, false, 2)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 2), "activeLanguage", [], "any", false, false, false, 2), "productSearchConfig", [], "any", false, false, false, 2), "minSearchLength", [], "any", false, false, false, 2)) : (3))];
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('layout_header_search', $context, $blocks);
    }

    public function block_layout_header_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"collapse\"
         id=\"searchCollapse\">
        <div class=\"header-search\">
            <form action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.search.page");
        echo "\"
                  method=\"get\"
                  data-search-form=\"true\"
                  data-search-widget-options='";
        // line 12
        echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["searchWidgetOptions"] ?? null)]), "html", null, true);
        echo "'
                  data-url=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.search.suggest");
        echo "?search=\"
                  class=\"header-search-form\">
                ";
        // line 15
        $this->displayBlock('layout_header_search_input_group', $context, $blocks);
        // line 53
        echo "            </form>
        </div>
    </div>
";
    }

    // line 15
    public function block_layout_header_search_input_group($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                    <div class=\"input-group\">
                        ";
        // line 17
        $this->displayBlock('layout_header_search_input', $context, $blocks);
        // line 28
        echo "
                        ";
        // line 29
        $this->displayBlock('layout_header_search_button', $context, $blocks);
        // line 51
        echo "                    </div>
                ";
    }

    // line 17
    public function block_layout_header_search_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "                            <input type=\"search\"
                                   name=\"search\"
                                   class=\"form-control header-search-input\"
                                   autocomplete=\"off\"
                                   autocapitalize=\"off\"
                                   placeholder=\"";
        // line 23
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchPlaceholder")), "html", null, true);
        echo "\"
                                   aria-label=\"";
        // line 24
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchPlaceholder")), "html", null, true);
        echo "\"
                                   value=\"";
        // line 25
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "searchTerm", [], "any", false, false, false, 25), "html", null, true);
        echo "\"
                            >
                        ";
    }

    // line 29
    public function block_layout_header_search_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "                            ";
        // line 31
        echo "                            ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 32
            echo "                                <button type=\"submit\"
                                        class=\"btn header-search-btn\"
                                        aria-label=\"";
            // line 34
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchButton")), "html", null, true);
            echo "\">
                                    <span class=\"header-search-icon\">
                                        ";
            // line 36
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/search.html.twig", 36);
            })())->display(twig_array_merge($context, ["name" => "search"]));
            // line 37
            echo "                                    </span>
                                </button>
                            ";
        } else {
            // line 40
            echo "                                <div class=\"input-group-append\">
                                    <button type=\"submit\"
                                            class=\"btn header-search-btn\"
                                            aria-label=\"";
            // line 43
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchButton")), "html", null, true);
            echo "\">
                                        <span class=\"header-search-icon\">
                                            ";
            // line 45
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/search.html.twig", 45);
            })())->display(twig_array_merge($context, ["name" => "search"]));
            // line 46
            echo "                                        </span>
                                    </button>
                                </div>
                            ";
        }
        // line 50
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 50,  177 => 46,  169 => 45,  164 => 43,  159 => 40,  154 => 37,  146 => 36,  141 => 34,  137 => 32,  134 => 31,  132 => 30,  128 => 29,  121 => 25,  117 => 24,  113 => 23,  106 => 18,  102 => 17,  97 => 51,  95 => 29,  92 => 28,  90 => 17,  87 => 16,  83 => 15,  76 => 53,  74 => 15,  69 => 13,  65 => 12,  59 => 9,  54 => 6,  47 => 5,  44 => 4,  42 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/header/search.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/layout/header/search.html.twig");
    }
}
