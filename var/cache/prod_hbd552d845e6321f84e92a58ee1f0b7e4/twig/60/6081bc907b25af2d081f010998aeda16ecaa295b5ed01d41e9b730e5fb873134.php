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

/* @Storefront/storefront/component/product/card/box.html.twig */
class __TwigTemplate_c65e174c1689d384678066a039602e29677400751610bd169f66b49c85bdcfbe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_box_include' => [$this, 'block_component_product_box_include'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_product_box_include', $context, $blocks);
    }

    public function block_component_product_box_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        // line 4
        echo "
    ";
        // line 5
        if (twig_test_empty(($context["layout"] ?? null))) {
            // line 6
            echo "        ";
            $context["layout"] = "standard";
            // line 7
            echo "    ";
        }
        // line 8
        echo "
    ";
        // line 9
        $context["sizes"] = ["xs" => "500px", "sm" => "315px", "md" => "390px", "lg" => "350px", "xl" => "280px"];
        // line 16
        echo "
    ";
        // line 17
        if ((0 === twig_compare(($context["layout"] ?? null), "image"))) {
            // line 18
            echo "        ";
            $context["sizes"] = ["xs" => "500px", "sm" => "500px", "md" => "390px", "lg" => "350px", "xl" => "280px"];
            // line 25
            echo "    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if ((0 === twig_compare(($context["layout"] ?? null), "standard"))) {
            // line 28
            echo "        ";
            $this->loadTemplate("@Storefront/storefront/component/product/card/box-standard.html.twig", "@Storefront/storefront/component/product/card/box.html.twig", 28)->display($context);
            // line 29
            echo "    ";
        } elseif ((0 === twig_compare(($context["layout"] ?? null), "image"))) {
            // line 30
            echo "        ";
            $this->loadTemplate("@Storefront/storefront/component/product/card/box-image.html.twig", "@Storefront/storefront/component/product/card/box.html.twig", 30)->display($context);
            // line 31
            echo "    ";
        } elseif ((0 === twig_compare(($context["layout"] ?? null), "minimal"))) {
            // line 32
            echo "        ";
            $this->loadTemplate("@Storefront/storefront/component/product/card/box-minimal.html.twig", "@Storefront/storefront/component/product/card/box.html.twig", 32)->display($context);
            // line 33
            echo "    ";
        } elseif ((0 === twig_compare(($context["layout"] ?? null), "wishlist"))) {
            // line 34
            echo "        ";
            $this->loadTemplate("@Storefront/storefront/component/product/card/box-wishlist.html.twig", "@Storefront/storefront/component/product/card/box.html.twig", 34)->display($context);
            // line 35
            echo "    ";
        } else {
            // line 36
            echo "        ";
            $context["template"] = (("@Storefront/storefront/component/product/card/box-" . ($context["layout"] ?? null)) . ".html.twig");
            // line 37
            echo "        ";
            $__internal_compile_0 = null;
            try {
                $__internal_compile_0 =                 ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                    $includeTemplate = $finder->find(($context["template"] ?? null));

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/product/card/box.html.twig", 37);
                })());
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_compile_0) {
                $__internal_compile_0->display($context);
            }
            // line 38
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/box.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  123 => 38,  106 => 37,  103 => 36,  100 => 35,  97 => 34,  94 => 33,  91 => 32,  88 => 31,  85 => 30,  82 => 29,  79 => 28,  77 => 27,  74 => 26,  71 => 25,  68 => 18,  66 => 17,  63 => 16,  61 => 9,  58 => 8,  55 => 7,  52 => 6,  50 => 5,  47 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/product/card/box.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/product/card/box.html.twig");
    }
}
