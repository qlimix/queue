<?php declare(strict_types=1);

namespace Qlimix\Queue\Processor;

use Qlimix\Queue\Processor\Exception\ProcessorException;

interface ProcessorInterface
{
    /**
     * @throws ProcessorException
     */
    public function process(): void;
}
