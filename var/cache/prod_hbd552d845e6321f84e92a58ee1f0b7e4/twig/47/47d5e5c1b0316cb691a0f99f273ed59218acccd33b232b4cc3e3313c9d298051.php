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

/* @Storefront/storefront/page/account/newsletter.html.twig */
class __TwigTemplate_8f8cacd40d660f837460bd88d3d364caccb9ef540d0216c91340fe8f0ed10cd8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_account_overview_newsletter_content_inner' => [$this, 'block_page_account_overview_newsletter_content_inner'],
            'page_account_overview_newsletter_content_success' => [$this, 'block_page_account_overview_newsletter_content_success'],
            'page_account_overview_newsletter_content_form' => [$this, 'block_page_account_overview_newsletter_content_form'],
            'page_account_overview_newsletter_content_form_csrf' => [$this, 'block_page_account_overview_newsletter_content_form_csrf'],
            'page_account_overview_newsletter_content_form_check_control' => [$this, 'block_page_account_overview_newsletter_content_form_check_control'],
            'page_account_overview_newsletter_content_form_input' => [$this, 'block_page_account_overview_newsletter_content_form_input'],
            'page_account_overview_newsletter_content_form_label' => [$this, 'block_page_account_overview_newsletter_content_form_label'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_account_overview_newsletter_content_inner', $context, $blocks);
    }

    public function block_page_account_overview_newsletter_content_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
    ";
        // line 3
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_14001")) {
            // line 4
            echo "        ";
            // line 5
            echo "        ";
            $context["success"] = sw_get_attribute($this->env, $this->source, ($context["newsletterAccountPagelet"] ?? null), "success", [], "any", false, false, false, 5);
            // line 6
            echo "        ";
            $context["messages"] = sw_get_attribute($this->env, $this->source, ($context["newsletterAccountPagelet"] ?? null), "messages", [], "any", false, false, false, 6);
            // line 7
            echo "        ";
            $context["customer"] = sw_get_attribute($this->env, $this->source, ($context["newsletterAccountPagelet"] ?? null), "customer", [], "any", false, false, false, 7);
            // line 8
            echo "    ";
        }
        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('page_account_overview_newsletter_content_success', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $context["formAutoSubmitOptions"] = ["useAjax" => true, "ajaxContainerSelector" => ".js-newsletter-wrapper"];
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock('page_account_overview_newsletter_content_form', $context, $blocks);
    }

    // line 10
    public function block_page_account_overview_newsletter_content_success($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "        ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_14001")) {
            // line 12
            echo "            ";
            if ((1 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["newsletterAccountPagelet"] ?? null), "messages", [], "any", false, false, false, 12)), 0))) {
                // line 13
                echo "                <div class=\"newsletter-alerts\">
                    ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["newsletterAccountPagelet"] ?? null), "messages", [], "any", false, false, false, 14));
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
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 15
                    echo "                        ";
                    $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/newsletter.html.twig", 15)->display(twig_array_merge($context, ["type" => sw_get_attribute($this->env, $this->source, $context["message"], "type", [], "any", false, false, false, 15), "content" => sw_get_attribute($this->env, $this->source, $context["message"], "text", [], "any", false, false, false, 15)]));
                    // line 16
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "                </div>
            ";
            }
            // line 19
            echo "        ";
        } else {
            // line 20
            echo "            ";
            if ( !(null === ($context["success"] ?? null))) {
                // line 21
                echo "                <div class=\"newsletter-alerts\">
                    ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 23
                    echo "                        ";
                    $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/newsletter.html.twig", 23)->display(twig_array_merge($context, ["type" => sw_get_attribute($this->env, $this->source, $context["message"], "type", [], "any", false, false, false, 23), "content" => sw_get_attribute($this->env, $this->source, $context["message"], "text", [], "any", false, false, false, 23)]));
                    // line 24
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                </div>
            ";
            }
            // line 27
            echo "        ";
        }
        // line 28
        echo "
    ";
    }

    // line 36
    public function block_page_account_overview_newsletter_content_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "        <form name=\"newsletterRegister\"
              method=\"post\"
              action=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.newsletter");
        echo "\"
              data-form-auto-submit=\"true\"
              data-form-auto-submit-options='";
        // line 41
        echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["formAutoSubmitOptions"] ?? null)]), "html", null, true);
        echo "'>

            ";
        // line 43
        $this->displayBlock('page_account_overview_newsletter_content_form_csrf', $context, $blocks);
        // line 46
        echo "
            ";
        // line 47
        $this->displayBlock('page_account_overview_newsletter_content_form_check_control', $context, $blocks);
        // line 79
        echo "        </form>
    ";
    }

    // line 43
    public function block_page_account_overview_newsletter_content_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.newsletter");
        echo "
            ";
    }

    // line 47
    public function block_page_account_overview_newsletter_content_form_check_control($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "                <div class=\"";
        echo sw_escape_filter($this->env, ($context["formCheckboxWrapperClass"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 49
        $this->displayBlock('page_account_overview_newsletter_content_form_input', $context, $blocks);
        // line 70
        echo "
                    ";
        // line 71
        $this->displayBlock('page_account_overview_newsletter_content_form_label', $context, $blocks);
        // line 77
        echo "                </div>
            ";
    }

    // line 49
    public function block_page_account_overview_newsletter_content_form_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "                        ";
        $context["subscribe"] = twig_constant("Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterSubscribeRoute::OPTION_SUBSCRIBE");
        // line 51
        echo "                        ";
        $context["direct"] = twig_constant("Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterSubscribeRoute::OPTION_DIRECT");
        // line 52
        echo "                        ";
        $context["statusDirect"] = twig_constant("Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterSubscribeRoute::STATUS_DIRECT");
        // line 53
        echo "                        ";
        $context["statusOptIn"] = twig_constant("Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterSubscribeRoute::STATUS_OPT_IN");
        // line 54
        echo "                        ";
        $context["statusNotSet"] = twig_constant("Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterSubscribeRoute::STATUS_NOT_SET");
        // line 55
        echo "                        ";
        $context["status"] = false;
        // line 56
        echo "                        ";
        if ((((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["newsletterAccountPagelet"] ?? null), "newsletterStatus", [], "any", false, false, false, 56), ($context["statusDirect"] ?? null))) || (0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["newsletterAccountPagelet"] ?? null), "newsletterStatus", [], "any", false, false, false, 56), ($context["statusOptIn"] ?? null)))) || (0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["newsletterAccountPagelet"] ?? null), "newsletterStatus", [], "any", false, false, false, 56), ($context["statusNotSet"] ?? null))))) {
            // line 57
            echo "                            ";
            $context["status"] = true;
            // line 58
            echo "                        ";
        }
        // line 59
        echo "                        ";
        if ((0 === twig_compare($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_14001"), false))) {
            // line 60
            echo "                            ";
            $context["status"] = sw_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "newsletter", [], "any", false, false, false, 60);
            // line 61
            echo "                        ";
        }
        // line 62
        echo "                        <input type=\"checkbox\"
                               class=\"";
        // line 63
        echo sw_escape_filter($this->env, ($context["formCheckInputClass"] ?? null), "html", null, true);
        echo "\"
                               id=\"newsletterRegister\"
                               name=\"option\"
                               autocomplete=\"off\"
                               value=\"";
        // line 67
        if (sw_get_attribute($this->env, $this->source, ($context["newsletterAccountPagelet"] ?? null), "newsletterDoi", [], "any", false, false, false, 67)) {
            echo sw_escape_filter($this->env, ($context["subscribe"] ?? null), "html", null, true);
        } else {
            echo sw_escape_filter($this->env, ($context["direct"] ?? null), "html", null, true);
        }
        echo "\"
                               ";
        // line 68
        if (($context["status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo ">
                    ";
    }

    // line 71
    public function block_page_account_overview_newsletter_content_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "                        <label class=\"";
        echo sw_escape_filter($this->env, ($context["formCheckLabelClass"] ?? null), "html", null, true);
        echo " custom-control-label\"
                               for=\"newsletterRegister\">
                            ";
        // line 74
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.newsletterSettings", ["%shopname%" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shopName")]));
        echo "
                        </label>
                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/newsletter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  331 => 74,  325 => 72,  321 => 71,  313 => 68,  305 => 67,  298 => 63,  295 => 62,  292 => 61,  289 => 60,  286 => 59,  283 => 58,  280 => 57,  277 => 56,  274 => 55,  271 => 54,  268 => 53,  265 => 52,  262 => 51,  259 => 50,  255 => 49,  250 => 77,  248 => 71,  245 => 70,  243 => 49,  238 => 48,  234 => 47,  227 => 44,  223 => 43,  218 => 79,  216 => 47,  213 => 46,  211 => 43,  206 => 41,  201 => 39,  197 => 37,  193 => 36,  188 => 28,  185 => 27,  181 => 25,  167 => 24,  164 => 23,  147 => 22,  144 => 21,  141 => 20,  138 => 19,  134 => 17,  120 => 16,  117 => 15,  100 => 14,  97 => 13,  94 => 12,  91 => 11,  87 => 10,  83 => 36,  80 => 35,  78 => 31,  75 => 30,  73 => 10,  70 => 9,  67 => 8,  64 => 7,  61 => 6,  58 => 5,  56 => 4,  54 => 3,  51 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/account/newsletter.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/page/account/newsletter.html.twig");
    }
}
