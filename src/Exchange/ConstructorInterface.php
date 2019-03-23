<?php declare(strict_types=1);

namespace Qlimix\Queue\Exchange;

use Qlimix\Queue\Exchange\Exception\ConstructorException;

interface ConstructorInterface
{
    /**
     * @throws ConstructorException
     */
    public function construct(string $exchange): void;
}
