<?php declare(strict_types=1);

namespace Qlimix\Queue\Job;

use Qlimix\Serializable\SerializableInterface;

final class Job
{
    /** @var string */
    private $id;

    /** @var SerializableInterface */
    private $message;

    /** @var \DateTimeImmutable */
    private $addedAt;

    /**
     * @param string $id
     * @param SerializableInterface $message
     * @param \DateTimeImmutable $addedAt
     */
    public function __construct(string $id, SerializableInterface $message, \DateTimeImmutable $addedAt)
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
            SerializableInterface::deserialize($data['message']),
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
     * @return SerializableInterface
     */
    public function getMessage(): SerializableInterface
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
