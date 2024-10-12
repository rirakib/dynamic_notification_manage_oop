<?php 

namespace Methods;
use Methods\Method;
class Email implements Method{

    public $template;

    private $templates = [
        "deposit_template" => "Templates\\Email\\DepositTemplate",
        "withdraw_template" => "Templates\\Email\\WithdrawTemplate",
    ];

    public function send($payloads)
    {
        $template = $this->templates[$this->template];
        $instance = new $template($payloads);
        $instance->getLayout();
    }


}