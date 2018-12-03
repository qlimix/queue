<?php declare(strict_types=1);

namespace Qlimix\Queue\Exchange;

use Qlimix\Queue\Exchange\Exception\ExchangeException;
use Qlimix\Queue\Exchange\Exception\TimeOutException;
use Qlimix\Queue\Exchange\Exception\UnacknowledgedException;

interface ExchangeInterface
{
    /**
     * @param string $route
     * @param string $message
     *
     * @throws ExchangeException
     * @throws UnacknowledgedException
     * @throws TimeOutException
     */
    public function exchange(string $route, string $message): void;
}
