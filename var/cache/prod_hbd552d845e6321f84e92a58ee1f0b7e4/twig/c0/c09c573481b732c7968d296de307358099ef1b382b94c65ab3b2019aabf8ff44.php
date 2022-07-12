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

/* @Storefront/storefront/page/product-detail/review/review-form.html.twig */
class __TwigTemplate_38b852dad2a0e78d4cbd37fa611c4126df1481ef35b5f5dc5c14019045ab9c15 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_review_form' => [$this, 'block_page_product_detail_review_form'],
            'page_product_detail_review_form_form' => [$this, 'block_page_product_detail_review_form_form'],
            'page_product_detail_review_form_csrf' => [$this, 'block_page_product_detail_review_form_csrf'],
            'page_product_detail_review_form_forward' => [$this, 'block_page_product_detail_review_form_forward'],
            'page_product_detail_review_form_details' => [$this, 'block_page_product_detail_review_form_details'],
            'page_product_detail_review_form_rating' => [$this, 'block_page_product_detail_review_form_rating'],
            'page_product_detail_review_form_title' => [$this, 'block_page_product_detail_review_form_title'],
            'page_product_detail_review_form_title_label' => [$this, 'block_page_product_detail_review_form_title_label'],
            'page_product_detail_review_form_title_input' => [$this, 'block_page_product_detail_review_form_title_input'],
            'page_product_detail_review_form_title_violation' => [$this, 'block_page_product_detail_review_form_title_violation'],
            'page_product_detail_review_form_content' => [$this, 'block_page_product_detail_review_form_content'],
            'page_product_detail_review_form_content_label' => [$this, 'block_page_product_detail_review_form_content_label'],
            'page_product_detail_review_form_content_textarea' => [$this, 'block_page_product_detail_review_form_content_textarea'],
            'page_product_detail_review_form_content_violation' => [$this, 'block_page_product_detail_review_form_content_violation'],
            'page_product_detail_review_form_footer' => [$this, 'block_page_product_detail_review_form_footer'],
            'page_product_detail_review_form_required' => [$this, 'block_page_product_detail_review_form_required'],
            'page_product_detail_review_form_cancel' => [$this, 'block_page_product_detail_review_form_cancel'],
            'page_product_detail_review_form_submit' => [$this, 'block_page_product_detail_review_form_submit'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_product_detail_review_form', $context, $blocks);
    }

    public function block_page_product_detail_review_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
    ";
        // line 3
        if (( !array_key_exists("data", $context) && sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "customerReview", [], "any", true, true, false, 3))) {
            // line 4
            echo "        ";
            $context["data"] = sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "customerReview", [], "any", false, false, false, 4);
            // line 5
            echo "    ";
        }
        // line 6
        echo "
    ";
        // line 7
        $context["formAjaxSubmitOptions"] = ["replaceSelectors" => ".js-review-container"];
        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('page_product_detail_review_form_form', $context, $blocks);
    }

    public function block_page_product_detail_review_form_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "        <form class=\"review-form\"
              action=\"";
        // line 13
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.detail.review.save", ["productId" => sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "productId", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\"
              method=\"post\"
              data-form-validation=\"true\"
              data-form-ajax-submit=\"true\"
              data-form-ajax-submit-options='";
        // line 17
        echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["formAjaxSubmitOptions"] ?? null)]), "html", null, true);
        echo "'>

            ";
        // line 19
        $this->displayBlock('page_product_detail_review_form_csrf', $context, $blocks);
        // line 22
        echo "
            ";
        // line 23
        $this->displayBlock('page_product_detail_review_form_forward', $context, $blocks);
        // line 36
        echo "
            ";
        // line 37
        if (sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "customerReview", [], "any", false, false, false, 37)) {
            // line 38
            echo "                <input type=\"hidden\" value=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "customerReview", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38), "html", null, true);
            echo "\" name=\"id\"/>
            ";
        }
        // line 40
        echo "
            ";
        // line 41
        $this->displayBlock('page_product_detail_review_form_details', $context, $blocks);
        // line 114
        echo "
            ";
        // line 115
        $this->displayBlock('page_product_detail_review_form_content', $context, $blocks);
        // line 141
        echo "
            ";
        // line 142
        $this->displayBlock('page_product_detail_review_form_footer', $context, $blocks);
        // line 171
        echo "        </form>
    ";
    }

    // line 19
    public function block_page_product_detail_review_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.detail.review.save");
        echo "
            ";
    }

    // line 23
    public function block_page_product_detail_review_form_forward($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                <input type=\"hidden\"
                       name=\"forwardTo\"
                       value=\"frontend.product.reviews\">

                <input type=\"hidden\"
                       name=\"parentId\"
                       value=\"";
        // line 30
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "parentId", [], "any", false, false, false, 30), "html", null, true);
        echo "\">

                <input type=\"hidden\"
                       name=\"forwardParameters\"
                       value='{\"productId\": \"";
        // line 34
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "productId", [], "any", false, false, false, 34), "html", null, true);
        echo "\"}'>
            ";
    }

    // line 41
    public function block_page_product_detail_review_form_details($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "                <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 43
        $this->displayBlock('page_product_detail_review_form_rating', $context, $blocks);
        // line 83
        echo "
                    ";
        // line 84
        $this->displayBlock('page_product_detail_review_form_title', $context, $blocks);
        // line 112
        echo "                </div>
            ";
    }

    // line 43
    public function block_page_product_detail_review_form_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "                        <div class=\"form-group col-md-4 product-detail-review-form-rating\">
                            <label for=\"#review-form-rating\">
                                ";
        // line 46
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewFormRatingLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                            </label>

                            <div id=\"review-form-rating\"
                                 class=\"product-detail-review-form-rating-input\"
                                 data-rating-system=\"true\">
                                ";
        // line 52
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "points"], "method", false, false, false, 52))) {
            // line 53
            echo "                                    ";
            $context["currentPoints"] = twig_number_format_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "points"], "method", false, false, false, 53));
            // line 54
            echo "                                ";
        } else {
            // line 55
            echo "                                    ";
            $context["currentPoints"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "matrix", [], "any", false, false, false, 55), "maxPoints", [], "any", false, false, false, 55);
            // line 56
            echo "                                ";
        }
        // line 57
        echo "
                                ";
        // line 58
        $context["maxPoints"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "matrix", [], "any", false, false, false, 58), "maxPoints", [], "any", false, false, false, 58);
        // line 59
        echo "
                                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPoints"] ?? null)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["point"]) {
            // line 61
            echo "                                    <label data-review-form-point=\"";
            echo sw_escape_filter($this->env, $context["point"], "html", null, true);
            echo "\"
                                           class=\"product-detail-review-form-star";
            // line 62
            if ((0 <= twig_compare(($context["currentPoints"] ?? null), $context["point"]))) {
                echo " is-active";
            }
            echo "\">
                                        <input class=\"product-detail-review-form-radio\"
                                               type=\"radio\"
                                               name=\"points\"
                                               value=\"";
            // line 66
            echo sw_escape_filter($this->env, $context["point"], "html", null, true);
            echo "\"
                                            ";
            // line 67
            if ((0 <= twig_compare(($context["currentPoints"] ?? null), $context["point"]))) {
                echo " checked=\"checked\"";
            }
            echo ">

                                        ";
            // line 69
            $this->loadTemplate("@Storefront/storefront/component/review/point.html.twig", "@Storefront/storefront/page/product-detail/review/review-form.html.twig", 69)->display(twig_array_merge($context, ["type" => "blank"]));
            // line 72
            echo "                                    </label>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['point'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "matrix", [], "any", false, false, false, 74), "matrix", [], "any", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["matrix"]) {
            // line 75
            echo "                                    <p class=\"h6 product-detail-review-form-rating-text ";
            if ((0 !== twig_compare(($context["currentPoints"] ?? null), sw_get_attribute($this->env, $this->source, $context["matrix"], "points", [], "any", false, false, false, 75)))) {
                echo " d-none";
            }
            echo "\"
                                       data-rating-text=\"";
            // line 76
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["matrix"], "points", [], "any", false, false, false, 76), "html", null, true);
            echo "\">
                                        ";
            // line 77
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("detail.review" . sw_get_attribute($this->env, $this->source, $context["matrix"], "points", [], "any", false, false, false, 77)) . "PointRatingText")));
            echo "
                                    </p>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matrix'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                            </div>
                        </div>
                    ";
    }

    // line 84
    public function block_page_product_detail_review_form_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "                        <div class=\"form-group col-12 product-detail-review-form-title\">
                            ";
        // line 86
        $this->displayBlock('page_product_detail_review_form_title_label', $context, $blocks);
        // line 91
        echo "
                            ";
        // line 92
        $this->displayBlock('page_product_detail_review_form_title_input', $context, $blocks);
        // line 102
        echo "
                            ";
        // line 103
        $this->displayBlock('page_product_detail_review_form_title_violation', $context, $blocks);
        // line 110
        echo "                        </div>
                    ";
    }

    // line 86
    public function block_page_product_detail_review_form_title_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "                                <label class=\"form-label\" for=\"reviewTitle\">
                                    ";
        // line 88
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewFormTitleLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                </label>
                            ";
    }

    // line 92
    public function block_page_product_detail_review_form_title_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "                                <input type=\"text\"
                                       class=\"form-control";
        // line 94
        if (sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/title"], "method", false, false, false, 94)) {
            echo " is-invalid";
        }
        echo "\"
                                       id=\"reviewTitle\"
                                       placeholder=\"";
        // line 96
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewFormTitlePlaceholder")), "html", null, true);
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required")), "html", null, true);
        echo "\"
                                       name=\"title\"
                                       value=\"";
        // line 98
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "title"], "method", false, false, false, 98), "html", null, true);
        echo "\"
                                       required=\"required\"
                                       minlength=\"5\">
                            ";
    }

    // line 103
    public function block_page_product_detail_review_form_title_violation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "                                ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/title"], "method", false, false, false, 104))) {
            // line 105
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/product-detail/review/review-form.html.twig", 105)->display(twig_array_merge($context, ["violationPath" => "/title"]));
            // line 108
            echo "                                ";
        }
        // line 109
        echo "                            ";
    }

    // line 115
    public function block_page_product_detail_review_form_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "                <div class=\"form-group product-detail-review-form-content\">
                    ";
        // line 117
        $this->displayBlock('page_product_detail_review_form_content_label', $context, $blocks);
        // line 122
        echo "
                    ";
        // line 123
        $this->displayBlock('page_product_detail_review_form_content_textarea', $context, $blocks);
        // line 131
        echo "
                    ";
        // line 132
        $this->displayBlock('page_product_detail_review_form_content_violation', $context, $blocks);
        // line 139
        echo "                </div>
            ";
    }

    // line 117
    public function block_page_product_detail_review_form_content_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        echo "                        <label for=\"reviewContent\">
                            ";
        // line 119
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewFormContentLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
    }

    // line 123
    public function block_page_product_detail_review_form_content_textarea($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        echo "                        <textarea class=\"form-control";
        if (sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/content"], "method", false, false, false, 124)) {
            echo " is-invalid";
        }
        echo "\"
                                  id=\"reviewContent\"
                                  name=\"content\"
                                  required=\"required\"
                                  minlength=\"40\"
                                  rows=\"8\">";
        // line 129
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "content"], "method", false, false, false, 129))) {
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "content"], "method", false, false, false, 129), "html", null, true);
        }
        echo "</textarea>
                    ";
    }

    // line 132
    public function block_page_product_detail_review_form_content_violation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        echo "                        ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/content"], "method", false, false, false, 133))) {
            // line 134
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/product-detail/review/review-form.html.twig", 134)->display(twig_array_merge($context, ["violationPath" => "/content"]));
            // line 137
            echo "                        ";
        }
        // line 138
        echo "                    ";
    }

    // line 142
    public function block_page_product_detail_review_form_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "                <div class=\"product-detail-review-form-footer\">
                    ";
        // line 144
        $this->displayBlock('page_product_detail_review_form_required', $context, $blocks);
        // line 149
        echo "
                    <div class=\"product-detail-review-form-actions\">
                        ";
        // line 151
        $this->displayBlock('page_product_detail_review_form_cancel', $context, $blocks);
        // line 161
        echo "
                        ";
        // line 162
        $this->displayBlock('page_product_detail_review_form_submit', $context, $blocks);
        // line 168
        echo "                    </div>
                </div>
            ";
    }

    // line 144
    public function block_page_product_detail_review_form_required($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "                        <p class=\"required-fields\">
                            ";
        // line 146
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.requiredFields"));
        echo "
                        </p>
                    ";
    }

    // line 151
    public function block_page_product_detail_review_form_cancel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        echo "                            <a href=\"#\"
                               class=\"btn btn-outline-secondary product-detail-review-cancel\"
                               ";
        // line 154
        echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
        echo "=\"collapse\"
                               ";
        // line 155
        echo sw_escape_filter($this->env, ($context["dataBsTargetAttr"] ?? null), "html", null, true);
        echo "=\".multi-collapse\"
                               aria-expanded=\"false\"
                               aria-controls=\"review-form review-list\">
                                ";
        // line 158
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewFormCancelText"));
        echo "
                            </a>
                        ";
    }

    // line 162
    public function block_page_product_detail_review_form_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 163
        echo "                            <button type=\"submit\"
                                    class=\"btn btn-primary btn-review-submit\">
                                ";
        // line 165
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewFormSubmitText"));
        echo "
                            </button>
                        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/review/review-form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  564 => 165,  560 => 163,  556 => 162,  549 => 158,  543 => 155,  539 => 154,  535 => 152,  531 => 151,  524 => 146,  521 => 145,  517 => 144,  511 => 168,  509 => 162,  506 => 161,  504 => 151,  500 => 149,  498 => 144,  495 => 143,  491 => 142,  487 => 138,  484 => 137,  481 => 134,  478 => 133,  474 => 132,  466 => 129,  455 => 124,  451 => 123,  443 => 119,  440 => 118,  436 => 117,  431 => 139,  429 => 132,  426 => 131,  424 => 123,  421 => 122,  419 => 117,  416 => 116,  412 => 115,  408 => 109,  405 => 108,  402 => 105,  399 => 104,  395 => 103,  387 => 98,  381 => 96,  374 => 94,  371 => 93,  367 => 92,  359 => 88,  356 => 87,  352 => 86,  347 => 110,  345 => 103,  342 => 102,  340 => 92,  337 => 91,  335 => 86,  332 => 85,  328 => 84,  322 => 80,  313 => 77,  309 => 76,  302 => 75,  297 => 74,  282 => 72,  280 => 69,  273 => 67,  269 => 66,  260 => 62,  255 => 61,  238 => 60,  235 => 59,  233 => 58,  230 => 57,  227 => 56,  224 => 55,  221 => 54,  218 => 53,  216 => 52,  206 => 46,  202 => 44,  198 => 43,  193 => 112,  191 => 84,  188 => 83,  186 => 43,  181 => 42,  177 => 41,  171 => 34,  164 => 30,  156 => 24,  152 => 23,  145 => 20,  141 => 19,  136 => 171,  134 => 142,  131 => 141,  129 => 115,  126 => 114,  124 => 41,  121 => 40,  115 => 38,  113 => 37,  110 => 36,  108 => 23,  105 => 22,  103 => 19,  98 => 17,  91 => 13,  88 => 12,  81 => 11,  78 => 10,  76 => 7,  73 => 6,  70 => 5,  67 => 4,  65 => 3,  62 => 2,  55 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/review/review-form.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/review/review-form.html.twig");
    }
}
