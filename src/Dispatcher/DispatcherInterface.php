<?php declare(strict_types=1);

namespace Qlimix\Queue\Dispatcher;

use Qlimix\Queue\Dispatcher\Exception\DispatchException;

interface DispatcherInterface
{
    /**
     * @param mixed $message
     *
     * @throws DispatchException
     */
    public function dispatch($message): void;
}
