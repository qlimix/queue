<?php declare(strict_types=1);

namespace Qlimix\Queue\Consumer;

use Qlimix\Queue\Consumer\Exception\ConsumerException;

interface QueueConsumerInterface
{
    /**
     * @throws ConsumerException
     */
    public function consume(): void;
}
