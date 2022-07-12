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

/* 072974b7e0e43362e9565e33575e4640 */
class __TwigTemplate_d190931ebd56b872893efcc0dd88405f53580ce31de2bb675d19c67537304cd7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div style=\"font-family:arial; font-size:12px;\">
            <p>
                ";
        // line 3
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 3, $this->source); })()), "salutation", [], "any", false, false, false, 3), "translated", [], "any", false, false, false, 3), "letterName", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 3, $this->source); })()), "firstName", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 3, $this->source); })()), "lastName", [], "any", false, false, false, 3), "html", null, true);
        echo ",<br/>
                <br/>
                thank you for your signing up with our Shop.<br/>
                You will gain access via the email address <strong>";
        // line 6
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 6, $this->source); })()), "email", [], "any", false, false, false, 6), "html", null, true);
        echo "</strong> and the password you have chosen.<br/>
                You can change your password anytime.
            </p>
        </div>";
    }

    public function getTemplateName()
    {
        return "072974b7e0e43362e9565e33575e4640";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "072974b7e0e43362e9565e33575e4640", "");
    }
}
