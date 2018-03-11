<?php declare(strict_types=1);

namespace Qlimix\Queue\Job;

use Qlimix\Queue\Message\MessageInterface;

final class Job
{
    /** @var string */
    private $id;

    /** @var MessageInterface */
    private $message;

    /** @var \DateTimeImmutable */
    private $addedAt;

    /**
     * @param string $id
     * @param MessageInterface $message
     * @param \DateTimeImmutable $addedAt
     */
    public function __construct(string $id, MessageInterface $message, \DateTimeImmutable $addedAt)
    {
        $this->id = $id;
        $this->message = $message;
        $this->addedAt = $addedAt;
    }

    /**
     * @return array
     */
    public function serialize(): array
    {
        return [
            'id' => $this->id,
            'message' => $this->message->serialize(),
            'addedAt' => $this->addedAt->format(DATE_ATOM)
        ];
    }

    /**
     * @param array $data
     *
     * @return Job
     */
    public static function deserialize(array $data): Job
    {
        return new self(
            $data['id'],
            MessageInterface::deserialize($data['message']),
            \DateTimeImmutable::createFromFormat(DATE_ATOM, $data['addedAt'])
        );
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return MessageInterface
     */
    public function getMessage(): MessageInterface
    {
        return $this->message;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getAddedAt(): \DateTimeImmutable
    {
        return $this->addedAt;
    }
}
