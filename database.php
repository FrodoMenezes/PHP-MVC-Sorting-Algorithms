<?php 
    date_default_timezone_set('America/Sao_Paulo');
    $pdo = new PDO('mysql:host=localhost;dbname=sort_al','root','');

    if(isset($_POST['acao'])) {
        $name = $_POST['name'];
        $last_name = $_POST['last_name'];
        $first_record = date('Y-m-d H:i:s');

        $sql = $pdo->prepare("INSERT INTO `users` VALUES (NULL,?,?,?)");

        $sql->execute(array($name,$last_name,$first_record));
        echo "Success! New user added.";
    }

    // $sql = $pdo->prepare("INSERT INTO `users` VALUES (NULL, 'user', 'test', '2022-12-07 13:15:34.000000')");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert DB test</title>
</head>
<body>
    <form method="post">

        <input type="text" name="name" require />
        <input type="text" name="last_name" require />
        <input type="submit" name="acao" value="Sent!" />
        <!-- <input type="text" name="last_record" require /> -->
        
    </form>
</body>
</html>