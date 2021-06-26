<?php declare(strict_types=1);

namespace Kiboko\Contract\Promise\Resolution;

/**
 * @extends ResolvedInterface<\Throwable>
 */
interface FailureInterface extends ResolutionInterface, ResolvedInterface
{
}
