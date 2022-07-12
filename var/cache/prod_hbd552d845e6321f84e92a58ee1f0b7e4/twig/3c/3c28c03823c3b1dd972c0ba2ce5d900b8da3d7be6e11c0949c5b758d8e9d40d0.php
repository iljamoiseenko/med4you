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

/* @Storefront/storefront/layout/navigation/offcanvas/active-item-link.html.twig */
class __TwigTemplate_69e11a9f5d6d911c0852aa025f54c67a020b2e41a8ddc2a85af44ffb80d53aae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_offcanvas_navigation_category_headline' => [$this, 'block_layout_navigation_offcanvas_navigation_category_headline'],
            'layout_navigation_offcanvas_navigation_category_headline_text' => [$this, 'block_layout_navigation_offcanvas_navigation_category_headline_text'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_navigation_offcanvas_navigation_category_headline', $context, $blocks);
    }

    public function block_layout_navigation_offcanvas_navigation_category_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <a class=\"nav-item nav-link navigation-offcanvas-headline\"
       href=\"";
        // line 3
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["item"] ?? null));
        echo "\"
       ";
        // line 4
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["item"] ?? null))) {
            echo "target=\"_blank\"";
        }
        // line 5
        echo "       itemprop=\"url\">
        ";
        // line 6
        $this->displayBlock('layout_navigation_offcanvas_navigation_category_headline_text', $context, $blocks);
        // line 11
        echo "    </a>
";
    }

    // line 6
    public function block_layout_navigation_offcanvas_navigation_category_headline_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            <span itemprop=\"name\">
                ";
        // line 8
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["item"] ?? null), "translated", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "
            </span>
        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/offcanvas/active-item-link.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 8,  71 => 7,  67 => 6,  62 => 11,  60 => 6,  57 => 5,  53 => 4,  49 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/navigation/offcanvas/active-item-link.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/offcanvas/active-item-link.html.twig");
    }
}
