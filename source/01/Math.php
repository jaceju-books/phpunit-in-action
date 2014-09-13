<?php // 版本 1 - 利用迴圈來完成：
class Math
{
    public static function sum($min, $max)
    {
        $sum = 0;
        for ($i = $min; $i <= $max; $i++) {
            $sum += $i;
        }
        return $sum;
    }
}