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

/* @Storefront/storefront/utilities/thumbnail.html.twig */
class __TwigTemplate_0f013657c4b27623220822272651a51af7785478c9a64c708c48d0760d48d115 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        if ( !array_key_exists("load", $context)) {
            // line 3
            echo "    ";
            $context["load"] = true;
        }
        // line 5
        echo "
";
        // line 8
        if ( !array_key_exists("loadOriginalImage", $context)) {
            // line 9
            echo "    ";
            $context["loadOriginalImage"] = false;
        }
        // line 11
        echo "
";
        // line 14
        if (($context["autoColumnSizes"] ?? null)) {
            // line 15
            echo "    ";
            $context["autoColumnSizes"] = true;
        }
        // line 17
        echo "
";
        // line 18
        if ( !array_key_exists("attributes", $context)) {
            // line 19
            echo "    ";
            $context["attributes"] = [];
        }
        // line 21
        echo "
";
        // line 22
        if (( !sw_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "alt", [], "any", true, true, false, 22) && sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "translated", [], "any", false, true, false, 22), "alt", [], "any", true, true, false, 22))) {
            // line 23
            echo "    ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["alt" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "translated", [], "any", false, false, false, 23), "alt", [], "any", false, false, false, 23)]);
        }
        // line 25
        echo "
";
        // line 26
        if (( !sw_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "title", [], "any", true, true, false, 26) && sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "translated", [], "any", false, true, false, 26), "title", [], "any", true, true, false, 26))) {
            // line 27
            echo "    ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["title" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "translated", [], "any", false, false, false, 27), "title", [], "any", false, false, false, 27)]);
        }
        // line 29
        echo "
