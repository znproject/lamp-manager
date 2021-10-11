# Интеграционная шина

* [Документация](./docs/README.md)




***
#####Порядок выпонения сборки для тестового
Заливка на тестовый происходит по merge в ветку develop

1. bin/database/migrate up.sh
2. bin/database/fixture import.sh
3. php ./init --env=Development --overwrite=All

***
#####Порядок выпонения сборки для боевого
Заливка на боевой происходит по merge в ветку production

1. bin/database/migrate up.sh
2. bin/database/fixture import.sh
3. php ./init --env=Production --overwrite=All
***

## Docker
Для выполнения команд в docker-образе

Чтобы узнать id контейнера используйтеЖ
docker ps

Выполнение команды внутри контейнера:
docker exec -it <container name> <command>

Некоторые примеры команд:

* Дропнуть бд docker exec -it php-fpm php /var/www/html/vendor/zncore/base/bin/zn db:database:drop
* Выполнить миграции docker exec -it php-fpm php /var/www/html/vendor/zncore/base/bin/zn db:migrate:up --withConfirm 0
* Заполнить бд фикстурами docker exec -it php-fpm php /var/www/html/vendor/zncore/base/bin/zn db:fixture:import --withConfirm 0
* Выполнить инициализацию docker exec -it php-fpm php /var/www/html/init --env=Development --overwrite=All
* Пример копирования vendor в папку проекта docker docker cp <container_id>:/var/www/html/vendor ./vendor
