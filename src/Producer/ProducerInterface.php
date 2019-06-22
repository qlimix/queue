<?php declare(strict_types=1);

namespace Qlimix\Queue\Producer;

use Qlimix\Queue\Envelope\EnvelopeInterface;
use Qlimix\Queue\Producer\Exception\ProducerException;
use Qlimix\Queue\Producer\Exception\UnroutableEnvelopeException;

interface ProducerInterface
{
    /**
     * @throws ProducerException
     * @throws UnroutableEnvelopeException
     */
    public function publish(EnvelopeInterface $envelope): void;
}
