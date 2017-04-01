<?php
declare(strict_types=1);

namespace App\Domain\Repository;

use App\Domain\Specification\ActiveUserSpecification;

/**
 * Interface UserRepositoryInterface
 */
interface UserRepositoryInterface
{
    /**
     * @param ActiveUserSpecification $specification
     *
     * @return array
     */
    public function findAll(ActiveUserSpecification $specification): array;

    /**
     * @param array $attributes
     *
     * @return \App\Domain\Entity\User[]|array
     */
    public function queryAll(array $attributes): array;
}
