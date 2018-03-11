<?php declare(strict_types=1);

namespace Qlimix\Queue\Exchange;

final class Exchange
{
    private const REGEX = '^[A-Za-z]{1,}[A-Za-z0-9\.\_\-]{1,}[^\.\_\-]$';

    /** @var string */
    private $exchange;

    /**
     * @param string $exchange
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(string $exchange)
    {
        $this->setExchange($exchange);
    }

    /**
     * @param string $exchange
     *
     * @throws \InvalidArgumentException
     */
    private function setExchange(string $exchange): void
    {
        if (preg_match('~'.self::REGEX.'~', $exchange)) {
            throw new \InvalidArgumentException('Invalid exchange name');
        }

        $this->exchange = $exchange;
    }

    /**
     * @return string
     */
    public function getExchange(): string
    {
        return $this->exchange;
    }
}
