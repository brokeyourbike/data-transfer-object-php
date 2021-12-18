# data-transfer-object-php

[![Latest Stable Version](https://img.shields.io/github/v/release/brokeyourbike/data-transfer-object-php)](https://github.com/brokeyourbike/data-transfer-object-php/releases)
[![Total Downloads](https://poser.pugx.org/brokeyourbike/data-transfer-object/downloads)](https://packagist.org/packages/brokeyourbike/data-transfer-object)
[![License: MPL-2.0](https://img.shields.io/badge/license-MPL--2.0-purple.svg)](https://github.com/brokeyourbike/data-transfer-object-php/blob/main/LICENSE)

[![Maintainability](https://api.codeclimate.com/v1/badges/d38ab570bbbdbe2ac34e/maintainability)](https://codeclimate.com/github/brokeyourbike/data-transfer-object-php/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/d38ab570bbbdbe2ac34e/test_coverage)](https://codeclimate.com/github/brokeyourbike/data-transfer-object-php/test_coverage)
[![tests](https://github.com/brokeyourbike/data-transfer-object-php/actions/workflows/tests.yml/badge.svg)](https://github.com/brokeyourbike/data-transfer-object-php/actions/workflows/tests.yml)

Return original response alongside with the [data transfer object](https://github.com/spatie/data-transfer-object)

## Installation

```bash
composer require brokeyourbike/data-transfer-object
```

## Usage

```php
use BrokeYourBike\DataTransferObject\JsonResponse;

class SomeDTO extends JsonResponse
{
    public string $name;
}

assert($response instanceof ResponseInterface);
$result = new SomeResponse($response);
```

## License
[Mozilla Public License v2.0](https://github.com/brokeyourbike/data-transfer-object-php/blob/main/LICENSE)
