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

/* @Storefront/storefront/component/sorting.html.twig */
class __TwigTemplate_9dc895230dc7024f20273566b1fc5acde4158d977cde05a205ef62286d02777a extends Template
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
        // line 1
        $context["config"] = ["sorting" => ($context["current"] ?? null)];
        // line 2
        $context["showSorting"] = ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["slot"] ?? null), "config", [], "any", false, true, false, 2), "showSorting", [], "any", false, true, false, 2), "value", [], "any", true, true, false, 2)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["slot"] ?? null), "config", [], "any", false, false, false, 2), "showSorting", [], "any", false, false, false, 2), "value", [], "any", false, false, false, 2)) : (true));
        // line 3
        echo "
";
        // line 4
        if ((($context["showSorting"] ?? null) && (1 === twig_compare(twig_length_filter($this->env, ($context["sortings"] ?? null)), 1)))) {
            // line 5
            echo "    <div class=\"sorting\" data-listing-sorting=\"true\" data-listing-sorting-options='";
            echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["config"] ?? null)]), "html", null, true);
            echo "'>
        <select class=\"sorting ";
            // line 6
            echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
            echo "\" aria-label=\"";
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.sortingLabel")), "html", null, true);
            echo "\">
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sortings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["sorting"]) {
                // line 8
                echo "                ";
                $context["key"] = sw_get_attribute($this->env, $this->source, $context["sorting"], "key", [], "any", false, false, false, 8);
                // line 9
                echo "                <option value=\"";
                echo sw_escape_filter($this->env, ($context["key"] ?? null), "html", null, true);
                echo "\"";
                if ((0 === twig_compare(($context["key"] ?? null), ($context["current"] ?? null)))) {
                    echo " selected";
                }
                echo ">";
                echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["sorting"], "translated", [], "any", false, false, false, 9), "label", [], "any", false, false, false, 9));
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorting'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        </select>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/sorting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 11,  64 => 9,  61 => 8,  57 => 7,  51 => 6,  46 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/sorting.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/sorting.html.twig");
    }
}
