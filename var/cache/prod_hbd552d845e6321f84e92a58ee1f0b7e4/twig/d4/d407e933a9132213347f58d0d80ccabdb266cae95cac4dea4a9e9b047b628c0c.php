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

/* @Storefront/storefront/layout/meta.html.twig */
class __TwigTemplate_a652c3cc2f7cccbfd32910094869704bf1c48e3041bbbbc6318f629bdbd355e6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_head_inner' => [$this, 'block_layout_head_inner'],
            'layout_head_meta_tags' => [$this, 'block_layout_head_meta_tags'],
            'layout_head_meta_tags_charset' => [$this, 'block_layout_head_meta_tags_charset'],
            'layout_head_meta_tags_viewport' => [$this, 'block_layout_head_meta_tags_viewport'],
            'layout_head_meta_tags_general' => [$this, 'block_layout_head_meta_tags_general'],
            'layout_head_meta_tags_general_author' => [$this, 'block_layout_head_meta_tags_general_author'],
            'layout_head_meta_tags_robots' => [$this, 'block_layout_head_meta_tags_robots'],
            'layout_head_meta_tags_general_revisit' => [$this, 'block_layout_head_meta_tags_general_revisit'],
            'layout_head_meta_tags_keywords' => [$this, 'block_layout_head_meta_tags_keywords'],
            'layout_head_meta_tags_description' => [$this, 'block_layout_head_meta_tags_description'],
            'layout_head_meta_tags_opengraph' => [$this, 'block_layout_head_meta_tags_opengraph'],
            'layout_head_meta_tags_url_og' => [$this, 'block_layout_head_meta_tags_url_og'],
            'layout_head_meta_tags_type_og' => [$this, 'block_layout_head_meta_tags_type_og'],
            'layout_head_meta_tags_sitename_og' => [$this, 'block_layout_head_meta_tags_sitename_og'],
            'layout_head_meta_tags_title_og' => [$this, 'block_layout_head_meta_tags_title_og'],
            'layout_head_meta_tags_description_og' => [$this, 'block_layout_head_meta_tags_description_og'],
            'layout_head_meta_tags_image_og' => [$this, 'block_layout_head_meta_tags_image_og'],
            'layout_head_meta_tags_card_twitter' => [$this, 'block_layout_head_meta_tags_card_twitter'],
            'layout_head_meta_tags_sitename_twitter' => [$this, 'block_layout_head_meta_tags_sitename_twitter'],
            'layout_head_meta_tags_title_twitter' => [$this, 'block_layout_head_meta_tags_title_twitter'],
            'layout_head_meta_tags_description_twitter' => [$this, 'block_layout_head_meta_tags_description_twitter'],
            'layout_head_meta_tags_image_twitter' => [$this, 'block_layout_head_meta_tags_image_twitter'],
            'layout_head_meta_tags_schema_webpage' => [$this, 'block_layout_head_meta_tags_schema_webpage'],
            'layout_head_meta_tags_copyright_holder' => [$this, 'block_layout_head_meta_tags_copyright_holder'],
            'layout_head_meta_tags_copyright_year' => [$this, 'block_layout_head_meta_tags_copyright_year'],
            'layout_head_meta_tags_family_friendly' => [$this, 'block_layout_head_meta_tags_family_friendly'],
            'layout_head_meta_tags_image_meta' => [$this, 'block_layout_head_meta_tags_image_meta'],
            'layout_head_meta_tags_hreflangs' => [$this, 'block_layout_head_meta_tags_hreflangs'],
            'layout_head_favicon' => [$this, 'block_layout_head_favicon'],
            'layout_head_apple' => [$this, 'block_layout_head_apple'],
            'layout_head_android' => [$this, 'block_layout_head_android'],
            'layout_head_canonical' => [$this, 'block_layout_head_canonical'],
            'layout_head_title' => [$this, 'block_layout_head_title'],
            'layout_head_title_inner' => [$this, 'block_layout_head_title_inner'],
            'layout_head_stylesheet' => [$this, 'block_layout_head_stylesheet'],
            'layout_head_javascript_feature' => [$this, 'block_layout_head_javascript_feature'],
            'layout_head_javascript_tracking' => [$this, 'block_layout_head_javascript_tracking'],
            'layout_head_javascript_recaptcha' => [$this, 'block_layout_head_javascript_recaptcha'],
            'layout_head_javascript_token' => [$this, 'block_layout_head_javascript_token'],
            'layout_head_javascript_cookie_state' => [$this, 'block_layout_head_javascript_cookie_state'],
            'layout_head_javascript_router' => [$this, 'block_layout_head_javascript_router'],
            'layout_head_javascript_breakpoints' => [$this, 'block_layout_head_javascript_breakpoints'],
            'layout_head_javascript_csrf' => [$this, 'block_layout_head_javascript_csrf'],
            'layout_head_javascript_wishlist_state' => [$this, 'block_layout_head_javascript_wishlist_state'],
            'layout_head_javascript_jquery' => [$this, 'block_layout_head_javascript_jquery'],
            'layout_head_javascript_hmr_mode' => [$this, 'block_layout_head_javascript_hmr_mode'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_head_inner', $context, $blocks);
    }

    public function block_layout_head_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["metaInformation"] = sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context["basicConfig"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation");
        // line 4
        echo "    ";
        $context["maxLength"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "seo.descriptionMaxLength");
        // line 5
        echo "    ";
        $context["metaDescription"] = sw_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_trim_filter(twig_striptags(sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "metaDescription", [], "any", false, false, false, 5)))), "truncate", [0 => (($context["maxLength"]) ?? (160)), 1 => "…"], "method", false, false, false, 5);
        // line 6
        echo "    ";
        $context["metaTitle"] = twig_trim_filter(twig_striptags(sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "metaTitle", [], "any", false, false, false, 6)));
        // line 7
        echo "    ";
        $context["metaKeywords"] = twig_trim_filter(twig_striptags(sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "metaKeywords", [], "any", false, false, false, 7)));
        // line 8
        echo "
    <head>
        ";
        // line 10
        $this->displayBlock('layout_head_meta_tags', $context, $blocks);
        // line 76
        echo "
        ";
        // line 77
        $this->displayBlock('layout_head_favicon', $context, $blocks);
        // line 81
        echo "
        ";
        // line 82
        $this->displayBlock('layout_head_apple', $context, $blocks);
        // line 89
        echo "
        ";
        // line 90
        $this->displayBlock('layout_head_android', $context, $blocks);
        // line 93
        echo "
        ";
        // line 94
        $this->displayBlock('layout_head_canonical', $context, $blocks);
        // line 99
        echo "
        ";
        // line 100
        $this->displayBlock('layout_head_title', $context, $blocks);
        // line 107
        echo "
        ";
        // line 108
        $this->displayBlock('layout_head_stylesheet', $context, $blocks);
        // line 119
        echo "
        ";
        // line 120
        $this->displayBlock('layout_head_javascript_feature', $context, $blocks);
        // line 123
        echo "
        ";
        // line 125
        echo "        ";
        $this->displayBlock('layout_head_javascript_tracking', $context, $blocks);
        // line 128
        echo "
        ";
        // line 129
        $this->displayBlock('layout_head_javascript_recaptcha', $context, $blocks);
        // line 132
        echo "
        ";
        // line 133
        $this->displayBlock('layout_head_javascript_token', $context, $blocks);
        // line 135
        echo "
        ";
        // line 136
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.useDefaultCookieConsent")) {
            // line 137
            echo "            ";
            $this->displayBlock('layout_head_javascript_cookie_state', $context, $blocks);
            // line 142
            echo "        ";
        }
        // line 143
        echo "
        ";
        // line 144
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_15917")) {
            // line 145
            echo "            ";
            $this->displayBlock('layout_head_javascript_router', $context, $blocks);
            // line 166
            echo "
            ";
            // line 167
            $this->displayBlock('layout_head_javascript_breakpoints', $context, $blocks);
            // line 181
            echo "
            ";
            // line 182
            $this->displayBlock('layout_head_javascript_csrf', $context, $blocks);
            // line 190
            echo "
            ";
            // line 191
            if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.wishlistEnabled")) {
                // line 192
                echo "                ";
                $this->displayBlock('layout_head_javascript_wishlist_state', $context, $blocks);
                // line 199
                echo "            ";
            }
            // line 200
            echo "
            ";
            // line 202
            echo "            ";
            $this->displayBlock('layout_head_javascript_jquery', $context, $blocks);
            // line 204
            echo "
            ";
            // line 205
            $this->displayBlock('layout_head_javascript_hmr_mode', $context, $blocks);
            // line 219
            echo "        ";
        }
        // line 220
        echo "    </head>
