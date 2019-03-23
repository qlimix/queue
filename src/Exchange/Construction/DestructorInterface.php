<?php declare(strict_types=1);

namespace Qlimix\Queue\Exchange\Construction;

use Qlimix\Queue\Exchange\Construction\Exception\DestructorException;

interface DestructorInterface
{
    /**
     * @throws DestructorException
     */
    public function destruct(string $exchange): void;
}
