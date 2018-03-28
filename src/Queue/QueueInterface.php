<?php declare(strict_types=1);

namespace Qlimix\Queue\Queue;

use Qlimix\Queue\Queue\Exception\InvalidQueueMessageException;
use Qlimix\Queue\Queue\Exception\QueueEmptyException;
use Qlimix\Queue\Queue\Exception\QueueException;

interface QueueInterface
{
    /**
     * @return QueueMessage
     *
     * @throws QueueEmptyException
     * @throws InvalidQueueMessageException
     * @throws QueueException
     */
    public function getMessage(): QueueMessage;

    /**
     * @param QueueMessage $queueMessage
     *
     * @throws QueueException
     */
    public function acknowledge(QueueMessage $queueMessage): void;
}
