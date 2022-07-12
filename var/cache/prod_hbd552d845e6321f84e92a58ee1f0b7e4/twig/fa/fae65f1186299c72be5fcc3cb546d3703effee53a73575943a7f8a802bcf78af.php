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

/* @Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig */
class __TwigTemplate_1359a8eae8f187b836c3e49a6cebe11fad6283cc7674a1622b26e3bdc3b7a17e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_offcanvas_navigation_category_back_link_text' => [$this, 'block_layout_navigation_offcanvas_navigation_category_back_link_text'],
            'layout_utilities_offcanvas_close_icon' => [$this, 'block_layout_utilities_offcanvas_close_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["item"] ?? null), "parentId", [], "any", false, false, false, 1), sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 1), "navigationCategoryId", [], "any", false, false, false, 1)))) {
            // line 2
            echo "    ";
            $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.menu.offcanvas");
        } else {
            // line 4
            echo "    ";
            $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.menu.offcanvas", ["navigationId" => sw_get_attribute($this->env, $this->source, ($context["item"] ?? null), "parentId", [], "any", false, false, false, 4)]);
        }
        // line 6
        echo "
<a class=\"nav-item nav-link is-back-link navigation-offcanvas-link js-navigation-offcanvas-link\"
   href=\"";
        // line 8
        echo sw_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\"
   itemprop=\"url\"
   title=\"";
        // line 10
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.back")), "html", null, true);
        echo "\">
    ";
        // line 11
        $this->displayBlock('layout_navigation_offcanvas_navigation_category_back_link_text', $context, $blocks);
        // line 22
        echo "</a>
";
    }

    // line 11
    public function block_layout_navigation_offcanvas_navigation_category_back_link_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "        <span class=\"navigation-offcanvas-link-icon js-navigation-offcanvas-loading-icon\">
            ";
        // line 13
        $this->displayBlock('layout_utilities_offcanvas_close_icon', $context, $blocks);
        // line 16
        echo "        </span>

        <span itemprop=\"name\">
            ";
        // line 19
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.back"));
        echo "
        </span>
    ";
    }

    // line 13
    public function block_layout_utilities_offcanvas_close_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig", 14);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "sm", "name" => "arrow-medium-left"]));
        // line 15
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 15,  94 => 14,  90 => 13,  83 => 19,  78 => 16,  76 => 13,  73 => 12,  69 => 11,  64 => 22,  62 => 11,  58 => 10,  53 => 8,  49 => 6,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/offcanvas/back-link.html.twig");
    }
}
