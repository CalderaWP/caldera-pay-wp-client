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
    
    
### Install Local Development Environment
A  local development environment is included, and provided. It is used for integration tests. Requires Composer, Docker and Docker Compose.

* Install Local Environment And WordPress "Unit" Test Suite
- `composer wp:install`

You should now have WordPress at [http://localhost:8118/](http://localhost:8118/)
* Username: admin
* password: password

### Using Already Installed Local Development Environment

* (re)Start Server: Once server is installed, you can start it again
- `composer wp:start`

* (re)Activate Plugins
- `composer wp:activate`

* (re)Set WordPress permalinks
- `composer wp:config`

### Testing With Local Environment
Tests will also run in Travis on each push. You should also run tests locally as you develop.

#### Install Test Suites
Follow the steps above to create local development environment, then you can use the commands listed in the next section.
### Install Local Development Environment
A  local development environment is included, and provided. It is used for integration tests. Requires Composer, Docker and Docker Compose.

* Install Local Environment And WordPress "Unit" Test Suite
- `composer wp:install`


You should now have WordPress at [http://localhost:8888/](http://localhost:8888/)
* Username: admin
* password: password

### Using Already Installed Local Development Environment

* (re)Start Server: Once server is installed, you can start it again
- `composer wp:start`

* (re)Activate Plugins
- `composer cf:activate`

* (re)Set WordPress permalinks
- `composer wp:config`

### Testing With Local Environment
Tests will also run in Travis on each push. You should also run tests locally as you develop.

#### Install Test Suites
Follow the steps above to create local development environment, then you can use the commands listed in the next section.
