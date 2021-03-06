<?php

namespace App\Http\Controllers;

class Quiz
{
    protected array $questions;

    protected $currentQuestion = 1;


    public function addQuestion(Question $question)
    {
        $this->questions[] = $question;
    }
    public function nextQuestion()
    {
        if(!isset($this->questions[$this->currentQuestion - 1])){
            return false;
        }
        $question = $this->questions[$this->currentQuestion - 1];
        $this->currentQuestion++;
        return $question;

    }
    public function isComplete()
    {
        $answeredQuestions = count(
            array_filter($this->questions, fn($question) => $question->answered())
        );
        $totalQuestions = count($this->questions);
        return $answeredQuestions === $totalQuestions;
    }
    public function questions()
    {
        return $this->questions;
    }
    public function grade()
    {
        // if the quiz is not yet been completed
        // throw and exception
        if(!$this->isComplete()){
            throw new \Exception('This quiz has not yet been completed');
        }

        $correct = count($this->correctlyAnsweredQuestions());
        return ($correct / count($this->questions)) * 100;
    }
    public function correctlyAnsweredQuestions(){
        return array_filter($this->questions, fn($question)=> $question->solved());
    }



}
