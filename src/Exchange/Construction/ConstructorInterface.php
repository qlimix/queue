<?php declare(strict_types=1);

namespace Qlimix\Queue\Exchange\Construction;

use Qlimix\Queue\Exchange\Construction\Exception\ConstructorException;

interface ConstructorInterface
{
    /**
     * @throws ConstructorException
     */
    public function construct(string $exchange): void;
}
