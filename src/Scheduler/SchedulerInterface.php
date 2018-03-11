<?php declare(strict_types=1);

namespace Qlimix\Queue\Scheduler;

use Qlimix\Queue\Envelope\EnvelopeInterface;
use Qlimix\Queue\Scheduler\Exception\SchedulerException;

interface SchedulerInterface
{
    /**
     * @param EnvelopeInterface $messageBox
     * @param \DateTimeImmutable $scheduledAt
     *
     * @throws SchedulerException
     */
    public function schedule(EnvelopeInterface $messageBox, \DateTimeImmutable $scheduledAt): void;
}
