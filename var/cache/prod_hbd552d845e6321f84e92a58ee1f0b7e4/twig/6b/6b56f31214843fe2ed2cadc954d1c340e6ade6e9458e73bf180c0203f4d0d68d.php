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

/* @Storefront/storefront/component/address/address-editor-modal.html.twig */
class __TwigTemplate_80e6b8009b820c89bae73a898e523bc5346c10d3d18447beef8e77a9c95d0b98 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_address_address_editor_modal' => [$this, 'block_component_address_address_editor_modal'],
            'component_address_address_editor_modal_inner' => [$this, 'block_component_address_address_editor_modal_inner'],
            'component_address_address_editor_modal_accordion_overview' => [$this, 'block_component_address_address_editor_modal_accordion_overview'],
            'component_address_address_editor_modal_accordion_overview_billing' => [$this, 'block_component_address_address_editor_modal_accordion_overview_billing'],
            'component_address_address_editor_modal_accordion_overview_billing_card' => [$this, 'block_component_address_address_editor_modal_accordion_overview_billing_card'],
            'component_address_address_editor_modal_accordion_overview_billing_card_body' => [$this, 'block_component_address_address_editor_modal_accordion_overview_billing_card_body'],
            'component_address_address_editor_modal_accordion_overview_billing_card_title' => [$this, 'block_component_address_address_editor_modal_accordion_overview_billing_card_title'],
            'component_address_address_editor_modal_accordion_overview_billing_card_title_text' => [$this, 'block_component_address_address_editor_modal_accordion_overview_billing_card_title_text'],
            'component_address_address_editor_modal_accordion_overview_billing_card_address' => [$this, 'block_component_address_address_editor_modal_accordion_overview_billing_card_address'],
            'component_address_address_editor_modal_accordion_overview_shipping' => [$this, 'block_component_address_address_editor_modal_accordion_overview_shipping'],
            'component_address_address_editor_modal_accordion_overview_shipping_card' => [$this, 'block_component_address_address_editor_modal_accordion_overview_shipping_card'],
            'component_address_address_editor_modal_accordion_overview_shipping_card_body' => [$this, 'block_component_address_address_editor_modal_accordion_overview_shipping_card_body'],
            'component_address_address_editor_modal_accordion_overview_shipping_card_title' => [$this, 'block_component_address_address_editor_modal_accordion_overview_shipping_card_title'],
            'component_address_address_editor_modal_accordion_overview_shipping_card_title_text' => [$this, 'block_component_address_address_editor_modal_accordion_overview_shipping_card_title_text'],
            'component_address_address_editor_modal_accordion_overview_shipping_card_warning' => [$this, 'block_component_address_address_editor_modal_accordion_overview_shipping_card_warning'],
            'component_address_address_editor_modal_accordion_overview_shipping_card_address' => [$this, 'block_component_address_address_editor_modal_accordion_overview_shipping_card_address'],
            'component_address_address_editor_modal_accordion_actions' => [$this, 'block_component_address_address_editor_modal_accordion_actions'],
            'component_address_address_editor_modal_accordion_action_edit' => [$this, 'block_component_address_address_editor_modal_accordion_action_edit'],
            'component_address_address_editor_modal_accordion_action_list' => [$this, 'block_component_address_address_editor_modal_accordion_action_list'],
            'component_address_address_editor_modal_accordion_action_create' => [$this, 'block_component_address_address_editor_modal_accordion_action_create'],
            'component_address_address_editor_modal_accordion' => [$this, 'block_component_address_address_editor_modal_accordion'],
            'component_address_address_editor_modal_accordion_inner' => [$this, 'block_component_address_address_editor_modal_accordion_inner'],
            'component_address_address_editor_modal_accordion_list_include' => [$this, 'block_component_address_address_editor_modal_accordion_list_include'],
            'component_address_address_editor_modal_accordion_edit_include' => [$this, 'block_component_address_address_editor_modal_accordion_edit_include'],
            'component_address_address_editor_modal_accordion_create_include' => [$this, 'block_component_address_address_editor_modal_accordion_create_include'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["defaultBillingAddressId"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 1), "defaultBillingAddressId", [], "any", false, false, false, 1);
        // line 2
        $context["defaultShippingAddressId"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 2), "defaultShippingAddressId", [], "any", false, false, false, 2);
        // line 3
        echo "
