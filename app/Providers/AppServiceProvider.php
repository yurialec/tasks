<?php

namespace App\Providers;

use App\Models\Task;
use App\Repositories\Tasks\TasksRepository;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Interfaces\Tasks\ITasksRepository', 'App\Repositories\Tasks\TasksRepository');

        $this->app->bind('App\Interfaces\Tasks\ITasksRepository', function () {
            return new TasksRepository(new Task());
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
