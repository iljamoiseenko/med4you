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

/* @Storefront/storefront/block/cms-block-image-text.html.twig */
class __TwigTemplate_fbbea1d945d3b67d912549c4f347147a6974d527bd6297646d23f350699d4f22 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'block_image_text' => [$this, 'block_block_image_text'],
            'block_image_text_left' => [$this, 'block_block_image_text_left'],
            'block_image_text_left_inner' => [$this, 'block_block_image_text_left_inner'],
            'block_image_text_right' => [$this, 'block_block_image_text_right'],
            'block_image_text_right_inner' => [$this, 'block_block_image_text_right_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('block_image_text', $context, $blocks);
    }

    public function block_block_image_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["columns"] = 2;
        // line 3
        echo "    ";
        // line 4
        echo "    ";
        $context["id"] = sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 4);
        // line 5
        echo "
    ";
        // line 6
        $this->displayBlock('block_image_text_left', $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('block_image_text_right', $context, $blocks);
    }

    // line 6
    public function block_block_image_text_left($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        ";
        $context["element"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "slots", [], "any", false, false, false, 7), "getSlot", [0 => "left"], "method", false, false, false, 7);
        // line 8
        echo "
        <div class=\"col-md-6\" data-cms-element-id=\"";
        // line 9
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 9), "html", null, true);
        echo "\">
            ";
        // line 10
        $this->displayBlock('block_image_text_left_inner', $context, $blocks);
        // line 13
        echo "        </div>
    ";
    }

    // line 10
    public function block_block_image_text_left_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "                ";
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find((("@Storefront/storefront/element/cms-element-" . sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 11)) . ".html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/block/cms-block-image-text.html.twig", 11);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        // line 12
        echo "            ";
    }

    // line 16
    public function block_block_image_text_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "        ";
        $context["element"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "slots", [], "any", false, false, false, 17), "getSlot", [0 => "right"], "method", false, false, false, 17);
        // line 18
        echo "
        <div class=\"col-md-6\" data-cms-element-id=\"";
        // line 19
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
            ";
        // line 20
        $this->displayBlock('block_image_text_right_inner', $context, $blocks);
        // line 23
        echo "        </div>
    ";
    }

    // line 20
    public function block_block_image_text_right_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                ";
        $__internal_compile_1 = null;
        try {
            $__internal_compile_1 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find((("@Storefront/storefront/element/cms-element-" . sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 21)) . ".html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/block/cms-block-image-text.html.twig", 21);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_1) {
            $__internal_compile_1->display($context);
        }
        // line 22
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/block/cms-block-image-text.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  157 => 22,  140 => 21,  136 => 20,  131 => 23,  129 => 20,  125 => 19,  122 => 18,  119 => 17,  115 => 16,  111 => 12,  94 => 11,  90 => 10,  85 => 13,  83 => 10,  79 => 9,  76 => 8,  73 => 7,  69 => 6,  65 => 16,  62 => 15,  60 => 6,  57 => 5,  54 => 4,  52 => 3,  49 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/block/cms-block-image-text.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/block/cms-block-image-text.html.twig");
    }
}
