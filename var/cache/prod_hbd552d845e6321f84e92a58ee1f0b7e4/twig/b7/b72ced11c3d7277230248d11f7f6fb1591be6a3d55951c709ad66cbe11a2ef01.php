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

/* @Storefront/storefront/component/product/card/wishlist.html.twig */
class __TwigTemplate_7a8250535fb4a55b861073f03cb8bc09e7074f53caa0ccb9d51f5b772d057157 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_wishlist' => [$this, 'block_component_product_wishlist'],
            'component_product_wishlist_button' => [$this, 'block_component_product_wishlist_button'],
            'component_product_wishlist_icon' => [$this, 'block_component_product_wishlist_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_product_wishlist', $context, $blocks);
    }

    public function block_component_product_wishlist($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["addToWishlistOptions"] = ["productId" =>         // line 3
($context["productId"] ?? null), "router" => ["add" => ["afterLoginPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.wishlist.add.after.login", ["productId" =>         // line 6
($context["productId"] ?? null)]), "path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.wishlist.product.add", ["productId" =>         // line 7
($context["productId"] ?? null)]), "token" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.wishlist.product.add", ["mode" => "token"])], "remove" => ["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.wishlist.product.remove", ["productId" =>         // line 11
($context["productId"] ?? null)]), "token" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.wishlist.product.remove", ["mode" => "token"])]]];
        // line 16
        echo "
    ";
        // line 17
        $context["size"] = (($context["size"]) ?? ("md"));
        // line 18
        echo "
    <div class=\"product-wishlist\">
        ";
        // line 20
        $this->displayBlock('component_product_wishlist_button', $context, $blocks);
        // line 43
        echo "    </div>
";
    }

    // line 20
    public function block_component_product_wishlist_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "            <button
                class=\"product-wishlist-";
        // line 22
        echo sw_escape_filter($this->env, ($context["productId"] ?? null), "html", null, true);
        echo " product-wishlist-action";
        if ((0 === twig_compare(($context["appearance"] ?? null), "circle"))) {
            echo "-circle";
        }
        echo " product-wishlist-not-added product-wishlist-loading\"
                title=\"";
        // line 23
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.toggleWishlist"));
        echo "\"
                data-add-to-wishlist=\"true\"
                data-add-to-wishlist-options=\"";
        // line 25
        echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["addToWishlistOptions"] ?? null)]), "html", null, true);
        echo "\"
            >
                ";
        // line 27
        $this->displayBlock('component_product_wishlist_icon', $context, $blocks);
        // line 41
        echo "            </button>
        ";
    }

    // line 27
    public function block_component_product_wishlist_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                    ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/product/card/wishlist.html.twig", 28);
        })())->display(twig_array_merge($context, ["class" => "wishlist icon-wishlist-added", "size" => ($context["size"] ?? null), "name" => "heart-fill"]));
        // line 29
        echo "                    ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/product/card/wishlist.html.twig", 29);
        })())->display(twig_array_merge($context, ["class" => "wishlist icon-wishlist-not-added", "size" => ($context["size"] ?? null), "name" => "heart"]));
        // line 30
        echo "
                    ";
        // line 31
        if (($context["showText"] ?? null)) {
            // line 32
            echo "                        <span class=\"product-wishlist-btn-content text-wishlist-not-added product-wishlist-btn-content-";
            echo sw_escape_filter($this->env, ($context["size"] ?? null), "html", null, true);
            echo "\">
                            ";
            // line 33
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.addToWishlist"));
            echo "
                        </span>
                        <span class=\"product-wishlist-btn-content text-wishlist-remove product-wishlist-btn-content-";
            // line 35
            echo sw_escape_filter($this->env, ($context["size"] ?? null), "html", null, true);
            echo "\">
                            ";
            // line 36
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.removeFromWishlist"));
            echo "
                        </span>

                    ";
        }
        // line 40
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/wishlist.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  150 => 40,  143 => 36,  139 => 35,  134 => 33,  129 => 32,  127 => 31,  124 => 30,  115 => 29,  106 => 28,  102 => 27,  97 => 41,  95 => 27,  90 => 25,  85 => 23,  77 => 22,  74 => 21,  70 => 20,  65 => 43,  63 => 20,  59 => 18,  57 => 17,  54 => 16,  52 => 11,  51 => 7,  50 => 6,  49 => 3,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/product/card/wishlist.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/product/card/wishlist.html.twig");
    }
}
