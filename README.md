# AnniAdapter
A logger client for my Anni logging platform

## Installation

Install with composer
```bash
composer require ralfhortt/anni-client
```

Require composer autoloader
```php
<?php
require 'vendor/autoload.php`;
```

## Usage

### Set Anni connection

```php
<?php
\Anni\Connect::to('https://anni.acme.io/sample-project/production/jNsVwMbyXO27uxZw');
```

### Log [WIP]

```php
<?php
\Anni\Critical('No log file found');
\Anni\Debug('Custom Message');
\Anni\Notice('Missing data in retailer');
\Anni\Warning('Could not generate latitude/longitude of retailer');
\Anni\Error('Failed to import retailer');
\Anni\Alert('Import failed');
\Anni\Info('Imported 42 retailers', $retailers);
\Anni\Emergency('No retailer after import');
```

### Log to custom channel

```php
// Only log events if there was no other event in the last 60 seconds
\Anni\Debug('Events', 'Page View');
```

### Log with meta data

```php
// Only log events if there was no other event in the last 60 seconds
\Anni\Debug('Events', 'Page View', ['url' => 'https://acme.io']);
```

### Log throttling

```php
// Only log events if there was no other event in the last 60 seconds
\Anni\Debug('Events', 'Page View', [], ['throttle' => 60]);
```

## Changelog

### v1.0 *Planned

- Unit tested
- Documentation when to use which logging function

### v0.3 *Planned

- Add: Default channel logging

### v0.2 - 2020-03-24

- Add: Log throttling

### v0.1 - 2020-03-23

- Draft
