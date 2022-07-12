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

/* @Storefront/storefront/page/product-detail/tabs.html.twig */
class __TwigTemplate_daaf71f23318d04a6678ae171d2ca43256d451e8e70a04a9a46d5030fc64b510 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_tabs_inner' => [$this, 'block_page_product_detail_tabs_inner'],
            'page_product_detail_tabs_navigation' => [$this, 'block_page_product_detail_tabs_navigation'],
            'page_product_detail_tabs_navigation_container' => [$this, 'block_page_product_detail_tabs_navigation_container'],
            'page_product_detail_tabs_navigation_description' => [$this, 'block_page_product_detail_tabs_navigation_description'],
            'page_product_detail_tabs_navigation_review' => [$this, 'block_page_product_detail_tabs_navigation_review'],
            'page_product_detail_tabs_content' => [$this, 'block_page_product_detail_tabs_content'],
            'page_product_detail_tabs_content_container' => [$this, 'block_page_product_detail_tabs_content_container'],
            'page_product_detail_tabs_content_description' => [$this, 'block_page_product_detail_tabs_content_description'],
            'page_product_detail_tabs_content_review' => [$this, 'block_page_product_detail_tabs_content_review'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_product_detail_tabs_inner', $context, $blocks);
    }

    public function block_page_product_detail_tabs_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"card card-tabs\">
        ";
        // line 3
        $this->displayBlock('page_product_detail_tabs_navigation', $context, $blocks);
        // line 62
        echo "
        ";
        // line 63
        $this->displayBlock('page_product_detail_tabs_content', $context, $blocks);
        // line 90
        echo "    </div>
