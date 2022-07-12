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

/* @Storefront/storefront/component/review/rating.html.twig */
class __TwigTemplate_872e0e5ed79bd5e99d064815120aaba94ef14756fbbb923eef399c8517740f79 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_review_rating' => [$this, 'block_component_review_rating'],
            'component_review_rating_output' => [$this, 'block_component_review_rating_output'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_review_rating', $context, $blocks);
    }

    public function block_component_review_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["full"] = twig_round(($context["points"] ?? null), 0, "floor");
        // line 3
        echo "    ";
        $context["left"] = twig_round(((($context["points"] ?? null) - ($context["full"] ?? null)) * 4));
        // line 4
        echo "    ";
        $context["left"] = (($context["left"] ?? null) / 4);
        // line 5
        echo "
    ";
        // line 6
        if ((1 === twig_compare(($context["left"] ?? null), 0))) {
            // line 7
            echo "        ";
            $context["half"] = 1;
            // line 8
            echo "    ";
        }
        // line 9
        echo "
    ";
        // line 10
        $context["blank"] = ((5 - ($context["full"] ?? null)) - ($context["half"] ?? null));
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('component_review_rating_output', $context, $blocks);
    }

    public function block_component_review_rating_output($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "        ";
        // line 14
        echo "        ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 15
            echo "            <div class=\"product-review-rating\">
        ";
        } else {
            // line 17
            echo "            <span class=\"product-review-rating\">
        ";
        }
        // line 19
        echo "
            ";
        // line 20
        if ((1 === twig_compare(($context["full"] ?? null), 0))) {
            // line 21
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["full"] ?? null)));
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
            foreach ($context['_seq'] as $context["_key"] => $context["star"]) {
                // line 22
                echo "                    ";
                $this->loadTemplate("@Storefront/storefront/component/review/point.html.twig", "@Storefront/storefront/component/review/rating.html.twig", 22)->display(twig_array_merge($context, ["type" => "full"]));
                // line 25
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['star'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            ";
        }
        // line 27
        echo "
            ";
        // line 28
        if (($context["half"] ?? null)) {
            // line 29
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/component/review/point.html.twig", "@Storefront/storefront/component/review/rating.html.twig", 29)->display(twig_array_merge($context, ["type" => "half"]));
            // line 32
            echo "            ";
        }
        // line 33
        echo "
            ";
        // line 34
        if ((1 === twig_compare(($context["blank"] ?? null), 0))) {
            // line 35
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["blank"] ?? null)));
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
            foreach ($context['_seq'] as $context["_key"] => $context["star"]) {
                // line 36
                echo "                    ";
                $this->loadTemplate("@Storefront/storefront/component/review/point.html.twig", "@Storefront/storefront/component/review/rating.html.twig", 36)->display(twig_array_merge($context, ["type" => "blank"]));
                // line 39
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['star'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "            ";
        }
        // line 41
        echo "        ";
        // line 42
        echo "        ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 43
            echo "            </div>
        ";
        } else {
            // line 45
            echo "            </span>
        ";
        }
        // line 47
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/review/rating.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  204 => 47,  200 => 45,  196 => 43,  193 => 42,  191 => 41,  188 => 40,  174 => 39,  171 => 36,  153 => 35,  151 => 34,  148 => 33,  145 => 32,  142 => 29,  140 => 28,  137 => 27,  134 => 26,  120 => 25,  117 => 22,  99 => 21,  97 => 20,  94 => 19,  90 => 17,  86 => 15,  83 => 14,  81 => 13,  74 => 12,  71 => 11,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  58 => 6,  55 => 5,  52 => 4,  49 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/review/rating.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/review/rating.html.twig");
    }
}
