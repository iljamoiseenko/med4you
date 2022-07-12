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

/* @Storefront/storefront/component/account/login.html.twig */
class __TwigTemplate_f361be14ee47e9b02a0641a6d71a24f3a5d477109fd3acbfa184fe344ca2179e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_account_login' => [$this, 'block_component_account_login'],
            'component_account_login_header' => [$this, 'block_component_account_login_header'],
            'component_account_login_form' => [$this, 'block_component_account_login_form'],
            'component_account_login_form_csrf' => [$this, 'block_component_account_login_form_csrf'],
            'component_account_login_form_redirect' => [$this, 'block_component_account_login_form_redirect'],
            'component_account_login_form_description' => [$this, 'block_component_account_login_form_description'],
            'component_account_login_form_error' => [$this, 'block_component_account_login_form_error'],
            'component_account_login_form_fields' => [$this, 'block_component_account_login_form_fields'],
            'component_account_login_form_mail' => [$this, 'block_component_account_login_form_mail'],
            'component_account_login_form_mail_label' => [$this, 'block_component_account_login_form_mail_label'],
            'component_account_login_form_mail_input' => [$this, 'block_component_account_login_form_mail_input'],
            'component_account_login_form_password' => [$this, 'block_component_account_login_form_password'],
            'component_account_login_form_password_label' => [$this, 'block_component_account_login_form_password_label'],
            'component_account_login_form_password_input' => [$this, 'block_component_account_login_form_password_input'],
            'component_account_login_password_recover' => [$this, 'block_component_account_login_password_recover'],
            'component_account_login_password_recover_link' => [$this, 'block_component_account_login_password_recover_link'],
            'component_account_login_submit' => [$this, 'block_component_account_login_submit'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_account_login', $context, $blocks);
    }

    public function block_component_account_login($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"card login-card\">
        <div class=\"card-body\">
            ";
        // line 4
        $this->displayBlock('component_account_login_header', $context, $blocks);
        // line 11
        echo "
            ";
        // line 12
        $this->displayBlock('component_account_login_form', $context, $blocks);
        // line 123
        echo "        </div>
    </div>
";
    }

    // line 4
    public function block_component_account_login_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                ";
        if (($context["cardTitle"] ?? null)) {
            // line 6
            echo "                    <div class=\"card-title\">
                        ";
            // line 7
            echo sw_escape_filter($this->env, ($context["cardTitle"] ?? null), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 10
        echo "            ";
    }

    // line 12
    public function block_component_account_login_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "                <form class=\"login-form\"
                      action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.login");
        echo "\"
                      method=\"post\"
                      data-form-csrf-handler=\"true\"
                      data-form-validation=\"true\">

                    ";
        // line 19
        $this->displayBlock('component_account_login_form_csrf', $context, $blocks);
        // line 22
        echo "
                    ";
        // line 23
        $this->displayBlock('component_account_login_form_redirect', $context, $blocks);
        // line 32
        echo "
                    ";
        // line 33
        $this->displayBlock('component_account_login_form_description', $context, $blocks);
        // line 38
        echo "
                    ";
        // line 39
        $this->displayBlock('component_account_login_form_error', $context, $blocks);
        // line 59
        echo "
                    ";
        // line 60
        $this->displayBlock('component_account_login_form_fields', $context, $blocks);
        // line 102
        echo "
                    ";
        // line 103
        $this->displayBlock('component_account_login_password_recover', $context, $blocks);
        // line 112
        echo "
                    ";
        // line 113
        $this->displayBlock('component_account_login_submit', $context, $blocks);
        // line 121
        echo "                </form>
            ";
    }

    // line 19
    public function block_component_account_login_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.login");
        echo "
                    ";
    }

    // line 23
    public function block_component_account_login_form_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                        <input type=\"hidden\"
                               name=\"redirectTo\"
                               value=\"";
        // line 26
        echo sw_escape_filter($this->env, ($context["redirectTo"] ?? null), "html", null, true);
        echo "\">

                        <input type=\"hidden\"
                               name=\"redirectParameters\"
                               value=\"";
        // line 30
        echo sw_escape_filter($this->env, ($context["redirectParameters"] ?? null), "html", null, true);
        echo "\">
                    ";
    }

    // line 33
    public function block_component_account_login_form_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                        <p class=\"login-form-description\">
                            ";
        // line 35
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginFormDescription"));
        echo "
                        </p>
                    ";
    }

    // line 39
    public function block_component_account_login_form_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "                        ";
        if (($context["loginError"] ?? null)) {
            // line 41
            echo "                            ";
            if ((0 !== twig_compare(($context["errorSnippet"] ?? null), null))) {
                // line 42
                echo "                                ";
                $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/account/login.html.twig", 42)->display(twig_array_merge($context, ["type" => "danger", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                // line 44
($context["errorSnippet"] ?? null)))]));
                // line 46
                echo "                            ";
            } elseif ((0 !== twig_compare(($context["waitTime"] ?? null), null))) {
                // line 47
                echo "                                ";
                $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/account/login.html.twig", 47)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginThrottled", ["%seconds%" =>                 // line 49
($context["waitTime"] ?? null)]))]));
                // line 51
                echo "                            ";
            } else {
                // line 52
                echo "                                ";
                $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/account/login.html.twig", 52)->display(twig_array_merge($context, ["type" => "danger", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginBadCredentials"))]));
                // line 56
                echo "                            ";
            }
            // line 57
            echo "                        ";
        }
        // line 58
        echo "                    ";
    }

    // line 60
    public function block_component_account_login_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "                        <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                            ";
        // line 62
        $this->displayBlock('component_account_login_form_mail', $context, $blocks);
        // line 81
        echo "
                            ";
        // line 82
        $this->displayBlock('component_account_login_form_password', $context, $blocks);
        // line 100
        echo "                        </div>
                    ";
    }

    // line 62
    public function block_component_account_login_form_mail($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "                                <div class=\"form-group col-md-6\">
                                    ";
        // line 64
        $this->displayBlock('component_account_login_form_mail_label', $context, $blocks);
        // line 70
        echo "
                                    ";
        // line 71
        $this->displayBlock('component_account_login_form_mail_input', $context, $blocks);
        // line 79
        echo "                                </div>
                            ";
    }

    // line 64
    public function block_component_account_login_form_mail_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "                                        <label class=\"form-label\"
                                               for=\"loginMail\">
                                            ";
        // line 67
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginMailLabel"));
        echo "
                                        </label>
                                    ";
    }

    // line 71
    public function block_component_account_login_form_mail_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "                                        <input type=\"email\"
                                               class=\"form-control";
        // line 73
        if (($context["loginError"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                               id=\"loginMail\"
                                               placeholder=\"";
        // line 75
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginMailPlaceholder")), "html", null, true);
        echo "\"
                                               name=\"username\"
                                               required=\"required\">
                                    ";
    }

    // line 82
    public function block_component_account_login_form_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "                                <div class=\"form-group col-md-6\">
                                    ";
        // line 84
        $this->displayBlock('component_account_login_form_password_label', $context, $blocks);
        // line 90
        echo "                                    ";
        $this->displayBlock('component_account_login_form_password_input', $context, $blocks);
        // line 98
        echo "                                </div>
                            ";
    }

    // line 84
    public function block_component_account_login_form_password_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "                                        <label class=\"form-label\"
                                               for=\"loginPassword\">
                                            ";
        // line 87
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginPasswordLabel"));
        echo "
                                        </label>
                                    ";
    }

    // line 90
    public function block_component_account_login_form_password_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "                                        <input type=\"password\"
                                               class=\"form-control";
        // line 92
        if (($context["loginError"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                               id=\"loginPassword\"
                                               placeholder=\"";
        // line 94
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginPasswordPlaceholder")), "html", null, true);
        echo "\"
                                               name=\"password\"
                                               required=\"required\">
                                    ";
    }

    // line 103
    public function block_component_account_login_password_recover($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "                        <div class=\"login-password-recover\">
                            ";
        // line 105
        $this->displayBlock('component_account_login_password_recover_link', $context, $blocks);
        // line 110
        echo "                        </div>
                    ";
    }

    // line 105
    public function block_component_account_login_password_recover_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "                                <a href=\"";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.account.recover.page");
        echo "\">
                                    ";
        // line 107
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginPasswordRecover"), "html", null, true);
        echo "
                                </a>
                            ";
    }

    // line 113
    public function block_component_account_login_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "                        <div class=\"login-submit\">
                            <button type=\"submit\"
                                    class=\"btn btn-primary\">
                                ";
        // line 117
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginSubmit"));
        echo "
                            </button>
                        </div>
                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/account/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  403 => 117,  398 => 114,  394 => 113,  387 => 107,  382 => 106,  378 => 105,  373 => 110,  371 => 105,  368 => 104,  364 => 103,  356 => 94,  349 => 92,  346 => 91,  342 => 90,  335 => 87,  331 => 85,  327 => 84,  322 => 98,  319 => 90,  317 => 84,  314 => 83,  310 => 82,  302 => 75,  295 => 73,  292 => 72,  288 => 71,  281 => 67,  277 => 65,  273 => 64,  268 => 79,  266 => 71,  263 => 70,  261 => 64,  258 => 63,  254 => 62,  249 => 100,  247 => 82,  244 => 81,  242 => 62,  237 => 61,  233 => 60,  229 => 58,  226 => 57,  223 => 56,  220 => 52,  217 => 51,  215 => 49,  213 => 47,  210 => 46,  208 => 44,  206 => 42,  203 => 41,  200 => 40,  196 => 39,  189 => 35,  186 => 34,  182 => 33,  176 => 30,  169 => 26,  165 => 24,  161 => 23,  154 => 20,  150 => 19,  145 => 121,  143 => 113,  140 => 112,  138 => 103,  135 => 102,  133 => 60,  130 => 59,  128 => 39,  125 => 38,  123 => 33,  120 => 32,  118 => 23,  115 => 22,  113 => 19,  105 => 14,  102 => 13,  98 => 12,  94 => 10,  88 => 7,  85 => 6,  82 => 5,  78 => 4,  72 => 123,  70 => 12,  67 => 11,  65 => 4,  61 => 2,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/account/login.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/account/login.html.twig");
    }
}
