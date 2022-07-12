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

/* @Storefront/storefront/layout/header/header.html.twig */
class __TwigTemplate_769718e3e4aa8c23015e3fba99f06d3ee8f5bf28c35c060fffcc6f620b5472e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header' => [$this, 'block_layout_header'],
            'layout_top_bar' => [$this, 'block_layout_top_bar'],
            'layout_header_navigation' => [$this, 'block_layout_header_navigation'],
            'layout_header_logo' => [$this, 'block_layout_header_logo'],
            'layout_header_search' => [$this, 'block_layout_header_search'],
            'layout_header_navigation_toggle_tablet' => [$this, 'block_layout_header_navigation_toggle_tablet'],
            'layout_header_navigation_toggle_tablet_button' => [$this, 'block_layout_header_navigation_toggle_tablet_button'],
            'layout_header_navigation_toggle_tablet_button_icon' => [$this, 'block_layout_header_navigation_toggle_tablet_button_icon'],
            'layout_header_actions' => [$this, 'block_layout_header_actions'],
            'layout_header_navigation_toggle' => [$this, 'block_layout_header_navigation_toggle'],
            'layout_header_navigation_toggle_button' => [$this, 'block_layout_header_navigation_toggle_button'],
            'layout_header_navigation_toggle_button_icon' => [$this, 'block_layout_header_navigation_toggle_button_icon'],
            'layout_header_search_toggle' => [$this, 'block_layout_header_search_toggle'],
            'layout_header_actions_wishlist' => [$this, 'block_layout_header_actions_wishlist'],
            'layout_header_actions_account' => [$this, 'block_layout_header_actions_account'],
            'layout_header_actions_cart' => [$this, 'block_layout_header_actions_cart'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_header', $context, $blocks);
    }

    public function block_layout_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $this->displayBlock('layout_top_bar', $context, $blocks);
        // line 5
        echo "
    ";
        // line 6
        $this->displayBlock('layout_header_navigation', $context, $blocks);
    }

    // line 2
    public function block_layout_top_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/layout/header/top-bar.html.twig", "@Storefront/storefront/layout/header/header.html.twig", 3)->display($context);
        // line 4
        echo "    ";
    }

    // line 6
    public function block_layout_header_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        <div class=\"row align-items-center header-row\">
            ";
        // line 8
        $this->displayBlock('layout_header_logo', $context, $blocks);
        // line 13
        echo "
            ";
        // line 14
        $this->displayBlock('layout_header_search', $context, $blocks);
        // line 39
        echo "
            ";
        // line 40
        $this->displayBlock('layout_header_actions', $context, $blocks);
        // line 116
        echo "        </div>
    ";
    }

    // line 8
    public function block_layout_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                <div class=\"col-12 col-lg-auto header-logo-col\">
                    ";
        // line 10
        $this->loadTemplate("@Storefront/storefront/layout/header/logo.html.twig", "@Storefront/storefront/layout/header/header.html.twig", 10)->display($context);
        // line 11
        echo "                </div>
            ";
    }

    // line 14
    public function block_layout_header_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                <div class=\"col-12 order-2 col-sm order-sm-1 header-search-col\">
                    <div class=\"row\">
                        <div class=\"col-sm-auto d-none d-sm-block d-lg-none\">
                            ";
        // line 18
        $this->displayBlock('layout_header_navigation_toggle_tablet', $context, $blocks);
        // line 32
        echo "                        </div>
                        <div class=\"col\">
                            ";
        // line 34
        $this->loadTemplate("@Storefront/storefront/layout/header/search.html.twig", "@Storefront/storefront/layout/header/header.html.twig", 34)->display($context);
        // line 35
        echo "                        </div>
                    </div>
                </div>
            ";
    }

    // line 18
    public function block_layout_header_navigation_toggle_tablet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                                <div class=\"nav-main-toggle\">
                                    ";
        // line 20
        $this->displayBlock('layout_header_navigation_toggle_tablet_button', $context, $blocks);
        // line 30
        echo "                                </div>
                            ";
    }

    // line 20
    public function block_layout_header_navigation_toggle_tablet_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                                        <button class=\"btn nav-main-toggle-btn header-actions-btn\"
                                                type=\"button\"
                                                data-offcanvas-menu=\"true\"
                                                aria-label=\"";
        // line 24
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.menuLink")), "html", null, true);
        echo "\">
                                            ";
        // line 25
        $this->displayBlock('layout_header_navigation_toggle_tablet_button_icon', $context, $blocks);
        // line 28
        echo "                                        </button>
                                    ";
    }

    // line 25
    public function block_layout_header_navigation_toggle_tablet_button_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                                                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/header.html.twig", 26);
        })())->display(twig_array_merge($context, ["name" => "stack"]));
        // line 27
        echo "                                            ";
    }

    // line 40
    public function block_layout_header_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                <div class=\"col-12 order-1 col-sm-auto order-sm-2 header-actions-col\">
                    <div class=\"row ";
        // line 42
        echo sw_escape_filter($this->env, ($context["gridNoGuttersClass"] ?? null), "html", null, true);
        echo "\">
                        ";
        // line 43
        $this->displayBlock('layout_header_navigation_toggle', $context, $blocks);
        // line 59
        echo "
                        ";
        // line 60
        $this->displayBlock('layout_header_search_toggle', $context, $blocks);
        // line 75
        echo "
                        ";
        // line 76
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.wishlistEnabled")) {
            // line 77
            echo "                            ";
            $this->displayBlock('layout_header_actions_wishlist', $context, $blocks);
            // line 89
            echo "                        ";
        }
        // line 90
        echo "
                        ";
        // line 91
        $this->displayBlock('layout_header_actions_account', $context, $blocks);
        // line 98
        echo "
                        ";
        // line 99
        $this->displayBlock('layout_header_actions_cart', $context, $blocks);
        // line 113
        echo "                    </div>
                </div>
            ";
    }

    // line 43
    public function block_layout_header_navigation_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "                            <div class=\"col d-sm-none\">
                                <div class=\"menu-button\">
                                    ";
        // line 46
        $this->displayBlock('layout_header_navigation_toggle_button', $context, $blocks);
        // line 56
        echo "                                </div>
                            </div>
                        ";
    }

    // line 46
    public function block_layout_header_navigation_toggle_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "                                        <button class=\"btn nav-main-toggle-btn header-actions-btn\"
                                                type=\"button\"
                                                data-offcanvas-menu=\"true\"
                                                aria-label=\"";
        // line 50
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.menuLink")), "html", null, true);
        echo "\">
                                            ";
        // line 51
        $this->displayBlock('layout_header_navigation_toggle_button_icon', $context, $blocks);
        // line 54
        echo "                                        </button>
                                    ";
    }

    // line 51
    public function block_layout_header_navigation_toggle_button_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                                                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/header.html.twig", 52);
        })())->display(twig_array_merge($context, ["name" => "stack"]));
        // line 53
        echo "                                            ";
    }

    // line 60
    public function block_layout_header_search_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "                            <div class=\"col-auto d-sm-none\">
                                <div class=\"search-toggle\">
                                    <button class=\"btn header-actions-btn search-toggle-btn js-search-toggle-btn collapsed\"
                                            type=\"button\"
                                            ";
        // line 65
        echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
        echo "=\"collapse\"
                                            ";
        // line 66
        echo sw_escape_filter($this->env, ($context["dataBsTargetAttr"] ?? null), "html", null, true);
        echo "=\"#searchCollapse\"
                                            aria-expanded=\"false\"
                                            aria-controls=\"searchCollapse\"
                                            aria-label=\"";
        // line 69
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchButton")), "html", null, true);
        echo "\">
                                        ";
        // line 70
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/header.html.twig", 70);
        })())->display(twig_array_merge($context, ["name" => "search"]));
        // line 71
        echo "                                    </button>
                                </div>
                            </div>
                        ";
    }

    // line 77
    public function block_layout_header_actions_wishlist($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "                                <div class=\"col-auto\">
                                    <div class=\"header-wishlist\">
                                        <a class=\"btn header-wishlist-btn header-actions-btn\"
                                           href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.wishlist.page");
        echo "\"
                                           title=\"";
        // line 82
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.wishlist")), "html", null, true);
        echo "\"
                                           aria-label=\"";
        // line 83
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.wishlist")), "html", null, true);
        echo "\">
                                            ";
        // line 84
        $this->loadTemplate("@Storefront/storefront/layout/header/actions/wishlist-widget.html.twig", "@Storefront/storefront/layout/header/header.html.twig", 84)->display($context);
        // line 85
        echo "                                        </a>
                                    </div>
                                </div>
                            ";
    }

    // line 91
    public function block_layout_header_actions_account($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "                            <div class=\"col-auto\">
                                <div class=\"account-menu\">
                                    ";
        // line 94
        $this->loadTemplate("@Storefront/storefront/layout/header/actions/account-widget.html.twig", "@Storefront/storefront/layout/header/header.html.twig", 94)->display($context);
        // line 95
        echo "                                </div>
                            </div>
                        ";
    }

    // line 99
    public function block_layout_header_actions_cart($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "                            <div class=\"col-auto\">
                                <div class=\"header-cart\"
                                     data-offcanvas-cart=\"true\">
                                    <a class=\"btn header-cart-btn header-actions-btn\"
                                       href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.cart.page");
        echo "\"
                                       data-cart-widget=\"true\"
                                       title=\"";
        // line 106
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartTitle")), "html", null, true);
        echo "\"
                                       aria-label=\"";
        // line 107
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartTitle")), "html", null, true);
        echo "\">
                                        ";
        // line 108
        $this->loadTemplate("@Storefront/storefront/layout/header/actions/cart-widget.html.twig", "@Storefront/storefront/layout/header/header.html.twig", 108)->display($context);
        // line 109
        echo "                                    </a>
                                </div>
                            </div>
                        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  402 => 109,  400 => 108,  396 => 107,  392 => 106,  387 => 104,  381 => 100,  377 => 99,  371 => 95,  369 => 94,  365 => 92,  361 => 91,  354 => 85,  352 => 84,  348 => 83,  344 => 82,  340 => 81,  335 => 78,  331 => 77,  324 => 71,  316 => 70,  312 => 69,  306 => 66,  302 => 65,  296 => 61,  292 => 60,  288 => 53,  279 => 52,  275 => 51,  270 => 54,  268 => 51,  264 => 50,  259 => 47,  255 => 46,  249 => 56,  247 => 46,  243 => 44,  239 => 43,  233 => 113,  231 => 99,  228 => 98,  226 => 91,  223 => 90,  220 => 89,  217 => 77,  215 => 76,  212 => 75,  210 => 60,  207 => 59,  205 => 43,  201 => 42,  198 => 41,  194 => 40,  190 => 27,  181 => 26,  177 => 25,  172 => 28,  170 => 25,  166 => 24,  161 => 21,  157 => 20,  152 => 30,  150 => 20,  147 => 19,  143 => 18,  136 => 35,  134 => 34,  130 => 32,  128 => 18,  123 => 15,  119 => 14,  114 => 11,  112 => 10,  109 => 9,  105 => 8,  100 => 116,  98 => 40,  95 => 39,  93 => 14,  90 => 13,  88 => 8,  85 => 7,  81 => 6,  77 => 4,  74 => 3,  70 => 2,  66 => 6,  63 => 5,  60 => 2,  53 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/header/header.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/layout/header/header.html.twig");
    }
}
