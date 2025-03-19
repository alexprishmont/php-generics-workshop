<?php

require __DIR__ . '/../vendor/autoload.php';

use Alexprishmont\PhpGenericsWorkshop\Entity\User;
use Alexprishmont\PhpGenericsWorkshop\Repository\UserRepository;

/**
 * Repository which uses Entity interface over generics.
 */
$repo = new UserRepository();

$repo->save(new User(
    id: 1,
    name: 'John Doe',
    email: 'john.doe@example.com',
    password: '123456',
));

$result = $repo->all();

foreach ($result as $user) {
    echo $user->name . PHP_EOL; // phpstan cries.
}