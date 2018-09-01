<?php declare(strict_types=1);

namespace Qlimix\Queue\Consumer;

use Qlimix\Queue\Consumer\Exception\QueueConsumerException;
use Qlimix\Queue\Queue\QueueMessage;

interface QueueConsumerInterface
{
    /**
     * @param int $amount
     *
     * @return QueueMessage[]
     *
     * @throws QueueConsumerException
     */
    public function consume(int $amount): array;

    /**
     * @param QueueMessage $message
     *
     * @throws QueueConsumerException
     */
    public function acknowledge(QueueMessage $message): void;
}
