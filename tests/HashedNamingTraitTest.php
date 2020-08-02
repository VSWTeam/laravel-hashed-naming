<?php

namespace VSWTeam\LaravelHashedNaming\Tests;

use PHPUnit\Framework\TestCase;
use VSWTeam\LaravelHashedNaming\Tests\TestClass;

class HashedNamingTraitTest extends TestCase
{
    /**
     * @var TestClass
     */
    protected $testClass;

    protected function setUp(): void
    {
        $this->testClass = new TestClass();
    }

    /** @test */
    public function testGenerateHashedName()
    {
        /** arrange */
        $input = 'value';
        $expected = '2063c1608d6e0baf80249c42e2be5804';

        /** act */
        $result = $this->testClass->generateHashedName($input);

        /** assert */
        $this->assertTrue(strlen($result) == 32);
        $this->assertTrue(ctype_xdigit($result));
        $this->assertEquals($expected, $result);
    }

    /** @test */
    public function testGenerateHashedDirectoryPath()
    {
        /** arrange */
        $input = 'value';
        $expected = '/20/2063c1608d6e0baf80249c42e2be5804';

        /** act */
        $result = $this->testClass->generateHashedDirectoryPath($input);

        /** assert */
        $this->assertEquals($expected, $result);
    }

    /** @test */
    public function testGenerateHashedDirectoryPathByLevel()
    {
        /** arrange */
        $input = 'value';
        $level = 3;
        $expected = '/20/63/c1/2063c1608d6e0baf80249c42e2be5804';

        /** act */
        $result = $this->testClass->generateHashedDirectoryPath($input, $level);

        /** assert */
        $this->assertEquals($expected, $result);
    }
}
