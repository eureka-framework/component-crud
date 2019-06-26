<?php declare(strict_types=1);

/*
 * Copyright (c) Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eureka\Component\Crud;

/**
 * Interface ResultInterface
 *
 * @author Pierre-Olivier Dézard
 * @author Romain Cottard
 */
interface ResultInterface
{
    /**
     * @return object
     */
    public function getEntity();

    /**
     * @return array
     */
    public function getErrors(): array;

    /**
     * @return bool
     */
    public function hasErrors(): bool;
}
