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

/* @Storefront/storefront/component/listing/filter/filter-boolean.html.twig */
class __TwigTemplate_d2ccce553cd94aef675d8e811e507d8fd919ed6532ee803dd78e12229d268ca1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_filter_boolean' => [$this, 'block_component_filter_boolean'],
            'component_filter_boolean_panel_item' => [$this, 'block_component_filter_boolean_panel_item'],
            'component_filter_boolean_container' => [$this, 'block_component_filter_boolean_container'],
            'component_filter_boolean_checkbox' => [$this, 'block_component_filter_boolean_checkbox'],
            'component_filter_boolean_label' => [$this, 'block_component_filter_boolean_label'],
            'component_filter_boolean_display_name' => [$this, 'block_component_filter_boolean_display_name'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_filter_boolean', $context, $blocks);
    }

    public function block_component_filter_boolean($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["filterBooleanOptions"] = ["name" =>         // line 3
($context["name"] ?? null), "displayName" =>         // line 4
($context["displayName"] ?? null), "snippets" => ["disabledFilterText" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.disabledFilterTooltip"))]];
        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('component_filter_boolean_panel_item', $context, $blocks);
    }

    public function block_component_filter_boolean_panel_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "        <div class=\"filter-boolean filter-panel-item\"
             data-filter-boolean=\"true\"
             data-filter-boolean-options='";
        // line 13
        echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["filterBooleanOptions"] ?? null)]), "html", null, true);
        echo "'>

            ";
        // line 15
        $this->displayBlock('component_filter_boolean_container', $context, $blocks);
        // line 34
        echo "        </div>
    ";
    }

    // line 15
    public function block_component_filter_boolean_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                <div class=\"";
        echo sw_escape_filter($this->env, ($context["formCheckboxWrapperClass"] ?? null), "html", null, true);
        echo "\">

                    ";
        // line 18
        $this->displayBlock('component_filter_boolean_checkbox', $context, $blocks);
        // line 24
        echo "
                    ";
        // line 25
        $this->displayBlock('component_filter_boolean_label', $context, $blocks);
        // line 32
        echo "                </div>
            ";
    }

    // line 18
    public function block_component_filter_boolean_checkbox($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                        <input type=\"checkbox\"
                               class=\"filter-boolean-input ";
        // line 20
        echo sw_escape_filter($this->env, ($context["formCheckInputClass"] ?? null), "html", null, true);
        echo "\"
                               id=\"";
        // line 21
        echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
                               name=\"";
        // line 22
        echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
                    ";
    }

    // line 25
    public function block_component_filter_boolean_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                        <label for=\"";
        echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" class=\"filter-boolean-label custom-control-label\">
                            ";
        // line 27
        $this->displayBlock('component_filter_boolean_display_name', $context, $blocks);
        // line 30
        echo "                        </label>
                    ";
    }

    // line 27
    public function block_component_filter_boolean_display_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                                ";
        echo sw_escape_filter($this->env, ($context["displayName"] ?? null), "html", null, true);
        echo "
                            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter/filter-boolean.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  144 => 28,  140 => 27,  135 => 30,  133 => 27,  128 => 26,  124 => 25,  118 => 22,  114 => 21,  110 => 20,  107 => 19,  103 => 18,  98 => 32,  96 => 25,  93 => 24,  91 => 18,  85 => 16,  81 => 15,  76 => 34,  74 => 15,  69 => 13,  65 => 11,  58 => 10,  55 => 9,  53 => 4,  52 => 3,  50 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/listing/filter/filter-boolean.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter/filter-boolean.html.twig");
    }
}
