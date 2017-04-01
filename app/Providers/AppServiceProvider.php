<?php

namespace App\Providers;

use App\DataAccess\UserStorage;
use App\Domain\Repository\UserRepository;
use App\Domain\Repository\UserRepositoryInterface;
use App\Domain\Specification\ActiveUserSpecification;
use Illuminate\Support\ServiceProvider;

/**
 * Class AppServiceProvider
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->resolving(ActiveUserSpecification::class, function (ActiveUserSpecification $specification) {
            $specification->criteria(new UserStorage);

            return $specification;
        });
    }
}
