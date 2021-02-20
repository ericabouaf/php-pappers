# PHP Pappers [![Build Status](https://travis-ci.com/ericabouaf/php-pappers.svg?branch=main)](https://travis-ci.com/github/ericabouaf/php-pappers) [![Latest Stable Version](https://poser.pugx.org/ericabouaf/php-pappers/v/stable)](https://packagist.org/packages/ericabouaf/php-pappers) [![Total Downloads](https://poser.pugx.org/ericabouaf/php-pappers/downloads)](https://packagist.org/packages/ericabouaf/php-pappers) [![License](https://poser.pugx.org/ericabouaf/php-pappers/license)](https://packagist.org/packages/ericabouaf/php-pappers)

Module to access the [Pappers.fr](https://www.pappers.fr/) API

## Installation

    composer require ericabouaf/pappers

## Usage

```php
use Neyric\Pappers\Pappers;
use Neyric\Pappers\Model\Recherche\Recherche;

$pappers = new Pappers($apikey);

$pappers->getCompanyBySiren("Siren number without spaces");

$pappers->getCompanyBySiret("Siret number without spaces");

// Search
$query = new Recherche();
$query->nom_entreprise = "Funbooker";
$results = $pappers->recherche($query);

// Download document
$contents = $pappers->telechargeDocument("documentId");
```

