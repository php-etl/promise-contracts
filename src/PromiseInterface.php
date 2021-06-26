<?php

namespace Kiboko\Contract\Promise;

/**
 * @api
 * @template Type
 */
interface PromiseInterface
{
    /** @return PromiseInterface<Type> */
    public function then(callable $callback): PromiseInterface;
    /** @return PromiseInterface<Type> */
    public function failure(callable $callback): PromiseInterface;
    /** @return DeferredInterface<Type> */
    public function defer(): DeferredInterface;
    public function isResolved(): bool;
    public function isSuccess(): bool;
    public function isFailure(): bool;
    /** @return Resolution\ResolutionInterface|Resolution\ResolvedInterface<Type> */
    public function resolution(): Resolution\ResolutionInterface|Resolution\ResolvedInterface;
}
