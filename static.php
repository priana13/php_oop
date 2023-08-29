<?php 


class Student {

    public static $grades = ['SD','SMP', 'SMA'];

    private static $totalStudent = 0;

    public static function count(){

        return self::$totalStudent;
    } 

    public static function addStudent($jumlah){

        return self::$totalStudent += $jumlah;
    }

   
}


echo Student::count() . "</br>";

Student::addStudent(5) . "</br>";

echo Student::count() . "</br>";
