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

/* @Storefront/storefront/layout/header/actions/account-widget.html.twig */
class __TwigTemplate_da225871e203bd689556b9c4d37e65d68ab08ec7912c1383f7b819388f3df0d5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_actions_account_widget' => [$this, 'block_layout_header_actions_account_widget'],
            'layout_header_actions_account_widget_dropdown_button' => [$this, 'block_layout_header_actions_account_widget_dropdown_button'],
            'layout_header_actions_account_widget_dropdown_menu' => [$this, 'block_layout_header_actions_account_widget_dropdown_menu'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_header_actions_account_widget', $context, $blocks);
    }

    public function block_layout_header_actions_account_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"dropdown\">
        ";
        // line 3
        $this->displayBlock('layout_header_actions_account_widget_dropdown_button', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('layout_header_actions_account_widget_dropdown_menu', $context, $blocks);
        // line 23
        echo "    </div>
";
    }

    // line 3
    public function block_layout_header_actions_account_widget_dropdown_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            <button class=\"btn account-menu-btn header-actions-btn\"
                    type=\"button\"
                    id=\"accountWidget\"
                    data-offcanvas-account-menu=\"true\"
                    ";
        // line 8
        echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
        echo "=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    aria-label=\"";
        // line 11
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.myAccount")), "html", null, true);
        echo "\"
                    title=\"";
        // line 12
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.myAccount")), "html", null, true);
        echo "\">
                ";
        // line 13
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/actions/account-widget.html.twig", 13);
        })())->display(twig_array_merge($context, ["name" => "avatar"]));
        // line 14
        echo "            </button>
        ";
    }

    // line 17
    public function block_layout_header_actions_account_widget_dropdown_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "            <div class=\"dropdown-menu dropdown-menu-right account-menu-dropdown js-account-menu-dropdown\"
                 aria-labelledby=\"accountWidget\">
                ";
        // line 20
        $this->loadTemplate("@Storefront/storefront/layout/header/account-menu.html.twig", "@Storefront/storefront/layout/header/actions/account-widget.html.twig", 20)->display($context);
        // line 21
        echo "            </div>
        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/actions/account-widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  109 => 21,  107 => 20,  103 => 18,  99 => 17,  94 => 14,  86 => 13,  82 => 12,  78 => 11,  72 => 8,  66 => 4,  62 => 3,  57 => 23,  55 => 17,  52 => 16,  50 => 3,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/header/actions/account-widget.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/layout/header/actions/account-widget.html.twig");
    }
}
