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

/* @Storefront/storefront/element/cms-element-image-gallery.html.twig */
class __TwigTemplate_6b9551d130e97024f9c019a8133fbf8625172f0d0048313f675b9c4de5531060 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'element_image_gallery' => [$this, 'block_element_image_gallery'],
            'element_image_gallery_alignment' => [$this, 'block_element_image_gallery_alignment'],
            'element_image_gallery_inner' => [$this, 'block_element_image_gallery_inner'],
            'element_image_gallery_inner_col' => [$this, 'block_element_image_gallery_inner_col'],
            'element_image_gallery_inner_wrapper' => [$this, 'block_element_image_gallery_inner_wrapper'],
            'element_image_gallery_inner_multiple_slides' => [$this, 'block_element_image_gallery_inner_multiple_slides'],
            'element_image_gallery_inner_container' => [$this, 'block_element_image_gallery_inner_container'],
            'element_image_gallery_inner_items' => [$this, 'block_element_image_gallery_inner_items'],
            'element_image_gallery_inner_item' => [$this, 'block_element_image_gallery_inner_item'],
            'element_image_gallery_inner_controls' => [$this, 'block_element_image_gallery_inner_controls'],
            'element_image_gallery_inner_control_items' => [$this, 'block_element_image_gallery_inner_control_items'],
            'element_image_gallery_inner_control_prev' => [$this, 'block_element_image_gallery_inner_control_prev'],
            'element_image_gallery_inner_control_prev_icon' => [$this, 'block_element_image_gallery_inner_control_prev_icon'],
            'element_image_gallery_inner_control_next' => [$this, 'block_element_image_gallery_inner_control_next'],
            'element_image_gallery_inner_control_next_icon' => [$this, 'block_element_image_gallery_inner_control_next_icon'],
            'element_image_gallery_inner_single' => [$this, 'block_element_image_gallery_inner_single'],
            'element_image_gallery_slider_dots' => [$this, 'block_element_image_gallery_slider_dots'],
            'element_image_gallery_slider_dots_buttons' => [$this, 'block_element_image_gallery_slider_dots_buttons'],
            'element_image_gallery_slider_dots_button' => [$this, 'block_element_image_gallery_slider_dots_button'],
            'element_image_gallery_inner_thumbnails_col' => [$this, 'block_element_image_gallery_inner_thumbnails_col'],
            'element_image_gallery_inner_thumbnails' => [$this, 'block_element_image_gallery_inner_thumbnails'],
            'element_image_gallery_inner_thumbnails_items' => [$this, 'block_element_image_gallery_inner_thumbnails_items'],
            'element_image_gallery_inner_thumbnails_item' => [$this, 'block_element_image_gallery_inner_thumbnails_item'],
            'element_image_gallery_inner_thumbnails_item_inner' => [$this, 'block_element_image_gallery_inner_thumbnails_item_inner'],
            'element_image_gallery_inner_thumbnails_controls' => [$this, 'block_element_image_gallery_inner_thumbnails_controls'],
            'element_image_gallery_inner_thumbnails_controls_prev' => [$this, 'block_element_image_gallery_inner_thumbnails_controls_prev'],
            'element_image_gallery_inner_thumbnails_controls_next' => [$this, 'block_element_image_gallery_inner_thumbnails_controls_next'],
            'element_image_gallery_inner_zoom_modal_wrapper' => [$this, 'block_element_image_gallery_inner_zoom_modal_wrapper'],
            'element_image_gallery_inner_zoom_modal' => [$this, 'block_element_image_gallery_inner_zoom_modal'],
            'element_image_gallery_inner_zoom_modal_dialog' => [$this, 'block_element_image_gallery_inner_zoom_modal_dialog'],
            'element_image_gallery_inner_zoom_modal_content' => [$this, 'block_element_image_gallery_inner_zoom_modal_content'],
            'element_image_gallery_inner_zoom_modal_close_button' => [$this, 'block_element_image_gallery_inner_zoom_modal_close_button'],
            'element_image_gallery_inner_zoom_modal_close_icon' => [$this, 'block_element_image_gallery_inner_zoom_modal_close_icon'],
            'element_image_gallery_inner_zoom_modal_body' => [$this, 'block_element_image_gallery_inner_zoom_modal_body'],
            'element_image_gallery_inner_zoom_modal_action_buttons' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_buttons'],
            'element_image_gallery_inner_zoom_modal_action_zoom_out' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_zoom_out'],
            'element_image_gallery_inner_zoom_modal_action_zoom_out_icon' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_zoom_out_icon'],
            'element_image_gallery_inner_zoom_modal_action_zoom_reset' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_zoom_reset'],
            'element_image_gallery_inner_zoom_modal_action_zoom_reset_icon' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_zoom_reset_icon'],
            'element_image_gallery_inner_zoom_modal_action_zoom_in' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_zoom_in'],
            'element_image_gallery_inner_zoom_modal_action_zoom_in_icon' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_zoom_in_icon'],
            'element_image_gallery_inner_zoom_modal_slider' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider'],
            'element_image_gallery_inner_zoom_modal_slider_items' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_items'],
            'element_image_gallery_inner_zoom_modal_slider_item' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_item'],
            'element_image_gallery_inner_zoom_modal_slider_item_zoom_container' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_item_zoom_container'],
            'element_image_gallery_inner_zoom_modal_slider_item_image' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_item_image'],
            'element_image_gallery_inner_zoom_modal_slider_controls' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_controls'],
            'element_image_gallery_inner_zoom_modal_slider_control_prev' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_control_prev'],
            'element_image_gallery_inner_zoom_modal_slider_control_prev_icon' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_control_prev_icon'],
            'element_image_gallery_inner_zoom_modal_slider_control_next' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_control_next'],
            'element_image_gallery_inner_zoom_modal_slider_control_next_icon' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_control_next_icon'],
            'element_image_gallery_inner_zoom_modal_footer' => [$this, 'block_element_image_gallery_inner_zoom_modal_footer'],
            'element_image_gallery_inner_zoom_modal_thumbnails_controls' => [$this, 'block_element_image_gallery_inner_zoom_modal_thumbnails_controls'],
            'element_image_gallery_inner_zoom_modal_thumbnails' => [$this, 'block_element_image_gallery_inner_zoom_modal_thumbnails'],
            'element_image_gallery_inner_zoom_modal_thumbnails_items' => [$this, 'block_element_image_gallery_inner_zoom_modal_thumbnails_items'],
            'element_image_gallery_inner_zoom_modal_thumbnails_item' => [$this, 'block_element_image_gallery_inner_zoom_modal_thumbnails_item'],
            'element_image_gallery_inner_zoom_modal_thumbnails_item_inner' => [$this, 'block_element_image_gallery_inner_zoom_modal_thumbnails_item_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('element_image_gallery', $context, $blocks);
    }

    public function block_element_image_gallery($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        // line 3
        echo "    ";
        if ((sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "fieldConfig", [], "any", true, true, false, 3) && sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", true, true, false, 3))) {
            // line 4
            echo "        ";
            $context["sliderConfig"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "fieldConfig", [], "any", false, false, false, 4), "elements", [], "any", false, false, false, 4);
            // line 5
            echo "
        ";
            // line 6
            $context["mediaItems"] = [];
            // line 7
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 7), "sliderItems", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "            ";
                $context["mediaItems"] = twig_array_merge(($context["mediaItems"] ?? null), [0 => sw_get_attribute($this->env, $this->source, $context["item"], "media", [], "any", false, false, false, 8)]);
                // line 9
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "
        ";
            // line 11
            $context["zoom"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "zoom", [], "any", false, false, false, 11), "value", [], "any", false, false, false, 11);
            // line 12
            echo "        ";
            $context["gutter"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "gutter", [], "any", false, false, false, 12), "value", [], "any", false, false, false, 12);
            // line 13
            echo "        ";
            $context["keepAspectRatioOnZoom"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "keepAspectRatioOnZoom", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13);
            // line 14
            echo "        ";
            $context["magnifierOverGallery"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "magnifierOverGallery", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14);
            // line 15
            echo "        ";
            $context["zoomModal"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "fullScreen", [], "any", false, false, false, 15), "value", [], "any", false, false, false, 15);
            // line 16
            echo "        ";
            $context["minHeight"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "minHeight", [], "any", false, false, false, 16), "value", [], "any", false, false, false, 16);
            // line 17
            echo "        ";
            $context["displayMode"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "displayMode", [], "any", false, false, false, 17), "value", [], "any", false, false, false, 17);
            // line 18
            echo "        ";
            $context["navigationArrows"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "navigationArrows", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18);
            // line 19
            echo "        ";
            $context["navigationDots"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "navigationDots", [], "any", false, false, false, 19), "value", [], "any", false, false, false, 19);
            // line 20
            echo "        ";
            $context["galleryPosition"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "galleryPosition", [], "any", false, false, false, 20), "value", [], "any", false, false, false, 20);
            // line 21
            echo "        ";
            $context["verticalAlign"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "verticalAlign", [], "any", false, false, false, 21), "value", [], "any", false, false, false, 21);
            // line 22
            echo "        ";
            $context["zoomImageContainerSelector"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "zoomImageContainerSelector", [], "any", false, false, false, 22), "value", [], "any", false, false, false, 22);
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    ";
        // line 25
        if ( !array_key_exists("fallbackImageTitle", $context)) {
            // line 26
            echo "        ";
            $context["fallbackImageTitle"] = "";
            // line 27
            echo "    ";
        }
        // line 28
        echo "
    ";
        // line 30
        echo "    ";
        $context["imageCount"] = twig_length_filter($this->env, ($context["mediaItems"] ?? null));
        // line 31
        echo "
    ";
        // line 33
        echo "    ";
        $context["maxItemsToShowMobileNav"] = 5;
        // line 34
        echo "    ";
        $context["maxItemsToShowNav"] = 8;
        // line 35
        echo "
    ";
        // line 36
        $context["magnifierOptions"] = [];
        // line 37
        echo "
    ";
        // line 38
        if (($context["magnifierOverGallery"] ?? null)) {
            // line 39
            echo "        ";
            $context["magnifierOptions"] = twig_array_merge(($context["magnifierOptions"] ?? null), ["magnifierOverGallery" => true, "cursorType" => "crosshair"]);
            // line 43
            echo "    ";
        }
        // line 44
        echo "
    ";
        // line 45
        if ((array_key_exists("keepAspectRatioOnZoom", $context) &&  !(null === ($context["keepAspectRatioOnZoom"] ?? null)))) {
            // line 46
            echo "        ";
            $context["magnifierOptions"] = twig_array_merge(($context["magnifierOptions"] ?? null), ["keepAspectRatioOnZoom" =>             // line 47
($context["keepAspectRatioOnZoom"] ?? null)]);
            // line 49
            echo "    ";
        }
        // line 50
        echo "
    ";
        // line 51
        if (($context["zoomImageContainerSelector"] ?? null)) {
            // line 52
            echo "        ";
            $context["magnifierOptions"] = twig_array_merge(($context["magnifierOptions"] ?? null), ["zoomImageContainerSelector" =>             // line 53
($context["zoomImageContainerSelector"] ?? null)]);
            // line 55
            echo "    ";
        }
        // line 56
        echo "
    <div class=\"cms-element-";
        // line 57
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 57), "html", null, true);
        if (((0 === twig_compare(($context["displayMode"] ?? null), "standard")) && ($context["verticalAlign"] ?? null))) {
            echo " has-vertical-alignment";
        }
        echo "\">
        ";
        // line 58
        $this->displayBlock('element_image_gallery_alignment', $context, $blocks);
        // line 508
        echo "    </div>
