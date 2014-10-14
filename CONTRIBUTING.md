# CONTRIBUTING

Mega Mitch Credit, Inc. Office Tool (MOT) and related modules (of which this is one) are open source and licensed
as [MIT](http://opensource.org/licenses/MIT). Contributions
are welcome in the form of issue reports and pull requests.

All pull requests should include unit tests when applicable, and should follow
our coding standards (more on these below); failure to do so may result in
rejection of the pull request. If you need help writing tests, please ask on the
developer mailing list and/or in IRC.

## RESOURCES

If you wish to contribute to MOT modules, please be sure to
read/subscribe to the following resources:

 -  [Coding Standards](https://github.com/zendframework/zf2/wiki/Coding-Standards)
 -  [Git Guide](https://github.com/CodingMatters/MegaOfficeTool/blob/master/README-GIT.md)
 -  [MOT developer support](mailto:support@megamitch.com)

If you are working on new features, refactoring an existing module, or proposing
a new module, please send an email to the developer mailing list.

## REPORTING POTENTIAL SECURITY ISSUES

If you have encountered a potential security vulnerability in any MOT
module, please report it to us at [support@megamitch.com](mailto:support@megamitch.com).
We will work with you to verify the vulnerability and patch it.

When reporting issues, please provide the following information:

- Module(s) affected
- A description indicating how to reproduce the issue
- A summary of the security vulnerability and impact

We request that you contact us via the email address above and give the project
contributors a chance to resolve the vulnerability and issue a new release prior
to any public exposure; this helps protect MOT users, and provides them
with a chance to upgrade and/or update in order to protect their applications.

For sensitive email communications, please use 
[our PGP key](http://megamitch.com/security-pgp-key.asc).

## CONTRIBUTORS AND COMMITTERS

Both Mega Mitch's internal software project team and the members of Coding Matters development
team have push privileges to the MOT repository.

## RUNNING TESTS

First, use [Composer](https://getcomposer.org) to install all dependencies:

```console
$ composer install
```

To run tests, use the PHPUnit executable installed by Composer:

```console
$ ./vendor/bin/phpunit
```

## CODING STANDARDS

While MOT uses Zend Framework 2 coding standards, in practice, we check
standards using [php-cs-fixer](https://github.com/fabpot/PHP-CS-Fixer) (which is
installed via Composer with other dependencies). To check for CS issues:

```console
$ ./vendor/bin/php-cs-fixer fix . --dry-run
```

This will report CS issues. Alternately, you can have the tool fix them for you
by omitting the `--dry-run` switch:

```console
$ ./vendor/bin/php-cs-fixer fix .
```