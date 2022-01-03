<?php

// Copyright (C) 2021 Ivan Stasiuk <ivan@stasi.uk>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\DataTransferObject\Tests;

use Spatie\DataTransferObject\Casters\ArrayCaster;
use Spatie\DataTransferObject\Attributes\CastWith;
use Psr\Http\Message\ResponseInterface;
use BrokeYourBike\DataTransferObject\Tests\AppleFixture;
use BrokeYourBike\DataTransferObject\JsonArrayResponse;

/**
 * @author Ivan Stasiuk <ivan@stasi.uk>
 */
class ArrayDtoFixture extends JsonArrayResponse
{
    /** @var AppleFixture[] */
    #[CastWith(ArrayCaster::class, itemType: AppleFixture::class)]
    public array $apples;

    public function __construct(ResponseInterface $response)
    {
        parent::__construct($response, 'apples');
    }
}
