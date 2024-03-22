<?php

namespace App\Providers;

use App\Models\Task;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;
use App\Policies\TaskPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Task::class => TaskPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
        // Gate::policy(User::class, TaskPolicy::class);
        // Gate::define('isAdmin', function ($user) {
        //     return $user->role === 'admin';
        // });
        // Gate::define('isUser', function ($user) {
        //     return $user->role === 'user';
        // });
    }
}
