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

/* @Storefront/storefront/layout/navigation/navigation.html.twig */
class __TwigTemplate_6feb44cdaf12f43482677865764822ff438be6978e6971f79b6773c6f8718c68 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_main_navigation' => [$this, 'block_layout_main_navigation'],
            'layout_main_navigation_navbar' => [$this, 'block_layout_main_navigation_navbar'],
            'layout_main_navigation_menu' => [$this, 'block_layout_main_navigation_menu'],
            'layout_main_navigation_menu_home' => [$this, 'block_layout_main_navigation_menu_home'],
            'layout_main_navigation_menu_items' => [$this, 'block_layout_main_navigation_menu_items'],
            'layout_main_navigation_menu_item' => [$this, 'block_layout_main_navigation_menu_item'],
            'layout_main_navigation_menu_flyout_wrapper' => [$this, 'block_layout_main_navigation_menu_flyout_wrapper'],
            'layout_main_navigation_menu_flyout_container' => [$this, 'block_layout_main_navigation_menu_flyout_container'],
            'layout_main_navigation_menu_flyouts' => [$this, 'block_layout_main_navigation_menu_flyouts'],
            'layout_main_navigation_menu_flyout' => [$this, 'block_layout_main_navigation_menu_flyout'],
            'layout_main_navigation_menu_flyout_include' => [$this, 'block_layout_main_navigation_menu_flyout_include'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_main_navigation', $context, $blocks);
    }

    public function block_layout_main_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
    <div class=\"main-navigation\"
         id=\"mainNavigation\"
         data-flyout-menu=\"true\">
        ";
        // line 6
        $this->displayBlock('layout_main_navigation_navbar', $context, $blocks);
        // line 67
        echo "
        ";
        // line 68
        $this->displayBlock('layout_main_navigation_menu_flyout_wrapper', $context, $blocks);
        // line 99
        echo "    </div>
