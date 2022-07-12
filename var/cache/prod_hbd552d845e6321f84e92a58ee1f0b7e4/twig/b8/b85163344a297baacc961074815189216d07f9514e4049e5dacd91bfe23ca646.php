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

/* @Storefront/storefront/page/product-detail/review/review.html.twig */
class __TwigTemplate_f51f5f90a6d8039f4cf48850761a0dd836e26334fce2748a64379bcdd9d0f364 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'utilities_offcanvas_content' => [$this, 'block_utilities_offcanvas_content'],
            'page_product_detail_review_container' => [$this, 'block_page_product_detail_review_container'],
            'page_product_detail_review_tab_pane' => [$this, 'block_page_product_detail_review_tab_pane'],
            'page_product_detail_review_aside' => [$this, 'block_page_product_detail_review_aside'],
            'page_product_detail_review_widget_container' => [$this, 'block_page_product_detail_review_widget_container'],
            'page_product_detail_review_main' => [$this, 'block_page_product_detail_review_main'],
            'page_product_detail_review_alert' => [$this, 'block_page_product_detail_review_alert'],
            'page_product_detail_review_form_container' => [$this, 'block_page_product_detail_review_form_container'],
            'page_product_detail_review_list_container' => [$this, 'block_page_product_detail_review_list_container'],
            'page_product_detail_review_list' => [$this, 'block_page_product_detail_review_list'],
            'page_product_detail_review_list_actions' => [$this, 'block_page_product_detail_review_list_actions'],
            'page_product_detail_review_list_action_language' => [$this, 'block_page_product_detail_review_list_action_language'],
            'page_product_detail_review_list_action_language_csrf' => [$this, 'block_page_product_detail_review_list_action_language_csrf'],
            'page_product_detail_review_list_action_sortby' => [$this, 'block_page_product_detail_review_list_action_sortby'],
            'page_product_detail_review_list_action_sortby_form' => [$this, 'block_page_product_detail_review_list_action_sortby_form'],
            'page_product_detail_review_list_action_sortby_form_csrf' => [$this, 'block_page_product_detail_review_list_action_sortby_form_csrf'],
            'page_product_detail_review_list_action_sortby_label' => [$this, 'block_page_product_detail_review_list_action_sortby_label'],
            'page_product_detail_review_list_action_sortby_select' => [$this, 'block_page_product_detail_review_list_action_sortby_select'],
            'page_product_detail_review_list_content' => [$this, 'block_page_product_detail_review_list_content'],
            'page_product_detail_review_list_paging' => [$this, 'block_page_product_detail_review_list_paging'],
            'page_product_detail_review_list_paging_form' => [$this, 'block_page_product_detail_review_list_paging_form'],
            'page_product_detail_review_list_paging_csrf' => [$this, 'block_page_product_detail_review_list_paging_csrf'],
            'page_product_detail_review_list_empty' => [$this, 'block_page_product_detail_review_list_empty'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/utilities/offcanvas.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/utilities/offcanvas.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_utilities_offcanvas_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t";
        $this->displayBlock('page_product_detail_review_container', $context, $blocks);
    }

    public function block_page_product_detail_review_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
\t\t";
        // line 7
        echo "\t\t";
        $context["reviewsPerListPage"] = 10;
        // line 8
        echo "
\t\t";
        // line 10
        echo "\t\t";
        $context["currentListPage"] = 1;
        // line 11
        echo "
        ";
        // line 12
        $context["productReviewCount"] = sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "totalReviews", [], "any", false, false, false, 12);
        // line 13
        echo "
\t\t";
        // line 14
        if ((1 === twig_compare(($context["productReviewCount"] ?? null), 0))) {
            // line 15
            echo "            ";
            $context["productAvgRating"] = twig_round(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "matrix", [], "any", false, false, false, 15), "averageRating", [], "any", false, false, false, 15), 2, "common");
            // line 16
            echo "\t\t";
        }
        // line 17
        echo "
