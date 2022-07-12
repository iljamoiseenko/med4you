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

/* @Storefront/storefront/base.html.twig */
class __TwigTemplate_ec3bb10cb202073ac635f045f8b3c46b298e798da445d1f5213058a9ef928fc5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'base_doctype' => [$this, 'block_base_doctype'],
            'base_html' => [$this, 'block_base_html'],
            'base_head' => [$this, 'block_base_head'],
            'base_body' => [$this, 'block_base_body'],
            'base_body_classes' => [$this, 'block_base_body_classes'],
            'base_body_inner' => [$this, 'block_base_body_inner'],
            'base_noscript' => [$this, 'block_base_noscript'],
            'base_header' => [$this, 'block_base_header'],
            'base_header_inner' => [$this, 'block_base_header_inner'],
            'base_navigation' => [$this, 'block_base_navigation'],
            'base_navigation_inner' => [$this, 'block_base_navigation_inner'],
            'base_offcanvas_navigation' => [$this, 'block_base_offcanvas_navigation'],
            'base_offcanvas_navigation_inner' => [$this, 'block_base_offcanvas_navigation_inner'],
            'base_main' => [$this, 'block_base_main'],
            'base_flashbags' => [$this, 'block_base_flashbags'],
            'base_main_inner' => [$this, 'block_base_main_inner'],
            'base_main_container' => [$this, 'block_base_main_container'],
            'base_breadcrumb' => [$this, 'block_base_breadcrumb'],
            'base_content' => [$this, 'block_base_content'],
            'base_footer' => [$this, 'block_base_footer'],
            'base_footer_inner' => [$this, 'block_base_footer_inner'],
            'base_scroll_up' => [$this, 'block_base_scroll_up'],
            'base_cookie_permission' => [$this, 'block_base_cookie_permission'],
            'base_pseudo_modal' => [$this, 'block_base_pseudo_modal'],
            'base_body_script' => [$this, 'block_base_body_script'],
            'base_script_token' => [$this, 'block_base_script_token'],
            'base_script_router' => [$this, 'block_base_script_router'],
            'base_script_breakpoints' => [$this, 'block_base_script_breakpoints'],
            'base_script_csrf' => [$this, 'block_base_script_csrf'],
            'base_script_wishlist_state' => [$this, 'block_base_script_wishlist_state'],
            'base_script_jquery' => [$this, 'block_base_script_jquery'],
            'base_script_hmr_mode' => [$this, 'block_base_script_hmr_mode'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["isHMRMode"] = (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 2), "headers", [], "any", false, false, false, 2), "get", [0 => "hot-reload-mode"], "method", false, false, false, 2) && (0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "environment", [], "any", false, false, false, 2), "dev")));
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('base_doctype', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('base_html', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('base_head', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('base_body', $context, $blocks);
        // line 206
        echo "</html>
";
    }

    // line 4
    public function block_base_doctype($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<!DOCTYPE html>
";
    }

    // line 8
    public function block_base_html($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<html lang=\"";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 9), "activeLanguage", [], "any", false, false, false, 9), "translationCode", [], "any", false, false, false, 9), "code", [], "any", false, false, false, 9), "html", null, true);
        echo "\"
      itemscope=\"itemscope\"
      itemtype=\"https://schema.org/WebPage\">
";
    }

    // line 14
    public function block_base_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/layout/meta.html.twig", "@Storefront/storefront/base.html.twig", 15)->display($context);
    }

    // line 18
    public function block_base_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <body class=\"";
        $this->displayBlock('base_body_classes', $context, $blocks);
        echo "\">

    ";
        // line 21
        $this->displayBlock('base_body_inner', $context, $blocks);
        // line 96
        echo "
    ";
        // line 97
        $this->displayBlock('base_scroll_up', $context, $blocks);
        // line 100
        echo "
    ";
        // line 101
        $this->displayBlock('base_cookie_permission', $context, $blocks);
        // line 104
        echo "
    ";
        // line 105
        $this->displayBlock('base_pseudo_modal', $context, $blocks);
        // line 108
        echo "
    ";
        // line 109
        $this->displayBlock('base_body_script', $context, $blocks);
        // line 204
        echo "    </body>
