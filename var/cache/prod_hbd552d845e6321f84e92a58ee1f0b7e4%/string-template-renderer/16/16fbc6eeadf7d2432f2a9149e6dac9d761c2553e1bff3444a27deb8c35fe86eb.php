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

/* b655ba35d816416161c073558cd6c813 */
class __TwigTemplate_d230fca4c0f661c0512a5d454a62e9ad8ece0aba98895f90a84fa67e41775bf4 extends Template
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
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 1, $this->source); })()), "salutation", [], "any", false, false, false, 1), "translated", [], "any", false, false, false, 1), "letterName", [], "any", false, false, false, 1), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 1, $this->source); })()), "firstName", [], "any", false, false, false, 1), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 1, $this->source); })()), "lastName", [], "any", false, false, false, 1), "html", null, true);
        echo ",

                thank you for your signing up with our Shop.
                You will gain access via the email address ";
        // line 4
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 4, $this->source); })()), "email", [], "any", false, false, false, 4), "html", null, true);
        echo " and the password you have chosen.
                You can change your password anytime.
        ";
    }

    public function getTemplateName()
    {
        return "b655ba35d816416161c073558cd6c813";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "b655ba35d816416161c073558cd6c813", "");
    }
}
