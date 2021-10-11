# Установка

## Инициализация

    cd vendor/bin
    php zn init

Профили:

* `local` - локальный компьютер
* `develop` - тестовый сервер
* `production` - боевой сервер

## Подготовка БД

Открываем файл `.env.local` и настраиваем подключение к БД.

Выполняем миграции и импорт фикстур:

    cd vendor/bin
    php zn db:migrate:up
    php zn db:fixture:import

## Настройка доменов

Назначить домен на папку `public`.

## Доступы на сайт

Фикстуры содержат 10 пользователей:

* admin
* moderator
* developer
* bot
* user7
* user8
* user9
* user10

Для всех одинаковый пароль: `Wwwqqq111`.
