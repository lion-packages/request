<?php

declare(strict_types=1);

namespace Tests;

use Lion\Request\Request;
use Lion\Test\Test;
use PHPUnit\Framework\Attributes\Test as Testing;
use ReflectionException;
use stdClass;

class RequestTest extends Test
{
    private Request $request;

    /**
     * @throws ReflectionException
     */
    protected function setUp(): void
    {
        $this->request = new Request();

        $this->initReflection($this->request);
    }

    /**
     * @throws ReflectionException
     */
    public function tearDown(): void
    {
        $this->setPrivateProperty('input', null);
    }

    /**
     * @throws ReflectionException
     */
    #[Testing]
    public function getInput(): void
    {
        $input = $this->getPrivateMethod('getInput');

        $this->assertIsString($input);
        $this->assertEmpty($input);
    }

    /**
     * @throws ReflectionException
     */
    #[Testing]
    public function getInputIsNotEmpty(): void
    {
        $this->setPrivateProperty('input', '{"name": "root"}');

        $input = $this->getPrivateMethod('getInput');

        $this->assertIsString($input);
        $this->assertNotEmpty($input);
        $this->assertSame('{"name": "root"}', $input);
    }

    #[Testing]
    public function captureContentIsNull(): void
    {
        $_POST['name'] = 'root';

        $_SERVER['HTTP_HOST'] = 'localhost';

        $_GET['foo'] = 'bar';

        $_FILES = [
            'file' => [
                'name' => 'test.png',
            ],
        ];

        $capture = $this->request->capture();

        $this->assertInstanceOf(stdClass::class, $capture);
        $this->assertObjectHasProperty('name', $capture);
        $this->assertObjectHasProperty('HTTP_HOST', $capture);
        $this->assertObjectHasProperty('foo', $capture);
        $this->assertObjectHasProperty('file', $capture);
        $this->assertHttpBodyNotHasKey('name');
        $this->assertHttpBodyNotHasKey('HTTP_HOST');
        $this->assertHttpBodyNotHasKey('foo');
        $this->assertHttpBodyNotHasKey('file');
    }

    /**
     * @throws ReflectionException
     */
    #[Testing]
    public function captureContentIsNotNull(): void
    {
        $this->setPrivateProperty('input', '{"name": "root"}');

        $capture = $this->request->capture();

        $this->assertInstanceOf(stdClass::class, $capture);
        $this->assertObjectHasProperty('name', $capture);
    }
}
