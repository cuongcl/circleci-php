# PHP-CI

> Simple example in PHP to test **Continuous Integration** in different platforms


### Requirements

```sh
$ php --version
PHP >= 7.0
$ composer --version
composer >= 1.6
$ phpunit --version
PHPUnit >= 6.5
```



### Installing

Clone this repository 

```sh

$ git clone https://github.com/cuongcl/circleci-php.git
```

Install with composer

```sh
$ composer install
```

Test

```sh
$ phpunit tests/MyTest.php

or

$ vendor/bin/phpunit tests/MyTest
```