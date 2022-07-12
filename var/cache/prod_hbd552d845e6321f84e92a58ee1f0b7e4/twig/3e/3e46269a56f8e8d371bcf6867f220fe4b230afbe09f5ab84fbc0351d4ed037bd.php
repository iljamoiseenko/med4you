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

/* @Storefront/storefront/utilities/offcanvas.html.twig */
class __TwigTemplate_6cd287e43bd410c70652ad0b45d1939ae95fc10f7e9f8e911d052e32414fecfd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'utilities_offcanvas_meta' => [$this, 'block_utilities_offcanvas_meta'],
            'utilities_offcanvas' => [$this, 'block_utilities_offcanvas'],
            'utilities_offcanvas_header' => [$this, 'block_utilities_offcanvas_header'],
            'utilities_offcanvas_close' => [$this, 'block_utilities_offcanvas_close'],
            'utilities_offcanvas_close_icon' => [$this, 'block_utilities_offcanvas_close_icon'],
            'utilities_offcanvas_close_text' => [$this, 'block_utilities_offcanvas_close_text'],
            'utilities_offcanvas_content_container' => [$this, 'block_utilities_offcanvas_content_container'],
            'utilities_offcanvas_content' => [$this, 'block_utilities_offcanvas_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
";
        // line 9
        $context["isAjaxOffcanvas"] = false;
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('utilities_offcanvas_meta', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('utilities_offcanvas', $context, $blocks);
    }

    // line 11
    public function block_utilities_offcanvas_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        // line 13
        echo "    ";
        if (( !sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 13), "xmlHttpRequest", [], "any", false, false, false, 13) && ($context["isAjaxOffcanvas"] ?? null))) {
            // line 14
            echo "        ";
            $this->loadTemplate("@Storefront/storefront/layout/meta.html.twig", "@Storefront/storefront/utilities/offcanvas.html.twig", 14)->display($context);
            // line 15
            echo "    ";
        }
    }

    // line 18
    public function block_utilities_offcanvas($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        // line 20
        echo "    ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 21
            echo "        ";
            $this->displayBlock('utilities_offcanvas_header', $context, $blocks);
            // line 37
            echo "    ";
        } else {
            // line 38
            echo "        ";
            $this->displayBlock("utilities_offcanvas_close", $context, $blocks);
            echo "
    ";
        }
        // line 40
        echo "
    ";
        // line 41
        $this->displayBlock('utilities_offcanvas_content_container', $context, $blocks);
    }

    // line 21
    public function block_utilities_offcanvas_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "            <div class=\"offcanvas-header p-0\">
                ";
        // line 23
        $this->displayBlock('utilities_offcanvas_close', $context, $blocks);
        // line 35
        echo "            </div>
        ";
    }

    // line 23
    public function block_utilities_offcanvas_close($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                    ";
        // line 25
        echo "                    <button class=\"btn btn-light offcanvas-close js-offcanvas-close";
        if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            echo " btn-block sticky-top";
        }
        echo "\">
                        ";
        // line 26
        $this->displayBlock('utilities_offcanvas_close_icon', $context, $blocks);
        // line 29
        echo "
                        ";
        // line 30
        $this->displayBlock('utilities_offcanvas_close_text', $context, $blocks);
        // line 33
        echo "                    </button>
                ";
    }

    // line 26
    public function block_utilities_offcanvas_close_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/offcanvas.html.twig", 27);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "x"]));
        // line 28
        echo "                        ";
    }

    // line 30
    public function block_utilities_offcanvas_close_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                            ";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.offcanvasCloseMenu"));
        echo "
                        ";
    }

    // line 41
    public function block_utilities_offcanvas_content_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "        ";
        // line 43
        echo "        <div class=\"";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            echo "offcanvas-body";
        } else {
            echo "offcanvas-content-container";
        }
        echo "\">
            ";
        // line 44
        $this->displayBlock('utilities_offcanvas_content', $context, $blocks);
        // line 45
        echo "        </div>
    ";
    }

    // line 44
    public function block_utilities_offcanvas_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/utilities/offcanvas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 44,  191 => 45,  189 => 44,  180 => 43,  178 => 42,  174 => 41,  167 => 31,  163 => 30,  159 => 28,  150 => 27,  146 => 26,  141 => 33,  139 => 30,  136 => 29,  134 => 26,  127 => 25,  125 => 24,  121 => 23,  116 => 35,  114 => 23,  111 => 22,  107 => 21,  103 => 41,  100 => 40,  94 => 38,  91 => 37,  88 => 21,  85 => 20,  83 => 19,  79 => 18,  74 => 15,  71 => 14,  68 => 13,  66 => 12,  62 => 11,  58 => 18,  55 => 17,  53 => 11,  50 => 10,  48 => 9,  45 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/utilities/offcanvas.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/utilities/offcanvas.html.twig");
    }
}
