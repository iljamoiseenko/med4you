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

/* @Storefront/storefront/page/product-detail/review/review-login.html.twig */
class __TwigTemplate_8de08a243901e0ace2b72d5bde03579b2e88461457a7d160692089a33a96def1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'component_account_login_header' => [$this, 'block_component_account_login_header'],
            'component_account_login_form_description' => [$this, 'block_component_account_login_form_description'],
            'component_account_login_form_redirect' => [$this, 'block_component_account_login_form_redirect'],
            'component_account_login_submit' => [$this, 'block_component_account_login_submit'],
            'page_product_detail_review_form_cancel' => [$this, 'block_page_product_detail_review_form_cancel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/component/account/login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/component/account/login.html.twig", "@Storefront/storefront/page/product-detail/review/review-login.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_component_account_login_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<h2 class=\"card-title\">
\t\t";
        // line 5
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewLoginHeader"));
        echo "
\t</h2>
";
    }

    // line 9
    public function block_component_account_login_form_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "\t<p class=\"login-form-description\">
\t\t";
        // line 11
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewLoginDescription"));
        echo "
\t\t<a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.login.page");
        echo "\"
\t\t   title=\"";
        // line 13
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewRegisterLink")), "html", null, true);
        echo "\">
            ";
        // line 14
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewRegisterLink"));
        echo "
\t\t</a>
\t</p>
";
    }

    // line 19
    public function block_component_account_login_form_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "\t<input type=\"hidden\"
           name=\"redirectTo\"
           value=\"frontend.detail.page\">

\t<input type=\"hidden\"
\t\t   name=\"redirectParameters\"
\t\t   value='{\"productId\": \"";
        // line 26
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "productId", [], "any", false, false, false, 26), "html", null, true);
        echo "\"}'>
";
    }

    // line 29
    public function block_component_account_login_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "\t<div class=\"";
        echo sw_escape_filter($this->env, ($context["floatStartClass"] ?? null), "html", null, true);
        echo "\">
\t\t";
        // line 31
        $this->displayParentBlock("component_account_login_submit", $context, $blocks);
        echo "
\t</div>
\t<div class=\"login-cancel\">
\t\t";
        // line 34
        $this->displayBlock('page_product_detail_review_form_cancel', $context, $blocks);
        // line 44
        echo "\t</div>
";
    }

    // line 34
    public function block_page_product_detail_review_form_cancel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "\t\t\t<a href=\"#\"
\t\t\t   class=\"btn btn-outline-secondary ";
        // line 36
        echo sw_escape_filter($this->env, ($context["marginStartClass"] ?? null), "html", null, true);
        echo "-1\"
\t\t\t   ";
        // line 37
        echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
        echo "=\"collapse\"
\t\t\t   ";
        // line 38
        echo sw_escape_filter($this->env, ($context["dataBsTargetAttr"] ?? null), "html", null, true);
        echo "=\".multi-collapse\"
\t\t\t   aria-expanded=\"false\"
\t\t\t   aria-controls=\"review-form review-list\">
\t\t\t\t";
        // line 41
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewLoginCancelButton"));
        echo "
\t\t\t</a>
\t\t";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/review/review-login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 41,  146 => 38,  142 => 37,  138 => 36,  135 => 35,  131 => 34,  126 => 44,  124 => 34,  118 => 31,  113 => 30,  109 => 29,  103 => 26,  95 => 20,  91 => 19,  83 => 14,  79 => 13,  75 => 12,  71 => 11,  68 => 10,  64 => 9,  57 => 5,  54 => 4,  50 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/review/review-login.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/review/review-login.html.twig");
    }
}
