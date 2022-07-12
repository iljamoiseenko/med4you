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

/* @Storefront/storefront/component/address/address-editor-modal-create-address.html.twig */
class __TwigTemplate_7e8064d0163e8d68f6b22e7db13cdfcab1aad94c4ae717ca8a2b021fc8f3fac3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_address_address_editor_modal_create_address' => [$this, 'block_component_address_address_editor_modal_create_address'],
            'component_address_address_editor_modal_create_address_wrapper' => [$this, 'block_component_address_address_editor_modal_create_address_wrapper'],
            'component_address_address_editor_modal_create_address_title' => [$this, 'block_component_address_address_editor_modal_create_address_title'],
            'component_address_address_editor_modal_create_address_title_text' => [$this, 'block_component_address_address_editor_modal_create_address_title_text'],
            'component_address_address_editor_modal_create_address_card_body' => [$this, 'block_component_address_address_editor_modal_create_address_card_body'],
            'component_address_address_editor_modal_create_address_form' => [$this, 'block_component_address_address_editor_modal_create_address_form'],
            'component_address_address_editor_modal_create_address_form_csrf' => [$this, 'block_component_address_address_editor_modal_create_address_form_csrf'],
            'component_address_address_editor_modal_create_address_form_hidden_inputs' => [$this, 'block_component_address_address_editor_modal_create_address_form_hidden_inputs'],
            'component_address_address_editor_modal_create_address_form_fields_include' => [$this, 'block_component_address_address_editor_modal_create_address_form_fields_include'],
            'component_address_address_editor_modal_create_address_required_hint' => [$this, 'block_component_address_address_editor_modal_create_address_required_hint'],
            'component_address_address_editor_modal_create_address_required_hint_text' => [$this, 'block_component_address_address_editor_modal_create_address_required_hint_text'],
            'component_address_address_editor_modal_create_address_form_actions' => [$this, 'block_component_address_address_editor_modal_create_address_form_actions'],
            'component_address_address_editor_modal_create_address_form_actions_submit' => [$this, 'block_component_address_address_editor_modal_create_address_form_actions_submit'],
            'component_address_address_editor_modal_create_address_form_actions_submit_text' => [$this, 'block_component_address_address_editor_modal_create_address_form_actions_submit_text'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_address_address_editor_modal_create_address', $context, $blocks);
    }

    public function block_component_address_address_editor_modal_create_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div id=\"";
        echo sw_escape_filter($this->env, ($context["typePrefix"] ?? null), "html", null, true);
        if (($context["address"] ?? null)) {
            echo "address-create-edit";
        } else {
            echo "address-create-new";
        }
        echo "\"
         class=\"collapse\"
         data-parent=\"#";
        // line 4
        echo sw_escape_filter($this->env, ($context["typePrefix"] ?? null), "html", null, true);
        echo "addressEditorAccordion\">
        ";
        // line 5
        $this->displayBlock('component_address_address_editor_modal_create_address_wrapper', $context, $blocks);
        // line 94
        echo "    </div>
";
    }

    // line 5
    public function block_component_address_address_editor_modal_create_address_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            <div class=\"card address-editor-create-address-wrapper\">
                ";
        // line 7
        $this->displayBlock('component_address_address_editor_modal_create_address_title', $context, $blocks);
        // line 18
        echo "
                ";
        // line 19
        $context["formAjaxSubmitOptions"] = [];
        // line 20
        echo "
                ";
        // line 21
        $this->displayBlock('component_address_address_editor_modal_create_address_card_body', $context, $blocks);
        // line 92
        echo "            </div>
        ";
    }

    // line 7
    public function block_component_address_address_editor_modal_create_address_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "                    <div class=\"card-title create-address-title\">
                        ";
        // line 9
        $this->displayBlock('component_address_address_editor_modal_create_address_title_text', $context, $blocks);
        // line 16
        echo "                    </div>
                ";
    }

    // line 9
    public function block_component_address_address_editor_modal_create_address_title_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                            ";
        if (($context["address"] ?? null)) {
            // line 11
            echo "                                ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressEditWelcome"));
            echo "
                            ";
        } else {
            // line 13
            echo "                                ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressCreateWelcome"));
            echo "
                            ";
        }
        // line 15
        echo "                        ";
    }

    // line 21
    public function block_component_address_address_editor_modal_create_address_card_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "                    <div class=\"card-body\">
                        ";
        // line 23
        $this->displayBlock('component_address_address_editor_modal_create_address_form', $context, $blocks);
        // line 90
        echo "                    </div>
                ";
    }

    // line 23
    public function block_component_address_address_editor_modal_create_address_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                            <form method=\"post\"
                                  action=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.addressbook");
        echo "\"
                                  class=\"js-close-address-editor\"
                                  data-form-ajax-submit=\"true\"
                                  data-form-ajax-submit-options='";
        // line 28
        echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["formAjaxSubmitOptions"] ?? null)]), "html", null, true);
        echo "'>

                                ";
        // line 30
        $this->displayBlock('component_address_address_editor_modal_create_address_form_csrf', $context, $blocks);
        // line 33
        echo "
                                ";
        // line 34
        $this->displayBlock('component_address_address_editor_modal_create_address_form_hidden_inputs', $context, $blocks);
        // line 45
        echo "
                                ";
        // line 46
        $this->displayBlock('component_address_address_editor_modal_create_address_form_fields_include', $context, $blocks);
        // line 66
        echo "
                                ";
        // line 67
        $this->displayBlock('component_address_address_editor_modal_create_address_required_hint', $context, $blocks);
        // line 74
        echo "
                                ";
        // line 75
        $this->displayBlock('component_address_address_editor_modal_create_address_form_actions', $context, $blocks);
        // line 88
        echo "                            </form>
                        ";
    }

    // line 30
    public function block_component_address_address_editor_modal_create_address_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.addressbook");
        echo "
                                ";
    }

    // line 34
    public function block_component_address_address_editor_modal_create_address_form_hidden_inputs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "                                    <input type=\"hidden\"
                                           name=\"changeableAddresses[changeBilling]\"
                                           value=\"";
        // line 37
        echo sw_escape_filter($this->env, ($context["changeBilling"] ?? null), "html", null, true);
        echo "\">
                                    <input type=\"hidden\"
                                           name=\"addressId\"
                                           value=\"";
        // line 40
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 40), "html", null, true);
        echo "\">
                                    <input type=\"hidden\"
                                           name=\"changeableAddresses[changeShipping]\"
                                           value=\"";
        // line 43
        echo sw_escape_filter($this->env, ($context["changeShipping"] ?? null), "html", null, true);
        echo "\">
                                ";
    }

    // line 46
    public function block_component_address_address_editor_modal_create_address_form_fields_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/component/address/address-personal.html.twig", "@Storefront/storefront/component/address/address-editor-modal-create-address.html.twig", 47)->display(twig_array_merge($context, ["data" =>         // line 48
