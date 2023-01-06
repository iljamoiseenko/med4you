import './component';
import './config';
import './preview';


const utils = Shopware.Utils;

Shopware.Service('cmsService').registerCmsElement({
    name: 'image-slider',
    label: 'slider text elem 2.0',
    component: 'sw-cms-el-image-slider-text',
    configComponent: 'sw-cms-el-config-image-slider-text',
    previewComponent: 'sw-cms-el-preview-image-slider-text',
    defaultConfig: {
        sliderItems: {
            source: 'static',
            value: [],
            // url2: [],
            required: true,
            entity: {
                name: 'media',
            },
        },
        BlockBannerText: {
            source: 'static',
            value: 'Banner text',
        },
        // BlockBannerUrl: {
        //     source: 'static',
        //     value: 'block banner link'
        // },
        
        
        navigationArrows: {
            source: 'static',
            value: 'outside',
        },
        navigationDots: {
            source: 'static',
            value: null,
        },
        displayMode: {
            source: 'static',
            value: 'standard',
        },
        minHeight: {
            source: 'static',
            value: '300px',
        },
        verticalAlign: {
            source: 'static',
            value: null,
        },
    },
    enrich: function enrich(elem, data) {
        if (Object.keys(data).length < 1) {
            return;
        }

        Object.keys(elem.config).forEach((configKey) => {
            const entity = elem.config[configKey].entity;

            if (!entity) {
                return;
            }

            const entityKey = `${entity.name}-${utils.createId()}`;
            if (!data[`entity-${entityKey}`]) {
                return;
            }

            elem.data[configKey] = [];
            elem.config[configKey].value.forEach((sliderItem) => {
                elem.data[configKey].push({
                    newTab: sliderItem.newTab,
                    url: sliderItem.url,
                    //----
                    url2: sliderItem.url2,
                    subText: sliderItem.subText,
                    textBtn: sliderItem.textBtn,
                    
                    media: data[`entity-${entityKey}`].get(sliderItem.mediaId),
                });
            });
        });
    },
});
