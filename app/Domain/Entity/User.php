<?php
declare(strict_types=1);

namespace App\Domain\Entity;

use Cake\Chronos\Date;
use JMS\Serializer\Annotation as Serializer;
use PHPMentors\DomainKata\Entity\EntityInterface;

/**
 * Class User
 */
class User implements EntityInterface
{
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("user_id")
     */
    private $identifier;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $name;

    /**
     * @Serializer\Accessor("getUserCreatedAt")
     */
    private $createdAt;

    /**
     * User constructor.
     *
     * @param int    $identifier
     * @param string $name
     */
    public function __construct(int $identifier, string $name)
    {
        $this->identifier = $identifier;
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getIdentifier(): int
    {
        return $this->identifier;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getUserCreatedAt(): int
    {
        $today = new Date();
        return $today->getTimestamp();
    }
}
