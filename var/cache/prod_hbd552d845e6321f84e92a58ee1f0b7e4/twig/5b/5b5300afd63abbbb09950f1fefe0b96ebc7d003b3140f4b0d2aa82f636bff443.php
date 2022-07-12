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

/* @Storefront/storefront/page/product-detail/review/review-widget.html.twig */
class __TwigTemplate_3923a97739a5cf05c1b6ef0d8becd69117532f50b8bdb0fa2977451720bb88b9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_review_widget' => [$this, 'block_page_product_detail_review_widget'],
            'page_product_detail_review_info_container' => [$this, 'block_page_product_detail_review_info_container'],
            'page_product_detail_review_info' => [$this, 'block_page_product_detail_review_info'],
            'page_product_detail_review_title' => [$this, 'block_page_product_detail_review_title'],
            'page_product_detail_review_overview' => [$this, 'block_page_product_detail_review_overview'],
            'page_product_detail_review_filter' => [$this, 'block_page_product_detail_review_filter'],
            'page_product_detail_review_filter_csrf' => [$this, 'block_page_product_detail_review_filter_csrf'],
            'page_product_detail_review_filter_box' => [$this, 'block_page_product_detail_review_filter_box'],
            'page_product_detail_review_filter_checkbox' => [$this, 'block_page_product_detail_review_filter_checkbox'],
            'page_product_detail_review_filter_checkbox_input' => [$this, 'block_page_product_detail_review_filter_checkbox_input'],
            'page_product_detail_review_filter_checkbox_label' => [$this, 'block_page_product_detail_review_filter_checkbox_label'],
            'page_product_detail_review_filter_progressbar' => [$this, 'block_page_product_detail_review_filter_progressbar'],
            'page_product_detail_review_filter_share' => [$this, 'block_page_product_detail_review_filter_share'],
            'page_product_detail_review_filter_divider' => [$this, 'block_page_product_detail_review_filter_divider'],
            'page_product_detail_review_form_teaser' => [$this, 'block_page_product_detail_review_form_teaser'],
            'page_product_detail_review_form_teaser_header' => [$this, 'block_page_product_detail_review_form_teaser_header'],
            'page_product_detail_review_form_teaser_text' => [$this, 'block_page_product_detail_review_form_teaser_text'],
            'page_product_detail_review_form_teaser_button' => [$this, 'block_page_product_detail_review_form_teaser_button'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_product_detail_review_widget', $context, $blocks);
    }

    public function block_page_product_detail_review_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"sticky-top product-detail-review-widget\">

        ";
        // line 4
        $this->displayBlock('page_product_detail_review_info_container', $context, $blocks);
        // line 140
        echo "
        ";
        // line 141
        $this->displayBlock('page_product_detail_review_form_teaser', $context, $blocks);
        // line 185
        echo "    </div>
