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

/* @Storefront/storefront/layout/header/actions/wishlist-widget.html.twig */
class __TwigTemplate_798af29795bc160ef5a4d41683cd0b58c4361ffc85e59cc788ffa0beb2ca1006 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_actions_wishlist_widget' => [$this, 'block_layout_header_actions_wishlist_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_header_actions_wishlist_widget', $context, $blocks);
    }

    public function block_layout_header_actions_wishlist_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["showCounter"] = (($context["showCounter"]) ?? (true));
        // line 3
        echo "
    ";
        // line 4
        if (($context["showCounter"] ?? null)) {
            // line 5
            echo "        <span class=\"header-wishlist-icon\">
            ";
            // line 6
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/actions/wishlist-widget.html.twig", 6);
            })())->display(twig_array_merge($context, ["name" => "heart"]));
            // line 7
            echo "        </span>
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        $context["wishlistStorageOptions"] = ["listPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.wishlist.product.list"), "mergePath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.wishlist.product.merge"), "tokenMergePath" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.wishlist.product.merge", ["mode" => "token"]), "pageletPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.wishlist.product.merge.pagelet"), "tokenPageletPath" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.wishlist.product.merge.pagelet", ["mode" => "token"])];
        // line 17
        echo "
    ";
        // line 18
        $context["wishlistWidgetOptions"] = ["showCounter" => ($context["showCounter"] ?? null)];
        // line 19
        echo "
    <span class=\"badge ";
        // line 20
        echo sw_escape_filter($this->env, ($context["bgClass"] ?? null), "html", null, true);
        echo "-primary header-wishlist-badge\"
          id=\"wishlist-basket\"
          data-wishlist-storage=\"true\"
          data-wishlist-storage-options=\"";
        // line 23
        echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["wishlistStorageOptions"] ?? null)]), "html", null, true);
        echo "\"
          data-wishlist-widget=\"true\"
          data-wishlist-widget-options=\"";
        // line 25
        echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["wishlistWidgetOptions"] ?? null)]), "html", null, true);
        echo "\"
    ></span>
";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/actions/wishlist-widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  87 => 23,  81 => 20,  78 => 19,  76 => 18,  73 => 17,  71 => 10,  68 => 9,  64 => 7,  56 => 6,  53 => 5,  51 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/header/actions/wishlist-widget.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/layout/header/actions/wishlist-widget.html.twig");
    }
}
