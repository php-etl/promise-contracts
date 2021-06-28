<?php

namespace Kiboko\Contract\Promise;

/**
 * @api
 * @template ExpectationType
 * @template ExceptionType of \Throwable
 * @extends PromiseInterface<ExpectationType, ExceptionType>
 */
interface ResolvablePromiseInterface extends PromiseInterface
{
    /** @param ExpectationType $value */
    public function resolve($value): void;
    /** @param ExceptionType $failure */
    public function fail(\Throwable $failure): void;
}
