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

/* @Storefront/storefront/page/checkout/confirm/confirm-payment.html.twig */
class __TwigTemplate_e255e3f86c7626652ae7f7325393491675a136ca6f55d466aa0a71c2fe3f2b79 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_confirm_payment_inner' => [$this, 'block_page_checkout_confirm_payment_inner'],
            'page_checkout_confirm_payment_title' => [$this, 'block_page_checkout_confirm_payment_title'],
            'page_checkout_change_payment_form' => [$this, 'block_page_checkout_change_payment_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_checkout_confirm_payment_inner', $context, $blocks);
    }

    public function block_page_checkout_confirm_payment_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"card checkout-card\">
        <div class=\"card-body\">
            ";
        // line 4
        $context["paymentMethodInvalid"] = true;
        // line 5
        echo "
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "paymentMethods", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 7
            echo "                ";
            if ((sw_get_attribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 7) === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "paymentMethod", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7))) {
                // line 8
                echo "                    ";
                $context["paymentMethodInvalid"] = false;
                // line 9
                echo "                ";
            }
            // line 10
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
            ";
        // line 12
        $this->displayBlock('page_checkout_confirm_payment_title', $context, $blocks);
        // line 17
        echo "
            ";
        // line 18
        $this->displayBlock('page_checkout_change_payment_form', $context, $blocks);
        // line 25
        echo "        </div>
    </div>
";
    }

    // line 12
    public function block_page_checkout_confirm_payment_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "                <div class=\"card-title\">
                    ";
        // line 14
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmPaymentMethod"));
        echo "
                </div>
            ";
    }

    // line 18
    public function block_page_checkout_change_payment_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/component/payment/payment-form.html.twig", "@Storefront/storefront/page/checkout/confirm/confirm-payment.html.twig", 19)->display(twig_array_merge($context, ["action" => "frontend.checkout.configure", "actionPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.configure"), "redirect" => "frontend.checkout.confirm.page"]));
        // line 24
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/confirm/confirm-payment.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  112 => 24,  109 => 19,  105 => 18,  98 => 14,  95 => 13,  91 => 12,  85 => 25,  83 => 18,  80 => 17,  78 => 12,  75 => 11,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  56 => 6,  53 => 5,  51 => 4,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/checkout/confirm/confirm-payment.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/checkout/confirm/confirm-payment.html.twig");
    }
}
