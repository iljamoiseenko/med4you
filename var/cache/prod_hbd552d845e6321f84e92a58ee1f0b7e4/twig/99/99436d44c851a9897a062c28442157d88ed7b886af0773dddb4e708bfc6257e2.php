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

/* @Storefront/storefront/layout/footer/footer.html.twig */
class __TwigTemplate_bc7f5956490faf12f4ba547810dc41f530557c5cd4aa5e2ac2bdc749e2b2fb02 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_footer_inner_container' => [$this, 'block_layout_footer_inner_container'],
            'layout_footer_navigation' => [$this, 'block_layout_footer_navigation'],
            'layout_footer_navigation_hotline' => [$this, 'block_layout_footer_navigation_hotline'],
            'layout_footer_navigation_hotline_headline' => [$this, 'block_layout_footer_navigation_hotline_headline'],
            'layout_footer_navigation_hotline_icons' => [$this, 'block_layout_footer_navigation_hotline_icons'],
            'layout_footer_navigation_hotline_content' => [$this, 'block_layout_footer_navigation_hotline_content'],
            'layout_footer_navigation_columns' => [$this, 'block_layout_footer_navigation_columns'],
            'layout_footer_navigation_column' => [$this, 'block_layout_footer_navigation_column'],
            'layout_footer_navigation_information_headline' => [$this, 'block_layout_footer_navigation_information_headline'],
            'layout_footer_navigation_information_icons' => [$this, 'block_layout_footer_navigation_information_icons'],
            'layout_footer_navigation_information_content' => [$this, 'block_layout_footer_navigation_information_content'],
            'layout_footer_navigation_information_links' => [$this, 'block_layout_footer_navigation_information_links'],
            'layout_footer_navigation_information_link_item' => [$this, 'block_layout_footer_navigation_information_link_item'],
            'layout_footer_navigation_information_link' => [$this, 'block_layout_footer_navigation_information_link'],
            'layout_footer_payment_shipping_logos' => [$this, 'block_layout_footer_payment_shipping_logos'],
            'layout_footer_payment_logos' => [$this, 'block_layout_footer_payment_logos'],
            'layout_footer_payment_logo' => [$this, 'block_layout_footer_payment_logo'],
            'layout_footer_shipping_logos' => [$this, 'block_layout_footer_shipping_logos'],
            'layout_footer_shipping_logo' => [$this, 'block_layout_footer_shipping_logo'],
            'layout_footer_bottom' => [$this, 'block_layout_footer_bottom'],
            'layout_footer_service_menu' => [$this, 'block_layout_footer_service_menu'],
            'layout_footer_service_menu_content' => [$this, 'block_layout_footer_service_menu_content'],
            'layout_footer_service_menu_item' => [$this, 'block_layout_footer_service_menu_item'],
            'layout_footer_vat' => [$this, 'block_layout_footer_vat'],
            'layout_footer_copyright' => [$this, 'block_layout_footer_copyright'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_footer_inner_container', $context, $blocks);
    }

    public function block_layout_footer_inner_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"container\">

        ";
        // line 4
        $this->displayBlock('layout_footer_navigation', $context, $blocks);
        // line 125
        echo "
        ";
        // line 126
        $this->displayBlock('layout_footer_payment_shipping_logos', $context, $blocks);
        // line 173
        echo "
    </div>

    ";
        // line 176
        $this->displayBlock('layout_footer_bottom', $context, $blocks);
    }

    // line 4
    public function block_layout_footer_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "            <div id=\"footerColumns\"
                 class=\"row footer-columns\"
                 data-collapse-footer=\"true\"
                 role=\"list\">
                ";
        // line 9
        $this->displayBlock('layout_footer_navigation_hotline', $context, $blocks);
        // line 50
        echo "
                ";
        // line 51
        $this->displayBlock('layout_footer_navigation_columns', $context, $blocks);
        // line 123
        echo "            </div>
        ";
    }

    // line 9
    public function block_layout_footer_navigation_hotline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                    <div class=\"col-md-4 footer-column js-footer-column\">
                        ";
        // line 11
        $this->displayBlock('layout_footer_navigation_hotline_headline', $context, $blocks);
        // line 31
        echo "
                        ";
        // line 32
        $this->displayBlock('layout_footer_navigation_hotline_content', $context, $blocks);
        // line 48
        echo "                    </div>
                ";
    }

    // line 11
    public function block_layout_footer_navigation_hotline_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "                            <div class=\"footer-column-headline footer-headline js-footer-column-headline js-collapse-footer-column-trigger\"
                                 id=\"collapseFooterHotlineTitle\"
                                 ";
        // line 14
        echo sw_escape_filter($this->env, ($context["dataBsTargetAttr"] ?? null), "html", null, true);
        echo "=\"#collapseFooterHotline\"
                                 aria-expanded=\"true\"
                                 aria-controls=\"collapseFooterHotline\"
                                 role=\"listitem\">
                                ";
        // line 18
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.serviceHotlineHeadline"));
        echo "
                                ";
        // line 19
        $this->displayBlock('layout_footer_navigation_hotline_icons', $context, $blocks);
        // line 29
        echo "                            </div>
                        ";
    }

    // line 19
    public function block_layout_footer_navigation_hotline_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                                    <div class=\"footer-column-toggle\">
                                        <span class=\"footer-plus-icon\">
                                            ";
        // line 22
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 22);
        })())->display(twig_array_merge($context, ["name" => "plus"]));
        // line 23
        echo "                                        </span>
                                        <span class=\"footer-minus-icon\">
                                            ";
        // line 25
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 25);
        })())->display(twig_array_merge($context, ["name" => "minus"]));
        // line 26
        echo "                                        </span>
                                    </div>
                                ";
    }

    // line 32
    public function block_layout_footer_navigation_hotline_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "                            <div id=\"collapseFooterHotline\"
                                 class=\"footer-column-content collapse js-footer-column-content footer-contact\"
                                 aria-labelledby=\"collapseFooterHotlineTitle\">
                                <div class=\"footer-column-content-inner\">
                                    <p class=\"footer-contact-hotline\">
                                        ";
        // line 38
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.serviceHotline"));
        echo "
                                    </p>
                                </div>
                                <div class=\"footer-contact-form\">
                                    ";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.serviceContactLink", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.contactPage")])]);
        // line 44
        echo "
                                </div>
                            </div>
                        ";
    }

    // line 51
    public function block_layout_footer_navigation_columns($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, false, 52), "navigation", [], "any", false, false, false, 52), "tree", [], "any", false, false, false, 52));
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
        foreach ($context['_seq'] as $context["_key"] => $context["root"]) {
            // line 53
            echo "                        ";
            $this->displayBlock('layout_footer_navigation_column', $context, $blocks);
            // line 121
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['root'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                ";
    }

    // line 53
    public function block_layout_footer_navigation_column($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "                            <div class=\"col-md-4 footer-column js-footer-column\">
                                ";
        // line 55
        $this->displayBlock('layout_footer_navigation_information_headline', $context, $blocks);
        // line 82
        echo "
                                ";
        // line 83
        $this->displayBlock('layout_footer_navigation_information_content', $context, $blocks);
        // line 119
        echo "                            </div>
                        ";
    }

    // line 55
    public function block_layout_footer_navigation_information_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "                                    <div class=\"footer-column-headline footer-headline js-collapse-footer-column-trigger\"
                                         ";
        // line 57
        echo sw_escape_filter($this->env, ($context["dataBsTargetAttr"] ?? null), "html", null, true);
        echo "=\"#collapseFooterTitle";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 57), "html", null, true);
        echo "\"
                                         aria-expanded=\"true\"
                                         aria-controls=\"collapseFooter";
        // line 59
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 59), "html", null, true);
        echo "\">

                                        ";
        // line 61
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 61), "type", [], "any", false, false, false, 61), "folder"))) {
            // line 62
            echo "                                            ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 62), "translated", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
            echo "
                                        ";
        } else {
            // line 64
            echo "                                            <a href=\"";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 64));
            echo "\"
                                               ";
            // line 65
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 65))) {
                echo "target=\"_blank\"";
            }
            // line 66
            echo "                                               title=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 66), "translated", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66), "html", null, true);
            echo "\">
                                                ";
            // line 67
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 67), "translated", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67), "html", null, true);
            echo "
                                            </a>
                                        ";
        }
        // line 70
        echo "                                        ";
        $this->displayBlock('layout_footer_navigation_information_icons', $context, $blocks);
        // line 80
        echo "                                    </div>
                                ";
    }

    // line 70
    public function block_layout_footer_navigation_information_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "                                            <div class=\"footer-column-toggle\">
                                                <span class=\"footer-plus-icon\">
                                                    ";
        // line 73
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 73);
        })())->display(twig_array_merge($context, ["name" => "plus"]));
        // line 74
        echo "                                                </span>
                                                <span class=\"footer-minus-icon\">
                                                    ";
        // line 76
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 76);
        })())->display(twig_array_merge($context, ["name" => "minus"]));
        // line 77
        echo "                                                </span>
                                            </div>
                                        ";
    }

    // line 83
    public function block_layout_footer_navigation_information_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "                                    <div id=\"collapseFooter";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 84), "html", null, true);
        echo "\"
                                         class=\"footer-column-content collapse js-footer-column-content\"
                                         aria-labelledby=\"collapseFooterTitle";
        // line 86
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 86), "html", null, true);
        echo "\">
                                        <div class=\"footer-column-content-inner\">
                                            ";
        // line 88
        $this->displayBlock('layout_footer_navigation_information_links', $context, $blocks);
        // line 116
        echo "                                        </div>
                                    </div>
                                ";
    }

    // line 88
    public function block_layout_footer_navigation_information_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "                                                <ul class=\"list-unstyled\">
                                                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "children", [], "any", false, false, false, 90));
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
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 91
            echo "                                                        ";
            $context["category"] = sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 91);
            // line 92
            echo "                                                        ";
            $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 92), "name", [], "any", false, false, false, 92);
            // line 93
            echo "
                                                        ";
            // line 95
            echo "                                                        ";
            $context["externalLink"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 95), "externalLink", [], "any", false, false, false, 95);
            // line 96
            echo "
                                                        ";
            // line 97
            $this->displayBlock('layout_footer_navigation_information_link_item', $context, $blocks);
            // line 113
            echo "                                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                                                </ul>
                                            ";
    }

    // line 97
    public function block_layout_footer_navigation_information_link_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "                                                            <li class=\"footer-link-item\">
                                                                ";
        // line 99
        $this->displayBlock('layout_footer_navigation_information_link', $context, $blocks);
        // line 111
        echo "                                                            </li>
                                                        ";
    }

    // line 99
    public function block_layout_footer_navigation_information_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "                                                                    ";
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "type", [], "any", false, false, false, 100), "folder"))) {
            // line 101
            echo "                                                                        <div>";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</div>
                                                                    ";
        } else {
            // line 103
            echo "                                                                        <a class=\"footer-link\"
                                                                           href=\"";
            // line 104
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["category"] ?? null));
            echo "\"
                                                                           ";
            // line 105
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["category"] ?? null))) {
                echo "target=\"_blank\"";
            }
            // line 106
            echo "                                                                           title=\"";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                                                            ";
            // line 107
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "
                                                                        </a>
                                                                    ";
        }
        // line 110
        echo "                                                                ";
    }

    // line 126
    public function block_layout_footer_payment_shipping_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        echo "            <div class=\"footer-logos\">
                ";
        // line 128
        $this->displayBlock('layout_footer_payment_logos', $context, $blocks);
        // line 149
        echo "
                ";
        // line 150
        $this->displayBlock('layout_footer_shipping_logos', $context, $blocks);
        // line 171
        echo "            </div>
        ";
    }

    // line 128
    public function block_layout_footer_payment_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 129
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "salesChannelPaymentMethods", [], "any", false, false, false, 129));
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
        foreach ($context['_seq'] as $context["_key"] => $context["paymentMethod"]) {
            // line 130
            echo "                        ";
            $this->displayBlock('layout_footer_payment_logo', $context, $blocks);
            // line 147
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paymentMethod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "                ";
    }

    // line 130
    public function block_layout_footer_payment_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "                            ";
        if (sw_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 131)) {
            // line 132
            echo "                                <div class=\"footer-logo is-payment\">
                                    ";
            // line 133
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 133);
            })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,             // line 134
