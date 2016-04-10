[![Latest Stable Version](https://poser.pugx.org/tuki0918/auer/v/stable)](https://packagist.org/packages/tuki0918/auer) 
[![Total Downloads](https://poser.pugx.org/tuki0918/auer/downloads)](https://packagist.org/packages/tuki0918/auer) 
[![Latest Unstable Version](https://poser.pugx.org/tuki0918/auer/v/unstable)](https://packagist.org/packages/tuki0918/auer) 
[![License](https://poser.pugx.org/tuki0918/auer/license)](https://packagist.org/packages/tuki0918/auer)

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
