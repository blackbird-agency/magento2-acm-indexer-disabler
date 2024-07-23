# Advanced Content Manager (ACM) Indexer Disabler

[![Latest Stable Version](https://img.shields.io/packagist/v/blackbird/contentmanager-indexerdisabler.svg?style=flat-square)](https://packagist.org/packages/blackbird/contentmanager-indexerdisabler)
[![License: MIT](https://img.shields.io/github/license/blackbird-agency/magento2-acm-indexer-disabler.svg?style=flat-square)](./LICENSE)

This module must be used in complement with [Blackbird Advanced Content Manager](https://www.advancedcontentmanager.com/) Plugin for Magento.

It is used to disable the search feature and the indexer of Content Manager in order to ensure the compatibility with Magento Live-Search, Algolia or any other Incompatible Search engine like Elasticsuite.
This module is compatible from Magento 2.2 to the latest Magento 2.4.7, and from php 7.3 to php 8.3.

## Setup

### Get the package

**Composer Package:**

```
composer require blackbird/contentmanager-indexerdisabler
```

**Zip Package:**

Unzip the package in app/code/Blackbird/ContentManagerIndexerDisabler, from the root of your Magento instance.

### Install the module

Go to your Magento root directory and run the following magento command:
```
php bin/magento setup:upgrade
```

## Support

- If you have any issue with this code, feel free to [open an issue](https://github.com/blackbird-agency/magento2-acm-indexer-disabler/issues/new).
- If you want to contribute to this project, feel free to [create a pull request](https://github.com/blackbird-agency/magento2-acm-indexer-disabler/compare).

## Contact

For further information, contact us:

- by email: hello@bird.eu
- or by form: [https://black.bird.eu/en/contacts/](https://black.bird.eu/contacts/)

## Authors

- **Bruno FACHE** - *Maintainer* - [It's me!](https://github.com/bruno-blackbird)
- **Blackbird Team** - *Contributor* - [They're awesome!](https://github.com/blackbird-agency)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

***That's all folks!***
