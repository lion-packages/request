<?php

declare(strict_types=1);

namespace Tests;

use Lion\Request\Response;
use Lion\Test\Test;
use stdClass;

class ResponseTest extends Test
{
    private Response $response;

    protected function setUp(): void
    {
        $this->response = new Response();
    }

    public function testResponse(): void
    {
        $res = $this->response->custom('custom', null, 200);

        $this->assertInstanceOf(stdClass::class, $res);
        $this->assertObjectHasProperty('status', $res);
        $this->assertObjectHasProperty('message', $res);
        $this->assertObjectHasProperty('code', $res);
        $this->assertSame('custom', $res->status);
        $this->assertSame(null, $res->message);
        $this->assertSame(200, $res->code);
    }

    public function testResponseWithData(): void
    {
        $res = $this->response->custom('custom', null, 200, ['package' => 'request']);

        $this->assertInstanceOf(stdClass::class, $res);
        $this->assertObjectHasProperty('status', $res);
        $this->assertObjectHasProperty('message', $res);
        $this->assertObjectHasProperty('code', $res);
        $this->assertObjectHasProperty('data', $res);
        $this->assertSame('custom', $res->status);
        $this->assertSame(null, $res->message);
        $this->assertSame(200, $res->code);
        $this->assertSame(['package' => 'request'], $res->data);
    }

    public function testSuccess(): void
    {
        $res = $this->response->success(null, 200, ['package' => 'request']);

        $this->assertInstanceOf(stdClass::class, $res);
        $this->assertObjectHasProperty('status', $res);
        $this->assertObjectHasProperty('message', $res);
        $this->assertObjectHasProperty('code', $res);
        $this->assertObjectHasProperty('data', $res);
        $this->assertSame('success', $res->status);
        $this->assertSame(null, $res->message);
        $this->assertSame(200, $res->code);
        $this->assertSame(['package' => 'request'], $res->data);
    }

    public function testError(): void
    {
        $res = $this->response->error(null, 500, ['package' => 'request']);

        $this->assertInstanceOf(stdClass::class, $res);
        $this->assertObjectHasProperty('status', $res);
        $this->assertObjectHasProperty('message', $res);
        $this->assertObjectHasProperty('code', $res);
        $this->assertObjectHasProperty('data', $res);
        $this->assertSame('error', $res->status);
        $this->assertSame(null, $res->message);
        $this->assertSame(500, $res->code);
        $this->assertSame(['package' => 'request'], $res->data);
    }

    public function testWarning(): void
    {
        $res = $this->response->warning(null, 200, ['package' => 'request']);

        $this->assertInstanceOf(stdClass::class, $res);
        $this->assertObjectHasProperty('status', $res);
        $this->assertObjectHasProperty('message', $res);
        $this->assertObjectHasProperty('code', $res);
        $this->assertObjectHasProperty('data', $res);
        $this->assertSame('warning', $res->status);
        $this->assertSame(null, $res->message);
        $this->assertSame(200, $res->code);
        $this->assertSame(['package' => 'request'], $res->data);
    }

    public function testInfo(): void
    {
        $res = $this->response->info(null, 200, ['package' => 'request']);

        $this->assertInstanceOf(stdClass::class, $res);
        $this->assertObjectHasProperty('status', $res);
        $this->assertObjectHasProperty('message', $res);
        $this->assertObjectHasProperty('code', $res);
        $this->assertObjectHasProperty('data', $res);
        $this->assertSame('info', $res->status);
        $this->assertSame(null, $res->message);
        $this->assertSame(200, $res->code);
        $this->assertSame(['package' => 'request'], $res->data);
    }
}
