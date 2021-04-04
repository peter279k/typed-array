<?php

/**
 * Linna Array.
 *
 * @author Sebastian Rapetti <sebastian.rapetti@alice.it>
 * @copyright (c) 2018, Sebastian Rapetti
 * @license http://opensource.org/licenses/MIT MIT License
 */
declare(strict_types=1);

namespace Linna\TypedArrayObject;

use ArrayObject;
use InvalidArgumentException;

/**
 * Provide a way to create an array of object typed elements with php.
 */
class ObjectArrayObject extends ArrayObject
{
    public const EXC_MESSAGE = 'Elements passed must be of the type <object>.';

    /**
     * Class Contructor.
     *
     * @param array  $input
     * @param int    $flags
     * @param string $iterator_class
     *
     * @throws InvalidArgumentException If elements in the optional array parameter
     *                                  aren't of the configured type.
     */
    public function __construct(array $input = [], int $flags = 0, string $iterator_class = "ArrayIterator")
    {
        //to avoid foreach, compare sizes of array
        //before and after apply a filter :)
        if (\count($input) > \count(\array_filter($input, 'is_object'))) {
            throw new InvalidArgumentException(self::EXC_MESSAGE);
        }

        //call parent constructor
        parent::__construct($input, $flags, $iterator_class);
    }

    /**
     * Array style value assignment.
     *
     * @ignore
     *
     * @param mixed $index
     * @param object $newval
     *
     * @throws InvalidArgumentException If value passed with $newval are not of the object type
     *
     * @return void
     */
    public function offsetSet($index, $newval): void
    {
        if (\is_object($newval)) {
            parent::offsetSet($index, $newval);

            return;
        }

        throw new InvalidArgumentException(self::EXC_MESSAGE);
    }

    /**
     * Append a value at the end of the array.
     *
     * @param object $value
     * @return void
     *
     * @throws InvalidArgumentException  If value passed with $value are not of the object type
     */
    public function append($value): void
    {
        if (\is_object($value)) {
            parent::append($value);

            return;
        }

        throw new InvalidArgumentException(self::EXC_MESSAGE);
    }
}