";
    }

    // line 58
    public function block_element_image_gallery_alignment($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 59), "value", [], "any", false, false, false, 59)) {
            // line 60
            echo "                <div class=\"cms-element-alignment";
            if ((0 === twig_compare(($context["verticalAlign"] ?? null), "center"))) {
                echo " align-self-center";
            } elseif ((0 === twig_compare(($context["verticalAlign"] ?? null), "flex-end"))) {
                echo " align-self-end";
            } else {
                echo " align-self-start";
            }
            echo "\">
            ";
        }
        // line 62
        echo "
                ";
        // line 63
        $context["gallerySliderOptions"] = ["slider" => ["navPosition" => "bottom", "speed" => 500, "gutter" => ((        // line 67
($context["gutter"] ?? null)) ? (($context["gutter"] ?? null)) : (0)), "controls" => ((        // line 68
($context["navigationArrows"] ?? null)) ? (true) : (false)), "autoHeight" => false, "startIndex" => ((        // line 70
($context["startIndexThumbnails"] ?? null)) ? (($context["startIndexThumbnails"] ?? null)) : (null))], "thumbnailSlider" => ["items" => (((0 === twig_compare(        // line 73
($context["galleryPosition"] ?? null), "underneath"))) ? (6) : (5)), "slideBy" => (((0 === twig_compare(        // line 74
($context["galleryPosition"] ?? null), "underneath"))) ? (5) : (4)), "controls" => true, "startIndex" => ((        // line 76
($context["startIndexThumbnails"] ?? null)) ? (($context["startIndexThumbnails"] ?? null)) : (null)), "responsive" => ["xs" => ["enabled" => false, "controls" => false], "sm" => ["enabled" => false, "controls" => false]]]];
        // line 89
        echo "
                ";
        // line 90
        if ((0 === twig_compare(($context["galleryPosition"] ?? null), "left"))) {
            // line 91
            echo "                    ";
            $context["gallerySliderOptions"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\ReplaceRecursiveFilter']->replaceRecursive(($context["gallerySliderOptions"] ?? null), ["thumbnailSlider" => ["responsive" => ["md" => ["axis" => "vertical"], "lg" => ["axis" => "vertical"], "xl" => ["axis" => "vertical"]]]]);
            // line 106
            echo "
                    ";
            // line 108
            echo "                    ";
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
                // line 109
                echo "                        ";
                $context["gallerySliderOptions"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\ReplaceRecursiveFilter']->replaceRecursive(($context["gallerySliderOptions"] ?? null), ["thumbnailSlider" => ["responsive" => ["xxl" => ["axis" => "vertical"]]]]);
                // line 118
                echo "                    ";
            }
            // line 119
            echo "                ";
        }
        // line 120
        echo "
                ";
        // line 121
        $this->displayBlock('element_image_gallery_inner', $context, $blocks);
        // line 503
        echo "
            ";
        // line 504
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 504), "value", [], "any", false, false, false, 504)) {
            // line 505
            echo "                </div>
            ";
        }
        // line 507
        echo "        ";
    }

    // line 121
    public function block_element_image_gallery_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "                    <div class=\"row gallery-slider-row";
        if ((0 === twig_compare(($context["imageCount"] ?? null), 1))) {
            echo " is-single-image";
        } else {
            echo " is-loading";
        }
        echo " js-gallery-zoom-modal-container\"
                            ";
        // line 123
        if (($context["zoom"] ?? null)) {
            // line 124
            echo "                                data-magnifier=\"true\"
                            ";
        }
        // line 126
        echo "                            ";
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["magnifierOptions"] ?? null)), 0))) {
            // line 127
            echo "                                data-magnifier-options='";
            echo call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["magnifierOptions"] ?? null)]);
            echo "'
                            ";
        }
        // line 129
        echo "                            ";
        if ((1 === twig_compare(($context["imageCount"] ?? null), 1))) {
            // line 130
            echo "                                data-gallery-slider=\"true\"
                                data-gallery-slider-options='";
            // line 131
            echo sw_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["gallerySliderOptions"] ?? null)]), "html", null, true);
            echo "'
                            ";
        }
        // line 132
        echo ">

                        ";
        // line 134
        $this->displayBlock('element_image_gallery_inner_col', $context, $blocks);
        // line 253
        echo "
                        ";
        // line 254
        $this->displayBlock('element_image_gallery_inner_thumbnails_col', $context, $blocks);
        // line 319
        echo "
                        ";
        // line 320
        $this->displayBlock('element_image_gallery_inner_zoom_modal_wrapper', $context, $blocks);
        // line 501
        echo "                    </div>
                ";
    }

    // line 134
    public function block_element_image_gallery_inner_col($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 135
        echo "                            <div class=\"gallery-slider-col";
        if ((0 === twig_compare(($context["galleryPosition"] ?? null), "left"))) {
            echo " col order-1 order-md-2";
        } elseif ((0 === twig_compare(($context["galleryPosition"] ?? null), "underneath"))) {
            echo " col-12 order-1";
        }
        echo "\"
                                 ";
        // line 136
        if (($context["zoomModal"] ?? null)) {
            echo "data-zoom-modal=\"true\"";
        }
        echo ">
                                ";
        // line 138
        echo "                                <div class=\"base-slider gallery-slider";
        if ((0 === twig_compare(($context["navigationArrows"] ?? null), "outside"))) {
            echo " has-nav-outside";
        }
        if ((0 === twig_compare(($context["navigationDots"] ?? null), "outside"))) {
            echo " has-dots-outside";
        }
        if (($context["magnifierOverGallery"] ?? null)) {
            echo " js-magnifier-zoom-image-container";
        }
        echo "\">
                                    ";
        // line 139
        $this->displayBlock('element_image_gallery_inner_wrapper', $context, $blocks);
        // line 234
        echo "
                                    ";
        // line 235
        $this->displayBlock('element_image_gallery_slider_dots', $context, $blocks);
        // line 250
        echo "                                </div>
                            </div>
                        ";
    }

    // line 139
    public function block_element_image_gallery_inner_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 140
        echo "                                        ";
        if ((1 === twig_compare(($context["imageCount"] ?? null), 1))) {
            // line 141
            echo "                                            ";
            $this->displayBlock('element_image_gallery_inner_multiple_slides', $context, $blocks);
            // line 203
            echo "                                        ";
        } else {
            // line 204
            echo "                                            ";
            $this->displayBlock('element_image_gallery_inner_single', $context, $blocks);
            // line 232
            echo "                                        ";
        }
        // line 233
        echo "                                    ";
    }

    // line 141
    public function block_element_image_gallery_inner_multiple_slides($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 142
        echo "                                                ";
        $this->displayBlock('element_image_gallery_inner_container', $context, $blocks);
        // line 175
        echo "
                                                ";
        // line 176
        $this->displayBlock('element_image_gallery_inner_controls', $context, $blocks);
        // line 202
        echo "                                            ";
    }

    // line 142
    public function block_element_image_gallery_inner_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "                                                    <div class=\"gallery-slider-container\"
                                                         data-gallery-slider-container=\"true\">
                                                        ";
        // line 145
        $this->displayBlock('element_image_gallery_inner_items', $context, $blocks);
        // line 173
        echo "                                                    </div>
                                                ";
    }

    // line 145
    public function block_element_image_gallery_inner_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        echo "                                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mediaItems"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 147
            echo "                                                                ";
            $this->displayBlock('element_image_gallery_inner_item', $context, $blocks);
            // line 171
            echo "                                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                                                        ";
    }

    // line 147
    public function block_element_image_gallery_inner_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "                                                                    <div class=\"gallery-slider-item-container\">
                                                                        <div class=\"gallery-slider-item is-";
        // line 149
        echo sw_escape_filter($this->env, ($context["displayMode"] ?? null), "html", null, true);
        echo " js-magnifier-container\"";
        if ((($context["minHeight"] ?? null) && ((0 === twig_compare(($context["displayMode"] ?? null), "cover")) || (0 === twig_compare(($context["displayMode"] ?? null), "contain"))))) {
            echo " style=\"min-height: ";
            echo sw_escape_filter($this->env, ($context["minHeight"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
                                                                            ";
        // line 150
        $context["attributes"] = ["class" => "img-fluid gallery-slider-image magnifier-image js-magnifier-image", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 152
($context["image"] ?? null), "translated", [], "any", false, false, false, 152), "alt", [], "any", false, false, false, 152)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 152), "alt", [], "any", false, false, false, 152)) : (($context["fallbackImageTitle"] ?? null))), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 153
($context["image"] ?? null), "translated", [], "any", false, false, false, 153), "title", [], "any", false, false, false, 153)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 153), "title", [], "any", false, false, false, 153)) : (($context["fallbackImageTitle"] ?? null))), "data-full-image" => sw_get_attribute($this->env, $this->source,         // line 154
($context["image"] ?? null), "url", [], "any", false, false, false, 154)];
        // line 156
        echo "
                                                                            ";
        // line 157
        if (((0 === twig_compare(($context["displayMode"] ?? null), "cover")) || (0 === twig_compare(($context["displayMode"] ?? null), "contain")))) {
            // line 158
            echo "                                                                                ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["data-object-fit" => ($context["displayMode"] ?? null)]);
            // line 159
            echo "                                                                            ";
        }
        // line 160
        echo "
                                                                            ";
        // line 161
        if (($context["isProduct"] ?? null)) {
            // line 162
            echo "                                                                                ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["itemprop" => "image"]);
            // line 163
            echo "                                                                            ";
        }
        // line 164
        echo "
                                                                            ";
        // line 165
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 165);
        })())->display(twig_array_merge($context, ["media" =>         // line 166
($context["image"] ?? null), "name" => "gallery-slider-image-thumbnails"]));
        // line 168
        echo "                                                                        </div>
                                                                    </div>
                                                                ";
    }

    // line 176
    public function block_element_image_gallery_inner_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 177
        echo "                                                    ";
        if (($context["navigationArrows"] ?? null)) {
            // line 178
            echo "                                                        <div class=\"gallery-slider-controls\"
                                                             data-gallery-slider-controls=\"";
            // line 179
            if (($context["navigationArrows"] ?? null)) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\">
                                                            ";
            // line 180
            $this->displayBlock('element_image_gallery_inner_control_items', $context, $blocks);
            // line 199
            echo "                                                        </div>
                                                    ";
        }
        // line 201
        echo "                                                ";
    }

    // line 180
    public function block_element_image_gallery_inner_control_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 181
        echo "                                                                ";
        $this->displayBlock('element_image_gallery_inner_control_prev', $context, $blocks);
        // line 189
        echo "
                                                                ";
        // line 190
        $this->displayBlock('element_image_gallery_inner_control_next', $context, $blocks);
        // line 198
        echo "                                                            ";
    }

    // line 181
    public function block_element_image_gallery_inner_control_prev($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 182
        echo "                                                                    <button class=\"base-slider-controls-prev gallery-slider-controls-prev";
        if ((0 === twig_compare(($context["navigationArrows"] ?? null), "outside"))) {
            echo " is-nav-prev-outside";
        } elseif ((0 === twig_compare(($context["navigationArrows"] ?? null), "inside"))) {
            echo " is-nav-prev-inside";
        }
        echo "\"
                                                                            aria-label=\"";
        // line 183
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.previous")), "html", null, true);
        echo "\">
                                                                        ";
        // line 184
        $this->displayBlock('element_image_gallery_inner_control_prev_icon', $context, $blocks);
        // line 187
        echo "                                                                    </button>
                                                                ";
    }

    // line 184
    public function block_element_image_gallery_inner_control_prev_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 185
        echo "                                                                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 185);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-left"]));
        // line 186
        echo "                                                                        ";
    }

    // line 190
    public function block_element_image_gallery_inner_control_next($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 191
        echo "                                                                    <button class=\"base-slider-controls-next gallery-slider-controls-next";
        if ((0 === twig_compare(($context["navigationArrows"] ?? null), "outside"))) {
            echo " is-nav-next-outside";
        } elseif ((0 === twig_compare(($context["navigationArrows"] ?? null), "inside"))) {
            echo " is-nav-next-inside";
        }
        echo "\"
                                                                            aria-label=\"";
        // line 192
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.next")), "html", null, true);
        echo "\">
                                                                        ";
        // line 193
        $this->displayBlock('element_image_gallery_inner_control_next_icon', $context, $blocks);
        // line 196
        echo "                                                                    </button>
                                                                ";
    }

    // line 193
    public function block_element_image_gallery_inner_control_next_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 194
        echo "                                                                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 194);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-right"]));
        // line 195
        echo "                                                                        ";
    }

    // line 204
    public function block_element_image_gallery_inner_single($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 205
        echo "                                                <div class=\"gallery-slider-single-image is-";
        echo sw_escape_filter($this->env, ($context["displayMode"] ?? null), "html", null, true);
        echo " js-magnifier-container\"";
        if (($context["minHeight"] ?? null)) {
            echo " style=\"min-height: ";
            echo sw_escape_filter($this->env, ($context["minHeight"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
                                                    ";
        // line 206
        if ((1 === twig_compare(($context["imageCount"] ?? null), 0))) {
            // line 207
            echo "                                                        ";
            $context["attributes"] = ["class" => "img-fluid gallery-slider-image magnifier-image js-magnifier-image", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, twig_first($this->env,             // line 209
($context["mediaItems"] ?? null)), "translated", [], "any", false, false, false, 209), "alt", [], "any", false, false, false, 209)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, twig_first($this->env, ($context["mediaItems"] ?? null)), "translated", [], "any", false, false, false, 209), "alt", [], "any", false, false, false, 209)) : (($context["fallbackImageTitle"] ?? null))), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, twig_first($this->env,             // line 210
($context["mediaItems"] ?? null)), "translated", [], "any", false, false, false, 210), "title", [], "any", false, false, false, 210)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, twig_first($this->env, ($context["mediaItems"] ?? null)), "translated", [], "any", false, false, false, 210), "title", [], "any", false, false, false, 210)) : (($context["fallbackImageTitle"] ?? null))), "data-full-image" => sw_get_attribute($this->env, $this->source, twig_first($this->env,             // line 211
($context["mediaItems"] ?? null)), "url", [], "any", false, false, false, 211)];
            // line 213
            echo "
                                                        ";
            // line 214
            if (((0 === twig_compare(($context["displayMode"] ?? null), "cover")) || (0 === twig_compare(($context["displayMode"] ?? null), "contain")))) {
                // line 215
                echo "                                                            ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["data-object-fit" => ($context["displayMode"] ?? null)]);
                // line 216
                echo "                                                        ";
            }
            // line 217
            echo "
                                                        ";
            // line 218
            if (($context["isProduct"] ?? null)) {
                // line 219
                echo "                                                            ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["itemprop" => "image"]);
                // line 220
                echo "                                                        ";
            }
            // line 221
            echo "
                                                        ";
            // line 222
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 222);
            })())->display(twig_array_merge($context, ["media" => twig_first($this->env,             // line 223
($context["mediaItems"] ?? null)), "name" => "gallery-slider-image-thumbnails"]));
            // line 225
            echo "                                                    ";
        } else {
            // line 226
            echo "                                                        ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 226);
            })())->display(twig_array_merge($context, ["size" => "fluid", "name" => "placeholder"]));
            // line 229
            echo "                                                    ";
        }
        // line 230
        echo "                                                </div>
                                            ";
    }

    // line 235
    public function block_element_image_gallery_slider_dots($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 236
        echo "                                        ";
        if (((1 === twig_compare(($context["imageCount"] ?? null), 1)) && ($context["navigationDots"] ?? null))) {
            // line 237
            echo "                                            <div class=\"base-slider-dots ";
            if ((1 === twig_compare(($context["imageCount"] ?? null), ($context["maxItemsToShowNav"] ?? null)))) {
                echo " hide-dots";
            } elseif ((1 === twig_compare(($context["imageCount"] ?? null), ($context["maxItemsToShowMobileNav"] ?? null)))) {
                echo " hide-dots-mobile";
            }
            echo "\">
                                                ";
            // line 238
            $this->displayBlock('element_image_gallery_slider_dots_buttons', $context, $blocks);
            // line 247
            echo "                                            </div>
                                        ";
        }
        // line 249
        echo "                                    ";
    }

    // line 238
    public function block_element_image_gallery_slider_dots_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 239
        echo "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mediaItems"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 240
            echo "                                                        ";
            $this->displayBlock('element_image_gallery_slider_dots_button', $context, $blocks);
            // line 245
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        echo "                                                ";
    }

    // line 240
    public function block_element_image_gallery_slider_dots_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 241
        echo "                                                            <button class=\"base-slider-dot\"
                                                                    data-nav-dot=\"";
        // line 242
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 242), "html", null, true);
        echo "\"
                                                                    tabindex=\"-1\"></button>
                                                        ";
    }

    // line 254
    public function block_element_image_gallery_inner_thumbnails_col($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 255
        echo "                            ";
        if ((1 === twig_compare(($context["imageCount"] ?? null), 1))) {
            // line 256
            echo "                                <div class=\"gallery-slider-thumbnails-col";
            if ((0 === twig_compare(($context["galleryPosition"] ?? null), "left"))) {
                echo " col-0 col-md-auto order-2 order-md-1 is-left";
            } elseif ((0 === twig_compare(($context["galleryPosition"] ?? null), "underneath"))) {
                echo " col-12 order-2 is-underneath";
            }
            echo "\">
                                    <div class=\"gallery-slider-thumbnails-container";
            // line 257
            if ((0 === twig_compare(($context["galleryPosition"] ?? null), "underneath"))) {
                echo " is-underneath";
            }
            echo "\">
                                        ";
            // line 258
            $this->displayBlock('element_image_gallery_inner_thumbnails', $context, $blocks);
            // line 291
            echo "
                                        ";
            // line 292
            $this->displayBlock('element_image_gallery_inner_thumbnails_controls', $context, $blocks);
            // line 315
            echo "                                    </div>
                                </div>
                            ";
        }
        // line 318
        echo "                        ";
    }

    // line 258
    public function block_element_image_gallery_inner_thumbnails($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 259
        echo "                                            <div class=\"gallery-slider-thumbnails";
        if ((0 === twig_compare(($context["galleryPosition"] ?? null), "underneath"))) {
            echo " is-underneath";
        }
        echo "\"
                                                 data-gallery-slider-thumbnails=\"true\">
                                                ";
        // line 261
        $this->displayBlock('element_image_gallery_inner_thumbnails_items', $context, $blocks);
        // line 289
        echo "                                            </div>
                                        ";
    }

    // line 261
    public function block_element_image_gallery_inner_thumbnails_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 262
        echo "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mediaItems"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 263
            echo "                                                        ";
            $this->displayBlock('element_image_gallery_inner_thumbnails_item', $context, $blocks);
            // line 287
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        echo "                                                ";
    }

    // line 263
    public function block_element_image_gallery_inner_thumbnails_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 264
        echo "                                                            <div class=\"gallery-slider-thumbnails-item\">
                                                                ";
        // line 265
        $this->displayBlock('element_image_gallery_inner_thumbnails_item_inner', $context, $blocks);
        // line 285
        echo "                                                            </div>
                                                        ";
    }

    // line 265
    public function block_element_image_gallery_inner_thumbnails_item_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 266
        echo "                                                                    <div class=\"gallery-slider-thumbnails-item-inner\">
                                                                        ";
        // line 267
        $context["attributes"] = ["class" => "gallery-slider-thumbnails-image", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 269
($context["image"] ?? null), "translated", [], "any", false, false, false, 269), "alt", [], "any", false, false, false, 269)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 269), "alt", [], "any", false, false, false, 269)) : (($context["fallbackImageTitle"] ?? null))), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 270
($context["image"] ?? null), "translated", [], "any", false, false, false, 270), "title", [], "any", false, false, false, 270)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 270), "title", [], "any", false, false, false, 270)) : (($context["fallbackImageTitle"] ?? null)))];
        // line 272
        echo "
                                                                        ";
        // line 273
        if (($context["isProduct"] ?? null)) {
            // line 274
            echo "                                                                            ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["itemprop" => "image"]);
            // line 275
            echo "                                                                        ";
        }
        // line 276
        echo "
                                                                        ";
        // line 277
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 277);
        })())->display(twig_array_merge($context, ["media" =>         // line 278
($context["image"] ?? null), "sizes" => ["default" => "200px"], "name" => "gallery-slider-thumbnails-image-thumbnails"]));
        // line 283
        echo "                                                                    </div>
                                                                ";
    }

    // line 292
    public function block_element_image_gallery_inner_thumbnails_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 293
        echo "                                            <div data-thumbnail-slider-controls=\"true\" class=\"gallery-slider-thumbnails-controls\">
                                                ";
        // line 294
        $this->displayBlock('element_image_gallery_inner_thumbnails_controls_prev', $context, $blocks);
        // line 303
        echo "
                                                ";
        // line 304
        $this->displayBlock('element_image_gallery_inner_thumbnails_controls_next', $context, $blocks);
        // line 313
        echo "                                            </div>
                                        ";
    }

    // line 294
    public function block_element_image_gallery_inner_thumbnails_controls_prev($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 295
        echo "                                                    <button class=\"base-slider-controls-prev gallery-slider-thumbnails-controls-prev\">
                                                        ";
        // line 296
        if ((0 === twig_compare(($context["galleryPosition"] ?? null), "left"))) {
            // line 297
            echo "                                                            ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 297);
            })())->display(twig_array_merge($context, ["name" => "arrow-head-up"]));
            // line 298
            echo "                                                        ";
        } elseif ((0 === twig_compare(($context["galleryPosition"] ?? null), "underneath"))) {
            // line 299
            echo "                                                            ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 299);
            })())->display(twig_array_merge($context, ["name" => "arrow-head-left"]));
            // line 300
            echo "                                                        ";
        }
        // line 301
        echo "                                                    </button>
                                                ";
    }

    // line 304
    public function block_element_image_gallery_inner_thumbnails_controls_next($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 305
        echo "                                                    <button class=\"base-slider-controls-next gallery-slider-thumbnails-controls-next\">
                                                        ";
        // line 306
        if ((0 === twig_compare(($context["galleryPosition"] ?? null), "left"))) {
            // line 307
            echo "                                                            ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 307);
            })())->display(twig_array_merge($context, ["name" => "arrow-head-down"]));
            // line 308
            echo "                                                        ";
        } elseif ((0 === twig_compare(($context["galleryPosition"] ?? null), "underneath"))) {
            // line 309
            echo "                                                            ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 309);
            })())->display(twig_array_merge($context, ["name" => "arrow-head-right"]));
            // line 310
            echo "                                                        ";
        }
        // line 311
        echo "                                                    </button>
                                                ";
    }

    // line 320
    public function block_element_image_gallery_inner_zoom_modal_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 321
        echo "                            ";
        if (($context["zoomModal"] ?? null)) {
            // line 322
            echo "                                <div class=\"zoom-modal-wrapper\">
                                    ";
            // line 323
            $this->displayBlock('element_image_gallery_inner_zoom_modal', $context, $blocks);
            // line 498
            echo "                                </div>
                            ";
        }
        // line 500
        echo "                        ";
    }

    // line 323
    public function block_element_image_gallery_inner_zoom_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 324
        echo "                                        <div class=\"modal is-fullscreen zoom-modal js-zoom-modal";
        if ((($context["imageCount"] ?? null) === 1)) {
            echo " no-thumbnails";
        }
        echo "\"
                                             data-image-zoom-modal=\"true\"
                                             tabindex=\"-1\"
                                             role=\"dialog\">
                                            ";
        // line 328
        $this->displayBlock('element_image_gallery_inner_zoom_modal_dialog', $context, $blocks);
        // line 496
        echo "                                        </div>
                                    ";
    }

    // line 328
    public function block_element_image_gallery_inner_zoom_modal_dialog($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 329
        echo "                                                <div class=\"modal-dialog\"
                                                     role=\"document\">
                                                    ";
        // line 331
        $this->displayBlock('element_image_gallery_inner_zoom_modal_content', $context, $blocks);
        // line 494
        echo "                                                </div>
                                            ";
    }

    // line 331
    public function block_element_image_gallery_inner_zoom_modal_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 332
        echo "                                                        <div class=\"modal-content\"";
        if ((1 === twig_compare(($context["imageCount"] ?? null), 1))) {
            echo " data-modal-gallery-slider=\"true\"";
        }
        echo ">
                                                            ";
        // line 333
        $this->displayBlock('element_image_gallery_inner_zoom_modal_close_button', $context, $blocks);
        // line 348
        echo "
                                                            ";
        // line 349
        $this->displayBlock('element_image_gallery_inner_zoom_modal_body', $context, $blocks);
        // line 441
        echo "
                                                            ";
        // line 442
        if ((1 === twig_compare(($context["imageCount"] ?? null), 1))) {
            // line 443
            echo "                                                                ";
            $this->displayBlock('element_image_gallery_inner_zoom_modal_footer', $context, $blocks);
            // line 491
            echo "                                                            ";
        }
        // line 492
        echo "                                                        </div>
                                                    ";
    }

    // line 333
    public function block_element_image_gallery_inner_zoom_modal_close_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 334
        echo "                                                                <button type=\"button\"
                                                                        class=\"";
        // line 335
        echo sw_escape_filter($this->env, ($context["modalCloseBtnClass"] ?? null), "html", null, true);
        echo " close\"
                                                                        ";
        // line 336
        echo sw_escape_filter($this->env, ($context["dataBsDismissAttr"] ?? null), "html", null, true);
        echo "=\"modal\"
                                                                        aria-label=\"Close\">
                                                                    ";
        // line 338
        $this->displayBlock('element_image_gallery_inner_zoom_modal_close_icon', $context, $blocks);
        // line 346
        echo "                                                                </button>
                                                            ";
    }

    // line 338
    public function block_element_image_gallery_inner_zoom_modal_close_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 339
        echo "                                                                        ";
        // line 340
        echo "                                                                        ";
        if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 341
            echo "                                                                            <span aria-hidden=\"true\">
                                                                                ";
            // line 342
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 342);
            })())->display(twig_array_merge($context, ["size" => "sm", "name" => "x"]));
            // line 343
            echo "                                                                            </span>
                                                                        ";
        }
        // line 345
        echo "                                                                    ";
    }

    // line 349
    public function block_element_image_gallery_inner_zoom_modal_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 350
        echo "                                                                <div class=\"modal-body\">

                                                                    ";
        // line 352
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_buttons', $context, $blocks);
        // line 382
        echo "
                                                                    ";
        // line 383
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider', $context, $blocks);
        // line 414
        echo "
                                                                    ";
        // line 415
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_controls', $context, $blocks);
        // line 439
        echo "                                                                </div>
                                                            ";
    }

    // line 352
    public function block_element_image_gallery_inner_zoom_modal_action_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 353
        echo "                                                                        <div class=\"zoom-modal-actions btn-group\"
                                                                             role=\"group\"
                                                                             aria-label=\"zoom actions\">

                                                                            ";
        // line 357
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_out', $context, $blocks);
        // line 364
        echo "
                                                                            ";
        // line 365
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_reset', $context, $blocks);
        // line 372
        echo "
                                                                            ";
        // line 373
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_in', $context, $blocks);
        // line 380
        echo "                                                                        </div>
                                                                    ";
    }

    // line 357
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_out($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 358
        echo "                                                                                <button class=\"btn btn-light image-zoom-btn js-image-zoom-out\">
                                                                                    ";
        // line 359
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_out_icon', $context, $blocks);
        // line 362
        echo "                                                                                </button>
                                                                            ";
    }

    // line 359
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_out_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 360
        echo "                                                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 360);
        })())->display(twig_array_merge($context, ["name" => "minus-circle"]));
        // line 361
        echo "                                                                                    ";
    }

    // line 365
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_reset($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 366
        echo "                                                                                <button class=\"btn btn-light image-zoom-btn js-image-zoom-reset\">
                                                                                    ";
        // line 367
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_reset_icon', $context, $blocks);
        // line 370
        echo "                                                                                </button>
                                                                            ";
    }

    // line 367
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_reset_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 368
        echo "                                                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 368);
        })())->display(twig_array_merge($context, ["name" => "screen-minimize"]));
        // line 369
        echo "                                                                                    ";
    }

    // line 373
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_in($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 374
        echo "                                                                                <button class=\"btn btn-light image-zoom-btn js-image-zoom-in\">
                                                                                    ";
        // line 375
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_in_icon', $context, $blocks);
        // line 378
        echo "                                                                                </button>
                                                                            ";
    }

    // line 375
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_in_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 376
        echo "                                                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 376);
        })())->display(twig_array_merge($context, ["name" => "plus-circle"]));
        // line 377
        echo "                                                                                    ";
    }

    // line 383
    public function block_element_image_gallery_inner_zoom_modal_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 384
        echo "                                                                        <div class=\"gallery-slider\"
                                                                             data-gallery-slider-container=true>
                                                                            ";
        // line 386
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_items', $context, $blocks);
        // line 412
        echo "                                                                        </div>
                                                                    ";
    }

    // line 386
    public function block_element_image_gallery_inner_zoom_modal_slider_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 387
        echo "                                                                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mediaItems"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 388
            echo "                                                                                    ";
            $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_item', $context, $blocks);
            // line 410
            echo "                                                                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 411
        echo "                                                                            ";
    }

    // line 388
    public function block_element_image_gallery_inner_zoom_modal_slider_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 389
        echo "                                                                                        <div class=\"gallery-slider-item\">
                                                                                            ";
        // line 390
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_item_zoom_container', $context, $blocks);
        // line 408
        echo "                                                                                        </div>
                                                                                    ";
    }

    // line 390
    public function block_element_image_gallery_inner_zoom_modal_slider_item_zoom_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 391
        echo "                                                                                                <div class=\"image-zoom-container\"
                                                                                                     data-image-zoom=\"true\">
                                                                                                    ";
        // line 393
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_item_image', $context, $blocks);
        // line 406
        echo "                                                                                                </div>
                                                                                            ";
    }

    // line 393
    public function block_element_image_gallery_inner_zoom_modal_slider_item_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 394
        echo "                                                                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 394);
        })())->display(twig_array_merge($context, ["media" =>         // line 395
($context["image"] ?? null), "attributes" => ["class" => "gallery-slider-image js-image-zoom-element js-load-img", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 398
($context["image"] ?? null), "translated", [], "any", false, false, false, 398), "alt", [], "any", false, false, false, 398)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 398), "alt", [], "any", false, false, false, 398)) : (($context["fallbackImageTitle"] ?? null))), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 399
($context["image"] ?? null), "translated", [], "any", false, false, false, 399), "title", [], "any", false, false, false, 399)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 399), "title", [], "any", false, false, false, 399)) : (($context["fallbackImageTitle"] ?? null)))], "load" => false, "loadOriginalImage" => true, "autoColumnSizes" => false, "name" => "gallery-slider-image-thumbnails"]));
        // line 405
        echo "                                                                                                    ";
    }

    // line 415
    public function block_element_image_gallery_inner_zoom_modal_slider_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 416
        echo "                                                                        ";
        if ((1 === twig_compare(($context["imageCount"] ?? null), 1))) {
            // line 417
            echo "                                                                            <div class=\"gallery-slider-controls\"
                                                                                 data-gallery-slider-controls=\"true\">
                                                                                ";
            // line 419
            $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_control_prev', $context, $blocks);
            // line 427
            echo "
                                                                                ";
            // line 428
            $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_control_next', $context, $blocks);
            // line 436
            echo "                                                                            </div>
                                                                        ";
        }
        // line 438
        echo "                                                                    ";
    }

    // line 419
    public function block_element_image_gallery_inner_zoom_modal_slider_control_prev($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 420
        echo "                                                                                    <button class=\"base-slider-controls-prev gallery-slider-controls-prev\"
                                                                                            aria-label=\"";
        // line 421
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.previous")), "html", null, true);
        echo "\">
                                                                                        ";
        // line 422
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_control_prev_icon', $context, $blocks);
        // line 425
        echo "                                                                                    </button>
                                                                                ";
    }

    // line 422
    public function block_element_image_gallery_inner_zoom_modal_slider_control_prev_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 423
        echo "                                                                                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 423);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-left"]));
        // line 424
        echo "                                                                                        ";
    }

    // line 428
    public function block_element_image_gallery_inner_zoom_modal_slider_control_next($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 429
        echo "                                                                                    <button class=\"base-slider-controls-next gallery-slider-controls-next\"
                                                                                            aria-label=\"";
        // line 430
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.next")), "html", null, true);
        echo "\">
                                                                                        ";
        // line 431
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_control_next_icon', $context, $blocks);
        // line 434
        echo "                                                                                    </button>
                                                                                ";
    }

    // line 431
    public function block_element_image_gallery_inner_zoom_modal_slider_control_next_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 432
        echo "                                                                                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 432);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-right"]));
        // line 433
        echo "                                                                                        ";
    }

    // line 443
    public function block_element_image_gallery_inner_zoom_modal_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 444
        echo "                                                                    <div class=\"modal-footer\">
                                                                        ";
        // line 445
        $this->displayBlock('element_image_gallery_inner_zoom_modal_thumbnails_controls', $context, $blocks);
        // line 459
        echo "
                                                                        ";
        // line 460
        $this->displayBlock('element_image_gallery_inner_zoom_modal_thumbnails', $context, $blocks);
        // line 489
        echo "                                                                    </div>
                                                                ";
    }

    // line 445
    public function block_element_image_gallery_inner_zoom_modal_thumbnails_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 446
        echo "                                                                            <div class=\"gallery-slider-modal-controls\">
                                                                                <div data-thumbnail-slider-controls=\"true\" class=\"gallery-slider-modal-thumbnails\">
                                                                                    <button class=\"base-slider-controls-prev gallery-slider-thumbnails-controls-prev\"
                                                                                            aria-label=\"";
        // line 449
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.previous")), "html", null, true);
        echo "\">
                                                                                        ";
        // line 450
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 450);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-left"]));
        // line 451
        echo "                                                                                    </button>
                                                                                    <button class=\"base-slider-controls-next gallery-slider-thumbnails-controls-next\"
                                                                                            aria-label=\"";
        // line 453
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.next")), "html", null, true);
        echo "\">
                                                                                        ";
        // line 454
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 454);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-right"]));
        // line 455
        echo "                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        ";
    }

    // line 460
    public function block_element_image_gallery_inner_zoom_modal_thumbnails($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 461
        echo "                                                                            <div class=\"gallery-slider-thumbnails\"
                                                                                 data-gallery-slider-thumbnails=true>
                                                                                ";
        // line 463
        $this->displayBlock('element_image_gallery_inner_zoom_modal_thumbnails_items', $context, $blocks);
        // line 487
        echo "                                                                            </div>
                                                                        ";
    }

    // line 463
    public function block_element_image_gallery_inner_zoom_modal_thumbnails_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 464
        echo "                                                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mediaItems"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 465
            echo "                                                                                        ";
            $this->displayBlock('element_image_gallery_inner_zoom_modal_thumbnails_item', $context, $blocks);
            // line 485
            echo "                                                                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 486
        echo "                                                                                ";
    }

    // line 465
    public function block_element_image_gallery_inner_zoom_modal_thumbnails_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 466
        echo "                                                                                            <div class=\"gallery-slider-thumbnails-item\">
                                                                                                ";
        // line 467
        $this->displayBlock('element_image_gallery_inner_zoom_modal_thumbnails_item_inner', $context, $blocks);
        // line 483
        echo "                                                                                            </div>
                                                                                        ";
    }

    // line 467
    public function block_element_image_gallery_inner_zoom_modal_thumbnails_item_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 468
        echo "                                                                                                    <div class=\"gallery-slider-thumbnails-item-inner\">
                                                                                                        ";
        // line 469
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 469);
        })())->display(twig_array_merge($context, ["media" =>         // line 470
($context["image"] ?? null), "sizes" => ["default" => "200px"], "attributes" => ["class" => "gallery-slider-thumbnails-image js-load-img", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 476
($context["image"] ?? null), "translated", [], "any", false, false, false, 476), "alt", [], "any", false, false, false, 476)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 476), "alt", [], "any", false, false, false, 476)) : (($context["fallbackImageTitle"] ?? null))), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 477
($context["image"] ?? null), "translated", [], "any", false, false, false, 477), "title", [], "any", false, false, false, 477)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 477), "title", [], "any", false, false, false, 477)) : (($context["fallbackImageTitle"] ?? null)))], "load" => false, "name" => "gallery-slider-thumbnails-image-thumbnails"]));
        // line 481
        echo "                                                                                                    </div>
                                                                                                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-image-gallery.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1763 => 481,  1761 => 477,  1760 => 476,  1759 => 470,  1752 => 469,  1749 => 468,  1745 => 467,  1740 => 483,  1738 => 467,  1735 => 466,  1731 => 465,  1727 => 486,  1713 => 485,  1710 => 465,  1692 => 464,  1688 => 463,  1683 => 487,  1681 => 463,  1677 => 461,  1673 => 460,  1666 => 455,  1658 => 454,  1654 => 453,  1650 => 451,  1642 => 450,  1638 => 449,  1633 => 446,  1629 => 445,  1624 => 489,  1622 => 460,  1619 => 459,  1617 => 445,  1614 => 444,  1610 => 443,  1606 => 433,  1597 => 432,  1593 => 431,  1588 => 434,  1586 => 431,  1582 => 430,  1579 => 429,  1575 => 428,  1571 => 424,  1562 => 423,  1558 => 422,  1553 => 425,  1551 => 422,  1547 => 421,  1544 => 420,  1540 => 419,  1536 => 438,  1532 => 436,  1530 => 428,  1527 => 427,  1525 => 419,  1521 => 417,  1518 => 416,  1514 => 415,  1510 => 405,  1508 => 399,  1507 => 398,  1506 => 395,  1498 => 394,  1494 => 393,  1489 => 406,  1487 => 393,  1483 => 391,  1479 => 390,  1474 => 408,  1472 => 390,  1469 => 389,  1465 => 388,  1461 => 411,  1447 => 410,  1444 => 388,  1426 => 387,  1422 => 386,  1417 => 412,  1415 => 386,  1411 => 384,  1407 => 383,  1403 => 377,  1394 => 376,  1390 => 375,  1385 => 378,  1383 => 375,  1380 => 374,  1376 => 373,  1372 => 369,  1363 => 368,  1359 => 367,  1354 => 370,  1352 => 367,  1349 => 366,  1345 => 365,  1341 => 361,  1332 => 360,  1328 => 359,  1323 => 362,  1321 => 359,  1318 => 358,  1314 => 357,  1309 => 380,  1307 => 373,  1304 => 372,  1302 => 365,  1299 => 364,  1297 => 357,  1291 => 353,  1287 => 352,  1282 => 439,  1280 => 415,  1277 => 414,  1275 => 383,  1272 => 382,  1270 => 352,  1266 => 350,  1262 => 349,  1258 => 345,  1254 => 343,  1246 => 342,  1243 => 341,  1240 => 340,  1238 => 339,  1234 => 338,  1229 => 346,  1227 => 338,  1222 => 336,  1218 => 335,  1215 => 334,  1211 => 333,  1206 => 492,  1203 => 491,  1200 => 443,  1198 => 442,  1195 => 441,  1193 => 349,  1190 => 348,  1188 => 333,  1181 => 332,  1177 => 331,  1172 => 494,  1170 => 331,  1166 => 329,  1162 => 328,  1157 => 496,  1155 => 328,  1145 => 324,  1141 => 323,  1137 => 500,  1133 => 498,  1131 => 323,  1128 => 322,  1125 => 321,  1121 => 320,  1116 => 311,  1113 => 310,  1104 => 309,  1101 => 308,  1092 => 307,  1090 => 306,  1087 => 305,  1083 => 304,  1078 => 301,  1075 => 300,  1066 => 299,  1063 => 298,  1054 => 297,  1052 => 296,  1049 => 295,  1045 => 294,  1040 => 313,  1038 => 304,  1035 => 303,  1033 => 294,  1030 => 293,  1026 => 292,  1021 => 283,  1019 => 278,  1012 => 277,  1009 => 276,  1006 => 275,  1003 => 274,  1001 => 273,  998 => 272,  996 => 270,  995 => 269,  994 => 267,  991 => 266,  987 => 265,  982 => 285,  980 => 265,  977 => 264,  973 => 263,  969 => 288,  955 => 287,  952 => 263,  934 => 262,  930 => 261,  925 => 289,  923 => 261,  915 => 259,  911 => 258,  907 => 318,  902 => 315,  900 => 292,  897 => 291,  895 => 258,  889 => 257,  880 => 256,  877 => 255,  873 => 254,  866 => 242,  863 => 241,  859 => 240,  855 => 246,  841 => 245,  838 => 240,  820 => 239,  816 => 238,  812 => 249,  808 => 247,  806 => 238,  797 => 237,  794 => 236,  790 => 235,  785 => 230,  782 => 229,  773 => 226,  770 => 225,  768 => 223,  761 => 222,  758 => 221,  755 => 220,  752 => 219,  750 => 218,  747 => 217,  744 => 216,  741 => 215,  739 => 214,  736 => 213,  734 => 211,  733 => 210,  732 => 209,  730 => 207,  728 => 206,  717 => 205,  713 => 204,  709 => 195,  700 => 194,  696 => 193,  691 => 196,  689 => 193,  685 => 192,  676 => 191,  672 => 190,  668 => 186,  659 => 185,  655 => 184,  650 => 187,  648 => 184,  644 => 183,  635 => 182,  631 => 181,  627 => 198,  625 => 190,  622 => 189,  619 => 181,  615 => 180,  611 => 201,  607 => 199,  605 => 180,  597 => 179,  594 => 178,  591 => 177,  587 => 176,  581 => 168,  579 => 166,  572 => 165,  569 => 164,  566 => 163,  563 => 162,  561 => 161,  558 => 160,  555 => 159,  552 => 158,  550 => 157,  547 => 156,  545 => 154,  544 => 153,  543 => 152,  542 => 150,  532 => 149,  529 => 148,  525 => 147,  521 => 172,  507 => 171,  504 => 147,  486 => 146,  482 => 145,  477 => 173,  475 => 145,  471 => 143,  467 => 142,  463 => 202,  461 => 176,  458 => 175,  455 => 142,  451 => 141,  447 => 233,  444 => 232,  441 => 204,  438 => 203,  435 => 141,  432 => 140,  428 => 139,  422 => 250,  420 => 235,  417 => 234,  415 => 139,  402 => 138,  396 => 136,  387 => 135,  383 => 134,  378 => 501,  376 => 320,  373 => 319,  371 => 254,  368 => 253,  366 => 134,  362 => 132,  357 => 131,  354 => 130,  351 => 129,  345 => 127,  342 => 126,  338 => 124,  336 => 123,  327 => 122,  323 => 121,  319 => 507,  315 => 505,  313 => 504,  310 => 503,  308 => 121,  305 => 120,  302 => 119,  299 => 118,  296 => 109,  293 => 108,  290 => 106,  287 => 91,  285 => 90,  282 => 89,  280 => 76,  279 => 74,  278 => 73,  277 => 70,  276 => 68,  275 => 67,  274 => 63,  271 => 62,  259 => 60,  256 => 59,  252 => 58,  247 => 508,  245 => 58,  238 => 57,  235 => 56,  232 => 55,  230 => 53,  228 => 52,  226 => 51,  223 => 50,  220 => 49,  218 => 47,  216 => 46,  214 => 45,  211 => 44,  208 => 43,  205 => 39,  203 => 38,  200 => 37,  198 => 36,  195 => 35,  192 => 34,  189 => 33,  186 => 31,  183 => 30,  180 => 28,  177 => 27,  174 => 26,  172 => 25,  169 => 24,  166 => 23,  163 => 22,  160 => 21,  157 => 20,  154 => 19,  151 => 18,  148 => 17,  145 => 16,  142 => 15,  139 => 14,  136 => 13,  133 => 12,  131 => 11,  128 => 10,  122 => 9,  119 => 8,  114 => 7,  112 => 6,  109 => 5,  106 => 4,  103 => 3,  101 => 2,  94 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/element/cms-element-image-gallery.html.twig", "/Applications/MAMP/htdocs/shopware/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-image-gallery.html.twig");
    }
}
