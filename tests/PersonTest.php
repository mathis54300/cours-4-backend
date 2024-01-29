<?php

namespace App\Tests;

use App\Entity\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testSetName()
    {
        $person = new Person();
        $person->setName('John Doe');

        $this->assertEquals('John Doe', $person->getName());
    }

    public function testSetAge()
    {
        $person = new Person();
        $person->setAge(42);

        $this->assertEquals(42, $person->getAge());
    }


    public function testSetAdresse()
    {
        $person = new Person();
        $person->setAdresse('1 rue de la Paix');

        $this->assertEquals('1 rue de la Paix', $person->getAdresse());
    }

    public function testGetName()
    {
        $person = new Person();
        $person->setName('John Doe');

        $this->assertEquals('John Doe', $person->getName());
    }

    public function testGetAge()
    {
        $person = new Person();
        $person->setAge(42);

        $this->assertEquals(42, $person->getAge());
    }

    public function testGetAdresse()
    {
        $person = new Person();
        $person->setAdresse('1 rue de la Paix');

        $this->assertEquals('1 rue de la Paix', $person->getAdresse());
    }

    public function testIsAdult()
    {
        $person = new Person();
        $person->setAge(42);

        $this->assertTrue($person->isAdult());

        $person->setAge(17);
        $this->assertFalse($person->isAdult());
    }
}
