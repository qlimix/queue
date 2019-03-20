<?php declare(strict_types=1);

namespace Qlimix\Queue\Queue;

interface ConstructorInterface
{
    public function construct(string $queue): void;
}