";
    }

    // line 19
    public function block_base_body_classes($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "is-ctl-";
        if ( !twig_test_empty(($context["controllerName"] ?? null))) {
            echo sw_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerName"] ?? null)), "html", null, true);
        }
        echo " is-act-";
        if ( !twig_test_empty(($context["controllerAction"] ?? null))) {
            echo sw_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerAction"] ?? null)), "html", null, true);
        }
    }

    // line 21
    public function block_base_body_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "        ";
        $this->displayBlock('base_noscript', $context, $blocks);
        // line 30
        echo "
        ";
        // line 31
        $this->displayBlock('base_header', $context, $blocks);
        // line 40
        echo "
        ";
        // line 41
        $this->displayBlock('base_navigation', $context, $blocks);
        // line 48
        echo "
        ";
        // line 49
        $this->displayBlock('base_offcanvas_navigation', $context, $blocks);
        // line 58
        echo "
        ";
        // line 59
        $this->displayBlock('base_main', $context, $blocks);
        // line 87
        echo "
        ";
        // line 88
        $this->displayBlock('base_footer', $context, $blocks);
        // line 95
        echo "    ";
    }

    // line 22
    public function block_base_noscript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "            <noscript class=\"noscript-main\">
                ";
        // line 24
        $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/base.html.twig", 24)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.noscriptNotice"))]));
        // line 28
        echo "            </noscript>
        ";
    }

    // line 31
    public function block_base_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "            <header class=\"header-main\">
                ";
        // line 33
        $this->displayBlock('base_header_inner', $context, $blocks);
        // line 38
        echo "            </header>
        ";
    }

    // line 33
    public function block_base_header_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                    <div class=\"container\">
                        ";
        // line 35
        $this->loadTemplate("@Storefront/storefront/layout/header/header.html.twig", "@Storefront/storefront/base.html.twig", 35)->display($context);
        // line 36
        echo "                    </div>
                ";
    }

    // line 41
    public function block_base_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "            <div class=\"nav-main\">
                ";
        // line 43
        $this->displayBlock('base_navigation_inner', $context, $blocks);
        // line 46
        echo "            </div>
        ";
    }

    // line 43
    public function block_base_navigation_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "                    ";
        $this->loadTemplate("@Storefront/storefront/layout/navigation/navigation.html.twig", "@Storefront/storefront/base.html.twig", 44)->display($context);
        // line 45
        echo "                ";
    }

    // line 49
    public function block_base_offcanvas_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 50), "navigation", [], "any", false, false, false, 50)) {
            // line 51
            echo "                <div class=\"d-none js-navigation-offcanvas-initial-content";
            if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 51), "navigationCategoryId", [], "any", false, false, false, 51), sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 51), "navigation", [], "any", false, false, false, 51), "active", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51)))) {
                echo " is-root";
            }
            echo "\">
                    ";
            // line 52
            $this->displayBlock('base_offcanvas_navigation_inner', $context, $blocks);
            // line 55
            echo "                </div>
            ";
        }
        // line 57
        echo "        ";
    }

    // line 52
    public function block_base_offcanvas_navigation_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig", "@Storefront/storefront/base.html.twig", 53)->display(twig_array_merge($context, ["navigation" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 53), "navigation", [], "any", false, false, false, 53)]));
        // line 54
        echo "                    ";
    }

    // line 59
    public function block_base_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "            <main class=\"content-main\">
                ";
        // line 61
        $this->displayBlock('base_flashbags', $context, $blocks);
        // line 68
        echo "
                ";
        // line 69
        $this->displayBlock('base_main_inner', $context, $blocks);
        // line 85
        echo "            </main>
        ";
    }

    // line 61
    public function block_base_flashbags($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "                    <div class=\"flashbags container\">
                        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 63));
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
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 64
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/base.html.twig", 64)->display(twig_array_merge($context, ["type" => $context["type"], "list" => $context["messages"]]));
            // line 65
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                    </div>
                ";
    }

    // line 69
    public function block_base_main_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "                    <div class=\"container\">
                        ";
        // line 71
        $this->displayBlock('base_main_container', $context, $blocks);
        // line 83
        echo "                    </div>
                ";
    }

    // line 71
    public function block_base_main_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "                            <div class=\"container-main\">
                                ";
        // line 73
        $this->displayBlock('base_breadcrumb', $context, $blocks);
        // line 79
        echo "
                                ";
        // line 80
        $this->displayBlock('base_content', $context, $blocks);
        // line 81
        echo "                            </div>
                        ";
    }

    // line 73
    public function block_base_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/layout/breadcrumb.html.twig", "@Storefront/storefront/base.html.twig", 74)->display(twig_to_array(["context" =>         // line 75
