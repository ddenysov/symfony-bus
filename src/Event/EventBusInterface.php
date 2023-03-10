<?php

namespace Ddenysov\SymfonyBus\Event;

interface EventBusInterface
{
    /**
     * @param Event $event
     * @return void
     */
    public function dispatch(Event $event): void;
}