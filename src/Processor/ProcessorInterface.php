<?php declare(strict_types=1);

namespace Qlimix\Queue\Processor;

use Qlimix\Queue\Queue\QueueMessage;

interface ProcessorInterface
{
    /**
     * @param QueueMessage $message
     */
    public function process(QueueMessage $message): void;
}
