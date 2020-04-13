<?php declare(strict_types=1);

namespace Qlimix\Tests\Queue\Queue;

use PHPUnit\Framework\TestCase;
use Qlimix\Queue\Exchange\ExchangeMessage;

final class QueueMessageTest extends TestCase
{
    public function testShouldDto(): void
    {
        $route = 'foo';
        $message = 'bar';

        $queueMessage = new ExchangeMessage($route, $message);

        $this->assertSame($route, $queueMessage->getRoute());
        $this->assertSame($message, $queueMessage->getMessage());
    }
}
