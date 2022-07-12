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

/* @Storefront/storefront/component/captcha/base.html.twig */
class __TwigTemplate_cc6bafcdc18d0ca9934b62ec74217d3b6bb867cd45a8fec4d8175d44301cc0d7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_captcha_base' => [$this, 'block_component_captcha_base'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_captcha_base', $context, $blocks);
    }

    public function block_component_captcha_base($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if ( !array_key_exists("formId", $context)) {
            // line 3
            echo "        ";
            $context["formId"] = twig_random($this->env);
            // line 4
            echo "    ";
        }
        // line 5
        echo "
    ";
        // line 6
        $context["captchas"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.activeCaptchasV2");
        // line 7
        echo "
    ";
        // line 8
        if ((array_key_exists("captchas", $context) &&  !twig_test_empty(($context["captchas"] ?? null)))) {
            // line 9
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["capchaKey"] => $context["captcha"]) {
                // line 10
                echo "            ";
                if (sw_get_attribute($this->env, $this->source, $context["captcha"], "isActive", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "                ";
                    ((function () use ($context, $blocks) {
                        $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                        $includeTemplate = $finder->find(twig_sprintf("@Storefront/storefront/component/captcha/%s.html.twig", $context["capchaKey"]));

                        return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/captcha/base.html.twig", 11);
                    })())->display(twig_array_merge($context, ["additionalClass" =>                     // line 13
($context["additionalClass"] ?? null), "formId" => twig_sprintf("form-%s",                     // line 14
($context["formId"] ?? null))]));
                    // line 17
                    echo "            ";
                }
                // line 18
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['capchaKey'], $context['captcha'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/captcha/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 19,  99 => 18,  96 => 17,  94 => 14,  93 => 13,  85 => 11,  82 => 10,  64 => 9,  62 => 8,  59 => 7,  57 => 6,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/captcha/base.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/captcha/base.html.twig");
    }
}
