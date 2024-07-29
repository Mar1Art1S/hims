<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

### Встановлення

composer install
yarn install
yarn build
php artisan migrate
php artisan make:filament-user
Вказати будь-які дані користувача (пошту вказати ту, якою потрібно буде авторизовуватись для входу в панель керування)

За необхідністю виконати:
php artisan db:seed
Для наповнення бази даних тестовими даними

### Використання іконок

Компонент іконок використовується Lucide
mallardduck/blade-lucide-icons

Сайт для вибору https://lucide.dev

Щоб викликати потрібну іконку необхідно зайти на вищевказаний сайт та обрати назву потрібної іконки.
Потім в шаблоні викликати: <x-lucide-назва-іконки class="size-5" />
