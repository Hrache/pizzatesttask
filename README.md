## О проекте

Пиццерия продает 3 вида продукции с топпингом: с сыром, со клбасой, с грибами.
Также база хранит чеки от продаж, которые содержат следующие данные - цена, топпинг пиццы.
Но, пиццерия решила также продавать роллы.
- нужно спроектировать таблицы для базы пиццерии с использованием связей
- таблица чеков должна быть едина для пиццы и роллов
- нужно вывести 10 последних чеков среди которых есть продажа пиццы и роллов (просто вывести из бд)

composer install
composer update

php artisan migrate --seed
