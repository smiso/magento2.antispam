# Magento 2: Module SmileSolutions AntiSpam

## Main Functionalities
Prevent Fake Customer Registrations

## Installation
\* = in production please use the `--keep-generated` option

### Using Composer
    composer require smiso/antispam
	php bin/magento setup:upgrade
	php bin/magento setup:static-content:deploy

### Manual Installation
Copy the files to `app/code/SmileSolutions/AntiSpam`

	php bin/magento setup:upgrade
	php bin/magento setup:static-content:deploy
