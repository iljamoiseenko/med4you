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

/* @Storefront/storefront/page/account/register/index.html.twig */
class __TwigTemplate_e49319dd3c49a196a5030aca3530558583c321f888dcd58d32775d41329d69bd extends Template
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
            'page_account_register' => [$this, 'block_page_account_register'],
            'page_account_register_inner' => [$this, 'block_page_account_register_inner'],
            'page_account_register_login_container' => [$this, 'block_page_account_register_login_container'],
            'page_account_register_advantages' => [$this, 'block_page_account_register_advantages'],
            'page_account_register_advantages_title' => [$this, 'block_page_account_register_advantages_title'],
            'page_account_register_advantages_list' => [$this, 'block_page_account_register_advantages_list'],
            'page_account_register_advantages_entry1' => [$this, 'block_page_account_register_advantages_entry1'],
            'page_account_register_advantages_entry2' => [$this, 'block_page_account_register_advantages_entry2'],
            'page_account_register_advantages_entry3' => [$this, 'block_page_account_register_advantages_entry3'],
            'page_account_register_advantages_entry4' => [$this, 'block_page_account_register_advantages_entry4'],
            'page_account_register_container' => [$this, 'block_page_account_register_container'],
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
        $this->parent = $this->loadTemplate("@Storefront/storefront/base.html.twig", "@Storefront/storefront/page/account/register/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_base_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/page/account/register/meta.html.twig", "@Storefront/storefront/page/account/register/index.html.twig", 4)->display($context);
    }

    // line 7
    public function block_base_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $this->displayBlock('page_account_register', $context, $blocks);
    }

    public function block_page_account_register($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "        <div class=\"account-register\">
            ";
        // line 10
        $this->displayBlock('page_account_register_inner', $context, $blocks);
        // line 59
        echo "        </div>
    ";
    }

    // line 10
    public function block_page_account_register_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "                <div class=\"row\">
                    ";
        // line 12
        $this->displayBlock('page_account_register_login_container', $context, $blocks);
        // line 49
        echo "
                    ";
        // line 50
        $this->displayBlock('page_account_register_container', $context, $blocks);
        // line 57
        echo "                </div>
            ";
    }

    // line 12
    public function block_page_account_register_login_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "                        <div class=\"col-lg-4\">
                            ";
        // line 14
        $this->loadTemplate("@Storefront/storefront/component/account/login.html.twig", "@Storefront/storefront/page/account/register/index.html.twig", 14)->display(twig_array_merge($context, ["cardTitle" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginHeader"))]));
        // line 17
        echo "
                            ";
        // line 18
        $this->displayBlock('page_account_register_advantages', $context, $blocks);
        // line 47
        echo "                        </div>
                    ";
    }

    // line 18
    public function block_page_account_register_advantages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                                <div class=\"login-advantages\">
                                    ";
        // line 20
        $this->displayBlock('page_account_register_advantages_title', $context, $blocks);
        // line 25
        echo "
                                    ";
        // line 26
        $this->displayBlock('page_account_register_advantages_list', $context, $blocks);
        // line 45
        echo "                                </div>
                            ";
    }

    // line 20
    public function block_page_account_register_advantages_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                                        <div class=\"h5 login-advantages-header\">
                                            ";
        // line 22
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.registerAdvantagesHeader"));
        echo "
                                        </div>
                                    ";
    }

    // line 26
    public function block_page_account_register_advantages_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "                                        <ul>
                                            ";
        // line 28
        $this->displayBlock('page_account_register_advantages_entry1', $context, $blocks);
        // line 31
        echo "
                                            ";
        // line 32
        $this->displayBlock('page_account_register_advantages_entry2', $context, $blocks);
        // line 35
        echo "
                                            ";
        // line 36
        $this->displayBlock('page_account_register_advantages_entry3', $context, $blocks);
        // line 39
        echo "
                                            ";
        // line 40
        $this->displayBlock('page_account_register_advantages_entry4', $context, $blocks);
        // line 43
        echo "                                        </ul>
                                    ";
    }

    // line 28
    public function block_page_account_register_advantages_entry1($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "                                                <li>";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.registerAdvantage1"));
        echo "</li>
                                            ";
    }

    // line 32
    public function block_page_account_register_advantages_entry2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "                                                <li>";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.registerAdvantage2"));
        echo "</li>
                                            ";
    }

    // line 36
    public function block_page_account_register_advantages_entry3($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "                                                <li>";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.registerAdvantage3"));
        echo "</li>
                                            ";
    }

    // line 40
    public function block_page_account_register_advantages_entry4($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                                                <li>";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.registerAdvantage4"));
        echo "</li>
                                            ";
    }

    // line 50
    public function block_page_account_register_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "                        <div class=\"col-lg-8\">
                            ";
        // line 52
        $this->loadTemplate("@Storefront/storefront/component/account/register.html.twig", "@Storefront/storefront/page/account/register/index.html.twig", 52)->display(twig_array_merge($context, ["cardTitle" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.registerPersonalHeader"))]));
        // line 55
        echo "                        </div>
                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/register/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 55,  240 => 52,  237 => 51,  233 => 50,  226 => 41,  222 => 40,  215 => 37,  211 => 36,  204 => 33,  200 => 32,  193 => 29,  189 => 28,  184 => 43,  182 => 40,  179 => 39,  177 => 36,  174 => 35,  172 => 32,  169 => 31,  167 => 28,  164 => 27,  160 => 26,  153 => 22,  150 => 21,  146 => 20,  141 => 45,  139 => 26,  136 => 25,  134 => 20,  131 => 19,  127 => 18,  122 => 47,  120 => 18,  117 => 17,  115 => 14,  112 => 13,  108 => 12,  103 => 57,  101 => 50,  98 => 49,  96 => 12,  93 => 11,  89 => 10,  84 => 59,  82 => 10,  79 => 9,  71 => 8,  67 => 7,  62 => 4,  58 => 3,  47 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/account/register/index.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/account/register/index.html.twig");
    }
}
