<?php

namespace Kiboko\Contract\Promise;

/**
 * @api
 */
interface DeferredInterface
{
    public function then(callable $callback): DeferredInterface;
    public function failure(callable $callback): DeferredInterface;
}
