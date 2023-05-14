# data-transfer-object

[![Latest Stable Version](https://img.shields.io/github/v/release/brokeyourbike/data-transfer-object-php)](https://github.com/brokeyourbike/data-transfer-object-php/releases)
[![Total Downloads](https://poser.pugx.org/brokeyourbike/data-transfer-object/downloads)](https://packagist.org/packages/brokeyourbike/data-transfer-object)
[![Maintainability](https://api.codeclimate.com/v1/badges/17603ef4b614ac79ea58/maintainability)](https://codeclimate.com/github/brokeyourbike/data-transfer-object-php/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/17603ef4b614ac79ea58/test_coverage)](https://codeclimate.com/github/brokeyourbike/data-transfer-object-php/test_coverage)

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

$dto = new SomeDTO($response);

assert($response === $dto->getRawResponse());
```

## Authors
- [Ivan Stasiuk](https://github.com/brokeyourbike) | [Twitter](https://twitter.com/brokeyourbike) | [LinkedIn](https://www.linkedin.com/in/brokeyourbike) | [stasi.uk](https://stasi.uk)

## License
[Mozilla Public License v2.0](https://github.com/brokeyourbike/data-transfer-object-php/blob/main/LICENSE)
