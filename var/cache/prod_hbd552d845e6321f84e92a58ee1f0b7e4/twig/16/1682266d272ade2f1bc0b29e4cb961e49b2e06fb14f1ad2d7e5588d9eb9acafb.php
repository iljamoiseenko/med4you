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

/* @Storefront/storefront/layout/navigation/offcanvas/show-active-link.html.twig */
class __TwigTemplate_447a0027b8e7a0f3d7e4b87e7187c6b6bd9c5251483e210cf3304bf57b707906 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_offcanvas_navigation_categories_list_current_category_item_link' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_list_current_category_item_link'],
            'layout_navigation_offcanvas_navigation_categories_list_current_category_item_text' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_list_current_category_item_text'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["item"] ?? null), "translated", [], "any", false, false, false, 1), "name", [], "any", false, false, false, 1);
        // line 2
        echo "<li class=\"navigation-offcanvas-list-item\">
    ";
        // line 3
        $this->displayBlock('layout_navigation_offcanvas_navigation_categories_list_current_category_item_link', $context, $blocks);
        // line 16
        echo "</li>
";
    }

    // line 3
    public function block_layout_navigation_offcanvas_navigation_categories_list_current_category_item_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "        <a class=\"nav-item nav-link navigation-offcanvas-link is-current-category\"
           href=\"";
        // line 5
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["item"] ?? null));
        echo "\"
           itemprop=\"url\"
           ";
        // line 7
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["item"] ?? null))) {
            echo "target=\"_blank\"";
        }
        // line 8
        echo "           title=\"";
        echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 9
        $this->displayBlock('layout_navigation_offcanvas_navigation_categories_list_current_category_item_text', $context, $blocks);
        // line 14
        echo "        </a>
    ";
    }

    // line 9
    public function block_layout_navigation_offcanvas_navigation_categories_list_current_category_item_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                <span itemprop=\"name\">
                    ";
        // line 11
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.showCategory", ["%category%" => ($context["name"] ?? null)]));
        echo "
                </span>
            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/offcanvas/show-active-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 11,  83 => 10,  79 => 9,  74 => 14,  72 => 9,  67 => 8,  63 => 7,  58 => 5,  55 => 4,  51 => 3,  46 => 16,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/navigation/offcanvas/show-active-link.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/offcanvas/show-active-link.html.twig");
    }
}
