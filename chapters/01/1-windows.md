# Windows

以下介紹在 Windows 上的安裝步驟。

## 手動下載安裝

1. 到 [PHP 官方網站](http://windows.php.net/download/)下載 [PHP 5.5 VC11 x86 Thread Safe 版本](http://windows.php.net/downloads/releases/php-5.5.17-Win32-VC11-x86.zip) 至 C 槽。

1. 將 zip 檔的內容解壓縮到 `C:\PHP` 中，確認 `C:\PHP\php.exe` 存在。

1. 將路徑 `C:\PHP` 設定在 `PATH` 環境變數裡。

1. 將 `C:\PHP\php.ini-development` 複製為 `C:\PHP\php.ini` 。

## 修改 `php.ini`

1. 找到 `; extension_dir = "ext"` ，將最前面的分號 `;` 移除。

1. 找到 `;extension=php_openssl.dll` ，將最前面的分號 `;` 移除。

1. 找到 `;date.timezone =` ，改為 `date.timezone = Asia/Taipei` 。

## 確認安裝成功

1. 執行 `cmd` 來打開命令列  (例如按 `Windows` 鍵 + `R` ，再輸入 `cmd` 後按 `Enter` 鍵執行) 。

1. 執行 `php -v` 確認 PHP 版本：

 ```bash
$ php -v
PHP 5.5.16 (cli) (built: Aug 21 2014 14:25:13)
Copyright (c) 1997-2014 The PHP Group
Zend Engine v2.5.0, Copyright (c) 1998-2014 Zend Technologies
 ```
