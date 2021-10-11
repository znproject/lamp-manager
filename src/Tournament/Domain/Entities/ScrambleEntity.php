<?php

namespace App\Tournament\Domain\Entities;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use ZnCore\Domain\Interfaces\Entity\ValidateEntityByMetadataInterface;
use ZnCore\Domain\Interfaces\Entity\UniqueInterface;

class ScrambleEntity implements ValidateEntityByMetadataInterface, UniqueInterface
{

    private $шid = null;

    private $tournamentId = null;

    private $winner = null;

    private $loser = null;

    private $createdAt = null;

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('шid', new Assert\NotBlank);
        $metadata->addPropertyConstraint('tournamentId', new Assert\NotBlank);
        $metadata->addPropertyConstraint('winner', new Assert\NotBlank);
        $metadata->addPropertyConstraint('loser', new Assert\NotBlank);
        $metadata->addPropertyConstraint('createdAt', new Assert\NotBlank);
    }

    public function unique() : array
    {
        return [];
    }

    public function setШid($value) : void
    {
        $this->шid = $value;
    }

    public function getШid()
    {
        return $this->шid;
    }

    public function setTournamentId($value) : void
    {
        $this->tournamentId = $value;
    }

    public function getTournamentId()
    {
        return $this->tournamentId;
    }

    public function setWinner($value) : void
    {
        $this->winner = $value;
    }

    public function getWinner()
    {
        return $this->winner;
    }

    public function setLoser($value) : void
    {
        $this->loser = $value;
    }

    public function getLoser()
    {
        return $this->loser;
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

