[![Build Status](https://travis-ci.org/tuki0918/auer.svg?branch=master)](https://travis-ci.org/tuki0918/auer)
[![Latest Stable Version](https://poser.pugx.org/tuki0918/auer/v/stable)](https://packagist.org/packages/tuki0918/auer)
[![Latest Unstable Version](https://poser.pugx.org/tuki0918/auer/v/unstable)](https://packagist.org/packages/tuki0918/auer)
[![Coverage Status](https://coveralls.io/repos/github/tuki0918/auer/badge.svg?branch=master)](https://coveralls.io/github/tuki0918/auer?branch=master)
[![Total Downloads](https://poser.pugx.org/tuki0918/auer/downloads)](https://packagist.org/packages/tuki0918/auer)
[![License](https://poser.pugx.org/tuki0918/auer/license)](https://packagist.org/packages/tuki0918/auer)

## Auer



## Basic Usage

```php
<?php
use Auer\Log\Logger;

Logger::init('/path/to/app.log');

Logger::push()->info('info');
Logger::push()->error('errrrr');

# /path/to/app-2016-01-01.log
[2016-01-01 12:00:00] app.INFO: info [] []
[2016-01-01 12:00:01] app.ERROR: errrrr [] []
```

## ENV

```
export COVERALLS_RUN_LOCALLY=1
export COVERALLS_REPO_TOKEN=*****
```
