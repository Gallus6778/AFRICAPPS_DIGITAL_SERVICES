<?php

    try
    {
//         $bdd = new PDO ('mysql:host=185.98.131.128;dbname=afric1389753;charset=utf8', 'afric1389753', 'zY7DSqFJH54gT1',
        $bdd = new PDO ('mysql:host=localhost;dbname=afric_app_digital_services;charset=utf8', 'root', '',
                        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
        die (' Erreur : ' . $e -> getMessage());
    }

    
    