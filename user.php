<?php 


class User {

    public $name;
    public $email;
    public $phone_number = '-';

}


class Customer extends User {

    public $id_pelanggan = '-';

    public function info_user(){

        return "Info User:<br> Name: {$this->name} </br> Email: {$this->email} <br> Phone Number: {$this->phone_number} <br> ID Pel: {$this->id_pelanggan}";
    }
}


class Reseller extends User{

    
}


class Admin extends User {

    public $id_karyawan = '-';

    public function info_user(){

        return "Info User:<br> Name: {$this->name} </br> Email: {$this->email} <br> Phone Number: {$this->phone_number} <br> ID Karyawan: {$this->id_karyawan}";
    }

}




$cus1 = new Customer();
$cus1->name = "Priana";
$cus1->email = "herian.sap@gmail.com";
$cus1->phone_number = "08995544444";
$cus1->id_pelanggan = "2254444";

$admin1 = new Admin();
$admin1->name = "Priana";
$admin1->email = "herian.sap@gmail.com";
$admin1->phone_number = "08995544444";

echo $cus1->info_user();

echo '<br><br>';

echo $admin1->info_user();




