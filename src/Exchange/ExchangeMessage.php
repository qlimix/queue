<?php declare(strict_types=1);

namespace Qlimix\Queue\Exchange;

final class ExchangeMessage
{
    /** @var string */
    private $route;

    /** @var string */
    private $message;

    /**
     * @param string $route
     * @param string $message
     */
    public function __construct(string $route, string $message)
    {
        $this->route = $route;
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getRoute(): string
    {
        return $this->route;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
