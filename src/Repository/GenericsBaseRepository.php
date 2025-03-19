<?php

declare(strict_types=1);

namespace Alexprishmont\PhpGenericsWorkshop\Repository;

/**
 * @template T
 */
abstract class GenericsBaseRepository
{
    /**
     * @var T[]
     */
    protected array $data = [];

    /**
     * @return T[]
     */
    public function all(): array
    {
        return $this->data;
    }

    /**
     * @return T|null
     */
    public function find(int $id)
    {
        return $this->data[$id] ?? null;
    }

    /**
     * @param T $item
     */
    public function save($item): void
    {
        $this->data[] = $item;
    }
}