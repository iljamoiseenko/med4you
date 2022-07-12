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

/* @Storefront/storefront/component/captcha/honeypot.html.twig */
class __TwigTemplate_035c532392122e52daf61fbffc88814cfe44dfd9cbf66758337ebdbbebff3206 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_captcha_honeypot' => [$this, 'block_component_captcha_honeypot'],
            'component_captcha_honeypot_input' => [$this, 'block_component_captcha_honeypot_input'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_captcha_honeypot', $context, $blocks);
    }

    public function block_component_captcha_honeypot($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"";
        echo sw_escape_filter($this->env, twig_constant("Shopware\\Storefront\\Framework\\Captcha\\HoneypotCaptcha::CAPTCHA_REQUEST_PARAMETER"), "html", null, true);
        echo "\">
        ";
        // line 3
        $this->displayBlock('component_captcha_honeypot_input', $context, $blocks);
        // line 15
        echo "    </div>
";
    }

    // line 3
    public function block_component_captcha_honeypot_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            <input type=\"text\"
                   name=\"";
        // line 5
        echo sw_escape_filter($this->env, twig_constant("Shopware\\Storefront\\Framework\\Captcha\\HoneypotCaptcha::CAPTCHA_REQUEST_PARAMETER"), "html", null, true);
        echo "\"
                   class=\"d-none\"
                   value=\"\"
                   tabindex=\"-1\"
                   autocapitalize=\"off\"
                   spellcheck=\"false\"
                   autocorrect=\"off\"
                   autocomplete=\"off\"
            >
        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/captcha/honeypot.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 5,  62 => 4,  58 => 3,  53 => 15,  51 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/captcha/honeypot.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/captcha/honeypot.html.twig");
    }
}
