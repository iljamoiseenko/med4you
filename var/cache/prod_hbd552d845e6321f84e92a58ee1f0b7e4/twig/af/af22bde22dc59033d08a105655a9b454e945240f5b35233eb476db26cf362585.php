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

/* @Storefront/storefront/component/product/feature/list.html.twig */
class __TwigTemplate_74bee4b940eedc0199b923d988137977be58d64ef9f01fd1245cd33c6fd0d2a9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_feature_list_container' => [$this, 'block_component_product_feature_list_container'],
            'component_product_feature_list' => [$this, 'block_component_product_feature_list'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_product_feature_list_container', $context, $blocks);
    }

    public function block_component_product_feature_list_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"product-feature-list\">

        ";
        // line 4
        $this->displayBlock('component_product_feature_list', $context, $blocks);
        // line 13
        echo "
    </div>
";
    }

    // line 4
    public function block_component_product_feature_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "            <ul class=\"product-feature-list-list\">

                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["features"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 8
            echo "                    ";
            $this->loadTemplate("@Storefront/storefront/component/product/feature/item.html.twig", "@Storefront/storefront/component/product/feature/list.html.twig", 8)->display($context);
            // line 9
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
            </ul>
        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/feature/list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 10,  86 => 9,  83 => 8,  66 => 7,  62 => 5,  58 => 4,  52 => 13,  50 => 4,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/product/feature/list.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/product/feature/list.html.twig");
    }
}
