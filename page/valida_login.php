<?php
    include "connect/connection.php";
    session_start();

    $email = $_POST['email'];
    $pass = md5($_POST['password']);
	
	$stmt = $pdo->query("SELECT * FROM users WHERE email = '$email' AND senha = '$pass' LIMIT 1";);
    $stmt->execute;
   
	echo $stmt->rowCount(); 
	if($rows < 1) {
        $_SESSION['loginERRO'] = "Usuário já cadastrado!!";
        echo $_SESSION['loginERRO'];
        header("Location: principal.html");
    }
    else {
        header("Location: principal.html");
    }

?>
