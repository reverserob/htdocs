<?php
/**
 * Created by PhpStorm.
 * User: robertarandazzo
 * Date: 14/05/15
 * Time: 10:37
 */// nome di host
$host = "localhost";



// nome del database
$db = "Registrazione";

// username dell'utente in connessione
$user = "root";

// password dell'utente
$password = "root";


$connessione = new PDO("mysql:host=$host; dbname=$db", $user, $password);
