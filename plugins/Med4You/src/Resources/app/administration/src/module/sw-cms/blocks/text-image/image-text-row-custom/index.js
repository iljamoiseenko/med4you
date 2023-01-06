import CMS from '../../../constant/sw-cms.constant';
import './component';
import './preview';

Shopware.Service('cmsService').registerCmsBlock({
    name: 'image-text-row-custom',
    label: 'custom',
    category: 'text-image',
    component: 'sw-cms-block-image-text-row-custom',
    previewComponent: 'sw-cms-preview-image-text-row-custom',
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
                        <h5>TOP KATEGORIE</h5>
                        <h4>Betreuung von Patienten im Krankenhaus</h4>
                        <p>Antibiotika sind Medikamente, die Bakterien abtöten. Sie können verwendet werden, um bakterielle Infektionen zu behandeln, aber sie sind nicht wirksam gegen Viren.</p>
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
                        <h5>TOP KATEGORIE</h5>
                        <h4>Hygiene</h4>
                        <p>Sterilisation ist die Verwendung von Chemikalien oder anderen Methoden zur Zerstörung von Mikroorganismen.</p>
                        `.trim(),
                    },
                },
            },
        },
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
                        <h5>TOP KATEGORIE</h5>
                        <h4>Infusion & Transfusion, Injektion</h4>
                        <p>Die Infusionsmethode wird verwendet, um Cannabinoide aus der Cannabisblüte in Alkohol oder Öl zu extrahieren. </p>
                        `.trim(),
                    },
                },
            },
        },
    },
});
