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

/* @Storefront/storefront/element/cms-element-sidebar-filter.html.twig */
class __TwigTemplate_356176a875c78075fdfe108ace7ac1e8131f301f8ddc34af1de2148b4d1dfad9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'element_sidebar_filter' => [$this, 'block_element_sidebar_filter'],
            'element_product_listing_filter_button' => [$this, 'block_element_product_listing_filter_button'],
            'element_product_listing_filter_button_icon' => [$this, 'block_element_product_listing_filter_button_icon'],
            'element_sidebar_filter_panel' => [$this, 'block_element_sidebar_filter_panel'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('element_sidebar_filter', $context, $blocks);
    }

    public function block_element_sidebar_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        // line 3
        echo "    ";
        if (array_key_exists("cmsPage", $context)) {
            // line 4
            echo "        ";
            $context["config"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "fieldConfig", [], "any", false, false, false, 4), "elements", [], "any", false, false, false, 4);
            // line 5
            echo "        ";
            $context["slot"] = sw_get_attribute($this->env, $this->source, ($context["cmsPage"] ?? null), "firstElementOfType", [0 => "product-listing"], "method", false, false, false, 5);
            // line 6
            echo "        ";
            $context["listing"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["slot"] ?? null), "data", [], "any", false, false, false, 6), "listing", [], "any", false, false, false, 6);
            // line 7
            echo "        ";
            $context["sidebar"] = (0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "sectionPosition", [], "any", false, false, false, 7), "sidebar"));
            // line 8
            echo "    ";
        }
        // line 9
        echo "
    ";
        // line 10
        if ((1 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 10), "elements", [], "any", false, false, false, 10)), 0))) {
            // line 11
            echo "        <div class=\"cms-element-sidebar-filter\">
            ";
            // line 12
            $this->displayBlock('element_product_listing_filter_button', $context, $blocks);
            // line 25
            echo "
            ";
            // line 26
            $this->displayBlock('element_sidebar_filter_panel', $context, $blocks);
            // line 36
            echo "        </div>
    ";
        }
    }

    // line 12
    public function block_element_product_listing_filter_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "                <button class=\"btn header-actions-btn filter-panel-wrapper-toggle\"
                        type=\"button\"
                        data-offcanvas-filter=\"true\"
                        aria-haspopup=\"true\"
                        aria-expanded=\"false\"
                        aria-label=\"";
        // line 18
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.menuLink"), "html", null, true);
        echo "\">
                    ";
        // line 19
        $this->displayBlock('element_product_listing_filter_button_icon', $context, $blocks);
        // line 22
        echo "                    ";
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterTitleText"), "html", null, true);
        echo "
                </button>
            ";
    }

    // line 19
    public function block_element_product_listing_filter_button_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig", 20);
        })())->display(twig_array_merge($context, ["name" => "sliders-horizontal"]));
        // line 21
        echo "                    ";
    }

    // line 26
    public function block_element_sidebar_filter_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "                <div id=\"filter-panel-wrapper\"
                     class=\"filter-panel-wrapper\"
                     data-offcanvas-filter-content=\"true\">
                    ";
        // line 30
        $this->loadTemplate("@Storefront/storefront/component/listing/filter-panel.html.twig", "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig", 30)->display(twig_array_merge($context, ["listing" =>         // line 31
($context["listing"] ?? null), "sidebar" =>         // line 32
($context["sidebar"] ?? null)]));
        // line 34
        echo "                </div>
            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  144 => 34,  142 => 32,  141 => 31,  140 => 30,  135 => 27,  131 => 26,  127 => 21,  118 => 20,  114 => 19,  106 => 22,  104 => 19,  100 => 18,  93 => 13,  89 => 12,  83 => 36,  81 => 26,  78 => 25,  76 => 12,  73 => 11,  71 => 10,  68 => 9,  65 => 8,  62 => 7,  59 => 6,  56 => 5,  53 => 4,  50 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-sidebar-filter.html.twig");
    }
}
