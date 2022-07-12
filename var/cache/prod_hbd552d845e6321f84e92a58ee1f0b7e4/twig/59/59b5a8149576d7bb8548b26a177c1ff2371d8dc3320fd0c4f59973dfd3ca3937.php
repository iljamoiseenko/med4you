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

/* @Storefront/storefront/layout/header/header-minimal.html.twig */
class __TwigTemplate_2ec33734535d74808d3e832d21a05273b34ec86fe370f75ddf9ae70fa3c57665 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_header' => [$this, 'block_layout_header'],
            'layout_header_minimal_inner' => [$this, 'block_layout_header_minimal_inner'],
            'layout_header_minimal_row' => [$this, 'block_layout_header_minimal_row'],
            'layout_header_minimal_logo' => [$this, 'block_layout_header_minimal_logo'],
            'layout_header_minimal_contact' => [$this, 'block_layout_header_minimal_contact'],
            'layout_header_minimal_button' => [$this, 'block_layout_header_minimal_button'],
            'layout_header_minimal_wishlist' => [$this, 'block_layout_header_minimal_wishlist'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/layout/header/header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/layout/header/header.html.twig", "@Storefront/storefront/layout/header/header-minimal.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_layout_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <header class=\"header-minimal\">
        ";
        // line 5
        $this->displayBlock('layout_header_minimal_inner', $context, $blocks);
        // line 42
        echo "    </header>
";
    }

    // line 5
    public function block_layout_header_minimal_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            <div class=\"container\">
                ";
        // line 7
        $this->displayBlock('layout_header_minimal_row', $context, $blocks);
        // line 40
        echo "            </div>
        ";
    }

    // line 7
    public function block_layout_header_minimal_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "                    <div class=\"row header-row header-minimal-row\">
                        ";
        // line 9
        $this->displayBlock('layout_header_minimal_logo', $context, $blocks);
        // line 14
        echo "
                        ";
        // line 15
        $this->displayBlock('layout_header_minimal_contact', $context, $blocks);
        // line 20
        echo "
                        ";
        // line 21
        $this->displayBlock('layout_header_minimal_button', $context, $blocks);
        // line 30
        echo "
                        ";
        // line 31
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.wishlistEnabled")) {
            // line 32
            echo "                            ";
            $this->displayBlock('layout_header_minimal_wishlist', $context, $blocks);
            // line 37
            echo "                        ";
        }
        // line 38
        echo "                    </div>
                ";
    }

    // line 9
    public function block_layout_header_minimal_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                            <div class=\"col-6 col-md-4 header-minimal-logo\">
                                ";
        // line 11
        $this->loadTemplate("@Storefront/storefront/layout/header/logo.html.twig", "@Storefront/storefront/layout/header/header-minimal.html.twig", 11)->display($context);
        // line 12
        echo "                            </div>
                        ";
    }

    // line 15
    public function block_layout_header_minimal_contact($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                            <div class=\"col-md-4 header-minimal-contact\">
                                ";
        // line 17
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.supportInfo"));
        echo "
                            </div>
                        ";
    }

    // line 21
    public function block_layout_header_minimal_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "                            <div class=\"col-md-4 header-minimal-back-to-shop\">
                                <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.home.page");
        echo "\"
                                   class=\"btn btn-outline-primary header-minimal-back-to-shop-button\"
                                   title=\"";
        // line 25
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.finishButtonBackToShop")), "html", null, true);
        echo "\">
                                    ";
        // line 26
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.finishButtonBackToShop")), "html", null, true);
        echo "
                                </a>
                            </div>
                        ";
    }

    // line 32
    public function block_layout_header_minimal_wishlist($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "                                ";
        $this->loadTemplate("@Storefront/storefront/layout/header/actions/wishlist-widget.html.twig", "@Storefront/storefront/layout/header/header-minimal.html.twig", 33)->display(twig_array_merge($context, ["showCounter" => false]));
        // line 36
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/header-minimal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 36,  171 => 33,  167 => 32,  159 => 26,  155 => 25,  150 => 23,  147 => 22,  143 => 21,  136 => 17,  133 => 16,  129 => 15,  124 => 12,  122 => 11,  119 => 10,  115 => 9,  110 => 38,  107 => 37,  104 => 32,  102 => 31,  99 => 30,  97 => 21,  94 => 20,  92 => 15,  89 => 14,  87 => 9,  84 => 8,  80 => 7,  75 => 40,  73 => 7,  70 => 6,  66 => 5,  61 => 42,  59 => 5,  56 => 4,  52 => 3,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/header/header-minimal.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/layout/header/header-minimal.html.twig");
    }
}
