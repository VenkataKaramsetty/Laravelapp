<?php

namespace App\Http\Controllers;

class Question
{

    protected $body;
    protected $answer;
    protected $solution;
    protected $correct;
    public function __construct($body, $solution)
    {
        $this->body =  $body;
        $this->solution = $solution;
    }

    public function answer($answer){
        $this->answer = $answer;
        return $this->correct = $answer === $this->solution;
    }

    public function answered(){
        return isset($this->answer);
    }

    public function isCorrect(){
        return $this->correct;
    }
    public function solved(){
        return $this->correct;
    }
}
