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

/* @Storefront/storefront/component/shipping/shipping-form.html.twig */
class __TwigTemplate_753d63109579dfe391cb16182cf772cf15854316a55c386dad9933f77de2df75 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_change_shipping_form' => [$this, 'block_page_checkout_change_shipping_form'],
            'page_checkout_change_shipping_form_element' => [$this, 'block_page_checkout_change_shipping_form_element'],
            'page_checkout_change_shipping_form_csrf' => [$this, 'block_page_checkout_change_shipping_form_csrf'],
            'page_checkout_change_shipping_form_redirect' => [$this, 'block_page_checkout_change_shipping_form_redirect'],
            'page_checkout_change_shipping_form_fields' => [$this, 'block_page_checkout_change_shipping_form_fields'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_checkout_change_shipping_form', $context, $blocks);
    }

    public function block_page_checkout_change_shipping_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
    ";
        // line 3
        $context["formAjaxSubmitOptions"] = ["changeTriggerSelectors" => [0 => ".shipping-method-input"]];
        // line 6
        echo "
    ";
        // line 7
        $this->displayBlock('page_checkout_change_shipping_form_element', $context, $blocks);
    }

    public function block_page_checkout_change_shipping_form_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <form id=\"changeShippingForm\"
              name=\"changeShippingForm\"
              action=\"";
        // line 10
        echo sw_escape_filter($this->env, ($context["actionPath"] ?? null), "html", null, true);
        echo "\"
              data-form-csrf-handler=\"true\"
              data-form-auto-submit=\"true\"
              data-form-auto-submit-options='";
        // line 13
        echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["formAjaxSubmitOptions"] ?? null)]), "html", null, true);
        echo "'
              method=\"post\">

            ";
        // line 16
        $this->displayBlock('page_checkout_change_shipping_form_csrf', $context, $blocks);
        // line 19
        echo "
            ";
        // line 20
        $this->displayBlock('page_checkout_change_shipping_form_redirect', $context, $blocks);
        // line 23
        echo "
            ";
        // line 24
        $this->displayBlock('page_checkout_change_shipping_form_fields', $context, $blocks);
        // line 29
        echo "        </form>
    ";
    }

    // line 16
    public function block_page_checkout_change_shipping_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder(($context["action"] ?? null));
        echo "
            ";
    }

    // line 20
    public function block_page_checkout_change_shipping_form_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                <input type=\"hidden\" name=\"redirectTo\" value=\"";
        echo sw_escape_filter($this->env, ($context["redirect"] ?? null), "html", null, true);
        echo "\">
            ";
    }

    // line 24
    public function block_page_checkout_change_shipping_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/component/shipping/shipping-fields.html.twig", "@Storefront/storefront/component/shipping/shipping-form.html.twig", 25)->display(twig_array_merge($context, ["visibleShippingMethodsLimit" => 5]));
        // line 28
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/shipping/shipping-form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  126 => 28,  123 => 25,  119 => 24,  112 => 21,  108 => 20,  101 => 17,  97 => 16,  92 => 29,  90 => 24,  87 => 23,  85 => 20,  82 => 19,  80 => 16,  74 => 13,  68 => 10,  64 => 8,  57 => 7,  54 => 6,  52 => 3,  49 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/shipping/shipping-form.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/shipping/shipping-form.html.twig");
    }
}
