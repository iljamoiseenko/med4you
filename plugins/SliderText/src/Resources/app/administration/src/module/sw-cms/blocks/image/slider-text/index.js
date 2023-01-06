import CMS from '../../../constant/sw-cms.constant';

import './component';
import './preview';

Shopware.Service('cmsService').registerCmsBlock({
    name: 'slider-text',
    label: 'slider 2.0',
    category: 'image',
    component: 'sw-cms-block-slider-text',
    previewComponent: 'sw-cms-preview-slider-text',
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
                                url2: null,
                                subText: null,
                                newTab: false,
                                mediaId: null,
                                fileName: CMS.MEDIA.previewMountain,
                                mediaUrl: null,
                                // mediaUrl2: null,
                                mediaId2: null
                            },
                        ],
                    },
                },
            },
        },
    },
});
