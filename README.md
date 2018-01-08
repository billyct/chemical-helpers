# xixi-helpers
[![Build Status](https://travis-ci.org/billyct/xixi-helpers.svg?branch=master)](https://travis-ci.org/billyct/xixi-helpers)
> Chemical helper functions

## Install
```
composer require billyct/xixi-helpers
```

## Usage
```php
require_once './vendor/autoload.php';

is_cas('50-00-0');
// => true

is_ec('254-559-2');
// => true
```


## API

### reg_cas()
reg for CAS numbers

### reg_ec()
reg for EC numbers

### is_cas($value)
check `$value` is CAS number

### is_ec($value)
check `$value` is EC number

## License

MIT © [billyct](https://xixisys.com)
