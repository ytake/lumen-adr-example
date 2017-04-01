<?php
declare(strict_types=1);

namespace App\DataAccess;

use App\Domain\Entity\UserCriteria;

/**
 * Class UserStorage
 */
class UserStorage extends UserCriteria
{
    /**
     * @return array
     */
    public function all(): array
    {
        return [
            [
                'id'   => 1,
                'name' => 'user1',
            ],
            [
                'id'   => 2,
                'name' => 'user2',
            ],
            [
                'id'   => 3,
                'name' => 'user3',
            ],
            [
                'id'   => 4,
                'name' => 'user4',
            ],
        ];
    }
}
