<?php declare(strict_types=1);

namespace Qlimix\Tests\Queue\Queue;

use PHPUnit\Framework\TestCase;
use Qlimix\Queue\Queue\QueueMessage;

final class QueueMessageTest extends TestCase
{
    public function testShouldDto(): void
    {
        $id = 'foo';
        $message = 'bar';

        $queueMessage = new QueueMessage($id, $message);

        $this->assertSame($id, $queueMessage->getId());
        $this->assertSame($message, $queueMessage->getMessage());
    }
}
