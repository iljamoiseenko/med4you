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

/* @Storefront/storefront/page/account/addressbook/index.html.twig */
class __TwigTemplate_c2616d5d3b0f15d2f2d55db03682ebb0cf9a7cb464e0b1ac991c6125a5510b67 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_account_main_content' => [$this, 'block_page_account_main_content'],
            'page_account_address_welcome' => [$this, 'block_page_account_address_welcome'],
            'page_account_address_welcome_headline' => [$this, 'block_page_account_address_welcome_headline'],
            'page_account_address_welcome_intro' => [$this, 'block_page_account_address_welcome_intro'],
            'page_account_address_success_messages' => [$this, 'block_page_account_address_success_messages'],
            'page_account_address_error_messages' => [$this, 'block_page_account_address_error_messages'],
            'page_account_address_main' => [$this, 'block_page_account_address_main'],
            'page_account_address_default' => [$this, 'block_page_account_address_default'],
            'page_account_address_billing' => [$this, 'block_page_account_address_billing'],
            'page_account_address_billing_body' => [$this, 'block_page_account_address_billing_body'],
            'page_account_address_billing_title' => [$this, 'block_page_account_address_billing_title'],
            'page_account_address_billing_address' => [$this, 'block_page_account_address_billing_address'],
            'page_account_address_shipping' => [$this, 'block_page_account_address_shipping'],
            'page_account_address_shipping_body' => [$this, 'block_page_account_address_shipping_body'],
            'page_account_address_shipping_title' => [$this, 'block_page_account_address_shipping_title'],
            'page_account_address_shipping_address' => [$this, 'block_page_account_address_shipping_address'],
            'page_account_address_item_content_create' => [$this, 'block_page_account_address_item_content_create'],
            'page_account_address_list' => [$this, 'block_page_account_address_list'],
            'page_account_address_overview_body' => [$this, 'block_page_account_address_overview_body'],
            'page_account_address_overview_address' => [$this, 'block_page_account_address_overview_address'],
            'page_account_address_overview_actions' => [$this, 'block_page_account_address_overview_actions'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/account/_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/page/account/_page.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_account_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"account-address\">
        ";
        // line 5
        $this->displayBlock('page_account_address_welcome', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('page_account_address_success_messages', $context, $blocks);
        // line 40
        echo "
        ";
        // line 41
        $this->displayBlock('page_account_address_error_messages', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        $this->displayBlock('page_account_address_main', $context, $blocks);
        // line 152
        echo "    </div>
";
    }

    // line 5
    public function block_page_account_address_welcome($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            <div class=\"account-welcome\">
                ";
        // line 7
        $this->displayBlock('page_account_address_welcome_headline', $context, $blocks);
        // line 12
        echo "                ";
        $this->displayBlock('page_account_address_welcome_intro', $context, $blocks);
        // line 17
        echo "            </div>
        ";
    }

    // line 7
    public function block_page_account_address_welcome_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "                    <h1>
                        ";
        // line 9
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressWelcome"));
        echo "
                    </h1>
                ";
    }

    // line 12
    public function block_page_account_address_welcome_intro($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "                    <p>
                        ";
        // line 14
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressText"));
        echo "
                    </p>
                ";
    }

    // line 20
    public function block_page_account_address_success_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "            ";
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 21), "get", [0 => "changedDefaultAddress"], "method", false, false, false, 21), "1"))) {
            // line 22
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 22)->display(twig_array_merge($context, ["type" => "success", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressDefaultChanged"))]));
            // line 26
            echo "            ";
        }
        // line 27
        echo "            ";
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 27), "get", [0 => "addressDeleted"], "method", false, false, false, 27), "1"))) {
            // line 28
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 28)->display(twig_array_merge($context, ["type" => "success", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressDeleted"))]));
            // line 32
            echo "            ";
        }
        // line 33
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 33), "get", [0 => "addressSaved"], "method", false, false, false, 33)) {
            // line 34
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 34)->display(twig_array_merge($context, ["type" => "success", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressSaved"))]));
            // line 38
            echo "            ";
        }
        // line 39
        echo "        ";
    }

    // line 41
    public function block_page_account_address_error_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "            ";
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 42), "get", [0 => "changedDefaultAddress"], "method", false, false, false, 42), "0"))) {
            // line 43
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 43)->display(twig_array_merge($context, ["type" => "danger", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressDefaultNotChanged"))]));
            // line 47
            echo "            ";
        }
        // line 48
        echo "            ";
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 48), "get", [0 => "addressDeleted"], "method", false, false, false, 48), "0"))) {
            // line 49
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 49)->display(twig_array_merge($context, ["type" => "danger", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressNotDeleted"))]));
            // line 53
            echo "            ";
        }
        // line 54
        echo "        ";
    }

    // line 56
    public function block_page_account_address_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "            ";
        $context["defaultBillingAddress"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 57), "defaultBillingAddress", [], "any", false, false, false, 57);
        // line 58
        echo "            ";
        $context["defaultShippingAddress"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 58), "defaultShippingAddress", [], "any", false, false, false, 58);
        // line 59
        echo "
            ";
        // line 60
        $this->displayBlock('page_account_address_default', $context, $blocks);
        // line 109
        echo "
            ";
        // line 110
        $this->displayBlock('page_account_address_item_content_create', $context, $blocks);
        // line 119
        echo "
            ";
        // line 120
        $this->displayBlock('page_account_address_list', $context, $blocks);
        // line 151
        echo "        ";
    }

    // line 60
    public function block_page_account_address_default($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "                <div class=\"row default-address\">
                    ";
        // line 62
        $this->displayBlock('page_account_address_billing', $context, $blocks);
        // line 84
        echo "
                    ";
        // line 85
        $this->displayBlock('page_account_address_shipping', $context, $blocks);
        // line 107
        echo "                </div>
            ";
    }

    // line 62
    public function block_page_account_address_billing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "                        <div class=\"col-sm-6 card-col address-card\">
                            <div class=\"card billing-address\">
                                <div class=\"card-body\">
                                    ";
        // line 66
        $this->displayBlock('page_account_address_billing_body', $context, $blocks);
        // line 80
        echo "                                </div>
                            </div>
                        </div>
                    ";
    }

    // line 66
    public function block_page_account_address_billing_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "                                        <div class=\"address-item-body\">
                                            ";
        // line 68
        $this->displayBlock('page_account_address_billing_title', $context, $blocks);
        // line 73
        echo "                                            ";
        $this->displayBlock('page_account_address_billing_address', $context, $blocks);
        // line 78
        echo "                                        </div>
                                    ";
    }

    // line 68
    public function block_page_account_address_billing_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "                                                <div class=\"card-title\">
                                                    <div>";
        // line 70
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesTitleDefaultBillingAddress"));
        echo "</div>
                                                </div>
                                            ";
    }

    // line 73
    public function block_page_account_address_billing_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "                                                ";
        $this->loadTemplate("@Storefront/storefront/component/address/address.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 74)->display(twig_array_merge($context, ["address" =>         // line 75
($context["defaultBillingAddress"] ?? null)]));
        // line 77
        echo "                                            ";
    }

    // line 85
    public function block_page_account_address_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "                        <div class=\"col-sm-6 card-col address-card\">
                            <div class=\"card shipping-address\">
                                <div class=\"card-body\">
                                    ";
        // line 89
        $this->displayBlock('page_account_address_shipping_body', $context, $blocks);
        // line 103
        echo "                                </div>
                            </div>
                        </div>
                    ";
    }

    // line 89
    public function block_page_account_address_shipping_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "                                        <div class=\"address-item-body\">
                                            ";
        // line 91
        $this->displayBlock('page_account_address_shipping_title', $context, $blocks);
        // line 96
        echo "                                            ";
        $this->displayBlock('page_account_address_shipping_address', $context, $blocks);
        // line 101
        echo "                                        </div>
                                    ";
    }

    // line 91
    public function block_page_account_address_shipping_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "                                                <div class=\"card-title\">
                                                    <div>";
        // line 93
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesTitleDefaultShippingAddress"));
        echo "</div>
                                                </div>
                                            ";
    }

    // line 96
    public function block_page_account_address_shipping_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "                                                ";
        $this->loadTemplate("@Storefront/storefront/component/address/address.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 97)->display(twig_array_merge($context, ["address" =>         // line 98
($context["defaultShippingAddress"] ?? null)]));
        // line 100
        echo "                                            ";
    }

    // line 110
    public function block_page_account_address_item_content_create($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "                <div class=\"address-action-create\">
                    <a href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.create.page");
        echo "\"
                       title=\"";
        // line 113
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressCreateBtn")), "html", null, true);
        echo "\"
                       class=\"btn btn-primary\">
                        ";
        // line 115
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressCreateBtn"));
        echo "
                    </a>
                </div>
            ";
    }

    // line 120
    public function block_page_account_address_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "                <div class=\"address-list\">
                    <div class=\"h3\">
                        ";
        // line 123
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressListHeader"));
        echo "
                    </div>

                    <div class=\"row\">
                        ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "addresses", [], "any", false, false, false, 127));
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
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 128
            echo "                            <div class=\"col-sm-6 card-col address-card\">
                                <div class=\"card other-address\">
                                    <div class=\"card-body\">
                                        ";
            // line 131
            $this->displayBlock('page_account_address_overview_body', $context, $blocks);
            // line 144
            echo "                                    </div>
                                </div>
                            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "                    </div>
                </div>
            ";
    }

    // line 131
    public function block_page_account_address_overview_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 132
        echo "                                            <div class=\"address-item-body\">
                                                ";
        // line 133
        $this->displayBlock('page_account_address_overview_address', $context, $blocks);
        // line 136
        echo "
                                                ";
        // line 137
        $this->displayBlock('page_account_address_overview_actions', $context, $blocks);
        // line 142
        echo "                                            </div>
                                        ";
    }

    // line 133
    public function block_page_account_address_overview_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "                                                    ";
        $this->loadTemplate("@Storefront/storefront/component/address/address.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 134)->display(twig_array_merge($context, ["showShippingWarning" => (0 !== twig_compare(sw_get_attribute($this->env, $this->source, ($context["defaultShippingAddress"] ?? null), "id", [], "any", false, false, false, 134), sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 134)))]));
        // line 135
        echo "                                                ";
    }

    // line 137
    public function block_page_account_address_overview_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "                                                    <div class=\"card-actions\">
                                                        ";
        // line 139
        $this->loadTemplate("@Storefront/storefront/page/account/addressbook/address-actions.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 139)->display($context);
        // line 140
        echo "                                                    </div>
                                                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/addressbook/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  496 => 140,  494 => 139,  491 => 138,  487 => 137,  483 => 135,  480 => 134,  476 => 133,  471 => 142,  469 => 137,  466 => 136,  464 => 133,  461 => 132,  457 => 131,  451 => 148,  434 => 144,  432 => 131,  427 => 128,  410 => 127,  403 => 123,  399 => 121,  395 => 120,  387 => 115,  382 => 113,  378 => 112,  375 => 111,  371 => 110,  367 => 100,  365 => 98,  363 => 97,  359 => 96,  352 => 93,  349 => 92,  345 => 91,  340 => 101,  337 => 96,  335 => 91,  332 => 90,  328 => 89,  321 => 103,  319 => 89,  314 => 86,  310 => 85,  306 => 77,  304 => 75,  302 => 74,  298 => 73,  291 => 70,  288 => 69,  284 => 68,  279 => 78,  276 => 73,  274 => 68,  271 => 67,  267 => 66,  260 => 80,  258 => 66,  253 => 63,  249 => 62,  244 => 107,  242 => 85,  239 => 84,  237 => 62,  234 => 61,  230 => 60,  226 => 151,  224 => 120,  221 => 119,  219 => 110,  216 => 109,  214 => 60,  211 => 59,  208 => 58,  205 => 57,  201 => 56,  197 => 54,  194 => 53,  191 => 49,  188 => 48,  185 => 47,  182 => 43,  179 => 42,  175 => 41,  171 => 39,  168 => 38,  165 => 34,  162 => 33,  159 => 32,  156 => 28,  153 => 27,  150 => 26,  147 => 22,  144 => 21,  140 => 20,  133 => 14,  130 => 13,  126 => 12,  119 => 9,  116 => 8,  112 => 7,  107 => 17,  104 => 12,  102 => 7,  99 => 6,  95 => 5,  90 => 152,  88 => 56,  85 => 55,  83 => 41,  80 => 40,  78 => 20,  75 => 19,  73 => 5,  70 => 4,  66 => 3,  55 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/account/addressbook/index.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/account/addressbook/index.html.twig");
    }
}
