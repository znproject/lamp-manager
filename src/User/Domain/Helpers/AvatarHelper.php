<?php


namespace App\User\Domain\Helpers;

class AvatarHelper
{

    public static function generateAvatar(?string $avatar): string
    {
        if (empty($avatar)) {
            return '/dist/img/user/default-avatar.jpeg';
        }
        list($scheme, $path) = explode('://', $avatar);
        if ($scheme == 'gravatar') {
            return 'https://www.gravatar.com/avatar/' . md5($path) . '?d=retro';
        } else {
            return $avatar;
        }
    }
}
