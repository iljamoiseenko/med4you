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

/* @Storefront/storefront/component/review/point.html.twig */
class __TwigTemplate_1f565f7df316b3e2039bb6c6b0ba4dc170edc87170c4328accbf982d96663769 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_review_point' => [$this, 'block_component_review_point'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_review_point', $context, $blocks);
    }

    public function block_component_review_point($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if ( !array_key_exists("size", $context)) {
            // line 3
            echo "        ";
            $context["size"] = "xs";
            // line 4
            echo "    ";
        }
        // line 5
        echo "
    ";
        // line 7
        echo "    ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 8
            echo "        <div class=\"product-review-point\">
    ";
        } else {
            // line 10
            echo "        <span class=\"product-review-point\">
    ";
        }
        // line 12
        echo "        ";
        if ((0 === twig_compare(($context["type"] ?? null), "half"))) {
            // line 13
            echo "            <div class=\"point-container\">
                <div class=\"point-rating point-partial-placeholder\">
                    ";
            // line 15
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/review/point.html.twig", 15);
            })())->display(twig_array_merge($context, ["color" => "light", "size" => ($context["size"] ?? null), "pack" => "solid", "name" => "star"]));
            // line 16
            echo "                </div>
                <div class=\"point-rating point-partial\" style=\"clip-path: inset(0 ";
            // line 17
            echo sw_escape_filter($this->env, ((1 - ($context["left"] ?? null)) * 100), "html", null, true);
            echo "% 0 0)\">
                    ";
            // line 18
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/review/point.html.twig", 18);
            })())->display(twig_array_merge($context, ["color" => "review", "size" => ($context["size"] ?? null), "pack" => "solid", "name" => "star"]));
            // line 19
            echo "                </div>
            </div>
        ";
        } elseif ((0 === twig_compare(        // line 21
($context["type"] ?? null), "blank"))) {
            // line 22
            echo "            <div class=\"point-container\">
                <div class=\"point-rating point-blank\">
                    ";
            // line 24
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/review/point.html.twig", 24);
            })())->display(twig_array_merge($context, ["size" => ($context["size"] ?? null), "pack" => "solid", "name" => "star"]));
            // line 25
            echo "                </div>
            </div>
        ";
        } else {
            // line 28
            echo "            <div class=\"point-container\">
                <div class=\"point-rating point-full\">
                    ";
            // line 30
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/review/point.html.twig", 30);
            })())->display(twig_array_merge($context, ["color" => "review", "size" => ($context["size"] ?? null), "pack" => "solid", "name" => "star"]));
            // line 31
            echo "                </div>
            </div>
        ";
        }
        // line 34
        echo "    ";
        // line 35
        echo "    ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 36
            echo "        </div>
    ";
        } else {
            // line 38
            echo "        </span>
        ";
        }
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/review/point.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  147 => 38,  143 => 36,  140 => 35,  138 => 34,  133 => 31,  125 => 30,  121 => 28,  116 => 25,  108 => 24,  104 => 22,  102 => 21,  98 => 19,  90 => 18,  86 => 17,  83 => 16,  75 => 15,  71 => 13,  68 => 12,  64 => 10,  60 => 8,  57 => 7,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/review/point.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/review/point.html.twig");
    }
}
