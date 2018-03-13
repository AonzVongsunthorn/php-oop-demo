<?php
/*
 * Author: Aonz Vongsunthorn
 * 2018/02/01
 */

class Course
{

    public $courseTitle;
    public $subject;
    private $price;

    function __construct()
    {
        echo "Welcome.<br/> ";
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function displayCourseDetial(){
        echo $this->courseTitle." is related with ".$this->subject." and the price is ".$this->price. "<br/>";
    }

    function __destruct()
    {
        echo "Bye.";
    }

}

$course = new Course();

$course->courseTitle = "Grammar 1";
$course->subject = "English";
$course->setPrice(199);

$course->displayCourseDetial();
$course->displayCoursePrice();