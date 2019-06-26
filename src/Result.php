<?php declare(strict_types=1);

/*
 * Copyright (c) Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eureka\Component\Crud;

/**
 * Class Result
 *
 * @author Pierre-Olivier Dézard
 * @author Romain Cottard
 */
class Result implements ResultInterface
{
    /** @var array $errors */
    private $errors;

    /** @var object $entity */
    private $entity;

    /**
     * Result constructor.
     * @param object $entity
     * @param array $errors
     */
    public function __construct($entity, array $errors)
    {
        $this->entity = $entity;
        $this->errors = $errors;
    }

    /**
     * @return object
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @return bool
     */
    public function hasErrors(): bool
    {
        return !empty($this->errors);
    }
}
