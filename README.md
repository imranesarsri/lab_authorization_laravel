# Lab authorization laravel
## Gate

```php
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('can:isUser');
```

```php
    public function create()
    {
        // ==============================
        if (Gate::denies('isUser')) {
            return abort(403);
        }
        // ==============================
        if (Gate::allows('isAdmin')) {
            return abort(403);
        }
        // ==============================
        $this->authorize('isUser');
        // ==============================
        $ProjectsFilter = $this->ProjectRepository->projectFilters();
        return view('Tasks.create', compact('ProjectsFilter'));
    }
```

## Policies

```bash
php artisan make:policy TaskPolicy --model=Task
```

