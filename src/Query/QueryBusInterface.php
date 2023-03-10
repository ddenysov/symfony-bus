<?php

namespace Ddenysov\SymfonyBus\Query;

interface QueryBusInterface
{
    /**
     * @param Query $query
     * @return mixed
     */
    public function query(Query $query): mixed;
}