($context["context"] ?? null), "category" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 76
($context["page"] ?? null), "product", [], "any", false, false, false, 76), "seoCategory", [], "any", false, false, false, 76)]));
        // line 78
        echo "                                ";
    }

    // line 80
    public function block_base_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 88
    public function block_base_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "            <footer class=\"footer-main\">
                ";
        // line 90
        $this->displayBlock('base_footer_inner', $context, $blocks);
        // line 93
        echo "            </footer>
        ";
    }

    // line 90
    public function block_base_footer_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "                    ";
        $this->loadTemplate("@Storefront/storefront/layout/footer/footer.html.twig", "@Storefront/storefront/base.html.twig", 91)->display($context);
        // line 92
        echo "                ";
    }

    // line 97
    public function block_base_scroll_up($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/layout/scroll-up.html.twig", "@Storefront/storefront/base.html.twig", 98)->display($context);
        // line 99
        echo "    ";
    }

    // line 101
    public function block_base_cookie_permission($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/layout/cookie/cookie-permission.html.twig", "@Storefront/storefront/base.html.twig", 102)->display($context);
        // line 103
        echo "    ";
    }

    // line 105
    public function block_base_pseudo_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/component/pseudo-modal.html.twig", "@Storefront/storefront/base.html.twig", 106)->display($context);
        // line 107
        echo "    ";
    }

    // line 109
    public function block_base_body_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 110
        echo "        ";
        if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_15917")) {
            // line 111
            echo "
            ";
            // line 113
            echo "            ";
            $this->displayBlock('base_script_token', $context, $blocks);
            // line 115
            echo "
            ";
            // line 117
            echo "            ";
            $this->displayBlock('base_script_router', $context, $blocks);
            // line 138
            echo "
            ";
            // line 140
            echo "            ";
            $this->displayBlock('base_script_breakpoints', $context, $blocks);
            // line 161
            echo "
            ";
            // line 163
            echo "            ";
            $this->displayBlock('base_script_csrf', $context, $blocks);
            // line 171
            echo "
            ";
            // line 172
            if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.wishlistEnabled")) {
                // line 173
                echo "                ";
                // line 174
                echo "                ";
                $this->displayBlock('base_script_wishlist_state', $context, $blocks);
                // line 181
                echo "            ";
            }
            // line 182
            echo "
            ";
            // line 184
            echo "            ";
            $this->displayBlock('base_script_jquery', $context, $blocks);
            // line 186
            echo "
            ";
            // line 188
            echo "            ";
            $this->displayBlock('base_script_hmr_mode', $context, $blocks);
            // line 202
            echo "        ";
        }
        // line 203
        echo "    ";
    }

    // line 113
    public function block_base_script_token($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "            ";
    }

    // line 117
    public function block_base_script_router($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        echo "                ";
        // line 119
        echo "                <script>
                    window.activeNavigationId = '";
        // line 120
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 120), "navigation", [], "any", false, false, false, 120), "active", [], "any", false, false, false, 120), "id", [], "any", false, false, false, 120), "html", null, true);
        echo "';
                    window.router = {
                        'frontend.cart.offcanvas': '";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cart.offcanvas");
        echo "',
                        'frontend.cookie.offcanvas': '";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cookie.offcanvas");
        echo "',
                        'frontend.checkout.finish.page': '";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.finish.page");
        echo "',
                        'frontend.checkout.info': '";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.info");
        echo "',
                        'frontend.menu.offcanvas': '";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.menu.offcanvas");
        echo "',
                        'frontend.cms.page': '";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page");
        echo "',
                        'frontend.cms.navigation.page': '";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.navigation.page");
        echo "',
                        'frontend.account.addressbook': '";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.addressbook");
        echo "',
                        'frontend.csrf.generateToken': '";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.csrf.generateToken");
        echo "',
                        'frontend.country.country-data': '";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.country.country.data");
        echo "',
                        'frontend.store-api.proxy': '";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.store-api.proxy");
        echo "',
                    };
                    window.storeApiProxyToken = '";
        // line 134
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.store-api.proxy", ["mode" => "token"]);
        echo "';
                    window.salesChannelId = '";
        // line 135
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 135), "attributes", [], "any", false, false, false, 135), "get", [0 => "sw-sales-channel-id"], "method", false, false, false, 135), "html", null, true);
        echo "';
                </script>
            ";
    }

    // line 140
    public function block_base_script_breakpoints($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "                ";
        // line 142
        echo "                <script>
                    ";
        // line 143
        $context["breakpoint"] = ["xs" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xs"), "sm" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.sm"), "md" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md"), "lg" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg"), "xl" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xl")];
        // line 150
        echo "
                    ";
        // line 152
        echo "                    ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 153
            echo "                        ";
            $context["breakpoint"] = twig_array_merge(($context["breakpoint"] ?? null), ["xxl" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xxl")]);
            // line 156
            echo "                    ";
        }
        // line 157
        echo "
                    window.breakpoints = ";
        // line 158
        echo call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["breakpoint"] ?? null)]);
        echo ";
                </script>
            ";
    }

    // line 163
    public function block_base_script_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 164
        echo "                <script>
                    window.csrf = {
                        'enabled': '";
        // line 166
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "csrfEnabled", [], "any", false, false, false, 166), "html", null, true);
        echo "',
                        'mode': '";
        // line 167
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "csrfMode", [], "any", false, false, false, 167), "html", null, true);
        echo "'
                    }
                </script>
            ";
    }

    // line 174
    public function block_base_script_wishlist_state($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 175
        echo "                    <script>
                        window.customerLoggedInState = ";
        // line 176
        echo ((( !(null === sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 176)) &&  !sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 176), "guest", [], "any", false, false, false, 176))) ? (1) : (0));
        echo ";

                        window.wishlistEnabled = ";
        // line 178
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.wishlistEnabled"), "html", null, true);
        echo ";
                    </script>
                ";
    }

    // line 184
    public function block_base_script_jquery($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 185
        echo "            ";
    }

    // line 188
    public function block_base_script_hmr_mode($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 189
        echo "                ";
        if (($context["isHMRMode"] ?? null)) {
            // line 190
            echo "                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/vendor-node.js\"></script>
                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/vendor-shared.js\"></script>
                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/runtime.js\"></script>
                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/app.js\"></script>
                    ";
            // line 195
            echo "                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/storefront.js\"></script>
                ";
        } else {
            // line 197
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "assets.js"));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 198
                echo "                        <script type=\"text/javascript\" src=\"";
                echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["file"], "theme"), "html", null, true);
                echo "\"></script>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            echo "                ";
        }
        // line 201
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  746 => 201,  743 => 200,  734 => 198,  729 => 197,  725 => 195,  719 => 190,  716 => 189,  712 => 188,  708 => 185,  704 => 184,  697 => 178,  692 => 176,  689 => 175,  685 => 174,  677 => 167,  673 => 166,  669 => 164,  665 => 163,  658 => 158,  655 => 157,  652 => 156,  649 => 153,  646 => 152,  643 => 150,  641 => 143,  638 => 142,  636 => 141,  632 => 140,  625 => 135,  621 => 134,  616 => 132,  612 => 131,  608 => 130,  604 => 129,  600 => 128,  596 => 127,  592 => 126,  588 => 125,  584 => 124,  580 => 123,  576 => 122,  571 => 120,  568 => 119,  566 => 118,  562 => 117,  558 => 114,  554 => 113,  550 => 203,  547 => 202,  544 => 188,  541 => 186,  538 => 184,  535 => 182,  532 => 181,  529 => 174,  527 => 173,  525 => 172,  522 => 171,  519 => 163,  516 => 161,  513 => 140,  510 => 138,  507 => 117,  504 => 115,  501 => 113,  498 => 111,  495 => 110,  491 => 109,  487 => 107,  484 => 106,  480 => 105,  476 => 103,  473 => 102,  469 => 101,  465 => 99,  462 => 98,  458 => 97,  454 => 92,  451 => 91,  447 => 90,  442 => 93,  440 => 90,  437 => 89,  433 => 88,  427 => 80,  423 => 78,  421 => 76,  420 => 75,  418 => 74,  414 => 73,  409 => 81,  407 => 80,  404 => 79,  402 => 73,  399 => 72,  395 => 71,  390 => 83,  388 => 71,  385 => 70,  381 => 69,  376 => 66,  362 => 65,  359 => 64,  342 => 63,  339 => 62,  335 => 61,  330 => 85,  328 => 69,  325 => 68,  323 => 61,  320 => 60,  316 => 59,  312 => 54,  309 => 53,  305 => 52,  301 => 57,  297 => 55,  295 => 52,  288 => 51,  285 => 50,  281 => 49,  277 => 45,  274 => 44,  270 => 43,  265 => 46,  263 => 43,  260 => 42,  256 => 41,  251 => 36,  249 => 35,  246 => 34,  242 => 33,  237 => 38,  235 => 33,  232 => 32,  228 => 31,  223 => 28,  221 => 24,  218 => 23,  214 => 22,  210 => 95,  208 => 88,  205 => 87,  203 => 59,  200 => 58,  198 => 49,  195 => 48,  193 => 41,  190 => 40,  188 => 31,  185 => 30,  182 => 22,  178 => 21,  164 => 19,  159 => 204,  157 => 109,  154 => 108,  152 => 105,  149 => 104,  147 => 101,  144 => 100,  142 => 97,  139 => 96,  137 => 21,  131 => 19,  127 => 18,  122 => 15,  118 => 14,  109 => 9,  105 => 8,  100 => 5,  96 => 4,  91 => 206,  89 => 18,  86 => 17,  84 => 14,  81 => 13,  79 => 8,  76 => 7,  74 => 4,  71 => 3,  69 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/base.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/base.html.twig");
    }
}
