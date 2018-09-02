<?php declare(strict_types=1);

namespace Qlimix\Queue\Processor;

use Qlimix\Queue\Processor\Exception\ProcessorException;
use Qlimix\Queue\Queue\QueueMessage;

interface ProcessorInterface
{
    /**
     * @param QueueMessage $message
     *
     * @throws ProcessorException
     */
    public function process(QueueMessage $message): void;
}
