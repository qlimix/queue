<?php declare(strict_types=1);

namespace Qlimix\Queue\Binding;

interface BindingInterface
{
    public function bind(string $exchange, string $queue): void;
}
