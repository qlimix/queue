<?php declare(strict_types=1);

namespace Qlimix\Queue\Queue;

use Qlimix\Queue\Job\Job;

final class QueueMessage
{
    /** @var string */
    private $id;

    /** @var Job */
    private $job;

    /**
     * @param string $id
     * @param Job $job
     */
    public function __construct(string $id, Job $job)
    {
        $this->id = $id;
        $this->job = $job;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return Job
     */
    public function getJob(): Job
    {
        return $this->job;
    }
}
