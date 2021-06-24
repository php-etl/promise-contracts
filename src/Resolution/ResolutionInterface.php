<?php declare(strict_types=1);

namespace Kiboko\Contract\Promise\Resolution;

interface ResolutionInterface
{
    public function apply(callable $callback): void;
}
