<?php
declare(strict_types=1);

namespace App\Domain\Entity;

use PHPMentors\DomainKata\Entity\CriteriaInterface;

/**
 * Class UserCriteria
 */
abstract class UserCriteria implements CriteriaInterface
{
    /**
     * @return array
     */
    abstract public function all(): array;
}
