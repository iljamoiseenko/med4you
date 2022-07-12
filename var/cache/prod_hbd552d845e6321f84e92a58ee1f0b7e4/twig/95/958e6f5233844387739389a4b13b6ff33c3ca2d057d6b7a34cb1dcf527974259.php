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

/* @Storefront/storefront/section/cms-section-block-container.html.twig */
class __TwigTemplate_9073fba27e2886a5f9ab0bca410c23ae316eb68d58228b8c54d4773933f5599b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'section_content_block' => [$this, 'block_section_content_block'],
            'section_content_block_background_image' => [$this, 'block_section_content_block_background_image'],
            'section_content_block_container' => [$this, 'block_section_content_block_container'],
            'section_content_block_row' => [$this, 'block_section_content_block_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('section_content_block', $context, $blocks);
    }

    public function block_section_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
    ";
        // line 3
        $context["top"] = ((sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginTop", [], "any", false, false, false, 3)) ? (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginTop", [], "any", false, false, false, 3)) : (0));
        // line 4
        echo "    ";
        $context["right"] = ((sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginRight", [], "any", false, false, false, 4)) ? (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginRight", [], "any", false, false, false, 4)) : (0));
        // line 5
        echo "    ";
        $context["bottom"] = ((sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginBottom", [], "any", false, false, false, 5)) ? (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginBottom", [], "any", false, false, false, 5)) : (0));
        // line 6
        echo "    ";
        $context["left"] = ((sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginLeft", [], "any", false, false, false, 6)) ? (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginLeft", [], "any", false, false, false, 6)) : (0));
        // line 7
        echo "
    ";
        // line 8
        if ((((($context["top"] ?? null) || ($context["right"] ?? null)) || ($context["bottom"] ?? null)) || ($context["left"] ?? null))) {
            // line 9
            echo "        ";
            $context["padding"] = ((((((($context["top"] ?? null) . " ") . ($context["right"] ?? null)) . " ") . ($context["bottom"] ?? null)) . " ") . ($context["left"] ?? null));
            // line 10
            echo "    ";
        }
        // line 11
        echo "
    ";
        // line 12
        $context["blockBgColor"] = sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "backgroundColor", [], "any", false, false, false, 12);
        // line 13
        echo "
    ";
        // line 14
        $context["blockClasses"] = [0 => sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "cssClass", [], "any", false, false, false, 14), 1 => ("pos-" . sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "position", [], "any", false, false, false, 14)), 2 => ("cms-block-" . sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 14))];
        // line 15
        echo "
    ";
        // line 16
        if (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "backgroundMedia", [], "any", false, false, false, 16)) {
            // line 17
            echo "        ";
            $context["blockClasses"] = twig_array_merge([0 => "bg-image"], ($context["blockClasses"] ?? null));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if (($context["blockBgColor"] ?? null)) {
            // line 21
            echo "        ";
            $context["blockClasses"] = twig_array_merge([0 => "bg-color"], ($context["blockClasses"] ?? null));
            // line 22
            echo "    ";
        }
        // line 23
        echo "
    ";
        // line 24
        $context["columns"] = 3;
        // line 25
        echo "    ";
        $context["isInSidebar"] = (0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "sectionPosition", [], "any", false, false, false, 25), "sidebar"));
        // line 26
        echo "    ";
        $context["sidebarClasses"] = "";
        // line 27
        echo "
    ";
        // line 28
        if ((0 === twig_compare(($context["isInSidebar"] ?? null), true))) {
            // line 29
            echo "        ";
            $context["sidebarClasses"] = "has--sidebar";
            // line 30
            echo "    ";
        }
        // line 31
        echo "
    <div class=\"cms-block ";
        // line 32
        echo sw_escape_filter($this->env, twig_join_filter(($context["blockClasses"] ?? null), " "), "html", null, true);
        echo "\"
         style=\"";
        // line 33
        if (($context["blockBgColor"] ?? null)) {
            echo " background-color: ";
            echo sw_escape_filter($this->env, ($context["blockBgColor"] ?? null), "html", null, true);
            echo ";";
        }
        echo "\">
        ";
        // line 34
        $this->displayBlock('section_content_block_background_image', $context, $blocks);
        // line 44
        echo "
        ";
        // line 45
        $this->displayBlock('section_content_block_container', $context, $blocks);
        // line 56
        echo "    </div>
";
    }

    // line 34
    public function block_section_content_block_background_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "backgroundMedia", [], "any", false, false, false, 35)) {
            // line 36
            echo "                ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/section/cms-section-block-container.html.twig", 36);
            })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,             // line 37
($context["block"] ?? null), "backgroundMedia", [], "any", false, false, false, 37), "attributes" => ["class" => ("cms-block-background media-mode--" . sw_get_attribute($this->env, $this->source,             // line 39
($context["block"] ?? null), "backgroundMediaMode", [], "any", false, false, false, 39))], "name" => "cms-block-background"]));
            // line 42
            echo "            ";
        }
        // line 43
        echo "        ";
    }

    // line 45
    public function block_section_content_block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "            <div class=\"cms-block-container\"
                 style=\"";
        // line 47
        if (($context["padding"] ?? null)) {
            echo "padding: ";
            echo sw_escape_filter($this->env, ($context["padding"] ?? null), "html", null, true);
            echo ";";
        }
        echo "\">

                ";
        // line 49
        $this->displayBlock('section_content_block_row', $context, $blocks);
        // line 54
        echo "            </div>
        ";
    }

    // line 49
    public function block_section_content_block_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "                    <div class=\"cms-block-container-row row cms-row ";
        echo sw_escape_filter($this->env, ($context["sidebarClasses"] ?? null), "html", null, true);
        echo "\">
                        ";
        // line 51
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find((("@Storefront/storefront/block/cms-block-" . sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 51)) . ".html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/section/cms-section-block-container.html.twig", 51);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        // line 52
        echo "                    </div>
                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/section/cms-section-block-container.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  227 => 52,  211 => 51,  206 => 50,  202 => 49,  197 => 54,  195 => 49,  186 => 47,  183 => 46,  179 => 45,  175 => 43,  172 => 42,  170 => 39,  169 => 37,  161 => 36,  158 => 35,  154 => 34,  149 => 56,  147 => 45,  144 => 44,  142 => 34,  134 => 33,  130 => 32,  127 => 31,  124 => 30,  121 => 29,  119 => 28,  116 => 27,  113 => 26,  110 => 25,  108 => 24,  105 => 23,  102 => 22,  99 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  86 => 16,  83 => 15,  81 => 14,  78 => 13,  76 => 12,  73 => 11,  70 => 10,  67 => 9,  65 => 8,  62 => 7,  59 => 6,  56 => 5,  53 => 4,  51 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/section/cms-section-block-container.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/section/cms-section-block-container.html.twig");
    }
}
