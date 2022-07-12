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

/* @Storefront/storefront/page/account/_page.html.twig */
class __TwigTemplate_e3ac4afc670b0d61a107ea0cde0fe003fbd99d74b815888a7ff6df732f98d219 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_content' => [$this, 'block_base_content'],
            'page_account' => [$this, 'block_page_account'],
            'page_account_sidebar' => [$this, 'block_page_account_sidebar'],
            'page_account_main' => [$this, 'block_page_account_main'],
            'page_account_main_content' => [$this, 'block_page_account_main_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/base.html.twig", "@Storefront/storefront/page/account/_page.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_base_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayBlock('page_account', $context, $blocks);
    }

    public function block_page_account($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        <div class=\"account account-content\">
            ";
        // line 6
        $this->displayBlock('page_account_sidebar', $context, $blocks);
        // line 13
        echo "
            ";
        // line 14
        $this->displayBlock('page_account_main', $context, $blocks);
        // line 19
        echo "        </div>
    ";
    }

    // line 6
    public function block_page_account_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "                <div class=\"account-content-aside\">
                    ";
        // line 8
        if ((sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 8) &&  !sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 8), "guest", [], "any", false, false, false, 8))) {
            // line 9
            echo "                        ";
            $this->loadTemplate("@Storefront/storefront/page/account/sidebar.html.twig", "@Storefront/storefront/page/account/_page.html.twig", 9)->display($context);
            // line 10
            echo "                    ";
        }
        // line 11
        echo "                </div>
            ";
    }

    // line 14
    public function block_page_account_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                <div class=\"account-content-main\">
                    ";
        // line 16
        $this->displayBlock('page_account_main_content', $context, $blocks);
        // line 17
        echo "                </div>
            ";
    }

    // line 16
    public function block_page_account_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 16,  106 => 17,  104 => 16,  101 => 15,  97 => 14,  92 => 11,  89 => 10,  86 => 9,  84 => 8,  81 => 7,  77 => 6,  72 => 19,  70 => 14,  67 => 13,  65 => 6,  62 => 5,  54 => 4,  50 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/account/_page.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/account/_page.html.twig");
    }
}
