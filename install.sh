#!/bin/bash
#Capture this directory
thisDir=${PWD}

# Include useful functions
if [ ! -f composer.lock ]; then
    composer install
fi
if [ -f composer.lock ]; then
    composer update
fi



# Payment gateway client
cd qualpay-client/pg
pwd
if [ ! -f composer.lock ]; then
    composer install
fi
if [ -f composer.lock ]; then
    composer update
fi
cd $thisDir
pwd

#platform client
cd qualpay-client/platform
pwd
if [ ! -f composer.lock ]; then
    composer install
fi
if [ -f composer.lock ]; then
    composer update
fi