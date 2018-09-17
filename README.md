# CalderaPay WordPress Client


## Requirements
* Caldera Forms 1.7+
* Easy Digital Downloads
* WordPress 4.9.7+
* PHP 7.0 + 

NOTE: Probably only going to work if your REST API is CalderaForms.com's REST API right now.


## Install
Requires git and Composer and npm and Yarn

* Clone From Github:
    - `git clone git@github.com:CalderaWP/Caldera-Forms.git`
* Install or update everything
    - `bash install.sh`

## Development

### JavaScript
* All JavaScript is developed in `/src`. 
* JavaScript is compiled to `/build`.
* Most of the code lives in [@caldera-labs/caldera-pay-js](https://github.com/CalderaWP/caldera-pay-js/)

### PHP
* All PHP is developed in `/php`

#### Testing
* Run PHP Tests, Lints And Sniffs
    - `composer tests`

* Run Unit Tests:
    - `composer test:unit`

## Release
*To create a ZIP file without development scripts and tests:
    - `composer zip`