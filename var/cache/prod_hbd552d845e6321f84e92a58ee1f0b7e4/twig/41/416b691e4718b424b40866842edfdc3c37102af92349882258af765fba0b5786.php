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

/* @Storefront/storefront/page/content/index.html.twig */
class __TwigTemplate_ad885214b48258f5f96c5d4b107b0036be720ac35c6d590967ba553af2bc24c2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_main_inner' => [$this, 'block_base_main_inner'],
            'page_content' => [$this, 'block_page_content'],
            'cms_breadcrumb' => [$this, 'block_cms_breadcrumb'],
            'cms_content' => [$this, 'block_cms_content'],
            'page_content_blocks' => [$this, 'block_page_content_blocks'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/base.html.twig", "@Storefront/storefront/page/content/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_base_main_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"container-main\">
        ";
        // line 5
        $this->displayBlock('page_content', $context, $blocks);
        // line 24
        echo "    </div>
";
    }

    // line 5
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            ";
        $this->displayBlock('cms_breadcrumb', $context, $blocks);
        // line 14
        echo "
            ";
        // line 15
        $this->displayBlock('cms_content', $context, $blocks);
        // line 23
        echo "        ";
    }

    // line 6
    public function block_cms_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "                <div class=\"breadcrumb cms-breadcrumb container\">
                    ";
        // line 8
        $this->loadTemplate("@Storefront/storefront/layout/breadcrumb.html.twig", "@Storefront/storefront/page/content/index.html.twig", 8)->display(twig_to_array(["context" =>         // line 9
($context["context"] ?? null), "category" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 10
($context["page"] ?? null), "header", [], "any", false, false, false, 10), "navigation", [], "any", false, false, false, 10), "active", [], "any", false, false, false, 10)]));
        // line 12
        echo "                </div>
            ";
    }

    // line 15
    public function block_cms_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                ";
        $context["cmsPageClasses"] = twig_trim_filter(("cms-page " . twig_striptags(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cmsPage", [], "any", false, false, false, 16), "cssClass", [], "any", false, false, false, 16))));
        // line 17
        echo "                <div class=\"";
        echo sw_escape_filter($this->env, ($context["cmsPageClasses"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 18
        $this->displayBlock('page_content_blocks', $context, $blocks);
        // line 21
        echo "                </div>
            ";
    }

    // line 18
    public function block_page_content_blocks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/page/content/detail.html.twig", "@Storefront/storefront/page/content/index.html.twig", 19)->display(twig_array_merge($context, ["cmsPage" => sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cmsPage", [], "any", false, false, false, 19)]));
        // line 20
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/content/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 20,  119 => 19,  115 => 18,  110 => 21,  108 => 18,  103 => 17,  100 => 16,  96 => 15,  91 => 12,  89 => 10,  88 => 9,  87 => 8,  84 => 7,  80 => 6,  76 => 23,  74 => 15,  71 => 14,  68 => 6,  64 => 5,  59 => 24,  57 => 5,  54 => 4,  50 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/content/index.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/content/index.html.twig");
    }
}
