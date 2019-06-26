<?php declare(strict_types=1);

/*
 * Copyright (c) Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eureka\Component\Crud;

use Psr\Http\Message\ServerRequestInterface;

/**
 * Interface HandleReadInterface
 *
 * @author Pierre-Olivier Dézard
 * @author Romain Cottard
 */
interface HandleReadInterface
{
    /**
     * @param  ServerRequestInterface $request
     * @return ResultInterface
     */
    public function read(ServerRequestInterface $request): ResultInterface;
}
