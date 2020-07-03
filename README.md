# M2 Template Link

Magento does not allow symlinks to templates (.phtml) that are outside of the Magento filesystem. This module allows modifying this characteristic.

This module will allow us to keep the code under development isolated from the Magento installation.

It is especially useful when you need to test a module in different Magento versions.

This module should only be used for development purposes as it violates some security measures to fulfill its purpose.

This module has been developed for Magento +2.3.x

## Installation

The extension can be installed via `composer`. To proceed, run these commands in your terminal:

```
cd /to/root/magento/install
composer require orangecat/templatesymlinks
php bin/magento module:enable Orangecat_TemplateSymlinks
php bin/magento setup:upgrade
```
If you need to use it in production mode, these commands will also be necessary:
```
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
```

## Note
You must first enable symlinks by going to Admin > Stores > Configuration > Advanced > Developer > Template Settings and setting the Allow Symlinks option to Yes.

## Symlink
Example of how to create a Symlink

ln -s /path/to/your/module/under/development/directory/Vendor/YorModuleName YorModuleName
