<?php declare(strict_types=1);

namespace Qlimix\Queue\Dispatcher;

interface DispatcherInterface
{
    /**
     * @param mixed $message
     */
    public function dispatch($message): void;
}
