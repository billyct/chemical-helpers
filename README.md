# xixi-helpers
[![Build Status](https://travis-ci.org/billyct/xixi-helpers.svg?branch=master)](https://travis-ci.org/billyct/xixi-helpers)
> XiXi helper functions contain Chemical etc.

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

### month_abbreviation_en($date)
convert date('M') to the right month abbreviation

### is_none($value)
check `$value` is safe substance c-l-inventories

### is_no_data_available($value)
check `$value` is no data available, is same as is_null

### is_hazard($value)
not is_none and not is_no_data_available

### range_split($value)
split range string, '12 - 90%' get ['12', '90%']

### str_to_float($value)
convert string to float, it support negative number, for example: '-9.8%' get -9.8

### is_dangerous_ph($pH)
check the pH value is dangerous pH


## License

MIT © [billyct](https://xixisys.com)
