<?php

namespace App\Money\Domain\Entities;

use App\Money\Domain\Enums\TransactionStatusEnum;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use ZnCore\Domain\Interfaces\Entity\ValidateEntityByMetadataInterface;
use ZnCore\Domain\Interfaces\Entity\UniqueInterface;
use ZnCore\Domain\Interfaces\Entity\EntityIdInterface;

class TransactionEntity implements ValidateEntityByMetadataInterface, UniqueInterface, EntityIdInterface
{

    private $id = null;

    private $amount = null;

    //private $currencyId = null;

    private $typeId = null;

    private $senderId = null;

    private $recipientId = null;

    private $data = null;

    private $description = null;

    private $statusId = TransactionStatusEnum::ENABLED;

    private $donnedAt = null;

    private $createdAt = null;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('amount', new Assert\NotBlank);
//        $metadata->addPropertyConstraint('currencyId', new Assert\NotBlank);
        $metadata->addPropertyConstraint('typeId', new Assert\NotBlank);
        $metadata->addPropertyConstraint('senderId', new Assert\NotBlank);
        $metadata->addPropertyConstraint('recipientId', new Assert\NotBlank);
//        $metadata->addPropertyConstraint('data', new Assert\NotBlank);
//        $metadata->addPropertyConstraint('description', new Assert\NotBlank);
        $metadata->addPropertyConstraint('statusId', new Assert\NotBlank);
//        $metadata->addPropertyConstraint('donnedAt', new Assert\NotBlank);
        $metadata->addPropertyConstraint('createdAt', new Assert\NotBlank);
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

    public function setAmount($value) : void
    {
        $this->amount = $value;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    /*public function setCurrencyId($value) : void
    {
        $this->currencyId = $value;
    }

    public function getCurrencyId()
    {
        return $this->currencyId;
    }*/

    public function setTypeId($value) : void
    {
        $this->typeId = $value;
    }

    public function getTypeId()
    {
        return $this->typeId;
    }

    public function setSenderId($value) : void
    {
        $this->senderId = $value;
    }

    public function getSenderId()
    {
        return $this->senderId;
    }

    public function setRecipientId($value) : void
    {
        $this->recipientId = $value;
    }

    public function getRecipientId()
    {
        return $this->recipientId;
    }

    public function setData($value) : void
    {
        $this->data = $value;
    }

    public function getData()
    {
        return $this->data;
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

    public function setDonnedAt($value) : void
    {
        $this->donnedAt = $value;
    }

    public function getDonnedAt()
    {
        return $this->donnedAt;
    }

    public function setCreatedAt($value) : void
    {
        $this->createdAt = $value;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }


}

