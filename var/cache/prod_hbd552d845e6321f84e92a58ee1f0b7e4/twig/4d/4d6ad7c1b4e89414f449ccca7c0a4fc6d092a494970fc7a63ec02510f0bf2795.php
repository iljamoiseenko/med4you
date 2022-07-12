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

/* @Storefront/storefront/layout/breadcrumb.html.twig */
class __TwigTemplate_7da895ef1278f9d8596eb7ba51a215b01d3b34d3be14b8177760a7bde0350457 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_breadcrumb_inner' => [$this, 'block_layout_breadcrumb_inner'],
            'layout_breadcrumb_list' => [$this, 'block_layout_breadcrumb_list'],
            'layout_breadcrumb_list_item' => [$this, 'block_layout_breadcrumb_list_item'],
            'layout_breadcrumb_placeholder' => [$this, 'block_layout_breadcrumb_placeholder'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_breadcrumb_inner', $context, $blocks);
    }

    public function block_layout_breadcrumb_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if (($context["category"] ?? null)) {
            // line 3
            echo "        ";
            $context["breadcrumbCategories"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\BuildBreadcrumbExtension']->getFullBreadcrumb($context, ($context["category"] ?? null), sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "context", [], "any", false, false, false, 3));
            // line 4
            echo "        ";
            $context["categoryId"] = sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 4);
            // line 5
            echo "
        ";
            // line 6
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
                // line 7
                echo "            ";
                $context["breadcrumbKeys"] = twig_get_array_keys_filter(($context["breadcrumbCategories"] ?? null));
                // line 8
                echo "        ";
            } else {
                // line 9
                echo "            ";
                // line 10
                echo "            ";
                $context["breadcrumb"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\BuildBreadcrumbExtension']->buildSeoBreadcrumb($context, ($context["category"] ?? null));
                // line 11
                echo "            ";
                // line 12
                echo "            ";
                $context["breadcrumbKeys"] = twig_get_array_keys_filter(($context["breadcrumb"] ?? null));
                // line 13
                echo "            ";
                // line 14
                echo "            ";
                $context["breadcrumbTypes"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\BuildBreadcrumbExtension']->buildCategoryTypes(($context["breadcrumbCategories"] ?? null));
                // line 15
                echo "        ";
            }
            // line 16
            echo "
        ";
            // line 17
            if ((1 === twig_compare(twig_length_filter($this->env, ($context["breadcrumbCategories"] ?? null)), 0))) {
                // line 18
                echo "            <nav aria-label=\"breadcrumb\">
                ";
                // line 19
                $this->displayBlock('layout_breadcrumb_list', $context, $blocks);
                // line 62
                echo "            </nav>
        ";
            }
            // line 64
            echo "    ";
        }
    }

    // line 19
    public function block_layout_breadcrumb_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                    <ol class=\"breadcrumb\"
                        itemscope
                        itemtype=\"https://schema.org/BreadcrumbList\">
                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbCategories"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumbCategory"]) {
            // line 24
            echo "                            ";
            $context["key"] = sw_get_attribute($this->env, $this->source, $context["breadcrumbCategory"], "id", [], "any", false, false, false, 24);
            // line 25
            echo "                            ";
            $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["breadcrumbCategory"], "translated", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25);
            // line 26
            echo "
                            ";
            // line 27
            $this->displayBlock('layout_breadcrumb_list_item', $context, $blocks);
            // line 51
            echo "
                            ";
            // line 52
            $this->displayBlock('layout_breadcrumb_placeholder', $context, $blocks);
            // line 59
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumbCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                    </ol>
                ";
    }

    // line 27
    public function block_layout_breadcrumb_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                                <li class=\"breadcrumb-item\"
                                    ";
        // line 29
        if ((($context["key"] ?? null) === ($context["categoryId"] ?? null))) {
            echo "aria-current=\"page\"";
        }
        // line 30
        echo "                                    itemprop=\"itemListElement\"
                                    itemscope
                                    itemtype=\"https://schema.org/ListItem\">
                                    ";
        // line 33
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["breadcrumbCategory"] ?? null), "type", [], "any", false, false, false, 33), "folder"))) {
            // line 34
            echo "                                        <div itemprop=\"item\">
                                            <div itemprop=\"name\">";
            // line 35
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</div>
                                        </div>
                                    ";
        } else {
            // line 38
            echo "                                        <a href=\"";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["breadcrumbCategory"] ?? null));
            echo "\"
                                           class=\"breadcrumb-link ";
            // line 39
            if ((($context["key"] ?? null) === ($context["categoryId"] ?? null))) {
                echo " is-active";
            }
            echo "\"
                                           title=\"";
            // line 40
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
                                           ";
            // line 41
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["breadcrumbCategory"] ?? null))) {
                echo "target=\"_blank\"";
            }
            // line 42
            echo "                                           itemprop=\"item\">
                                            <link itemprop=\"url\"
                                                  href=\"";
            // line 44
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["breadcrumbCategory"] ?? null));
            echo "\"/>
                                            <span class=\"breadcrumb-title\" itemprop=\"name\">";
            // line 45
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                                        </a>
                                    ";
        }
        // line 48
        echo "                                    <meta itemprop=\"position\" content=\"";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 48), "html", null, true);
        echo "\"/>
                                </li>
                            ";
    }

    // line 52
    public function block_layout_breadcrumb_placeholder($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "                                ";
        if ((0 !== twig_compare(($context["key"] ?? null), twig_last($this->env, ($context["breadcrumbKeys"] ?? null))))) {
            // line 54
            echo "                                    <div class=\"breadcrumb-placeholder\">
                                        ";
            // line 55
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/breadcrumb.html.twig", 55);
            })())->display(twig_array_merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-right"]));
            // line 56
            echo "                                    </div>
                                ";
        }
        // line 58
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/breadcrumb.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  256 => 58,  252 => 56,  244 => 55,  241 => 54,  238 => 53,  234 => 52,  226 => 48,  220 => 45,  216 => 44,  212 => 42,  208 => 41,  204 => 40,  198 => 39,  193 => 38,  187 => 35,  184 => 34,  182 => 33,  177 => 30,  173 => 29,  170 => 28,  166 => 27,  161 => 60,  147 => 59,  145 => 52,  142 => 51,  140 => 27,  137 => 26,  134 => 25,  131 => 24,  114 => 23,  109 => 20,  105 => 19,  100 => 64,  96 => 62,  94 => 19,  91 => 18,  89 => 17,  86 => 16,  83 => 15,  80 => 14,  78 => 13,  75 => 12,  73 => 11,  70 => 10,  68 => 9,  65 => 8,  62 => 7,  60 => 6,  57 => 5,  54 => 4,  51 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/breadcrumb.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/layout/breadcrumb.html.twig");
    }
}
