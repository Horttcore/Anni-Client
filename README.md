# AnniAdapter
A logger client for my Anni logging platform

## Installation

```bash
composer require ralfhortt/anni-client
```

## Usage

```php
<?php
# Open a connection
\Anni\Connect::to('https://anni.acme.io/sample-project/production/jNsVwMbyXO27uxZw');

# Log to Anni
\Anni\Info('Retailer importer', 'Starting');
\Anni\Critical('Retailer importer', 'No log file found', ['url' => $importUrl]);
\Anni\Debug('Retailer importer', 'Retailer importer');
\Anni\Notice('Retailer importer', 'Missing data in retailer');
\Anni\Warning('Retailer importer', 'Could not generate latitude/longitude of retailer');
\Anni\Error('Retailer importer', 'Failed to import retailer');
\Anni\Alert('Retailer importer', 'Import failed', ['url' => $importUrl]);
\Anni\Info('Retailer importer', 'Imported 42 retailers', $retailers);
\Anni\Emergency('Retailer importer', 'No retailer after import');
