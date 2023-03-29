<?php

declare(strict_types=1);

namespace WebServCo\DataTransfer\Contract;

interface DataTransferHydratorInterface
{
    /**
     * phpcs:disable SlevomatCodingStandard.TypeHints.DisallowMixedTypeHint.DisallowedMixedTypeHint
     * @param array<mixed> $data
     * phpcs: enable
     */
    public function hydrate(array $data): DataTransferInterface;
}
