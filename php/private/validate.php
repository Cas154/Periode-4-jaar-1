

<?php
require_once('/xampp/htdocs/phpschool/private/db_connect.php');

$stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
$stmt->execute([$_POST['email']]);
$user = $stmt->fetch();

if ($_POST['password'] == $user['passwd'])
{
    echo "valid!";
} else {
    echo "invalid";
}

?>