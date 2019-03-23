<?php declare(strict_types=1);

namespace Qlimix\Queue\Binding;

use Qlimix\Queue\Binding\Exception\BindingException;

interface BindingInterface
{
    /**
     * @throws BindingException
     */
    public function bind(string $exchange, string $queue): void;
}
