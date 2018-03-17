<?php

class Question {

    public $score = 1;
    public function checkAnswer($correctAnswer, $userAnswer){
        return ($correctAnswer === $userAnswer)? $this->score : 0;
    }

}

class MathQuestion extends Question {

    public function checkAnswer($correctAnswer, $userAnswer){
        $correctAnswer = number_format($correctAnswer, 2);
        $userAnswer = number_format($userAnswer, 2);

        return ($correctAnswer === $userAnswer)? $this->score : 0;
    }

}

$question = new MathQuestion();
echo $question->checkAnswer(1, 1.00);

?>