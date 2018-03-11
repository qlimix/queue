<?php declare(strict_types=1);

namespace Qlimix\Queue\Exchange;

use Qlimix\Queue\Envelope\EnvelopeInterface;
use Qlimix\Queue\Exchange\Exception\ExchangeException;
use Qlimix\Queue\Exchange\Exception\TimeOutException;
use Qlimix\Queue\Exchange\Exception\UnacknowledgedException;

interface ExchangeInterface
{
    /**
     * @param EnvelopeInterface $envelope
     *
     * @throws ExchangeException
     * @throws UnacknowledgedException
     * @throws TimeOutException
     */
    public function exchange(EnvelopeInterface $envelope): void;
}
