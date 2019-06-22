<?php declare(strict_types=1);

namespace Qlimix\Queue\Consumer;

use Qlimix\Queue\Consumer\Exception\QueueConsumerException;
use Qlimix\Queue\Queue\QueueMessage;

interface QueueConsumerInterface
{
    /**
     * @return QueueMessage[]
     *
     * @throws QueueConsumerException
     */
    public function consume(): array;

    /**
     * @throws QueueConsumerException
     */
    public function acknowledge(QueueMessage $message): void;
}
