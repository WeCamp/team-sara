<?php
declare(strict_types=1);

namespace Bacon\Repository;

use Bacon\Entity\Repository;
use Bacon\Entity\User;
use GraphAware\Neo4j\OGM\EntityManager;

final class Neo4jUserRepository implements UserRepository
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param int $userId
     * @return User
     */
    public function get(int $userId): User
    {
        $user = $this->entityManager->find(User::class, $userId);

        if (!$user) {
            throw new UserNotFoundInGraphException();
        }

        return $user;

    }

    /**
     * @return User[]
     */
    public function findAll(): array
    {
        return $this->entityManager->getRepository(User::class)->findAll();
    }

    /**
     *
     *
     * @param $key
     * @param $value
     * @return null|object
     */
    public function findOneBy($key, $value)
    {
        return $this->entityManager->getRepository(User::class)->findOneBy($key, $value);
    }

    /**
     * @param User $user
     */
    public function persist(User $user)
    {
        $this->entityManager->persist($user);
    }

    /**
     * Store
     */
    public function flush()
    {
        $this->entityManager->flush();
    }
}
