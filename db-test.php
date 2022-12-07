<?php 

/*

    // DB CONECTION
    
    $pdo = new PDO('mysql:host=localhost;dbname=sort_al','root','');

    // INSERT

    $sql = $pdo->prepare("INSERT INTO `users` VALUES (NULL, 'user', 'test', '2022-12-07 13:15:34.000000')");

    // UPDATE

        $sql = $pdo->prepare("UPDATE `users` SET last_name='test' WHERE id='2'");

    // DELETE
    
    $id = 4;

    $sql = $pdo->prepare("DELETE FROM `users` WHERE id=?");


*   WARNING! SQL INJECTION WARNING!
*
*   ALWAYS USE VARIABLES TO PROTECT YOURSELF FROM SQL INJECTION!
*
*   WARNING! SQL INJECTION WARNING!


    // FOR U TO TEST

    if($sql->execute()) {
        echo 'done';
    }

    if($sql->execute([$id])) {
        echo 'done';
    }

*/
