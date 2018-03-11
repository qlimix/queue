<?php declare(strict_types=1);

namespace Qlimix\Queue\Producer;

use Qlimix\Queue\Envelope\EnvelopeInterface;
use Qlimix\Queue\Producer\Exception\ProducerException;

interface ProducerInterface
{
    /**
     * @param EnvelopeInterface $envelope
     *
     * @throws ProducerException
     */
    public function publish(EnvelopeInterface $envelope): void;
}
