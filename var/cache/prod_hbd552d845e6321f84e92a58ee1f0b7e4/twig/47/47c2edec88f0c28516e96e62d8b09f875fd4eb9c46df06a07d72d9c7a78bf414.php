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

/* @Storefront/storefront/page/wishlist/index.html.twig */
class __TwigTemplate_802ccc045bfa23808dad34f50455bcc72e08d83fb8803f4e0d9af0ac5e80a452 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_head' => [$this, 'block_base_head'],
            'base_content' => [$this, 'block_base_content'],
            'page_wishlist' => [$this, 'block_page_wishlist'],
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
        $this->parent = $this->loadTemplate("@Storefront/storefront/base.html.twig", "@Storefront/storefront/page/wishlist/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_base_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/page/wishlist/meta.html.twig", "@Storefront/storefront/page/wishlist/index.html.twig", 4)->display($context);
    }

    // line 7
    public function block_base_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $this->displayBlock('page_wishlist', $context, $blocks);
    }

    public function block_page_wishlist($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "        <div class=\"cms-page wishlist-page\">
            ";
        // line 10
        $context["searchResult"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "wishlist", [], "any", false, false, false, 10), "productListing", [], "any", false, false, false, 10);
        // line 11
        echo "
            ";
        // line 12
        if ((sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 12) &&  !sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 12), "guest", [], "any", false, false, false, 12))) {
            // line 13
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/page/wishlist/wishlist-pagelet.html.twig", "@Storefront/storefront/page/wishlist/index.html.twig", 13)->display(twig_array_merge($context, ["searchResult" => ($context["searchResult"] ?? null)]));
            // line 14
            echo "            ";
        } else {
            // line 15
            echo "                ";
            $context["guestWishlistPageOptions"] = ["pageletRouter" => ["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.wishlist.guestPage.pagelet"), "token" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.wishlist.guestPage.pagelet", ["mode" => "token"])]];
            // line 21
            echo "                <div class=\"row mh-100\" data-guest-wishlist-page=\"true\" data-guest-wishlist-page-options=\"";
            echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["guestWishlistPageOptions"] ?? null)]), "html", null, true);
            echo "\"></div>
            ";
        }
        // line 23
        echo "        </div>
    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/wishlist/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 23,  88 => 21,  85 => 15,  82 => 14,  79 => 13,  77 => 12,  74 => 11,  72 => 10,  69 => 9,  61 => 8,  57 => 7,  52 => 4,  48 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/wishlist/index.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/wishlist/index.html.twig");
    }
}
