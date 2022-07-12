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

/* @Storefront/storefront/page/account/profile/index.html.twig */
class __TwigTemplate_d8b3f24995970fa7cf014706244ccc277918b751ce18b6ff8e02a9cd7ad3e937 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_account_main_content' => [$this, 'block_page_account_main_content'],
            'page_account_profile' => [$this, 'block_page_account_profile'],
            'page_account_profile_main' => [$this, 'block_page_account_profile_main'],
            'page_account_profile_personal_welcome' => [$this, 'block_page_account_profile_personal_welcome'],
            'page_account_profile_personal_welcome_headline' => [$this, 'block_page_account_profile_personal_welcome_headline'],
            'page_account_profile_personal_welcome_intro' => [$this, 'block_page_account_profile_personal_welcome_intro'],
            'page_account_profile_personal' => [$this, 'block_page_account_profile_personal'],
            'page_account_profile_personal_header' => [$this, 'block_page_account_profile_personal_header'],
            'page_account_profile_personal_form' => [$this, 'block_page_account_profile_personal_form'],
            'page_account_profile_personal_form_csrf' => [$this, 'block_page_account_profile_personal_form_csrf'],
            'page_account_profile_personal_fields' => [$this, 'block_page_account_profile_personal_fields'],
            'page_account_profile_personal_required' => [$this, 'block_page_account_profile_personal_required'],
            'page_account_profile_personal_action_buttons' => [$this, 'block_page_account_profile_personal_action_buttons'],
            'page_account_profile_personal_action_button_send' => [$this, 'block_page_account_profile_personal_action_button_send'],
            'page_account_profile_credentials' => [$this, 'block_page_account_profile_credentials'],
            'page_account_profile_credentials_header' => [$this, 'block_page_account_profile_credentials_header'],
            'page_account_profile_credentials_container' => [$this, 'block_page_account_profile_credentials_container'],
            'page_account_profile_credentials_current_mail' => [$this, 'block_page_account_profile_credentials_current_mail'],
            'page_account_profile_credentials_current_mail_label' => [$this, 'block_page_account_profile_credentials_current_mail_label'],
            'page_account_profile_credentials_change_mail' => [$this, 'block_page_account_profile_credentials_change_mail'],
            'page_account_profile_credentials_change_password' => [$this, 'block_page_account_profile_credentials_change_password'],
            'page_account_profile_mail_and_password' => [$this, 'block_page_account_profile_mail_and_password'],
            'page_account_profile_mail_collapse' => [$this, 'block_page_account_profile_mail_collapse'],
            'page_account_profile_mail_form' => [$this, 'block_page_account_profile_mail_form'],
            'page_account_profile_mail_form_csrf' => [$this, 'block_page_account_profile_mail_form_csrf'],
            'page_account_profile_mail_title' => [$this, 'block_page_account_profile_mail_title'],
            'page_account_profile_mail_container' => [$this, 'block_page_account_profile_mail_container'],
            'page_account_profile_mail' => [$this, 'block_page_account_profile_mail'],
            'page_account_profile_mail_label' => [$this, 'block_page_account_profile_mail_label'],
            'page_account_profile_mail_input' => [$this, 'block_page_account_profile_mail_input'],
            'page_account_profile_mail_input_error' => [$this, 'block_page_account_profile_mail_input_error'],
            'page_account_profile_mail_confirmation' => [$this, 'block_page_account_profile_mail_confirmation'],
            'page_account_profile_personal_mail_confirmation_label' => [$this, 'block_page_account_profile_personal_mail_confirmation_label'],
            'page_account_profile_mail_confirmation_input' => [$this, 'block_page_account_profile_mail_confirmation_input'],
            'page_account_profile_mail_confirmation_input_error' => [$this, 'block_page_account_profile_mail_confirmation_input_error'],
            'page_account_profile_mail_password' => [$this, 'block_page_account_profile_mail_password'],
            'page_account_profile_mail_password_label' => [$this, 'block_page_account_profile_mail_password_label'],
            'page_account_profile_mail_password_input' => [$this, 'block_page_account_profile_mail_password_input'],
            'page_account_profile_mail_password_input_error' => [$this, 'block_page_account_profile_mail_password_input_error'],
            'page_account_profile_mail_required' => [$this, 'block_page_account_profile_mail_required'],
            'page_account_profile_mail_action_buttons' => [$this, 'block_page_account_profile_mail_action_buttons'],
            'page_account_profile_mail_action_button_send' => [$this, 'block_page_account_profile_mail_action_button_send'],
            'page_account_profile_password' => [$this, 'block_page_account_profile_password'],
            'page_account_profile_password_form' => [$this, 'block_page_account_profile_password_form'],
            'page_account_profile_password_form_csrf' => [$this, 'block_page_account_profile_password_form_csrf'],
            'page_account_profile_password_title' => [$this, 'block_page_account_profile_password_title'],
            'page_account_profile_password_container' => [$this, 'block_page_account_profile_password_container'],
            'page_account_profile_new_password' => [$this, 'block_page_account_profile_new_password'],
            'page_account_profile_new_password_label' => [$this, 'block_page_account_profile_new_password_label'],
            'page_account_profile_new_password_input' => [$this, 'block_page_account_profile_new_password_input'],
            'page_account_profile_new_password_input_error' => [$this, 'block_page_account_profile_new_password_input_error'],
            'page_account_profile_new_password_confirmation' => [$this, 'block_page_account_profile_new_password_confirmation'],
            'page_account_profile_new_password_confirmation_label' => [$this, 'block_page_account_profile_new_password_confirmation_label'],
            'page_account_profile_new_password_confirmation_input' => [$this, 'block_page_account_profile_new_password_confirmation_input'],
            'page_account_profile_new_password_confirmation_error' => [$this, 'block_page_account_profile_new_password_confirmation_error'],
            'page_account_profile_current_password' => [$this, 'block_page_account_profile_current_password'],
            'page_account_profile_current_password_label' => [$this, 'block_page_account_profile_current_password_label'],
            'page_account_profile_current_password_input' => [$this, 'block_page_account_profile_current_password_input'],
            'page_account_profile_current_password_input_error' => [$this, 'block_page_account_profile_current_password_input_error'],
            'page_account_profile_password_required' => [$this, 'block_page_account_profile_password_required'],
            'page_account_profile_password_action_buttons' => [$this, 'block_page_account_profile_password_action_buttons'],
            'page_account_profile_password_action_button_send' => [$this, 'block_page_account_profile_password_action_button_send'],
            'page_account_profile_delete_account' => [$this, 'block_page_account_profile_delete_account'],
            'page_account_delete_account_confirm_modal' => [$this, 'block_page_account_delete_account_confirm_modal'],
            'page_account_delete_account_confirm_modal_content' => [$this, 'block_page_account_delete_account_confirm_modal_content'],
            'page_account_delete_account_confirm_modal_header' => [$this, 'block_page_account_delete_account_confirm_modal_header'],
            'page_account_delete_account_confirm_modal_header_title' => [$this, 'block_page_account_delete_account_confirm_modal_header_title'],
            'page_account_delete_account_confirm_modal_header_close_button' => [$this, 'block_page_account_delete_account_confirm_modal_header_close_button'],
            'page_account_delete_account_confirm_modal_body' => [$this, 'block_page_account_delete_account_confirm_modal_body'],
            'page_account_delete_account_confirm_modal_form' => [$this, 'block_page_account_delete_account_confirm_modal_form'],
            'page_account_delete_account_confirm_form_csrf' => [$this, 'block_page_account_delete_account_confirm_form_csrf'],
            'page_account_delete_account_confirm_alert' => [$this, 'block_page_account_delete_account_confirm_alert'],
            'page_account_delete_account_confirm_text' => [$this, 'block_page_account_delete_account_confirm_text'],
            'page_account_delete_account_confirm_button' => [$this, 'block_page_account_delete_account_confirm_button'],
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
        $this->parent = $this->loadTemplate("@Storefront/storefront/page/account/_page.html.twig", "@Storefront/storefront/page/account/profile/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_account_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayBlock('page_account_profile', $context, $blocks);
    }

    public function block_page_account_profile($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        <div class=\"account-profile\">
            ";
        // line 6
        $this->displayBlock('page_account_profile_main', $context, $blocks);
        // line 500
        echo "        </div>
    ";
    }

    // line 6
    public function block_page_account_profile_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "                ";
        $this->displayBlock('page_account_profile_personal_welcome', $context, $blocks);
        // line 18
        echo "
                ";
        // line 19
        $this->displayBlock('page_account_profile_personal', $context, $blocks);
        // line 70
        echo "
                ";
        // line 71
        $this->displayBlock('page_account_profile_credentials', $context, $blocks);
        // line 121
        echo "
                ";
        // line 122
        $this->displayBlock('page_account_profile_mail_and_password', $context, $blocks);
        // line 413
        echo "
                ";
        // line 414
        $this->displayBlock('page_account_profile_delete_account', $context, $blocks);
        // line 423
        echo "
                ";
        // line 424
        $this->displayBlock('page_account_delete_account_confirm_modal', $context, $blocks);
        // line 499
        echo "            ";
    }

    // line 7
    public function block_page_account_profile_personal_welcome($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "                    <div class=\"account-welcome\">
                        ";
        // line 9
        $this->displayBlock('page_account_profile_personal_welcome_headline', $context, $blocks);
        // line 12
        echo "
                        ";
        // line 13
        $this->displayBlock('page_account_profile_personal_welcome_intro', $context, $blocks);
        // line 16
        echo "                    </div>
                ";
    }

    // line 9
    public function block_page_account_profile_personal_welcome_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                            <h1>";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileTitle"));
        echo "</h1>
                        ";
    }

    // line 13
    public function block_page_account_profile_personal_welcome_intro($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "                            <p>";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileText"));
        echo "</p>
                        ";
    }

    // line 19
    public function block_page_account_profile_personal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                    <div class=\"card account-profile-personal\">
                        <div class=\"card-body\">
                            ";
        // line 22
        $this->displayBlock('page_account_profile_personal_header', $context, $blocks);
        // line 27
        echo "
                            ";
        // line 28
        $this->displayBlock('page_account_profile_personal_form', $context, $blocks);
        // line 67
        echo "                        </div>
                    </div>
                ";
    }

    // line 22
    public function block_page_account_profile_personal_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                                <div class=\"card-title\">
                                    ";
        // line 24
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profilePersonalTitle"));
        echo "
                                </div>
                            ";
    }

    // line 28
    public function block_page_account_profile_personal_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "                                <form id=\"profilePersonalForm\"
                                      method=\"post\"
                                      data-form-csrf-handler=\"true\"
                                      action=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.profile.save");
        echo "\"
                                      data-form-validation=\"true\">

                                    ";
        // line 35
        $this->displayBlock('page_account_profile_personal_form_csrf', $context, $blocks);
        // line 38
        echo "
                                    ";
        // line 39
        $this->displayBlock('page_account_profile_personal_fields', $context, $blocks);
        // line 47
        echo "
                                    ";
        // line 48
        $this->displayBlock('page_account_profile_personal_required', $context, $blocks);
        // line 53
        echo "
                                    ";
        // line 54
        $this->displayBlock('page_account_profile_personal_action_buttons', $context, $blocks);
        // line 65
        echo "                                </form>
                            ";
    }

    // line 35
    public function block_page_account_profile_personal_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "                                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.profile.save");
        echo "
                                    ";
    }

    // line 39
    public function block_page_account_profile_personal_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "                                        ";
        $this->loadTemplate("@Storefront/storefront/page/account/profile/personal.html.twig", "@Storefront/storefront/page/account/profile/index.html.twig", 40)->display(twig_array_merge($context, ["showBirthdayField" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showBirthdayField"), "showVatIdField" => true, "data" => sw_get_attribute($this->env, $this->source,         // line 43
($context["context"] ?? null), "customer", [], "any", false, false, false, 43), "onlyCompanyRegistration" => (((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 44
($context["context"] ?? null), "currentCustomerGroup", [], "any", false, true, false, 44), "translated", [], "any", false, true, false, 44), "registrationOnlyCompanyRegistration", [], "any", true, true, false, 44) &&  !(null === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "currentCustomerGroup", [], "any", false, true, false, 44), "translated", [], "any", false, true, false, 44), "registrationOnlyCompanyRegistration", [], "any", false, false, false, 44)))) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "currentCustomerGroup", [], "any", false, true, false, 44), "translated", [], "any", false, true, false, 44), "registrationOnlyCompanyRegistration", [], "any", false, false, false, 44)) : (false))]));
        // line 46
        echo "                                    ";
    }

    // line 48
    public function block_page_account_profile_personal_required($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "                                        <p class=\"account-profile-required-info required-fields\">
                                            ";
        // line 50
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.requiredFields"));
        echo "
                                        </p>
                                    ";
    }

    // line 54
    public function block_page_account_profile_personal_action_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                                        <div class=\"card-actions\">
                                            ";
        // line 56
        $this->displayBlock('page_account_profile_personal_action_button_send', $context, $blocks);
        // line 63
        echo "                                        </div>
                                    ";
    }

    // line 56
    public function block_page_account_profile_personal_action_button_send($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "                                                <button type=\"submit\"
                                                        class=\"profile-form-submit btn btn-light btn-sm\"
                                                        title=\"";
        // line 59
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileSaveChanges")), "html", null, true);
        echo "\">
                                                    ";
        // line 60
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileSaveChanges"));
        echo "
                                                </button>
                                            ";
    }

    // line 71
    public function block_page_account_profile_credentials($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "                    <div class=\"card account-profile-credentials\">
                        <div class=\"card-body\">
                            ";
        // line 74
        $this->displayBlock('page_account_profile_credentials_header', $context, $blocks);
        // line 79
        echo "
                            ";
        // line 80
        $this->displayBlock('page_account_profile_credentials_container', $context, $blocks);
        // line 118
        echo "                        </div>
                    </div>
                ";
    }

    // line 74
    public function block_page_account_profile_credentials_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "                                <div class=\"card-title\">
                                    ";
        // line 76
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileCredentialsTitle"));
        echo "
                                </div>
                            ";
    }

    // line 80
    public function block_page_account_profile_credentials_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "                                <div class=\"row align-items-center\">
                                    ";
        // line 82
        $this->displayBlock('page_account_profile_credentials_current_mail', $context, $blocks);
        // line 90
        echo "
                                    ";
        // line 91
        $this->displayBlock('page_account_profile_credentials_change_mail', $context, $blocks);
        // line 103
        echo "
                                    ";
        // line 104
        $this->displayBlock('page_account_profile_credentials_change_password', $context, $blocks);
        // line 116
        echo "                                </div>
                            ";
    }

    // line 82
    public function block_page_account_profile_credentials_current_mail($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "                                        <div class=\"col-12 col-md-6\">
                                            ";
        // line 84
        $this->displayBlock('page_account_profile_credentials_current_mail_label', $context, $blocks);
        // line 88
        echo "                                        </div>
                                    ";
    }

    // line 84
    public function block_page_account_profile_credentials_current_mail_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "                                                <span class=\"account-profile-mail-label\">";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileCurrentMail"));
        echo "</span>
                                                <span class=\"account-profile-mail\">";
        // line 86
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 86), "email", [], "any", false, false, false, 86), "html", null, true);
        echo "</span>
                                            ";
    }

    // line 91
    public function block_page_account_profile_credentials_change_mail($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "                                        <div class=\"col-12 col-sm-6 col-md-3 mt-2 mt-md-0\">
                                            <a class=\"account-profile-change";
        // line 93
        if ( !($context["emailFormViolation"] ?? null)) {
            echo " collapsed";
        }
        echo "\"
                                               ";
        // line 94
        echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
        echo "=\"collapse\"
                                               href=\"#profile-email-form\"
                                               role=\"button\"
                                               aria-expanded=\"";
        // line 97
        if (($context["emailFormViolation"] ?? null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
                                               aria-controls=\"profile-email-form\">
                                                ";
        // line 99
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileChangeEmail"));
        echo "
                                            </a>
                                        </div>
                                    ";
    }

    // line 104
    public function block_page_account_profile_credentials_change_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        echo "                                        <div class=\"col-12 col-sm-6 col-md-3 mt-2 mt-md-0\">
                                            <a class=\"account-profile-change";
        // line 106
        if ( !($context["passwordFormViolation"] ?? null)) {
            echo " collapsed";
        }
        echo "\"
                                               ";
        // line 107
        echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
        echo "=\"collapse\"
                                               href=\"#profile-password-form\"
                                               role=\"button\"
                                               aria-expanded=\"";
        // line 110
        if (($context["passwordFormViolation"] ?? null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
                                               aria-controls=\"profile-password-form\">
                                                ";
        // line 112
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileChangePassword"));
        echo "
                                            </a>
                                        </div>
                                    ";
    }

    // line 122
    public function block_page_account_profile_mail_and_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
        echo "                    <div class=\"profile-content accordion\">
                        ";
        // line 124
        $this->displayBlock('page_account_profile_mail_collapse', $context, $blocks);
        // line 265
        echo "
                        ";
        // line 266
        $this->displayBlock('page_account_profile_password', $context, $blocks);
        // line 411
        echo "                    </div>
                ";
    }

    // line 124
    public function block_page_account_profile_mail_collapse($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 125
        echo "                            <div class=\"collapse";
        if ((($context["emailFormViolation"] ?? null) && ($context["formViolations"] ?? null))) {
            echo " show";
        }
        echo "\" id=\"profile-email-form\" data-parent=\".profile-content\">
                                <div class=\"card account-email\">
                                    ";
        // line 127
        $this->displayBlock('page_account_profile_mail_form', $context, $blocks);
        // line 262
        echo "                                </div>
                            </div>
                        ";
    }

    // line 127
    public function block_page_account_profile_mail_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        echo "                                        <form id=\"profileMailForm\"
                                              class=\"card-body\"
                                              method=\"post\"
                                              action=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.profile.email.save");
        echo "\"
                                              data-form-csrf-handler=\"true\"
                                              data-form-validation=\"true\">

                                            ";
        // line 135
        $this->displayBlock('page_account_profile_mail_form_csrf', $context, $blocks);
        // line 138
        echo "
                                            ";
        // line 139
        $this->displayBlock('page_account_profile_mail_title', $context, $blocks);
        // line 144
        echo "
                                            ";
        // line 145
        $this->displayBlock('page_account_profile_mail_container', $context, $blocks);
        // line 211
        echo "
                                            ";
        // line 212
        $this->displayBlock('page_account_profile_mail_password', $context, $blocks);
        // line 242
        echo "
                                            ";
        // line 243
        $this->displayBlock('page_account_profile_mail_required', $context, $blocks);
        // line 248
        echo "
                                            ";
        // line 249
        $this->displayBlock('page_account_profile_mail_action_buttons', $context, $blocks);
        // line 260
        echo "                                        </form>
                                    ";
    }

    // line 135
    public function block_page_account_profile_mail_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 136
        echo "                                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.profile.email.save");
        echo "
                                            ";
    }

    // line 139
    public function block_page_account_profile_mail_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 140
        echo "                                                <div class=\"card-title\">
                                                    ";
        // line 141
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileMailTitle"));
        echo "
                                                </div>
                                            ";
    }

    // line 145
    public function block_page_account_profile_mail_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        echo "                                                <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                                                    ";
        // line 147
        $this->displayBlock('page_account_profile_mail', $context, $blocks);
        // line 176
        echo "
                                                    ";
        // line 177
        $this->displayBlock('page_account_profile_mail_confirmation', $context, $blocks);
        // line 207
        echo "                                                </div>

                                                <p class=\"text-muted\">";
        // line 209
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileConfirmPassword"));
        echo "</p>
                                            ";
    }

    // line 147
    public function block_page_account_profile_mail($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "                                                        <div class=\"col form-group\">
                                                            ";
        // line 149
        $this->displayBlock('page_account_profile_mail_label', $context, $blocks);
        // line 155
        echo "
                                                            ";
        // line 156
        $this->displayBlock('page_account_profile_mail_input', $context, $blocks);
        // line 166
        echo "
                                                            ";
        // line 167
        $this->displayBlock('page_account_profile_mail_input_error', $context, $blocks);
        // line 174
        echo "                                                        </div>
                                                    ";
    }

    // line 149
    public function block_page_account_profile_mail_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 150
        echo "                                                                <label class=\"form-label\"
                                                                       for=\"personalMail\">
                                                                    ";
        // line 152
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                                                </label>
                                                            ";
    }

    // line 156
    public function block_page_account_profile_mail_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 157
        echo "                                                                <input type=\"email\"
                                                                       class=\"form-control";
        // line 158
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/email"], "method", false, false, false, 158))) {
            echo " is-invalid";
        }
        echo "\"
                                                                       autocomplete=\"section-personal email\"
                                                                       id=\"personalMail\"
                                                                       placeholder=\"";
        // line 161
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailPlaceholder")), "html", null, true);
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required")), "html", null, true);
        echo "\"
                                                                       name=\"email[email]\"
                                                                       data-form-validation-equal=\"personalMail\"
                                                                       required=\"required\">
                                                            ";
    }

    // line 167
    public function block_page_account_profile_mail_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 168
        echo "                                                                ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/email"], "method", false, false, false, 168))) {
            // line 169
            echo "                                                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/index.html.twig", 169)->display(twig_array_merge($context, ["violationPath" => "/email"]));
            // line 172
            echo "                                                                ";
        }
        // line 173
        echo "                                                            ";
    }

    // line 177
    public function block_page_account_profile_mail_confirmation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 178
        echo "                                                        <div class=\"form-group col\">
                                                            ";
        // line 179
        $this->displayBlock('page_account_profile_personal_mail_confirmation_label', $context, $blocks);
        // line 185
        echo "
                                                            ";
        // line 186
        $this->displayBlock('page_account_profile_mail_confirmation_input', $context, $blocks);
        // line 197
        echo "
                                                            ";
        // line 198
        $this->displayBlock('page_account_profile_mail_confirmation_input_error', $context, $blocks);
        // line 205
        echo "                                                        </div>
                                                    ";
    }

    // line 179
    public function block_page_account_profile_personal_mail_confirmation_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 180
        echo "                                                                <label class=\"form-label\"
                                                                       for=\"personalMailConfirmation\">
                                                                    ";
        // line 182
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailConfirmationLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                                                </label>
                                                            ";
    }

    // line 186
    public function block_page_account_profile_mail_confirmation_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 187
        echo "                                                                <input type=\"email\"
                                                                       class=\"form-control";
        // line 188
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/email"], "method", false, false, false, 188))) {
            echo " is-invalid";
        }
        echo "\"
                                                                       autocomplete=\"section-personal email\"
                                                                       id=\"personalMailConfirmation\"
                                                                       placeholder=\"";
        // line 191
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailConfirmationPlaceholder")), "html", null, true);
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required")), "html", null, true);
        echo "\"
                                                                       name=\"email[emailConfirmation]\"
                                                                       required=\"required\"
                                                                       data-form-validation-equal=\"personalMail\"
                                                                       data-form-validation-equal-message=\"";
        // line 195
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailConfirmationInvalidMessage")), "html", null, true);
        echo "\">
                                                            ";
    }

    // line 198
    public function block_page_account_profile_mail_confirmation_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 199
        echo "                                                                ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/email"], "method", false, false, false, 199))) {
            // line 200
            echo "                                                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/index.html.twig", 200)->display(twig_array_merge($context, ["violationPath" => "/email"]));
            // line 203
            echo "                                                                ";
        }
        // line 204
        echo "                                                            ";
    }

    // line 212
    public function block_page_account_profile_mail_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 213
        echo "                                                <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                                                    <div class=\"form-group col-6\">
                                                        ";
        // line 215
        $this->displayBlock('page_account_profile_mail_password_label', $context, $blocks);
        // line 221
        echo "
                                                        ";
        // line 222
        $this->displayBlock('page_account_profile_mail_password_input', $context, $blocks);
        // line 231
        echo "
                                                        ";
        // line 232
        $this->displayBlock('page_account_profile_mail_password_input_error', $context, $blocks);
        // line 239
        echo "                                                    </div>
                                                </div>
                                            ";
    }

    // line 215
    public function block_page_account_profile_mail_password_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 216
        echo "                                                            <label class=\"form-label\"
                                                                   for=\"personalMailPasswordCurrent\">
                                                                ";
        // line 218
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                                            </label>
                                                        ";
    }

    // line 222
    public function block_page_account_profile_mail_password_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 223
        echo "                                                            <input type=\"password\"
                                                                   class=\"form-control";
        // line 224
        if (( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/password"], "method", false, false, false, 224)) && ($context["emailFormViolation"] ?? null))) {
            echo " is-invalid";
        }
        echo "\"
                                                                   autocomplete=\"new-password\"
                                                                   id=\"personalMailPasswordCurrent\"
                                                                   placeholder=\"";
        // line 227
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profilePasswordCurrent")), "html", null, true);
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required")), "html", null, true);
        echo "\"
                                                                   name=\"email[password]\"
                                                                   required=\"required\">
                                                        ";
    }

    // line 232
    public function block_page_account_profile_mail_password_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 233
        echo "                                                            ";
        if (( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/password"], "method", false, false, false, 233)) && ($context["emailFormViolation"] ?? null))) {
            // line 234
            echo "                                                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/index.html.twig", 234)->display(twig_array_merge($context, ["violationPath" => "/password"]));
            // line 237
            echo "                                                            ";
        }
        // line 238
        echo "                                                        ";
    }

    // line 243
    public function block_page_account_profile_mail_required($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 244
        echo "                                                <p class=\"account-profile-required-info required-fields\">
                                                    ";
        // line 245
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.requiredFields"));
        echo "
                                                </p>
                                            ";
    }

    // line 249
    public function block_page_account_profile_mail_action_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 250
        echo "                                                <div class=\"card-actions\">
                                                    ";
        // line 251
        $this->displayBlock('page_account_profile_mail_action_button_send', $context, $blocks);
        // line 258
        echo "                                                </div>
                                            ";
    }

    // line 251
    public function block_page_account_profile_mail_action_button_send($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 252
        echo "                                                        <button type=\"submit\"
                                                                class=\"profile-form-submit btn btn-light btn-sm\"
                                                                title=\"";
        // line 254
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileSaveChanges")), "html", null, true);
        echo "\">
                                                            ";
        // line 255
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileSaveChanges"));
        echo "
                                                        </button>
                                                    ";
    }

    // line 266
    public function block_page_account_profile_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 267
        echo "                            <div class=\"collapse";
        if ((($context["passwordFormViolation"] ?? null) && ($context["formViolations"] ?? null))) {
            echo " show";
        }
        echo "\" id=\"profile-password-form\" data-parent=\".profile-content\">
                                <div class=\"card account-password\">
                                    ";
        // line 269
        $this->displayBlock('page_account_profile_password_form', $context, $blocks);
        // line 408
        echo "                                </div>
                            </div>
                        ";
    }

    // line 269
    public function block_page_account_profile_password_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 270
        echo "                                        <form id=\"profilePasswordForm\"
                                              class=\"card-body\"
                                              method=\"post\"
                                              data-form-csrf-handler=\"true\"
                                              action=\"";
        // line 274
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.profile.password.save");
        echo "\"
                                              data-form-validation=\"true\">

                                            ";
        // line 277
        $this->displayBlock('page_account_profile_password_form_csrf', $context, $blocks);
        // line 280
        echo "
                                            ";
        // line 281
        $this->displayBlock('page_account_profile_password_title', $context, $blocks);
        // line 286
        echo "
                                            ";
        // line 287
        $this->displayBlock('page_account_profile_password_container', $context, $blocks);
        // line 357
        echo "
                                            ";
        // line 358
        $this->displayBlock('page_account_profile_current_password', $context, $blocks);
        // line 388
        echo "
                                            ";
        // line 389
        $this->displayBlock('page_account_profile_password_required', $context, $blocks);
        // line 394
        echo "
                                            ";
        // line 395
        $this->displayBlock('page_account_profile_password_action_buttons', $context, $blocks);
        // line 406
        echo "                                        </form>
                                    ";
    }

    // line 277
    public function block_page_account_profile_password_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 278
        echo "                                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.profile.password.save");
        echo "
                                            ";
    }

    // line 281
    public function block_page_account_profile_password_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 282
        echo "                                                <div class=\"card-title\">
                                                    ";
        // line 283
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profilePasswordTitle"));
        echo "
                                                </div>
                                            ";
    }

    // line 287
    public function block_page_account_profile_password_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 288
        echo "                                                <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                                                    ";
        // line 289
        $this->displayBlock('page_account_profile_new_password', $context, $blocks);
        // line 322
        echo "
                                                    ";
        // line 323
        $this->displayBlock('page_account_profile_new_password_confirmation', $context, $blocks);
        // line 353
        echo "                                                </div>

                                                <p class=\"text-muted\">";
        // line 355
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileConfirmPassword"));
        echo "</p>
                                            ";
    }

    // line 289
    public function block_page_account_profile_new_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 290
        echo "                                                        <div class=\"col form-group\">
                                                            ";
        // line 291
        $this->displayBlock('page_account_profile_new_password_label', $context, $blocks);
        // line 297
        echo "
                                                            ";
        // line 298
        $this->displayBlock('page_account_profile_new_password_input', $context, $blocks);
        // line 312
        echo "
                                                            ";
        // line 313
        $this->displayBlock('page_account_profile_new_password_input_error', $context, $blocks);
        // line 320
        echo "                                                        </div>
                                                    ";
    }

    // line 291
    public function block_page_account_profile_new_password_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 292
        echo "                                                                <label class=\"form-label\"
                                                                       for=\"newPassword\">
                                                                    ";
        // line 294
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profilePasswordCreateNew"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                                                </label>
                                                            ";
    }

    // line 298
    public function block_page_account_profile_new_password_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 299
        echo "                                                                <input type=\"password\"
                                                                       class=\"form-control";
        // line 300
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/newPassword"], "method", false, false, false, 300))) {
            echo " is-invalid";
        }
        echo "\"
                                                                       autocomplete=\"new-password\"
                                                                       id=\"newPassword\"
                                                                       placeholder=\"";
        // line 303
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profilePasswordCreateNew")), "html", null, true);
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required")), "html", null, true);
        echo "\"
                                                                       name=\"password[newPassword]\"
                                                                       data-form-validation-equal=\"newPassword\"
                                                                       data-form-validation-length=\"";
        // line 306
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.passwordMinLength"), "html", null, true);
        echo "\"
                                                                       data-form-validation-length-message=\" ";
        // line 307
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordDescription", ["%minLength%" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.passwordMinLength")]));
        // line 309
        echo "\"
                                                                       required=\"required\">
                                                            ";
    }

    // line 313
    public function block_page_account_profile_new_password_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 314
        echo "                                                                ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/newPassword"], "method", false, false, false, 314))) {
            // line 315
            echo "                                                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/index.html.twig", 315)->display(twig_array_merge($context, ["violationPath" => "/newPassword"]));
            // line 318
            echo "                                                                ";
        }
        // line 319
        echo "                                                            ";
    }

    // line 323
    public function block_page_account_profile_new_password_confirmation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 324
        echo "                                                        <div class=\"col form-group\">
                                                            ";
        // line 325
        $this->displayBlock('page_account_profile_new_password_confirmation_label', $context, $blocks);
        // line 331
        echo "
                                                            ";
        // line 332
        $this->displayBlock('page_account_profile_new_password_confirmation_input', $context, $blocks);
        // line 343
        echo "
                                                            ";
        // line 344
        $this->displayBlock('page_account_profile_new_password_confirmation_error', $context, $blocks);
        // line 351
        echo "                                                        </div>
                                                    ";
    }

    // line 325
    public function block_page_account_profile_new_password_confirmation_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 326
        echo "                                                                <label class=\"form-label\"
                                                                       for=\"passwordConfirmation\">
                                                                    ";
        // line 328
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordConfirmationLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                                                </label>
                                                            ";
    }

    // line 332
    public function block_page_account_profile_new_password_confirmation_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 333
        echo "                                                                <input type=\"password\"
                                                                       class=\"form-control";
        // line 334
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/newPassword"], "method", false, false, false, 334))) {
            echo " is-invalid";
        }
        echo "\"
                                                                       autocomplete=\"new-password\"
                                                                       id=\"passwordConfirmation\"
                                                                       placeholder=\"";
        // line 337
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordConfirmationLabel")), "html", null, true);
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required")), "html", null, true);
        echo "\"
                                                                       name=\"password[newPasswordConfirm]\"
                                                                       required=\"required\"
                                                                       data-form-validation-equal=\"newPassword\"
                                                                       data-form-validation-equal-message=\"";
        // line 341
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordConfirmationInvalidMessage")), "html", null, true);
        echo "\">
                                                            ";
    }

    // line 344
    public function block_page_account_profile_new_password_confirmation_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 345
        echo "                                                                ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/newPassword"], "method", false, false, false, 345))) {
            // line 346
            echo "                                                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/index.html.twig", 346)->display(twig_array_merge($context, ["violationPath" => "/newPassword"]));
            // line 349
            echo "                                                                ";
        }
        // line 350
        echo "                                                            ";
    }

    // line 358
    public function block_page_account_profile_current_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 359
        echo "                                                <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                                                    <div class=\"col-6 form-group\">
                                                        ";
        // line 361
        $this->displayBlock('page_account_profile_current_password_label', $context, $blocks);
        // line 367
        echo "
                                                        ";
        // line 368
        $this->displayBlock('page_account_profile_current_password_input', $context, $blocks);
        // line 377
        echo "
                                                        ";
        // line 378
        $this->displayBlock('page_account_profile_current_password_input_error', $context, $blocks);
        // line 385
        echo "                                                    </div>
                                                </div>
                                            ";
    }

    // line 361
    public function block_page_account_profile_current_password_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 362
        echo "                                                            <label class=\"form-label\"
                                                                   for=\"password\">
                                                                ";
        // line 364
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profilePasswordCurrent"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                                            </label>
                                                        ";
    }

    // line 368
    public function block_page_account_profile_current_password_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 369
        echo "                                                            <input type=\"password\"
                                                                   class=\"form-control";
        // line 370
        if (( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/password"], "method", false, false, false, 370)) && ($context["passwordFormViolation"] ?? null))) {
            echo " is-invalid";
        }
        echo "\"
                                                                   autocomplete=\"new-password\"
                                                                   id=\"password\"
                                                                   placeholder=\"";
        // line 373
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profilePasswordCurrent")), "html", null, true);
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required")), "html", null, true);
        echo "\"
                                                                   name=\"password[password]\"
                                                                   required=\"required\">
                                                        ";
    }

    // line 378
    public function block_page_account_profile_current_password_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 379
        echo "                                                            ";
        if (( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/password"], "method", false, false, false, 379)) && ($context["passwordFormViolation"] ?? null))) {
            // line 380
            echo "                                                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/index.html.twig", 380)->display(twig_array_merge($context, ["violationPath" => "/password"]));
            // line 383
            echo "                                                            ";
        }
        // line 384
        echo "                                                        ";
    }

    // line 389
    public function block_page_account_profile_password_required($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 390
        echo "                                                <p class=\"account-profile-required-info required-fields\">
                                                    ";
        // line 391
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.requiredFields"));
        echo "
                                                </p>
                                            ";
    }

    // line 395
    public function block_page_account_profile_password_action_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 396
        echo "                                                <div class=\"card-actions\">
                                                    ";
        // line 397
        $this->displayBlock('page_account_profile_password_action_button_send', $context, $blocks);
        // line 404
        echo "                                                </div>
                                            ";
    }

    // line 397
    public function block_page_account_profile_password_action_button_send($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 398
        echo "                                                        <button type=\"submit\"
                                                                class=\"profile-form-submit btn btn-light btn-sm\"
                                                                title=\"";
        // line 400
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileSaveChanges")), "html", null, true);
        echo "\">
                                                            ";
        // line 401
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileSaveChanges"));
        echo "
                                                        </button>
                                                    ";
    }

    // line 414
    public function block_page_account_profile_delete_account($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 415
        echo "                    ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.allowCustomerDeletion")) {
            // line 416
            echo "                        <div class=\"account-deleting py-4\">
                            ";
            // line 417
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileDelete", ["%target%" => "#confirmDeleteAccountModal"]);
            // line 419
            echo "
                        </div>
                    ";
        }
        // line 422
        echo "                ";
    }

    // line 424
    public function block_page_account_delete_account_confirm_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 425
        echo "                    ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.allowCustomerDeletion")) {
            // line 426
            echo "                        <div class=\"modal fade confirm-delete-account-modal\"
                             id=\"confirmDeleteAccountModal\"
                             tabindex=\"1\"
                             role=\"dialog\">
                            <div class=\"modal-dialog modal-dialog-centered\"
                                 role=\"document\">

                                ";
            // line 433
            $this->displayBlock('page_account_delete_account_confirm_modal_content', $context, $blocks);
            // line 495
            echo "                            </div>
                        </div>
                    ";
        }
        // line 498
        echo "                ";
    }

    // line 433
    public function block_page_account_delete_account_confirm_modal_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 434
        echo "                                    <div class=\"modal-content\">

                                        ";
        // line 436
        $this->displayBlock('page_account_delete_account_confirm_modal_header', $context, $blocks);
        // line 461
        echo "
                                        ";
        // line 462
        $this->displayBlock('page_account_delete_account_confirm_modal_body', $context, $blocks);
        // line 493
        echo "                                    </div>
                                ";
    }

    // line 436
    public function block_page_account_delete_account_confirm_modal_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 437
        echo "                                            <div class=\"modal-header\">

                                                ";
        // line 439
        $this->displayBlock('page_account_delete_account_confirm_modal_header_title', $context, $blocks);
        // line 444
        echo "
                                                ";
        // line 445
        $this->displayBlock('page_account_delete_account_confirm_modal_header_close_button', $context, $blocks);
        // line 459
        echo "                                            </div>
                                        ";
    }

    // line 439
    public function block_page_account_delete_account_confirm_modal_header_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 440
        echo "                                                    <div class=\"modal-title h3\">
                                                        ";
        // line 441
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileDeleteModalTitle"));
        echo "
                                                    </div>
                                                ";
    }

    // line 445
    public function block_page_account_delete_account_confirm_modal_header_close_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 446
        echo "                                                    <button
                                                        type=\"button\"
                                                        class=\"";
        // line 448
        echo sw_escape_filter($this->env, ($context["modalCloseBtnClass"] ?? null), "html", null, true);
        echo " close\"
                                                        ";
        // line 449
        echo sw_escape_filter($this->env, ($context["dataBsDismissAttr"] ?? null), "html", null, true);
        echo "=\"modal\"
                                                        aria-label=\"Close\">
                                                        ";
        // line 452
        echo "                                                        ";
        if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 453
            echo "                                                            <span aria-hidden=\"true\">
                                                                ";
            // line 454
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/account/profile/index.html.twig", 454);
            })())->display(twig_array_merge($context, ["size" => "sm", "name" => "x"]));
            // line 455
            echo "                                                            </span>
                                                        ";
        }
        // line 457
        echo "                                                    </button>
                                                ";
    }

    // line 462
    public function block_page_account_delete_account_confirm_modal_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 463
        echo "                                            <div class=\"modal-body\">

                                                ";
        // line 465
        $this->displayBlock('page_account_delete_account_confirm_modal_form', $context, $blocks);
        // line 491
        echo "                                            </div>
                                        ";
    }

    // line 465
    public function block_page_account_delete_account_confirm_modal_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 466
        echo "                                                    <form method=\"post\"
                                                          action=\"";
        // line 467
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.profile.delete");
        echo "\"
                                                          data-form-submit-loader=\"true\">

                                                        ";
        // line 470
        $this->displayBlock('page_account_delete_account_confirm_form_csrf', $context, $blocks);
        // line 473
        echo "
                                                        ";
        // line 474
        $this->displayBlock('page_account_delete_account_confirm_alert', $context, $blocks);
        // line 477
        echo "
                                                        ";
        // line 478
        $this->displayBlock('page_account_delete_account_confirm_text', $context, $blocks);
        // line 481
        echo "
                                                        ";
        // line 482
        $this->displayBlock('page_account_delete_account_confirm_button', $context, $blocks);
        // line 489
        echo "                                                    </form>
                                                ";
    }

    // line 470
    public function block_page_account_delete_account_confirm_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 471
        echo "                                                            ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.profile.delete");
        echo "
                                                        ";
    }

    // line 474
    public function block_page_account_delete_account_confirm_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 475
        echo "                                                            ";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileDeleteAlert"));
        echo "
                                                        ";
    }

    // line 478
    public function block_page_account_delete_account_confirm_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 479
        echo "                                                            <h6 class=\"py-2\">";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileDeleteConfirm"));
        echo "</h6>
                                                        ";
    }

    // line 482
    public function block_page_account_delete_account_confirm_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 483
        echo "                                                            <div class=\"text-right\">
                                                                <button class=\"btn btn-outline-danger\" type=\"submit\">
                                                                    ";
        // line 485
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileDeleteButton"));
        echo "
                                                                </button>
                                                            </div>
                                                        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/profile/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1620 => 485,  1616 => 483,  1612 => 482,  1605 => 479,  1601 => 478,  1594 => 475,  1590 => 474,  1583 => 471,  1579 => 470,  1574 => 489,  1572 => 482,  1569 => 481,  1567 => 478,  1564 => 477,  1562 => 474,  1559 => 473,  1557 => 470,  1551 => 467,  1548 => 466,  1544 => 465,  1539 => 491,  1537 => 465,  1533 => 463,  1529 => 462,  1524 => 457,  1520 => 455,  1512 => 454,  1509 => 453,  1506 => 452,  1501 => 449,  1497 => 448,  1493 => 446,  1489 => 445,  1482 => 441,  1479 => 440,  1475 => 439,  1470 => 459,  1468 => 445,  1465 => 444,  1463 => 439,  1459 => 437,  1455 => 436,  1450 => 493,  1448 => 462,  1445 => 461,  1443 => 436,  1439 => 434,  1435 => 433,  1431 => 498,  1426 => 495,  1424 => 433,  1415 => 426,  1412 => 425,  1408 => 424,  1404 => 422,  1399 => 419,  1397 => 417,  1394 => 416,  1391 => 415,  1387 => 414,  1380 => 401,  1376 => 400,  1372 => 398,  1368 => 397,  1363 => 404,  1361 => 397,  1358 => 396,  1354 => 395,  1347 => 391,  1344 => 390,  1340 => 389,  1336 => 384,  1333 => 383,  1330 => 380,  1327 => 379,  1323 => 378,  1314 => 373,  1306 => 370,  1303 => 369,  1299 => 368,  1291 => 364,  1287 => 362,  1283 => 361,  1277 => 385,  1275 => 378,  1272 => 377,  1270 => 368,  1267 => 367,  1265 => 361,  1259 => 359,  1255 => 358,  1251 => 350,  1248 => 349,  1245 => 346,  1242 => 345,  1238 => 344,  1232 => 341,  1224 => 337,  1216 => 334,  1213 => 333,  1209 => 332,  1201 => 328,  1197 => 326,  1193 => 325,  1188 => 351,  1186 => 344,  1183 => 343,  1181 => 332,  1178 => 331,  1176 => 325,  1173 => 324,  1169 => 323,  1165 => 319,  1162 => 318,  1159 => 315,  1156 => 314,  1152 => 313,  1146 => 309,  1144 => 307,  1140 => 306,  1133 => 303,  1125 => 300,  1122 => 299,  1118 => 298,  1110 => 294,  1106 => 292,  1102 => 291,  1097 => 320,  1095 => 313,  1092 => 312,  1090 => 298,  1087 => 297,  1085 => 291,  1082 => 290,  1078 => 289,  1072 => 355,  1068 => 353,  1066 => 323,  1063 => 322,  1061 => 289,  1056 => 288,  1052 => 287,  1045 => 283,  1042 => 282,  1038 => 281,  1031 => 278,  1027 => 277,  1022 => 406,  1020 => 395,  1017 => 394,  1015 => 389,  1012 => 388,  1010 => 358,  1007 => 357,  1005 => 287,  1002 => 286,  1000 => 281,  997 => 280,  995 => 277,  989 => 274,  983 => 270,  979 => 269,  973 => 408,  971 => 269,  963 => 267,  959 => 266,  952 => 255,  948 => 254,  944 => 252,  940 => 251,  935 => 258,  933 => 251,  930 => 250,  926 => 249,  919 => 245,  916 => 244,  912 => 243,  908 => 238,  905 => 237,  902 => 234,  899 => 233,  895 => 232,  886 => 227,  878 => 224,  875 => 223,  871 => 222,  863 => 218,  859 => 216,  855 => 215,  849 => 239,  847 => 232,  844 => 231,  842 => 222,  839 => 221,  837 => 215,  831 => 213,  827 => 212,  823 => 204,  820 => 203,  817 => 200,  814 => 199,  810 => 198,  804 => 195,  796 => 191,  788 => 188,  785 => 187,  781 => 186,  773 => 182,  769 => 180,  765 => 179,  760 => 205,  758 => 198,  755 => 197,  753 => 186,  750 => 185,  748 => 179,  745 => 178,  741 => 177,  737 => 173,  734 => 172,  731 => 169,  728 => 168,  724 => 167,  714 => 161,  706 => 158,  703 => 157,  699 => 156,  691 => 152,  687 => 150,  683 => 149,  678 => 174,  676 => 167,  673 => 166,  671 => 156,  668 => 155,  666 => 149,  663 => 148,  659 => 147,  653 => 209,  649 => 207,  647 => 177,  644 => 176,  642 => 147,  637 => 146,  633 => 145,  626 => 141,  623 => 140,  619 => 139,  612 => 136,  608 => 135,  603 => 260,  601 => 249,  598 => 248,  596 => 243,  593 => 242,  591 => 212,  588 => 211,  586 => 145,  583 => 144,  581 => 139,  578 => 138,  576 => 135,  569 => 131,  564 => 128,  560 => 127,  554 => 262,  552 => 127,  544 => 125,  540 => 124,  535 => 411,  533 => 266,  530 => 265,  528 => 124,  525 => 123,  521 => 122,  513 => 112,  504 => 110,  498 => 107,  492 => 106,  489 => 105,  485 => 104,  477 => 99,  468 => 97,  462 => 94,  456 => 93,  453 => 92,  449 => 91,  443 => 86,  438 => 85,  434 => 84,  429 => 88,  427 => 84,  424 => 83,  420 => 82,  415 => 116,  413 => 104,  410 => 103,  408 => 91,  405 => 90,  403 => 82,  400 => 81,  396 => 80,  389 => 76,  386 => 75,  382 => 74,  376 => 118,  374 => 80,  371 => 79,  369 => 74,  365 => 72,  361 => 71,  354 => 60,  350 => 59,  346 => 57,  342 => 56,  337 => 63,  335 => 56,  332 => 55,  328 => 54,  321 => 50,  318 => 49,  314 => 48,  310 => 46,  308 => 44,  307 => 43,  305 => 40,  301 => 39,  294 => 36,  290 => 35,  285 => 65,  283 => 54,  280 => 53,  278 => 48,  275 => 47,  273 => 39,  270 => 38,  268 => 35,  262 => 32,  257 => 29,  253 => 28,  246 => 24,  243 => 23,  239 => 22,  233 => 67,  231 => 28,  228 => 27,  226 => 22,  222 => 20,  218 => 19,  211 => 14,  207 => 13,  200 => 10,  196 => 9,  191 => 16,  189 => 13,  186 => 12,  184 => 9,  181 => 8,  177 => 7,  173 => 499,  171 => 424,  168 => 423,  166 => 414,  163 => 413,  161 => 122,  158 => 121,  156 => 71,  153 => 70,  151 => 19,  148 => 18,  145 => 7,  141 => 6,  136 => 500,  134 => 6,  131 => 5,  123 => 4,  119 => 3,  108 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/account/profile/index.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/account/profile/index.html.twig");
    }
}
