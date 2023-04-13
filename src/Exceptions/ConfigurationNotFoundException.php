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

namespace Cervo\Exceptions;

use RuntimeException;
use Throwable;


class ConfigurationNotFoundException extends RuntimeException
{
    public function __construct($configuration_name, $code = 0, Throwable $previous = null)
    {
        parent::__construct('Failed to fetch a required configuration: ' . $configuration_name, $code, $previous);
    }
}