";
        // line 4
        $context["address"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 4), "defaultBillingAddress", [], "any", false, false, false, 4);
        // line 5
        if (($context["changeShipping"] ?? null)) {
            // line 6
            echo "    ";
            $context["address"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 6), "defaultShippingAddress", [], "any", false, false, false, 6);
        }
        // line 8
        echo "
";
        // line 9
        $context["typePrefix"] = ((($context["changeShipping"] ?? null)) ? ("shipping-") : ("billing-"));
        // line 10
        echo "
";
        // line 11
        $context["AvailableAddressCount"] = 0;
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "addresses", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 13
            echo "    ";
            if ((((0 !== twig_compare(sw_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 13), ($context["defaultShippingAddressId"] ?? null))) && ($context["changeShipping"] ?? null)) || ((0 !== twig_compare(sw_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 13), ($context["defaultBillingAddressId"] ?? null))) && ($context["changeBilling"] ?? null)))) {
                // line 14
                echo "        ";
                $context["AvailableAddressCount"] = (($context["AvailableAddressCount"] ?? null) + 1);
                // line 15
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('component_address_address_editor_modal', $context, $blocks);
    }

    public function block_component_address_address_editor_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <div class=\"js-address-editor\">
        ";
        // line 20
        $this->displayBlock('component_address_address_editor_modal_inner', $context, $blocks);
        // line 170
        echo "    </div>
