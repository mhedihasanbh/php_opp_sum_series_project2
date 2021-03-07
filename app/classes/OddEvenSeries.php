<?php


namespace App\classes;


class OddEvenSeries
{
    public $startingNumber;
    public $endingNumber;
    public $result= [];
    public $index;
    public $oddNumber;
    public $evenNumber;
    public function __construct($data)
    {
        $this->startingNumber=$data['odd_number'];
        $this->endingNumber  =$data['even_number'];

    }
    public function OddEvenNumber(){
        for($this->index=$this->startingNumber;$this->index<=$this->endingNumber;$this->index++){
           if ($this->index%2==0)
           {
           $this->oddNumber .=$this->index.',';
           }
           else{
               $this->evenNumber.=$this->index.',';
           }
        }
        $this->result=[
            'odd'=>'This is odd number:'.$this->oddNumber,
            'even'=>'this is even number:'.$this->evenNumber
            ];
        return $this->result;
//        echo $this->oddNumber;
//        echo $this->evenNumber;
    }
}