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

/* @Storefront/storefront/page/product-detail/review/review-item.html.twig */
class __TwigTemplate_e0139098441b67505c3dde53e9d809abe6acede39603dab093a6cbbcf46d96f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_review_item' => [$this, 'block_page_product_detail_review_item'],
            'page_product_detail_review_item_meta_published' => [$this, 'block_page_product_detail_review_item_meta_published'],
            'page_product_detail_review_item_meta_title' => [$this, 'block_page_product_detail_review_item_meta_title'],
            'page_product_detail_review_item_meta_author' => [$this, 'block_page_product_detail_review_item_meta_author'],
            'page_product_detail_review_item_info' => [$this, 'block_page_product_detail_review_item_info'],
            'page_product_detail_review_item_info_alert' => [$this, 'block_page_product_detail_review_item_info_alert'],
            'page_product_detail_review_item_info_date' => [$this, 'block_page_product_detail_review_item_info_date'],
            'page_product_detail_review_item_info_points' => [$this, 'block_page_product_detail_review_item_info_points'],
            'page_product_detail_review_item_title' => [$this, 'block_page_product_detail_review_item_title'],
            'page_product_detail_review_item_info_verify' => [$this, 'block_page_product_detail_review_item_info_verify'],
            'page_product_detail_review_item_content' => [$this, 'block_page_product_detail_review_item_content'],
            'page_product_detail_review_item_comment' => [$this, 'block_page_product_detail_review_item_comment'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_product_detail_review_item', $context, $blocks);
    }

    public function block_page_product_detail_review_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["reviewVerifcation"] = 0;
        // line 3
        echo "
    <div class=\"product-detail-review-item\"
         itemprop=\"review\"
         itemscope
         itemtype=\"https://schema.org/Review\">
        ";
        // line 8
        $this->displayBlock('page_product_detail_review_item_meta_published', $context, $blocks);
        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('page_product_detail_review_item_meta_title', $context, $blocks);
        // line 15
        echo "
        ";
        // line 16
        $this->displayBlock('page_product_detail_review_item_meta_author', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('page_product_detail_review_item_info', $context, $blocks);
        // line 71
        echo "
        ";
        // line 72
        $this->displayBlock('page_product_detail_review_item_content', $context, $blocks);
        // line 77
        echo "
        ";
        // line 78
        $this->displayBlock('page_product_detail_review_item_comment', $context, $blocks);
        // line 89
        echo "    </div>
";
    }

    // line 8
    public function block_page_product_detail_review_item_meta_published($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "            <meta itemprop=\"datePublished\" content=\"";
        echo sw_escape_filter($this->env, twig_date_format_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["review"] ?? null), "createdAt", [], "any", false, false, false, 9)), "html", null, true);
        echo "\">
        ";
    }

    // line 12
    public function block_page_product_detail_review_item_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "            <meta itemprop=\"name\" content=\"";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["review"] ?? null), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
        ";
    }

    // line 16
    public function block_page_product_detail_review_item_meta_author($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "            <meta itemprop=\"author\" content=\"hidden\">
        ";
    }

    // line 20
    public function block_page_product_detail_review_item_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "            <div class=\"row product-detail-review-item-info\">
                ";
        // line 22
        $this->displayBlock('page_product_detail_review_item_info_alert', $context, $blocks);
        // line 32
        echo "
                ";
        // line 33
        $this->displayBlock('page_product_detail_review_item_info_date', $context, $blocks);
        // line 38
        echo "
                ";
        // line 39
        $this->displayBlock('page_product_detail_review_item_info_points', $context, $blocks);
        // line 46
        echo "
                ";
        // line 47
        $this->displayBlock('page_product_detail_review_item_title', $context, $blocks);
        // line 54
        echo "
                ";
        // line 55
        $this->displayBlock('page_product_detail_review_item_info_verify', $context, $blocks);
        // line 69
        echo "            </div>
        ";
    }

    // line 22
    public function block_page_product_detail_review_item_info_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                    ";
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["review"] ?? null), "status", [], "any", false, false, false, 23), false))) {
            // line 24
            echo "                        <div class=\"col-12 product-detail-review-item-hint\">
                            ";
            // line 25
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/product-detail/review/review-item.html.twig", 25)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewNotPublicYetAlert"))]));
            // line 29
            echo "                        </div>
                    ";
        }
        // line 31
        echo "                ";
    }

    // line 33
    public function block_page_product_detail_review_item_info_date($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                    <div class=\"col-12 product-detail-review-item-date\">
                        <p><small>";
        // line 35
        echo sw_escape_filter($this->env, twig_date_format_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["review"] ?? null), "createdAt", [], "any", false, false, false, 35)), "html", null, true);
        echo "</small></p>
                    </div>
                ";
    }

    // line 39
    public function block_page_product_detail_review_item_info_points($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "                    <div class=\"col-md-auto product-detail-review-item-points\">
                        ";
        // line 41
        $this->loadTemplate("@Storefront/storefront/component/review/rating.html.twig", "@Storefront/storefront/page/product-detail/review/review-item.html.twig", 41)->display(twig_array_merge($context, ["points" => sw_get_attribute($this->env, $this->source,         // line 42
($context["review"] ?? null), "points", [], "any", false, false, false, 42)]));
        // line 44
        echo "                    </div>
                ";
    }

    // line 47
    public function block_page_product_detail_review_item_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "                    <div class=\"col-md-auto product-detail-review-item-title\">
                        <p class=\"h5\">
                            ";
        // line 50
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["review"] ?? null), "title", [], "any", false, false, false, 50), "html", null, true);
        echo "
                        </p>
                    </div>
                ";
    }

    // line 55
    public function block_page_product_detail_review_item_info_verify($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "                    <div class=\"col product-detail-review-item-verify\">
                        ";
        // line 57
        if ((0 === twig_compare(($context["reviewVerifcation"] ?? null), 1))) {
            // line 58
            echo "                            <a ";
            echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
            echo "=\"tooltip\"
                               data-placement=\"bottom\"
                               title=\"";
            // line 60
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewVerifiedItemTooltip")), "html", null, true);
            echo "\">
                                ";
            // line 61
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/product-detail/review/review-item.html.twig", 61);
            })())->display(twig_array_merge($context, ["color" => "primary", "size" => "sm", "name" => "checkmark-circle"]));
            // line 65
            echo "                            </a>
                        ";
        }
        // line 67
        echo "                    </div>
                ";
    }

    // line 72
    public function block_page_product_detail_review_item_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "            <p class=\"product-detail-review-item-content\" itemprop=\"description\">
                ";
        // line 74
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["review"] ?? null), "content", [], "any", false, false, false, 74), "html", null, true);
        echo "
            </p>
        ";
    }

    // line 78
    public function block_page_product_detail_review_item_comment($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, ($context["review"] ?? null), "comment", [], "any", false, false, false, 79)) {
            // line 80
            echo "                <div class=\"product-detail-review-item-comment\">
                    <blockquote class=\"blockquote\">
                        <footer class=\"blockquote-footer\">
                            ";
            // line 83
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewCommentLabel"));
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["review"] ?? null), "comment", [], "any", false, false, false, 83), "html", null, true);
            echo "
                        </footer>
                    </blockquote>
                </div>
            ";
        }
        // line 88
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/review/review-item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  299 => 88,  290 => 83,  285 => 80,  282 => 79,  278 => 78,  271 => 74,  268 => 73,  264 => 72,  259 => 67,  255 => 65,  247 => 61,  243 => 60,  237 => 58,  235 => 57,  232 => 56,  228 => 55,  220 => 50,  216 => 48,  212 => 47,  207 => 44,  205 => 42,  204 => 41,  201 => 40,  197 => 39,  190 => 35,  187 => 34,  183 => 33,  179 => 31,  175 => 29,  173 => 25,  170 => 24,  167 => 23,  163 => 22,  158 => 69,  156 => 55,  153 => 54,  151 => 47,  148 => 46,  146 => 39,  143 => 38,  141 => 33,  138 => 32,  136 => 22,  133 => 21,  129 => 20,  124 => 17,  120 => 16,  113 => 13,  109 => 12,  102 => 9,  98 => 8,  93 => 89,  91 => 78,  88 => 77,  86 => 72,  83 => 71,  81 => 20,  78 => 19,  76 => 16,  73 => 15,  71 => 12,  68 => 11,  66 => 8,  59 => 3,  56 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/review/review-item.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/review/review-item.html.twig");
    }
}