";
    }

    // line 20
    public function block_component_address_address_editor_modal_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "
            ";
        // line 22
        $this->displayBlock('component_address_address_editor_modal_accordion_overview', $context, $blocks);
        // line 91
        echo "
            ";
        // line 92
        $this->displayBlock('component_address_address_editor_modal_accordion_actions', $context, $blocks);
        // line 131
        echo "
            ";
        // line 132
        $this->displayBlock('component_address_address_editor_modal_accordion', $context, $blocks);
        // line 169
        echo "        ";
    }

    // line 22
    public function block_component_address_address_editor_modal_accordion_overview($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                ";
        if ( !sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "address", [], "any", false, false, false, 23)) {
            // line 24
            echo "
                    ";
            // line 25
            $this->displayBlock('component_address_address_editor_modal_accordion_overview_billing', $context, $blocks);
            // line 50
            echo "
                    ";
            // line 51
            $this->displayBlock('component_address_address_editor_modal_accordion_overview_shipping', $context, $blocks);
            // line 89
            echo "                ";
        }
        // line 90
        echo "            ";
    }

    // line 25
    public function block_component_address_address_editor_modal_accordion_overview_billing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                        ";
        if (($context["changeBilling"] ?? null)) {
            // line 27
            echo "                            ";
            $this->displayBlock('component_address_address_editor_modal_accordion_overview_billing_card', $context, $blocks);
            // line 48
            echo "                        ";
        }
        // line 49
        echo "                    ";
    }

    // line 27
    public function block_component_address_address_editor_modal_accordion_overview_billing_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                                <div class=\"card\">
                                    ";
        // line 29
        $this->displayBlock('component_address_address_editor_modal_accordion_overview_billing_card_body', $context, $blocks);
        // line 46
        echo "                                </div>
                            ";
    }

    // line 29
    public function block_component_address_address_editor_modal_accordion_overview_billing_card_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "                                        <div class=\"card-body\">
                                            ";
        // line 31
        $this->displayBlock('component_address_address_editor_modal_accordion_overview_billing_card_title', $context, $blocks);
        // line 38
        echo "
                                            ";
        // line 39
        $this->displayBlock('component_address_address_editor_modal_accordion_overview_billing_card_address', $context, $blocks);
        // line 44
        echo "                                        </div>
                                    ";
    }

    // line 31
    public function block_component_address_address_editor_modal_accordion_overview_billing_card_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "                                                <div class=\"card-title\">
                                                    ";
        // line 33
        $this->displayBlock('component_address_address_editor_modal_accordion_overview_billing_card_title_text', $context, $blocks);
        // line 36
        echo "                                                </div>
                                            ";
    }

    // line 33
    public function block_component_address_address_editor_modal_accordion_overview_billing_card_title_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                                                        ";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesTitleCurrentBillingAddress"));
        echo "
                                                    ";
    }

    // line 39
    public function block_component_address_address_editor_modal_accordion_overview_billing_card_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "                                                ";
        $this->loadTemplate("@Storefront/storefront/component/address/address.html.twig", "@Storefront/storefront/component/address/address-editor-modal.html.twig", 40)->display(twig_array_merge($context, ["address" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 41
($context["context"] ?? null), "customer", [], "any", false, false, false, 41), "defaultBillingAddress", [], "any", false, false, false, 41)]));
        // line 43
        echo "                                            ";
    }

    // line 51
    public function block_component_address_address_editor_modal_accordion_overview_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                        ";
        if (($context["changeShipping"] ?? null)) {
            // line 53
            echo "                            ";
            $this->displayBlock('component_address_address_editor_modal_accordion_overview_shipping_card', $context, $blocks);
            // line 87
            echo "                        ";
        }
        // line 88
        echo "                    ";
    }

    // line 53
    public function block_component_address_address_editor_modal_accordion_overview_shipping_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "                                <div class=\"card\">
                                    ";
        // line 55
        $this->displayBlock('component_address_address_editor_modal_accordion_overview_shipping_card_body', $context, $blocks);
        // line 85
        echo "                                </div>
                            ";
    }

    // line 55
    public function block_component_address_address_editor_modal_accordion_overview_shipping_card_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "                                        <div class=\"card-body\">
                                            ";
        // line 57
        $this->displayBlock('component_address_address_editor_modal_accordion_overview_shipping_card_title', $context, $blocks);
        // line 64
        echo "
                                            ";
        // line 65
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_15707")) {
            // line 66
            echo "                                                ";
            $this->displayBlock('component_address_address_editor_modal_accordion_overview_shipping_card_warning', $context, $blocks);
            // line 76
            echo "                                            ";
        }
        // line 77
        echo "
                                            ";
        // line 78
        $this->displayBlock('component_address_address_editor_modal_accordion_overview_shipping_card_address', $context, $blocks);
        // line 83
        echo "                                        </div>
                                    ";
    }

    // line 57
    public function block_component_address_address_editor_modal_accordion_overview_shipping_card_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "                                                <div class=\"card-title\">
                                                    ";
        // line 59
        $this->displayBlock('component_address_address_editor_modal_accordion_overview_shipping_card_title_text', $context, $blocks);
        // line 62
        echo "                                                </div>
                                            ";
    }

    // line 59
    public function block_component_address_address_editor_modal_accordion_overview_shipping_card_title_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "                                                        ";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesTitleCurrentShippingAddress"));
        echo "
                                                    ";
    }

    // line 66
    public function block_component_address_address_editor_modal_accordion_overview_shipping_card_warning($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "                                                    ";
        $context["ableToShipToDefaultShippingAddress"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 67), "defaultShippingAddress", [], "any", false, false, false, 67), "country", [], "any", false, false, false, 67), "shippingAvailable", [], "any", false, false, false, 67);
        // line 68
        echo "
                                                    ";
        // line 69
        if ( !($context["ableToShipToDefaultShippingAddress"] ?? null)) {
            // line 70
            echo "                                                        ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/address/address-editor-modal.html.twig", 70)->display(twig_array_merge($context, ["type" => "warning", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.countryNoShippingAlert"))]));
            // line 74
            echo "                                                    ";
        }
        // line 75
        echo "                                                ";
    }

    // line 78
    public function block_component_address_address_editor_modal_accordion_overview_shipping_card_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "                                                ";
        $this->loadTemplate("@Storefront/storefront/component/address/address.html.twig", "@Storefront/storefront/component/address/address-editor-modal.html.twig", 79)->display(twig_array_merge($context, ["address" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 80
($context["context"] ?? null), "customer", [], "any", false, false, false, 80), "defaultShippingAddress", [], "any", false, false, false, 80)]));
        // line 82
        echo "                                            ";
    }

    // line 92
    public function block_component_address_address_editor_modal_accordion_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "                ";
        if ( !sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "address", [], "any", false, false, false, 93)) {
            // line 94
            echo "                    <div class=\"row\">

                        ";
            // line 96
            $this->displayBlock('component_address_address_editor_modal_accordion_action_edit', $context, $blocks);
            // line 105
            echo "
                        ";
            // line 106
            $this->displayBlock('component_address_address_editor_modal_accordion_action_list', $context, $blocks);
            // line 117
            echo "
                        ";
            // line 118
            $this->displayBlock('component_address_address_editor_modal_accordion_action_create', $context, $blocks);
            // line 127
            echo "
                    </div>
                ";
        }
        // line 130
        echo "            ";
    }

    // line 96
    public function block_component_address_address_editor_modal_accordion_action_edit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "                            <div class=\"col-12 col-md-4\">
                                <div class=\"btn btn-outline-primary btn-block address-editor-edit create collapsed\"
                                     ";
        // line 99
        echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
        echo "=\"collapse\"
                                     ";
        // line 100
        echo sw_escape_filter($this->env, ($context["dataBsTargetAttr"] ?? null), "html", null, true);
        echo "=\"#";
        echo sw_escape_filter($this->env, ($context["typePrefix"] ?? null), "html", null, true);
        echo "address-create-edit\">
                                    ";
        // line 101
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressEditBtn"));
        echo "
                                </div>
                            </div>
                        ";
    }

    // line 106
    public function block_component_address_address_editor_modal_accordion_action_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "                            ";
        if ((1 === twig_compare(($context["AvailableAddressCount"] ?? null), 0))) {
            // line 108
            echo "                                <div class=\"col-12 col-md-4\">
                                    <div class=\"btn btn-outline-primary btn-block address-editor-select\"
                                         ";
            // line 110
            echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
            echo "=\"collapse\"
                                         ";
            // line 111
            echo sw_escape_filter($this->env, ($context["dataBsTargetAttr"] ?? null), "html", null, true);
            echo "=\"#";
            echo sw_escape_filter($this->env, ($context["typePrefix"] ?? null), "html", null, true);
            echo "address-list\">
                                        ";
            // line 112
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.selectAddress"));
            echo "
                                    </div>
                                </div>
                            ";
        }
        // line 116
        echo "                        ";
    }

    // line 118
    public function block_component_address_address_editor_modal_accordion_action_create($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        echo "                            <div class=\"col-12 col-md-4\">
                                <div class=\"btn btn-outline-primary btn-block address-editor-create collapsed\"
                                     ";
        // line 121
        echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
        echo "=\"collapse\"
                                     ";
        // line 122
        echo sw_escape_filter($this->env, ($context["dataBsTargetAttr"] ?? null), "html", null, true);
        echo "=\"#";
        echo sw_escape_filter($this->env, ($context["typePrefix"] ?? null), "html", null, true);
        echo "address-create-new\">
                                    ";
        // line 123
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressCreateBtn"));
        echo "
                                </div>
                            </div>
                        ";
    }

    // line 132
    public function block_component_address_address_editor_modal_accordion($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        echo "                <div id=\"";
        echo sw_escape_filter($this->env, ($context["typePrefix"] ?? null), "html", null, true);
        echo "addressEditorAccordion\">
                    ";
        // line 134
        $this->displayBlock('component_address_address_editor_modal_accordion_inner', $context, $blocks);
        // line 167
        echo "                </div>
            ";
    }

    // line 134
    public function block_component_address_address_editor_modal_accordion_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 135
        echo "
                        ";
        // line 136
        $this->displayBlock('component_address_address_editor_modal_accordion_list_include', $context, $blocks);
        // line 149
        echo "
                        ";
        // line 150
        $this->displayBlock('component_address_address_editor_modal_accordion_edit_include', $context, $blocks);
        // line 157
        echo "
                        ";
        // line 158
        $this->displayBlock('component_address_address_editor_modal_accordion_create_include', $context, $blocks);
        // line 165
        echo "
                    ";
    }

    // line 136
    public function block_component_address_address_editor_modal_accordion_list_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 137
        echo "                            ";
        if (( !sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "address", [], "any", false, false, false, 137) && (1 === twig_compare(($context["AvailableAddressCount"] ?? null), 0)))) {
            // line 138
            echo "                                ";
            $this->loadTemplate("@Storefront/storefront/component/address/address-editor-modal-list.html.twig", "@Storefront/storefront/component/address/address-editor-modal.html.twig", 138)->display(twig_array_merge($context, ["address" => sw_get_attribute($this->env, $this->source,             // line 139
($context["page"] ?? null), "address", [], "any", false, false, false, 139), "addresses" => sw_get_attribute($this->env, $this->source,             // line 140
($context["page"] ?? null), "addresses", [], "any", false, false, false, 140), "defaultBillingAddress" =>             // line 141
($context["defaultBillingAddressId"] ?? null), "defaultShippingAddress" =>             // line 142
($context["defaultShippingAddressId"] ?? null), "changeShipping" =>             // line 143
($context["changeShipping"] ?? null), "changeBilling" =>             // line 144
($context["changeBilling"] ?? null), "typePrefix" =>             // line 145
($context["typePrefix"] ?? null)]));
            // line 147
            echo "                            ";
        }
        // line 148
        echo "                        ";
    }

    // line 150
    public function block_component_address_address_editor_modal_accordion_edit_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        echo "                            ";
        $this->loadTemplate("@Storefront/storefront/component/address/address-editor-modal-create-address.html.twig", "@Storefront/storefront/component/address/address-editor-modal.html.twig", 151)->display(twig_array_merge($context, ["address" =>         // line 152
($context["address"] ?? null), "addresses" => sw_get_attribute($this->env, $this->source,         // line 153
($context["page"] ?? null), "addresses", [], "any", false, false, false, 153), "typePrefix" =>         // line 154
($context["typePrefix"] ?? null)]));
        // line 156
        echo "                        ";
    }

    // line 158
    public function block_component_address_address_editor_modal_accordion_create_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 159
        echo "                            ";
        $this->loadTemplate("@Storefront/storefront/component/address/address-editor-modal-create-address.html.twig", "@Storefront/storefront/component/address/address-editor-modal.html.twig", 159)->display(twig_array_merge($context, ["address" => sw_get_attribute($this->env, $this->source,         // line 160
($context["page"] ?? null), "address", [], "any", false, false, false, 160), "addresses" => sw_get_attribute($this->env, $this->source,         // line 161
($context["page"] ?? null), "addresses", [], "any", false, false, false, 161), "typePrefix" =>         // line 162
($context["typePrefix"] ?? null)]));
        // line 164
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/address/address-editor-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  582 => 164,  580 => 162,  579 => 161,  578 => 160,  576 => 159,  572 => 158,  568 => 156,  566 => 154,  565 => 153,  564 => 152,  562 => 151,  558 => 150,  554 => 148,  551 => 147,  549 => 145,  548 => 144,  547 => 143,  546 => 142,  545 => 141,  544 => 140,  543 => 139,  541 => 138,  538 => 137,  534 => 136,  529 => 165,  527 => 158,  524 => 157,  522 => 150,  519 => 149,  517 => 136,  514 => 135,  510 => 134,  505 => 167,  503 => 134,  498 => 133,  494 => 132,  486 => 123,  480 => 122,  476 => 121,  472 => 119,  468 => 118,  464 => 116,  457 => 112,  451 => 111,  447 => 110,  443 => 108,  440 => 107,  436 => 106,  428 => 101,  422 => 100,  418 => 99,  414 => 97,  410 => 96,  406 => 130,  401 => 127,  399 => 118,  396 => 117,  394 => 106,  391 => 105,  389 => 96,  385 => 94,  382 => 93,  378 => 92,  374 => 82,  372 => 80,  370 => 79,  366 => 78,  362 => 75,  359 => 74,  356 => 70,  354 => 69,  351 => 68,  348 => 67,  344 => 66,  337 => 60,  333 => 59,  328 => 62,  326 => 59,  323 => 58,  319 => 57,  314 => 83,  312 => 78,  309 => 77,  306 => 76,  303 => 66,  301 => 65,  298 => 64,  296 => 57,  293 => 56,  289 => 55,  284 => 85,  282 => 55,  279 => 54,  275 => 53,  271 => 88,  268 => 87,  265 => 53,  262 => 52,  258 => 51,  254 => 43,  252 => 41,  250 => 40,  246 => 39,  239 => 34,  235 => 33,  230 => 36,  228 => 33,  225 => 32,  221 => 31,  216 => 44,  214 => 39,  211 => 38,  209 => 31,  206 => 30,  202 => 29,  197 => 46,  195 => 29,  192 => 28,  188 => 27,  184 => 49,  181 => 48,  178 => 27,  175 => 26,  171 => 25,  167 => 90,  164 => 89,  162 => 51,  159 => 50,  157 => 25,  154 => 24,  151 => 23,  147 => 22,  143 => 169,  141 => 132,  138 => 131,  136 => 92,  133 => 91,  131 => 22,  128 => 21,  124 => 20,  119 => 170,  117 => 20,  114 => 19,  107 => 18,  104 => 17,  97 => 15,  94 => 14,  91 => 13,  87 => 12,  85 => 11,  82 => 10,  80 => 9,  77 => 8,  73 => 6,  71 => 5,  69 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/address/address-editor-modal.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/address/address-editor-modal.html.twig");
    }
}
