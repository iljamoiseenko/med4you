import CMS from '../../../constant/sw-cms.constant';


import './component';
import './preview';

Shopware.Service('cmsService').registerCmsBlock({
    name: 'my-image-slider',
    label: 'Slider with text',
    category: 'image',
    component: 'sw-cms-block-slider-with-text',
    previewComponent: 'sw-cms-preview-slider-with-text',
    defaultConfig: {
        marginBottom: '20px',
        marginTop: '20px',
        marginLeft: '20px',
        marginRight: '20px',
        sizingMode: 'boxed',
    },
    slots: {
        imageSlider: {
            type: 'image-slider',
            default: {
                config: {},
                data: {
                    sliderItems: {
                        source: 'default',
                        value: [
                            {
                                url: null,
                                newTab: false,
                                mediaId: null,
                                fileName: CMS.MEDIA.previewMountain,
                                mediaUrl: null,
                                // url2: null,
                                // mediaId2: null
                            },
                        ],
                    },
                },
            },
        },
    },
});
