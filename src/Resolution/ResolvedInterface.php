<?php declare(strict_types=1);

namespace Kiboko\Contract\Promise\Resolution;

interface ResolvedInterface extends ResolutionInterface
{
    public function apply(callable $callback): void;
}
