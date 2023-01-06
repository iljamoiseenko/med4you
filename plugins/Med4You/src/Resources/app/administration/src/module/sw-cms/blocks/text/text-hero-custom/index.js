import './component';
import './preview';

Shopware.Service('cmsService').registerCmsBlock({
    name: 'text-hero-custom',
    label: 'title listing',
    category: 'text',
    component: 'sw-cms-block-text-hero-custom',
    previewComponent: 'sw-cms-preview-text-hero-custom',
    defaultConfig: {
        marginBottom: '20px',
        marginTop: '20px',
        marginLeft: '20px',
        marginRight: '20px',
        sizingMode: 'boxed',
    },
    slots: {
        content: {
            type: 'text',
            default: {
                config: {
                    content: {
                        source: 'static',
                        value: `
                        <h2 style="text-align: center;">Listing categories title</h2>
                        <hr>
                        `.trim(),
                    },
                },
            },
        },
    },
});
