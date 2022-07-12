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

/* @Storefront/storefront/component/analytics.html.twig */
class __TwigTemplate_d37d7814e86e5eda6d86928d3d26aa41ddc0a63f65dbdf897333ecca80215366 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_head_analytics' => [$this, 'block_component_head_analytics'],
            'component_head_analytics_gtag' => [$this, 'block_component_head_analytics_gtag'],
            'component_head_analytics_gtag_config' => [$this, 'block_component_head_analytics_gtag_config'],
            'component_head_analytics_tag_config' => [$this, 'block_component_head_analytics_tag_config'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_head_analytics', $context, $blocks);
    }

    public function block_component_head_analytics($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $this->displayBlock('component_head_analytics_gtag', $context, $blocks);
    }

    public function block_component_head_analytics_gtag($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        ";
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 3), "analytics", [], "any", false, false, false, 3) && sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 3), "analytics", [], "any", false, false, false, 3), "isActive", [], "method", false, false, false, 3))) {
            // line 4
            echo "            ";
            $context["trackingId"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 4), "analytics", [], "any", false, false, false, 4), "getTrackingId", [], "method", false, false, false, 4);
            // line 5
            echo "
            <script>
                ";
            // line 7
            $this->displayBlock('component_head_analytics_gtag_config', $context, $blocks);
            // line 23
            echo "            </script>

            ";
            // line 26
            echo "            ";
            if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
                // line 27
                echo "                <script id=\"sw-google-tag-manager-init\" type=\"javascript/blocked\">
                    ";
                // line 28
                $this->displayBlock('component_head_analytics_tag_config', $context, $blocks);
                // line 31
                echo "                </script>
            ";
            }
            // line 33
            echo "        ";
        }
        // line 34
        echo "    ";
    }

    // line 7
    public function block_component_head_analytics_gtag_config($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "                    window.gtagActive = true;
                    window.gtagURL = 'https://www.googletagmanager.com/gtag/js?id=";
        // line 9
        echo sw_escape_filter($this->env, ($context["trackingId"] ?? null), "html", null, true);
        echo "'
                    window.controllerName = '";
        // line 10
        echo sw_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerName"] ?? null)), "html", null, true);
        echo "';
                    window.actionName = '";
        // line 11
        echo sw_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerAction"] ?? null)), "html", null, true);
        echo "';
                    window.trackOrders = '";
        // line 12
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 12), "analytics", [], "any", false, false, false, 12), "isTrackOrders", [], "method", false, false, false, 12), "html", null, true);
        echo "';
                    window.gtagTrackingId = '";
        // line 13
        echo sw_escape_filter($this->env, ($context["trackingId"] ?? null), "html", null, true);
        echo "';
                    window.dataLayer = window.dataLayer || [];
                    window.gtagConfig = {
                        'anonymize_ip': '";
        // line 16
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 16), "analytics", [], "any", false, false, false, 16), "isAnonymizeIp", [], "method", false, false, false, 16), "html", null, true);
        echo "',
                        'cookie_domain': 'none',
                        'cookie_prefix': '_swag_ga',
                    };

                    function gtag() { dataLayer.push(arguments); }
                ";
    }

    // line 28
    public function block_component_head_analytics_tag_config($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "                        window.gtagCallback = function gtagCallbackFunction() {}
                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/analytics.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  135 => 29,  131 => 28,  120 => 16,  114 => 13,  110 => 12,  106 => 11,  102 => 10,  98 => 9,  95 => 8,  91 => 7,  87 => 34,  84 => 33,  80 => 31,  78 => 28,  75 => 27,  72 => 26,  68 => 23,  66 => 7,  62 => 5,  59 => 4,  56 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/analytics.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/analytics.html.twig");
    }
}
