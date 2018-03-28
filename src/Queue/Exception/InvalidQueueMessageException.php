<?php declare(strict_types=1);

namespace Qlimix\Queue\Queue\Exception;

final class InvalidQueueMessageException extends \Exception
{
    /** @var string */
    private $messageId;

    /** @var string */
    private $queueMessage;

    /**
     * @param string $message
     * @param \Exception $previous
     * @param string $messageId
     * @param string $queueMessage
     */
    public function __construct(string $message, \Exception $previous, string $messageId, string $queueMessage)
    {
        parent::__construct($message, 0, $previous);
        $this->messageId = $messageId;
        $this->queueMessage = $queueMessage;
    }

    /**
     * @return string
     */
    public function getMessageId(): string
    {
        return $this->messageId;
    }

    /**
     * @return string
     */
    public function getQueueMessage(): string
    {
        return $this->queueMessage;
    }
}
