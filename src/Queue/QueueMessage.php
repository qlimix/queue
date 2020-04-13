<?php declare(strict_types=1);

namespace Qlimix\Queue\Queue;

final class QueueMessage
{
    private string $id;

    private string $message;

    public function __construct(string $id, string $message)
    {
        $this->id = $id;
        $this->message = $message;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
