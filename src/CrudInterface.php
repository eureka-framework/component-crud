<?php declare(strict_types=1);

/*
 * Copyright (c) Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eureka\Component\Crud;

/**
 * Interface CrudInterface
 *
 * @author Pierre-Olivier Dézard
 * @author Romain Cottard
 */
interface CrudInterface extends HandleCreateInterface, HandleDeleteInterface, HandleReadInterface, HandleUpdateInterface
{

}
