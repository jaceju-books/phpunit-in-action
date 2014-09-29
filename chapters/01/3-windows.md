# Windows

1. 下載 https://getcomposer.org/composer.phar ，將它放在 `C:\PHP` 下。

1. 打開命令行來建立 Windows 命令：

 ```
C:> cd C:\PHP
C:\PHP> echo @php "%~dp0composer.phar" %* > composer.cmd
C:\PHP> exit
 ```

1. 另外開啟一個命令列，確認 `composer` 指令可執行。

 ```
C:\> composer -V
Composer version xxxxxx 2014-08-11 15:46:48
 ```
