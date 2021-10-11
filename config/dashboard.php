<?php

use ZnBundle\Dashboard\Symfony4\Widgets\Mock\MockWidget;
use ZnLib\Web\Widgets\ModalWidget;

return [
    [
        'perLine' => 1,
        'items' => [
            [
                'class' => MockWidget::class,
                'html' => '<div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">Это простой пример блока с компонентом в стиле jumbotron для привлечения дополнительного внимания к содержанию или информации.</p>
  <hr class="my-4">
  <p>Использются служебные классы для типографики и расстояния содержимого в контейнере большего размера.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>',
            ],
        ],
    ],
    /*[
        'perLine' => 1,
        'items' => [
            [
                'class' => MockWidget::class,
                'html' => '
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Launch demo modal
            </button>' .
                    ModalWidget::widget([
                        'tagId' => 'exampleModal',
                        'header' => 'header1',
                        'body' => '<iframe src="/messenger/?chatId=1" style="border: none; width: 100%; height: 400px;"></iframe>',
                        'bodyOptions' => [],
                    ])
            ]
        ],
    ],*/
    [
        'perLine' => 3,
        'items' => [
            [
                'class' => MockWidget::class,
                'html' => '<div class="card text-white bg-primary">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
  </div>
</div>',
            ],
            [
                'class' => MockWidget::class,
                'html' => '<div class="card text-white bg-success">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Success card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
  </div>
</div>',
            ],
            [
                'class' => MockWidget::class,
                'html' => '<div class="card text-white bg-danger">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Danger card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
  </div>
</div>',
            ],
        ],
    ],
];
