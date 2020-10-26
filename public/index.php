<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

use Illuminate\Container\Container;
use ZnCore\Base\Libs\DotEnv\DotEnv;
use ZnSandbox\Sandbox\Apache\Domain\Repositories\Conf\ServerRepository;

require_once __DIR__ . '/../vendor/autoload.php';
DotEnv::init(__DIR__ . '/..');

$directory = '/etc/apache2/sites-enabled';

$container = Container::getInstance();
$container->bind(ServerRepository::class, function () use ($directory) {
    return new ServerRepository($directory);
}, true);
$serverService = $container->get(\ZnSandbox\Sandbox\Apache\Domain\Services\ServerService::class);

$links = $serverService->all();
//$links = include __DIR__ . '/../config/links.php';

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<div class="container">

    <?php foreach ($links as $group): ?>
        <h2><?= $group['title'] ?></h2>
        <div class="list-group">
            <?php foreach ($group['items'] as $link): ?>
                <a href="http://<?= $link['url'] ?>" class="list-group-item list-group-item-action">
                    <?= $link['title'] ?: $link['url'] ?>
                </a>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>