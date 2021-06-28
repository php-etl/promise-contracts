<?php

namespace Kiboko\Contract\Promise;

/**
 * @api
 * @template ExpectationType
 * @template ExceptionType of \Throwable
 */
interface DeferredInterface
{
    /**
     * @param callable(ExpectationType): (ExpectationType|PromiseInterface<mixed, \Throwable>) $callback
     *
     * @return DeferredInterface<ExpectationType, ExceptionType>
     */
    public function then(callable $callback): DeferredInterface;
    /**
     * @param callable(ExceptionType): (\Throwable|PromiseInterface<mixed, \Throwable>) $callback
     *
     * @return DeferredInterface<ExpectationType, ExceptionType>
     */
    public function failure(callable $callback): DeferredInterface;
}
