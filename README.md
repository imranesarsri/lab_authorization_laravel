# Lab authorization laravel
 ## Installing spatie

```bash
 composer require spatie/laravel-permission
```
- Optional: The service provider will automatically get registered. Or you may manually add the service provider in your `config/app.php` file:

```php
'providers' => [
    // ...
    Spatie\Permission\PermissionServiceProvider::class,
];
```
- You should publish the migration and the config/permission.php config file with:

```bash
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
```
- Clear your config cache. This package requires access to the permission config settings in order to run migrations. If you've been caching configurations locally, clear your config cache with either of these commands:

```bash
 php artisan optimize:clear
 # or
 php artisan config:clear
```

- Run the migrations: After the config and migration have been published and configured, you can create the tables for this package by running:

```bash
 php artisan migrate
```

- Add the necessary trait to your User model:

```php
 // The User model requires this trait
 use HasRoles;
```
