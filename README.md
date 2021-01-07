# Symfony Bundle to interact with PreventGo API

## Installation

To install this bundle, simply run the following command:
```
$ composer require mpp/preventgo-bundle
```

## Configuration

First create a guzzle client:
```yaml
// config/packages/eight_point_guzzle.yaml
eight_points_guzzle:
    clients:
        my_preventgo_client:
            base_url: '%env(PREVENTGO_BASE_URL)%'
            options:
                auth:
                    - '%env(PREVENTGO_USERNAME)%'
                    - '%env(PREVENTGO_PASSWORD)%'
```