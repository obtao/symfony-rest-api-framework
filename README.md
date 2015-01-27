Obtao Symfony Rest Api Framework
================================

About
-----

This projet is a Symfony Distribution to build fast Rest API.
This uses the following components :

- [Symfony](http://symfony.com)
- [FOS REST Bundle](http://symfony.com/doc/master/bundles/FOSRestBundle/index.html)
- [JMS Serializer](http://jmsyst.com/libs/serializer)
- [Nelmio Api Doc Bundle](https://github.com/nelmio/NelmioApiDocBundle/blob/master/Resources/doc/index.md)

Requirements
------------

As it uses the Symfony full-stack framework, this framework is only supported on PHP 5.3.9 and up.

Be warned that PHP 5.3.16 has a major bug in the Reflection subsystem and is
not suitable to run Symfony (https://bugs.php.net/bug.php?id=62715)

Installation
------------

Get the sources from Github with Composer

```bash
composer create-project obtao/symfony-rest-api-framework yourProjectPath
```

Install the project as a classic Symfony projet (see the [documentation](http://symfony.com/doc/current/book/installation.html))


Test the API example :

/app_dev.php/api/blob should display a datetime

/app_dev.php/ should display the API documentation



Now you're done.
Remove the Blob entity and the getBlobAction. Then, start to code in the ApiController.