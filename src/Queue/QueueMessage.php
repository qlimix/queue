<?php declare(strict_types=1);

namespace Qlimix\Queue\Queue;

final class QueueMessage
{
    /** @var string */
    private $id;

    /** @var string */
    private $message;

    /**
     * @param string $id
     * @param string $job
     */
    public function __construct(string $id, string $job)
    {
        $this->id = $id;
        $this->message = $job;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getString(): string
    {
        return $this->message;
    }
}
