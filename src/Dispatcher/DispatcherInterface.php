<?php declare(strict_types=1);

namespace Qlimix\Queue\Dispatcher;

use Qlimix\Queue\Dispatcher\Exception\DispatchException;
use Qlimix\Queue\Queue\QueueMessage;

interface DispatcherInterface
{
    /**
     * @throws DispatchException
     */
    public function dispatch(QueueMessage $message): void;
}
