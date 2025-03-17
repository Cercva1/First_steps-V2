<?php 
    require_once("Classes3/Banksystem.php");

    $acount = new Banksystem(100);
    $acount -> deposit(134);
    $acount -> withdraw(75);
    $acount -> withdraw(150);



    echo " Your acount contaions ". $acount ->getBalance() . "EUR<br>";

    $acc = new Banksystem(0);
    $acc -> deposit(1);

    echo " <br>Current balance ". $acc -> getBalance() . "EUR";

?>