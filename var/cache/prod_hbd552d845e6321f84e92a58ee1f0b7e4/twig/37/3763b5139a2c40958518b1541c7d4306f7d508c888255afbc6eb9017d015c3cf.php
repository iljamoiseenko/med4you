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

/* @Storefront/storefront/page/product-detail/properties.html.twig */
class __TwigTemplate_9ab77932ef62e2f3a511630f64f10eb0723d634b8c951d3b2dee0529b329c75b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_properties_inner' => [$this, 'block_page_product_detail_properties_inner'],
            'page_product_detail_properties_container' => [$this, 'block_page_product_detail_properties_container'],
            'page_product_detail_properties_table' => [$this, 'block_page_product_detail_properties_table'],
            'page_product_detail_properties_table_row' => [$this, 'block_page_product_detail_properties_table_row'],
            'page_product_detail_properties_item_label' => [$this, 'block_page_product_detail_properties_item_label'],
            'page_product_detail_properties_item_value' => [$this, 'block_page_product_detail_properties_item_value'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_product_detail_properties_inner', $context, $blocks);
    }

    public function block_page_product_detail_properties_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"product-detail-properties\">
        ";
        // line 3
        $this->displayBlock('page_product_detail_properties_container', $context, $blocks);
        // line 35
        echo "    </div>
";
    }

    // line 3
    public function block_page_product_detail_properties_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            <div class=\"row product-detail-properties-container\">
                <div class=\"col-md-10 col-lg-6\">
                    ";
        // line 6
        $this->displayBlock('page_product_detail_properties_table', $context, $blocks);
        // line 32
        echo "                </div>
            </div>
        ";
    }

    // line 6
    public function block_page_product_detail_properties_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "                        <table class=\"table table-striped product-detail-properties-table\">
                            <tbody>
                            ";
        // line 10
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 10), "sortedProperties", [], "any", false, false, false, 10));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 11
            echo "                                ";
            $this->displayBlock('page_product_detail_properties_table_row', $context, $blocks);
            // line 28
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                            </tbody>
                        </table>
                    ";
    }

    // line 11
    public function block_page_product_detail_properties_table_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "                                    <tr class=\"properties-row\">
                                        ";
        // line 13
        $this->displayBlock('page_product_detail_properties_item_label', $context, $blocks);
        // line 16
        echo "                                        ";
        $this->displayBlock('page_product_detail_properties_item_value', $context, $blocks);
        // line 26
        echo "                                    </tr>
                                ";
    }

    // line 13
    public function block_page_product_detail_properties_item_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "                                            <th class=\"properties-label\">";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["group"] ?? null), "translated", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14));
        echo ":</th>
                                        ";
    }

    // line 16
    public function block_page_product_detail_properties_item_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                                            <td class=\"properties-value\">
                                                ";
        // line 18
        ob_start(function () { return ''; });
        // line 19
        echo "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["group"] ?? null), "options", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 20
            echo "                                                        ";
            $context["i"] = (((array_key_exists("i", $context)) ? (_twig_default_filter(($context["i"] ?? null), 0)) : (0)) + 1);
            // line 21
            echo "                                                        <span>";
            if ((1 === twig_compare(($context["i"] ?? null), 1))) {
                echo ", ";
            }
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["option"], "translated", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21));
            echo "</span>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                                                ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        echo twig_spaceless($___internal_parse_0_);
        // line 24
        echo "                                            </td>
                                        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/properties.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  187 => 24,  185 => 18,  182 => 23,  170 => 21,  167 => 20,  162 => 19,  160 => 18,  157 => 17,  153 => 16,  146 => 14,  142 => 13,  137 => 26,  134 => 16,  132 => 13,  129 => 12,  125 => 11,  119 => 29,  105 => 28,  102 => 11,  84 => 10,  80 => 7,  76 => 6,  70 => 32,  68 => 6,  64 => 4,  60 => 3,  55 => 35,  53 => 3,  50 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/properties.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/properties.html.twig");
    }
}
