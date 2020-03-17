# AnniAdapter
A PSR-3 logger implementation for my Anni logging platform

### Usage

```php
<?php
// Add a connection
\Anni\Connection('https://anni.acme.io/sample-project/production', 'jNsVwMbyXO27uxZw');

// Log
\Anni\Log::channel('Retailer importer')->notice('Importer hat 42 Händler importiert', $retailers);

// Log shorthands
\Anni\Info('Retailer importer', 'Starting');
\Anni\Critical('Retailer importer', 'No log file found', ['url' => $importUrl]);
\Anni\Debug('Retailer importer', 'Retailer importer', $retailer->toJson());
\Anni\Notice('Retailer importer', 'Missing data in retailer', $retailer->toJson());
\Anni\Warning('Retailer importer', 'Could not generate latitude/longitude of retailer', $retailer->toJson());
\Anni\Error('Retailer importer', 'Failed to import retailer', $retailer->toJson());
\Anni\Alert('Retailer importer', 'Import failed', ['url' => $importUrl]);
\Anni\Info('Retailer importer', 'Imported 42 retailers', $retailers);
\Anni\Emergency::channel('Retailer importer')->message('No retailer after import', ['url' => $importUrl, 'retailers' => $retailers]);
