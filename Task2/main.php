<?php

require_once 'Key.php';
require_once 'Wallet.php';
require_once 'BankCard.php';
require_once 'Phone.php';
require_once 'Essential.php';


$keys = new Key();
$wallet = new Wallet();
$bankCard = new BankCard();
$phone = new Phone();

$essentials = new Essential($keys, $wallet, $phone, $bankCard);

?>