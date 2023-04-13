<?php

/**
 * This file is part of the Cervo package.
 *
 * Copyright (c) 2010-2023 Nevraxe inc. & Marc André Audet <maudet@nevraxe.com>.
 *
 * @package   Cervo
 * @author    Marc André Audet <maaudet@nevraxe.com>
 * @copyright 2010 - 2023 Nevraxe inc. & Marc André Audet
 * @license   See LICENSE.md  MIT
 * @link      https://github.com/Nevraxe/Cervo
 * @since     5.0.0
 */

declare(strict_types=1);

namespace Cervo\Config;

/**
 * Configuration manager for Cervo.
 *
 * @author Marc André Audet <maudet@nevraxe.com>
 */
class ArrayConfig extends BaseConfig
{
    /**
     * ArrayConfig constructor.
     *
     * @param array|null $values The array to use as configuration source.
     */
    public function __construct(?array $values = null)
    {
        if (is_array($values)) {
            $this->setFromArrayRecursive($values);
        }
    }
}
