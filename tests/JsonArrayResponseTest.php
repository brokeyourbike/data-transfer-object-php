<?php

// Copyright (C) 2021 Ivan Stasiuk <ivan@stasi.uk>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\DataTransferObject\Tests;

use Psr\Http\Message\ResponseInterface;
use PHPUnit\Framework\TestCase;

/**
 * @author Ivan Stasiuk <ivan@stasi.uk>
 */
class JsonArrayResponseTest extends TestCase
{
    /** @test */
    public function it_can_return_response()
    {
        $mockedResponse = $this->getMockBuilder(ResponseInterface::class)->getMock();
        $mockedResponse->method('getBody')->willReturn('[{"color": "red"}]');

        /** @var ResponseInterface $mockedResponse */
        $dto = new ArrayDtoFixture($mockedResponse);

        $this->assertSame($mockedResponse, $dto->getRawResponse());
    }

    /** @test */
    public function it_can_decode()
    {
        $mockedResponse = $this->getMockBuilder(ResponseInterface::class)->getMock();
        $mockedResponse->method('getBody')->willReturn('[{"color": "red"}, {"color": "green"}]');

        /** @var ResponseInterface $mockedResponse */
        $dto = new ArrayDtoFixture($mockedResponse);

        $this->assertInstanceOf(ArrayDtoFixture::class, $dto);
        $this->assertCount(2, $dto->apples);

        [$apple1, $apple2] = $dto->apples;
        $this->assertInstanceOf(AppleFixture::class, $apple1);
        $this->assertSame('red', $apple1->color);
        $this->assertInstanceOf(AppleFixture::class, $apple2);
        $this->assertSame('green', $apple2->color);
    }
}