";
        // line 31
        if ((1 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 31)), 0))) {
            // line 32
            echo "    ";
            if (((($context["autoColumnSizes"] ?? null) && ($context["columns"] ?? null)) &&  !array_key_exists("sizes", $context))) {
                // line 33
                echo "        ";
                // line 34
                echo "        ";
                $context["sizes"] = ["xs" => (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.sm") - 1) . "px"), "sm" => (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md") - 1) . "px"), "md" => (twig_round((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg") - 1) /                 // line 37
($context["columns"] ?? null)), 0, "ceil") . "px"), "lg" => (twig_round((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xl") - 1) /                 // line 38
($context["columns"] ?? null)), 0, "ceil") . "px")];
                // line 40
                echo "
        ";
                // line 42
                echo "        ";
                if ((0 === twig_compare(($context["layout"] ?? null), "full-width"))) {
                    // line 43
                    echo "            ";
                    $context["container"] = 100;
                    // line 44
                    echo "            ";
                    $context["sizes"] = twig_array_merge(($context["sizes"] ?? null), ["xl" => (twig_round((($context["container"] ?? null) / ($context["columns"] ?? null)), 0, "ceil") . "vw")]);
                    // line 45
                    echo "        ";
                } else {
                    // line 46
                    echo "            ";
                    $context["container"] = 1360;
                    // line 47
                    echo "            ";
                    $context["sizes"] = twig_array_merge(($context["sizes"] ?? null), ["xl" => (twig_round((($context["container"] ?? null) / ($context["columns"] ?? null)), 0, "ceil") . "px")]);
                    // line 48
                    echo "        ";
                }
                // line 49
                echo "    ";
            }
            // line 50
            echo "
    ";
            // line 51
            $context["thumbnails"] = twig_reverse_filter($this->env, twig_sort_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 51)));
            // line 52
            echo "
    ";
            // line 54
            echo "    ";
            ob_start(function () { return ''; });
            ob_start(function () { return ''; });
            // line 55
            echo "        ";
            if (($context["loadOriginalImage"] ?? null)) {
                echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
                echo " ";
                echo sw_escape_filter($this->env, (sw_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 55) + 1), "html", null, true);
                echo "w, ";
            }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["thumbnails"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["thumbnail"]) {
                echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl(sw_get_attribute($this->env, $this->source, $context["thumbnail"], "url", [], "any", false, false, false, 55)), "html", null, true);
                echo " ";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["thumbnail"], "width", [], "any", false, false, false, 55), "html", null, true);
                echo "w";
                if ( !sw_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 55)) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thumbnail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "    ";
            $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 54
            echo twig_spaceless($___internal_parse_1_);
            $context["srcsetValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 57
            echo "
    ";
            // line 59
            echo "    ";
            ob_start(function () { return ''; });
            ob_start(function () { return ''; });
            // line 60
            echo "        ";
            $context["sizeFallback"] = 100;
            // line 61
            echo "
        ";
            // line 63
            echo "        ";
            if ((($context["autoColumnSizes"] ?? null) && ($context["columns"] ?? null))) {
                // line 64
                echo "            ";
                $context["sizeFallback"] = twig_round((($context["sizeFallback"] ?? null) / ($context["columns"] ?? null)), 0, "ceil");
                // line 65
                echo "        ";
            }
            // line 66
            echo "
        ";
            // line 67
            $context["breakpoint"] = ["xs" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xs"), "sm" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.sm"), "md" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md"), "lg" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg"), "xl" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xl")];
            // line 74
            echo "
        ";
            // line 75
            if ((1 === twig_compare(sw_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 75), twig_first($this->env, twig_reverse_filter($this->env, ($context["breakpoint"] ?? null)))))) {
                // line 76
                echo "            ";
                // line 77
                echo "            ";
                $context["maxWidth"] = sw_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 77);
                // line 78
                echo "        ";
            }
            // line 79
            echo "
        ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["breakpoint"] ?? null)));
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
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                echo "(min-width: ";
                echo sw_escape_filter($this->env, $context["value"], "html", null, true);
                echo "px) ";
                echo sw_escape_filter($this->env, (($__internal_compile_0 = ($context["sizes"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), "html", null, true);
                if ( !sw_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 80)) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ", ";
            echo sw_escape_filter($this->env, ($context["sizeFallback"] ?? null), "html", null, true);
            echo "vw
    ";
            $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 59
            echo twig_spaceless($___internal_parse_2_);
            $context["sizesValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        }
        // line 83
        echo "<img ";
        if (($context["load"] ?? null)) {
            echo "src=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
            echo "\" ";
        } else {
            echo "data-src=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
            echo "\" ";
        }
        // line 84
        echo "    ";
        if ((1 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 84)), 0))) {
            // line 85
            echo "        ";
            if (($context["load"] ?? null)) {
                echo "srcset=\"";
                echo sw_escape_filter($this->env, ($context["srcsetValue"] ?? null), "html", null, true);
                echo "\" ";
            } else {
                echo "data-srcset=\"";
                echo sw_escape_filter($this->env, ($context["srcsetValue"] ?? null), "html", null, true);
                echo "\" ";
            }
            // line 86
            echo "        ";
            if ((($__internal_compile_1 = ($context["sizes"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["default"] ?? null) : null)) {
                // line 87
                echo "        sizes=\"";
                echo sw_escape_filter($this->env, (($__internal_compile_2 = ($context["sizes"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["default"] ?? null) : null), "html", null, true);
                echo "\"
        ";
            } elseif ((1 === twig_compare(twig_length_filter($this->env,             // line 88
($context["sizes"] ?? null)), 0))) {
                // line 89
                echo "        sizes=\"";
                echo sw_escape_filter($this->env, ($context["sizesValue"] ?? null), "html", null, true);
                echo "\"
        ";
            }
            // line 91
            echo "    ";
        }
        // line 92
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            if ((0 !== twig_compare($context["value"], ""))) {
                echo " ";
                echo sw_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo sw_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "/>
";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/utilities/thumbnail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 93,  323 => 92,  320 => 91,  314 => 89,  312 => 88,  307 => 87,  304 => 86,  293 => 85,  290 => 84,  279 => 83,  275 => 59,  234 => 80,  231 => 79,  228 => 78,  225 => 77,  223 => 76,  221 => 75,  218 => 74,  216 => 67,  213 => 66,  210 => 65,  207 => 64,  204 => 63,  201 => 61,  198 => 60,  194 => 59,  191 => 57,  188 => 54,  185 => 56,  142 => 55,  138 => 54,  135 => 52,  133 => 51,  130 => 50,  127 => 49,  124 => 48,  121 => 47,  118 => 46,  115 => 45,  112 => 44,  109 => 43,  106 => 42,  103 => 40,  101 => 38,  100 => 37,  98 => 34,  96 => 33,  93 => 32,  91 => 31,  88 => 29,  84 => 27,  82 => 26,  79 => 25,  75 => 23,  73 => 22,  70 => 21,  66 => 19,  64 => 18,  61 => 17,  57 => 15,  55 => 14,  52 => 11,  48 => 9,  46 => 8,  43 => 5,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/utilities/thumbnail.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/utilities/thumbnail.html.twig");
    }
}
