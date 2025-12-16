<?php

require_once 'Key.php';
require_once 'Wallet.php';
require_once 'BankCard.php';
require_once 'Phone.php';
class Essential{

    private $keys;
    private $wallet;
    private $phone;
    private $bankCard;


    public function __construct(Key $keys, Wallet $wallet, Phone $phone, BankCard $bankCard) {
        $this->keys = $keys;
        $this->wallet = $wallet;
        $this->phone = $phone;
        $this->bankCard = $bankCard;
        echo "You left your home with all the essential objects :)";
    }


}
   
?>