<?php

declare(strict_types=1);

namespace Tests;

use Lion\Request\Http;
use Lion\Request\Response;
use Lion\Request\Status;
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
            Status::ERROR,
            Status::DATABASE_ERROR,
            Status::FILE_ERROR,
            Status::MAIL_ERROR,
            Status::ROUTE_ERROR,
            Status::SESSION_ERROR,
            Status::RULE_ERROR,
        ];

        $this->assertSame($errors, $this->response->getErrors());
    }

    public function testResponse(): void
    {
        $res = $this->response->custom('custom', null, Http::HTTP_OK);

        $this->assertInstanceOf(stdClass::class, $res);
        $this->assertObjectHasProperty('status', $res);
        $this->assertObjectHasProperty('message', $res);
        $this->assertObjectHasProperty('code', $res);
        $this->assertSame('custom', $res->status);
        $this->assertSame(null, $res->message);
        $this->assertSame(Http::HTTP_OK, $res->code);
    }

    public function testResponseWithData(): void
    {
        $res = $this->response->custom('custom', null, Http::HTTP_OK, ['package' => 'request']);

        $this->assertInstanceOf(stdClass::class, $res);
        $this->assertObjectHasProperty('status', $res);
        $this->assertObjectHasProperty('message', $res);
        $this->assertObjectHasProperty('code', $res);
        $this->assertObjectHasProperty('data', $res);
        $this->assertSame('custom', $res->status);
        $this->assertSame(null, $res->message);
        $this->assertSame(Http::HTTP_OK, $res->code);
        $this->assertSame(['package' => 'request'], $res->data);
    }

    public function testSuccess(): void
    {
        $res = $this->response->success(null, Http::HTTP_OK, ['package' => 'request']);

        $this->assertInstanceOf(stdClass::class, $res);
        $this->assertObjectHasProperty('status', $res);
        $this->assertObjectHasProperty('message', $res);
        $this->assertObjectHasProperty('code', $res);
        $this->assertObjectHasProperty('data', $res);
        $this->assertSame(Status::SUCCESS, $res->status);
        $this->assertSame(null, $res->message);
        $this->assertSame(Http::HTTP_OK, $res->code);
        $this->assertSame(['package' => 'request'], $res->data);
    }

    public function testError(): void
    {
        $res = $this->response->error(null, Http::HTTP_INTERNAL_SERVER_ERROR, ['package' => 'request']);

        $this->assertInstanceOf(stdClass::class, $res);
        $this->assertObjectHasProperty('status', $res);
        $this->assertObjectHasProperty('message', $res);
        $this->assertObjectHasProperty('code', $res);
        $this->assertObjectHasProperty('data', $res);
        $this->assertSame(Status::ERROR, $res->status);
        $this->assertSame(null, $res->message);
        $this->assertSame(Http::HTTP_INTERNAL_SERVER_ERROR, $res->code);
        $this->assertSame(['package' => 'request'], $res->data);
    }

    public function testWarning(): void
    {
        $res = $this->response->warning(null, Http::HTTP_OK, ['package' => 'request']);

        $this->assertInstanceOf(stdClass::class, $res);
        $this->assertObjectHasProperty('status', $res);
        $this->assertObjectHasProperty('message', $res);
        $this->assertObjectHasProperty('code', $res);
        $this->assertObjectHasProperty('data', $res);
        $this->assertSame(Status::WARNING, $res->status);
        $this->assertSame(null, $res->message);
        $this->assertSame(Http::HTTP_OK, $res->code);
        $this->assertSame(['package' => 'request'], $res->data);
    }

    public function testInfo(): void
    {
        $res = $this->response->info(null, Http::HTTP_OK, ['package' => 'request']);

        $this->assertInstanceOf(stdClass::class, $res);
        $this->assertObjectHasProperty('status', $res);
        $this->assertObjectHasProperty('message', $res);
        $this->assertObjectHasProperty('code', $res);
        $this->assertObjectHasProperty('data', $res);
        $this->assertSame(Status::INFO, $res->status);
        $this->assertSame(null, $res->message);
        $this->assertSame(Http::HTTP_OK, $res->code);
        $this->assertSame(['package' => 'request'], $res->data);
    }
}
