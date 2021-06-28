<?php declare(strict_types=1);

namespace Kiboko\Contract\Promise\Resolution;

use Kiboko\Contract\Promise\DeferredInterface;

/**
 * @template Type
 */
interface ResolvedInterface extends ResolutionInterface
{
    /** @param callable(Type): (Type|DeferredInterface<mixed, \Throwable>) $callback */
    public function apply(callable $callback): void;
}
