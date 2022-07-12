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

/* 3d6ab01e2748b905b10b9f4f4dbb3b17 */
class __TwigTemplate_d130bde41756a987747f94d903a32d7d945fb79f303394f1e10c5edb2075b88a extends Template
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
        echo "Your sign-up with ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["salesChannel"]) || array_key_exists("salesChannel", $context) ? $context["salesChannel"] : (function () { throw new RuntimeError('Variable "salesChannel" does not exist.', 1, $this->source); })()), "translated", [], "any", false, false, false, 1), "name", [], "any", false, false, false, 1), "html", null, true);
    }

    public function getTemplateName()
    {
        return "3d6ab01e2748b905b10b9f4f4dbb3b17";
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
        return new Source("", "3d6ab01e2748b905b10b9f4f4dbb3b17", "");
    }
}
