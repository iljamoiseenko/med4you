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

/* @Storefront/storefront/component/payment/payment-method.html.twig */
class __TwigTemplate_1d9f08b4540cb493f0d08cf2bc002f5fa5514bf7940cfe4f6f5518b46346c4f1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_payment_method_field' => [$this, 'block_component_payment_method_field'],
            'component_payment_method_control' => [$this, 'block_component_payment_method_control'],
            'component_payment_method_input' => [$this, 'block_component_payment_method_input'],
            'component_payment_method_label' => [$this, 'block_component_payment_method_label'],
            'component_payment_method_image' => [$this, 'block_component_payment_method_image'],
            'component_payment_method_description' => [$this, 'block_component_payment_method_description'],
            'component_payment_method_description_text' => [$this, 'block_component_payment_method_description_text'],
            'component_payment_fieldset_template' => [$this, 'block_component_payment_fieldset_template'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"payment-method\">
    ";
        // line 2
        $this->displayBlock('component_payment_method_field', $context, $blocks);
        // line 60
        echo "
    ";
        // line 61
        $this->displayBlock('component_payment_fieldset_template', $context, $blocks);
        // line 62
        echo "</div>
";
    }

    // line 2
    public function block_component_payment_method_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <div class=\"payment-form-group form-group\">
            ";
        // line 4
        $this->displayBlock('component_payment_method_control', $context, $blocks);
        // line 58
        echo "        </div>
    ";
    }

    // line 4
    public function block_component_payment_method_control($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRadioWrapperClass"] ?? null), "html", null, true);
        echo " payment-method-radio\">
                    ";
        // line 6
        $this->displayBlock('component_payment_method_input', $context, $blocks);
        // line 17
        echo "
                    ";
        // line 18
        $this->displayBlock('component_payment_method_label', $context, $blocks);
        // line 56
        echo "                </div>
            ";
    }

    // line 6
    public function block_component_payment_method_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "                        <input type=\"radio\"
                               id=\"paymentMethod";
        // line 8
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "\"
                               name=\"paymentMethodId\"
                               value=\"";
        // line 10
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "\"
                               ";
        // line 11
        if ((sw_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "id", [], "any", false, false, false, 11) === ($context["selectedPaymentMethodId"] ?? null))) {
            echo "checked=\"checked\"";
        }
        // line 12
        echo "                               ";
        if ((sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "isPaymentChangeable", [], "any", true, true, false, 12) &&  !sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "isPaymentChangeable", [], "any", false, false, false, 12))) {
            // line 13
            echo "                                   disabled=\"disabled\"
                               ";
        }
        // line 15
        echo "                               class=\"";
        echo sw_escape_filter($this->env, ($context["formCheckInputClass"] ?? null), "html", null, true);
        echo " payment-method-input\">
                    ";
    }

    // line 18
    public function block_component_payment_method_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                        <label class=\"";
        echo sw_escape_filter($this->env, ($context["formCheckLabelClass"] ?? null), "html", null, true);
        echo " payment-method-label\"
                               for=\"paymentMethod";
        // line 20
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "id", [], "any", false, false, false, 20), "html", null, true);
        echo "\">
                            ";
        // line 21
        $this->displayBlock('component_payment_method_image', $context, $blocks);
        // line 36
        echo "
                            ";
        // line 37
        $this->displayBlock('component_payment_method_description', $context, $blocks);
        // line 54
        echo "                        </label>
                    ";
    }

    // line 21
    public function block_component_payment_method_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "                                ";
        if (sw_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "media", [], "any", false, false, false, 22)) {
            // line 23
            echo "                                    ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/payment/payment-method.html.twig", 23);
            })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,             // line 24
($context["payment"] ?? null), "media", [], "any", false, false, false, 24), "sizes" => ["default" => "100px"], "attributes" => ["class" => "payment-method-image", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 30
($context["payment"] ?? null), "media", [], "any", false, false, false, 30), "translated", [], "any", false, false, false, 30), "alt", [], "any", false, false, false, 30)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "media", [], "any", false, false, false, 30), "translated", [], "any", false, false, false, 30), "alt", [], "any", false, false, false, 30)) : (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "translated", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30))), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 31
($context["payment"] ?? null), "media", [], "any", false, false, false, 31), "translated", [], "any", false, false, false, 31), "title", [], "any", false, false, false, 31)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "media", [], "any", false, false, false, 31), "translated", [], "any", false, false, false, 31), "title", [], "any", false, false, false, 31)) : (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "translated", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31)))], "name" => "payment-method-image-thumbnails"]));
            // line 34
            echo "                                ";
        }
        // line 35
        echo "                            ";
    }

    // line 37
    public function block_component_payment_method_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "                                <div class=\"payment-method-description\">
                                    <strong>";
        // line 39
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "translated", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
        echo "</strong>
                                    ";
        // line 40
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "translated", [], "any", false, false, false, 40), "description", [], "any", false, false, false, 40)) {
            // line 41
            echo "                                        ";
            $context["paymentDescription"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "translated", [], "any", false, false, false, 41), "description", [], "any", false, false, false, 41);
            // line 42
            echo "                                        ";
            $context["paymentDescriptionTitle"] = twig_striptags(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "translated", [], "any", false, false, false, 42), "description", [], "any", false, false, false, 42));
            // line 43
            echo "
                                        ";
            // line 44
            if ( !(sw_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "id", [], "any", false, false, false, 44) === ($context["selectedPaymentMethodId"] ?? null))) {
                // line 45
                echo "                                            ";
                $context["paymentDescription"] = (((1 === twig_compare(twig_length_filter($this->env, ($context["paymentDescription"] ?? null)), 75))) ? ((twig_slice($this->env, ($context["paymentDescription"] ?? null), 0, 75) . " ...")) : (($context["paymentDescription"] ?? null)));
                // line 46
                echo "                                        ";
            }
            // line 47
            echo "
                                        ";
            // line 48
            $this->displayBlock('component_payment_method_description_text', $context, $blocks);
            // line 51
            echo "                                    ";
        }
        // line 52
        echo "                                </div>
                            ";
    }

    // line 48
    public function block_component_payment_method_description_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "                                            <p title=\"";
        echo sw_escape_filter($this->env, ($context["paymentDescriptionTitle"] ?? null), "html", null, true);
        echo "\">";
        echo sw_escape_filter($this->env, ($context["paymentDescription"] ?? null), "html", null, true);
        echo "</p>
                                        ";
    }

    // line 61
    public function block_component_payment_fieldset_template($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/payment/payment-method.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  236 => 61,  227 => 49,  223 => 48,  218 => 52,  215 => 51,  213 => 48,  210 => 47,  207 => 46,  204 => 45,  202 => 44,  199 => 43,  196 => 42,  193 => 41,  191 => 40,  187 => 39,  184 => 38,  180 => 37,  176 => 35,  173 => 34,  171 => 31,  170 => 30,  169 => 24,  161 => 23,  158 => 22,  154 => 21,  149 => 54,  147 => 37,  144 => 36,  142 => 21,  138 => 20,  133 => 19,  129 => 18,  122 => 15,  118 => 13,  115 => 12,  111 => 11,  107 => 10,  102 => 8,  99 => 7,  95 => 6,  90 => 56,  88 => 18,  85 => 17,  83 => 6,  78 => 5,  74 => 4,  69 => 58,  67 => 4,  64 => 3,  60 => 2,  55 => 62,  53 => 61,  50 => 60,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/payment/payment-method.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/payment/payment-method.html.twig");
    }
}
