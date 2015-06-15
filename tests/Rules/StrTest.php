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

class StrTest extends \PHPUnit_Framework_TestCase
{
    protected $object;

    protected function setUp()
    {
        $this->object = new Str();
    }

    /**
     * @dataProvider providerForStr
     */
    public function testStr($input)
    {
        $this->assertTrue($this->object->validate($input));
        $this->assertTrue($this->object->check($input));
        $this->assertTrue($this->object->assert($input));
    }

    /**
     * @dataProvider providerForNotStr
     * @expectedException Respect\Validation\Exceptions\StrException
     */
    public function testNotStr($input)
    {
        $this->assertFalse($this->object->validate($input));
        $this->assertFalse($this->object->assert($input));
    }

    public function providerForStr()
    {
        return array(
            array(''),
            array('165.7'),
        );
    }

    public function providerForNotStr()
    {
        return array(
            array(null),
            array(array()),
            array(new \stdClass()),
            array(150),
        );
    }
}
