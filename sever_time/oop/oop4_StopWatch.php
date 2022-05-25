<?php
class StopWatch{
    public $startTime;//4h50
    public $endTime;
    public function __construct(){
        $this->startTime = microtime(true); 
    }
    public function start(){
        $this->startTime = microtime(true); 
    }
    public function stop(){
        $this->endTime  = microtime(true); 
    }
    public function getElapsedTime(){
        return $this->endTime - $this->startTime;
    }
}

//khởi tạo đối tượng:
 $StopWatch = new StopWatch();
 $StopWatch->start();

 for ($i = 0; $i <500000; $i++){

 }

 $StopWatch->stop();//4h51

 echo $StopWatch->getElapsedTime();


 

