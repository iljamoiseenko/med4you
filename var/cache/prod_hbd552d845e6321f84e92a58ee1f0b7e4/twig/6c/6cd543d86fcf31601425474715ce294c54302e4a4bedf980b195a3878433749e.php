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

/* @Storefront/storefront/component/pseudo-modal.html.twig */
class __TwigTemplate_d2942bd499feb813a83bcdfe664c91155adffa8285b51d76e7a13ae77d0fb74e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'product_detail_zoom_modal_close_button_content' => [$this, 'block_product_detail_zoom_modal_close_button_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"js-pseudo-modal-template\">
    <div class=\"modal fade\"
         tabindex=\"-1\"
         role=\"dialog\">
        <div class=\"modal-dialog\"
             role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header only-close\">
                    ";
        // line 10
        echo "                    ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("V6_5_0_0")) {
            // line 11
            echo "                        <div class=\"modal-title js-pseudo-modal-template-title-element h5\"></div>
                    ";
        } else {
            // line 13
            echo "                        <h5 class=\"modal-title js-pseudo-modal-template-title-element\"></h5>
                    ";
        }
        // line 15
        echo "
                    <button type=\"button\"
                            class=\"";
        // line 17
        echo sw_escape_filter($this->env, ($context["modalCloseBtnClass"] ?? null), "html", null, true);
        echo " close\"
                            ";
        // line 18
        echo sw_escape_filter($this->env, ($context["dataBsDismissAttr"] ?? null), "html", null, true);
        echo "=\"modal\"
                            aria-label=\"Close\">
                        ";
        // line 20
        $this->displayBlock('product_detail_zoom_modal_close_button_content', $context, $blocks);
        // line 28
        echo "                    </button>
                </div>
                <div class=\"modal-body js-pseudo-modal-template-content-element\">
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 20
    public function block_product_detail_zoom_modal_close_button_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                            ";
        // line 22
        echo "                            ";
        if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 23
            echo "                                <span aria-hidden=\"true\">
                                    ";
            // line 24
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/pseudo-modal.html.twig", 24);
            })())->display(twig_array_merge($context, ["size" => "sm", "name" => "x"]));
            // line 25
            echo "                                </span>
                            ";
        }
        // line 27
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/pseudo-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 27,  106 => 25,  98 => 24,  95 => 23,  92 => 22,  90 => 21,  86 => 20,  74 => 28,  72 => 20,  67 => 18,  63 => 17,  59 => 15,  55 => 13,  51 => 11,  48 => 10,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/pseudo-modal.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/component/pseudo-modal.html.twig");
    }
}
