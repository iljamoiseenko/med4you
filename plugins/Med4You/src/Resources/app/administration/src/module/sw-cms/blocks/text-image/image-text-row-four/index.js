import CMS from '../../../constant/sw-cms.constant';
import './component';
import './preview';

Shopware.Service('cmsService').registerCmsBlock({
    name: 'image-text-row-four',
    label: 'custom-four-text-icon',
    category: 'text-image',
    component: 'sw-cms-block-image-text-row-four',
    previewComponent: 'sw-cms-preview-image-text-row-four',
    defaultConfig: {
        marginBottom: '20px',
        marginTop: '20px',
        marginLeft: '20px',
        marginRight: '20px',
        sizingMode: 'boxed',
    },
    slots: {
        'left-image': {
            type: 'image',
            default: {
                config: {
                    displayMode: { source: 'static', value: 'cover' },
                },
                data: {
                    media: {
                        value: CMS.MEDIA.previewCamera,
                        source: 'default',
                    },
                },
            },
        },
        'left-text': {
            type: 'text',
            default: {
                config: {
                    content: {
                        source: 'static',
                        value: `
                        <h5>Lieferung & Filialabholung</h5>
                        
                        <p>Lieferung & Filialabholung</p>
                        `.trim(),
                    },
                },
            },
        },
        'center-image': {
            type: 'image',
            default: {
                config: {
                    displayMode: { source: 'static', value: 'cover' },
                },
                data: {
                    media: {
                        value: CMS.MEDIA.previewPlant,
                        source: 'default',
                    },
                },
            },
        },
        'center-text': {
            type: 'text',
            default: {
                config: {
                    content: {
                        source: 'static',
                        value: `
                        <h5>Sichere Zahlungen</h5>
                        <p>Lieferung & Filialabholung</p>
                        `.trim(),
                    },
                },
            },
        },
        // -----------
        'center-left-image': {
            type: 'image',
            default: {
                config: {
                    displayMode: { source: 'static', value: 'cover' },
                },
                data: {
                    media: {
                        value: CMS.MEDIA.previewPlant,
                        source: 'default',
                    },
                },
            },
        },
        'center-left-text': {
            type: 'text',
            default: {
                config: {
                    content: {
                        source: 'static',
                        value: `
                        <h5>Lieferung & Filialabholung</h5>
                        
                        <p>Lieferung & Filialabholung</p>
                        `.trim(),
                    },
                },
            },
        },
        // -----------
        'right-image': {
            type: 'image',
            default: {
                config: {
                    displayMode: { source: 'static', value: 'cover' },
                },
                data: {
                    media: {
                        value: CMS.MEDIA.previewGlasses,
                        source: 'default',
                    },
                },
            },
        },
        'right-text': {
            type: 'text',
            default: {
                config: {
                    content: {
                        source: 'static',
                        value: `
                        <h5>Wir helfen Ihnen gerne weiter</h5>
                        
                        <p>Kontaktiere uns </p>
                        `.trim(),
                    },
                },
            },
        },
    },
});
