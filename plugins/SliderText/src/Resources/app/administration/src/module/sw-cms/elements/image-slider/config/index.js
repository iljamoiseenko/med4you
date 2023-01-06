import template from './sw-cms-el-config-image-slider-text.html.twig';
import './sw-cms-el-config-image-slider-text.scss';

const { Component, Mixin } = Shopware;
const { cloneDeep } = Shopware.Utils.object;
const Criteria = Shopware.Data.Criteria;

Component.register('sw-cms-el-config-image-slider-text', {
    template,

    inject: ['repositoryFactory'],

    mixins: [
        Mixin.getByName('cms-element'),
    ],

    data() {
        return {
            mediaModalIsOpen: false,
            initialFolderId: null,
            entity: this.element,
            // BlockBannerText: '',
            // BlockBannerUrl: '',
            mediaItems: [],
        };
    },

    computed: {
        uploadTag() {
            return `cms-element-media-config-${this.element.id}`;
        },

        mediaRepository() {
            return this.repositoryFactory.create('media');
        },

        defaultFolderName() {
            return this.cmsPageState.pageEntityName;
        },

        items() {
            if (this.element.config && this.element.config.sliderItems && this.element.config.sliderItems.value) {
                return this.element.config.sliderItems.value;
            }

            return [];
        },
    },

    created() {
        this.createdComponent();
    },

    methods: {
        async createdComponent() {
            this.initElementConfig('image-slider');
            if (this.element.config.sliderItems.source !== 'default' && this.element.config.sliderItems.value.length > 0) {
                const mediaIds = this.element.config.sliderItems.value.map((configElement) => {
                    return configElement.mediaId;
                });

                const criteria = new Criteria(1, 25);
                criteria.setIds(mediaIds);

                const searchResult = await this.mediaRepository.search(criteria);
                this.mediaItems = mediaIds.map((mediaId) => {
                    return searchResult.get(mediaId);
                });
            }
        },

        onImageUpload(mediaItem) {
            const sliderItems = this.element.config.sliderItems;
            if (sliderItems.source === 'default') {
                sliderItems.value = [];
                sliderItems.source = 'static';
            }

            sliderItems.value.push({
                mediaUrl: mediaItem.url,

                mediaUrl2: mediaItem.url2,
                // mediaUrl2: item.subText,
                // mediaUrl2: item.textBtn,  

                mediaId: mediaItem.id,
                mediaId2: mediaItem.id,
                url: null,

                url2: null,
                subText: null,
                textBtn: null,

                newTab: false,
                
            });

            this.mediaItems.push(mediaItem);

            this.updateMediaDataValue();
            this.emitUpdateEl();
        },

        onItemRemove(mediaItem, index) {
            const key = mediaItem.id;
            const { value } = this.element.config.sliderItems;

            this.element.config.sliderItems.value = value.filter(
                (item, i) => {
                    return (item.mediaId !== key || i !== index);
                },
            );

            this.mediaItems = this.mediaItems.filter(
                (item, i) => {
                    return (item.id !== key || i !== index);
                },
            );

            this.updateMediaDataValue();
            this.emitUpdateEl();
        },

        onCloseMediaModal() {
            this.mediaModalIsOpen = false;
        },

        onMediaSelectionChange(mediaItems) {
            const sliderItems = this.element.config.sliderItems;
            if (sliderItems.source === 'default') {
                sliderItems.value = [];
                sliderItems.source = 'static';
            }

            mediaItems.forEach((item) => {
                this.element.config.sliderItems.value.push({
                    mediaUrl: item.url,
                    mediaUrl2: item.subText,
                    mediaUrl2: item.textBtn,  
                    mediaUrl2: item.url2,
                    mediaId: item.id,
                    mediaId2: item.id2,
                    url: null,

                    subText: null,
                    textBtn: null,
                    url2: null,
                    newTab: false,
                });
            });

            this.mediaItems.push(...mediaItems);

            this.updateMediaDataValue();
            this.emitUpdateEl();
        },

        updateMediaDataValue() {
            if (this.element.config.sliderItems.value) {
                const sliderItems = cloneDeep(this.element.config.sliderItems.value);

                sliderItems.forEach((sliderItem) => {
                    this.mediaItems.forEach((mediaItem) => {
                        if (sliderItem.mediaId === mediaItem.id) {
                            sliderItem.media = mediaItem;
                        }
                    });
                });

                if (!this.element.data) {
                    this.$set(this.element, 'data', { sliderItems });
                } else {
                    this.$set(this.element.data, 'sliderItems', sliderItems);
                }
            }
        },

        onOpenMediaModal() {
            this.mediaModalIsOpen = true;
        },

        onChangeMinHeight(value) {
            this.element.config.minHeight.value = value === null ? '' : value;

            this.$emit('element-update', this.element);
        },

        onChangeDisplayMode(value) {
            if (value === 'cover') {
                this.element.config.verticalAlign.value = null;
            }

            this.$emit('element-update', this.element);
        },

        emitUpdateEl() {
            this.$emit('element-update', this.element);
        },
    },
});
