<?php

namespace App\Tests;

use App\Tests\Stub\StubCommand;
use App\Tests\Stub\StubCommandHandler;
use App\Tests\Stub\StubEvent;
use App\Tests\Stub\StubEventHandler;
use App\Tests\Stub\StubQuery;
use Ddenysov\SymfonyBus\Command\CommandBus;
use Ddenysov\SymfonyBus\Event\EventBus;
use Ddenysov\SymfonyBus\Query\QueryBus;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Messenger\Handler\HandlersLocator;
use Symfony\Component\Messenger\MessageBus;
use Symfony\Component\Messenger\Middleware\HandleMessageMiddleware;

class EventTest extends TestCase
{
    public function testEvent()
    {
        $bus = new MessageBus([
            new HandleMessageMiddleware(new HandlersLocator([
                StubEvent::class => [new StubEventHandler()],
            ])),
        ]);

        $eventBus = new EventBus($bus);
        $eventBus->dispatch(new StubEvent());
        $this->assertTrue(true);
    }
}