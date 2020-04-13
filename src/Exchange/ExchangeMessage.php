<?php declare(strict_types=1);

namespace Qlimix\Queue\Exchange;

final class ExchangeMessage
{
    private string $route;

    private string $message;

    public function __construct(string $route, string $message)
    {
        $this->route = $route;
        $this->message = $message;
    }

    public function getRoute(): string
    {
        return $this->route;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
