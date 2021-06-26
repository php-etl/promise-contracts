<?php

namespace Kiboko\Contract\Promise;

/**
 * @api
 * @template Type
 */
interface DeferredInterface
{
    /** @return DeferredInterface<Type> */
    public function then(callable $callback): DeferredInterface;
    /** @return DeferredInterface<Type> */
    public function failure(callable $callback): DeferredInterface;
}
