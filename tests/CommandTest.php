<?php

namespace App\Tests;

use App\Tests\Stub\StubCommand;
use App\Tests\Stub\StubCommandHandler;
use App\Tests\Stub\StubQuery;
use Ddenysov\SymfonyBus\Command\CommandBus;
use Ddenysov\SymfonyBus\Query\QueryBus;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Messenger\Handler\HandlersLocator;
use Symfony\Component\Messenger\MessageBus;
use Symfony\Component\Messenger\Middleware\HandleMessageMiddleware;

class CommandTest extends TestCase
{
    public function testCommand()
    {
        $bus = new MessageBus([
            new HandleMessageMiddleware(new HandlersLocator([
                StubCommand::class => [new StubCommandHandler()],
            ])),
        ]);

        $commandBus = new CommandBus($bus);
        $commandBus->dispatch(new StubCommand());
        $this->assertTrue(true);
    }
}