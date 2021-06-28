<?php

namespace Kiboko\Contract\Promise;

/**
 * @api
 * @template ExpectationType
 * @template ExceptionType of \Throwable
 * @extends DeferredInterface<ExpectationType, ExceptionType>
 */
interface PromiseInterface extends DeferredInterface
{
    /**
     * @param callable(ExpectationType): void $callback
     *
     * @return PromiseInterface<ExpectationType, ExceptionType>
     */
    public function then(callable $callback): PromiseInterface;
    /**
     * @param callable(ExceptionType): void $callback
     *
     * @return PromiseInterface<ExpectationType, ExceptionType>
     */
    public function failure(callable $callback): PromiseInterface;
    /** @return DeferredInterface<ExpectationType, ExceptionType> */
    public function defer(): DeferredInterface;
    public function isResolved(): bool;
    public function isSuccess(): bool;
    public function isFailure(): bool;
    /** @return Resolution\ResolutionInterface|Resolution\ResolvedInterface<ExpectationType>|Resolution\ResolvedInterface<ExceptionType> */
    public function resolution(): Resolution\ResolutionInterface|Resolution\ResolvedInterface;
}
