<?php 

namespace Templates\Email;
use Templates\Template;



class DepositTemplate implements Template{
    
    private $recipientName;
    private $amount;


    function __construct($payloads)
    {
        $this->recipientName = $payloads["name"];
        $this->amount = $payloads["amount"];
    }

    function getLayout()
    {
        echo "Hello ". $this->recipientName .", Deposit amount ". number_format($this->amount,2);
    }

}