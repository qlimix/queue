<?php declare(strict_types=1);

namespace Qlimix\Queue\Producer;

use Qlimix\Queue\Exchange\BatchExchangeInterface;
use Qlimix\Queue\Producer\Exception\ProducerException;

final class BatchExchangeProducer implements BatchProducerInterface
{
    /** @var BatchExchangeInterface */
    private $exchange;

    /**
     * @param BatchExchangeInterface $exchange
     */
    public function __construct(BatchExchangeInterface $exchange)
    {
        $this->exchange = $exchange;
    }

    /**
     * @inheritDoc
     */
    public function publish(array $envelopes): void
    {
        try {
            $this->exchange->exchange($envelopes);
        } catch (\Throwable $exception) {
            throw new ProducerException('Failed to publish message', 0, $exception);
        }
    }
}
