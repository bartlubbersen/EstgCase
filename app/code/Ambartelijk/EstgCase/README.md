# Mage2 Module Ambartelijk EstgCase

    ``ambartelijk/module-estgcase``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Ambartelijk case module

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Ambartelijk`
 - Enable the module by running `php bin/magento module:enable Ambartelijk_EstgCase`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require ambartelijk/module-estgcase`
 - enable the module by running `php bin/magento module:enable Ambartelijk_EstgCase`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration




## Specifications

 - Observer
	- payment_method_is_active > Ambartelijk\EstgCase\Observer\Frontend\Payment\MethodIsActive


## Attributes



