<?php

declare(strict_types=1);

namespace WebServCo\DataTransfer\DataTransferObject\KeyValue;

use WebServCo\DataTransfer\Contract\DataTransferInterface;

final class StringString implements DataTransferInterface
{
    public function __construct(public readonly string $key, public readonly string $value)
    {
    }
}