";
    }

    // line 4
    public function block_page_product_detail_review_info_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "            ";
        $this->displayBlock('page_product_detail_review_info', $context, $blocks);
        // line 40
        echo "
            ";
        // line 41
        if ((1 === twig_compare(($context["productReviewCount"] ?? null), 0))) {
            // line 42
            echo "                <hr>
            ";
        }
        // line 44
        echo "
            ";
        // line 45
        $context["formAjaxSubmitOptions"] = ["replaceSelectors" => [0 => ".js-review-container"], "submitOnChange" => true];
        // line 49
        echo "
            ";
        // line 50
        $this->displayBlock('page_product_detail_review_filter', $context, $blocks);
        // line 139
        echo "        ";
    }

    // line 5
    public function block_page_product_detail_review_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "                <div class=\"product-detail-review-info js-review-info\">

                    ";
        // line 8
        $this->displayBlock('page_product_detail_review_title', $context, $blocks);
        // line 13
        echo "
                    ";
        // line 14
        $this->displayBlock('page_product_detail_review_overview', $context, $blocks);
        // line 38
        echo "                </div>
            ";
    }

    // line 8
    public function block_page_product_detail_review_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                        <p class=\"product-detail-review-title h5\">
                            ";
        // line 10
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewTitle", ["%count%" => sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "total", [], "any", false, false, false, 10), "%total%" => sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "totalReviews", [], "any", false, false, false, 10)]));
        echo "
                        </p>
                    ";
    }

    // line 14
    public function block_page_product_detail_review_overview($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                        <div class=\"product-detail-review-rating\"
                            ";
        // line 16
        if ((1 === twig_compare(($context["productReviewCount"] ?? null), 0))) {
            // line 17
            echo "                                itemprop=\"aggregateRating\" itemscope itemtype=\"https://schema.org/AggregateRating\"
                            ";
        }
        // line 18
        echo ">

                            ";
        // line 20
        if ((1 === twig_compare(($context["productReviewCount"] ?? null), 0))) {
            // line 21
            echo "                                <meta itemprop=\"bestRating\" content=\"5\">
                                <meta itemprop=\"ratingCount\" content=\"";
            // line 22
            echo sw_escape_filter($this->env, ($context["productReviewCount"] ?? null), "html", null, true);
            echo "\">
                                <meta itemprop=\"ratingValue\" content=\"";
            // line 23
            echo sw_escape_filter($this->env, ($context["productAvgRating"] ?? null), "html", null, true);
            echo "\">
                            ";
        }
        // line 25
        echo "
                            ";
        // line 26
        $this->loadTemplate("@Storefront/storefront/component/review/rating.html.twig", "@Storefront/storefront/page/product-detail/review/review-widget.html.twig", 26)->display(twig_array_merge($context, ["points" =>         // line 27
($context["productAvgRating"] ?? null), "style" => "text-primary"]));
        // line 30
        echo "
                            ";
        // line 31
        if ((1 === twig_compare(($context["productReviewCount"] ?? null), 0))) {
            // line 32
            echo "                                <p class=\"h6\">
                                    ";
            // line 33
            echo sw_escape_filter($this->env, ($context["productAvgRating"] ?? null), "html", null, true);
            echo " ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewAvgRate"));
            echo " ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "matrix", [], "any", false, false, false, 33), "maxPoints", [], "any", false, false, false, 33), "html", null, true);
            echo " ";
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewAvgRateElements"), "html", null, true);
            echo "
                                </p>
                            ";
        }
        // line 36
        echo "                        </div>
                    ";
    }

    // line 50
    public function block_page_product_detail_review_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "                ";
        if ((1 === twig_compare(($context["productReviewCount"] ?? null), 0))) {
            // line 52
            echo "                    <div class=\"js-review-filter\">
                        <form class=\"review-filter-form\"
                              action=\"";
            // line 54
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.product.reviews", ["productId" => sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "productId", [], "any", false, false, false, 54), "parentId" => sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "parentId", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\"
                              method=\"post\"
                              data-form-ajax-submit=\"true\"
                              data-form-ajax-submit-options='";
            // line 57
            echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["formAjaxSubmitOptions"] ?? null)]), "html", null, true);
            echo "'>

                            ";
            // line 59
            $this->displayBlock('page_product_detail_review_filter_csrf', $context, $blocks);
            // line 62
            echo "
                            ";
            // line 63
            if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 63), "get", [0 => "limit"], "method", false, false, false, 63)) {
                // line 64
                echo "                                <input type=\"hidden\" name=\"limit\" value=\"";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 64), "get", [0 => "limit"], "method", false, false, false, 64), "html", null, true);
                echo "\">
                            ";
            }
            // line 66
            echo "
                            ";
            // line 67
            if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 67), "get", [0 => "language"], "method", false, false, false, 67)) {
                // line 68
                echo "                                <input type=\"hidden\" name=\"language\" value=\"";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 68), "get", [0 => "language"], "method", false, false, false, 68), "html", null, true);
                echo "\">
                            ";
            }
            // line 70
            echo "
                            ";
            // line 71
            if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 71), "get", [0 => "sort"], "method", false, false, false, 71)) {
                // line 72
                echo "                                <input type=\"hidden\" name=\"sort\" value=\"";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 72), "get", [0 => "sort"], "method", false, false, false, 72), "html", null, true);
                echo "\">
                            ";
            }
            // line 74
            echo "
                            ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "matrix", [], "any", false, false, false, 75), "matrix", [], "any", false, false, false, 75));
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
            foreach ($context['_seq'] as $context["_key"] => $context["matrix"]) {
                // line 76
                echo "                                ";
                $this->displayBlock('page_product_detail_review_filter_box', $context, $blocks);
                // line 130
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matrix'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "                        </form>
                    </div>

                    ";
            // line 134
            $this->displayBlock('page_product_detail_review_filter_divider', $context, $blocks);
            // line 137
            echo "                ";
        }
        // line 138
        echo "            ";
    }

    // line 59
    public function block_page_product_detail_review_filter_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.product.reviews");
        echo "
                            ";
    }

    // line 76
    public function block_page_product_detail_review_filter_box($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "                                    <div class=\"row product-detail-review-filter\">

                                        ";
        // line 79
        $this->displayBlock('page_product_detail_review_filter_checkbox', $context, $blocks);
        // line 109
        echo "
                                        ";
        // line 110
        $this->displayBlock('page_product_detail_review_filter_progressbar', $context, $blocks);
        // line 122
        echo "
                                        ";
        // line 123
        $this->displayBlock('page_product_detail_review_filter_share', $context, $blocks);
        // line 128
        echo "                                    </div>
                                ";
    }

    // line 79
    public function block_page_product_detail_review_filter_checkbox($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "                                            <div class=\"col-md-8 col-lg-5 product-detail-review-checkbox\">
                                                <div class=\"";
        // line 81
        echo sw_escape_filter($this->env, ($context["formCheckboxWrapperClass"] ?? null), "html", null, true);
        echo "\">

                                                    ";
        // line 83
        $this->displayBlock('page_product_detail_review_filter_checkbox_input', $context, $blocks);
        // line 98
        echo "
                                                    ";
        // line 99
        $this->displayBlock('page_product_detail_review_filter_checkbox_label', $context, $blocks);
        // line 106
        echo "                                                </div>
                                            </div>
                                        ";
    }

    // line 83
    public function block_page_product_detail_review_filter_checkbox_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "                                                        <input type=\"checkbox\"
                                                               class=\"";
        // line 85
        echo sw_escape_filter($this->env, ($context["formCheckInputClass"] ?? null), "html", null, true);
        echo "\"
                                                               id=\"reviewRating";
        // line 86
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "points", [], "any", false, false, false, 86), "html", null, true);
        echo "\"
                                                               name=\"points[]\"
                                                            ";
        // line 88
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 88), "get", [0 => "points"], "method", false, false, false, 88)) {
            // line 89
            echo "                                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 89), "get", [0 => "points"], "method", false, false, false, 89));
            foreach ($context['_seq'] as $context["_key"] => $context["points"]) {
                // line 90
                echo "                                                                    ";
                if ((0 === twig_compare($context["points"], sw_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "points", [], "any", false, false, false, 90)))) {
                    // line 91
                    echo "                                                                        checked=\"checked\"
                                                                    ";
                }
                // line 93
                echo "                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['points'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                                                            ";
        }
        // line 95
        echo "                                                               value=\"";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "points", [], "any", false, false, false, 95), "html", null, true);
        echo "\"
                                                            ";
        // line 96
        if ((-1 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "count", [], "any", false, false, false, 96), 1))) {
            echo "disabled";
        }
        echo ">
                                                    ";
    }

    // line 99
    public function block_page_product_detail_review_filter_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "                                                        <label class=\"custom-control-label text-nowrap\"
                                                               for=\"reviewRating";
        // line 101
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "points", [], "any", false, false, false, 101), "html", null, true);
        echo "\">
                                                            <small>";
        // line 102
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("detail.review" . sw_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "points", [], "any", false, false, false, 102)) . "PointRatingText")));
        echo "
                                                                (";
        // line 103
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "count", [], "any", false, false, false, 103), "html", null, true);
        echo ")</small>
                                                        </label>
                                                    ";
    }

    // line 110
    public function block_page_product_detail_review_filter_progressbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "                                            <div class=\"col d-none d-lg-block product-detail-review-progressbar-col\">
                                                <div class=\"progress product-detail-review-progressbar-container\">
                                                    <div class=\"progress-bar product-detail-review-progressbar-bar\"
                                                         role=\"progressbar\"
                                                         style=\"width: ";
        // line 115
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "percent", [], "any", false, false, false, 115), "html", null, true);
        echo "%;\"
                                                         aria-valuenow=\"";
        // line 116
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "percent", [], "any", false, false, false, 116), "html", null, true);
        echo "\"
                                                         aria-valuemin=\"0\"
                                                         aria-valuemax=\"100\"></div>
                                                </div>
                                            </div>
                                        ";
    }

    // line 123
    public function block_page_product_detail_review_filter_share($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        echo "                                            <div class=\"col-12 col-md-3 product-detail-review-share\">
                                                <p><small>";
        // line 125
        echo sw_escape_filter($this->env, twig_round(sw_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "percent", [], "any", false, false, false, 125)), "html", null, true);
        echo "%</small></p>
                                            </div>
                                        ";
    }

    // line 134
    public function block_page_product_detail_review_filter_divider($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 135
        echo "                        <hr/>
                    ";
    }

    // line 141
    public function block_page_product_detail_review_form_teaser($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 142
        echo "            <div class=\"product-detail-review-teaser js-review-teaser\">

                ";
        // line 144
        $this->displayBlock('page_product_detail_review_form_teaser_header', $context, $blocks);
        // line 153
        echo "
                ";
        // line 154
        $this->displayBlock('page_product_detail_review_form_teaser_text', $context, $blocks);
        // line 163
        echo "
                ";
        // line 164
        $this->displayBlock('page_product_detail_review_form_teaser_button', $context, $blocks);
        // line 183
        echo "            </div>
        ";
    }

    // line 144
    public function block_page_product_detail_review_form_teaser_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "                    <p class=\"h4\">
                        ";
        // line 146
        if ( !sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "customerReview", [], "any", false, false, false, 146)) {
            // line 147
            echo "                            ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewTeaserTitle"));
            echo "
                        ";
        } else {
            // line 149
            echo "                            ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewExistsTeaserTitle"));
            echo "
                        ";
        }
        // line 151
        echo "                    </p>
                ";
    }

    // line 154
    public function block_page_product_detail_review_form_teaser_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        echo "                    <p>
                        ";
        // line 156
        if ( !sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "customerReview", [], "any", false, false, false, 156)) {
            // line 157
            echo "                            ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewTeaserText"));
            echo "
                        ";
        } else {
            // line 159
            echo "                            ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewExistsTeaserText"));
            echo "
                        ";
        }
        // line 161
        echo "                    </p>
                ";
    }

    // line 164
    public function block_page_product_detail_review_form_teaser_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 165
        echo "                    <button class=\"btn btn-primary product-detail-review-teaser-btn\"
                            type=\"button\"
                            ";
        // line 167
        echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
        echo "=\"collapse\"
                            ";
        // line 168
        echo sw_escape_filter($this->env, ($context["dataBsTargetAttr"] ?? null), "html", null, true);
        echo "=\".multi-collapse\"
                            aria-expanded=\"false\"
                            aria-controls=\"review-form review-list\">
                        <span class=\"product-detail-review-teaser-show\">
