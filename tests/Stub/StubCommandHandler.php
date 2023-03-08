<?php

namespace App\Tests\Stub;

use Ddenysov\SymfonyBus\Command\Command;
use Ddenysov\SymfonyBus\Command\CommandHandlerInterface;

class StubCommandHandler implements CommandHandlerInterface
{
    public function __invoke(Command $command)
    {

    }
}