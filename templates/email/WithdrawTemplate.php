<?php 

namespace Templates\Email;

class WithdrawTemplate{
    
    private $recipientName;
    private $amount;


    function __construct($payloads)
    {
        $this->recipientName = $payloads["name"];
        $this->amount = $payloads["amount"];
    }

    function getLayout()
    {
        echo "Hello ". $this->recipientName .", Withdraw amount ". number_format($this->amount,2);
    }

}