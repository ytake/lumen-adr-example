<?php
declare(strict_types=1);

namespace App\Domain\Specification;

use App\Domain\Entity\User;
use App\Domain\Entity\UserCriteria;
use App\Domain\Repository\UserRepositoryInterface;
use PHPMentors\DomainKata\Entity\EntityInterface;
use PHPMentors\DomainKata\Entity\CriteriaInterface;
use PHPMentors\DomainKata\Specification\SpecificationInterface;
use PHPMentors\DomainKata\Repository\Operation\CriteriaBuilderInterface;

/**
 * Class ActiveUserSpecification
 */
class ActiveUserSpecification implements SpecificationInterface, CriteriaBuilderInterface
{
    /** @var UserCriteria */
    protected $criteria;

    /**
     * @param EntityInterface|User $entity
     *
     * @return bool
     */
    public function isSatisfiedBy(EntityInterface $entity)
    {
        if (is_numeric($entity->getIdentifier())) {
            return true;
        }

        return false;
    }

    /**
     * @param UserRepositoryInterface $repository
     *
     * @return array
     */
    public function satisfyingSpecification(UserRepositoryInterface $repository): array
    {
        $entity = [];
        $result = $repository->queryAll($this->criteria->all());
        foreach ($result as $user) {
            if ($this->isSatisfiedBy($user)) {
                $entity[] = $user;
            }
        }

        return $entity;
    }

    /**
     * {@inheritdoc}
     */
    public function build(): CriteriaInterface
    {
        return $this->criteria;
    }

    /**
     * @param UserCriteria $criteria
     */
    public function criteria(UserCriteria $criteria)
    {
        $this->criteria = $criteria;
    }
}
