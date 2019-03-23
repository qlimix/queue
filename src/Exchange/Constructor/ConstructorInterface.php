<?php declare(strict_types=1);

namespace Qlimix\Queue\Exchange\Constructor;

use Qlimix\Queue\Exchange\Constructor\Exception\ConstructorException;

interface ConstructorInterface
{
    /**
     * @throws ConstructorException
     */
    public function construct(string $exchange): void;
}