\t\t";
        // line 19
        echo "\t\t";
        $context["foreignReviewsCount"] = 150;
        // line 20
        echo "
\t\t<div class=\"product-detail-review tab-pane-container\">
\t\t\t";
        // line 22
        $this->displayBlock('page_product_detail_review_tab_pane', $context, $blocks);
        // line 274
        echo "\t\t</div>
\t";
    }

    // line 22
    public function block_page_product_detail_review_tab_pane($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                <div class=\"row product-detail-review-content js-review-container\">
\t\t\t\t\t";
        // line 24
        $this->displayBlock('page_product_detail_review_aside', $context, $blocks);
        // line 31
        echo "
\t\t\t\t\t";
        // line 32
        $this->displayBlock('page_product_detail_review_main', $context, $blocks);
        // line 272
        echo "\t\t\t\t</div>
\t\t\t";
    }

    // line 24
    public function block_page_product_detail_review_aside($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t";
        // line 26
        $this->displayBlock('page_product_detail_review_widget_container', $context, $blocks);
        // line 29
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
    }

    // line 26
    public function block_page_product_detail_review_widget_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "\t\t\t\t\t\t\t\t";
        $this->loadTemplate("@Storefront/storefront/page/product-detail/review/review-widget.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 27)->display($context);
        // line 28
        echo "\t\t\t\t\t\t\t";
    }

    // line 32
    public function block_page_product_detail_review_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "\t\t\t\t\t\t<div class=\"col product-detail-review-main js-review-content\">
\t\t\t\t\t\t\t";
        // line 34
        $this->displayBlock('page_product_detail_review_alert', $context, $blocks);
        // line 52
        echo "
\t\t\t\t\t\t\t";
        // line 53
        $this->displayBlock('page_product_detail_review_form_container', $context, $blocks);
        // line 67
        echo "
