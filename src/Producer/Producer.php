<?php declare(strict_types=1);

namespace Qlimix\Queue\Producer;

use Qlimix\Queue\Envelope\EnvelopeInterface;
use Qlimix\Queue\Exchange\ExchangeInterface;
use Qlimix\Queue\Producer\Exception\ProducerException;

final class Producer implements ProducerInterface
{
    /** @var ExchangeInterface */
    private $exchange;

    /**
     * @param ExchangeInterface $exchange
     */
    public function __construct(ExchangeInterface $exchange)
    {
        $this->exchange = $exchange;
    }

    /**
     * @inheritDoc
     */
    public function publish(EnvelopeInterface $envelope): void
    {
        try {
            $this->exchange->exchange($envelope);
        } catch (\Throwable $exception) {
            throw new ProducerException('Failed to publish message', 0, $exception);
        }
    }
}