";
    }

    // line 3
    public function block_page_product_detail_tabs_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            <div class=\"card-header product-detail-tab-navigation\">
                ";
        // line 5
        $this->displayBlock('page_product_detail_tabs_navigation_container', $context, $blocks);
        // line 60
        echo "            </div>
        ";
    }

    // line 5
    public function block_page_product_detail_tabs_navigation_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "                    <ul class=\"nav nav-tabs product-detail-tab-navigation-list\"
                        id=\"product-detail-tabs\"
                        role=\"tablist\">
                        ";
        // line 9
        $this->displayBlock('page_product_detail_tabs_navigation_description', $context, $blocks);
        // line 39
        echo "                        ";
        $this->displayBlock('page_product_detail_tabs_navigation_review', $context, $blocks);
        // line 58
        echo "                    </ul>
                ";
    }

    // line 9
    public function block_page_product_detail_tabs_navigation_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link ";
        // line 11
        if (((0 !== twig_compare(($context["ratingSuccess"] ?? null), 1)) && (0 !== twig_compare(($context["ratingSuccess"] ?? null),  -1)))) {
            echo "active";
        }
        echo " product-detail-tab-navigation-link\"
                                   id=\"description-tab\"
                                   ";
        // line 13
        echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
        echo "=\"tab\"
                                   data-offcanvas-tabs=\"true\"
                                   href=\"#description-tab-pane\"
                                   role=\"tab\"
                                   aria-controls=\"description-tab-pane\"
                                   aria-selected=\"true\">
                                    <span>";
        // line 19
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.tabsDescription"));
        echo "</span>
                                    <span class=\"product-detail-tab-navigation-icon\">
                                        ";
        // line 21
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/product-detail/tabs.html.twig", 21);
        })())->display(twig_array_merge($context, ["pack" => "solid", "name" => "arrow-medium-right"]));
        // line 22
        echo "                                    </span>
                                    ";
        // line 23
        if ((1 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 23), "translated", [], "any", false, false, false, 23), "description", [], "any", false, false, false, 23)), 0))) {
            // line 24
            echo "                                        <span class=\"product-detail-tab-preview\">
                                            ";
            // line 25
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize(twig_striptags(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 25), "translated", [], "any", false, false, false, 25), "description", [], "any", false, false, false, 25)))), "truncate", [0 => 125, 1 => "…"], "method", false, false, false, 25), "html", null, true);
            echo "

                                            ";
            // line 31
            echo "                                            ";
            if ((0 <= twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 31), "translated", [], "any", false, false, false, 31), "description", [], "any", false, false, false, 31)), 126))) {
                // line 32
                echo "                                                <span class=\"product-detail-tab-preview-more\">";
                echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.tabsPreviewMore"));
                echo "</span>
                                            ";
            }
            // line 34
            echo "                                        </span>
                                    ";
        }
        // line 36
        echo "                                </a>
                            </li>
                        ";
    }

    // line 39
    public function block_page_product_detail_tabs_navigation_review($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "                            ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.listing.showReview")) {
            // line 41
            echo "                                <li class=\"nav-item\">
                                    <a class=\"nav-link ";
            // line 42
            if (((0 === twig_compare(($context["ratingSuccess"] ?? null), 1)) || (0 === twig_compare(($context["ratingSuccess"] ?? null),  -1)))) {
                echo "active";
            }
            echo " product-detail-tab-navigation-link\"
                                       id=\"review-tab\"
                                       ";
            // line 44
            echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
            echo "=\"tab\"
                                       data-offcanvas-tabs=\"true\"
                                       href=\"#review-tab-pane\"
                                       role=\"tab\"
                                       aria-controls=\"review-tab-pane\"
                                       aria-selected=\"true\">
                                        ";
            // line 50
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.tabsReview"));
            echo "
                                        <span class=\"product-detail-tab-navigation-icon\">
                                            ";
            // line 52
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/product-detail/tabs.html.twig", 52);
            })())->display(twig_array_merge($context, ["pack" => "solid", "name" => "arrow-medium-right"]));
            // line 53
            echo "                                        </span>
                                    </a>
                                </li>
                            ";
        }
        // line 57
        echo "                        ";
    }

    // line 63
    public function block_page_product_detail_tabs_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "            <div class=\"product-detail-tabs-content card-body\">
                ";
        // line 65
        $this->displayBlock('page_product_detail_tabs_content_container', $context, $blocks);
        // line 88
        echo "            </div>
        ";
    }

    // line 65
    public function block_page_product_detail_tabs_content_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "                    <div class=\"tab-content\">
                        ";
        // line 67
        $this->displayBlock('page_product_detail_tabs_content_description', $context, $blocks);
        // line 75
        echo "
                        ";
        // line 76
        $this->displayBlock('page_product_detail_tabs_content_review', $context, $blocks);
        // line 86
        echo "                    </div>
                ";
    }

    // line 67
    public function block_page_product_detail_tabs_content_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "                            <div class=\"tab-pane fade show ";
        if (((0 !== twig_compare(($context["ratingSuccess"] ?? null), 1)) && (0 !== twig_compare(($context["ratingSuccess"] ?? null),  -1)))) {
            echo "active";
        }
        echo "\"
                                 id=\"description-tab-pane\"
                                 role=\"tabpanel\"
                                 aria-labelledby=\"description-tab\">
                                ";
        // line 72
        $this->loadTemplate("@Storefront/storefront/page/product-detail/description.html.twig", "@Storefront/storefront/page/product-detail/tabs.html.twig", 72)->display($context);
        // line 73
        echo "                            </div>
                        ";
    }

    // line 76
    public function block_page_product_detail_tabs_content_review($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "                            ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.listing.showReview")) {
            // line 78
            echo "                                <div class=\"tab-pane fade show ";
            if (((0 === twig_compare(($context["ratingSuccess"] ?? null), 1)) || (0 === twig_compare(($context["ratingSuccess"] ?? null),  -1)))) {
                echo "active";
            }
            echo "\"
                                     id=\"review-tab-pane\"
                                     role=\"tabpanel\"
                                     aria-labelledby=\"review-tab\">
                                    ";
            // line 82
            $this->loadTemplate("@Storefront/storefront/page/product-detail/review/review.html.twig", "@Storefront/storefront/page/product-detail/tabs.html.twig", 82)->display(twig_array_merge($context, ["reviews" => sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "reviews", [], "any", false, false, false, 82)]));
            // line 83
            echo "                                </div>
                            ";
        }
        // line 85
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/tabs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  295 => 85,  291 => 83,  289 => 82,  279 => 78,  276 => 77,  272 => 76,  267 => 73,  265 => 72,  255 => 68,  251 => 67,  246 => 86,  244 => 76,  241 => 75,  239 => 67,  236 => 66,  232 => 65,  227 => 88,  225 => 65,  222 => 64,  218 => 63,  214 => 57,  208 => 53,  200 => 52,  195 => 50,  186 => 44,  179 => 42,  176 => 41,  173 => 40,  169 => 39,  163 => 36,  159 => 34,  153 => 32,  150 => 31,  145 => 25,  142 => 24,  140 => 23,  137 => 22,  129 => 21,  124 => 19,  115 => 13,  108 => 11,  105 => 10,  101 => 9,  96 => 58,  93 => 39,  91 => 9,  86 => 6,  82 => 5,  77 => 60,  75 => 5,  72 => 4,  68 => 3,  63 => 90,  61 => 63,  58 => 62,  56 => 3,  53 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/tabs.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/tabs.html.twig");
    }
}
