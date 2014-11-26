MMCI_Philippines
================

Official website of Mega Mitch Credit, Inc. Philippines

[![Latest Stable Version](https://poser.pugx.org/megamitch/megamitch-philippines/v/stable.svg)](https://packagist.org/packages/megamitch/megamitch-philippines) [![Total Downloads](https://poser.pugx.org/megamitch/megamitch-philippines/downloads.svg)](https://packagist.org/packages/megamitch/megamitch-philippines) [![Latest Unstable Version](https://poser.pugx.org/megamitch/megamitch-philippines/v/unstable.svg)](https://packagist.org/packages/megamitch/megamitch-philippines) [![License](https://poser.pugx.org/megamitch/megamitch-philippines/license.svg)](https://packagist.org/packages/megamitch/megamitch-philippines) [![Build Status](https://travis-ci.org/megamitch/MMCI_Philippines.svg)](https://travis-ci.org/megamitch/MMCI_Philippines)

Installation
------------

Using Composer (recommended)
----------------------------
The recommended way to get a working copy of this project is to clone the repository
and use `composer` to install dependencies using the `create-project` command:

    curl -s https://getcomposer.org/installer | php --
    php composer.phar create-project --prefer-source --no-dev megamitch/megamitch-philippines path/to/install

Alternately, clone the repository and manually invoke `composer` using the shipped
`composer.phar`:

    cd my/project/dir
    git clone git://github.com/megamitch/MMCI_Philippines.git
    cd MMCI_Philippines
    git submodule init
    git submodue update
    php composer.phar self-update
    php composer.phar install

(The `self-update` directive is to ensure you have an up-to-date `composer.phar`
available.)