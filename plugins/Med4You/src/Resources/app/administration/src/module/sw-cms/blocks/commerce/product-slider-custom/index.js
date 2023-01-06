import './component';
import './preview';

Shopware.Service('cmsService').registerCmsBlock({
    name: 'product-slider-custom',
    label: 'Custom Product Slider',
    category: 'commerce',
    component: 'sw-cms-block-product-slider-custom',
    previewComponent: 'sw-cms-preview-product-slider-custom',
    defaultConfig: {
        marginBottom: '20px',
        marginTop: '20px',
        marginLeft: '20px',
        marginRight: '20px',
        sizingMode: 'boxed',
    },
    slots: {
        productSlider: 'product-slider',
    },
});
