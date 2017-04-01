<?php
declare(strict_types=1);

namespace App;

use App\Action\User\IndexAction;
use Laravel\Lumen\Application;

/**
 * Class Route
 */
final class Route
{
    /**
     * @param Application $app
     */
    public function register(Application $app)
    {
        $app->get('/users', IndexAction::class);
    }
}
