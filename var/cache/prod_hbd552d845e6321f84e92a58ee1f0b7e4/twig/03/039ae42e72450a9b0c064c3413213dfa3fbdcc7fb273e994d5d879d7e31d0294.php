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

/* @Storefront/storefront/page/product-detail/configurator.html.twig */
class __TwigTemplate_77a9a37ae01470ed4e818131fdd72a5c3aff7269fdf0a7ab965054d863db8ed1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_configurator' => [$this, 'block_page_product_detail_configurator'],
            'page_product_detail_configurator_form' => [$this, 'block_page_product_detail_configurator_form'],
            'page_product_detail_configurator_csrf' => [$this, 'block_page_product_detail_configurator_csrf'],
            'page_product_detail_configurator_groups' => [$this, 'block_page_product_detail_configurator_groups'],
            'page_product_detail_configurator_group' => [$this, 'block_page_product_detail_configurator_group'],
            'page_product_detail_configurator_group_title' => [$this, 'block_page_product_detail_configurator_group_title'],
            'page_product_detail_configurator_group_title_text' => [$this, 'block_page_product_detail_configurator_group_title_text'],
            'page_product_detail_configurator_options' => [$this, 'block_page_product_detail_configurator_options'],
            'page_product_detail_configurator_option' => [$this, 'block_page_product_detail_configurator_option'],
            'page_product_detail_configurator_option_radio' => [$this, 'block_page_product_detail_configurator_option_radio'],
            'page_product_detail_configurator_option_radio_label' => [$this, 'block_page_product_detail_configurator_option_radio_label'],
            'page_product_detail_configurator_option_radio_label_media' => [$this, 'block_page_product_detail_configurator_option_radio_label_media'],
            'page_product_detail_configurator_option_radio_label_text' => [$this, 'block_page_product_detail_configurator_option_radio_label_text'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_product_detail_configurator', $context, $blocks);
    }

    public function block_page_product_detail_configurator($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"product-detail-configurator\">
        ";
        // line 3
        $context["config"] = ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("frontend.detail.switch", ["productId" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 4
($context["page"] ?? null), "product", [], "any", false, false, false, 4), "parentId", [], "any", false, false, false, 4)])];
        // line 6
        echo "
        ";
        // line 7
        $this->displayBlock('page_product_detail_configurator_form', $context, $blocks);
        // line 112
        echo "    </div>
