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

/* 25cb1ee2729cb4924ede4c010316a33e */
class __TwigTemplate_3893a0a004f2c4635ef41c53a9f75054e9e46b56845655d9d0a902edc27fba1f extends Template
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
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, (isset($context["salesChannel"]) || array_key_exists("salesChannel", $context) ? $context["salesChannel"] : (function () { throw new RuntimeError('Variable "salesChannel" does not exist.', 1, $this->source); })()), "name", [], "any", false, false, false, 1), "html", null, true);
    }

    public function getTemplateName()
    {
        return "25cb1ee2729cb4924ede4c010316a33e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "25cb1ee2729cb4924ede4c010316a33e", "");
    }
}
