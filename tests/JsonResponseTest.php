<?php

// Copyright (C) 2021 Ivan Stasiuk <brokeyourbike@gmail.com>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\DataTransferObject\Tests;

use Psr\Http\Message\ResponseInterface;
use PHPUnit\Framework\TestCase;

/**
 * @author Ivan Stasiuk <brokeyourbike@gmail.com>
 */
class JsonResponseTest extends TestCase
{
    /** @test */
    public function it_can_return_response()
    {
        $mockedResponse = $this->getMockBuilder(ResponseInterface::class)->getMock();
        $mockedResponse->method('getBody')->willReturn('{"name": "John Doe"}');

        /** @var ResponseInterface $mockedResponse */
        $dto = new DtoFixture($mockedResponse);

        $this->assertSame($mockedResponse, $dto->getRawResponse());
    }

    /** @test */
    public function it_can_decode()
    {
        $mockedResponse = $this->getMockBuilder(ResponseInterface::class)->getMock();
        $mockedResponse->method('getBody')->willReturn('{"name": "John Doe"}');

        /** @var ResponseInterface $mockedResponse */
        $dto = new DtoFixture($mockedResponse);

        $this->assertInstanceOf(DtoFixture::class, $dto);
        $this->assertSame('John Doe', $dto->name);
    }
}