\t\t\t\t\t\t\t";
        // line 172
        if ( !sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "customerReview", [], "any", false, false, false, 172)) {
            // line 173
            echo "                                ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewTeaserButton"));
            echo "
                            ";
        } else {
            // line 175
            echo "                                ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewExistsTeaserButton"));
            echo "
                            ";
        }
        // line 177
        echo "\t\t\t\t\t\t</span>
                        <span class=\"product-detail-review-teaser-hide\">
\t\t\t\t\t\t\t";
        // line 179
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewTeaserButtonHide"));
        echo "
\t\t\t\t\t\t</span>
                    </button>
                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/review/review-widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  608 => 179,  604 => 177,  598 => 175,  592 => 173,  590 => 172,  583 => 168,  579 => 167,  575 => 165,  571 => 164,  566 => 161,  560 => 159,  554 => 157,  552 => 156,  549 => 155,  545 => 154,  540 => 151,  534 => 149,  528 => 147,  526 => 146,  523 => 145,  519 => 144,  514 => 183,  512 => 164,  509 => 163,  507 => 154,  504 => 153,  502 => 144,  498 => 142,  494 => 141,  489 => 135,  485 => 134,  478 => 125,  475 => 124,  471 => 123,  461 => 116,  457 => 115,  451 => 111,  447 => 110,  440 => 103,  436 => 102,  432 => 101,  429 => 100,  425 => 99,  417 => 96,  412 => 95,  409 => 94,  403 => 93,  399 => 91,  396 => 90,  391 => 89,  389 => 88,  384 => 86,  380 => 85,  377 => 84,  373 => 83,  367 => 106,  365 => 99,  362 => 98,  360 => 83,  355 => 81,  352 => 80,  348 => 79,  343 => 128,  341 => 123,  338 => 122,  336 => 110,  333 => 109,  331 => 79,  327 => 77,  323 => 76,  316 => 60,  312 => 59,  308 => 138,  305 => 137,  303 => 134,  298 => 131,  284 => 130,  281 => 76,  264 => 75,  261 => 74,  255 => 72,  253 => 71,  250 => 70,  244 => 68,  242 => 67,  239 => 66,  233 => 64,  231 => 63,  228 => 62,  226 => 59,  221 => 57,  215 => 54,  211 => 52,  208 => 51,  204 => 50,  199 => 36,  187 => 33,  184 => 32,  182 => 31,  179 => 30,  177 => 27,  176 => 26,  173 => 25,  168 => 23,  164 => 22,  161 => 21,  159 => 20,  155 => 18,  151 => 17,  149 => 16,  146 => 15,  142 => 14,  135 => 10,  132 => 9,  128 => 8,  123 => 38,  121 => 14,  118 => 13,  116 => 8,  112 => 6,  108 => 5,  104 => 139,  102 => 50,  99 => 49,  97 => 45,  94 => 44,  90 => 42,  88 => 41,  85 => 40,  82 => 5,  78 => 4,  73 => 185,  71 => 141,  68 => 140,  66 => 4,  62 => 2,  55 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/review/review-widget.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/review/review-widget.html.twig");
    }
}
