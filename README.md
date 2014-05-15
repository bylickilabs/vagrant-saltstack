# StartUp-StartUp

The aim of this project is to **StartUp** a **StartUp** with a working example `Continuous Integration & Delivery` pipeline.

---

## Overview

### Environment

* Vagrant
* SaltStack


### Automated testing

* Codeception - testing framework
* TravisCI - contiuous integration
    * Unit tests
    * Integration tests
    * End-to-end tests
* Coveralls - code coverage
* EagleEye - dependency version
* Scrutinizer - static code analysis

---

## Building Development Environment with Vagrant & SaltStack

```
vagrant up
```

This will take about 15mins depending on your internet connection.

It will install everything you need:

* Ubuntu 12.04LTS (Linux)
* PHP 5.5
* Apache 2.4 with virtual host (vhost) for this project
* Git
* A few little extra tools (check salt/roots/salt for more details)

---

## Running test suite

1. Download Composer

```
php -r "readfile('https://getcomposer.org/installer');" | php
```

2. Download dependencies using `Composer`

```
php composer.phar install
```

3. Run test suite

```
vendor/bin/codecept run
```

Example output

```
vagrant@precise64:/var/www/dev-confidence/startup-startup$ vendor/bin/codecept run
Codeception PHP Testing Framework v1.8.5
Powered by PHPUnit 3.7.37 by Sebastian Bergmann.

Acceptance Tests (3) ------------------------------------------------
Trying to ensure that homepage works (HomepageCept.php)         Ok
Trying to sign in (LoginCept.php)                               Ok
Trying to ensure that user list page works (UserCept.php)       Ok
---------------------------------------------------------------------

Functional Tests (0) ------------------------
---------------------------------------------

Unit Tests (0) ------------------------------
---------------------------------------------


Time: 285 ms, Memory: 9.50Mb

OK (3 tests, 7 assertions)
```
