<?php

require_once("./autoload.php");

use Notification\NotificationFactory;
use Helpers\Helper;

$via = NotificationFactory::methods(methods: [Helper::EMAIL,Helper::PUSH]);


$data = [
    "email" => [
        "template" => "deposit_template",
        "data" => [
            "name" => "Rakib",
            "amount" => 300
        ]
    ],
    "push"=>[
        "message" => "Deposit completed"
    ]
];
NotificationFactory::sendVia($via,$data);
