<?php declare(strict_types=1);

namespace Shopware\Core\Framework\DataAbstractionLayer\Field;

use Shopware\Core\Framework\DataAbstractionLayer\DefinitionInstanceRegistry;
use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;

abstract class AssociationField extends Field
{
    /**
     * @var string
     */
    protected $referenceClass;

    /**
     * @var EntityDefinition
     */
    protected $referenceDefinition;

    /**
     * @var string
     */
    protected $referenceField;

    /**
     * @var bool
     */
    protected $autoload = false;

    protected ?string $referenceEntity = null;

    public function compile(DefinitionInstanceRegistry $registry): void
    {
        if ($this->referenceDefinition !== null) {
            return;
        }

        parent::compile($registry);

        $this->referenceDefinition = $registry->getByClassOrEntityName($this->referenceClass);
        $this->referenceClass = $this->referenceDefinition->getClass();
        $this->referenceEntity = $this->referenceDefinition->getEntityName();
    }

    public function getReferenceDefinition(): EntityDefinition
    {
        return $this->referenceDefinition;
    }

    public function getReferenceField(): string
    {
        return $this->referenceField;
    }

    public function getReferenceClass(): string
    {
        return $this->referenceClass;
    }

    final public function getAutoload(): bool
    {
        return $this->autoload;
    }

    public function getReferenceEntity(): ?string
    {
        return $this->referenceEntity;
    }
}