";
    }

    // line 7
    public function block_page_product_detail_configurator_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "            <form data-variant-switch=\"true\" data-variant-switch-options=\"";
        echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["config"] ?? null)]), "html", null, true);
        echo "\">

                ";
        // line 10
        $this->displayBlock('page_product_detail_configurator_csrf', $context, $blocks);
        // line 13
        echo "
                ";
        // line 14
        $this->displayBlock('page_product_detail_configurator_groups', $context, $blocks);
        // line 110
        echo "            </form>
        ";
    }

    // line 10
    public function block_page_product_detail_configurator_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.detail.switch");
        echo "
                ";
    }

    // line 14
    public function block_page_product_detail_configurator_groups($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "configuratorSettings", [], "any", false, false, false, 15));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "                        ";
            $this->displayBlock('page_product_detail_configurator_group', $context, $blocks);
            // line 108
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                ";
    }

    // line 16
    public function block_page_product_detail_configurator_group($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                            <div class=\"product-detail-configurator-group\">
                                ";
        // line 18
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["group"] ?? null), "displayType", [], "any", false, false, false, 18), "select"))) {
            // line 19
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/page/product-detail/configurator/select.html.twig", "@Storefront/storefront/page/product-detail/configurator.html.twig", 19)->display($context);
            // line 20
            echo "                                ";
        } else {
            // line 21
            echo "                                    ";
            $this->displayBlock('page_product_detail_configurator_group_title', $context, $blocks);
            // line 28
            echo "
                                    ";
            // line 29
            $this->displayBlock('page_product_detail_configurator_options', $context, $blocks);
            // line 105
            echo "                                ";
        }
        // line 106
        echo "                            </div>
                        ";
    }

    // line 21
    public function block_page_product_detail_configurator_group_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "                                        <div class=\"product-detail-configurator-group-title\">
                                            ";
        // line 23
        $this->displayBlock('page_product_detail_configurator_group_title_text', $context, $blocks);
        // line 26
        echo "                                        </div>
                                    ";
    }

    // line 23
    public function block_page_product_detail_configurator_group_title_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                                                ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["group"] ?? null), "translated", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "
                                            ";
    }

    // line 29
    public function block_page_product_detail_configurator_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "                                        <div class=\"product-detail-configurator-options\">
                                            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["group"] ?? null), "options", [], "any", false, false, false, 31));
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
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 32
            echo "
                                                ";
            // line 33
            $context["optionIdentifier"] = twig_join_filter([0 => sw_get_attribute($this->env, $this->source, ($context["group"] ?? null), "id", [], "any", false, false, false, 33), 1 => sw_get_attribute($this->env, $this->source, $context["option"], "id", [], "any", false, false, false, 33)], "-");
            // line 34
            echo "                                                ";
            $context["isActive"] = false;
            // line 35
            echo "                                                ";
            $context["isCombinableCls"] = "is-combinable";
            // line 36
            echo "
                                                ";
            // line 37
            if (twig_in_filter(sw_get_attribute($this->env, $this->source, $context["option"], "id", [], "any", false, false, false, 37), sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 37), "optionIds", [], "any", false, false, false, 37))) {
                // line 38
                echo "                                                    ";
                $context["isActive"] = true;
                // line 39
                echo "                                                ";
            }
            // line 40
            echo "
                                                ";
            // line 41
            if ( !sw_get_attribute($this->env, $this->source, $context["option"], "combinable", [], "any", false, false, false, 41)) {
                // line 42
                echo "                                                    ";
                $context["isCombinableCls"] = false;
                // line 43
                echo "                                                ";
            }
            // line 44
            echo "
                                                ";
            // line 45
            if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["option"], "configuratorSetting", [], "any", false, false, false, 45), "media", [], "any", false, false, false, 45)) {
                // line 46
                echo "                                                    ";
                $context["displayType"] = "media";
                // line 47
                echo "                                                    ";
                $context["media"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["option"], "configuratorSetting", [], "any", false, false, false, 47), "media", [], "any", false, false, false, 47);
                // line 48
                echo "                                                ";
            } else {
                // line 49
                echo "                                                    ";
                $context["displayType"] = sw_get_attribute($this->env, $this->source, ($context["group"] ?? null), "displayType", [], "any", false, false, false, 49);
                // line 50
                echo "                                                    ";
                if (sw_get_attribute($this->env, $this->source, $context["option"], "media", [], "any", false, false, false, 50)) {
                    // line 51
                    echo "                                                        ";
                    $context["media"] = sw_get_attribute($this->env, $this->source, $context["option"], "media", [], "any", false, false, false, 51);
                    // line 52
                    echo "                                                    ";
                } else {
                    // line 53
                    echo "                                                        ";
                    $context["media"] = false;
                    // line 54
                    echo "                                                    ";
                }
                // line 55
                echo "                                                ";
            }
            // line 56
            echo "
                                                ";
            // line 57
            $this->displayBlock('page_product_detail_configurator_option', $context, $blocks);
            // line 102
            echo "                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                                        </div>
                                    ";
    }

    // line 57
    public function block_page_product_detail_configurator_option($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "                                                    <div class=\"product-detail-configurator-option\">
                                                        ";
        // line 59
        $this->displayBlock('page_product_detail_configurator_option_radio', $context, $blocks);
        // line 100
        echo "                                                    </div>
                                                ";
    }

    // line 59
    public function block_page_product_detail_configurator_option_radio($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "                                                            <input type=\"radio\"
                                                                   name=\"";
        // line 61
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["group"] ?? null), "id", [], "any", false, false, false, 61), "html", null, true);
        echo "\"
                                                                   value=\"";
        // line 62
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["option"] ?? null), "id", [], "any", false, false, false, 62), "html", null, true);
        echo "\"
                                                                   class=\"product-detail-configurator-option-input";
        // line 63
        if (($context["isCombinableCls"] ?? null)) {
            echo " ";
            echo sw_escape_filter($this->env, ($context["isCombinableCls"] ?? null), "html", null, true);
        }
        echo "\"
                                                                   title=\"";
        // line 64
        echo sw_escape_filter($this->env, ($context["optionIdentifier"] ?? null), "html", null, true);
        echo "\"
                                                                   id=\"";
        // line 65
        echo sw_escape_filter($this->env, ($context["optionIdentifier"] ?? null), "html", null, true);
        echo "\"
                                                                   ";
        // line 66
        if (($context["isActive"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo ">

                                                            ";
        // line 68
        $this->displayBlock('page_product_detail_configurator_option_radio_label', $context, $blocks);
        // line 99
        echo "                                                        ";
    }

    // line 68
    public function block_page_product_detail_configurator_option_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "                                                                <label class=\"product-detail-configurator-option-label";
        if (($context["isCombinableCls"] ?? null)) {
            echo " ";
            echo sw_escape_filter($this->env, ($context["isCombinableCls"] ?? null), "html", null, true);
        }
        echo " is-display-";
        echo sw_escape_filter($this->env, ($context["displayType"] ?? null), "html", null, true);
        echo "\"
                                                                       ";
        // line 70
        if (((0 === twig_compare(($context["displayType"] ?? null), "color")) && sw_get_attribute($this->env, $this->source, ($context["option"] ?? null), "colorHexCode", [], "any", false, false, false, 70))) {
            // line 71
            echo "                                                                       style=\"background-color: ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["option"] ?? null), "colorHexCode", [], "any", false, false, false, 71), "html", null, true);
            echo "\"
                                                                       ";
        }
        // line 73
        echo "                                                                       title=\"";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["option"] ?? null), "translated", [], "any", false, false, false, 73), "name", [], "any", false, false, false, 73), "html", null, true);
        echo "\"
                                                                       for=\"";
        // line 74
        echo sw_escape_filter($this->env, ($context["optionIdentifier"] ?? null), "html", null, true);
        echo "\">

                                                                    ";
        // line 76
        if (((0 === twig_compare(($context["displayType"] ?? null), "media")) && ($context["media"] ?? null))) {
            // line 77
            echo "                                                                        ";
            $this->displayBlock('page_product_detail_configurator_option_radio_label_media', $context, $blocks);
            // line 90
            echo "                                                                    ";
        } elseif ((((0 === twig_compare(($context["displayType"] ?? null), "text")) || ((0 === twig_compare(        // line 91
($context["displayType"] ?? null), "media")) &&  !($context["media"] ?? null))) || ((0 === twig_compare(        // line 92
($context["displayType"] ?? null), "color")) &&  !sw_get_attribute($this->env, $this->source, ($context["option"] ?? null), "colorHexCode", [], "any", false, false, false, 92)))) {
            // line 93
            echo "                                                                        ";
            $this->displayBlock('page_product_detail_configurator_option_radio_label_text', $context, $blocks);
            // line 96
            echo "                                                                    ";
        }
        // line 97
        echo "                                                                </label>
                                                            ";
    }

    // line 77
    public function block_page_product_detail_configurator_option_radio_label_media($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "                                                                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/product-detail/configurator.html.twig", 78);
        })())->display(twig_array_merge($context, ["media" =>         // line 79
($context["media"] ?? null), "sizes" => ["default" => "52px"], "attributes" => ["class" => "product-detail-configurator-option-image", "alt" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 85
($context["option"] ?? null), "translated", [], "any", false, false, false, 85), "name", [], "any", false, false, false, 85), "title" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 86
($context["option"] ?? null), "translated", [], "any", false, false, false, 86), "name", [], "any", false, false, false, 86)], "name" => "configurator-option-img-thumbnails"]));
        // line 89
        echo "                                                                        ";
    }

    // line 93
    public function block_page_product_detail_configurator_option_radio_label_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        echo "                                                                            ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["option"] ?? null), "translated", [], "any", false, false, false, 94), "name", [], "any", false, false, false, 94), "html", null, true);
        echo "
                                                                        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/configurator.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  455 => 94,  451 => 93,  447 => 89,  445 => 86,  444 => 85,  443 => 79,  435 => 78,  431 => 77,  426 => 97,  423 => 96,  420 => 93,  418 => 92,  417 => 91,  415 => 90,  412 => 77,  410 => 76,  405 => 74,  400 => 73,  394 => 71,  392 => 70,  382 => 69,  378 => 68,  374 => 99,  372 => 68,  365 => 66,  361 => 65,  357 => 64,  350 => 63,  346 => 62,  342 => 61,  339 => 60,  335 => 59,  330 => 100,  328 => 59,  325 => 58,  321 => 57,  316 => 103,  302 => 102,  300 => 57,  297 => 56,  294 => 55,  291 => 54,  288 => 53,  285 => 52,  282 => 51,  279 => 50,  276 => 49,  273 => 48,  270 => 47,  267 => 46,  265 => 45,  262 => 44,  259 => 43,  256 => 42,  254 => 41,  251 => 40,  248 => 39,  245 => 38,  243 => 37,  240 => 36,  237 => 35,  234 => 34,  232 => 33,  229 => 32,  212 => 31,  209 => 30,  205 => 29,  198 => 24,  194 => 23,  189 => 26,  187 => 23,  184 => 22,  180 => 21,  175 => 106,  172 => 105,  170 => 29,  167 => 28,  164 => 21,  161 => 20,  158 => 19,  156 => 18,  153 => 17,  149 => 16,  145 => 109,  131 => 108,  128 => 16,  110 => 15,  106 => 14,  99 => 11,  95 => 10,  90 => 110,  88 => 14,  85 => 13,  83 => 10,  77 => 8,  73 => 7,  68 => 112,  66 => 7,  63 => 6,  61 => 4,  60 => 3,  57 => 2,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/product-detail/configurator.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/configurator.html.twig");
    }
}
