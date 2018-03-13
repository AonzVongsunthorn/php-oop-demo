<?php
/*
 * Author: Aonz Vongsunthorn
 * 2018/02/01
 */

class Math{

    public static $pie = 3.14;

    public static function getPie() {
        return self::$pie;
    }

    public static function displayPie() {
        echo "Value of Pie is ". self::$pie;
    }

}
$aa = new Math;
echo $aa->getPie();

echo '<br/>';

Math::displayPie();

?>