";
    }

    // line 10
    public function block_layout_head_meta_tags($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "            ";
        $this->displayBlock('layout_head_meta_tags_charset', $context, $blocks);
        // line 14
        echo "
            ";
        // line 15
        $this->displayBlock('layout_head_meta_tags_viewport', $context, $blocks);
        // line 19
        echo "
            ";
        // line 20
        $this->displayBlock('layout_head_meta_tags_general', $context, $blocks);
        // line 32
        echo "
            ";
        // line 33
        $this->displayBlock('layout_head_meta_tags_opengraph', $context, $blocks);
        // line 58
        echo "
            ";
        // line 59
        $this->displayBlock('layout_head_meta_tags_schema_webpage', $context, $blocks);
        // line 69
        echo "
            ";
        // line 70
        $this->displayBlock('layout_head_meta_tags_hreflangs', $context, $blocks);
        // line 75
        echo "        ";
    }

    // line 11
    public function block_layout_head_meta_tags_charset($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "                <meta charset=\"utf-8\">
            ";
    }

    // line 15
    public function block_layout_head_meta_tags_viewport($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                <meta name=\"viewport\"
                      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            ";
    }

    // line 20
    public function block_layout_head_meta_tags_general($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                <meta name=\"author\"
                      content=\"";
        // line 22
        $this->displayBlock('layout_head_meta_tags_general_author', $context, $blocks);
        echo "\"/>
                <meta name=\"robots\"
                      content=\"";
        // line 24
        $this->displayBlock('layout_head_meta_tags_robots', $context, $blocks);
        echo "\"/>
                <meta name=\"revisit-after\"
                      content=\"";
        // line 26
        $this->displayBlock('layout_head_meta_tags_general_revisit', $context, $blocks);
        echo "\"/>
                <meta name=\"keywords\"
                      content=\"";
        // line 28
        $this->displayBlock('layout_head_meta_tags_keywords', $context, $blocks);
        echo "\"/>
                <meta name=\"description\"
                      content=\"";
        // line 30
        $this->displayBlock('layout_head_meta_tags_description', $context, $blocks);
        echo "\"/>
            ";
    }

    // line 22
    public function block_layout_head_meta_tags_general_author($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, twig_striptags(sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "author", [], "any", false, false, false, 22)), "html", null, true);
    }

    // line 24
    public function block_layout_head_meta_tags_robots($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "robots", [], "any", false, false, false, 24), "html", null, true);
    }

    // line 26
    public function block_layout_head_meta_tags_general_revisit($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, twig_striptags(sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "revisit", [], "any", false, false, false, 26)), "html", null, true);
    }

    // line 28
    public function block_layout_head_meta_tags_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, ($context["metaKeywords"] ?? null), "html", null, true);
    }

    // line 30
    public function block_layout_head_meta_tags_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
    }

    // line 33
    public function block_layout_head_meta_tags_opengraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                <meta property=\"og:url\"
                      content=\"";
        // line 35
        $this->displayBlock('layout_head_meta_tags_url_og', $context, $blocks);
        echo "\"/>
                <meta property=\"og:type\"
                      content=\"";
        // line 37
        $this->displayBlock('layout_head_meta_tags_type_og', $context, $blocks);
        echo "\"/>
                <meta property=\"og:site_name\"
                      content=\"";
        // line 39
        $this->displayBlock('layout_head_meta_tags_sitename_og', $context, $blocks);
        echo "\"/>
                <meta property=\"og:title\"
                      content=\"";
        // line 41
        $this->displayBlock('layout_head_meta_tags_title_og', $context, $blocks);
        echo "\"/>
                <meta property=\"og:description\"
                      content=\"";
        // line 43
        $this->displayBlock('layout_head_meta_tags_description_og', $context, $blocks);
        echo "\"/>
                <meta property=\"og:image\"
                      content=\"";
        // line 45
        $this->displayBlock('layout_head_meta_tags_image_og', $context, $blocks);
        echo "\"/>

                <meta name=\"twitter:card\"
                      content=\"";
        // line 48
        $this->displayBlock('layout_head_meta_tags_card_twitter', $context, $blocks);
        echo "\"/>
                <meta name=\"twitter:site\"
                      content=\"";
        // line 50
        $this->displayBlock('layout_head_meta_tags_sitename_twitter', $context, $blocks);
        echo "\"/>
                <meta name=\"twitter:title\"
                      content=\"";
        // line 52
        $this->displayBlock('layout_head_meta_tags_title_twitter', $context, $blocks);
        echo "\"/>
                <meta name=\"twitter:description\"
                      content=\"";
        // line 54
        $this->displayBlock('layout_head_meta_tags_description_twitter', $context, $blocks);
        echo "\"/>
                <meta name=\"twitter:image\"
                      content=\"";
        // line 56
        $this->displayBlock('layout_head_meta_tags_image_twitter', $context, $blocks);
        echo "\"/>
            ";
    }

    // line 35
    public function block_layout_head_meta_tags_url_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, true, false, 35), "canonical", [], "any", true, true, false, 35)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 35), "canonical", [], "any", false, false, false, 35)) : (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 35), "uri", [], "any", false, false, false, 35))), "html", null, true);
    }

    // line 37
    public function block_layout_head_meta_tags_type_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "website";
    }

    // line 39
    public function block_layout_head_meta_tags_sitename_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 39), "html", null, true);
    }

    // line 41
    public function block_layout_head_meta_tags_title_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
    }

    // line 43
    public function block_layout_head_meta_tags_description_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
    }

    // line 45
    public function block_layout_head_meta_tags_image_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop"), "html", null, true);
    }

    // line 48
    public function block_layout_head_meta_tags_card_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "summary";
    }

    // line 50
    public function block_layout_head_meta_tags_sitename_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 50), "html", null, true);
    }

    // line 52
    public function block_layout_head_meta_tags_title_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
    }

    // line 54
    public function block_layout_head_meta_tags_description_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
    }

    // line 56
    public function block_layout_head_meta_tags_image_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop"), "html", null, true);
    }

    // line 59
    public function block_layout_head_meta_tags_schema_webpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "                <meta itemprop=\"copyrightHolder\"
                      content=\"";
        // line 61
        $this->displayBlock('layout_head_meta_tags_copyright_holder', $context, $blocks);
        echo "\"/>
                <meta itemprop=\"copyrightYear\"
                      content=\"";
        // line 63
        $this->displayBlock('layout_head_meta_tags_copyright_year', $context, $blocks);
        echo "\"/>
                <meta itemprop=\"isFamilyFriendly\"
                      content=\"";
        // line 65
        $this->displayBlock('layout_head_meta_tags_family_friendly', $context, $blocks);
        echo "\"/>
                <meta itemprop=\"image\"
                      content=\"";
        // line 67
        $this->displayBlock('layout_head_meta_tags_image_meta', $context, $blocks);
        echo "\"/>
            ";
    }

    // line 61
    public function block_layout_head_meta_tags_copyright_holder($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 61), "html", null, true);
    }

    // line 63
    public function block_layout_head_meta_tags_copyright_year($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, twig_striptags(sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "copyrightYear", [], "any", false, false, false, 63)), "html", null, true);
    }

    // line 65
    public function block_layout_head_meta_tags_family_friendly($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (sw_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "familyFriendly", [], "any", false, false, false, 65)) {
            echo "true";
        } else {
            echo "false";
        }
    }

    // line 67
    public function block_layout_head_meta_tags_image_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop"), "html", null, true);
    }

    // line 70
    public function block_layout_head_meta_tags_hreflangs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hrefLang"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 72
            echo "                    <link rel=\"alternate\" hreflang=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["link"], "locale", [], "any", false, false, false, 72), "html", null, true);
            echo "\" href=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 72), "html", null, true);
            echo "\" />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "            ";
    }

    // line 77
    public function block_layout_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "            <link rel=\"shortcut icon\"
                  href=\"";
        // line 79
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-favicon"), "html", null, true);
        echo "\">
        ";
    }

    // line 82
    public function block_layout_head_apple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "            ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-share")) {
            // line 84
            echo "            <link rel=\"apple-touch-icon\"
                  sizes=\"180x180\"
                  href=\"";
            // line 86
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-share"), "html", null, true);
            echo "\">
            ";
        }
        // line 88
        echo "        ";
    }

    // line 90
    public function block_layout_head_android($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "            ";
        // line 92
        echo "        ";
    }

    // line 94
    public function block_layout_head_canonical($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 95
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 95), "canonical", [], "any", false, false, false, 95)) {
            // line 96
            echo "                <link rel=\"canonical\" href=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 96), "canonical", [], "any", false, false, false, 96), "html", null, true);
            echo "\" />
            ";
        }
        // line 98
        echo "        ";
    }

    // line 100
    public function block_layout_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "            <title itemprop=\"name\">";
        ob_start(function () { return ''; });
        // line 102
        echo "                ";
        $this->displayBlock('layout_head_title_inner', $context, $blocks);
        // line 105
        echo "            ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 101
        echo twig_spaceless($___internal_parse_0_);
        // line 105
        echo "</title>
        ";
    }

    // line 102
    public function block_layout_head_title_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "                    ";
        echo sw_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
        echo "
                ";
    }

    // line 108
    public function block_layout_head_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "            ";
        if (($context["isHMRMode"] ?? null)) {
            // line 110
            echo "                ";
            // line 111
            echo "            ";
        } else {
            // line 112
            echo "                ";
            $context["assets"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "assets.css");
            // line 113
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["assets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 114
                echo "                    <link rel=\"stylesheet\"
                      href=\"";
                // line 115
                echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["file"], "theme"), "html", null, true);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "            ";
        }
        // line 118
        echo "        ";
    }

    // line 120
    public function block_layout_head_javascript_feature($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/feature.html.twig", "@Storefront/storefront/layout/meta.html.twig", 121)->display($context);
        // line 122
        echo "        ";
    }

    // line 125
    public function block_layout_head_javascript_tracking($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 126
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/analytics.html.twig", "@Storefront/storefront/layout/meta.html.twig", 126)->display($context);
        // line 127
        echo "        ";
    }

    // line 129
    public function block_layout_head_javascript_recaptcha($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/recaptcha.html.twig", "@Storefront/storefront/layout/meta.html.twig", 130)->display($context);
        // line 131
        echo "        ";
    }

    // line 133
    public function block_layout_head_javascript_token($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "        ";
    }

    // line 137
    public function block_layout_head_javascript_cookie_state($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "                <script>
                    window.useDefaultCookieConsent = true;
                </script>
            ";
    }

    // line 145
    public function block_layout_head_javascript_router($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        echo "                ";
        // line 147
        echo "                <script>
                    window.activeNavigationId = '";
        // line 148
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 148), "navigation", [], "any", false, false, false, 148), "active", [], "any", false, false, false, 148), "id", [], "any", false, false, false, 148), "html", null, true);
        echo "';
                    window.router = {
                        'frontend.cart.offcanvas': '";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cart.offcanvas");
        echo "',
                        'frontend.cookie.offcanvas': '";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cookie.offcanvas");
        echo "',
                        'frontend.checkout.finish.page': '";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.finish.page");
        echo "',
                        'frontend.checkout.info': '";
        // line 153
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.info");
        echo "',
                        'frontend.menu.offcanvas': '";
        // line 154
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.menu.offcanvas");
        echo "',
                        'frontend.cms.page': '";
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page");
        echo "',
                        'frontend.cms.navigation.page': '";
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.navigation.page");
        echo "',
                        'frontend.account.addressbook': '";
        // line 157
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.addressbook");
        echo "',
                        'frontend.csrf.generateToken': '";
        // line 158
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.csrf.generateToken");
        echo "',
                        'frontend.country.country-data': '";
        // line 159
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.country.country.data");
        echo "',
                        'frontend.store-api.proxy': '";
        // line 160
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.store-api.proxy");
        echo "',
                    };
                    window.storeApiProxyToken = '";
        // line 162
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.store-api.proxy", ["mode" => "token"]);
        echo "';
                    window.salesChannelId = '";
        // line 163
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 163), "attributes", [], "any", false, false, false, 163), "get", [0 => "sw-sales-channel-id"], "method", false, false, false, 163), "html", null, true);
        echo "';
                </script>
            ";
    }

    // line 167
    public function block_layout_head_javascript_breakpoints($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 168
        echo "                ";
        // line 169
        echo "                <script>
                    ";
        // line 170
        $context["breakpoint"] = ["xs" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xs"), "sm" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.sm"), "md" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md"), "lg" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg"), "xl" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xl")];
        // line 177
        echo "
                    window.breakpoints = ";
        // line 178
        echo call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["breakpoint"] ?? null)]);
        echo ";
                </script>
            ";
    }

    // line 182
    public function block_layout_head_javascript_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 183
        echo "                <script>
                    window.csrf = {
                        'enabled': '";
        // line 185
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "csrfEnabled", [], "any", false, false, false, 185), "html", null, true);
        echo "',
                        'mode': '";
        // line 186
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "csrfMode", [], "any", false, false, false, 186), "html", null, true);
        echo "'
                    }
                </script>
            ";
    }

    // line 192
    public function block_layout_head_javascript_wishlist_state($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 193
        echo "                    <script>
                        window.customerLoggedInState = ";
        // line 194
        echo ((( !(null === sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 194)) &&  !sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 194), "guest", [], "any", false, false, false, 194))) ? (1) : (0));
        echo ";

                        window.wishlistEnabled = ";
        // line 196
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.wishlistEnabled"), "html", null, true);
        echo ";
                    </script>
                ";
    }

    // line 202
    public function block_layout_head_javascript_jquery($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 203
        echo "            ";
    }

    // line 205
    public function block_layout_head_javascript_hmr_mode($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 206
        echo "                ";
        if (($context["isHMRMode"] ?? null)) {
            // line 207
            echo "                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/vendor-node.js\" defer></script>
                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/vendor-shared.js\" defer></script>
                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/runtime.js\" defer></script>
                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/app.js\" defer></script>
                    ";
            // line 212
            echo "                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/storefront.js\" defer></script>
                ";
        } else {
            // line 214
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "assets.js"));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 215
                echo "                        <script type=\"text/javascript\" src=\"";
                echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["file"], "theme"), "html", null, true);
                echo "\" defer></script>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo "                ";
        }
        // line 218
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/meta.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  925 => 218,  922 => 217,  913 => 215,  908 => 214,  904 => 212,  898 => 207,  895 => 206,  891 => 205,  887 => 203,  883 => 202,  876 => 196,  871 => 194,  868 => 193,  864 => 192,  856 => 186,  852 => 185,  848 => 183,  844 => 182,  837 => 178,  834 => 177,  832 => 170,  829 => 169,  827 => 168,  823 => 167,  816 => 163,  812 => 162,  807 => 160,  803 => 159,  799 => 158,  795 => 157,  791 => 156,  787 => 155,  783 => 154,  779 => 153,  775 => 152,  771 => 151,  767 => 150,  762 => 148,  759 => 147,  757 => 146,  753 => 145,  746 => 138,  742 => 137,  738 => 134,  734 => 133,  730 => 131,  727 => 130,  723 => 129,  719 => 127,  716 => 126,  712 => 125,  708 => 122,  705 => 121,  701 => 120,  697 => 118,  694 => 117,  686 => 115,  683 => 114,  678 => 113,  675 => 112,  672 => 111,  670 => 110,  667 => 109,  663 => 108,  656 => 103,  652 => 102,  647 => 105,  645 => 101,  642 => 105,  639 => 102,  636 => 101,  632 => 100,  628 => 98,  622 => 96,  619 => 95,  615 => 94,  611 => 92,  609 => 91,  605 => 90,  601 => 88,  596 => 86,  592 => 84,  589 => 83,  585 => 82,  579 => 79,  576 => 78,  572 => 77,  568 => 74,  557 => 72,  552 => 71,  548 => 70,  541 => 67,  530 => 65,  523 => 63,  516 => 61,  510 => 67,  505 => 65,  500 => 63,  495 => 61,  492 => 60,  488 => 59,  481 => 56,  474 => 54,  467 => 52,  460 => 50,  453 => 48,  446 => 45,  439 => 43,  432 => 41,  425 => 39,  418 => 37,  411 => 35,  405 => 56,  400 => 54,  395 => 52,  390 => 50,  385 => 48,  379 => 45,  374 => 43,  369 => 41,  364 => 39,  359 => 37,  354 => 35,  351 => 34,  347 => 33,  340 => 30,  333 => 28,  326 => 26,  319 => 24,  312 => 22,  306 => 30,  301 => 28,  296 => 26,  291 => 24,  286 => 22,  283 => 21,  279 => 20,  273 => 16,  269 => 15,  264 => 12,  260 => 11,  256 => 75,  254 => 70,  251 => 69,  249 => 59,  246 => 58,  244 => 33,  241 => 32,  239 => 20,  236 => 19,  234 => 15,  231 => 14,  228 => 11,  224 => 10,  219 => 220,  216 => 219,  214 => 205,  211 => 204,  208 => 202,  205 => 200,  202 => 199,  199 => 192,  197 => 191,  194 => 190,  192 => 182,  189 => 181,  187 => 167,  184 => 166,  181 => 145,  179 => 144,  176 => 143,  173 => 142,  170 => 137,  168 => 136,  165 => 135,  163 => 133,  160 => 132,  158 => 129,  155 => 128,  152 => 125,  149 => 123,  147 => 120,  144 => 119,  142 => 108,  139 => 107,  137 => 100,  134 => 99,  132 => 94,  129 => 93,  127 => 90,  124 => 89,  122 => 82,  119 => 81,  117 => 77,  114 => 76,  112 => 10,  108 => 8,  105 => 7,  102 => 6,  99 => 5,  96 => 4,  93 => 3,  90 => 2,  83 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/meta.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/layout/meta.html.twig");
    }
}
