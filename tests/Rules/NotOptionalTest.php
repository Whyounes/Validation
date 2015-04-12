<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Respect\Validation\Rules;

class NotOptionalTest extends \PHPUnit_Framework_TestCase
{
    protected $object;

    protected function setUp()
    {
        $this->object = new NotOptional();
    }

    /**
     * @dataProvider providerForOptional
     */
    public function testOptionalValue($input)
    {
        $this->assertTrue($this->object->assert($input));
    }

    /**
     * @dataProvider providerForNotOptional
     */
    public function testStringNotOptional($input)
    {
        $this->assertTrue($this->object->assert($input));
    }

    /**
     * @expectedException Respect\Validation\Exceptions\NotOptionalException
     */
    public function testStringOptional()
    {
        $this->assertFalse($this->object->assert(''));
    }

    public function providerForNotOptional()
    {
        return array(
            array(1),
            array(' oi'),
            array(array(5)),
            array(array(0)),
            array(new \stdClass()),
        );
    }

    public function providerForOptional()
    {
        return array(
            array('    '),
            array("\n"),
            array(false),
            array(null),
            array(array()),
        );
    }
}
