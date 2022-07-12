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

/* @Storefront/storefront/layout/navigation/categories.html.twig */
class __TwigTemplate_5051c253865855a346477fec618e04ddae784cf3787f7d883ac12f7eabad5e6a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_categories' => [$this, 'block_layout_navigation_categories'],
            'layout_navigation_categories_item' => [$this, 'block_layout_navigation_categories_item'],
            'layout_navigation_categories_item_link' => [$this, 'block_layout_navigation_categories_item_link'],
            'layout_navigation_categories_recoursion' => [$this, 'block_layout_navigation_categories_recoursion'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_navigation_categories', $context, $blocks);
    }

    public function block_layout_navigation_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["navigationMaxDepth"] = 3;
        // line 3
        echo "
    ";
        // line 4
        if ( !($context["level"] ?? null)) {
            // line 5
            echo "        ";
            $context["level"] = 0;
            // line 6
            echo "    ";
        }
        // line 7
        echo "    ";
        $context["activeId"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 7), "navigation", [], "any", false, false, false, 7), "active", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7);
        // line 8
        echo "
    ";
        // line 9
        $context["activePath"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 9), "navigation", [], "any", false, false, false, 9), "active", [], "any", false, false, false, 9), "path", [], "any", false, false, false, 9);
        // line 10
        echo "
    <div class=\"";
        // line 11
        if ((0 === twig_compare(($context["level"] ?? null), 0))) {
            echo "row ";
        }
        echo "navigation-flyout-categories is-level-";
        echo sw_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigationTree"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 13
            echo "            ";
            $context["id"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13);
            // line 14
            echo "            ";
            $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 14), "translated", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14);
            // line 15
            echo "            ";
            $context["link"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 15));
            // line 16
            echo "
            ";
            // line 17
            $this->displayBlock('layout_navigation_categories_item', $context, $blocks);
            // line 49
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </div>
";
    }

    // line 17
    public function block_layout_navigation_categories_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "                <div class=\"";
        if ((0 === twig_compare(($context["level"] ?? null), 0))) {
            if (($context["navigationMedia"] ?? null)) {
                echo "col-4 ";
            } else {
                echo "col-3 ";
            }
        }
        echo "navigation-flyout-col\">
                    ";
        // line 19
        $this->displayBlock('layout_navigation_categories_item_link', $context, $blocks);
        // line 37
        echo "
                    ";
        // line 38
        $this->displayBlock('layout_navigation_categories_recoursion', $context, $blocks);
        // line 47
        echo "                </div>
            ";
    }

    // line 19
    public function block_layout_navigation_categories_item_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                        ";
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 20), "type", [], "any", false, false, false, 20), "folder"))) {
            // line 21
            echo "                            <div class=\"nav-item nav-link navigation-flyout-link is-level-";
            echo sw_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            echo "\"
                                 title=\"";
            // line 22
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                <span itemprop=\"name\">";
            // line 23
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                            </div>
                        ";
        } else {
            // line 26
            echo "                            <a class=\"nav-item nav-link navigation-flyout-link is-level-";
            echo sw_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            if (((0 === twig_compare(($context["id"] ?? null), ($context["activeId"] ?? null))) || twig_in_filter(($context["id"] ?? null), ($context["activePath"] ?? null)))) {
                echo " active";
            }
            echo "\"
                               href=\"";
            // line 27
            echo sw_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\"
                               itemprop=\"url\"
                               ";
            // line 29
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 29))) {
                echo "target=\"_blank\"
                                   ";
                // line 30
                if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 30), "linkType", [], "any", false, false, false, 30), "external"))) {
                    echo "rel=\"noopener noreferrer\"";
                }
                // line 31
                echo "                               ";
            }
            // line 32
            echo "                               title=\"";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                <span itemprop=\"name\">";
            // line 33
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                            </a>
                        ";
        }
        // line 36
        echo "                    ";
    }

    // line 38
    public function block_layout_navigation_categories_recoursion($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "                        ";
        if ((-1 === twig_compare(($context["level"] ?? null), ($context["navigationMaxDepth"] ?? null)))) {
            // line 40
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/layout/navigation/categories.html.twig", "@Storefront/storefront/layout/navigation/categories.html.twig", 40)->display(twig_to_array(["navigationTree" => sw_get_attribute($this->env, $this->source,             // line 41
($context["treeItem"] ?? null), "children", [], "any", false, false, false, 41), "level" => (            // line 42
($context["level"] ?? null) + 1), "page" =>             // line 43
($context["page"] ?? null)]));
            // line 45
            echo "                        ";
        }
        // line 46
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/categories.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  235 => 46,  232 => 45,  230 => 43,  229 => 42,  228 => 41,  226 => 40,  223 => 39,  219 => 38,  215 => 36,  209 => 33,  204 => 32,  201 => 31,  197 => 30,  193 => 29,  188 => 27,  180 => 26,  174 => 23,  170 => 22,  165 => 21,  162 => 20,  158 => 19,  153 => 47,  151 => 38,  148 => 37,  146 => 19,  135 => 18,  131 => 17,  126 => 50,  112 => 49,  110 => 17,  107 => 16,  104 => 15,  101 => 14,  98 => 13,  81 => 12,  73 => 11,  70 => 10,  68 => 9,  65 => 8,  62 => 7,  59 => 6,  56 => 5,  54 => 4,  51 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/navigation/categories.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/categories.html.twig");
    }
}