($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 134), "sizes" => ["default" => "100px"], "attributes" => ["class" => "img-fluid footer-logo-image", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 140
($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 140), "translated", [], "any", false, false, false, 140), "alt", [], "any", false, false, false, 140)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 140), "translated", [], "any", false, false, false, 140), "alt", [], "any", false, false, false, 140)) : (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "translated", [], "any", false, false, false, 140), "name", [], "any", false, false, false, 140))), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 141
($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 141), "translated", [], "any", false, false, false, 141), "title", [], "any", false, false, false, 141)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 141), "translated", [], "any", false, false, false, 141), "title", [], "any", false, false, false, 141)) : (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "translated", [], "any", false, false, false, 141), "name", [], "any", false, false, false, 141)))], "name" => "footer-payment-image-thumbnails"]));
            // line 144
            echo "                                </div>
                            ";
        }
        // line 146
        echo "                        ";
    }

    // line 150
    public function block_layout_footer_shipping_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "salesChannelShippingMethods", [], "any", false, false, false, 151));
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
        foreach ($context['_seq'] as $context["_key"] => $context["shippingMethod"]) {
            // line 152
            echo "                        ";
            $this->displayBlock('layout_footer_shipping_logo', $context, $blocks);
            // line 169
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shippingMethod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                ";
    }

    // line 152
    public function block_layout_footer_shipping_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        echo "                            ";
        if (sw_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 153)) {
            // line 154
            echo "                                <div class=\"footer-logo is-shipping\">
                                    ";
            // line 155
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 155);
            })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,             // line 156
