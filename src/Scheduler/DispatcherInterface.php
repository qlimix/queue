<?php declare(strict_types=1);

namespace Qlimix\Queue\Scheduler;

use Qlimix\Queue\Scheduler\Exception\DispatchException;

interface DispatcherInterface
{
    /**
     * @throws DispatchException
     */
    public function dispatch(): void;
}
