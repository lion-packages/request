<?php

declare(strict_types=1);

namespace Tests;

use Lion\Request\Request;
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

    public function testGetErrors(): void
    {
        $errors = [
            Response::ERROR,
            Response::DATABASE_ERROR,
            Response::FILE_ERROR,
            Response::MAIL_ERROR,
            Response::ROUTE_ERROR,
            Response::SESSION_ERROR
        ];

        $this->assertSame($errors, $this->response->getErrors());
    }

    public function testResponse(): void
    {
        $res = $this->response->custom('custom', null, Request::HTTP_OK);

        $this->assertInstanceOf(stdClass::class, $res);
        $this->assertObjectHasProperty('status', $res);
        $this->assertObjectHasProperty('message', $res);
        $this->assertObjectHasProperty('code', $res);
        $this->assertSame('custom', $res->status);
        $this->assertSame(null, $res->message);
        $this->assertSame(Request::HTTP_OK, $res->code);
    }

    public function testResponseWithData(): void
    {
        $res = $this->response->custom('custom', null, Request::HTTP_OK, ['package' => 'request']);

        $this->assertInstanceOf(stdClass::class, $res);
        $this->assertObjectHasProperty('status', $res);
        $this->assertObjectHasProperty('message', $res);
        $this->assertObjectHasProperty('code', $res);
        $this->assertObjectHasProperty('data', $res);
        $this->assertSame('custom', $res->status);
        $this->assertSame(null, $res->message);
        $this->assertSame(Request::HTTP_OK, $res->code);
        $this->assertSame(['package' => 'request'], $res->data);
    }

    public function testSuccess(): void
    {
        $res = $this->response->success(null, Request::HTTP_OK, ['package' => 'request']);

        $this->assertInstanceOf(stdClass::class, $res);
        $this->assertObjectHasProperty('status', $res);
        $this->assertObjectHasProperty('message', $res);
        $this->assertObjectHasProperty('code', $res);
        $this->assertObjectHasProperty('data', $res);
        $this->assertSame(Response::SUCCESS, $res->status);
        $this->assertSame(null, $res->message);
        $this->assertSame(Request::HTTP_OK, $res->code);
        $this->assertSame(['package' => 'request'], $res->data);
    }

    public function testError(): void
    {
        $res = $this->response->error(null, Request::HTTP_INTERNAL_SERVER_ERROR, ['package' => 'request']);

        $this->assertInstanceOf(stdClass::class, $res);
        $this->assertObjectHasProperty('status', $res);
        $this->assertObjectHasProperty('message', $res);
        $this->assertObjectHasProperty('code', $res);
        $this->assertObjectHasProperty('data', $res);
        $this->assertSame(Response::ERROR, $res->status);
        $this->assertSame(null, $res->message);
        $this->assertSame(Request::HTTP_INTERNAL_SERVER_ERROR, $res->code);
        $this->assertSame(['package' => 'request'], $res->data);
    }

    public function testWarning(): void
    {
        $res = $this->response->warning(null, Request::HTTP_OK, ['package' => 'request']);

        $this->assertInstanceOf(stdClass::class, $res);
        $this->assertObjectHasProperty('status', $res);
        $this->assertObjectHasProperty('message', $res);
        $this->assertObjectHasProperty('code', $res);
        $this->assertObjectHasProperty('data', $res);
        $this->assertSame(Response::WARNING, $res->status);
        $this->assertSame(null, $res->message);
        $this->assertSame(Request::HTTP_OK, $res->code);
        $this->assertSame(['package' => 'request'], $res->data);
    }

    public function testInfo(): void
    {
        $res = $this->response->info(null, Request::HTTP_OK, ['package' => 'request']);

        $this->assertInstanceOf(stdClass::class, $res);
        $this->assertObjectHasProperty('status', $res);
        $this->assertObjectHasProperty('message', $res);
        $this->assertObjectHasProperty('code', $res);
        $this->assertObjectHasProperty('data', $res);
        $this->assertSame(Response::INFO, $res->status);
        $this->assertSame(null, $res->message);
        $this->assertSame(Request::HTTP_OK, $res->code);
        $this->assertSame(['package' => 'request'], $res->data);
    }
}
