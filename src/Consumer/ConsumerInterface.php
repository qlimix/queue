<?php declare(strict_types=1);

namespace Qlimix\Queue\Consumer;

use Qlimix\Queue\Consumer\Exception\ConsumerException;
use Qlimix\Queue\Queue\QueueMessage;

interface ConsumerInterface
{
    /**
     * @return QueueMessage[]
     *
     * @throws ConsumerException
     */
    public function consume(): array;

    /**
     * @throws ConsumerException
     */
    public function acknowledge(QueueMessage $message): void;
}
