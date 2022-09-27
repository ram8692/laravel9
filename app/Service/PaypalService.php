<?php

namespace App\Service;

use Illuminate\Support\Arr;

class PaypalService
{


    private $transactionid;

    public function __construct($transactionid)
    {
        $this->transactionid = $transactionid;
    }


    public function pay(): array
    {
        return [
            'amount' => '10000',
            'transaction_id' => $this->transactionid
        ];
    }
}
