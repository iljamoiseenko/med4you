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

/* @Storefront/storefront/page/checkout/address/index.html.twig */
class __TwigTemplate_e4482d8b8d18865722dd5c5b949a3e30cbee3b2e4cc68b4a0df93209f10594e3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_header' => [$this, 'block_base_header'],
            'base_navigation' => [$this, 'block_base_navigation'],
            'page_checkout_main_content' => [$this, 'block_page_checkout_main_content'],
            'page_checkout_address' => [$this, 'block_page_checkout_address'],
            'page_checkout_address_header' => [$this, 'block_page_checkout_address_header'],
            'page_checkout_address_login_toggle' => [$this, 'block_page_checkout_address_login_toggle'],
            'page_checkout_address_login' => [$this, 'block_page_checkout_address_login'],
            'page_checkout_address_login_card' => [$this, 'block_page_checkout_address_login_card'],
            'page_checkout_address_register' => [$this, 'block_page_checkout_address_register'],
            'page_checkout_address_register_card' => [$this, 'block_page_checkout_address_register_card'],
            'page_checkout_aside_summary' => [$this, 'block_page_checkout_aside_summary'],
            'page_checkout_address_products' => [$this, 'block_page_checkout_address_products'],
            'page_checkout_address_products_header' => [$this, 'block_page_checkout_address_products_header'],
            'page_checkout_address_products_list' => [$this, 'block_page_checkout_address_products_list'],
            'page_checkout_address_product_list_container' => [$this, 'block_page_checkout_address_product_list_container'],
            'page_checkout_address_product_summary_item' => [$this, 'block_page_checkout_address_product_summary_item'],
            'base_footer' => [$this, 'block_base_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/checkout/_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/page/checkout/_page.html.twig", "@Storefront/storefront/page/checkout/address/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_base_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/layout/header/header-minimal.html.twig", "@Storefront/storefront/page/checkout/address/index.html.twig", 4)->display($context);
    }

    // line 7
    public function block_base_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_page_checkout_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->displayBlock('page_checkout_address', $context, $blocks);
    }

    public function block_page_checkout_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "        ";
        $this->displayBlock('page_checkout_address_header', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('page_checkout_address_login_toggle', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('page_checkout_address_login', $context, $blocks);
        // line 35
        echo "
        ";
        // line 36
        $this->displayBlock('page_checkout_address_register', $context, $blocks);
        // line 43
        echo "    ";
    }

    // line 11
    public function block_page_checkout_address_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "            <h1 class=\"address-main-header\">
                ";
        // line 13
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addressHeader"));
        echo "
            </h1>
        ";
    }

    // line 17
    public function block_page_checkout_address_login_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "            <div class=\"register-login-collapse-toogle\">
                ";
        // line 19
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/address/index.html.twig", 19);
        })())->display(twig_array_merge($context, ["name" => "avatar"]));
        // line 20
        echo "                <a href=\"#loginCollapse\"
                   class=\"login-collapse-toggle\"
                   ";
        // line 22
        echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
        echo "=\"collapse\"
                   aria-expanded=\"false\">
                    <strong>";
        // line 24
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addressLoginToggle"));
        echo "</strong> </a>
            </div>
        ";
    }

    // line 28
    public function block_page_checkout_address_login($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "            <div class=\"collapse\" id=\"loginCollapse\">
                ";
        // line 30
        $this->displayBlock('page_checkout_address_login_card', $context, $blocks);
        // line 33
        echo "            </div>
        ";
    }

    // line 30
    public function block_page_checkout_address_login_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                    ";
        $this->loadTemplate("@Storefront/storefront/component/account/login.html.twig", "@Storefront/storefront/page/checkout/address/index.html.twig", 31)->display($context);
        // line 32
        echo "                ";
    }

    // line 36
    public function block_page_checkout_address_register($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "            ";
        $this->displayBlock('page_checkout_address_register_card', $context, $blocks);
        // line 42
        echo "        ";
    }

    // line 37
    public function block_page_checkout_address_register_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/page/checkout/address/register.html.twig", "@Storefront/storefront/page/checkout/address/index.html.twig", 38)->display(twig_array_merge($context, ["cardTitle" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addressRegisterCardTitle"))]));
        // line 41
        echo "            ";
    }

    // line 46
    public function block_page_checkout_aside_summary($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "    ";
        $this->displayParentBlock("page_checkout_aside_summary", $context, $blocks);
        echo "

    ";
        // line 49
        $this->displayBlock('page_checkout_address_products', $context, $blocks);
    }

    public function block_page_checkout_address_products($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "        <div class=\"checkout-aside-products\">
            ";
        // line 51
        $this->displayBlock('page_checkout_address_products_header', $context, $blocks);
        // line 56
        echo "
            ";
        // line 57
        $this->displayBlock('page_checkout_address_products_list', $context, $blocks);
        // line 76
        echo "        </div>
    ";
    }

    // line 51
    public function block_page_checkout_address_products_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                <h2 class=\"checkout-aside-product-header\">
                    ";
        // line 53
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeader"));
        echo "
                </h2>
            ";
    }

    // line 57
    public function block_page_checkout_address_products_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "                <div class=\"checkout-aside-product-list\">
                    ";
        // line 59
        $this->displayBlock('page_checkout_address_product_list_container', $context, $blocks);
        // line 74
        echo "                </div>
            ";
    }

    // line 59
    public function block_page_checkout_address_product_list_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 60), "lineItems", [], "any", false, false, false, 60));
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
        foreach ($context['_seq'] as $context["_key"] => $context["lineItem"]) {
            // line 61
            echo "                            ";
            $this->displayBlock('page_checkout_address_product_summary_item', $context, $blocks);
            // line 72
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lineItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                    ";
    }

    // line 61
    public function block_page_checkout_address_product_summary_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "                                ";
        // line 63
        echo "                                ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 64
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/component/line-item/line-item.html.twig", "@Storefront/storefront/page/checkout/address/index.html.twig", 64)->display(twig_array_merge($context, ["displayMode" => "offcanvas", "showQuantitySelect" => false]));
            // line 68
            echo "                                ";
        } else {
            // line 69
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/page/checkout/checkout-aside-item.html.twig", "@Storefront/storefront/page/checkout/address/index.html.twig", 69)->display($context);
            // line 70
            echo "                                ";
        }
        // line 71
        echo "                            ";
    }

    // line 80
    public function block_base_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/layout/footer/footer-minimal.html.twig", "@Storefront/storefront/page/checkout/address/index.html.twig", 81)->display($context);
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/address/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 81,  331 => 80,  327 => 71,  324 => 70,  321 => 69,  318 => 68,  315 => 64,  312 => 63,  310 => 62,  306 => 61,  302 => 73,  288 => 72,  285 => 61,  267 => 60,  263 => 59,  258 => 74,  256 => 59,  253 => 58,  249 => 57,  242 => 53,  239 => 52,  235 => 51,  230 => 76,  228 => 57,  225 => 56,  223 => 51,  220 => 50,  213 => 49,  207 => 47,  203 => 46,  199 => 41,  196 => 38,  192 => 37,  188 => 42,  185 => 37,  181 => 36,  177 => 32,  174 => 31,  170 => 30,  165 => 33,  163 => 30,  160 => 29,  156 => 28,  149 => 24,  144 => 22,  140 => 20,  132 => 19,  129 => 18,  125 => 17,  118 => 13,  115 => 12,  111 => 11,  107 => 43,  105 => 36,  102 => 35,  100 => 28,  97 => 27,  95 => 17,  92 => 16,  89 => 11,  81 => 10,  77 => 9,  71 => 7,  66 => 4,  62 => 3,  51 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/checkout/address/index.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/checkout/address/index.html.twig");
    }
}
