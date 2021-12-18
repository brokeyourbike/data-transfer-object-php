<?php

// Copyright (C) 2021 Ivan Stasiuk <brokeyourbike@gmail.com>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\FirstCityMonumentBank\Models;

use Spatie\DataTransferObject\DataTransferObject;
use Psr\Http\Message\ResponseInterface;

/**
 * @author Ivan Stasiuk <brokeyourbike@gmail.com>
 */
abstract class JsonResponse extends DataTransferObject
{
    private ResponseInterface $_response;

    public function __construct(ResponseInterface $response)
    {
        $this->_response = $response;
        parent::__construct(\json_decode($response->getBody(), true));
    }

    public function getRawResponse(): ResponseInterface
    {
        return $this->_response;
    }
}
