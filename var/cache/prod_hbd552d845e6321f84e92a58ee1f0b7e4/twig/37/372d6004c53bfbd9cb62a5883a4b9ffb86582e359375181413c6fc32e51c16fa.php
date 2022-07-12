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

/* @Storefront/storefront/component/privacy-notice.html.twig */
class __TwigTemplate_0405a0df4c83bd56dbf9d3a554d3c257897bc36eb8213aa095fa20a1b0a4b893 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_privacy_notice' => [$this, 'block_component_privacy_notice'],
            'component_privacy_title' => [$this, 'block_component_privacy_title'],
            'component_privacy_dpi' => [$this, 'block_component_privacy_dpi'],
            'component_privacy_dpi_checkbox' => [$this, 'block_component_privacy_dpi_checkbox'],
            'component_privacy_dpi_label' => [$this, 'block_component_privacy_dpi_label'],
            'component_privacy_label' => [$this, 'block_component_privacy_label'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_privacy_notice', $context, $blocks);
    }

    public function block_component_privacy_notice($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"form-text privacy-notice\">
        ";
        // line 3
        $this->displayBlock('component_privacy_title', $context, $blocks);
        // line 6
        echo "
        ";
        // line 7
        $this->displayBlock('component_privacy_dpi', $context, $blocks);
        // line 49
        echo "    </div>
";
    }

    // line 3
    public function block_component_privacy_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            <strong>";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.privacyTitle"));
        echo "</strong><br/>
        ";
    }

    // line 7
    public function block_component_privacy_dpi($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "            ";
        if ((0 === twig_compare($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.requireDataProtectionCheckbox"), 1))) {
            // line 9
            echo "                <div class=\"";
            echo sw_escape_filter($this->env, ($context["formCheckboxWrapperClass"] ?? null), "html", null, true);
            echo " data-protection-information\">
                    ";
            // line 10
            $this->displayBlock('component_privacy_dpi_checkbox', $context, $blocks);
            // line 19
            echo "
                    ";
            // line 20
            $this->displayBlock('component_privacy_dpi_label', $context, $blocks);
            // line 33
            echo "                </div>
            ";
        } else {
            // line 35
            echo "                <div class=\"data-protection-information\">
                    ";
            // line 36
            $this->displayBlock('component_privacy_label', $context, $blocks);
            // line 46
            echo "                </div>
            ";
        }
        // line 48
        echo "        ";
    }

    // line 10
    public function block_component_privacy_dpi_checkbox($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "                        <input type=\"checkbox\"
                               class=\"";
        // line 12
        echo sw_escape_filter($this->env, ($context["formCheckInputClass"] ?? null), "html", null, true);
        echo " ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/acceptedDataProtection"], "method", false, false, false, 12))) {
            echo " is-invalid";
        }
        echo "\"
                               name=\"acceptedDataProtection\"
                               required=\"required\"
                               value=\"1\"
                               id=\"acceptedDataProtection\"
                               ";
        // line 17
        if (sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "acceptedDataProtection"], "method", false, false, false, 17)) {
            echo "checked=\"checked\"";
        }
        echo ">
                    ";
    }

    // line 20
    public function block_component_privacy_dpi_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                        <label class=\"custom-control-label no-validation\"
                               for=\"acceptedDataProtection\">
                            ";
        // line 24
        echo "                            ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.privacyNotice", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.privacyPage")]), "%privacyUrl%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.privacyPage")]), "%tosUrl%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.tosPage")])]);
        // line 28
        echo "

                            ";
        // line 30
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
    }

    // line 36
    public function block_component_privacy_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "                        <label>
                            ";
        // line 39
        echo "                            ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.privacyNotice", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.privacyPage")]), "%privacyUrl%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.privacyPage")]), "%tosUrl%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.tosPage")])]);
        // line 43
        echo "
                        </label>
                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/privacy-notice.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  171 => 43,  168 => 39,  165 => 37,  161 => 36,  154 => 30,  150 => 28,  147 => 24,  143 => 21,  139 => 20,  131 => 17,  119 => 12,  116 => 11,  112 => 10,  108 => 48,  104 => 46,  102 => 36,  99 => 35,  95 => 33,  93 => 20,  90 => 19,  88 => 10,  83 => 9,  80 => 8,  76 => 7,  69 => 4,  65 => 3,  60 => 49,  58 => 7,  55 => 6,  53 => 3,  50 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/privacy-notice.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/privacy-notice.html.twig");
    }
}
