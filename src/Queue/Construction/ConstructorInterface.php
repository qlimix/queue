<?php declare(strict_types=1);

namespace Qlimix\Queue\Queue\Constructor;

use Qlimix\Queue\Queue\Construction\Exception\ConstructorException;

interface ConstructorInterface
{
    /**
     * @throws ConstructorException
     */
    public function construct(string $queue): void;
}
