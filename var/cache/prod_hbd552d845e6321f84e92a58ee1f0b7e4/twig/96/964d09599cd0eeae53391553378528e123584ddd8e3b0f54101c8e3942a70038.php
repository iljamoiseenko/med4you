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

/* @Storefront/storefront/component/shipping/shipping-method.html.twig */
class __TwigTemplate_3d152bac0a830e32b06051806fdce14d8c3ce17a3d7e8f8f79d74e3aad737044 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_shipping_method_field' => [$this, 'block_component_shipping_method_field'],
            'component_shipping_method_control' => [$this, 'block_component_shipping_method_control'],
            'component_shipping_method_input' => [$this, 'block_component_shipping_method_input'],
            'component_shipping_method_label' => [$this, 'block_component_shipping_method_label'],
            'component_shipping_method_image' => [$this, 'block_component_shipping_method_image'],
            'component_shipping_method_description' => [$this, 'block_component_shipping_method_description'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"shipping-method\">
    ";
        // line 2
        $this->displayBlock('component_shipping_method_field', $context, $blocks);
        // line 54
        echo "</div>
";
    }

    // line 2
    public function block_component_shipping_method_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <div class=\"shipping-form-group form-group\">
            ";
        // line 4
        $this->displayBlock('component_shipping_method_control', $context, $blocks);
        // line 52
        echo "        </div>
    ";
    }

    // line 4
    public function block_component_shipping_method_control($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRadioWrapperClass"] ?? null), "html", null, true);
        echo " shipping-method-radio\">
                    ";
        // line 6
        $this->displayBlock('component_shipping_method_input', $context, $blocks);
        // line 14
        echo "
                    ";
        // line 15
        $this->displayBlock('component_shipping_method_label', $context, $blocks);
        // line 50
        echo "                </div>
            ";
    }

    // line 6
    public function block_component_shipping_method_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "                        <input type=\"radio\"
                               id=\"shippingMethod";
        // line 8
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "\"
                               name=\"shippingMethodId\"
                               value=\"";
        // line 10
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "\"
                               ";
        // line 11
        if ((sw_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "id", [], "any", false, false, false, 11) === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "shippingMethod", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11))) {
            echo "checked=\"checked\"";
        }
        // line 12
        echo "                               class=\"";
        echo sw_escape_filter($this->env, ($context["formCheckInputClass"] ?? null), "html", null, true);
        echo " shipping-method-input\">
                    ";
    }

    // line 15
    public function block_component_shipping_method_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                        <label class=\"";
        echo sw_escape_filter($this->env, ($context["formCheckLabelClass"] ?? null), "html", null, true);
        echo " shipping-method-label\"
                               for=\"shippingMethod";
        // line 17
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "\">
                            ";
        // line 18
        $this->displayBlock('component_shipping_method_image', $context, $blocks);
        // line 33
        echo "
                            ";
        // line 34
        $this->displayBlock('component_shipping_method_description', $context, $blocks);
        // line 48
        echo "                        </label>
                    ";
    }

    // line 18
    public function block_component_shipping_method_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                                ";
        if (sw_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "media", [], "any", false, false, false, 19)) {
            // line 20
            echo "                                    ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/shipping/shipping-method.html.twig", 20);
            })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,             // line 21
($context["shipping"] ?? null), "media", [], "any", false, false, false, 21), "sizes" => ["default" => "100px"], "attributes" => ["class" => "shipping-method-image", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 27
($context["shipping"] ?? null), "media", [], "any", false, false, false, 27), "translated", [], "any", false, false, false, 27), "alt", [], "any", false, false, false, 27)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "media", [], "any", false, false, false, 27), "translated", [], "any", false, false, false, 27), "alt", [], "any", false, false, false, 27)) : (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "translated", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27))), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 28
($context["shipping"] ?? null), "media", [], "any", false, false, false, 28), "translated", [], "any", false, false, false, 28), "title", [], "any", false, false, false, 28)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "media", [], "any", false, false, false, 28), "translated", [], "any", false, false, false, 28), "title", [], "any", false, false, false, 28)) : (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "translated", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28)))], "name" => "shipping-method-image-thumbnails"]));
            // line 31
            echo "                                ";
        }
        // line 32
        echo "                            ";
    }

    // line 34
    public function block_component_shipping_method_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "                                <div class=\"shipping-method-description\">
                                    <strong>";
        // line 36
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "translated", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
        echo "</strong>
                                    ";
        // line 37
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "translated", [], "any", false, false, false, 37), "description", [], "any", false, false, false, 37)) {
            // line 38
            echo "                                        ";
            $context["shippingDescription"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "translated", [], "any", false, false, false, 38), "description", [], "any", false, false, false, 38);
            // line 39
            echo "
                                        ";
            // line 40
            if ( !(sw_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "id", [], "any", false, false, false, 40) === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "shippingMethod", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40))) {
                // line 41
                echo "                                            ";
                $context["shippingDescription"] = (((1 === twig_compare(twig_length_filter($this->env, ($context["shippingDescription"] ?? null)), 75))) ? ((twig_slice($this->env, ($context["shippingDescription"] ?? null), 0, 75) . " ...")) : (($context["shippingDescription"] ?? null)));
                // line 42
                echo "                                        ";
            }
            // line 43
            echo "
                                        <p title=\"";
            // line 44
            echo sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "translated", [], "any", false, false, false, 44), "description", [], "any", false, false, false, 44);
            echo "\">";
            echo sw_escape_filter($this->env, ($context["shippingDescription"] ?? null), "html", null, true);
            echo "</p>
                                    ";
        }
        // line 46
        echo "                                </div>
                            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/shipping/shipping-method.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  203 => 46,  196 => 44,  193 => 43,  190 => 42,  187 => 41,  185 => 40,  182 => 39,  179 => 38,  177 => 37,  173 => 36,  170 => 35,  166 => 34,  162 => 32,  159 => 31,  157 => 28,  156 => 27,  155 => 21,  147 => 20,  144 => 19,  140 => 18,  135 => 48,  133 => 34,  130 => 33,  128 => 18,  124 => 17,  119 => 16,  115 => 15,  108 => 12,  104 => 11,  100 => 10,  95 => 8,  92 => 7,  88 => 6,  83 => 50,  81 => 15,  78 => 14,  76 => 6,  71 => 5,  67 => 4,  62 => 52,  60 => 4,  57 => 3,  53 => 2,  48 => 54,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/shipping/shipping-method.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/shipping/shipping-method.html.twig");
    }
}
