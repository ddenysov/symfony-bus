<?php

namespace Ddenysov\SymfonyBus\Command;

interface CommandBusInterface
{
    /**
     * @param Command $command
     * @return void
     */
    public function dispatch(Command $command): void;
}