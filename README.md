# My project store
My store

Для того что бы развернуть проек нужно:

1. На сервере установить docker and docker-compose
2. На серевере склонировать проект  используя команду: <br> `git clone https://github.com/mmiinnsskk11/store.git`
3. Перейти в директорию */store* командой:  `cd store`<br> и выполнить команду: `docker-compose up -d`
4. Перейти в контейнер php используя команду:  `docker exec -it php-lumen bash`
5. В контейнере выполнить команду `composer install`
6. В этом же контейнере выполнить команду `php artisan migrate`