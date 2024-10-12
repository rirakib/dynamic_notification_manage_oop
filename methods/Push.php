<?php 

namespace Methods;
use Methods\Method;
class Push implements Method{

    public function send($message){
        echo $message;
    }
}