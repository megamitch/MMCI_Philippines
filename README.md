Official Mega Mitch Credit, Inc. (Philippines) website
================

[![Latest Stable Version](https://poser.pugx.org/megamitch/megamitch-philippines/v/stable.svg)](https://packagist.org/packages/megamitch/megamitch-philippines) [![Total Downloads](https://poser.pugx.org/megamitch/megamitch-philippines/downloads.svg)](https://packagist.org/packages/megamitch/megamitch-philippines) [![Latest Unstable Version](https://poser.pugx.org/megamitch/megamitch-philippines/v/unstable.svg)](https://packagist.org/packages/megamitch/megamitch-philippines) [![License](https://poser.pugx.org/megamitch/megamitch-philippines/license.svg)](https://packagist.org/packages/megamitch/megamitch-philippines) [![Build Status](https://travis-ci.org/megamitch/MMCI_Philippines.svg)](https://travis-ci.org/megamitch/MMCI_Philippines)

About Us
--------

Mega Mitch Credit, Inc. (MMCI) was incorporated as a Microfinance Institution (MFI) under the laws of the Philippines in 2012. Its headquarters are located in Iligan City (Northern Mindanao). The organization was formed with the purpose of providing social and financial solutions for both individuals and SME’s. MMCI started a micro lending pilot project in October 2011 in 3 barangays (neighborhoods) out of 44 in Iligan City and has started the roll out to other areas in 2012.

MMCI intends to reach out to over 5,000 clients with microloans in the NORTHERN MINDANAO REGION, including the capital of the region, CAGAYAN DE ORO CITY, over the next three years. Having achieved this goal MMCI will analyze market potential to expand its businesses in 2015 to other regions in The Philippines (Caraga and Davao in Mindanao and the Visayas).

Submodules
----------

#### [Mot](https://github.com/megamitch/MOT_Application) [![Latest Stable Version](https://poser.pugx.org/megamitch/mot-application/v/stable.svg)](https://packagist.org/packages/megamitch/mot-application) [![Total Downloads](https://poser.pugx.org/megamitch/mot-application/downloads.svg)](https://packagist.org/packages/megamitch/mot-application) [![Latest Unstable Version](https://poser.pugx.org/megamitch/mot-application/v/unstable.svg)](https://packagist.org/packages/megamitch/mot-application) [![License](https://poser.pugx.org/megamitch/mot-application/license.svg)](https://packagist.org/packages/megamitch/mot-application) [![Build Status](https://travis-ci.org/megamitch/MOT_Application.svg)](https://travis-ci.org/megamitch/MOT_Application) 

Mega Mitch Office Tool (MOT) is an internal application used for day-to-day transaction within Mega Mitch and its clients.

#### [MotAttendance] (https://github.com/megamitch/Attendance) [![Latest Stable Version](https://poser.pugx.org/megamitch/mot-attendance/v/stable.svg)](https://packagist.org/packages/megamitch/mot-attendance) [![Total Downloads](https://poser.pugx.org/megamitch/mot-attendance/downloads.svg)](https://packagist.org/packages/megamitch/mot-attendance) [![Latest Unstable Version](https://poser.pugx.org/megamitch/mot-attendance/v/unstable.svg)](https://packagist.org/packages/megamitch/mot-attendance) [![License](https://poser.pugx.org/megamitch/mot-attendance/license.svg)](https://packagist.org/packages/megamitch/mot-attendance) [![Build Status](https://travis-ci.org/megamitch/Attendance.svg)](https://travis-ci.org/megamitch/Attendance)

Daily transaction report for Mega Mitch Credit, Inc. employees


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