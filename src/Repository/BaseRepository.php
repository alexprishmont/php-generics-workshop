<?php

declare(strict_types=1);

namespace Alexprishmont\PhpGenericsWorkshop\Repository;

use Alexprishmont\PhpGenericsWorkshop\Entity\Entity;

abstract class BaseRepository
{
    /**
     * @var Entity[]
     */
    protected array $data = [];

    /**
     * @return Entity[]
     */
    public function all(): array
    {
        return $this->data;
    }

    public function find(int $id): ?Entity
    {
        return $this->data[$id] ?? null;
    }

    public function save(Entity $item): void
    {
        $this->data[] = $item;
    }
}