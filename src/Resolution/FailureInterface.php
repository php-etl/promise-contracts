<?php declare(strict_types=1);

namespace Kiboko\Contract\Promise\Resolution;

/**
 * @template Type of \Throwable
 * @extends ResolvedInterface<Type>
 */
interface FailureInterface extends ResolutionInterface, ResolvedInterface
{
    /** @return Type */
    public function error(): \Throwable;
}
