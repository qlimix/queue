<?php declare(strict_types=1);

namespace Qlimix\Queue\Queue;

use Qlimix\Queue\Queue\Exception\ConstructorException;

interface ConstructorInterface
{
    /**
     * @throws ConstructorException
     */
    public function construct(string $queue): void;
}
