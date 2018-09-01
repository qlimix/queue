<?php declare(strict_types=1);

namespace Qlimix\Queue\Consumer;

use Qlimix\Queue\Consumer\Exception\ConsumerException;
use Qlimix\Queue\Queue\QueueMessage;

interface QueueConsumerInterface
{
    /**
     * @param int $amount
     *
     * @return QueueMessage[]
     *
     * @throws ConsumerException
     */
    public function consume(int $amount): array;
}
