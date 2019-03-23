<?php declare(strict_types=1);

namespace Qlimix\Queue\Queue\Construction;

use Qlimix\Queue\Queue\Construction\Exception\DestructorException;

interface DestructorInterface
{
    /**
     * @throws DestructorException
     */
    public function destruct(string $queue): void;
}
