<?php

namespace App\Tests;

use App\Tests\Stub\StubQuery;
use App\Tests\Stub\StubQueryHandler;
use Ddenysov\SymfonyBus\Query\QueryBus;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Messenger\Handler\HandlersLocator;
use Symfony\Component\Messenger\MessageBus;
use Symfony\Component\Messenger\Middleware\HandleMessageMiddleware;

class QueryTest extends TestCase
{
    public function testQuery()
    {
        $bus = new MessageBus([
            new HandleMessageMiddleware(new HandlersLocator([
                StubQuery::class => [new StubQueryHandler()],
            ])),
        ]);

        $queryBus = new QueryBus($bus);
        $result = $queryBus->query(new StubQuery());
        $this->assertEquals('ok', $result['status']);
    }
}