($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 156), "sizes" => ["default" => "100px"], "attributes" => ["class" => "img-fluid footer-logo-image", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 162
($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 162), "translated", [], "any", false, false, false, 162), "alt", [], "any", false, false, false, 162)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 162), "translated", [], "any", false, false, false, 162), "alt", [], "any", false, false, false, 162)) : (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "translated", [], "any", false, false, false, 162), "name", [], "any", false, false, false, 162))), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 163
($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 163), "translated", [], "any", false, false, false, 163), "title", [], "any", false, false, false, 163)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 163), "translated", [], "any", false, false, false, 163), "title", [], "any", false, false, false, 163)) : (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "translated", [], "any", false, false, false, 163), "name", [], "any", false, false, false, 163)))], "name" => "footer-shipping-image-thumbnails"]));
            // line 166
            echo "                                </div>
                            ";
        }
        // line 168
        echo "                        ";
    }

    // line 176
    public function block_layout_footer_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 177
        echo "        <div class=\"footer-bottom\">
            ";
        // line 178
        $this->displayBlock('layout_footer_service_menu', $context, $blocks);
        // line 200
        echo "
            ";
        // line 201
        $this->displayBlock('layout_footer_vat', $context, $blocks);
        // line 218
        echo "
            ";
        // line 219
        $this->displayBlock('layout_footer_copyright', $context, $blocks);
        // line 225
        echo "        </div>
    ";
    }

    // line 178
    public function block_layout_footer_service_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 179
        echo "                <div class=\"container\">
                    ";
        // line 180
        $this->displayBlock('layout_footer_service_menu_content', $context, $blocks);
        // line 198
        echo "                </div>
            ";
    }

    // line 180
    public function block_layout_footer_service_menu_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 181
        echo "                        ";
        ob_start(function () { return ''; });
        // line 182
        echo "                            <ul class=\"footer-service-menu-list list-unstyled\">
                                ";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 183), "serviceMenu", [], "any", false, false, false, 183));
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
        foreach ($context['_seq'] as $context["_key"] => $context["serviceMenuItem"]) {
            // line 184
            echo "                                    ";
            $this->displayBlock('layout_footer_service_menu_item', $context, $blocks);
            // line 194
            echo "                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serviceMenuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                            </ul>
                        ";
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 181
        echo twig_spaceless($___internal_parse_3_);
        // line 197
        echo "                    ";
    }

    // line 184
    public function block_layout_footer_service_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 185
        echo "                                        <li class=\"footer-service-menu-item\">
                                            <a class=\"footer-service-menu-link\"
                                               href=\"";
        // line 187
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["serviceMenuItem"] ?? null));
        echo "\"
                                               ";
        // line 188
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["serviceMenuItem"] ?? null))) {
            echo "target=\"_blank\"";
        }
        // line 189
        echo "                                               title=\"";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["serviceMenuItem"] ?? null), "translated", [], "any", false, false, false, 189), "name", [], "any", false, false, false, 189), "html", null, true);
        echo "\">
                                                ";
        // line 190
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["serviceMenuItem"] ?? null), "translated", [], "any", false, false, false, 190), "name", [], "any", false, false, false, 190), "html", null, true);
        echo "
                                            </a>
                                        </li>
                                    ";
    }

    // line 201
    public function block_layout_footer_vat($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 202
        echo "                <div class=\"footer-vat\">
                    ";
        // line 203
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "taxState", [], "any", false, false, false, 203), "gross"))) {
            // line 204
            echo "                        <p>
                            ";
            // line 205
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.includeVat", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shippingPaymentInfoPage")])]);
            // line 207
            echo "
                        </p>
                    ";
        } else {
            // line 210
            echo "                        <p>
                            ";
            // line 211
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.excludeVat", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shippingPaymentInfoPage")])]);
            // line 213
            echo "
                        </p>
                    ";
        }
        // line 216
        echo "                </div>
            ";
    }

    // line 219
    public function block_layout_footer_copyright($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 220
        echo "                <div class=\"footer-copyright\">
                    ";
        // line 221
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 221);
        })())->display(twig_array_merge($context, ["size" => "xs", "name" => "shopware"]));
        // line 222
        echo "                    ";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.copyrightInfo"));
        echo "
                </div>
            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/footer/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  837 => 222,  829 => 221,  826 => 220,  822 => 219,  817 => 216,  812 => 213,  810 => 211,  807 => 210,  802 => 207,  800 => 205,  797 => 204,  795 => 203,  792 => 202,  788 => 201,  780 => 190,  775 => 189,  771 => 188,  767 => 187,  763 => 185,  759 => 184,  755 => 197,  753 => 181,  749 => 195,  735 => 194,  732 => 184,  715 => 183,  712 => 182,  709 => 181,  705 => 180,  700 => 198,  698 => 180,  695 => 179,  691 => 178,  686 => 225,  684 => 219,  681 => 218,  679 => 201,  676 => 200,  674 => 178,  671 => 177,  667 => 176,  663 => 168,  659 => 166,  657 => 163,  656 => 162,  655 => 156,  648 => 155,  645 => 154,  642 => 153,  638 => 152,  634 => 170,  620 => 169,  617 => 152,  599 => 151,  595 => 150,  591 => 146,  587 => 144,  585 => 141,  584 => 140,  583 => 134,  576 => 133,  573 => 132,  570 => 131,  566 => 130,  562 => 148,  548 => 147,  545 => 130,  527 => 129,  523 => 128,  518 => 171,  516 => 150,  513 => 149,  511 => 128,  508 => 127,  504 => 126,  500 => 110,  494 => 107,  489 => 106,  485 => 105,  481 => 104,  478 => 103,  472 => 101,  469 => 100,  465 => 99,  460 => 111,  458 => 99,  455 => 98,  451 => 97,  446 => 114,  432 => 113,  430 => 97,  427 => 96,  424 => 95,  421 => 93,  418 => 92,  415 => 91,  398 => 90,  395 => 89,  391 => 88,  385 => 116,  383 => 88,  378 => 86,  372 => 84,  368 => 83,  362 => 77,  354 => 76,  350 => 74,  342 => 73,  338 => 71,  334 => 70,  329 => 80,  326 => 70,  320 => 67,  315 => 66,  311 => 65,  306 => 64,  300 => 62,  298 => 61,  293 => 59,  286 => 57,  283 => 56,  279 => 55,  274 => 119,  272 => 83,  269 => 82,  267 => 55,  264 => 54,  260 => 53,  256 => 122,  242 => 121,  239 => 53,  221 => 52,  217 => 51,  210 => 44,  208 => 42,  201 => 38,  194 => 33,  190 => 32,  184 => 26,  176 => 25,  172 => 23,  164 => 22,  160 => 20,  156 => 19,  151 => 29,  149 => 19,  145 => 18,  138 => 14,  134 => 12,  130 => 11,  125 => 48,  123 => 32,  120 => 31,  118 => 11,  115 => 10,  111 => 9,  106 => 123,  104 => 51,  101 => 50,  99 => 9,  93 => 5,  89 => 4,  85 => 176,  80 => 173,  78 => 126,  75 => 125,  73 => 4,  69 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/footer/footer.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/layout/footer/footer.html.twig");
    }
}
