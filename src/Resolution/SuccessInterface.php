<?php declare(strict_types=1);

namespace Kiboko\Contract\Promise\Resolution;

/**
 * @template Type
 * @extends ResolvedInterface<Type>
 */
interface SuccessInterface extends ResolutionInterface, ResolvedInterface
{
    /** @return Type */
    public function value();
}
