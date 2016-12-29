# Dd

使用dd函数代替var_dump当使用非laravel框架时[https://packagist.org/packages/wanfeiyy/dd](https://packagist.org/packages/wanfeiyy/dd)

```php
$arr = ['a'=>'a','b'=>b];
dd($arr);
```

## 	Installation

### With Composer

```
$ composer require wanfeiyy/dd
```

```json
{
    "require": {
        "wanfeiyy/dd": "*"
    }
}
```

```php
<?php
require 'vendor/autoload.php';
$splObjectStorage = new SplObjectStorage();
dd($splObjectStorage);
```

