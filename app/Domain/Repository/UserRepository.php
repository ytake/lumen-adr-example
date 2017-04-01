<?php
declare(strict_types=1);

namespace App\Domain\Repository;

use App\Domain\Entity\UserCollection;
use App\Domain\Specification\ActiveUserSpecification;

/**
 * Class UserRepository
 */
class UserRepository implements UserRepositoryInterface
{
    /**
     * @param ActiveUserSpecification $specification
     *
     * @return \Generator
     */
    public function findAll(ActiveUserSpecification $specification): \Generator
    {
        return $specification->satisfyingSpecification($this);
    }

    /**
     * @param array $attributes
     *
     * @return \App\Domain\Entity\User[]|array
     */
    public function queryAll(array $attributes): array
    {
        return (new UserCollection($attributes))->toArray();
    }
}
