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

/* @Storefront/storefront/component/payment/payment-form.html.twig */
class __TwigTemplate_861213f9099f73f49a6b9553d22c4667d3e307d9596d3188b12d0e2a9ee98bee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_change_payment_form' => [$this, 'block_page_checkout_change_payment_form'],
            'page_checkout_change_payment_form_element' => [$this, 'block_page_checkout_change_payment_form_element'],
            'page_checkout_change_payment_form_csrf' => [$this, 'block_page_checkout_change_payment_form_csrf'],
            'page_checkout_change_payment_form_redirect' => [$this, 'block_page_checkout_change_payment_form_redirect'],
            'page_checkout_change_payment_form_fields' => [$this, 'block_page_checkout_change_payment_form_fields'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_checkout_change_payment_form', $context, $blocks);
    }

    public function block_page_checkout_change_payment_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
    ";
        // line 3
        $context["formAjaxSubmitOptions"] = ["changeTriggerSelectors" => [0 => ".payment-method-input"]];
        // line 6
        echo "
    ";
        // line 7
        $this->displayBlock('page_checkout_change_payment_form_element', $context, $blocks);
    }

    public function block_page_checkout_change_payment_form_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <form id=\"changePaymentForm\"
              name=\"changePaymentForm\"
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
        $this->displayBlock('page_checkout_change_payment_form_csrf', $context, $blocks);
        // line 19
        echo "
            ";
        // line 20
        $this->displayBlock('page_checkout_change_payment_form_redirect', $context, $blocks);
        // line 24
        echo "
            ";
        // line 25
        $this->displayBlock('page_checkout_change_payment_form_fields', $context, $blocks);
        // line 31
        echo "        </form>
    ";
    }

    // line 16
    public function block_page_checkout_change_payment_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder(($context["action"] ?? null));
        echo "
            ";
    }

    // line 20
    public function block_page_checkout_change_payment_form_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                <input type=\"hidden\" name=\"redirectTo\" value=\"";
        echo sw_escape_filter($this->env, ($context["redirect"] ?? null), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"redirectParameters[redirected]\" value=\"0\">
            ";
    }

    // line 25
    public function block_page_checkout_change_payment_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/component/payment/payment-fields.html.twig", "@Storefront/storefront/component/payment/payment-form.html.twig", 26)->display(twig_array_merge($context, ["visiblePaymentMethodsLimit" => 5, "selectedPaymentMethodId" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 28
($context["context"] ?? null), "paymentMethod", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)]));
        // line 30
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/payment/payment-form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  128 => 30,  126 => 28,  124 => 26,  120 => 25,  112 => 21,  108 => 20,  101 => 17,  97 => 16,  92 => 31,  90 => 25,  87 => 24,  85 => 20,  82 => 19,  80 => 16,  74 => 13,  68 => 10,  64 => 8,  57 => 7,  54 => 6,  52 => 3,  49 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/payment/payment-form.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/payment/payment-form.html.twig");
    }
}
