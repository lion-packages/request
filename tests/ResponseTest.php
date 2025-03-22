<?php

declare(strict_types=1);

namespace Tests;

use Lion\Request\Http;
use Lion\Request\Response;
use Lion\Request\Status;
use Lion\Test\Test;
use PHPUnit\Framework\Attributes\Test as Testing;
use stdClass;

class ResponseTest extends Test
{
    private Response $response;

    protected function setUp(): void
    {
        $this->response = new Response();
    }

    #[Testing]
    public function getErrors(): void
    {
        $errors = [
            Status::ERROR,
            Status::DATABASE_ERROR,
            Status::FILE_ERROR,
            Status::MAIL_ERROR,
            Status::ROUTE_ERROR,
            Status::SESSION_ERROR,
            Status::RULE_ERROR,
            Status::AUTHENTICATION_ERROR,
        ];

        $this->assertSame($errors, $this->response->getErrors());
    }

    #[Testing]
    public function response(): void
    {
        $res = $this->response->custom('custom');

        $this->assertSame(Http::OK, http_response_code());
        $this->assertInstanceOf(stdClass::class, $res);
        $this->assertObjectHasProperty('status', $res);
        $this->assertObjectHasProperty('message', $res);
        $this->assertObjectHasProperty('code', $res);
        $this->assertSame('custom', $res->status);
        $this->assertSame(null, $res->message);
        $this->assertSame(Http::OK, $res->code);
    }

    #[Testing]
    public function responseWithData(): void
    {
        $res = $this->response->custom('custom', null, Http::OK, ['package' => 'request']);

        $this->assertSame(Http::OK, http_response_code());
        $this->assertInstanceOf(stdClass::class, $res);
        $this->assertObjectHasProperty('status', $res);
        $this->assertObjectHasProperty('message', $res);
        $this->assertObjectHasProperty('code', $res);
        $this->assertObjectHasProperty('data', $res);
        $this->assertSame('custom', $res->status);
        $this->assertSame(null, $res->message);
        $this->assertSame(Http::OK, $res->code);
        $this->assertSame(['package' => 'request'], $res->data);
    }

    #[Testing]
    public function success(): void
    {
        $res = $this->response->success(null, Http::OK, ['package' => 'request']);

        $this->assertSame(Http::OK, http_response_code());
        $this->assertInstanceOf(stdClass::class, $res);
        $this->assertObjectHasProperty('status', $res);
        $this->assertObjectHasProperty('message', $res);
        $this->assertObjectHasProperty('code', $res);
        $this->assertObjectHasProperty('data', $res);
        $this->assertSame(Status::SUCCESS, $res->status);
        $this->assertSame(null, $res->message);
        $this->assertSame(Http::OK, $res->code);
        $this->assertSame(['package' => 'request'], $res->data);
    }

    #[Testing]
    public function error(): void
    {
        $res = $this->response->error(null, Http::INTERNAL_SERVER_ERROR, ['package' => 'request']);

        $this->assertSame(Http::INTERNAL_SERVER_ERROR, http_response_code());
        $this->assertInstanceOf(stdClass::class, $res);
        $this->assertObjectHasProperty('status', $res);
        $this->assertObjectHasProperty('message', $res);
        $this->assertObjectHasProperty('code', $res);
        $this->assertObjectHasProperty('data', $res);
        $this->assertSame(Status::ERROR, $res->status);
        $this->assertSame(null, $res->message);
        $this->assertSame(Http::INTERNAL_SERVER_ERROR, $res->code);
        $this->assertSame(['package' => 'request'], $res->data);
    }

    #[Testing]
    public function warning(): void
    {
        $res = $this->response->warning(null, Http::OK, ['package' => 'request']);

        $this->assertSame(Http::OK, http_response_code());
        $this->assertInstanceOf(stdClass::class, $res);
        $this->assertObjectHasProperty('status', $res);
        $this->assertObjectHasProperty('message', $res);
        $this->assertObjectHasProperty('code', $res);
        $this->assertObjectHasProperty('data', $res);
        $this->assertSame(Status::WARNING, $res->status);
        $this->assertSame(null, $res->message);
        $this->assertSame(Http::OK, $res->code);
        $this->assertSame(['package' => 'request'], $res->data);
    }

    #[Testing]
    public function info(): void
    {
        $res = $this->response->info(null, Http::OK, ['package' => 'request']);

        $this->assertSame(Http::OK, http_response_code());
        $this->assertInstanceOf(stdClass::class, $res);
        $this->assertObjectHasProperty('status', $res);
        $this->assertObjectHasProperty('message', $res);
        $this->assertObjectHasProperty('code', $res);
        $this->assertObjectHasProperty('data', $res);
        $this->assertSame(Status::INFO, $res->status);
        $this->assertSame(null, $res->message);
        $this->assertSame(Http::OK, $res->code);
        $this->assertSame(['package' => 'request'], $res->data);
    }
}
