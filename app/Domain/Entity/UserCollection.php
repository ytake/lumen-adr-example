<?php

namespace App\Domain\Entity;

/**
 * Class UserCollection
 */
class UserCollection
{
    /** @var array */
    private $users;

    /**
     * UserCollection constructor.
     *
     * @param array $users
     */
    public function __construct(array $users)
    {
        $this->users = $users;
    }

    /**
     * @return \App\Domain\Entity\User[]
     */
    public function toArray(): array
    {
        $entities = [];
        foreach ($this->users as $user) {
            $entities[] = new User($user['id'], $user['name']);
        }

        return $entities;
    }

    /**
     * @return \Generator
     */
    public function toGenerator(): \Generator
    {
        foreach ($this->users as $user) {
            yield new User($user['id'], $user['name']);
        }
    }
}
