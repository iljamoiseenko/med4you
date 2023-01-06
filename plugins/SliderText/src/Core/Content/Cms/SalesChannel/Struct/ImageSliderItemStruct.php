<?php declare(strict_types=1);

namespace Shopware\Core\Content\Cms\SalesChannel\Struct;

use Shopware\Core\Content\Media\MediaEntity;
use Shopware\Core\Framework\Struct\Struct;

class ImageSliderItemStruct extends Struct
{
    /**
     * @var string|null
     */
    protected $url;
    

    // // -------  
    /**
    * @var string|null
    */
    protected $url2;

    // /**
    // * @var string|null
    // */
    // protected $subText;

    // /**
    // * @var string|null
    // */
    // protected $textBtn;

    
    
    // -------


    /**
     * @var bool|null
     */
    protected $newTab;

    /**
     * @var MediaEntity|null
     */
    protected $media;

    public function getMedia(): ?MediaEntity
    {
        return $this->media;
    }

    public function setMedia(?MediaEntity $media): void
    {
        $this->media = $media;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): void
    {
        $this->url = $url;
        
    }

    // -------
    public function getUrl2(): ?string
    {
        return $this->url2;
        
    }

    public function setUrl2(?string $url2): void
    {
        $this->url2 = $url2;
    }

    public function getText(): ?string
    {
        return $this->subText;
        
    }

    public function setText(?string $subText): void
    {
        $this->subText = $subText;
    }

    public function getBtn(): ?string
    {
        return $this->textBtn;
        
    }

    public function setBtn(?string $textBtn): void
    {
        $this->textBtn = $textBtn;
    }
    // -------

    public function getNewTab(): ?bool
    {
        return $this->newTab;
    }

    public function setNewTab(?bool $newTab): void
    {
        $this->newTab = $newTab;
    }

    public function getApiAlias(): string
    {
        return 'cms_image_slider_item';
    }
}
