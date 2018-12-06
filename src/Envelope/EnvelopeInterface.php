<?php declare(strict_types=1);

namespace Qlimix\Queue\Envelope;

use Qlimix\Serializable\SerializableInterface;

interface EnvelopeInterface
{
    /**
     * The route the envelope takes to be
     *  received by the recipient(s)
     *
     * e.g. Send it on route 'HelloWorld' which could be
     *  anything the producer could route to.
     *
     * @return string
     */
    public function getRoute(): string;

    /**
     * @return SerializableInterface
     */
    public function getMessage(): SerializableInterface;
}
