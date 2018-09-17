#!/bin/bash
#Capture this directory
thisDir=${PWD}

rm caldera-pay-wp-client.zip
# Reinstall composer dependencies
rm -rf vendor
composer update --no-dev --optimize-autoloader

## Build JS/CSS for production
yarn build

# Payment gateway client
cd qualpay-client/pg
rm -rf vendor
composer update --no-dev --optimize-autoloader
# platform client
cd qualpay-client/platform
rm -rf vendor
composer update --no-dev --optimize-autoloader





