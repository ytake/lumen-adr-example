<?php
declare(strict_types=1);

namespace App\Domain\Usecase;

use App\Domain\Repository\UserRepositoryInterface;
use PHPMentors\DomainKata\Entity\EntityInterface;
use PHPMentors\DomainKata\Usecase\UsecaseInterface;

/**
 * Class ActiveUserSearchUsecase
 */
class ActiveUserSearchUsecase implements UsecaseInterface
{
    /** @var UserRepositoryInterface */
    protected $repository;

    /**
     * ActiveUserSearchUsecase constructor.
     *
     * @param UserRepositoryInterface $repository
     */
    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param EntityInterface $entity
     *
     * @return array
     */
    public function run(EntityInterface $entity): array
    {
        return $this->repository->findAll($entity);
    }
}
