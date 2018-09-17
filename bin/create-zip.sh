#!/usr/bin/env bash


# switch to parent
parent_path=$( cd "$(dirname "${BASH_SOURCE[1]}")" ; pwd -P )
cd "$parent_path";
pwd;

## Create build dir
mkdir caldera-pay-wp-client


buildPath=$parent_path/caldera-pay-wp-client


# Delete last build
rm caldera-pay-wp-client.zip

# Reinstall composer dependencies
rm -rf vendor
composer update --no-dev --optimize-autoloader

## Payment gateway client
cd qualpay-client/pg
rm -rf vendor
composer update --no-dev --optimize-autoloader
cd "$parent_path";

## platform client
cd qualpay-client/platform
rm -rf vendor
composer update --no-dev --optimize-autoloader
cd "$parent_path";

#Build JS/CSS for production
yarn && yarn build

# Build Zip

## Create directory
buildPath=$parent_path/caldera-pay-wp-client
echo $buildPath
mkdir $buildPath

## Add stuff to it

### Our PHP Code
cp -R php $buildPath/php
cp -R vendor $buildPath/vendor

### Qualpay Client
mkdir $buildPath/qualpay-client
cp -R qualpay-client/pg $buildPath/qualpay-client/pg
cp -R qualpay-client/platform $buildPath/qualpay-client/platform
cp qualpay-client/index.php $buildPath/qualpay-client/index.php

### Built JavaScript
mkdir $buildPath/build
mkdir $buildPath/build/static
mkdir $buildPath/build/static/js
cp -R build/static/js $buildPath/build/static
cp build/asset-manifest.json $buildPath/build/asset-manifest.json
### Base files
cp readme.txt $buildPath/readme.txt
cp react-wp-scripts.php $buildPath/react-wp-scripts.php
cp LICENSE.txt $buildPath/LICENSE.txt
cp caldera-pay-wp-client.php $buildPath/caldera-pay-wp-client.php

## Make zip and delete build dir
zip -r caldera-pay-wp-client.zip $buildPath -x "*.DS_Store"

rm -rf $buildPath