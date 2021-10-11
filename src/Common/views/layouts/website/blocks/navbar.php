<?php

/**
 * @var array $menu
 * @var View $this
 */

use ZnBundle\Language\Symfony4\Widgets\Language\LanguageWidget;
use ZnLib\Web\View\View;
use ZnLib\Web\Widgets\AdminLte3\NavbarMenu\NavbarMenuWidget;
use ZnLib\Web\Widgets\Navbar\NavbarWidget;
use ZnLib\Web\Widgets\UserNavbarMenu\UserNavbarMenuWidget;

$leftMenu = NavbarMenuWidget::widget([
    'menuConfigFile' => __DIR__ . '/../../../../../../config/menu/web_navbar.php',
]);

$rightMenu =
    LanguageWidget::widget(['view' => $this]) . ' ' .
    UserNavbarMenuWidget::widget([
        'userMenuHtml' => '
                        <a class="dropdown-item" href="/person-settings">
                            <i class="fas fa-user-cog"></i>
                            Персональные данные
                        </a>
                        <a class="dropdown-item" href="/update-password">
                            <i class="fas fa-user-cog"></i>
                            Изменить пароль
                        </a>
                    ',
    ]);
?>

<?= NavbarWidget::widget([
    'leftMenu' => $leftMenu,
    'rightMenu' => $rightMenu,
]) ?>
