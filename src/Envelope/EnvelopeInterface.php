<?php declare(strict_types=1);

namespace Qlimix\Queue\Envelope;

use Qlimix\Queue\Message\MessageInterface;

interface EnvelopeInterface
{
    /**
     * The unique identifier of the exchange
     *
     * @return string
     */
    public function getExchangeName(): string;

    /**
     * @return MessageInterface
     */
    public function getMessage(): MessageInterface;
}
