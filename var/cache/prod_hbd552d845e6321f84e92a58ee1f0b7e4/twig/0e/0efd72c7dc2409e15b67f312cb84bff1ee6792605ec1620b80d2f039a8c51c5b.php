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

/* @Storefront/storefront/page/checkout/finish/finish-item.html.twig */
class __TwigTemplate_310ef0e07fc998f6cc79fdc3fbee45360aae1c0c7cba42f5cee480795914ad1c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_checkout_item_quantity_form' => [$this, 'block_page_checkout_item_quantity_form'],
            'page_checkout_item_remove_form' => [$this, 'block_page_checkout_item_remove_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/checkout/confirm/confirm-item.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/page/checkout/confirm/confirm-item.html.twig", "@Storefront/storefront/page/checkout/finish/finish-item.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_checkout_item_quantity_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        if ((0 !== twig_compare(sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 6), "promotion"))) {
            // line 7
            echo "        ";
            $this->displayBlock("page_checkout_item_quantity_number", $context, $blocks);
            echo "
    ";
        }
    }

    // line 11
    public function block_page_checkout_item_remove_form($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/finish/finish-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  54 => 7,  51 => 6,  47 => 5,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/checkout/finish/finish-item.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/checkout/finish/finish-item.html.twig");
    }
}
