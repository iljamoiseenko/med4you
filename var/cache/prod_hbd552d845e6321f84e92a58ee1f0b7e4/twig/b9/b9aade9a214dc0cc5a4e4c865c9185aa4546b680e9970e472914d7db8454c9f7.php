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

/* @Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig */
class __TwigTemplate_9dabe3d9b335d872012471bf1f33a9e24fd1ac98d4b311d75221a78e144cb99a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_offcanvas_navigation_categories_list_category_item_link' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_list_category_item_link'],
            'layout_navigation_offcanvas_navigation_categories_list_category_item_link_text' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_list_category_item_link_text'],
            'layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["isActive"] = (0 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1), ($context["activeId"] ?? null)));
        // line 2
        $context["hasChildren"] = (1 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 2), "visibleChildCount", [], "any", false, false, false, 2), 0));
        // line 3
        $context["url"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, sw_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 3));
        // line 4
        $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 4), "translated", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4);
        // line 5
        echo "
<li class=\"navigation-offcanvas-list-item\">
    ";
        // line 7
        $this->displayBlock('layout_navigation_offcanvas_navigation_categories_list_category_item_link', $context, $blocks);
        // line 29
        echo "</li>
";
    }

    // line 7
    public function block_layout_navigation_offcanvas_navigation_categories_list_category_item_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <a class=\"navigation-offcanvas-link nav-item nav-link";
        if (($context["isActive"] ?? null)) {
            echo " active";
        }
        if (($context["hasChildren"] ?? null)) {
            echo " js-navigation-offcanvas-link";
        }
        echo "\"
           href=\"";
        // line 9
        echo sw_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\"
            ";
        // line 10
        if (($context["hasChildren"] ?? null)) {
            // line 11
            echo "                data-href=\"";
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.menu.offcanvas", ["navigationId" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\"
            ";
        }
        // line 13
        echo "           itemprop=\"url\"
            ";
        // line 14
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(sw_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 14))) {
            echo "target=\"_blank\"";
        }
        // line 15
        echo "           title=\"";
        echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 16
        $this->displayBlock('layout_navigation_offcanvas_navigation_categories_list_category_item_link_text', $context, $blocks);
        // line 27
        echo "        </a>
    ";
    }

    // line 16
    public function block_layout_navigation_offcanvas_navigation_categories_list_category_item_link_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                <span itemprop=\"name\">";
        echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</span>
                ";
        // line 18
        if (($context["hasChildren"] ?? null)) {
            // line 19
            echo "                    ";
            $this->displayBlock('layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon', $context, $blocks);
            // line 25
            echo "                ";
        }
        // line 26
        echo "            ";
    }

    // line 19
    public function block_layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                        <span
                            class=\"navigation-offcanvas-link-icon js-navigation-offcanvas-loading-icon\">
                            ";
        // line 22
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig", 22);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "sm", "name" => "arrow-medium-right"]));
        // line 23
        echo "                        </span>
                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 23,  133 => 22,  129 => 20,  125 => 19,  121 => 26,  118 => 25,  115 => 19,  113 => 18,  108 => 17,  104 => 16,  99 => 27,  97 => 16,  92 => 15,  88 => 14,  85 => 13,  79 => 11,  77 => 10,  73 => 9,  63 => 8,  59 => 7,  54 => 29,  52 => 7,  48 => 5,  46 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/offcanvas/item-link.html.twig");
    }
}
