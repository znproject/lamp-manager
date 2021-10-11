<?php

namespace App\Tournament\Domain\Entities;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use ZnCore\Domain\Interfaces\Entity\ValidateEntityByMetadataInterface;
use ZnCore\Domain\Interfaces\Entity\UniqueInterface;
use ZnCore\Domain\Interfaces\Entity\EntityIdInterface;

class TournamentEntity implements ValidateEntityByMetadataInterface, UniqueInterface, EntityIdInterface
{

    private $id = null;

    private $gameId = null;

    private $walletId = null;

    private $depositAmount = null;

    private $prizeFund = null;

    private $playerLimit = null;

    private $winnerPlayerLimit = null;

    private $statusId = null;

    private $beginAt = null;

    private $createdAt = null;

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('id', new Assert\NotBlank);
        $metadata->addPropertyConstraint('gameId', new Assert\NotBlank);
        $metadata->addPropertyConstraint('walletId', new Assert\NotBlank);
        $metadata->addPropertyConstraint('depositAmount', new Assert\NotBlank);
        $metadata->addPropertyConstraint('prizeFund', new Assert\NotBlank);
        $metadata->addPropertyConstraint('playerLimit', new Assert\NotBlank);
        $metadata->addPropertyConstraint('winnerPlayerLimit', new Assert\NotBlank);
        $metadata->addPropertyConstraint('statusId', new Assert\NotBlank);
        $metadata->addPropertyConstraint('beginAt', new Assert\NotBlank);
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

    public function setGameId($value) : void
    {
        $this->gameId = $value;
    }

    public function getGameId()
    {
        return $this->gameId;
    }

    public function getWalletId()
    {
        return $this->walletId;
    }

    public function setWalletId($walletId): void
    {
        $this->walletId = $walletId;
    }

    public function setDepositAmount($value) : void
    {
        $this->depositAmount = $value;
    }

    public function getDepositAmount()
    {
        return $this->depositAmount;
    }

    public function getPrizeFund()
    {
        return $this->prizeFund;
    }

    public function setPrizeFund($prizeFund): void
    {
        $this->prizeFund = $prizeFund;
    }

    public function setPlayerLimit($value) : void
    {
        $this->playerLimit = $value;
    }

    public function getPlayerLimit()
    {
        return $this->playerLimit;
    }

    public function getWinnerPlayerLimit()
    {
        return $this->winnerPlayerLimit;
    }

    public function setWinnerPlayerLimit($winnerPlayerLimit): void
    {
        $this->winnerPlayerLimit = $winnerPlayerLimit;
    }

    public function setStatusId($value) : void
    {
        $this->statusId = $value;
    }

    public function getStatusId()
    {
        return $this->statusId;
    }

    public function setBeginAt($value) : void
    {
        $this->beginAt = $value;
    }

    public function getBeginAt()
    {
        return $this->beginAt;
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

