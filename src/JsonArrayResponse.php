<?php

// Copyright (C) 2021 Ivan Stasiuk <ivan@stasi.uk>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\DataTransferObject;

use Spatie\DataTransferObject\DataTransferObject;
use Psr\Http\Message\ResponseInterface;

/**
 * @author Ivan Stasiuk <ivan@stasi.uk>
 */
abstract class JsonArrayResponse extends DataTransferObject
{
    private ResponseInterface $_response;

    public function __construct(ResponseInterface $response, string $propertyName)
    {
        $this->_response = $response;
        parent::__construct([$propertyName => \json_decode($response->getBody(), true)]);
    }

    public function getRawResponse(): ResponseInterface
    {
        return $this->_response;
    }
}
