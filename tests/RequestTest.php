<?php

declare(strict_types=1);

namespace Tests;

use Lion\Request\Request;
use Lion\Test\Test;
use stdClass;

class RequestTest extends Test
{
    private Request $request;

    protected function setUp(): void
    {
        $this->request = new Request();
    }

    public function testCapture(): void
    {
        $this->assertInstanceOf(stdClass::class, $this->request->capture());
    }
}
