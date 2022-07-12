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

/* @Storefront/storefront/component/payment/payment-fields.html.twig */
class __TwigTemplate_9e10d7993d8658b833c44cc0309b5f4dfd9a98ce349131a28d6dfb3f854fef74 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_payment_methods' => [$this, 'block_component_payment_methods'],
            'component_payment_method' => [$this, 'block_component_payment_method'],
            'component_payment_method_collapse' => [$this, 'block_component_payment_method_collapse'],
            'component_payment_method_collapse_trigger' => [$this, 'block_component_payment_method_collapse_trigger'],
            'component_payment_method_collapse_trigger_label' => [$this, 'block_component_payment_method_collapse_trigger_label'],
            'component_payment_method_collapse_trigger_icon' => [$this, 'block_component_payment_method_collapse_trigger_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["collapseTriggerLabels"] = ["collapseTriggerMoreLabel" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.collapseTriggerMore")), "collapseTriggerLessLabel" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.collapseTriggerLess"))];
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('component_payment_methods', $context, $blocks);
    }

    public function block_component_payment_methods($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <div class=\"payment-methods\">
        ";
        // line 8
        $this->displayBlock('component_payment_method', $context, $blocks);
        // line 42
        echo "    </div>
";
    }

    // line 8
    public function block_component_payment_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "paymentMethods", [], "any", false, false, false, 9), 0, ($context["visiblePaymentMethodsLimit"] ?? null)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 10
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/component/payment/payment-method.html.twig", "@Storefront/storefront/component/payment/payment-fields.html.twig", 10)->display($context);
            // line 11
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
            ";
        // line 13
        $this->displayBlock('component_payment_method_collapse', $context, $blocks);
        // line 41
        echo "        ";
    }

    // line 13
    public function block_component_payment_method_collapse($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "                ";
        if (((1 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "paymentMethods", [], "any", false, false, false, 14)), ($context["visiblePaymentMethodsLimit"] ?? null))) &&  !(($context["visiblePaymentMethodsLimit"] ?? null) === null))) {
            // line 15
            echo "                    <div class=\"collapse\">
                        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "paymentMethods", [], "any", false, false, false, 16), ($context["visiblePaymentMethodsLimit"] ?? null), null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
                // line 17
                echo "                            ";
                $this->loadTemplate("@Storefront/storefront/component/payment/payment-method.html.twig", "@Storefront/storefront/component/payment/payment-fields.html.twig", 17)->display($context);
                // line 18
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                    </div>

                    ";
            // line 21
            $this->displayBlock('component_payment_method_collapse_trigger', $context, $blocks);
            // line 39
            echo "                ";
        }
        // line 40
        echo "            ";
    }

    // line 21
    public function block_component_payment_method_collapse_trigger($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "                        <div class=\"btn btn-link confirm-checkout-collapse-trigger\"
                             data-collapse-checkout-confirm-methods=\"true\"
                             data-collapse-checkout-confirm-methods-options='";
        // line 24
        echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["collapseTriggerLabels"] ?? null)]), "html", null, true);
        echo "'>
                            <span class=\"confirm-checkout-collapse-trigger-label\">
                                ";
        // line 26
        $this->displayBlock('component_payment_method_collapse_trigger_label', $context, $blocks);
        // line 29
        echo "                            </span>
                            ";
        // line 30
        $this->displayBlock('component_payment_method_collapse_trigger_icon', $context, $blocks);
        // line 37
        echo "                        </div>
                    ";
    }

    // line 26
    public function block_component_payment_method_collapse_trigger_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "                                    ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collapseTriggerLabels"] ?? null), "collapseTriggerMoreLabel", [], "any", false, false, false, 27), "html", null, true);
        echo "
                                ";
    }

    // line 30
    public function block_component_payment_method_collapse_trigger_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/payment/payment-fields.html.twig", 31);
        })())->display(twig_array_merge($context, ["class" => "confirm-checkout-chevron", "size" => "xs", "pack" => "solid", "name" => "arrow-down"]));
        // line 36
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/payment/payment-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 36,  210 => 31,  206 => 30,  199 => 27,  195 => 26,  190 => 37,  188 => 30,  185 => 29,  183 => 26,  178 => 24,  174 => 22,  170 => 21,  166 => 40,  163 => 39,  161 => 21,  157 => 19,  143 => 18,  140 => 17,  123 => 16,  120 => 15,  117 => 14,  113 => 13,  109 => 41,  107 => 13,  104 => 12,  90 => 11,  87 => 10,  69 => 9,  65 => 8,  60 => 42,  58 => 8,  55 => 7,  48 => 6,  45 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/payment/payment-fields.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/payment/payment-fields.html.twig");
    }
}