($context["address"] ?? null), "prefix" => "address", "idPrefix" =>         // line 50
($context["typePrefix"] ?? null), "scope" => "parent", "parentSelector" => "form"]));
        // line 54
        echo "
                                    ";
        // line 55
        $this->loadTemplate("@Storefront/storefront/component/address/address-form.html.twig", "@Storefront/storefront/component/address/address-editor-modal-create-address.html.twig", 55)->display(twig_array_merge($context, ["data" =>         // line 56
($context["address"] ?? null), "prefix" => "address", "idPrefix" =>         // line 58
($context["typePrefix"] ?? null), "scope" => "parent", "parentSelector" => "form", "showFormCompany" => true, "showNoShippingPostfix" => true, "showVatIdField" => ((((($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_15957") &&         // line 63
($context["changeBilling"] ?? null)) && sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 63)) && sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 63), "guest", [], "any", false, false, false, 63))) ? (true) : (false))]));
        // line 65
        echo "                                ";
    }

    // line 67
    public function block_component_address_address_editor_modal_create_address_required_hint($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "                                    <p class=\"address-required-info required-fields\">
                                        ";
        // line 69
        $this->displayBlock('component_address_address_editor_modal_create_address_required_hint_text', $context, $blocks);
        // line 72
        echo "                                    </p>
                                ";
    }

    // line 69
    public function block_component_address_address_editor_modal_create_address_required_hint_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "                                            ";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.requiredFields"));
        echo "
                                        ";
    }

    // line 75
    public function block_component_address_address_editor_modal_create_address_form_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "                                    <div class=\"address-form-actions\">
                                        ";
        // line 77
        $this->displayBlock('component_address_address_editor_modal_create_address_form_actions_submit', $context, $blocks);
        // line 86
        echo "                                    </div>
                                ";
    }

    // line 77
    public function block_component_address_address_editor_modal_create_address_form_actions_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "                                            <button type=\"submit\"
                                                    class=\"address-form-submit btn btn-primary\"
                                                    title=\"";
        // line 80
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressSaveChange")), "html", null, true);
        echo "\">
                                                ";
        // line 81
        $this->displayBlock('component_address_address_editor_modal_create_address_form_actions_submit_text', $context, $blocks);
        // line 84
        echo "                                            </button>
                                        ";
    }

    // line 81
    public function block_component_address_address_editor_modal_create_address_form_actions_submit_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "                                                    ";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressSaveChange"));
        echo "
                                                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/address/address-editor-modal-create-address.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 82,  316 => 81,  311 => 84,  309 => 81,  305 => 80,  301 => 78,  297 => 77,  292 => 86,  290 => 77,  287 => 76,  283 => 75,  276 => 70,  272 => 69,  267 => 72,  265 => 69,  262 => 68,  258 => 67,  254 => 65,  252 => 63,  251 => 58,  250 => 56,  249 => 55,  246 => 54,  244 => 50,  243 => 48,  241 => 47,  237 => 46,  231 => 43,  225 => 40,  219 => 37,  215 => 35,  211 => 34,  204 => 31,  200 => 30,  195 => 88,  193 => 75,  190 => 74,  188 => 67,  185 => 66,  183 => 46,  180 => 45,  178 => 34,  175 => 33,  173 => 30,  168 => 28,  162 => 25,  159 => 24,  155 => 23,  150 => 90,  148 => 23,  145 => 22,  141 => 21,  137 => 15,  131 => 13,  125 => 11,  122 => 10,  118 => 9,  113 => 16,  111 => 9,  108 => 8,  104 => 7,  99 => 92,  97 => 21,  94 => 20,  92 => 19,  89 => 18,  87 => 7,  84 => 6,  80 => 5,  75 => 94,  73 => 5,  69 => 4,  58 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/address/address-editor-modal-create-address.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/address/address-editor-modal-create-address.html.twig");
    }
}
