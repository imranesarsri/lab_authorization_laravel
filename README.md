# Lab authorization laravel
## Instalation spatie

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
