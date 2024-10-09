<?php
 require_once('db.php');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (empty($name) || empty($email) || empty($password)){
    echo "Заполните все поля";
}

$sql = "INSERT INTO `users` (login,pass,email) VALUES ('$name', '$password', '$email')";

$conn -> query($sql);

?>

<script>
    window.location.href = '1.html';
</script>