\t\t\t\t\t\t\t";
        // line 68
        $this->displayBlock('page_product_detail_review_list_container', $context, $blocks);
        // line 270
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
    }

    // line 34
    public function block_page_product_detail_review_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "\t\t\t\t\t\t\t\t";
        if ((0 === twig_compare(($context["ratingSuccess"] ?? null), 1))) {
            // line 36
            echo "\t\t\t\t\t\t\t\t\t";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 36)->display(twig_array_merge($context, ["type" => "success", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewFormSuccessAlert"))]));
            // line 40
            echo "                                ";
        } elseif ((0 === twig_compare(($context["ratingSuccess"] ?? null), 2))) {
            // line 41
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 41)->display(twig_array_merge($context, ["type" => "success", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewFormSuccessUpdateAlert"))]));
            // line 45
            echo "\t\t\t\t\t\t\t\t";
        } elseif ((0 === twig_compare(($context["ratingSuccess"] ?? null),  -1))) {
            // line 46
            echo "\t\t\t\t\t\t\t\t\t";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 46)->display(twig_array_merge($context, ["type" => "danger", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewFormErrorAlert"))]));
            // line 50
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t\t\t";
    }

    // line 53
    public function block_page_product_detail_review_form_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "\t\t\t\t\t\t\t\t<div class=\"collapse multi-collapse";
        if ((0 === twig_compare(($context["ratingSuccess"] ?? null),  -1))) {
            echo " show";
        }
        echo "\"
\t\t\t\t\t\t\t\t\t id=\"review-form\">
\t\t\t\t\t\t\t\t\t";
        // line 56
        if ((sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 56) &&  !sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 56), "guest", [], "any", false, false, false, 56))) {
            // line 57
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-detail-review-form\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 58
            $this->loadTemplate("@Storefront/storefront/page/product-detail/review/review-form.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 58)->display($context);
            // line 59
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 61
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-detail-review-login\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 62
            $this->loadTemplate("@Storefront/storefront/page/product-detail/review/review-login.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 62)->display($context);
            // line 63
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
    }

    // line 68
    public function block_page_product_detail_review_list_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "\t\t\t\t\t\t\t\t<div id=\"review-list\"
\t\t\t\t\t\t\t\t\t class=\"collapse multi-collapse product-detail-review-list";
        // line 70
        if ((0 !== twig_compare(($context["ratingSuccess"] ?? null),  -1))) {
            echo " show";
        }
        echo "\">

                                    ";
        // line 72
        $this->displayBlock('page_product_detail_review_list', $context, $blocks);
        // line 259
        echo "
                                    ";
        // line 260
        if ((0 >= twig_compare(($context["productReviewCount"] ?? null), 0))) {
            // line 261
            echo "                                        ";
            $this->displayBlock('page_product_detail_review_list_empty', $context, $blocks);
            // line 267
            echo "                                    ";
        }
        // line 268
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
    }

    // line 72
    public function block_page_product_detail_review_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "                                        ";
        $this->displayBlock('page_product_detail_review_list_actions', $context, $blocks);
        // line 199
        echo "
                                        ";
        // line 200
        $this->displayBlock('page_product_detail_review_list_content', $context, $blocks);
        // line 207
        echo "
                                        ";
        // line 208
        $this->displayBlock('page_product_detail_review_list_paging', $context, $blocks);
        // line 258
        echo "                                    ";
    }

    // line 73
    public function block_page_product_detail_review_list_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "                                            <div class=\"row align-items-center product-detail-review-actions\">
                                                ";
        // line 75
        $context["formAjaxSubmitOptions"] = ["replaceSelectors" => [0 => ".js-review-container"], "submitOnChange" => true];
        // line 79
        echo "
                                                ";
        // line 80
        $this->displayBlock('page_product_detail_review_list_action_language', $context, $blocks);
        // line 118
        echo "
                                                ";
        // line 119
        $this->displayBlock('page_product_detail_review_list_action_sortby', $context, $blocks);
        // line 180
        echo "                                            </div>

                                            <hr/>

                                            ";
        // line 185
        echo "                                            ";
        $context["listReviewsCount"] = (($context["productReviewCount"] ?? null) - ($context["foreignReviewsCount"] ?? null));
        // line 186
        echo "                                            ";
        // line 187
        echo "                                            ";
        if ((-1 === twig_compare(($context["listReviewsCount"] ?? null), 0))) {
            // line 188
            echo "                                                ";
            $context["listReviewsCount"] = 0;
            // line 189
            echo "                                            ";
        }
        // line 190
        echo "
                                            <p class=\"text-right product-detail-review-counter\">
                                                ";
        // line 192
        if (((1 === twig_compare(($context["listReviewsCount"] ?? null), 1)) && (1 === twig_compare(($context["listReviewsCount"] ?? null), ($context["reviewsPerListPage"] ?? null))))) {
            // line 193
            echo "                                                    <small><strong>";
            echo sw_escape_filter($this->env, ($context["currentListPage"] ?? null), "html", null, true);
            echo "</strong> - <strong>";
            echo sw_escape_filter($this->env, ($context["reviewsPerListPage"] ?? null), "html", null, true);
            echo "</strong> ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewCountBefore"));
            echo " <strong>";
            echo sw_escape_filter($this->env, ($context["listReviewsCount"] ?? null), "html", null, true);
            echo "</strong> ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewCountAfter", ["%count%" => ($context["listReviewsCount"] ?? null)]));
            echo "</small>
                                                ";
        } elseif ((1 === twig_compare(        // line 194
($context["listReviewsCount"] ?? null), 0))) {
            echo " ";
            // line 195
            echo "                                                    <small><strong>";
            echo sw_escape_filter($this->env, ($context["listReviewsCount"] ?? null), "html", null, true);
            echo "</strong> ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewCountAfter", ["%count%" => ($context["listReviewsCount"] ?? null)]));
            echo "</small>
                                                ";
        }
        // line 197
        echo "                                            </p>
                                        ";
    }

    // line 80
    public function block_page_product_detail_review_list_action_language($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "                                                    <div class=\"col product-detail-review-language\">
                                                        ";
        // line 82
        if ((1 === twig_compare(($context["foreignReviewsCount"] ?? null), 0))) {
            // line 83
            echo "                                                            <form class=\"product-detail-review-language-form\"
                                                                  action=\"";
            // line 84
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.product.reviews", ["productId" => sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "productId", [], "any", false, false, false, 84), "parentId" => sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "parentId", [], "any", false, false, false, 84)]), "html", null, true);
            echo "\"
                                                                  method=\"post\"
                                                                  data-form-ajax-submit=\"true\"
                                                                  data-form-ajax-submit-options='";
            // line 87
            echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["formAjaxSubmitOptions"] ?? null)]), "html", null, true);
            echo "'>

                                                                ";
            // line 89
            $this->displayBlock('page_product_detail_review_list_action_language_csrf', $context, $blocks);
            // line 92
            echo "
                                                                ";
            // line 93
            if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 93), "get", [0 => "limit"], "method", false, false, false, 93)) {
                // line 94
                echo "                                                                    <input type=\"hidden\" name=\"limit\" value=\"";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 94), "get", [0 => "limit"], "method", false, false, false, 94), "html", null, true);
                echo "\">
                                                                ";
            }
            // line 96
            echo "
                                                                ";
            // line 97
            if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 97), "get", [0 => "sort"], "method", false, false, false, 97)) {
                // line 98
                echo "                                                                    <input type=\"hidden\" name=\"sort\" value=\"";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 98), "get", [0 => "sort"], "method", false, false, false, 98), "html", null, true);
                echo "\">
                                                                ";
            }
            // line 100
            echo "
                                                                <div class=\"";
            // line 101
            echo sw_escape_filter($this->env, ($context["formSwitchWrapperClass"] ?? null), "html", null, true);
            echo "\">
                                                                    ";
            // line 103
            echo "                                                                    <input type=\"checkbox\"
                                                                           class=\"";
            // line 104
            echo sw_escape_filter($this->env, ($context["formCheckInputClass"] ?? null), "html", null, true);
            echo "\"
                                                                           id=\"showForeignReviews\"
                                                                           value=\"filter-language\"
                                                                           name=\"language\"
                                                                           ";
            // line 108
            if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 108), "get", [0 => "language"], "method", false, false, false, 108)) {
                echo "checked=\"checked\"";
            }
            echo ">
                                                                    <label class=\"custom-control-label form-label\"
                                                                           for=\"showForeignReviews\">
                                                                        <small>";
            // line 111
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewLanguageFilterLabel"));
            echo "</small>
                                                                    </label>
                                                                </div>
                                                            </form>
                                                        ";
        }
        // line 116
        echo "                                                    </div>
                                                ";
    }

    // line 89
    public function block_page_product_detail_review_list_action_language_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "                                                                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.product.reviews");
        echo "
                                                                ";
    }

    // line 119
    public function block_page_product_detail_review_list_action_sortby($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 120
        echo "                                                    ";
        if ((1 === twig_compare(($context["productReviewCount"] ?? null), 0))) {
            // line 121
            echo "                                                        <div class=\"col-12 col-md-auto product-detail-review-sortby\">
                                                            ";
            // line 122
            $context["formAjaxSubmitOptions"] = ["replaceSelectors" => [0 => ".js-review-info", 1 => ".js-review-teaser", 2 => ".js-review-content"], "submitOnChange" => true];
            // line 130
            echo "
                                                            ";
            // line 131
            $this->displayBlock('page_product_detail_review_list_action_sortby_form', $context, $blocks);
            // line 177
            echo "                                                        </div>
                                                    ";
        }
        // line 179
        echo "                                                ";
    }

    // line 131
    public function block_page_product_detail_review_list_action_sortby_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 132
        echo "                                                                <form class=\"form-inline product-detail-review-sortby-form\"
                                                                      action=\"";
        // line 133
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.product.reviews", ["productId" => sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "productId", [], "any", false, false, false, 133), "parentId" => sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "parentId", [], "any", false, false, false, 133)]), "html", null, true);
        echo "\"
                                                                      method=\"post\"
                                                                      data-form-ajax-submit=\"true\"
                                                                      data-form-ajax-submit-options='";
        // line 136
        echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["formAjaxSubmitOptions"] ?? null)]), "html", null, true);
        echo "'>

                                                                    ";
        // line 138
        $this->displayBlock('page_product_detail_review_list_action_sortby_form_csrf', $context, $blocks);
        // line 141
        echo "
                                                                    ";
        // line 142
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 142), "get", [0 => "limit"], "method", false, false, false, 142)) {
            // line 143
            echo "                                                                        <input type=\"hidden\" name=\"limit\" value=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 143), "get", [0 => "limit"], "method", false, false, false, 143), "html", null, true);
            echo "\">
                                                                    ";
        }
        // line 145
        echo "
                                                                    ";
        // line 146
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 146), "get", [0 => "language"], "method", false, false, false, 146)) {
            // line 147
            echo "                                                                        <input type=\"hidden\" name=\"language\" value=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 147), "get", [0 => "language"], "method", false, false, false, 147), "html", null, true);
            echo "\">
                                                                    ";
        }
        // line 149
        echo "
                                                                    ";
        // line 150
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 150), "get", [0 => "points"], "method", false, false, false, 150)) {
            // line 151
            echo "                                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 151), "get", [0 => "points"], "method", false, false, false, 151));
            foreach ($context['_seq'] as $context["_key"] => $context["points"]) {
                // line 152
                echo "                                                                            <input type=\"hidden\" name=\"points[]\" value=\"";
                echo sw_escape_filter($this->env, $context["points"], "html", null, true);
                echo "\">
                                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['points'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "                                                                    ";
        }
        // line 155
        echo "
                                                                    ";
        // line 156
        $this->displayBlock('page_product_detail_review_list_action_sortby_label', $context, $blocks);
        // line 162
        echo "
                                                                    ";
        // line 163
        $this->displayBlock('page_product_detail_review_list_action_sortby_select', $context, $blocks);
        // line 175
        echo "                                                                </form>
                                                            ";
    }

    // line 138
    public function block_page_product_detail_review_list_action_sortby_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 139
        echo "                                                                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.product.reviews");
        echo "
                                                                    ";
    }

    // line 156
    public function block_page_product_detail_review_list_action_sortby_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 157
        echo "                                                                        <label class=\"form-label product-detail-review-sortby-label\"
                                                                               for=\"reviewsSortby\">
                                                                            <small>";
        // line 159
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewSortLabel"));
        echo "</small>
                                                                        </label>
                                                                    ";
    }

    // line 163
    public function block_page_product_detail_review_list_action_sortby_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 164
        echo "                                                                        <select class=\"";
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        echo "-sm\"
                                                                                name=\"sort\"
                                                                                id=\"reviewsSortby\">
                                                                            <option value=\"createdAt\"";
        // line 167
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "criteria", [], "any", false, false, false, 167), "sorting", [], "any", false, false, false, 167), 0, [], "any", false, false, false, 167), "field", [], "any", false, false, false, 167), "createdAt"))) {
            echo " selected";
        }
        echo ">
                                                                                ";
        // line 168
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewSortNewLabel"));
        echo "
                                                                            </option>
                                                                            <option value=\"points\"";
        // line 170
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "criteria", [], "any", false, false, false, 170), "sorting", [], "any", false, false, false, 170), 0, [], "any", false, false, false, 170), "field", [], "any", false, false, false, 170), "points"))) {
            echo " selected";
        }
        echo ">
                                                                                ";
        // line 171
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewSortTopRatedLabel"));
        echo "
                                                                            </option>
                                                                        </select>
                                                                    ";
    }

    // line 200
    public function block_page_product_detail_review_list_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 201
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 202
            echo "                                                <div class=\"product-detail-review-list-content\">
                                                    ";
            // line 203
            $this->loadTemplate("@Storefront/storefront/page/product-detail/review/review-item.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 203)->display($context);
            // line 204
            echo "                                                </div>
                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "                                        ";
    }

    // line 208
    public function block_page_product_detail_review_list_paging($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 209
        echo "                                            ";
        $context["criteria"] = sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "criteria", [], "any", false, false, false, 209);
        // line 210
        echo "                                            ";
        $context["totalPages"] = twig_round((($context["productReviewCount"] ?? null) / sw_get_attribute($this->env, $this->source, ($context["criteria"] ?? null), "limit", [], "any", false, false, false, 210)), 0, "ceil");
        // line 211
        echo "
                                            ";
        // line 212
        if ((1 === twig_compare(($context["totalPages"] ?? null), 1))) {
            // line 213
            echo "                                                ";
            $context["formAjaxSubmitOptions"] = ["replaceSelectors" => ".js-review-container", "submitOnChange" => true];
            // line 217
            echo "
                                                ";
            // line 218
            $this->displayBlock('page_product_detail_review_list_paging_form', $context, $blocks);
            // line 256
            echo "                                            ";
        }
        // line 257
        echo "                                        ";
    }

    // line 218
    public function block_page_product_detail_review_list_paging_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 219
        echo "                                                    <div class=\"product-detail-review-pagination\">
                                                        <form class=\"product-detail-review-pagination-form\"
                                                              action=\"";
        // line 221
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.product.reviews", ["productId" => sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "productId", [], "any", false, false, false, 221)]), "html", null, true);
        echo "\"
                                                              method=\"post\"
                                                              data-form-ajax-submit=\"true\"
                                                              data-form-ajax-submit-options='";
        // line 224
        echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["formAjaxSubmitOptions"] ?? null)]), "html", null, true);
        echo "'>

                                                            ";
        // line 226
        $this->displayBlock('page_product_detail_review_list_paging_csrf', $context, $blocks);
        // line 229
        echo "
                                                            ";
        // line 230
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 230), "get", [0 => "limit"], "method", false, false, false, 230)) {
            // line 231
            echo "                                                                <input type=\"hidden\" name=\"limit\" value=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 231), "get", [0 => "limit"], "method", false, false, false, 231), "html", null, true);
            echo "\">
                                                            ";
        }
        // line 233
        echo "
                                                            ";
        // line 234
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 234), "get", [0 => "language"], "method", false, false, false, 234)) {
            // line 235
            echo "                                                                <input type=\"hidden\" name=\"language\" value=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 235), "get", [0 => "language"], "method", false, false, false, 235), "html", null, true);
            echo "\">
                                                            ";
        }
        // line 237
        echo "
                                                            ";
        // line 238
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 238), "get", [0 => "sort"], "method", false, false, false, 238)) {
            // line 239
            echo "                                                                <input type=\"hidden\" name=\"sort\" value=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 239), "get", [0 => "sort"], "method", false, false, false, 239), "html", null, true);
            echo "\">
                                                            ";
        }
        // line 241
        echo "
                                                            ";
        // line 242
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 242), "get", [0 => "points"], "method", false, false, false, 242)) {
            // line 243
            echo "                                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 243), "get", [0 => "points"], "method", false, false, false, 243));
            foreach ($context['_seq'] as $context["_key"] => $context["points"]) {
                // line 244
                echo "                                                                    <input type=\"hidden\" name=\"points[]\" value=\"";
                echo sw_escape_filter($this->env, $context["points"], "html", null, true);
                echo "\">
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['points'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "                                                            ";
        }
        // line 247
        echo "
                                                            ";
        // line 248
        $this->loadTemplate("@Storefront/storefront/component/pagination.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 248)->display(twig_array_merge($context, ["entities" =>         // line 249
($context["reviews"] ?? null), "criteria" =>         // line 250
($context["criteria"] ?? null), "total" =>         // line 251
($context["productReviewCount"] ?? null)]));
        // line 253
        echo "                                                        </form>
                                                    </div>
                                                ";
    }

    // line 226
    public function block_page_product_detail_review_list_paging_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 227
        echo "                                                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.product.reviews");
        echo "
                                                            ";
    }

    // line 261
    public function block_page_product_detail_review_list_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 262
        echo "                                            ";
        $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 262)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewListEmpty"))]));
        // line 266
        echo "                                        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/review/review.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  834 => 266,  831 => 262,  827 => 261,  820 => 227,  816 => 226,  810 => 253,  808 => 251,  807 => 250,  806 => 249,  805 => 248,  802 => 247,  799 => 246,  790 => 244,  785 => 243,  783 => 242,  780 => 241,  774 => 239,  772 => 238,  769 => 237,  763 => 235,  761 => 234,  758 => 233,  752 => 231,  750 => 230,  747 => 229,  745 => 226,  740 => 224,  734 => 221,  730 => 219,  726 => 218,  722 => 257,  719 => 256,  717 => 218,  714 => 217,  711 => 213,  709 => 212,  706 => 211,  703 => 210,  700 => 209,  696 => 208,  692 => 206,  677 => 204,  675 => 203,  672 => 202,  654 => 201,  650 => 200,  642 => 171,  636 => 170,  631 => 168,  625 => 167,  616 => 164,  612 => 163,  605 => 159,  601 => 157,  597 => 156,  590 => 139,  586 => 138,  581 => 175,  579 => 163,  576 => 162,  574 => 156,  571 => 155,  568 => 154,  559 => 152,  554 => 151,  552 => 150,  549 => 149,  543 => 147,  541 => 146,  538 => 145,  532 => 143,  530 => 142,  527 => 141,  525 => 138,  520 => 136,  514 => 133,  511 => 132,  507 => 131,  503 => 179,  499 => 177,  497 => 131,  494 => 130,  492 => 122,  489 => 121,  486 => 120,  482 => 119,  475 => 90,  471 => 89,  466 => 116,  458 => 111,  450 => 108,  443 => 104,  440 => 103,  436 => 101,  433 => 100,  427 => 98,  425 => 97,  422 => 96,  416 => 94,  414 => 93,  411 => 92,  409 => 89,  404 => 87,  398 => 84,  395 => 83,  393 => 82,  390 => 81,  386 => 80,  381 => 197,  373 => 195,  370 => 194,  357 => 193,  355 => 192,  351 => 190,  348 => 189,  345 => 188,  342 => 187,  340 => 186,  337 => 185,  331 => 180,  329 => 119,  326 => 118,  324 => 80,  321 => 79,  319 => 75,  316 => 74,  312 => 73,  308 => 258,  306 => 208,  303 => 207,  301 => 200,  298 => 199,  295 => 73,  291 => 72,  286 => 268,  283 => 267,  280 => 261,  278 => 260,  275 => 259,  273 => 72,  266 => 70,  263 => 69,  259 => 68,  254 => 65,  250 => 63,  248 => 62,  245 => 61,  241 => 59,  239 => 58,  236 => 57,  234 => 56,  226 => 54,  222 => 53,  218 => 51,  215 => 50,  212 => 46,  209 => 45,  206 => 41,  203 => 40,  200 => 36,  197 => 35,  193 => 34,  188 => 270,  186 => 68,  183 => 67,  181 => 53,  178 => 52,  176 => 34,  173 => 33,  169 => 32,  165 => 28,  162 => 27,  158 => 26,  153 => 29,  151 => 26,  148 => 25,  144 => 24,  139 => 272,  137 => 32,  134 => 31,  132 => 24,  129 => 23,  125 => 22,  120 => 274,  118 => 22,  114 => 20,  111 => 19,  108 => 17,  105 => 16,  102 => 15,  100 => 14,  97 => 13,  95 => 12,  92 => 11,  89 => 10,  86 => 8,  83 => 7,  80 => 5,  72 => 4,  68 => 3,  57 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/review/review.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/review/review.html.twig");
    }
}