";
    }

    // line 6
    public function block_layout_main_navigation_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            <div class=\"container\">
                ";
        // line 8
        $this->displayBlock('layout_main_navigation_menu', $context, $blocks);
        // line 65
        echo "            </div>
        ";
    }

    // line 8
    public function block_layout_main_navigation_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                    <nav class=\"nav main-navigation-menu\"
                        itemscope=\"itemscope\"
                        itemtype=\"http://schema.org/SiteNavigationElement\">
                        ";
        // line 12
        $context["homeLabel"] = ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, true, false, 12), "translated", [], "any", false, true, false, 12), "homeName", [], "any", true, true, false, 12)) ? (_twig_default_filter(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, true, false, 12), "translated", [], "any", false, true, false, 12), "homeName", [], "any", false, false, false, 12), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.homeLink"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.homeLink")));
        // line 13
        echo "
                        ";
        // line 14
        $this->displayBlock('layout_main_navigation_menu_home', $context, $blocks);
        // line 26
        echo "
                        ";
        // line 27
        $this->displayBlock('layout_main_navigation_menu_items', $context, $blocks);
        // line 63
        echo "                    </nav>
                ";
    }

    // line 14
    public function block_layout_main_navigation_menu_home($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                            ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 15), "translated", [], "any", false, false, false, 15), "homeEnabled", [], "any", false, false, false, 15)) {
            // line 16
            echo "                                <a class=\"nav-link main-navigation-link";
            if ((($context["controllerAction"] ?? null) === "home")) {
                echo " active";
            }
            echo " home-link\"
                                    href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.home.page");
            echo "\"
                                    itemprop=\"url\"
                                    title=\"";
            // line 19
            echo sw_escape_filter($this->env, twig_striptags(($context["homeLabel"] ?? null)), "html", null, true);
            echo "\">
                                    <div class=\"main-navigation-link-text\">
                                        <span itemprop=\"name\">";
            // line 21
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize(($context["homeLabel"] ?? null));
            echo "</span>
                                    </div>
                                </a>
                            ";
        }
        // line 25
        echo "                        ";
    }

    // line 27
    public function block_layout_main_navigation_menu_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                            ";
        $context["activePath"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 28), "navigation", [], "any", false, false, false, 28), "active", [], "any", false, false, false, 28), "path", [], "any", false, false, false, 28);
        // line 29
        echo "
                            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 30), "navigation", [], "any", false, false, false, 30), "tree", [], "any", false, false, false, 30));
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
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 31
            echo "                                ";
            $context["category"] = sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 31);
            // line 32
            echo "                                ";
            $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32);
            // line 33
            echo "
                                ";
            // line 35
            echo "                                ";
            $context["categorId"] = sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 35);
            // line 36
            echo "
                                ";
            // line 37
            $this->displayBlock('layout_main_navigation_menu_item', $context, $blocks);
            // line 61
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                        ";
    }

    // line 37
    public function block_layout_main_navigation_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "                                    ";
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "type", [], "any", false, false, false, 38), "folder"))) {
            // line 39
            echo "                                        <div class=\"nav-link main-navigation-link\"
                                            ";
            // line 40
            if ((1 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 40)), 0))) {
                // line 41
                echo "                                                data-flyout-menu-trigger=\"";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 41), "html", null, true);
                echo "\"
                                            ";
            }
            // line 43
            echo "                                              title=\"";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                            <div class=\"main-navigation-link-text\">
                                                <span itemprop=\"name\">";
            // line 45
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                                            </div>
                                        </div>
                                    ";
        } else {
            // line 49
            echo "                                        <a class=\"nav-link main-navigation-link";
            if (((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 49), sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 49), "navigation", [], "any", false, false, false, 49), "active", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49))) || twig_in_filter(sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 49), ($context["activePath"] ?? null)))) {
                echo " active";
            }
            echo "\"
                                           href=\"";
            // line 50
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["category"] ?? null));
            echo "\"
                                           itemprop=\"url\"
                                           ";
            // line 52
            if ((1 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 52)), 0))) {
                echo "data-flyout-menu-trigger=\"";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 52), "html", null, true);
                echo "\"";
            }
            // line 53
            echo "                                           ";
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["category"] ?? null))) {
                echo "target=\"_blank\"";
            }
            // line 54
            echo "                                           title=\"";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                            <div class=\"main-navigation-link-text\">
                                                <span itemprop=\"name\">";
            // line 56
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                                            </div>
                                        </a>
                                    ";
        }
        // line 60
        echo "                                ";
    }

    // line 68
    public function block_layout_main_navigation_menu_flyout_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "            ";
        $context["navigationChildrenCount"] = 0;
        // line 70
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 70), "navigation", [], "any", false, false, false, 70), "tree", [], "any", false, false, false, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 71
            echo "                ";
            if ((1 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 71), "childCount", [], "any", false, false, false, 71), 0))) {
                // line 72
                echo "                    ";
                $context["navigationChildrenCount"] = (($context["navigationChildrenCount"] ?? null) + 1);
                // line 73
                echo "                ";
            }
            // line 74
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
            ";
        // line 76
        if ((1 === twig_compare(($context["navigationChildrenCount"] ?? null), 0))) {
            // line 77
            echo "                ";
            $this->displayBlock('layout_main_navigation_menu_flyout_container', $context, $blocks);
            // line 97
            echo "            ";
        }
        // line 98
        echo "        ";
    }

    // line 77
    public function block_layout_main_navigation_menu_flyout_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "                    <div class=\"navigation-flyouts\">
                        ";
        // line 79
        $this->displayBlock('layout_main_navigation_menu_flyouts', $context, $blocks);
        // line 95
        echo "                    </div>
                ";
    }

    // line 79
    public function block_layout_main_navigation_menu_flyouts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 80), "navigation", [], "any", false, false, false, 80), "tree", [], "any", false, false, false, 80));
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
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 81
            echo "                                ";
            if ((1 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, $context["treeItem"], "children", [], "any", false, false, false, 81)), 0))) {
                // line 82
                echo "                                    ";
                $this->displayBlock('layout_main_navigation_menu_flyout', $context, $blocks);
                // line 92
                echo "                                ";
            }
            // line 93
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                        ";
    }

    // line 82
    public function block_layout_main_navigation_menu_flyout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "                                        <div class=\"navigation-flyout\"
                                             data-flyout-menu-id=\"";
        // line 84
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84), "html", null, true);
        echo "\">
                                            <div class=\"container\">
                                                ";
        // line 86
        $this->displayBlock('layout_main_navigation_menu_flyout_include', $context, $blocks);
        // line 89
        echo "                                            </div>
                                        </div>
                                    ";
    }

    // line 86
    public function block_layout_main_navigation_menu_flyout_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "                                                    ";
        $this->loadTemplate("@Storefront/storefront/layout/navigation/flyout.html.twig", "@Storefront/storefront/layout/navigation/navigation.html.twig", 87)->display(twig_to_array(["navigationTree" => ($context["treeItem"] ?? null), "level" => (($context["level"] ?? null) + 1), "page" => ($context["page"] ?? null)]));
        // line 88
        echo "                                                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/navigation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  413 => 88,  410 => 87,  406 => 86,  400 => 89,  398 => 86,  393 => 84,  390 => 83,  386 => 82,  382 => 94,  368 => 93,  365 => 92,  362 => 82,  359 => 81,  341 => 80,  337 => 79,  332 => 95,  330 => 79,  327 => 78,  323 => 77,  319 => 98,  316 => 97,  313 => 77,  311 => 76,  308 => 75,  302 => 74,  299 => 73,  296 => 72,  293 => 71,  288 => 70,  285 => 69,  281 => 68,  277 => 60,  270 => 56,  264 => 54,  259 => 53,  253 => 52,  248 => 50,  241 => 49,  234 => 45,  228 => 43,  222 => 41,  220 => 40,  217 => 39,  214 => 38,  210 => 37,  206 => 62,  192 => 61,  190 => 37,  187 => 36,  184 => 35,  181 => 33,  178 => 32,  175 => 31,  158 => 30,  155 => 29,  152 => 28,  148 => 27,  144 => 25,  137 => 21,  132 => 19,  127 => 17,  120 => 16,  117 => 15,  113 => 14,  108 => 63,  106 => 27,  103 => 26,  101 => 14,  98 => 13,  96 => 12,  91 => 9,  87 => 8,  82 => 65,  80 => 8,  77 => 7,  73 => 6,  68 => 99,  66 => 68,  63 => 67,  61 => 6,  55 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/navigation/navigation.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/navigation.html.twig");
    }
}
