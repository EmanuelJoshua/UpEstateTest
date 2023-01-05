<?php
class Conection{
    public static function conection(){
        return mysqli_connect("localhost", "EmanuelJoshua", "123456", "UpEstate");
    }
}


