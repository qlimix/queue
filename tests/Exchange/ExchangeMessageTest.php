<?php declare(strict_types=1);

namespace Qlimix\Tests\Queue\Exchange;

use PHPUnit\Framework\TestCase;
use Qlimix\Queue\Exchange\ExchangeMessage;

final class ExchangeMessageTest extends TestCase
{
    public function testShouldDto(): void
    {
        $route = 'foo';
        $message = 'bar';

        $exchangeMessage = new ExchangeMessage($route, $message);

        $this->assertSame($route, $exchangeMessage->getRoute());
        $this->assertSame($message, $exchangeMessage->getMessage());
    }
}
