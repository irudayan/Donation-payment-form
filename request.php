<?php

require_once 'Atompay.php';

// if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $amount = $_POST['amount'];
    $comments = $_POST['comments'];

// print_r($comments);exit();

    $env = "live"; //test or live
    $login =  320805; //change your username
    $password = '1f5de964'; //change your password
    $product = "WESLEY"; // change your product name
    $currency = "INR"; //change your currency
    $returnUrl = "http://localhost:81/donationpayment/response.php";
    $clientCode = '320805'; //client code
    $account = '320805'; //account
    $requestHashKey = 'c515d61f90181f9413'; //request hash key provided by atom

    $atompay = new Atompay(); //create object of library
    $atompay->atomRequest($env, $login, $password, $product, $amount, $currency, $returnUrl, $clientCode, $name, $email, $mobile, $comments, $address, $account, $requestHashKey); 
// }
