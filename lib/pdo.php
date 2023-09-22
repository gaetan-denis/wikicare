<?php

function connect()
{
    global $connect;

    if(is_a($connect,'PDO')){
        return $connect;
    }else {
        try{
            $connect=new PDO('mysql:host='. DB_HOST. ';dbname='. DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);
            $connect->setAttribute(PDO:: ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $exception){
           die('Échec de la connexion à la base de donnée'. $exception->getMessage());
        }
        return $connect;
    }
}
