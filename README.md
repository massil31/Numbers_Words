Getting Started With Numbers_Words Library
==========================================

This library allows you converts numbers to words with no intl php extension


## Installation

### Download Numbers_Words Library using composer

Add Numbers_Words by running the command:

``` bash
$ php composer.phar require azul/numbers_words "dev-master"
```

Or by adding this line to your composer.json file
And run composer.phar update  

``` json
//
   "azul/numbers_words":"dev-master"
//
```



Composer will install the library to your project's `vendor/azul` directory.

### Using Numbers_Words Library

## Convert integer

``` php
<?php
// In Controller
$numbers_words = new Word();

$word = $numbers_words->toWords(12378 /**Number**/, 'en'/**locale**/)

// Output : twelve thousand three hundred seventy-eight
// Available locales : fr, en, es

```

## Convert money ammount

``` php
<?php
// In Controller
$numbers_words = new Word();

$numbers_words = new Words();
        
$word = $numbers_words->toCurrency('123,56'/**Ammount**/, 'en'/**Locale**/, 'EUR'/**Currency**/, ','/**Decimal Point**/);

// Output : cent vingt-trois euros cinquante-six centimes
// Available locales : fr, en, es

```
