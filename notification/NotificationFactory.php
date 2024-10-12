<?php 

namespace Notification;
use Methods\Email;
use Methods\Push;
use Helpers\Helper;

class NotificationFactory{

    protected $via = [];
    public static function methods(array $methods){
        foreach($methods as $method){
            switch ($method) {
                case Helper::EMAIL:
                    $via[] = new Email();
                    break;
                case Helper::PUSH:
                    $via[] = new Push();
                    break;
            }
        }

        return $via;
    }

    public static function sendVia(array $via,$values){
        foreach($via as $ins)
        {
            if($ins instanceof Email){
                $ins->template = $values['email']['template'];
                $ins->send($values['email']['data']);
            }else if($ins instanceof Push){
                $ins->send($values["push"]["message"]);
            }
        }
    }

}