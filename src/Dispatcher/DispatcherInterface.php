<?php declare(strict_types=1);

namespace Qlimix\Queue\Dispatcher;

use Qlimix\Queue\Dispatcher\Exception\DispatchException;

interface DispatcherInterface
{
    /**
     * @throws DispatchException
     */
    public function dispatch(string $message): void;
}
