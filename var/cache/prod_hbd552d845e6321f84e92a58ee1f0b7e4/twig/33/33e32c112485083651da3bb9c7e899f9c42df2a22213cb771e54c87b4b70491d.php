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

/* @Storefront/storefront/component/pagination.html.twig */
class __TwigTemplate_2a2e69b775e245903654f0735e1b1e9ec4bebfdba8bba2de5ffdfd8cd3fb9e89 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_pagination_nav' => [$this, 'block_component_pagination_nav'],
            'component_pagination' => [$this, 'block_component_pagination'],
            'component_pagination_first' => [$this, 'block_component_pagination_first'],
            'component_pagination_first_input' => [$this, 'block_component_pagination_first_input'],
            'component_pagination_first_label' => [$this, 'block_component_pagination_first_label'],
            'component_pagination_first_link' => [$this, 'block_component_pagination_first_link'],
            'component_pagination_prev' => [$this, 'block_component_pagination_prev'],
            'component_pagination_prev_input' => [$this, 'block_component_pagination_prev_input'],
            'component_pagination_prev_label' => [$this, 'block_component_pagination_prev_label'],
            'component_pagination_prev_link' => [$this, 'block_component_pagination_prev_link'],
            'component_pagination_prev_icon' => [$this, 'block_component_pagination_prev_icon'],
            'component_pagination_loop' => [$this, 'block_component_pagination_loop'],
            'component_pagination_item' => [$this, 'block_component_pagination_item'],
            'component_pagination_item_input' => [$this, 'block_component_pagination_item_input'],
            'component_pagination_item_label' => [$this, 'block_component_pagination_item_label'],
            'component_pagination_item_link' => [$this, 'block_component_pagination_item_link'],
            'component_pagination_item_text' => [$this, 'block_component_pagination_item_text'],
            'component_pagination_next' => [$this, 'block_component_pagination_next'],
            'component_pagination_next_input' => [$this, 'block_component_pagination_next_input'],
            'component_pagination_next_label' => [$this, 'block_component_pagination_next_label'],
            'component_pagination_next_link' => [$this, 'block_component_pagination_next_link'],
            'component_pagination_next_icon' => [$this, 'block_component_pagination_next_icon'],
            'component_pagination_last' => [$this, 'block_component_pagination_last'],
            'component_pagination_last_input' => [$this, 'block_component_pagination_last_input'],
            'component_pagination_last_label' => [$this, 'block_component_pagination_last_label'],
            'component_pagination_last_link' => [$this, 'block_component_pagination_last_link'],
            'component_pagination_last_icon' => [$this, 'block_component_pagination_last_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_pagination_nav', $context, $blocks);
    }

    public function block_component_pagination_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["currentPage"] = twig_round(((sw_get_attribute($this->env, $this->source, ($context["criteria"] ?? null), "offset", [], "any", false, false, false, 2) + 1) / sw_get_attribute($this->env, $this->source, ($context["criteria"] ?? null), "limit", [], "any", false, false, false, 2)), 0, "ceil");
        // line 3
        echo "    ";
        $context["totalEntities"] = ((($context["total"] ?? null)) ? (($context["total"] ?? null)) : (sw_get_attribute($this->env, $this->source, ($context["entities"] ?? null), "total", [], "any", false, false, false, 3)));
        // line 4
        echo "    ";
        $context["totalPages"] = twig_round((($context["totalEntities"] ?? null) / sw_get_attribute($this->env, $this->source, ($context["criteria"] ?? null), "limit", [], "any", false, false, false, 4)), 0, "ceil");
        // line 5
        echo "
    ";
        // line 6
        $context["paginationSuffix"] = "";
        // line 7
        echo "    ";
        // line 8
        echo "    ";
        if (($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0") && ($context["paginationLocation"] ?? null))) {
            // line 9
            echo "        ";
            $context["paginationSuffix"] = ("-" . ($context["paginationLocation"] ?? null));
            // line 10
            echo "    ";
        }
        // line 11
        echo "
    ";
        // line 12
        if ((1 === twig_compare(($context["totalPages"] ?? null), 1))) {
            // line 13
            echo "        <nav aria-label=\"pagination\" class=\"pagination-nav\">
            ";
            // line 14
            $this->displayBlock('component_pagination', $context, $blocks);
            // line 161
            echo "        </nav>
    ";
        }
    }

    // line 14
    public function block_component_pagination($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "            <ul class=\"pagination\">
                ";
        // line 16
        $this->displayBlock('component_pagination_first', $context, $blocks);
        // line 37
        echo "
                ";
        // line 38
        $this->displayBlock('component_pagination_prev', $context, $blocks);
        // line 61
        echo "
                ";
        // line 62
        $this->displayBlock('component_pagination_loop', $context, $blocks);
        // line 108
        echo "
                ";
        // line 109
        $this->displayBlock('component_pagination_next', $context, $blocks);
        // line 132
        echo "
                ";
        // line 133
        $this->displayBlock('component_pagination_last', $context, $blocks);
        // line 159
        echo "            </ul>
        ";
    }

    // line 16
    public function block_component_pagination_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                    <li class=\"page-item page-first";
        if ((0 === twig_compare(($context["currentPage"] ?? null), 1))) {
            echo " disabled";
        }
        echo "\">
                        ";
        // line 18
        $this->displayBlock('component_pagination_first_input', $context, $blocks);
        // line 27
        echo "
                        ";
        // line 28
        $this->displayBlock('component_pagination_first_label', $context, $blocks);
        // line 35
        echo "                    </li>
                ";
    }

    // line 18
    public function block_component_pagination_first_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                            <input type=\"radio\"
                                   ";
        // line 20
        if ((0 === twig_compare(($context["currentPage"] ?? null), 1))) {
            echo "disabled=\"disabled\"";
        }
        // line 21
        echo "                                   name=\"p\"
                                   id=\"p-first";
        // line 22
        echo sw_escape_filter($this->env, ($context["paginationSuffix"] ?? null), "html", null, true);
        echo "\"
                                   value=\"1\"
                                   class=\"d-none\"
                                   title=\"pagination\">
                        ";
    }

    // line 28
    public function block_component_pagination_first_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "                            <label class=\"page-link\" for=\"p-first";
        echo sw_escape_filter($this->env, ($context["paginationSuffix"] ?? null), "html", null, true);
        echo "\">
                                ";
        // line 30
        $this->displayBlock('component_pagination_first_link', $context, $blocks);
        // line 33
        echo "                            </label>
                        ";
    }

    // line 30
    public function block_component_pagination_first_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                                    ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/pagination.html.twig", 31);
        })())->display(twig_array_merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-double-left"]));
        // line 32
        echo "                                ";
    }

    // line 38
    public function block_component_pagination_prev($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "                    <li class=\"page-item page-prev";
        if ((0 === twig_compare(($context["currentPage"] ?? null), 1))) {
            echo " disabled";
        }
        echo "\">
                        ";
        // line 40
        $this->displayBlock('component_pagination_prev_input', $context, $blocks);
        // line 49
        echo "
                        ";
        // line 50
        $this->displayBlock('component_pagination_prev_label', $context, $blocks);
        // line 59
        echo "                    </li>
                ";
    }

    // line 40
    public function block_component_pagination_prev_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                            <input type=\"radio\"
                                   ";
        // line 42
        if ((0 === twig_compare(($context["currentPage"] ?? null), 1))) {
            echo "disabled=\"disabled\"";
        }
        // line 43
        echo "                                   name=\"p\"
                                   id=\"p-prev";
        // line 44
        echo sw_escape_filter($this->env, ($context["paginationSuffix"] ?? null), "html", null, true);
        echo "\"
                                   value=\"";
        // line 45
        echo sw_escape_filter($this->env, (($context["currentPage"] ?? null) - 1), "html", null, true);
        echo "\"
                                   class=\"d-none\"
                                   title=\"pagination\">
                        ";
    }

    // line 50
    public function block_component_pagination_prev_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "                            <label class=\"page-link\" for=\"p-prev";
        echo sw_escape_filter($this->env, ($context["paginationSuffix"] ?? null), "html", null, true);
        echo "\">
                                ";
        // line 52
        $this->displayBlock('component_pagination_prev_link', $context, $blocks);
        // line 57
        echo "                            </label>
                        ";
    }

    // line 52
    public function block_component_pagination_prev_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "                                    ";
        $this->displayBlock('component_pagination_prev_icon', $context, $blocks);
        // line 56
        echo "                                ";
    }

    // line 53
    public function block_component_pagination_prev_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/pagination.html.twig", 54);
        })())->display(twig_array_merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-left"]));
        // line 55
        echo "                                    ";
    }

    // line 62
    public function block_component_pagination_loop($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "                    ";
        $context["start"] = (($context["currentPage"] ?? null) - 2);
        // line 64
        echo "                    ";
        if ((0 >= twig_compare(($context["start"] ?? null), 0))) {
            // line 65
            echo "                        ";
            $context["start"] = (($context["currentPage"] ?? null) - 1);
            // line 66
            echo "                        ";
            if ((0 >= twig_compare(($context["start"] ?? null), 0))) {
                // line 67
                echo "                            ";
                $context["start"] = ($context["currentPage"] ?? null);
                // line 68
                echo "                        ";
            }
            // line 69
            echo "                    ";
        }
        // line 70
        echo "
                    ";
        // line 71
        $context["end"] = (($context["start"] ?? null) + 4);
        // line 72
        echo "
                    ";
        // line 73
        if ((1 === twig_compare(($context["end"] ?? null), ($context["totalPages"] ?? null)))) {
            // line 74
            echo "                        ";
            $context["end"] = ($context["totalPages"] ?? null);
            // line 75
            echo "                    ";
        }
        // line 76
        echo "
                    ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["start"] ?? null), ($context["end"] ?? null)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 78
            echo "
                        ";
            // line 79
            $context["isActive"] = (0 === twig_compare(($context["currentPage"] ?? null), $context["page"]));
            // line 80
            echo "
                        ";
            // line 81
            $this->displayBlock('component_pagination_item', $context, $blocks);
            // line 105
            echo "
                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                ";
    }

    // line 81
    public function block_component_pagination_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "                            <li class=\"page-item";
        if (($context["isActive"] ?? null)) {
            echo " active";
        }
        echo "\">
                                ";
        // line 83
        $this->displayBlock('component_pagination_item_input', $context, $blocks);
        // line 92
        echo "
                                ";
        // line 93
        $this->displayBlock('component_pagination_item_label', $context, $blocks);
        // line 103
        echo "                            </li>
                        ";
    }

    // line 83
    public function block_component_pagination_item_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "                                    <input type=\"radio\"
                                           name=\"p\"
                                           id=\"p";
        // line 86
        echo sw_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        echo sw_escape_filter($this->env, ($context["paginationSuffix"] ?? null), "html", null, true);
        echo "\"
                                           value=\"";
        // line 87
        echo sw_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        echo "\"
                                           class=\"d-none\"
                                           title=\"pagination\"
                                           ";
        // line 90
        if (($context["isActive"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo ">
                                ";
    }

    // line 93
    public function block_component_pagination_item_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        echo "                                    <label class=\"page-link\"
                                           for=\"p";
        // line 95
        echo sw_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        echo sw_escape_filter($this->env, ($context["paginationSuffix"] ?? null), "html", null, true);
        echo "\">
                                        ";
        // line 96
        $this->displayBlock('component_pagination_item_link', $context, $blocks);
        // line 101
        echo "                                    </label>
                                ";
    }

    // line 96
    public function block_component_pagination_item_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "                                            ";
        $this->displayBlock('component_pagination_item_text', $context, $blocks);
        // line 100
        echo "                                        ";
    }

    // line 97
    public function block_component_pagination_item_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "                                                ";
        echo sw_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        echo "
                                            ";
    }

    // line 109
    public function block_component_pagination_next($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 110
        echo "                    <li class=\"page-item page-next";
        if ((0 === twig_compare(($context["currentPage"] ?? null), ($context["totalPages"] ?? null)))) {
            echo " disabled";
        }
        echo "\">
                        ";
        // line 111
        $this->displayBlock('component_pagination_next_input', $context, $blocks);
        // line 120
        echo "
                        ";
        // line 121
        $this->displayBlock('component_pagination_next_label', $context, $blocks);
        // line 130
        echo "                    </li>
                ";
    }

    // line 111
    public function block_component_pagination_next_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 112
        echo "                            <input type=\"radio\"
                                   ";
        // line 113
        if ((0 === twig_compare(($context["currentPage"] ?? null), ($context["totalPages"] ?? null)))) {
            echo "disabled=\"disabled\"";
        }
        // line 114
        echo "                                   name=\"p\"
                                   id=\"p-next";
        // line 115
        echo sw_escape_filter($this->env, ($context["paginationSuffix"] ?? null), "html", null, true);
        echo "\"
                                   value=\"";
        // line 116
        echo sw_escape_filter($this->env, (($context["currentPage"] ?? null) + 1), "html", null, true);
        echo "\"
                                   class=\"d-none\"
                                   title=\"pagination\">
                        ";
    }

    // line 121
    public function block_component_pagination_next_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "                            <label class=\"page-link\" for=\"p-next";
        echo sw_escape_filter($this->env, ($context["paginationSuffix"] ?? null), "html", null, true);
        echo "\">
                                ";
        // line 123
        $this->displayBlock('component_pagination_next_link', $context, $blocks);
        // line 128
        echo "                            </label>
                        ";
    }

    // line 123
    public function block_component_pagination_next_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        echo "                                    ";
        $this->displayBlock('component_pagination_next_icon', $context, $blocks);
        // line 127
        echo "                                ";
    }

    // line 124
    public function block_component_pagination_next_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 125
        echo "                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/pagination.html.twig", 125);
        })())->display(twig_array_merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-right"]));
        // line 126
        echo "                                    ";
    }

    // line 133
    public function block_component_pagination_last($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "                    <li class=\"page-item page-last";
        if ((0 === twig_compare(($context["currentPage"] ?? null), ($context["totalPages"] ?? null)))) {
            echo " disabled";
        }
        echo "\">
                        ";
        // line 135
        $this->displayBlock('component_pagination_last_input', $context, $blocks);
        // line 144
        echo "
                        ";
        // line 145
        $this->displayBlock('component_pagination_last_label', $context, $blocks);
        // line 157
        echo "                    </li>
                ";
    }

    // line 135
    public function block_component_pagination_last_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 136
        echo "                            <input type=\"radio\"
                                   ";
        // line 137
        if ((0 === twig_compare(($context["currentPage"] ?? null), ($context["totalPages"] ?? null)))) {
            echo "disabled=\"disabled\"";
        }
        // line 138
        echo "                                   name=\"p\"
                                   id=\"p-last";
        // line 139
        echo sw_escape_filter($this->env, ($context["paginationSuffix"] ?? null), "html", null, true);
        echo "\"
                                   value=\"";
        // line 140
        echo sw_escape_filter($this->env, ($context["totalPages"] ?? null), "html", null, true);
        echo "\"
                                   class=\"d-none\"
                                   title=\"pagination\">
                        ";
    }

    // line 145
    public function block_component_pagination_last_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        echo "                            <label class=\"page-link\" for=\"p-last";
        echo sw_escape_filter($this->env, ($context["paginationSuffix"] ?? null), "html", null, true);
        echo "\">
                                ";
        // line 147
        $this->displayBlock('component_pagination_last_link', $context, $blocks);
        // line 155
        echo "                            </label>
                        ";
    }

    // line 147
    public function block_component_pagination_last_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "                                    ";
        $this->displayBlock('component_pagination_last_icon', $context, $blocks);
        // line 154
        echo "                                ";
    }

    // line 148
    public function block_component_pagination_last_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        echo "                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/pagination.html.twig", 149);
        })())->display(twig_array_merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-double-right"]));
        // line 153
        echo "                                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/pagination.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  681 => 153,  672 => 149,  668 => 148,  664 => 154,  661 => 148,  657 => 147,  652 => 155,  650 => 147,  645 => 146,  641 => 145,  633 => 140,  629 => 139,  626 => 138,  622 => 137,  619 => 136,  615 => 135,  610 => 157,  608 => 145,  605 => 144,  603 => 135,  596 => 134,  592 => 133,  588 => 126,  579 => 125,  575 => 124,  571 => 127,  568 => 124,  564 => 123,  559 => 128,  557 => 123,  552 => 122,  548 => 121,  540 => 116,  536 => 115,  533 => 114,  529 => 113,  526 => 112,  522 => 111,  517 => 130,  515 => 121,  512 => 120,  510 => 111,  503 => 110,  499 => 109,  492 => 98,  488 => 97,  484 => 100,  481 => 97,  477 => 96,  472 => 101,  470 => 96,  465 => 95,  462 => 94,  458 => 93,  450 => 90,  444 => 87,  439 => 86,  435 => 84,  431 => 83,  426 => 103,  424 => 93,  421 => 92,  419 => 83,  412 => 82,  408 => 81,  404 => 107,  389 => 105,  387 => 81,  384 => 80,  382 => 79,  379 => 78,  362 => 77,  359 => 76,  356 => 75,  353 => 74,  351 => 73,  348 => 72,  346 => 71,  343 => 70,  340 => 69,  337 => 68,  334 => 67,  331 => 66,  328 => 65,  325 => 64,  322 => 63,  318 => 62,  314 => 55,  305 => 54,  301 => 53,  297 => 56,  294 => 53,  290 => 52,  285 => 57,  283 => 52,  278 => 51,  274 => 50,  266 => 45,  262 => 44,  259 => 43,  255 => 42,  252 => 41,  248 => 40,  243 => 59,  241 => 50,  238 => 49,  236 => 40,  229 => 39,  225 => 38,  221 => 32,  212 => 31,  208 => 30,  203 => 33,  201 => 30,  196 => 29,  192 => 28,  183 => 22,  180 => 21,  176 => 20,  173 => 19,  169 => 18,  164 => 35,  162 => 28,  159 => 27,  157 => 18,  150 => 17,  146 => 16,  141 => 159,  139 => 133,  136 => 132,  134 => 109,  131 => 108,  129 => 62,  126 => 61,  124 => 38,  121 => 37,  119 => 16,  116 => 15,  112 => 14,  106 => 161,  104 => 14,  101 => 13,  99 => 12,  96 => 11,  93 => 10,  90 => 9,  87 => 8,  85 => 7,  83 => 6,  80 => 5,  77 => 4,  74 => 3,  71 => 2,  64 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/pagination.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/pagination.html.twig");
    }
}
