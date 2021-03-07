<?php


namespace App\classes;


class StringWordCalculation
{
    public $string;
    public $result=[];
    public function __construct($data)
    {
        $this->string = $data['string_number'];
    }
    public function wordCharacterCount(){
         $totalWord= str_word_count($this->string);
         $totalCharacter= strlen($this->string);

         $this->result=[
             'word'       =>  '$totalWord',
             'character'  =>  '$totalCharacter',
         ];
         return $this->result;
    }
}