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

/* @Storefront/storefront/component/listing/filter/filter-property-select.html.twig */
class __TwigTemplate_d493ab09b516f86fcb8f4ad92acdf166710ab0bedf32ef71d17f32ccac77efba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'component_filter_multi_select_list_item' => [$this, 'block_component_filter_multi_select_list_item'],
            'component_filter_property_select_preview' => [$this, 'block_component_filter_property_select_preview'],
            'component_filter_property_select_checkox_input' => [$this, 'block_component_filter_property_select_checkox_input'],
            'component_filter_property_select_preview_checkmark' => [$this, 'block_component_filter_property_select_preview_checkmark'],
            'component_filter_property_select_preview_checkmark_icon' => [$this, 'block_component_filter_property_select_preview_checkmark_icon'],
            'component_filter_property_select_preview_list_item_label_element' => [$this, 'block_component_filter_property_select_preview_list_item_label_element'],
            'component_filter_property_select_preview_list_item_label' => [$this, 'block_component_filter_property_select_preview_list_item_label'],
            'component_filter_property_select_preview_list_item' => [$this, 'block_component_filter_property_select_preview_list_item'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        if ( !array_key_exists("dataPluginSelectorOptions", $context)) {
            // line 4
            $context["dataPluginSelectorOptions"] = ["name" =>             // line 5
($context["name"] ?? null), "propertyName" =>             // line 6
($context["propertyName"] ?? null), "snippets" => ["disabledFilterText" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.disabledFilterTooltip"))]];
        }
        // line 2
        $this->parent = $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig", "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_component_filter_multi_select_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <li class=\"filter-multi-select-list-item filter-property-select-list-item\">
        ";
        // line 15
        if (((0 === twig_compare(($context["displayType"] ?? null), "color")) || (0 === twig_compare(($context["displayType"] ?? null), "media")))) {
            // line 16
            echo "            ";
            $context["color"] = sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "colorHexCode", [], "any", false, false, false, 16);
            // line 17
            echo "            ";
            $context["media"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "media", [], "any", false, false, false, 17), "url", [], "any", false, false, false, 17);
            // line 18
            echo "            ";
            $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18);
            // line 19
            echo "            ";
            $context["id"] = sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 19);
            // line 20
            echo "
            ";
            // line 21
            $this->displayBlock('component_filter_property_select_preview', $context, $blocks);
            // line 53
            echo "
            ";
            // line 54
            if ( !($context["hideTitle"] ?? null)) {
                // line 55
                echo "                ";
                $this->displayBlock('component_filter_property_select_preview_list_item_label_element', $context, $blocks);
                // line 62
                echo "            ";
            }
            // line 63
            echo "        ";
        } else {
            // line 64
            echo "            ";
            $this->displayBlock('component_filter_property_select_preview_list_item', $context, $blocks);
            // line 67
            echo "        ";
        }
        // line 68
        echo "    </li>
";
    }

    // line 21
    public function block_component_filter_property_select_preview($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "                <span class=\"filter-property-select-preview\"
                      title=\"";
        // line 23
        echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
                      ";
        // line 24
        if (((0 === twig_compare(($context["displayType"] ?? null), "color")) && ($context["color"] ?? null))) {
            // line 25
            echo "                      style=\"background: ";
            echo sw_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
            echo "\"
                      ";
        }
        // line 27
        echo "                      ";
        if (((0 === twig_compare(($context["displayType"] ?? null), "media")) && ($context["media"] ?? null))) {
            // line 28
            echo "                      style=\"background-image: url('";
            echo sw_escape_filter($this->env, ($context["media"] ?? null), "html", null, true);
            echo "')\"
                      ";
        }
        // line 29
        echo ">

                    ";
        // line 31
        $this->displayBlock('component_filter_property_select_checkox_input', $context, $blocks);
        // line 43
        echo "
                    ";
        // line 44
        $this->displayBlock('component_filter_property_select_preview_checkmark', $context, $blocks);
        // line 51
        echo "                </span>
            ";
    }

    // line 31
    public function block_component_filter_property_select_checkox_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "                        <input type=\"checkbox\"
                               class=\"filter-property-select-checkbox filter-multi-select-checkbox\"
                               id=\"";
        // line 34
        echo sw_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"
                               data-label=\"";
        // line 35
        echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
                               ";
        // line 36
        if (((0 === twig_compare(($context["displayType"] ?? null), "color")) && ($context["color"] ?? null))) {
            // line 37
            echo "                               data-preview-hex=\"";
            echo sw_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
            echo "\"
                               ";
        }
        // line 39
        echo "                               ";
        if (((0 === twig_compare(($context["displayType"] ?? null), "media")) && ($context["media"] ?? null))) {
            // line 40
            echo "                               data-preview-image-url=\"";
            echo sw_escape_filter($this->env, ($context["media"] ?? null), "html", null, true);
            echo "\"
                               ";
        }
        // line 41
        echo ">
                    ";
    }

    // line 44
    public function block_component_filter_property_select_preview_checkmark($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "                        <span class=\"filter-property-select-preview-checkmark\">
                            ";
        // line 46
        $this->displayBlock('component_filter_property_select_preview_checkmark_icon', $context, $blocks);
        // line 49
        echo "                        </span>
                    ";
    }

    // line 46
    public function block_component_filter_property_select_preview_checkmark_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "                                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", 47);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "xs", "name" => "checkmark"]));
        // line 48
        echo "                            ";
    }

    // line 55
    public function block_component_filter_property_select_preview_list_item_label_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "                    <label class=\"filter-multi-select-item-label\" for=\"";
        echo sw_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
                        ";
        // line 57
        $this->displayBlock('component_filter_property_select_preview_list_item_label', $context, $blocks);
        // line 60
        echo "                    </label>
                ";
    }

    // line 57
    public function block_component_filter_property_select_preview_list_item_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "                            ";
        echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "
                        ";
    }

    // line 64
    public function block_component_filter_property_select_preview_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-multi-select-list-item.html.twig", "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", 65)->display($context);
        // line 66
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 66,  256 => 65,  252 => 64,  245 => 58,  241 => 57,  236 => 60,  234 => 57,  229 => 56,  225 => 55,  221 => 48,  212 => 47,  208 => 46,  203 => 49,  201 => 46,  198 => 45,  194 => 44,  189 => 41,  183 => 40,  180 => 39,  174 => 37,  172 => 36,  168 => 35,  164 => 34,  160 => 32,  156 => 31,  151 => 51,  149 => 44,  146 => 43,  144 => 31,  140 => 29,  134 => 28,  131 => 27,  125 => 25,  123 => 24,  119 => 23,  116 => 22,  112 => 21,  107 => 68,  104 => 67,  101 => 64,  98 => 63,  95 => 62,  92 => 55,  90 => 54,  87 => 53,  85 => 21,  82 => 20,  79 => 19,  76 => 18,  73 => 17,  70 => 16,  68 => 15,  65 => 14,  61 => 13,  56 => 2,  53 => 6,  52 => 5,  51 => 4,  49 => 3,  42 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter/filter-property-select.html.twig");
    }
}
