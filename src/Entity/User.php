<?php

declare(strict_types=1);

namespace Alexprishmont\PhpGenericsWorkshop\Entity;

class User implements Entity
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly string $email,
        public readonly string $password,
    ) {
    }
}