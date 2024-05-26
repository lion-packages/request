<?php

declare(strict_types=1);

namespace Tests;

use Lion\Request\Http;
use Lion\Test\Test;

class HttpTest extends Test
{
    public function testConst(): void
    {
        $this->assertSame(100, Http::CONTINUE);
    }
}
