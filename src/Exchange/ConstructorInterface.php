<?php declare(strict_types=1);

namespace Qlimix\Queue\Exchange;

interface ConstructorInterface
{
    public function construct(string $exchange): void;
}
