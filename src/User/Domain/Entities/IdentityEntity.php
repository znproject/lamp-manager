<?php


namespace App\User\Domain\Entities;

use App\User\Domain\Helpers\AvatarHelper;
use ZnBundle\User\Domain\Interfaces\Entities\IdentityEntityInterface;
use ZnCore\Domain\Interfaces\Entity\EntityIdInterface;
use ZnCore\Domain\Interfaces\Entity\ValidateEntityByMetadataInterface;

class IdentityEntity extends \ZnBundle\User\Domain\Entities\IdentityEntity implements ValidateEntityByMetadataInterface, EntityIdInterface, IdentityEntityInterface
{

    /*protected $avatar = null;

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setAvatar($avatar): void
    {
        $this->avatar = $avatar;
    }*/

    public function getLogo()
    {
        $avatar = 'gravatar://' . $this->getId();
        return AvatarHelper::generateAvatar($avatar);
    }

    /*public function getLogo()
    {
        return 'https://www.gravatar.com/avatar/' . md5($this->getUsername()) . '?d=retro';
    }*/
}
