<?php

declare(strict_types=1);

namespace Yiisoft\Arrays\Modifier;

/**
 * Interface ModifierInterface
 */
interface ModifierInterface
{
    /**
     * @param array $data
     * @param int|string $key
     *
     * @return array
     */
    public function apply(array $data, $key): array;
}
