<?php declare(strict_types=1);

namespace Qlimix\Queue\Message;

interface MessageInterface
{
    /**
     * The unique identifier of the message
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Serialize object into an array
     *
     * @return array
     */
    public function serialize(): array;

    /**
     * Create object from an serialized array
     *
     * @param array $data
     *
     * @return MessageInterface
     */
    public static function deserialize(array $data): MessageInterface;
}
