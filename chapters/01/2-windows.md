# Windows

1. 至 [PECL 網站](http://pecl.php.net/package/xdebug/2.2.5/windows) 下載 [Xdebug for PHP 5.5 Thread Safe (TS) x86 版本](http://windows.php.net/downloads/pecl/releases/xdebug/2.2.5/php_xdebug-2.2.5-5.5-ts-vc11-x86.zip) ；注意下載時要確認其版本和 PHP 建置版本一致 (PHP 5.5 VC11 x86 Thread Safe) 。

2. 解開後將 `php_xdebug.dll` 複製到 `C:\PHP\ext` 下。

3. 在 `php.ini` 中加入：

 ```
[Xdebug]
zend_extension=php_xdebug.dll
 ```

4. 以 PHP 模組指令確認 Xdebug 是否有正確安裝：

 ```
C:> php -m
....
[Zend Modules]
Xdebug
 ```

 以 PHP 版本確認，會多出一行 `with Xdebug v2.2.5, Copyright (c) 2002-2014, by Derick Rethans` ：

 ```
C:\> php -v
PHP 5.5.x (cli) (built: Apr 22 2014 18:59:49)
Copyright (c) 1997-2014 The PHP Group
Zend Engine v2.5.0, Copyright (c) 1998-2014 Zend Technologies
    with Xdebug v2.2.5, Copyright (c) 2002-2014, by Derick Rethans
 ```
