<?php declare(strict_types=1);

namespace Kiboko\Contract\Promise\Resolution;

/**
 * @template Type
 */
interface ResolvedInterface extends ResolutionInterface
{
    /** @param callable(Type): Type $callback */
    public function apply(callable $callback): void;
}
