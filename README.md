# Fast Dev Site Configuration

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Module to copy over standard configs for the purposes of development.

## Install

Via Composer

``` bash
$ composer require --dev suilven/silverstripe-configurator
```

## Usage
This copies all of the available config files to mysite/_config
``` bash
sake dev/tasks/configure configs=mailhog,lastedited,logfile
```
## Config files
### MailHog
Redirects all outgoing mail to mailhog, trapping it and allowing it to be viewed

### LastEdited
Adds an index to the LastEdited field for SiteTree, Member and Group

### Log File
Log to silverstripe/logs/silverstripe.log a la Laravel.  Note, for SilverStripe < 4.1, change this path

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.



## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email gordon.b.anderson@gmail.com instead of using the issue tracker.

## Credits

- [Gordon Anderson][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/suilven/silverstripe-configurator.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/suilven/silverstripe-configurator/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/suilven/silverstripe-configurator.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/suilven/silverstripe-configurator.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/suilven/silverstripe-configurator.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/suilven/silverstripe-configurator
[link-travis]: https://travis-ci.org/suilven/silverstripe-configurator
[link-scrutinizer]: https://scrutinizer-ci.com/g/suilven/silverstripe-configurator/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/suilven/silverstripe-configurator
[link-downloads]: https://packagist.org/packages/suilven/silverstripe-configurator
[link-author]: https://github.com/gordonbanderson
