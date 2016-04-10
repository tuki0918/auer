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
