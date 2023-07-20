<?php

declare(strict_types=1);

namespace WebServCo\DataTransfer\DataTransferObject\KeyValue;

use WebServCo\DataTransfer\Contract\DataTransferInterface;

final class StringString implements DataTransferInterface
{
    /**
     * @readonly
     */
    public string $key;
    /**
     * @readonly
     */
    public string $value;
    public function __construct(string $key, string $value)
    {
        $this->key = $key;
        $this->value = $value;
    }
}
