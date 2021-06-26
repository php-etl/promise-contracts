<?php

namespace Kiboko\Contract\Promise;

/**
 * @api
 * @template Type
 * @extends PromiseInterface<Type>
 */
interface ResolvablePromiseInterface extends PromiseInterface
{
    /** @param Type $value */
    public function resolve($value): void;
    public function fail(\Throwable $failure): void;
}
