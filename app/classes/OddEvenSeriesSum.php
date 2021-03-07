<?php


namespace App\classes;


class OddEvenSeriesSum
{
     public $fastNumber;
     public $lastNumber;
     public $result= [];
     public $index;
     public $total;
     public $number;
 public function __construct($data)
 {
     $this->fastNumber =$data['first_number'];
     $this->lastNumber =$data['last_number'];
     $this->total=0;
 }
 public function sum(){
     for($this->index = $this->fastNumber;$this->index<=$this->lastNumber;$this->index++){
       $this->number.=$this->index.'+';
        $this->total+=$this->index;
     }
     return 'Result is:'.rtrim($this->number,' + ').' ='.$this->total;
 }
}