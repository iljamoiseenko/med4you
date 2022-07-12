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

/* @Storefront/storefront/page/account/addressbook/address-actions.html.twig */
class __TwigTemplate_ceec5bbfc9d851da9b99db2add8fcf4e91eeddd8c82984a18220327da3fd769d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_account_address_actions' => [$this, 'block_page_account_address_actions'],
            'page_account_address_actions_set_default' => [$this, 'block_page_account_address_actions_set_default'],
            'page_account_address_actions_set_default_shipping' => [$this, 'block_page_account_address_actions_set_default_shipping'],
            'page_account_address_actions_set_default_shipping_csrf' => [$this, 'block_page_account_address_actions_set_default_shipping_csrf'],
            'page_account_address_actions_set_default_billing' => [$this, 'block_page_account_address_actions_set_default_billing'],
            'page_account_address_actions_set_default_billing_csrf' => [$this, 'block_page_account_address_actions_set_default_billing_csrf'],
            'page_account_address_actions_buttons' => [$this, 'block_page_account_address_actions_buttons'],
            'page_account_address_actions_update' => [$this, 'block_page_account_address_actions_update'],
            'page_account_address_actions_delete' => [$this, 'block_page_account_address_actions_delete'],
            'page_account_address_actions_delete_csrf' => [$this, 'block_page_account_address_actions_delete_csrf'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_account_address_actions', $context, $blocks);
    }

    public function block_page_account_address_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $this->displayBlock('page_account_address_actions_set_default', $context, $blocks);
        // line 44
        echo "
    ";
        // line 45
        $this->displayBlock('page_account_address_actions_buttons', $context, $blocks);
    }

    // line 2
    public function block_page_account_address_actions_set_default($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <div class=\"address-actions-defaults\">
            ";
        // line 4
        $this->displayBlock('page_account_address_actions_set_default_shipping', $context, $blocks);
        // line 23
        echo "
            ";
        // line 24
        $this->displayBlock('page_account_address_actions_set_default_billing', $context, $blocks);
        // line 42
        echo "        </div>
    ";
    }

    // line 4
    public function block_page_account_address_actions_set_default_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                ";
        if ((0 !== twig_compare(sw_get_attribute($this->env, $this->source, ($context["defaultShippingAddress"] ?? null), "id", [], "any", false, false, false, 5), sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 5)))) {
            // line 6
            echo "                    <form action=\"";
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.set-default-address", ["type" => "shipping", "addressId" => sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 6)]), "html", null, true);
            echo "\"
                          data-form-csrf-handler=\"true\"
                          method=\"post\">

                        ";
            // line 10
            $this->displayBlock('page_account_address_actions_set_default_shipping_csrf', $context, $blocks);
            // line 13
            echo "
                        <button type=\"submit\"
                                title=\"";
            // line 15
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesSetAsDefaultShippingAction")), "html", null, true);
            echo "\"
                                class=\"btn btn-link address-action-set-default address-action-set-default-shipping\"
                                ";
            // line 17
            if (($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_15707") &&  !sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "country", [], "any", false, false, false, 17), "shippingAvailable", [], "any", false, false, false, 17))) {
                echo " disabled=\"disabled\"";
            }
            echo ">
                            ";
            // line 18
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesSetAsDefaultShippingAction"));
            echo "
                        </button>
                    </form>
                ";
        }
        // line 22
        echo "            ";
    }

    // line 10
    public function block_page_account_address_actions_set_default_shipping_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "                            ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.address.set-default-address");
        echo "
                        ";
    }

    // line 24
    public function block_page_account_address_actions_set_default_billing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                ";
        if ((0 !== twig_compare(sw_get_attribute($this->env, $this->source, ($context["defaultBillingAddress"] ?? null), "id", [], "any", false, false, false, 25), sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 25)))) {
            // line 26
            echo "                    <form action=\"";
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.set-default-address", ["type" => "billing", "addressId" => sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\"
                          data-form-csrf-handler=\"true\"
                          method=\"post\">

                        ";
            // line 30
            $this->displayBlock('page_account_address_actions_set_default_billing_csrf', $context, $blocks);
            // line 33
            echo "
                        <button type=\"submit\"
                                title=\"";
            // line 35
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesSetAsDefaultBillingAction")), "html", null, true);
            echo "\"
                                class=\"btn btn-link address-action-set-default address-action-set-default-billing\">
                            ";
            // line 37
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesSetAsDefaultBillingAction"));
            echo "
                        </button>
                    </form>
                ";
        }
        // line 41
        echo "            ";
    }

    // line 30
    public function block_page_account_address_actions_set_default_billing_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                            ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.address.set-default-address");
        echo "
                        ";
    }

    // line 45
    public function block_page_account_address_actions_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "        <div class=\"row ";
        echo sw_escape_filter($this->env, ($context["gridNoGuttersClass"] ?? null), "html", null, true);
        echo " address-actions-buttons\">
            ";
        // line 47
        $this->displayBlock('page_account_address_actions_update', $context, $blocks);
        // line 56
        echo "
            ";
        // line 57
        $this->displayBlock('page_account_address_actions_delete', $context, $blocks);
        // line 78
        echo "        </div>
    ";
    }

    // line 47
    public function block_page_account_address_actions_update($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "                <div class=\"col-auto\">
                    <a href=\"";
        // line 49
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.edit.page", ["addressId" => sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 49)]), "html", null, true);
        echo "\"
                       title=\"";
        // line 50
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesContentItemActionEdit")), "html", null, true);
        echo "\"
                       class=\"btn btn-light btn-sm\">
                        ";
        // line 52
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesContentItemActionEdit"));
        echo "
                    </a>
                </div>
            ";
    }

    // line 57
    public function block_page_account_address_actions_delete($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "                ";
        if (((0 !== twig_compare(sw_get_attribute($this->env, $this->source, ($context["defaultShippingAddress"] ?? null), "id", [], "any", false, false, false, 58), sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 58))) && (0 !== twig_compare(sw_get_attribute($this->env, $this->source, ($context["defaultBillingAddress"] ?? null), "id", [], "any", false, false, false, 58), sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 58))))) {
            // line 59
            echo "                    <div class=\"col-auto\">
                        <form action=\"";
            // line 60
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.delete", ["addressId" => sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\"
                              data-form-csrf-handler=\"true\"
                              class=\"address-action-delete\"
                              method=\"post\">

                            ";
            // line 65
            $this->displayBlock('page_account_address_actions_delete_csrf', $context, $blocks);
            // line 68
            echo "
                            <button type=\"submit\"
                                    class=\"btn btn-light btn-sm\"
                                    title=\"";
            // line 71
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesContentItemActionDelete")), "html", null, true);
            echo "\">
                                ";
            // line 72
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesContentItemActionDelete"));
            echo "
                            </button>
                        </form>
                    </div>
                ";
        }
        // line 77
        echo "            ";
    }

    // line 65
    public function block_page_account_address_actions_delete_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.address.delete");
        echo "
                            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/addressbook/address-actions.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  275 => 66,  271 => 65,  267 => 77,  259 => 72,  255 => 71,  250 => 68,  248 => 65,  240 => 60,  237 => 59,  234 => 58,  230 => 57,  222 => 52,  217 => 50,  213 => 49,  210 => 48,  206 => 47,  201 => 78,  199 => 57,  196 => 56,  194 => 47,  189 => 46,  185 => 45,  178 => 31,  174 => 30,  170 => 41,  163 => 37,  158 => 35,  154 => 33,  152 => 30,  144 => 26,  141 => 25,  137 => 24,  130 => 11,  126 => 10,  122 => 22,  115 => 18,  109 => 17,  104 => 15,  100 => 13,  98 => 10,  90 => 6,  87 => 5,  83 => 4,  78 => 42,  76 => 24,  73 => 23,  71 => 4,  68 => 3,  64 => 2,  60 => 45,  57 => 44,  54 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/account/addressbook/address-actions.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/account/addressbook/address-actions.html.twig");
    }
}
