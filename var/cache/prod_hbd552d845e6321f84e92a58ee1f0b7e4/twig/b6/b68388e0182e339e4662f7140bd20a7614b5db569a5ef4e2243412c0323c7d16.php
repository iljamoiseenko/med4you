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

/* @Storefront/storefront/element/cms-element-text.html.twig */
class __TwigTemplate_5983ed477befaba19cc20953851ea6bcb7f65773b062ca8ae7e702a2cd8cbc4c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'element_text' => [$this, 'block_element_text'],
            'element_text_alignment' => [$this, 'block_element_text_alignment'],
            'element_text_inner' => [$this, 'block_element_text_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('element_text', $context, $blocks);
    }

    public function block_element_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["config"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "fieldConfig", [], "any", false, false, false, 2), "elements", [], "any", false, false, false, 2);
        // line 3
        echo "
    <div class=\"cms-element-";
        // line 4
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 4), "html", null, true);
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4)) {
            echo " has-vertical-alignment";
        }
        echo "\">
        ";
        // line 5
        $this->displayBlock('element_text_alignment', $context, $blocks);
        // line 16
        echo "    </div>
";
    }

    // line 5
    public function block_element_text_alignment($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6)) {
            // line 7
            echo "                <div class=\"cms-element-alignment";
            if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7), "center"))) {
                echo " align-self-center";
            } elseif ((0 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7), "flex-end"))) {
                echo " align-self-end";
            } else {
                echo " align-self-start";
            }
            echo "\">
            ";
        }
        // line 9
        echo "                ";
        $this->displayBlock('element_text_inner', $context, $blocks);
        // line 12
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 12), "value", [], "any", false, false, false, 12)) {
            // line 13
            echo "                </div>
            ";
        }
        // line 15
        echo "        ";
    }

    // line 9
    public function block_element_text_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                    ";
        echo sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 10), "content", [], "any", false, false, false, 10);
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-text.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 10,  100 => 9,  96 => 15,  92 => 13,  89 => 12,  86 => 9,  74 => 7,  71 => 6,  67 => 5,  62 => 16,  60 => 5,  53 => 4,  50 => 3,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/element/cms-element-text.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-text.html.twig");
    }
}
