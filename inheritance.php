<?php
/*
 * Author: Aonz Vongsunthorn
 * 2018/02/05
 */


class Test {

     public $title;
     private $totalScore;
     protected $isFulfillAnswerEnable;

    public function setTotalScore($score){
        $this->totalScore = $score;
    }

    public function getTotalScore(){
        return $this->totalScore;
    }

}

class MathTest extends Test {

    public $isAllowFulfillDecimalAnswer;

    public function setFulfillAnswerEnable($isFulfillAnswerEnable){

        $this->isFulfillAnswerEnable = $isFulfillAnswerEnable;

    }

    public function getFulfillAnswerEnable(){

        return $this->isFulfillAnswerEnable;

    }

    public function displayAnswerDetail(){

       $answerDetail = $this->title .' '.( ($this->getFulfillAnswerEnable()) ? '' : 'not ' ). 'allow fulfill answer';
       if($this->getFulfillAnswerEnable() ){
          $answerDetail .= ' and you can '.( ( $this->isAllowFulfillDecimalAnswer )? '' : 'not' ). ' fulfill decimal answer.';
       }

       echo $answerDetail;
    }

    public function displayTestDetail(){

        echo $this->title .' the total score is '.parent::getTotalScore().' point(s)';

    }

}

$preTest = new MathTest();

$preTest->title = "Calculus 1";
$preTest->setTotalScore(20);
$preTest->setFulfillAnswerEnable(true);
$preTest->isAllowFulfillDecimalAnswer = false;


$preTest->displayTestDetail();
echo '<br/>';
$preTest->displayAnswerDetail();



?>