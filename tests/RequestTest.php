<?php

declare(strict_types=1);

namespace Tests;

use LionRequest\Request;
use PHPUnit\Framework\TestCase;
use stdClass;

class RequestTest extends TestCase
{
    private Request $request;

    public function testCapture()
    {
        $this->assertInstanceOf(stdClass::class, $this->request->capture());
    }

    public function setUp(): void
    {
        $this->request = new Request();
    }
}
