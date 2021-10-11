<?php

namespace App\Game\Domain\Entities;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Webmozart\Assert\Assert as AssertAssert;
use ZnCore\Base\Enums\StatusEnum;
use ZnCore\Domain\Interfaces\Entity\ValidateEntityByMetadataInterface;
use ZnCore\Domain\Interfaces\Entity\UniqueInterface;
use ZnCore\Domain\Interfaces\Entity\EntityIdInterface;

class GameEntity implements ValidateEntityByMetadataInterface, UniqueInterface, EntityIdInterface
{

    private $id = null;

    private $categoryId = null;

    private $title = null;

    private $description = null;

    private $logo = null;

    private $link = null;

    private $statusId = StatusEnum::ENABLED;

    private $partnerId = null;

    private $createdAt = null;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
//        $metadata->addPropertyConstraint('id', new Assert\NotBlank);
        $metadata->addPropertyConstraint('categoryId', new Assert\NotBlank);
        $metadata->addPropertyConstraint('title', new Assert\NotBlank);
        $metadata->addPropertyConstraint('description', new Assert\NotBlank);
        $metadata->addPropertyConstraint('logo', new Assert\NotBlank);
        $metadata->addPropertyConstraint('link', new Assert\NotBlank);
        $metadata->addPropertyConstraint('statusId', new Assert\NotBlank);
        $metadata->addPropertyConstraint('createdAt', new Assert\NotBlank);
        $metadata->addPropertyConstraint('partnerId', new Assert\NotBlank);
        $metadata->addPropertyConstraint('logo', new Assert\Url);
        $metadata->addPropertyConstraint('link', new Assert\Url);
    }

    public function unique() : array
    {
        return [];
    }

    public function setId($value) : void
    {
        $this->id = $value;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setCategoryId($value) : void
    {
        $this->categoryId = $value;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function setTitle($value) : void
    {
        $this->title = $value;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setDescription($value) : void
    {
        $this->description = $value;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setStatusId($value) : void
    {
        $this->statusId = $value;
    }

    public function getStatusId()
    {
        return $this->statusId;
    }

    public function setCreatedAt($value) : void
    {
        $this->createdAt = $value;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setLogo($value) : void
    {
        $this->logo = $value;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    
    public function setLink($value) : void
    {
        $this->link = $value;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setPartnerId($value) : void
    {
        $this->partnerId = $value;
    }

    public function getPartnerId()
    {
        return $this->partnerId;
    }
    
}

