<?php

namespace App\Tests\Stub;

use Ddenysov\SymfonyBus\Query\QueryHandlerInterface;

class StubQueryHandler implements QueryHandlerInterface
{
    public function __invoke(StubQuery $query)
    {
        return [
            'status' => 'ok'
        ];
    }
}